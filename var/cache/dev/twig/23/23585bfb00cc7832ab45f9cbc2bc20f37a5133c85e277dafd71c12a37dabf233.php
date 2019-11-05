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
        echo "    <h1>Creation d'un Produit ! <h1>
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProduit"]) || array_key_exists("formProduit", $context) ? $context["formProduit"] : (function () { throw new RuntimeError('Variable "formProduit" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-group\">
        <form_widget(formProduit)>
        <form_widget(formProduit.Categorie)>
        </div>
        
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formProduit"]) || array_key_exists("formProduit", $context) ? $context["formProduit"] : (function () { throw new RuntimeError('Variable "formProduit" does not exist.', 11, $this->source); })()), 'form_end');
        echo "
    <button Type=\"submit\" class=\"btn btn-success\">Ajouter un Produit</button>
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
        return array (  71 => 11,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Creation d'un Produit ! <h1>
    {{ form_start(formProduit) }}
        <div class=\"form-group\">
        <form_widget(formProduit)>
        <form_widget(formProduit.Categorie)>
        </div>
        
    {{ form_end(formProduit) }}
    <button Type=\"submit\" class=\"btn btn-success\">Ajouter un Produit</button>
{% endblock %}", "ges_cos/createProduit.html.twig", "/home/souleymane/Bureau/GesCos/templates/ges_cos/createProduit.html.twig");
    }
}
