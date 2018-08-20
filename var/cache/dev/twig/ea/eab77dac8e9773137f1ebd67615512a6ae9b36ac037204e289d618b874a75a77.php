<?php

/* KevinPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_54523222a259678b2133901576174f1f39502c0fcfe62a909974d6f71560c177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KevinPlatformBundle:Advert:form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KevinPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'annonce</h3>

<div class=\"well\">
 ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 9
        echo "  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

  ";
        // line 11
        if ($this->getAttribute(($context["form"] ?? null), "date", array(), "any", true, true)) {
            // line 12
            echo "  ";
            // line 13
            echo "    <div class=\"form-group\">
    ";
            // line 15
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "date"));
            echo "

    ";
            // line 18
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "

    <div class=\"col-sm-10\">
      ";
            // line 22
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            echo "
    </div>
  </div>
  ";
        }
        // line 26
        echo "
  ";
        // line 28
        echo "  <div class=\"form-group\">
    ";
        // line 30
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'annonce"));
        echo "

    ";
        // line 33
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 37
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 42
        echo "  <div class=\"form-group\">
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de l'annonce"));
        echo "
    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
  \t</div>
 </div>

 <div class=\"form-group\">
   ";
        // line 52
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "author", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Author"));
        echo "

     <div class=\"col-sm-10\">
      ";
        // line 56
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  
  ";
        // line 60
        if ($this->getAttribute(($context["form"] ?? null), "pusblished", array(), "any", true, true)) {
            // line 61
            echo " <div style=\"text-align:center;\">
  ";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "published", array()), 'row');
            echo "
</div>
";
        }
        // line 65
        echo " <div class=\"form-group\">
   ";
        // line 67
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Image"));
        echo "

     <div class=\"col-sm-10\">
      ";
        // line 71
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", array()), 'widget');
        echo "
    </div>
  </div>
 
";
        // line 77
        echo " <div class=\"form-group\">
 <div style=\"width:80%; margin:0 auto;\">
  ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", array()), 'row');
        echo "
  </div>
  </div>
  <a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>


";
        // line 87
        echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

";
        // line 90
        echo "<script type=\"text/javascript\">
  \$(document).ready(function() {
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var \$container = \$('div#kevin_platformbundle_advert_categories');

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = \$container.find(':input').length;

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    \$('#add_category').click(function(e) {
      addCategory(\$container);

      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
      addCategory(\$container);
    } else {
      // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
      \$container.children('div').each(function() {
        addDeleteLink(\$(this));
      });
    }

   
    // La fonction qui ajoute un formulaire CategoryType
    function addCategory(\$container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte \"__name__label__\" qu'il contient par le label du champ
      // - le texte \"__name__\" qu'il contient par le numéro du champ
      var template = \$container.attr('data-prototype')
        .replace(/__name__label__/g, 'Catégorie n°' + (index+1))
        .replace(/__name__/g,        index)
      ;

      // On crée un objet jquery qui contient ce template
      var \$prototype = \$(template);

      // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      addDeleteLink(\$prototype);

      // On ajoute le prototype modifié à la fin de la balise <div>
      \$container.append(\$prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }
    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink(\$prototype) {
      // Création du lien
      var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

      // Ajout du lien
      \$prototype.append(\$deleteLink);

      // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
      \$deleteLink.click(function(e) {
        \$prototype.remove();

        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }
  });
</script>



  ";
        // line 161
        echo "   <div style=\"text-align:right;\">
  ";
        // line 162
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
  </div>

  ";
        // line 168
        echo "  ";
        // line 169
        echo "
  ";
        // line 171
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "KevinPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 171,  261 => 169,  259 => 168,  253 => 162,  250 => 161,  178 => 90,  174 => 87,  165 => 79,  161 => 77,  153 => 71,  146 => 67,  143 => 65,  137 => 62,  134 => 61,  132 => 60,  124 => 56,  117 => 52,  109 => 46,  104 => 44,  100 => 43,  97 => 42,  89 => 37,  82 => 33,  76 => 30,  73 => 28,  70 => 26,  62 => 22,  55 => 18,  49 => 15,  46 => 13,  44 => 12,  42 => 11,  36 => 9,  31 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

<h3>Formulaire d'annonce</h3>

<div class=\"well\">
 {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {# Les erreurs générales du formulaire. #}
  {{ form_errors(form) }}

  {% if form.date is defined %}
  {# Génération du label + error + widget pour un champ. #}
    <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.date, \"date\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.date) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.date) }}
    </div>
  </div>
  {% endif %}

  {# Génération manuelle et éclatée : #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.title, \"Titre de l'annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.title) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {# Idem pour un autre champ. #}
  <div class=\"form-group\">
    {{ form_label(form.content, \"Contenu de l'annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.content) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
  \t</div>
 </div>

 <div class=\"form-group\">
   {# Génération du label. #}
    {{ form_label(form.author, \"Author\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

     <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.author, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>
  
  {% if form.pusblished is defined %}
 <div style=\"text-align:center;\">
  {{ form_row(form.published) }}
</div>
{% endif %}
 <div class=\"form-group\">
   {# Génération du label. #}
    {{ form_label(form.image, \"Image\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

     <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.image) }}
    </div>
  </div>
 
{# Le formulaire reste globalement le même,
   On ne rajoute que le champ catégorie et le lien pour en ajouter #}
 <div class=\"form-group\">
 <div style=\"width:80%; margin:0 auto;\">
  {{ form_row(form.categories) }}
  </div>
  </div>
  <a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>


{# On charge la bibliothèque jQuery. Ici, je la prends depuis le CDN google
   mais si vous l'avez en local, changez simplement l'adresse. #}
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

{# Voici le script en question : #}
<script type=\"text/javascript\">
  \$(document).ready(function() {
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var \$container = \$('div#kevin_platformbundle_advert_categories');

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = \$container.find(':input').length;

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    \$('#add_category').click(function(e) {
      addCategory(\$container);

      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
      addCategory(\$container);
    } else {
      // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
      \$container.children('div').each(function() {
        addDeleteLink(\$(this));
      });
    }

   
    // La fonction qui ajoute un formulaire CategoryType
    function addCategory(\$container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte \"__name__label__\" qu'il contient par le label du champ
      // - le texte \"__name__\" qu'il contient par le numéro du champ
      var template = \$container.attr('data-prototype')
        .replace(/__name__label__/g, 'Catégorie n°' + (index+1))
        .replace(/__name__/g,        index)
      ;

      // On crée un objet jquery qui contient ce template
      var \$prototype = \$(template);

      // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      addDeleteLink(\$prototype);

      // On ajoute le prototype modifié à la fin de la balise <div>
      \$container.append(\$prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }
    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink(\$prototype) {
      // Création du lien
      var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

      // Ajout du lien
      \$prototype.append(\$deleteLink);

      // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
      \$deleteLink.click(function(e) {
        \$prototype.remove();

        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }
  });
</script>



  {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
   <div style=\"text-align:right;\">
  {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}
  </div>

  {# Génération automatique des champs pas encore écrits.
     Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
     et tous les champs cachés (type « hidden »). #}
  {# form_rest(form) #}

  {# Fermeture de la balise <form> du formulaire HTML #}
  {{ form_end(form) }}
</div>", "KevinPlatformBundle:Advert:form.html.twig", "C:\\wamp\\www\\Symfony\\src\\Kevin\\PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
