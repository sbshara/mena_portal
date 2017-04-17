<?php

/* errors/404.twig */
class __TwigTemplate_a1aec602a5403a40f348a28b05722ba58fb81d773b334a16fc5d52851431b978 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "errors/404.twig", 1);
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
        echo "Error: 404";
    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        // line 6
        echo "        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>404 Error Page</h1>
            <small>Error: 404, Page not found</small>
            <!--GUIDANCE MAPPER (TOP RIGHT)-->
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("home"), "html", null, true);
        echo "\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">Error: 404</li>
            </ol>
            <!--END OF GUIDANCE MAPPER-->
        </section>

        <!-- Main content -->
        <section class=\"content\">

            <div class=\"error-page\">
        <h2 class=\"headline text-yellow\"> 404</h2>

        <div class=\"error-content\">
          <h3><i class=\"fa fa-warning text-yellow\"></i> Oops! Page not found.</h3>

          <p>
            We could not find the page you were looking for.<br/>
            You may <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("home"), "html", null, true);
        echo "\">return Home</a>.
          </p>
          <br/>
          <br/>
          <br/>
            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/img/error404.png\" width=\"250\" align=\"left\">
        </div>
      </div>
        </section>
    </div>
";
    }

    public function getTemplateName()
    {
        return "errors/404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 34,  66 => 29,  46 => 12,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}

{% block title %}Error: 404{% endblock %}

{% block contents %}
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>404 Error Page</h1>
            <small>Error: 404, Page not found</small>
            <!--GUIDANCE MAPPER (TOP RIGHT)-->
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path_for('home') }}\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">Error: 404</li>
            </ol>
            <!--END OF GUIDANCE MAPPER-->
        </section>

        <!-- Main content -->
        <section class=\"content\">

            <div class=\"error-page\">
        <h2 class=\"headline text-yellow\"> 404</h2>

        <div class=\"error-content\">
          <h3><i class=\"fa fa-warning text-yellow\"></i> Oops! Page not found.</h3>

          <p>
            We could not find the page you were looking for.<br/>
            You may <a href=\"{{ path_for('home') }}\">return Home</a>.
          </p>
          <br/>
          <br/>
          <br/>
            <img src=\"{{ base_url() }}/img/error404.png\" width=\"250\" align=\"left\">
        </div>
      </div>
        </section>
    </div>
{% endblock %}
", "errors/404.twig", "/Users/shiblie/Sites/mena_portal/resources/views/errors/404.twig");
    }
}
