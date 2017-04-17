<?php

/* auth/TMS/Services/AllServices.twig */
class __TwigTemplate_ae79459e0c966f92f86bbb71f01c9e381990f4650c0abe7578465065760cba3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/TMS/Services/AllServices.twig", 1);
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
        echo "TMS - All Services";
    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        // line 6
        echo "    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            All Service & Maintenance Records
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.Home"), "html", null, true);
        echo "\">TMS</a></li>
            <li class=\"active\">All Services</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class=\"content\">
        <div class=\"col-xs-12 table-responsive\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Service & Maintenance Records</h3>
                </div>
                <div class=\"box-body\">
                    <table id=\"allServices\" class=\"table table-responsive table-striped table-hover table-bordered\">
                        <thead>
                        <tr>
                            <th>Service ID</th>
                            <th>Truck / Vehicle</th>
                            <th>Mileage</th>
                            <th>Service Category</th>
                            <th>Date</th>
                            <th>Cost</th>
                            <th>User</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 39
            echo "                            <tr>
                                <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.ServiceById", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "id", array()))), "html", null, true);
            echo "\">=> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "id", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "vehicleName", array(), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "service_mileage", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "categoryName", array(), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "service_date_start", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "cost", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["service"], "serviceUser", array(), "method"));
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "auth/TMS/Services/AllServices.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 49,  111 => 46,  107 => 45,  103 => 44,  99 => 43,  95 => 42,  91 => 41,  85 => 40,  82 => 39,  78 => 38,  50 => 13,  46 => 12,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}

{% block title %}TMS - All Services{% endblock %}

{% block contents %}
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            All Service & Maintenance Records
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"{{ base_url() }}\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"{{ path_for('TMS.Home') }}\">TMS</a></li>
            <li class=\"active\">All Services</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class=\"content\">
        <div class=\"col-xs-12 table-responsive\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Service & Maintenance Records</h3>
                </div>
                <div class=\"box-body\">
                    <table id=\"allServices\" class=\"table table-responsive table-striped table-hover table-bordered\">
                        <thead>
                        <tr>
                            <th>Service ID</th>
                            <th>Truck / Vehicle</th>
                            <th>Mileage</th>
                            <th>Service Category</th>
                            <th>Date</th>
                            <th>Cost</th>
                            <th>User</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for service in services %}
                            <tr>
                                <td><a href=\"{{ path_for('TMS.ServiceById', {'id':service.id}) }}\">=> {{ service.id }}</a></td>
                                <td>{{ service.vehicleName() }}</td>
                                <td>{{ service.service_mileage }}</td>
                                <td>{{ service.categoryName() }}</td>
                                <td>{{ service.service_date_start }}</td>
                                <td>{{ service.cost }}</td>
                                <td>{{ service.serviceUser() | e }}</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
{% endblock %}
", "auth/TMS/Services/AllServices.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/TMS/Services/AllServices.twig");
    }
}
