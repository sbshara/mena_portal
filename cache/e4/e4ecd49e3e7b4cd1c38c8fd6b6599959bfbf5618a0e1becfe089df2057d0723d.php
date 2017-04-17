<?php

/* auth/Operations/Assets/AllTrucks.twig */
class __TwigTemplate_6a5217919921a38f009414766e6172da20fcc4731a46d60688c76430156e02fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/Operations/Assets/AllTrucks.twig", 1);
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
        echo "Assets & Resources - Trucks";
    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        // line 6
        echo "    All Trucks
";
    }

    public function getTemplateName()
    {
        return "auth/Operations/Assets/AllTrucks.twig";
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

{% block title %}Assets & Resources - Trucks{% endblock %}

{% block contents %}
    All Trucks
{% endblock %}", "auth/Operations/Assets/AllTrucks.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/Operations/Assets/AllTrucks.twig");
    }
}
