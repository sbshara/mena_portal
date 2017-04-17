<?php

/* auth/Operations/Assets/assets.twig */
class __TwigTemplate_d5a5c4dacf97bd67aa237e32e9a39fc4961f005ed75d4817de6907d3cab2c675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/Operations/Assets/assets.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Assets & Resources - Assets";
    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        // line 6
        echo "    Assets Home
";
    }

    public function getTemplateName()
    {
        return "auth/Operations/Assets/assets.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}

{% block title %}Assets & Resources - Assets{% endblock %}

{% block contents %}
    Assets Home
{% endblock %}", "auth/Operations/Assets/assets.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/Operations/Assets/assets.twig");
    }
}
