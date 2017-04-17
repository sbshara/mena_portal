<?php

/* auth/Projects/home.twig */
class __TwigTemplate_e35394b8b17492d8a355e1d61bd80d48a34845fb4bf3846214ca67cc46dc8d97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/Projects/home.twig", 1);
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
        echo "Projects - Home";
    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        // line 6
        echo "        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Projects Home Page
                <small>This is your projects home page</small>
            </h1>
            <!--GUIDANCE MAPPER (TOP RIGHT)-->
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("home"), "html", null, true);
        echo "\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">Projects</li>
            </ol>
            <!--END OF GUIDANCE MAPPER-->
        </section>

        <!-- Main content -->
        <section class=\"content\">

            <h1>Projects Home Page</h1>

        </section>
        <!-- /.content -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "auth/Projects/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}

{% block title %}Projects - Home{% endblock %}

{% block contents %}
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Projects Home Page
                <small>This is your projects home page</small>
            </h1>
            <!--GUIDANCE MAPPER (TOP RIGHT)-->
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path_for('home') }}\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">Projects</li>
            </ol>
            <!--END OF GUIDANCE MAPPER-->
        </section>

        <!-- Main content -->
        <section class=\"content\">

            <h1>Projects Home Page</h1>

        </section>
        <!-- /.content -->
    </div>
{% endblock %}
", "auth/Projects/home.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/Projects/home.twig");
    }
}
