<?php

/* auth/HR/Applicant/newApplicant.twig */
class __TwigTemplate_2db6fa0d0c4b8874c6d7bcbb43ff5bf6f9f7ce07ac348c47d3a3c00516795a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/HR/Applicant/newApplicant.twig", 1);
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
        echo "New Applicant";
    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        // line 6
        echo "<section class=\"content-header\">
    <h1>
        New Applicant
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
        <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.Home"), "html", null, true);
        echo "\">HR</a></li>
        <li class=\"active\">New Applicant</li>
    </ol>
</section>
<section class=\"content\">
    <div class=\"box-header has-border\">
        <h3 class=\"box-title\">New Applicant Entry</h3>
    </div>
    <div class=\"box-body\">
        <form action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.NewApplicant"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\" >
                    ";
        // line 22
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["csrf"] ?? null), "field", array());
        echo "
                    <fieldset>

                        <div class=\"form-group has-feedback";
        // line 25
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "first_name", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"first_name\">First Name: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <input type=\"text\" name=\"first_name\" id=\"first_name\" class=\"form-control\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "first_name", array()), "html", null, true);
        echo "\" placeholder=\"Applicant's First Name\" />
                            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                            ";
        // line 29
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "first_name", array())) {
            // line 30
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "first_name", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 32
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 33
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "last_name", array())) ? (" has-error") : (""));
        echo "\">
                            <label class=\"required\" for=\"last_name\">Last Name: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <input type=\"text\" name=\"last_name\" id=\"last_name\" class=\"form-control\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "last_name", array()), "html", null, true);
        echo "\" placeholder=\"Applicant's Last Name\"/>
                            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                            ";
        // line 37
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "last_name", array())) {
            // line 38
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "last_name", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 40
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 41
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "per_email", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"per_email\">Personal Email: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <input type=\"email\" name=\"per_email\" id=\"per_email\" placeholder=\"applicant@domain.com\" class=\"form-control\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "per_email", array()), "html", null, true);
        echo "\"/>
                            <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                            ";
        // line 45
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "per_email", array())) {
            // line 46
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "per_email", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 48
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 49
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "mobile_phone", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"mobile_phone\">Mobile Phone Number: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <input type=\"tel\" name=\"mobile_phone\" id=\"mobile_phone\" placeholder=\"+971 50 000 0000\" class=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "mobile_phone", array()), "html", null, true);
        echo "\"/>
                            <span class=\"glyphicon glyphicon-phone form-control-feedback\"></span>
                            ";
        // line 53
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "mobile_phone", array())) {
            // line 54
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "mobile_phone", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 56
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 57
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "gender", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"male\">Gender: &nbsp;</label><span class=\"text-red\"><b>*</b></span> &nbsp;
                            <input type=\"radio\" name=\"gender\" id=\"male\" value=\"M\" ";
        // line 59
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "gender", array()) == "M")) {
            echo "checked=\"checked\"";
        }
        echo "/>
                            <span class=\"fa fa-male\"> Male &nbsp; &nbsp;</span>
                            <input type=\"radio\" name=\"gender\" id=\"female\" value=\"F\" ";
        // line 61
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "gender", array()) == "F")) {
            echo "checked=\"checked\"";
        }
        echo "/>
                            <span class=\"fa fa-female\"> Female</span>
                            ";
        // line 63
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "gender", array())) {
            // line 64
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "gender", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 66
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 67
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "nationality", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"nationality\">Nationality: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <select class=\"form-control\" name=\"nationality\" id=\"nationality\">
                                <option value=\"\">Please Select ... </option>
                                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 72
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "nationality", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "country_name", array()));
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            </select>
                            ";
        // line 75
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "nationality", array())) {
            // line 76
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "nationality", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 78
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 79
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "dob", array())) ? (" has-error") : (""));
        echo "\">
                                <label for=\"dob\">Date of Birth: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                                <div class=\"input-group date\">
                                    <div class=\"input-group-addon\">
                                        <i class=\"fa fa-calendar\"></i>
                                    </div>
                                    <input type=\"date\" class=\"form-control pull-right date-picker\" name=\"dob\" id=\"dob\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "dob", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "dob", array())) : ("1984-09-03")), "html", null, true);
        echo "\">
                                </div>
                                ";
        // line 87
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "dob", array())) {
            // line 88
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "dob", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 90
        echo "                        </div>
                    </fieldset>
                    <fieldset>
                        <div class=\"form-group has-feedback";
        // line 93
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "languageCount", array())) ? (" has-error") : (""));
        echo "\">
                            <label class=\"required\">Languages: &nbsp;</label><span class=\"text-red\"><b>*</b></span><br/>
                            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "languages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 96
            echo "                                <label class=\"checkbox-inline\">
                                    <input
                                            type=\"checkbox\"
                                            id=\"";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["language"], "id", array()), "html", null, true);
            echo "\"
                                            name=\"language_[]\"
                                            value=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["language"], "id", array()), "html", null, true);
            echo "\"
                                            onchange=\"languageCounter(this)\"
                                    />&nbsp;";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["language"], "language_name", array()));
            echo " &nbsp; &nbsp;
                                </label> &nbsp; &nbsp;
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                            <input type=\"hidden\" name=\"languageCount\" id=\"languageCount\" value=\"0\" />
                            ";
        // line 107
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "languageCount", array())) {
            // line 108
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "languageCount", array())), "html", null, true);
            echo " language.</span>
                            ";
        }
        // line 110
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 111
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "expectation", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"expectation\">Expected Salary: <span class=\"help-block inline\"><small><i>Expected Salary Amount (inclusive of benefits) in U.A.E. Dirhams</i></small></span></label>
                            <div class=\"input-group has-feedback\">
                                <span class=\"input-group-addon\">AED</span>
                                <input type=\"number\" name=\"expectation\" id=\"expectation\" class=\"form-control\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "expectation", array()), "html", null, true);
        echo "\" placeholder=\"Enter expected amount in UAE Dirhams\">
                                <span class=\"input-group-addon\">.00</span>
                            </div>
    <!--                            <span class=\"glyphicon glyphicon-usd form-control-feedback\"></span>-->
                            ";
        // line 119
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "expectation", array())) {
            // line 120
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "expectation", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 122
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 123
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa", array())) ? (" has-error") : (""));
        echo "\">
                            <label>Current Visa Status: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <br/>

                            <label class=\"radio-inline\">
                                <input
                                    type=\"radio\"
                                    name=\"visa\"
                                    id=\"employee_residence\"
                                    value=\"Employee Residence\" ";
        // line 132
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa", array()) == "Employee Residence")) {
            echo "checked=\"checked\"";
        }
        // line 133
        echo "                                />Employee Residency &nbsp;
                            </label>
                            <label class=\"radio-inline\">
                                <input
                                    type=\"radio\"
                                    name=\"visa\"
                                    id=\"family_residence\"
                                    value=\"Family Residence\" ";
        // line 140
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa", array()) == "Family Residence")) {
            echo "checked=\"checked\"";
        }
        // line 141
        echo "                                />Family Residency &nbsp;
                            </label>

                            <label class=\"radio-inline\">
                                <input
                                    type=\"radio\"
                                    name=\"visa\"
                                    id=\"visit\"
                                    value=\"Visit\" ";
        // line 149
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa", array()) == "Visit")) {
            echo "checked=\"checked\"";
        }
        // line 150
        echo "                                />Visit Visa &nbsp;
                            </label>
                            <label class=\"radio-inline\">
                                <input
                                    type=\"radio\"
                                    name=\"visa\"
                                    id=\"tourist\"
                                    value=\"Tourist\" ";
        // line 157
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa", array()) == "Tourist")) {
            echo "checked=\"checked\"";
        }
        // line 158
        echo "                                />Tourist Visa &nbsp;
                            </label>
                            <label class=\"radio-inline\">
                                <input
                                    type=\"radio\"
                                    name=\"visa\"
                                    id=\"expired\"
                                    value=\"Expired\" ";
        // line 165
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa", array()) == "Expired")) {
            echo "checked=\"checked\"";
        }
        // line 166
        echo "                                />Expired Visa &nbsp;
                            </label>
                            <label class=\"radio-inline\">
                                <input
                                    type=\"radio\"
                                    name=\"visa\"
                                    id=\"cencelled\"
                                    value=\"cencelled\" ";
        // line 173
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa", array()) == "cancelled")) {
            echo "checked=\"checked\"";
        }
        // line 174
        echo "                                />Cancelled Visa &nbsp;
                            </label>
                            ";
        // line 177
        echo "
                            ";
        // line 178
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa", array())) {
            // line 179
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 181
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 182
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa_age", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"visa_age\">Visa Age: &nbsp;
                                <span class=\"text-red\"><b>*</b></span> &nbsp;
                                <span class=\"help-block inline\">
                                    <small>
                                        <i>Time since the first issuance of visa from current sponsor</i>
                                    </small>
                                </span>
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"visa_age\" id=\"visa_age\" placeholder=\"Two years ...\" value=\"";
        // line 191
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa_age", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa_age", array())) : ("")), "html", null, true);
        echo "\" />&nbsp;
                            ";
        // line 192
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa_age", array())) {
            // line 193
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa_age", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 195
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 196
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "notice", array())) ? (" has-error") : (""));
        echo "\">
                                <label for=\"notice\">Required Notice Period: &nbsp;
                                    <span class=\"text-red\"><b>*</b></span>
                                </label>
                                <input type=\"text\" class=\"form-control\" name=\"notice\" id=\"notice\" value=\"";
        // line 200
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "notice", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "notice", array())) : ("")), "html", null, true);
        echo "\" placeholder=\"One month ...\" />&nbsp;
                                ";
        // line 201
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "notice", array())) {
            // line 202
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "notice", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 204
        echo "                            </div>
                        <div class=\"form-group has-feedback";
        // line 205
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "source", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"source\">Application Source:  &nbsp;
                                <span class=\"text-red\"><b>*</b></span> &nbsp;
                                <span class=\"help-block inline\">
                                    <small>
                                        <i>How did the applicant hear about us</i>
                                    </small>
                                </span>
                            </label>

                            <select class=\"form-control\" name=\"source\" id=\"source\">
                                <option value=\"\" ";
        // line 216
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "source", array()) == "")) {
            echo "selected";
        }
        echo ">Please Select ...</option>
                                <option value=\"HR Agency\" ";
        // line 217
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "source", array()) == "HR Agency")) {
            echo "selected";
        }
        echo ">HR Agency</option>
                                <option value=\"Search Engine\" ";
        // line 218
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "source", array()) == "Search Engine")) {
            echo "selected";
        }
        echo ">Search Engine</option>
                                <option value=\"Friend or Colleague\" ";
        // line 219
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "source", array()) == "Friend")) {
            echo "selected";
        }
        echo ">Friend</option>
                                <option value=\"Other\" ";
        // line 220
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "source", array()) == "Other")) {
            echo "selected";
        }
        echo ">Other</option>
                                <option value=\"No Answer\" ";
        // line 221
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "source", array()) == "No Answer")) {
            echo "selected";
        }
        echo ">No Answer</option>
                            </select>
                            ";
        // line 223
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "source", array())) {
            // line 224
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "source", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 226
        echo "                        </div>
                    </fieldset>
                    <div class=\"form-group has-feedback";
        // line 228
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "profilepic", array())) ? (" has-error") : (""));
        echo "\">
                        <label class=\"control-label\" for=\"profilePic\">Photo: &nbsp;
                            <span class=\"help-block inline\">
                                <small>
                                    <i>File must be *.jpg, *.jpeg, *.png, *.gif, or *.bmb and &lt; 3MBs</i>
                                </small>
                            </span>
                        </label>
                        <input type=\"file\" id=\"profilePic\" name=\"profilepic\" value=\"";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "profilepic", array()), "html", null, true);
        echo "\" class=\"file\">

