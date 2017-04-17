<?php

/* auth/Operations/Assets/Trucks/newTruck.twig */
class __TwigTemplate_24f705830c9f3636fcef9130705ab80df140150a5804e1518585ecc5ef5c9eea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/Operations/Assets/Trucks/newTruck.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Assets & Resources - New Truck Registration";
    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        // line 6
        echo "    <section class=\"content\">
        <div class=\"raw\">
            <div class=\"register-logo\">
                <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\"><b>MENA</b> Assistance</a>
            </div>
            <div class=\"register-box-body\">
                <p class=\"login-box-msg\">Register a new Vehicle</p>
                <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("OPS.Assets.NewTruck"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\" >
                    ";
        // line 14
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["csrf"] ?? null), "field", array());
        echo "
                    <div class=\"form-group has-feedback";
        // line 15
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "vin", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"vin\">VIN (Chassis): &nbsp;</label>
                        <input type=\"text\" name=\"vin\" id=\"vin\" class=\"form-control\" placeholder=\"1AA2BBCC3DD456789\" maxlength=\"17\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "vin", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "vin", array())) : ("")), "html", null, true);
        echo "\"/>
                        ";
        // line 18
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "vin", array())) {
            // line 19
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "vin", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 21
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 22
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "brand", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"brand\">Vehicle Brand: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        <select class=\"form-control\" name=\"brand\" id=\"brand\" onchange=\"getModel(this,'model')\">
                            <option value=\"\">Please Select ... </option>
                            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["OPS"] ?? null), "Brands", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 27
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["brand"], "brand_name", array()), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["brand"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "brand", array()))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["brand"], "brand_name", array()));
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                        </select>
                        ";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "brand", array())) {
            // line 31
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "brand", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 33
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 34
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "model", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"model\">Vehicle Model: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        <select class=\"form-control\" name=\"model\" id=\"model\">
                        </select>
                        ";
        // line 38
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "model", array())) {
            // line 39
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "model", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 41
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 42
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "model_year", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"model_year\">Vehicle Model Year: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        <input type=\"number\" name=\"model_year\" class=\"form-control\" id=\"model_year\" min=\"2000\" max=\"2099\" placeholder=\"2017\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "model_year", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "model_year", array())) : ("")), "html", null, true);
        echo "\"/>
                        ";
        // line 45
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "model_year", array())) {
            // line 46
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "model_year", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 48
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 49
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "registration_code", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"registration_code\">Registration Code: &nbsp;</label>
                        <input type=\"text\" name=\"registration_code\" id=\"registration_code\" class=\"form-control\" placeholder=\"A\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "registration_code", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "registration_code", array())) : ("")), "html", null, true);
        echo "\"/>
                        ";
        // line 52
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "registration_code", array())) {
            // line 53
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "registration_code", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 55
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 56
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "registration_number", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"registration_number\">Registration Number: &nbsp;</label>
                        <input type=\"number\" name=\"registration_number\" id=\"registration_number\" class=\"form-control\" placeholder=\"12345\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "registration_number", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "registration_number", array())) : ("")), "html", null, true);
        echo "\"/>
                        ";
        // line 59
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "registration_number", array())) {
            // line 60
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "registration_number", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 62
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 63
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "first_registration", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"first_registration\">Vehicle First Registered On: &nbsp;</label>
                        <input type=\"text\" name=\"first_registration\" id=\"first_registration\" class=\"form-control date-picker\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "first_registration", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "first_registration", array())) : ("")), "html", null, true);
        echo "\"/>
                        ";
        // line 66
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "first_registration", array())) {
            // line 67
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "first_registration", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 69
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 70
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "registration_expiry", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"registration_expiry\">Vehicle Registration Expiry Date: &nbsp;</label>
                        <input type=\"text\" name=\"registration_expiry\" id=\"registration_expiry\" class=\"form-control date-picker\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "registration_expiry", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "registration_expiry", array())) : ("")), "html", null, true);
        echo "\"/>
                        ";
        // line 73
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "registration_expiry", array())) {
            // line 74
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "registration_expiry", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 76
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 77
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "insurance_company", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"insurance_company\">Insurance Company: &nbsp;</label>
                        <input type=\"text\" name=\"insurance_company\" id=\"insurance_company\" class=\"form-control\" placeholder=\"Insurance Company PJSC.\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "insurance_company", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "insurance_company", array())) : ("")), "html", null, true);
        echo "\"/>
                        ";
        // line 80
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "insurance_company", array())) {
            // line 81
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "insurance_company", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 83
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 84
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "insurance_start_date", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"insurance_start_date\">Insurance Date (From): &nbsp;</label>
                        <input type=\"text\" name=\"insurance_start_date\" id=\"insurance_start_date\" class=\"form-control date-picker\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "insurance_start_date", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "insurance_start_date", array())) : ("")), "html", null, true);
        echo "\"/>
                        ";
        // line 87
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "insurance_start_date", array())) {
            // line 88
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "insurance_start_date", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 90
        echo "                    </div>
                    <div class=\"form-group has-feedback";
        // line 91
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "insurance_expiry_date", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"insurance_expiry_date\">Insurance Date (To): &nbsp;</label>
                        <input type=\"text\" name=\"insurance_expiry_date\" id=\"insurance_expiry_date\" class=\"form-control date-picker\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "insurance_expiry_date", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "insurance_expiry_date", array())) : ("")), "html", null, true);
        echo "\"/>
                        ";
        // line 94
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "insurance_expiry_date", array())) {
            // line 95
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "insurance_expiry_date", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 97
        echo "                    </div>
                    <div class=\"form-group checkbox has-feedback";
        // line 98
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "warranty_validity", array())) ? (" has-error") : (""));
        echo "\">
                        <label for=\"warranty_val\">
                            <input type=\"checkbox\" name=\"warranty_val\" id=\"warranty_val\" value=\"0\" class=\"checkbox-inline\" onclick=\"showWarranty(this)\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "warranty_val", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "warranty_val", array())) : ("")), "html", null, true);
        echo "\"/>
                            &nbsp; Vehicle Under Warranty? &nbsp;
                        </label>
                        <input type=\"hidden\" name=\"warranty_validity\" id=\"warranty_validity\" class=\"checkbox-inline\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "warranty_validity", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "warranty_validity", array())) : ("0")), "html", null, true);
        echo "\"/>
                        ";
        // line 104
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "warranty_validity", array())) {
            // line 105
            echo "                            <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "warranty_validity", array())), "html", null, true);
            echo "</span>
                        ";
        }
        // line 107
        echo "                    </div>
                    <div id=\"warranty\" class=\"hidden\">
                        <div class=\"form-group has-feedback";
        // line 109
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "warranty_expiry_date", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"warranty_expiry_date\">Warranty Expiry (Date): &nbsp;</label>
                            <input type=\"text\" name=\"warranty_expiry_date\" id=\"warranty_expiry_date\" class=\"form-control date-picker\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "warranty_expiry_date", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "warranty_expiry_date", array())) : ("")), "html", null, true);
        echo "\"/>
                            ";
        // line 112
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "warranty_expiry_date", array())) {
            // line 113
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "warranty_expiry_date", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 115
        echo "                        </div>
                        <div class=\"form-group has-feedback";
        // line 116
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "warranty_expiry_mileage", array())) ? (" has-error") : (""));
        echo "\">
                            <label for=\"warranty_expiry_mileage\">Warranty Expiry (Mileage): &nbsp;</label>
                            <input type=\"number\" name=\"warranty_expiry_mileage\" id=\"warranty_expiry_mileage\" class=\"form-control\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "warranty_expiry_mileage", array())) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "warranty_expiry_mileage", array())) : ("0")), "html", null, true);
        echo "\"/>
                            ";
        // line 119
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "warranty_expiry_mileage", array())) {
            // line 120
            echo "                                <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "warranty_expiry_mileage", array())), "html", null, true);
            echo "</span>
                            ";
        }
        // line 122
        echo "                        </div>
                    </div>
                    <div id=\"newAttachment\" class=\"form-group\">
                        <label for=\"help-me\">Attachments:</label>
                        <p class=\"help-block\" id=\"help-me\"><span><i>Attach Images, Ownership, Insurance, or any other related documents<br/><mark>Remember to rename the files respectively</mark></i></span></p>
                        <input type=\"hidden\" id=\"attachmentCounter\" name=\"attachmentCounter\" value=\"-1\">
                        <input type=\"button\" id=\"add\" class=\"btn btn-xs\" onclick=\"showInput('divattachmentGroup', 'attachmentCounter')\" value=\"Add New\" title=\"Add new attachment field\"/> &nbsp;
                        <input type=\"button\" id=\"remove\" class=\"btn btn-xs btn-danger\" onclick=\"hideInput('divattachmentGroup', 'attachmentCounter')\" value=\"Remove\" title=\"Removes the last item\" />
                        <br/>
                        <div class=\"form-group bg-gray-light hidden has-feedback ";
        // line 131
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachment", array()), 0, array(), "array")) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup0\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment0\">
                                <label for=\"attachment0\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment0\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 137
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachment", array()), 1, array(), "array")) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup1\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment1\">
                                <label for=\"attachment1\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment1\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 143
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachment", array()), 2, array(), "array")) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup2\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment2\">
                                <label for=\"attachment2\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment2\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 149
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachment", array()), 3, array(), "array")) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup3\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment3\">
                                <label for=\"attachment3\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment3\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 155
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachment", array()), 4, array(), "array")) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup4\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment4\">
                                <label for=\"attachment4\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment4\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group hidden  has-feedback";
        // line 161
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachment", array()), 5, array(), "array")) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType5", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer5", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate5", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate5", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup5\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment5\">
                                <label for=\"attachment5\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment5\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 167
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachment", array()), 6, array(), "array")) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup6\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment6\">
                                <label for=\"attachment6\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment6\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 173
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachment", array()), 7, array(), "array")) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup7\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment7\">
                                <label for=\"attachment7\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment7\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback";
        // line 179
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachment", array()), 8, array(), "array")) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup8\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment8\">
                                <label for=\"attachment8\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment8\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback";
        // line 185
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachment", array()), 9, array(), "array")) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentType9", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssuer9", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentIssueDate9", array())) ? (" has-error") : (""));
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "attachmentExpiryDate9", array())) ? (" has-error") : (""));
        echo "\" id=\"divattachmentGroup9\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment9\">
                                <label for=\"attachment9\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment9\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class=\"form-group has-feedback\">
                        <input type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-primary\" value=\"Save Vehicle\" />
                    </div>
                </form>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "auth/Operations/Assets/Trucks/newTruck.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 185,  447 => 179,  438 => 173,  429 => 167,  416 => 161,  407 => 155,  398 => 149,  389 => 143,  380 => 137,  371 => 131,  360 => 122,  354 => 120,  352 => 119,  348 => 118,  343 => 116,  340 => 115,  334 => 113,  332 => 112,  328 => 111,  323 => 109,  319 => 107,  313 => 105,  311 => 104,  307 => 103,  301 => 100,  296 => 98,  293 => 97,  287 => 95,  285 => 94,  281 => 93,  276 => 91,  273 => 90,  267 => 88,  265 => 87,  261 => 86,  256 => 84,  253 => 83,  247 => 81,  245 => 80,  241 => 79,  236 => 77,  233 => 76,  227 => 74,  225 => 73,  221 => 72,  216 => 70,  213 => 69,  207 => 67,  205 => 66,  201 => 65,  196 => 63,  193 => 62,  187 => 60,  185 => 59,  181 => 58,  176 => 56,  173 => 55,  167 => 53,  165 => 52,  161 => 51,  156 => 49,  153 => 48,  147 => 46,  145 => 45,  141 => 44,  136 => 42,  133 => 41,  127 => 39,  125 => 38,  118 => 34,  115 => 33,  109 => 31,  107 => 30,  104 => 29,  89 => 27,  85 => 26,  78 => 22,  75 => 21,  69 => 19,  67 => 18,  63 => 17,  58 => 15,  54 => 14,  50 => 13,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}

