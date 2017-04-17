<?php

/* auth/HR/Applicant/allApplicants.twig */
class __TwigTemplate_eed604b9514310d2fd0db9dbc91f1ced8d2c18c8b85b882cd817d84396172c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/HR/Applicant/allApplicants.twig", 1);
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
        // line 6
        echo "    hold-transition skin-blue sidebar-collapse sidebar-mini
";
    }

    // line 9
    public function block_contents($context, array $blocks = array())
    {
        // line 10
        echo "    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            All Applicants
            <small>This is a list of the registered applicants</small>
        </h1>
        <!--GUIDANCE MAPPER (TOP RIGHT)-->
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("home"), "html", null, true);
        echo "\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li class=\"active\">All Applicants</li>
        </ol>
        <!--END OF GUIDANCE MAPPER-->
    </section>

    <!-- Main content -->
    <section class=\"content\">

        <div class=\"col-xs-12 table-responsive\">
            <table class=\"table table-responsive table-striped table-hover table-condensed\">
                <thead class=\"\">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Nationality</th>
                    <th>Gender</th>
                    <th>DoB</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "applicants", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["applicant"]) {
            // line 42
            echo "                    <tr>
                        <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.ApplicantById", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["applicant"], "id", array()))), "html", null, true);
            echo "\">=> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["applicant"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["applicant"], "first_name", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["applicant"], "last_name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["applicant"], "mobile_phone", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["applicant"], "per_email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["applicant"], "countryName", array(), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 48
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["applicant"], "gender", array()) == "M")) {
                echo "<i class=\"fa fa-male\"></i>";
            } else {
                echo "<i class=\"fa fa-female\"></i> ";
            }
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["applicant"], "birth_date", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['applicant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </tbody>
            </table>
        </div>
    </section>
    <!-- /.content -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "auth/HR/Applicant/allApplicants.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 52,  122 => 49,  114 => 48,  110 => 47,  106 => 46,  102 => 45,  96 => 44,  90 => 43,  87 => 42,  83 => 41,  57 => 18,  47 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}

{% block title %}Home{% endblock %}

{% block bodyTags %}
    hold-transition skin-blue sidebar-collapse sidebar-mini
{% endblock %}

{% block contents %}
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            All Applicants
            <small>This is a list of the registered applicants</small>
        </h1>
        <!--GUIDANCE MAPPER (TOP RIGHT)-->
        <ol class=\"breadcrumb\">
            <li><a href=\"{{ path_for('home') }}\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li class=\"active\">All Applicants</li>
        </ol>
        <!--END OF GUIDANCE MAPPER-->
    </section>

    <!-- Main content -->
    <section class=\"content\">

        <div class=\"col-xs-12 table-responsive\">
            <table class=\"table table-responsive table-striped table-hover table-condensed\">
                <thead class=\"\">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Nationality</th>
                    <th>Gender</th>
                    <th>DoB</th>
                </tr>
                </thead>
                <tbody>
                {% for applicant in HR.applicants %}
                    <tr>
                        <td><a href=\"{{ path_for('HR.ApplicantById', {'id':applicant.id}) }}\">=> {{ applicant.id }}</a></td>
                        <td>{{ applicant.first_name }}.{{ applicant.last_name }}</td>
                        <td>{{ applicant.mobile_phone }}</td>
                        <td>{{ applicant.per_email }}</td>
                        <td>{{ applicant.countryName() }}</td>
                        <td>{% if applicant.gender == 'M' %}<i class=\"fa fa-male\"></i>{% else %}<i class=\"fa fa-female\"></i> {% endif %}</td>
                        <td>{{ applicant.birth_date }}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </section>
    <!-- /.content -->
    </div>
{% endblock %}
", "auth/HR/Applicant/allApplicants.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/HR/Applicant/allApplicants.twig");
    }
}
