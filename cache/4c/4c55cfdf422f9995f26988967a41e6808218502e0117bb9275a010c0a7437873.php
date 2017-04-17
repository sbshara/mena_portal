<?php

/* templates/app.twig */
class __TwigTemplate_2f19dc5b2d6f4f738ac708377d523ddba3ec0b6f1535cc6266809a297df59bf9 extends Twig_Template
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
    <!-- IE EDGE META TAG -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <!-- Bootstrap 3.3.7 -->
    ";
        // line 15
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/bootstrap.min.css\">
    <!-- Font Awesome -->
    ";
        // line 18
        echo "    ";
        // line 19
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/font-awesome.min.css\">
    <!-- Ionicons -->
    ";
        // line 22
        echo "    ";
        // line 23
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/ionicons.min.css\">
    <!-- JQuery UI CSS 1.12.1 -->
    ";
        // line 26
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/jquery-ui.css\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/iCheck/square/blue.css\">
    <!-- Pace style -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/pace/pace.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/AdminLTE.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/skins/_all-skins.min.css\">
    <!-- daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/daterangepicker/daterangepicker.css\">
    <!-- bootstrap datepicker -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/datepicker/datepicker3.css\">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/iCheck/all.css\">
    <!--Personalized CSS Rules-->
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/css/app.css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <!-- Google Captcha -->
    <script src=\"https://www.google.com/recaptcha/api.js\"></script>

    <title>MENA Assistance | ";
        // line 52
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/img/favicon.png\">
</head>

<body class=\"hold-transition skin-";
        // line 56
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "theme_color", array())) ? ($this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "theme_color", array())) : ("blue")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "sidebar_collapsed", array())) ? ($this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "sidebar_collapsed", array())) : ("sidebar-collapse")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "sidebar_mini", array())) ? ($this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "sidebar_mini", array())) : ("sidebar-mini")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "layout_fixed", array())) ? ($this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "layout_fixed", array())) : ("fixed")), "html", null, true);
        echo "\">
";
        // line 58
        echo "<div class=\"wrapper\">
<!-- Main Header -->
<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\"><b>M</b><i>A</i></span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\"><b>MENA</b><i> Assistance</i></span>
    </a>

    <!-- Header Navbar -->
    ";
        // line 70
        $this->loadTemplate("templates/partials/topNavigation.twig", "templates/app.twig", 70)->display($context);
        // line 71
        echo "</header>

<!-- Left side column. contains the logo and sidebar -->
";
        // line 74
        if ($this->getAttribute(($context["auth"] ?? null), "check", array())) {
            // line 75
            echo "    ";
            $this->loadTemplate("templates/partials/leftNavigation.twig", "templates/app.twig", 75)->display($context);
            // line 76
            echo "<!-- END OF LEFT SIDE COLUMN -->
";
        }
        // line 78
        echo "
<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
        <!-- Flash Messages -->
        ";
        // line 82
        $this->loadTemplate("templates/partials/flash.twig", "templates/app.twig", 82)->display($context);
        // line 83
        echo "        <!-- /.Flash Messages -->

    ";
        // line 85
        $this->displayBlock('contents', $context, $blocks);
        // line 87
        echo "
    </section>
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class=\"main-footer\">
    <!-- To the right -->
    <div class=\"pull-right hidden-xs\">
        Version 0.1 -- Jan 2017
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href=\"#\">MENA Assistance</a>.</strong> All rights reserved.
</footer>
";
        // line 101
        if ($this->getAttribute(($context["auth"] ?? null), "check", array())) {
            // line 102
            echo "    ";
            $this->loadTemplate("templates/partials/rightNavigation.twig", "templates/app.twig", 102)->display($context);
        }
        // line 104
        echo "</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.4 -->
