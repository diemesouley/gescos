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

/* ges_cos/createFournisseur.html.twig */
class __TwigTemplate_b8fd4ca862f732203fdd1634c34251d19e27cd10be0fbcf26d1b3ce8cfc1a64c extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ges_cos/createFournisseur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ges_cos/createFournisseur.html.twig", 1);
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
        echo "    <h1>Creation d'un Fournisseur ! <h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFournisseur"]) || array_key_exists("formFournisseur", $context) ? $context["formFournisseur"] : (function () { throw new RuntimeError('Variable "formFournisseur" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-group\">
        <form_widget(formFournisseur)>
        </div>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFournisseur"]) || array_key_exists("formFournisseur", $context) ? $context["formFournisseur"] : (function () { throw new RuntimeError('Variable "formFournisseur" does not exist.', 10, $this->source); })()), 'form_end');
        echo "
    <button Type=\"submit\" class=\"btn btn-success\">Ajouter un Fournisseur</button>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ges_cos/createFournisseur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 10,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Creation d'un Fournisseur ! <h1>

    {{ form_start(formFournisseur) }}
        <div class=\"form-group\">
        <form_widget(formFournisseur)>
        </div>
    {{ form_end(formFournisseur) }}
    <button Type=\"submit\" class=\"btn btn-success\">Ajouter un Fournisseur</button>

{% endblock %} ", "ges_cos/createFournisseur.html.twig", "/home/souleymane/Bureau/GesCos/templates/ges_cos/createFournisseur.html.twig");
    }
}
