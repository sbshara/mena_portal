<?php

/* auth/HR/Interview/newInterview.twig */
class __TwigTemplate_0c63503b569f9f872548cddb9a25d510f5bf28d8680242f598fb67c8463e6d7c extends Twig_Template
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
                    <input name=\"applicantID\" id=\"applicantID\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? null), "id", array()), "html", null, true);
        echo "\" type=\"hidden\"/>
                    <input
                            type=\"search\"
                            class=\"form-control\"
                            name=\"applicantName\"
                            id=\"applicant\"
                            placeholder=\"Enter Applicant Name...\"
                            ";
        // line 22
        if ($this->getAttribute(($context["applicant"] ?? null), "first_name", array())) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? null), "first_name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["applicant"] ?? null), "last_name", array()), "html", null, true);
            echo "\"";
        }
        // line 23
        echo "                            ";
        if ($this->getAttribute(($context["applicant"] ?? null), "first_name", array())) {
            echo "disabled";
        }
        // line 24
        echo "                            onkeyup=\"getApplicantName(this)\"
                    />
                    <div id=\"name-guide\" class=\"help-block\"></div>
                    <span class=\"glyphicon glyphicon-search form-control-feedback\"></span>
                    ";
        // line 28
        if ($this->getAttribute(($context["errors"] ?? null), "applicantName", array())) {
            // line 29
            echo "                        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "applicantName", array())), "html", null, true);
            echo "</span>
                    ";
        }
        // line 31
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 32
        echo (($this->getAttribute(($context["errors"] ?? null), "position", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"position\">Position applied for: </label>
                    <select name=\"position\" id=\"position\" class=\"form-control select2-container\">
                        <option value=\"0\">Please select a job title from the list...</option>
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "titles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 37
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["title"], "id", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["title"], "description", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["title"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "position", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["title"], "title", array()));
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </select>
                    ";
        // line 40
        if ($this->getAttribute(($context["errors"] ?? null), "position", array())) {
            // line 41
            echo "                        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "position", array())), "html", null, true);
            echo "</span>
                    ";
        }
        // line 43
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 44
        echo (($this->getAttribute(($context["errors"] ?? null), "department", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"department\">Interviewing for which department? </label>
                    <select name=\"department\" id=\"department\" class=\"form-control select2-container\" onchange=\"getDepartmentHead(this, 'department_head');\">
                        <option value=\"0\">Please select a department...</option>
                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "departments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 49
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
        // line 51
        echo "                    </select>
                    ";
        // line 52
        if ($this->getAttribute(($context["errors"] ?? null), "department", array())) {
            // line 53
            echo "                        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "department", array())), "html", null, true);
            echo "</span>
                    ";
        }
        // line 55
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 56
        echo (($this->getAttribute(($context["errors"] ?? null), "department_head", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"department_head\">Department Head: </label>
                    <select name=\"department_head\" id=\"department_head\" class=\"form-control select2-container\" >
                    </select>
                    ";
        // line 60
        if ($this->getAttribute(($context["errors"] ?? null), "department_head", array())) {
            // line 61
            echo "                        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "department_head", array())), "html", null, true);
            echo "</span>
                    ";
        }
        // line 63
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 64
        echo (($this->getAttribute(($context["errors"] ?? null), "interviewer1", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"interviewer1\">Interviewer: </label>
                    <select name=\"interviewer1\" id=\"interviewer1\" class=\"form-control select2-container\">
                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "employees", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 68
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["employee"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "interviewer1", array()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "fullName", array()));
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </select>
                    ";
        // line 71
        if ($this->getAttribute(($context["errors"] ?? null), "interviewer1", array())) {
            // line 72
            echo "                        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "interviewer1", array())), "html", null, true);
            echo "</span>
                    ";
        }
        // line 74
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 75
        echo (($this->getAttribute(($context["errors"] ?? null), "interviewer2", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"interviewer2\">Interviewer: </label>
                    <select name=\"interviewer2\" id=\"interviewer2\" class=\"form-control select2-container\">
                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "employees", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 79
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["employee"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "interviewer1", array()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "fullName", array()));
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                    </select>
                    ";
        // line 82
        if ($this->getAttribute(($context["errors"] ?? null), "interviewer2", array())) {
            // line 83
            echo "                        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "interviewer2", array())), "html", null, true);
            echo "</span>
                    ";
        }
        // line 85
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 86
        echo (($this->getAttribute(($context["errors"] ?? null), "interview_date", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"datepicker\">Interview Date: </label>
                    <div class=\"input-group date\">
                        <input type=\"text\" class=\"form-control pull-right datepicker\" id=\"interview_date\" name=\"interview_date\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "interview_date", array())) ? ($this->getAttribute(($context["old"] ?? null), "interview_date", array())) : ("")), "html", null, true);
        echo "\">
                        <div class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></div>
                    </div>
                    ";
        // line 92
        if ($this->getAttribute(($context["errors"] ?? null), "interview_date", array())) {
            // line 93
            echo "                        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "interview_date", array())), "html", null, true);
            echo "</span>
                    ";
        }
        // line 95
        echo "                </div>
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
        return array (  306 => 95,  300 => 93,  298 => 92,  292 => 89,  286 => 86,  283 => 85,  277 => 83,  275 => 82,  272 => 81,  257 => 79,  253 => 78,  247 => 75,  244 => 74,  238 => 72,  236 => 71,  233 => 70,  218 => 68,  214 => 67,  208 => 64,  205 => 63,  199 => 61,  197 => 60,  190 => 56,  187 => 55,  181 => 53,  179 => 52,  176 => 51,  161 => 49,  157 => 48,  150 => 44,  147 => 43,  141 => 41,  139 => 40,  136 => 39,  119 => 37,  115 => 36,  108 => 32,  105 => 31,  99 => 29,  97 => 28,  91 => 24,  86 => 23,  78 => 22,  68 => 15,  63 => 13,  59 => 12,  55 => 11,  49 => 10,  43 => 7,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
                    <input name=\"applicantID\" id=\"applicantID\" value=\"{{ applicant.id }}\" type=\"hidden\"/>
                    <input
                            type=\"search\"
                            class=\"form-control\"
                            name=\"applicantName\"
                            id=\"applicant\"
                            placeholder=\"Enter Applicant Name...\"
                            {% if applicant.first_name %}value=\"{{ applicant.first_name }} {{ applicant.last_name }}\"{% endif %}
                            {% if applicant.first_name %}disabled{% endif %}
                            onkeyup=\"getApplicantName(this)\"
                    />
                    <div id=\"name-guide\" class=\"help-block\"></div>
                    <span class=\"glyphicon glyphicon-search form-control-feedback\"></span>
                    {% if errors.applicantName %}
                        <span class=\"help-block\">{{ errors.applicantName | first }}</span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.position ? ' has-error' : '' }}\">
                    <label for=\"position\">Position applied for: </label>
                    <select name=\"position\" id=\"position\" class=\"form-control select2-container\">
                        <option value=\"0\">Please select a job title from the list...</option>
                        {% for title in HR.titles %}
                            <option value=\"{{ title.id }}\" title=\"{{ title.description }}\" {% if title.id == old.position %}selected{% endif %}>{{ title.title | e }}</option>
                        {% endfor %}
                    </select>
                    {% if errors.position %}
                        <span class=\"help-block\">{{ errors.position | first }}</span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.department ? ' has-error' : '' }}\">
                    <label for=\"department\">Interviewing for which department? </label>
                    <select name=\"department\" id=\"department\" class=\"form-control select2-container\" onchange=\"getDepartmentHead(this, 'department_head');\">
                        <option value=\"0\">Please select a department...</option>
                        {% for department in HR.departments %}
                            <option value=\"{{ department.id }}\" {% if old.department == department.id %}selected{% endif %} >{{ department.dept_name | e }}</option>
                        {% endfor %}
                    </select>
                    {% if errors.department %}
                        <span class=\"help-block\">{{ errors.department | first }}</span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.department_head ? ' has-error' : '' }}\">
                    <label for=\"department_head\">Department Head: </label>
                    <select name=\"department_head\" id=\"department_head\" class=\"form-control select2-container\" >
                    </select>
                    {% if errors.department_head %}
                        <span class=\"help-block\">{{ errors.department_head | first }}</span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.interviewer1 ? ' has-error' : '' }}\">
                    <label for=\"interviewer1\">Interviewer: </label>
                    <select name=\"interviewer1\" id=\"interviewer1\" class=\"form-control select2-container\">
                        {% for employee in HR.employees %}
                            <option value=\"{{ employee.id }}\" {% if employee.id == old.interviewer1 %}selected=\"selected\"{% endif %}>{{ employee.fullName | e }}</option>
                        {% endfor %}
                    </select>
                    {% if errors.interviewer1 %}
                        <span class=\"help-block\">{{ errors.interviewer1 | first }}</span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.interviewer2 ? ' has-error' : '' }}\">
                    <label for=\"interviewer2\">Interviewer: </label>
                    <select name=\"interviewer2\" id=\"interviewer2\" class=\"form-control select2-container\">
                        {% for employee in HR.employees %}
                            <option value=\"{{ employee.id }}\" {% if employee.id == old.interviewer1 %}selected=\"selected\"{% endif %}>{{ employee.fullName | e }}</option>
                        {% endfor %}
                    </select>
                    {% if errors.interviewer2 %}
                        <span class=\"help-block\">{{ errors.interviewer2 | first }}</span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.interview_date ? ' has-error' : '' }}\">
                    <label for=\"datepicker\">Interview Date: </label>
                    <div class=\"input-group date\">
                        <input type=\"text\" class=\"form-control pull-right datepicker\" id=\"interview_date\" name=\"interview_date\" value=\"{{ old.interview_date ? old.interview_date : '' }}\">
                        <div class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></div>
                    </div>
                    {% if errors.interview_date %}
                        <span class=\"help-block\">{{ errors.interview_date | first }}</span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-primary\" value=\"Confirm Interview Schedule\" />
                </div>
            </form>
        </div>
    </div>
{% endblock %}
", "auth/HR/Interview/newInterview.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/HR/Interview/newInterview.twig");
    }
}
