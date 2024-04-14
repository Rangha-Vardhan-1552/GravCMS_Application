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

/* partials/logo.html.twig */
class __TwigTemplate_a4107ff4ca7a12e5c24713bfd9243e0cdb1ec70c38f8349e549317c943550477 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/logo.html.twig"));

        // line 1
        $context["logo"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, ((($context["mobile"] ?? null)) ? ("custom_logo_mobile") : ("custom_logo")));
        // line 2
        echo "<a href=\"";
        echo twig_escape_filter($this->env, ($context["home_url"] ?? null), "html", null, true);
        echo "\" class=\"navbar-brand mr-10\">
";
        // line 3
        if (($context["logo"] ?? null)) {
            // line 4
            echo "  ";
            $context["logo_file"] = $this->getAttribute(twig_first($this->env, ($context["logo"] ?? null)), "name", []);
            // line 5
            echo "  <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(("theme://images/logo/" . ($context["logo_file"] ?? null))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
            echo "\" />
";
        } else {
            // line 7
            echo "  ";
            $this->loadTemplate("@images/grav-logo.svg", "partials/logo.html.twig", 7)->display($context);
        }
        // line 9
        echo "</a>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  53 => 7,  45 => 5,  42 => 4,  40 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set logo = theme_var(mobile ? 'custom_logo_mobile' : 'custom_logo') %}
<a href=\"{{ home_url }}\" class=\"navbar-brand mr-10\">
{% if logo %}
  {% set logo_file = (logo|first).name %}
  <img src=\"{{ url('theme://images/logo/' ~ logo_file)  }}\" alt=\"{{ site.title }}\" />
{% else %}
  {% include('@images/grav-logo.svg') %}
{% endif %}
</a>", "partials/logo.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\themes\\quark\\templates\\partials\\logo.html.twig");
    }
}
