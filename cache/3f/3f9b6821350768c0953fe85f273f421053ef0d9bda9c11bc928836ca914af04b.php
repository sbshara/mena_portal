<?php

/* home.twig */
class __TwigTemplate_85dff15b9378d266bc2413c138584410392becb99374c3d067ac88089178bdeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "home.twig", 1);
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
        echo "Home";
    }

    // line 5
    public function block_contents($context, array $blocks = array())
    {
        // line 6
        echo "        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                MENA PORTAL
                <small>MENA Assistance Business Intelligence mini-apps</small>
            </h1>
            <!--GUIDANCE MAPPER (TOP RIGHT)-->
            <ol class=\"breadcrumb\">
                ";
        // line 15
        echo "                <li class=\"active\">Home</li>
            </ol>
            <!--END OF GUIDANCE MAPPER-->
        </section>

        <!-- Main content -->
        <section class=\"content\">

            ";
        // line 23
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "check", array())) {
            // line 24
            echo "                <p>
                    <h4>Currently stable</h4>
                    <ul>
                        <li></li>
                    </ul>
                    <hr />
                    <h4>Development in progress</h4>
                    <ul>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("home"), "html", null, true);
            echo "\">Home Page</a>
                            <ul>
                                <li>Loading logged-in user details (and profile pic)</li>
                                <li>Loading navigation menus with the correct accessible apps</li>
                                <li>Loading customised settings (such as theme color, layout options ... etc.)</li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"\">HR</a>
                            <ul>
                                <li>
                                    <a href=\"\">Applicants</a>
                                    <ul>
                                        <li><a href=\"\">New Applicant</a></li>
                                        <li><a href=\"\">List Applicants</a></li>
                                        <li><a href=\"\">Application Status</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"\">Skills</a></li>
                                <li><a href=\"\">Addresses</a></li>
                                <li><a href=\"\">Work Experiences</a></li>
                                <li><a href=\"\">Education & Degrees</a></li>
                                <li><a href=\"\">Residency & Visa Status</a></li>
                                <li><a href=\"\">Interviews</a></li>
                                <li><a href=\"\">Employees</a></li>
                                <li><a href=\"\">Contracts</a></li>
                                <li><a href=\"\">Benefits</a></li>
                                <li><a href=\"\">Attendance & Leaves</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"\">Operations</a>
                        </li>
                        <li>
                            <a href=\"\">Accounts</a>
                        </li>
                        <li>
                            <a href=\"\">TMS (Truck Management System)</a>
                            <ul>
                                <li>Trucks</li>
                                <li>Services</li>
                                <li>Expenses</li>
                                <li>Reports</li>
                                <li>Reminders</li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"\">IT & Development</a>
                            <ul>
                                <li>Users</li>
                                <li>User Group Security Policy</li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"\">Projects</a>
                            <ul>
                                <li>Projects Timeline</li>
                                <li>Tasks <small>Including task handler, start & end time, and relations to projects</small></li>
                            </ul>
                        </li>
                    </ul>
                    <h4>Features</h4>
                    <ul>
                        <li>Reliable</li>
                        <li>Light Weight, Fast, Simple to Install, and Detailed Documentation</li>
                        <li>Searchable</li>
                        <li>Custom Form Validations</li>
                        <li>CSRF Protection (Cross-Site Request Forgery)</li>
                        <li>Email Integration & Notification</li>
                        <li>Complex Security (hashed passwords, session tokens, activity logging)</li>
                        <li>Integration Ready APIs</li>
                        <li>Single File Configuration</li>
                        <li>Coding Best Practices</li>
                    </ul>
                    <h4>Resources & Libraries</h4>
                    <ul class=\"list-inline\">
                        <li>Slim Framework</li>
                        <li>Slim Twig View</li>
                        <li>Slim CSRF</li>
                        <li>Slim Flash</li>
                        <li>Slim HTTP-Cache</li>
                        <li>Slim Pagination</li>
                        <li>Slim Bridge</li>
                        <li>Slim ACL</li>
                        <li>Illuminate Database</li>
                        <li>Illuminate Events</li>
                        <li>Illuminate Pagination</li>
                        <li>Hassankhan Config</li>
                        <li>Respect Validation</li>
                        <li>PHPMailer</li>
                        <li>Monolog</li>
                        <li>Enyo Dropzone</li>
                        <li>League Google O-Auth</li>
                        <li>Symfony Security</li>
                        <li>Symfony LDAP</li>
                        <li>Symfony Form</li>
                        <li>Symfony Twig-Bridge</li>
                        <li>Symfony Var-Dumper</li>
                    </ul>
                </p>
            ";
        } else {
            // line 134
            echo "                <p>
                    An ongoing project containing multiple mini-apps related to the Operations, Employees, and other business related apps.
                    <br />
                    <br />
                    <strong>Please login to gain access!</strong>
                </p>
            ";
        }
        // line 141
        echo "

        </section>
        <!-- /.content -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 141,  175 => 134,  71 => 33,  60 => 24,  58 => 23,  48 => 15,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}

