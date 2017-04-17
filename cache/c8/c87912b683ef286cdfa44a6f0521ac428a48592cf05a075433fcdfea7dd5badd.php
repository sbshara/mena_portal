<?php

/* auth/TMS/Dashboard.twig */
class __TwigTemplate_4e20519746a11afcfa0fd8015d97f09cf77cdc89857f3e9ae70a8d8a341ca7b6 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable(($context["trucks"] ?? null));
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
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
                <ul class=\"pagination\">
                    <li><a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.Home", array("page" => 1, "perPage" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["pagination"] ?? null), "perPage", array()))), "html", null, true);
        echo "\">First</a></li>
                    <li><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.Home", array("page" => 1, "perPage" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["pagination"] ?? null), "perPage", array()))), "html", null, true);
        echo "\">&laquo;</a></li>
                    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->getSourceContext(), ($context["pagination"] ?? null), "firstVisible", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["pagination"] ?? null), "lastVisible", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 66
            echo "                        <li class=\"";
            if (($context["i"] == twig_get_attribute($this->env, $this->getSourceContext(), ($context["pagination"] ?? null), "page", array()))) {
                echo "disabled";
            }
            echo "\">
                            <a
                                    href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.Home", array("page" =>             // line 71
$context["i"], "perPage" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 72
($context["pagination"] ?? null), "perPage", array()))), "html", null, true);
            // line 73
            echo "\"
                                    class=\"";
            // line 74
            if (($context["i"] == twig_get_attribute($this->env, $this->getSourceContext(), ($context["pagination"] ?? null), "page", array()))) {
                echo "active";
            }
            echo "\"
                            >";
            // line 75
            echo twig_escape_filter($this->env, $context["i"]);
            echo "
                            </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                    <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.Home", array("page" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["pagination"] ?? null), "totalPages", array()), "perPage" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["pagination"] ?? null), "perPage", array()))), "html", null, true);
        echo "\">&raquo;</a></li>
                    <li><a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.Home", array("page" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["pagination"] ?? null), "totalPages", array()), "perPage" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["pagination"] ?? null), "perPage", array()))), "html", null, true);
        echo "\">Last</a></li>
                </ul>

            </div>
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
        return array (  177 => 80,  172 => 79,  162 => 75,  156 => 74,  153 => 73,  151 => 72,  150 => 71,  149 => 68,  141 => 66,  137 => 65,  133 => 64,  129 => 63,  125 => 61,  85 => 27,  80 => 25,  68 => 20,  64 => 18,  60 => 17,  50 => 10,  46 => 9,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
                {% for vehicle in trucks %}
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
                {% endfor %}

                <ul class=\"pagination\">
                    <li><a href=\"{{ path_for('TMS.Home', { page: 1, perPage: pagination.perPage }) }}\">First</a></li>
                    <li><a href=\"{{ path_for('TMS.Home', { page: 1, perPage: pagination.perPage }) }}\">&laquo;</a></li>
                    {% for i in pagination.firstVisible..pagination.lastVisible %}
                        <li class=\"{% if i == pagination.page %}disabled{% endif %}\">
                            <a
                                    href=\"{{ path_for(
                                    'TMS.Home',
                                    {
                                        page: i,
                                        perPage: pagination.perPage
                                    }) }}\"
                                    class=\"{% if i == pagination.page %}active{% endif %}\"
                            >{{ i | e }}
                            </a>
                        </li>
                    {% endfor %}
                    <li><a href=\"{{ path_for('TMS.Home', { page: pagination.totalPages, perPage: pagination.perPage }) }}\">&raquo;</a></li>
                    <li><a href=\"{{ path_for('TMS.Home', { page: pagination.totalPages, perPage: pagination.perPage }) }}\">Last</a></li>
                </ul>

            </div>
        </div>
{% endblock %}", "auth/TMS/Dashboard.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/TMS/Dashboard.twig");
    }
}
