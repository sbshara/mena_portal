<?php

/* auth/Operations/Guidelines/allGuidelines.twig */
class __TwigTemplate_2cd91155f9413537aebfe75eafe0732772b5ba0bc348c7646e52da78126e47f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/Operations/Guidelines/allGuidelines.twig", 1);
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
        echo "All Guidelines";
    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        // line 6
        echo "    All Guidelines
";
    }

    public function getTemplateName()
    {
        return "auth/Operations/Guidelines/allGuidelines.twig";
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

{% block title %}All Guidelines{% endblock %}

{% block contents %}
    All Guidelines
{% endblock %}", "auth/Operations/Guidelines/allGuidelines.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/Operations/Guidelines/allGuidelines.twig");
    }
}
