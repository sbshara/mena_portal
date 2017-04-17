<?php

/* templates/partials/topNavigation.twig */
class __TwigTemplate_551e27a24d259f4ec2fc10c9b17524b740519925edf9f6bba9b65c680fa929e1 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-static-top\" role=\"navigation\">
    <!-- Sidebar toggle button-->
    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->

    <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
            ";
        // line 10
        if ($this->getAttribute(($context["auth"] ?? null), "check", array())) {
            // line 11
            echo "                <!-- Messages: style can be found in dropdown.less-->
                <li class=\"dropdown messages-menu\">
                    <!-- Menu toggle button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-envelope-o\"></i>
                        <span class=\"label label-success\">4</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class=\"menu\">
                                <li><!-- start message -->
                                    <a href=\"#\">
                                        <div class=\"pull-left\">
                                            <!-- User Image -->
                                            <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo "/img/avatar6.png\" class=\"img-circle\" alt=\"User Image\">
                                        </div>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            Support Team
                                            <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message -->
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                            </ul>
                            <!-- /.menu -->
                        </li>
                        <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                    </ul>
                </li>
                <!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class=\"dropdown notifications-menu\">
                    <!-- Menu toggle button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"label label-warning\">10</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">You have 10 notifications</li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class=\"menu\">
                                <li><!-- start notification -->
                                    <a href=\"#\">
                                        <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                    </a>
                                </li>
                                <!-- end notification -->
                            </ul>
                        </li>
                        <li class=\"footer\"><a href=\"#\">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                <li class=\"dropdown tasks-menu\">
                    <!-- Menu Toggle Button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-flag-o\"></i>
                        <span class=\"label label-danger\">9</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">You have 9 tasks</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class=\"menu\">
                                <li><!-- Task item -->
                                    <a href=\"#\">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            Design some buttons
                                            <small class=\"pull-right\">20%</small>
                                        </h3>
                                        <!-- The progress bar -->
                                        <div class=\"progress xs\">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <span class=\"sr-only\">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                            </ul>
                        </li>
                        <li class=\"footer\">
                            <a href=\"#\">View all tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account Menu -->
                <li class=\"dropdown user user-menu\">
                    <!-- Menu Toggle Button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <!-- The user image in the navbar-->
                            <img src=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "prof_pic", array()), "html", null, true);
            echo "\" class=\"user-image\" alt=\"User Image\">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class=\"hidden-xs\">";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "first_name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "last_name", array()), "html", null, true);
            echo "</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <!-- The user image in the menu -->
                        <li class=\"user-header\">
                            <img src=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "prof_pic", array()), "html", null, true);
            echo "\" class=\"img-circle\" alt=\"User Image\">

                            <p>
                                ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "first_name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "last_name", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "title_name", array()), "html", null, true);
            echo "
                                <small>Member since ";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["auth"] ?? null), "userMaster", array()), "hire_date", array()), "html", null, true);
            echo "</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class=\"user-body\">
                            <div class=\"row\">
                                ";
            // line 129
            echo "                                    ";
            // line 130
            echo "                                ";
            // line 131
            echo "                                <div class=\"col-xs-12 text-center\">
                                    <a href=\"#\">Activities</a>
                                </div>
                                ";
            // line 135
            echo "                                    ";
            // line 136
            echo "                                ";
            // line 137
            echo "                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class=\"user-footer\">
                            <div class=\"pull-left\">
                                <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.Profile"), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\">Profile</a>
                            </div>
                            <div class=\"pull-right\">
                                <a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.Signout"), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                </li>
            ";
        } else {
            // line 156
            echo "                <li>
                    <a href=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.Signin"), "html", null, true);
            echo "\">Sign in</a>
                </li>
                ";
            // line 160
            echo "                    ";
            // line 161
            echo "                ";
            // line 162
            echo "            ";
        }
        // line 163
        echo "
        </ul>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "templates/partials/topNavigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 163,  229 => 162,  227 => 161,  225 => 160,  220 => 157,  217 => 156,  204 => 146,  198 => 143,  190 => 137,  188 => 136,  186 => 135,  181 => 131,  179 => 130,  177 => 129,  168 => 122,  160 => 121,  153 => 118,  143 => 113,  137 => 111,  50 => 27,  32 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-static-top\" role=\"navigation\">
    <!-- Sidebar toggle button-->
    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->

    <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
            {% if auth.check %}
                <!-- Messages: style can be found in dropdown.less-->
                <li class=\"dropdown messages-menu\">
                    <!-- Menu toggle button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-envelope-o\"></i>
                        <span class=\"label label-success\">4</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class=\"menu\">
                                <li><!-- start message -->
                                    <a href=\"#\">
                                        <div class=\"pull-left\">
                                            <!-- User Image -->
                                            <img src=\"{{ base_url() }}/img/avatar6.png\" class=\"img-circle\" alt=\"User Image\">
                                        </div>
                                        <!-- Message title and timestamp -->
                                        <h4>
                                            Support Team
                                            <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                        </h4>
                                        <!-- The message -->
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                            </ul>
                            <!-- /.menu -->
                        </li>
                        <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                    </ul>
                </li>
                <!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class=\"dropdown notifications-menu\">
                    <!-- Menu toggle button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-bell-o\"></i>
                        <span class=\"label label-warning\">10</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">You have 10 notifications</li>
                        <li>
                            <!-- Inner Menu: contains the notifications -->
                            <ul class=\"menu\">
                                <li><!-- start notification -->
                                    <a href=\"#\">
                                        <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                                    </a>
                                </li>
                                <!-- end notification -->
                            </ul>
                        </li>
                        <li class=\"footer\"><a href=\"#\">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                <li class=\"dropdown tasks-menu\">
                    <!-- Menu Toggle Button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-flag-o\"></i>
                        <span class=\"label label-danger\">9</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"header\">You have 9 tasks</li>
                        <li>
                            <!-- Inner menu: contains the tasks -->
                            <ul class=\"menu\">
                                <li><!-- Task item -->
                                    <a href=\"#\">
                                        <!-- Task title and progress text -->
                                        <h3>
                                            Design some buttons
                                            <small class=\"pull-right\">20%</small>
                                        </h3>
                                        <!-- The progress bar -->
                                        <div class=\"progress xs\">
                                            <!-- Change the css width attribute to simulate progress -->
                                            <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                <span class=\"sr-only\">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                            </ul>
                        </li>
                        <li class=\"footer\">
                            <a href=\"#\">View all tasks</a>
                        </li>
                    </ul>
                </li>
                <!-- User Account Menu -->
                <li class=\"dropdown user user-menu\">
                    <!-- Menu Toggle Button -->
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <!-- The user image in the navbar-->
                            <img src=\"{{ base_url() }}{{ auth.userMaster.prof_pic }}\" class=\"user-image\" alt=\"User Image\">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class=\"hidden-xs\">{{ auth.userMaster.first_name }} {{ auth.userMaster.last_name }}</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <!-- The user image in the menu -->
                        <li class=\"user-header\">
                            <img src=\"{{ base_url() }}{{ auth.userMaster.prof_pic }}\" class=\"img-circle\" alt=\"User Image\">

                            <p>
                                {{ auth.userMaster.first_name }} {{ auth.userMaster.last_name }} - {{ auth.userMaster.title_name }}
                                <small>Member since {{ auth.userMaster.hire_date }}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class=\"user-body\">
                            <div class=\"row\">
                                {#<div class=\"col-xs-4 text-center\">#}
                                    {#<a href=\"#\"></a>#}
                                {#</div>#}
                                <div class=\"col-xs-12 text-center\">
                                    <a href=\"#\">Activities</a>
                                </div>
                                {#<div class=\"col-xs-4 text-center\">#}
                                    {#<a href=\"#\"></a>#}
                                {#</div>#}
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class=\"user-footer\">
                            <div class=\"pull-left\">
                                <a href=\"{{ path_for('auth.Profile') }}\" class=\"btn btn-default btn-flat\">Profile</a>
                            </div>
                            <div class=\"pull-right\">
                                <a href=\"{{ path_for('auth.Signout') }}\" class=\"btn btn-default btn-flat\">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                </li>
            {% else %}
                <li>
                    <a href=\"{{ path_for('auth.Signin') }}\">Sign in</a>
                </li>
                {#<li>#}
                    {#<a href=\"{{ path_for('auth.new.applicant') }}\">Sign up</a>#}
                {#</li>#}
            {% endif %}

        </ul>
    </div>
</nav>
", "templates/partials/topNavigation.twig", "/Users/shiblie/Sites/mena_portal/resources/views/templates/partials/topNavigation.twig");
    }
}
