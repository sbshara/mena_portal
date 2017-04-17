<?php

/* auth/TMS/Trucks/TruckById.twig */
class __TwigTemplate_905882e23668d6b0344f0ed3c2b0bc10af8af19d881c048c52242e3f932992e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/TMS/Trucks/TruckById.twig", 1);
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
        echo "



    <div class=\"carousel-slide\" id=\"truckCarousel\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"item active\">
                <img src=\"img_chania.jpg\" alt=\"Chania\">
            </div>

            <div class=\"item\">
                <img src=\"img_chania2.jpg\" alt=\"Chania\">
            </div>

            <div class=\"item\">
                <img src=\"img_flower.jpg\" alt=\"Flower\">
            </div>

            <div class=\"item\">
                <img src=\"img_flower2.jpg\" alt=\"Flower\">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>


    Truck By ID <br>

    This Truck Plate is: ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["truck"] ?? null), "nickName", array(), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "auth/TMS/Trucks/TruckById.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 51,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}

{% block title %}Assets & Resources - Trucks{% endblock %}

{% block contents %}




    <div class=\"carousel-slide\" id=\"truckCarousel\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\" role=\"listbox\">
            <div class=\"item active\">
                <img src=\"img_chania.jpg\" alt=\"Chania\">
            </div>

            <div class=\"item\">
                <img src=\"img_chania2.jpg\" alt=\"Chania\">
            </div>

            <div class=\"item\">
                <img src=\"img_flower.jpg\" alt=\"Flower\">
            </div>

            <div class=\"item\">
                <img src=\"img_flower2.jpg\" alt=\"Flower\">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>


    Truck By ID <br>

    This Truck Plate is: {{ truck.nickName() }}
{% endblock %}
", "auth/TMS/Trucks/TruckById.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/TMS/Trucks/TruckById.twig");
    }
}
