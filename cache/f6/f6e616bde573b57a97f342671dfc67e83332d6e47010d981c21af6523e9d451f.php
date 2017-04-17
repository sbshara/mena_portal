<?php

/* auth/TMS/Trucks/TruckById.twig */
class __TwigTemplate_0133f301e222ad152b0a0a4b2942b1d103c906ae0c74e3f6a43e6c6b73930d3b extends Twig_Template
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
        echo "Assets & Resources - Truck ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["truck"] ?? null), "nickName", array(), "method"), "html", null, true);
    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        // line 6
        echo "    Truck By ID
    <br />
    This Truck Plate is: ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["truck"] ?? null), "nickName", array(), "method"), "html", null, true);
        echo "
    <br />
    ";
        // line 11
        echo "
    <br />
    <div class=\"carousel-slide\" id=\"truckCarousel\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 16
            echo "                <li data-target=\"truckCarousel\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "id", array()));
            echo "\"></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\" role=\"listbox\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 23
            echo "                <div class=\"item\">
                    <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "address", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["image"], "description", array()), "html", null, true);
            echo "\">
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>

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
        return array (  91 => 27,  80 => 24,  77 => 23,  73 => 22,  67 => 18,  58 => 16,  54 => 15,  48 => 11,  43 => 8,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}

{% block title %}Assets & Resources - Truck {{ truck.nickName() }}{% endblock %}

{% block contents %}
    Truck By ID
    <br />
    This Truck Plate is: {{ truck.nickName() }}
    <br />
    {#Current Mileage: {{ truck.currentMileage() }}#}

    <br />
    <div class=\"carousel-slide\" id=\"truckCarousel\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            {% for image in images %}
                <li data-target=\"truckCarousel\" data-slide-to=\"{{ image.id | e }}\"></li>
            {% endfor %}
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\" role=\"listbox\">
            {% for image in images %}
                <div class=\"item\">
                    <img src=\"{{ image.address }}\" alt=\"{{ image.description }}\">
                </div>
            {% endfor %}
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


{% endblock %}
", "auth/TMS/Trucks/TruckById.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/TMS/Trucks/TruckById.twig");
    }
}