{% block title %}Assets & Resources - New Truck Registration{% endblock %}

{% block contents %}
    <section class=\"content\">
        <div class=\"raw\">
            <div class=\"register-logo\">
                <a href=\"{{ base_url() }}\"><b>MENA</b> Assistance</a>
            </div>
            <div class=\"register-box-body\">
                <p class=\"login-box-msg\">Register a new Vehicle</p>
                <form action=\"{{ path_for('OPS.Assets.NewTruck') }}\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\" >
                    {{ csrf.field | raw }}
                    <div class=\"form-group has-feedback{{ errors.vin ? ' has-error' : '' }}\">
                        <label for=\"vin\">VIN (Chassis): &nbsp;</label>
                        <input type=\"text\" name=\"vin\" id=\"vin\" class=\"form-control\" placeholder=\"1AA2BBCC3DD456789\" maxlength=\"17\" value=\"{{ old.vin ?: '' }}\"/>
                        {% if errors.vin %}
                            <span class=\"help-block\">{{ errors.vin | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.brand ? ' has-error' : '' }}\">
                        <label for=\"brand\">Vehicle Brand: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        <select class=\"form-control\" name=\"brand\" id=\"brand\" onchange=\"getModel(this,'model')\">
                            <option value=\"\">Please Select ... </option>
                            {% for brand in OPS.Brands %}
                                <option value=\"{{ brand.brand_name }}\" {% if brand.id == old.brand %}selected{% endif %}>{{ brand.brand_name | e }}</option>
                            {% endfor %}
                        </select>
                        {% if errors.brand %}
                            <span class=\"help-block\">{{ errors.brand | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.model ? ' has-error' : '' }}\">
                        <label for=\"model\">Vehicle Model: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        <select class=\"form-control\" name=\"model\" id=\"model\">
                        </select>
                        {% if errors.model %}
                            <span class=\"help-block\">{{ errors.model | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.model_year ? ' has-error' : '' }}\">
                        <label for=\"model_year\">Vehicle Model Year: &nbsp;</label><span class=\"text-red\"><b>*</b></span>
                        <input type=\"number\" name=\"model_year\" class=\"form-control\" id=\"model_year\" min=\"2000\" max=\"2099\" placeholder=\"2017\" value=\"{{ old.model_year?: '' }}\"/>
                        {% if errors.model_year %}
                            <span class=\"help-block\">{{ errors.model_year | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.registration_code ? ' has-error' : '' }}\">
                        <label for=\"registration_code\">Registration Code: &nbsp;</label>
                        <input type=\"text\" name=\"registration_code\" id=\"registration_code\" class=\"form-control\" placeholder=\"A\" value=\"{{ old.registration_code ?: '' }}\"/>
                        {% if errors.registration_code %}
                            <span class=\"help-block\">{{ errors.registration_code | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.registration_number ? ' has-error' : '' }}\">
                        <label for=\"registration_number\">Registration Number: &nbsp;</label>
                        <input type=\"number\" name=\"registration_number\" id=\"registration_number\" class=\"form-control\" placeholder=\"12345\" value=\"{{ old.registration_number ?: '' }}\"/>
                        {% if errors.registration_number %}
                            <span class=\"help-block\">{{ errors.registration_number | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.first_registration ? ' has-error' : '' }}\">
                        <label for=\"first_registration\">Vehicle First Registered On: &nbsp;</label>
                        <input type=\"text\" name=\"first_registration\" id=\"first_registration\" class=\"form-control date-picker\" value=\"{{ old.first_registration ?: '' }}\"/>
                        {% if errors.first_registration %}
                            <span class=\"help-block\">{{ errors.first_registration | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.registration_expiry ? ' has-error' : '' }}\">
                        <label for=\"registration_expiry\">Vehicle Registration Expiry Date: &nbsp;</label>
                        <input type=\"text\" name=\"registration_expiry\" id=\"registration_expiry\" class=\"form-control date-picker\" value=\"{{ old.registration_expiry ?: '' }}\"/>
                        {% if errors.registration_expiry %}
                            <span class=\"help-block\">{{ errors.registration_expiry | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.insurance_company ? ' has-error' : '' }}\">
                        <label for=\"insurance_company\">Insurance Company: &nbsp;</label>
                        <input type=\"text\" name=\"insurance_company\" id=\"insurance_company\" class=\"form-control\" placeholder=\"Insurance Company PJSC.\" value=\"{{ old.insurance_company ?: '' }}\"/>
                        {% if errors.insurance_company %}
                            <span class=\"help-block\">{{ errors.insurance_company | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.insurance_start_date ? ' has-error' : '' }}\">
                        <label for=\"insurance_start_date\">Insurance Date (From): &nbsp;</label>
                        <input type=\"text\" name=\"insurance_start_date\" id=\"insurance_start_date\" class=\"form-control date-picker\" value=\"{{ old.insurance_start_date ?: '' }}\"/>
                        {% if errors.insurance_start_date %}
                            <span class=\"help-block\">{{ errors.insurance_start_date | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group has-feedback{{ errors.insurance_expiry_date ? ' has-error' : '' }}\">
                        <label for=\"insurance_expiry_date\">Insurance Date (To): &nbsp;</label>
                        <input type=\"text\" name=\"insurance_expiry_date\" id=\"insurance_expiry_date\" class=\"form-control date-picker\" value=\"{{ old.insurance_expiry_date ?: '' }}\"/>
                        {% if errors.insurance_expiry_date %}
                            <span class=\"help-block\">{{ errors.insurance_expiry_date | first }}</span>
                        {% endif %}
                    </div>
                    <div class=\"form-group checkbox has-feedback{{ errors.warranty_validity ? ' has-error' : '' }}\">
                        <label for=\"warranty_val\">
                            <input type=\"checkbox\" name=\"warranty_val\" id=\"warranty_val\" value=\"0\" class=\"checkbox-inline\" onclick=\"showWarranty(this)\" value=\"{{ old.warranty_val ?: '' }}\"/>
                            &nbsp; Vehicle Under Warranty? &nbsp;
                        </label>
                        <input type=\"hidden\" name=\"warranty_validity\" id=\"warranty_validity\" class=\"checkbox-inline\" value=\"{{ old.warranty_validity ?: '0' }}\"/>
                        {% if errors.warranty_validity %}
                            <span class=\"help-block\">{{ errors.warranty_validity | first }}</span>
                        {% endif %}
                    </div>
                    <div id=\"warranty\" class=\"hidden\">
                        <div class=\"form-group has-feedback{{ errors.warranty_expiry_date ? ' has-error' : '' }}\">
                            <label for=\"warranty_expiry_date\">Warranty Expiry (Date): &nbsp;</label>
                            <input type=\"text\" name=\"warranty_expiry_date\" id=\"warranty_expiry_date\" class=\"form-control date-picker\" value=\"{{ old.warranty_expiry_date ?: '' }}\"/>
                            {% if errors.warranty_expiry_date %}
                                <span class=\"help-block\">{{ errors.warranty_expiry_date | first }}</span>
                            {% endif %}
                        </div>
                        <div class=\"form-group has-feedback{{ errors.warranty_expiry_mileage ? ' has-error' : '' }}\">
                            <label for=\"warranty_expiry_mileage\">Warranty Expiry (Mileage): &nbsp;</label>
                            <input type=\"number\" name=\"warranty_expiry_mileage\" id=\"warranty_expiry_mileage\" class=\"form-control\" value=\"{{ old.warranty_expiry_mileage ?: '0' }}\"/>
                            {% if errors.warranty_expiry_mileage %}
                                <span class=\"help-block\">{{ errors.warranty_expiry_mileage | first }}</span>
                            {% endif %}
                        </div>
                    </div>
                    <div id=\"newAttachment\" class=\"form-group\">
                        <label for=\"help-me\">Attachments:</label>
                        <p class=\"help-block\" id=\"help-me\"><span><i>Attach Images, Ownership, Insurance, or any other related documents<br/><mark>Remember to rename the files respectively</mark></i></span></p>
                        <input type=\"hidden\" id=\"attachmentCounter\" name=\"attachmentCounter\" value=\"-1\">
                        <input type=\"button\" id=\"add\" class=\"btn btn-xs\" onclick=\"showInput('divattachmentGroup', 'attachmentCounter')\" value=\"Add New\" title=\"Add new attachment field\"/> &nbsp;
                        <input type=\"button\" id=\"remove\" class=\"btn btn-xs btn-danger\" onclick=\"hideInput('divattachmentGroup', 'attachmentCounter')\" value=\"Remove\" title=\"Removes the last item\" />
                        <br/>
                        <div class=\"form-group bg-gray-light hidden has-feedback {{ errors.attachment[0] ? ' has-error': '' }}\" id=\"divattachmentGroup0\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment0\">
                                <label for=\"attachment0\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment0\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback{{ errors.attachment[1] ? ' has-error' : '' }}\" id=\"divattachmentGroup1\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment1\">
                                <label for=\"attachment1\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment1\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback{{ errors.attachment[2] ? ' has-error' : '' }}\" id=\"divattachmentGroup2\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment2\">
                                <label for=\"attachment2\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment2\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback{{ errors.attachment[3] ? ' has-error' : '' }}\" id=\"divattachmentGroup3\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment3\">
                                <label for=\"attachment3\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment3\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback{{ errors.attachment[4] ? ' has-error' : '' }}\" id=\"divattachmentGroup4\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment4\">
                                <label for=\"attachment4\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment4\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group hidden  has-feedback{{ errors.attachment[5] ? ' has-error' : '' }}{{ errors.attachmentType5 ? ' has-error' : '' }}{{ errors.attachmentIssuer5 ? ' has-error' : '' }}{{ errors.attachmentIssueDate5 ? ' has-error' : '' }}{{ errors.attachmentExpiryDate5 ? ' has-error' : '' }}\" id=\"divattachmentGroup5\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment5\">
                                <label for=\"attachment5\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment5\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback{{ errors.attachment[6] ? ' has-error' : '' }}\" id=\"divattachmentGroup6\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment6\">
                                <label for=\"attachment6\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment6\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback{{ errors.attachment[7] ? ' has-error' : '' }}\" id=\"divattachmentGroup7\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment7\">
                                <label for=\"attachment7\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment7\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group bg-gray-light hidden has-feedback{{ errors.attachment[8] ? ' has-error' : '' }}\" id=\"divattachmentGroup8\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment8\">
                                <label for=\"attachment8\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment8\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                        <div class=\"form-group hidden has-feedback{{ errors.attachment[9] ? ' has-error' : '' }}{{ errors.attachmentType9 ? ' has-error' : '' }}{{ errors.attachmentIssuer9 ? ' has-error' : '' }}{{ errors.attachmentIssueDate9 ? ' has-error' : '' }}{{ errors.attachmentExpiryDate9 ? ' has-error' : '' }}\" id=\"divattachmentGroup9\">
                            <div class=\"input-group inline has-feedback\" id=\"div2attachment9\">
                                <label for=\"attachment9\">File: &nbsp;</label>
                                <input type=\"file\" id=\"attachment9\" name=\"attachment[]\" class=\"btn btn-default btn-file\"> &nbsp;
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class=\"form-group has-feedback\">
                        <input type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-primary\" value=\"Save Vehicle\" />
                    </div>
                </form>
            </div>
        </div>
{% endblock %}
", "auth/Operations/Assets/Trucks/newTruck.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/Operations/Assets/Trucks/newTruck.twig");
    }
}
