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

/* loan/show.html.twig */
class __TwigTemplate_f6b591b7e5bd1034073b2e2b3db61f757bc6e0defc3f150cd171b19d53da65fa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "loan/show.html.twig", 1);
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

        echo "Loan";
        
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
        echo "    <h1>Emprunt ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>

            <dl class=\"row\">
                <dt class=\"col-2\">User</dt>
                <dd class=\"col-10\">User (link)</dd>
                <dt class=\"col-2\">Resources</dt>
                <dd class=\"col-10\">Resources (list/link)</dd>
                <dt class=\"col-2\">CreatedAt</dt>
                <dd class=\"col-10\">";
        // line 14
        ((twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 14, $this->source); })()), "createdAt", [], "any", false, false, false, 14)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 14, $this->source); })()), "createdAt", [], "any", false, false, false, 14), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</dd>
                <dt class=\"col-2\">UdatedAt</dt>
                <dd class=\"col-10\">";
        // line 16
        ((twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 16, $this->source); })()), "udatedAt", [], "any", false, false, false, 16)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 16, $this->source); })()), "udatedAt", [], "any", false, false, false, 16), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</dd>
                <dt class=\"col-2\">Searchable</dt>
                <dd class=\"col-10\">";
        // line 18
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 18, $this->source); })()), "searchable", [], "any", false, false, false, 18)) ? ("Yes") : ("No"));
        echo "</dd>
                <dt class=\"col-2\">Status</dt>
                <dd class=\"col-10\">";
        // line 20
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 20, $this->source); })()), "status", [], "any", false, false, false, 20)) ? ("Yes") : ("No"));
        echo "</dd>
            </dl>

    <a class=\"btn btn-primary\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loan_index");
        echo "\">back to list</a>

    <a class=\"btn btn-primary\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loan_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 27
        echo twig_include($this->env, $context, "loan/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "loan/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 27,  126 => 25,  121 => 23,  115 => 20,  110 => 18,  105 => 16,  100 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Loan{% endblock %}

{% block body %}
    <h1>Emprunt {{loan.id}}</h1>

            <dl class=\"row\">
                <dt class=\"col-2\">User</dt>
                <dd class=\"col-10\">User (link)</dd>
                <dt class=\"col-2\">Resources</dt>
                <dd class=\"col-10\">Resources (list/link)</dd>
                <dt class=\"col-2\">CreatedAt</dt>
                <dd class=\"col-10\">{{ loan.createdAt ? loan.createdAt|date('Y-m-d H:i:s') : '' }}</dd>
                <dt class=\"col-2\">UdatedAt</dt>
                <dd class=\"col-10\">{{ loan.udatedAt ? loan.udatedAt|date('Y-m-d H:i:s') : '' }}</dd>
                <dt class=\"col-2\">Searchable</dt>
                <dd class=\"col-10\">{{ loan.searchable ? 'Yes' : 'No' }}</dd>
                <dt class=\"col-2\">Status</dt>
                <dd class=\"col-10\">{{ loan.status ? 'Yes' : 'No' }}</dd>
            </dl>

    <a class=\"btn btn-primary\" href=\"{{ path('loan_index') }}\">back to list</a>

    <a class=\"btn btn-primary\" href=\"{{ path('loan_edit', {'id': loan.id}) }}\">edit</a>

    {{ include('loan/_delete_form.html.twig') }}
{% endblock %}
", "loan/show.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/GuinotBibliotheque/templates/loan/show.html.twig");
    }
}
