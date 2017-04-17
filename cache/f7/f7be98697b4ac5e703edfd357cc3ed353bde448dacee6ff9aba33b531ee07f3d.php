<?php

/* auth/TMS/Dashboard.twig */
class __TwigTemplate_b241e9deb19b6e970a8207552ab6b9a74f179d1ecdf012e88d29b9c274089a4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/TMS/Dashboard.twig", 1);
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
        echo "Truck Management System";
    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        // line 6
        echo "    <section class=\"content-header\">
        <h1><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\"><b>MENA</b> Assistance</a><small>Truck Management System (TMS)</small></h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("OPS.Home"), "html", null, true);
        echo "\">Operations</a></li>
            <li class=\"active\">TMS - Dashboard</li>
        </ol>
    </section>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["OPS"] ?? null), "Vehicles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 18
            echo "                    <div class=\"box\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><a class=\"fa fa-truck\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.TruckById", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["vehicle"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["vehicle"], "nickName", array(), "method"), "html", null, true);
            echo "</a> <small> (VIN: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["vehicle"], "vin", array()));
            echo ")</small></h3>
                        </div>
                        <div class=\"box-body\">
                            <div class=\"row\">
                                <p class=\"text-center\">
                                    <strong>Warranty Expiry (Date): ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["vehicle"], "warranty_expiry_date", array()), "html", null, true);
            echo "</strong>
                                    <br />
                                    <strong>Warranty Expiry (Mileage): ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["vehicle"], "warranty_expiry_mileage", array()), "html", null, true);
            echo "</strong>
                                </p>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <!-- Sample Progress Bar-->
                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-green progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                            <span class=\"sr-only\">40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <!-- End Sample Progress Bar -->
                                    <!-- Mileage till next Service  -->
                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-warning progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                            <span class=\"sr-only\">60% Complete (success)</span>
                                        </div>
                                    </div>
                                    <!-- End Mileage till next service -->
                                    <!-- Days until next Service -->
                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-danger progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                            <span class=\"sr-only\">80% Complete (success)</span>
                                        </div>
                                    </div>
                                    <!-- End Days till next service -->
                                </div>
                                <div class=\"col-md-4\">
                                    Additional Vehicle Details Goes Here:
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "auth/TMS/Dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 62,  85 => 27,  80 => 25,  68 => 20,  64 => 18,  60 => 17,  50 => 10,  46 => 9,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}

{% block title %}Truck Management System{% endblock %}

{% block contents %}
    <section class=\"content-header\">
        <h1><a href=\"{{ base_url() }}\"><b>MENA</b> Assistance</a><small>Truck Management System (TMS)</small></h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"{{ base_url() }}\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"{{ path_for('OPS.Home') }}\">Operations</a></li>
            <li class=\"active\">TMS - Dashboard</li>
        </ol>
    </section>
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {% for vehicle in OPS.Vehicles %}
                    <div class=\"box\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><a class=\"fa fa-truck\" href=\"{{ path_for('TMS.TruckById', {id: vehicle.id}) }}\"> {{ vehicle.nickName() }}</a> <small> (VIN: {{ vehicle.vin | e }})</small></h3>
                        </div>
                        <div class=\"box-body\">
                            <div class=\"row\">
                                <p class=\"text-center\">
                                    <strong>Warranty Expiry (Date): {{ vehicle.warranty_expiry_date }}</strong>
                                    <br />
                                    <strong>Warranty Expiry (Mileage): {{ vehicle.warranty_expiry_mileage }}</strong>
                                </p>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-8\">
                                    <!-- Sample Progress Bar-->
                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-green progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 40%\">
                                            <span class=\"sr-only\">40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <!-- End Sample Progress Bar -->
                                    <!-- Mileage till next Service  -->
                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-warning progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%\">
                                            <span class=\"sr-only\">60% Complete (success)</span>
                                        </div>
                                    </div>
                                    <!-- End Mileage till next service -->
                                    <!-- Days until next Service -->
                                    <div class=\"progress\">
                                        <div class=\"progress-bar progress-bar-danger progress-bar-striped\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                            <span class=\"sr-only\">80% Complete (success)</span>
                                        </div>
                                    </div>
                                    <!-- End Days till next service -->
                                </div>
                                <div class=\"col-md-4\">
                                    Additional Vehicle Details Goes Here:
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                {% endfor %}
            </div>
        </div>
{% endblock %}
", "auth/TMS/Dashboard.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/TMS/Dashboard.twig");
    }
}
