<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace Kevin\PlatformBundle\Controller;

// N'oubliez pas ce use :
use Kevin\PlatformBundle\Form\AdvertType;
use Kevin\PlatformBundle\Form\AdvertEditType;
use Kevin\PlatformBundle\Entity\Advert;
use Kevin\PlatformBundle\Entity\Image;
use Kevin\PlatformBundle\Entity\Application;
use Kevin\PlatformBundle\Entity\Skill;
use Kevin\PlatformBundle\Entity\AdvertSkill;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse; // N'oubliez pas ce use
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AdvertController extends Controller
{
    public function indexAction($page)
    {
        // On ne sait pas combien de pages il y a
        // Mais on sait qu'une page doit être supérieure ou égale à 1
        if ($page < 1) {
            // On déclenche une exception NotFoundHttpException, cela va afficher
            // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
            throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
        }

        $nbPerPage = 3;

            // Pour récupérer la liste de toutes les annonces : on utilise findAll()
        $listAdverts = $this->getDoctrine()
          ->getManager()
          ->getRepository('KevinPlatformBundle:Advert')
          ->getAdverts($page, $nbPerPage)
        ;

        // On calcule le nombre total de pages grâce au count($listAdverts) qui retourne le nombre total d'annonces
        $nbPages = ceil(count($listAdverts) / $nbPerPage);
        if ($page > $nbPages) {
          throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        // Et modifiez le 2nd argument pour injecter notre liste
        return $this->render('KevinPlatformBundle:Advert:index.html.twig', array(
            'listAdverts' => $listAdverts,
            'nbPages'     => $nbPages,
            'page'        => $page,
        ));
    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $advert = $em
          ->getRepository('KevinPlatformBundle:Advert')
          ->find($id)
        ;

        if (null === $advert) {
          throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

        // On avait déjà récupéré la liste des candidatures
        $listApplications = $em
          ->getRepository('KevinPlatformBundle:Application')
          ->findBy(array('advert' => $advert))
        ;

        // On récupère maintenant la liste des AdvertSkill
        $listAdvertSkills = $em
          ->getRepository('KevinPlatformBundle:AdvertSkill')
          ->findBy(array('advert' => $advert))
        ;

        return $this->render('KevinPlatformBundle:Advert:view.html.twig', array(
          'advert'           => $advert,
          'listApplications' => $listApplications,
          'listAdvertSkills' => $listAdvertSkills
        ));
  
        
    }

    public function addAction(Request $request)
    {
    // On crée un objet Advert
    $advert = new Advert();
    $form = $this->get('form.factory')->create(AdvertType::class, $advert);

        // Si la requête est en POST
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
     // $advert->getImage()->upload();
      $em = $this->getDoctrine()->getManager();
      $em->persist($advert);
      $em->flush();

        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

        // On redirige vers la page de visualisation de l'annonce nouvellement créée
        return $this->redirectToRoute('kevin_platform_view', array('id' => $advert->getId()));
      }
    

    // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule
    return $this->render('KevinPlatformBundle:Advert:add.html.twig', array(
      'form' => $form->createView(),
    ));
  
    }

    public function editAction($id, Request $request)
    {
        // Ici, on récupérera l'annonce correspondante à $id
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce $id
        $advert = $em->getRepository('KevinPlatformBundle:Advert')->find($id);
        $form = $this->createForm(AdvertEditType::class, $advert);

        if (null === $advert) {
          throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

        $form = $this->get('form.factory')->create(AdvertEditType::class, $advert);

        // Même mécanisme que pour l'ajout
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em->flush(); 
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

            return $this->redirectToRoute('kevin_platform_view', array('id' => $advert->getId()));
        }

        return $this->render('KevinPlatformBundle:Advert:edit.html.twig', array(
            'advert' => $advert,
            'form' => $form->createView(),
        ));
    }

    public function deleteAction(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();

    $advert = $em->getRepository('KevinPlatformBundle:Advert')->find($id);

    if (null === $advert) {
      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
    }

    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'annonce contre cette faille
    $form = $this->get('form.factory')->create();

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em->remove($advert);
      $em->flush();

      $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

      return $this->redirectToRoute('kevin_platform_home');
    }
    
    return $this->render('KevinPlatformBundle:Advert:delete.html.twig', array(
      'advert' => $advert,
      'form'   => $form->createView(),
    ));
  }

    public function menuAction($limit)
    {
        $em = $this->getDoctrine()->getManager();

        $listAdverts = $em->getRepository('KevinPlatformBundle:Advert')->findBy(
          array(),                 // Pas de critère
          array('date' => 'desc'), // On trie par date décroissante
          $limit,                  // On sélectionne $limit annonces
          0                        // À partir du premier
        );

        return $this->render('KevinPlatformBundle:Advert:menu.html.twig', array(
            // Tout l'intérêt est ici : le contrôleur passe
            // les variables nécessaires au template !
            'listAdverts' => $listAdverts
        ));
    }

    public function editImageAction($advertId)
    {
        $em = $this->getDoctrine()->getManager();

        // On récupère l'annonce
        $advert = $em->getRepository('KevinPlatformBundle:Advert')->find($advertId);

        // On modifie l'URL de l'image par exemple
        $advert->getImage()->setUrl('test.png');

        // On n'a pas besoin de persister l'annonce ni l'image.
        // Rappelez-vous, ces entités sont automatiquement persistées car
        // on les a récupérées depuis Doctrine lui-même

        // On déclenche la modification
        $em->flush();

        return new Response('OK');
    }

}