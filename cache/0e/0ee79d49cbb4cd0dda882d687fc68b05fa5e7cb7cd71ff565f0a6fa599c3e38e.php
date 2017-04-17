<?php

/* templates/partials/flash.twig */
class __TwigTemplate_be74ce9031b229afc8bfd7077901ebf4bf10ee1174edefc011f2da42b9456e39 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "global"), "method")) {
            // line 2
            echo "    <div class=\"callout callout-info\">
        <h4>FLASH HEADER!</h4>
        ";
            // line 4
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "global"), "method")), "html", null, true);
            echo "
    </div>
";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(),         // line 6
($context["flash"] ?? null), "getMessage", array(0 => "info"), "method")) {
            // line 7
            echo "    <div class=\"callout callout-info\">
        <h4>Information!</h4>
        ";
            // line 9
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "info"), "method")), "html", null, true);
            echo "
    </div>
";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(),         // line 11
($context["flash"] ?? null), "getMessage", array(0 => "danger"), "method")) {
            // line 12
            echo "    <div class=\"callout callout-danger\">
        <h4>Error!</h4>
        ";
            // line 14
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "danger"), "method")), "html", null, true);
            echo "
    </div>
";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(),         // line 16
($context["flash"] ?? null), "getMessage", array(0 => "success"), "method")) {
            // line 17
            echo "    <div class=\"callout callout-success\">
        <h4>Success!</h4>
        ";
            // line 19
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "success"), "method")), "html", null, true);
            echo "
    </div>
";
        } elseif (twig_get_attribute($this->env, $this->getSourceContext(),         // line 21
($context["flash"] ?? null), "getMessage", array(0 => "warning"), "method")) {
            // line 22
            echo "    <div class=\"callout callout-warning\">
        <h4>Warning!</h4>
        ";
            // line 24
            echo twig_escape_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["flash"] ?? null), "getMessage", array(0 => "warning"), "method")), "html", null, true);
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "templates/partials/flash.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  65 => 22,  63 => 21,  58 => 19,  54 => 17,  52 => 16,  47 => 14,  43 => 12,  41 => 11,  36 => 9,  32 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if flash.getMessage('global') %}
    <div class=\"callout callout-info\">
        <h4>FLASH HEADER!</h4>
        {{ flash.getMessage('global') | first }}
    </div>
{% elseif flash.getMessage('info') %}
    <div class=\"callout callout-info\">
        <h4>Information!</h4>
        {{ flash.getMessage('info') | first }}
    </div>
{% elseif flash.getMessage('danger') %}
    <div class=\"callout callout-danger\">
        <h4>Error!</h4>
        {{ flash.getMessage('danger') | first }}
    </div>
{% elseif flash.getMessage('success') %}
    <div class=\"callout callout-success\">
        <h4>Success!</h4>
        {{ flash.getMessage('success') | first }}
    </div>
{% elseif flash.getMessage('warning') %}
    <div class=\"callout callout-warning\">
        <h4>Warning!</h4>
        {{ flash.getMessage('warning') | first }}
    </div>
{% endif %}
", "templates/partials/flash.twig", "/Users/shiblie/Sites/mena_portal/resources/views/templates/partials/flash.twig");
    }
}
