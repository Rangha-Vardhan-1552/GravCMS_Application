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

/* partials/nav.html.twig */
class __TwigTemplate_1d09bcb1f4276da39c15a8522ffc44bbe9a311c1787ddc9d84ffb3fc15259db4 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/nav.html.twig"));

        // line 1
        $context["nav_hover"] = ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "sidebar", []), "activate", []) == "hover");
        // line 2
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->authorize([0 => "admin.login", 1 => "admin.super"])) {
            // line 3
            echo "    <nav id=\"admin-sidebar\" data-quickopen=\"";
            echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "sidebar", []), "activate", []) == "hover")) ? ("true") : ("false"));
            echo "\" data-quickopen-delay=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "sidebar", []), "hover_delay", []), "html", null, true);
            echo "\">

        <div id=\"admin-logo\" class=\"";
            // line 5
            echo ((($context["nav_hover"] ?? null)) ? ("nav-hover") : (""));
            echo "\">
            ";
            // line 6
            if ( !($context["nav_hover"] ?? null)) {
                // line 7
                echo "                <div id=\"open-handle\" data-sidebar-toggle><i class=\"fa fa-angle-right\"></i></div>
            ";
            }
            // line 9
            echo "            ";
            $this->loadTemplate("partials/logo.html.twig", "partials/nav.html.twig", 9)->display($context);
            // line 10
            echo "        </div>

        ";
            // line 12
            $this->loadTemplate("partials/nav-user-details.html.twig", "partials/nav.html.twig", 12)->display($context);
            // line 13
            echo "
        ";
            // line 14
            $this->loadTemplate("partials/nav-quick-tray.html.twig", "partials/nav.html.twig", 14)->display($context);
            // line 15
            echo "
        <div data-simplebar class=\"admin-menu-wrapper\">
            <ul id=\"admin-menu\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", []), "plugins_hooked_nav", []));
            foreach ($context['_seq'] as $context["label"] => $context["item"]) {
                // line 19
                echo "                    ";
                $context["route"] = twig_trim_filter(((($this->getAttribute($context["item"], "route", [], "any", true, true) &&  !(null === $this->getAttribute($context["item"], "route", [])))) ? ($this->getAttribute($context["item"], "route", [])) : ($this->getAttribute($context["item"], "location", []))), "/");
                // line 20
                echo "                    ";
                $context["location"] = (twig_trim_filter(((($this->getAttribute($context["item"], "location", [], "any", true, true) &&  !(null === $this->getAttribute($context["item"], "location", [])))) ? ($this->getAttribute($context["item"], "location", [])) : ($this->getAttribute($context["item"], "route", []))), "/") . "/");
                // line 21
                echo "                    ";
                $context["auth_rule"] = ((twig_test_iterable($this->getAttribute($context["item"], "authorize", []))) ? ($this->getAttribute($context["item"], "authorize", [])) : ([0 => (($this->getAttribute($context["item"], "authorize", [])) ? ($this->getAttribute($context["item"], "authorize", [])) : (("admin." . ($context["route"] ?? null)))), 1 => "admin.super"]));
                // line 22
                echo "                    ";
                if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->authorize(($context["auth_rule"] ?? null))) {
                    // line 23
                    echo "                        <li class=\"";
                    echo (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->startsWithFilter(($context["nav_route"] ?? null), ($context["location"] ?? null))) ? ("selected") : (""));
                    echo "\">
                            <a href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(($context["route"] ?? null)), "html", null, true);
                    echo "\">
                                <i class=\"fa fa-fw ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", []), "html", null, true);
                    echo "\"></i>
                                <em>";
                    // line 26
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $context["label"]), "html", null, true);
                    echo "</em>
                                ";
                    // line 27
                    $context["badge"] = ((($this->getAttribute($context["item"], "badge", [], "any", true, true) &&  !(null === $this->getAttribute($context["item"], "badge", [])))) ? ($this->getAttribute($context["item"], "badge", [])) : (null));
                    // line 28
                    echo "                                ";
                    if (($context["badge"] ?? null)) {
                        // line 29
                        echo "                                <span class=\"badges ";
                        if ($this->getAttribute(($context["badge"] ?? null), "updates", [])) {
                            echo "with-updates";
                        }
                        echo "\">
                                    ";
                        // line 30
                        if ($this->getAttribute(($context["badge"] ?? null), "updates", [], "any", true, true)) {
                            echo "<span class=\"badge updates\">";
                            (($this->getAttribute(($context["badge"] ?? null), "updates", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["badge"] ?? null), "updates", []), "html", null, true))) : (print ("")));
                            echo "</span>";
                        }
                        // line 31
                        echo "                                    <span class=\"badge count\">";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["badge"] ?? null), "count", []), "html", null, true);
                        echo "</span>
                                </span>
                                ";
                    }
                    // line 34
                    echo "                            </a>
                        </li>
                    ";
                }
                // line 37
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
                ";
            // line 39
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate("partials/nav-pro.html.twig", "partials/nav.html.twig", 39);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
            // line 40
            echo "
                <li>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((($context["base_url_relative"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "logout"), 1 => "logout-form", 2 => "logout-nonce"], "method"), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-sign-out\"></i><em>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, "PLUGIN_ADMIN.LOGOUT"), "html", null, true);
            echo "</em></a>
                </li>
            </ul>
        </div>
    </nav>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 42,  156 => 40,  146 => 39,  143 => 38,  137 => 37,  132 => 34,  125 => 31,  119 => 30,  112 => 29,  109 => 28,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  90 => 23,  87 => 22,  84 => 21,  81 => 20,  78 => 19,  74 => 18,  69 => 15,  67 => 14,  64 => 13,  62 => 12,  58 => 10,  55 => 9,  51 => 7,  49 => 6,  45 => 5,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set nav_hover = config.plugins.admin.sidebar.activate == 'hover' %}
{% if authorize(['admin.login', 'admin.super']) %}
    <nav id=\"admin-sidebar\" data-quickopen=\"{{ config.plugins.admin.sidebar.activate == 'hover' ? 'true' : 'false' }}\" data-quickopen-delay=\"{{ config.plugins.admin.sidebar.hover_delay }}\">

        <div id=\"admin-logo\" class=\"{{ nav_hover ? 'nav-hover' }}\">
            {% if not nav_hover %}
                <div id=\"open-handle\" data-sidebar-toggle><i class=\"fa fa-angle-right\"></i></div>
            {% endif %}
            {% include 'partials/logo.html.twig' %}
        </div>

        {% include 'partials/nav-user-details.html.twig' %}

        {% include 'partials/nav-quick-tray.html.twig' %}

        <div data-simplebar class=\"admin-menu-wrapper\">
            <ul id=\"admin-menu\">
                {% for label, item in grav.twig.plugins_hooked_nav %}
                    {% set route = (item.route ?? item.location)|trim('/') %}
                    {% set location = (item.location ?? item.route)|trim('/') ~ '/' %}
                    {% set auth_rule = item.authorize is iterable ? item.authorize : [item.authorize ?: 'admin.' ~ route, 'admin.super'] %}
                    {% if authorize(auth_rule) %}
                        <li class=\"{{ nav_route|starts_with(location) ? 'selected' : '' }}\">
                            <a href=\"{{ admin_route(route) }}\">
                                <i class=\"fa fa-fw {{ item.icon }}\"></i>
                                <em>{{ label|t }}</em>
                                {% set badge = item.badge ?? null %}
                                {% if badge %}
                                <span class=\"badges {% if badge.updates %}with-updates{% endif %}\">
                                    {% if badge.updates is defined %}<span class=\"badge updates\">{{ badge.updates ?: '' }}</span>{% endif %}
                                    <span class=\"badge count\">{{ badge.count }}</span>
                                </span>
                                {% endif %}
                            </a>
                        </li>
                    {% endif %}
                {% endfor %}

                {% include 'partials/nav-pro.html.twig' ignore missing %}

                <li>
                    <a href=\"{{ uri.addNonce(base_url_relative ~ '/task' ~ config.system.param_sep ~ 'logout', 'logout-form', 'logout-nonce') }}\"><i class=\"fa fa-fw fa-sign-out\"></i><em>{{ \"PLUGIN_ADMIN.LOGOUT\"|t }}</em></a>
                </li>
            </ul>
        </div>
    </nav>
{% endif %}
", "partials/nav.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\nav.html.twig");
    }
}
