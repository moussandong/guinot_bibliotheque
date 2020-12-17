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

/* security/login.html.twig */
class __TwigTemplate_331f1645358211b05c5492b7281056b588c25a6b7ba3ca3d9900dffdab2a00c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "\t<style>
\t\tbody {
\t\t\tbackground-color: #70A99E;
\t\t}
\t\t.responsive {
\t\t\twidth: 100%;
\t\t\theight: auto;
\t\t}
\t</style>

\t<div class=\"jumbotron\" style=\"background-color: #70A99E\">
\t\t<h1 class=\"display-3\">Bienvenue sur bibliothèque Guinot!</h1>
\t\t";
        // line 17
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            echo "\t\t\t<a type=\"button\" class=\"btn btn-warning btn-lg\" style=\" position: relative; float: right;\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
\t\t";
        }
        // line 20
        echo "\t\t<p class=\"lead\">De nombreuses ouvrages à venir decouvrir dans nos base de donnés.</p>
\t\t<hr class=\"my-4\">
\t\t<p class=\"lead\">
\t\t\t<a class=\"btn btn-danger\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_index");
        echo "\" role=\" button\">Livres</a>

\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CD_index");
        echo "\" role=\"button\">Cd-Rom</a>

\t\t\t<a class=\"btn btn-info\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_paper_index");
        echo "\" role=\"button\">Journaux</a>

\t\t\t<a class=\"btn btn-secondary\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_film_index");
        echo "\" role=\" button\">Micro Films</a>
\t\t</p>
\t</div>

\t<div class=\"example-wrapper\">
\t\t";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34)) {
            // line 35
            echo "\t\t\t<h1>
\t\t\t\t✅\tBonjour
\t\t\t\t";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "firstname", [], "any", false, false, false, 37), "html", null, true);
            echo "!

\t\t\t</h1>
\t\t\t<p>
\t\t\t";
        }
        // line 42
        echo "

\t\t\t<form method=\"post\">
\t\t\t\t";
        // line 45
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })()), "messageKey", [], "any", false, false, false, 46), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })()), "messageData", [], "any", false, false, false, 46), "security"), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 48
        echo "
\t\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t<input type=\"email\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

\t\t\t\t<input
\t\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

\t\t\t\t";
        // line 68
        echo "
\t\t\t\t<button class=\"btn btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\tSign in
\t\t\t\t</button>
\t\t\t</form>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 68,  158 => 56,  150 => 51,  145 => 48,  139 => 46,  137 => 45,  132 => 42,  124 => 37,  120 => 35,  118 => 34,  110 => 29,  105 => 27,  100 => 25,  95 => 23,  90 => 20,  84 => 18,  82 => 17,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


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

\t<div class=\"jumbotron\" style=\"background-color: #70A99E\">
\t\t<h1 class=\"display-3\">Bienvenue sur bibliothèque Guinot!</h1>
\t\t{% if not app.user %}
\t\t\t<a type=\"button\" class=\"btn btn-warning btn-lg\" style=\" position: relative; float: right;\" href=\"{{path('app_login')}}\">Connexion</a>
\t\t{% endif %}
\t\t<p class=\"lead\">De nombreuses ouvrages à venir decouvrir dans nos base de donnés.</p>
\t\t<hr class=\"my-4\">
\t\t<p class=\"lead\">
\t\t\t<a class=\"btn btn-danger\" href=\"{{path('livre_index')}}\" role=\" button\">Livres</a>

\t\t\t<a class=\"btn btn-success\" href=\"{{path('CD_index')}}\" role=\"button\">Cd-Rom</a>

\t\t\t<a class=\"btn btn-info\" href=\"{{path('news_paper_index')}}\" role=\"button\">Journaux</a>

\t\t\t<a class=\"btn btn-secondary\" href=\"{{path('micro_film_index')}}\" role=\" button\">Micro Films</a>
\t\t</p>
\t</div>

\t<div class=\"example-wrapper\">
\t\t{% if app.user %}
\t\t\t<h1>
\t\t\t\t✅\tBonjour
\t\t\t\t{{ app.user.firstname }}!

\t\t\t</h1>
\t\t\t<p>
\t\t\t{% endif %}


\t\t\t<form method=\"post\">
\t\t\t\t{% if error %}
\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t{% endif %}

\t\t\t\t<h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
\t\t\t\t<label for=\"inputEmail\">Email</label>
\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus>
\t\t\t\t<label for=\"inputPassword\">Password</label>
\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required>

\t\t\t\t<input
\t\t\t\ttype=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

\t\t\t\t{#
\t\t\t\t\t\t\t        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
\t\t\t\t\t\t\t        See https://symfony.com/doc/current/security/remember_me.html
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t        <div class=\"checkbox mb-3\">
\t\t\t\t\t\t\t            <label>
\t\t\t\t\t\t\t                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
\t\t\t\t\t\t\t            </label>
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t    #}

\t\t\t\t<button class=\"btn btn-lg btn-primary\" type=\"submit\">
\t\t\t\t\tSign in
\t\t\t\t</button>
\t\t\t</form>
\t\t{% endblock %}
", "security/login.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/GuinotBibliotheque/templates/security/login.html.twig");
    }
}
