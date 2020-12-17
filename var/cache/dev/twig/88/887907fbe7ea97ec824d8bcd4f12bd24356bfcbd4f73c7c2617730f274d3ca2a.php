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

/* news_paper/show.html.twig */
class __TwigTemplate_52986dd606103d70593cb414535ac44645de5c410ed8b6783829edd8c496ab0d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news_paper/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news_paper/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "news_paper/show.html.twig", 1);
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

        echo "NewsPaper";
        
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
        echo "    <h1>NewsPaper</h1>

            <dl class=\"row\">
                <dt class=\"col-2\">Id</dt>
                <dd class=\"col-10\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news_paper"]) || array_key_exists("news_paper", $context) ? $context["news_paper"] : (function () { throw new RuntimeError('Variable "news_paper" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "</dd>
                <dt class=\"col-2\">Title</dt>
                <dd class=\"col-10\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news_paper"]) || array_key_exists("news_paper", $context) ? $context["news_paper"] : (function () { throw new RuntimeError('Variable "news_paper" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        echo "</dd>
                <dt class=\"col-2\">Cote</dt>
                <dd class=\"col-10\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news_paper"]) || array_key_exists("news_paper", $context) ? $context["news_paper"] : (function () { throw new RuntimeError('Variable "news_paper" does not exist.', 14, $this->source); })()), "cote", [], "any", false, false, false, 14), "html", null, true);
        echo "</dd>
                <dt class=\"col-2\">Availability</dt>
                <dd class=\"col-10\">";
        // line 16
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["news_paper"]) || array_key_exists("news_paper", $context) ? $context["news_paper"] : (function () { throw new RuntimeError('Variable "news_paper" does not exist.', 16, $this->source); })()), "availability", [], "any", false, false, false, 16)) ? ("Yes") : ("No"));
        echo "</dd>
                <dt class=\"col-2\">Picture</dt>
                <dd class=\"col-10\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news_paper"]) || array_key_exists("news_paper", $context) ? $context["news_paper"] : (function () { throw new RuntimeError('Variable "news_paper" does not exist.', 18, $this->source); })()), "picture", [], "any", false, false, false, 18), "html", null, true);
        echo "</dd>
                <dt class=\"col-2\">CreatedAt</dt>
                <dd class=\"col-10\">";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["news_paper"]) || array_key_exists("news_paper", $context) ? $context["news_paper"] : (function () { throw new RuntimeError('Variable "news_paper" does not exist.', 20, $this->source); })()), "createdAt", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["news_paper"]) || array_key_exists("news_paper", $context) ? $context["news_paper"] : (function () { throw new RuntimeError('Variable "news_paper" does not exist.', 20, $this->source); })()), "createdAt", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</dd>
            </dl>

    <a class=\"btn btn-primary\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_paper_index");
        echo "\">back to list</a>
    ";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VOLONTEER")) {
            // line 25
            echo "        <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news_paper_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["news_paper"]) || array_key_exists("news_paper", $context) ? $context["news_paper"] : (function () { throw new RuntimeError('Variable "news_paper" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\">edit</a>
        ";
            // line 26
            echo twig_include($this->env, $context, "news_paper/_delete_form.html.twig");
            echo "
    ";
        }
        // line 28
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "news_paper/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 28,  136 => 26,  131 => 25,  129 => 24,  125 => 23,  119 => 20,  114 => 18,  109 => 16,  104 => 14,  99 => 12,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}NewsPaper{% endblock %}

{% block body %}
    <h1>NewsPaper</h1>

            <dl class=\"row\">
                <dt class=\"col-2\">Id</dt>
                <dd class=\"col-10\">{{ news_paper.id }}</dd>
                <dt class=\"col-2\">Title</dt>
                <dd class=\"col-10\">{{ news_paper.title }}</dd>
                <dt class=\"col-2\">Cote</dt>
                <dd class=\"col-10\">{{ news_paper.cote }}</dd>
                <dt class=\"col-2\">Availability</dt>
                <dd class=\"col-10\">{{ news_paper.availability ? 'Yes' : 'No' }}</dd>
                <dt class=\"col-2\">Picture</dt>
                <dd class=\"col-10\">{{ news_paper.picture }}</dd>
                <dt class=\"col-2\">CreatedAt</dt>
                <dd class=\"col-10\">{{ news_paper.createdAt ? news_paper.createdAt|date('Y-m-d H:i:s') : '' }}</dd>
            </dl>

    <a class=\"btn btn-primary\" href=\"{{ path('news_paper_index') }}\">back to list</a>
    {% if is_granted('ROLE_VOLONTEER') %}
        <a class=\"btn btn-primary\" href=\"{{ path('news_paper_edit', {'id': news_paper.id}) }}\">edit</a>
        {{ include('news_paper/_delete_form.html.twig') }}
    {% endif %}
    
{% endblock %}
", "news_paper/show.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/GuinotBibliotheque/templates/news_paper/show.html.twig");
    }
}
