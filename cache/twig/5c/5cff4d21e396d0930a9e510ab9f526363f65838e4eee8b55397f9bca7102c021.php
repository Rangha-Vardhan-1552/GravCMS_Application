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

/* forms/fields/xss/xss.html.twig */
class __TwigTemplate_e6a5db510f8745d3b6b564518992d325109e56d023fe01d455d722ac72e9ff4a extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/xss/xss.html.twig"));

        // line 1
        $context["xss_header"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->arrayFilter(((($context["form"] ?? null)) ? ($this->getAttribute(($context["form"] ?? null), "value", [0 => "header"], "method")) : ($this->getAttribute(($context["data"] ?? null), "value", [0 => "header"], "method"))));
        // line 2
        $context["xss_content"] = ((($context["form"] ?? null)) ? ($this->getAttribute(($context["form"] ?? null), "value", [0 => "content"], "method")) : ($this->getAttribute(($context["data"] ?? null), "value", [0 => "content"], "method")));
        // line 3
        $context["xss_status"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->xssFunc(["header" => ($context["xss_header"] ?? null), "content" => ($context["xss_content"] ?? null)]);
        // line 4
        if ( !twig_test_empty(($context["xss_status"] ?? null))) {
            // line 5
            echo "    <div class=\"notice alert\">";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.XSS_ISSUE", ($context["xss_status"] ?? null));
            echo "</div>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/xss/xss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set xss_header = (form ? form.value('header') : data.value('header'))|array %}
{% set xss_content = form ? form.value('content') : data.value('content') %}
{% set xss_status = xss({header: xss_header, content: xss_content}) %}
{% if xss_status is not empty %}
    <div class=\"notice alert\">{{ \"PLUGIN_ADMIN.XSS_ISSUE\"|t(xss_status)|raw }}</div>
{% endif %}
", "forms/fields/xss/xss.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\xss\\xss.html.twig");
    }
}
