<?php

/* auth/HR/Department/allDepartments.twig */
class __TwigTemplate_46098ee1cddf816c2f902bb7e7a8470dffb1049a6884236b6f27b6a39a132620 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/HR/Department/allDepartments.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "All Departments";
    }

    // line 4
    public function block_bodyTags($context, array $blocks = array())
    {
        // line 5
        echo "    hold-transition skin-blue sidebar-collapse sidebar-mini
";
    }

    // line 9
    public function block_contents($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "auth/HR/Department/allDepartments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}
{% block title %}All Departments{% endblock %}

{% block bodyTags %}
    hold-transition skin-blue sidebar-collapse sidebar-mini
{% endblock %}


{% block contents %}
{% endblock %}
", "auth/HR/Department/allDepartments.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/HR/Department/allDepartments.twig");
    }
}
