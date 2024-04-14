<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* flex-objects/types/default/buttons/configuration.html.twig */
class __TwigTemplate_39618309ded6675dd8f694a4f4116f9ea415380606244de547306117c110221a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/types/default/buttons/configuration.html.twig"));

        // line 1
        $context["authorize"] = ((($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.views.configure.authorize"], "method", true, true) &&  !(null === $this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.views.configure.authorize"], "method")))) ? ($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.views.configure.authorize"], "method")) : (((($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.configure.authorize"], "method", true, true) &&  !(null === $this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.configure.authorize"], "method")))) ? ($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.configure.authorize"], "method")) : ("admin.super"))));
        // line 3
        if ((($context["configure_url"] ?? null) && $this->getAttribute(($context["user"] ?? null), "authorize", [0 => ($context["authorize"] ?? null)], "method"))) {
            // line 4
            echo "<a id=\"titlebar-button-configure\" class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["configure_url"] ?? null), "html", null, true);
            echo "\">
    <i class=\"fa fa-cog\"></i> ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
            echo "
</a>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/buttons/configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  37 => 4,  35 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{%- set authorize = directory.config('admin.views.configure.authorize') ?? directory.config('admin.configure.authorize') ?? 'admin.super' %}

{%- if configure_url and user.authorize(authorize) %}
<a id=\"titlebar-button-configure\" class=\"button\" href=\"{{ configure_url }}\">
    <i class=\"fa fa-cog\"></i> {{ 'PLUGIN_ADMIN.CONFIGURATION'|tu }}
</a>
{% endif %}
", "flex-objects/types/default/buttons/configuration.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\buttons\\configuration.html.twig");
    }
}
