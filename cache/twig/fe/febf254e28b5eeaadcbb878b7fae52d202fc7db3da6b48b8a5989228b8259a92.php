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

/* plugins.html.twig */
class __TwigTemplate_01084c24d3211fd8fba751da75632fe1ce362b95390d59b6c90a90f77e5ec643 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'titlebar' => [$this, 'block_titlebar'],
            'messages' => [$this, 'block_messages'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plugins.html.twig"));

        // line 3
        $context["plugin_slug"] = $this->getAttribute(($context["admin"] ?? null), "route", []);
        // line 4
        $context["enabled"] = true;
        // line 6
        if (($context["plugin_slug"] ?? null)) {
            // line 7
            $context["installing"] = (is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["plugin_slug"] ?? null)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "install") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)));
            // line 9
            if (($context["installing"] ?? null)) {
                // line 10
                $context["title"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.PLUGINS");
            } else {
                // line 12
                $context["installed"] = true;
                // line 15
                $context["package"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "plugins", [0 => true], "method"), $this->getAttribute(($context["admin"] ?? null), "route", []), [], "array");
                // line 16
                if ( !($context["package"] ?? null)) {
                    // line 17
                    $context["package"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "plugins", [0 => false], "method"), $this->getAttribute(($context["admin"] ?? null), "route", []), [], "array");
                    // line 18
                    $context["installed"] = false;
                }
                // line 21
                $context["plugin"] = $this->getAttribute(($context["package"] ?? null), "toArray", [], "method");
                // line 22
                $context["title"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.PLUGIN") . ": ") . $this->getAttribute(($context["plugin"] ?? null), "name", []));
                // line 23
                $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => ("plugins/" . $this->getAttribute(($context["admin"] ?? null), "route", []))], "method");
                // line 24
                $context["enabled"] = $this->getAttribute(($context["data"] ?? null), "get", [0 => "enabled"], "method");
            }
        } else {
            // line 27
            $context["title"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.PLUGINS");
        }
        // line 30
        if (($this->getAttribute(($context["admin"] ?? null), "route", []) || ($context["installing"] ?? null))) {
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "plugins.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")], "method");
        // line 33
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 41
    public function block_titlebar($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlebar"));

        // line 42
        echo "    ";
        if (( !$this->getAttribute(($context["admin"] ?? null), "route", []) || ($context["installing"] ?? null))) {
            // line 43
            echo "        <div class=\"button-bar\">
        ";
            // line 44
            if (($context["installing"] ?? null)) {
                // line 45
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc("/plugins"), "html", null, true);
                echo "\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 47
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc("/"), "html", null, true);
                echo "\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
            <a class=\"button\" href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc("/plugins/install"), "html", null, true);
                echo "\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "</a>
            ";
                // line 49
                if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->authorize([0 => "admin.maintenance", 1 => "admin.super"])) {
                    // line 50
                    echo "                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.CHECK_FOR_UPDATES"), "html", null, true);
                    echo "</button>
            ";
                }
                // line 52
                echo "        ";
            }
            // line 53
            echo "        </div>
        <h1><i class=\"fa fa-fw fa-plug\"></i> ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.PLUGINS"), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 56
            echo "        ";
            if (($context["installed"] ?? null)) {
                // line 57
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc("/plugins"), "html", null, true);
                echo "\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACK_TO_PLUGINS"), "html", null, true);
                echo "</a>
            <a class=\"button\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc("/plugins/install"), "html", null, true);
                echo "\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "</a>
            ";
                // line 60
                $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = null;
                try {
                    $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b =                     $this->loadTemplate((("plugins/" . $this->getAttribute(($context["admin"] ?? null), "route", [])) . "-buttons.html.twig"), "plugins.html.twig", 60);
                } catch (LoaderError $e) {
                    // ignore missing template
                }
                if ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) {
                    $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b->display($context);
                }
                // line 61
                echo "            ";
                if (($context["enabled"] ?? null)) {
                    // line 62
                    echo "            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.SAVE"), "html", null, true);
                    echo "</button>
            ";
                }
                // line 64
                echo "        </div>
        ";
            } else {
                // line 66
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc("/plugins/install"), "html", null, true);
                echo "\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.BACK_TO_PLUGINS"), "html", null, true);
                echo "</a>
        </div>
        ";
            }
            // line 70
            echo "
        <h1><i class=\"fa fa-fw fa-plug\"></i> ";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.PLUGIN"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["plugin"] ?? null), "name", []), "html", null, true);
            echo "</h1>
    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 75
    public function block_messages($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "messages"));

        // line 76
        echo "    ";
        $this->displayParentBlock("messages", $context, $blocks);
        echo "
    ";
        // line 77
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "notifications", []), "plugins", [])) {
            // line 78
            echo "        <div class=\"plugins-notifications-container hidden\"></div>
    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 82
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 83
        echo "    <div class=\"gpm gpm-plugins\">
        ";
        // line 84
        if (( !$this->getAttribute(($context["admin"] ?? null), "route", []) || ($context["installing"] ?? null))) {
            // line 85
            echo "            ";
            $this->loadTemplate("partials/plugins-list.html.twig", "plugins.html.twig", 85)->display($context);
            // line 86
            echo "        ";
        } else {
            // line 87
            echo "            ";
            if ((null === ($context["plugin"] ?? null))) {
                // line 88
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->redirectFunc((($context["base_url_relative"] ?? null) . "/404")), "html", null, true);
                echo "
            ";
            }
            // line 90
            echo "
            ";
            // line 91
            $this->loadTemplate("partials/plugins-details.html.twig", "plugins.html.twig", 91)->display($context);
            // line 92
            echo "        ";
        }
        // line 93
        echo "    </div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "plugins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 93,  299 => 92,  297 => 91,  294 => 90,  288 => 88,  285 => 87,  282 => 86,  279 => 85,  277 => 84,  274 => 83,  268 => 82,  259 => 78,  257 => 77,  252 => 76,  246 => 75,  234 => 71,  231 => 70,  223 => 67,  220 => 66,  216 => 64,  210 => 62,  207 => 61,  197 => 60,  191 => 59,  185 => 58,  182 => 57,  179 => 56,  174 => 54,  171 => 53,  168 => 52,  162 => 50,  160 => 49,  154 => 48,  147 => 47,  139 => 45,  137 => 44,  134 => 43,  131 => 42,  125 => 41,  115 => 37,  109 => 36,  99 => 33,  96 => 32,  90 => 31,  82 => 1,  79 => 30,  76 => 27,  72 => 24,  70 => 23,  68 => 22,  66 => 21,  63 => 18,  61 => 17,  59 => 16,  57 => 15,  55 => 12,  52 => 10,  50 => 9,  48 => 7,  46 => 6,  44 => 4,  42 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% set plugin_slug = admin.route %}
{% set enabled = true %}

