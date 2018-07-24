<?php

/* KevinPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_d573b00ba0f25b665c9bcb7180e0e75b5ebf3c4da677a53c5907cfacf45149b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("KevinPlatformBundle::layout.html.twig", "KevinPlatformBundle:Advert:view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'kevinplatform_body' => array($this, 'block_kevinplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KevinPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KevinPlatformBundle:Advert:view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KevinPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_kevinplatform_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "kevinplatform_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "kevinplatform_body"));

        // line 10
        echo "
    <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
    ";
        // line 12
        if ( !(null === $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()))) {
            // line 13
            echo "        <div style=display:block\">
            <img style=\"width:50%;\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((((($this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "uploadDir", array()) . "/") . $this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "url", array()))), "html", null, true);
            echo "\"
            alt=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\"\">
        </div>
        ";
        }
        // line 18
        echo "    <i>Par ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

    <div class=\"well\">
        
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
    </div>
    <h3> Candidature </h3>
     ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listApplications"] ?? $this->getContext($context, "listApplications")));
        foreach ($context['_seq'] as $context["_key"] => $context["adverte"]) {
            // line 26
            echo "     <table>
     <tr>   
     <th><p> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["adverte"], "author", array()), "html", null, true);
            echo " </p>
     </th>
     </tr>
     <tr>
     <td><p> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["adverte"], "content", array()), "html", null, true);
            echo " </p>
     </td>
     </tr>
     </table>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adverte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "     <hr/>
    ";
        // line 38
        if ( !$this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 39
            echo "        <p>
            Cette annonce est parue dans les catégories suivantes :
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 42
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 43
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </p>
    ";
        }
        // line 46
        echo "
    ";
        // line 47
        if ((twig_length_filter($this->env, ($context["listAdvertSkills"] ?? $this->getContext($context, "listAdvertSkills"))) > 0)) {
            // line 48
            echo "  <div>
    Cette annonce requiert les compétences suivantes :
    <ul>
      ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listAdvertSkills"] ?? $this->getContext($context, "listAdvertSkills")));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 52
                echo "        <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "    </ul>
  </div>
";
        }
        // line 57
        echo "
    <p>
        <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kevin_platform_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kevin_platform_edit", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kevin_platform_delete", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "KevinPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 67,  227 => 63,  220 => 59,  216 => 57,  211 => 54,  200 => 52,  196 => 51,  191 => 48,  189 => 47,  186 => 46,  182 => 44,  168 => 43,  162 => 42,  145 => 41,  141 => 39,  139 => 38,  136 => 37,  125 => 32,  118 => 28,  114 => 26,  110 => 25,  104 => 22,  94 => 18,  88 => 15,  84 => 14,  81 => 13,  79 => 12,  75 => 11,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

{% extends \"KevinPlatformBundle::layout.html.twig\" %}

{% block title %}
    Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block kevinplatform_body %}

    <h2>{{ advert.title }}</h2>
    {% if advert.image is not null %}
        <div style=display:block\">
            <img style=\"width:50%;\" src=\"{{ asset(advert.image.uploadDir ~ '/' ~ advert.image.id ~ '.' ~ advert.image.url) }}\"
            alt=\"{{ advert.image.alt }}\"\">
        </div>
        {% endif %}
    <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

    <div class=\"well\">
        
        {{ advert.content }}
    </div>
    <h3> Candidature </h3>
     {% for adverte in listApplications %}
     <table>
     <tr>   
     <th><p> {{ adverte.author }} </p>
     </th>
     </tr>
     <tr>
     <td><p> {{ adverte.content }} </p>
     </td>
     </tr>
     </table>
     {% endfor %}
     <hr/>
    {% if not advert.categories.empty %}
        <p>
            Cette annonce est parue dans les catégories suivantes :
            {% for category in advert.categories %}
                {{ category.name }}{% if not loop.last %}, {% endif %}
            {% endfor %}
        </p>
    {% endif %}

    {% if listAdvertSkills|length > 0 %}
  <div>
    Cette annonce requiert les compétences suivantes :
    <ul>
      {% for advertSkill in listAdvertSkills %}
        <li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>
      {% endfor %}
    </ul>
  </div>
{% endif %}

    <p>
        <a href=\"{{ path('kevin_platform_home') }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"{{ path('kevin_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"{{ path('kevin_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>

{% endblock %}", "KevinPlatformBundle:Advert:view.html.twig", "C:\\wamp64\\www\\Symfony\\src\\Kevin\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
