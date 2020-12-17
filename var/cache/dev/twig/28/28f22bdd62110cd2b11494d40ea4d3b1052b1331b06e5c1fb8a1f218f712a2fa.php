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

/* micro_film/show.html.twig */
class __TwigTemplate_0e064004af334b737a4f6bee39cfd5059a01699a81a0de8310bf0ce4bb2e37ce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_film/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "micro_film/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "micro_film/show.html.twig", 1);
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

        echo "MicroFilm";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>MicroFilm</h1>


            <dl class=\"row\">
                <dt class=\"col-2\">Id</dt>
                <dd class=\"col-10\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["micro_film"]) || array_key_exists("micro_film", $context) ? $context["micro_film"] : (function () { throw new RuntimeError('Variable "micro_film" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "</dd>
                <dt class=\"col-2\">Title</dt>
                <dd class=\"col-10\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["micro_film"]) || array_key_exists("micro_film", $context) ? $context["micro_film"] : (function () { throw new RuntimeError('Variable "micro_film" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</dd>
                <dt class=\"col-2\">Cote</dt>
                <dd class=\"col-10\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["micro_film"]) || array_key_exists("micro_film", $context) ? $context["micro_film"] : (function () { throw new RuntimeError('Variable "micro_film" does not exist.', 15, $this->source); })()), "cote", [], "any", false, false, false, 15), "html", null, true);
        echo "</dd>
                <dt class=\"col-2\">Availability</dt>
                <dd class=\"col-10\">";
        // line 17
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["micro_film"]) || array_key_exists("micro_film", $context) ? $context["micro_film"] : (function () { throw new RuntimeError('Variable "micro_film" does not exist.', 17, $this->source); })()), "availability", [], "any", false, false, false, 17)) ? ("Yes") : ("No"));
        echo "</dd>
                <dt class=\"col-2\">Picture</dt>
                <dd class=\"col-10\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["micro_film"]) || array_key_exists("micro_film", $context) ? $context["micro_film"] : (function () { throw new RuntimeError('Variable "micro_film" does not exist.', 19, $this->source); })()), "picture", [], "any", false, false, false, 19), "html", null, true);
        echo "</dd>
                <dt class=\"col-2\">CreatedAt</dt>
                <dd class=\"col-10\">";
        // line 21
        ((twig_get_attribute($this->env, $this->source, (isset($context["micro_film"]) || array_key_exists("micro_film", $context) ? $context["micro_film"] : (function () { throw new RuntimeError('Variable "micro_film" does not exist.', 21, $this->source); })()), "createdAt", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["micro_film"]) || array_key_exists("micro_film", $context) ? $context["micro_film"] : (function () { throw new RuntimeError('Variable "micro_film" does not exist.', 21, $this->source); })()), "createdAt", [], "any", false, false, false, 21), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</dd>
            </dl>

    <a class=\"btn btn-primary\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_film_index");
        echo "\">back to list</a>

    ";
        // line 26
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VOLONTEER")) {
            // line 27
            echo "        <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("micro_film_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["micro_film"]) || array_key_exists("micro_film", $context) ? $context["micro_film"] : (function () { throw new RuntimeError('Variable "micro_film" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">edit</a>
        ";
            // line 28
            echo twig_include($this->env, $context, "micro_film/_delete_form.html.twig");
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "micro_film/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 28,  133 => 27,  131 => 26,  126 => 24,  120 => 21,  115 => 19,  110 => 17,  105 => 15,  100 => 13,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MicroFilm{% endblock %}

{% block body %}
    <h1>MicroFilm</h1>


            <dl class=\"row\">
                <dt class=\"col-2\">Id</dt>
                <dd class=\"col-10\">{{ micro_film.id }}</dd>
                <dt class=\"col-2\">Title</dt>
                <dd class=\"col-10\">{{ micro_film.title }}</dd>
                <dt class=\"col-2\">Cote</dt>
                <dd class=\"col-10\">{{ micro_film.cote }}</dd>
                <dt class=\"col-2\">Availability</dt>
                <dd class=\"col-10\">{{ micro_film.availability ? 'Yes' : 'No' }}</dd>
                <dt class=\"col-2\">Picture</dt>
                <dd class=\"col-10\">{{ micro_film.picture }}</dd>
                <dt class=\"col-2\">CreatedAt</dt>
                <dd class=\"col-10\">{{ micro_film.createdAt ? micro_film.createdAt|date('Y-m-d H:i:s') : '' }}</dd>
            </dl>

    <a class=\"btn btn-primary\" href=\"{{ path('micro_film_index') }}\">back to list</a>

    {% if is_granted('ROLE_VOLONTEER') %}
        <a class=\"btn btn-primary\" href=\"{{ path('micro_film_edit', {'id': micro_film.id}) }}\">edit</a>
        {{ include('micro_film/_delete_form.html.twig') }}
    {% endif %}
{% endblock %}
", "micro_film/show.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/GuinotBibliotheque/templates/micro_film/show.html.twig");
    }
}
