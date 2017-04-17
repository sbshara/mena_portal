<?php

/* templates/partials/leftNavigation.twig */
class __TwigTemplate_46665bcafc9a245f6d84cfa0006168bd5013f6ddea158a5cfdbc90d76b7c994d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<aside class=\"main-sidebar\">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">

        <!-- Sidebar user panel (optional) -->
        <div class=\"user-panel\">
            <div class=\"pull-left image\">
                <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "prof_pic", array()), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
                <p>Shiblie Bshara</p>
                <!-- Status -->
                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class=\"sidebar-menu\">
            <li class=\"header\">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=\"active\"><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Link</span></a></li>
            <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Another Link</span></a></li>
            <li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Multilevel</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"#\">Link in level 2</a></li>
                    <li><a href=\"#\">Link in level 2</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
";
    }

    public function getTemplateName()
    {
        return "templates/partials/leftNavigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<aside class=\"main-sidebar\">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">

        <!-- Sidebar user panel (optional) -->
        <div class=\"user-panel\">
            <div class=\"pull-left image\">
                <img src=\"{{ base_url() }}{{ auth.userMaster.prof_pic }}\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
                <p>Shiblie Bshara</p>
                <!-- Status -->
                <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class=\"sidebar-menu\">
            <li class=\"header\">HEADER</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=\"active\"><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Link</span></a></li>
            <li><a href=\"#\"><i class=\"fa fa-link\"></i> <span>Another Link</span></a></li>
            <li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-link\"></i> <span>Multilevel</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"#\">Link in level 2</a></li>
                    <li><a href=\"#\">Link in level 2</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
", "templates/partials/leftNavigation.twig", "/Users/shiblie/Sites/mena_portal/resources/views/templates/partials/leftNavigation.twig");
    }
}
