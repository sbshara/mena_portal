<?php

/* templates/app.twig */
class __TwigTemplate_2879571f65fd32e32d6c39ee1bdc6046ee378215ec06cb9ee5a6510f56ac13f8 extends Twig_Template
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
        ob_start();
        // line 2
        echo "<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"utf-8\">
    <!-- IE EDGE META TAG -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <!-- Bootstrap 3.3.7 -->
    ";
        // line 16
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css\">
    <!-- VECTOR MAPS CSS (JS LOADED BELOW) -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/jvectormap/jquery-jvectormap-1.2.2.css\">
    <!-- Font Awesome -->
    ";
        // line 22
        echo "    ";
        // line 23
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/font-awesome.min.css\">
    <!-- Ionicons -->
    ";
        // line 26
        echo "    ";
        // line 27
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/ionicons.min.css\">
    <!-- JQuery UI CSS 1.12.1 -->
    ";
        // line 30
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/jquery-ui.min.css\">
    <!-- iCheck -->
    ";
        // line 33
        echo "    <!-- Pace style -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/pace/pace.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/AdminLTE.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/skins/_all-skins.min.css\">
    <!-- daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/daterangepicker/daterangepicker.css\">
    <!-- bootstrap datepicker -->
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/datepicker/datepicker3.css\">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/iCheck/_all.min.css\">

    <!-- DataTables Plugins (bootstrap, jQuery)-->
    <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/datatables/jquery.dataTables.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/datatables/dataTables.bootstrap.css\">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <!--<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>-->
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/html5shiv3.7.3.min.js\"></script>
        ";
        // line 57
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/respond1.4.2.min.js\"></script>
    <![endif]-->
    <!-- Google Captcha -->
    <script src=\"https://www.google.com/recaptcha/api.js\"></script>

    <title>MENA Assistance | ";
        // line 62
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/img/favicon.png\">
</head>

";
        // line 67
        echo " <body class=\"hold-transition skin-blue sidebar-collapse sidebar-mini fixed\">
<div class=\"wrapper\">
<!-- Main Header -->
<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\"><b>M</b><i>A</i></span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\"><b>MENA</b><i> Assistance</i></span>
    </a>

    <!-- Header Navbar -->
    ";
        // line 80
        $this->loadTemplate("templates/partials/topNavigation.twig", "templates/app.twig", 80)->display($context);
        // line 81
        echo "</header>

<!-- Left side column. contains the logo and sidebar -->
";
        // line 84
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "check", array())) {
            // line 85
            echo "    ";
            $this->loadTemplate("templates/partials/leftNavigation.twig", "templates/app.twig", 85)->display($context);
            // line 86
            echo "<!-- END OF LEFT SIDE COLUMN -->
";
        }
        // line 88
        echo "
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
        <!-- Flash Messages -->
        ";
        // line 92
        $this->loadTemplate("templates/partials/flash.twig", "templates/app.twig", 92)->display($context);
        // line 93
        echo "        <!-- /.Flash Messages -->
    ";
        // line 94
        $this->displayBlock('contents', $context, $blocks);
        // line 96
        echo "
    </section>
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class=\"main-footer\">
    <!-- To the right -->
    <div class=\"pull-right hidden-xs\">
        Version 0.1 -- ";
        // line 105
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "M, Y"), "html", null, true);
        echo " <small><i>(IE9 & earlier versions are not fully supported)</i></small>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; ";
        // line 108
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\">MENA Assistance</a>.</strong> All rights reserved.
</footer>
";
        // line 110
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "check", array())) {
            // line 111
            echo "    ";
            $this->loadTemplate("templates/partials/rightNavigation.twig", "templates/app.twig", 111)->display($context);
        }
        // line 113
        echo "</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.4 -->
";
        // line 118
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/jquery-2.2.4.min.js\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js\"></script>

<!-- bootstrap datepicker -->
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/datepicker/bootstrap-datepicker.js\"></script>
<!-- bootstrap color picker -->
";
        // line 127
        echo "<!-- bootstrap time picker -->
