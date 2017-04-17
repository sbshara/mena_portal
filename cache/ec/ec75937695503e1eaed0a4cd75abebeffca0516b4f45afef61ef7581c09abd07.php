<?php

/* home.twig */
class __TwigTemplate_98b642e9cea4226b14b59a1c3a14e6f9262e0d3d15d112eee72c6dad7f5d65b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "home.twig", 1);
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
        echo "hold-transition skin-blue sidebar-collapse sidebar-mini";
    }

    // line 7
    public function block_contents($context, array $blocks = array())
    {
        // line 8
        echo "        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Home Page
                <small>This is your home page</small>
            </h1>
            <!--GUIDANCE MAPPER (TOP RIGHT)-->
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
                <li class=\"active\">Home</li>
            </ol>
            <!--END OF GUIDANCE MAPPER-->
        </section>

        <!-- Main content -->
        <section class=\"content\">

            Home Page

            <br/>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.NewApplicant"), "html", null, true);
        echo "\">New Applicant</a>

            <br/>
            <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.AllApplicants"), "html", null, true);
        echo "\">List All Applicants</a>


<!--
            <br/>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.NewEmployee"), "html", null, true);
        echo "\">New Employee</a>
-->


        </section>
        <!-- /.content -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 36,  73 => 31,  67 => 28,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}

{% block title %}Home{% endblock %}

{% block bodyTags %}hold-transition skin-blue sidebar-collapse sidebar-mini{% endblock %}

{% block contents %}
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Home Page
                <small>This is your home page</small>
            </h1>
            <!--GUIDANCE MAPPER (TOP RIGHT)-->
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
                <li class=\"active\">Home</li>
            </ol>
            <!--END OF GUIDANCE MAPPER-->
        </section>

        <!-- Main content -->
        <section class=\"content\">

            Home Page

            <br/>
            <a href=\"{{ path_for('HR.NewApplicant') }}\">New Applicant</a>

            <br/>
            <a href=\"{{ path_for('HR.AllApplicants') }}\">List All Applicants</a>


<!--
            <br/>
            <a href=\"{{ path_for('HR.NewEmployee') }}\">New Employee</a>
-->


        </section>
        <!-- /.content -->
    </div>
{% endblock %}
", "home.twig", "/Users/shiblie/Sites/mena_portal/resources/views/home.twig");
    }
}
