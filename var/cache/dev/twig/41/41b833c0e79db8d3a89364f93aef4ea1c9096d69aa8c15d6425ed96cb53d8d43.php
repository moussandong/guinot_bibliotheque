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

/* livre/show.html.twig */
class __TwigTemplate_68f95dc6986c75aae0665196e47f65bcc3e2b1dcad3581302a66d7d0c28f99db extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livre/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "livre/show.html.twig", 1);
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
        echo "\tLivre
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

\t<h1>
\t\tLivre
\t</h1>


\t<dl class=\"row\">
\t\t<dt class=\"col-2\">
\t\t\tId
\t\t</dt>
\t\t<dd class=\"col-10\">
\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        echo "
\t\t</dd>
\t\t<dt class=\"col-2\">
\t\t\tTitle
\t\t</dt>
\t\t<dd class=\"col-10\">
\t\t\t";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26), "html", null, true);
        echo "
\t\t</dd>
\t\t<dt class=\"col-2\">
\t\t\tCote
\t\t</dt>
\t\t<dd class=\"col-10\">
\t\t\t";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 32, $this->source); })()), "cote", [], "any", false, false, false, 32), "html", null, true);
        echo "
\t\t</dd>
\t\t<dt class=\"col-2\">
\t\t\tAvailability
\t\t</dt>
\t\t<dd class=\"col-10\">
\t\t\t";
        // line 38
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 38, $this->source); })()), "availability", [], "any", false, false, false, 38)) ? ("Yes") : ("No"));
        echo "
\t\t</dd>
\t\t<dt class=\"col-2\">
\t\t\tPicture
\t\t</dt>
\t\t<dd class=\"col-10\">
\t\t\t";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 44, $this->source); })()), "picture", [], "any", false, false, false, 44), "html", null, true);
        echo "
\t\t</dd>
\t\t<dt class=\"col-2\">
\t\t\tAudttor
\t\t</dt>
\t\t<dd class=\"col-10\">
\t\t\t";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 50, $this->source); })()), "authtor", [], "any", false, false, false, 50), "html", null, true);
        echo "
\t\t</dd>
\t\t<dt class=\"col-2\">
\t\t\tSpecial
\t\t</dt>
\t\t<dd class=\"col-10\">
\t\t\t";
        // line 56
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 56, $this->source); })()), "special", [], "any", false, false, false, 56)) ? ("Yes") : ("No"));
        echo "
\t\t</dd>
\t</dl>


\t
\t\t<a class=\"btn btn-success\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_index");
        echo "\">
\t\t\tback to list
\t\t</a>
\t\t";
        // line 65
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VOLONTEER")) {
            // line 66
            echo "\t\t\t<a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livre_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">
\t\t\t\tedit
\t\t\t</a>
\t\t\t<a>
\t\t\t\t";
            // line 70
            echo twig_include($this->env, $context, "livre/_delete_form.html.twig");
            echo "
\t\t\t</a>
\t\t";
        }
        // line 73
        echo "
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "livre/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 73,  183 => 70,  175 => 66,  173 => 65,  167 => 62,  158 => 56,  149 => 50,  140 => 44,  131 => 38,  122 => 32,  113 => 26,  104 => 20,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tLivre
{% endblock %}

{% block body %}


\t<h1>
\t\tLivre
\t</h1>


\t<dl class=\"row\">
\t\t<dt class=\"col-2\">
\t\t\tId
\t\t</dt>
\t\t<dd class=\"col-10\">
\t\t\t{{ livre.id }}
\t\t</dd>
\t\t<dt class=\"col-2\">
\t\t\tTitle
\t\t</dt>
\t\t<dd class=\"col-10\">
\t\t\t{{ livre.title }}
\t\t</dd>
\t\t<dt class=\"col-2\">
\t\t\tCote
\t\t</dt>
\t\t<dd class=\"col-10\">
\t\t\t{{ livre.cote }}
\t\t</dd>
\t\t<dt class=\"col-2\">
\t\t\tAvailability
\t\t</dt>
\t\t<dd class=\"col-10\">
\t\t\t{{ livre.availability ? 'Yes' : 'No' }}
\t\t</dd>
\t\t<dt class=\"col-2\">
\t\t\tPicture
\t\t</dt>
\t\t<dd class=\"col-10\">
\t\t\t{{ livre.picture }}
\t\t</dd>
\t\t<dt class=\"col-2\">
\t\t\tAudttor
\t\t</dt>
\t\t<dd class=\"col-10\">
\t\t\t{{ livre.authtor }}
\t\t</dd>
\t\t<dt class=\"col-2\">
\t\t\tSpecial
\t\t</dt>
\t\t<dd class=\"col-10\">
\t\t\t{{ livre.special ? 'Yes' : 'No' }}
\t\t</dd>
\t</dl>


\t
\t\t<a class=\"btn btn-success\" href=\"{{ path('livre_index') }}\">
\t\t\tback to list
\t\t</a>
\t\t{% if is_granted('ROLE_VOLONTEER') %}
\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('livre_edit', {'id': livre.id}) }}\">
\t\t\t\tedit
\t\t\t</a>
\t\t\t<a>
\t\t\t\t{{ include('livre/_delete_form.html.twig') }}
\t\t\t</a>
\t\t{% endif %}

\t
{% endblock %}
", "livre/show.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/GuinotBibliotheque/templates/livre/show.html.twig");
    }
}
