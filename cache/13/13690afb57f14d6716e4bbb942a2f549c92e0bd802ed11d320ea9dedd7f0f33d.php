<?php

/* auth/HR/Applicant/newApplicant.twig */
class __TwigTemplate_8af8d9d437a25c82f32774392908e13c2c552540e75995c7934cc5155e8bed1a extends Twig_Template
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
        echo "<section class=\"content\">
        <div class=\"raw\">
            <div class=\"register-logo\">
                <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\"><b>MENA</b> Assistance</a>
            </div>
            <div class=\"register-box-body\">
                <p class=\"login-box-msg\">Register a new Applicant</p>
                <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.NewApplicant"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\" >
                    ";
        // line 14
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["csrf"] ?? null), "field", array());
        echo "
                    <div class=\"form-group has-feedback";
        // line 15
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "first_name", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"first_name\">First Name: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        <input type=\"text\" name=\"first_name\" id=\"first_name\" class=\"form-control\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "first_name", array()), "html", null, true);
        echo "\" placeholder=\"Applicant's First Name\" />
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        ";
        // line 19
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "first_name", array())) {
            // line 20
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "first_name", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 22
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 23
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "last_name", array())) ? (" has-error") : (""));
        echo "\">
                        <label class=\"required\" for=\"last_name\">Last Name: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        <input type=\"text\" name=\"last_name\" id=\"last_name\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "last_name", array()), "html", null, true);
        echo "\" placeholder=\"Applicant's Last Name\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        ";
        // line 27
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "last_name", array())) {
            // line 28
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "last_name", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 30
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 31
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "per_email", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"per_email\">Personal Email: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        <input type=\"email\" name=\"per_email\" id=\"per_email\" placeholder=\"applicant@domain.com\" class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "per_email", array()), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                        ";
        // line 35
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "per_email", array())) {
            // line 36
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "per_email", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 38
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 39
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "mobile_phone", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"mobile_phone\">Mobile Phone Number: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        <input type=\"tel\" name=\"mobile_phone\" id=\"mobile_phone\" placeholder=\"+971 50 000 0000\" class=\"form-control\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "mobile_phone", array()), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-phone form-control-feedback\"></span>
                        ";
        // line 43
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "mobile_phone", array())) {
            // line 44
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "mobile_phone", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 46
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 47
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "gender", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"male\">Gender: &nbsp;</label><span class=\"text-red\"><b>*</b></span> &nbsp;
                        <input type=\"radio\" name=\"gender\" id=\"male\" value=\"M\" ";
        // line 49
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "gender", array()) == "M")) {
            echo "checked=\"checked\"";
        }
        echo "/>
                        <span class=\"fa fa-male\"> Male &nbsp; &nbsp;</span>
                        <input type=\"radio\" name=\"gender\" id=\"female\" value=\"F\" ";
        // line 51
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "gender", array()) == "F")) {
            echo "checked=\"checked\"";
        }
        echo "/>
                        <span class=\"fa fa-female\"> Female</span>
                        ";
        // line 53
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "gender", array())) {
            // line 54
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "gender", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 56
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 57
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "nationality", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"nationality\">Nationality: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        <select class=\"form-control\" name=\"nationality\" id=\"nationality\">
                            <option value=\"\">Please Select ... </option>
                            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 62
            echo "                                <option value=\"";
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
        // line 64
        echo "                        </select>
                        ";
        // line 65
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "nationality", array())) {
            // line 66
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "nationality", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 68
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 69
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "dob", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"dob\">Date of Birth: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"date\" class=\"form-control pull-right date-picker\" name=\"dob\" id=\"dob\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "dob", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "dob", array())) : ("1984-09-03")), "html", null, true);
        echo "\">
                            </div>
                            ";
        // line 77
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "dob", array())) {
            // line 78
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "dob", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 80
        echo "                        </div>
                    <div class=\"form-group has-feedback";
        // line 81
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "languageCount", array())) ? (" has-error") : (""));
        echo "\">
                        <label class=\"required\">Languages: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "languages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 84
            echo "                            <label for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["language"], "id", array()), "html", null, true);
            echo "\">
                                <input
                                        type=\"checkbox\"
                                        id=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["language"], "id", array()), "html", null, true);
            echo "\"
                                        name=\"language_[]\"
                                        value=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["language"], "id", array()), "html", null, true);
            echo "\"
                                        class=\"checkbox-inline\"
                                        onchange=\"languageCounter(this)\"
                                />&nbsp;";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["language"], "language_name", array()));
            echo " &nbsp; &nbsp;
                            </label> &nbsp; &nbsp;
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                        <input type=\"hidden\" name=\"languageCount\" id=\"languageCount\" value=\"0\" />
                        ";
        // line 96
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "languageCount", array())) {
            // line 97
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "languageCount", array())), "html", null, true);
            echo " language.</span>
                        ";
        }
        // line 99
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 100
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "expectation", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"expectation\">Expected Salary: <span class=\"help-block inline\"><small><i>Expected Salary Amount (inclusive of benefits) in U.A.E. Dirhams</i></small></span></label>
                        <div class=\"input-group has-feedback\">
                            <span class=\"input-group-addon\">AED</span>
                            <input type=\"number\" name=\"expectation\" id=\"expectation\" class=\"form-control\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "expectation", array()), "html", null, true);
        echo "\" placeholder=\"Enter expected amount in Dhs\">
                            <span class=\"input-group-addon\">.00</span>
                        </div>
