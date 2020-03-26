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

/* admin/admin_aliment/adminAliment.html.twig */
class __TwigTemplate_c935c5076f756ac401896209ebcea72ddcc9002c327e82c4c91b1ed96b9658fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'monTitre' => [$this, 'block_monTitre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_aliment/adminAliment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin_aliment/adminAliment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin_aliment/adminAliment.html.twig", 1);
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

        echo "Administration";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        echo "Page d'administration";
        
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

";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "    
<div class=\"alert alert-success\">

    ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "


</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_aliment_creation");
        echo "\" class=\"btn btn-success\">Ajouter</a>
<table class=\"table\">
    <tr class=\"table-primary\">
        <td>Image</td>
        <td>Aliment</td>
        <td>Prix</td>
        <td>Calorie</td>
        <td>Protéines</td>
        <td>Glucides</td>
        <td>Lipides</td>
        <td>Actions</td>
    </tr>
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aliments"]) || array_key_exists("aliments", $context) ? $context["aliments"] : (function () { throw new RuntimeError('Variable "aliments" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["aliment"]) {
            // line 34
            echo "        <tr>
                <td><img style=\"width:70px; height:60px; object-fit: cover;\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/aliments/" . twig_get_attribute($this->env, $this->source, $context["aliment"], "image", [], "any", false, false, false, 35))), "html", null, true);
            echo "\"></td>
                <td><strong>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "</strong></td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "prix", [], "any", false, false, false, 37), "html", null, true);
            echo "€</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "calorie", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "proteine", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "glucide", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "lipide", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-secondary\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_aliment_modification", ["id" => twig_get_attribute($this->env, $this->source, $context["aliment"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Modifier</a>
                    <form onsubmit=\"return confirm('Confirmer la suppression?')\" style=\"display: inline-block;\" action=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_aliment_suppression", ["id" => twig_get_attribute($this->env, $this->source, $context["aliment"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_method\" value=\"delete\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("SUP" . twig_get_attribute($this->env, $this->source, $context["aliment"], "id", [], "any", false, false, false, 46))), "html", null, true);
            echo "\">
                        <input type=\"submit\" class=\"btn btn-danger\" value=\"Suppression\">
                    </form>
                </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aliment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin_aliment/adminAliment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 52,  196 => 46,  191 => 44,  187 => 43,  182 => 41,  178 => 40,  174 => 39,  170 => 38,  166 => 37,  162 => 36,  158 => 35,  155 => 34,  151 => 33,  136 => 21,  133 => 20,  121 => 14,  116 => 11,  112 => 10,  108 => 8,  98 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Administration{% endblock %}

{% block monTitre %}Page d'administration{% endblock %}

{% block body %}


{% for message in app.flashes('success') %}
    
<div class=\"alert alert-success\">

    {{message}}


</div>

{% endfor %}

<a href=\"{{path('admin_aliment_creation')}}\" class=\"btn btn-success\">Ajouter</a>
<table class=\"table\">
    <tr class=\"table-primary\">
        <td>Image</td>
        <td>Aliment</td>
        <td>Prix</td>
        <td>Calorie</td>
        <td>Protéines</td>
        <td>Glucides</td>
        <td>Lipides</td>
        <td>Actions</td>
    </tr>
    {% for aliment in aliments %}
        <tr>
                <td><img style=\"width:70px; height:60px; object-fit: cover;\" src=\"{{asset('images/aliments/' ~ aliment.image)}}\"></td>
                <td><strong>{{aliment.nom}}</strong></td>
                <td>{{aliment.prix}}€</td>
                <td>{{aliment.calorie}}</td>
                <td>{{aliment.proteine}}</td>
                <td>{{aliment.glucide}}</td>
                <td>{{aliment.lipide}}</td>
                <td>
                    <a class=\"btn btn-secondary\" href=\"{{path('admin_aliment_modification', {'id' : aliment.id})}}\">Modifier</a>
                    <form onsubmit=\"return confirm('Confirmer la suppression?')\" style=\"display: inline-block;\" action=\"{{path('admin_aliment_suppression', {'id' : aliment.id })}}\" method=\"post\">
                        <input type=\"hidden\" name=\"_method\" value=\"delete\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{csrf_token('SUP' ~ aliment.id)}}\">
                        <input type=\"submit\" class=\"btn btn-danger\" value=\"Suppression\">
                    </form>
                </td>
        </tr>
    {% endfor %}
</table>
{% endblock %}", "admin/admin_aliment/adminAliment.html.twig", "/Applications/MAMP/htdocs/aliments/templates/admin/admin_aliment/adminAliment.html.twig");
    }
}
