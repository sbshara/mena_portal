<?php

/* auth/Operations/Guidelines/GuidelineById.twig */
class __TwigTemplate_dd9830995bc1fb18f03e228b93dc21c2dcf3f9ae9c847786ae0bbf7bd3136cbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/app.twig", "auth/Operations/Guidelines/GuidelineById.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 5
    public function block_bodyTags($context, array $blocks = array())
    {
        // line 6
        echo "    hold-transition skin-blue sidebar-collapse sidebar-mini
";
    }

    // line 9
    public function block_contents($context, array $blocks = array())
    {
        // line 10
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <!-- Box Comment -->
            <div class=\"box box-widget\">
                <div class=\"box-header with-border\">
                    <div class=\"user-block\">
                        <img class=\"img-circle\" src=\"../dist/img/user1-128x128.jpg\" alt=\"User Image\">
                        <span class=\"username\"><a href=\"#\">Jonathan Burke Jr.</a></span>
                        <span class=\"description\">Shared publicly - 7:30 PM Today</span>
                    </div>
                    <!-- /.user-block -->
                    <div class=\"box-tools\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Mark as read\">
                            <i class=\"fa fa-circle-o\"></i></button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <img class=\"img-responsive pad\" src=\"../dist/img/photo2.png\" alt=\"Photo\">

                    <p>I took this photo this morning. What do you guys think?</p>
                    <button type=\"button\" class=\"btn btn-default btn-xs\"><i class=\"fa fa-share\"></i> Share</button>
                    <button type=\"button\" class=\"btn btn-default btn-xs\"><i class=\"fa fa-thumbs-o-up\"></i> Like</button>
                    <span class=\"pull-right text-muted\">127 likes - 3 comments</span>
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer box-comments\">
                    <div class=\"box-comment\">
                        <!-- User image -->
                        <img class=\"img-circle img-sm\" src=\"../dist/img/user3-128x128.jpg\" alt=\"User Image\">

                        <div class=\"comment-text\">
                      <span class=\"username\">
                        Maria Gonzales
                        <span class=\"text-muted pull-right\">8:03 PM Today</span>
                      </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                    <div class=\"box-comment\">
                        <!-- User image -->
                        <img class=\"img-circle img-sm\" src=\"../dist/img/user4-128x128.jpg\" alt=\"User Image\">

                        <div class=\"comment-text\">
                      <span class=\"username\">
                        Luna Stark
                        <span class=\"text-muted pull-right\">8:03 PM Today</span>
                      </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                </div>
                <!-- /.box-footer -->
                <div class=\"box-footer\">
                    <form action=\"#\" method=\"post\">
                        <img class=\"img-responsive img-circle img-sm\" src=\"../dist/img/user4-128x128.jpg\" alt=\"Alt Text\">
                        <!-- .img-push is used to add margin to elements next to floating images -->
                        <div class=\"img-push\">
                            <input type=\"text\" class=\"form-control input-sm\" placeholder=\"Press enter to post comment\">
                        </div>
                    </form>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class=\"col-md-6\">
            <!-- Box Comment -->
            <div class=\"box box-widget\">
                <div class=\"box-header with-border\">
                    <div class=\"user-block\">
                        <img class=\"img-circle\" src=\"../dist/img/user1-128x128.jpg\" alt=\"User Image\">
                        <span class=\"username\"><a href=\"#\">Jonathan Burke Jr.</a></span>
                        <span class=\"description\">Shared publicly - 7:30 PM Today</span>
                    </div>
                    <!-- /.user-block -->
                    <div class=\"box-tools\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Mark as read\">
                            <i class=\"fa fa-circle-o\"></i></button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <!-- post text -->
                    <p>Far far away, behind the word mountains, far from the
                        countries Vokalia and Consonantia, there live the blind
                        texts. Separated they live in Bookmarksgrove right at</p>

                    <p>the coast of the Semantics, a large language ocean.
                        A small river named Duden flows by their place and supplies
                        it with the necessary regelialia. It is a paradisematic
                        country, in which roasted parts of sentences fly into
                        your mouth.</p>

                    <!-- Attachment -->
                    <div class=\"attachment-block clearfix\">
                        <img class=\"attachment-img\" src=\"../dist/img/photo1.png\" alt=\"Attachment Image\">

                        <div class=\"attachment-pushed\">
                            <h4 class=\"attachment-heading\"><a href=\"http://www.lipsum.com/\">Lorem ipsum text generator</a></h4>

                            <div class=\"attachment-text\">
                                Description about the attachment can be placed here.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href=\"#\">more</a>
                            </div>
                            <!-- /.attachment-text -->
                        </div>
                        <!-- /.attachment-pushed -->
                    </div>
                    <!-- /.attachment-block -->

                    <!-- Social sharing buttons -->
                    <button type=\"button\" class=\"btn btn-default btn-xs\"><i class=\"fa fa-share\"></i> Share</button>
                    <button type=\"button\" class=\"btn btn-default btn-xs\"><i class=\"fa fa-thumbs-o-up\"></i> Like</button>
                    <span class=\"pull-right text-muted\">45 likes - 2 comments</span>
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer box-comments\">
                    <div class=\"box-comment\">
                        <!-- User image -->
                        <img class=\"img-circle img-sm\" src=\"../dist/img/user3-128x128.jpg\" alt=\"User Image\">

                        <div class=\"comment-text\">
                      <span class=\"username\">
                        Maria Gonzales
                        <span class=\"text-muted pull-right\">8:03 PM Today</span>
                      </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                    <div class=\"box-comment\">
                        <!-- User image -->
                        <img class=\"img-circle img-sm\" src=\"../dist/img/user5-128x128.jpg\" alt=\"User Image\">

                        <div class=\"comment-text\">
                      <span class=\"username\">
                        Nora Havisham
                        <span class=\"text-muted pull-right\">8:03 PM Today</span>
                      </span><!-- /.username -->
                            The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to using
                            'Content here, content here', making it look like readable English.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                </div>
                <!-- /.box-footer -->
                <div class=\"box-footer\">
                    <form action=\"#\" method=\"post\">
                        <img class=\"img-responsive img-circle img-sm\" src=\"../dist/img/user4-128x128.jpg\" alt=\"Alt Text\">
                        <!-- .img-push is used to add margin to elements next to floating images -->
                        <div class=\"img-push\">
                            <input type=\"text\" class=\"form-control input-sm\" placeholder=\"Press enter to post comment\">
                        </div>
                    </form>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    Guideline By ID (ID = ";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["guideline"] ?? null), "id", array()), "html", null, true);
        echo ")
    <br>
    Subject: ";
        // line 193
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["guideline"] ?? null), "subject", array()), "html", null, true);
        echo "
    <br>
    Body: ";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["guideline"] ?? null), "body", array()), "html", null, true);
        echo "
    <br>
    Created: ";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["guideline"] ?? null), "created_at", array()), "html", null, true);
        echo "
    <br>
    ";
        // line 199
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["guideline"] ?? null), "updated_at", array())) {
            // line 200
            echo "        Updated: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["guideline"] ?? null), "updated_at", array()), "html", null, true);
            echo "
        <br>
    ";
        }
        // line 203
        echo "    Created By: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["guideline"] ?? null), "created_by", array()), "html", null, true);
        echo "
    <br>
