<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_5ef987be0942c4da7f4dd45f59e0d63ec0c6a687958274f4efd0a63f57804514 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tGuinot bibliotheque
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t<style>
\t\tbody {
\t\t\tbackground-color: #70A99E;
\t\t}
\t\t.responsive {
\t\t\twidth: 100%;
\t\t\theight: auto;
\t\t}
\t</style>

\t<div  style=\"background-color: #70A99E mb-10\">
\t\t<h1 class=\"display-3 mt-15 mb-5\">
\t\t\tBienvenue sur bibliothèque Guinot! 
\t\t</h1>
\t\t";
        // line 23
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "\t\t\t<a type=\"button\" class=\"btn btn-warning btn-lg\" style=\" position: relative; float: right;\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">
\t\t\t\tConnexion
\t\t\t</a>
\t\t";
        }
        // line 28
        echo "\t\t<p class=\"lead\">
\t\t\tDe nombreuses ouvrages à venir decouvrir dans nos base de donnés.
\t\t</p>
\t\t<hr class=\"my-4\">
\t\t<p class=\"lead\">
\t\t\t<a class=\"btn btn-danger\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_index");
        echo "\" role=\" button\">
\t\t\t\tLivres
\t\t\t</a>

\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CD_index");
        echo "\" role=\"button\">
\t\t\t\tCd-Rom
\t\t\t</a>

\t\t\t<a class=\"btn btn-info\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_paper_index");
        echo "\" role=\"button\">
\t\t\t\tJournaux
\t\t\t</a>

\t\t\t<a class=\"btn btn-secondary\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_film_index");
        echo "\" role=\" button\">
\t\t\t\tMicro Films
\t\t\t</a>
\t\t</p>
\t</div>

\t
\t\t<div class=\"example-wrapper\">
\t\t\t";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
            // line 54
            echo "\t\t\t\t<h1>
\t\t\t\t\t✅\tBonjour
\t\t\t\t\t";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "firstname", [], "any", false, false, false, 56), "html", null, true);
            echo "
\t\t\t\t\t!
\t\t\t\t\t<img src=\"image/2360.jpg\" alt=\"picturesalonbibliotheque\" class=\"responsive\"/>

\t\t\t\t</h1>
\t\t\t\t<p>
\t\t\t\t\t";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "roles", [], "any", false, false, false, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 63
                echo "\t\t\t\t\t\t";
                if ((0 === twig_compare($context["role"], "ROLE_USER"))) {
                    // line 64
                    echo "\t\t\t\t\t\t\tUser
\t\t\t\t\t\t";
                } elseif ((0 === twig_compare(                // line 65
$context["role"], "ROLE_ADMIN"))) {
                    // line 66
                    echo "\t\t\t\t\t\t\tAdministrator
\t\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t</p>
\t\t\t";
        } else {
            // line 71
            echo "

\t\t\t\t<img src=\"image/2360.jpg\" alt=\"picturesalonbibliotheque\" class=\"responsive\"/>


\t\t\t";
        }
        // line 77
        echo "\t\t</div>
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 77,  197 => 71,  193 => 69,  187 => 68,  183 => 66,  181 => 65,  178 => 64,  175 => 63,  171 => 62,  162 => 56,  158 => 54,  156 => 53,  145 => 45,  138 => 41,  131 => 37,  124 => 33,  117 => 28,  109 => 24,  107 => 23,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tGuinot bibliotheque
{% endblock %}

{% block body %}

\t<style>
\t\tbody {
\t\t\tbackground-color: #70A99E;
\t\t}
\t\t.responsive {
\t\t\twidth: 100%;
\t\t\theight: auto;
\t\t}
\t</style>

\t<div  style=\"background-color: #70A99E mb-10\">
\t\t<h1 class=\"display-3 mt-15 mb-5\">
\t\t\tBienvenue sur bibliothèque Guinot! 
\t\t</h1>
\t\t{% if not app.user %}
\t\t\t<a type=\"button\" class=\"btn btn-warning btn-lg\" style=\" position: relative; float: right;\" href=\"{{path('app_login')}}\">
\t\t\t\tConnexion
\t\t\t</a>
\t\t{% endif %}
\t\t<p class=\"lead\">
\t\t\tDe nombreuses ouvrages à venir decouvrir dans nos base de donnés.
\t\t</p>
\t\t<hr class=\"my-4\">
\t\t<p class=\"lead\">
\t\t\t<a class=\"btn btn-danger\" href=\"{{path('livre_index')}}\" role=\" button\">
\t\t\t\tLivres
\t\t\t</a>

\t\t\t<a class=\"btn btn-success\" href=\"{{path('CD_index')}}\" role=\"button\">
\t\t\t\tCd-Rom
\t\t\t</a>

\t\t\t<a class=\"btn btn-info\" href=\"{{path('news_paper_index')}}\" role=\"button\">
\t\t\t\tJournaux
\t\t\t</a>

\t\t\t<a class=\"btn btn-secondary\" href=\"{{path('micro_film_index')}}\" role=\" button\">
\t\t\t\tMicro Films
\t\t\t</a>
\t\t</p>
\t</div>

\t
\t\t<div class=\"example-wrapper\">
\t\t\t{% if app.user %}
\t\t\t\t<h1>
\t\t\t\t\t✅\tBonjour
\t\t\t\t\t{{ app.user.firstname }}
\t\t\t\t\t!
\t\t\t\t\t<img src=\"image/2360.jpg\" alt=\"picturesalonbibliotheque\" class=\"responsive\"/>

\t\t\t\t</h1>
\t\t\t\t<p>
\t\t\t\t\t{% for role in app. user.roles %}
\t\t\t\t\t\t{% if role == \"ROLE_USER\" %}
\t\t\t\t\t\t\tUser
\t\t\t\t\t\t{% elseif role == \"ROLE_ADMIN\" %}
\t\t\t\t\t\t\tAdministrator
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</p>
\t\t\t{% else %}


\t\t\t\t<img src=\"image/2360.jpg\" alt=\"picturesalonbibliotheque\" class=\"responsive\"/>


\t\t\t{% endif %}
\t\t</div>
\t
{% endblock %}
", "home/index.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/GuinotBibliotheque/templates/home/index.html.twig");
    }
}
