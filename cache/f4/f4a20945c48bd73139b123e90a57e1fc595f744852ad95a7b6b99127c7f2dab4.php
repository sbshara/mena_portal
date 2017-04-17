<?php

/* auth/HR/Applicant/applicantById.twig */
class __TwigTemplate_ce478f0c6f85608e4eb16718fc3a5f3db420b8ba94404c7f85ce237324a5271f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/HR/Applicant/applicantById.twig", 1);
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
        echo "Update Applicant Details (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "last_name", array()), "html", null, true);
        echo ")";
    }

    // line 4
    public function block_contents($context, array $blocks = array())
    {
        // line 5
        echo "<section class=\"content\">
    <div class=\"raw\">
        <div class=\"register-logo\">
            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\"><b>MENA</b> Assistance</a>
        </div>
        <div class=\"register-box-body\">
            <p class=\"login-box-msg\">Update Details for Applicant: ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "last_name", array()), "html", null, true);
        echo "</p>
            <form action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.ApplicantById", twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "id", array())), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\" >
                ";
        // line 13
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["csrf"] ?? null), "field", array());
        echo "
                <div class=\"form-group has-feedback";
        // line 14
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "first_name", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"first_name\">
                        First Name: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <input
                        type=\"text\"
                        name=\"first_name\"
                        id=\"first_name\"
                        class=\"form-control\"
                        value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "first_name", array()), "html", null, true);
        echo "\"
                        placeholder=\"Applicant's First Name\"
                    />
                    <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    ";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "first_name", array())) {
            // line 31
            echo "                        <span class=\"help-block\">
                            ";
            // line 32
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "first_name", array())), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 35
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 36
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "last_name", array())) ? (" has-error") : (""));
        echo "\">
                    <label class=\"required\" for=\"last_name\">
                        Last Name: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <input
                        type=\"text\"
                        name=\"last_name\"
                        id=\"last_name\"
                        class=\"form-control\"
                        value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "last_name", array()), "html", null, true);
        echo "\"
                        placeholder=\"Applicant's Last Name\"
                    />
                    <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    ";
        // line 52
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "last_name", array())) {
            // line 53
            echo "                        <span class=\"help-block\">
                            ";
            // line 54
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "last_name", array())), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 57
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 58
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "per_email", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"per_email\">
                        Personal Email: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <input
                        type=\"email\"
                        name=\"per_email\"
                        id=\"per_email\"
                        class=\"form-control\"
                        value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "per_email", array()), "html", null, true);
        echo "\"
                        placeholder=\"applicant@domain.com\"
                    />
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                    ";
        // line 74
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "per_email", array())) {
            // line 75
            echo "                        <span class=\"help-block\">
                            ";
            // line 76
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "per_email", array())), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 79
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 80
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "mobile_phone", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"mobile_phone\">
                        Mobile Phone Number: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <input
                        type=\"tel\"
                        name=\"mobile_phone\"
                        id=\"mobile_phone\"
                        class=\"form-control\"
                        value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "mobile_phone", array()), "html", null, true);
        echo "\"
                        placeholder=\"+971 50 000 0000\"
                    />
                    <span class=\"glyphicon glyphicon-phone form-control-feedback\"></span>
                    ";
        // line 96
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "mobile_phone", array())) {
            // line 97
            echo "                        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "mobile_phone", array())), "html", null, true);
            echo "</span>
                    ";
        }
        // line 99
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 100
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "gender", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"male\">
                        Gender: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span> &nbsp;
                    <input
                        type=\"radio\"
                        name=\"gender\"
                        id=\"male\"
                        value=\"M\"
                        ";
        // line 112
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "gender", array()) == "M")) {
            // line 113
            echo "                             checked=\"checked\"
                        ";
        }
        // line 115
        echo "                    />
                    <span class=\"fa fa-male\">
                        &nbsp;Male &nbsp; &nbsp;
                    </span>
                    <input
                        type=\"radio\"
                        name=\"gender\"
                        id=\"female\"
                        value=\"F\"
                        ";
        // line 124
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "gender", array()) == "F")) {
            // line 125
            echo "                             checked=\"checked\"
                        ";
        }
        // line 127
        echo "                    />
                    <span class=\"fa fa-female\">
                        &nbsp;Female</span>
                    ";
        // line 130
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "gender", array())) {
            // line 131
            echo "                        <span class=\"help-block\">
                            ";
            // line 132
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "gender", array())), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 135
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 136
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "nationality", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"nationality\">
                        Nationality: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <select class=\"form-control\" name=\"nationality\" id=\"nationality\">
                        <option value=\"\">Please Select ... </option>
                        ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 146
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "nationality", array()))) {
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
        // line 148
        echo "                    </select>
                    ";
        // line 149
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "nationality", array())) {
            // line 150
            echo "                        <span class=\"help-block\">
                            ";
            // line 151
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "nationality", array())), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 154
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 155
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "dob", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"date-picker\">
                        Date of Birth: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <div class=\"input-group date\">
                        <div class=\"input-group-addon\">
                            <i class=\"fa fa-calendar\"></i>
                        </div>
                        <input
                            type=\"date\"
                            class=\"form-control pull-right\"
                            name=\"dob\"
                            id=\"dob\"
                            value=\"";
        // line 171
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "dob", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "dob", array())) : ("1984-09-03")), "html", null, true);
        echo "\"
                        />
                    </div>
                    ";
        // line 174
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "dob", array())) {
            // line 175
            echo "                        <span class=\"help-block\">
                            ";
            // line 176
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "dob", array())), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 179
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 180
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "languageCount", array())) ? (" has-error") : (""));
        echo "\">
                    <label class=\"required\">
                        Languages: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "languages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 188
            echo "                        <label for=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["language"], "id", array()), "html", null, true);
            echo "\">
                            <input
                                    type=\"checkbox\"
                                    id=\"";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["language"], "id", array()), "html", null, true);
            echo "\"
                                    name=\"language_[]\"
                                    value=\"";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["language"], "id", array()), "html", null, true);
            echo "\"
                                    class=\"checkbox-inline\"
                                    onchange=\"languageCounter(this)\"
                                    ";
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Language"]) {
                // line 197
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["Language"], "language_id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), $context["language"], "id", array()))) {
                    // line 198
                    echo "                                             checked
                                        ";
                }
                // line 200
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            echo "                            />
                            &nbsp;";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["language"], "language_name", array()));
            echo " &nbsp; &nbsp;
                        </label> &nbsp; &nbsp;
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "                    <input
                        type=\"hidden\"
                        name=\"languageCount\"
                        id=\"languageCount\"
                        value=\"";
        // line 209
        if ((twig_length_filter($this->env, ($context["Languages"] ?? null)) > 0)) {
            // line 210
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["Languages"] ?? null)), "html", null, true);
            echo "
                               ";
        } else {
            // line 212
            echo "                                    0
                                ";
        }
        // line 213
        echo "\"
                    />
                    ";
        // line 215
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "languageCount", array())) {
            // line 216
            echo "                        <span class=\"help-block\">
                            ";
            // line 217
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "languageCount", array())), "html", null, true);
            echo " language.
                        </span>
                    ";
        }
        // line 220
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 221
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "expectation", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"expectation\">
                        Expected Salary:&nbsp;
                        <span class=\"help-block inline\">
                            <small>
                                <i>Expected Salary Amount (inclusive of benefits) in U.A.E. Dirhams</i>
                            </small>
                        </span>
                    </label>
                    <div class=\"input-group has-feedback\">
                        <span class=\"input-group-addon\">
                            AED
                        </span>
                        <input
                                type=\"number\"
                                name=\"expectation\"
                                id=\"expectation\"
                                class=\"form-control\"
                                value=\"";
        // line 239
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "expectation", array()), "html", null, true);
        echo "\"
                                placeholder=\"Enter expected amount in Dhs\">
                        <span class=\"input-group-addon\">
                            .00
                        </span>
                    </div>
