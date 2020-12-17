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

/* shared/header.html.twig */
class __TwigTemplate_811f17bc2ff249b0f41ce15290d91ba8850d6856054fbb53bc2421ca50aa341d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark\">
\t<a class=\"navbar-brand\" href=\"#\">
\t\tGuinot Bibliotheque
\t</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor02\">

\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
\t\t\t\t\tAccueil
\t\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\t\t(current)
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\tRessources
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_index");
        echo "\">
\t\t\t\t\t\tLivres
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CD_index");
        echo "\">
\t\t\t\t\t\tCD-Rom
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_paper_index");
        echo "\">
\t\t\t\t\t\tJournaux
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_film_index");
        echo "\">
\t\t\t\t\t\tMicroFilms
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"></a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
            // line 42
            echo "\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VOLONTEER")) {
                // line 43
                echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 44
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
                echo "\">
\t\t\t\t\t\t\tUtilisateurs
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 49
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loan_index");
                echo "\">
\t\t\t\t\t\t\tEmprunter
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t";
            }
            // line 55
            echo "\t\t\t</ul>
\t\t\t<ul class=\"navbar-nav mr-left\">

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\tSe déconnecter
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
            // line 63
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VOLONTEER")) {
                // line 64
                echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\tMon Compte
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            } else {
                // line 70
                echo "\t\t\t\t\t<li class=\"nav-item ml-auto\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71)]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\tMon Compte
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 76
            echo "\t\t\t";
        }
        // line 77
        echo "

\t\t</ul>

\t</div>
</nav>
";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "flashes", [], "any", false, false, false, 83));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 84
            echo "\t<div class=\"container\">
\t\t<div class=\"alert-";
            // line 85
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
\t\t\t";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 87
                echo "\t\t\t\t<p>
\t\t\t\t\t";
                // line 88
                echo $context["message"];
                echo "
\t\t\t\t</p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 91,  191 => 88,  188 => 87,  184 => 86,  180 => 85,  177 => 84,  173 => 83,  165 => 77,  162 => 76,  154 => 71,  151 => 70,  143 => 65,  140 => 64,  138 => 63,  131 => 59,  125 => 55,  116 => 49,  108 => 44,  105 => 43,  102 => 42,  100 => 41,  90 => 34,  84 => 31,  78 => 28,  72 => 25,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar fixed-top navbar-expand-lg navbar-dark bg-dark\">
\t<a class=\"navbar-brand\" href=\"#\">
\t\tGuinot Bibliotheque
\t</a>
\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t<span class=\"navbar-toggler-icon\"></span>
\t</button>

\t<div class=\"collapse navbar-collapse\" id=\"navbarColor02\">

\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('home')}}\">
\t\t\t\t\tAccueil
\t\t\t\t\t<span class=\"sr-only\">
\t\t\t\t\t\t(current)
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\tRessources
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('livre_index')}}\">
\t\t\t\t\t\tLivres
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('CD_index')}}\">
\t\t\t\t\t\tCD-Rom
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('news_paper_index')}}\">
\t\t\t\t\t\tJournaux
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('micro_film_index')}}\">
\t\t\t\t\t\tMicroFilms
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\"></a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t{% if app.user %}
\t\t\t\t{% if is_granted('ROLE_VOLONTEER')  %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('user_index') }}\">
\t\t\t\t\t\t\tUtilisateurs
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('loan_index') }}\">
\t\t\t\t\t\t\tEmprunter
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t\t<ul class=\"navbar-nav mr-left\">

\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_logout')}}\">
\t\t\t\t\t\tSe déconnecter
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% if is_granted('ROLE_VOLONTEER') %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('user_show', {'id':app.user.id})}}\">
\t\t\t\t\t\t\tMon Compte
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"nav-item ml-auto\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('account_show', {'id':app.user.id})}}\">
\t\t\t\t\t\t\tMon Compte
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t{% endif %}


\t\t</ul>

\t</div>
</nav>
{% for label, messages in app.flashes %}
\t<div class=\"container\">
\t\t<div class=\"alert-{{ label }}\">
\t\t\t{% for message in messages %}
\t\t\t\t<p>
\t\t\t\t\t{{ message|raw }}
\t\t\t\t</p>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endfor %}
", "shared/header.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/GuinotBibliotheque/templates/shared/header.html.twig");
    }
}
