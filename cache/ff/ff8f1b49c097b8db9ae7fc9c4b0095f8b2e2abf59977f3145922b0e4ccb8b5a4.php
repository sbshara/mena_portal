<?php

/* auth/HR/SinglePage.twig */
class __TwigTemplate_906dc1df5c95ada9881446785061dc8d9c4cd0d7f6514d74ac3b0a7930fd2227 extends Twig_Template
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
                <label for=\"help-me\">Attachments:</label>
                <p class=\"help-block\" id=\"help-me\"><span><i>Attach CV, Passport Copy, VISA Copy, Educational Degree, or any other related documents<br/><mark>Remember to rename the files respectively</mark></i></span></p>
                <input type=\"hidden\" id=\"attachmentCounter\" name=\"attachmentCounter\" value=\"-1\">
                <input type=\"button\" id=\"add\" class=\"btn btn-xs\" onclick=\"showInput('divattachmentGroup', 'attachmentCounter')\" value=\"Add New\" title=\"Add new attachment field\"/>
                <input type=\"button\" id=\"remove\" class=\"btn btn-xs btn-danger\" onclick=\"hideInput('divattachmentGroup', 'attachmentCounter')\" value=\"Remove\" title=\"Removes the last item\" />
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
                <br />

                <div class=\"col-lg-4\">
                    <label>
                        <input type=\"checkbox\" name=\"home\" id=\"home\" ";
        // line 633
        if (($this->getAttribute(($context["old"] ?? null), "home", array()) == "true")) {
            echo "checked=\"checked\"";
        }
        echo " onclick=\"homeAddress()\"/>&nbsp;
                        <span class=\"fa fa-home\"> Local Home Address&nbsp; &nbsp; </span>
                    </label>
                    <div id=\"homeAddress\">
                        <h4 id=\"homeAddressTTL\">Local Home Address</h4>
                        <div class=\"form-group has-feedback";
        // line 638
        echo (($this->getAttribute(($context["errors"] ?? null), "homeMobile", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"tel\" name=\"homeMobile\" id=\"homeMobile\" class=\"form-control\" value=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "homeMobile", array()), "html", null, true);
        echo "\" placeholder=\"Telephone Number: Mobile\"/>
                            <span class=\"fa fa-mobile-phone form-control-feedback\"></span>
                            ";
        // line 641
        if ($this->getAttribute(($context["errors"] ?? null), "homeMobile", array())) {
            // line 642
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeMobile", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 644
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 645
        echo (($this->getAttribute(($context["errors"] ?? null), "homeCountry", array())) ? (" has-error") : (""));
        echo "\">
                            <select class=\"form-control\" name=\"homeCountry\" id=\"homeCountry\" onchange=\"getStates(this, 'homeState')\">
                                <option>Please select a country...</option>
                                ";
        // line 648
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 649
            echo "                                    <option value=\"";
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
        // line 651
        echo "                            </select>
                            ";
        // line 652
        if ($this->getAttribute(($context["errors"] ?? null), "homeCountry", array())) {
            // line 653
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeCountry", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 655
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 656
        echo (($this->getAttribute(($context["errors"] ?? null), "homeState", array())) ? (" has-error") : (""));
        echo "\">
                            <select class=\"form-control\" name=\"homeState\" id=\"homeState\" onchange=\"getCities(this, 'homeCity')\">
                                <option>Please select a state...</option>
                            </select>
                            ";
        // line 660
        if ($this->getAttribute(($context["errors"] ?? null), "homeState", array())) {
            // line 661
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeState", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 663
        echo "                            <input type=\"hidden\" name=\"homeState_selection\" id=\"homeState_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "homeState_selection", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group has-feedback";
        // line 665
        echo (($this->getAttribute(($context["errors"] ?? null), "homeCity", array())) ? (" has-error") : (""));
        echo "\">
                            <select class=\"form-control\" name=\"homeCity\" id=\"homeCity\" onchange=\"setCity(this)\">
                                <option>Please select a city...</option>
                            </select>
                            ";
        // line 669
        if ($this->getAttribute(($context["errors"] ?? null), "homeCity", array())) {
            // line 670
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeCity", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 672
        echo "                            <input type=\"hidden\" name=\"homeCity_selection\" id=\"homeCity_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "homeCity_selection", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group has-feedback";
        // line 674
        echo (($this->getAttribute(($context["errors"] ?? null), "homeArea", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"homeArea\" id=\"homeArea\" class=\"form-control\" value=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "homeArea", array()), "html", null, true);
        echo "\" onfocus=\"setCity()\" placeholder=\"Please enter area name here\">
                            <span class=\"glyphicon glyphicon-map-marker form-control-feedback\"></span>
                            ";
        // line 677
        if ($this->getAttribute(($context["errors"] ?? null), "homeArea", array())) {
            // line 678
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeArea", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 680
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 681
        echo (($this->getAttribute(($context["errors"] ?? null), "homeStreetName", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"homeStreetName\" id=\"homeStreetName\" class=\"form-control\" value=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "homeStreetName", array()), "html", null, true);
        echo "\" placeholder=\"Street Name (optional)\"/>
                            <span class=\"glyphicon glyphicon-road form-control-feedback\"></span>
                            ";
        // line 684
        if ($this->getAttribute(($context["errors"] ?? null), "homeStreetName", array())) {
            // line 685
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeStreetName", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 687
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 688
        echo (($this->getAttribute(($context["errors"] ?? null), "homeStreetNumber", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"homeStreetNumber\" id=\"homeStreetNumber\" class=\"form-control\" value=\"";
        // line 689
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "homeStreetNumber", array()), "html", null, true);
        echo "\" placeholder=\"Street Number (optional)\"/>
                            <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                            ";
        // line 691
        if ($this->getAttribute(($context["errors"] ?? null), "homeStreetNumber", array())) {
            // line 692
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeStreetNumber", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 694
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 695
        echo (($this->getAttribute(($context["errors"] ?? null), "homeBuildingName", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"homeBuildingName\" id=\"homeBildingName\" class=\"form-control\" value=\"";
        // line 696
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "homeBuildingName", array()), "html", null, true);
        echo "\" placeholder=\"Building Name (optional)\"/>
                            <span class=\"fa fa-building form-control-feedback\"></span>
                            ";
        // line 698
        if ($this->getAttribute(($context["errors"] ?? null), "homeBuildingName", array())) {
            // line 699
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeBuildingName", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 701
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 702
        echo (($this->getAttribute(($context["errors"] ?? null), "homeBuildingNumber", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"homeBuildingNumber\" id=\"homeBuildingNumber\" class=\"form-control\" value=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "homeBuildingNumber", array()), "html", null, true);
        echo "\" placeholder=\"Building Number (optional)\"/>
                            <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                            ";
        // line 705
        if ($this->getAttribute(($context["errors"] ?? null), "homeBuildingNumber", array())) {
            // line 706
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeBuildingNumber", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 708
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 709
        echo (($this->getAttribute(($context["errors"] ?? null), "homeApartFloor", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"homeApartFloor\" id=\"homeApartFloor\" class=\"form-control\" value=\"";
        // line 710
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "homeApartFloor", array()), "html", null, true);
        echo "\" placeholder=\"Apartment & Floor Number (optional)\"/>
                            <span class=\"fa fa-home form-control-feedback\"></span>
                            ";
        // line 712
        if ($this->getAttribute(($context["errors"] ?? null), "homeApartFloor", array())) {
            // line 713
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeApartFloor", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 715
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 716
        echo (($this->getAttribute(($context["errors"] ?? null), "homePobox", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"homePobox\" id=\"homePobox\" class=\"form-control\" value=\"";
        // line 717
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "homePobox", array()), "html", null, true);
        echo "\" placeholder=\"P.O.Box & Registered City (optional)\"/>
                            <span class=\"fa fa-inbox form-control-feedback\"></span>
                            ";
        // line 719
        if ($this->getAttribute(($context["errors"] ?? null), "homePobox", array())) {
            // line 720
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homePobox", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 722
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 723
        echo (($this->getAttribute(($context["errors"] ?? null), "homeLandline", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"tel\" name=\"homeLandline\" id=\"homeLandline\" class=\"form-control\" value=\"";
        // line 724
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "homeLandline", array()), "html", null, true);
        echo "\" placeholder=\"Telephone Number: Land-line (optional)\"/>
                            <span class=\"fa fa-phone form-control-feedback\"></span>
                            ";
        // line 726
        if ($this->getAttribute(($context["errors"] ?? null), "homeLandline", array())) {
            // line 727
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeLandline", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 729
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 730
        echo (($this->getAttribute(($context["errors"] ?? null), "homeLandmark", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"homeLandmark\" id=\"homeLandmark\" class=\"form-control\" value=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "homeLandmark", array()), "html", null, true);
        echo "\" placeholder=\"Nearest Landmark (optional)\"/>
                            <span class=\"fa fa-bookmark form-control-feedback\"></span>
                            ";
        // line 733
        if ($this->getAttribute(($context["errors"] ?? null), "homeLandmark", array())) {
            // line 734
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeLandmark", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 736
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 737
        echo (($this->getAttribute(($context["errors"] ?? null), "homeNotes", array())) ? (" has-error") : (""));
        echo "\">
                            <textarea id=\"homeNotes\" name=\"homeNotes\" class=\"form-control\" placeholder=\"Any additional notes (optional)\">";
        // line 738
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "homeNotes", array()), "html", null, true);
        echo "</textarea>
                            <span class=\"fa fa-pencil form-control-feedback\"></span>
                            ";
        // line 740
        if ($this->getAttribute(($context["errors"] ?? null), "homeNotes", array())) {
            // line 741
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "homeNotes", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 743
        echo "                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <label>
                        <input type=\"checkbox\" name=\"origin\" id=\"origin\" ";
        // line 748
        if (($this->getAttribute(($context["old"] ?? null), "origin", array()) == "true")) {
            echo "checked=\"checked\"";
        }
        echo " onclick=\"originAddress()\" /> &nbsp;
                        <span class=\"fa fa-plane\"> Origin Country Address &nbsp; &nbsp; </span>
                    </label>
                    <div id=\"originAddress\" aria-disabled=\"true\">
                        <h4 id=\"originAddressTTL\">Origin Country Address</h4>
                        <div class=\"form-group has-feedback";
        // line 753
        echo (($this->getAttribute(($context["errors"] ?? null), "originMobile", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"tel\" name=\"originMobile\" id=\"originMobile\" class=\"form-control\" value=\"";
        // line 754
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "originMobile", array()), "html", null, true);
        echo "\" placeholder=\"Telephone Number: Mobile\" required />
                            <span class=\"fa fa-mobile-phone form-control-feedback\"></span>
                            ";
        // line 756
        if ($this->getAttribute(($context["errors"] ?? null), "originMobile", array())) {
            // line 757
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "originMobile", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 759
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 760
        echo (($this->getAttribute(($context["errors"] ?? null), "originCountry", array())) ? (" has-error") : (""));
        echo "\">
                            <select class=\"form-control\" name=\"originCountry\" id=\"originCountry\" onchange=\"getStates(this, 'originState')\" required>
                                <option>Please select a country...</option>
                                ";
        // line 763
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 764
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "originCountry", array()))) {
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
        // line 766
        echo "                            </select>
                            ";
        // line 767
        if ($this->getAttribute(($context["errors"] ?? null), "originCountry", array())) {
            // line 768
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "originCountry", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 770
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 771
        echo (($this->getAttribute(($context["errors"] ?? null), "originState", array())) ? (" has-error") : (""));
        echo "\">
                            <select class=\"form-control\" name=\"originState\" id=\"originState\" onchange=\"getCities(this, 'originCity')\" required>
                                <option>Please select a state...</option>
                            </select>
                            ";
        // line 775
        if ($this->getAttribute(($context["errors"] ?? null), "originState", array())) {
            // line 776
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "originState", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 778
        echo "                            <input type=\"hidden\" name=\"originState_selection\" id=\"originState_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "originState_selection", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group has-feedback";
        // line 780
        echo (($this->getAttribute(($context["errors"] ?? null), "originCity", array())) ? (" has-error") : (""));
        echo "\">
                            <select class=\"form-control\" name=\"originCity\" id=\"originCity\" required onchange=\"setCity(this)\">
                                <option>Please select a city...</option>
                            </select>
                            ";
        // line 784
        if ($this->getAttribute(($context["errors"] ?? null), "originCity", array())) {
            // line 785
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "originCity", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 787
        echo "                            <input type=\"hidden\" name=\"originCity_selection\" id=\"originCity_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "originCity_selection", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group has-feedback";
        // line 789
        echo (($this->getAttribute(($context["errors"] ?? null), "originArea", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"originArea\" id=\"originArea\" class=\"form-control\" value=\"";
        // line 790
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "originArea", array()), "html", null, true);
        echo "\" onfocus=\"setCity()\" placeholder=\"Please enter area name here\" required />
                            <span class=\"glyphicon glyphicon-map-marker form-control-feedback\"></span>
                            ";
        // line 792
        if ($this->getAttribute(($context["errors"] ?? null), "originArea", array())) {
            // line 793
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "originArea", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 795
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 796
        echo (($this->getAttribute(($context["errors"] ?? null), "originStreetName", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"originStreetName\" id=\"originStreetName\" class=\"form-control\" value=\"";
        // line 797
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "originStreetName", array()), "html", null, true);
        echo "\" placeholder=\"Street Name (optional)\"/>
                            <span class=\"glyphicon glyphicon-road form-control-feedback\"></span>
                            ";
        // line 799
        if ($this->getAttribute(($context["errors"] ?? null), "originStreetName", array())) {
            // line 800
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "originStreetName", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 802
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 803
        echo (($this->getAttribute(($context["errors"] ?? null), "originStreetNumber", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"originStreetNumber\" id=\"originStreetNumber\" class=\"form-control\" value=\"";
        // line 804
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "originStreetNumber", array()), "html", null, true);
        echo "\" placeholder=\"Street Number (optional)\"/>
                            <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                            ";
        // line 806
        if ($this->getAttribute(($context["errors"] ?? null), "originStreetNumber", array())) {
            // line 807
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "originStreetNumber", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 809
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 810
        echo (($this->getAttribute(($context["errors"] ?? null), "originBuildingName", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"originBuildingName\" id=\"originBuildingName\" class=\"form-control\" value=\"";
        // line 811
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "originBuildingName", array()), "html", null, true);
        echo "\" placeholder=\"Building Name (optional)\"/>
                            <span class=\"fa fa-building form-control-feedback\"></span>
                            ";
        // line 813
        if ($this->getAttribute(($context["errors"] ?? null), "originBuildingName", array())) {
            // line 814
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "originBuildingName", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 816
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 817
        echo (($this->getAttribute(($context["errors"] ?? null), "originBuildingNumber", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"originBuildingNumber\" id=\"originBuildingNumber\" class=\"form-control\" value=\"";
        // line 818
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "originBuildingNumber", array()), "html", null, true);
        echo "\" placeholder=\"Building Number (optional)\"/>
                            <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                            ";
        // line 820
        if ($this->getAttribute(($context["errors"] ?? null), "originBuildingNumber", array())) {
            // line 821
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "originBuildingNumber", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 823
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 824
        echo (($this->getAttribute(($context["errors"] ?? null), "originApartFloor", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"originApartFloor\" id=\"originApartFloor\" class=\"form-control\" value=\"";
        // line 825
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "originApartFloor", array()), "html", null, true);
        echo "\" placeholder=\"Apartment & Floor Number (optional)\"/>
                            <span class=\"fa fa-home form-control-feedback\"></span>
                            ";
        // line 827
        if ($this->getAttribute(($context["errors"] ?? null), "originApartFloor", array())) {
            // line 828
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "originApartFloor", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 830
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 831
        echo (($this->getAttribute(($context["errors"] ?? null), "originPobox", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"originPobox\" id=\"originPobox\" class=\"form-control\" value=\"";
        // line 832
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "originPobox", array()), "html", null, true);
        echo "\" placeholder=\"P.O.Box & Registered City (optional)\"/>
                            <span class=\"fa fa-inbox form-control-feedback\"></span>
                            ";
        // line 834
        if ($this->getAttribute(($context["errors"] ?? null), "originPobox", array())) {
            // line 835
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "originPobox", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 837
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 838
        echo (($this->getAttribute(($context["errors"] ?? null), "originLandmark", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"originLandmark\" id=\"originLandmark\" class=\"form-control\" value=\"";
        // line 839
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "originLandmark", array()), "html", null, true);
        echo "\" placeholder=\"Nearest Landmark (optional)\"/>
                            <span class=\"fa fa-bookmark form-control-feedback\"></span>
                            ";
        // line 841
        if ($this->getAttribute(($context["errors"] ?? null), "originLandmark", array())) {
            // line 842
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "originLandmark", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 844
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 845
        echo (($this->getAttribute(($context["errors"] ?? null), "originLandline", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"tel\" name=\"originLandline\" id=\"originLandline\" class=\"form-control\" value=\"";
        // line 846
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "originLandline", array()), "html", null, true);
        echo "\" placeholder=\"Telephone Number: Landline (optional)\"/>
                            <span class=\"fa fa-phone form-control-feedback\"></span>
                            ";
        // line 848
        if ($this->getAttribute(($context["errors"] ?? null), "originLandline", array())) {
            // line 849
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "originLandline", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 851
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 852
        echo (($this->getAttribute(($context["errors"] ?? null), "originNotes", array())) ? (" has-error") : (""));
        echo "\">
                            <textarea id=\"originNotes\" name=\"originNotes\" class=\"form-control\" placeholder=\"Any additional notes (optional)\">";
        // line 853
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "originNotes", array()), "html", null, true);
        echo "</textarea>
                            <span class=\"fa fa-pencil form-control-feedback\"></span>
                            ";
        // line 855
        if ($this->getAttribute(($context["errors"] ?? null), "originNotes", array())) {
            // line 856
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "originNotes", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 858
        echo "                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <label>
                        <input type=\"checkbox\" name=\"other\" id=\"other\" ";
        // line 863
        if (($this->getAttribute(($context["old"] ?? null), "other", array()) == "true")) {
            echo "checked=\"checked\"";
        }
        echo " onclick=\"otherAddress()\" /> &nbsp;
                        <span class=\"fa fa-building\"> <input type=\"text\" name=\"otherName\" id=\"otherName\" onkeyup=\"typeOtherAddress()\" placeholder=\"Enter Address Title\" value=\"";
        // line 864
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["old"] ?? null), "otherName", array())) ? ($this->getAttribute(($context["old"] ?? null), "otherName", array())) : ("")), "html", null, true);
        echo "\" /> &nbsp; </span>
                    </label>
                    <div id=\"otherAddress\">
                        <h4 id=\"otherAddressTTL\">Other Address</h4>
                        <div class=\"form-group has-feedback";
        // line 868
        echo (($this->getAttribute(($context["errors"] ?? null), "otherMobile", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"tel\" name=\"otherMobile\" id=\"otherMobile\" class=\"form-control\" value=\"";
        // line 869
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "otherMobile", array()), "html", null, true);
        echo "\" placeholder=\"Telephone Number: Mobile\" required/>
                            <span class=\"fa fa-mobile-phone form-control-feedback\"></span>
                            ";
        // line 871
        if ($this->getAttribute(($context["errors"] ?? null), "otherMobile", array())) {
            // line 872
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "otherMobile", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 874
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 875
        echo (($this->getAttribute(($context["errors"] ?? null), "otherCountry", array())) ? (" has-error") : (""));
        echo "\">
                            <select class=\"form-control\" name=\"otherCountry\" id=\"otherCountry\" onchange=\"getStates(this, 'otherState')\" required>
                                <option>Please select a country...</option>
                                ";
        // line 878
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 879
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "otherCountry", array()))) {
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
        // line 881
        echo "                            </select>
                            ";
        // line 882
        if ($this->getAttribute(($context["errors"] ?? null), "otherCountry", array())) {
            // line 883
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "otherCountry", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 885
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 886
        echo (($this->getAttribute(($context["errors"] ?? null), "otherState", array())) ? (" has-error") : (""));
        echo "\">
                            <select class=\"form-control\" name=\"otherState\" id=\"otherState\" onchange=\"getCities(this, 'otherCity')\" required>
                                <option>Please select a state...</option>
                            </select>
                            ";
        // line 890
        if ($this->getAttribute(($context["errors"] ?? null), "otherState", array())) {
            // line 891
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "otherState", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 893
        echo "                            <input type=\"hidden\" name=\"otherState_selection\" id=\"otherState_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "otherState_selection", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group has-feedback";
        // line 895
        echo (($this->getAttribute(($context["errors"] ?? null), "otherCity", array())) ? (" has-error") : (""));
        echo "\">
                            <select class=\"form-control\" name=\"otherCity\" id=\"otherCity\" required onchange=\"setCity(this)\">
                                <option>Please select a city...</option>
                            </select>
                            ";
        // line 899
        if ($this->getAttribute(($context["errors"] ?? null), "otherCity", array())) {
            // line 900
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "otherCity", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 902
        echo "                            <input type=\"hidden\" name=\"otherCity_selection\" id=\"otherCity_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "otherCity_selection", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group has-feedback";
        // line 904
        echo (($this->getAttribute(($context["errors"] ?? null), "otherArea", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"otherArea\" id=\"otherArea\" class=\"form-control\" value=\"";
        // line 905
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "otherArea", array()), "html", null, true);
        echo "\" onfocus=\"setCity()\" placeholder=\"Please enter area name here\" required>
                            <span class=\"glyphicon glyphicon-map-marker form-control-feedback\"></span>
                            ";
        // line 907
        if ($this->getAttribute(($context["errors"] ?? null), "otherArea", array())) {
            // line 908
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "otherArea", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 910
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 911
        echo (($this->getAttribute(($context["errors"] ?? null), "otherStreetName", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"otherStreetName\" id=\"otherStreetName\" class=\"form-control\" value=\"";
        // line 912
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "otherStreetName", array()), "html", null, true);
        echo "\" placeholder=\"Street Name (optional)\"/>
                            <span class=\"glyphicon glyphicon-road form-control-feedback\"></span>
                            ";
        // line 914
        if ($this->getAttribute(($context["errors"] ?? null), "otherStreetName", array())) {
            // line 915
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "otherStreetName", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 917
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 918
        echo (($this->getAttribute(($context["errors"] ?? null), "otherStreetNumber", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"otherStreetNumber\" id=\"otherStreetNumber\" class=\"form-control\" value=\"";
        // line 919
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "otherStreetNumber", array()), "html", null, true);
        echo "\" placeholder=\"Street Number (optional)\"/>
                            <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                            ";
        // line 921
        if ($this->getAttribute(($context["errors"] ?? null), "otherStreetNumber", array())) {
            // line 922
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "otherStreetNumber", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 924
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 925
        echo (($this->getAttribute(($context["errors"] ?? null), "otherBuildingName", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"otherBuildingName\" id=\"otherBuildingName\" class=\"form-control\" value=\"";
        // line 926
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "otherBuildingName", array()), "html", null, true);
        echo "\" placeholder=\"Building Name (optional)\"/>
                            <span class=\"fa fa-building form-control-feedback\"></span>
                            ";
        // line 928
        if ($this->getAttribute(($context["errors"] ?? null), "otherBuildingName", array())) {
            // line 929
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "otherBuildingName", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 931
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 932
        echo (($this->getAttribute(($context["errors"] ?? null), "otherBuildingNumber", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"otherBuildingNumber\" id=\"otherBuildingNumber\" class=\"form-control\" value=\"";
        // line 933
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "otherBuildingNumber", array()), "html", null, true);
        echo "\" placeholder=\"Building Number (optional)\"/>
                            <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                            ";
        // line 935
        if ($this->getAttribute(($context["errors"] ?? null), "otherBuildingNumber", array())) {
            // line 936
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "otherBuildingNumber", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 938
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 939
        echo (($this->getAttribute(($context["errors"] ?? null), "otherApartFloor", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"otherApartFloor\" id=\"otherApartFloor\" class=\"form-control\" value=\"";
        // line 940
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "otherApartFloor", array()), "html", null, true);
        echo "\" placeholder=\"Apartment & Floor Number (optional)\"/>
                            <span class=\"fa fa-home form-control-feedback\"></span>
                            ";
        // line 942
        if ($this->getAttribute(($context["errors"] ?? null), "otherApartFloor", array())) {
            // line 943
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "otherApartFloor", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 945
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 946
        echo (($this->getAttribute(($context["errors"] ?? null), "otherPobox", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"otherPobox\" id=\"otherPobox\" class=\"form-control\" value=\"";
        // line 947
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "otherPobox", array()), "html", null, true);
        echo "\" placeholder=\"P.O.Box & Registered City (optional)\"/>
                            <span class=\"fa fa-inbox form-control-feedback\"></span>
                            ";
        // line 949
        if ($this->getAttribute(($context["errors"] ?? null), "otherPobox", array())) {
            // line 950
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "otherPobox", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 952
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 953
        echo (($this->getAttribute(($context["errors"] ?? null), "otherLandmark", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"text\" name=\"otherLandmark\" id=\"otherLandmark\" class=\"form-control\" value=\"";
        // line 954
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "otherLandmark", array()), "html", null, true);
        echo "\" placeholder=\"Nearest Landmark (optional)\"/>
                            <span class=\"fa fa-bookmark form-control-feedback\"></span>
                            ";
        // line 956
        if ($this->getAttribute(($context["errors"] ?? null), "otherLandmark", array())) {
            // line 957
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "otherLandmark", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 959
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 960
        echo (($this->getAttribute(($context["errors"] ?? null), "otherLandline", array())) ? (" has-error") : (""));
        echo "\">
                            <input type=\"tel\" name=\"otherLandline\" id=\"otherLandline\" class=\"form-control\" value=\"";
        // line 961
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "otherLandline", array()), "html", null, true);
        echo "\" placeholder=\"Telephone Number: Landline (optional)\"/>
                            <span class=\"fa fa-phone form-control-feedback\"></span>
                            ";
        // line 963
        if ($this->getAttribute(($context["errors"] ?? null), "otherLandline", array())) {
            // line 964
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "otherLandline", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 966
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 967
        echo (($this->getAttribute(($context["errors"] ?? null), "otherNotes", array())) ? (" has-error") : (""));
        echo "\">
                            <textarea id=\"otherNotes\" name=\"otherNotes\" class=\"form-control\" placeholder=\"Any additional notes (optional)\">";
        // line 968
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "otherNotes", array()), "html", null, true);
        echo "</textarea>
                            <span class=\"fa fa-pencil form-control-feedback\"></span>
                            ";
        // line 970
        if ($this->getAttribute(($context["errors"] ?? null), "otherNotes", array())) {
            // line 971
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "otherNotes", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 973
        echo "                        </div>
                    </div>
                </div>
                ";
        // line 976
        if ($this->getAttribute(($context["errors"] ?? null), "address_title", array())) {
            // line 977
            echo "                    <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "address_title", array())), "html", null, true);
            echo "</span>
                ";
        }
        // line 979
        echo "
            </div>


        </div>
        <h3 style=\"background: #3c8dbc; border: #000000; \">Profissional Experiences</h3>
        <div id=\"SEC3\" class=\"register-box-body\">
            ";
        // line 987
        echo "            ";
        // line 988
        echo "            <div id=\"newJobExperience\" class=\"form-group\">
                <label for=\"help-experience\">Job Experiences:</label>
                <p class=\"help-block\" id=\"help-experience\"><span><i>Add profissional experiences and their details</i></span></p>
                <input type=\"hidden\" id=\"experienceCounter\" name=\"experienceCounter\" value=\"-1\">
                <input type=\"button\" id=\"add\" class=\"btn btn-xs\" onclick=\"showInput('divExperienceGroup', 'experienceCounter')\" value=\"Add New\" title=\"Add new experience record\"/>
                <input type=\"button\" id=\"remove\" class=\"btn btn-xs btn-danger\" onclick=\"hideInput('divExperienceGroup', 'experienceCounter')\" value=\"Remove\" title=\"Removes the last experience record\" />
                <br />

                <div class=\"form-group bg-gray-light hidden has-feedback\" id=\"divExperienceGroup0\" >
                    <h3 id=\"experienceTitle0\">Job 1</h3>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group has-feedback";
        // line 999
        echo (($this->getAttribute(($context["errors"] ?? null), "experienceCountry0", array())) ? (" has-error") : (""));
        echo "\">
                            <select class=\"form-control\" name=\"experienceCountry0\" id=\"experienceCountry0\" onchange=\"getStates(this, 'experienceState0')\">
                                <option>Please select a country...</option>
                                ";
        // line 1002
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 1003
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["country"], "id", array()) == $this->getAttribute(($context["old"] ?? null), "experienceCountry0", array()))) {
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
        // line 1005
        echo "                            </select>
                            ";
        // line 1006
        if ($this->getAttribute(($context["errors"] ?? null), "experienceCountry0", array())) {
            // line 1007
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "experienceCountry0", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 1009
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 1010
        echo (($this->getAttribute(($context["errors"] ?? null), "experienceState0", array())) ? (" has-error") : (""));
        echo "\">
                            <select class=\"form-control\" name=\"experienceState0\" id=\"experienceState0\" onchange=\"getCities(this, 'experienceCity0')\">
                                <option>Please select a state...</option>
                            </select>
                            ";
        // line 1014
        if ($this->getAttribute(($context["errors"] ?? null), "experienceState0", array())) {
            // line 1015
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "experienceState0", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 1017
        echo "                            <input type=\"hidden\" name=\"experienceState0_selection\" id=\"experienceState0_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "experienceState0_selection", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group has-feedback";
        // line 1019
        echo (($this->getAttribute(($context["errors"] ?? null), "experienceCity0", array())) ? (" has-error") : (""));
        echo "\">
                            <select class=\"form-control\" name=\"experienceCity0\" id=\"experienceCity0\" onchange=\"setCity(this)\">
                                <option>Please select a city...</option>
                            </select>
                            ";
        // line 1023
        if ($this->getAttribute(($context["errors"] ?? null), "experienceCity0", array())) {
            // line 1024
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "experienceCity0", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 1026
        echo "                            <input type=\"hidden\" name=\"experienceCity0_selection\" id=\"experienceCity0_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "experienceCity0_selection", array()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"form-group has-feedback";
        // line 1028
        echo (($this->getAttribute(($context["errors"] ?? null), "jobTitle0", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"jobTitle0\">Job Title: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <input type=\"text\" name=\"jobTitle0\" id=\"jobTitle0\" class=\"form-control\" value=\"";
        // line 1030
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "jobTitle0", array()), "html", null, true);
        echo "\" placeholder=\"Job Title...\" required >
                            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                            ";
        // line 1032
        if ($this->getAttribute(($context["errors"] ?? null), "jobTitle0", array())) {
            // line 1033
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "jobTitle0", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 1035
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 1036
        echo (($this->getAttribute(($context["errors"] ?? null), "company0", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"company0\">Company Name: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <input type=\"text\" name=\"company0\" id=\"company0\" class=\"form-control\" value=\"";
        // line 1038
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "company0", array()), "html", null, true);
        echo "\" placeholder=\"Company Name...\" required />
                            <span class=\"glyphicon glyphicon-exclamation-sign form-control-feedback\"></span>
                            ";
        // line 1040
        if ($this->getAttribute(($context["errors"] ?? null), "company0", array())) {
            // line 1041
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "company0", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 1043
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 1044
        echo (($this->getAttribute(($context["errors"] ?? null), "jobFromDate0", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"jobFromDate0\">From Date: &nbsp;</label>
                            <input type=\"date\" name=\"jobFromDate0\" id=\"jobFromDate0\" class=\"form-control\" value=\"";
        // line 1046
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "jobFromDate0", array()), "html", null, true);
        echo "\" required/> &nbsp; &nbsp;
                            ";
        // line 1047
        if ($this->getAttribute(($context["errors"] ?? null), "jobFromDate0", array())) {
            // line 1048
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "jobFromDate0", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 1050
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 1051
        echo (($this->getAttribute(($context["errors"] ?? null), "jobToDate0", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"jobFromDate0\">To Date: &nbsp;</label>
                            <input type=\"date\" name=\"jobToDate0\" id=\"jobToDate0\" class=\"form-control\" value=\"";
        // line 1053
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "jobToDate0", array()), "html", null, true);
        echo "\" required/>  &nbsp; &nbsp;
                            ";
        // line 1054
        if ($this->getAttribute(($context["errors"] ?? null), "jobToDate0", array())) {
            // line 1055
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "jobToDate0", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 1057
        echo "                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group has-feedback ";
        // line 1060
        echo (($this->getAttribute(($context["errors"] ?? null), "jobDetails0", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"jobDetails0\">Details: &nbsp;</label>
                            <textarea id=\"jobDetails0\" name=\"jobDetails0\" placeholder=\"Copy & Paste or type in the detials here...\" class=\"form-control\" rows=\"20\"></textarea>
                            ";
        // line 1063
        if ($this->getAttribute(($context["errors"] ?? null), "jobDetails0", array())) {
            // line 1064
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "jobDetails0", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 1066
        echo "                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>
    ";
        // line 1075
        echo "    ";
        // line 1076
        echo "        ";
        // line 1077
        echo "            ";
        // line 1078
        echo "            ";
        // line 1079
        echo "                ";
        // line 1080
        echo "                ";
        // line 1081
        echo "                ";
        // line 1082
        echo "                    ";
        // line 1083
        echo "                ";
        // line 1084
        echo "            ";
        // line 1085
        echo "        ";
        // line 1086
        echo "    ";
        // line 1088
        echo "
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
        return array (  2971 => 1088,  2969 => 1086,  2967 => 1085,  2965 => 1084,  2963 => 1083,  2961 => 1082,  2959 => 1081,  2957 => 1080,  2955 => 1079,  2953 => 1078,  2951 => 1077,  2949 => 1076,  2947 => 1075,  2937 => 1066,  2931 => 1064,  2929 => 1063,  2923 => 1060,  2918 => 1057,  2912 => 1055,  2910 => 1054,  2906 => 1053,  2901 => 1051,  2898 => 1050,  2892 => 1048,  2890 => 1047,  2886 => 1046,  2881 => 1044,  2878 => 1043,  2872 => 1041,  2870 => 1040,  2865 => 1038,  2860 => 1036,  2857 => 1035,  2851 => 1033,  2849 => 1032,  2844 => 1030,  2839 => 1028,  2833 => 1026,  2827 => 1024,  2825 => 1023,  2818 => 1019,  2812 => 1017,  2806 => 1015,  2804 => 1014,  2797 => 1010,  2794 => 1009,  2788 => 1007,  2786 => 1006,  2783 => 1005,  2768 => 1003,  2764 => 1002,  2758 => 999,  2745 => 988,  2743 => 987,  2734 => 979,  2728 => 977,  2726 => 976,  2721 => 973,  2715 => 971,  2713 => 970,  2708 => 968,  2704 => 967,  2701 => 966,  2695 => 964,  2693 => 963,  2688 => 961,  2684 => 960,  2681 => 959,  2675 => 957,  2673 => 956,  2668 => 954,  2664 => 953,  2661 => 952,  2655 => 950,  2653 => 949,  2648 => 947,  2644 => 946,  2641 => 945,  2635 => 943,  2633 => 942,  2628 => 940,  2624 => 939,  2621 => 938,  2615 => 936,  2613 => 935,  2608 => 933,  2604 => 932,  2601 => 931,  2595 => 929,  2593 => 928,  2588 => 926,  2584 => 925,  2581 => 924,  2575 => 922,  2573 => 921,  2568 => 919,  2564 => 918,  2561 => 917,  2555 => 915,  2553 => 914,  2548 => 912,  2544 => 911,  2541 => 910,  2535 => 908,  2533 => 907,  2528 => 905,  2524 => 904,  2518 => 902,  2512 => 900,  2510 => 899,  2503 => 895,  2497 => 893,  2491 => 891,  2489 => 890,  2482 => 886,  2479 => 885,  2473 => 883,  2471 => 882,  2468 => 881,  2453 => 879,  2449 => 878,  2443 => 875,  2440 => 874,  2434 => 872,  2432 => 871,  2427 => 869,  2423 => 868,  2416 => 864,  2410 => 863,  2403 => 858,  2397 => 856,  2395 => 855,  2390 => 853,  2386 => 852,  2383 => 851,  2377 => 849,  2375 => 848,  2370 => 846,  2366 => 845,  2363 => 844,  2357 => 842,  2355 => 841,  2350 => 839,  2346 => 838,  2343 => 837,  2337 => 835,  2335 => 834,  2330 => 832,  2326 => 831,  2323 => 830,  2317 => 828,  2315 => 827,  2310 => 825,  2306 => 824,  2303 => 823,  2297 => 821,  2295 => 820,  2290 => 818,  2286 => 817,  2283 => 816,  2277 => 814,  2275 => 813,  2270 => 811,  2266 => 810,  2263 => 809,  2257 => 807,  2255 => 806,  2250 => 804,  2246 => 803,  2243 => 802,  2237 => 800,  2235 => 799,  2230 => 797,  2226 => 796,  2223 => 795,  2217 => 793,  2215 => 792,  2210 => 790,  2206 => 789,  2200 => 787,  2194 => 785,  2192 => 784,  2185 => 780,  2179 => 778,  2173 => 776,  2171 => 775,  2164 => 771,  2161 => 770,  2155 => 768,  2153 => 767,  2150 => 766,  2135 => 764,  2131 => 763,  2125 => 760,  2122 => 759,  2116 => 757,  2114 => 756,  2109 => 754,  2105 => 753,  2095 => 748,  2088 => 743,  2082 => 741,  2080 => 740,  2075 => 738,  2071 => 737,  2068 => 736,  2062 => 734,  2060 => 733,  2055 => 731,  2051 => 730,  2048 => 729,  2042 => 727,  2040 => 726,  2035 => 724,  2031 => 723,  2028 => 722,  2022 => 720,  2020 => 719,  2015 => 717,  2011 => 716,  2008 => 715,  2002 => 713,  2000 => 712,  1995 => 710,  1991 => 709,  1988 => 708,  1982 => 706,  1980 => 705,  1975 => 703,  1971 => 702,  1968 => 701,  1962 => 699,  1960 => 698,  1955 => 696,  1951 => 695,  1948 => 694,  1942 => 692,  1940 => 691,  1935 => 689,  1931 => 688,  1928 => 687,  1922 => 685,  1920 => 684,  1915 => 682,  1911 => 681,  1908 => 680,  1902 => 678,  1900 => 677,  1895 => 675,  1891 => 674,  1885 => 672,  1879 => 670,  1877 => 669,  1870 => 665,  1864 => 663,  1858 => 661,  1856 => 660,  1849 => 656,  1846 => 655,  1840 => 653,  1838 => 652,  1835 => 651,  1820 => 649,  1816 => 648,  1810 => 645,  1807 => 644,  1801 => 642,  1799 => 641,  1794 => 639,  1790 => 638,  1780 => 633,  1771 => 627,  1766 => 624,  1762 => 622,  1756 => 618,  1750 => 616,  1748 => 615,  1741 => 613,  1735 => 612,  1729 => 611,  1723 => 610,  1717 => 609,  1711 => 608,  1704 => 604,  1701 => 603,  1695 => 601,  1693 => 600,  1689 => 599,  1684 => 597,  1681 => 596,  1675 => 594,  1673 => 593,  1669 => 592,  1663 => 589,  1659 => 587,  1653 => 585,  1651 => 584,  1648 => 583,  1641 => 580,  1634 => 578,  1627 => 576,  1620 => 574,  1613 => 572,  1605 => 567,  1600 => 564,  1594 => 562,  1592 => 561,  1588 => 560,  1583 => 558,  1580 => 557,  1574 => 555,  1572 => 554,  1568 => 553,  1563 => 551,  1560 => 550,  1554 => 548,  1552 => 547,  1548 => 546,  1543 => 544,  1540 => 543,  1534 => 541,  1532 => 540,  1528 => 539,  1523 => 537,  1519 => 535,  1513 => 533,  1511 => 532,  1508 => 531,  1493 => 529,  1489 => 528,  1482 => 524,  1470 => 519,  1466 => 517,  1460 => 515,  1458 => 514,  1454 => 513,  1449 => 511,  1446 => 510,  1440 => 508,  1438 => 507,  1434 => 506,  1429 => 504,  1426 => 503,  1420 => 501,  1418 => 500,  1414 => 499,  1409 => 497,  1406 => 496,  1400 => 494,  1398 => 493,  1394 => 492,  1389 => 490,  1385 => 488,  1379 => 486,  1377 => 485,  1374 => 484,  1359 => 482,  1355 => 481,  1348 => 477,  1336 => 472,  1332 => 470,  1326 => 468,  1324 => 467,  1320 => 466,  1315 => 464,  1312 => 463,  1306 => 461,  1304 => 460,  1300 => 459,  1295 => 457,  1292 => 456,  1286 => 454,  1284 => 453,  1280 => 452,  1275 => 450,  1272 => 449,  1266 => 447,  1264 => 446,  1260 => 445,  1255 => 443,  1251 => 441,  1245 => 439,  1243 => 438,  1240 => 437,  1225 => 435,  1221 => 434,  1214 => 430,  1202 => 425,  1198 => 423,  1192 => 421,  1190 => 420,  1186 => 419,  1181 => 417,  1178 => 416,  1172 => 414,  1170 => 413,  1166 => 412,  1161 => 410,  1158 => 409,  1152 => 407,  1150 => 406,  1146 => 405,  1141 => 403,  1138 => 402,  1132 => 400,  1130 => 399,  1126 => 398,  1121 => 396,  1117 => 394,  1111 => 392,  1109 => 391,  1106 => 390,  1091 => 388,  1087 => 387,  1080 => 383,  1068 => 378,  1064 => 376,  1058 => 374,  1056 => 373,  1052 => 372,  1047 => 370,  1044 => 369,  1038 => 367,  1036 => 366,  1032 => 365,  1027 => 363,  1024 => 362,  1018 => 360,  1016 => 359,  1012 => 358,  1007 => 356,  1004 => 355,  998 => 353,  996 => 352,  992 => 351,  987 => 349,  983 => 347,  977 => 345,  975 => 344,  972 => 343,  957 => 341,  953 => 340,  946 => 336,  934 => 331,  930 => 329,  924 => 327,  922 => 326,  918 => 325,  913 => 323,  910 => 322,  904 => 320,  902 => 319,  898 => 318,  893 => 316,  890 => 315,  884 => 313,  882 => 312,  878 => 311,  873 => 309,  870 => 308,  864 => 306,  862 => 305,  858 => 304,  853 => 302,  849 => 300,  843 => 298,  841 => 297,  838 => 296,  823 => 294,  819 => 293,  812 => 289,  800 => 284,  796 => 282,  790 => 280,  788 => 279,  784 => 278,  779 => 276,  776 => 275,  770 => 273,  768 => 272,  764 => 271,  759 => 269,  756 => 268,  750 => 266,  748 => 265,  744 => 264,  739 => 262,  736 => 261,  730 => 259,  728 => 258,  724 => 257,  719 => 255,  715 => 253,  709 => 251,  707 => 250,  704 => 249,  689 => 247,  685 => 246,  678 => 242,  666 => 237,  662 => 235,  656 => 233,  654 => 232,  650 => 231,  645 => 229,  642 => 228,  636 => 226,  634 => 225,  630 => 224,  625 => 222,  622 => 221,  616 => 219,  614 => 218,  610 => 217,  605 => 215,  602 => 214,  596 => 212,  594 => 211,  590 => 210,  585 => 208,  581 => 206,  575 => 204,  573 => 203,  570 => 202,  555 => 200,  551 => 199,  544 => 195,  532 => 190,  528 => 188,  522 => 186,  520 => 185,  516 => 184,  511 => 182,  508 => 181,  502 => 179,  500 => 178,  496 => 177,  491 => 175,  488 => 174,  482 => 172,  480 => 171,  476 => 170,  471 => 168,  468 => 167,  462 => 165,  460 => 164,  456 => 163,  451 => 161,  447 => 159,  441 => 157,  439 => 156,  436 => 155,  421 => 153,  417 => 152,  410 => 148,  398 => 143,  394 => 141,  388 => 139,  386 => 138,  382 => 137,  377 => 135,  374 => 134,  368 => 132,  366 => 131,  362 => 130,  357 => 128,  354 => 127,  348 => 125,  346 => 124,  342 => 123,  337 => 121,  334 => 120,  328 => 118,  326 => 117,  322 => 116,  317 => 114,  313 => 112,  307 => 110,  305 => 109,  302 => 108,  287 => 106,  283 => 105,  276 => 101,  264 => 96,  254 => 88,  248 => 86,  246 => 85,  241 => 83,  236 => 81,  233 => 80,  227 => 78,  225 => 77,  220 => 75,  211 => 69,  208 => 68,  202 => 66,  200 => 65,  197 => 64,  182 => 62,  178 => 61,  171 => 57,  168 => 56,  162 => 54,  160 => 53,  153 => 51,  146 => 49,  141 => 47,  138 => 46,  132 => 44,  130 => 43,  125 => 41,  120 => 39,  117 => 38,  111 => 36,  109 => 35,  104 => 33,  99 => 31,  96 => 30,  90 => 28,  88 => 27,  83 => 25,  78 => 23,  75 => 22,  69 => 20,  67 => 19,  62 => 17,  57 => 15,  53 => 13,  47 => 10,  44 => 9,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
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
                <label for=\"help-me\">Attachments:</label>
                <p class=\"help-block\" id=\"help-me\"><span><i>Attach CV, Passport Copy, VISA Copy, Educational Degree, or any other related documents<br/><mark>Remember to rename the files respectively</mark></i></span></p>
                <input type=\"hidden\" id=\"attachmentCounter\" name=\"attachmentCounter\" value=\"-1\">
                <input type=\"button\" id=\"add\" class=\"btn btn-xs\" onclick=\"showInput('divattachmentGroup', 'attachmentCounter')\" value=\"Add New\" title=\"Add new attachment field\"/>
                <input type=\"button\" id=\"remove\" class=\"btn btn-xs btn-danger\" onclick=\"hideInput('divattachmentGroup', 'attachmentCounter')\" value=\"Remove\" title=\"Removes the last item\" />
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
                <br />

                <div class=\"col-lg-4\">
                    <label>
                        <input type=\"checkbox\" name=\"home\" id=\"home\" {% if old.home == 'true' %}checked=\"checked\"{% endif %} onclick=\"homeAddress()\"/>&nbsp;
                        <span class=\"fa fa-home\"> Local Home Address&nbsp; &nbsp; </span>
                    </label>
                    <div id=\"homeAddress\">
                        <h4 id=\"homeAddressTTL\">Local Home Address</h4>
                        <div class=\"form-group has-feedback{{ errors.homeMobile ? ' has-error' : '' }}\">
                            <input type=\"tel\" name=\"homeMobile\" id=\"homeMobile\" class=\"form-control\" value=\"{{ old.homeMobile }}\" placeholder=\"Telephone Number: Mobile\"/>
                            <span class=\"fa fa-mobile-phone form-control-feedback\"></span>
                            {% if errors.homeMobile %}
                                <span class=\"help-block\">{{ errors.homeMobile | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.homeCountry ? ' has-error' : '' }}\">
                            <select class=\"form-control\" name=\"homeCountry\" id=\"homeCountry\" onchange=\"getStates(this, 'homeState')\">
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
                            <select class=\"form-control\" name=\"homeState\" id=\"homeState\" onchange=\"getCities(this, 'homeCity')\">
                                <option>Please select a state...</option>
                            </select>
                            {% if errors.homeState %}
                                <span class=\"help-block\">{{ errors.homeState | first }}</span>
                            {% endif %}
                            <input type=\"hidden\" name=\"homeState_selection\" id=\"homeState_selection\" value=\"{{ old.homeState_selection }}\">
                        </div>
                        <div class=\"form-group has-feedback{{ errors.homeCity ? ' has-error' : '' }}\">
                            <select class=\"form-control\" name=\"homeCity\" id=\"homeCity\" onchange=\"setCity(this)\">
                                <option>Please select a city...</option>
                            </select>
                            {% if errors.homeCity %}
                                <span class=\"help-block\">{{ errors.homeCity | first }}</span>
                            {% endif %}
                            <input type=\"hidden\" name=\"homeCity_selection\" id=\"homeCity_selection\" value=\"{{ old.homeCity_selection }}\">
                        </div>
                        <div class=\"form-group has-feedback{{ errors.homeArea ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"homeArea\" id=\"homeArea\" class=\"form-control\" value=\"{{ old.homeArea }}\" onfocus=\"setCity()\" placeholder=\"Please enter area name here\">
                            <span class=\"glyphicon glyphicon-map-marker form-control-feedback\"></span>
                            {% if errors.homeArea %}
                                <span class=\"help-block\">{{ errors.homeArea | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.homeStreetName ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"homeStreetName\" id=\"homeStreetName\" class=\"form-control\" value=\"{{ old.homeStreetName }}\" placeholder=\"Street Name (optional)\"/>
                            <span class=\"glyphicon glyphicon-road form-control-feedback\"></span>
                            {% if errors.homeStreetName %}
                                <span class=\"help-block\">{{ errors.homeStreetName | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.homeStreetNumber ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"homeStreetNumber\" id=\"homeStreetNumber\" class=\"form-control\" value=\"{{ old.homeStreetNumber }}\" placeholder=\"Street Number (optional)\"/>
                            <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                            {% if errors.homeStreetNumber %}
                                <span class=\"help-block\">{{ errors.homeStreetNumber | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.homeBuildingName ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"homeBuildingName\" id=\"homeBildingName\" class=\"form-control\" value=\"{{ old.homeBuildingName }}\" placeholder=\"Building Name (optional)\"/>
                            <span class=\"fa fa-building form-control-feedback\"></span>
                            {% if errors.homeBuildingName %}
                                <span class=\"help-block\">{{ errors.homeBuildingName | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.homeBuildingNumber ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"homeBuildingNumber\" id=\"homeBuildingNumber\" class=\"form-control\" value=\"{{ old.homeBuildingNumber }}\" placeholder=\"Building Number (optional)\"/>
                            <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                            {% if errors.homeBuildingNumber %}
                                <span class=\"help-block\">{{ errors.homeBuildingNumber | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.homeApartFloor ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"homeApartFloor\" id=\"homeApartFloor\" class=\"form-control\" value=\"{{ old.homeApartFloor }}\" placeholder=\"Apartment & Floor Number (optional)\"/>
                            <span class=\"fa fa-home form-control-feedback\"></span>
                            {% if errors.homeApartFloor %}
                                <span class=\"help-block\">{{ errors.homeApartFloor | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.homePobox ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"homePobox\" id=\"homePobox\" class=\"form-control\" value=\"{{ old.homePobox }}\" placeholder=\"P.O.Box & Registered City (optional)\"/>
                            <span class=\"fa fa-inbox form-control-feedback\"></span>
                            {% if errors.homePobox %}
                                <span class=\"help-block\">{{ errors.homePobox | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.homeLandline ? ' has-error' : '' }}\">
                            <input type=\"tel\" name=\"homeLandline\" id=\"homeLandline\" class=\"form-control\" value=\"{{ old.homeLandline }}\" placeholder=\"Telephone Number: Land-line (optional)\"/>
                            <span class=\"fa fa-phone form-control-feedback\"></span>
                            {% if errors.homeLandline %}
                                <span class=\"help-block\">{{ errors.homeLandline | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.homeLandmark ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"homeLandmark\" id=\"homeLandmark\" class=\"form-control\" value=\"{{ old.homeLandmark }}\" placeholder=\"Nearest Landmark (optional)\"/>
                            <span class=\"fa fa-bookmark form-control-feedback\"></span>
                            {% if errors.homeLandmark %}
                                <span class=\"help-block\">{{ errors.homeLandmark | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.homeNotes ? ' has-error' : '' }}\">
                            <textarea id=\"homeNotes\" name=\"homeNotes\" class=\"form-control\" placeholder=\"Any additional notes (optional)\">{{ old.homeNotes }}</textarea>
                            <span class=\"fa fa-pencil form-control-feedback\"></span>
                            {% if errors.homeNotes %}
                                <span class=\"help-block\">{{ errors.homeNotes | first }}</span>
                            {% endif %}
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <label>
                        <input type=\"checkbox\" name=\"origin\" id=\"origin\" {% if old.origin == 'true' %}checked=\"checked\"{% endif %} onclick=\"originAddress()\" /> &nbsp;
                        <span class=\"fa fa-plane\"> Origin Country Address &nbsp; &nbsp; </span>
                    </label>
                    <div id=\"originAddress\" aria-disabled=\"true\">
                        <h4 id=\"originAddressTTL\">Origin Country Address</h4>
                        <div class=\"form-group has-feedback{{ errors.originMobile ? ' has-error' : '' }}\">
                            <input type=\"tel\" name=\"originMobile\" id=\"originMobile\" class=\"form-control\" value=\"{{ old.originMobile }}\" placeholder=\"Telephone Number: Mobile\" required />
                            <span class=\"fa fa-mobile-phone form-control-feedback\"></span>
                            {% if errors.originMobile %}
                                <span class=\"help-block\">{{ errors.originMobile | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.originCountry ? ' has-error' : '' }}\">
                            <select class=\"form-control\" name=\"originCountry\" id=\"originCountry\" onchange=\"getStates(this, 'originState')\" required>
                                <option>Please select a country...</option>
                                {% for country in HR.countries %}
                                    <option value=\"{{ country.id }}\" {% if country.id == old.originCountry %}selected{% endif %}>{{ country.country_name | e }}</option>
                                {% endfor %}
                            </select>
                            {% if errors.originCountry %}
                                <span class=\"help-block\">{{ errors.originCountry | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.originState ? ' has-error' : '' }}\">
                            <select class=\"form-control\" name=\"originState\" id=\"originState\" onchange=\"getCities(this, 'originCity')\" required>
                                <option>Please select a state...</option>
                            </select>
                            {% if errors.originState %}
                                <span class=\"help-block\">{{ errors.originState | first }}</span>
                            {% endif %}
                            <input type=\"hidden\" name=\"originState_selection\" id=\"originState_selection\" value=\"{{ old.originState_selection }}\">
                        </div>
                        <div class=\"form-group has-feedback{{ errors.originCity ? ' has-error' : '' }}\">
                            <select class=\"form-control\" name=\"originCity\" id=\"originCity\" required onchange=\"setCity(this)\">
                                <option>Please select a city...</option>
                            </select>
                            {% if errors.originCity %}
                                <span class=\"help-block\">{{ errors.originCity | first }}</span>
                            {% endif %}
                            <input type=\"hidden\" name=\"originCity_selection\" id=\"originCity_selection\" value=\"{{ old.originCity_selection }}\">
                        </div>
                        <div class=\"form-group has-feedback{{ errors.originArea ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"originArea\" id=\"originArea\" class=\"form-control\" value=\"{{ old.originArea }}\" onfocus=\"setCity()\" placeholder=\"Please enter area name here\" required />
                            <span class=\"glyphicon glyphicon-map-marker form-control-feedback\"></span>
                            {% if errors.originArea %}
                                <span class=\"help-block\">{{ errors.originArea | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.originStreetName ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"originStreetName\" id=\"originStreetName\" class=\"form-control\" value=\"{{ old.originStreetName }}\" placeholder=\"Street Name (optional)\"/>
                            <span class=\"glyphicon glyphicon-road form-control-feedback\"></span>
                            {% if errors.originStreetName %}
                                <span class=\"help-block\">{{ errors.originStreetName | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.originStreetNumber ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"originStreetNumber\" id=\"originStreetNumber\" class=\"form-control\" value=\"{{ old.originStreetNumber }}\" placeholder=\"Street Number (optional)\"/>
                            <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                            {% if errors.originStreetNumber %}
                                <span class=\"help-block\">{{ errors.originStreetNumber | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.originBuildingName ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"originBuildingName\" id=\"originBuildingName\" class=\"form-control\" value=\"{{ old.originBuildingName }}\" placeholder=\"Building Name (optional)\"/>
                            <span class=\"fa fa-building form-control-feedback\"></span>
                            {% if errors.originBuildingName %}
                                <span class=\"help-block\">{{ errors.originBuildingName | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.originBuildingNumber ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"originBuildingNumber\" id=\"originBuildingNumber\" class=\"form-control\" value=\"{{ old.originBuildingNumber }}\" placeholder=\"Building Number (optional)\"/>
                            <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                            {% if errors.originBuildingNumber %}
                                <span class=\"help-block\">{{ errors.originBuildingNumber | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.originApartFloor ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"originApartFloor\" id=\"originApartFloor\" class=\"form-control\" value=\"{{ old.originApartFloor }}\" placeholder=\"Apartment & Floor Number (optional)\"/>
                            <span class=\"fa fa-home form-control-feedback\"></span>
                            {% if errors.originApartFloor %}
                                <span class=\"help-block\">{{ errors.originApartFloor | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.originPobox ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"originPobox\" id=\"originPobox\" class=\"form-control\" value=\"{{ old.originPobox }}\" placeholder=\"P.O.Box & Registered City (optional)\"/>
                            <span class=\"fa fa-inbox form-control-feedback\"></span>
                            {% if errors.originPobox %}
                                <span class=\"help-block\">{{ errors.originPobox | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.originLandmark ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"originLandmark\" id=\"originLandmark\" class=\"form-control\" value=\"{{ old.originLandmark }}\" placeholder=\"Nearest Landmark (optional)\"/>
                            <span class=\"fa fa-bookmark form-control-feedback\"></span>
                            {% if errors.originLandmark %}
                                <span class=\"help-block\">{{ errors.originLandmark | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.originLandline ? ' has-error' : '' }}\">
                            <input type=\"tel\" name=\"originLandline\" id=\"originLandline\" class=\"form-control\" value=\"{{ old.originLandline }}\" placeholder=\"Telephone Number: Landline (optional)\"/>
                            <span class=\"fa fa-phone form-control-feedback\"></span>
                            {% if errors.originLandline %}
                                <span class=\"help-block\">{{ errors.originLandline | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.originNotes ? ' has-error' : '' }}\">
                            <textarea id=\"originNotes\" name=\"originNotes\" class=\"form-control\" placeholder=\"Any additional notes (optional)\">{{ old.originNotes }}</textarea>
                            <span class=\"fa fa-pencil form-control-feedback\"></span>
                            {% if errors.originNotes %}
                                <span class=\"help-block\">{{ errors.originNotes | first }}</span>
                            {% endif %}
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <label>
                        <input type=\"checkbox\" name=\"other\" id=\"other\" {% if old.other == 'true' %}checked=\"checked\"{% endif %} onclick=\"otherAddress()\" /> &nbsp;
                        <span class=\"fa fa-building\"> <input type=\"text\" name=\"otherName\" id=\"otherName\" onkeyup=\"typeOtherAddress()\" placeholder=\"Enter Address Title\" value=\"{{ old.otherName ? old.otherName : '' }}\" /> &nbsp; </span>
                    </label>
                    <div id=\"otherAddress\">
                        <h4 id=\"otherAddressTTL\">Other Address</h4>
                        <div class=\"form-group has-feedback{{ errors.otherMobile ? ' has-error' : '' }}\">
                            <input type=\"tel\" name=\"otherMobile\" id=\"otherMobile\" class=\"form-control\" value=\"{{ old.otherMobile }}\" placeholder=\"Telephone Number: Mobile\" required/>
                            <span class=\"fa fa-mobile-phone form-control-feedback\"></span>
                            {% if errors.otherMobile %}
                                <span class=\"help-block\">{{ errors.otherMobile | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.otherCountry ? ' has-error' : '' }}\">
                            <select class=\"form-control\" name=\"otherCountry\" id=\"otherCountry\" onchange=\"getStates(this, 'otherState')\" required>
                                <option>Please select a country...</option>
                                {% for country in HR.countries %}
                                    <option value=\"{{ country.id }}\" {% if country.id == old.otherCountry %}selected{% endif %}>{{ country.country_name | e }}</option>
                                {% endfor %}
                            </select>
                            {% if errors.otherCountry %}
                                <span class=\"help-block\">{{ errors.otherCountry | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.otherState ? ' has-error' : '' }}\">
                            <select class=\"form-control\" name=\"otherState\" id=\"otherState\" onchange=\"getCities(this, 'otherCity')\" required>
                                <option>Please select a state...</option>
                            </select>
                            {% if errors.otherState %}
                                <span class=\"help-block\">{{ errors.otherState | first }}</span>
                            {% endif %}
                            <input type=\"hidden\" name=\"otherState_selection\" id=\"otherState_selection\" value=\"{{ old.otherState_selection }}\">
                        </div>
                        <div class=\"form-group has-feedback{{ errors.otherCity ? ' has-error' : '' }}\">
                            <select class=\"form-control\" name=\"otherCity\" id=\"otherCity\" required onchange=\"setCity(this)\">
                                <option>Please select a city...</option>
                            </select>
                            {% if errors.otherCity %}
                                <span class=\"help-block\">{{ errors.otherCity | first }}</span>
                            {% endif %}
                            <input type=\"hidden\" name=\"otherCity_selection\" id=\"otherCity_selection\" value=\"{{ old.otherCity_selection }}\">
                        </div>
                        <div class=\"form-group has-feedback{{ errors.otherArea ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"otherArea\" id=\"otherArea\" class=\"form-control\" value=\"{{ old.otherArea }}\" onfocus=\"setCity()\" placeholder=\"Please enter area name here\" required>
                            <span class=\"glyphicon glyphicon-map-marker form-control-feedback\"></span>
                            {% if errors.otherArea %}
                                <span class=\"help-block\">{{ errors.otherArea | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.otherStreetName ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"otherStreetName\" id=\"otherStreetName\" class=\"form-control\" value=\"{{ old.otherStreetName }}\" placeholder=\"Street Name (optional)\"/>
                            <span class=\"glyphicon glyphicon-road form-control-feedback\"></span>
                            {% if errors.otherStreetName %}
                                <span class=\"help-block\">{{ errors.otherStreetName | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.otherStreetNumber ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"otherStreetNumber\" id=\"otherStreetNumber\" class=\"form-control\" value=\"{{ old.otherStreetNumber }}\" placeholder=\"Street Number (optional)\"/>
                            <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                            {% if errors.otherStreetNumber %}
                                <span class=\"help-block\">{{ errors.otherStreetNumber | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.otherBuildingName ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"otherBuildingName\" id=\"otherBuildingName\" class=\"form-control\" value=\"{{ old.otherBuildingName }}\" placeholder=\"Building Name (optional)\"/>
                            <span class=\"fa fa-building form-control-feedback\"></span>
                            {% if errors.otherBuildingName %}
                                <span class=\"help-block\">{{ errors.otherBuildingName | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.otherBuildingNumber ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"otherBuildingNumber\" id=\"otherBuildingNumber\" class=\"form-control\" value=\"{{ old.otherBuildingNumber }}\" placeholder=\"Building Number (optional)\"/>
                            <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                            {% if errors.otherBuildingNumber %}
                                <span class=\"help-block\">{{ errors.otherBuildingNumber | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.otherApartFloor ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"otherApartFloor\" id=\"otherApartFloor\" class=\"form-control\" value=\"{{ old.otherApartFloor }}\" placeholder=\"Apartment & Floor Number (optional)\"/>
                            <span class=\"fa fa-home form-control-feedback\"></span>
                            {% if errors.otherApartFloor %}
                                <span class=\"help-block\">{{ errors.otherApartFloor | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.otherPobox ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"otherPobox\" id=\"otherPobox\" class=\"form-control\" value=\"{{ old.otherPobox }}\" placeholder=\"P.O.Box & Registered City (optional)\"/>
                            <span class=\"fa fa-inbox form-control-feedback\"></span>
                            {% if errors.otherPobox %}
                                <span class=\"help-block\">{{ errors.otherPobox | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.otherLandmark ? ' has-error' : '' }}\">
                            <input type=\"text\" name=\"otherLandmark\" id=\"otherLandmark\" class=\"form-control\" value=\"{{ old.otherLandmark }}\" placeholder=\"Nearest Landmark (optional)\"/>
                            <span class=\"fa fa-bookmark form-control-feedback\"></span>
                            {% if errors.otherLandmark %}
                                <span class=\"help-block\">{{ errors.otherLandmark | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.otherLandline ? ' has-error' : '' }}\">
                            <input type=\"tel\" name=\"otherLandline\" id=\"otherLandline\" class=\"form-control\" value=\"{{ old.otherLandline }}\" placeholder=\"Telephone Number: Landline (optional)\"/>
                            <span class=\"fa fa-phone form-control-feedback\"></span>
                            {% if errors.otherLandline %}
                                <span class=\"help-block\">{{ errors.otherLandline | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.otherNotes ? ' has-error' : '' }}\">
                            <textarea id=\"otherNotes\" name=\"otherNotes\" class=\"form-control\" placeholder=\"Any additional notes (optional)\">{{ old.otherNotes }}</textarea>
                            <span class=\"fa fa-pencil form-control-feedback\"></span>
                            {% if errors.otherNotes %}
                                <span class=\"help-block\">{{ errors.otherNotes | first }}</span>
                            {% endif %}
                        </div>
                    </div>
                </div>
                {% if errors.address_title %}
                    <span class=\"help-block\">{{ errors.address_title | first }}</span>
                {% endif %}

            </div>


        </div>
        <h3 style=\"background: #3c8dbc; border: #000000; \">Profissional Experiences</h3>
        <div id=\"SEC3\" class=\"register-box-body\">
            {# TODO: add a button to add & remove experience up to 10 #}
            {# beginning of new job experience #}
            <div id=\"newJobExperience\" class=\"form-group\">
                <label for=\"help-experience\">Job Experiences:</label>
                <p class=\"help-block\" id=\"help-experience\"><span><i>Add profissional experiences and their details</i></span></p>
                <input type=\"hidden\" id=\"experienceCounter\" name=\"experienceCounter\" value=\"-1\">
                <input type=\"button\" id=\"add\" class=\"btn btn-xs\" onclick=\"showInput('divExperienceGroup', 'experienceCounter')\" value=\"Add New\" title=\"Add new experience record\"/>
                <input type=\"button\" id=\"remove\" class=\"btn btn-xs btn-danger\" onclick=\"hideInput('divExperienceGroup', 'experienceCounter')\" value=\"Remove\" title=\"Removes the last experience record\" />
                <br />

                <div class=\"form-group bg-gray-light hidden has-feedback\" id=\"divExperienceGroup0\" >
                    <h3 id=\"experienceTitle0\">Job 1</h3>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group has-feedback{{ errors.experienceCountry0 ? ' has-error' : '' }}\">
                            <select class=\"form-control\" name=\"experienceCountry0\" id=\"experienceCountry0\" onchange=\"getStates(this, 'experienceState0')\">
                                <option>Please select a country...</option>
                                {% for country in HR.countries %}
                                    <option value=\"{{ country.id }}\" {% if country.id == old.experienceCountry0 %}selected{% endif %}>{{ country.country_name | e }}</option>
                                {% endfor %}
                            </select>
                            {% if errors.experienceCountry0 %}
                                <span class=\"help-block\">{{ errors.experienceCountry0 | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.experienceState0 ? ' has-error' : '' }}\">
                            <select class=\"form-control\" name=\"experienceState0\" id=\"experienceState0\" onchange=\"getCities(this, 'experienceCity0')\">
                                <option>Please select a state...</option>
                            </select>
                            {% if errors.experienceState0 %}
                                <span class=\"help-block\">{{ errors.experienceState0 | first }}</span>
                            {% endif %}
                            <input type=\"hidden\" name=\"experienceState0_selection\" id=\"experienceState0_selection\" value=\"{{ old.experienceState0_selection }}\">
                        </div>
                        <div class=\"form-group has-feedback{{ errors.experienceCity0 ? ' has-error' : '' }}\">
                            <select class=\"form-control\" name=\"experienceCity0\" id=\"experienceCity0\" onchange=\"setCity(this)\">
                                <option>Please select a city...</option>
                            </select>
                            {% if errors.experienceCity0 %}
                                <span class=\"help-block\">{{ errors.experienceCity0 | first }}</span>
                            {% endif %}
                            <input type=\"hidden\" name=\"experienceCity0_selection\" id=\"experienceCity0_selection\" value=\"{{ old.experienceCity0_selection }}\">
                        </div>
                        <div class=\"form-group has-feedback{{ errors.jobTitle0 ? ' has-error' : '' }}\">
                            <label for=\"jobTitle0\">Job Title: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <input type=\"text\" name=\"jobTitle0\" id=\"jobTitle0\" class=\"form-control\" value=\"{{ old.jobTitle0 }}\" placeholder=\"Job Title...\" required >
                            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                            {% if errors.jobTitle0 %}
                                <span class=\"help-block\">{{ errors.jobTitle0 | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.company0 ? ' has-error' : '' }}\">
                            <label for=\"company0\">Company Name: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                            <input type=\"text\" name=\"company0\" id=\"company0\" class=\"form-control\" value=\"{{ old.company0 }}\" placeholder=\"Company Name...\" required />
                            <span class=\"glyphicon glyphicon-exclamation-sign form-control-feedback\"></span>
                            {% if errors.company0 %}
                                <span class=\"help-block\">{{ errors.company0 | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.jobFromDate0 ? ' has-error' : '' }}\">
                            <label for=\"jobFromDate0\">From Date: &nbsp;</label>
                            <input type=\"date\" name=\"jobFromDate0\" id=\"jobFromDate0\" class=\"form-control\" value=\"{{ old.jobFromDate0 }}\" required/> &nbsp; &nbsp;
                            {% if errors.jobFromDate0 %}
                                <span class=\"help-block\">{{ errors.jobFromDate0 | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.jobToDate0 ? ' has-error' : '' }}\">
                            <label for=\"jobFromDate0\">To Date: &nbsp;</label>
                            <input type=\"date\" name=\"jobToDate0\" id=\"jobToDate0\" class=\"form-control\" value=\"{{ old.jobToDate0 }}\" required/>  &nbsp; &nbsp;
                            {% if errors.jobToDate0 %}
                                <span class=\"help-block\">{{ errors.jobToDate0 | first }}</span>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"form-group has-feedback {{ errors.jobDetails0 ? ' has-error' : '' }}\">
                            <label for=\"jobDetails0\">Details: &nbsp;</label>
                            <textarea id=\"jobDetails0\" name=\"jobDetails0\" placeholder=\"Copy & Paste or type in the detials here...\" class=\"form-control\" rows=\"20\"></textarea>
                            {% if errors.jobDetails0 %}
                                <span class=\"help-block\">{{ errors.jobDetails0 | first }}</span>
                            {% endif %}
                        </div>
                    </div>
                </div>

            </div>
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
{#</div>#}

{% endblock %}
", "auth/HR/SinglePage.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/HR/SinglePage.twig");
    }
}
