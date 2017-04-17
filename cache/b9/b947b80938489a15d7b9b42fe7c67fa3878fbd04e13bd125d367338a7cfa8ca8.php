<?php

/* auth/HR/SinglePage.twig */
class __TwigTemplate_bcf5908e76e76db056a5e775643eff41bef413cd85754c9a225657f82e6ca70d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/HR/SinglePage.twig", 1);
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
        echo "Add Applicant Wizard";
    }

    // line 4
    public function block_bodyTags($context, array $blocks = array())
    {
        // line 5
        echo "    hold-transition skin-blue sidebar-collapse sidebar-mini
";
    }

    // line 9
    public function block_contents($context, array $blocks = array())
    {
        // line 10
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.NewApplicant"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\" >
    <div id=\"accordion\">
        ";
        // line 13
        echo "        <h3 style=\"background: #3c8dbc; border: #000000; \">Applicant</h3>
        <div id=\"SEC1\" class=\"register-box-body\">
            <div class=\"form-group has-feedback";
        // line 15
        echo (($this->getAttribute(($context["errors"] ?? null), "first_name", array())) ? (" has-error") : (""));
        echo "\">
                <label for=\"first_name\">First Name: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                <input type=\"text\" name=\"first_name\" id=\"first_name\" class=\"form-control\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "first_name", array()), "html", null, true);
        echo "\" placeholder=\"Applicant's First Name\" />
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                ";
        // line 19
        if ($this->getAttribute(($context["errors"] ?? null), "first_name", array())) {
            // line 20
            echo "                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "first_name", array())), "html", null, true);
            echo "</span>
                ";
        }
        // line 22
        echo "            </div>
            <div class=\"form-group has-feedback";
        // line 23
        echo (($this->getAttribute(($context["errors"] ?? null), "last_name", array())) ? (" has-error") : (""));
        echo "\">
                <label class=\"required\" for=\"last_name\">Last Name: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                <input type=\"text\" name=\"last_name\" id=\"last_name\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "last_name", array()), "html", null, true);
        echo "\" placeholder=\"Applicant's Last Name\"/>
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                ";
        // line 27
        if ($this->getAttribute(($context["errors"] ?? null), "last_name", array())) {
            // line 28
            echo "                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "last_name", array())), "html", null, true);
            echo "</span>
                ";
        }
        // line 30
        echo "            </div>
            <div class=\"form-group has-feedback";
        // line 31
        echo (($this->getAttribute(($context["errors"] ?? null), "per_email", array())) ? (" has-error") : (""));
        echo "\">
                <label for=\"per_email\">Personal Email: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                <input type=\"email\" name=\"per_email\" id=\"per_email\" placeholder=\"applicant@domain.com\" class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "per_email", array()), "html", null, true);
        echo "\"/>
                <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                ";
        // line 35
        if ($this->getAttribute(($context["errors"] ?? null), "per_email", array())) {
            // line 36
            echo "                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "per_email", array())), "html", null, true);
            echo "</span>
                ";
        }
        // line 38
        echo "            </div>
            <div class=\"form-group has-feedback";
        // line 39
        echo (($this->getAttribute(($context["errors"] ?? null), "mobile_phone", array())) ? (" has-error") : (""));
        echo "\">
                <label for=\"mobile_phone\">Mobile Phone Number: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                <input type=\"tel\" name=\"mobile_phone\" id=\"mobile_phone\" placeholder=\"+971 50 000 0000\" class=\"form-control\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "mobile_phone", array()), "html", null, true);
        echo "\"/>
                <span class=\"glyphicon glyphicon-phone form-control-feedback\"></span>
                ";
        // line 43
        if ($this->getAttribute(($context["errors"] ?? null), "mobile_phone", array())) {
            // line 44
            echo "                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "mobile_phone", array())), "html", null, true);
            echo "</span>
                ";
        }
        // line 46
        echo "            </div>
            <div class=\"form-group has-feedback";
        // line 47
        echo (($this->getAttribute(($context["errors"] ?? null), "gender", array())) ? (" has-error") : (""));
        echo "\">
                <label for=\"male\">Gender: &nbsp;</label><span class=\"text-red\"><b>*</b></span> &nbsp;
                <input type=\"radio\" name=\"gender\" id=\"male\" value=\"M\" ";
        // line 49
        if (($this->getAttribute(($context["old"] ?? null), "gender", array()) == "M")) {
            echo "checked=\"checked\"";
        }
        echo "/>
                <span class=\"fa fa-male\"> Male &nbsp; &nbsp;</span>
                <input type=\"radio\" name=\"gender\" id=\"female\" value=\"F\" ";
        // line 51
        if (($this->getAttribute(($context["old"] ?? null), "gender", array()) == "F")) {
            echo "checked=\"checked\"";
        }
        echo "/>
                <span class=\"fa fa-female\"> Female</span>
                ";
        // line 53
        if ($this->getAttribute(($context["errors"] ?? null), "gender", array())) {
            // line 54
            echo "                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "gender", array())), "html", null, true);
            echo "</span>
                ";
        }
        // line 56
        echo "            </div>
            <div class=\"form-group has-feedback";
        // line 57
        echo (($this->getAttribute(($context["errors"] ?? null), "nationality", array())) ? (" has-error") : (""));
        echo "\">
                <label for=\"nationality\">Nationality: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                <select class=\"form-control\" name=\"nationality\" id=\"nationality\">
                    <option value=\"\">Please Select ... </option>
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 62
            echo "                        <option value=\"";
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
        // line 64
        echo "                </select>
                ";
        // line 65
        if ($this->getAttribute(($context["errors"] ?? null), "nationality", array())) {
            // line 66
            echo "                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "nationality", array())), "html", null, true);
            echo "</span>
                ";
        }
        // line 68
        echo "            </div>
            <div class=\"form-group has-feedback";
        // line 69
        echo (($this->getAttribute(($context["errors"] ?? null), "dob", array())) ? (" has-error") : (""));
        echo "\">
                <label for=\"date-picker\">Date of Birth: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                <div class=\"input-group date\">
                    <div class=\"input-group-addon\">
                        <i class=\"fa fa-calendar\"></i>
                    </div>
                    <input type=\"text\" class=\"form-control pull-right\" name=\"dob\" id=\"datepicker\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "dob", array()), "html", null, true);
        echo "\">
                </div>
                ";
        // line 77
        if ($this->getAttribute(($context["errors"] ?? null), "dob", array())) {
            // line 78
            echo "                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "dob", array())), "html", null, true);
            echo "</span>
                ";
        }
        // line 80
        echo "            </div>
            <div class=\"form-group has-feedback";
        // line 81
        echo (($this->getAttribute(($context["errors"] ?? null), "profilepic", array())) ? (" has-error") : (""));
        echo "\">
                <label for=\"profilePic\">Photo: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                <input type=\"file\" id=\"profilePic\" name=\"profilepic\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "profilepic", array()), "html", null, true);
        echo "\" class=\"form-control-static\">
                <p class=\"help-block\"><small><i>File must be *.jpg, *.jpeg, *.png, *.gif, or *.bmb and < 3MBs</i></small></p>
                ";
        // line 85
        if ($this->getAttribute(($context["errors"] ?? null), "profilepic", array())) {
            // line 86
            echo "                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "profilepic", array())), "html", null, true);
            echo "</span>
                ";
        }
        // line 88
        echo "            </div>
            <div id=\"newAttachment\" class=\"form-group\">
                <label for=\"help-me\">Additional Attachments:</label>
                <p class=\"help-block\" id=\"help-me\"><span><i>Attach CV, Passport Copy, VISA Copy, Educational Degree, or any other related documents<br/><mark>Remember to rename the files respectively</mark></i></span></p>
                <input type=\"hidden\" id=\"attachmentCounter\" name=\"attachmentCounter\" value=\"-1\">
                <input type=\"button\" id=\"add\" class=\"btn btn-xs\" onclick=\"showInput('divattachmentGroup')\" value=\"Add New\" title=\"Add new attachment field\"/>
                <input type=\"button\" id=\"remove\" class=\"btn btn-xs btn-danger\" onclick=\"hideInput('divattachmentGroup')\" value=\"Remove\" title=\"Removes the last item\" />
                <br/>
                <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 96
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
        // line 101
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry0\">
                        <label for=\"attachmentCountry0\">Issuance Country: &nbsp;</label>
                        <select name=\"attachmentCountry0\" id=\"attachmentCountry0\">
                            <option value=\"\">Please Select ... </option>
                            ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 106
            echo "                                <option value=\"";
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
        // line 108
        echo "                        </select>
                        ";
        // line 109
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry0", array())) {
            // line 110
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry0", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 112
        echo "                    </div>
                    <br/>
                    <div class=\"input-group inline has-feedback";
        // line 114
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType0\">
                        <label for=\"attachmentType0\">Type: &nbsp;</label>
                        <input id=\"attachmentType0\" name=\"attachmentType0\" type=\"text\" value=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType0", array()), "html", null, true);
        echo "\">
                        ";
        // line 117
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType0", array())) {
            // line 118
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType0", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 120
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 121
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer0\">
                        <label for=\"attachmentIssuer0\">Issued By: &nbsp;</label>
                        <input type=\"text\" id=\"attachmentIssuer0\" name=\"attachmentIssuer0\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer0", array()), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 124
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer0", array())) {
            // line 125
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer0", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 127
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 128
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate0\">
                        <label for=\"attachmentIssueDate0\">Issue Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentIssueDate0\" name=\"attachmentIssueDate0\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate0", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate0", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 131
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate0", array())) {
            // line 132
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate0", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 134
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 135
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate0", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate0\">
                        <label for=\"attachmentExpiryDate0\">Expiry Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentExpiryDate0\" name=\"attachmentExpiryDate0\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate0", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate0", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 138
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate0", array())) {
            // line 139
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate0", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 141
        echo "                    </div>
                </div>
                <div class=\"form-group hidden has-feedback";
        // line 143
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
        // line 148
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry1\">
                        <label for=\"attachmentCountry1\">Issuance Country: &nbsp;</label>
                        <select name=\"attachmentCountry1\" id=\"attachmentCountry1\">
                            <option value=\"\">Please Select ... </option>
                            ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 153
            echo "                                <option value=\"";
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
        // line 155
        echo "                        </select>
                        ";
        // line 156
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry1", array())) {
            // line 157
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry1", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 159
        echo "                    </div>
                    <br/>
                    <div class=\"input-group inline has-feedback";
        // line 161
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType1\">
                        <label for=\"attachmentType1\">Type: &nbsp;</label>
                        <input id=\"attachmentType1\" name=\"attachmentType1\" type=\"text\" value=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType1", array()), "html", null, true);
        echo "\">
                        ";
        // line 164
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType1", array())) {
            // line 165
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType1", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 167
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 168
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer1\">
                        <label for=\"attachmentIssuer1\">Issued By: &nbsp;</label>
                        <input type=\"text\" id=\"attachmentIssuer1\" name=\"attachmentIssuer1\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer1", array()), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 171
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer1", array())) {
            // line 172
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer1", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 174
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 175
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate1\">
                        <label for=\"attachmentIssueDate1\">Issue Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentIssueDate1\" name=\"attachmentIssueDate1\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate1", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate1", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 178
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate1", array())) {
            // line 179
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate1", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 181
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 182
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate1", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate1\">
                        <label for=\"attachmentExpiryDate1\">Expiry Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentExpiryDate1\" name=\"attachmentExpiryDate1\" value=\"";
        // line 184
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate1", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate1", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 185
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate1", array())) {
            // line 186
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate1", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 188
        echo "                    </div>
                </div>
                <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 190
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
        // line 195
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry2\">
                        <label for=\"attachmentCountry2\">Issuance Country: &nbsp;</label>
                        <select name=\"attachmentCountry2\" id=\"attachmentCountry2\">
                            <option value=\"\">Please Select ... </option>
                            ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 200
            echo "                                <option value=\"";
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
        // line 202
        echo "                        </select>
                        ";
        // line 203
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry2", array())) {
            // line 204
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry2", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 206
        echo "                    </div>
                    <br/>
                    <div class=\"input-group inline has-feedback";
        // line 208
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType2\">
                        <label for=\"attachmentType2\">Type: &nbsp;</label>
                        <input id=\"attachmentType2\" name=\"attachmentType2\" type=\"text\" value=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType2", array()), "html", null, true);
        echo "\">
                        ";
        // line 211
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType2", array())) {
            // line 212
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType2", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 214
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 215
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer2\">
                        <label for=\"attachmentIssuer2\">Issued By: &nbsp;</label>
                        <input type=\"text\" id=\"attachmentIssuer2\" name=\"attachmentIssuer2\" value=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer2", array()), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 218
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer2", array())) {
            // line 219
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer2", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 221
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 222
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate2\">
                        <label for=\"attachmentIssueDate2\">Issue Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentIssueDate2\" name=\"attachmentIssueDate2\" value=\"";
        // line 224
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate2", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate2", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 225
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate2", array())) {
            // line 226
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate2", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 228
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 229
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate2", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate2\">
                        <label for=\"attachmentExpiryDate2\">Expiry Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentExpiryDate2\" name=\"attachmentExpiryDate2\" value=\"";
        // line 231
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate2", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate2", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 232
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate2", array())) {
            // line 233
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate2", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 235
        echo "                    </div>
                </div>
                <div class=\"form-group hidden has-feedback";
        // line 237
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
        // line 242
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry3\">
                        <label for=\"attachmentCountry3\">Issuance Country: &nbsp;</label>
                        <select name=\"attachmentCountry3\" id=\"attachmentCountry3\">
                            <option value=\"\">Please Select ... </option>
                            ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 247
            echo "                                <option value=\"";
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
        // line 249
        echo "                        </select>
                        ";
        // line 250
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry3", array())) {
            // line 251
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry3", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 253
        echo "                    </div>
                    <br/>
                    <div class=\"input-group inline has-feedback";
        // line 255
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType3\">
                        <label for=\"attachmentType3\">Type: &nbsp;</label>
                        <input id=\"attachmentType3\" name=\"attachmentType3\" type=\"text\" value=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType3", array()), "html", null, true);
        echo "\">
                        ";
        // line 258
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType3", array())) {
            // line 259
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType3", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 261
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 262
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer3\">
                        <label for=\"attachmentIssuer3\">Issued By: &nbsp;</label>
                        <input type=\"text\" id=\"attachmentIssuer3\" name=\"attachmentIssuer3\" value=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer3", array()), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 265
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer3", array())) {
            // line 266
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer3", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 268
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 269
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate3\">
                        <label for=\"attachmentIssueDate3\">Issue Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentIssueDate3\" name=\"attachmentIssueDate3\" value=\"";
        // line 271
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate3", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate3", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 272
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate3", array())) {
            // line 273
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate3", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 275
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 276
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate3", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate3\">
                        <label for=\"attachmentExpiryDate3\">Expiry Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentExpiryDate3\" name=\"attachmentExpiryDate3\" value=\"";
        // line 278
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate3", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate3", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 279
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate3", array())) {
            // line 280
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate3", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 282
        echo "                    </div>
                </div>
                <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 284
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
        // line 289
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry4\">
                        <label for=\"attachmentCountry4\">Issuance Country: &nbsp;</label>
                        <select name=\"attachmentCountry4\" id=\"attachmentCountry4\">
                            <option value=\"\">Please Select ... </option>
                            ";
        // line 293
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 294
            echo "                                <option value=\"";
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
        // line 296
        echo "                        </select>
                        ";
        // line 297
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry4", array())) {
            // line 298
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry4", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 300
        echo "                    </div>
                    <br/>
                    <div class=\"input-group inline has-feedback";
        // line 302
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType4\">
                        <label for=\"attachmentType4\">Type: &nbsp;</label>
                        <input id=\"attachmentType4\" name=\"attachmentType4\" type=\"text\" value=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType4", array()), "html", null, true);
        echo "\">
                        ";
        // line 305
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType4", array())) {
            // line 306
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType4", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 308
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 309
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer4\">
                        <label for=\"attachmentIssuer4\">Issued By: &nbsp;</label>
                        <input type=\"text\" id=\"attachmentIssuer4\" name=\"attachmentIssuer4\" value=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer4", array()), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 312
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer4", array())) {
            // line 313
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer4", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 315
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 316
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate4\">
                        <label for=\"attachmentIssueDate4\">Issue Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentIssueDate4\" name=\"attachmentIssueDate4\" value=\"";
        // line 318
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate4", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate4", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 319
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate4", array())) {
            // line 320
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate4", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 322
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 323
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate4", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate4\">
                        <label for=\"attachmentExpiryDate4\">Expiry Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentExpiryDate4\" name=\"attachmentExpiryDate4\" value=\"";
        // line 325
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate4", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate4", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 326
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate4", array())) {
            // line 327
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate4", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 329
        echo "                    </div>
                </div>
                <div class=\"form-group hidden  has-feedback";
        // line 331
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
        // line 336
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry5\">
                        <label for=\"attachmentCountry5\">Issuance Country: &nbsp;</label>
                        <select name=\"attachmentCountry5\" id=\"attachmentCountry5\">
                            <option value=\"\">Please Select ... </option>
                            ";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 341
            echo "                                <option value=\"";
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
        // line 343
        echo "                        </select>
                        ";
        // line 344
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry5", array())) {
            // line 345
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry5", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 347
        echo "                    </div>
                    <br/>
                    <div class=\"input-group inline has-feedback";
        // line 349
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType5\">
                        <label for=\"attachmentType5\">Type: &nbsp;</label>
                        <input id=\"attachmentType5\" name=\"attachmentType5\" type=\"text\" value=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType5", array()), "html", null, true);
        echo "\">
                        ";
        // line 352
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType5", array())) {
            // line 353
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType5", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 355
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 356
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer5\">
                        <label for=\"attachmentIssuer5\">Issued By: &nbsp;</label>
                        <input type=\"text\" id=\"attachmentIssuer5\" name=\"attachmentIssuer5\" value=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer5", array()), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 359
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer5", array())) {
            // line 360
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer5", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 362
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 363
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate5\">
                        <label for=\"attachmentIssueDate5\">Issue Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentIssueDate5\" name=\"attachmentIssueDate5\" value=\"";
        // line 365
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate5", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate5", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 366
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate5", array())) {
            // line 367
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate5", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 369
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 370
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate5", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate5\">
                        <label for=\"attachmentExpiryDate5\">Expiry Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentExpiryDate5\" name=\"attachmentExpiryDate5\" value=\"";
        // line 372
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate5", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate5", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 373
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate5", array())) {
            // line 374
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate5", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 376
        echo "                    </div>
                </div>
                <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 378
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
        // line 383
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry6\">
                        <label for=\"attachmentCountry6\">Issuance Country: &nbsp;</label>
                        <select name=\"attachmentCountry6\" id=\"attachmentCountry6\">
                            <option value=\"\">Please Select ... </option>
                            ";
        // line 387
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 388
            echo "                                <option value=\"";
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
        // line 390
        echo "                        </select>
                        ";
        // line 391
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry6", array())) {
            // line 392
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry6", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 394
        echo "                    </div>
                    <br/>
                    <div class=\"input-group inline has-feedback";
        // line 396
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType6\">
                        <label for=\"attachmentType6\">Type: &nbsp;</label>
                        <input id=\"attachmentType6\" name=\"attachmentType6\" type=\"text\" value=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType6", array()), "html", null, true);
        echo "\">
                        ";
        // line 399
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType6", array())) {
            // line 400
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType6", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 402
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 403
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer6\">
                        <label for=\"attachmentIssuer6\">Issued By: &nbsp;</label>
                        <input type=\"text\" id=\"attachmentIssuer6\" name=\"attachmentIssuer6\" value=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer6", array()), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 406
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer6", array())) {
            // line 407
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer6", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 409
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 410
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate6\">
                        <label for=\"attachmentIssueDate6\">Issue Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentIssueDate6\" name=\"attachmentIssueDate6\" value=\"";
        // line 412
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate6", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate6", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 413
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate6", array())) {
            // line 414
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate6", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 416
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 417
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate6", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate6\">
                        <label for=\"attachmentExpiryDate6\">Expiry Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentExpiryDate6\" name=\"attachmentExpiryDate6\" value=\"";
        // line 419
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate6", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate6", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 420
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate6", array())) {
            // line 421
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate6", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 423
        echo "                    </div>
                </div>
                <div class=\"form-group hidden has-feedback";
        // line 425
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
        // line 430
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry7\">
                        <label for=\"attachmentCountry7\">Issuance Country: &nbsp;</label>
                        <select name=\"attachmentCountry7\" id=\"attachmentCountry7\">
                            <option value=\"\">Please Select ... </option>
                            ";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 435
            echo "                                <option value=\"";
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
        // line 437
        echo "                        </select>
                        ";
        // line 438
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry7", array())) {
            // line 439
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry7", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 441
        echo "                    </div>
                    <br/>
                    <div class=\"input-group inline has-feedback";
        // line 443
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType7\">
                        <label for=\"attachmentType7\">Type: &nbsp;</label>
                        <input id=\"attachmentType7\" name=\"attachmentType7\" type=\"text\" value=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType7", array()), "html", null, true);
        echo "\">
                        ";
        // line 446
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType7", array())) {
            // line 447
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType7", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 449
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 450
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer7\">
                        <label for=\"attachmentIssuer7\">Issued By: &nbsp;</label>
                        <input type=\"text\" id=\"attachmentIssuer7\" name=\"attachmentIssuer7\" value=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer7", array()), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 453
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer7", array())) {
            // line 454
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer7", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 456
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 457
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate7\">
                        <label for=\"attachmentIssueDate7\">Issue Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentIssueDate7\" name=\"attachmentIssueDate7\" value=\"";
        // line 459
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate7", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate7", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 460
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate7", array())) {
            // line 461
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate7", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 463
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 464
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate7", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate7\">
                        <label for=\"attachmentExpiryDate7\">Expiry Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentExpiryDate7\" name=\"attachmentExpiryDate7\" value=\"";
        // line 466
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate7", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate7", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 467
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate7", array())) {
            // line 468
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate7", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 470
        echo "                    </div>
                </div>
                <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 472
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
        // line 477
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry8\">
                        <label for=\"attachmentCountry8\">Issuance Country: &nbsp;</label>
                        <select name=\"attachmentCountry8\" id=\"attachmentCountry8\">
                            <option value=\"\">Please Select ... </option>
                            ";
        // line 481
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 482
            echo "                                <option value=\"";
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
        // line 484
        echo "                        </select>
                        ";
        // line 485
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry8", array())) {
            // line 486
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry8", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 488
        echo "                    </div>
                    <br/>
                    <div class=\"input-group inline has-feedback";
        // line 490
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType8\">
                        <label for=\"attachmentType8\">Type: &nbsp;</label>
                        <input id=\"attachmentType8\" name=\"attachmentType8\" type=\"text\" value=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType8", array()), "html", null, true);
        echo "\">
                        ";
        // line 493
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType8", array())) {
            // line 494
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType8", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 496
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 497
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer8\">
                        <label for=\"attachmentIssuer8\">Issued By: &nbsp;</label>
                        <input type=\"text\" id=\"attachmentIssuer8\" name=\"attachmentIssuer8\" value=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer8", array()), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 500
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer8", array())) {
            // line 501
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer8", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 503
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 504
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate8\">
                        <label for=\"attachmentIssueDate8\">Issue Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentIssueDate8\" name=\"attachmentIssueDate8\" value=\"";
        // line 506
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate8", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate8", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 507
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate8", array())) {
            // line 508
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate8", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 510
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 511
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate8", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate8\">
                        <label for=\"attachmentExpiryDate8\">Expiry Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentExpiryDate8\" name=\"attachmentExpiryDate8\" value=\"";
        // line 513
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate8", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate8", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 514
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate8", array())) {
            // line 515
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate8", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 517
        echo "                    </div>
                </div>
                <div class=\"form-group hidden has-feedback";
        // line 519
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
        // line 524
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentCountry9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentCountry9\">
                        <label for=\"attachmentCountry9\">Issuance Country: &nbsp;</label>
                        <select name=\"attachmentCountry9\" id=\"attachmentCountry9\">
                            <option value=\"\">Please Select ... </option>
                            ";
        // line 528
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 529
            echo "                                <option value=\"";
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
        // line 531
        echo "                        </select>
                        ";
        // line 532
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentCountry9", array())) {
            // line 533
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentCountry9", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 535
        echo "                    </div>
                    <br/>
                    <div class=\"input-group inline has-feedback";
        // line 537
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentType9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentType9\">
                        <label for=\"attachmentType9\">Type: &nbsp;</label>
                        <input id=\"attachmentType9\" name=\"attachmentType9\" type=\"text\" value=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentType9", array()), "html", null, true);
        echo "\">
                        ";
        // line 540
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentType9", array())) {
            // line 541
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentType9", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 543
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 544
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssuer9\">
                        <label for=\"attachmentIssuer9\">Issued By: &nbsp;</label>
                        <input type=\"text\" id=\"attachmentIssuer9\" name=\"attachmentIssuer9\" value=\"";
        // line 546
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "attachmentIssuer9", array()), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 547
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssuer9", array())) {
            // line 548
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssuer9", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 550
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 551
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentIssueDate9\">
                        <label for=\"attachmentIssueDate9\">Issue Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentIssueDate9\" name=\"attachmentIssueDate9\" value=\"";
        // line 553
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate9", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentIssueDate9", array())) : ("1999-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 554
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate9", array())) {
            // line 555
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentIssueDate9", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 557
        echo "                    </div>
                    <div class=\"input-group inline has-feedback";
        // line 558
        echo (($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate9", array())) ? (" has-error") : (""));
        echo "\" id=\"attachmentExpiryDate9\">
                        <label for=\"attachmentExpiryDate9\">Expiry Date: &nbsp;</label>
                        <input type=\"date\" id=\"attachmentExpiryDate9\" name=\"attachmentExpiryDate9\" value=\"";
        // line 560
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate9", array())) ? ($this->getAttribute(($context["old"] ?? null), "attachmentExpiryDate9", array())) : ("2099-12-31")), "html", null, true);
        echo "\"> &nbsp;
                        ";
        // line 561
        if ($this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate9", array())) {
            // line 562
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "attachmentExpiryDate9", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 564
        echo "                    </div>
                </div>
            </div>
            <div class=\"form-group has-feedback";
        // line 567
        echo (($this->getAttribute(($context["errors"] ?? null), "visa", array())) ? (" has-error") : (""));
        echo "\">
                    <label for=\"inputvisa\">Current Visa Status: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                <br/>

                <label for=\"employee_residence\">Employee Residency</label>
                    <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"employee_residence\" value=\"Employee Residence\" ";
        // line 572
        if (($this->getAttribute(($context["old"] ?? null), "visa", array()) == "Employee Residence")) {
            echo "checked=\"checked\"";
        }
        echo " /> &nbsp; &nbsp;
                <label for=\"family_residence\">Family Residency</label>
                    <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"family_residence\" value=\"Family Residence\" ";
        // line 574
        if (($this->getAttribute(($context["old"] ?? null), "visa", array()) == "Family Residence")) {
            echo "checked=\"checked\"";
        }
        echo " /> &nbsp; &nbsp;
                <label for=\"visit\">Visit Visa</label>
                    <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"visit\" value=\"Visit\" ";
        // line 576
        if (($this->getAttribute(($context["old"] ?? null), "visa", array()) == "Visit")) {
            echo "checked=\"checked\"";
        }
        echo " /> &nbsp; &nbsp;
                <label for=\"tourist\">Tourist Visa</label>
                    <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"tourist\" value=\"Tourist\" ";
        // line 578
        if (($this->getAttribute(($context["old"] ?? null), "visa", array()) == "Tourist")) {
            echo "checked=\"checked\"";
        }
        echo " /> &nbsp; &nbsp;
                <label for=\"expired\">Expired Visa</label>
                    <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"expired\" value=\"Expired\" ";
        // line 580
        if (($this->getAttribute(($context["old"] ?? null), "visa", array()) == "Expired")) {
            echo "checked=\"checked\"";
        }
        echo " /> &nbsp; &nbsp;

                ";
        // line 583
        echo "
                ";
        // line 584
        if ($this->getAttribute(($context["errors"] ?? null), "visa", array())) {
            // line 585
            echo "                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "visa", array())), "html", null, true);
            echo "</span>
                ";
        }
        // line 587
        echo "            </div>
            <br/>
            <div class=\"form-group has-feedback";
        // line 589
        echo (($this->getAttribute(($context["errors"] ?? null), "visa_age", array())) ? (" has-error") : (""));
        echo "\">
                <label for=\"visa_age\">Visa Age: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                <span class=\"help-block\"><small><i>Time since the first issuance of visa from current employer</i></small></span>
                <input type=\"text\" class=\"form-control\" name=\"visa_age\" id=\"visa_age\" placeholder=\"Two years ...\" value=\"";
        // line 592
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "visa_age", array())) ? ($this->getAttribute(($context["old"] ?? null), "visa_age", array())) : ("")), "html", null, true);
        echo "\" />&nbsp;
                ";
        // line 593
        if ($this->getAttribute(($context["errors"] ?? null), "visa_age", array())) {
            // line 594
            echo "                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "visa_age", array())), "html", null, true);
            echo "</span>
                ";
        }
        // line 596
        echo "            </div>
            <div class=\"form-group has-feedback";
        // line 597
        echo (($this->getAttribute(($context["errors"] ?? null), "notice", array())) ? (" has-error") : (""));
        echo "\">
                <label for=\"notice\">Required Notice Period:</label>
                <input type=\"text\" class=\"form-control\" name=\"notice\" id=\"notice\" value=\"";
        // line 599
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "notice", array())) ? ($this->getAttribute(($context["old"] ?? null), "notice", array())) : ("")), "html", null, true);
        echo "\" placeholder=\"One month ...\" />&nbsp;
                ";
        // line 600
        if ($this->getAttribute(($context["errors"] ?? null), "notice", array())) {
            // line 601
            echo "                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "notice", array())), "html", null, true);
            echo "</span>
                ";
        }
        // line 603
        echo "            </div>
            <div class=\"form-group has-feedback";
        // line 604
        echo (($this->getAttribute(($context["errors"] ?? null), "source", array())) ? (" has-error") : (""));
        echo "\">
                <label for=\"source\">Application Source:  &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                <p class=\"help-block\"><small><i>How did the applicant hear about us</i></small></p>
                <select class=\"form-control\" name=\"source\" id=\"source\">
                    <option value=\"\" ";
        // line 608
        if (($this->getAttribute(($context["old"] ?? null), "source", array()) == "")) {
            echo "selected";
        }
        echo ">Please Select ...</option>
                    <option value=\"HR Agency\" ";
        // line 609
        if (($this->getAttribute(($context["old"] ?? null), "source", array()) == "HR Agency")) {
            echo "selected";
        }
        echo ">HR Agency</option>
                    <option value=\"Search Engine\" ";
        // line 610
        if (($this->getAttribute(($context["old"] ?? null), "source", array()) == "Search Engine")) {
            echo "selected";
        }
        echo ">Search Engine</option>
                    <option value=\"Friend or Colleague\" ";
        // line 611
        if (($this->getAttribute(($context["old"] ?? null), "source", array()) == "Friend")) {
            echo "selected";
        }
        echo ">Friend</option>
                    <option value=\"Other\" ";
        // line 612
        if (($this->getAttribute(($context["old"] ?? null), "source", array()) == "Other")) {
            echo "selected";
        }
        echo ">Other</option>
                    <option value=\"No Answer\" ";
        // line 613
        if (($this->getAttribute(($context["old"] ?? null), "source", array()) == "No Answer")) {
            echo "selected";
        }
        echo ">No Answer</option>
                </select>
                ";
        // line 615
        if ($this->getAttribute(($context["errors"] ?? null), "source", array())) {
            // line 616
            echo "                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "source", array())), "html", null, true);
            echo "</span>
                ";
        }
        // line 618
        echo "            </div>
            <div class=\"form-group has-feedback\">
                <input type=\"submit\" name=\"submit\" id=\"submitApplicant\" onclick=\"saveApplicant()\" value=\"Save & Continue\"/>
            </div>
            ";
        // line 622
        echo $this->getAttribute(($context["csrf"] ?? null), "field", array());
        echo "
        ";
        // line 624
        echo "        </div>
        <h3 style=\"background: #3c8dbc; border: #000000; \">Addresses</h3>
        <div id=\"SEC2\" class=\"register-box-body\">
            <div class=\"form-group has-feedback";
        // line 627
        echo (($this->getAttribute(($context["errors"] ?? null), "address_title", array())) ? (" has-error") : (""));
        echo "\">
                <label>Address Title: &nbsp; &nbsp;</label>
                <label>
                    <input type=\"radio\" name=\"address_title\" id=\"home\" value=\"Home\" ";
        // line 630
        if (($this->getAttribute(($context["old"] ?? null), "address_title", array()) == "home")) {
            echo "checked=\"checked\"";
        }
        echo " onclick=\"homeAddress()\"/>&nbsp;
                    <span class=\"fa fa-home\"> Local Home Address&nbsp; &nbsp; </span>
                </label>
                <label>
                    <input type=\"radio\" name=\"address_title\" id=\"origin\" value=\"Origin\" ";
        // line 634
        if (($this->getAttribute(($context["old"] ?? null), "address_title", array()) == "origin")) {
            echo "checked=\"checked\"";
        }
        echo " onclick=\"originAddress()\" /> &nbsp;
                    <span class=\"fa fa-plane\"> Origin Country Address &nbsp; &nbsp; </span>
                </label>
                <label>
                    <input type=\"radio\" name=\"address_title\" id=\"other\" value=\"other\" ";
        // line 638
        if (($this->getAttribute(($context["old"] ?? null), "address_title", array()) == $this->getAttribute(($context["old"] ?? null), "otherName", array()))) {
            echo "checked=\"checked\"";
        }
        echo " onclick=\"otherAddress()\" /> &nbsp;
                    <span class=\"fa fa-building\"> Other Address &nbsp; &nbsp; </span>
                </label>
                    <input type=\"text\" name=\"otherName\" id=\"otherName\" onchange=\"typeOtherAddress()\" placeholder=\"Enter Address Title\" value=\"";
        // line 641
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "otherName", array())) ? ($this->getAttribute(($context["old"] ?? null), "otherName", array())) : ("Other Address")), "html", null, true);
        echo "\" />
                ";
        // line 642
        if ($this->getAttribute(($context["errors"] ?? null), "address_title", array())) {
            // line 643
            echo "                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "address_title", array())), "html", null, true);
            echo "</span>
                ";
        }
        // line 645
        echo "            </div>
                <div id=\"homeAddress\">
                    <h4>Local Home Address</h4>
                    <div class=\"form-group has-feedback";
        // line 648
        echo (($this->getAttribute(($context["errors"] ?? null), "homeMobile", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"tel\" name=\"homeMobile\" id=\"homeMobile\" class=\"form-control\" value=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "homeMobile", array()), "html", null, true);
        echo "\" placeholder=\"Telephone Number: Mobile\"/>
                        <span class=\"fa fa-mobile-phone form-control-feedback\"></span>
                        ";
        // line 651
        if ($this->getAttribute(($context["errors"] ?? null), "homeMobile", array())) {
            // line 652
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeMobile", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 654
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 655
        echo (($this->getAttribute(($context["errors"] ?? null), "homeCountry", array())) ? (" has-error") : (""));
        echo "\">
                        <select class=\"form-control\" name=\"homeCountry\" id=\"homeCountry\" onchange=\"getStates(this)\">
                            <option>Please select a country...</option>
                            ";
        // line 658
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 659
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "homeCountry", array()))) {
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
        // line 661
        echo "                        </select>
                        ";
        // line 662
        if ($this->getAttribute(($context["errors"] ?? null), "homeCountry", array())) {
            // line 663
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeCountry", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 665
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 666
        echo (($this->getAttribute(($context["errors"] ?? null), "homeState", array())) ? (" has-error") : (""));
        echo "\">
                        <select class=\"form-control\" name=\"homeState\" id=\"homeState\" onchange=\"getCities(this)\">
                            <option>Please select a state...</option>
                        </select>
                        ";
        // line 670
        if ($this->getAttribute(($context["errors"] ?? null), "homeState", array())) {
            // line 671
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeState", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 673
        echo "                        <input type=\"hidden\" name=\"home_state_selection\" id=\"home_state_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "state", array()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group has-feedback";
        // line 675
        echo (($this->getAttribute(($context["errors"] ?? null), "city", array())) ? (" has-error") : (""));
        echo "\">
                        <select class=\"form-control\" name=\"city\" id=\"city\">
                            <option>Please select a city...</option>
                        </select>
                        ";
        // line 679
        if ($this->getAttribute(($context["errors"] ?? null), "city", array())) {
            // line 680
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "city", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 682
        echo "                        <input type=\"hidden\" name=\"city_selection\" id=\"city_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "city", array()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group has-feedback";
        // line 684
        echo (($this->getAttribute(($context["errors"] ?? null), "area", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"area\" id=\"area\" class=\"form-control\" value=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "area", array()), "html", null, true);
        echo "\" onfocus=\"setCity()\" placeholder=\"Please enter area name here\">
                        <span class=\"glyphicon glyphicon-map-marker form-control-feedback\"></span>
                        ";
        // line 687
        if ($this->getAttribute(($context["errors"] ?? null), "area", array())) {
            // line 688
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "area", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 690
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 691
        echo (($this->getAttribute(($context["errors"] ?? null), "streetName", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"streetName\" id=\"streetName\" class=\"form-control\" value=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "streetName", array()), "html", null, true);
        echo "\" placeholder=\"Street Name (optional)\"/>
                        <span class=\"glyphicon glyphicon-road form-control-feedback\"></span>
                        ";
        // line 694
        if ($this->getAttribute(($context["errors"] ?? null), "streetName", array())) {
            // line 695
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "streetName", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 697
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 698
        echo (($this->getAttribute(($context["errors"] ?? null), "streetNumber", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"streetNumber\" id=\"streetNumber\" class=\"form-control\" value=\"";
        // line 699
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "streetNumber", array()), "html", null, true);
        echo "\" placeholder=\"Street Number (optional)\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        ";
        // line 701
        if ($this->getAttribute(($context["errors"] ?? null), "streetNumber", array())) {
            // line 702
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "streetNumber", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 704
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 705
        echo (($this->getAttribute(($context["errors"] ?? null), "buildingName", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"buildingName\" id=\"buildingName\" class=\"form-control\" value=\"";
        // line 706
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "buildingName", array()), "html", null, true);
        echo "\" placeholder=\"Building Name (optional)\"/>
                        <span class=\"fa fa-building form-control-feedback\"></span>
                        ";
        // line 708
        if ($this->getAttribute(($context["errors"] ?? null), "buildingName", array())) {
            // line 709
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "buildingName", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 711
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 712
        echo (($this->getAttribute(($context["errors"] ?? null), "buildingNumber", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"buildingNumber\" id=\"buildingNumber\" class=\"form-control\" value=\"";
        // line 713
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "buildingNumber", array()), "html", null, true);
        echo "\" placeholder=\"Building Number (optional)\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        ";
        // line 715
        if ($this->getAttribute(($context["errors"] ?? null), "buildingNumber", array())) {
            // line 716
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "buildingNumber", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 718
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 719
        echo (($this->getAttribute(($context["errors"] ?? null), "apartFloor", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"apartFloor\" id=\"apartFloor\" class=\"form-control\" value=\"";
        // line 720
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "apartFloor", array()), "html", null, true);
        echo "\" placeholder=\"Apartment & Floor Number (optional)\"/>
                        <span class=\"fa fa-home form-control-feedback\"></span>
                        ";
        // line 722
        if ($this->getAttribute(($context["errors"] ?? null), "apartmentFloor", array())) {
            // line 723
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "apartmentFloor", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 725
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 726
        echo (($this->getAttribute(($context["errors"] ?? null), "pobox", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"pobox\" id=\"pobox\" class=\"form-control\" value=\"";
        // line 727
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "pobox", array()), "html", null, true);
        echo "\" placeholder=\"P.O.Box & Registered City (optional)\"/>
                        <span class=\"fa fa-inbox form-control-feedback\"></span>
                        ";
        // line 729
        if ($this->getAttribute(($context["errors"] ?? null), "pobox", array())) {
            // line 730
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "pobox", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 732
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 733
        echo (($this->getAttribute(($context["errors"] ?? null), "landmark", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"landmark\" id=\"landmark\" class=\"form-control\" value=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "landmark", array()), "html", null, true);
        echo "\" placeholder=\"Nearest Landmark (optional)\"/>
                        <span class=\"fa fa-bookmark form-control-feedback\"></span>
                        ";
        // line 736
        if ($this->getAttribute(($context["errors"] ?? null), "landmark", array())) {
            // line 737
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "landmark", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 739
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 740
        echo (($this->getAttribute(($context["errors"] ?? null), "landline", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"tel\" name=\"landline\" id=\"landline\" class=\"form-control\" value=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "landline", array()), "html", null, true);
        echo "\" placeholder=\"Telephone Number: Landline (optional)\"/>
                        <span class=\"fa fa-phone form-control-feedback\"></span>
                        ";
        // line 743
        if ($this->getAttribute(($context["errors"] ?? null), "landline", array())) {
            // line 744
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "landline", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 746
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 747
        echo (($this->getAttribute(($context["errors"] ?? null), "notes", array())) ? (" has-error") : (""));
        echo "\">
                        <textarea id=\"notes\" name=\"notes\" class=\"form-control\" placeholder=\"Any additional notes (optional)\">";
        // line 748
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "notes", array()), "html", null, true);
        echo "</textarea>
                        <span class=\"fa fa-pencil form-control-feedback\"></span>
                        ";
        // line 750
        if ($this->getAttribute(($context["errors"] ?? null), "notes", array())) {
            // line 751
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "notes", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 753
        echo "                    </div>
                </div>
                <div id=\"originAddress\">
                    <h4 id=\"originAddress\">Origin Country Address</h4>
                    <div class=\"form-group has-feedback";
        // line 757
        echo (($this->getAttribute(($context["errors"] ?? null), "mobile", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"tel\" name=\"mobile\" id=\"mobile\" class=\"form-control\" value=\"";
        // line 758
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "mobile", array()), "html", null, true);
        echo "\" placeholder=\"Telephone Number: Mobile\"/>
                        <span class=\"fa fa-mobile-phone form-control-feedback\"></span>
                        ";
        // line 760
        if ($this->getAttribute(($context["errors"] ?? null), "mobile", array())) {
            // line 761
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "mobile", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 763
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 764
        echo (($this->getAttribute(($context["errors"] ?? null), "country", array())) ? (" has-error") : (""));
        echo "\">
                        <select class=\"form-control\" name=\"country\" id=\"country\" onchange=\"getStates(this)\">
                            <option>Please select a country...</option>
                            ";
        // line 767
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 768
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "country", array()))) {
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
        // line 770
        echo "                        </select>
                        ";
        // line 771
        if ($this->getAttribute(($context["errors"] ?? null), "country", array())) {
            // line 772
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "country", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 774
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 775
        echo (($this->getAttribute(($context["errors"] ?? null), "state", array())) ? (" has-error") : (""));
        echo "\">
                        <select class=\"form-control\" name=\"state\" id=\"state\" onchange=\"getCities(this)\">
                            <option>Please select a state...</option>
                        </select>
                        ";
        // line 779
        if ($this->getAttribute(($context["errors"] ?? null), "state", array())) {
            // line 780
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "state", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 782
        echo "                        <input type=\"hidden\" name=\"state_selection\" id=\"state_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "state", array()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group has-feedback";
        // line 784
        echo (($this->getAttribute(($context["errors"] ?? null), "city", array())) ? (" has-error") : (""));
        echo "\">
                        <select class=\"form-control\" name=\"city\" id=\"city\">
                            <option>Please select a city...</option>
                        </select>
                        ";
        // line 788
        if ($this->getAttribute(($context["errors"] ?? null), "city", array())) {
            // line 789
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "city", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 791
        echo "                        <input type=\"hidden\" name=\"city_selection\" id=\"city_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "city", array()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group has-feedback";
        // line 793
        echo (($this->getAttribute(($context["errors"] ?? null), "area", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"area\" id=\"area\" class=\"form-control\" value=\"";
        // line 794
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "area", array()), "html", null, true);
        echo "\" onfocus=\"setCity()\" placeholder=\"Please enter area name here\">
                        <span class=\"glyphicon glyphicon-map-marker form-control-feedback\"></span>
                        ";
        // line 796
        if ($this->getAttribute(($context["errors"] ?? null), "area", array())) {
            // line 797
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "area", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 799
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 800
        echo (($this->getAttribute(($context["errors"] ?? null), "streetName", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"streetName\" id=\"streetName\" class=\"form-control\" value=\"";
        // line 801
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "streetName", array()), "html", null, true);
        echo "\" placeholder=\"Street Name (optional)\"/>
                        <span class=\"glyphicon glyphicon-road form-control-feedback\"></span>
                        ";
        // line 803
        if ($this->getAttribute(($context["errors"] ?? null), "streetName", array())) {
            // line 804
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "streetName", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 806
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 807
        echo (($this->getAttribute(($context["errors"] ?? null), "streetNumber", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"streetNumber\" id=\"streetNumber\" class=\"form-control\" value=\"";
        // line 808
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "streetNumber", array()), "html", null, true);
        echo "\" placeholder=\"Street Number (optional)\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        ";
        // line 810
        if ($this->getAttribute(($context["errors"] ?? null), "streetNumber", array())) {
            // line 811
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "streetNumber", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 813
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 814
        echo (($this->getAttribute(($context["errors"] ?? null), "buildingName", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"buildingName\" id=\"buildingName\" class=\"form-control\" value=\"";
        // line 815
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "buildingName", array()), "html", null, true);
        echo "\" placeholder=\"Building Name (optional)\"/>
                        <span class=\"fa fa-building form-control-feedback\"></span>
                        ";
        // line 817
        if ($this->getAttribute(($context["errors"] ?? null), "buildingName", array())) {
            // line 818
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "buildingName", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 820
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 821
        echo (($this->getAttribute(($context["errors"] ?? null), "buildingNumber", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"buildingNumber\" id=\"buildingNumber\" class=\"form-control\" value=\"";
        // line 822
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "buildingNumber", array()), "html", null, true);
        echo "\" placeholder=\"Building Number (optional)\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        ";
        // line 824
        if ($this->getAttribute(($context["errors"] ?? null), "buildingNumber", array())) {
            // line 825
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "buildingNumber", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 827
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 828
        echo (($this->getAttribute(($context["errors"] ?? null), "apartFloor", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"apartFloor\" id=\"apartFloor\" class=\"form-control\" value=\"";
        // line 829
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "apartFloor", array()), "html", null, true);
        echo "\" placeholder=\"Apartment & Floor Number (optional)\"/>
                        <span class=\"fa fa-home form-control-feedback\"></span>
                        ";
        // line 831
        if ($this->getAttribute(($context["errors"] ?? null), "apartmentFloor", array())) {
            // line 832
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "apartmentFloor", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 834
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 835
        echo (($this->getAttribute(($context["errors"] ?? null), "pobox", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"pobox\" id=\"pobox\" class=\"form-control\" value=\"";
        // line 836
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "pobox", array()), "html", null, true);
        echo "\" placeholder=\"P.O.Box & Registered City (optional)\"/>
                        <span class=\"fa fa-inbox form-control-feedback\"></span>
                        ";
        // line 838
        if ($this->getAttribute(($context["errors"] ?? null), "pobox", array())) {
            // line 839
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "pobox", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 841
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 842
        echo (($this->getAttribute(($context["errors"] ?? null), "landmark", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"landmark\" id=\"landmark\" class=\"form-control\" value=\"";
        // line 843
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "landmark", array()), "html", null, true);
        echo "\" placeholder=\"Nearest Landmark (optional)\"/>
                        <span class=\"fa fa-bookmark form-control-feedback\"></span>
                        ";
        // line 845
        if ($this->getAttribute(($context["errors"] ?? null), "landmark", array())) {
            // line 846
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "landmark", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 848
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 849
        echo (($this->getAttribute(($context["errors"] ?? null), "landline", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"tel\" name=\"landline\" id=\"landline\" class=\"form-control\" value=\"";
        // line 850
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "landline", array()), "html", null, true);
        echo "\" placeholder=\"Telephone Number: Landline (optional)\"/>
                        <span class=\"fa fa-phone form-control-feedback\"></span>
                        ";
        // line 852
        if ($this->getAttribute(($context["errors"] ?? null), "landline", array())) {
            // line 853
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "landline", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 855
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 856
        echo (($this->getAttribute(($context["errors"] ?? null), "notes", array())) ? (" has-error") : (""));
        echo "\">
                        <textarea id=\"notes\" name=\"notes\" class=\"form-control\" placeholder=\"Any additional notes (optional)\">";
        // line 857
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "notes", array()), "html", null, true);
        echo "</textarea>
                        <span class=\"fa fa-pencil form-control-feedback\"></span>
                        ";
        // line 859
        if ($this->getAttribute(($context["errors"] ?? null), "notes", array())) {
            // line 860
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "notes", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 862
        echo "                    </div>
                    </div>
                <div id=\"otherAddress\">
                    <h4>Other Address</h4>
                    <div class=\"form-group has-feedback";
        // line 866
        echo (($this->getAttribute(($context["errors"] ?? null), "mobile", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"tel\" name=\"mobile\" id=\"mobile\" class=\"form-control\" value=\"";
        // line 867
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "mobile", array()), "html", null, true);
        echo "\" placeholder=\"Telephone Number: Mobile\"/>
                        <span class=\"fa fa-mobile-phone form-control-feedback\"></span>
                        ";
        // line 869
        if ($this->getAttribute(($context["errors"] ?? null), "mobile", array())) {
            // line 870
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "mobile", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 872
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 873
        echo (($this->getAttribute(($context["errors"] ?? null), "country", array())) ? (" has-error") : (""));
        echo "\">
                        <select class=\"form-control\" name=\"country\" id=\"country\" onchange=\"getStates(this)\">
                            <option>Please select a country...</option>
                            ";
        // line 876
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 877
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "country", array()))) {
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
        // line 879
        echo "                        </select>
                        ";
        // line 880
        if ($this->getAttribute(($context["errors"] ?? null), "country", array())) {
            // line 881
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "country", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 883
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 884
        echo (($this->getAttribute(($context["errors"] ?? null), "state", array())) ? (" has-error") : (""));
        echo "\">
                        <select class=\"form-control\" name=\"state\" id=\"state\" onchange=\"getCities(this)\">
                            <option>Please select a state...</option>
                        </select>
                        ";
        // line 888
        if ($this->getAttribute(($context["errors"] ?? null), "state", array())) {
            // line 889
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "state", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 891
        echo "                        <input type=\"hidden\" name=\"state_selection\" id=\"state_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "state", array()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group has-feedback";
        // line 893
        echo (($this->getAttribute(($context["errors"] ?? null), "city", array())) ? (" has-error") : (""));
        echo "\">
                        <select class=\"form-control\" name=\"city\" id=\"city\">
                            <option>Please select a city...</option>
                        </select>
                        ";
        // line 897
        if ($this->getAttribute(($context["errors"] ?? null), "city", array())) {
            // line 898
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "city", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 900
        echo "                        <input type=\"hidden\" name=\"city_selection\" id=\"city_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "city", array()), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group has-feedback";
        // line 902
        echo (($this->getAttribute(($context["errors"] ?? null), "area", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"area\" id=\"area\" class=\"form-control\" value=\"";
        // line 903
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "area", array()), "html", null, true);
        echo "\" onfocus=\"setCity()\" placeholder=\"Please enter area name here\">
                        <span class=\"glyphicon glyphicon-map-marker form-control-feedback\"></span>
                        ";
        // line 905
        if ($this->getAttribute(($context["errors"] ?? null), "area", array())) {
            // line 906
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "area", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 908
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 909
        echo (($this->getAttribute(($context["errors"] ?? null), "streetName", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"streetName\" id=\"streetName\" class=\"form-control\" value=\"";
        // line 910
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "streetName", array()), "html", null, true);
        echo "\" placeholder=\"Street Name (optional)\"/>
                        <span class=\"glyphicon glyphicon-road form-control-feedback\"></span>
                        ";
        // line 912
        if ($this->getAttribute(($context["errors"] ?? null), "streetName", array())) {
            // line 913
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "streetName", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 915
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 916
        echo (($this->getAttribute(($context["errors"] ?? null), "streetNumber", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"streetNumber\" id=\"streetNumber\" class=\"form-control\" value=\"";
        // line 917
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "streetNumber", array()), "html", null, true);
        echo "\" placeholder=\"Street Number (optional)\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        ";
        // line 919
        if ($this->getAttribute(($context["errors"] ?? null), "streetNumber", array())) {
            // line 920
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "streetNumber", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 922
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 923
        echo (($this->getAttribute(($context["errors"] ?? null), "buildingName", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"buildingName\" id=\"buildingName\" class=\"form-control\" value=\"";
        // line 924
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "buildingName", array()), "html", null, true);
        echo "\" placeholder=\"Building Name (optional)\"/>
                        <span class=\"fa fa-building form-control-feedback\"></span>
                        ";
        // line 926
        if ($this->getAttribute(($context["errors"] ?? null), "buildingName", array())) {
            // line 927
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "buildingName", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 929
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 930
        echo (($this->getAttribute(($context["errors"] ?? null), "buildingNumber", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"buildingNumber\" id=\"buildingNumber\" class=\"form-control\" value=\"";
        // line 931
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "buildingNumber", array()), "html", null, true);
        echo "\" placeholder=\"Building Number (optional)\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        ";
        // line 933
        if ($this->getAttribute(($context["errors"] ?? null), "buildingNumber", array())) {
            // line 934
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "buildingNumber", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 936
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 937
        echo (($this->getAttribute(($context["errors"] ?? null), "apartFloor", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"apartFloor\" id=\"apartFloor\" class=\"form-control\" value=\"";
        // line 938
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "apartFloor", array()), "html", null, true);
        echo "\" placeholder=\"Apartment & Floor Number (optional)\"/>
                        <span class=\"fa fa-home form-control-feedback\"></span>
                        ";
        // line 940
        if ($this->getAttribute(($context["errors"] ?? null), "apartmentFloor", array())) {
            // line 941
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "apartmentFloor", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 943
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 944
        echo (($this->getAttribute(($context["errors"] ?? null), "pobox", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"pobox\" id=\"pobox\" class=\"form-control\" value=\"";
        // line 945
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "pobox", array()), "html", null, true);
        echo "\" placeholder=\"P.O.Box & Registered City (optional)\"/>
                        <span class=\"fa fa-inbox form-control-feedback\"></span>
                        ";
        // line 947
        if ($this->getAttribute(($context["errors"] ?? null), "pobox", array())) {
            // line 948
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "pobox", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 950
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 951
        echo (($this->getAttribute(($context["errors"] ?? null), "landmark", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"landmark\" id=\"landmark\" class=\"form-control\" value=\"";
        // line 952
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "landmark", array()), "html", null, true);
        echo "\" placeholder=\"Nearest Landmark (optional)\"/>
                        <span class=\"fa fa-bookmark form-control-feedback\"></span>
                        ";
        // line 954
        if ($this->getAttribute(($context["errors"] ?? null), "landmark", array())) {
            // line 955
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "landmark", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 957
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 958
        echo (($this->getAttribute(($context["errors"] ?? null), "landline", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"tel\" name=\"landline\" id=\"landline\" class=\"form-control\" value=\"";
        // line 959
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "landline", array()), "html", null, true);
        echo "\" placeholder=\"Telephone Number: Landline (optional)\"/>
                        <span class=\"fa fa-phone form-control-feedback\"></span>
                        ";
        // line 961
        if ($this->getAttribute(($context["errors"] ?? null), "landline", array())) {
            // line 962
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "landline", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 964
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 965
        echo (($this->getAttribute(($context["errors"] ?? null), "notes", array())) ? (" has-error") : (""));
        echo "\">
                        <textarea id=\"notes\" name=\"notes\" class=\"form-control\" placeholder=\"Any additional notes (optional)\">";
        // line 966
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "notes", array()), "html", null, true);
        echo "</textarea>
                        <span class=\"fa fa-pencil form-control-feedback\"></span>
                        ";
        // line 968
        if ($this->getAttribute(($context["errors"] ?? null), "notes", array())) {
            // line 969
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "notes", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 971
        echo "                    </div>
                </div>
        </div>
        <h3 style=\"background: #3c8dbc; border: #000000; \">Add a new address</h3>
        <div id=\"SEC3\" class=\"register-box-body\">
            Details
        </div>
    </div>
</form>
    ";
        // line 981
        echo "    ";
        // line 982
        echo "        ";
        // line 983
        echo "            ";
        // line 984
        echo "            ";
        // line 985
        echo "                ";
        // line 986
        echo "                ";
        // line 987
        echo "                ";
        // line 988
        echo "                    ";
        // line 989
        echo "                ";
        // line 990
        echo "            ";
        // line 991
        echo "        ";
        // line 992
        echo "    ";
        // line 993
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "auth/HR/SinglePage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2761 => 993,  2759 => 992,  2757 => 991,  2755 => 990,  2753 => 989,  2751 => 988,  2749 => 987,  2747 => 986,  2745 => 985,  2743 => 984,  2741 => 983,  2739 => 982,  2737 => 981,  2726 => 971,  2720 => 969,  2718 => 968,  2713 => 966,  2709 => 965,  2706 => 964,  2700 => 962,  2698 => 961,  2693 => 959,  2689 => 958,  2686 => 957,  2680 => 955,  2678 => 954,  2673 => 952,  2669 => 951,  2666 => 950,  2660 => 948,  2658 => 947,  2653 => 945,  2649 => 944,  2646 => 943,  2640 => 941,  2638 => 940,  2633 => 938,  2629 => 937,  2626 => 936,  2620 => 934,  2618 => 933,  2613 => 931,  2609 => 930,  2606 => 929,  2600 => 927,  2598 => 926,  2593 => 924,  2589 => 923,  2586 => 922,  2580 => 920,  2578 => 919,  2573 => 917,  2569 => 916,  2566 => 915,  2560 => 913,  2558 => 912,  2553 => 910,  2549 => 909,  2546 => 908,  2540 => 906,  2538 => 905,  2533 => 903,  2529 => 902,  2523 => 900,  2517 => 898,  2515 => 897,  2508 => 893,  2502 => 891,  2496 => 889,  2494 => 888,  2487 => 884,  2484 => 883,  2478 => 881,  2476 => 880,  2473 => 879,  2458 => 877,  2454 => 876,  2448 => 873,  2445 => 872,  2439 => 870,  2437 => 869,  2432 => 867,  2428 => 866,  2422 => 862,  2416 => 860,  2414 => 859,  2409 => 857,  2405 => 856,  2402 => 855,  2396 => 853,  2394 => 852,  2389 => 850,  2385 => 849,  2382 => 848,  2376 => 846,  2374 => 845,  2369 => 843,  2365 => 842,  2362 => 841,  2356 => 839,  2354 => 838,  2349 => 836,  2345 => 835,  2342 => 834,  2336 => 832,  2334 => 831,  2329 => 829,  2325 => 828,  2322 => 827,  2316 => 825,  2314 => 824,  2309 => 822,  2305 => 821,  2302 => 820,  2296 => 818,  2294 => 817,  2289 => 815,  2285 => 814,  2282 => 813,  2276 => 811,  2274 => 810,  2269 => 808,  2265 => 807,  2262 => 806,  2256 => 804,  2254 => 803,  2249 => 801,  2245 => 800,  2242 => 799,  2236 => 797,  2234 => 796,  2229 => 794,  2225 => 793,  2219 => 791,  2213 => 789,  2211 => 788,  2204 => 784,  2198 => 782,  2192 => 780,  2190 => 779,  2183 => 775,  2180 => 774,  2174 => 772,  2172 => 771,  2169 => 770,  2154 => 768,  2150 => 767,  2144 => 764,  2141 => 763,  2135 => 761,  2133 => 760,  2128 => 758,  2124 => 757,  2118 => 753,  2112 => 751,  2110 => 750,  2105 => 748,  2101 => 747,  2098 => 746,  2092 => 744,  2090 => 743,  2085 => 741,  2081 => 740,  2078 => 739,  2072 => 737,  2070 => 736,  2065 => 734,  2061 => 733,  2058 => 732,  2052 => 730,  2050 => 729,  2045 => 727,  2041 => 726,  2038 => 725,  2032 => 723,  2030 => 722,  2025 => 720,  2021 => 719,  2018 => 718,  2012 => 716,  2010 => 715,  2005 => 713,  2001 => 712,  1998 => 711,  1992 => 709,  1990 => 708,  1985 => 706,  1981 => 705,  1978 => 704,  1972 => 702,  1970 => 701,  1965 => 699,  1961 => 698,  1958 => 697,  1952 => 695,  1950 => 694,  1945 => 692,  1941 => 691,  1938 => 690,  1932 => 688,  1930 => 687,  1925 => 685,  1921 => 684,  1915 => 682,  1909 => 680,  1907 => 679,  1900 => 675,  1894 => 673,  1888 => 671,  1886 => 670,  1879 => 666,  1876 => 665,  1870 => 663,  1868 => 662,  1865 => 661,  1850 => 659,  1846 => 658,  1840 => 655,  1837 => 654,  1831 => 652,  1829 => 651,  1824 => 649,  1820 => 648,  1815 => 645,  1809 => 643,  1807 => 642,  1803 => 641,  1795 => 638,  1786 => 634,  1777 => 630,  1771 => 627,  1766 => 624,  1762 => 622,  1756 => 618,  1750 => 616,  1748 => 615,  1741 => 613,  1735 => 612,  1729 => 611,  1723 => 610,  1717 => 609,  1711 => 608,  1704 => 604,  1701 => 603,  1695 => 601,  1693 => 600,  1689 => 599,  1684 => 597,  1681 => 596,  1675 => 594,  1673 => 593,  1669 => 592,  1663 => 589,  1659 => 587,  1653 => 585,  1651 => 584,  1648 => 583,  1641 => 580,  1634 => 578,  1627 => 576,  1620 => 574,  1613 => 572,  1605 => 567,  1600 => 564,  1594 => 562,  1592 => 561,  1588 => 560,  1583 => 558,  1580 => 557,  1574 => 555,  1572 => 554,  1568 => 553,  1563 => 551,  1560 => 550,  1554 => 548,  1552 => 547,  1548 => 546,  1543 => 544,  1540 => 543,  1534 => 541,  1532 => 540,  1528 => 539,  1523 => 537,  1519 => 535,  1513 => 533,  1511 => 532,  1508 => 531,  1493 => 529,  1489 => 528,  1482 => 524,  1470 => 519,  1466 => 517,  1460 => 515,  1458 => 514,  1454 => 513,  1449 => 511,  1446 => 510,  1440 => 508,  1438 => 507,  1434 => 506,  1429 => 504,  1426 => 503,  1420 => 501,  1418 => 500,  1414 => 499,  1409 => 497,  1406 => 496,  1400 => 494,  1398 => 493,  1394 => 492,  1389 => 490,  1385 => 488,  1379 => 486,  1377 => 485,  1374 => 484,  1359 => 482,  1355 => 481,  1348 => 477,  1336 => 472,  1332 => 470,  1326 => 468,  1324 => 467,  1320 => 466,  1315 => 464,  1312 => 463,  1306 => 461,  1304 => 460,  1300 => 459,  1295 => 457,  1292 => 456,  1286 => 454,  1284 => 453,  1280 => 452,  1275 => 450,  1272 => 449,  1266 => 447,  1264 => 446,  1260 => 445,  1255 => 443,  1251 => 441,  1245 => 439,  1243 => 438,  1240 => 437,  1225 => 435,  1221 => 434,  1214 => 430,  1202 => 425,  1198 => 423,  1192 => 421,  1190 => 420,  1186 => 419,  1181 => 417,  1178 => 416,  1172 => 414,  1170 => 413,  1166 => 412,  1161 => 410,  1158 => 409,  1152 => 407,  1150 => 406,  1146 => 405,  1141 => 403,  1138 => 402,  1132 => 400,  1130 => 399,  1126 => 398,  1121 => 396,  1117 => 394,  1111 => 392,  1109 => 391,  1106 => 390,  1091 => 388,  1087 => 387,  1080 => 383,  1068 => 378,  1064 => 376,  1058 => 374,  1056 => 373,  1052 => 372,  1047 => 370,  1044 => 369,  1038 => 367,  1036 => 366,  1032 => 365,  1027 => 363,  1024 => 362,  1018 => 360,  1016 => 359,  1012 => 358,  1007 => 356,  1004 => 355,  998 => 353,  996 => 352,  992 => 351,  987 => 349,  983 => 347,  977 => 345,  975 => 344,  972 => 343,  957 => 341,  953 => 340,  946 => 336,  934 => 331,  930 => 329,  924 => 327,  922 => 326,  918 => 325,  913 => 323,  910 => 322,  904 => 320,  902 => 319,  898 => 318,  893 => 316,  890 => 315,  884 => 313,  882 => 312,  878 => 311,  873 => 309,  870 => 308,  864 => 306,  862 => 305,  858 => 304,  853 => 302,  849 => 300,  843 => 298,  841 => 297,  838 => 296,  823 => 294,  819 => 293,  812 => 289,  800 => 284,  796 => 282,  790 => 280,  788 => 279,  784 => 278,  779 => 276,  776 => 275,  770 => 273,  768 => 272,  764 => 271,  759 => 269,  756 => 268,  750 => 266,  748 => 265,  744 => 264,  739 => 262,  736 => 261,  730 => 259,  728 => 258,  724 => 257,  719 => 255,  715 => 253,  709 => 251,  707 => 250,  704 => 249,  689 => 247,  685 => 246,  678 => 242,  666 => 237,  662 => 235,  656 => 233,  654 => 232,  650 => 231,  645 => 229,  642 => 228,  636 => 226,  634 => 225,  630 => 224,  625 => 222,  622 => 221,  616 => 219,  614 => 218,  610 => 217,  605 => 215,  602 => 214,  596 => 212,  594 => 211,  590 => 210,  585 => 208,  581 => 206,  575 => 204,  573 => 203,  570 => 202,  555 => 200,  551 => 199,  544 => 195,  532 => 190,  528 => 188,  522 => 186,  520 => 185,  516 => 184,  511 => 182,  508 => 181,  502 => 179,  500 => 178,  496 => 177,  491 => 175,  488 => 174,  482 => 172,  480 => 171,  476 => 170,  471 => 168,  468 => 167,  462 => 165,  460 => 164,  456 => 163,  451 => 161,  447 => 159,  441 => 157,  439 => 156,  436 => 155,  421 => 153,  417 => 152,  410 => 148,  398 => 143,  394 => 141,  388 => 139,  386 => 138,  382 => 137,  377 => 135,  374 => 134,  368 => 132,  366 => 131,  362 => 130,  357 => 128,  354 => 127,  348 => 125,  346 => 124,  342 => 123,  337 => 121,  334 => 120,  328 => 118,  326 => 117,  322 => 116,  317 => 114,  313 => 112,  307 => 110,  305 => 109,  302 => 108,  287 => 106,  283 => 105,  276 => 101,  264 => 96,  254 => 88,  248 => 86,  246 => 85,  241 => 83,  236 => 81,  233 => 80,  227 => 78,  225 => 77,  220 => 75,  211 => 69,  208 => 68,  202 => 66,  200 => 65,  197 => 64,  182 => 62,  178 => 61,  171 => 57,  168 => 56,  162 => 54,  160 => 53,  153 => 51,  146 => 49,  141 => 47,  138 => 46,  132 => 44,  130 => 43,  125 => 41,  120 => 39,  117 => 38,  111 => 36,  109 => 35,  104 => 33,  99 => 31,  96 => 30,  90 => 28,  88 => 27,  83 => 25,  78 => 23,  75 => 22,  69 => 20,  67 => 19,  62 => 17,  57 => 15,  53 => 13,  47 => 10,  44 => 9,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
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
{% block title %}Add Applicant Wizard{% endblock %}

{% block bodyTags %}
    hold-transition skin-blue sidebar-collapse sidebar-mini
{% endblock %}


{% block contents %}
<form action=\"{{ path_for('HR.NewApplicant') }}\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\" >
    <div id=\"accordion\">
        {# TODO: Change color of tag according to theme color #}
        <h3 style=\"background: #3c8dbc; border: #000000; \">Applicant</h3>
        <div id=\"SEC1\" class=\"register-box-body\">
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
                <label for=\"date-picker\">Date of Birth: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
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
                <label for=\"profilePic\">Photo: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                <input type=\"file\" id=\"profilePic\" name=\"profilepic\" value=\"{{ old.profilepic }}\" class=\"form-control-static\">
                <p class=\"help-block\"><small><i>File must be *.jpg, *.jpeg, *.png, *.gif, or *.bmb and < 3MBs</i></small></p>
                {% if errors.profilepic %}
                    <span class=\"help-block\">{{ errors.profilepic | first }}</span>
                {% endif %}
            </div>
            <div id=\"newAttachment\" class=\"form-group\">
                <label for=\"help-me\">Additional Attachments:</label>
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
            <div class=\"form-group has-feedback{{ errors.visa ? ' has-error' : '' }}\">
                    <label for=\"inputvisa\">Current Visa Status: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                <br/>

                <label for=\"employee_residence\">Employee Residency</label>
                    <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"employee_residence\" value=\"Employee Residence\" {% if old.visa == 'Employee Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;
                <label for=\"family_residence\">Family Residency</label>
                    <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"family_residence\" value=\"Family Residence\" {% if old.visa == 'Family Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;
                <label for=\"visit\">Visit Visa</label>
                    <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"visit\" value=\"Visit\" {% if old.visa == 'Visit' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;
                <label for=\"tourist\">Tourist Visa</label>
                    <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"tourist\" value=\"Tourist\" {% if old.visa == 'Tourist' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;
                <label for=\"expired\">Expired Visa</label>
                    <input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"expired\" value=\"Expired\" {% if old.visa == 'Expired' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;

                {#<label for=\"investor_residence\">Investor Residency</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"investor_residence\" value=\"Investor Residence\" {% if old.visa == 'Investor Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"maid_residence\">Maid Residency</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"maid_residence\" value=\"Maid Residence\" {% if old.visa == 'Maid Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"relative_residence\">Investor Residency</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"relative_residence\" value=\"Relative Residence\" {% if old.visa == 'Relative Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"student_residence\">Investor Residence</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"student_residence\" value=\"Student Residence\" {% if old.visa == 'Student Residence' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"mission\">Mission Visa</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"mission\" value=\"Mission\" {% if old.visa == 'Mission' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;<label for=\"multiple_entry\">Multiple Entry Visa</label><input type=\"radio\" class=\"radio-inline\" name=\"visa\" id=\"multiple_entry\" value=\"Multiple Entry\" {% if old.visa == 'Multiple Entry' %}checked=\"checked\"{% endif %} /> &nbsp; &nbsp;#}

                {% if errors.visa %}
                    <span class=\"help-block\">{{ errors.visa | first }}</span>
                {% endif %}
            </div>
            <br/>
            <div class=\"form-group has-feedback{{ errors.visa_age ? ' has-error' : '' }}\">
                <label for=\"visa_age\">Visa Age: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                <span class=\"help-block\"><small><i>Time since the first issuance of visa from current employer</i></small></span>
                <input type=\"text\" class=\"form-control\" name=\"visa_age\" id=\"visa_age\" placeholder=\"Two years ...\" value=\"{{ old.visa_age ? old.visa_age : '' }}\" />&nbsp;
                {% if errors.visa_age %}
                    <span class=\"help-block\">{{ errors.visa_age | first }}</span>
                {% endif %}
            </div>
            <div class=\"form-group has-feedback{{ errors.notice ? ' has-error' : '' }}\">
                <label for=\"notice\">Required Notice Period:</label>
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
            <div class=\"form-group has-feedback\">
                <input type=\"submit\" name=\"submit\" id=\"submitApplicant\" onclick=\"saveApplicant()\" value=\"Save & Continue\"/>
            </div>
            {{ csrf.field | raw }}
        {#</form>#}
        </div>
        <h3 style=\"background: #3c8dbc; border: #000000; \">Addresses</h3>
        <div id=\"SEC2\" class=\"register-box-body\">
            <div class=\"form-group has-feedback{{ errors.address_title ? ' has-error' : '' }}\">
                <label>Address Title: &nbsp; &nbsp;</label>
                <label>
                    <input type=\"radio\" name=\"address_title\" id=\"home\" value=\"Home\" {% if old.address_title == 'home' %}checked=\"checked\"{% endif %} onclick=\"homeAddress()\"/>&nbsp;
                    <span class=\"fa fa-home\"> Local Home Address&nbsp; &nbsp; </span>
                </label>
                <label>
                    <input type=\"radio\" name=\"address_title\" id=\"origin\" value=\"Origin\" {% if old.address_title == 'origin' %}checked=\"checked\"{% endif %} onclick=\"originAddress()\" /> &nbsp;
                    <span class=\"fa fa-plane\"> Origin Country Address &nbsp; &nbsp; </span>
                </label>
                <label>
                    <input type=\"radio\" name=\"address_title\" id=\"other\" value=\"other\" {% if old.address_title == old.otherName %}checked=\"checked\"{% endif %} onclick=\"otherAddress()\" /> &nbsp;
                    <span class=\"fa fa-building\"> Other Address &nbsp; &nbsp; </span>
                </label>
                    <input type=\"text\" name=\"otherName\" id=\"otherName\" onchange=\"typeOtherAddress()\" placeholder=\"Enter Address Title\" value=\"{{ old.otherName ? old.otherName : 'Other Address' }}\" />
                {% if errors.address_title %}
                    <span class=\"help-block\">{{ errors.address_title | first }}</span>
                {% endif %}
            </div>
                <div id=\"homeAddress\">
                    <h4>Local Home Address</h4>
                    <div class=\"form-group has-feedback{{ errors.homeMobile ? ' has-error' : '' }}\">
                        <input type=\"tel\" name=\"homeMobile\" id=\"homeMobile\" class=\"form-control\" value=\"{{ old.homeMobile }}\" placeholder=\"Telephone Number: Mobile\"/>
                        <span class=\"fa fa-mobile-phone form-control-feedback\"></span>
                        {% if errors.homeMobile %}
                            <span class=\"help-block\">{{ errors.homeMobile | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.homeCountry ? ' has-error' : '' }}\">
                        <select class=\"form-control\" name=\"homeCountry\" id=\"homeCountry\" onchange=\"getStates(this)\">
                            <option>Please select a country...</option>
                            {% for country in HR.countries %}
                                <option value=\"{{ country.id }}\" {% if country.id == old.homeCountry %}selected{% endif %}>{{ country.country_name | e }}</option>
                            {% endfor %}
                        </select>
                        {% if errors.homeCountry %}
                            <span class=\"help-block\">{{ errors.homeCountry | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.homeState ? ' has-error' : '' }}\">
                        <select class=\"form-control\" name=\"homeState\" id=\"homeState\" onchange=\"getCities(this)\">
                            <option>Please select a state...</option>
                        </select>
                        {% if errors.homeState %}
                            <span class=\"help-block\">{{ errors.homeState | first }}</span>
                        {% endif %}
                        <input type=\"hidden\" name=\"home_state_selection\" id=\"home_state_selection\" value=\"{{ old.state }}\">
                    </div>
                    <div class=\"form-group has-feedback{{ errors.city ? ' has-error' : '' }}\">
                        <select class=\"form-control\" name=\"city\" id=\"city\">
                            <option>Please select a city...</option>
                        </select>
                        {% if errors.city %}
                            <span class=\"help-block\">{{ errors.city | first }}</span>
                        {% endif %}
                        <input type=\"hidden\" name=\"city_selection\" id=\"city_selection\" value=\"{{ old.city }}\">
                    </div>
                    <div class=\"form-group has-feedback{{ errors.area ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"area\" id=\"area\" class=\"form-control\" value=\"{{ old.area }}\" onfocus=\"setCity()\" placeholder=\"Please enter area name here\">
                        <span class=\"glyphicon glyphicon-map-marker form-control-feedback\"></span>
                        {% if errors.area %}
                            <span class=\"help-block\">{{ errors.area | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.streetName ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"streetName\" id=\"streetName\" class=\"form-control\" value=\"{{ old.streetName }}\" placeholder=\"Street Name (optional)\"/>
                        <span class=\"glyphicon glyphicon-road form-control-feedback\"></span>
                        {% if errors.streetName %}
                            <span class=\"help-block\">{{ errors.streetName | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.streetNumber ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"streetNumber\" id=\"streetNumber\" class=\"form-control\" value=\"{{ old.streetNumber }}\" placeholder=\"Street Number (optional)\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        {% if errors.streetNumber %}
                            <span class=\"help-block\">{{ errors.streetNumber | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.buildingName ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"buildingName\" id=\"buildingName\" class=\"form-control\" value=\"{{ old.buildingName }}\" placeholder=\"Building Name (optional)\"/>
                        <span class=\"fa fa-building form-control-feedback\"></span>
                        {% if errors.buildingName %}
                            <span class=\"help-block\">{{ errors.buildingName | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.buildingNumber ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"buildingNumber\" id=\"buildingNumber\" class=\"form-control\" value=\"{{ old.buildingNumber }}\" placeholder=\"Building Number (optional)\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        {% if errors.buildingNumber %}
                            <span class=\"help-block\">{{ errors.buildingNumber | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.apartFloor ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"apartFloor\" id=\"apartFloor\" class=\"form-control\" value=\"{{ old.apartFloor }}\" placeholder=\"Apartment & Floor Number (optional)\"/>
                        <span class=\"fa fa-home form-control-feedback\"></span>
                        {% if errors.apartmentFloor %}
                            <span class=\"help-block\">{{ errors.apartmentFloor | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.pobox ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"pobox\" id=\"pobox\" class=\"form-control\" value=\"{{ old.pobox }}\" placeholder=\"P.O.Box & Registered City (optional)\"/>
                        <span class=\"fa fa-inbox form-control-feedback\"></span>
                        {% if errors.pobox %}
                            <span class=\"help-block\">{{ errors.pobox | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.landmark ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"landmark\" id=\"landmark\" class=\"form-control\" value=\"{{ old.landmark }}\" placeholder=\"Nearest Landmark (optional)\"/>
                        <span class=\"fa fa-bookmark form-control-feedback\"></span>
                        {% if errors.landmark %}
                            <span class=\"help-block\">{{ errors.landmark | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.landline ? ' has-error' : '' }}\">
                        <input type=\"tel\" name=\"landline\" id=\"landline\" class=\"form-control\" value=\"{{ old.landline }}\" placeholder=\"Telephone Number: Landline (optional)\"/>
                        <span class=\"fa fa-phone form-control-feedback\"></span>
                        {% if errors.landline %}
                            <span class=\"help-block\">{{ errors.landline | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.notes ? ' has-error' : '' }}\">
                        <textarea id=\"notes\" name=\"notes\" class=\"form-control\" placeholder=\"Any additional notes (optional)\">{{ old.notes }}</textarea>
                        <span class=\"fa fa-pencil form-control-feedback\"></span>
                        {% if errors.notes %}
                            <span class=\"help-block\">{{ errors.notes | first }}</span>
                        {% endif %}
                    </div>
                </div>
                <div id=\"originAddress\">
                    <h4 id=\"originAddress\">Origin Country Address</h4>
                    <div class=\"form-group has-feedback{{ errors.mobile ? ' has-error' : '' }}\">
                        <input type=\"tel\" name=\"mobile\" id=\"mobile\" class=\"form-control\" value=\"{{ old.mobile }}\" placeholder=\"Telephone Number: Mobile\"/>
                        <span class=\"fa fa-mobile-phone form-control-feedback\"></span>
                        {% if errors.mobile %}
                            <span class=\"help-block\">{{ errors.mobile | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.country ? ' has-error' : '' }}\">
                        <select class=\"form-control\" name=\"country\" id=\"country\" onchange=\"getStates(this)\">
                            <option>Please select a country...</option>
                            {% for country in HR.countries %}
                                <option value=\"{{ country.id }}\" {% if country.id == old.country %}selected{% endif %}>{{ country.country_name | e }}</option>
                            {% endfor %}
                        </select>
                        {% if errors.country %}
                            <span class=\"help-block\">{{ errors.country | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.state ? ' has-error' : '' }}\">
                        <select class=\"form-control\" name=\"state\" id=\"state\" onchange=\"getCities(this)\">
                            <option>Please select a state...</option>
                        </select>
                        {% if errors.state %}
                            <span class=\"help-block\">{{ errors.state | first }}</span>
                        {% endif %}
                        <input type=\"hidden\" name=\"state_selection\" id=\"state_selection\" value=\"{{ old.state }}\">
                    </div>
                    <div class=\"form-group has-feedback{{ errors.city ? ' has-error' : '' }}\">
                        <select class=\"form-control\" name=\"city\" id=\"city\">
                            <option>Please select a city...</option>
                        </select>
                        {% if errors.city %}
                            <span class=\"help-block\">{{ errors.city | first }}</span>
                        {% endif %}
                        <input type=\"hidden\" name=\"city_selection\" id=\"city_selection\" value=\"{{ old.city }}\">
                    </div>
                    <div class=\"form-group has-feedback{{ errors.area ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"area\" id=\"area\" class=\"form-control\" value=\"{{ old.area }}\" onfocus=\"setCity()\" placeholder=\"Please enter area name here\">
                        <span class=\"glyphicon glyphicon-map-marker form-control-feedback\"></span>
                        {% if errors.area %}
                            <span class=\"help-block\">{{ errors.area | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.streetName ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"streetName\" id=\"streetName\" class=\"form-control\" value=\"{{ old.streetName }}\" placeholder=\"Street Name (optional)\"/>
                        <span class=\"glyphicon glyphicon-road form-control-feedback\"></span>
                        {% if errors.streetName %}
                            <span class=\"help-block\">{{ errors.streetName | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.streetNumber ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"streetNumber\" id=\"streetNumber\" class=\"form-control\" value=\"{{ old.streetNumber }}\" placeholder=\"Street Number (optional)\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        {% if errors.streetNumber %}
                            <span class=\"help-block\">{{ errors.streetNumber | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.buildingName ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"buildingName\" id=\"buildingName\" class=\"form-control\" value=\"{{ old.buildingName }}\" placeholder=\"Building Name (optional)\"/>
                        <span class=\"fa fa-building form-control-feedback\"></span>
                        {% if errors.buildingName %}
                            <span class=\"help-block\">{{ errors.buildingName | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.buildingNumber ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"buildingNumber\" id=\"buildingNumber\" class=\"form-control\" value=\"{{ old.buildingNumber }}\" placeholder=\"Building Number (optional)\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        {% if errors.buildingNumber %}
                            <span class=\"help-block\">{{ errors.buildingNumber | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.apartFloor ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"apartFloor\" id=\"apartFloor\" class=\"form-control\" value=\"{{ old.apartFloor }}\" placeholder=\"Apartment & Floor Number (optional)\"/>
                        <span class=\"fa fa-home form-control-feedback\"></span>
                        {% if errors.apartmentFloor %}
                            <span class=\"help-block\">{{ errors.apartmentFloor | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.pobox ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"pobox\" id=\"pobox\" class=\"form-control\" value=\"{{ old.pobox }}\" placeholder=\"P.O.Box & Registered City (optional)\"/>
                        <span class=\"fa fa-inbox form-control-feedback\"></span>
                        {% if errors.pobox %}
                            <span class=\"help-block\">{{ errors.pobox | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.landmark ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"landmark\" id=\"landmark\" class=\"form-control\" value=\"{{ old.landmark }}\" placeholder=\"Nearest Landmark (optional)\"/>
                        <span class=\"fa fa-bookmark form-control-feedback\"></span>
                        {% if errors.landmark %}
                            <span class=\"help-block\">{{ errors.landmark | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.landline ? ' has-error' : '' }}\">
                        <input type=\"tel\" name=\"landline\" id=\"landline\" class=\"form-control\" value=\"{{ old.landline }}\" placeholder=\"Telephone Number: Landline (optional)\"/>
                        <span class=\"fa fa-phone form-control-feedback\"></span>
                        {% if errors.landline %}
                            <span class=\"help-block\">{{ errors.landline | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.notes ? ' has-error' : '' }}\">
                        <textarea id=\"notes\" name=\"notes\" class=\"form-control\" placeholder=\"Any additional notes (optional)\">{{ old.notes }}</textarea>
                        <span class=\"fa fa-pencil form-control-feedback\"></span>
                        {% if errors.notes %}
                            <span class=\"help-block\">{{ errors.notes | first }}</span>
                        {% endif %}
                    </div>
                    </div>
                <div id=\"otherAddress\">
                    <h4>Other Address</h4>
                    <div class=\"form-group has-feedback{{ errors.mobile ? ' has-error' : '' }}\">
                        <input type=\"tel\" name=\"mobile\" id=\"mobile\" class=\"form-control\" value=\"{{ old.mobile }}\" placeholder=\"Telephone Number: Mobile\"/>
                        <span class=\"fa fa-mobile-phone form-control-feedback\"></span>
                        {% if errors.mobile %}
                            <span class=\"help-block\">{{ errors.mobile | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.country ? ' has-error' : '' }}\">
                        <select class=\"form-control\" name=\"country\" id=\"country\" onchange=\"getStates(this)\">
                            <option>Please select a country...</option>
                            {% for country in HR.countries %}
                                <option value=\"{{ country.id }}\" {% if country.id == old.country %}selected{% endif %}>{{ country.country_name | e }}</option>
                            {% endfor %}
                        </select>
                        {% if errors.country %}
                            <span class=\"help-block\">{{ errors.country | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.state ? ' has-error' : '' }}\">
                        <select class=\"form-control\" name=\"state\" id=\"state\" onchange=\"getCities(this)\">
                            <option>Please select a state...</option>
                        </select>
                        {% if errors.state %}
                            <span class=\"help-block\">{{ errors.state | first }}</span>
                        {% endif %}
                        <input type=\"hidden\" name=\"state_selection\" id=\"state_selection\" value=\"{{ old.state }}\">
                    </div>
                    <div class=\"form-group has-feedback{{ errors.city ? ' has-error' : '' }}\">
                        <select class=\"form-control\" name=\"city\" id=\"city\">
                            <option>Please select a city...</option>
                        </select>
                        {% if errors.city %}
                            <span class=\"help-block\">{{ errors.city | first }}</span>
                        {% endif %}
                        <input type=\"hidden\" name=\"city_selection\" id=\"city_selection\" value=\"{{ old.city }}\">
                    </div>
                    <div class=\"form-group has-feedback{{ errors.area ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"area\" id=\"area\" class=\"form-control\" value=\"{{ old.area }}\" onfocus=\"setCity()\" placeholder=\"Please enter area name here\">
                        <span class=\"glyphicon glyphicon-map-marker form-control-feedback\"></span>
                        {% if errors.area %}
                            <span class=\"help-block\">{{ errors.area | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.streetName ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"streetName\" id=\"streetName\" class=\"form-control\" value=\"{{ old.streetName }}\" placeholder=\"Street Name (optional)\"/>
                        <span class=\"glyphicon glyphicon-road form-control-feedback\"></span>
                        {% if errors.streetName %}
                            <span class=\"help-block\">{{ errors.streetName | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.streetNumber ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"streetNumber\" id=\"streetNumber\" class=\"form-control\" value=\"{{ old.streetNumber }}\" placeholder=\"Street Number (optional)\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        {% if errors.streetNumber %}
                            <span class=\"help-block\">{{ errors.streetNumber | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.buildingName ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"buildingName\" id=\"buildingName\" class=\"form-control\" value=\"{{ old.buildingName }}\" placeholder=\"Building Name (optional)\"/>
                        <span class=\"fa fa-building form-control-feedback\"></span>
                        {% if errors.buildingName %}
                            <span class=\"help-block\">{{ errors.buildingName | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.buildingNumber ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"buildingNumber\" id=\"buildingNumber\" class=\"form-control\" value=\"{{ old.buildingNumber }}\" placeholder=\"Building Number (optional)\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        {% if errors.buildingNumber %}
                            <span class=\"help-block\">{{ errors.buildingNumber | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.apartFloor ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"apartFloor\" id=\"apartFloor\" class=\"form-control\" value=\"{{ old.apartFloor }}\" placeholder=\"Apartment & Floor Number (optional)\"/>
                        <span class=\"fa fa-home form-control-feedback\"></span>
                        {% if errors.apartmentFloor %}
                            <span class=\"help-block\">{{ errors.apartmentFloor | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.pobox ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"pobox\" id=\"pobox\" class=\"form-control\" value=\"{{ old.pobox }}\" placeholder=\"P.O.Box & Registered City (optional)\"/>
                        <span class=\"fa fa-inbox form-control-feedback\"></span>
                        {% if errors.pobox %}
                            <span class=\"help-block\">{{ errors.pobox | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.landmark ? ' has-error' : '' }}\">
                        <input type=\"text\" name=\"landmark\" id=\"landmark\" class=\"form-control\" value=\"{{ old.landmark }}\" placeholder=\"Nearest Landmark (optional)\"/>
                        <span class=\"fa fa-bookmark form-control-feedback\"></span>
                        {% if errors.landmark %}
                            <span class=\"help-block\">{{ errors.landmark | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.landline ? ' has-error' : '' }}\">
                        <input type=\"tel\" name=\"landline\" id=\"landline\" class=\"form-control\" value=\"{{ old.landline }}\" placeholder=\"Telephone Number: Landline (optional)\"/>
                        <span class=\"fa fa-phone form-control-feedback\"></span>
                        {% if errors.landline %}
                            <span class=\"help-block\">{{ errors.landline | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.notes ? ' has-error' : '' }}\">
                        <textarea id=\"notes\" name=\"notes\" class=\"form-control\" placeholder=\"Any additional notes (optional)\">{{ old.notes }}</textarea>
                        <span class=\"fa fa-pencil form-control-feedback\"></span>
                        {% if errors.notes %}
                            <span class=\"help-block\">{{ errors.notes | first }}</span>
                        {% endif %}
                    </div>
                </div>
        </div>
        <h3 style=\"background: #3c8dbc; border: #000000; \">Add a new address</h3>
        <div id=\"SEC3\" class=\"register-box-body\">
            Details
        </div>
    </div>
</form>
    {#<h3 style=\"background: black; border: #3c8dbc;>Details about this form goes here</h3>#}
    {#<div id=\"SEC3\" class=\"register-box-body\">#}
        {#<form action=\"{{ path_for('HR.NewSkill') }}\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\">#}
            {#&#123;&#35; TODO: decide on this form details &#35;&#125;#}
            {#<div class=\"form-group has-feedback{{ errors. ? ' has-error' : '' }}\">#}
                {#<input type=\"text\" name=\"\" id=\"\" class=\"form-control\" value=\"{{ old. }}\" placeholder=\"\"/>#}
                {#<span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>#}
                {#{% if errors. %}#}
                    {#<span class=\"help-block\">{{ errors. | first }}</span>#}
                {#{% endif %}#}
            {#</div>#}
        {#</form>#}
    {#</div>#}
</div>

{% endblock %}
", "auth/HR/SinglePage.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/HR/SinglePage.twig");
    }
}