{% if plugin_slug %}
    {% set installing = plugin_slug starts with 'install' %}

    {% if installing %}
        {% set title = \"PLUGIN_ADMIN.PLUGINS\"|t %}
    {% else %}
        {% set installed = true %}

        {# Try installed packages first, then remote #}
        {% set package = admin.plugins(true)[admin.route] %}
        {% if (not package) %}
            {% set package = admin.plugins(false)[admin.route] %}
            {% set installed = false %}
        {% endif %}

        {% set plugin = package.toArray() %}
        {% set title = \"PLUGIN_ADMIN.PLUGIN\"|t ~ \": \" ~ plugin.name %}
        {% set data = admin.data('plugins/' ~ admin.route) %}
        {% set enabled = data.get('enabled') %}
    {% endif %}
{% else %}
    {% set title = \"PLUGIN_ADMIN.PLUGINS\"|t %}
{% endif %}

{% if admin.route or installing %}
    {% block stylesheets %}
        {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}
        {{ parent() }}
    {% endblock %}

    {% block javascripts %}
        {{ parent() }}
    {% endblock %}
{% endif %}

{% block titlebar %}
    {% if not admin.route or installing %}
        <div class=\"button-bar\">
        {% if (installing) %}
            <a class=\"button\" href=\"{{ admin_route('/plugins') }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|t }}</a>
        {% else %}
            <a class=\"button\" href=\"{{ admin_route('/') }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|t }}</a>
            <a class=\"button\" href=\"{{ admin_route('/plugins/install') }}\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|t }}</a>
            {% if authorize(['admin.maintenance', 'admin.super']) %}
                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> {{ \"PLUGIN_ADMIN.CHECK_FOR_UPDATES\"|t }}</button>
            {% endif %}
        {% endif %}
        </div>
        <h1><i class=\"fa fa-fw fa-plug\"></i> {{ \"PLUGIN_ADMIN.PLUGINS\"|t }}</h1>
    {% else %}
        {% if (installed) %}
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ admin_route('/plugins') }}\"><i class=\"fa fa-arrow-left\"></i> {{ \"PLUGIN_ADMIN.BACK_TO_PLUGINS\"|t }}</a>
            <a class=\"button\" href=\"{{ admin_route('/plugins/install') }}\"><i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|t }}</a>
            {% include 'plugins/'~admin.route~'-buttons.html.twig' ignore missing %}
            {% if enabled %}
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|t }}</button>
            {% endif %}
        </div>
        {% else %}
        <div class=\"button-bar\">
            <a class=\"button\" href=\"{{ admin_route('/plugins/install') }}\"><i class=\"fa fa-arrow-left\"></i> {{ \"PLUGIN_ADMIN.BACK_TO_PLUGINS\"|t }}</a>
        </div>
        {% endif %}

        <h1><i class=\"fa fa-fw fa-plug\"></i> {{ \"PLUGIN_ADMIN.PLUGIN\"|t }}: {{ plugin.name }}</h1>
    {% endif %}
{% endblock %}

{% block messages %}
    {{ parent() }}
    {% if config.plugins.admin.notifications.plugins %}
        <div class=\"plugins-notifications-container hidden\"></div>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"gpm gpm-plugins\">
        {% if not admin.route or installing %}
            {% include 'partials/plugins-list.html.twig' %}
        {% else %}
            {% if plugin is null %}
                {{redirect_me(base_url_relative ~ '/404')}}
            {% endif %}

            {% include 'partials/plugins-details.html.twig' %}
        {% endif %}
    </div>
{% endblock %}
", "plugins.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\plugins.html.twig");
    }
}