<!--                            <span class=\"glyphicon glyphicon-usd form-control-feedback\"></span>-->
                    ";
        // line 246
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "expectation", array())) {
            // line 247
            echo "                        <span class=\"help-block\">
                            ";
            // line 248
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "expectation", array())), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 251
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 252
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"inputvisa\">
                        Current Visa Status: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <br/>
                    <input
                        type=\"radio\"
                        class=\"radio-inline\"
                        name=\"visa\"
                        id=\"employee_residence\"
                        value=\"Employee Residence\"
                        ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Visas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Visa"]) {
            // line 267
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["Visa"], "visa_type", array()) == "Employee Residence")) {
                // line 268
                echo "                                 checked=\"checked\"
                            ";
            }
            // line 270
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Visa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        echo "                    />
                    <label for=\"employee_residence\">
                        Employee Residency &nbsp;
                    </label>&nbsp; &nbsp;
                    <input
                        type=\"radio\"
                        class=\"radio-inline\"
                        name=\"visa\"
                        id=\"family_residence\"
                        value=\"Family Residence\"
                            ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Visas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Visa"]) {
            // line 282
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["Visa"], "visa_type", array()) == "Family Residence")) {
                // line 283
                echo "                                     checked=\"checked\"
                                ";
            }
            // line 285
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Visa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 286
        echo "                    />
                    <label for=\"family_residence\">
                        Family Residency &nbsp;
                    </label>&nbsp; &nbsp;
                    <input
                        type=\"radio\"
                        class=\"radio-inline\"
                        name=\"visa\"
                        id=\"visit\"
                        value=\"Visit\"
                            ";
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Visas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Visa"]) {
            // line 297
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["Visa"], "visa_type", array()) == "Visit")) {
                // line 298
                echo "                                     checked=\"checked\"
                                ";
            }
            // line 300
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Visa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "                    />
                    <label for=\"visit\">
                        Visit Visa &nbsp;
                    </label>&nbsp; &nbsp;
                    <input
                        type=\"radio\"
                        class=\"radio-inline\"
                        name=\"visa\"
                        id=\"tourist\"
                        value=\"Tourist\"
                            ";
        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Visas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Visa"]) {
            // line 312
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["Visa"], "visa_type", array()) == "Tourist")) {
                // line 313
                echo "                                     checked=\"checked\"
                                ";
            }
            // line 315
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Visa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 316
        echo "                    />
                    <label for=\"tourist\">
                        Tourist Visa &nbsp;
                    </label>&nbsp; &nbsp;
                    <input
                        type=\"radio\"
                        class=\"radio-inline\"
                        name=\"visa\"
                        id=\"expired\"
                        value=\"Expired\"
                            ";
        // line 326
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Visas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Visa"]) {
            // line 327
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["Visa"], "visa_type", array()) == "Expired")) {
                // line 328
                echo "                                     checked=\"checked\"
                                ";
            }
            // line 330
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Visa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo "                    />
                    <label for=\"expired\">
                        Expired Visa &nbsp;
                    </label>&nbsp; &nbsp;
                    <input
                        type=\"radio\"
                        class=\"radio-inline\"
                        name=\"visa\"
                        id=\"cancelled\"
                        value=\"cancelled\"
                        ";
        // line 341
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Visas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Visa"]) {
            // line 342
            echo "                            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["Visa"], "visa_type", array()) == "cancelled")) {
                // line 343
                echo "                                 checked=\"checked\"
                            ";
            }
            // line 345
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Visa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
        echo "                    />
                    <label for=\"cancelled\">
                        Cancelled Visa &nbsp;
                    </label>&nbsp; &nbsp;
                    ";
        // line 351
        echo "
                    ";
        // line 352
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa", array())) {
            // line 353
            echo "                        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa", array())), "html", null, true);
            echo "</span>
                    ";
        }
        // line 355
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 356
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa_age", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"visa_age\">
                        Visa Age: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span> &nbsp;
                    <span class=\"help-block inline\">
                        <small>
                            <i>Time since the first issuance of visa from current employer</i>
                        </small>
                    </span>
                    <input
                        type=\"text\"
                        class=\"form-control\"
                        name=\"visa_age\"
                        id=\"visa_age\"
                        placeholder=\"Two years ...\"
                        value=\"";
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Visas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Visa"]) {
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), $context["Visa"], "visa_age", array()) . twig_first($this->env, ". ")), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Visa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\"
                    /> &nbsp;
                    ";
        // line 376
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa_age", array())) {
            // line 377
            echo "                        <span class=\"help-block\">
                            ";
            // line 378
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "visa_age", array())), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 381
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 382
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "notice", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"notice\">
                        Required Notice Period:
                    </label> &nbsp;
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <input
                        type=\"text\"
                        class=\"form-control\"
                        name=\"notice\"
                        id=\"notice\"
                        value=\"";
        // line 394
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "notice_period", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "notice_period", array())) : ("")), "html", null, true);
        echo "\"
                        placeholder=\"One month ...\"
                    />&nbsp;
                    ";
        // line 397
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "notice", array())) {
            // line 398
            echo "                        <span class=\"help-block\">
                            ";
            // line 399
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "notice", array())), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 402
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 403
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "source", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"source\">
                        Application Source: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <p class=\"help-block\">
                        <small>
                            <i>How did the applicant hear about us</i>
                        </small>
                    </p>
                    <select class=\"form-control\" name=\"source\" id=\"source\">
                        <option value=\"\" ";
        // line 416
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "source", array()) == "")) {
            echo "selected";
        }
        echo ">Please Select ...</option>
                        <option value=\"HR Agency\" ";
        // line 417
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "source", array()) == "HR Agency")) {
            echo "selected";
        }
        echo ">HR Agency</option>
                        <option value=\"Search Engine\" ";
        // line 418
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "source", array()) == "Search Engine")) {
            echo "selected";
        }
        echo ">Search Engine</option>
                        <option value=\"Friend or Colleague\" ";
        // line 419
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "source", array()) == "Friend")) {
            echo "selected";
        }
        echo ">Friend</option>
                        <option value=\"Other\" ";
        // line 420
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "source", array()) == "Other")) {
            echo "selected";
        }
        echo ">Other</option>
                        <option value=\"No Answer\" ";
        // line 421
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "source", array()) == "No Answer")) {
            echo "selected";
        }
        echo ">No Answer</option>
                    </select>
                    ";
        // line 423
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "source", array())) {
            // line 424
            echo "                        <span class=\"help-block\">
                            ";
            // line 425
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "source", array())), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 428
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 429
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "profilepic", array())) ? (" has-error") : (""));
        echo "\">
                    <label class=\"control-label\" for=\"profilePic\">
                        Photo: &nbsp;
                    </label>
                    <input
                        type=\"file\"
                        id=\"profilePic\"
                        name=\"profilepic\"
                        value=\"";
        // line 437
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "profilepic", array()), "html", null, true);
        echo "\"
                        class=\"file\"
                    />
                    <img
                        id=\"profilePicApplicantFRM\"
                        src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "prof_pic", array()), "html", null, true);
        echo "\"
                        height=\"60\"
                        class=\"profile-image img-circle inline pull-right\"
                    />
                    <p class=\"help-block\">
                        <small>
                            <i>File must be *.jpg, *.jpeg, *.png, *.gif, or *.bmb and &lt; 3MBs</i>
                        </small>
                    </p>
                    ";
        // line 451
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "profilepic", array())) {
            // line 452
            echo "                        <span class=\"help-block\">
                            ";
            // line 453
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "profilepic", array())), "html", null, true);
            echo "
                        </span>
                    ";
        }
        // line 456
        echo "                </div>
                <div id=\"newAttachment\" class=\"form-group\">
                    <label for=\"help-me\">
                        Attachments:
                    </label>
                    <p class=\"help-block\" id=\"help-me\">
                        <span>
                            <i>
                                Attach CV, Passport Copy, VISA Copy, Educational Degree, or any other related documents
                                <br/>
                                <mark>Remember to rename the files respectively</mark>
                            </i>
                        </span>
                    </p>
                    ";
        // line 471
        echo "                        ";
        // line 472
        echo "                            ";
        // line 473
        echo "                                ";
        // line 474
        echo "                            ";
        // line 475
        echo "                        ";
        // line 476
        echo "                    ";
        // line 477
        echo "                    <input
                        type=\"hidden\"
                        id=\"attachmentCounter\"
                        name=\"attachmentCounter\"
                        value=\"-1\"
                    />
                    <input
                        type=\"button\"
                        id=\"add\"
                        class=\"btn btn-xs\"
                        value=\"Add New\"
                        title=\"Add new attachment field\"
                        onclick=\"showInput('divattachmentGroup', 'attachmentCounter')\"
                    />
                    <input
                        type=\"button\"
                        id=\"remove\"
                        class=\"btn btn-xs btn-danger\"
                        value=\"Remove\"
                        title=\"Removes the last item\"
                        onclick=\"hideInput('divattachmentGroup', 'attachmentCounter')\"
                    />
                    <br/>
                    <div
                        class=\"form-group bg-gray-light hidden has-feedback
                            ";
        // line 502
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry0", array())) ? (" has-error") : (""));
        echo "
                            ";
        // line 503
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType0", array())) ? (" has-error") : (""));
        echo "
                            ";
        // line 504
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer0", array())) ? (" has-error") : (""));
        echo "
                            ";
        // line 505
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate0", array())) ? (" has-error") : (""));
        echo "
                            ";
        // line 506
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate0", array())) ? (" has-error") : (""));
        echo "\"
                        id=\"divattachmentGroup0\"
                    >
                        <div class=\"input-group inline has-feedback\" id=\"div2attachment0\">
                            <label for=\"attachment0\">
                                File: &nbsp;
                            </label>
                            <input
                                type=\"file\"
                                id=\"attachment0\"
                                name=\"attachment[]\"
                                class=\"btn btn-default btn-file\"
                            /> &nbsp;
                        </div>
                        <div class=\"input-group inline has-feedback";
        // line 520
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry0\">
                            <label for=\"attachmentCountry0\">Issuance Country: &nbsp;</label>
                            <select name=\"attachmentCountry0\" id=\"attachmentCountry0\">
                                <option value=\"\">Please Select ... </option>
                                ";
        // line 524
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 525
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentCountry0", array()))) {
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
        // line 527
        echo "                            </select>
                            ";
        // line 528
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry0", array())) {
            // line 529
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry0", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 531
        echo "                        </div>
                        <div class=\"input-group inline has-feedback";
        // line 532
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType0\">
                                <label for=\"attachmentType0\">Type: &nbsp;</label>
                                <input id=\"attachmentType0\" name=\"attachmentType0\" type=\"text\" value=\"";
        // line 534
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentType0", array()), "html", null, true);
        echo "\">
                                ";
        // line 535
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType0", array())) {
            // line 536
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 538
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 539
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer0\">
                                <label for=\"attachmentIssuer0\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer0\" name=\"attachmentIssuer0\" value=\"";
        // line 541
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssuer0", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 542
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer0", array())) {
            // line 543
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 545
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 546
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate0\">
                                <label for=\"attachmentIssueDate0\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate0\" name=\"attachmentIssueDate0\" value=\"";
        // line 548
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate0", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate0", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 549
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate0", array())) {
            // line 550
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 552
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 553
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate0\">
                                <label for=\"attachmentExpiryDate0\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate0\" name=\"attachmentExpiryDate0\" value=\"";
        // line 555
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate0", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate0", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 556
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate0", array())) {
            // line 557
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 559
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 561
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
        // line 566
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry1\">
                                <label for=\"attachmentCountry1\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry1\" id=\"attachmentCountry1\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 570
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 571
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentCountry1", array()))) {
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
        // line 573
        echo "                                </select>
                                ";
        // line 574
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry1", array())) {
            // line 575
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 577
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 579
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType1\">
                                <label for=\"attachmentType1\">Type: &nbsp;</label>
                                <input id=\"attachmentType1\" name=\"attachmentType1\" type=\"text\" value=\"";
        // line 581
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentType1", array()), "html", null, true);
        echo "\">
                                ";
        // line 582
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType1", array())) {
            // line 583
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 585
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 586
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer1\">
                                <label for=\"attachmentIssuer1\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer1\" name=\"attachmentIssuer1\" value=\"";
        // line 588
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssuer1", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 589
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer1", array())) {
            // line 590
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 592
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 593
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate1\">
                                <label for=\"attachmentIssueDate1\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate1\" name=\"attachmentIssueDate1\" value=\"";
        // line 595
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate1", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate1", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 596
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate1", array())) {
            // line 597
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 599
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 600
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate1\">
                                <label for=\"attachmentExpiryDate1\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate1\" name=\"attachmentExpiryDate1\" value=\"";
        // line 602
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate1", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate1", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 603
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate1", array())) {
            // line 604
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 606
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 608
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
        // line 613
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry2\">
                                <label for=\"attachmentCountry2\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry2\" id=\"attachmentCountry2\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 617
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 618
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentCountry2", array()))) {
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
        // line 620
        echo "                                </select>
                                ";
        // line 621
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry2", array())) {
            // line 622
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 624
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 626
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType2\">
                                <label for=\"attachmentType2\">Type: &nbsp;</label>
                                <input id=\"attachmentType2\" name=\"attachmentType2\" type=\"text\" value=\"";
        // line 628
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentType2", array()), "html", null, true);
        echo "\">
                                ";
        // line 629
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType2", array())) {
            // line 630
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 632
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 633
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer2\">
                                <label for=\"attachmentIssuer2\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer2\" name=\"attachmentIssuer2\" value=\"";
        // line 635
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssuer2", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 636
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer2", array())) {
            // line 637
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 639
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 640
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate2\">
                                <label for=\"attachmentIssueDate2\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate2\" name=\"attachmentIssueDate2\" value=\"";
        // line 642
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate2", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate2", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 643
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate2", array())) {
            // line 644
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 646
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 647
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate2\">
                                <label for=\"attachmentExpiryDate2\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate2\" name=\"attachmentExpiryDate2\" value=\"";
        // line 649
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate2", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate2", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 650
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate2", array())) {
            // line 651
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 653
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 655
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
        // line 660
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry3\">
                                <label for=\"attachmentCountry3\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry3\" id=\"attachmentCountry3\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 664
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 665
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentCountry3", array()))) {
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
        // line 667
        echo "                                </select>
                                ";
        // line 668
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry3", array())) {
            // line 669
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 671
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 673
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType3\">
                                <label for=\"attachmentType3\">Type: &nbsp;</label>
                                <input id=\"attachmentType3\" name=\"attachmentType3\" type=\"text\" value=\"";
        // line 675
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentType3", array()), "html", null, true);
        echo "\">
                                ";
        // line 676
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType3", array())) {
            // line 677
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 679
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 680
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer3\">
                                <label for=\"attachmentIssuer3\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer3\" name=\"attachmentIssuer3\" value=\"";
        // line 682
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssuer3", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 683
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer3", array())) {
            // line 684
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 686
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 687
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate3\">
                                <label for=\"attachmentIssueDate3\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate3\" name=\"attachmentIssueDate3\" value=\"";
        // line 689
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate3", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate3", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 690
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate3", array())) {
            // line 691
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 693
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 694
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate3\">
                                <label for=\"attachmentExpiryDate3\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate3\" name=\"attachmentExpiryDate3\" value=\"";
        // line 696
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate3", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate3", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 697
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate3", array())) {
            // line 698
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 700
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 702
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
        // line 707
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry4\">
                                <label for=\"attachmentCountry4\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry4\" id=\"attachmentCountry4\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 711
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 712
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentCountry4", array()))) {
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
        // line 714
        echo "                                </select>
                                ";
        // line 715
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry4", array())) {
            // line 716
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 718
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 720
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType4\">
                                <label for=\"attachmentType4\">Type: &nbsp;</label>
                                <input id=\"attachmentType4\" name=\"attachmentType4\" type=\"text\" value=\"";
        // line 722
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentType4", array()), "html", null, true);
        echo "\">
                                ";
        // line 723
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType4", array())) {
            // line 724
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 726
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 727
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer4\">
                                <label for=\"attachmentIssuer4\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer4\" name=\"attachmentIssuer4\" value=\"";
        // line 729
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssuer4", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 730
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer4", array())) {
            // line 731
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 733
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 734
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate4\">
                                <label for=\"attachmentIssueDate4\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate4\" name=\"attachmentIssueDate4\" value=\"";
        // line 736
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate4", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate4", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 737
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate4", array())) {
            // line 738
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 740
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 741
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate4\">
                                <label for=\"attachmentExpiryDate4\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate4\" name=\"attachmentExpiryDate4\" value=\"";
        // line 743
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate4", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate4", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 744
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate4", array())) {
            // line 745
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 747
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden  has-feedback";
        // line 749
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
        // line 754
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry5\">
                                <label for=\"attachmentCountry5\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry5\" id=\"attachmentCountry5\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 758
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 759
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentCountry5", array()))) {
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
        // line 761
        echo "                                </select>
                                ";
        // line 762
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry5", array())) {
            // line 763
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 765
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 767
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType5\">
                                <label for=\"attachmentType5\">Type: &nbsp;</label>
                                <input id=\"attachmentType5\" name=\"attachmentType5\" type=\"text\" value=\"";
        // line 769
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentType5", array()), "html", null, true);
        echo "\">
                                ";
        // line 770
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType5", array())) {
            // line 771
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 773
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 774
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer5\">
                                <label for=\"attachmentIssuer5\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer5\" name=\"attachmentIssuer5\" value=\"";
        // line 776
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssuer5", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 777
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer5", array())) {
            // line 778
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 780
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 781
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate5\">
                                <label for=\"attachmentIssueDate5\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate5\" name=\"attachmentIssueDate5\" value=\"";
        // line 783
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate5", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate5", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 784
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate5", array())) {
            // line 785
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 787
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 788
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate5\">
                                <label for=\"attachmentExpiryDate5\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate5\" name=\"attachmentExpiryDate5\" value=\"";
        // line 790
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate5", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate5", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 791
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate5", array())) {
            // line 792
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 794
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 796
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
        // line 801
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry6\">
                                <label for=\"attachmentCountry6\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry6\" id=\"attachmentCountry6\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 805
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 806
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentCountry6", array()))) {
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
        // line 808
        echo "                                </select>
                                ";
        // line 809
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry6", array())) {
            // line 810
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 812
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 814
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType6\">
                                <label for=\"attachmentType6\">Type: &nbsp;</label>
                                <input id=\"attachmentType6\" name=\"attachmentType6\" type=\"text\" value=\"";
        // line 816
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentType6", array()), "html", null, true);
        echo "\">
                                ";
        // line 817
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType6", array())) {
            // line 818
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 820
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 821
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer6\">
                                <label for=\"attachmentIssuer6\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer6\" name=\"attachmentIssuer6\" value=\"";
        // line 823
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssuer6", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 824
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer6", array())) {
            // line 825
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 827
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 828
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate6\">
                                <label for=\"attachmentIssueDate6\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate6\" name=\"attachmentIssueDate6\" value=\"";
        // line 830
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate6", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate6", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 831
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate6", array())) {
            // line 832
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 834
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 835
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate6\">
                                <label for=\"attachmentExpiryDate6\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate6\" name=\"attachmentExpiryDate6\" value=\"";
        // line 837
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate6", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate6", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 838
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate6", array())) {
            // line 839
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 841
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 843
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
        // line 848
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry7\">
                                <label for=\"attachmentCountry7\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry7\" id=\"attachmentCountry7\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 852
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 853
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentCountry7", array()))) {
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
        // line 855
        echo "                                </select>
                                ";
        // line 856
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry7", array())) {
            // line 857
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 859
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 861
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType7\">
                                <label for=\"attachmentType7\">Type: &nbsp;</label>
                                <input id=\"attachmentType7\" name=\"attachmentType7\" type=\"text\" value=\"";
        // line 863
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentType7", array()), "html", null, true);
        echo "\">
                                ";
        // line 864
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType7", array())) {
            // line 865
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 867
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 868
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer7\">
                                <label for=\"attachmentIssuer7\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer7\" name=\"attachmentIssuer7\" value=\"";
        // line 870
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssuer7", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 871
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer7", array())) {
            // line 872
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 874
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 875
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate7\">
                                <label for=\"attachmentIssueDate7\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate7\" name=\"attachmentIssueDate7\" value=\"";
        // line 877
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate7", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate7", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 878
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate7", array())) {
            // line 879
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 881
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 882
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate7\">
                                <label for=\"attachmentExpiryDate7\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate7\" name=\"attachmentExpiryDate7\" value=\"";
        // line 884
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate7", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate7", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 885
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate7", array())) {
            // line 886
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 888
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 890
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
        // line 895
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry8\">
                                <label for=\"attachmentCountry8\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry8\" id=\"attachmentCountry8\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 899
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 900
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentCountry8", array()))) {
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
        // line 902
        echo "                                </select>
                                ";
        // line 903
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry8", array())) {
            // line 904
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 906
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 908
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType8\">
                                <label for=\"attachmentType8\">Type: &nbsp;</label>
                                <input id=\"attachmentType8\" name=\"attachmentType8\" type=\"text\" value=\"";
        // line 910
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentType8", array()), "html", null, true);
        echo "\">
                                ";
        // line 911
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType8", array())) {
            // line 912
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 914
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 915
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer8\">
                                <label for=\"attachmentIssuer8\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer8\" name=\"attachmentIssuer8\" value=\"";
        // line 917
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssuer8", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 918
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer8", array())) {
            // line 919
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 921
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 922
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate8\">
                                <label for=\"attachmentIssueDate8\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate8\" name=\"attachmentIssueDate8\" value=\"";
        // line 924
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate8", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate8", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 925
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate8", array())) {
            // line 926
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 928
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 929
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate8\">
                                <label for=\"attachmentExpiryDate8\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate8\" name=\"attachmentExpiryDate8\" value=\"";
        // line 931
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate8", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate8", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 932
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate8", array())) {
            // line 933
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 935
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 937
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
        // line 942
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry9\">
                                <label for=\"attachmentCountry9\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry9\" id=\"attachmentCountry9\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 946
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 947
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["country"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentCountry9", array()))) {
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
        // line 949
        echo "                                </select>
                                ";
        // line 950
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry9", array())) {
            // line 951
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentCountry9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 953
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 955
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType9\">
                                <label for=\"attachmentType9\">Type: &nbsp;</label>
                                <input id=\"attachmentType9\" name=\"attachmentType9\" type=\"text\" value=\"";
        // line 957
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentType9", array()), "html", null, true);
        echo "\">
                                ";
        // line 958
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType9", array())) {
            // line 959
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 961
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 962
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer9\">
                                <label for=\"attachmentIssuer9\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer9\" name=\"attachmentIssuer9\" value=\"";
        // line 964
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssuer9", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 965
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer9", array())) {
            // line 966
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 968
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 969
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate9\">
                                <label for=\"attachmentIssueDate9\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate9\" name=\"attachmentIssueDate9\" value=\"";
        // line 971
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate9", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentIssueDate9", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 972
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate9", array())) {
            // line 973
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 975
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 976
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate9\">
                                <label for=\"attachmentExpiryDate9\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate9\" name=\"attachmentExpiryDate9\" value=\"";
        // line 978
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate9", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "attachmentExpiryDate9", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 979
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate9", array())) {
            // line 980
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 982
        echo "                            </div>
                        </div>
                    </div>
                <div class=\"form-group has-feedback";
        // line 985
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "interview", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"interview\">Would you like to schedule an interview for this applicant? &nbsp;
                    <input type=\"checkbox\" name=\"interview\" id=\"interview\" class=\"checkbox-inline\" value=\"";
        // line 987
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "interview", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["applicant"] ?? null), "interview", array())) : ("null")), "html", null, true);
        echo "\" onchange=\"interviewCheck(this)\"/></label>
                    ";
        // line 988
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "interview", array())) {
            // line 989
            echo "                        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "interview", array())), "html", null, true);
            echo "</span>
                    ";
        }
        // line 991
        echo "                </div>
                ";
        // line 994
        echo "                <div class=\"form-group has-feedback\">
                    <input type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-primary\" value=\"Save Applicant\" />
                </div>
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "auth/HR/Applicant/applicantById.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2321 => 994,  2318 => 991,  2312 => 989,  2310 => 988,  2306 => 987,  2301 => 985,  2296 => 982,  2290 => 980,  2288 => 979,  2284 => 978,  2279 => 976,  2276 => 975,  2270 => 973,  2268 => 972,  2264 => 971,  2259 => 969,  2256 => 968,  2250 => 966,  2248 => 965,  2244 => 964,  2239 => 962,  2236 => 961,  2230 => 959,  2228 => 958,  2224 => 957,  2219 => 955,  2215 => 953,  2209 => 951,  2207 => 950,  2204 => 949,  2189 => 947,  2185 => 946,  2178 => 942,  2166 => 937,  2162 => 935,  2156 => 933,  2154 => 932,  2150 => 931,  2145 => 929,  2142 => 928,  2136 => 926,  2134 => 925,  2130 => 924,  2125 => 922,  2122 => 921,  2116 => 919,  2114 => 918,  2110 => 917,  2105 => 915,  2102 => 914,  2096 => 912,  2094 => 911,  2090 => 910,  2085 => 908,  2081 => 906,  2075 => 904,  2073 => 903,  2070 => 902,  2055 => 900,  2051 => 899,  2044 => 895,  2032 => 890,  2028 => 888,  2022 => 886,  2020 => 885,  2016 => 884,  2011 => 882,  2008 => 881,  2002 => 879,  2000 => 878,  1996 => 877,  1991 => 875,  1988 => 874,  1982 => 872,  1980 => 871,  1976 => 870,  1971 => 868,  1968 => 867,  1962 => 865,  1960 => 864,  1956 => 863,  1951 => 861,  1947 => 859,  1941 => 857,  1939 => 856,  1936 => 855,  1921 => 853,  1917 => 852,  1910 => 848,  1898 => 843,  1894 => 841,  1888 => 839,  1886 => 838,  1882 => 837,  1877 => 835,  1874 => 834,  1868 => 832,  1866 => 831,  1862 => 830,  1857 => 828,  1854 => 827,  1848 => 825,  1846 => 824,  1842 => 823,  1837 => 821,  1834 => 820,  1828 => 818,  1826 => 817,  1822 => 816,  1817 => 814,  1813 => 812,  1807 => 810,  1805 => 809,  1802 => 808,  1787 => 806,  1783 => 805,  1776 => 801,  1764 => 796,  1760 => 794,  1754 => 792,  1752 => 791,  1748 => 790,  1743 => 788,  1740 => 787,  1734 => 785,  1732 => 784,  1728 => 783,  1723 => 781,  1720 => 780,  1714 => 778,  1712 => 777,  1708 => 776,  1703 => 774,  1700 => 773,  1694 => 771,  1692 => 770,  1688 => 769,  1683 => 767,  1679 => 765,  1673 => 763,  1671 => 762,  1668 => 761,  1653 => 759,  1649 => 758,  1642 => 754,  1630 => 749,  1626 => 747,  1620 => 745,  1618 => 744,  1614 => 743,  1609 => 741,  1606 => 740,  1600 => 738,  1598 => 737,  1594 => 736,  1589 => 734,  1586 => 733,  1580 => 731,  1578 => 730,  1574 => 729,  1569 => 727,  1566 => 726,  1560 => 724,  1558 => 723,  1554 => 722,  1549 => 720,  1545 => 718,  1539 => 716,  1537 => 715,  1534 => 714,  1519 => 712,  1515 => 711,  1508 => 707,  1496 => 702,  1492 => 700,  1486 => 698,  1484 => 697,  1480 => 696,  1475 => 694,  1472 => 693,  1466 => 691,  1464 => 690,  1460 => 689,  1455 => 687,  1452 => 686,  1446 => 684,  1444 => 683,  1440 => 682,  1435 => 680,  1432 => 679,  1426 => 677,  1424 => 676,  1420 => 675,  1415 => 673,  1411 => 671,  1405 => 669,  1403 => 668,  1400 => 667,  1385 => 665,  1381 => 664,  1374 => 660,  1362 => 655,  1358 => 653,  1352 => 651,  1350 => 650,  1346 => 649,  1341 => 647,  1338 => 646,  1332 => 644,  1330 => 643,  1326 => 642,  1321 => 640,  1318 => 639,  1312 => 637,  1310 => 636,  1306 => 635,  1301 => 633,  1298 => 632,  1292 => 630,  1290 => 629,  1286 => 628,  1281 => 626,  1277 => 624,  1271 => 622,  1269 => 621,  1266 => 620,  1251 => 618,  1247 => 617,  1240 => 613,  1228 => 608,  1224 => 606,  1218 => 604,  1216 => 603,  1212 => 602,  1207 => 600,  1204 => 599,  1198 => 597,  1196 => 596,  1192 => 595,  1187 => 593,  1184 => 592,  1178 => 590,  1176 => 589,  1172 => 588,  1167 => 586,  1164 => 585,  1158 => 583,  1156 => 582,  1152 => 581,  1147 => 579,  1143 => 577,  1137 => 575,  1135 => 574,  1132 => 573,  1117 => 571,  1113 => 570,  1106 => 566,  1094 => 561,  1090 => 559,  1084 => 557,  1082 => 556,  1078 => 555,  1073 => 553,  1070 => 552,  1064 => 550,  1062 => 549,  1058 => 548,  1053 => 546,  1050 => 545,  1044 => 543,  1042 => 542,  1038 => 541,  1033 => 539,  1030 => 538,  1024 => 536,  1022 => 535,  1018 => 534,  1013 => 532,  1010 => 531,  1004 => 529,  1002 => 528,  999 => 527,  984 => 525,  980 => 524,  973 => 520,  956 => 506,  952 => 505,  948 => 504,  944 => 503,  940 => 502,  913 => 477,  911 => 476,  909 => 475,  907 => 474,  905 => 473,  903 => 472,  901 => 471,  885 => 456,  879 => 453,  876 => 452,  874 => 451,  861 => 442,  853 => 437,  842 => 429,  839 => 428,  833 => 425,  830 => 424,  828 => 423,  821 => 421,  815 => 420,  809 => 419,  803 => 418,  797 => 417,  791 => 416,  775 => 403,  772 => 402,  766 => 399,  763 => 398,  761 => 397,  755 => 394,  740 => 382,  737 => 381,  731 => 378,  728 => 377,  726 => 376,  714 => 374,  693 => 356,  690 => 355,  684 => 353,  682 => 352,  679 => 351,  673 => 346,  667 => 345,  663 => 343,  660 => 342,  656 => 341,  644 => 331,  638 => 330,  634 => 328,  631 => 327,  627 => 326,  615 => 316,  609 => 315,  605 => 313,  602 => 312,  598 => 311,  586 => 301,  580 => 300,  576 => 298,  573 => 297,  569 => 296,  557 => 286,  551 => 285,  547 => 283,  544 => 282,  540 => 281,  528 => 271,  522 => 270,  518 => 268,  515 => 267,  511 => 266,  494 => 252,  491 => 251,  485 => 248,  482 => 247,  480 => 246,  470 => 239,  449 => 221,  446 => 220,  440 => 217,  437 => 216,  435 => 215,  431 => 213,  427 => 212,  421 => 210,  419 => 209,  413 => 205,  404 => 202,  401 => 201,  395 => 200,  391 => 198,  388 => 197,  384 => 196,  378 => 193,  373 => 191,  366 => 188,  362 => 187,  352 => 180,  349 => 179,  343 => 176,  340 => 175,  338 => 174,  332 => 171,  313 => 155,  310 => 154,  304 => 151,  301 => 150,  299 => 149,  296 => 148,  281 => 146,  277 => 145,  265 => 136,  262 => 135,  256 => 132,  253 => 131,  251 => 130,  246 => 127,  242 => 125,  240 => 124,  229 => 115,  225 => 113,  223 => 112,  208 => 100,  205 => 99,  199 => 97,  197 => 96,  190 => 92,  175 => 80,  172 => 79,  166 => 76,  163 => 75,  161 => 74,  154 => 70,  139 => 58,  136 => 57,  130 => 54,  127 => 53,  125 => 52,  118 => 48,  103 => 36,  100 => 35,  94 => 32,  91 => 31,  89 => 30,  82 => 26,  67 => 14,  63 => 13,  59 => 12,  53 => 11,  47 => 8,  42 => 5,  39 => 4,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}
{% block title %}Update Applicant Details ({{ applicant.first_name }} {{ applicant.last_name }}){% endblock %}

