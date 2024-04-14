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

/* edit title template (string template 04d075666e11e1c5614fc5d480edea046c34d775020fcfb20492914a16457f2d) */
class __TwigTemplate_cbbbd760d72cf948c8683c7aae72099d4bf1c84ab3cf164618bb420baf974d2e extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit title template (string template 04d075666e11e1c5614fc5d480edea046c34d775020fcfb20492914a16457f2d)"));

        // line 1
        if ($this->getAttribute(($context["object"] ?? null), "root", [])) {
            echo "Root <small>( &lt;root&gt; )</small>";
        } else {
            echo twig_escape_filter($this->env, ((($this->getAttribute(($context["form"] ?? null), "value", [0 => "header.title"], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "value", [0 => "header.title"], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "value", [0 => "header.title"], "method")) : ($this->getAttribute(($context["form"] ?? null), "value", [0 => "folder"], "method"))));
            echo " <small>( ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["object"] ?? null), "getRoute", [], "method"), "toString", [0 => false], "method")) ? ($this->getAttribute($this->getAttribute(($context["object"] ?? null), "getRoute", [], "method"), "toString", [0 => false], "method")) : ("/")));
            echo " )</small>";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "edit title template (string template 04d075666e11e1c5614fc5d480edea046c34d775020fcfb20492914a16457f2d)";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if object.root %}Root <small>( &lt;root&gt; )</small>{% else %}{{ (form.value('header.title') ?? form.value('folder'))|e }} <small>( {{ (object.getRoute().toString(false) ?: '/')|e }} )</small>{% endif %}", "edit title template (string template 04d075666e11e1c5614fc5d480edea046c34d775020fcfb20492914a16457f2d)", "");
    }
}