<!--                        <img id=\"profilePicApplicantFRM\" src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/img/applicants/defaultMale.png\" height=\"40\" class=\"profile-image img-circle\">-->
                        ";
        // line 239
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "profilepic", array())) {
            // line 240
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "profilepic", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 242
        echo "                    </div>
                    <div id=\"newAttachment\" class=\"form-group\">
                        <label for=\"help-me\">Attachments:</label>
                        <p class=\"help-block\" id=\"help-me\"><span><i>Attach CV, Passport Copy, VISA Copy, Educational Degree, or any other related documents<br/><mark>Remember to rename the files respectively</mark></i></span></p>
                        <input type=\"hidden\" id=\"attachmentCounter\" name=\"attachmentCounter\" value=\"-1\">
                        <input type=\"button\" id=\"add\" class=\"btn btn-xs\" onclick=\"showInput('divattachmentGroup', 'attachmentCounter')\" value=\"Add New\" title=\"Add new attachment field\"/>
                        <input type=\"button\" id=\"remove\" class=\"btn btn-xs btn-danger\" onclick=\"hideInput('divattachmentGroup', 'attachmentCounter')\" value=\"Remove\" title=\"Removes the last item\" />
                        <br/>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 250
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry0", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType0", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer0", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate0", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate0", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup0\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment0\">
                                <label for=\"attachment0\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment0\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 255
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry0\">
                                <label for=\"attachmentCountry0\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry0\" id=\"attachmentCountry0\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 260
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentCountry0", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "                                </select>
                                ";
        // line 263
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry0", array())) {
            // line 264
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 266
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 267
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType0\">
                                <label for=\"attachmentType0\">Type: &nbsp;</label>
                                <input id=\"attachmentType0\" name=\"attachmentType0\" type=\"text\" value=\"";
        // line 269
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType0", array()), "html", null, true);
        echo "\">
                                ";
        // line 270
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType0", array())) {
            // line 271
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 273
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 274
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer0\">
                                <label for=\"attachmentIssuer0\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer0\" name=\"attachmentIssuer0\" value=\"";
        // line 276
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer0", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 277
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer0", array())) {
            // line 278
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 280
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 281
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate0\">
                                <label for=\"attachmentIssueDate0\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate0\" name=\"attachmentIssueDate0\" value=\"";
        // line 283
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate0", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate0", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 284
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate0", array())) {
            // line 285
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 287
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 288
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate0\">
                                <label for=\"attachmentExpiryDate0\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate0\" name=\"attachmentExpiryDate0\" value=\"";
        // line 290
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate0", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate0", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 291
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate0", array())) {
            // line 292
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 294
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 296
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry1", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType1", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer1", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate1", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate1", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup1\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment1\">
                                <label for=\"attachment1\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment1\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 301
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry1\">
                                <label for=\"attachmentCountry1\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry1\" id=\"attachmentCountry1\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 306
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentCountry1", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        echo "                                </select>
                                ";
        // line 309
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry1", array())) {
            // line 310
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 312
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 314
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType1\">
                                <label for=\"attachmentType1\">Type: &nbsp;</label>
                                <input id=\"attachmentType1\" name=\"attachmentType1\" type=\"text\" value=\"";
        // line 316
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType1", array()), "html", null, true);
        echo "\">
                                ";
        // line 317
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType1", array())) {
            // line 318
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 320
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 321
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer1\">
                                <label for=\"attachmentIssuer1\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer1\" name=\"attachmentIssuer1\" value=\"";
        // line 323
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer1", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 324
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer1", array())) {
            // line 325
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 327
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 328
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate1\">
                                <label for=\"attachmentIssueDate1\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate1\" name=\"attachmentIssueDate1\" value=\"";
        // line 330
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate1", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate1", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 331
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate1", array())) {
            // line 332
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 334
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 335
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate1\">
                                <label for=\"attachmentExpiryDate1\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate1\" name=\"attachmentExpiryDate1\" value=\"";
        // line 337
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate1", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate1", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 338
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate1", array())) {
            // line 339
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 341
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 343
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry2", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType2", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer2", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate2", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate2", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup2\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment2\">
                                <label for=\"attachment2\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment2\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 348
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry2\">
                                <label for=\"attachmentCountry2\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry2\" id=\"attachmentCountry2\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 353
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentCountry2", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 355
        echo "                                </select>
                                ";
        // line 356
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry2", array())) {
            // line 357
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 359
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 361
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType2\">
                                <label for=\"attachmentType2\">Type: &nbsp;</label>
                                <input id=\"attachmentType2\" name=\"attachmentType2\" type=\"text\" value=\"";
        // line 363
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType2", array()), "html", null, true);
        echo "\">
                                ";
        // line 364
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType2", array())) {
            // line 365
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 367
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 368
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer2\">
                                <label for=\"attachmentIssuer2\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer2\" name=\"attachmentIssuer2\" value=\"";
        // line 370
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer2", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 371
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer2", array())) {
            // line 372
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 374
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 375
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate2\">
                                <label for=\"attachmentIssueDate2\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate2\" name=\"attachmentIssueDate2\" value=\"";
        // line 377
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate2", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate2", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 378
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate2", array())) {
            // line 379
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 381
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 382
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate2\">
                                <label for=\"attachmentExpiryDate2\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate2\" name=\"attachmentExpiryDate2\" value=\"";
        // line 384
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate2", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate2", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 385
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate2", array())) {
            // line 386
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 388
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 390
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry3", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType3", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer3", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate3", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate3", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup3\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment3\">
                                <label for=\"attachment3\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment3\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 395
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry3\">
                                <label for=\"attachmentCountry3\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry3\" id=\"attachmentCountry3\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 400
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentCountry3", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "                                </select>
                                ";
        // line 403
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry3", array())) {
            // line 404
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 406
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 408
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType3\">
                                <label for=\"attachmentType3\">Type: &nbsp;</label>
                                <input id=\"attachmentType3\" name=\"attachmentType3\" type=\"text\" value=\"";
        // line 410
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType3", array()), "html", null, true);
        echo "\">
                                ";
        // line 411
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType3", array())) {
            // line 412
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 414
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 415
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer3\">
                                <label for=\"attachmentIssuer3\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer3\" name=\"attachmentIssuer3\" value=\"";
        // line 417
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer3", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 418
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer3", array())) {
            // line 419
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 421
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 422
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate3\">
                                <label for=\"attachmentIssueDate3\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate3\" name=\"attachmentIssueDate3\" value=\"";
        // line 424
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate3", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate3", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 425
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate3", array())) {
            // line 426
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 428
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 429
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate3\">
                                <label for=\"attachmentExpiryDate3\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate3\" name=\"attachmentExpiryDate3\" value=\"";
        // line 431
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate3", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate3", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 432
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate3", array())) {
            // line 433
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 435
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 437
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry4", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType4", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer4", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate4", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate4", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup4\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment4\">
                                <label for=\"attachment4\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment4\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 442
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry4\">
                                <label for=\"attachmentCountry4\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry4\" id=\"attachmentCountry4\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 446
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 447
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentCountry4", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 449
        echo "                                </select>
                                ";
        // line 450
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry4", array())) {
            // line 451
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 453
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 455
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType4\">
                                <label for=\"attachmentType4\">Type: &nbsp;</label>
                                <input id=\"attachmentType4\" name=\"attachmentType4\" type=\"text\" value=\"";
        // line 457
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType4", array()), "html", null, true);
        echo "\">
                                ";
        // line 458
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType4", array())) {
            // line 459
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 461
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 462
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer4\">
                                <label for=\"attachmentIssuer4\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer4\" name=\"attachmentIssuer4\" value=\"";
        // line 464
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer4", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 465
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer4", array())) {
            // line 466
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 468
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 469
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate4\">
                                <label for=\"attachmentIssueDate4\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate4\" name=\"attachmentIssueDate4\" value=\"";
        // line 471
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate4", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate4", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 472
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate4", array())) {
            // line 473
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 475
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 476
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate4\">
                                <label for=\"attachmentExpiryDate4\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate4\" name=\"attachmentExpiryDate4\" value=\"";
        // line 478
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate4", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate4", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 479
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate4", array())) {
            // line 480
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 482
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden  has-feedback";
        // line 484
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry5", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType5", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer5", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate5", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate5", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup5\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment5\">
                                <label for=\"attachment5\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment5\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 489
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry5\">
                                <label for=\"attachmentCountry5\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry5\" id=\"attachmentCountry5\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 493
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 494
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentCountry5", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 496
        echo "                                </select>
                                ";
        // line 497
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry5", array())) {
            // line 498
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 500
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 502
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType5\">
                                <label for=\"attachmentType5\">Type: &nbsp;</label>
                                <input id=\"attachmentType5\" name=\"attachmentType5\" type=\"text\" value=\"";
        // line 504
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType5", array()), "html", null, true);
        echo "\">
                                ";
        // line 505
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType5", array())) {
            // line 506
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 508
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 509
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer5\">
                                <label for=\"attachmentIssuer5\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer5\" name=\"attachmentIssuer5\" value=\"";
        // line 511
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer5", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 512
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer5", array())) {
            // line 513
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 515
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 516
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate5\">
                                <label for=\"attachmentIssueDate5\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate5\" name=\"attachmentIssueDate5\" value=\"";
        // line 518
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate5", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate5", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 519
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate5", array())) {
            // line 520
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 522
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 523
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate5\">
                                <label for=\"attachmentExpiryDate5\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate5\" name=\"attachmentExpiryDate5\" value=\"";
        // line 525
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate5", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate5", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 526
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate5", array())) {
            // line 527
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 529
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 531
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry6", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType6", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer6", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate6", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate6", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup6\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment6\">
                                <label for=\"attachment6\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment6\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 536
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry6\">
                                <label for=\"attachmentCountry6\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry6\" id=\"attachmentCountry6\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 540
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 541
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentCountry6", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 543
        echo "                                </select>
                                ";
        // line 544
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry6", array())) {
            // line 545
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 547
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 549
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType6\">
                                <label for=\"attachmentType6\">Type: &nbsp;</label>
                                <input id=\"attachmentType6\" name=\"attachmentType6\" type=\"text\" value=\"";
        // line 551
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType6", array()), "html", null, true);
        echo "\">
                                ";
        // line 552
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType6", array())) {
            // line 553
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 555
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 556
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer6\">
                                <label for=\"attachmentIssuer6\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer6\" name=\"attachmentIssuer6\" value=\"";
        // line 558
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer6", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 559
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer6", array())) {
            // line 560
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 562
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 563
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate6\">
                                <label for=\"attachmentIssueDate6\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate6\" name=\"attachmentIssueDate6\" value=\"";
        // line 565
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate6", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate6", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 566
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate6", array())) {
            // line 567
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 569
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 570
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate6\">
                                <label for=\"attachmentExpiryDate6\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate6\" name=\"attachmentExpiryDate6\" value=\"";
        // line 572
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate6", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate6", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 573
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate6", array())) {
            // line 574
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 576
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 578
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry7", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType7", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer7", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate7", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate7", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup7\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment7\">
                                <label for=\"attachment7\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment7\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 583
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry7\">
                                <label for=\"attachmentCountry7\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry7\" id=\"attachmentCountry7\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 587
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 588
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentCountry7", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 590
        echo "                                </select>
                                ";
        // line 591
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry7", array())) {
            // line 592
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 594
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 596
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType7\">
                                <label for=\"attachmentType7\">Type: &nbsp;</label>
                                <input id=\"attachmentType7\" name=\"attachmentType7\" type=\"text\" value=\"";
        // line 598
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType7", array()), "html", null, true);
        echo "\">
                                ";
        // line 599
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType7", array())) {
            // line 600
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 602
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 603
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer7\">
                                <label for=\"attachmentIssuer7\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer7\" name=\"attachmentIssuer7\" value=\"";
        // line 605
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer7", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 606
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer7", array())) {
            // line 607
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 609
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 610
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate7\">
                                <label for=\"attachmentIssueDate7\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate7\" name=\"attachmentIssueDate7\" value=\"";
        // line 612
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate7", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate7", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 613
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate7", array())) {
            // line 614
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 616
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 617
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate7\">
                                <label for=\"attachmentExpiryDate7\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate7\" name=\"attachmentExpiryDate7\" value=\"";
        // line 619
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate7", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate7", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 620
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate7", array())) {
            // line 621
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 623
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 625
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry8", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType8", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer8", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate8", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate8", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup8\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment8\">
                                <label for=\"attachment8\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment8\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 630
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry8\">
                                <label for=\"attachmentCountry8\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry8\" id=\"attachmentCountry8\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 634
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 635
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentCountry8", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 637
        echo "                                </select>
                                ";
        // line 638
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry8", array())) {
            // line 639
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 641
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 643
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType8\">
                                <label for=\"attachmentType8\">Type: &nbsp;</label>
                                <input id=\"attachmentType8\" name=\"attachmentType8\" type=\"text\" value=\"";
        // line 645
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType8", array()), "html", null, true);
        echo "\">
                                ";
        // line 646
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType8", array())) {
            // line 647
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 649
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 650
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer8\">
                                <label for=\"attachmentIssuer8\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer8\" name=\"attachmentIssuer8\" value=\"";
        // line 652
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer8", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 653
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer8", array())) {
            // line 654
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 656
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 657
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate8\">
                                <label for=\"attachmentIssueDate8\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate8\" name=\"attachmentIssueDate8\" value=\"";
        // line 659
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate8", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate8", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 660
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate8", array())) {
            // line 661
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 663
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 664
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate8\">
                                <label for=\"attachmentExpiryDate8\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate8\" name=\"attachmentExpiryDate8\" value=\"";
        // line 666
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate8", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate8", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 667
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate8", array())) {
            // line 668
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 670
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 672
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry9", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType9", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer9", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate9", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate9", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup9\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment9\">
                                <label for=\"attachment9\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment9\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 677
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry9\">
                                <label for=\"attachmentCountry9\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry9\" id=\"attachmentCountry9\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 681
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 682
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentCountry9", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 684
        echo "                                </select>
                                ";
        // line 685
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry9", array())) {
            // line 686
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 688
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 690
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType9\">
                                <label for=\"attachmentType9\">Type: &nbsp;</label>
                                <input id=\"attachmentType9\" name=\"attachmentType9\" type=\"text\" value=\"";
        // line 692
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType9", array()), "html", null, true);
        echo "\">
                                ";
        // line 693
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType9", array())) {
            // line 694
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 696
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 697
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer9\">
                                <label for=\"attachmentIssuer9\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer9\" name=\"attachmentIssuer9\" value=\"";
        // line 699
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer9", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 700
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer9", array())) {
            // line 701
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 703
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 704
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate9\">
                                <label for=\"attachmentIssueDate9\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate9\" name=\"attachmentIssueDate9\" value=\"";
        // line 706
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate9", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate9", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 707
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate9", array())) {
            // line 708
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 710
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 711
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate9\">
                                <label for=\"attachmentExpiryDate9\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate9\" name=\"attachmentExpiryDate9\" value=\"";
        // line 713
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate9", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate9", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 714
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate9", array())) {
            // line 715
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 717
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"form-group has-feedback";
        // line 720
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "interview", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"interview\">Would you like to schedule an interview for this applicant? &nbsp;
                        <input type=\"checkbox\" name=\"interview\" id=\"interview\" class=\"checkbox-inline\" value=\"";
        // line 722
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "interview", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "interview", array())) : ("null")), "html", null, true);
        echo "\" onchange=\"interviewCheck(this)\"/></label>
                        ";
        // line 723
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "interview", array())) {
            // line 724
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "interview", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 726
        echo "                    </div>
                    ";
        // line 729
        echo "                    <div class=\"form-group has-feedback\">
                        <input type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-primary\" value=\"Save Applicant\" />
                    </div>
                </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "auth/HR/Applicant/newApplicant.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1934 => 729,  1931 => 726,  1925 => 724,  1923 => 723,  1919 => 722,  1914 => 720,  1909 => 717,  1903 => 715,  1901 => 714,  1897 => 713,  1892 => 711,  1889 => 710,  1883 => 708,  1881 => 707,  1877 => 706,  1872 => 704,  1869 => 703,  1863 => 701,  1861 => 700,  1857 => 699,  1852 => 697,  1849 => 696,  1843 => 694,  1841 => 693,  1837 => 692,  1832 => 690,  1828 => 688,  1822 => 686,  1820 => 685,  1817 => 684,  1802 => 682,  1798 => 681,  1791 => 677,  1779 => 672,  1775 => 670,  1769 => 668,  1767 => 667,  1763 => 666,  1758 => 664,  1755 => 663,  1749 => 661,  1747 => 660,  1743 => 659,  1738 => 657,  1735 => 656,  1729 => 654,  1727 => 653,  1723 => 652,  1718 => 650,  1715 => 649,  1709 => 647,  1707 => 646,  1703 => 645,  1698 => 643,  1694 => 641,  1688 => 639,  1686 => 638,  1683 => 637,  1668 => 635,  1664 => 634,  1657 => 630,  1645 => 625,  1641 => 623,  1635 => 621,  1633 => 620,  1629 => 619,  1624 => 617,  1621 => 616,  1615 => 614,  1613 => 613,  1609 => 612,  1604 => 610,  1601 => 609,  1595 => 607,  1593 => 606,  1589 => 605,  1584 => 603,  1581 => 602,  1575 => 600,  1573 => 599,  1569 => 598,  1564 => 596,  1560 => 594,  1554 => 592,  1552 => 591,  1549 => 590,  1534 => 588,  1530 => 587,  1523 => 583,  1511 => 578,  1507 => 576,  1501 => 574,  1499 => 573,  1495 => 572,  1490 => 570,  1487 => 569,  1481 => 567,  1479 => 566,  1475 => 565,  1470 => 563,  1467 => 562,  1461 => 560,  1459 => 559,  1455 => 558,  1450 => 556,  1447 => 555,  1441 => 553,  1439 => 552,  1435 => 551,  1430 => 549,  1426 => 547,  1420 => 545,  1418 => 544,  1415 => 543,  1400 => 541,  1396 => 540,  1389 => 536,  1377 => 531,  1373 => 529,  1367 => 527,  1365 => 526,  1361 => 525,  1356 => 523,  1353 => 522,  1347 => 520,  1345 => 519,  1341 => 518,  1336 => 516,  1333 => 515,  1327 => 513,  1325 => 512,  1321 => 511,  1316 => 509,  1313 => 508,  1307 => 506,  1305 => 505,  1301 => 504,  1296 => 502,  1292 => 500,  1286 => 498,  1284 => 497,  1281 => 496,  1266 => 494,  1262 => 493,  1255 => 489,  1243 => 484,  1239 => 482,  1233 => 480,  1231 => 479,  1227 => 478,  1222 => 476,  1219 => 475,  1213 => 473,  1211 => 472,  1207 => 471,  1202 => 469,  1199 => 468,  1193 => 466,  1191 => 465,  1187 => 464,  1182 => 462,  1179 => 461,  1173 => 459,  1171 => 458,  1167 => 457,  1162 => 455,  1158 => 453,  1152 => 451,  1150 => 450,  1147 => 449,  1132 => 447,  1128 => 446,  1121 => 442,  1109 => 437,  1105 => 435,  1099 => 433,  1097 => 432,  1093 => 431,  1088 => 429,  1085 => 428,  1079 => 426,  1077 => 425,  1073 => 424,  1068 => 422,  1065 => 421,  1059 => 419,  1057 => 418,  1053 => 417,  1048 => 415,  1045 => 414,  1039 => 412,  1037 => 411,  1033 => 410,  1028 => 408,  1024 => 406,  1018 => 404,  1016 => 403,  1013 => 402,  998 => 400,  994 => 399,  987 => 395,  975 => 390,  971 => 388,  965 => 386,  963 => 385,  959 => 384,  954 => 382,  951 => 381,  945 => 379,  943 => 378,  939 => 377,  934 => 375,  931 => 374,  925 => 372,  923 => 371,  919 => 370,  914 => 368,  911 => 367,  905 => 365,  903 => 364,  899 => 363,  894 => 361,  890 => 359,  884 => 357,  882 => 356,  879 => 355,  864 => 353,  860 => 352,  853 => 348,  841 => 343,  837 => 341,  831 => 339,  829 => 338,  825 => 337,  820 => 335,  817 => 334,  811 => 332,  809 => 331,  805 => 330,  800 => 328,  797 => 327,  791 => 325,  789 => 324,  785 => 323,  780 => 321,  777 => 320,  771 => 318,  769 => 317,  765 => 316,  760 => 314,  756 => 312,  750 => 310,  748 => 309,  745 => 308,  730 => 306,  726 => 305,  719 => 301,  707 => 296,  703 => 294,  697 => 292,  695 => 291,  691 => 290,  686 => 288,  683 => 287,  677 => 285,  675 => 284,  671 => 283,  666 => 281,  663 => 280,  657 => 278,  655 => 277,  651 => 276,  646 => 274,  643 => 273,  637 => 271,  635 => 270,  631 => 269,  626 => 267,  623 => 266,  617 => 264,  615 => 263,  612 => 262,  597 => 260,  593 => 259,  586 => 255,  574 => 250,  564 => 242,  558 => 240,  556 => 239,  552 => 238,  547 => 236,  536 => 228,  532 => 226,  526 => 224,  524 => 223,  517 => 221,  511 => 220,  505 => 219,  499 => 218,  493 => 217,  487 => 216,  473 => 205,  470 => 204,  464 => 202,  462 => 201,  458 => 200,  451 => 196,  448 => 195,  442 => 193,  440 => 192,  436 => 191,  424 => 182,  421 => 181,  415 => 179,  413 => 178,  410 => 177,  406 => 174,  402 => 173,  393 => 166,  389 => 165,  380 => 158,  376 => 157,  367 => 150,  363 => 149,  353 => 141,  349 => 140,  340 => 133,  336 => 132,  324 => 123,  321 => 122,  315 => 120,  313 => 119,  306 => 115,  299 => 111,  296 => 110,  290 => 108,  288 => 107,  285 => 106,  276 => 103,  271 => 101,  266 => 99,  261 => 96,  257 => 95,  252 => 93,  247 => 90,  241 => 88,  239 => 87,  234 => 85,  225 => 79,  222 => 78,  216 => 76,  214 => 75,  211 => 74,  196 => 72,  192 => 71,  185 => 67,  182 => 66,  176 => 64,  174 => 63,  167 => 61,  160 => 59,  155 => 57,  152 => 56,  146 => 54,  144 => 53,  139 => 51,  134 => 49,  131 => 48,  125 => 46,  123 => 45,  118 => 43,  113 => 41,  110 => 40,  104 => 38,  102 => 37,  97 => 35,  92 => 33,  89 => 32,  83 => 30,  81 => 29,  76 => 27,  71 => 25,  65 => 22,  61 => 21,  49 => 12,  45 => 11,  38 => 6,  35 => 5,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}
{% block title %}New Applicant{% endblock %}


{% block contents %}
<section class=\"content-header\">
    <h1>
        New Applicant
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ base_url() }}\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
        <li><a href=\"{{ path_for('HR.Home') }}\">HR</a></li>
        <li class=\"active\">New Applicant</li>
    </ol>