";
        // line 129
        echo "<!-- Select2 -->
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/select2/select2.full.min.js\"></script>
<!-- InputMask -->
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/input-mask/jquery.inputmask.js\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/input-mask/jquery.inputmask.date.extensions.js\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/input-mask/jquery.inputmask.extensions.js\"></script>
<!-- date-range-picker -->
";
        // line 137
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/moment.js/moment2.11.2.min.js\"></script>
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/daterangepicker/daterangepicker.js\"></script>
<!-- SlimScroll 1.3.0 -->
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/slimScroll/jquery.slimscroll.min.js\"></script>
<!-- iCheck -->
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/iCheck/icheck.min.js\"></script>
<!-- FastClick -->
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/fastclick/fastclick.js\"></script>
<!-- KNOB JQ Lib-->
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/knob/jquery.knob.js\"></script>
<!-- Vector Maps (CSS Loaded up)-->
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js\"></script>
<script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/jvectormap/jquery-jvectormap-world-mill-en.js\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/sparkline/jquery.sparkline.min.js\"></script>
<!--Raphael 2.1.0-->
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/raphael/raphael.2_1_0.min.js\"></script>

<!-- PACE -->
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/pace/pace.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/app.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/demo.js\"></script>
<!-- JQuery UI Lib -->
";
        // line 163
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/jquery-ui.js\"></script>

<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/datatables/jquery.dataTables.min.js\"></script>
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/datatables/dataTables.bootstrap.min.js\"></script>
";
        // line 169
        echo "