";
    }

    public function getTemplateName()
    {
        return "auth/Operations/Guidelines/GuidelineById.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 203,  252 => 200,  250 => 199,  245 => 197,  240 => 195,  235 => 193,  230 => 191,  47 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'templates/app.twig' %}

{% block title %}Home{% endblock %}

{% block bodyTags %}
    hold-transition skin-blue sidebar-collapse sidebar-mini
{% endblock %}

{% block contents %}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <!-- Box Comment -->
            <div class=\"box box-widget\">
                <div class=\"box-header with-border\">
                    <div class=\"user-block\">
                        <img class=\"img-circle\" src=\"../dist/img/user1-128x128.jpg\" alt=\"User Image\">
                        <span class=\"username\"><a href=\"#\">Jonathan Burke Jr.</a></span>
                        <span class=\"description\">Shared publicly - 7:30 PM Today</span>
                    </div>
                    <!-- /.user-block -->
                    <div class=\"box-tools\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Mark as read\">
                            <i class=\"fa fa-circle-o\"></i></button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <img class=\"img-responsive pad\" src=\"../dist/img/photo2.png\" alt=\"Photo\">

                    <p>I took this photo this morning. What do you guys think?</p>
                    <button type=\"button\" class=\"btn btn-default btn-xs\"><i class=\"fa fa-share\"></i> Share</button>
                    <button type=\"button\" class=\"btn btn-default btn-xs\"><i class=\"fa fa-thumbs-o-up\"></i> Like</button>
                    <span class=\"pull-right text-muted\">127 likes - 3 comments</span>
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer box-comments\">
                    <div class=\"box-comment\">
                        <!-- User image -->
                        <img class=\"img-circle img-sm\" src=\"../dist/img/user3-128x128.jpg\" alt=\"User Image\">

                        <div class=\"comment-text\">
                      <span class=\"username\">
                        Maria Gonzales
                        <span class=\"text-muted pull-right\">8:03 PM Today</span>
                      </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                    <div class=\"box-comment\">
                        <!-- User image -->
                        <img class=\"img-circle img-sm\" src=\"../dist/img/user4-128x128.jpg\" alt=\"User Image\">

                        <div class=\"comment-text\">
                      <span class=\"username\">
                        Luna Stark
                        <span class=\"text-muted pull-right\">8:03 PM Today</span>
                      </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                </div>
                <!-- /.box-footer -->
                <div class=\"box-footer\">
                    <form action=\"#\" method=\"post\">
                        <img class=\"img-responsive img-circle img-sm\" src=\"../dist/img/user4-128x128.jpg\" alt=\"Alt Text\">
                        <!-- .img-push is used to add margin to elements next to floating images -->
                        <div class=\"img-push\">
                            <input type=\"text\" class=\"form-control input-sm\" placeholder=\"Press enter to post comment\">
                        </div>
                    </form>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class=\"col-md-6\">
            <!-- Box Comment -->
            <div class=\"box box-widget\">
                <div class=\"box-header with-border\">
                    <div class=\"user-block\">
                        <img class=\"img-circle\" src=\"../dist/img/user1-128x128.jpg\" alt=\"User Image\">
                        <span class=\"username\"><a href=\"#\">Jonathan Burke Jr.</a></span>
                        <span class=\"description\">Shared publicly - 7:30 PM Today</span>
                    </div>
                    <!-- /.user-block -->
                    <div class=\"box-tools\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Mark as read\">
                            <i class=\"fa fa-circle-o\"></i></button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <!-- post text -->
                    <p>Far far away, behind the word mountains, far from the
                        countries Vokalia and Consonantia, there live the blind
                        texts. Separated they live in Bookmarksgrove right at</p>

                    <p>the coast of the Semantics, a large language ocean.
                        A small river named Duden flows by their place and supplies
                        it with the necessary regelialia. It is a paradisematic
                        country, in which roasted parts of sentences fly into
                        your mouth.</p>

                    <!-- Attachment -->
                    <div class=\"attachment-block clearfix\">
                        <img class=\"attachment-img\" src=\"../dist/img/photo1.png\" alt=\"Attachment Image\">

                        <div class=\"attachment-pushed\">
                            <h4 class=\"attachment-heading\"><a href=\"http://www.lipsum.com/\">Lorem ipsum text generator</a></h4>

                            <div class=\"attachment-text\">
                                Description about the attachment can be placed here.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href=\"#\">more</a>
                            </div>
                            <!-- /.attachment-text -->
                        </div>
                        <!-- /.attachment-pushed -->
                    </div>
                    <!-- /.attachment-block -->

                    <!-- Social sharing buttons -->
                    <button type=\"button\" class=\"btn btn-default btn-xs\"><i class=\"fa fa-share\"></i> Share</button>
                    <button type=\"button\" class=\"btn btn-default btn-xs\"><i class=\"fa fa-thumbs-o-up\"></i> Like</button>
                    <span class=\"pull-right text-muted\">45 likes - 2 comments</span>
                </div>
                <!-- /.box-body -->
                <div class=\"box-footer box-comments\">
                    <div class=\"box-comment\">
                        <!-- User image -->
                        <img class=\"img-circle img-sm\" src=\"../dist/img/user3-128x128.jpg\" alt=\"User Image\">

                        <div class=\"comment-text\">
                      <span class=\"username\">
                        Maria Gonzales
                        <span class=\"text-muted pull-right\">8:03 PM Today</span>
                      </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                    <div class=\"box-comment\">
                        <!-- User image -->
                        <img class=\"img-circle img-sm\" src=\"../dist/img/user5-128x128.jpg\" alt=\"User Image\">

                        <div class=\"comment-text\">
                      <span class=\"username\">
                        Nora Havisham
                        <span class=\"text-muted pull-right\">8:03 PM Today</span>
                      </span><!-- /.username -->
                            The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to using
                            'Content here, content here', making it look like readable English.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                </div>
                <!-- /.box-footer -->
                <div class=\"box-footer\">
                    <form action=\"#\" method=\"post\">
                        <img class=\"img-responsive img-circle img-sm\" src=\"../dist/img/user4-128x128.jpg\" alt=\"Alt Text\">
                        <!-- .img-push is used to add margin to elements next to floating images -->
                        <div class=\"img-push\">
                            <input type=\"text\" class=\"form-control input-sm\" placeholder=\"Press enter to post comment\">
                        </div>
                    </form>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    Guideline By ID (ID = {{ guideline.id }})
    <br>
    Subject: {{ guideline.subject }}
    <br>
    Body: {{ guideline.body }}
    <br>
    Created: {{ guideline.created_at }}
    <br>
    {% if guideline.updated_at %}
        Updated: {{ guideline.updated_at }}
        <br>
    {% endif %}
    Created By: {{ guideline.created_by }}
    <br>
{% endblock %}", "auth/Operations/Guidelines/GuidelineById.twig", "/Users/shiblie/Sites/mena_portal/resources/views/auth/Operations/Guidelines/GuidelineById.twig");
    }
}
