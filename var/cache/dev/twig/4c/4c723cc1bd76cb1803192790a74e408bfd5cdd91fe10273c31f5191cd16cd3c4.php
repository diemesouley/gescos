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

/* ges_cos/createDetail.html.twig */
class __TwigTemplate_6b966992fbebabe8babacc24d02f2909934b9e63ef0a4fb4edcf54152bc103fe extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ges_cos/createDetail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ges_cos/createDetail.html.twig", 1);
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
        echo "    <h1>Creation d'une Catégorie ! <h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDetail"]) || array_key_exists("formDetail", $context) ? $context["formDetail"] : (function () { throw new RuntimeError('Variable "formDetail" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-group\">
        <form_widget(formDetail)>
        <form_widget(formDetail.Categorie)>
        </div>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDetail"]) || array_key_exists("formDetail", $context) ? $context["formDetail"] : (function () { throw new RuntimeError('Variable "formDetail" does not exist.', 11, $this->source); })()), 'form_end');
        echo "
    <button Type=\"submit\" class=\"btn btn-success\">Ajouter un Catégorie</button>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ges_cos/createDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  63 => 6,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Creation d'une Catégorie ! <h1>

    {{ form_start(formDetail) }}
        <div class=\"form-group\">
        <form_widget(formDetail)>
        <form_widget(formDetail.Categorie)>
        </div>
    {{ form_end(formDetail) }}
    <button Type=\"submit\" class=\"btn btn-success\">Ajouter un Catégorie</button>
{% endblock %} ", "ges_cos/createDetail.html.twig", "/home/souleymane/Bureau/GesCos/templates/ges_cos/createDetail.html.twig");
    }
}