{% block contents %}
<section class=\"content\">
    <div class=\"raw\">
        <div class=\"register-logo\">
            <a href=\"{{ base_url() }}\"><b>MENA</b> Assistance</a>
        </div>
        <div class=\"register-box-body\">
            <p class=\"login-box-msg\">Update Details for Applicant: {{ applicant.first_name }} {{ applicant.last_name }}</p>
            <form action=\"{{ path_for('HR.ApplicantById', applicant.id) }}\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\" >
                {{ csrf.field | raw }}
                <div class=\"form-group has-feedback{{ errors.first_name ? ' has-error' : '' }}\">
                    <label for=\"first_name\">
                        First Name: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <input
                        type=\"text\"
                        name=\"first_name\"
                        id=\"first_name\"
                        class=\"form-control\"
                        value=\"{{ applicant.first_name }}\"
                        placeholder=\"Applicant's First Name\"
                    />
                    <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    {% if errors.first_name %}
                        <span class=\"help-block\">
                            {{ errors.first_name | first }}
                        </span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.last_name ? ' has-error' : '' }}\">
                    <label class=\"required\" for=\"last_name\">
                        Last Name: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <input
                        type=\"text\"
                        name=\"last_name\"
                        id=\"last_name\"
                        class=\"form-control\"
                        value=\"{{ applicant.last_name }}\"
                        placeholder=\"Applicant's Last Name\"
                    />
                    <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    {% if errors.last_name %}
                        <span class=\"help-block\">
                            {{ errors.last_name | first }}
                        </span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.per_email ? ' has-error' : '' }}\">
                    <label for=\"per_email\">
                        Personal Email: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <input
                        type=\"email\"
                        name=\"per_email\"
                        id=\"per_email\"
                        class=\"form-control\"
                        value=\"{{ applicant.per_email }}\"
                        placeholder=\"applicant@domain.com\"
                    />
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                    {% if errors.per_email %}
                        <span class=\"help-block\">
                            {{ errors.per_email | first }}
                        </span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.mobile_phone ? ' has-error' : '' }}\">
                    <label for=\"mobile_phone\">
                        Mobile Phone Number: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <input
                        type=\"tel\"
                        name=\"mobile_phone\"
                        id=\"mobile_phone\"
                        class=\"form-control\"
                        value=\"{{ applicant.mobile_phone }}\"
                        placeholder=\"+971 50 000 0000\"
                    />
                    <span class=\"glyphicon glyphicon-phone form-control-feedback\"></span>
                    {% if errors.mobile_phone %}
                        <span class=\"help-block\">{{ errors.mobile_phone | first }}</span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.gender ? ' has-error' : '' }}\">
                    <label for=\"male\">
                        Gender: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span> &nbsp;
                    <input
                        type=\"radio\"
                        name=\"gender\"
                        id=\"male\"
                        value=\"M\"
                        {% if applicant.gender == 'M' %}
                             checked=\"checked\"
                        {% endif %}
                    />
                    <span class=\"fa fa-male\">
                        &nbsp;Male &nbsp; &nbsp;
                    </span>
                    <input
                        type=\"radio\"
                        name=\"gender\"
                        id=\"female\"
                        value=\"F\"
                        {% if applicant.gender == 'F' %}
                             checked=\"checked\"
                        {% endif %}
                    />
                    <span class=\"fa fa-female\">
                        &nbsp;Female</span>
                    {% if errors.gender %}
                        <span class=\"help-block\">
                            {{ errors.gender | first }}
                        </span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.nationality ? ' has-error' : '' }}\">
                    <label for=\"nationality\">
                        Nationality: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <select class=\"form-control\" name=\"nationality\" id=\"nationality\">
                        <option value=\"\">Please Select ... </option>
                        {% for country in HR.countries %}
                            <option value=\"{{ country.id }}\" {% if country.id == applicant.nationality %}selected{% endif %}>{{ country.country_name | e }}</option>
                        {% endfor %}
                    </select>
                    {% if errors.nationality %}
                        <span class=\"help-block\">
                            {{ errors.nationality | first }}
                        </span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.dob ? ' has-error' : '' }}\">
                    <label for=\"date-picker\">
                        Date of Birth: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <div class=\"input-group date\">
                        <div class=\"input-group-addon\">
                            <i class=\"fa fa-calendar\"></i>
                        </div>
                        <input
                            type=\"date\"
                            class=\"form-control pull-right\"
                            name=\"dob\"
                            id=\"dob\"
                            value=\"{{ applicant.dob ?: '1984-09-03' }}\"
                        />
                    </div>
                    {% if errors.dob %}
                        <span class=\"help-block\">
                            {{ errors.dob | first }}
                        </span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.languageCount ? ' has-error' : '' }}\">
                    <label class=\"required\">
                        Languages: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    {% for language in HR.languages %}
                        <label for=\"{{ language.id }}\">
                            <input
                                    type=\"checkbox\"
                                    id=\"{{ language.id }}\"
                                    name=\"language_[]\"
                                    value=\"{{ language.id }}\"
                                    class=\"checkbox-inline\"
                                    onchange=\"languageCounter(this)\"
                                    {% for Language in Languages %}
                                        {% if Language.language_id == language.id %}
                                             checked
                                        {% endif %}
                                    {% endfor %}
                            />
                            &nbsp;{{ language.language_name | e }} &nbsp; &nbsp;
                        </label> &nbsp; &nbsp;
                    {% endfor %}
                    <input
                        type=\"hidden\"
                        name=\"languageCount\"
                        id=\"languageCount\"
                        value=\"{% if Languages|length > 0 %}
                                    {{ Languages | length }}
                               {% else %}
                                    0
                                {% endif %}\"
                    />
                    {% if errors.languageCount %}
                        <span class=\"help-block\">
                            {{ errors.languageCount | first }} language.
                        </span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.expectation ? ' has-error' : '' }}\">
                    <label for=\"expectation\">
                        Expected Salary:&nbsp;
                        <span class=\"help-block inline\">
                            <small>
                                <i>Expected Salary Amount (inclusive of benefits) in U.A.E. Dirhams</i>
                            </small>
                        </span>
                    </label>
                    <div class=\"input-group has-feedback\">
                        <span class=\"input-group-addon\">
                            AED
                        </span>
                        <input
                                type=\"number\"
                                name=\"expectation\"
                                id=\"expectation\"
                                class=\"form-control\"
                                value=\"{{ applicant.expectation }}\"
                                placeholder=\"Enter expected amount in Dhs\">
                        <span class=\"input-group-addon\">
                            .00
                        </span>
                    </div>
