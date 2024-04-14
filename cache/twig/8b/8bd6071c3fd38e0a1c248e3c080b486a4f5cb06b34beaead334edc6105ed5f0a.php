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

/* flex-objects/types/pages/buttons/add.html.twig */
class __TwigTemplate_a1219f31b8b055aa393733f554736ef2cbdbd185aded786400444195a025df7b extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/types/pages/buttons/add.html.twig"));

        // line 1
        echo "<div id=\"titlebar-add\" class=\"button-group\">
    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
        <i class=\"fa fa-plus\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
        echo "
    </button>
    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-caret-down\"></i>
    </button>
    <ul class=\"dropdown-menu\">
        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
        echo "</a></li>
        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
        echo "</a></li>
        ";
        // line 11
        if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", []))) {
            // line 12
            echo "        <li><a class=\"button\" href=\"#module\" data-remodal-target=\"module\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULE"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 14
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "add_modals", []));
        foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
            // line 15
            echo "            ";
            if (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", []), "bar") == "dropdown")) {
                // line 16
                echo "                <li><a class=\"button ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", []), "html", null, true);
                echo "\" href=\"#modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-remodal-target=\"modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["add_modal"], "label", [])), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 18
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ul>
</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/buttons/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  82 => 18,  70 => 16,  67 => 15,  62 => 14,  56 => 12,  54 => 11,  50 => 10,  46 => 9,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"titlebar-add\" class=\"button-group\">
    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
        <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
    </button>
    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-caret-down\"></i>
    </button>
    <ul class=\"dropdown-menu\">
        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a></li>
        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
        {% if admin.modularTypes is not empty %}
        <li><a class=\"button\" href=\"#module\" data-remodal-target=\"module\">{{ \"PLUGIN_ADMIN.ADD_MODULE\"|tu }}</a></li>
        {% endif %}
        {% for key, add_modal in config.plugins.admin.add_modals %}
            {% if add_modal.show_in|defined('bar') == 'dropdown' %}
                <li><a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\">{{ add_modal.label|tu }}</a></li>
            {% endif %}
        {% endfor %}
    </ul>
</div>
", "flex-objects/types/pages/buttons/add.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\buttons\\add.html.twig");
    }
}
