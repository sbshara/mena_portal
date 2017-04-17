<?php

/* templates/app.twig */
class __TwigTemplate_86f00148bd14c17a66a7edefe695a225de23977259656de72cd6d20415cfe003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contents' => array($this, 'block_contents'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>MENA Assistance | ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/img/favicon.png\">
    <!-- Bootstrap 3.3.6 -->
    ";
        // line 16
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- JQuery UI CSS 1.12.1 -->
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/iCheck/square/blue.css\">
    <!-- Pace style -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/pace/pace.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/AdminLTE.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/skins/_all-skins.min.css\">
    <!-- daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/daterangepicker/daterangepicker.css\">
    <!-- bootstrap datepicker -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/datepicker/datepicker3.css\">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/iCheck/all.css\">
    <!--Personalized CSS Rules-->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/app.css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
";
        // line 47
        echo "    ";
        // line 49
        echo "<body class=\"hold-transition skin-";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "theme_color", array())) ? ($this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "theme_color", array())) : ("blue")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "sidebar_collapsed", array())) ? ($this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "sidebar_collapsed", array())) : ("sidebar-collapse")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "sidebar_mini", array())) ? ($this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "sidebar_mini", array())) : ("sidebar-mini")), "html", null, true);
        echo "\">
";
        // line 51
        echo "<div class=\"wrapper\">
<!-- Main Header -->
<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\"><b>M</b><i>A</i></span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\"><b>MENA</b><i> Assistance</i></span>
    </a>

    <!-- Header Navbar -->
    ";
        // line 63
        $this->loadTemplate("templates/partials/topNavigation.twig", "templates/app.twig", 63)->display($context);
        // line 64
        echo "</header>

<!-- Left side column. contains the logo and sidebar -->
";
        // line 67
        if ($this->getAttribute(($context["auth"] ?? null), "check", array())) {
            // line 68
            echo "    ";
            $this->loadTemplate("templates/partials/leftNavigation.twig", "templates/app.twig", 68)->display($context);
            // line 69
            echo "<!-- END OF LEFT SIDE COLUMN -->
";
        }
        // line 71
        echo "
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
        <!-- Flash Messages -->
        ";
        // line 75
        $this->loadTemplate("templates/partials/flash.twig", "templates/app.twig", 75)->display($context);
        // line 76
        echo "        <!-- /.Flash Messages -->


    ";
        // line 79
        $this->displayBlock('contents', $context, $blocks);
        // line 81
        echo "


    </section>
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class=\"main-footer\">
    <!-- To the right -->
    <div class=\"pull-right hidden-xs\">
        Version 0.1 -- Dec 2016
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href=\"#\">MENA Assistance</a>.</strong> All rights reserved.
</footer>
";
        // line 97
        if ($this->getAttribute(($context["auth"] ?? null), "check", array())) {
            // line 98
            echo "    ";
            $this->loadTemplate("templates/partials/rightNavigation.twig", "templates/app.twig", 98)->display($context);
        }
        // line 100
        echo "</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.4 -->
";
        // line 105
        echo "<script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
<!-- Select2 -->
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/select2/select2.full.min.js\"></script>
<!-- InputMask -->
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/input-mask/jquery.inputmask.js\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/input-mask/jquery.inputmask.date.extensions.js\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/input-mask/jquery.inputmask.extensions.js\"></script>
<!-- date-range-picker -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/daterangepicker/daterangepicker.js\"></script>
<!-- bootstrap datepicker -->
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/datepicker/bootstrap-datepicker.js\"></script>
<!-- bootstrap color picker -->
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/colorpicker/bootstrap-colorpicker.min.js\"></script>
<!-- bootstrap time picker -->
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/timepicker/bootstrap-timepicker.min.js\"></script>
<!-- SlimScroll 1.3.0 -->
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/slimScroll/jquery.slimscroll.min.js\"></script>
<!-- iCheck -->
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/iCheck/icheck.min.js\"></script>
<!-- FastClick -->
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/fastclick/fastclick.js\"></script>
<!-- PACE -->
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/pace/pace.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/app.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/demo.js\"></script>
<!-- JQuery UI Lib -->
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<!-- My Custom functions JS -->
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/shiblie.js\"></script>
<script>
//    function applicantAutoComplete(){
//        var minLen = 0;
//        var Shiblie = \$('#applicant_name').text();
//        if(Shiblie.toString().length > minLen){
//            \$.ajax({
//                url:        'http://localhost/~shiblie/vehicle_service/public/auth/employee/' + Shiblie.text(),
//                type:       'POST',
//                data:       {keyword:Shiblie},
//                success:    function(data){
//                    \$('#applicant_option').show();
//                    \$('#applicant_option').attr('value', data);
//                }
//            });
//        } else {
//            \$('#applicant_option').hide()
//        }
//    }

</script>


