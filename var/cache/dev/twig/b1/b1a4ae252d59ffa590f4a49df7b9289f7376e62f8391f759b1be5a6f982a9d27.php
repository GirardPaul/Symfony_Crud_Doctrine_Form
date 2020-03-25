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

/* aliment/aliments.html.twig */
class __TwigTemplate_9df4035ceb04f0cf10407a2ee419010baaf3278bae2ceb9a482d804f8c2d36d0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aliment/aliments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aliment/aliments.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "aliment/aliments.html.twig", 1);
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

        echo "Aliments";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        echo "Liste de tous les aliments
";
        // line 5
        if ((isset($context["isCalorie"]) || array_key_exists("isCalorie", $context) ? $context["isCalorie"] : (function () { throw new RuntimeError('Variable "isCalorie" does not exist.', 5, $this->source); })())) {
            // line 6
            echo "avec moins de 50 calories
";
        } elseif (        // line 7
(isset($context["isGlucide"]) || array_key_exists("isGlucide", $context) ? $context["isGlucide"] : (function () { throw new RuntimeError('Variable "isGlucide" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "avec moins de 5 glucides
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<a href=\"/\" class=\"btn btn-primary\">Tout</a>
<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alimentsParCalorie", ["calorie" => 50]);
        echo "\" class=\"btn btn-primary\">Aliments avec moins de 50 calories au 100g</a>
<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alimentsParGlucide", ["glucide" => 5]);
        echo "\" class=\"btn btn-primary\">Aliments avec moins de 5 glucides au 100g</a>

<div class=\"row\">
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["aliments"]) || array_key_exists("aliments", $context) ? $context["aliments"] : (function () { throw new RuntimeError('Variable "aliments" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["aliment"]) {
            // line 18
            echo "

    <div class=\"col-12 col-md-6 col-lg-4 col-xl-3\">
        <div class=\"card border-primary mb-3 mx-auto\" style=\"max-width:20rem\">
            <div class=\"card-header text-center\">
                <img class=\"perso_imgAliment card-img-top\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["aliment"], "image", [], "any", false, false, false, 23))), "html", null, true);
            echo "\">
            </div>
            <div class=\"card-body\">
                <h3 class=\"card-title text-center pb-2 mx-3 border-bottom border-primary\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "nom", [], "any", false, false, false, 26), "html", null, true);
            echo "</h3>
                <p class=\"card-text\">
                    <h4 class=\"text-center\">Prix (kilo) : ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "prix", [], "any", false, false, false, 28), "html", null, true);
            echo "€</h4>
                    <table class=\"table text-center\">
                        <tr class=\"table-primary\">
                            <td>Propriété</td>
                            <td>Valeur (100gr)</td>
                        </tr>
                        <tr>
                            <td>Calorie</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "calorie", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <td>Protéines</td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "proteine", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <td>Glucides</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "glucide", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <td>Lipides</td>
                            <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aliment"], "lipide", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                        </tr>
                    </table>
                </p>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aliment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "aliment/aliments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 56,  187 => 48,  180 => 44,  173 => 40,  166 => 36,  155 => 28,  150 => 26,  144 => 23,  137 => 18,  133 => 17,  127 => 14,  123 => 13,  120 => 12,  110 => 11,  98 => 8,  96 => 7,  93 => 6,  91 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Aliments{% endblock %}
{% block monTitre %}Liste de tous les aliments
{% if isCalorie %}
avec moins de 50 calories
{% elseif isGlucide %}
avec moins de 5 glucides
{% endif %}
{% endblock %}
{% block body %}
<a href=\"/\" class=\"btn btn-primary\">Tout</a>
<a href=\"{{path(\"alimentsParCalorie\", {\"calorie\" : 50})}}\" class=\"btn btn-primary\">Aliments avec moins de 50 calories au 100g</a>
<a href=\"{{path(\"alimentsParGlucide\", {\"glucide\" : 5})}}\" class=\"btn btn-primary\">Aliments avec moins de 5 glucides au 100g</a>

<div class=\"row\">
    {% for aliment in aliments %}


    <div class=\"col-12 col-md-6 col-lg-4 col-xl-3\">
        <div class=\"card border-primary mb-3 mx-auto\" style=\"max-width:20rem\">
            <div class=\"card-header text-center\">
                <img class=\"perso_imgAliment card-img-top\" src=\"{{asset('images/' ~ aliment.image)}}\">
            </div>
            <div class=\"card-body\">
                <h3 class=\"card-title text-center pb-2 mx-3 border-bottom border-primary\">{{aliment.nom}}</h3>
                <p class=\"card-text\">
                    <h4 class=\"text-center\">Prix (kilo) : {{aliment.prix}}€</h4>
                    <table class=\"table text-center\">
                        <tr class=\"table-primary\">
                            <td>Propriété</td>
                            <td>Valeur (100gr)</td>
                        </tr>
                        <tr>
                            <td>Calorie</td>
                            <td>{{aliment.calorie}}</td>
                        </tr>
                        <tr>
                            <td>Protéines</td>
                            <td>{{aliment.proteine}}</td>
                        </tr>
                        <tr>
                            <td>Glucides</td>
                            <td>{{aliment.glucide}}</td>
                        </tr>
                        <tr>
                            <td>Lipides</td>
                            <td>{{aliment.lipide}}</td>
                        </tr>
                    </table>
                </p>
            </div>
        </div>
    </div>
    {% endfor %}
</div>
{% endblock %}", "aliment/aliments.html.twig", "/Applications/MAMP/htdocs/aliments/templates/aliment/aliments.html.twig");
    }
}
