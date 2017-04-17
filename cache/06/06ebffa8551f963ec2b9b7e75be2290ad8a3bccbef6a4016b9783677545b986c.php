<?php

/* auth/Operations/Guidelines/newGuideline.twig */
class __TwigTemplate_6705438ffc3f930d62d63659ff26d1528b8d079cf30bdc1fc40b83183f46475a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/Operations/Guidelines/newGuideline.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bodyTags' => array($this, 'block_bodyTags'),
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/app.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 5
    public function block_bodyTags($context, array $blocks = array())
    {
        // line 6
        echo "    hold-transition skin-blue sidebar-collapse sidebar-mini
";
    }

    // line 9
    public function block_contents($context, array $blocks = array())
    {
        // line 10
        echo "    New Guideline
";
    }

    public function getTemplateName()
    {
        return "auth/Operations/Guidelines/newGuideline.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}

{% block title %}Home{% endblock %}

{% block bodyTags %}
    hold-transition skin-blue sidebar-collapse sidebar-mini
{% endblock %}

{% block contents %}
    New Guideline
{% endblock %}", "auth/Operations/Guidelines/newGuideline.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/Operations/Guidelines/newGuideline.twig");
    }
}
