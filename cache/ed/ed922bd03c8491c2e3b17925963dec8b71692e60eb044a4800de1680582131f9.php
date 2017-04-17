<?php

/* auth/HR/User/signin.twig */
class __TwigTemplate_f3f2875c7b71d49a09b5a1d3e237566079600267a8a3583d67c9320a9e471218 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/HR/User/signin.twig", 1);
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
        echo "Sign in";
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
        echo "<section class=\"content\">
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\"><b>MENA</b> Assistance</a>
        </div>
        <!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>
            <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.Signin"), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"off\">
                <div class=\"form-group has-feedback";
        // line 18
        echo (($this->getAttribute(($context["errors"] ?? null), "username", array())) ? (" has-error") : (""));
        echo "\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Username\" name=\"username\" id=\"username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["old"] ?? null), "username", array()), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    ";
        // line 21
        if ($this->getAttribute(($context["errors"] ?? null), "username", array())) {
            // line 22
            echo "                        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "username", array())), "html", null, true);
            echo "</span>
                    ";
        }
        // line 24
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 25
        echo (($this->getAttribute(($context["errors"] ?? null), "password", array())) ? (" has-error") : (""));
        echo "\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\" id=\"password\">
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    ";
        // line 28
        if ($this->getAttribute(($context["errors"] ?? null), "password", array())) {
            // line 29
            echo "                        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute(($context["errors"] ?? null), "password", array())), "html", null, true);
            echo "</span>
                    ";
        }
        // line 31
        echo "                </div>
                <div class=\"form-group has-feedback\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox icheck\">
                            <label>
                                <input type=\"checkbox\"> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                    </div>
                    ";
        // line 44
        echo $this->getAttribute(($context["csrf"] ?? null), "field", array());
        echo "
                    <!-- /.col -->
                </div>
            </form>
            <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
            <a href=\"#\" class=\"text-center\">I Forgot my password</a>
            ";
        // line 51
        echo "                ";
        // line 52
        echo "                ";
        // line 53
        echo "                    ";
        // line 54
        echo "                ";
        // line 55
        echo "                    ";
        // line 56
        echo "            ";
        // line 57
        echo "            <!-- /.social-auth-links -->
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

<script>
//        \$(function () {
//            \$('input').iCheck({
//                checkboxClass: 'icheckbox_square-blue',
//                radioClass: 'iradio_square-blue',
//                increaseArea: '20%' // optional
//            });
//        });
</script>
";
    }

    public function getTemplateName()
    {
        return "auth/HR/User/signin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 57,  132 => 56,  130 => 55,  128 => 54,  126 => 53,  124 => 52,  122 => 51,  113 => 44,  98 => 31,  92 => 29,  90 => 28,  84 => 25,  81 => 24,  75 => 22,  73 => 21,  68 => 19,  64 => 18,  60 => 17,  52 => 12,  47 => 9,  44 => 8,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
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
{% block title %}Sign in{% endblock %}

{% block bodyTags %}
    hold-transition skin-blue sidebar-collapse sidebar-mini
{% endblock %}

{% block contents %}
<section class=\"content\">
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ base_url() }}\"><b>MENA</b> Assistance</a>
        </div>
        <!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>
            <form action=\"{{ path_for('auth.Signin') }}\" method=\"post\" autocomplete=\"off\">
                <div class=\"form-group has-feedback{{ errors.username ? ' has-error' : '' }}\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Username\" name=\"username\" id=\"username\" value=\"{{ old.username }}\">
                    <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    {% if errors.username %}
                        <span class=\"help-block\">{{ errors.username | first }}</span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback{{ errors.password ? ' has-error' : '' }}\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\" id=\"password\">
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    {% if errors.password %}
                        <span class=\"help-block\">{{ errors.password | first }}</span>
                    {% endif %}
                </div>
                <div class=\"form-group has-feedback\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox icheck\">
                            <label>
                                <input type=\"checkbox\"> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                    </div>
                    {{ csrf.field | raw }}
                    <!-- /.col -->
                </div>
            </form>
            <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
            <a href=\"#\" class=\"text-center\">I Forgot my password</a>
            {#<div class=\"social-auth-links text-center\">#}
                {#<p>- OR -</p>#}
                {#<a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using#}
                    {#Facebook</a>#}
                {#<a href=\"#\" class=\"btn btn-block btn-social btn-google btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using#}
                    {#Google+</a>#}
            {#</div>#}
            <!-- /.social-auth-links -->
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

<script>
//        \$(function () {
//            \$('input').iCheck({
//                checkboxClass: 'icheckbox_square-blue',
//                radioClass: 'iradio_square-blue',
//                increaseArea: '20%' // optional
//            });
//        });
</script>
{% endblock %}
", "auth/HR/User/signin.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/HR/User/signin.twig");
    }
}
