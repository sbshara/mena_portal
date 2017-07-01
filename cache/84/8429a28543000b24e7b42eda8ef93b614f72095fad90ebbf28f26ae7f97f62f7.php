<?php

/* home.twig */
class __TwigTemplate_2ee353a9cd32541d35b3256f8870138dd87f8995b11f383884434a49a5cb9b0c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.NewEmployee"), "html", null, true);
        echo "\">New Employee</a>

            <br/>
            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.ApplicantWizard"), "html", null, true);
        echo "\">Applicant Wizard</a>
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
        return array (  79 => 34,  73 => 31,  67 => 28,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
            <a href=\"{{ path_for('HR.NewEmployee') }}\">New Employee</a>

            <br/>
            <a href=\"{{ path_for('HR.ApplicantWizard') }}\">Applicant Wizard</a>
        </section>
        <!-- /.content -->
    </div>
{% endblock %}
", "home.twig", "/Users/shiblie/Sites/mena_portal/resources/views/home.twig");
    }
}