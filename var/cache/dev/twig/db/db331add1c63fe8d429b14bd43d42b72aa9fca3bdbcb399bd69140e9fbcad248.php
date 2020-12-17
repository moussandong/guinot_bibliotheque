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

/* user/show.html.twig */
class __TwigTemplate_bfe56f783c16f9c1b34e8bf019b0e50e94620a28680b30fbb692155e0eba59b8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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

        echo "User
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1>Bonjour
\t\t";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "firstName", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>

\t<style>
\t\tbody {
\t\t\tbackground-color: #70A99E;
\t\t}
\t\t.responsive {
\t\t\twidth: 100%;
\t\t\theight: auto;
\t\t}
\t</style>

\t<table class=\"table table-hover\">
\t\t<tbody>
\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>Id</th>
\t\t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>Email</th>
\t\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>FirstName</th>
\t\t\t\t<td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "firstName", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>LastName</th>
\t\t\t\t<td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "lastName", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>Address</th>
\t\t\t\t<td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "address", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
\t\t\t</tr>


\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>PostalCode</th>
\t\t\t\t<td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "postalCode", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>City</th>
\t\t\t\t<td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "city", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>CreatedAt</th>
\t\t\t\t<td>";
        // line 60
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "createdAt", [], "any", false, false, false, 60)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "createdAt", [], "any", false, false, false, 60), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t</tr>

\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>Fees</th>
\t\t\t\t<td>";
        // line 65
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "fees", [], "any", false, false, false, 65)) ? ("Yes") : ("No"));
        echo "</td>
\t\t\t</tr>

\t\t</tbody>
\t</table>


\t<table class=\"table table-hover\">

\t\t<thead>

\t\t\t<tr class=\"table-warning\" style=\"\">
\t\t\t\t<td style=\"\">Titre</td>
\t\t\t\t<td style=\"\">Date d'emprunt</td>
\t\t\t\t<td style=\"\">Date de renouvellement</td>
\t\t\t\t<td style=\"\">Réstitution</td>
\t\t\t\t<td style=\"\">Renouvellement</td>
\t\t\t</tr>

\t\t</thead>

\t\t<tbody>
\t\t\t<div class=\"card\">
\t\t\t\t";
        // line 88
        $context["nb"] = 0;
        // line 89
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "loans", [], "any", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["loan"]) {
            // line 90
            echo "
\t\t\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t\t\t";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["loan"], "livres", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
                // line 93
                echo "\t\t\t\t\t\t\t";
                $context["nb"] = ((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 93, $this->source); })()) + 1);
                // line 94
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["livre"], "title", [], "any", false, false, false, 94)) {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t<td class=\"table-success\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "title", [], "any", false, false, false, 95), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t<td class=\"table-success\">";
                    // line 96
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loan"], "createdAt", [], "any", false, false, false, 96), "d-m-Y"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"table-success\">

\t\t\t\t\t\t\t\t\t";
                    // line 100
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "updatedAt", [], "any", false, false, false, 100), "d-m-Y:h-m-s"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"table-success\">

\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 104
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loan_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["loan"], "id", [], "any", false, false, false, 104), "livre" => twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 104), "user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
                    echo "\">Restitution</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"table-success\">

\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 108
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loan_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["loan"], "id", [], "any", false, false, false, 108), "livre" => twig_get_attribute($this->env, $this->source, $context["livre"], "id", [], "any", false, false, false, 108), "user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108), "renew" => 1]), "html", null, true);
                    echo "\">Renouvellement</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                }
                // line 111
                echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "\t\t\t\t<hr>
\t\t\t\t<h2>Vos Emprunts</h2>


\t\t\t\t<hr>
\t\t\t\t";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 119, $this->source); })()), "loans", [], "any", false, false, false, 119));
        foreach ($context['_seq'] as $context["_key"] => $context["loan"]) {
            // line 120
            echo "\t\t\t\t\t<tr class=\"table-success\" style=\"\">

\t\t\t\t\t\t";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["loan"], "cdrom", [], "any", false, false, false, 122));
            foreach ($context['_seq'] as $context["_key"] => $context["cdrom"]) {
                // line 123
                echo "\t\t\t\t\t\t\t";
                $context["nb"] = ((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 123, $this->source); })()) + 1);
                // line 124
                echo "\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["cdrom"], "title", [], "any", false, false, false, 124)) {
                    // line 125
                    echo "\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                    // line 126
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cdrom"], "title", [], "any", false, false, false, 126), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                    // line 129
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loan"], "createdAt", [], "any", false, false, false, 129), "d-m-Y"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                    // line 132
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loan"], "udatedAt", [], "any", false, false, false, 132), "d-m-Y:h-m-s"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 135
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loan_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["loan"], "id", [], "any", false, false, false, 135), "cdrom" => twig_get_attribute($this->env, $this->source, $context["cdrom"], "id", [], "any", false, false, false, 135), "user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135)]), "html", null, true);
                    echo "\">Restitution</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"\">Renouvellement</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
                }
                // line 141
                echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cdrom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "\t\t\t</tbody>