<!--                            <span class=\"glyphicon glyphicon-usd form-control-feedback\"></span>-->
                        ";
        // line 108
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "expectation", array())) {
            // line 109
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "expectation", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 111
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 112
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"inputvisa\">Current Visa Status: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        <br/>

                        <label for=\"employee_residence\">Employee Residency &nbsp;</label>
                        <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"employee_residence\" value=\"Employee Residence\" ";
        // line 117
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa", array()) == "Employee Residence")) {
            echo "checked=\"checked\"";
        }
        echo " /> &nbsp; &nbsp;
                        <label for=\"family_residence\">Family Residency &nbsp;</label>
                        <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"family_residence\" value=\"Family Residence\" ";
        // line 119
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa", array()) == "Family Residence")) {
            echo "checked=\"checked\"";
        }
        echo " /> &nbsp; &nbsp;
                        <label for=\"visit\">Visit Visa &nbsp;</label>
                        <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"visit\" value=\"Visit\" ";
        // line 121
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa", array()) == "Visit")) {
            echo "checked=\"checked\"";
        }
        echo " /> &nbsp; &nbsp;
                        <label for=\"tourist\">Tourist Visa &nbsp;</label>
                        <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"tourist\" value=\"Tourist\" ";
        // line 123
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa", array()) == "Tourist")) {
            echo "checked=\"checked\"";
        }
        echo " /> &nbsp; &nbsp;
                        <label for=\"expired\">Expired Visa &nbsp;</label>
                        <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"expired\" value=\"Expired\" ";
        // line 125
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa", array()) == "Expired")) {
            echo "checked=\"checked\"";
        }
        echo " /> &nbsp; &nbsp;
                        <label for=\"cancelled\">Cancelled Visa &nbsp;</label>
                        <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"cencelled\" value=\"cencelled\" ";
        // line 127
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa", array()) == "cancelled")) {
            echo "checked=\"checked\"";
        }
        echo " /> &nbsp; &nbsp;

                        ";
        // line 130
        echo "
                        ";
        // line 131
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa", array())) {
            // line 132
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 134
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 135
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa_age", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"visa_age\">Visa Age: &nbsp;</label><span class=\"text-red\"><b>*</b></span> &nbsp; <span class=\"help-block inline\"><small><i>Time since the first issuance of visa from current sponsor</i></small></span>
                        <input type=\"text\" class=\"form-control\" name=\"visa_age\" id=\"visa_age\" placeholder=\"Two years ...\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa_age", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "visa_age", array())) : ("")), "html", null, true);
        echo "\" />&nbsp;
                        ";
        // line 138
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa_age", array())) {
            // line 139
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa_age", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 141
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 142
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "notice", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"notice\">Required Notice Period:</label> &nbsp; <span class=\"text-red\"><b>*</b></span>
                            <input type=\"text\" class=\"form-control\" name=\"notice\" id=\"notice\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "notice", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "notice", array())) : ("")), "html", null, true);
        echo "\" placeholder=\"One month ...\" />&nbsp;
                            ";
        // line 145
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "notice", array())) {
            // line 146
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "notice", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 148
        echo "                        </div>
                    <div class=\"form-group has-feedback";
        // line 149
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "source", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"source\">Application Source:  &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        <p class=\"help-block\"><small><i>How did the applicant hear about us</i></small></p>
                        <select class=\"form-control\" name=\"source\" id=\"source\">
                            <option value=\"\" ";
        // line 153
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "source", array()) == "")) {
            echo "selected";
        }
        echo ">Please Select ...</option>
                            <option value=\"HR Agency\" ";
        // line 154
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "source", array()) == "HR Agency")) {
            echo "selected";
        }
        echo ">HR Agency</option>
                            <option value=\"Search Engine\" ";
        // line 155
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "source", array()) == "Search Engine")) {
            echo "selected";
        }
        echo ">Search Engine</option>
                            <option value=\"Friend or Colleague\" ";
        // line 156
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "source", array()) == "Friend")) {
            echo "selected";
        }
        echo ">Friend</option>
                            <option value=\"Other\" ";
        // line 157
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "source", array()) == "Other")) {
            echo "selected";
        }
        echo ">Other</option>
                            <option value=\"No Answer\" ";
        // line 158
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "source", array()) == "No Answer")) {
            echo "selected";
        }
        echo ">No Answer</option>
                        </select>
                        ";
        // line 160
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "source", array())) {
            // line 161
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "source", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 163
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 164
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "profilepic", array())) ? (" has-error") : (""));
        echo "\">
                        <label class=\"control-label\" for=\"profilePic\">Photo: &nbsp;</label>
                        <input type=\"file\" id=\"profilePic\" name=\"profilepic\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "profilepic", array()), "html", null, true);
        echo "\" class=\"file\">
                        <p class=\"help-block\"><small><i>File must be *.jpg, *.jpeg, *.png, *.gif, or *.bmb and &lt; 3MBs</i></small></p>
