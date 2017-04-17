<?php

/* auth/HR/User/profile.twig */
class __TwigTemplate_5554642e0159d2e7bb8f2c148f9d4f7c6abd81031f5f01e8e8778964ca1f4a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/HR/User/profile.twig", 1);
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
        echo "User Profile";
    }

    // line 4
    public function block_bodyTags($context, array $blocks = array())
    {
        echo "hold-transition skin-blue sidebar-collapse sidebar-mini";
    }

    // line 6
    public function block_contents($context, array $blocks = array())
    {
        // line 7
        echo "    <section class=\"content-header\">
        <h1>
            ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "last_name", array()), "html", null, true);
        echo " Profile
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li class=\"active\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "user", array()), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "user", array()), "last_name", array()), "html", null, true);
        echo "</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
        <div class=\"col-md-3\">
            <!-- Profile Image -->
            <div class=\"box box-primary\">
                <div class=\"box-body box-profile\">
                    <img class=\"profile-user-img img-responsive img-circle\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "prof_pic", array()), "html", null, true);
        echo "\" alt=\"User profile picture\">

                    <h3 class=\"profile-username text-center\">";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "first_name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "last_name", array()), "html", null, true);
        echo "</h3>

                    <p class=\"text-muted text-center\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "title", array()), "html", null, true);
        echo "</p>

                    <ul class=\"list-group list-group-unbordered\">
                        <li class=\"list-group-item\">
                            <b>Employee ID:</b> <a class=\"pull-right\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "emp_ref", array()), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"list-group-item\">
                            <b>Extension:</b> <a class=\"pull-right\" href=\"tel:";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "local_extension", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "local_extension", array()), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"list-group-item\">
                            <b>Mobile Number</b> <a class=\"pull-right\" href=\"tel:";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "primary_phone", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "primary_phone", array()), "html", null, true);
        echo "</a>
                        </li>
                    </ul>

                    <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->pathFor("auth.PasswordChange"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\"><b>Change Password</b></a>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">About Me</h3>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <strong><i class=\"fa fa-book margin-r-5\"></i> Education</strong>
                    <p class=\"text-muted\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "degree", array()), "html", null, true);
        echo "</p>
                    <hr>
                    <strong><i class=\"fa fa-map-marker margin-r-5\"></i> Location</strong>
                    <p class=\"text-muted\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["auth"] ?? null), "userMaster", array()), "location", array()), "html", null, true);
        echo "Dubai, UAE</p>
                    <hr>

                    <strong><i class=\"fa fa-pencil margin-r-5\"></i> Skills</strong>
                    <p>
                        <span class=\"label label-danger\">UI Design</span>
                        <span class=\"label label-success\">Coding</span>
                        <span class=\"label label-info\">Javascript</span>
                        <span class=\"label label-warning\">PHP</span>
                        <span class=\"label label-primary\">Node.js</span>
                    </p>

                    <hr>

                    <strong><i class=\"fa fa-file-text-o margin-r-5\"></i> Notes</strong>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class=\"col-md-9\">
        <div class=\"nav-tabs-custom\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#activity\" data-toggle=\"tab\">Activity</a></li>
            <li><a href=\"#timeline\" data-toggle=\"tab\">Timeline</a></li>
            <li><a href=\"#settings\" data-toggle=\"tab\">Settings</a></li>
        </ul>
        <div class=\"tab-content\">
        <div class=\"active tab-pane\" id=\"activity\">
            <!-- Post -->
            <div class=\"post\">
                <div class=\"user-block\">
                    <img class=\"img-circle img-bordered-sm\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/img/user1-128x128.jpg\" alt=\"user image\">
                            <span class=\"username\">
                              <a href=\"#\">Jonathan Burke Jr.</a>
                              <a href=\"#\" class=\"pull-right btn-box-tool\"><i class=\"fa fa-times\"></i></a>
                            </span>
                    <span class=\"description\">Shared publicly - 7:30 PM today</span>
                </div>
                <!-- /.user-block -->
                <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                </p>
                <ul class=\"list-inline\">
                    <li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-share margin-r-5\"></i> Share</a></li>
                    <li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-thumbs-o-up margin-r-5\"></i> Like</a>
                    </li>
                    <li class=\"pull-right\">
                        <a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-comments-o margin-r-5\"></i> Comments
                            (5)</a></li>
                </ul>

                <input class=\"form-control input-sm\" type=\"text\" placeholder=\"Type a comment\">
            </div>
            <!-- /.post -->

            <!-- Post -->
            <div class=\"post clearfix\">
                <div class=\"user-block\">
                    <img class=\"img-circle img-bordered-sm\" src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/img/user7-128x128.jpg\" alt=\"User Image\">
                            <span class=\"username\">
                              <a href=\"#\">Sarah Ross</a>
                              <a href=\"#\" class=\"pull-right btn-box-tool\"><i class=\"fa fa-times\"></i></a>
                            </span>
                    <span class=\"description\">Sent you a message - 3 days ago</span>
                </div>
                <!-- /.user-block -->
                <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                </p>

                <form class=\"form-horizontal\">
                    <div class=\"form-group margin-bottom-none\">
                        <div class=\"col-sm-9\">
                            <input class=\"form-control input-sm\" placeholder=\"Response\">
                        </div>
                        <div class=\"col-sm-3\">
                            <button type=\"submit\" class=\"btn btn-danger pull-right btn-block btn-sm\">Send</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.post -->

            <!-- Post -->
            <div class=\"post\">
                <div class=\"user-block\">
                    <img class=\"img-circle img-bordered-sm\" src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/img/user6-128x128.jpg\" alt=\"User Image\">
                            <span class=\"username\">
                              <a href=\"#\">Adam Jones</a>
                              <a href=\"#\" class=\"pull-right btn-box-tool\"><i class=\"fa fa-times\"></i></a>
                            </span>
                    <span class=\"description\">Posted 5 photos - 5 days ago</span>
                </div>
                <!-- /.user-block -->
                <div class=\"row margin-bottom\">
                    <div class=\"col-sm-6\">
                        <img class=\"img-responsive\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/img/photo1.png\" alt=\"Photo\">
                    </div>
                    <!-- /.col -->
                    <div class=\"col-sm-6\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <img class=\"img-responsive\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/img/photo2.png\" alt=\"Photo\">
                                <br>
                                <img class=\"img-responsive\" src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/img/photo3.jpg\" alt=\"Photo\">
                            </div>
                            <!-- /.col -->
                            <div class=\"col-sm-6\">
                                <img class=\"img-responsive\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/img/photo4.jpg\" alt=\"Photo\">
                                <br>
                                <img class=\"img-responsive\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/img/photo1.png\" alt=\"Photo\">
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <ul class=\"list-inline\">
                    <li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-share margin-r-5\"></i> Share</a></li>
                    <li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-thumbs-o-up margin-r-5\"></i> Like</a>
                    </li>
                    <li class=\"pull-right\">
                        <a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-comments-o margin-r-5\"></i> Comments
                            (5)</a></li>
                </ul>

                <input class=\"form-control input-sm\" type=\"text\" placeholder=\"Type a comment\">
            </div>
            <!-- /.post -->
        </div>
        <!-- /.tab-pane -->
        <div class=\"tab-pane\" id=\"timeline\">
            <!-- The timeline -->
            <ul class=\"timeline timeline-inverse\">
                <!-- timeline time label -->
                <li class=\"time-label\">
                            <span class=\"bg-red\">
                              10 Feb. 2014
                            </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                    <i class=\"fa fa-envelope bg-blue\"></i>

                    <div class=\"timeline-item\">
                        <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 12:05</span>

                        <h3 class=\"timeline-header\"><a href=\"#\">Support Team</a> sent you an email</h3>

                        <div class=\"timeline-body\">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                        </div>
                        <div class=\"timeline-footer\">
                            <a class=\"btn btn-primary btn-xs\">Read more</a>
                            <a class=\"btn btn-danger btn-xs\">Delete</a>
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                    <i class=\"fa fa-user bg-aqua\"></i>

                    <div class=\"timeline-item\">
                        <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 5 mins ago</span>

                        <h3 class=\"timeline-header no-border\"><a href=\"#\">Sarah Young</a> accepted your friend request
                        </h3>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                    <i class=\"fa fa-comments bg-yellow\"></i>

                    <div class=\"timeline-item\">
                        <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 27 mins ago</span>

                        <h3 class=\"timeline-header\"><a href=\"#\">Jay White</a> commented on your post</h3>

                        <div class=\"timeline-body\">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                        </div>
                        <div class=\"timeline-footer\">
                            <a class=\"btn btn-warning btn-flat btn-xs\">View comment</a>
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline time label -->
                <li class=\"time-label\">
                            <span class=\"bg-green\">
                              3 Jan. 2014
                            </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                    <i class=\"fa fa-camera bg-purple\"></i>

                    <div class=\"timeline-item\">
                        <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 2 days ago</span>

                        <h3 class=\"timeline-header\"><a href=\"#\">Mina Lee</a> uploaded new photos</h3>

                        <div class=\"timeline-body\">
                            <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                            <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                            <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                            <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <li>
                    <i class=\"fa fa-clock-o bg-gray\"></i>
                </li>
            </ul>
        </div>
        <!-- /.tab-pane -->

        <div class=\"tab-pane\" id=\"settings\">
            <form class=\"form-horizontal\">
                <div class=\"form-group\">
                    <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>

                    <div class=\"col-sm-10\">
                        <input type=\"email\" class=\"form-control\" id=\"inputName\" placeholder=\"Name\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>

                    <div class=\"col-sm-10\">
                        <input type=\"email\" class=\"form-control\" id=\"inputEmail\" placeholder=\"Email\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>

                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" id=\"inputName\" placeholder=\"Name\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"inputExperience\" class=\"col-sm-2 control-label\">Experience</label>

                    <div class=\"col-sm-10\">
                        <textarea class=\"form-control\" id=\"inputExperience\" placeholder=\"Experience\"></textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"inputSkills\" class=\"col-sm-2 control-label\">Skills</label>

                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" id=\"inputSkills\" placeholder=\"Skills\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-sm-offset-2 col-sm-10\">
                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\"> I agree to the <a href=\"#\">terms and conditions</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-sm-offset-2 col-sm-10\">
                        <button type=\"submit\" class=\"btn btn-danger\">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
";
    }

    public function getTemplateName()
    {
        return "auth/HR/User/profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 181,  285 => 179,  278 => 175,  273 => 173,  264 => 167,  251 => 157,  216 => 125,  182 => 94,  144 => 59,  138 => 56,  121 => 42,  112 => 38,  104 => 35,  98 => 32,  91 => 28,  84 => 26,  77 => 24,  61 => 13,  57 => 12,  49 => 9,  45 => 7,  42 => 6,  36 => 4,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}
{% block title %}User Profile{% endblock %}

{% block bodyTags %}hold-transition skin-blue sidebar-collapse sidebar-mini{% endblock %}

{% block contents %}
    <section class=\"content-header\">
        <h1>
            {{ auth.userMaster.first_name }} {{ auth.userMaster.last_name }} Profile
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"{{ base_url() }}\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li class=\"active\">{{ auth.user.first_name }} {{ auth.user.last_name }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
        <div class=\"col-md-3\">
            <!-- Profile Image -->
            <div class=\"box box-primary\">
                <div class=\"box-body box-profile\">
                    <img class=\"profile-user-img img-responsive img-circle\" src=\"{{ base_url() }}/{{ auth.userMaster.prof_pic }}\" alt=\"User profile picture\">

                    <h3 class=\"profile-username text-center\">{{ auth.userMaster.first_name }} {{ auth.userMaster.last_name }}</h3>

                    <p class=\"text-muted text-center\">{{ auth.userMaster.title }}</p>

                    <ul class=\"list-group list-group-unbordered\">
                        <li class=\"list-group-item\">
                            <b>Employee ID:</b> <a class=\"pull-right\">{{ auth.userMaster.emp_ref }}</a>
                        </li>
                        <li class=\"list-group-item\">
                            <b>Extension:</b> <a class=\"pull-right\" href=\"tel:{{ auth.userMaster.local_extension }}\">{{ auth.userMaster.local_extension }}</a>
                        </li>
                        <li class=\"list-group-item\">
                            <b>Mobile Number</b> <a class=\"pull-right\" href=\"tel:{{ auth.userMaster.primary_phone }}\">{{ auth.userMaster.primary_phone }}</a>
                        </li>
                    </ul>

                    <a href=\"{{ path_for('auth.PasswordChange') }}\" class=\"btn btn-primary btn-block\"><b>Change Password</b></a>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">About Me</h3>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <strong><i class=\"fa fa-book margin-r-5\"></i> Education</strong>
                    <p class=\"text-muted\">{{ auth.userMaster.degree }}</p>
                    <hr>
                    <strong><i class=\"fa fa-map-marker margin-r-5\"></i> Location</strong>
                    <p class=\"text-muted\">{{ auth.userMaster.location }}Dubai, UAE</p>
                    <hr>

                    <strong><i class=\"fa fa-pencil margin-r-5\"></i> Skills</strong>
                    <p>
                        <span class=\"label label-danger\">UI Design</span>
                        <span class=\"label label-success\">Coding</span>
                        <span class=\"label label-info\">Javascript</span>
                        <span class=\"label label-warning\">PHP</span>
                        <span class=\"label label-primary\">Node.js</span>
                    </p>

                    <hr>

                    <strong><i class=\"fa fa-file-text-o margin-r-5\"></i> Notes</strong>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class=\"col-md-9\">
        <div class=\"nav-tabs-custom\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#activity\" data-toggle=\"tab\">Activity</a></li>
            <li><a href=\"#timeline\" data-toggle=\"tab\">Timeline</a></li>
            <li><a href=\"#settings\" data-toggle=\"tab\">Settings</a></li>
        </ul>
        <div class=\"tab-content\">
        <div class=\"active tab-pane\" id=\"activity\">
            <!-- Post -->
            <div class=\"post\">
                <div class=\"user-block\">
                    <img class=\"img-circle img-bordered-sm\" src=\"{{ base_url() }}/img/user1-128x128.jpg\" alt=\"user image\">
                            <span class=\"username\">
                              <a href=\"#\">Jonathan Burke Jr.</a>
                              <a href=\"#\" class=\"pull-right btn-box-tool\"><i class=\"fa fa-times\"></i></a>
                            </span>
                    <span class=\"description\">Shared publicly - 7:30 PM today</span>
                </div>
                <!-- /.user-block -->
                <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                </p>
                <ul class=\"list-inline\">
                    <li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-share margin-r-5\"></i> Share</a></li>
                    <li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-thumbs-o-up margin-r-5\"></i> Like</a>
                    </li>
                    <li class=\"pull-right\">
                        <a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-comments-o margin-r-5\"></i> Comments
                            (5)</a></li>
                </ul>

                <input class=\"form-control input-sm\" type=\"text\" placeholder=\"Type a comment\">
            </div>
            <!-- /.post -->

            <!-- Post -->
            <div class=\"post clearfix\">
                <div class=\"user-block\">
                    <img class=\"img-circle img-bordered-sm\" src=\"{{ base_url() }}/img/user7-128x128.jpg\" alt=\"User Image\">
                            <span class=\"username\">
                              <a href=\"#\">Sarah Ross</a>
                              <a href=\"#\" class=\"pull-right btn-box-tool\"><i class=\"fa fa-times\"></i></a>
                            </span>
                    <span class=\"description\">Sent you a message - 3 days ago</span>
                </div>
                <!-- /.user-block -->
                <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                </p>

                <form class=\"form-horizontal\">
                    <div class=\"form-group margin-bottom-none\">
                        <div class=\"col-sm-9\">
                            <input class=\"form-control input-sm\" placeholder=\"Response\">
                        </div>
                        <div class=\"col-sm-3\">
                            <button type=\"submit\" class=\"btn btn-danger pull-right btn-block btn-sm\">Send</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.post -->

            <!-- Post -->
            <div class=\"post\">
                <div class=\"user-block\">
                    <img class=\"img-circle img-bordered-sm\" src=\"{{ base_url() }}/img/user6-128x128.jpg\" alt=\"User Image\">
                            <span class=\"username\">
                              <a href=\"#\">Adam Jones</a>
                              <a href=\"#\" class=\"pull-right btn-box-tool\"><i class=\"fa fa-times\"></i></a>
                            </span>
                    <span class=\"description\">Posted 5 photos - 5 days ago</span>
                </div>
                <!-- /.user-block -->
                <div class=\"row margin-bottom\">
                    <div class=\"col-sm-6\">
                        <img class=\"img-responsive\" src=\"{{ base_url() }}/img/photo1.png\" alt=\"Photo\">
                    </div>
                    <!-- /.col -->
                    <div class=\"col-sm-6\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <img class=\"img-responsive\" src=\"{{ base_url() }}/img/photo2.png\" alt=\"Photo\">
                                <br>
                                <img class=\"img-responsive\" src=\"{{ base_url() }}/img/photo3.jpg\" alt=\"Photo\">
                            </div>
                            <!-- /.col -->
                            <div class=\"col-sm-6\">
                                <img class=\"img-responsive\" src=\"{{ base_url() }}/img/photo4.jpg\" alt=\"Photo\">
                                <br>
                                <img class=\"img-responsive\" src=\"{{ base_url() }}/img/photo1.png\" alt=\"Photo\">
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <ul class=\"list-inline\">
                    <li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-share margin-r-5\"></i> Share</a></li>
                    <li><a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-thumbs-o-up margin-r-5\"></i> Like</a>
                    </li>
                    <li class=\"pull-right\">
                        <a href=\"#\" class=\"link-black text-sm\"><i class=\"fa fa-comments-o margin-r-5\"></i> Comments
                            (5)</a></li>
                </ul>

                <input class=\"form-control input-sm\" type=\"text\" placeholder=\"Type a comment\">
            </div>
            <!-- /.post -->
        </div>
        <!-- /.tab-pane -->
        <div class=\"tab-pane\" id=\"timeline\">
            <!-- The timeline -->
            <ul class=\"timeline timeline-inverse\">
                <!-- timeline time label -->
                <li class=\"time-label\">
                            <span class=\"bg-red\">
                              10 Feb. 2014
                            </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                    <i class=\"fa fa-envelope bg-blue\"></i>

                    <div class=\"timeline-item\">
                        <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 12:05</span>

                        <h3 class=\"timeline-header\"><a href=\"#\">Support Team</a> sent you an email</h3>

                        <div class=\"timeline-body\">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                        </div>
                        <div class=\"timeline-footer\">
                            <a class=\"btn btn-primary btn-xs\">Read more</a>
                            <a class=\"btn btn-danger btn-xs\">Delete</a>
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                    <i class=\"fa fa-user bg-aqua\"></i>

                    <div class=\"timeline-item\">
                        <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 5 mins ago</span>

                        <h3 class=\"timeline-header no-border\"><a href=\"#\">Sarah Young</a> accepted your friend request
                        </h3>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline item -->
                <li>
                    <i class=\"fa fa-comments bg-yellow\"></i>

                    <div class=\"timeline-item\">
                        <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 27 mins ago</span>

                        <h3 class=\"timeline-header\"><a href=\"#\">Jay White</a> commented on your post</h3>

                        <div class=\"timeline-body\">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                        </div>
                        <div class=\"timeline-footer\">
                            <a class=\"btn btn-warning btn-flat btn-xs\">View comment</a>
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <!-- timeline time label -->
                <li class=\"time-label\">
                            <span class=\"bg-green\">
                              3 Jan. 2014
                            </span>
                </li>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li>
                    <i class=\"fa fa-camera bg-purple\"></i>

                    <div class=\"timeline-item\">
                        <span class=\"time\"><i class=\"fa fa-clock-o\"></i> 2 days ago</span>

                        <h3 class=\"timeline-header\"><a href=\"#\">Mina Lee</a> uploaded new photos</h3>

                        <div class=\"timeline-body\">
                            <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                            <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                            <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                            <img src=\"http://placehold.it/150x100\" alt=\"...\" class=\"margin\">
                        </div>
                    </div>
                </li>
                <!-- END timeline item -->
                <li>
                    <i class=\"fa fa-clock-o bg-gray\"></i>
                </li>
            </ul>
        </div>
        <!-- /.tab-pane -->

        <div class=\"tab-pane\" id=\"settings\">
            <form class=\"form-horizontal\">
                <div class=\"form-group\">
                    <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>

                    <div class=\"col-sm-10\">
                        <input type=\"email\" class=\"form-control\" id=\"inputName\" placeholder=\"Name\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>

                    <div class=\"col-sm-10\">
                        <input type=\"email\" class=\"form-control\" id=\"inputEmail\" placeholder=\"Email\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>

                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" id=\"inputName\" placeholder=\"Name\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"inputExperience\" class=\"col-sm-2 control-label\">Experience</label>

                    <div class=\"col-sm-10\">
                        <textarea class=\"form-control\" id=\"inputExperience\" placeholder=\"Experience\"></textarea>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"inputSkills\" class=\"col-sm-2 control-label\">Skills</label>

                    <div class=\"col-sm-10\">
                        <input type=\"text\" class=\"form-control\" id=\"inputSkills\" placeholder=\"Skills\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-sm-offset-2 col-sm-10\">
                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\"> I agree to the <a href=\"#\">terms and conditions</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"col-sm-offset-2 col-sm-10\">
                        <button type=\"submit\" class=\"btn btn-danger\">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
{% endblock %}
", "auth/HR/User/profile.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/HR/User/profile.twig");
    }
}