";
        // line 109
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/jquery-2.2.4.min.js\"></script>
<!-- Bootstrap 3.3.6 -->
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/bootstrap.min.js\"></script>
<!-- bootstrap datepicker -->
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/datepicker/bootstrap-datepicker.js\"></script>
<!-- bootstrap color picker -->
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/colorpicker/bootstrap-colorpicker.min.js\"></script>
<!-- bootstrap time picker -->
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/timepicker/bootstrap-timepicker.min.js\"></script>
<!-- Select2 -->
<script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/select2/select2.full.min.js\"></script>
<!-- InputMask -->
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/input-mask/jquery.inputmask.js\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/input-mask/jquery.inputmask.date.extensions.js\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/input-mask/jquery.inputmask.extensions.js\"></script>
<!-- date-range-picker -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
<script src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/daterangepicker/daterangepicker.js\"></script>
<!-- SlimScroll 1.3.0 -->
<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/slimScroll/jquery.slimscroll.min.js\"></script>
<!-- iCheck -->
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/iCheck/icheck.min.js\"></script>
<!-- FastClick -->
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/fastclick/fastclick.js\"></script>
<!-- PACE -->
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/plugins/pace/pace.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/app.js\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/demo.js\"></script>
<!-- JQuery UI Lib -->
";
        // line 141
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/jquery-ui.js\"></script>
<!-- My Custom functions JS -->
<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/js/shiblie.js\"></script>
</body>
</html>
";
    }

    // line 52
    public function block_title($context, array $blocks = array())
    {
    }

    // line 85
    public function block_contents($context, array $blocks = array())
    {
        // line 86
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
        return array (  309 => 86,  306 => 85,  301 => 52,  293 => 143,  287 => 141,  282 => 138,  277 => 136,  272 => 134,  267 => 132,  262 => 130,  257 => 128,  252 => 126,  246 => 123,  242 => 122,  238 => 121,  233 => 119,  228 => 117,  223 => 115,  218 => 113,  213 => 111,  207 => 109,  201 => 104,  197 => 102,  195 => 101,  179 => 87,  177 => 85,  173 => 83,  171 => 82,  165 => 78,  161 => 76,  158 => 75,  156 => 74,  151 => 71,  149 => 70,  138 => 62,  132 => 58,  122 => 56,  116 => 53,  112 => 52,  98 => 41,  93 => 39,  88 => 37,  83 => 35,  78 => 33,  74 => 32,  69 => 30,  64 => 28,  58 => 26,  52 => 23,  50 => 22,  44 => 19,  42 => 18,  36 => 15,  21 => 1,);
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
    <!-- IE EDGE META TAG -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <!-- Bootstrap 3.3.7 -->
    {# <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"> #}
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/bootstrap.min.css\">
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
    <link rel=\"stylesheet\" href=\"{{ base_url() }}/css/jquery-ui.css\">
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
    <!-- Google Captcha -->
    <script src=\"https://www.google.com/recaptcha/api.js\"></script>

    <title>MENA Assistance | {% block title %}{% endblock %}</title>
    <link rel=\"icon\" type=\"image/png\" href=\"{{ base_url() }}/img/favicon.png\">
</head>

<body class=\"hold-transition skin-{{ auth.userMaster.theme_color ? auth.userMaster.theme_color : 'blue'}} {{ auth.userMaster.sidebar_collapsed ? auth.userMaster.sidebar_collapsed : 'sidebar-collapse' }} {{ auth.userMaster.sidebar_mini ? auth.userMaster.sidebar_mini : 'sidebar-mini' }} {{ auth.userMaster.layout_fixed ? auth.userMaster.layout_fixed : 'fixed' }}\">
{# <body class=\"hold-transition skin-blue sidebar-collapse sidebar-mini\"> #}
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
        Version 0.1 -- Jan 2017
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href=\"#\">MENA Assistance</a>.</strong> All rights reserved.
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
<!-- bootstrap datepicker -->
<script src=\"{{ base_url() }}/plugins/datepicker/bootstrap-datepicker.js\"></script>
<!-- bootstrap color picker -->
<script src=\"{{ base_url() }}/plugins/colorpicker/bootstrap-colorpicker.min.js\"></script>
<!-- bootstrap time picker -->
<script src=\"{{ base_url() }}/plugins/timepicker/bootstrap-timepicker.min.js\"></script>
<!-- Select2 -->
<script src=\"{{ base_url() }}/plugins/select2/select2.full.min.js\"></script>
<!-- InputMask -->
<script src=\"{{ base_url() }}/plugins/input-mask/jquery.inputmask.js\"></script>
<script src=\"{{ base_url() }}/plugins/input-mask/jquery.inputmask.date.extensions.js\"></script>
<script src=\"{{ base_url() }}/plugins/input-mask/jquery.inputmask.extensions.js\"></script>
<!-- date-range-picker -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
<script src=\"{{ base_url() }}/plugins/daterangepicker/daterangepicker.js\"></script>
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
{# <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script> #}
<script src=\"{{ base_url() }}/js/jquery-ui.js\"></script>
<!-- My Custom functions JS -->
<script src=\"{{ base_url() }}/js/shiblie.js\"></script>
</body>
</html>
", "templates/app.twig", "/Users/shiblie/Sites/mena_portal/resources/views/templates/app.twig");
    }
}
