<?php

/* auth/TMS/Services/NewService.twig */
class __TwigTemplate_36dcd84559d8f6d6b4c2c17314c614ca5ca893bbf1dea2b3719cfc40fef900f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/TMS/Services/NewService.twig", 1);
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
        echo "TMS - New Service & Maintenance Record";
    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        // line 6
        echo "    <section class=\"content-header\">
        <h1>
            New Service & Maintenance
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.Home"), "html", null, true);
        echo "\">TMS</a></li>
            <li class=\"active\">New Services</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class=\"content\">
        <div class=\"box-header has-border\">
            <h3 class=\"box-title\">New Service & Maintenance Record</h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 23
        echo "                ";
        // line 24
        echo "
                ";
        // line 26
        echo "                    ";
        // line 27
        echo "                    ";
        // line 28
        echo "                        ";
        // line 29
        echo "                        ";
        // line 30
        echo "                            ";
        // line 31
        echo "                        ";
        // line 32
        echo "                    ";
        // line 33
        echo "                    ";
        // line 34
        echo "                        ";
        // line 35
        echo "                    ";
        // line 36
        echo "                ";
        // line 37
        echo "
                ";
        // line 39
        echo "                    ";
        // line 40
        echo "                    ";
        // line 41
        echo "                        ";
        // line 42
        echo "                        ";
        // line 43
        echo "                            ";
        // line 44
        echo "                        ";
        // line 45
        echo "                    ";
        // line 46
        echo "                    ";
        // line 47
        echo "                        ";
        // line 48
        echo "                    ";
        // line 49
        echo "                ";
        // line 50
        echo "
                ";
        // line 52
        echo "                    ";
        // line 53
        echo "                    ";
        // line 54
        echo "                        ";
        // line 55
        echo "                        ";
        // line 56
        echo "                    ";
        // line 57
        echo "                    ";
        // line 58
        echo "                        ";
        // line 59
        echo "                    ";
        // line 60
        echo "                ";
        // line 61
        echo "
                ";
        // line 63
        echo "                    ";
        // line 64
        echo "                    ";
        // line 65
        echo "                        ";
        // line 66
        echo "                        ";
        // line 67
        echo "                        ";
        // line 68
        echo "                    ";
        // line 69
        echo "                    ";
        // line 70
        echo "                        ";
        // line 71
        echo "                    ";
        // line 72
        echo "                ";
        // line 73
        echo "
                ";
        // line 75
        echo "                    ";
        // line 76
        echo "                    ";
        // line 77
        echo "                        ";
        // line 78
        echo "                            ";
        // line 79
        echo "                        ";
        // line 80
        echo "                        ";
        // line 81
        echo "                    ";
        // line 82
        echo "                    ";
        // line 83
        echo "                        ";
        // line 84
        echo "                    ";
        // line 85
        echo "                ";
        // line 86
        echo "
                ";
        // line 88
        echo "                    ";
        // line 89
        echo "                    ";
        // line 90
        echo "                        ";
        // line 91
        echo "                            ";
        // line 92
        echo "                        ";
        // line 93
        echo "                        ";
        // line 94
        echo "                    ";
        // line 95
        echo "                    ";
        // line 96
        echo "                        ";
        // line 97
        echo "                    ";
        // line 98
        echo "                ";
        // line 99
        echo "
                ";
        // line 101
        echo "                    ";
        // line 102
        echo "                    ";
        // line 103
        echo "                        ";
        // line 104
        echo "                    ";
        // line 105
        echo "                    ";
        // line 106
        echo "                        ";
        // line 107
        echo "                    ";
        // line 108
        echo "                ";
        // line 109
        echo "                    ";
        // line 110
        echo "                    ";
        // line 111
        echo "
                ";
        // line 113
        echo "                    ";
        // line 114
        echo "                           ";
        // line 115
        echo "                ";
        // line 116
        echo "                ";
        // line 117
        echo "            ";
        // line 118
        echo "            ";
        // line 119
        echo "                <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.Upload"), "html", null, true);
        echo "\" class=\"dropzone\" method=\"post\" id=\"serviceAttachment\" enctype=\"multipart/form-data\">
                    ";
        // line 120
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["csrf"] ?? null), "field", array());
        echo "
                    <div class=\"fallback\">
                        <input name=\"serviceAttachment\" type=\"file\" class=\"form-control\"/>
                    </div>
                    <input type=\"button\" value=\"Upload\" name=\"upload\" id=\"upload\"/>

                </form>
            ";
        // line 128
        echo "        </div>
