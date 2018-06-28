<?php

namespace Kevin\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Advert
 *
 * @ORM\Table(name="advert")
 * @ORM\Entity(repositoryClass="Kevin\PlatformBundle\Repository\AdvertRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Advert
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
    * @ORM\Column(name="published", type="boolean")
    */
    private $published = true;

    /**
    * @ORM\OneToMany(targetEntity="Kevin\PlatformBundle\Entity\Application", mappedBy="advert")
    */
    private $applications; // Notez le « s », une annonce est liée à plusieurs candidatures

    /**
    * @ORM\OneToOne(targetEntity="Kevin\PlatformBundle\Entity\Image", cascade={"persist"})
    */
    private $image;

    /**
     * @ORM\ManyToMany(targetEntity="Kevin\PlatformBundle\Entity\Category", cascade={"persist"})
     */
    private $categories;

    /**
    * @ORM\Column(name="updated_at", type="datetime", nullable=true)
    */
    private $updatedAt;

    /**
    * @ORM\Column(name="nb_applications", type="integer")
    */
    private $nbApplications = 0;

    /**
    * @Gedmo\Slug(fields={"title"})
    * @ORM\Column(name="slug", type="string", length=255, unique=true)
    */
    private $slug;

    public function __construct()
    {
        // Par défaut, la date de l'annonce est la date d'aujourd'hui
        $this->date = new \Datetime();
        $this->categories = new ArrayCollection();
        $this->application = new ArrayCollection();
    }


    /**
    * @ORM\PreUpdate
    */
    public function updateDate()
    {
        $this->setUpdatedAt(new \Datetime());
    }

    public function increaseApplication()
    {
        $this->nbApplications++;
    }

    public function decreaseApplication()
    {
        $this->nbApplications--;
    }

    /**
    * @return int
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * @param \DateTime $date
    */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
    * @return \DateTime
    */
    public function getDate()
    {
        return $this->date;
    }

    /**
    * @param string $title
    */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
    * @return string
    */
    public function getTitle()
    {
        return $this->title;
    }

    /**
    * @param string $author
    */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
    * @return string
    */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
    * @param string $content
    */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
    * @return string
    */
    public function getContent()
    {
        return $this->content;
    }

    /**
    * @param bool $published
    */
    public function setPublished($published)
    {
        $this->published = $published;
    }

    /**
    * @return bool
    */
    public function getPublished()
    {
        return $this->published;
    }

    public function setImage(Image $image = null)
    {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    /**
    * @param Category $category
    */
    public function addCategory(Category $category)
    {
        $this->categories[] = $category;
    }

    /**
    * @param Category $category
    */
    public function removeCategory(Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
    * @return ArrayCollection
    */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
    * @param Application $application
    */
    public function addApplication(Application $application)
    {
        $this->applications[] = $application;

        // On lie l'annonce à la candidature
        $application->setAdvert($this);
    }

    /**
    * @param Application $application
    */
    public function removeApplication(Application $application)
    {
        $this->applications->removeElement($application);
    }

    /**
    * @return \Doctrine\Common\Collections\Collection
    */
    public function getApplications()
    {
        return $this->applications;
    }

    /**
    * @param \DateTime $updatedAt
    */
    public function setUpdatedAt(\Datetime $updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
    * @param integer $nbApplications
    */
    public function setNbApplications($nbApplications)
    {
        $this->nbApplications = $nbApplications;
    }

    /**
    * @return integer
    */
        public function getNbApplications()
    {
    return $this->nbApplications;
    }

    /**
    * @param string $slug
    */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
    * @return string
    */
    public function getSlug()
    {
        return $this->slug;
    }


}
