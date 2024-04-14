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

/* partials/list-sort.html.twig */
class __TwigTemplate_df47f24a7685d6d242250fe29d292c81d90dd1e5103627c156aaeb69e367a711 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/list-sort.html.twig"));

        // line 1
        echo "<form class=\"sort-actions\" data-grav-selectize=\"true\">
    <select>
        <option value=\"name\" selected>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.NAME"), "html", null, true);
        echo "</option>
        <option value=\"author\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.AUTHOR"), "html", null, true);
        echo "</option>
        <option value=\"official\">GravTeam</option>
        <option value=\"premium\">Premium</option>
        <option value=\"release-date\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.RELEASE_DATE"), "html", null, true);
        echo "</option>
        ";
        // line 8
        if (((($context["list_view"] ?? null) == "plugins") &&  !($context["installing"] ?? null))) {
            echo "<option value=\"enabled\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.ENABLED"), "html", null, true);
            echo "</option>";
        }
        // line 9
        echo "        ";
        if ( !($context["installing"] ?? null)) {
            echo "<option value=\"updatable\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.UPDATES_AVAILABLE"), "html", null, true);
            echo "</option>";
        }
        // line 10
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "gpm", []), "releases", []) == "testing")) {
            echo "<option value=\"testing\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.TESTING"), "html", null, true);
            echo "</option>";
        }
        // line 11
        echo "    </select>
    <div class=\"sort-icon\"><i class=\"fa fa-fw fa-sort-amount-asc\"></i></div>
</form>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/list-sort.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  64 => 10,  57 => 9,  51 => 8,  47 => 7,  41 => 4,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"sort-actions\" data-grav-selectize=\"true\">
    <select>
        <option value=\"name\" selected>{{ \"PLUGIN_ADMIN.NAME\"|t }}</option>
        <option value=\"author\">{{ \"PLUGIN_ADMIN.AUTHOR\"|t }}</option>
        <option value=\"official\">GravTeam</option>
        <option value=\"premium\">Premium</option>
        <option value=\"release-date\">{{ \"PLUGIN_ADMIN.RELEASE_DATE\"|t }}</option>
        {% if list_view == 'plugins' and not installing %}<option value=\"enabled\">{{ \"PLUGIN_ADMIN.ENABLED\"|t }}</option>{% endif %}
        {% if not installing %}<option value=\"updatable\">{{ \"PLUGIN_ADMIN.UPDATES_AVAILABLE\"|t }}</option>{% endif %}
        {% if config.system.gpm.releases == 'testing' %}<option value=\"testing\">{{ \"PLUGIN_ADMIN.TESTING\"|t }}</option>{% endif %}
    </select>
    <div class=\"sort-icon\"><i class=\"fa fa-fw fa-sort-amount-asc\"></i></div>
</form>
", "partials/list-sort.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\list-sort.html.twig");
    }
}
