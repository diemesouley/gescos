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

/* ges_cos/createProduit.html.twig */
class __TwigTemplate_a6cb757574ac53acbb9818769da862b0d60ee5199b360bcaa6eeefb8f0108326 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ges_cos/createProduit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ges_cos/createProduit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"panel panel-primary>
             <div class=\"panel panel-heading\">
             <i class=\"icon_menu><i/>Creation d'un Produit !
        </div>
        <div class=\"panel-body\">  
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProduit"]) || array_key_exists("formProduit", $context) ? $context["formProduit"] : (function () { throw new RuntimeError('Variable "formProduit" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-group\">
        <form_widget(formProduit)>
        <form_widget(formProduit.Categorie)>
        </div>
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProduit"]) || array_key_exists("formProduit", $context) ? $context["formProduit"] : (function () { throw new RuntimeError('Variable "formProduit" does not exist.', 15, $this->source); })()), 'form_end');
        echo "
    <button Type=\"submit\" class=\"btn btn-success\">Ajouter un Produit</button>

<table class=\"table\">
    <thead>
        <th>libProduit</th><th>descripProduit</th><th>prixProduit</th><th>quantiteDispoProduit</th><th>libCategorie</th>
    </thead>
        <tbody>
          ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prod"]) || array_key_exists("prod", $context) ? $context["prod"] : (function () { throw new RuntimeError('Variable "prod" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 24
            echo "        <tr>
             <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "libProduit", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
             <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "descripProduit", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
             <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "prixProduit", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
             <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pro"], "quantiteDispoProduit", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
             <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pro"], "Categorie", [], "any", false, false, false, 29), "libCategorie", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
     </table>    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ges_cos/createProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  109 => 29,  105 => 28,  101 => 27,  97 => 26,  93 => 25,  90 => 24,  86 => 23,  75 => 15,  67 => 10,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\">
        <div class=\"panel panel-primary>
             <div class=\"panel panel-heading\">
             <i class=\"icon_menu><i/>Creation d'un Produit !
        </div>
        <div class=\"panel-body\">  
    {{ form_start(formProduit) }}
        <div class=\"form-group\">
        <form_widget(formProduit)>
        <form_widget(formProduit.Categorie)>
        </div>
    {{ form_end(formProduit) }}
    <button Type=\"submit\" class=\"btn btn-success\">Ajouter un Produit</button>

<table class=\"table\">
    <thead>
        <th>libProduit</th><th>descripProduit</th><th>prixProduit</th><th>quantiteDispoProduit</th><th>libCategorie</th>
    </thead>
        <tbody>
          {% for pro in prod %}
        <tr>
             <td>{{pro.libProduit}}</td>
             <td>{{pro.descripProduit}}</td>
             <td>{{pro.prixProduit}}</td>
             <td>{{pro.quantiteDispoProduit}}</td>
             <td>{{pro.Categorie.libCategorie}}</td>
        </tr>
        {% endfor %}
        </tbody>
     </table>    
    {% endblock %}", "ges_cos/createProduit.html.twig", "/home/souleymane/Bureau/GesCos/templates/ges_cos/createProduit.html.twig");
    }
}