</section>
<section class=\"content\">
    <div class=\"box-header has-border\">
        <h3 class=\"box-title\">New Applicant Entry</h3>
    </div>
    <div class=\"box-body\">
        <form action=\"{{ path_for('HR.NewApplicant') }}\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\" >
                    {{ csrf.field | raw }}
                    <fieldset>

                        <div class=\"form-group has-feedback{{ errors.first_name ? ' has-error' : '' }}\">
                            <label for=\"first_name\">First Name: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <input type=\"text\" name=\"first_name\" id=\"first_name\" class=\"form-control\" value=\"{{ old.first_name }}\" placeholder=\"Applicant's First Name\" />
                            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                            {% if errors.first_name %}
                                <span class=\"help-block\">{{ errors.first_name | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.last_name ? ' has-error' : '' }}\">
                            <label class=\"required\" for=\"last_name\">Last Name: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <input type=\"text\" name=\"last_name\" id=\"last_name\" class=\"form-control\" value=\"{{ old.last_name }}\" placeholder=\"Applicant's Last Name\"/>
                            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                            {% if errors.last_name %}
                                <span class=\"help-block\">{{ errors.last_name | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.per_email ? ' has-error' : '' }}\">
                            <label for=\"per_email\">Personal Email: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <input type=\"email\" name=\"per_email\" id=\"per_email\" placeholder=\"applicant@domain.com\" class=\"form-control\" value=\"{{ old.per_email }}\"/>
                            <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                            {% if errors.per_email %}
                                <span class=\"help-block\">{{ errors.per_email | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.mobile_phone ? ' has-error' : '' }}\">
                            <label for=\"mobile_phone\">Mobile Phone Number: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <input type=\"tel\" name=\"mobile_phone\" id=\"mobile_phone\" placeholder=\"+971 50 000 0000\" class=\"form-control\" value=\"{{ old.mobile_phone }}\"/>
                            <span class=\"glyphicon glyphicon-phone form-control-feedback\"></span>
                            {% if errors.mobile_phone %}
                                <span class=\"help-block\">{{ errors.mobile_phone | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.gender ? ' has-error' : '' }}\">
                            <label for=\"male\">Gender: &nbsp;</label><span class=\"text-red\"><b>*</b></span> &nbsp;
                            <input type=\"radio\" name=\"gender\" id=\"male\" value=\"M\" {% if old.gender == 'M' %}checked=\"checked\"{% endif %}/>
                            <span class=\"fa fa-male\"> Male &nbsp; &nbsp;</span>
                            <input type=\"radio\" name=\"gender\" id=\"female\" value=\"F\" {% if old.gender == 'F' %}checked=\"checked\"{% endif %}/>
                            <span class=\"fa fa-female\"> Female</span>
                            {% if errors.gender %}
                                <span class=\"help-block\">{{ errors.gender | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.nationality ? ' has-error' : '' }}\">
                            <label for=\"nationality\">Nationality: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <select class=\"form-control\" name=\"nationality\" id=\"nationality\">
                                <option value=\"\">Please Select ... </option>
                                {% for country in HR.countries %}
                                    <option value=\"{{ country.id }}\" {% if country.id == old.nationality %}selected{% endif %}>{{ country.country_name | e }}</option>
                                {% endfor %}
                            </select>
                            {% if errors.nationality %}
                                <span class=\"help-block\">{{ errors.nationality | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.dob ? ' has-error' : '' }}\">
                                <label for=\"dob\">Date of Birth: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                                <div class=\"input-group date\">
                                    <div class=\"input-group-addon\">
                                        <i class=\"fa fa-calendar\"></i>
                                    </div>
                                    <input type=\"date\" class=\"form-control pull-right date-picker\" name=\"dob\" id=\"dob\" value=\"{{ old.dob ?: '1984-09-03' }}\">
                                </div>
                                {% if errors.dob %}
                                    <span class=\"help-block\">{{ errors.dob | first }}</span>
                                {% endif %}
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class=\"form-group has-feedback{{ errors.languageCount ? ' has-error' : '' }}\">
                            <label class=\"required\">Languages: &nbsp;</label><span class=\"text-red\"><b>*</b></span><br/>
                            {% for language in HR.languages %}
                                <label class=\"checkbox-inline\">
                                    <input
                                            type=\"checkbox\"
                                            id=\"{{ language.id }}\"
                                            name=\"language_[]\"
                                            value=\"{{ language.id }}\"
                                            onchange=\"languageCounter(this)\"
                                    />&nbsp;{{ language.language_name | e }} &nbsp; &nbsp;
                                </label> &nbsp; &nbsp;
                            {% endfor %}
                            <input type=\"hidden\" name=\"languageCount\" id=\"languageCount\" value=\"0\" />
                            {% if errors.languageCount %}
                                <span class=\"help-block\">{{ errors.languageCount | first }} language.</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.expectation ? ' has-error' : '' }}\">
                            <label for=\"expectation\">Expected Salary: <span class=\"help-block inline\"><small><i>Expected Salary Amount (inclusive of benefits) in U.A.E. Dirhams</i></small></span></label>
                            <div class=\"input-group has-feedback\">
                                <span class=\"input-group-addon\">AED</span>
                                <input type=\"number\" name=\"expectation\" id=\"expectation\" class=\"form-control\" value=\"{{ old.expectation }}\" placeholder=\"Enter expected amount in UAE Dirhams\">
                                <span class=\"input-group-addon\">.00</span>
                            </div>
    <!--                            <span class=\"glyphicon glyphicon-usd form-control-feedback\"></span>-->
                            {% if errors.expectation %}
                                <span class=\"help-block\">{{ errors.expectation | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.visa ? ' has-error' : '' }}\">
                            <label>Current Visa Status: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <br/>

                            <label class=\"radio-inline\">
                                <input
                                    type=\"radio\"
                                    name=\"visa\"
                                    id=\"employee_residence\"
                                    value=\"Employee Residence\" {% if old.visa == 'Employee Residence' %}checked=\"checked\"{% endif %}
                                />Employee Residency &nbsp;
                            </label>
                            <label class=\"radio-inline\">
                                <input
                                    type=\"radio\"
                                    name=\"visa\"
                                    id=\"family_residence\"
                                    value=\"Family Residence\" {% if old.visa == 'Family Residence' %}checked=\"checked\"{% endif %}
                                />Family Residency &nbsp;
                            </label>

                            <label class=\"radio-inline\">
                                <input
                                    type=\"radio\"
                                    name=\"visa\"
                                    id=\"visit\"
                                    value=\"Visit\" {% if old.visa == 'Visit' %}checked=\"checked\"{% endif %}
                                />Visit Visa &nbsp;
                            </label>
                            <label class=\"radio-inline\">
                                <input
                                    type=\"radio\"
                                    name=\"visa\"
                                    id=\"tourist\"
                                    value=\"Tourist\" {% if old.visa == 'Tourist' %}checked=\"checked\"{% endif %}
                                />Tourist Visa &nbsp;
                            </label>
                            <label class=\"radio-inline\">
                                <input
                                    type=\"radio\"
                                    name=\"visa\"
                                    id=\"expired\"
                                    value=\"Expired\" {% if old.visa == 'Expired' %}checked=\"checked\"{% endif %}
                                />Expired Visa &nbsp;
                            </label>
                            <label class=\"radio-inline\">
                                <input
                                    type=\"radio\"
                                    name=\"visa\"
                                    id=\"cencelled\"
                                    value=\"cencelled\" {% if old.visa == 'cancelled' %}checked=\"checked\"{% endif %}
                                />Cancelled Visa &nbsp;
                            </label>
                            {#<label for=\"investor_residence\">Investor Residency</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"investor_residence\" value=\"Investor Residence\" {% if old.visa == 'Investor Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"maid_residence\">Maid Residency</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"maid_residence\" value=\"Maid Residence\" {% if old.visa == 'Maid Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"relative_residence\">Investor Residency</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"relative_residence\" value=\"Relative Residence\" {% if old.visa == 'Relative Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"student_residence\">Investor Residence</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"student_residence\" value=\"Student Residence\" {% if old.visa == 'Student Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"mission\">Mission Visa</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"mission\" value=\"Mission\" {% if old.visa == 'Mission' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"multiple_entry\">Multiple Entry Visa</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"multiple_entry\" value=\"Multiple Entry\" {% if old.visa == 'Multiple Entry' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;#}

                            {% if errors.visa %}
                                <span class=\"help-block\">{{ errors.visa | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.visa_age ? ' has-error' : '' }}\">
                            <label for=\"visa_age\">Visa Age: &nbsp;
                                <span class=\"text-red\"><b>*</b></span> &nbsp;
                                <span class=\"help-block inline\">
                                    <small>
                                        <i>Time since the first issuance of visa from current sponsor</i>
                                    </small>
                                </span>
                            </label>
                            <input type=\"text\" class=\"form-control\" name=\"visa_age\" id=\"visa_age\" placeholder=\"Two years ...\" value=\"{{ old.visa_age ? old.visa_age : '' }}\" />&nbsp;
                            {% if errors.visa_age %}
                                <span class=\"help-block\">{{ errors.visa_age | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.notice ? ' has-error' : '' }}\">
                                <label for=\"notice\">Required Notice Period: &nbsp;
                                    <span class=\"text-red\"><b>*</b></span>
                                </label>
                                <input type=\"text\" class=\"form-control\" name=\"notice\" id=\"notice\" value=\"{{ old.notice ? old.notice : '' }}\" placeholder=\"One month ...\" />&nbsp;
                                {% if errors.notice %}
                                    <span class=\"help-block\">{{ errors.notice | first }}</span>
                                {% endif %}
                            </div>
                        <div class=\"form-group has-feedback{{ errors.source ? ' has-error' : '' }}\">
                            <label for=\"source\">Application Source:  &nbsp;
                                <span class=\"text-red\"><b>*</b></span> &nbsp;
                                <span class=\"help-block inline\">
                                    <small>
                                        <i>How did the applicant hear about us</i>
                                    </small>
                                </span>
                            </label>

                            <select class=\"form-control\" name=\"source\" id=\"source\">
                                <option value=\"\" {% if old.source == '' %}selected{% endif %}>Please Select ...</option>
                                <option value=\"HR Agency\" {% if old.source == 'HR Agency' %}selected{% endif %}>HR Agency</option>
                                <option value=\"Search Engine\" {% if old.source == 'Search Engine' %}selected{% endif %}>Search Engine</option>
                                <option value=\"Friend or Colleague\" {% if old.source == 'Friend' %}selected{% endif %}>Friend</option>
                                <option value=\"Other\" {% if old.source == 'Other' %}selected{% endif %}>Other</option>
                                <option value=\"No Answer\" {% if old.source == 'No Answer' %}selected{% endif %}>No Answer</option>
                            </select>
                            {% if errors.source %}
                                <span class=\"help-block\">{{ errors.source | first }}</span>
                            {% endif %}
                        </div>
                    </fieldset>
                    <div class=\"form-group has-feedback{{ errors.profilepic ? ' has-error' : '' }}\">
                        <label class=\"control-label\" for=\"profilePic\">Photo: &nbsp;
                            <span class=\"help-block inline\">
                                <small>
                                    <i>File must be *.jpg, *.jpeg, *.png, *.gif, or *.bmb and &lt; 3MBs</i>
                                </small>
                            </span>
                        </label>
                        <input type=\"file\" id=\"profilePic\" name=\"profilepic\" value=\"{{ old.profilepic }}\" class=\"file\">

<!--                        <img id=\"profilePicApplicantFRM\" src=\"{{ base_url() }}/img/applicants/defaultMale.png\" height=\"40\" class=\"profile-image img-circle\">-->
                        {% if errors.profilepic %}
                            <span class=\"help-block\">{{ errors.profilepic | first }}</span>
                        {% endif %}
                    </div>
                    <div id=\"newAttachment\" class=\"form-group\">
                        <label for=\"help-me\">Attachments:</label>
                        <p class=\"help-block\" id=\"help-me\"><span><i>Attach CV, Passport Copy, VISA Copy, Educational Degree, or any other related documents<br/><mark>Remember to rename the files respectively</mark></i></span></p>
                        <input type=\"hidden\" id=\"attachmentCounter\" name=\"attachmentCounter\" value=\"-1\">
                        <input type=\"button\" id=\"add\" class=\"btn btn-xs\" onclick=\"showInput('divattachmentGroup', 'attachmentCounter')\" value=\"Add New\" title=\"Add new attachment field\"/>
                        <input type=\"button\" id=\"remove\" class=\"btn btn-xs btn-danger\" onclick=\"hideInput('divattachmentGroup', 'attachmentCounter')\" value=\"Remove\" title=\"Removes the last item\" />
                        <br/>
                        <div class=\"form-group bg-gray-light hidden has-feedback{{ errors.attachmentCountry0 ? ' has-error' : '' }}{{ errors.attachmentType0 ? ' has-error' : '' }}{{ errors.attachmentIssuer0 ? ' has-error' : '' }}{{ errors.attachmentIssueDate0 ? ' has-error' : '' }}{{ errors.attachmentExpiryDate0 ? ' has-error' : '' }}\" id=\"divattachmentGroup0\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment0\">
                                <label for=\"attachment0\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment0\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentCountry0 ? ' has-error' : '' }}\" id=\"attachmentCountry0\">
                                <label for=\"attachmentCountry0\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry0\" id=\"attachmentCountry0\">
                                    <option value=\"\">Please Select ... </option>
                                    {% for country in HR.countries %}
                                        <option value=\"{{ country.id }}\" {% if country.id == old.attachmentCountry0 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry0 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry0 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType0 ? ' has-error' : '' }}\" id=\"attachmentType0\">
                                <label for=\"attachmentType0\">Type: &nbsp;</label>
                                <input id=\"attachmentType0\" name=\"attachmentType0\" type=\"text\" value=\"{{ old.attachmentType0 }}\">
                                {% if errors.attachmentType0 %}
                                    <span class=\"help-block\">{{ errors.attachmentType0 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer0 ? ' has-error' : '' }}\" id=\"attachmentIssuer0\">
                                <label for=\"attachmentIssuer0\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer0\" name=\"attachmentIssuer0\" value=\"{{ old.attachmentIssuer0 }}\"> &nbsp;
                                {% if errors.attachmentIssuer0 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer0 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate0 ? ' has-error' : '' }}\" id=\"attachmentIssueDate0\">
                                <label for=\"attachmentIssueDate0\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate0\" name=\"attachmentIssueDate0\" value=\"{{ old.attachmentIssueDate0 ? old.attachmentIssueDate0 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate0 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate0 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate0 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate0\">
                                <label for=\"attachmentExpiryDate0\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate0\" name=\"attachmentExpiryDate0\" value=\"{{ old.attachmentExpiryDate0 ? old.attachmentExpiryDate0 : '2099-12-31' }}\"> &nbsp;
                                {% if errors.attachmentExpiryDate0 %}
                                    <span class=\"help-block\">{{ errors.attachmentExpiryDate0 | first }}</span>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback{{ errors.attachmentCountry1 ? ' has-error' : '' }}{{ errors.attachmentType1 ? ' has-error' : '' }}{{ errors.attachmentIssuer1 ? ' has-error' : '' }}{{ errors.attachmentIssueDate1 ? ' has-error' : '' }}{{ errors.attachmentExpiryDate1 ? ' has-error' : '' }}\" id=\"divattachmentGroup1\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment1\">
                                <label for=\"attachment1\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment1\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentCountry1 ? ' has-error' : '' }}\" id=\"attachmentCountry1\">
                                <label for=\"attachmentCountry1\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry1\" id=\"attachmentCountry1\">
                                    <option value=\"\">Please Select ... </option>
                                    {% for country in HR.countries %}
                                        <option value=\"{{ country.id }}\" {% if country.id == old.attachmentCountry1 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry1 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry1 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType1 ? ' has-error' : '' }}\" id=\"attachmentType1\">
                                <label for=\"attachmentType1\">Type: &nbsp;</label>
                                <input id=\"attachmentType1\" name=\"attachmentType1\" type=\"text\" value=\"{{ old.attachmentType1 }}\">
                                {% if errors.attachmentType1 %}
                                    <span class=\"help-block\">{{ errors.attachmentType1 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer1 ? ' has-error' : '' }}\" id=\"attachmentIssuer1\">
                                <label for=\"attachmentIssuer1\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer1\" name=\"attachmentIssuer1\" value=\"{{ old.attachmentIssuer1 }}\"> &nbsp;
                                {% if errors.attachmentIssuer1 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer1 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate1 ? ' has-error' : '' }}\" id=\"attachmentIssueDate1\">
                                <label for=\"attachmentIssueDate1\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate1\" name=\"attachmentIssueDate1\" value=\"{{ old.attachmentIssueDate1 ? old.attachmentIssueDate1 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate1 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate1 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate1 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate1\">
                                <label for=\"attachmentExpiryDate1\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate1\" name=\"attachmentExpiryDate1\" value=\"{{ old.attachmentExpiryDate1 ? old.attachmentExpiryDate1 : '2099-12-31' }}\"> &nbsp;
                                {% if errors.attachmentExpiryDate1 %}
                                    <span class=\"help-block\">{{ errors.attachmentExpiryDate1 | first }}</span>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback{{ errors.attachmentCountry2 ? ' has-error' : '' }}{{ errors.attachmentType2 ? ' has-error' : '' }}{{ errors.attachmentIssuer2 ? ' has-error' : '' }}{{ errors.attachmentIssueDate2 ? ' has-error' : '' }}{{ errors.attachmentExpiryDate2 ? ' has-error' : '' }}\" id=\"divattachmentGroup2\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment2\">
                                <label for=\"attachment2\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment2\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentCountry2 ? ' has-error' : '' }}\" id=\"attachmentCountry2\">
                                <label for=\"attachmentCountry2\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry2\" id=\"attachmentCountry2\">
                                    <option value=\"\">Please Select ... </option>
                                    {% for country in HR.countries %}
                                        <option value=\"{{ country.id }}\" {% if country.id == old.attachmentCountry2 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry2 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry2 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType2 ? ' has-error' : '' }}\" id=\"attachmentType2\">
                                <label for=\"attachmentType2\">Type: &nbsp;</label>
                                <input id=\"attachmentType2\" name=\"attachmentType2\" type=\"text\" value=\"{{ old.attachmentType2 }}\">
                                {% if errors.attachmentType2 %}
                                    <span class=\"help-block\">{{ errors.attachmentType2 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer2 ? ' has-error' : '' }}\" id=\"attachmentIssuer2\">
                                <label for=\"attachmentIssuer2\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer2\" name=\"attachmentIssuer2\" value=\"{{ old.attachmentIssuer2 }}\"> &nbsp;
                                {% if errors.attachmentIssuer2 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer2 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate2 ? ' has-error' : '' }}\" id=\"attachmentIssueDate2\">
                                <label for=\"attachmentIssueDate2\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate2\" name=\"attachmentIssueDate2\" value=\"{{ old.attachmentIssueDate2 ? old.attachmentIssueDate2 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate2 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate2 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate2 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate2\">
                                <label for=\"attachmentExpiryDate2\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate2\" name=\"attachmentExpiryDate2\" value=\"{{ old.attachmentExpiryDate2 ? old.attachmentExpiryDate2 : '2099-12-31' }}\"> &nbsp;
                                {% if errors.attachmentExpiryDate2 %}
                                    <span class=\"help-block\">{{ errors.attachmentExpiryDate2 | first }}</span>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback{{ errors.attachmentCountry3 ? ' has-error' : '' }}{{ errors.attachmentType3 ? ' has-error' : '' }}{{ errors.attachmentIssuer3 ? ' has-error' : '' }}{{ errors.attachmentIssueDate3 ? ' has-error' : '' }}{{ errors.attachmentExpiryDate3 ? ' has-error' : '' }}\" id=\"divattachmentGroup3\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment3\">
                                <label for=\"attachment3\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment3\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentCountry3 ? ' has-error' : '' }}\" id=\"attachmentCountry3\">
                                <label for=\"attachmentCountry3\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry3\" id=\"attachmentCountry3\">
                                    <option value=\"\">Please Select ... </option>
                                    {% for country in HR.countries %}
                                        <option value=\"{{ country.id }}\" {% if country.id == old.attachmentCountry3 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry3 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry3 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType3 ? ' has-error' : '' }}\" id=\"attachmentType3\">
                                <label for=\"attachmentType3\">Type: &nbsp;</label>
                                <input id=\"attachmentType3\" name=\"attachmentType3\" type=\"text\" value=\"{{ old.attachmentType3 }}\">
                                {% if errors.attachmentType3 %}
                                    <span class=\"help-block\">{{ errors.attachmentType3 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer3 ? ' has-error' : '' }}\" id=\"attachmentIssuer3\">
                                <label for=\"attachmentIssuer3\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer3\" name=\"attachmentIssuer3\" value=\"{{ old.attachmentIssuer3 }}\"> &nbsp;
                                {% if errors.attachmentIssuer3 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer3 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate3 ? ' has-error' : '' }}\" id=\"attachmentIssueDate3\">
                                <label for=\"attachmentIssueDate3\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate3\" name=\"attachmentIssueDate3\" value=\"{{ old.attachmentIssueDate3 ? old.attachmentIssueDate3 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate3 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate3 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate3 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate3\">
                                <label for=\"attachmentExpiryDate3\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate3\" name=\"attachmentExpiryDate3\" value=\"{{ old.attachmentExpiryDate3 ? old.attachmentExpiryDate3 : '2099-12-31' }}\"> &nbsp;
                                {% if errors.attachmentExpiryDate3 %}
                                    <span class=\"help-block\">{{ errors.attachmentExpiryDate3 | first }}</span>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback{{ errors.attachmentCountry4 ? ' has-error' : '' }}{{ errors.attachmentType4 ? ' has-error' : '' }}{{ errors.attachmentIssuer4 ? ' has-error' : '' }}{{ errors.attachmentIssueDate4 ? ' has-error' : '' }}{{ errors.attachmentExpiryDate4 ? ' has-error' : '' }}\" id=\"divattachmentGroup4\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment4\">
                                <label for=\"attachment4\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment4\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentCountry4 ? ' has-error' : '' }}\" id=\"attachmentCountry4\">
                                <label for=\"attachmentCountry4\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry4\" id=\"attachmentCountry4\">
                                    <option value=\"\">Please Select ... </option>
                                    {% for country in HR.countries %}
                                        <option value=\"{{ country.id }}\" {% if country.id == old.attachmentCountry4 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry4 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry4 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType4 ? ' has-error' : '' }}\" id=\"attachmentType4\">
                                <label for=\"attachmentType4\">Type: &nbsp;</label>
                                <input id=\"attachmentType4\" name=\"attachmentType4\" type=\"text\" value=\"{{ old.attachmentType4 }}\">
                                {% if errors.attachmentType4 %}
                                    <span class=\"help-block\">{{ errors.attachmentType4 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer4 ? ' has-error' : '' }}\" id=\"attachmentIssuer4\">
                                <label for=\"attachmentIssuer4\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer4\" name=\"attachmentIssuer4\" value=\"{{ old.attachmentIssuer4 }}\"> &nbsp;
                                {% if errors.attachmentIssuer4 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer4 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate4 ? ' has-error' : '' }}\" id=\"attachmentIssueDate4\">
                                <label for=\"attachmentIssueDate4\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate4\" name=\"attachmentIssueDate4\" value=\"{{ old.attachmentIssueDate4 ? old.attachmentIssueDate4 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate4 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate4 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate4 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate4\">
                                <label for=\"attachmentExpiryDate4\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate4\" name=\"attachmentExpiryDate4\" value=\"{{ old.attachmentExpiryDate4 ? old.attachmentExpiryDate4 : '2099-12-31' }}\"> &nbsp;
                                {% if errors.attachmentExpiryDate4 %}
                                    <span class=\"help-block\">{{ errors.attachmentExpiryDate4 | first }}</span>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group hidden  has-feedback{{ errors.attachmentCountry5 ? ' has-error' : '' }}{{ errors.attachmentType5 ? ' has-error' : '' }}{{ errors.attachmentIssuer5 ? ' has-error' : '' }}{{ errors.attachmentIssueDate5 ? ' has-error' : '' }}{{ errors.attachmentExpiryDate5 ? ' has-error' : '' }}\" id=\"divattachmentGroup5\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment5\">
                                <label for=\"attachment5\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment5\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentCountry5 ? ' has-error' : '' }}\" id=\"attachmentCountry5\">
                                <label for=\"attachmentCountry5\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry5\" id=\"attachmentCountry5\">
                                    <option value=\"\">Please Select ... </option>
                                    {% for country in HR.countries %}
                                        <option value=\"{{ country.id }}\" {% if country.id == old.attachmentCountry5 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry5 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry5 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType5 ? ' has-error' : '' }}\" id=\"attachmentType5\">
                                <label for=\"attachmentType5\">Type: &nbsp;</label>
                                <input id=\"attachmentType5\" name=\"attachmentType5\" type=\"text\" value=\"{{ old.attachmentType5 }}\">
                                {% if errors.attachmentType5 %}
                                    <span class=\"help-block\">{{ errors.attachmentType5 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer5 ? ' has-error' : '' }}\" id=\"attachmentIssuer5\">
                                <label for=\"attachmentIssuer5\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer5\" name=\"attachmentIssuer5\" value=\"{{ old.attachmentIssuer5 }}\"> &nbsp;
                                {% if errors.attachmentIssuer5 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer5 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate5 ? ' has-error' : '' }}\" id=\"attachmentIssueDate5\">
                                <label for=\"attachmentIssueDate5\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate5\" name=\"attachmentIssueDate5\" value=\"{{ old.attachmentIssueDate5 ? old.attachmentIssueDate5 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate5 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate5 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate5 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate5\">
                                <label for=\"attachmentExpiryDate5\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate5\" name=\"attachmentExpiryDate5\" value=\"{{ old.attachmentExpiryDate5 ? old.attachmentExpiryDate5 : '2099-12-31' }}\"> &nbsp;
                                {% if errors.attachmentExpiryDate5 %}
                                    <span class=\"help-block\">{{ errors.attachmentExpiryDate5 | first }}</span>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback{{ errors.attachmentCountry6 ? ' has-error' : '' }}{{ errors.attachmentType6 ? ' has-error' : '' }}{{ errors.attachmentIssuer6 ? ' has-error' : '' }}{{ errors.attachmentIssueDate6 ? ' has-error' : '' }}{{ errors.attachmentExpiryDate6 ? ' has-error' : '' }}\" id=\"divattachmentGroup6\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment6\">
                                <label for=\"attachment6\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment6\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentCountry6 ? ' has-error' : '' }}\" id=\"attachmentCountry6\">
                                <label for=\"attachmentCountry6\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry6\" id=\"attachmentCountry6\">
                                    <option value=\"\">Please Select ... </option>
                                    {% for country in HR.countries %}
                                        <option value=\"{{ country.id }}\" {% if country.id == old.attachmentCountry6 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry6 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry6 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType6 ? ' has-error' : '' }}\" id=\"attachmentType6\">
                                <label for=\"attachmentType6\">Type: &nbsp;</label>
                                <input id=\"attachmentType6\" name=\"attachmentType6\" type=\"text\" value=\"{{ old.attachmentType6 }}\">
                                {% if errors.attachmentType6 %}
                                    <span class=\"help-block\">{{ errors.attachmentType6 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer6 ? ' has-error' : '' }}\" id=\"attachmentIssuer6\">
                                <label for=\"attachmentIssuer6\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer6\" name=\"attachmentIssuer6\" value=\"{{ old.attachmentIssuer6 }}\"> &nbsp;
                                {% if errors.attachmentIssuer6 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer6 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate6 ? ' has-error' : '' }}\" id=\"attachmentIssueDate6\">
                                <label for=\"attachmentIssueDate6\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate6\" name=\"attachmentIssueDate6\" value=\"{{ old.attachmentIssueDate6 ? old.attachmentIssueDate6 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate6 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate6 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate6 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate6\">
                                <label for=\"attachmentExpiryDate6\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate6\" name=\"attachmentExpiryDate6\" value=\"{{ old.attachmentExpiryDate6 ? old.attachmentExpiryDate6 : '2099-12-31' }}\"> &nbsp;
                                {% if errors.attachmentExpiryDate6 %}
                                    <span class=\"help-block\">{{ errors.attachmentExpiryDate6 | first }}</span>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback{{ errors.attachmentCountry7 ? ' has-error' : '' }}{{ errors.attachmentType7 ? ' has-error' : '' }}{{ errors.attachmentIssuer7 ? ' has-error' : '' }}{{ errors.attachmentIssueDate7 ? ' has-error' : '' }}{{ errors.attachmentExpiryDate7 ? ' has-error' : '' }}\" id=\"divattachmentGroup7\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment7\">
                                <label for=\"attachment7\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment7\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentCountry7 ? ' has-error' : '' }}\" id=\"attachmentCountry7\">
                                <label for=\"attachmentCountry7\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry7\" id=\"attachmentCountry7\">
                                    <option value=\"\">Please Select ... </option>
                                    {% for country in HR.countries %}
                                        <option value=\"{{ country.id }}\" {% if country.id == old.attachmentCountry7 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry7 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry7 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType7 ? ' has-error' : '' }}\" id=\"attachmentType7\">
                                <label for=\"attachmentType7\">Type: &nbsp;</label>
                                <input id=\"attachmentType7\" name=\"attachmentType7\" type=\"text\" value=\"{{ old.attachmentType7 }}\">
                                {% if errors.attachmentType7 %}
                                    <span class=\"help-block\">{{ errors.attachmentType7 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer7 ? ' has-error' : '' }}\" id=\"attachmentIssuer7\">
                                <label for=\"attachmentIssuer7\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer7\" name=\"attachmentIssuer7\" value=\"{{ old.attachmentIssuer7 }}\"> &nbsp;
                                {% if errors.attachmentIssuer7 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer7 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate7 ? ' has-error' : '' }}\" id=\"attachmentIssueDate7\">
                                <label for=\"attachmentIssueDate7\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate7\" name=\"attachmentIssueDate7\" value=\"{{ old.attachmentIssueDate7 ? old.attachmentIssueDate7 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate7 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate7 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate7 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate7\">
                                <label for=\"attachmentExpiryDate7\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate7\" name=\"attachmentExpiryDate7\" value=\"{{ old.attachmentExpiryDate7 ? old.attachmentExpiryDate7 : '2099-12-31' }}\"> &nbsp;
                                {% if errors.attachmentExpiryDate7 %}
                                    <span class=\"help-block\">{{ errors.attachmentExpiryDate7 | first }}</span>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback{{ errors.attachmentCountry8 ? ' has-error' : '' }}{{ errors.attachmentType8 ? ' has-error' : '' }}{{ errors.attachmentIssuer8 ? ' has-error' : '' }}{{ errors.attachmentIssueDate8 ? ' has-error' : '' }}{{ errors.attachmentExpiryDate8 ? ' has-error' : '' }}\" id=\"divattachmentGroup8\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment8\">
                                <label for=\"attachment8\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment8\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentCountry8 ? ' has-error' : '' }}\" id=\"attachmentCountry8\">
                                <label for=\"attachmentCountry8\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry8\" id=\"attachmentCountry8\">
                                    <option value=\"\">Please Select ... </option>
                                    {% for country in HR.countries %}
                                        <option value=\"{{ country.id }}\" {% if country.id == old.attachmentCountry8 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry8 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry8 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType8 ? ' has-error' : '' }}\" id=\"attachmentType8\">
                                <label for=\"attachmentType8\">Type: &nbsp;</label>
                                <input id=\"attachmentType8\" name=\"attachmentType8\" type=\"text\" value=\"{{ old.attachmentType8 }}\">
                                {% if errors.attachmentType8 %}
                                    <span class=\"help-block\">{{ errors.attachmentType8 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer8 ? ' has-error' : '' }}\" id=\"attachmentIssuer8\">
                                <label for=\"attachmentIssuer8\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer8\" name=\"attachmentIssuer8\" value=\"{{ old.attachmentIssuer8 }}\"> &nbsp;
                                {% if errors.attachmentIssuer8 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer8 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate8 ? ' has-error' : '' }}\" id=\"attachmentIssueDate8\">
                                <label for=\"attachmentIssueDate8\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate8\" name=\"attachmentIssueDate8\" value=\"{{ old.attachmentIssueDate8 ? old.attachmentIssueDate8 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate8 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate8 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate8 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate8\">
                                <label for=\"attachmentExpiryDate8\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate8\" name=\"attachmentExpiryDate8\" value=\"{{ old.attachmentExpiryDate8 ? old.attachmentExpiryDate8 : '2099-12-31' }}\"> &nbsp;
                                {% if errors.attachmentExpiryDate8 %}
                                    <span class=\"help-block\">{{ errors.attachmentExpiryDate8 | first }}</span>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback{{ errors.attachmentCountry9 ? ' has-error' : '' }}{{ errors.attachmentType9 ? ' has-error' : '' }}{{ errors.attachmentIssuer9 ? ' has-error' : '' }}{{ errors.attachmentIssueDate9 ? ' has-error' : '' }}{{ errors.attachmentExpiryDate9 ? ' has-error' : '' }}\" id=\"divattachmentGroup9\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment9\">
                                <label for=\"attachment9\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment9\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentCountry9 ? ' has-error' : '' }}\" id=\"attachmentCountry9\">
                                <label for=\"attachmentCountry9\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry9\" id=\"attachmentCountry9\">
                                    <option value=\"\">Please Select ... </option>
                                    {% for country in HR.countries %}
                                        <option value=\"{{ country.id }}\" {% if country.id == old.attachmentCountry9 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry9 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry9 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType9 ? ' has-error' : '' }}\" id=\"attachmentType9\">
                                <label for=\"attachmentType9\">Type: &nbsp;</label>
                                <input id=\"attachmentType9\" name=\"attachmentType9\" type=\"text\" value=\"{{ old.attachmentType9 }}\">
                                {% if errors.attachmentType9 %}
                                    <span class=\"help-block\">{{ errors.attachmentType9 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer9 ? ' has-error' : '' }}\" id=\"attachmentIssuer9\">
                                <label for=\"attachmentIssuer9\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer9\" name=\"attachmentIssuer9\" value=\"{{ old.attachmentIssuer9 }}\"> &nbsp;
                                {% if errors.attachmentIssuer9 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer9 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate9 ? ' has-error' : '' }}\" id=\"attachmentIssueDate9\">
                                <label for=\"attachmentIssueDate9\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate9\" name=\"attachmentIssueDate9\" value=\"{{ old.attachmentIssueDate9 ? old.attachmentIssueDate9 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate9 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate9 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate9 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate9\">
                                <label for=\"attachmentExpiryDate9\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate9\" name=\"attachmentExpiryDate9\" value=\"{{ old.attachmentExpiryDate9 ? old.attachmentExpiryDate9 : '2099-12-31' }}\"> &nbsp;
                                {% if errors.attachmentExpiryDate9 %}
                                    <span class=\"help-block\">{{ errors.attachmentExpiryDate9 | first }}</span>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <div class=\"form-group has-feedback{{ errors.interview ? ' has-error' : '' }}\">
                        <label for=\"interview\">Would you like to schedule an interview for this applicant? &nbsp;
                        <input type=\"checkbox\" name=\"interview\" id=\"interview\" class=\"checkbox-inline\" value=\"{{ old.interview ? old.interview : 'null' }}\" onchange=\"interviewCheck(this)\"/></label>
                        {% if errors.interview %}
                            <span class=\"help-block\">{{ errors.interview | first }}</span>
                        {% endif %}
                    </div>
                    {# Google reCaptcha
                    <div class=\"g-recaptcha\" data-sitekey=\"6Le6_xAUAAAAAIv642XjRtyLT7I0P1yiMO5GpoKN\"></div> #}
                    <div class=\"form-group has-feedback\">
                        <input type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-primary\" value=\"Save Applicant\" />
                    </div>
                </form>
    </div>
{% endblock %}", "auth/HR/Applicant/newApplicant.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/HR/Applicant/newApplicant.twig");
    }
}
