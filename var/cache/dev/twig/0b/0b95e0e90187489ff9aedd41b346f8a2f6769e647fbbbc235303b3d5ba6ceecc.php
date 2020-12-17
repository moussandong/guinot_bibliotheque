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

/* loan/_view.html.twig */
class __TwigTemplate_45ad9f3f31f73e03bb761c69970c83f80936b2fbeea3c38dea5f90b8176ee399 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/_view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loan/_view.html.twig"));

        // line 1
        echo "<tr>
\t";
        // line 3
        echo "\t<td>
\t
\t\t<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5)]), "html", null, true);
        echo "\">
\t\t\t";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "firstname", [], "any", false, false, false, 6), "html", null, true);
        echo "
\t\t</a> 
\t</td>
\t<td>";
        // line 9
        ((twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
\t<td>";
        // line 10
        ((twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 10, $this->source); })()), "udatedAt", [], "any", false, false, false, 10)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 10, $this->source); })()), "udatedAt", [], "any", false, false, false, 10), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
\t<td>";
        // line 11
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 11, $this->source); })()), "searchable", [], "any", false, false, false, 11)) ? ("Yes") : ("No"));
        echo "</td>
\t<td>";
        // line 12
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 12, $this->source); })()), "status", [], "any", false, false, false, 12)) ? ("Yes") : ("No"));
        echo "</td>


\t<td>
\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loan_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">show</a>
\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loan_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["loan"]) || array_key_exists("loan", $context) ? $context["loan"] : (function () { throw new RuntimeError('Variable "loan" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\">edit</a>
\t</td>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "loan/_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  79 => 16,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  54 => 6,  50 => 5,  46 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>
\t{#<td>{{ loan.id }}</td>#}
\t<td>
\t
\t\t<a href=\"{{path('user_show', {'id':loan.user.id} )}}\">
\t\t\t{{loan.user.firstname}}
\t\t</a> 
\t</td>
\t<td>{{ loan.createdAt ? loan.createdAt|date('Y-m-d H:i:s') : '' }}</td>
\t<td>{{ loan.udatedAt ? loan.udatedAt|date('Y-m-d H:i:s') : '' }}</td>
\t<td>{{ loan.searchable ? 'Yes' : 'No' }}</td>
\t<td>{{ loan.status ? 'Yes' : 'No' }}</td>


\t<td>
\t\t<a href=\"{{ path('loan_show', {'id': loan.id}) }}\">show</a>
\t\t<a href=\"{{ path('loan_edit', {'id': loan.id}) }}\">edit</a>
\t</td>
</tr>
", "loan/_view.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/GuinotBibliotheque/templates/loan/_view.html.twig");
    }
}