";
    }

    public function getTemplateName()
    {
        return "auth/TMS/Services/NewService.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 128,  251 => 120,  246 => 119,  244 => 118,  242 => 117,  240 => 116,  238 => 115,  236 => 114,  234 => 113,  231 => 111,  229 => 110,  227 => 109,  225 => 108,  223 => 107,  221 => 106,  219 => 105,  217 => 104,  215 => 103,  213 => 102,  211 => 101,  208 => 99,  206 => 98,  204 => 97,  202 => 96,  200 => 95,  198 => 94,  196 => 93,  194 => 92,  192 => 91,  190 => 90,  188 => 89,  186 => 88,  183 => 86,  181 => 85,  179 => 84,  177 => 83,  175 => 82,  173 => 81,  171 => 80,  169 => 79,  167 => 78,  165 => 77,  163 => 76,  161 => 75,  158 => 73,  156 => 72,  154 => 71,  152 => 70,  150 => 69,  148 => 68,  146 => 67,  144 => 66,  142 => 65,  140 => 64,  138 => 63,  135 => 61,  133 => 60,  131 => 59,  129 => 58,  127 => 57,  125 => 56,  123 => 55,  121 => 54,  119 => 53,  117 => 52,  114 => 50,  112 => 49,  110 => 48,  108 => 47,  106 => 46,  104 => 45,  102 => 44,  100 => 43,  98 => 42,  96 => 41,  94 => 40,  92 => 39,  89 => 37,  87 => 36,  85 => 35,  83 => 34,  81 => 33,  79 => 32,  77 => 31,  75 => 30,  73 => 29,  71 => 28,  69 => 27,  67 => 26,  64 => 24,  62 => 23,  49 => 12,  45 => 11,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}

{% block title %}TMS - New Service & Maintenance Record{% endblock %}

{% block contents %}
    <section class=\"content-header\">
        <h1>
            New Service & Maintenance
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"{{ base_url() }}\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"{{ path_for('TMS.Home') }}\">TMS</a></li>
            <li class=\"active\">New Services</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class=\"content\">
        <div class=\"box-header has-border\">
            <h3 class=\"box-title\">New Service & Maintenance Record</h3>
        </div>
        <div class=\"box-body\">
            {#<div class=\"col-lg-8 col-md-8\">#}
                {#<form action=\"{{ path_for('TMS.NewService') }}\" method=\"post\" autocomplete=\"on\" enctype=\"multipart/form-data\" >#}

                {#<div class=\"form-group has-feedback{{ errors.truck ? ' has-error' : '' }}\">#}
                    {#<label for=\"truck\">Truck / Vehicle: &nbsp; <span class=\"text-red\">*</span></label>#}
                    {#<select class=\"form-control\" name=\"truck\" id=\"truck\">#}
                        {#<option value=\"\">Please Select A Vehicle / Truck ...</option>#}
                        {#{% for vehicle in OPS.Vehicles %}#}
                            {#<option value=\"{{ vehicle.id }}\" {% if vehicle.id == old.truck %}selected{% endif %}>{{ vehicle.nickName() | e }}</option>#}
                        {#{% endfor %}#}
                    {#</select>#}
                    {#{% if errors.truck %}#}
                        {#<span class=\"help-block\">{{ errors.truck | first }}</span>#}
                    {#{% endif %}#}
                {#</div>#}

                {#<div class=\"form-group has-feedback{{ errors.category ? ' has-error' : '' }}\">#}
                    {#<label for=\"category\">Category: &nbsp; <span class=\"text-red\">*</span></label>#}
                    {#<select class=\"form-control\">#}
                        {#<option value=\"\">Please Select a Category ...</option>#}
                        {#{% for category in OPS.Categories %}#}
                            {#<option value=\"{{ category.id }}\"{% if category.id == old.category %}selected{% endif %}>{{ category.category | e }}</option>#}
                        {#{% endfor %}#}
                    {#</select>#}
                    {#{% if errors.category %}#}
                        {#<span class=\"help-block\">{{ errors.category | first }}</span>#}
                    {#{% endif %}#}
                {#</div>#}

                {#<div class=\"form-group has-feedback{{ errors.mileage ? ' has-error' : '' }}\">#}
                    {#<label for=\"mileage\">Current Mileage: &nbsp;</label>#}
                    {#<div class=\"input-group has-feedback\">#}
                        {#<span class=\"input-group-addon\">KMs</span>#}
                        {#<input type=\"number\" name=\"mileage\" id=\"mileage\" class=\"form-control\" value=\"{{ old.mileage ?: '' }}\" min=\"0\" max=\"10000000\" placeholder=\"68000\"/>#}
                    {#</div>#}
                    {#{% if errors.mileage %}#}
                        {#<span class=\"help-block\">{{ errors.mileage | first }}</span>#}
                    {#{% endif %}#}
                {#</div>#}

                {#<div class=\"form-group has-feedback{{ errors.cost ? ' has-error' : '' }}\">#}
                    {#<label for=\"cost\">Cost: &nbsp;</label>#}
                    {#<div class=\"input-group has-feedback\">#}
                        {#<span class=\"input-group-addon\">AED</span>#}
                        {#<input type=\"number\" name=\"cost\" id=\"cost\" class=\"form-control\" value=\"{{ old.cost ?: '' }}\" min=\"0\" max=\"500000\" placeholder=\"1200\"/>#}
                        {#<span class=\"input-group-addon\">.00</span>#}
                    {#</div>#}
                    {#{% if errors.cost %}#}
                        {#<span class=\"help-block\">{{ errors.cost | first }}</span>#}
                    {#{% endif %}#}
                {#</div>#}

                {#<div class=\"form-group has-feedback{{ errors.startDate ? ' has-error' : '' }}\">#}
                    {#<label for=\"startDate\">Service Date (From): &nbsp; <span class=\"text-red\">*</span></label>#}
                    {#<div class=\"input-group date\">#}
                        {#<div class=\"input-group-addon\">#}
                            {#<i class=\"fa fa-calendar\"></i>#}
                        {#</div>#}
                        {#<input type=\"text\" class=\"form-control pull-right date-picker\" name=\"startDate\" id=\"startDate\" value=\"{{ old.startDate ?: '' }}\">#}
                    {#</div>#}
                    {#{% if errors.startDate %}#}
                        {#<span class=\"help-block\">{{ errors.startDate | first }}</span>#}
                    {#{% endif %}#}
                {#</div>#}

                {#<div class=\"form-group has-feedback{{ errors.endDate ? ' has-error' : '' }}\">#}
                    {#<label for=\"endDate\">Service Date (To): &nbsp;</label>#}
                    {#<div class=\"input-group date\">#}
                        {#<div class=\"input-group-addon\">#}
                            {#<i class=\"fa fa-calendar\"></i>#}
                        {#</div>#}
                        {#<input type=\"text\" class=\"form-control pull-right date-picker\" name=\"endDate\" id=\"endDate\" value=\"{{ old.endDate ?: '2017-01-01' }}\">#}
                    {#</div>#}
                    {#{% if errors.endDate %}#}
                        {#<span class=\"help-block\">{{ errors.endDate | first }}</span>#}
                    {#{% endif %}#}
                {#</div>#}

                {#<div class=\"form-group has-feedback{{ errors.serviceDetails ? ' has-error' : '' }}\">#}
                    {#<label for=\"serviceDetails\">Service Details: &nbsp; <span class=\"text-red\">*</span></label>#}
                    {#<textarea name=\"serviceDetails\" id=\"serviceDetails\" cols=\"30\" rows=\"8\" class=\"form-control\">#}
                        {#Service & Maintenance Details. (You can use text formatting in this area. try it out)#}
                    {#</textarea>#}
                    {#{% if errors.serviceDetails %}#}
                        {#<span class=\"help-block\">{{ errors.serviceDetails | first }}</span>#}
                    {#{% endif %}#}
                {#</div>#}
                    {#{{ csrf.field | raw }}#}
                    {#<br/>#}

                {#<div class=\"form-group has-feedback\">#}
                    {#<input type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-primary pull-right\"#}
                           {#value=\"Create Service & Maintenance Record\"/>#}
                {#</div>#}
                {#</form>#}
            {#</div>#}
            {#<div class=\"col-lg-4 col-md-4\">#}
                <form action=\"{{ path_for('TMS.Upload') }}\" class=\"dropzone\" method=\"post\" id=\"serviceAttachment\" enctype=\"multipart/form-data\">
                    {{ csrf.field | raw }}
                    <div class=\"fallback\">
                        <input name=\"serviceAttachment\" type=\"file\" class=\"form-control\"/>
                    </div>
                    <input type=\"button\" value=\"Upload\" name=\"upload\" id=\"upload\"/>

                </form>
            {#</div>#}
        </div>
{% endblock %}", "auth/TMS/Services/NewService.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/TMS/Services/NewService.twig");
    }
}