\t\t</tbody>
\t</table>
\t<br>


\t";
        // line 150
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 151
            echo "\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "id", [], "any", false, false, false, 151), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 151, $this->source); })()), "id", [], "any", false, false, false, 151)))) {
                // line 152
                echo "\t\t\t";
                // line 153
                echo "\t\t";
            }
            // line 154
            echo "\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VOLONTEER")) {
                // line 155
                echo "\t\t\t<p>
\t\t\t\t<a class=\"btn btn-primary\" href=\" ";
                // line 156
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
                echo " \">Retour à la liste utilisateur</a>
\t\t\t\t<a class=\"btn btn-secondary\" href=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 157, $this->source); })()), "id", [], "any", false, false, false, 157)]), "html", null, true);
                echo "\">Éditer le profil</a>

\t\t\t\t";
                // line 159
                if ((0 <= twig_compare((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 159, $this->source); })()), 5))) {
                    // line 160
                    echo "
\t\t\t\t\t<div class=\"alert alert-dismissible alert-danger\" style=\"\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t\t<strong>";
                    // line 163
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 163, $this->source); })()), "firstname", [], "any", false, false, false, 163), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 163, $this->source); })()), "lastname", [], "any", false, false, false, 163), "html", null, true);
                    echo " ne peut plus emprunter
\t\t\t\t\t\tcar le compte posséde 5 ressources </strong>
\t\t\t\t\t</div>

\t\t\t\t";
                } else {
                    // line 168
                    echo "\t\t\t\t\t<a class=\"btn btn-light\" href=\" ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loan_new", ["user" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 168, $this->source); })()), "id", [], "any", false, false, false, 168)]), "html", null, true);
                    echo " \">Créer un emprunt </a>
\t\t\t\t</p>
\t\t\t";
                }
                // line 171
                echo "\t\t\t";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 172
                    echo "\t\t\t\t";
                    echo twig_include($this->env, $context, "user/_delete_form.html.twig");
                    echo "
\t\t\t";
                }
                // line 174
                echo "\t\t";
            }
            // line 175
            echo "\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 175,  402 => 174,  396 => 172,  393 => 171,  386 => 168,  376 => 163,  371 => 160,  369 => 159,  364 => 157,  360 => 156,  357 => 155,  354 => 154,  351 => 153,  349 => 152,  346 => 151,  344 => 150,  336 => 144,  330 => 143,  323 => 141,  314 => 135,  308 => 132,  302 => 129,  296 => 126,  293 => 125,  290 => 124,  287 => 123,  283 => 122,  279 => 120,  275 => 119,  268 => 114,  262 => 113,  255 => 111,  249 => 108,  242 => 104,  235 => 100,  228 => 96,  223 => 95,  220 => 94,  217 => 93,  213 => 92,  209 => 90,  204 => 89,  202 => 88,  176 => 65,  168 => 60,  160 => 55,  152 => 50,  143 => 44,  135 => 39,  127 => 34,  119 => 29,  111 => 24,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User
{% endblock %}

{% block body %}
\t<h1>Bonjour
\t\t{{ user.firstName }}</h1>

\t<style>
\t\tbody {
\t\t\tbackground-color: #70A99E;
\t\t}
\t\t.responsive {
\t\t\twidth: 100%;
\t\t\theight: auto;
\t\t}
\t</style>

\t<table class=\"table table-hover\">
\t\t<tbody>
\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>Id</th>
\t\t\t\t<td>{{ user.id }}</td>
\t\t\t</tr>

\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>Email</th>
\t\t\t\t<td>{{ user.email }}</td>
\t\t\t</tr>

\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>FirstName</th>
\t\t\t\t<td>{{ user.firstName }}</td>
\t\t\t</tr>

\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>LastName</th>
\t\t\t\t<td>{{ user.lastName }}</td>
\t\t\t</tr>

\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>Address</th>
\t\t\t\t<td>{{ user.address }}</td>
\t\t\t</tr>


\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>PostalCode</th>
\t\t\t\t<td>{{ user.postalCode }}</td>
\t\t\t</tr>

