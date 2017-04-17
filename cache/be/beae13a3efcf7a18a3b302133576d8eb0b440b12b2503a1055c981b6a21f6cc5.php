<?php

/* auth/TMS/Trucks/AllTrucks.twig */
class __TwigTemplate_f4d8e9e75f3d7d98a03bcf2858cf4db479e6b39113ac44c43c98697e474af821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/TMS/Trucks/AllTrucks.twig", 1);
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
        echo "    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            All Trucks & Vehicles
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
            <li class=\"active\">All Trucks</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class=\"content\">
        <div class=\"col-xs-12 table-responsive\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Trucks & Vehicles</h3>
                </div>
                <div class=\"box-body\">
                    <table id=\"allTrucks\" class=\"table table-responsive table-striped table-hover table-bordered\">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Registration</th>
                            <th>MY, Brand, Model</th>
                            <th>Registration Expiry</th>
                            <th>Insurance Expiry</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["trucks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["truck"]) {
            // line 37
            echo "                            <tr>
                                <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.TruckById", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["truck"], "id", array()))), "html", null, true);
            echo "\">=> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["truck"], "id", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["truck"], "nickName", array(), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["truck"], "brandModelYear", array(), "method"), "html", null, true);
            echo "</td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["truck"], "registration_date_end", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["truck"], "insurance_date_end", array()));
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['truck'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "auth/TMS/Trucks/AllTrucks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  101 => 42,  97 => 41,  93 => 40,  89 => 39,  83 => 38,  80 => 37,  76 => 36,  50 => 13,  46 => 12,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}

{% block title %}Assets & Resources - Trucks{% endblock %}

{% block contents %}
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            All Trucks & Vehicles
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"{{ base_url() }}\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"{{ path_for('TMS.Home') }}\">TMS</a></li>
            <li class=\"active\">All Trucks</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class=\"content\">
        <div class=\"col-xs-12 table-responsive\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Trucks & Vehicles</h3>
                </div>
                <div class=\"box-body\">
                    <table id=\"allTrucks\" class=\"table table-responsive table-striped table-hover table-bordered\">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Registration</th>
                            <th>MY, Brand, Model</th>
                            <th>Registration Expiry</th>
                            <th>Insurance Expiry</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for truck in trucks %}
                            <tr>
                                <td><a href=\"{{ path_for('TMS.TruckById', {'id':truck.id}) }}\">=> {{ truck.id }}</a></td>
                                <td>{{ truck.nickName() }}</td>
                                <td>{{ truck.brandModelYear() }}</td>
                                <td>{{ truck.registration_date_end }}</td>
                                <td>{{ truck.insurance_date_end | e }}</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
{% endblock %}", "auth/TMS/Trucks/AllTrucks.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/TMS/Trucks/AllTrucks.twig");
    }
}