{% block title %}Home{% endblock %}

{% block contents %}
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                MENA PORTAL
                <small>MENA Assistance Business Intelligence mini-apps</small>
            </h1>
            <!--GUIDANCE MAPPER (TOP RIGHT)-->
            <ol class=\"breadcrumb\">
                {#<li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>#}
                <li class=\"active\">Home</li>
            </ol>
            <!--END OF GUIDANCE MAPPER-->
        </section>

        <!-- Main content -->
        <section class=\"content\">

            {% if auth.check %}
                <p>
                    <h4>Currently stable</h4>
                    <ul>
                        <li></li>
                    </ul>
                    <hr />
                    <h4>Development in progress</h4>
                    <ul>
                        <li>
                            <a href=\"{{ path_for('home') }}\">Home Page</a>
                            <ul>
                                <li>Loading logged-in user details (and profile pic)</li>
                                <li>Loading navigation menus with the correct accessible apps</li>
                                <li>Loading customised settings (such as theme color, layout options ... etc.)</li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"\">HR</a>
                            <ul>
                                <li>
                                    <a href=\"\">Applicants</a>
                                    <ul>
                                        <li><a href=\"\">New Applicant</a></li>
                                        <li><a href=\"\">List Applicants</a></li>
                                        <li><a href=\"\">Application Status</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"\">Skills</a></li>
                                <li><a href=\"\">Addresses</a></li>
                                <li><a href=\"\">Work Experiences</a></li>
                                <li><a href=\"\">Education & Degrees</a></li>
                                <li><a href=\"\">Residency & Visa Status</a></li>
                                <li><a href=\"\">Interviews</a></li>
                                <li><a href=\"\">Employees</a></li>
                                <li><a href=\"\">Contracts</a></li>
                                <li><a href=\"\">Benefits</a></li>
                                <li><a href=\"\">Attendance & Leaves</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"\">Operations</a>
                        </li>
                        <li>
                            <a href=\"\">Accounts</a>
                        </li>
                        <li>
                            <a href=\"\">TMS (Truck Management System)</a>
                            <ul>
                                <li>Trucks</li>
                                <li>Services</li>
                                <li>Expenses</li>
                                <li>Reports</li>
                                <li>Reminders</li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"\">IT & Development</a>
                            <ul>
                                <li>Users</li>
                                <li>User Group Security Policy</li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"\">Projects</a>
                            <ul>
                                <li>Projects Timeline</li>
                                <li>Tasks <small>Including task handler, start & end time, and relations to projects</small></li>
                            </ul>
                        </li>
                    </ul>
                    <h4>Features</h4>
                    <ul>
                        <li>Reliable</li>
                        <li>Light Weight, Fast, Simple to Install, and Detailed Documentation</li>
                        <li>Searchable</li>
                        <li>Custom Form Validations</li>
                        <li>CSRF Protection (Cross-Site Request Forgery)</li>
                        <li>Email Integration & Notification</li>
                        <li>Complex Security (hashed passwords, session tokens, activity logging)</li>
                        <li>Integration Ready APIs</li>
                        <li>Single File Configuration</li>
                        <li>Coding Best Practices</li>
                    </ul>
                    <h4>Resources & Libraries</h4>
                    <ul class=\"list-inline\">
                        <li>Slim Framework</li>
                        <li>Slim Twig View</li>
                        <li>Slim CSRF</li>
                        <li>Slim Flash</li>
                        <li>Slim HTTP-Cache</li>
                        <li>Slim Pagination</li>
                        <li>Slim Bridge</li>
                        <li>Slim ACL</li>
                        <li>Illuminate Database</li>
                        <li>Illuminate Events</li>
                        <li>Illuminate Pagination</li>
                        <li>Hassankhan Config</li>
                        <li>Respect Validation</li>
                        <li>PHPMailer</li>
                        <li>Monolog</li>
                        <li>Enyo Dropzone</li>
                        <li>League Google O-Auth</li>
                        <li>Symfony Security</li>
                        <li>Symfony LDAP</li>
                        <li>Symfony Form</li>
                        <li>Symfony Twig-Bridge</li>
                        <li>Symfony Var-Dumper</li>
                    </ul>
                </p>
            {% else %}
                <p>
                    An ongoing project containing multiple mini-apps related to the Operations, Employees, and other business related apps.
                    <br />
                    <br />
                    <strong>Please login to gain access!</strong>
                </p>
            {% endif %}


        </section>
        <!-- /.content -->
    </div>
{% endblock %}
", "home.twig", "/Users/shiblie/Sites/mena_portal/resources/views/home.twig");
    }
}