<!-- My Custom functions JS -->
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/shiblie.js\"></script>
</body>
</html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_title($context, array $blocks = array())
    {
    }

    // line 94
    public function block_contents($context, array $blocks = array())
    {
        // line 95
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
        return array (  374 => 95,  371 => 94,  366 => 62,  357 => 171,  353 => 169,  349 => 166,  345 => 165,  339 => 163,  334 => 160,  329 => 158,  324 => 156,  318 => 153,  313 => 151,  308 => 149,  304 => 148,  299 => 146,  294 => 144,  289 => 142,  284 => 140,  279 => 138,  274 => 137,  269 => 134,  265 => 133,  261 => 132,  256 => 130,  253 => 129,  250 => 127,  245 => 124,  239 => 121,  235 => 120,  229 => 118,  223 => 113,  219 => 111,  217 => 110,  210 => 108,  204 => 105,  193 => 96,  191 => 94,  188 => 93,  186 => 92,  180 => 88,  176 => 86,  173 => 85,  171 => 84,  166 => 81,  164 => 80,  153 => 72,  146 => 67,  140 => 63,  136 => 62,  127 => 57,  123 => 55,  112 => 47,  108 => 46,  102 => 43,  97 => 41,  92 => 39,  87 => 37,  83 => 36,  78 => 34,  75 => 33,  69 => 30,  63 => 27,  61 => 26,  55 => 23,  53 => 22,  48 => 19,  43 => 17,  38 => 16,  23 => 2,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% spaceless %}
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"utf-8\">
    <!-- IE EDGE META TAG -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <!-- Bootstrap 3.3.7 -->
    {# <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> #}
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css\">
    <!-- VECTOR MAPS CSS (JS LOADED BELOW) -->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/plugins/jvectormap/jquery-jvectormap-1.2.2.css\">
    <!-- Font Awesome -->
    {# <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\"> #}
    {# <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"> #}
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/font-awesome.min.css\">
    <!-- Ionicons -->
    {# <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\"> #}
    {# <link rel=\"stylesheet\" href=\"http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\"> #}
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/ionicons.min.css\">
    <!-- JQuery UI CSS 1.12.1 -->
    {# <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\"> #}
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/jquery-ui.min.css\">
    <!-- iCheck -->
    {#<link rel=\"stylesheet\" href=\"{{ base_url() }}/plugins/iCheck/square/blue.css\">#}
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
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/plugins/iCheck/_all.min.css\">

    <!-- DataTables Plugins (bootstrap, jQuery)-->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/plugins/datatables/jquery.dataTables.min.css\">
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/plugins/datatables/dataTables.bootstrap.css\">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <!--<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>-->
        <script src=\"{{ base_url() }}/js/html5shiv3.7.3.min.js\"></script>
        {#<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>#}
        <script src=\"{{ base_url() }}/js/respond1.4.2.min.js\"></script>
    <![endif]-->
    <!-- Google Captcha -->
    <script src=\"https://www.google.com/recaptcha/api.js\"></script>

    <title>MENA Assistance | {% block title %}{% endblock %}</title>
    <link rel=\"icon\" type=\"image/png\" href=\"{{ base_url() }}/img/favicon.png\">
</head>

{#<body class=\"hold-transition skin-{{ auth.userMaster.theme_color ?: 'blue'}} {{ auth.userMaster.sidebar_collapsed ?: 'sidebar_collapse' }} {{ auth.userMaster.sidebar_mini ?: 'sidebar-mini' }} {{ auth.userMaster.layout_fixed ?: 'fixed' }}\">#}
 <body class=\"hold-transition skin-blue sidebar-collapse sidebar-mini fixed\">
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
        Version 0.1 -- {{ \"now\" | date('M, Y') }} <small><i>(IE9 & earlier versions are not fully supported)</i></small>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; {{ \"now\" | date('Y') }} <a href=\"{{ base_url() }}\">MENA Assistance</a>.</strong> All rights reserved.
</footer>
{% if auth.check %}
    {% include 'templates/partials/rightNavigation.twig' %}
{% endif %}
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.4 -->
{# <script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script> #}
<script src=\"{{ base_url() }}/js/jquery-2.2.4.min.js\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"{{ base_url() }}/js/bootstrap.min.js\"></script>
<script src=\"{{ base_url() }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js\"></script>

<!-- bootstrap datepicker -->
<script src=\"{{ base_url() }}/plugins/datepicker/bootstrap-datepicker.js\"></script>
<!-- bootstrap color picker -->
{#<script src=\"{{ base_url() }}/plugins/colorpicker/bootstrap-colorpicker.min.js\"></script>#}
<!-- bootstrap time picker -->
{#<script src=\"{{ base_url() }}/plugins/timepicker/bootstrap-timepicker.min.js\"></script>#}
<!-- Select2 -->
<script src=\"{{ base_url() }}/plugins/select2/select2.full.min.js\"></script>
<!-- InputMask -->
<script src=\"{{ base_url() }}/plugins/input-mask/jquery.inputmask.js\"></script>
<script src=\"{{ base_url() }}/plugins/input-mask/jquery.inputmask.date.extensions.js\"></script>
<script src=\"{{ base_url() }}/plugins/input-mask/jquery.inputmask.extensions.js\"></script>
<!-- date-range-picker -->
{#<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>#}
<script src=\"{{ base_url() }}/plugins/moment.js/moment2.11.2.min.js\"></script>
<script src=\"{{ base_url() }}/plugins/daterangepicker/daterangepicker.js\"></script>
<!-- SlimScroll 1.3.0 -->
<script src=\"{{ base_url() }}/plugins/slimScroll/jquery.slimscroll.min.js\"></script>
<!-- iCheck -->
<script src=\"{{ base_url() }}/plugins/iCheck/icheck.min.js\"></script>
<!-- FastClick -->
<script src=\"{{ base_url() }}/plugins/fastclick/fastclick.js\"></script>
<!-- KNOB JQ Lib-->
<script src=\"{{ base_url() }}/plugins/knob/jquery.knob.js\"></script>
<!-- Vector Maps (CSS Loaded up)-->
<script src=\"{{ base_url() }}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js\"></script>
<script src=\"{{ base_url() }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js\"></script>
<!-- Sparkline -->
<script src=\"{{ base_url() }}/plugins/sparkline/jquery.sparkline.min.js\"></script>
<!--Raphael 2.1.0-->
<script src=\"{{ base_url() }}/plugins/raphael/raphael.2_1_0.min.js\"></script>

<!-- PACE -->
<script src=\"{{ base_url() }}/plugins/pace/pace.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"{{ base_url() }}/js/app.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"{{ base_url() }}/js/demo.js\"></script>
<!-- JQuery UI Lib -->
{# <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script> #}
<script src=\"{{ base_url() }}/js/jquery-ui.js\"></script>

<script src=\"{{ base_url() }}/plugins/datatables/jquery.dataTables.min.js\"></script>
<script src=\"{{ base_url() }}/plugins/datatables/dataTables.bootstrap.min.js\"></script>
{#<script src=\"{{ base_url() }}/\"></script>#}
{#<script src=\"{{ base_url() }}/\"></script>#}

<!-- My Custom functions JS -->
<script src=\"{{ base_url() }}/js/shiblie.js\"></script>
</body>
</html>
{% endspaceless %}
", "templates/app.twig", "/Users/shiblie/Sites/mena_portal/resources/views/templates/app.twig");
    }
}