<!--                        <img id=\"profilePicApplicantFRM\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/img/applicants/defaultMale.png\" height=\"40\" class=\"profile-image img-circle\">-->
                        ";
        // line 169
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "profilepic", array())) {
            // line 170
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "profilepic", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 172
        echo "                    </div>
                    <div id=\"newAttachment\" class=\"form-group\">
                        <label for=\"help-me\">Attachments:</label>
                        <p class=\"help-block\" id=\"help-me\"><span><i>Attach CV, Passport Copy, VISA Copy, Educational Degree, or any other related documents<br/><mark>Remember to rename the files respectively</mark></i></span></p>
                        <input type=\"hidden\" id=\"attachmentCounter\" name=\"attachmentCounter\" value=\"-1\">
                        <input type=\"button\" id=\"add\" class=\"btn btn-xs\" onclick=\"showInput('divattachmentGroup', 'attachmentCounter')\" value=\"Add New\" title=\"Add new attachment field\"/>
                        <input type=\"button\" id=\"remove\" class=\"btn btn-xs btn-danger\" onclick=\"hideInput('divattachmentGroup', 'attachmentCounter')\" value=\"Remove\" title=\"Removes the last item\" />
                        <br/>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 180
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
        // line 185
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry0\">
                                <label for=\"attachmentCountry0\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry0\" id=\"attachmentCountry0\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 190
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
        // line 192
        echo "                                </select>
                                ";
        // line 193
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry0", array())) {
            // line 194
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 196
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 197
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType0\">
                                <label for=\"attachmentType0\">Type: &nbsp;</label>
                                <input id=\"attachmentType0\" name=\"attachmentType0\" type=\"text\" value=\"";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType0", array()), "html", null, true);
        echo "\">
                                ";
        // line 200
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType0", array())) {
            // line 201
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 203
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 204
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer0\">
                                <label for=\"attachmentIssuer0\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer0\" name=\"attachmentIssuer0\" value=\"";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer0", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 207
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer0", array())) {
            // line 208
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 210
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 211
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate0\">
                                <label for=\"attachmentIssueDate0\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate0\" name=\"attachmentIssueDate0\" value=\"";
        // line 213
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate0", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate0", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 214
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate0", array())) {
            // line 215
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 217
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 218
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate0\">
                                <label for=\"attachmentExpiryDate0\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate0\" name=\"attachmentExpiryDate0\" value=\"";
        // line 220
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate0", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate0", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 221
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate0", array())) {
            // line 222
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 224
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 226
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
        // line 231
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry1\">
                                <label for=\"attachmentCountry1\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry1\" id=\"attachmentCountry1\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 236
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
        // line 238
        echo "                                </select>
                                ";
        // line 239
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry1", array())) {
            // line 240
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 242
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 244
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType1\">
                                <label for=\"attachmentType1\">Type: &nbsp;</label>
                                <input id=\"attachmentType1\" name=\"attachmentType1\" type=\"text\" value=\"";
        // line 246
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType1", array()), "html", null, true);
        echo "\">
                                ";
        // line 247
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType1", array())) {
            // line 248
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 250
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 251
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer1\">
                                <label for=\"attachmentIssuer1\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer1\" name=\"attachmentIssuer1\" value=\"";
        // line 253
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer1", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 254
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer1", array())) {
            // line 255
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 257
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 258
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate1\">
                                <label for=\"attachmentIssueDate1\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate1\" name=\"attachmentIssueDate1\" value=\"";
        // line 260
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate1", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate1", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 261
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate1", array())) {
            // line 262
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 264
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 265
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate1\">
                                <label for=\"attachmentExpiryDate1\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate1\" name=\"attachmentExpiryDate1\" value=\"";
        // line 267
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate1", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate1", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 268
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate1", array())) {
            // line 269
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 271
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 273
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
        // line 278
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry2\">
                                <label for=\"attachmentCountry2\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry2\" id=\"attachmentCountry2\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 283
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
        // line 285
        echo "                                </select>
                                ";
        // line 286
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry2", array())) {
            // line 287
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 289
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 291
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType2\">
                                <label for=\"attachmentType2\">Type: &nbsp;</label>
                                <input id=\"attachmentType2\" name=\"attachmentType2\" type=\"text\" value=\"";
        // line 293
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType2", array()), "html", null, true);
        echo "\">
                                ";
        // line 294
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType2", array())) {
            // line 295
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 297
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 298
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer2\">
                                <label for=\"attachmentIssuer2\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer2\" name=\"attachmentIssuer2\" value=\"";
        // line 300
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer2", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 301
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer2", array())) {
            // line 302
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 304
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 305
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate2\">
                                <label for=\"attachmentIssueDate2\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate2\" name=\"attachmentIssueDate2\" value=\"";
        // line 307
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate2", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate2", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 308
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate2", array())) {
            // line 309
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 311
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 312
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate2\">
                                <label for=\"attachmentExpiryDate2\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate2\" name=\"attachmentExpiryDate2\" value=\"";
        // line 314
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate2", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate2", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 315
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate2", array())) {
            // line 316
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 318
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 320
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
        // line 325
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry3\">
                                <label for=\"attachmentCountry3\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry3\" id=\"attachmentCountry3\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 330
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
        // line 332
        echo "                                </select>
                                ";
        // line 333
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry3", array())) {
            // line 334
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 336
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 338
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType3\">
                                <label for=\"attachmentType3\">Type: &nbsp;</label>
                                <input id=\"attachmentType3\" name=\"attachmentType3\" type=\"text\" value=\"";
        // line 340
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType3", array()), "html", null, true);
        echo "\">
                                ";
        // line 341
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType3", array())) {
            // line 342
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 344
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 345
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer3\">
                                <label for=\"attachmentIssuer3\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer3\" name=\"attachmentIssuer3\" value=\"";
        // line 347
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer3", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 348
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer3", array())) {
            // line 349
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 351
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 352
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate3\">
                                <label for=\"attachmentIssueDate3\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate3\" name=\"attachmentIssueDate3\" value=\"";
        // line 354
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate3", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate3", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 355
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate3", array())) {
            // line 356
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 358
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 359
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate3\">
                                <label for=\"attachmentExpiryDate3\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate3\" name=\"attachmentExpiryDate3\" value=\"";
        // line 361
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate3", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate3", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 362
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate3", array())) {
            // line 363
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 365
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 367
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
        // line 372
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry4\">
                                <label for=\"attachmentCountry4\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry4\" id=\"attachmentCountry4\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 376
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 377
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
        // line 379
        echo "                                </select>
                                ";
        // line 380
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry4", array())) {
            // line 381
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 383
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 385
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType4\">
                                <label for=\"attachmentType4\">Type: &nbsp;</label>
                                <input id=\"attachmentType4\" name=\"attachmentType4\" type=\"text\" value=\"";
        // line 387
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType4", array()), "html", null, true);
        echo "\">
                                ";
        // line 388
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType4", array())) {
            // line 389
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 391
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 392
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer4\">
                                <label for=\"attachmentIssuer4\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer4\" name=\"attachmentIssuer4\" value=\"";
        // line 394
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer4", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 395
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer4", array())) {
            // line 396
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 398
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 399
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate4\">
                                <label for=\"attachmentIssueDate4\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate4\" name=\"attachmentIssueDate4\" value=\"";
        // line 401
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate4", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate4", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 402
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate4", array())) {
            // line 403
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 405
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 406
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate4\">
                                <label for=\"attachmentExpiryDate4\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate4\" name=\"attachmentExpiryDate4\" value=\"";
        // line 408
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate4", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate4", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 409
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate4", array())) {
            // line 410
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 412
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden  has-feedback";
        // line 414
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
        // line 419
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry5\">
                                <label for=\"attachmentCountry5\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry5\" id=\"attachmentCountry5\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 423
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 424
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
        // line 426
        echo "                                </select>
                                ";
        // line 427
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry5", array())) {
            // line 428
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 430
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 432
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType5\">
                                <label for=\"attachmentType5\">Type: &nbsp;</label>
                                <input id=\"attachmentType5\" name=\"attachmentType5\" type=\"text\" value=\"";
        // line 434
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType5", array()), "html", null, true);
        echo "\">
                                ";
        // line 435
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType5", array())) {
            // line 436
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 438
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 439
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer5\">
                                <label for=\"attachmentIssuer5\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer5\" name=\"attachmentIssuer5\" value=\"";
        // line 441
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer5", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 442
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer5", array())) {
            // line 443
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 445
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 446
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate5\">
                                <label for=\"attachmentIssueDate5\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate5\" name=\"attachmentIssueDate5\" value=\"";
        // line 448
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate5", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate5", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 449
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate5", array())) {
            // line 450
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 452
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 453
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate5\">
                                <label for=\"attachmentExpiryDate5\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate5\" name=\"attachmentExpiryDate5\" value=\"";
        // line 455
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate5", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate5", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 456
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate5", array())) {
            // line 457
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 459
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 461
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
        // line 466
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry6\">
                                <label for=\"attachmentCountry6\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry6\" id=\"attachmentCountry6\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 470
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 471
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
        // line 473
        echo "                                </select>
                                ";
        // line 474
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry6", array())) {
            // line 475
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 477
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 479
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType6\">
                                <label for=\"attachmentType6\">Type: &nbsp;</label>
                                <input id=\"attachmentType6\" name=\"attachmentType6\" type=\"text\" value=\"";
        // line 481
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType6", array()), "html", null, true);
        echo "\">
                                ";
        // line 482
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType6", array())) {
            // line 483
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 485
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 486
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer6\">
                                <label for=\"attachmentIssuer6\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer6\" name=\"attachmentIssuer6\" value=\"";
        // line 488
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer6", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 489
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer6", array())) {
            // line 490
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 492
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 493
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate6\">
                                <label for=\"attachmentIssueDate6\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate6\" name=\"attachmentIssueDate6\" value=\"";
        // line 495
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate6", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate6", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 496
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate6", array())) {
            // line 497
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 499
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 500
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate6\">
                                <label for=\"attachmentExpiryDate6\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate6\" name=\"attachmentExpiryDate6\" value=\"";
        // line 502
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate6", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate6", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 503
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate6", array())) {
            // line 504
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 506
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 508
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
        // line 513
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry7\">
                                <label for=\"attachmentCountry7\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry7\" id=\"attachmentCountry7\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 517
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 518
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
        // line 520
        echo "                                </select>
                                ";
        // line 521
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry7", array())) {
            // line 522
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 524
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 526
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType7\">
                                <label for=\"attachmentType7\">Type: &nbsp;</label>
                                <input id=\"attachmentType7\" name=\"attachmentType7\" type=\"text\" value=\"";
        // line 528
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType7", array()), "html", null, true);
        echo "\">
                                ";
        // line 529
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType7", array())) {
            // line 530
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 532
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 533
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer7\">
                                <label for=\"attachmentIssuer7\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer7\" name=\"attachmentIssuer7\" value=\"";
        // line 535
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer7", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 536
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer7", array())) {
            // line 537
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 539
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 540
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate7\">
                                <label for=\"attachmentIssueDate7\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate7\" name=\"attachmentIssueDate7\" value=\"";
        // line 542
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate7", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate7", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 543
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate7", array())) {
            // line 544
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 546
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 547
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate7\">
                                <label for=\"attachmentExpiryDate7\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate7\" name=\"attachmentExpiryDate7\" value=\"";
        // line 549
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate7", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate7", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 550
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate7", array())) {
            // line 551
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 553
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 555
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
        // line 560
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry8\">
                                <label for=\"attachmentCountry8\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry8\" id=\"attachmentCountry8\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 564
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 565
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
        // line 567
        echo "                                </select>
                                ";
        // line 568
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry8", array())) {
            // line 569
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 571
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 573
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType8\">
                                <label for=\"attachmentType8\">Type: &nbsp;</label>
                                <input id=\"attachmentType8\" name=\"attachmentType8\" type=\"text\" value=\"";
        // line 575
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType8", array()), "html", null, true);
        echo "\">
                                ";
        // line 576
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType8", array())) {
            // line 577
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 579
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 580
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer8\">
                                <label for=\"attachmentIssuer8\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer8\" name=\"attachmentIssuer8\" value=\"";
        // line 582
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer8", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 583
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer8", array())) {
            // line 584
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 586
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 587
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate8\">
                                <label for=\"attachmentIssueDate8\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate8\" name=\"attachmentIssueDate8\" value=\"";
        // line 589
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate8", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate8", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 590
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate8", array())) {
            // line 591
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 593
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 594
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate8\">
                                <label for=\"attachmentExpiryDate8\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate8\" name=\"attachmentExpiryDate8\" value=\"";
        // line 596
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate8", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate8", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 597
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate8", array())) {
            // line 598
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 600
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 602
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
        // line 607
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry9\">
                                <label for=\"attachmentCountry9\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry9\" id=\"attachmentCountry9\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 611
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 612
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
        // line 614
        echo "                                </select>
                                ";
        // line 615
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry9", array())) {
            // line 616
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 618
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 620
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType9\">
                                <label for=\"attachmentType9\">Type: &nbsp;</label>
                                <input id=\"attachmentType9\" name=\"attachmentType9\" type=\"text\" value=\"";
        // line 622
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentType9", array()), "html", null, true);
        echo "\">
                                ";
        // line 623
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType9", array())) {
            // line 624
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 626
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 627
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer9\">
                                <label for=\"attachmentIssuer9\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer9\" name=\"attachmentIssuer9\" value=\"";
        // line 629
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssuer9", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 630
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer9", array())) {
            // line 631
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 633
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 634
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate9\">
                                <label for=\"attachmentIssueDate9\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate9\" name=\"attachmentIssueDate9\" value=\"";
        // line 636
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate9", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentIssueDate9", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 637
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate9", array())) {
            // line 638
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 640
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 641
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate9\">
                                <label for=\"attachmentExpiryDate9\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate9\" name=\"attachmentExpiryDate9\" value=\"";
        // line 643
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate9", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "attachmentExpiryDate9", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 644
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate9", array())) {
            // line 645
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 647
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"form-group has-feedback";
        // line 650
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "interview", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"interview\">Would you like to schedule an interview for this applicant? &nbsp;
                        <input type=\"checkbox\" name=\"interview\" id=\"interview\" class=\"checkbox-inline\" value=\"";
        // line 652
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "interview", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "interview", array())) : ("null")), "html", null, true);
        echo "\" onchange=\"interviewCheck(this)\"/></label>
                        ";
        // line 653
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "interview", array())) {
            // line 654
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "interview", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 656
        echo "                    </div>
                    ";
        // line 659
        echo "                    <div class=\"form-group has-feedback\">
                        <input type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-primary\" value=\"Save Applicant\" />
                    </div>
                </form>
            </div>
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
        return array (  1863 => 659,  1860 => 656,  1854 => 654,  1852 => 653,  1848 => 652,  1843 => 650,  1838 => 647,  1832 => 645,  1830 => 644,  1826 => 643,  1821 => 641,  1818 => 640,  1812 => 638,  1810 => 637,  1806 => 636,  1801 => 634,  1798 => 633,  1792 => 631,  1790 => 630,  1786 => 629,  1781 => 627,  1778 => 626,  1772 => 624,  1770 => 623,  1766 => 622,  1761 => 620,  1757 => 618,  1751 => 616,  1749 => 615,  1746 => 614,  1731 => 612,  1727 => 611,  1720 => 607,  1708 => 602,  1704 => 600,  1698 => 598,  1696 => 597,  1692 => 596,  1687 => 594,  1684 => 593,  1678 => 591,  1676 => 590,  1672 => 589,  1667 => 587,  1664 => 586,  1658 => 584,  1656 => 583,  1652 => 582,  1647 => 580,  1644 => 579,  1638 => 577,  1636 => 576,  1632 => 575,  1627 => 573,  1623 => 571,  1617 => 569,  1615 => 568,  1612 => 567,  1597 => 565,  1593 => 564,  1586 => 560,  1574 => 555,  1570 => 553,  1564 => 551,  1562 => 550,  1558 => 549,  1553 => 547,  1550 => 546,  1544 => 544,  1542 => 543,  1538 => 542,  1533 => 540,  1530 => 539,  1524 => 537,  1522 => 536,  1518 => 535,  1513 => 533,  1510 => 532,  1504 => 530,  1502 => 529,  1498 => 528,  1493 => 526,  1489 => 524,  1483 => 522,  1481 => 521,  1478 => 520,  1463 => 518,  1459 => 517,  1452 => 513,  1440 => 508,  1436 => 506,  1430 => 504,  1428 => 503,  1424 => 502,  1419 => 500,  1416 => 499,  1410 => 497,  1408 => 496,  1404 => 495,  1399 => 493,  1396 => 492,  1390 => 490,  1388 => 489,  1384 => 488,  1379 => 486,  1376 => 485,  1370 => 483,  1368 => 482,  1364 => 481,  1359 => 479,  1355 => 477,  1349 => 475,  1347 => 474,  1344 => 473,  1329 => 471,  1325 => 470,  1318 => 466,  1306 => 461,  1302 => 459,  1296 => 457,  1294 => 456,  1290 => 455,  1285 => 453,  1282 => 452,  1276 => 450,  1274 => 449,  1270 => 448,  1265 => 446,  1262 => 445,  1256 => 443,  1254 => 442,  1250 => 441,  1245 => 439,  1242 => 438,  1236 => 436,  1234 => 435,  1230 => 434,  1225 => 432,  1221 => 430,  1215 => 428,  1213 => 427,  1210 => 426,  1195 => 424,  1191 => 423,  1184 => 419,  1172 => 414,  1168 => 412,  1162 => 410,  1160 => 409,  1156 => 408,  1151 => 406,  1148 => 405,  1142 => 403,  1140 => 402,  1136 => 401,  1131 => 399,  1128 => 398,  1122 => 396,  1120 => 395,  1116 => 394,  1111 => 392,  1108 => 391,  1102 => 389,  1100 => 388,  1096 => 387,  1091 => 385,  1087 => 383,  1081 => 381,  1079 => 380,  1076 => 379,  1061 => 377,  1057 => 376,  1050 => 372,  1038 => 367,  1034 => 365,  1028 => 363,  1026 => 362,  1022 => 361,  1017 => 359,  1014 => 358,  1008 => 356,  1006 => 355,  1002 => 354,  997 => 352,  994 => 351,  988 => 349,  986 => 348,  982 => 347,  977 => 345,  974 => 344,  968 => 342,  966 => 341,  962 => 340,  957 => 338,  953 => 336,  947 => 334,  945 => 333,  942 => 332,  927 => 330,  923 => 329,  916 => 325,  904 => 320,  900 => 318,  894 => 316,  892 => 315,  888 => 314,  883 => 312,  880 => 311,  874 => 309,  872 => 308,  868 => 307,  863 => 305,  860 => 304,  854 => 302,  852 => 301,  848 => 300,  843 => 298,  840 => 297,  834 => 295,  832 => 294,  828 => 293,  823 => 291,  819 => 289,  813 => 287,  811 => 286,  808 => 285,  793 => 283,  789 => 282,  782 => 278,  770 => 273,  766 => 271,  760 => 269,  758 => 268,  754 => 267,  749 => 265,  746 => 264,  740 => 262,  738 => 261,  734 => 260,  729 => 258,  726 => 257,  720 => 255,  718 => 254,  714 => 253,  709 => 251,  706 => 250,  700 => 248,  698 => 247,  694 => 246,  689 => 244,  685 => 242,  679 => 240,  677 => 239,  674 => 238,  659 => 236,  655 => 235,  648 => 231,  636 => 226,  632 => 224,  626 => 222,  624 => 221,  620 => 220,  615 => 218,  612 => 217,  606 => 215,  604 => 214,  600 => 213,  595 => 211,  592 => 210,  586 => 208,  584 => 207,  580 => 206,  575 => 204,  572 => 203,  566 => 201,  564 => 200,  560 => 199,  555 => 197,  552 => 196,  546 => 194,  544 => 193,  541 => 192,  526 => 190,  522 => 189,  515 => 185,  503 => 180,  493 => 172,  487 => 170,  485 => 169,  481 => 168,  476 => 166,  471 => 164,  468 => 163,  462 => 161,  460 => 160,  453 => 158,  447 => 157,  441 => 156,  435 => 155,  429 => 154,  423 => 153,  416 => 149,  413 => 148,  407 => 146,  405 => 145,  401 => 144,  396 => 142,  393 => 141,  387 => 139,  385 => 138,  381 => 137,  376 => 135,  373 => 134,  367 => 132,  365 => 131,  362 => 130,  355 => 127,  348 => 125,  341 => 123,  334 => 121,  327 => 119,  320 => 117,  312 => 112,  309 => 111,  303 => 109,  301 => 108,  294 => 104,  287 => 100,  284 => 99,  278 => 97,  276 => 96,  273 => 95,  264 => 92,  258 => 89,  253 => 87,  246 => 84,  242 => 83,  237 => 81,  234 => 80,  228 => 78,  226 => 77,  221 => 75,  212 => 69,  209 => 68,  203 => 66,  201 => 65,  198 => 64,  183 => 62,  179 => 61,  172 => 57,  169 => 56,  163 => 54,  161 => 53,  154 => 51,  147 => 49,  142 => 47,  139 => 46,  133 => 44,  131 => 43,  126 => 41,  121 => 39,  118 => 38,  112 => 36,  110 => 35,  105 => 33,  100 => 31,  97 => 30,  91 => 28,  89 => 27,  84 => 25,  79 => 23,  76 => 22,  70 => 20,  68 => 19,  63 => 17,  58 => 15,  54 => 14,  50 => 13,  43 => 9,  38 => 6,  35 => 5,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}
{% block title %}New Applicant{% endblock %}


{% block contents %}
<section class=\"content\">
        <div class=\"raw\">
            <div class=\"register-logo\">
                <a href=\"{{ base_url() }}\"><b>MENA</b> Assistance</a>
            </div>
            <div class=\"register-box-body\">
                <p class=\"login-box-msg\">Register a new Applicant</p>
                <form action=\"{{ path_for('HR.NewApplicant') }}\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\" >
                    {{ csrf.field | raw }}
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
                    <div class=\"form-group has-feedback{{ errors.languageCount ? ' has-error' : '' }}\">
                        <label class=\"required\">Languages: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        {% for language in HR.languages %}
                            <label for=\"{{ language.id }}\">
                                <input
                                        type=\"checkbox\"
                                        id=\"{{ language.id }}\"
                                        name=\"language_[]\"
                                        value=\"{{ language.id }}\"
                                        class=\"checkbox-inline\"
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
                            <input type=\"number\" name=\"expectation\" id=\"expectation\" class=\"form-control\" value=\"{{ old.expectation }}\" placeholder=\"Enter expected amount in Dhs\">
                            <span class=\"input-group-addon\">.00</span>
                        </div>
<!--                            <span class=\"glyphicon glyphicon-usd form-control-feedback\"></span>-->
                        {% if errors.expectation %}
                            <span class=\"help-block\">{{ errors.expectation | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.visa ? ' has-error' : '' }}\">
                        <label for=\"inputvisa\">Current Visa Status: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        <br/>

                        <label for=\"employee_residence\">Employee Residency &nbsp;</label>
                        <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"employee_residence\" value=\"Employee Residence\" {% if old.visa == 'Employee Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;
                        <label for=\"family_residence\">Family Residency &nbsp;</label>
                        <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"family_residence\" value=\"Family Residence\" {% if old.visa == 'Family Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;
                        <label for=\"visit\">Visit Visa &nbsp;</label>
                        <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"visit\" value=\"Visit\" {% if old.visa == 'Visit' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;
                        <label for=\"tourist\">Tourist Visa &nbsp;</label>
                        <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"tourist\" value=\"Tourist\" {% if old.visa == 'Tourist' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;
                        <label for=\"expired\">Expired Visa &nbsp;</label>
                        <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"expired\" value=\"Expired\" {% if old.visa == 'Expired' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;
                        <label for=\"cancelled\">Cancelled Visa &nbsp;</label>
                        <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"cencelled\" value=\"cencelled\" {% if old.visa == 'cancelled' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;

                        {#<label for=\"investor_residence\">Investor Residency</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"investor_residence\" value=\"Investor Residence\" {% if old.visa == 'Investor Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"maid_residence\">Maid Residency</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"maid_residence\" value=\"Maid Residence\" {% if old.visa == 'Maid Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"relative_residence\">Investor Residency</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"relative_residence\" value=\"Relative Residence\" {% if old.visa == 'Relative Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"student_residence\">Investor Residence</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"student_residence\" value=\"Student Residence\" {% if old.visa == 'Student Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"mission\">Mission Visa</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"mission\" value=\"Mission\" {% if old.visa == 'Mission' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"multiple_entry\">Multiple Entry Visa</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"multiple_entry\" value=\"Multiple Entry\" {% if old.visa == 'Multiple Entry' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;#}

                        {% if errors.visa %}
                            <span class=\"help-block\">{{ errors.visa | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.visa_age ? ' has-error' : '' }}\">
                        <label for=\"visa_age\">Visa Age: &nbsp;</label><span class=\"text-red\"><b>*</b></span> &nbsp; <span class=\"help-block inline\"><small><i>Time since the first issuance of visa from current sponsor</i></small></span>
                        <input type=\"text\" class=\"form-control\" name=\"visa_age\" id=\"visa_age\" placeholder=\"Two years ...\" value=\"{{ old.visa_age ? old.visa_age : '' }}\" />&nbsp;
                        {% if errors.visa_age %}
                            <span class=\"help-block\">{{ errors.visa_age | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.notice ? ' has-error' : '' }}\">
                            <label for=\"notice\">Required Notice Period:</label> &nbsp; <span class=\"text-red\"><b>*</b></span>
                            <input type=\"text\" class=\"form-control\" name=\"notice\" id=\"notice\" value=\"{{ old.notice ? old.notice : '' }}\" placeholder=\"One month ...\" />&nbsp;
                            {% if errors.notice %}
                                <span class=\"help-block\">{{ errors.notice | first }}</span>
                            {% endif %}
                        </div>
                    <div class=\"form-group has-feedback{{ errors.source ? ' has-error' : '' }}\">
                        <label for=\"source\">Application Source:  &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        <p class=\"help-block\"><small><i>How did the applicant hear about us</i></small></p>
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
                    <div class=\"form-group has-feedback{{ errors.profilepic ? ' has-error' : '' }}\">
                        <label class=\"control-label\" for=\"profilePic\">Photo: &nbsp;</label>
                        <input type=\"file\" id=\"profilePic\" name=\"profilepic\" value=\"{{ old.profilepic }}\" class=\"file\">
                        <p class=\"help-block\"><small><i>File must be *.jpg, *.jpeg, *.png, *.gif, or *.bmb and &lt; 3MBs</i></small></p>
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
        </div>
{% endblock %}
", "auth/HR/Applicant/newApplicant.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/HR/Applicant/newApplicant.twig");
    }
}
