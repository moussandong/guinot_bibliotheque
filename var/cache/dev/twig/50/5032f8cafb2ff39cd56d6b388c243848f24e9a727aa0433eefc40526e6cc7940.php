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

/* cd_rom/show.html.twig */
class __TwigTemplate_5c0d3bcc2a2b40836f18b7e698c82506f37d118abc804071cf645e4122cf626c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cd_rom/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cd_rom/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cd_rom/show.html.twig", 1);
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

        echo "CDRom";
        
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
        echo "    <h1>CDRom</h1>

    
            <dl class=\"row\">
               <dt class=\"col-2\">Id</dt>
                <dd class=\"col-10\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c_d_rom"]) || array_key_exists("c_d_rom", $context) ? $context["c_d_rom"] : (function () { throw new RuntimeError('Variable "c_d_rom" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "</dd>
               <dt class=\"col-2\">Title</dt>
                <dd class=\"col-10\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c_d_rom"]) || array_key_exists("c_d_rom", $context) ? $context["c_d_rom"] : (function () { throw new RuntimeError('Variable "c_d_rom" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</dd>
               <dt class=\"col-2\">Cote</dt>
                <dd class=\"col-10\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c_d_rom"]) || array_key_exists("c_d_rom", $context) ? $context["c_d_rom"] : (function () { throw new RuntimeError('Variable "c_d_rom" does not exist.', 15, $this->source); })()), "cote", [], "any", false, false, false, 15), "html", null, true);
        echo "</dd>
               <dt class=\"col-2\">Availability</dt>
                <dd class=\"col-10\">";
        // line 17
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["c_d_rom"]) || array_key_exists("c_d_rom", $context) ? $context["c_d_rom"] : (function () { throw new RuntimeError('Variable "c_d_rom" does not exist.', 17, $this->source); })()), "availability", [], "any", false, false, false, 17)) ? ("Yes") : ("No"));
        echo "</dd>
               <dt class=\"col-2\">Picture</dt>
                <dd class=\"col-10\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c_d_rom"]) || array_key_exists("c_d_rom", $context) ? $context["c_d_rom"] : (function () { throw new RuntimeError('Variable "c_d_rom" does not exist.', 19, $this->source); })()), "picture", [], "any", false, false, false, 19), "html", null, true);
        echo "</dd>
               <dt class=\"col-2\">Authtor</dt>
                <dd class=\"col-10\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c_d_rom"]) || array_key_exists("c_d_rom", $context) ? $context["c_d_rom"] : (function () { throw new RuntimeError('Variable "c_d_rom" does not exist.', 21, $this->source); })()), "authtor", [], "any", false, false, false, 21), "html", null, true);
        echo "</dd>
               <dt class=\"col-2\">Bail</dt>
                <dd class=\"col-10\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["c_d_rom"]) || array_key_exists("c_d_rom", $context) ? $context["c_d_rom"] : (function () { throw new RuntimeError('Variable "c_d_rom" does not exist.', 23, $this->source); })()), "bail", [], "any", false, false, false, 23), "html", null, true);
        echo "</dd>
            </dl>

    <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CD_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("c_d_rom_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["c_d_rom"]) || array_key_exists("c_d_rom", $context) ? $context["c_d_rom"] : (function () { throw new RuntimeError('Variable "c_d_rom" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 30
        echo twig_include($this->env, $context, "cd_rom/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cd_rom/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 30,  136 => 28,  131 => 26,  125 => 23,  120 => 21,  115 => 19,  110 => 17,  105 => 15,  100 => 13,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CDRom{% endblock %}

{% block body %}
    <h1>CDRom</h1>

    
            <dl class=\"row\">
               <dt class=\"col-2\">Id</dt>
                <dd class=\"col-10\">{{ c_d_rom.id }}</dd>
               <dt class=\"col-2\">Title</dt>
                <dd class=\"col-10\">{{ c_d_rom.title }}</dd>
               <dt class=\"col-2\">Cote</dt>
                <dd class=\"col-10\">{{ c_d_rom.cote }}</dd>
               <dt class=\"col-2\">Availability</dt>
                <dd class=\"col-10\">{{ c_d_rom.availability ? 'Yes' : 'No' }}</dd>
               <dt class=\"col-2\">Picture</dt>
                <dd class=\"col-10\">{{ c_d_rom.picture }}</dd>
               <dt class=\"col-2\">Authtor</dt>
                <dd class=\"col-10\">{{ c_d_rom.authtor }}</dd>
               <dt class=\"col-2\">Bail</dt>
                <dd class=\"col-10\">{{ c_d_rom.bail }}</dd>
            </dl>

    <a href=\"{{ path('CD_index') }}\">back to list</a>

    <a href=\"{{ path('c_d_rom_edit', {'id': c_d_rom.id}) }}\">edit</a>

    {{ include('cd_rom/_delete_form.html.twig') }}
{% endblock %}
", "cd_rom/show.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/GuinotBibliotheque/templates/cd_rom/show.html.twig");
    }
}
