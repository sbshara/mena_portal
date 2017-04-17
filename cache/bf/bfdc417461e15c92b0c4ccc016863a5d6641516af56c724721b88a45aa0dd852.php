<?php

/* templates/app.twig */
class __TwigTemplate_de95084dab2cff6304453e7c2ef5c8311e1e372d0514cf9a40cf7dd77a549632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'additionalCSS' => array($this, 'block_additionalCSS'),
            'title' => array($this, 'block_title'),
            'contents' => array($this, 'block_contents'),
            'additionalJS' => array($this, 'block_additionalJS'),
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

    <!-- DropZone Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/dropzone/dist/dropzone.css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <!--<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>-->
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/html5shiv3.7.3.min.js\"></script>
        ";
        // line 58
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/respond1.4.2.min.js\"></script>
    <![endif]-->

    ";
        // line 61
        $this->displayBlock('additionalCSS', $context, $blocks);
        // line 63
        echo "    <!-- My Custom Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/shiblie.css\">

    <title>MENA Assistance | ";
        // line 66
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/img/favicon.png\">
</head>

";
        // line 71
        echo " <body class=\"hold-transition skin-blue sidebar-collapse sidebar-mini fixed\">
<div class=\"wrapper\">
<!-- Main Header -->
<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\"><b>M</b><i>A</i></span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\"><b>MENA</b><i> Assistance</i></span>
    </a>

    <!-- Header Navbar -->
    ";
        // line 84
        $this->loadTemplate("templates/partials/topNavigation.twig", "templates/app.twig", 84)->display($context);
        // line 85
        echo "</header>

<!-- Left side column. contains the logo and sidebar -->
";
        // line 88
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "check", array())) {
            // line 89
            echo "    ";
            $this->loadTemplate("templates/partials/leftNavigation.twig", "templates/app.twig", 89)->display($context);
            // line 90
            echo "<!-- END OF LEFT SIDE COLUMN -->
";
        }
        // line 92
        echo "
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
        <!-- Flash Messages -->
        ";
        // line 96
        $this->loadTemplate("templates/partials/flash.twig", "templates/app.twig", 96)->display($context);
        // line 97
        echo "        <!-- /.Flash Messages -->
    ";
        // line 98
        $this->displayBlock('contents', $context, $blocks);
        // line 100
        echo "
    </section>
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class=\"main-footer\">
    <!-- To the right -->
    <div class=\"pull-right hidden-xs\">
        Version 0.1 -- ";
        // line 109
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "M, Y"), "html", null, true);
        echo " <small><i>(IE9 & earlier versions are not fully supported)</i></small>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; ";
        // line 112
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\">MENA Assistance</a>.</strong> All rights reserved.
</footer>
";
        // line 114
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "check", array())) {
            // line 115
            echo "    ";
            $this->loadTemplate("templates/partials/rightNavigation.twig", "templates/app.twig", 115)->display($context);
        }
        // line 117
        echo "</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.4 -->
";
        // line 122
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/jquery-2.2.4.min.js\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js\"></script>

<!-- bootstrap datepicker -->
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/datepicker/bootstrap-datepicker.js\"></script>
<!-- bootstrap color picker -->
";
        // line 131
        echo "<!-- bootstrap time picker -->
";
        // line 133
        echo "<!-- Select2 -->
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/select2/select2.full.min.js\"></script>
<!-- InputMask -->
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/input-mask/jquery.inputmask.js\"></script>
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/input-mask/jquery.inputmask.date.extensions.js\"></script>
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/input-mask/jquery.inputmask.extensions.js\"></script>
<!-- date-range-picker -->
";
        // line 141
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/moment.js/moment2.11.2.min.js\"></script>
<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/daterangepicker/daterangepicker.js\"></script>
<!-- SlimScroll 1.3.0 -->
<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/slimScroll/jquery.slimscroll.min.js\"></script>
<!-- iCheck -->
<script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/iCheck/icheck.min.js\"></script>
<!-- FastClick -->
<script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/fastclick/fastclick.js\"></script>
<!-- KNOB JQ Lib-->
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/knob/jquery.knob.js\"></script>
<!-- Vector Maps (CSS Loaded up)-->
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js\"></script>
<script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/jvectormap/jquery-jvectormap-world-mill-en.js\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/sparkline/jquery.sparkline.min.js\"></script>
<!--Raphael 2.1.0-->
<script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/raphael/raphael.2_1_0.min.js\"></script>

