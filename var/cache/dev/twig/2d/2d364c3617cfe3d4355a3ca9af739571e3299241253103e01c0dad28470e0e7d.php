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

/* loan/index.html.twig */
class __TwigTemplate_652c3ba24091f6e80d48d8f4b1441f83360b47b612b3cf5ecd85c4ee7a23f0e5 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "loan/index.html.twig", 1);
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
        echo "\tLoan index
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

\t<h1 class=\"mb-4 mt-3\">
\t\tEmprunts
\t</h1>


\t<table class=\"table table-bordered\">
\t\t<thead class=\"thead-dark\">
\t\t\t<tr class=\"table\">

\t\t\t\t<th>
\t\t\t\t\tUser
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tCreatedAt
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tUdatedAt
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tStatus
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tactions
\t\t\t\t</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>


\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loans"]) || array_key_exists("loans", $context) ? $context["loans"] : (function () { throw new RuntimeError('Variable "loans" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["loan"]) {
            // line 40
            echo "\t\t\t\t<tr
\t\t\t\t\tclass=\"table-warning\">

\t\t\t\t\t";
            // line 44
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loan"], "user", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loan"], "user", [], "any", false, false, false, 46), "firstname", [], "any", false, false, false, 46), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 50
            ((twig_get_attribute($this->env, $this->source, $context["loan"], "createdAt", [], "any", false, false, false, 50)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loan"], "createdAt", [], "any", false, false, false, 50), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 53
            ((twig_get_attribute($this->env, $this->source, $context["loan"], "udatedAt", [], "any", false, false, false, 53)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loan"], "udatedAt", [], "any", false, false, false, 53), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 56
            echo ((twig_get_attribute($this->env, $this->source, $context["loan"], "status", [], "any", false, false, false, 56)) ? ("Yes") : ("No"));
            echo "
\t\t\t\t\t</td>


\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loan_show", ["id" => twig_get_attribute($this->env, $this->source, $context["loan"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\tshow
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loan_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["loan"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\tedit
\t\t\t\t\t\t</a>

\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t\tno records found
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t</tbody>
\t</table>


\t";
        // line 82
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
        echo "\t<script>
\t\t";
        // line 86
        $this->loadTemplate("filter/_filters.js", "loan/index.html.twig", 86)->display($context);
        echo "</script>

</script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "loan/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 86,  224 => 85,  214 => 84,  203 => 82,  197 => 77,  186 => 71,  174 => 64,  168 => 61,  160 => 56,  154 => 53,  148 => 50,  141 => 46,  137 => 45,  134 => 44,  129 => 40,  124 => 39,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tLoan index
{% endblock %}

{% block body %}


\t<h1 class=\"mb-4 mt-3\">
\t\tEmprunts
\t</h1>


\t<table class=\"table table-bordered\">
\t\t<thead class=\"thead-dark\">
\t\t\t<tr class=\"table\">

\t\t\t\t<th>
\t\t\t\t\tUser
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tCreatedAt
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tUdatedAt
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tStatus
\t\t\t\t</th>
\t\t\t\t<th>
\t\t\t\t\tactions
\t\t\t\t</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>


\t\t\t{% for loan in loans %}
\t\t\t\t<tr
\t\t\t\t\tclass=\"table-warning\">

\t\t\t\t\t{#<td>{{ loan.id }}</td>#}
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{path('user_show', {'id':loan.user.id} )}}\">
\t\t\t\t\t\t\t{{loan.user.firstname}}
\t\t\t\t\t\t</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ loan.createdAt ? loan.createdAt|date('Y-m-d H:i:s') : '' }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ loan.udatedAt ? loan.udatedAt|date('Y-m-d H:i:s') : '' }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{ loan.status ? 'Yes' : 'No' }}
\t\t\t\t\t</td>


\t\t\t\t\t<td>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('loan_show', {'id': loan.id}) }}\">
\t\t\t\t\t\t\tshow
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"btn btn-success\" href=\"{{ path('loan_edit', {'id': loan.id}) }}\">
\t\t\t\t\t\t\tedit
\t\t\t\t\t\t</a>

\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"6\">
\t\t\t\t\t\tno records found
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>


\t{# include \"shared/table.html.twig\" with {\"titles\" : [\"user\",\"createdAt\",\"udatedAt\",\"status\",\"action\"], \"items\": loans,\"detail\": \"loan_show\", \"edit\": \"loan_edit\", \"user\": \"user_show\"} #}

{% endblock %}
{% block javascripts %}
\t<script>
\t\t{% include \"filter/_filters.js\" %}</script>

</script>{% endblock %}
", "loan/index.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/GuinotBibliotheque/templates/loan/index.html.twig");
    }
}
