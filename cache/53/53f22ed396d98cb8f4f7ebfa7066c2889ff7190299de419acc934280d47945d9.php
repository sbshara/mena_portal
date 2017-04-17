<?php

/* auth/HR/Employee/newEmployee.twig */
class __TwigTemplate_9905820650fd0c16b5488bd5d74382492b12a5b4831b2613f18a5a322c9d53bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/HR/Employee/newEmployee.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "New Employee";
    }

    // line 4
    public function block_bodyTags($context, array $blocks = array())
    {
        // line 5
        echo "    hold-transition skin-blue sidebar-collapse sidebar-mini
";
    }

    // line 8
    public function block_contents($context, array $blocks = array())
    {
        // line 9
        echo "<section class=\"content\" xmlns=\"http://www.w3.org/1999/html\">
        <div class=\"raw\">
            <div class=\"register-logo\">
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\"><b>MENA</b> Assistance</a>
            </div>
            <div class=\"register-box-body\">
                <p class=\"login-box-msg\">
                    Register a new Employee<br/>
                    <small>Adding an employee will automatically create a user account</small>
                </p>

                <form action=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.NewEmployee"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\">
                    <div class=\"form-group has-feedback";
        // line 21
        echo (($this->getAttribute(($context["errors"] ?? null), "applicant_name", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" onkeyup=\"applicantAutoComplete()\" name=\"applicant_name\" id=\"applicant_name\" value=\"";
        // line 22
        if ($this->getAttribute(($context["old"] ?? null), "first_name", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "first_name", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "last_name", array()), "html", null, true);
        }
        echo "\" class=\"form-control\" placeholder=\"Start typing Applicant name\">
                        <ul id=\"applicant_option\" name=\"applicant_option\"></ul>
                        <input type=\"hidden\" name=\"applicant_id\" id=\"applicant_id\">
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        ";
        // line 26
        if ($this->getAttribute(($context["errors"] ?? null), "applicant_name", array())) {
            // line 27
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "applicant_name", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 29
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 31
        echo (($this->getAttribute(($context["errors"] ?? null), "emp_ref", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"emp_ref\" id=\"emp_ref\" class=\"form-control\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "emp_ref", array()), "html", null, true);
        echo "\" placeholder=\"New Employee Company ID / Reference\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        ";
        // line 34
        if ($this->getAttribute(($context["errors"] ?? null), "emp_ref", array())) {
            // line 35
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "emp_ref", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 37
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 39
        echo (($this->getAttribute(($context["errors"] ?? null), "hire_date", array())) ? (" has-error") : (""));
        echo "\">
                        <label>Joining Date:</label>
                        <div class=\"input-group date\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"date\" class=\"form-control pull-right\" name=\"hire_date\" id=\"hire_date\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "hire_date", array()), "html", null, true);
        echo "\">
                        </div>
                        ";
        // line 47
        if ($this->getAttribute(($context["errors"] ?? null), "hire_date", array())) {
            // line 48
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "hire_date", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 50
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 52
        echo (($this->getAttribute(($context["errors"] ?? null), "extension", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"extension\" id=\"extension\" class=\"form-control\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "extension", array()), "html", null, true);
        echo "\" placeholder=\"New Employee assigned business extension\"/>
                        <span class=\"glyphicon glyphicon-phone-alt form-control-feedback\"></span>
                        ";
        // line 55
        if ($this->getAttribute(($context["errors"] ?? null), "extension", array())) {
            // line 56
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "extension", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 58
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 60
        echo (($this->getAttribute(($context["errors"] ?? null), "business_email", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"business_email\" id=\"business_email\" class=\"form-control\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "business_email", array()), "html", null, true);
        echo "\" placeholder=\"New Employee assigned email\"/>
                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                        ";
        // line 63
        if ($this->getAttribute(($context["errors"] ?? null), "extension", array())) {
            // line 64
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "extension", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 66
        echo "                    </div>

                    <div class=\"form-group has-feedback\">
                        <p class=\"help-block\">
                                <i>Activate user account for this Employee?</i>&nbsp;
                            <input type=\"checkbox\" name=\"user\"></p>
                    </div>
                    <button type=\"submit\" name=\"submit\" id=\"submit\"class=\"btn btn-default\">Register New Employee</button>
                    ";
        // line 74
        echo $this->getAttribute(($context["csrf"] ?? null), "field", array());
        echo "
                </form>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "auth/HR/Employee/newEmployee.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 74,  179 => 66,  173 => 64,  171 => 63,  166 => 61,  162 => 60,  158 => 58,  152 => 56,  150 => 55,  145 => 53,  141 => 52,  137 => 50,  131 => 48,  129 => 47,  124 => 45,  115 => 39,  111 => 37,  105 => 35,  103 => 34,  98 => 32,  94 => 31,  90 => 29,  84 => 27,  82 => 26,  71 => 22,  67 => 21,  63 => 20,  52 => 12,  47 => 9,  44 => 8,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
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
{% block title %}New Employee{% endblock %}

{% block bodyTags %}
    hold-transition skin-blue sidebar-collapse sidebar-mini
{% endblock %}

{% block contents %}
<section class=\"content\" xmlns=\"http://www.w3.org/1999/html\">
        <div class=\"raw\">
            <div class=\"register-logo\">
                <a href=\"{{ base_url() }}\"><b>MENA</b> Assistance</a>
            </div>
            <div class=\"register-box-body\">
                <p class=\"login-box-msg\">
                    Register a new Employee<br/>
                    <small>Adding an employee will automatically create a user account</small>
                </p>

                <form action=\"{{ path_for('HR.NewEmployee') }}\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\">
                    <div class=\"form-group has-feedback{{ errors.applicant_name ? ' has-error' : '' }}\">
                        <input type=\"text\" onkeyup=\"applicantAutoComplete()\" name=\"applicant_name\" id=\"applicant_name\" value=\"{% if old.first_name %}{{ old.first_name }}.{{ old.last_name }}{% endif %}\" class=\"form-control\" placeholder=\"Start typing Applicant name\">
                        <ul id=\"applicant_option\" name=\"applicant_option\"></ul>
                        <input type=\"hidden\" name=\"applicant_id\" id=\"applicant_id\">
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        {% if errors.applicant_name %}
                            <span class=\"help-block\">{{ errors.applicant_name | first }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group has-feedback{{ errors.emp_ref ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"emp_ref\" id=\"emp_ref\" class=\"form-control\" value=\"{{ old.emp_ref }}\" placeholder=\"New Employee Company ID / Reference\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        {% if errors.emp_ref %}
                            <span class=\"help-block\">{{ errors.emp_ref | first }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group has-feedback{{ errors.hire_date ? ' has-error' : '' }}\">
                        <label>Joining Date:</label>
                        <div class=\"input-group date\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"date\" class=\"form-control pull-right\" name=\"hire_date\" id=\"hire_date\" value=\"{{ old.hire_date }}\">
                        </div>
                        {% if errors.hire_date %}
                            <span class=\"help-block\">{{ errors.hire_date | first }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group has-feedback{{ errors.extension ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"extension\" id=\"extension\" class=\"form-control\" value=\"{{ old.extension }}\" placeholder=\"New Employee assigned business extension\"/>
                        <span class=\"glyphicon glyphicon-phone-alt form-control-feedback\"></span>
                        {% if errors.extension %}
                            <span class=\"help-block\">{{ errors.extension | first }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group has-feedback{{ errors.business_email ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"business_email\" id=\"business_email\" class=\"form-control\" value=\"{{ old.business_email }}\" placeholder=\"New Employee assigned email\"/>
                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                        {% if errors.extension %}
                            <span class=\"help-block\">{{ errors.extension | first }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group has-feedback\">
                        <p class=\"help-block\">
                                <i>Activate user account for this Employee?</i>&nbsp;
                            <input type=\"checkbox\" name=\"user\"></p>
                    </div>
                    <button type=\"submit\" name=\"submit\" id=\"submit\"class=\"btn btn-default\">Register New Employee</button>
                    {{ csrf.field | raw }}
                </form>
            </div>
        </div>
{% endblock %}
", "auth/HR/Employee/newEmployee.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/HR/Employee/newEmployee.twig");
    }
}