<!--                            <span class=\"glyphicon glyphicon-usd form-control-feedback\"></span>-->
                    {% if errors.expectation %}
                        <span class=\"help-block\">
                            {{ errors.expectation | first }}
                        </span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.visa ? ' has-error' : '' }}\">
                    <label for=\"inputvisa\">
                        Current Visa Status: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <br/>
                    <input
                        type=\"radio\"
                        class=\"radio-inline\"
                        name=\"visa\"
                        id=\"employee_residence\"
                        value=\"Employee Residence\"
                        {% for Visa in Visas %}
                            {% if Visa.visa_type == 'Employee Residence' %}
                                 checked=\"checked\"
                            {% endif %}
                        {% endfor %}
                    />
                    <label for=\"employee_residence\">
                        Employee Residency &nbsp;
                    </label>&nbsp; &nbsp;
                    <input
                        type=\"radio\"
                        class=\"radio-inline\"
                        name=\"visa\"
                        id=\"family_residence\"
                        value=\"Family Residence\"
                            {% for Visa in Visas %}
                                {% if Visa.visa_type == 'Family Residence' %}
                                     checked=\"checked\"
                                {% endif %}
                            {% endfor %}
                    />
                    <label for=\"family_residence\">
                        Family Residency &nbsp;
                    </label>&nbsp; &nbsp;
                    <input
                        type=\"radio\"
                        class=\"radio-inline\"
                        name=\"visa\"
                        id=\"visit\"
                        value=\"Visit\"
                            {% for Visa in Visas %}
                                {% if Visa.visa_type == 'Visit' %}
                                     checked=\"checked\"
                                {% endif %}
                            {% endfor %}
                    />
                    <label for=\"visit\">
                        Visit Visa &nbsp;
                    </label>&nbsp; &nbsp;
                    <input
                        type=\"radio\"
                        class=\"radio-inline\"
                        name=\"visa\"
                        id=\"tourist\"
                        value=\"Tourist\"
                            {% for Visa in Visas %}
                                {% if Visa.visa_type == 'Tourist' %}
                                     checked=\"checked\"
                                {% endif %}
                            {% endfor %}
                    />
                    <label for=\"tourist\">
                        Tourist Visa &nbsp;
                    </label>&nbsp; &nbsp;
                    <input
                        type=\"radio\"
                        class=\"radio-inline\"
                        name=\"visa\"
                        id=\"expired\"
                        value=\"Expired\"
                            {% for Visa in Visas %}
                                {% if Visa.visa_type == 'Expired' %}
                                     checked=\"checked\"
                                {% endif %}
                            {% endfor %}
                    />
                    <label for=\"expired\">
                        Expired Visa &nbsp;
                    </label>&nbsp; &nbsp;
                    <input
                        type=\"radio\"
                        class=\"radio-inline\"
                        name=\"visa\"
                        id=\"cancelled\"
                        value=\"cancelled\"
                        {% for Visa in Visas %}
                            {% if Visa.visa_type == 'cancelled' %}
                                 checked=\"checked\"
                            {% endif %}
                        {% endfor %}
                    />
                    <label for=\"cancelled\">
                        Cancelled Visa &nbsp;
                    </label>&nbsp; &nbsp;
                    {#<label for=\"investor_residence\">Investor Residency</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"investor_residence\" value=\"Investor Residence\" {% if applicant.visa == 'Investor Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"maid_residence\">Maid Residency</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"maid_residence\" value=\"Maid Residence\" {% if applicant.visa == 'Maid Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"relative_residence\">Investor Residency</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"relative_residence\" value=\"Relative Residence\" {% if applicant.visa == 'Relative Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"student_residence\">Investor Residence</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"student_residence\" value=\"Student Residence\" {% if applicant.visa == 'Student Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"mission\">Mission Visa</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"mission\" value=\"Mission\" {% if applicant.visa == 'Mission' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"multiple_entry\">Multiple Entry Visa</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"multiple_entry\" value=\"Multiple Entry\" {% if applicant.visa == 'Multiple Entry' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;#}

                    {% if errors.visa %}
                        <span class=\"help-block\">{{ errors.visa | first }}</span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.visa_age ? ' has-error' : '' }}\">
                    <label for=\"visa_age\">
                        Visa Age: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span> &nbsp;
                    <span class=\"help-block inline\">
                        <small>
                            <i>Time since the first issuance of visa from current employer</i>
                        </small>
                    </span>
                    <input
                        type=\"text\"
                        class=\"form-control\"
                        name=\"visa_age\"
                        id=\"visa_age\"
                        placeholder=\"Two years ...\"
                        value=\"{% for Visa in Visas %}{{ Visa.visa_age~'. ' | first }}{% endfor %}\"
                    /> &nbsp;
                    {% if errors.visa_age %}
                        <span class=\"help-block\">
                            {{ errors.visa_age | first }}
                        </span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.notice ? ' has-error' : '' }}\">
                    <label for=\"notice\">
                        Required Notice Period:
                    </label> &nbsp;
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <input
                        type=\"text\"
                        class=\"form-control\"
                        name=\"notice\"
                        id=\"notice\"
                        value=\"{{ applicant.notice_period ?: '' }}\"
                        placeholder=\"One month ...\"
                    />&nbsp;
                    {% if errors.notice %}
                        <span class=\"help-block\">
                            {{ errors.notice | first }}
                        </span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.source ? ' has-error' : '' }}\">
                    <label for=\"source\">
                        Application Source: &nbsp;
                    </label>
                    <span class=\"text-red\">
                        <b>*</b>
                    </span>
                    <p class=\"help-block\">
                        <small>
                            <i>How did the applicant hear about us</i>
                        </small>
                    </p>
                    <select class=\"form-control\" name=\"source\" id=\"source\">
                        <option value=\"\" {% if applicant.source == '' %}selected{% endif %}>Please Select ...</option>
                        <option value=\"HR Agency\" {% if applicant.source == 'HR Agency' %}selected{% endif %}>HR Agency</option>
                        <option value=\"Search Engine\" {% if applicant.source == 'Search Engine' %}selected{% endif %}>Search Engine</option>
                        <option value=\"Friend or Colleague\" {% if applicant.source == 'Friend' %}selected{% endif %}>Friend</option>
                        <option value=\"Other\" {% if applicant.source == 'Other' %}selected{% endif %}>Other</option>
                        <option value=\"No Answer\" {% if applicant.source == 'No Answer' %}selected{% endif %}>No Answer</option>
                    </select>
                    {% if errors.source %}
                        <span class=\"help-block\">
                            {{ errors.source | first }}
                        </span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.profilepic ? ' has-error' : '' }}\">
                    <label class=\"control-label\" for=\"profilePic\">
                        Photo: &nbsp;
                    </label>
                    <input
                        type=\"file\"
                        id=\"profilePic\"
                        name=\"profilepic\"
                        value=\"{{ applicant.profilepic }}\"
                        class=\"file\"
                    />
                    <img
                        id=\"profilePicApplicantFRM\"
                        src=\"{{ base_url() }}{{ applicant.prof_pic }}\"
                        height=\"60\"
                        class=\"profile-image img-circle inline pull-right\"
                    />
                    <p class=\"help-block\">
                        <small>
                            <i>File must be *.jpg, *.jpeg, *.png, *.gif, or *.bmb and &lt; 3MBs</i>
                        </small>
                    </p>
                    {% if errors.profilepic %}
                        <span class=\"help-block\">
                            {{ errors.profilepic | first }}
                        </span>
                    {% endif %}
                </div>
                <div id=\"newAttachment\" class=\"form-group\">
                    <label for=\"help-me\">
                        Attachments:
                    </label>
                    <p class=\"help-block\" id=\"help-me\">
                        <span>
                            <i>
                                Attach CV, Passport Copy, VISA Copy, Educational Degree, or any other related documents
                                <br/>
                                <mark>Remember to rename the files respectively</mark>
                            </i>
                        </span>
                    </p>
                    {#TODO: show icons of attachments below: #}
                        {#<div class=\"inline thumbnail\">#}
                            {#{% for attachment in attachments %}#}
                                {#<img src=\"{{ base_url() }}{{ attachment.doc_loc }}\" class=\"img-rounded inline\">#}
                            {#{% endfor %}#}
                        {#</div>#}
                    {#END TODO #}
                    <input
                        type=\"hidden\"
                        id=\"attachmentCounter\"
                        name=\"attachmentCounter\"
                        value=\"-1\"
                    />
                    <input
                        type=\"button\"
                        id=\"add\"
                        class=\"btn btn-xs\"
                        value=\"Add New\"
                        title=\"Add new attachment field\"
                        onclick=\"showInput('divattachmentGroup', 'attachmentCounter')\"
                    />
                    <input
                        type=\"button\"
                        id=\"remove\"
                        class=\"btn btn-xs btn-danger\"
                        value=\"Remove\"
                        title=\"Removes the last item\"
                        onclick=\"hideInput('divattachmentGroup', 'attachmentCounter')\"
                    />
                    <br/>
                    <div
                        class=\"form-group bg-gray-light hidden has-feedback
                            {{ errors.attachmentCountry0 ? ' has-error' : '' }}
                            {{ errors.attachmentType0 ? ' has-error' : '' }}
                            {{ errors.attachmentIssuer0 ? ' has-error' : '' }}
                            {{ errors.attachmentIssueDate0 ? ' has-error' : '' }}
                            {{ errors.attachmentExpiryDate0 ? ' has-error' : '' }}\"
                        id=\"divattachmentGroup0\"
                    >
                        <div class=\"input-group inline has-feedback\" id=\"div2attachment0\">
                            <label for=\"attachment0\">
                                File: &nbsp;
                            </label>
                            <input
                                type=\"file\"
                                id=\"attachment0\"
                                name=\"attachment[]\"
                                class=\"btn btn-default btn-file\"
                            /> &nbsp;
                        </div>
                        <div class=\"input-group inline has-feedback{{ errors.attachmentCountry0 ? ' has-error' : '' }}\" id=\"attachmentCountry0\">
                            <label for=\"attachmentCountry0\">Issuance Country: &nbsp;</label>
                            <select name=\"attachmentCountry0\" id=\"attachmentCountry0\">
                                <option value=\"\">Please Select ... </option>
                                {% for country in HR.countries %}
                                    <option value=\"{{ country.id }}\" {% if country.id == applicant.attachmentCountry0 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                {% endfor %}
                            </select>
                            {% if errors.attachmentCountry0 %}
                                <span class=\"help-block\">{{ errors.attachmentCountry0 | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"input-group inline has-feedback{{ errors.attachmentType0 ? ' has-error' : '' }}\" id=\"attachmentType0\">
                                <label for=\"attachmentType0\">Type: &nbsp;</label>
                                <input id=\"attachmentType0\" name=\"attachmentType0\" type=\"text\" value=\"{{ applicant.attachmentType0 }}\">
                                {% if errors.attachmentType0 %}
                                    <span class=\"help-block\">{{ errors.attachmentType0 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer0 ? ' has-error' : '' }}\" id=\"attachmentIssuer0\">
                                <label for=\"attachmentIssuer0\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer0\" name=\"attachmentIssuer0\" value=\"{{ applicant.attachmentIssuer0 }}\"> &nbsp;
                                {% if errors.attachmentIssuer0 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer0 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate0 ? ' has-error' : '' }}\" id=\"attachmentIssueDate0\">
                                <label for=\"attachmentIssueDate0\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate0\" name=\"attachmentIssueDate0\" value=\"{{ applicant.attachmentIssueDate0 ? applicant.attachmentIssueDate0 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate0 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate0 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate0 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate0\">
                                <label for=\"attachmentExpiryDate0\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate0\" name=\"attachmentExpiryDate0\" value=\"{{ applicant.attachmentExpiryDate0 ? applicant.attachmentExpiryDate0 : '2099-12-31' }}\"> &nbsp;
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
                                        <option value=\"{{ country.id }}\" {% if country.id == applicant.attachmentCountry1 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry1 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry1 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType1 ? ' has-error' : '' }}\" id=\"attachmentType1\">
                                <label for=\"attachmentType1\">Type: &nbsp;</label>
                                <input id=\"attachmentType1\" name=\"attachmentType1\" type=\"text\" value=\"{{ applicant.attachmentType1 }}\">
                                {% if errors.attachmentType1 %}
                                    <span class=\"help-block\">{{ errors.attachmentType1 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer1 ? ' has-error' : '' }}\" id=\"attachmentIssuer1\">
                                <label for=\"attachmentIssuer1\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer1\" name=\"attachmentIssuer1\" value=\"{{ applicant.attachmentIssuer1 }}\"> &nbsp;
                                {% if errors.attachmentIssuer1 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer1 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate1 ? ' has-error' : '' }}\" id=\"attachmentIssueDate1\">
                                <label for=\"attachmentIssueDate1\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate1\" name=\"attachmentIssueDate1\" value=\"{{ applicant.attachmentIssueDate1 ? applicant.attachmentIssueDate1 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate1 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate1 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate1 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate1\">
                                <label for=\"attachmentExpiryDate1\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate1\" name=\"attachmentExpiryDate1\" value=\"{{ applicant.attachmentExpiryDate1 ? applicant.attachmentExpiryDate1 : '2099-12-31' }}\"> &nbsp;
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
                                        <option value=\"{{ country.id }}\" {% if country.id == applicant.attachmentCountry2 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry2 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry2 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType2 ? ' has-error' : '' }}\" id=\"attachmentType2\">
                                <label for=\"attachmentType2\">Type: &nbsp;</label>
                                <input id=\"attachmentType2\" name=\"attachmentType2\" type=\"text\" value=\"{{ applicant.attachmentType2 }}\">
                                {% if errors.attachmentType2 %}
                                    <span class=\"help-block\">{{ errors.attachmentType2 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer2 ? ' has-error' : '' }}\" id=\"attachmentIssuer2\">
                                <label for=\"attachmentIssuer2\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer2\" name=\"attachmentIssuer2\" value=\"{{ applicant.attachmentIssuer2 }}\"> &nbsp;
                                {% if errors.attachmentIssuer2 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer2 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate2 ? ' has-error' : '' }}\" id=\"attachmentIssueDate2\">
                                <label for=\"attachmentIssueDate2\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate2\" name=\"attachmentIssueDate2\" value=\"{{ applicant.attachmentIssueDate2 ? applicant.attachmentIssueDate2 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate2 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate2 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate2 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate2\">
                                <label for=\"attachmentExpiryDate2\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate2\" name=\"attachmentExpiryDate2\" value=\"{{ applicant.attachmentExpiryDate2 ? applicant.attachmentExpiryDate2 : '2099-12-31' }}\"> &nbsp;
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
                                        <option value=\"{{ country.id }}\" {% if country.id == applicant.attachmentCountry3 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry3 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry3 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType3 ? ' has-error' : '' }}\" id=\"attachmentType3\">
                                <label for=\"attachmentType3\">Type: &nbsp;</label>
                                <input id=\"attachmentType3\" name=\"attachmentType3\" type=\"text\" value=\"{{ applicant.attachmentType3 }}\">
                                {% if errors.attachmentType3 %}
                                    <span class=\"help-block\">{{ errors.attachmentType3 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer3 ? ' has-error' : '' }}\" id=\"attachmentIssuer3\">
                                <label for=\"attachmentIssuer3\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer3\" name=\"attachmentIssuer3\" value=\"{{ applicant.attachmentIssuer3 }}\"> &nbsp;
                                {% if errors.attachmentIssuer3 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer3 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate3 ? ' has-error' : '' }}\" id=\"attachmentIssueDate3\">
                                <label for=\"attachmentIssueDate3\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate3\" name=\"attachmentIssueDate3\" value=\"{{ applicant.attachmentIssueDate3 ? applicant.attachmentIssueDate3 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate3 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate3 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate3 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate3\">
                                <label for=\"attachmentExpiryDate3\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate3\" name=\"attachmentExpiryDate3\" value=\"{{ applicant.attachmentExpiryDate3 ? applicant.attachmentExpiryDate3 : '2099-12-31' }}\"> &nbsp;
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
                                        <option value=\"{{ country.id }}\" {% if country.id == applicant.attachmentCountry4 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry4 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry4 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType4 ? ' has-error' : '' }}\" id=\"attachmentType4\">
                                <label for=\"attachmentType4\">Type: &nbsp;</label>
                                <input id=\"attachmentType4\" name=\"attachmentType4\" type=\"text\" value=\"{{ applicant.attachmentType4 }}\">
                                {% if errors.attachmentType4 %}
                                    <span class=\"help-block\">{{ errors.attachmentType4 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer4 ? ' has-error' : '' }}\" id=\"attachmentIssuer4\">
                                <label for=\"attachmentIssuer4\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer4\" name=\"attachmentIssuer4\" value=\"{{ applicant.attachmentIssuer4 }}\"> &nbsp;
                                {% if errors.attachmentIssuer4 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer4 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate4 ? ' has-error' : '' }}\" id=\"attachmentIssueDate4\">
                                <label for=\"attachmentIssueDate4\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate4\" name=\"attachmentIssueDate4\" value=\"{{ applicant.attachmentIssueDate4 ? applicant.attachmentIssueDate4 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate4 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate4 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate4 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate4\">
                                <label for=\"attachmentExpiryDate4\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate4\" name=\"attachmentExpiryDate4\" value=\"{{ applicant.attachmentExpiryDate4 ? applicant.attachmentExpiryDate4 : '2099-12-31' }}\"> &nbsp;
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
                                        <option value=\"{{ country.id }}\" {% if country.id == applicant.attachmentCountry5 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry5 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry5 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType5 ? ' has-error' : '' }}\" id=\"attachmentType5\">
                                <label for=\"attachmentType5\">Type: &nbsp;</label>
                                <input id=\"attachmentType5\" name=\"attachmentType5\" type=\"text\" value=\"{{ applicant.attachmentType5 }}\">
                                {% if errors.attachmentType5 %}
                                    <span class=\"help-block\">{{ errors.attachmentType5 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer5 ? ' has-error' : '' }}\" id=\"attachmentIssuer5\">
                                <label for=\"attachmentIssuer5\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer5\" name=\"attachmentIssuer5\" value=\"{{ applicant.attachmentIssuer5 }}\"> &nbsp;
                                {% if errors.attachmentIssuer5 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer5 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate5 ? ' has-error' : '' }}\" id=\"attachmentIssueDate5\">
                                <label for=\"attachmentIssueDate5\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate5\" name=\"attachmentIssueDate5\" value=\"{{ applicant.attachmentIssueDate5 ? applicant.attachmentIssueDate5 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate5 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate5 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate5 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate5\">
                                <label for=\"attachmentExpiryDate5\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate5\" name=\"attachmentExpiryDate5\" value=\"{{ applicant.attachmentExpiryDate5 ? applicant.attachmentExpiryDate5 : '2099-12-31' }}\"> &nbsp;
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
                                        <option value=\"{{ country.id }}\" {% if country.id == applicant.attachmentCountry6 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry6 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry6 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType6 ? ' has-error' : '' }}\" id=\"attachmentType6\">
                                <label for=\"attachmentType6\">Type: &nbsp;</label>
                                <input id=\"attachmentType6\" name=\"attachmentType6\" type=\"text\" value=\"{{ applicant.attachmentType6 }}\">
                                {% if errors.attachmentType6 %}
                                    <span class=\"help-block\">{{ errors.attachmentType6 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer6 ? ' has-error' : '' }}\" id=\"attachmentIssuer6\">
                                <label for=\"attachmentIssuer6\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer6\" name=\"attachmentIssuer6\" value=\"{{ applicant.attachmentIssuer6 }}\"> &nbsp;
                                {% if errors.attachmentIssuer6 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer6 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate6 ? ' has-error' : '' }}\" id=\"attachmentIssueDate6\">
                                <label for=\"attachmentIssueDate6\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate6\" name=\"attachmentIssueDate6\" value=\"{{ applicant.attachmentIssueDate6 ? applicant.attachmentIssueDate6 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate6 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate6 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate6 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate6\">
                                <label for=\"attachmentExpiryDate6\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate6\" name=\"attachmentExpiryDate6\" value=\"{{ applicant.attachmentExpiryDate6 ? applicant.attachmentExpiryDate6 : '2099-12-31' }}\"> &nbsp;
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
                                        <option value=\"{{ country.id }}\" {% if country.id == applicant.attachmentCountry7 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry7 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry7 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType7 ? ' has-error' : '' }}\" id=\"attachmentType7\">
                                <label for=\"attachmentType7\">Type: &nbsp;</label>
                                <input id=\"attachmentType7\" name=\"attachmentType7\" type=\"text\" value=\"{{ applicant.attachmentType7 }}\">
                                {% if errors.attachmentType7 %}
                                    <span class=\"help-block\">{{ errors.attachmentType7 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer7 ? ' has-error' : '' }}\" id=\"attachmentIssuer7\">
                                <label for=\"attachmentIssuer7\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer7\" name=\"attachmentIssuer7\" value=\"{{ applicant.attachmentIssuer7 }}\"> &nbsp;
                                {% if errors.attachmentIssuer7 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer7 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate7 ? ' has-error' : '' }}\" id=\"attachmentIssueDate7\">
                                <label for=\"attachmentIssueDate7\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate7\" name=\"attachmentIssueDate7\" value=\"{{ applicant.attachmentIssueDate7 ? applicant.attachmentIssueDate7 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate7 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate7 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate7 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate7\">
                                <label for=\"attachmentExpiryDate7\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate7\" name=\"attachmentExpiryDate7\" value=\"{{ applicant.attachmentExpiryDate7 ? applicant.attachmentExpiryDate7 : '2099-12-31' }}\"> &nbsp;
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
                                        <option value=\"{{ country.id }}\" {% if country.id == applicant.attachmentCountry8 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry8 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry8 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType8 ? ' has-error' : '' }}\" id=\"attachmentType8\">
                                <label for=\"attachmentType8\">Type: &nbsp;</label>
                                <input id=\"attachmentType8\" name=\"attachmentType8\" type=\"text\" value=\"{{ applicant.attachmentType8 }}\">
                                {% if errors.attachmentType8 %}
                                    <span class=\"help-block\">{{ errors.attachmentType8 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer8 ? ' has-error' : '' }}\" id=\"attachmentIssuer8\">
                                <label for=\"attachmentIssuer8\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer8\" name=\"attachmentIssuer8\" value=\"{{ applicant.attachmentIssuer8 }}\"> &nbsp;
                                {% if errors.attachmentIssuer8 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer8 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate8 ? ' has-error' : '' }}\" id=\"attachmentIssueDate8\">
                                <label for=\"attachmentIssueDate8\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate8\" name=\"attachmentIssueDate8\" value=\"{{ applicant.attachmentIssueDate8 ? applicant.attachmentIssueDate8 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate8 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate8 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate8 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate8\">
                                <label for=\"attachmentExpiryDate8\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate8\" name=\"attachmentExpiryDate8\" value=\"{{ applicant.attachmentExpiryDate8 ? applicant.attachmentExpiryDate8 : '2099-12-31' }}\"> &nbsp;
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
                                        <option value=\"{{ country.id }}\" {% if country.id == applicant.attachmentCountry9 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                    {% endfor %}
                                </select>
                                {% if errors.attachmentCountry9 %}
                                    <span class=\"help-block\">{{ errors.attachmentCountry9 | first }}</span>
                                {% endif %}
                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentType9 ? ' has-error' : '' }}\" id=\"attachmentType9\">
                                <label for=\"attachmentType9\">Type: &nbsp;</label>
                                <input id=\"attachmentType9\" name=\"attachmentType9\" type=\"text\" value=\"{{ applicant.attachmentType9 }}\">
                                {% if errors.attachmentType9 %}
                                    <span class=\"help-block\">{{ errors.attachmentType9 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssuer9 ? ' has-error' : '' }}\" id=\"attachmentIssuer9\">
                                <label for=\"attachmentIssuer9\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer9\" name=\"attachmentIssuer9\" value=\"{{ applicant.attachmentIssuer9 }}\"> &nbsp;
                                {% if errors.attachmentIssuer9 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssuer9 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentIssueDate9 ? ' has-error' : '' }}\" id=\"attachmentIssueDate9\">
                                <label for=\"attachmentIssueDate9\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate9\" name=\"attachmentIssueDate9\" value=\"{{ applicant.attachmentIssueDate9 ? applicant.attachmentIssueDate9 : '1999-12-31' }}\"> &nbsp;
                                {% if errors.attachmentIssueDate9 %}
                                    <span class=\"help-block\">{{ errors.attachmentIssueDate9 | first }}</span>
                                {% endif %}
                            </div>
                            <div class=\"input-group inline has-feedback{{ errors.attachmentExpiryDate9 ? ' has-error' : '' }}\" id=\"attachmentExpiryDate9\">
                                <label for=\"attachmentExpiryDate9\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate9\" name=\"attachmentExpiryDate9\" value=\"{{ applicant.attachmentExpiryDate9 ? applicant.attachmentExpiryDate9 : '2099-12-31' }}\"> &nbsp;
                                {% if errors.attachmentExpiryDate9 %}
                                    <span class=\"help-block\">{{ errors.attachmentExpiryDate9 | first }}</span>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                <div class=\"form-group has-feedback{{ errors.interview ? ' has-error' : '' }}\">
                    <label for=\"interview\">Would you like to schedule an interview for this applicant? &nbsp;
                    <input type=\"checkbox\" name=\"interview\" id=\"interview\" class=\"checkbox-inline\" value=\"{{ applicant.interview ? applicant.interview : 'null' }}\" onchange=\"interviewCheck(this)\"/></label>
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
", "auth/HR/Applicant/applicantById.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/HR/Applicant/applicantById.twig");
    }
}
