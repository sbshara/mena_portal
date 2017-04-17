<?php

/* auth/HR/Address/newAddress.twig */
class __TwigTemplate_3774a7ff4ec2ec57c9fcc5388871f4ae3b09b373615af0539020837b8040046b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/HR/Address/newAddress.twig", 1);
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
        echo "New Address";
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
        echo "<section class=\"content\" xmlns=\"http://www.w3.org/1999/html\">
        <div class=\"raw\">
            <div class=\"register-logo\">
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\"><b>MENA</b> Assistance</a>
            </div>
            <div class=\"register-box-body\">
                <p class=\"login-box-msg\">Add a new address</p>
                <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.NewAddress"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\" >
                    <div class=\"form-group has-feedback";
        // line 18
        echo (($this->getAttribute(($context["errors"] ?? null), "applicant", array())) ? (" has-error") : (""));
        echo (($this->getAttribute(($context["errors"] ?? null), "applicantid", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" id=\"applicant\" name=\"applicant\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "applicant", array()), "html", null, true);
        echo "\" onchange=\"getApplicantName(this)\" placeholder=\"Start typing appplicant's name...\" />
                        <input type=\"hidden\" id=\"applicantid\" name=\"applicantid\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "applicantid", array()), "html", null, true);
        echo "\"/>
                        <div id=\"name-guide\" class=\"help-block\"></div>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        ";
        // line 23
        if ($this->getAttribute(($context["errors"] ?? null), "applicant", array())) {
            // line 24
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "applicant", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 26
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 28
        echo (($this->getAttribute(($context["errors"] ?? null), "address_title", array())) ? (" has-error") : (""));
        echo "\">
                        <label>Address Title: &nbsp; &nbsp;</label>
                        <label>
                            <input type=\"radio\" name=\"address_title\" id=\"home\" value=\"Home\" ";
        // line 31
        if (($this->getAttribute(($context["old"] ?? null), "address_title", array()) == "home")) {
            echo "checked=\"checked\"";
        }
        echo "/>&nbsp;
                            <span class=\"fa fa-home\"> Local Home Address&nbsp; &nbsp; </span>
                        </label>
                        <label>
                            <input type=\"radio\" name=\"address_title\" id=\"work\" value=\"Work\" ";
        // line 35
        if (($this->getAttribute(($context["old"] ?? null), "address_title", array()) == "work")) {
            echo "checked=\"checked\"";
        }
        echo "/> &nbsp;
                            <span class=\"fa fa-plane\"> Origin Country Address &nbsp; &nbsp; </span>
                        </label>

                        ";
        // line 39
        if ($this->getAttribute(($context["errors"] ?? null), "address_title", array())) {
            // line 40
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "address_title", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 42
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 44
        echo (($this->getAttribute(($context["errors"] ?? null), "mobile", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"tel\" name=\"mobile\" id=\"mobile\" class=\"form-control\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "mobile", array()), "html", null, true);
        echo "\" placeholder=\"Telephone Number: Mobile\"/>
                        <span class=\"fa fa-mobile-phone form-control-feedback\"></span>
                        ";
        // line 47
        if ($this->getAttribute(($context["errors"] ?? null), "mobile", array())) {
            // line 48
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "mobile", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 50
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 52
        echo (($this->getAttribute(($context["errors"] ?? null), "country", array())) ? (" has-error") : (""));
        echo "\">
                        <select class=\"form-control\" name=\"country\" id=\"country\" onchange=\"getStates(this)\">
                            <option>Please select a country...</option>
                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["HR"] ?? null), "countries", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 56
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
        // line 58
        echo "                        </select>
                        ";
        // line 59
        if ($this->getAttribute(($context["errors"] ?? null), "country", array())) {
            // line 60
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "country", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 62
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 64
        echo (($this->getAttribute(($context["errors"] ?? null), "state", array())) ? (" has-error") : (""));
        echo "\">
                        <select class=\"form-control\" name=\"state\" id=\"state\" onchange=\"getCities(this)\">
                            <option>Please select a state...</option>
                        </select>
                        ";
        // line 68
        if ($this->getAttribute(($context["errors"] ?? null), "state", array())) {
            // line 69
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "state", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 71
        echo "                        <input type=\"hidden\" name=\"state_selection\" id=\"state_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "state", array()), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group has-feedback";
        // line 74
        echo (($this->getAttribute(($context["errors"] ?? null), "city", array())) ? (" has-error") : (""));
        echo "\">
                        <select class=\"form-control\" name=\"city\" id=\"city\">
                            <option>Please select a city...</option>
                        </select>
                        ";
        // line 78
        if ($this->getAttribute(($context["errors"] ?? null), "city", array())) {
            // line 79
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "city", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 81
        echo "                        <input type=\"hidden\" name=\"city_selection\" id=\"city_selection\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "city", array()), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group has-feedback";
        // line 84
        echo (($this->getAttribute(($context["errors"] ?? null), "area", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"area\" id=\"area\" class=\"form-control\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "area", array()), "html", null, true);
        echo "\" onfocus=\"setCity()\" placeholder=\"Please enter area name here\">
                        <span class=\"glyphicon glyphicon-map-marker form-control-feedback\"></span>
                        ";
        // line 87
        if ($this->getAttribute(($context["errors"] ?? null), "area", array())) {
            // line 88
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "area", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 90
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 92
        echo (($this->getAttribute(($context["errors"] ?? null), "streetName", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"streetName\" id=\"streetName\" class=\"form-control\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "streetName", array()), "html", null, true);
        echo "\" placeholder=\"Street Name (optional)\"/>
                        <span class=\"glyphicon glyphicon-road form-control-feedback\"></span>
                        ";
        // line 95
        if ($this->getAttribute(($context["errors"] ?? null), "streetName", array())) {
            // line 96
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "streetName", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 98
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 100
        echo (($this->getAttribute(($context["errors"] ?? null), "streetNumber", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"streetNumber\" id=\"streetNumber\" class=\"form-control\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "streetNumber", array()), "html", null, true);
        echo "\" placeholder=\"Street Number (optional)\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        ";
        // line 103
        if ($this->getAttribute(($context["errors"] ?? null), "streetNumber", array())) {
            // line 104
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "streetNumber", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 106
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 108
        echo (($this->getAttribute(($context["errors"] ?? null), "buildingName", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"buildingName\" id=\"buildingName\" class=\"form-control\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "buildingName", array()), "html", null, true);
        echo "\" placeholder=\"Building Name (optional)\"/>
                        <span class=\"fa fa-building form-control-feedback\"></span>
                        ";
        // line 111
        if ($this->getAttribute(($context["errors"] ?? null), "buildingName", array())) {
            // line 112
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "buildingName", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 114
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 116
        echo (($this->getAttribute(($context["errors"] ?? null), "buildingNumber", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"buildingNumber\" id=\"buildingNumber\" class=\"form-control\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "buildingNumber", array()), "html", null, true);
        echo "\" placeholder=\"Building Number (optional)\"/>
                        <span class=\"glyphicon glyphicon-asterisk form-control-feedback\"></span>
                        ";
        // line 119
        if ($this->getAttribute(($context["errors"] ?? null), "buildingNumber", array())) {
            // line 120
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "buildingNumber", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 122
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 124
        echo (($this->getAttribute(($context["errors"] ?? null), "apartFloor", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"apartFloor\" id=\"apartFloor\" class=\"form-control\" value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "apartFloor", array()), "html", null, true);
        echo "\" placeholder=\"Apartment & Floor Number (optional)\"/>
                        <span class=\"fa fa-home form-control-feedback\"></span>
                        ";
        // line 127
        if ($this->getAttribute(($context["errors"] ?? null), "apartmentFloor", array())) {
            // line 128
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "apartmentFloor", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 130
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 132
        echo (($this->getAttribute(($context["errors"] ?? null), "pobox", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"pobox\" id=\"pobox\" class=\"form-control\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "pobox", array()), "html", null, true);
        echo "\" placeholder=\"P.O.Box & Registered City (optional)\"/>
                        <span class=\"fa fa-inbox form-control-feedback\"></span>
                        ";
        // line 135
        if ($this->getAttribute(($context["errors"] ?? null), "pobox", array())) {
            // line 136
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "pobox", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 138
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 140
        echo (($this->getAttribute(($context["errors"] ?? null), "landmark", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"text\" name=\"landmark\" id=\"landmark\" class=\"form-control\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "landmark", array()), "html", null, true);
        echo "\" placeholder=\"Nearest Landmark (optional)\"/>
                        <span class=\"fa fa-bookmark form-control-feedback\"></span>
                        ";
        // line 143
        if ($this->getAttribute(($context["errors"] ?? null), "landmark", array())) {
            // line 144
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "landmark", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 146
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 148
        echo (($this->getAttribute(($context["errors"] ?? null), "landline", array())) ? (" has-error") : (""));
        echo "\">
                        <input type=\"tel\" name=\"landline\" id=\"landline\" class=\"form-control\" value=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "landline", array()), "html", null, true);
        echo "\" placeholder=\"Telephone Number: Landline (optional)\"/>
                        <span class=\"fa fa-phone form-control-feedback\"></span>
                        ";
        // line 151
        if ($this->getAttribute(($context["errors"] ?? null), "landline", array())) {
            // line 152
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "landline", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 154
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 156
        echo (($this->getAttribute(($context["errors"] ?? null), "notes", array())) ? (" has-error") : (""));
        echo "\">
                        <textarea id=\"notes\" name=\"notes\" class=\"form-control\" placeholder=\"Any additional notes (optional)\">";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "notes", array()), "html", null, true);
        echo "</textarea>
                        <span class=\"fa fa-pencil form-control-feedback\"></span>
                        ";
        // line 159
        if ($this->getAttribute(($context["errors"] ?? null), "notes", array())) {
            // line 160
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "notes", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 162
        echo "                    </div>

                    <div class=\"form-group has-feedback";
        // line 164
        echo (($this->getAttribute(($context["errors"] ?? null), "nextstep", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"nextstep\">Next Step:  &nbsp;</label>
                        <select class=\"form-control\" name=\"nextstep\" id=\"nextstep\">
                            <option value=\"\" ";
        // line 167
        if (($this->getAttribute(($context["old"] ?? null), "nextstep", array()) == "")) {
            echo "selected";
        }
        echo ">Please Select ...</option>
                            <option value=\"newAddress\" ";
        // line 168
        if (($this->getAttribute(($context["old"] ?? null), "nextstep", array()) == "newAddress")) {
            echo "selected";
        }
        echo ">Add New Address</option>
                            <option value=\"skill\" ";
        // line 169
        if (($this->getAttribute(($context["old"] ?? null), "nextstep", array()) == "skill")) {
            echo "selected";
        }
        echo ">Applicant skills</option>
                            <option value=\"degree\" ";
        // line 170
        if (($this->getAttribute(($context["old"] ?? null), "nextstep", array()) == "education")) {
            echo "selected";
        }
        echo ">Applicant educational degrees</option>
                            <option value=\"experience\" ";
        // line 171
        if (($this->getAttribute(($context["old"] ?? null), "nextstep", array()) == "experience")) {
            echo "selected";
        }
        echo ">Applicant experiences</option>
                            <option value=\"interview\" ";
        // line 172
        if (($this->getAttribute(($context["old"] ?? null), "nextstep", array()) == "interview")) {
            echo "selected";
        }
        echo ">Schedule an interview</option>
                            <option value=\"home\" ";
        // line 173
        if (($this->getAttribute(($context["old"] ?? null), "nextstep", array()) == "home")) {
            echo "selected";
        }
        echo " title=\"Not Recommended!\">Go to home page</option>
                        </select>
                        ";
        // line 175
        if ($this->getAttribute(($context["errors"] ?? null), "nextstep", array())) {
            // line 176
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "nextstep", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 178
        echo "                    </div>

                    <button type=\"submit\" name=\"submit\" id=\"submit\"class=\"btn btn-default\">Save Address Details</button>
                    ";
        // line 181
        echo $this->getAttribute(($context["csrf"] ?? null), "field", array());
        echo "
                </form>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "auth/HR/Address/newAddress.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 181,  498 => 178,  492 => 176,  490 => 175,  483 => 173,  477 => 172,  471 => 171,  465 => 170,  459 => 169,  453 => 168,  447 => 167,  441 => 164,  437 => 162,  431 => 160,  429 => 159,  424 => 157,  420 => 156,  416 => 154,  410 => 152,  408 => 151,  403 => 149,  399 => 148,  395 => 146,  389 => 144,  387 => 143,  382 => 141,  378 => 140,  374 => 138,  368 => 136,  366 => 135,  361 => 133,  357 => 132,  353 => 130,  347 => 128,  345 => 127,  340 => 125,  336 => 124,  332 => 122,  326 => 120,  324 => 119,  319 => 117,  315 => 116,  311 => 114,  305 => 112,  303 => 111,  298 => 109,  294 => 108,  290 => 106,  284 => 104,  282 => 103,  277 => 101,  273 => 100,  269 => 98,  263 => 96,  261 => 95,  256 => 93,  252 => 92,  248 => 90,  242 => 88,  240 => 87,  235 => 85,  231 => 84,  224 => 81,  218 => 79,  216 => 78,  209 => 74,  202 => 71,  196 => 69,  194 => 68,  187 => 64,  183 => 62,  177 => 60,  175 => 59,  172 => 58,  157 => 56,  153 => 55,  147 => 52,  143 => 50,  137 => 48,  135 => 47,  130 => 45,  126 => 44,  122 => 42,  116 => 40,  114 => 39,  105 => 35,  96 => 31,  90 => 28,  86 => 26,  80 => 24,  78 => 23,  72 => 20,  68 => 19,  63 => 18,  59 => 17,  52 => 13,  47 => 10,  44 => 9,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
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
{% block title %}New Address{% endblock %}

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
                <p class=\"login-box-msg\">Add a new address</p>
                <form action=\"{{ path_for('HR.NewAddress') }}\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\" >
                    <div class=\"form-group has-feedback{{ errors.applicant ? ' has-error' : '' }}{{ errors.applicantid ? ' has-error' : '' }}\">
                        <input type=\"text\" id=\"applicant\" name=\"applicant\" class=\"form-control\" value=\"{{ old.applicant }}\" onchange=\"getApplicantName(this)\" placeholder=\"Start typing appplicant's name...\" />
                        <input type=\"hidden\" id=\"applicantid\" name=\"applicantid\" value=\"{{ old.applicantid }}\"/>
                        <div id=\"name-guide\" class=\"help-block\"></div>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        {% if errors.applicant %}
                            <span class=\"help-block\">{{ errors.applicant | first }}</span>
                        {% endif %}
                    </div>

                    <div class=\"form-group has-feedback{{ errors.address_title ? ' has-error' : '' }}\">
                        <label>Address Title: &nbsp; &nbsp;</label>
                        <label>
                            <input type=\"radio\" name=\"address_title\" id=\"home\" value=\"Home\" {% if old.address_title == 'home' %}checked=\"checked\"{% endif %}/>&nbsp;
                            <span class=\"fa fa-home\"> Local Home Address&nbsp; &nbsp; </span>
                        </label>
                        <label>
                            <input type=\"radio\" name=\"address_title\" id=\"work\" value=\"Work\" {% if old.address_title == 'work' %}checked=\"checked\"{% endif %}/> &nbsp;
                            <span class=\"fa fa-plane\"> Origin Country Address &nbsp; &nbsp; </span>
                        </label>

                        {% if errors.address_title %}
                            <span class=\"help-block\">{{ errors.address_title | first }}</span>
                        {% endif %}
                    </div>

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

                    <div class=\"form-group has-feedback{{ errors.nextstep ? ' has-error' : '' }}\">
                        <label for=\"nextstep\">Next Step:  &nbsp;</label>
                        <select class=\"form-control\" name=\"nextstep\" id=\"nextstep\">
                            <option value=\"\" {% if old.nextstep == '' %}selected{% endif %}>Please Select ...</option>
                            <option value=\"newAddress\" {% if old.nextstep == 'newAddress' %}selected{% endif %}>Add New Address</option>
                            <option value=\"skill\" {% if old.nextstep == 'skill' %}selected{% endif %}>Applicant skills</option>
                            <option value=\"degree\" {% if old.nextstep == 'education' %}selected{% endif %}>Applicant educational degrees</option>
                            <option value=\"experience\" {% if old.nextstep == 'experience' %}selected{% endif %}>Applicant experiences</option>
                            <option value=\"interview\" {% if old.nextstep == 'interview' %}selected{% endif %}>Schedule an interview</option>
                            <option value=\"home\" {% if old.nextstep == 'home' %}selected{% endif %} title=\"Not Recommended!\">Go to home page</option>
                        </select>
                        {% if errors.nextstep %}
                            <span class=\"help-block\">{{ errors.nextstep | first }}</span>
                        {% endif %}
                    </div>

                    <button type=\"submit\" name=\"submit\" id=\"submit\"class=\"btn btn-default\">Save Address Details</button>
                    {{ csrf.field | raw }}
                </form>
            </div>
        </div>
{% endblock %}
", "auth/HR/Address/newAddress.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/HR/Address/newAddress.twig");
    }
}
