<?php

/* auth/HR/Interview/newInterview.twig */
class __TwigTemplate_409bfe3a91c0e2f946684c5a51669de80841d35522f755ed16563269cc111a7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/HR/Interview/newInterview.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "New Interview";
    }

    // line 3
    public function block_contents($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"content\">
    <div class=\"raw\">
        <div class=\"register-logo\">
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\"><b>MENA</b> Assistance</a>
        </div>
        <div class=\"register-box-body\">
            <p class=\"login-box-msg\">Schedule an interview for ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? null), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? null), "last_name", array()), "html", null, true);
        echo "</p>
            <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.NewInterview"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"on\">
                ";
        // line 12
        echo $this->getAttribute(($context["csrf"] ?? null), "field", array());
        echo "
                <div class=\"form-group has-feedback";
        // line 13
        echo (($this->getAttribute(($context["errors"] ?? null), "applicantName", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"applicantName\">Applicant Name: </label>
                    <input type=\"search\" class=\"form-control\" name=\"applicantName\" id=\"applicantName\" placeholder=\"Enter Applicant Name...\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? null), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? null), "last_name", array()), "html", null, true);
        echo "\" disabled>
                    <span class=\"glyphicon glyphicon-search form-control-feedback\"></span>
                    ";
        // line 17
        if ($this->getAttribute(($context["errors"] ?? null), "applicantName", array())) {
            // line 18
            echo "                        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "applicantName", array())), "html", null, true);
            echo "</span>
                    ";
        }
        // line 20
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 21
        echo (($this->getAttribute(($context["errors"] ?? null), "department", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"department\">Interviewing for which department? </label>
                    <select name=\"department\" id=\"department\" class=\"form-control select2-container\" >
                        <option value=\"0\">Please select a department...</option>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "departments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 26
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["old"] ?? null), "department", array()) == $this->getAttribute($context["department"], "id", array()))) {
                echo "selected";
            }
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "dept_name", array()));
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </select>
                </div>
                <div class=\"form-group has-feedback";
        // line 30
        echo (($this->getAttribute(($context["errors"] ?? null), "department_head", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"department_head\">Department Head: </label>
                    <select name=\"department_head\" id=\"department_head\" class=\"form-control select2-container\" >

                    </select>
                </div>

                <div class=\"form-group has-feedback\">
                    <input type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-primary\" value=\"Confirm Interview Schedule\" />
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "auth/HR/Interview/newInterview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 30,  112 => 28,  97 => 26,  93 => 25,  86 => 21,  83 => 20,  77 => 18,  75 => 17,  68 => 15,  63 => 13,  59 => 12,  55 => 11,  49 => 10,  43 => 7,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %}New Interview{% endblock %}
{% block contents %}
<section class=\"content\">
    <div class=\"raw\">
        <div class=\"register-logo\">
            <a href=\"{{ base_url() }}\"><b>MENA</b> Assistance</a>
        </div>
        <div class=\"register-box-body\">
            <p class=\"login-box-msg\">Schedule an interview for {{ applicant.first_name }} {{ applicant.last_name }}</p>
            <form action=\"{{ path_for('HR.NewInterview') }}\" method=\"post\" autocomplete=\"on\">
                {{ csrf.field | raw }}
                <div class=\"form-group has-feedback{{ errors.applicantName ? ' has-error' : '' }}\">
                    <label for=\"applicantName\">Applicant Name: </label>
                    <input type=\"search\" class=\"form-control\" name=\"applicantName\" id=\"applicantName\" placeholder=\"Enter Applicant Name...\" value=\"{{ applicant.first_name }} {{ applicant.last_name }}\" disabled>
                    <span class=\"glyphicon glyphicon-search form-control-feedback\"></span>
                    {% if errors.applicantName %}
                        <span class=\"help-block\">{{ errors.applicantName | first }}</span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.department ? ' has-error' : '' }}\">
                    <label for=\"department\">Interviewing for which department? </label>
                    <select name=\"department\" id=\"department\" class=\"form-control select2-container\" >
                        <option value=\"0\">Please select a department...</option>
                        {% for department in HR.departments %}
                            <option value=\"{{ department.id }}\" {% if old.department == department.id %}selected{% endif %} >{{ department.dept_name | e }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"form-group has-feedback{{ errors.department_head ? ' has-error' : '' }}\">
                    <label for=\"department_head\">Department Head: </label>
                    <select name=\"department_head\" id=\"department_head\" class=\"form-control select2-container\" >

                    </select>
                </div>

                <div class=\"form-group has-feedback\">
                    <input type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-primary\" value=\"Confirm Interview Schedule\" />
                </div>
            </form>
        </div>
    </div>
{% endblock %}", "auth/HR/Interview/newInterview.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/HR/Interview/newInterview.twig");
    }
}
