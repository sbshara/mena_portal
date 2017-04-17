<?php

/* auth/HR/Applicant/newApplicant.twig */
class __TwigTemplate_5df5ff94d4c88c7093fd8aef541342defb10c51ab167c41e7fd8a86895810938 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/HR/Applicant/newApplicant.twig", 1);
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
        echo "New Applicant";
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
                <p class=\"login-box-msg\">Register a new Applicant</p>
                <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.NewApplicant"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\" >

                    <div class=\"form-group has-feedback";
        // line 18
        echo (($this->getAttribute(($context["errors"] ?? null), "first_name", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"first_name\">First Name: &nbsp;</label>
                        <input type=\"text\" name=\"first_name\" id=\"first_name\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "first_name", array()), "html", null, true);
        echo "\" placeholder=\"Applicant's First Name\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        ";
        // line 22
        if ($this->getAttribute(($context["errors"] ?? null), "first_name", array())) {
            // line 23
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "first_name", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 25
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 27
        echo (($this->getAttribute(($context["errors"] ?? null), "last_name", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"last_name\">Last Name: &nbsp;</label>
                        <input type=\"text\" name=\"last_name\" id=\"last_name\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "last_name", array()), "html", null, true);
        echo "\" placeholder=\"Applicant's Last Name\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        ";
        // line 31
        if ($this->getAttribute(($context["errors"] ?? null), "last_name", array())) {
            // line 32
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "last_name", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 34
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 36
        echo (($this->getAttribute(($context["errors"] ?? null), "per_email", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"per_email\">Personal Email: &nbsp;</label>
                        <input type=\"email\" name=\"per_email\" id=\"per_email\" placeholder=\"applicant@domain.com\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "per_email", array()), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                        ";
        // line 40
        if ($this->getAttribute(($context["errors"] ?? null), "per_email", array())) {
            // line 41
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "per_email", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 43
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 45
        echo (($this->getAttribute(($context["errors"] ?? null), "mobile_phone", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"mobile_phone\">Mobile Phone Number: </label>
                        <input type=\"tel\" name=\"mobile_phone\" id=\"mobile_phone\" placeholder=\"+971 50 000 0000\" class=\"form-control\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "mobile_phone", array()), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-phone form-control-feedback\"></span>
                        ";
        // line 49
        if ($this->getAttribute(($context["errors"] ?? null), "mobile_phone", array())) {
            // line 50
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "mobile_phone", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 52
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 54
        echo (($this->getAttribute(($context["errors"] ?? null), "gender", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"male\">Gender: &nbsp; &nbsp;</label>
                            <input type=\"radio\" name=\"gender\" id=\"male\" value=\"M\" ";
        // line 56
        if (($this->getAttribute(($context["old"] ?? null), "gender", array()) == "M")) {
            echo "checked=\"checked\"";
        }
        echo "/>
                            <span class=\"fa fa-male\"> Male &nbsp; &nbsp;</span>
                            <input type=\"radio\" name=\"gender\" id=\"female\" value=\"F\" ";
        // line 58
        if (($this->getAttribute(($context["old"] ?? null), "gender", array()) == "F")) {
            echo "checked=\"checked\"";
        }
        echo "/>
                            <span class=\"fa fa-female\"> Female</span>
                        ";
        // line 60
        if ($this->getAttribute(($context["errors"] ?? null), "gender", array())) {
            // line 61
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "gender", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 63
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 65
        echo (($this->getAttribute(($context["errors"] ?? null), "nationality", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"nationality\">Nationality: </label>
                        <select class=\"form-control\" name=\"nationality\" id=\"nationality\">
                            <option value=\"\">Please Select ... </option>
                            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 70
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "nationality", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_name", array()));
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                        </select>
                        ";
        // line 73
        if ($this->getAttribute(($context["errors"] ?? null), "nationality", array())) {
            // line 74
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "nationality", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 76
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 78
        echo (($this->getAttribute(($context["errors"] ?? null), "dob", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"date-picker\">Date of Birth: </label>
                        <div class=\"input-group date\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" class=\"form-control pull-right\" name=\"dob\" id=\"datepicker\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "dob", array()), "html", null, true);
        echo "\">
                        </div>
                        ";
        // line 86
        if ($this->getAttribute(($context["errors"] ?? null), "dob", array())) {
            // line 87
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "dob", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 89
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 91
        echo (($this->getAttribute(($context["errors"] ?? null), "profilepic", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"profilePic\">Photo:</label>
                        <input type=\"file\" id=\"profilePic\" name=\"profilepic\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "profilepic", array()), "html", null, true);
        echo "\">
                        <p class=\"help-block\"><small><i>File must be *.jpg, *.jpeg, *.png, *.gif, or *.bmb and < 3MBs</i></small></p>
                        ";
        // line 95
        if ($this->getAttribute(($context["errors"] ?? null), "profilepic", array())) {
            // line 96
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "profilepic", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 98
        echo "                    </div>

                    <div id=\"newAttachment\" class=\"form-group\">
                        <label for=\"help-me\">Attachments:</label>
                        <p class=\"help-block\" id=\"help-me\"><span><i>Attach CV, Passport Copy, VISA Copy, Educational Degree, or any other related documents<br/><mark>Remember to rename the files respectively</mark></i></span></p>
                        <input type=\"hidden\" id=\"attachmentCounter\" name=\"attachmentCounter\" value=\"-1\">
                        <input type=\"button\" id=\"add\" class=\"btn btn-xs\" onclick=\"showInput('divattachmentGroup')\" value=\"Add New\" title=\"Add new attachment field\"/>
                        <input type=\"button\" id=\"remove\" class=\"btn btn-xs btn-danger\" onclick=\"hideInput('divattachmentGroup')\" value=\"Remove\" title=\"Removes the last item\" />
                        <br/>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 107
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry0", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType0", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer0", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate0", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate0", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup0\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment0\">
                                <label for=\"attachment0\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment0\" name=\"attachment[]\" > &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 112
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry0\">
                                <label for=\"attachmentCountry0\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry0\" id=\"attachmentCountry0\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 117
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "attachmentCountry0", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                                </select>
                                ";
        // line 120
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry0", array())) {
            // line 121
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 123
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 125
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType0\">
                                <label for=\"attachmentType0\">Type: &nbsp;</label>
                                <input id=\"attachmentType0\" name=\"attachmentType0\" type=\"text\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType0", array()), "html", null, true);
        echo "\">
                                ";
        // line 128
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType0", array())) {
            // line 129
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 131
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 132
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer0\">
                                <label for=\"attachmentIssuer0\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer0\" name=\"attachmentIssuer0\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer0", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 135
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer0", array())) {
            // line 136
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 138
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 139
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate0\">
                                <label for=\"attachmentIssueDate0\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate0\" name=\"attachmentIssueDate0\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate0", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate0", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 142
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate0", array())) {
            // line 143
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 145
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 146
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate0\">
                                <label for=\"attachmentExpiryDate0\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate0\" name=\"attachmentExpiryDate0\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate0", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate0", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 149
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate0", array())) {
            // line 150
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate0", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 152
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 154
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry1", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType1", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer1", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate1", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate1", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup1\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment1\">
                                <label for=\"attachment1\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment1\" name=\"attachment[]\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 159
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry1\">
                                <label for=\"attachmentCountry1\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry1\" id=\"attachmentCountry1\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 164
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "attachmentCountry1", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "                                </select>
                                ";
        // line 167
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry1", array())) {
            // line 168
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 170
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 172
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType1\">
                                <label for=\"attachmentType1\">Type: &nbsp;</label>
                                <input id=\"attachmentType1\" name=\"attachmentType1\" type=\"text\" value=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType1", array()), "html", null, true);
        echo "\">
                                ";
        // line 175
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType1", array())) {
            // line 176
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 178
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 179
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer1\">
                                <label for=\"attachmentIssuer1\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer1\" name=\"attachmentIssuer1\" value=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer1", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 182
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer1", array())) {
            // line 183
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 185
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 186
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate1\">
                                <label for=\"attachmentIssueDate1\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate1\" name=\"attachmentIssueDate1\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate1", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate1", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 189
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate1", array())) {
            // line 190
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 192
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 193
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate1\">
                                <label for=\"attachmentExpiryDate1\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate1\" name=\"attachmentExpiryDate1\" value=\"";
        // line 195
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate1", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate1", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 196
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate1", array())) {
            // line 197
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate1", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 199
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 201
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry2", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType2", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer2", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate2", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate2", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup2\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment2\">
                                <label for=\"attachment2\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment2\" name=\"attachment[]\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 206
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry2\">
                                <label for=\"attachmentCountry2\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry2\" id=\"attachmentCountry2\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 211
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "attachmentCountry2", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "                                </select>
                                ";
        // line 214
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry2", array())) {
            // line 215
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 217
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 219
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType2\">
                                <label for=\"attachmentType2\">Type: &nbsp;</label>
                                <input id=\"attachmentType2\" name=\"attachmentType2\" type=\"text\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType2", array()), "html", null, true);
        echo "\">
                                ";
        // line 222
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType2", array())) {
            // line 223
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 225
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 226
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer2\">
                                <label for=\"attachmentIssuer2\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer2\" name=\"attachmentIssuer2\" value=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer2", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 229
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer2", array())) {
            // line 230
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 232
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 233
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate2\">
                                <label for=\"attachmentIssueDate2\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate2\" name=\"attachmentIssueDate2\" value=\"";
        // line 235
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate2", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate2", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 236
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate2", array())) {
            // line 237
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 239
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 240
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate2\">
                                <label for=\"attachmentExpiryDate2\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate2\" name=\"attachmentExpiryDate2\" value=\"";
        // line 242
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate2", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate2", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 243
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate2", array())) {
            // line 244
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate2", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 246
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 248
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry3", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType3", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer3", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate3", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate3", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup3\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment3\">
                                <label for=\"attachment3\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment3\" name=\"attachment[]\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 253
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry3\">
                                <label for=\"attachmentCountry3\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry3\" id=\"attachmentCountry3\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 258
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "attachmentCountry3", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "                                </select>
                                ";
        // line 261
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry3", array())) {
            // line 262
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 264
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 266
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType3\">
                                <label for=\"attachmentType3\">Type: &nbsp;</label>
                                <input id=\"attachmentType3\" name=\"attachmentType3\" type=\"text\" value=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType3", array()), "html", null, true);
        echo "\">
                                ";
        // line 269
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType3", array())) {
            // line 270
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 272
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 273
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer3\">
                                <label for=\"attachmentIssuer3\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer3\" name=\"attachmentIssuer3\" value=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer3", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 276
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer3", array())) {
            // line 277
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 279
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 280
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate3\">
                                <label for=\"attachmentIssueDate3\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate3\" name=\"attachmentIssueDate3\" value=\"";
        // line 282
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate3", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate3", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 283
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate3", array())) {
            // line 284
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 286
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 287
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate3\">
                                <label for=\"attachmentExpiryDate3\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate3\" name=\"attachmentExpiryDate3\" value=\"";
        // line 289
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate3", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate3", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 290
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate3", array())) {
            // line 291
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate3", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 293
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 295
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry4", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType4", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer4", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate4", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate4", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup4\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment4\">
                                <label for=\"attachment4\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment4\" name=\"attachment[]\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 300
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry4\">
                                <label for=\"attachmentCountry4\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry4\" id=\"attachmentCountry4\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 305
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "attachmentCountry4", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        echo "                                </select>
                                ";
        // line 308
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry4", array())) {
            // line 309
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 311
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 313
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType4\">
                                <label for=\"attachmentType4\">Type: &nbsp;</label>
                                <input id=\"attachmentType4\" name=\"attachmentType4\" type=\"text\" value=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType4", array()), "html", null, true);
        echo "\">
                                ";
        // line 316
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType4", array())) {
            // line 317
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 319
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 320
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer4\">
                                <label for=\"attachmentIssuer4\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer4\" name=\"attachmentIssuer4\" value=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer4", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 323
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer4", array())) {
            // line 324
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 326
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 327
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate4\">
                                <label for=\"attachmentIssueDate4\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate4\" name=\"attachmentIssueDate4\" value=\"";
        // line 329
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate4", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate4", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 330
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate4", array())) {
            // line 331
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 333
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 334
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate4\">
                                <label for=\"attachmentExpiryDate4\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate4\" name=\"attachmentExpiryDate4\" value=\"";
        // line 336
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate4", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate4", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 337
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate4", array())) {
            // line 338
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate4", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 340
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden  has-feedback";
        // line 342
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry5", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType5", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer5", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate5", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate5", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup5\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment5\">
                                <label for=\"attachment5\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment5\" name=\"attachment[]\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 347
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry5\">
                                <label for=\"attachmentCountry5\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry5\" id=\"attachmentCountry5\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 352
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "attachmentCountry5", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        echo "                                </select>
                                ";
        // line 355
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry5", array())) {
            // line 356
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 358
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 360
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType5\">
                                <label for=\"attachmentType5\">Type: &nbsp;</label>
                                <input id=\"attachmentType5\" name=\"attachmentType5\" type=\"text\" value=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType5", array()), "html", null, true);
        echo "\">
                                ";
        // line 363
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType5", array())) {
            // line 364
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 366
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 367
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer5\">
                                <label for=\"attachmentIssuer5\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer5\" name=\"attachmentIssuer5\" value=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer5", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 370
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer5", array())) {
            // line 371
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 373
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 374
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate5\">
                                <label for=\"attachmentIssueDate5\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate5\" name=\"attachmentIssueDate5\" value=\"";
        // line 376
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate5", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate5", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 377
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate5", array())) {
            // line 378
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 380
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 381
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate5\">
                                <label for=\"attachmentExpiryDate5\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate5\" name=\"attachmentExpiryDate5\" value=\"";
        // line 383
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate5", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate5", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 384
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate5", array())) {
            // line 385
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate5", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 387
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 389
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry6", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType6", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer6", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate6", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate6", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup6\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment6\">
                                <label for=\"attachment6\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment6\" name=\"attachment[]\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 394
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry6\">
                                <label for=\"attachmentCountry6\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry6\" id=\"attachmentCountry6\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 398
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 399
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "attachmentCountry6", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 401
        echo "                                </select>
                                ";
        // line 402
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry6", array())) {
            // line 403
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 405
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 407
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType6\">
                                <label for=\"attachmentType6\">Type: &nbsp;</label>
                                <input id=\"attachmentType6\" name=\"attachmentType6\" type=\"text\" value=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType6", array()), "html", null, true);
        echo "\">
                                ";
        // line 410
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType6", array())) {
            // line 411
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 413
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 414
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer6\">
                                <label for=\"attachmentIssuer6\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer6\" name=\"attachmentIssuer6\" value=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer6", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 417
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer6", array())) {
            // line 418
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 420
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 421
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate6\">
                                <label for=\"attachmentIssueDate6\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate6\" name=\"attachmentIssueDate6\" value=\"";
        // line 423
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate6", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate6", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 424
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate6", array())) {
            // line 425
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 427
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 428
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate6\">
                                <label for=\"attachmentExpiryDate6\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate6\" name=\"attachmentExpiryDate6\" value=\"";
        // line 430
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate6", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate6", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 431
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate6", array())) {
            // line 432
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate6", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 434
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 436
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry7", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType7", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer7", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate7", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate7", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup7\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment7\">
                                <label for=\"attachment7\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment7\" name=\"attachment[]\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 441
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry7\">
                                <label for=\"attachmentCountry7\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry7\" id=\"attachmentCountry7\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 445
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 446
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "attachmentCountry7", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 448
        echo "                                </select>
                                ";
        // line 449
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry7", array())) {
            // line 450
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 452
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 454
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType7\">
                                <label for=\"attachmentType7\">Type: &nbsp;</label>
                                <input id=\"attachmentType7\" name=\"attachmentType7\" type=\"text\" value=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType7", array()), "html", null, true);
        echo "\">
                                ";
        // line 457
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType7", array())) {
            // line 458
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 460
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 461
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer7\">
                                <label for=\"attachmentIssuer7\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer7\" name=\"attachmentIssuer7\" value=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer7", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 464
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer7", array())) {
            // line 465
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 467
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 468
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate7\">
                                <label for=\"attachmentIssueDate7\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate7\" name=\"attachmentIssueDate7\" value=\"";
        // line 470
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate7", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate7", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 471
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate7", array())) {
            // line 472
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 474
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 475
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate7\">
                                <label for=\"attachmentExpiryDate7\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate7\" name=\"attachmentExpiryDate7\" value=\"";
        // line 477
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate7", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate7", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 478
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate7", array())) {
            // line 479
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate7", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 481
        echo "                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 483
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry8", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType8", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer8", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate8", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate8", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup8\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment8\">
                                <label for=\"attachment8\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment8\" name=\"attachment[]\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 488
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry8\">
                                <label for=\"attachmentCountry8\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry8\" id=\"attachmentCountry8\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 492
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 493
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "attachmentCountry8", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 495
        echo "                                </select>
                                ";
        // line 496
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry8", array())) {
            // line 497
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 499
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 501
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType8\">
                                <label for=\"attachmentType8\">Type: &nbsp;</label>
                                <input id=\"attachmentType8\" name=\"attachmentType8\" type=\"text\" value=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType8", array()), "html", null, true);
        echo "\">
                                ";
        // line 504
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType8", array())) {
            // line 505
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 507
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 508
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer8\">
                                <label for=\"attachmentIssuer8\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer8\" name=\"attachmentIssuer8\" value=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer8", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 511
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer8", array())) {
            // line 512
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 514
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 515
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate8\">
                                <label for=\"attachmentIssueDate8\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate8\" name=\"attachmentIssueDate8\" value=\"";
        // line 517
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate8", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate8", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 518
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate8", array())) {
            // line 519
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 521
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 522
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate8\">
                                <label for=\"attachmentExpiryDate8\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate8\" name=\"attachmentExpiryDate8\" value=\"";
        // line 524
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate8", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate8", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 525
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate8", array())) {
            // line 526
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate8", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 528
        echo "                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 530
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry9", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType9", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer9", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate9", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate9", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup9\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment9\">
                                <label for=\"attachment9\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment9\" name=\"attachment[]\"> &nbsp;
                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 535
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry9\">
                                <label for=\"attachmentCountry9\">Issuance Country: &nbsp;</label>
                                <select name=\"attachmentCountry9\" id=\"attachmentCountry9\">
                                    <option value=\"\">Please Select ... </option>
                                    ";
        // line 539
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 540
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "attachmentCountry9", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "country_name", array()));
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 542
        echo "                                </select>
                                ";
        // line 543
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry9", array())) {
            // line 544
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 546
        echo "                            </div>
                            <br/>
                            <div class=\"input-group inline has-feedback";
        // line 548
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType9\">
                                <label for=\"attachmentType9\">Type: &nbsp;</label>
                                <input id=\"attachmentType9\" name=\"attachmentType9\" type=\"text\" value=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType9", array()), "html", null, true);
        echo "\">
                                ";
        // line 551
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType9", array())) {
            // line 552
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 554
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 555
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer9\">
                                <label for=\"attachmentIssuer9\">Issued By: &nbsp;</label>
                                <input type=\"text\" id=\"attachmentIssuer9\" name=\"attachmentIssuer9\" value=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer9", array()), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 558
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer9", array())) {
            // line 559
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 561
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 562
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate9\">
                                <label for=\"attachmentIssueDate9\">Issue Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentIssueDate9\" name=\"attachmentIssueDate9\" value=\"";
        // line 564
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate9", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate9", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 565
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate9", array())) {
            // line 566
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 568
        echo "                            </div>
                            <div class=\"input-group inline has-feedback";
        // line 569
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate9\">
                                <label for=\"attachmentExpiryDate9\">Expiry Date: &nbsp;</label>
                                <input type=\"date\" id=\"attachmentExpiryDate9\" name=\"attachmentExpiryDate9\" value=\"";
        // line 571
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate9", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate9", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                                ";
        // line 572
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate9", array())) {
            // line 573
            echo "                                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate9", array())), "html", null, true);
            echo "</span>
                                ";
        }
        // line 575
        echo "                            </div>
                        </div>
                    </div>

                    <div class=\"form-group has-feedback";
        // line 579
        echo (($this->getAttribute(($context["errors"] ?? null), "source", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"source\">Application Source:  &nbsp;</label>
                        <p class=\"help-block\"><small><i>How did the applicant hear about us</i></small></p>
                        <select class=\"form-control\" name=\"source\" id=\"source\">
                            <option value=\"\" ";
        // line 583
        if (($this->getAttribute(($context["old"] ?? null), "source", array()) == "")) {
            echo "selected";
        }
        echo ">Please Select ...</option>
                            <option value=\"HR Agency\" ";
        // line 584
        if (($this->getAttribute(($context["old"] ?? null), "source", array()) == "HR Agency")) {
            echo "selected";
        }
        echo ">HR Agency</option>
                            <option value=\"Search Engine\" ";
        // line 585
        if (($this->getAttribute(($context["old"] ?? null), "source", array()) == "Search Engine")) {
            echo "selected";
        }
        echo ">Search Engine</option>
                            <option value=\"Friend or Colleague\" ";
        // line 586
        if (($this->getAttribute(($context["old"] ?? null), "source", array()) == "Friend")) {
            echo "selected";
        }
        echo ">Friend</option>
                            <option value=\"Other\" ";
        // line 587
        if (($this->getAttribute(($context["old"] ?? null), "source", array()) == "Other")) {
            echo "selected";
        }
        echo ">Other</option>
                            <option value=\"No Answer\" ";
        // line 588
        if (($this->getAttribute(($context["old"] ?? null), "source", array()) == "No Answer")) {
            echo "selected";
        }
        echo ">No Answer</option>
                        </select>
                        ";
        // line 590
        if ($this->getAttribute(($context["errors"] ?? null), "source", array())) {
            // line 591
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "source", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 593
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 595
        echo (($this->getAttribute(($context["errors"] ?? null), "nextstep", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"nextstep\">Next Step:  &nbsp;</label>
                        <select class=\"form-control\" name=\"nextstep\" id=\"nextstep\">
                            <option value=\"\" ";
        // line 598
        if (($this->getAttribute(($context["old"] ?? null), "nextstep", array()) == "")) {
            echo "selected";
        }
        echo ">Please Select ...</option>
                            <option value=\"address\" ";
        // line 599
        if (($this->getAttribute(($context["old"] ?? null), "nextstep", array()) == "address")) {
            echo "selected";
        }
        echo ">Applicant Address</option>
                            <option value=\"skill\" ";
        // line 600
        if (($this->getAttribute(($context["old"] ?? null), "nextstep", array()) == "skill")) {
            echo "selected";
        }
        echo ">Applicant skills</option>
                            <option value=\"degree\" ";
        // line 601
        if (($this->getAttribute(($context["old"] ?? null), "nextstep", array()) == "education")) {
            echo "selected";
        }
        echo ">Applicant educational degrees</option>
                            <option value=\"experience\" ";
        // line 602
        if (($this->getAttribute(($context["old"] ?? null), "nextstep", array()) == "experience")) {
            echo "selected";
        }
        echo ">Applicant experiences</option>
                            <option value=\"interview\" ";
        // line 603
        if (($this->getAttribute(($context["old"] ?? null), "nextstep", array()) == "interview")) {
            echo "selected";
        }
        echo ">Schedule an interview</option>
                            <option value=\"home\" ";
        // line 604
        if (($this->getAttribute(($context["old"] ?? null), "nextstep", array()) == "home")) {
            echo "selected";
        }
        echo " title=\"Not Recommended!\">Do nothing!</option>
                        </select>
                        ";
        // line 606
        if ($this->getAttribute(($context["errors"] ?? null), "nextstep", array())) {
            // line 607
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "nextstep", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 609
        echo "                    </div>

                    <button type=\"submit\" name=\"submit\" id=\"submit\"class=\"btn btn-default\">Register New Applicant</button>
                    ";
        // line 612
        echo $this->getAttribute(($context["csrf"] ?? null), "field", array());
        echo "
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
        return array (  1739 => 612,  1734 => 609,  1728 => 607,  1726 => 606,  1719 => 604,  1713 => 603,  1707 => 602,  1701 => 601,  1695 => 600,  1689 => 599,  1683 => 598,  1677 => 595,  1673 => 593,  1667 => 591,  1665 => 590,  1658 => 588,  1652 => 587,  1646 => 586,  1640 => 585,  1634 => 584,  1628 => 583,  1621 => 579,  1615 => 575,  1609 => 573,  1607 => 572,  1603 => 571,  1598 => 569,  1595 => 568,  1589 => 566,  1587 => 565,  1583 => 564,  1578 => 562,  1575 => 561,  1569 => 559,  1567 => 558,  1563 => 557,  1558 => 555,  1555 => 554,  1549 => 552,  1547 => 551,  1543 => 550,  1538 => 548,  1534 => 546,  1528 => 544,  1526 => 543,  1523 => 542,  1508 => 540,  1504 => 539,  1497 => 535,  1485 => 530,  1481 => 528,  1475 => 526,  1473 => 525,  1469 => 524,  1464 => 522,  1461 => 521,  1455 => 519,  1453 => 518,  1449 => 517,  1444 => 515,  1441 => 514,  1435 => 512,  1433 => 511,  1429 => 510,  1424 => 508,  1421 => 507,  1415 => 505,  1413 => 504,  1409 => 503,  1404 => 501,  1400 => 499,  1394 => 497,  1392 => 496,  1389 => 495,  1374 => 493,  1370 => 492,  1363 => 488,  1351 => 483,  1347 => 481,  1341 => 479,  1339 => 478,  1335 => 477,  1330 => 475,  1327 => 474,  1321 => 472,  1319 => 471,  1315 => 470,  1310 => 468,  1307 => 467,  1301 => 465,  1299 => 464,  1295 => 463,  1290 => 461,  1287 => 460,  1281 => 458,  1279 => 457,  1275 => 456,  1270 => 454,  1266 => 452,  1260 => 450,  1258 => 449,  1255 => 448,  1240 => 446,  1236 => 445,  1229 => 441,  1217 => 436,  1213 => 434,  1207 => 432,  1205 => 431,  1201 => 430,  1196 => 428,  1193 => 427,  1187 => 425,  1185 => 424,  1181 => 423,  1176 => 421,  1173 => 420,  1167 => 418,  1165 => 417,  1161 => 416,  1156 => 414,  1153 => 413,  1147 => 411,  1145 => 410,  1141 => 409,  1136 => 407,  1132 => 405,  1126 => 403,  1124 => 402,  1121 => 401,  1106 => 399,  1102 => 398,  1095 => 394,  1083 => 389,  1079 => 387,  1073 => 385,  1071 => 384,  1067 => 383,  1062 => 381,  1059 => 380,  1053 => 378,  1051 => 377,  1047 => 376,  1042 => 374,  1039 => 373,  1033 => 371,  1031 => 370,  1027 => 369,  1022 => 367,  1019 => 366,  1013 => 364,  1011 => 363,  1007 => 362,  1002 => 360,  998 => 358,  992 => 356,  990 => 355,  987 => 354,  972 => 352,  968 => 351,  961 => 347,  949 => 342,  945 => 340,  939 => 338,  937 => 337,  933 => 336,  928 => 334,  925 => 333,  919 => 331,  917 => 330,  913 => 329,  908 => 327,  905 => 326,  899 => 324,  897 => 323,  893 => 322,  888 => 320,  885 => 319,  879 => 317,  877 => 316,  873 => 315,  868 => 313,  864 => 311,  858 => 309,  856 => 308,  853 => 307,  838 => 305,  834 => 304,  827 => 300,  815 => 295,  811 => 293,  805 => 291,  803 => 290,  799 => 289,  794 => 287,  791 => 286,  785 => 284,  783 => 283,  779 => 282,  774 => 280,  771 => 279,  765 => 277,  763 => 276,  759 => 275,  754 => 273,  751 => 272,  745 => 270,  743 => 269,  739 => 268,  734 => 266,  730 => 264,  724 => 262,  722 => 261,  719 => 260,  704 => 258,  700 => 257,  693 => 253,  681 => 248,  677 => 246,  671 => 244,  669 => 243,  665 => 242,  660 => 240,  657 => 239,  651 => 237,  649 => 236,  645 => 235,  640 => 233,  637 => 232,  631 => 230,  629 => 229,  625 => 228,  620 => 226,  617 => 225,  611 => 223,  609 => 222,  605 => 221,  600 => 219,  596 => 217,  590 => 215,  588 => 214,  585 => 213,  570 => 211,  566 => 210,  559 => 206,  547 => 201,  543 => 199,  537 => 197,  535 => 196,  531 => 195,  526 => 193,  523 => 192,  517 => 190,  515 => 189,  511 => 188,  506 => 186,  503 => 185,  497 => 183,  495 => 182,  491 => 181,  486 => 179,  483 => 178,  477 => 176,  475 => 175,  471 => 174,  466 => 172,  462 => 170,  456 => 168,  454 => 167,  451 => 166,  436 => 164,  432 => 163,  425 => 159,  413 => 154,  409 => 152,  403 => 150,  401 => 149,  397 => 148,  392 => 146,  389 => 145,  383 => 143,  381 => 142,  377 => 141,  372 => 139,  369 => 138,  363 => 136,  361 => 135,  357 => 134,  352 => 132,  349 => 131,  343 => 129,  341 => 128,  337 => 127,  332 => 125,  328 => 123,  322 => 121,  320 => 120,  317 => 119,  302 => 117,  298 => 116,  291 => 112,  279 => 107,  268 => 98,  262 => 96,  260 => 95,  255 => 93,  250 => 91,  246 => 89,  240 => 87,  238 => 86,  233 => 84,  224 => 78,  220 => 76,  214 => 74,  212 => 73,  209 => 72,  194 => 70,  190 => 69,  183 => 65,  179 => 63,  173 => 61,  171 => 60,  164 => 58,  157 => 56,  152 => 54,  148 => 52,  142 => 50,  140 => 49,  135 => 47,  130 => 45,  126 => 43,  120 => 41,  118 => 40,  113 => 38,  108 => 36,  104 => 34,  98 => 32,  96 => 31,  91 => 29,  86 => 27,  82 => 25,  76 => 23,  74 => 22,  69 => 20,  64 => 18,  59 => 16,  52 => 12,  47 => 9,  44 => 8,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
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
{% block title %}New Applicant{% endblock %}

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
                <p class=\"login-box-msg\">Register a new Applicant</p>
                <form action=\"{{ path_for('HR.NewApplicant') }}\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\" >

                    <div class=\"form-group has-feedback{{ errors.first_name ? ' has-error' : '' }}\">
                        <label for=\"first_name\">First Name: &nbsp;</label>
                        <input type=\"text\" name=\"first_name\" id=\"first_name\" class=\"form-control\" value=\"{{ old.first_name }}\" placeholder=\"Applicant's First Name\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        {% if errors.first_name %}
                            <span class=\"help-block\">{{ errors.first_name | first }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group has-feedback{{ errors.last_name ? ' has-error' : '' }}\">
                        <label for=\"last_name\">Last Name: &nbsp;</label>
                        <input type=\"text\" name=\"last_name\" id=\"last_name\" class=\"form-control\" value=\"{{ old.last_name }}\" placeholder=\"Applicant's Last Name\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        {% if errors.last_name %}
                            <span class=\"help-block\">{{ errors.last_name | first }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group has-feedback{{ errors.per_email ? ' has-error' : '' }}\">
                        <label for=\"per_email\">Personal Email: &nbsp;</label>
                        <input type=\"email\" name=\"per_email\" id=\"per_email\" placeholder=\"applicant@domain.com\" class=\"form-control\" value=\"{{ old.per_email }}\"/>
                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                        {% if errors.per_email %}
                            <span class=\"help-block\">{{ errors.per_email | first }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group has-feedback{{ errors.mobile_phone ? ' has-error' : '' }}\">
                        <label for=\"mobile_phone\">Mobile Phone Number: </label>
                        <input type=\"tel\" name=\"mobile_phone\" id=\"mobile_phone\" placeholder=\"+971 50 000 0000\" class=\"form-control\" value=\"{{ old.mobile_phone }}\"/>
                        <span class=\"glyphicon glyphicon-phone form-control-feedback\"></span>
                        {% if errors.mobile_phone %}
                            <span class=\"help-block\">{{ errors.mobile_phone | first }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group has-feedback{{ errors.gender ? ' has-error' : '' }}\">
                        <label for=\"male\">Gender: &nbsp; &nbsp;</label>
                            <input type=\"radio\" name=\"gender\" id=\"male\" value=\"M\" {% if old.gender == 'M' %}checked=\"checked\"{% endif %}/>
                            <span class=\"fa fa-male\"> Male &nbsp; &nbsp;</span>
                            <input type=\"radio\" name=\"gender\" id=\"female\" value=\"F\" {% if old.gender == 'F' %}checked=\"checked\"{% endif %}/>
                            <span class=\"fa fa-female\"> Female</span>
                        {% if errors.gender %}
                            <span class=\"help-block\">{{ errors.gender | first }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group has-feedback{{ errors.nationality ? ' has-error' : '' }}\">
                        <label for=\"nationality\">Nationality: </label>
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
                        <label for=\"date-picker\">Date of Birth: </label>
                        <div class=\"input-group date\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" class=\"form-control pull-right\" name=\"dob\" id=\"datepicker\" value=\"{{ old.dob }}\">
                        </div>
                        {% if errors.dob %}
                            <span class=\"help-block\">{{ errors.dob | first }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group has-feedback{{ errors.profilepic ? ' has-error' : '' }}\">
                        <label for=\"profilePic\">Photo:</label>
                        <input type=\"file\" id=\"profilePic\" name=\"profilepic\" value=\"{{ old.profilepic }}\">
                        <p class=\"help-block\"><small><i>File must be *.jpg, *.jpeg, *.png, *.gif, or *.bmb and < 3MBs</i></small></p>
                        {% if errors.profilepic %}
                            <span class=\"help-block\">{{ errors.profilepic | first }}</span>
                        {% endif %}
                    </div>

                    <div id=\"newAttachment\" class=\"form-group\">
                        <label for=\"help-me\">Attachments:</label>
                        <p class=\"help-block\" id=\"help-me\"><span><i>Attach CV, Passport Copy, VISA Copy, Educational Degree, or any other related documents<br/><mark>Remember to rename the files respectively</mark></i></span></p>
                        <input type=\"hidden\" id=\"attachmentCounter\" name=\"attachmentCounter\" value=\"-1\">
                        <input type=\"button\" id=\"add\" class=\"btn btn-xs\" onclick=\"showInput('divattachmentGroup')\" value=\"Add New\" title=\"Add new attachment field\"/>
                        <input type=\"button\" id=\"remove\" class=\"btn btn-xs btn-danger\" onclick=\"hideInput('divattachmentGroup')\" value=\"Remove\" title=\"Removes the last item\" />
                        <br/>
                        <div class=\"form-group bg-gray-light hidden has-feedback{{ errors.attachmentCountry0 ? ' has-error' : '' }}{{ errors.attachmentType0 ? ' has-error' : '' }}{{ errors.attachmentIssuer0 ? ' has-error' : '' }}{{ errors.attachmentIssueDate0 ? ' has-error' : '' }}{{ errors.attachmentExpiryDate0 ? ' has-error' : '' }}\" id=\"divattachmentGroup0\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment0\">
                                <label for=\"attachment0\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment0\" name=\"attachment[]\" > &nbsp;
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
                            <br/>
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
                                <input type=\"file\" id=\"attachment1\" name=\"attachment[]\"> &nbsp;
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
                                <input type=\"file\" id=\"attachment2\" name=\"attachment[]\"> &nbsp;
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
                                <input type=\"file\" id=\"attachment3\" name=\"attachment[]\"> &nbsp;
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
                                <input type=\"file\" id=\"attachment4\" name=\"attachment[]\"> &nbsp;
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
                                <input type=\"file\" id=\"attachment5\" name=\"attachment[]\"> &nbsp;
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
                                <input type=\"file\" id=\"attachment6\" name=\"attachment[]\"> &nbsp;
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
                                <input type=\"file\" id=\"attachment7\" name=\"attachment[]\"> &nbsp;
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
                                <input type=\"file\" id=\"attachment8\" name=\"attachment[]\"> &nbsp;
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
                                <input type=\"file\" id=\"attachment9\" name=\"attachment[]\"> &nbsp;
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

                    <div class=\"form-group has-feedback{{ errors.source ? ' has-error' : '' }}\">
                        <label for=\"source\">Application Source:  &nbsp;</label>
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

                    <div class=\"form-group has-feedback{{ errors.nextstep ? ' has-error' : '' }}\">
                        <label for=\"nextstep\">Next Step:  &nbsp;</label>
                        <select class=\"form-control\" name=\"nextstep\" id=\"nextstep\">
                            <option value=\"\" {% if old.nextstep == '' %}selected{% endif %}>Please Select ...</option>
                            <option value=\"address\" {% if old.nextstep == 'address' %}selected{% endif %}>Applicant Address</option>
                            <option value=\"skill\" {% if old.nextstep == 'skill' %}selected{% endif %}>Applicant skills</option>
                            <option value=\"degree\" {% if old.nextstep == 'education' %}selected{% endif %}>Applicant educational degrees</option>
                            <option value=\"experience\" {% if old.nextstep == 'experience' %}selected{% endif %}>Applicant experiences</option>
                            <option value=\"interview\" {% if old.nextstep == 'interview' %}selected{% endif %}>Schedule an interview</option>
                            <option value=\"home\" {% if old.nextstep == 'home' %}selected{% endif %} title=\"Not Recommended!\">Do nothing!</option>
                        </select>
                        {% if errors.nextstep %}
                            <span class=\"help-block\">{{ errors.nextstep | first }}</span>
                        {% endif %}
                    </div>

                    <button type=\"submit\" name=\"submit\" id=\"submit\"class=\"btn btn-default\">Register New Applicant</button>
                    {{ csrf.field | raw }}
                </form>
            </div>
        </div>
{% endblock %}
", "auth/HR/Applicant/newApplicant.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/HR/Applicant/newApplicant.twig");
    }
}