<!-- PACE -->
<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/pace/pace.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/app.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/demo.js\"></script>
<!-- JQuery UI Lib -->
";
        // line 167
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/jquery-ui.js\"></script>

<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/datatables/jquery.dataTables.min.js\"></script>
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/datatables/dataTables.bootstrap.min.js\"></script>

";
        // line 173
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/reactjs/react.min.js\"></script>
";
        // line 175
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/reactjs/react-dom.min.js\"></script>

<!-- Google Captcha -->
";
        // line 179
        echo "<!-- CK Editor -->
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/ckeditor/ckeditor.js\"></script>

<!-- DropZone JS-->
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/dropzone/dist/dropzone.js\"></script>

";
        // line 185
        $this->displayBlock('additionalJS', $context, $blocks);
        // line 187
        echo "
<!-- My Custom functions JS -->
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/shiblie.js\"></script>
</body>
</html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 61
    public function block_additionalCSS($context, array $blocks = array())
    {
        // line 62
        echo "    ";
    }

    // line 66
    public function block_title($context, array $blocks = array())
    {
    }

    // line 98
    public function block_contents($context, array $blocks = array())
    {
        // line 99
        echo "    ";
    }

    // line 185
    public function block_additionalJS($context, array $blocks = array())
    {
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
        return array (  428 => 185,  424 => 99,  421 => 98,  416 => 66,  412 => 62,  409 => 61,  400 => 189,  396 => 187,  394 => 185,  389 => 183,  383 => 180,  380 => 179,  373 => 175,  368 => 173,  363 => 170,  359 => 169,  353 => 167,  348 => 164,  343 => 162,  338 => 160,  332 => 157,  327 => 155,  322 => 153,  318 => 152,  313 => 150,  308 => 148,  303 => 146,  298 => 144,  293 => 142,  288 => 141,  283 => 138,  279 => 137,  275 => 136,  270 => 134,  267 => 133,  264 => 131,  259 => 128,  253 => 125,  249 => 124,  243 => 122,  237 => 117,  233 => 115,  231 => 114,  224 => 112,  218 => 109,  207 => 100,  205 => 98,  202 => 97,  200 => 96,  194 => 92,  190 => 90,  187 => 89,  185 => 88,  180 => 85,  178 => 84,  167 => 76,  160 => 71,  154 => 67,  150 => 66,  145 => 64,  142 => 63,  140 => 61,  133 => 58,  129 => 56,  120 => 50,  114 => 47,  110 => 46,  104 => 43,  99 => 41,  94 => 39,  89 => 37,  85 => 36,  80 => 34,  77 => 33,  71 => 30,  65 => 27,  63 => 26,  57 => 23,  55 => 22,  50 => 19,  45 => 17,  40 => 16,  25 => 2,  23 => 1,);
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

    <!-- DropZone Styles -->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/plugins/dropzone/dist/dropzone.css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <!--<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>-->
        <script src=\"{{ base_url() }}/js/html5shiv3.7.3.min.js\"></script>
        {#<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>#}
        <script src=\"{{ base_url() }}/js/respond1.4.2.min.js\"></script>
    <![endif]-->

    {% block additionalCSS %}
    {% endblock %}
    <!-- My Custom Styles -->
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/shiblie.css\">

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

{#<script src=\"https://unpkg.com/react@15/dist/react.js\"></script>#}
<script src=\"{{ base_url() }}/plugins/reactjs/react.min.js\"></script>
{#<script src=\"https://unpkg.com/react-dom@15/dist/react-dom.js\"></script>#}
<script src=\"{{ base_url() }}/plugins/reactjs/react-dom.min.js\"></script>

<!-- Google Captcha -->
{#<script src=\"https://www.google.com/recaptcha/api.js\"></script>#}
<!-- CK Editor -->
<script src=\"{{ base_url() }}/plugins/ckeditor/ckeditor.js\"></script>

<!-- DropZone JS-->
<script src=\"{{ base_url() }}/plugins/dropzone/dist/dropzone.js\"></script>

{% block additionalJS %}
{% endblock %}

<!-- My Custom functions JS -->
<script src=\"{{ base_url() }}/js/shiblie.js\"></script>
</body>
</html>
{% endspaceless %}
", "templates/app.twig", "/Users/shiblie/Sites/mena_portal/resources/views/templates/app.twig");
    }
}
