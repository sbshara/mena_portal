<?php

/* templates/partials/leftNavigation.twig */
class __TwigTemplate_d0fb58445af78c3e922bffa375fc851745dcebad9ef718aed1ba743b37018ebc extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "prof_pic", array()), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
                <p>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "last_name", array()), "html", null, true);
        echo "</p>
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
            <li class=\"header\">MENA Assistance</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=\"treeview\">
                <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("PRO.Home"), "html", null, true);
        echo "\">
                    <i class=\"fa fa-diamond\"></i>
                    <span>Projects</span>
                    <span class=\"pull-right-container\">
                        <i class=\"fa fa-angle-left pull-right\"></i>
                    </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li class=\"treeview\">
                        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("PRO.AllProjects"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-diamond\"></i>
                            &nbsp;<span>All Projects</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- END of Projects Tab-->
            <li>
                <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.Home"), "html", null, true);
        echo "\">
                    <i class=\"fa fa-book\"></i>
                    &nbsp;<span>Human Resources</span>
                    <span class=\"pull-right-container\">
                        <i class=\"fa fa-angle-left pull-right\"></i>
                    </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li class=\"treeview\">
                        <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.AllApplicants"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-graduation-cap\"></i>
                            &nbsp;<span>Applicants</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.NewApplicant"), "html", null, true);
        echo "\">New Applicant</a></li>
                            <li><a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.AllApplicants"), "html", null, true);
        echo "\">List Applicants</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.AllEmployees"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-black-tie\"></i>
                            &nbsp;<span>Employees</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li></li>
                            <li></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.AllUsers"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-users\"></i>
                            &nbsp;<span>Users</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li></li>
                            <li></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.AllDepartments"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-cubes\"></i>
                            &nbsp;<span>Departments</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\"></a>New Department</li>
                            <li><a href=\"#\"></a>All Departments</li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.AllInterviews"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-calendar-check-o\"></i>
                            &nbsp;<span>Interviews</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li></li>
                            <li></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("HR.Miscellaneous"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-random\"></i>
                            &nbsp;<span>Miscellaneous</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\"><i class=\"fa fa-link>\"></i><span>A</span></a></li>
                            <li>B</li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-link\"></i>
                    <span>Another Link</span>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"#\">Link 1</a></li>
                    <li><a href=\"#\">Link 2</a></li>
                </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("OPS.Home"), "html", null, true);
        echo "\">
                    <i class=\"fa fa-dashboard\"></i>
                    &nbsp;<span>Operations</span>
                    <span class=\"pull-right-container\">
                        <i class=\"fa fa-angle-left pull-right\"></i>
                    </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-forumbee\"></i>
                            &nbsp;<span>Operations 1</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa-forumbee\"></i>
                            &nbsp;<span>Operations 2</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-truck\"></i>
                    &nbsp;<span>TMS</span>
                    <span class=\"pull-right-container\">
                        <i class=\"fa fa-angle-left pull-right\"></i>
                    </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li>
                        <a href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.Home", array("page" => 1, "perPage" => 5)), "html", null, true);
        echo "\">
                            <i class=\"fa fa-dashboard\"></i>
                            &nbsp;<span>Main Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-cogs\"></i>
                            <span>Services</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.AllServices"), "html", null, true);
        echo "\">All Services</a></li>
                            <li><a href=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.NewService"), "html", null, true);
        echo "\">New Service</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-money\"></i>
                            <span>Expenses</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.AllExpenses"), "html", null, true);
        echo "\">All Expenses</a></li>
                            <li><a href=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.NewExpense"), "html", null, true);
        echo "\">New Expense</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-truck\"></i>
                            <span>Trucks</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.AllTrucks"), "html", null, true);
        echo "\">All Trucks</a></li>
                            <li><a href=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("TMS.NewTruck"), "html", null, true);
        echo "\">New Truck</a></li>
                        </ul>
                    </li>
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
        return array (  313 => 230,  309 => 229,  294 => 217,  290 => 216,  275 => 204,  271 => 203,  254 => 189,  219 => 157,  189 => 130,  173 => 117,  157 => 104,  141 => 91,  125 => 78,  118 => 74,  114 => 73,  103 => 65,  91 => 56,  76 => 44,  64 => 35,  36 => 12,  29 => 9,  19 => 1,);
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
                <p>{{ auth.userMaster.first_name }} {{ auth.userMaster.last_name }}</p>
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
            <li class=\"header\">MENA Assistance</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=\"treeview\">
                <a href=\"{{ path_for('PRO.Home') }}\">
                    <i class=\"fa fa-diamond\"></i>
                    <span>Projects</span>
                    <span class=\"pull-right-container\">
                        <i class=\"fa fa-angle-left pull-right\"></i>
                    </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li class=\"treeview\">
                        <a href=\"{{ path_for('PRO.AllProjects') }}\">
                            <i class=\"fa fa-diamond\"></i>
                            &nbsp;<span>All Projects</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- END of Projects Tab-->
            <li>
                <a href=\"{{ path_for('HR.Home')}}\">
                    <i class=\"fa fa-book\"></i>
                    &nbsp;<span>Human Resources</span>
                    <span class=\"pull-right-container\">
                        <i class=\"fa fa-angle-left pull-right\"></i>
                    </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li class=\"treeview\">
                        <a href=\"{{ path_for('HR.AllApplicants') }}\">
                            <i class=\"fa fa-graduation-cap\"></i>
                            &nbsp;<span>Applicants</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{ path_for('HR.NewApplicant') }}\">New Applicant</a></li>
                            <li><a href=\"{{ path_for('HR.AllApplicants') }}\">List Applicants</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"{{ path_for('HR.AllEmployees') }}\">
                            <i class=\"fa fa-black-tie\"></i>
                            &nbsp;<span>Employees</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li></li>
                            <li></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"{{ path_for('HR.AllUsers') }}\">
                            <i class=\"fa fa-users\"></i>
                            &nbsp;<span>Users</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li></li>
                            <li></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"{{ path_for('HR.AllDepartments') }}\">
                            <i class=\"fa fa-cubes\"></i>
                            &nbsp;<span>Departments</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\"></a>New Department</li>
                            <li><a href=\"#\"></a>All Departments</li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"{{ path_for('HR.AllInterviews') }}\">
                            <i class=\"fa fa-calendar-check-o\"></i>
                            &nbsp;<span>Interviews</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li></li>
                            <li></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"{{ path_for('HR.Miscellaneous') }}\">
                            <i class=\"fa fa-random\"></i>
                            &nbsp;<span>Miscellaneous</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"#\"><i class=\"fa fa-link>\"></i><span>A</span></a></li>
                            <li>B</li>
                        </ul>
                    </li>

                </ul>
            </li>

            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-link\"></i>
                    <span>Another Link</span>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"#\">Link 1</a></li>
                    <li><a href=\"#\">Link 2</a></li>
                </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"{{ path_for('OPS.Home') }}\">
                    <i class=\"fa fa-dashboard\"></i>
                    &nbsp;<span>Operations</span>
                    <span class=\"pull-right-container\">
                        <i class=\"fa fa-angle-left pull-right\"></i>
                    </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-forumbee\"></i>
                            &nbsp;<span>Operations 1</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa-forumbee\"></i>
                            &nbsp;<span>Operations 2</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-truck\"></i>
                    &nbsp;<span>TMS</span>
                    <span class=\"pull-right-container\">
                        <i class=\"fa fa-angle-left pull-right\"></i>
                    </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li>
                        <a href=\"{{ path_for('TMS.Home', {page:1, perPage:5}) }}\">
                            <i class=\"fa fa-dashboard\"></i>
                            &nbsp;<span>Main Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-cogs\"></i>
                            <span>Services</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{ path_for('TMS.AllServices') }}\">All Services</a></li>
                            <li><a href=\"{{ path_for('TMS.NewService') }}\">New Service</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fa fa-money\"></i>
                            <span>Expenses</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{ path_for('TMS.AllExpenses') }}\">All Expenses</a></li>
                            <li><a href=\"{{ path_for('TMS.NewExpense') }}\">New Expense</a></li>
                        </ul>
                    </li>
                    <li class=\"treeview\">
                        <a href=\"#\">
                            <i class=\"fa fa-truck\"></i>
                            <span>Trucks</span>
                            <span class=\"pull-right-container\">
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </span>
                        </a>
                        <ul class=\"treeview-menu\">
                            <li><a href=\"{{ path_for('TMS.AllTrucks') }}\">All Trucks</a></li>
                            <li><a href=\"{{ path_for('TMS.NewTruck') }}\">New Truck</a></li>
                        </ul>
                    </li>
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