</body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
    }

    // line 79
    public function block_contents($context, array $blocks = array())
    {
        // line 80
        echo "    ";
    }

    public function getTemplateName()
    {
        return "templates/app.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 80,  303 => 79,  298 => 10,  268 => 138,  261 => 134,  256 => 132,  251 => 130,  246 => 128,  241 => 126,  236 => 124,  231 => 122,  226 => 120,  221 => 118,  216 => 116,  210 => 113,  206 => 112,  202 => 111,  197 => 109,  192 => 107,  188 => 105,  182 => 100,  178 => 98,  176 => 97,  158 => 81,  156 => 79,  151 => 76,  149 => 75,  143 => 71,  139 => 69,  136 => 68,  134 => 67,  129 => 64,  127 => 63,  116 => 55,  110 => 51,  101 => 49,  99 => 47,  87 => 37,  82 => 35,  77 => 33,  72 => 31,  67 => 29,  63 => 28,  58 => 26,  53 => 24,  43 => 16,  38 => 13,  32 => 10,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>MENA Assistance | {% block title %}{% endblock %}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ base_url() }}/img/favicon.png\">
    <!-- Bootstrap 3.3.6 -->
    {#<link rel=\"stylesheet\" href=\"{{ base_url() }}/css/bootstrap.min.css\">#}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- JQuery UI CSS 1.12.1 -->
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/plugins/iCheck/square/blue.css\">
    <!-- Pace style -->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/plugins/pace/pace.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/AdminLTE.min.css\">
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/skins/_all-skins.min.css\">
    <!-- daterange picker -->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/plugins/daterangepicker/daterangepicker.css\">
    <!-- bootstrap datepicker -->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/plugins/datepicker/datepicker3.css\">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/plugins/iCheck/all.css\">
    <!--Personalized CSS Rules-->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/app.css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
{#{% block bodyTags %}#}
    {#hold-transition skin-blue sidebar-collapse sidebar-mini#}
{#{% endblock %}#}
<body class=\"hold-transition skin-{{ auth.userMaster.theme_color ? auth.userMaster.theme_color : 'blue'}} {{ auth.userMaster.sidebar_collapsed ? auth.userMaster.sidebar_collapsed : 'sidebar-collapse' }} {{ auth.userMaster.sidebar_mini ? auth.userMaster.sidebar_mini : 'sidebar-mini' }}\">
{#<body class=\"hold-transition skin-blue sidebar-collapse sidebar-mini\">#}
<div class=\"wrapper\">
<!-- Main Header -->
<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"{{ base_url() }}\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\"><b>M</b><i>A</i></span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\"><b>MENA</b><i> Assistance</i></span>
    </a>

    <!-- Header Navbar -->
    {% include 'templates/partials/topNavigation.twig' %}
</header>

<!-- Left side column. contains the logo and sidebar -->
{% if auth.check %}
    {% include 'templates/partials/leftNavigation.twig' %}
<!-- END OF LEFT SIDE COLUMN -->
{% endif %}

<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
        <!-- Flash Messages -->
        {% include 'templates/partials/flash.twig' %}
        <!-- /.Flash Messages -->


    {% block contents %}
    {% endblock %}



    </section>
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class=\"main-footer\">
    <!-- To the right -->
    <div class=\"pull-right hidden-xs\">
        Version 0.1 -- Dec 2016
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href=\"#\">MENA Assistance</a>.</strong> All rights reserved.
</footer>
{% if auth.check %}
    {% include 'templates/partials/rightNavigation.twig' %}
{% endif %}
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.4 -->
{#<script src=\"{{ base_url() }}/plugins/jQuery/jquery-2.2.3.min.js\"></script>#}
<script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"{{ base_url() }}/js/bootstrap.min.js\"></script>
<!-- Select2 -->
<script src=\"{{ base_url() }}/plugins/select2/select2.full.min.js\"></script>
<!-- InputMask -->
<script src=\"{{ base_url() }}/plugins/input-mask/jquery.inputmask.js\"></script>
<script src=\"{{ base_url() }}/plugins/input-mask/jquery.inputmask.date.extensions.js\"></script>
<script src=\"{{ base_url() }}/plugins/input-mask/jquery.inputmask.extensions.js\"></script>
<!-- date-range-picker -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
<script src=\"{{ base_url() }}/plugins/daterangepicker/daterangepicker.js\"></script>
<!-- bootstrap datepicker -->
<script src=\"{{ base_url() }}/plugins/datepicker/bootstrap-datepicker.js\"></script>
<!-- bootstrap color picker -->
<script src=\"{{ base_url() }}/plugins/colorpicker/bootstrap-colorpicker.min.js\"></script>
<!-- bootstrap time picker -->
<script src=\"{{ base_url() }}/plugins/timepicker/bootstrap-timepicker.min.js\"></script>
<!-- SlimScroll 1.3.0 -->
<script src=\"{{ base_url() }}/plugins/slimScroll/jquery.slimscroll.min.js\"></script>
<!-- iCheck -->
<script src=\"{{ base_url() }}/plugins/iCheck/icheck.min.js\"></script>
<!-- FastClick -->
<script src=\"{{ base_url() }}/plugins/fastclick/fastclick.js\"></script>
<!-- PACE -->
<script src=\"{{ base_url() }}/plugins/pace/pace.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"{{ base_url() }}/js/app.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"{{ base_url() }}/js/demo.js\"></script>
<!-- JQuery UI Lib -->
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<!-- My Custom functions JS -->
<script src=\"{{ base_url() }}/js/shiblie.js\"></script>
<script>
//    function applicantAutoComplete(){
//        var minLen = 0;
//        var Shiblie = \$('#applicant_name').text();
//        if(Shiblie.toString().length > minLen){
//            \$.ajax({
//                url:        'http://localhost/~shiblie/vehicle_service/public/auth/employee/' + Shiblie.text(),
//                type:       'POST',
//                data:       {keyword:Shiblie},
//                success:    function(data){
//                    \$('#applicant_option').show();
//                    \$('#applicant_option').attr('value', data);
//                }
//            });
//        } else {
//            \$('#applicant_option').hide()
//        }
//    }

</script>


</body>
</html>
", "templates/app.twig", "/Users/shiblie/Sites/mena_portal/resources/views/templates/app.twig");
    }
}
