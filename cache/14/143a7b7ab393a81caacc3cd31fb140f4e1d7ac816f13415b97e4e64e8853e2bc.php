<?php

/* auth/HR/User/signin.twig */
class __TwigTemplate_593fbe7958d9ea72eb29991ecb3d55cfbc8e3ae4c07d87f969b9999783f08e61 extends Twig_Template
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
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "username", array())) ? (" has-error") : (""));
        echo "\">
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Username\" name=\"username\" id=\"username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["old"] ?? null), "username", array()), "html", null, true);
        echo "\">
                        <span class=\"input-group-addon\">@menaa.local</span>
                    </div>
                    ";
        // line 24
        echo "                    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "username", array())) {
            // line 25
            echo "                        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "username", array())), "html", null, true);
            echo "</span>
                    ";
        }
        // line 27
        echo "                </div>
                <div class=\"form-group has-feedback";
        // line 28
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password", array())) ? (" has-error") : (""));
        echo "\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\" id=\"password\">
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    ";
        // line 31
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password", array())) {
            // line 32
            echo "                        <span class=\"help-block\">";
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["errors"] ?? null), "password", array())), "html", null, true);
            echo "</span>
                    ";
        }
        // line 34
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
        // line 47
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["csrf"] ?? null), "field", array());
        echo "
                    <!-- /.col -->
                </div>
            </form>
            <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
            <a href=\"#\" class=\"text-center\">I Forgot my password</a>
            ";
        // line 54
        echo "                ";
        // line 55
        echo "                ";
        // line 56
        echo "                    ";
        // line 57
        echo "                ";
        // line 58
        echo "                    ";
        // line 59
        echo "            ";
        // line 60
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
        return array (  137 => 60,  135 => 59,  133 => 58,  131 => 57,  129 => 56,  127 => 55,  125 => 54,  116 => 47,  101 => 34,  95 => 32,  93 => 31,  87 => 28,  84 => 27,  78 => 25,  75 => 24,  69 => 20,  64 => 18,  60 => 17,  52 => 12,  47 => 9,  44 => 8,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
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
                    <div class=\"input-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Username\" name=\"username\" id=\"username\" value=\"{{ old.username }}\">
                        <span class=\"input-group-addon\">@menaa.local</span>
                    </div>
                    {#<span class=\"glyphicon glyphicon-user form-control-feedback\"></span>#}
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