\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>City</th>
\t\t\t\t<td>{{ user.city }}</td>
\t\t\t</tr>

\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>CreatedAt</th>
\t\t\t\t<td>{{ user.createdAt ? user.createdAt|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t</tr>

\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t<th>Fees</th>
\t\t\t\t<td>{{ user.fees ? 'Yes' : 'No' }}</td>
\t\t\t</tr>

\t\t</tbody>
\t</table>


\t<table class=\"table table-hover\">

\t\t<thead>

\t\t\t<tr class=\"table-warning\" style=\"\">
\t\t\t\t<td style=\"\">Titre</td>
\t\t\t\t<td style=\"\">Date d'emprunt</td>
\t\t\t\t<td style=\"\">Date de renouvellement</td>
\t\t\t\t<td style=\"\">Réstitution</td>
\t\t\t\t<td style=\"\">Renouvellement</td>
\t\t\t</tr>

\t\t</thead>

\t\t<tbody>
\t\t\t<div class=\"card\">
\t\t\t\t{% set nb = 0 %}
\t\t\t\t{% for loan in user.loans %}

\t\t\t\t\t<tr class=\"table-success\" style=\"\">
\t\t\t\t\t\t{% for livre in loan.livres %}
\t\t\t\t\t\t\t{% set nb = nb + 1 %}
\t\t\t\t\t\t\t{% if livre.title %}
\t\t\t\t\t\t\t\t<td class=\"table-success\">{{livre.title}}</td>
\t\t\t\t\t\t\t\t<td class=\"table-success\">{{loan.createdAt |date('d-m-Y')}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"table-success\">

\t\t\t\t\t\t\t\t\t{{livre.updatedAt |date('d-m-Y:h-m-s')}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"table-success\">

\t\t\t\t\t\t\t\t\t<a href=\"{{path('loan_edit', {'id':loan.id,'livre':livre.id,'user':user.id})}}\">Restitution</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"table-success\">

\t\t\t\t\t\t\t\t\t<a href=\"{{path('loan_edit', {'id':loan.id,'livre':livre.id,'user':user.id , 'renew':1})}}\">Renouvellement</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t\t<hr>
\t\t\t\t<h2>Vos Emprunts</h2>


\t\t\t\t<hr>
\t\t\t\t{% for loan in user.loans %}
\t\t\t\t\t<tr class=\"table-success\" style=\"\">

\t\t\t\t\t\t{% for cdrom in loan.cdrom %}
\t\t\t\t\t\t\t{% set nb=nb+1 %}
\t\t\t\t\t\t\t{% if cdrom.title %}
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{{cdrom.title}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{{loan.createdAt |date('d-m-Y')}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{{loan.udatedAt |date('d-m-Y:h-m-s')}}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('loan_edit', {'id':loan.id,'cdrom':cdrom.id,'user':user.id})}}\">Restitution</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"\">Renouvellement</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</tbody>
\t</table>
\t<br>


\t{% if is_granted('ROLE_USER') %}
\t\t{% if (app.user.id == user.id) %}
\t\t\t{# <a href=\"{{ path('account_edit', {'id': user.id}) }}\">Modifier mon profil</a> #}
\t\t{% endif %}
\t\t{% if is_granted('ROLE_VOLONTEER') %}
\t\t\t<p>
\t\t\t\t<a class=\"btn btn-primary\" href=\" {{ path('user_index') }} \">Retour à la liste utilisateur</a>
\t\t\t\t<a class=\"btn btn-secondary\" href=\"{{ path('user_edit', {'id': user.id}) }}\">Éditer le profil</a>

\t\t\t\t{% if nb >= 5 %}

\t\t\t\t\t<div class=\"alert alert-dismissible alert-danger\" style=\"\">
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t\t<strong>{{user.firstname}} {{user.lastname}} ne peut plus emprunter
\t\t\t\t\t\tcar le compte posséde 5 ressources </strong>
\t\t\t\t\t</div>

\t\t\t\t{% else %}
\t\t\t\t\t<a class=\"btn btn-light\" href=\" {{ path('loan_new', {'user': user.id}) }} \">Créer un emprunt </a>
\t\t\t\t</p>
\t\t\t{% endif %}
\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t{{ include('user/_delete_form.html.twig') }}
\t\t\t{% endif %}
\t\t{% endif %}
\t{% endif %}
{% endblock %}
", "user/show.html.twig", "/Users/ndongmoussa/Desktop/localhost/symfony/GuinotBibliotheque/templates/user/show.html.twig");
    }
}
