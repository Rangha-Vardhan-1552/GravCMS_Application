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

/* flex-objects/types/default/titlebar/list.html.twig */
class __TwigTemplate_a5493951212e3730460f3f48aa9091d5eb1efe6b3de7095164b16a752e6249f4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
            'titlebar_button_bar' => [$this, 'block_titlebar_button_bar'],
            'back_button' => [$this, 'block_back_button'],
            'export_button' => [$this, 'block_export_button'],
            'create_button' => [$this, 'block_create_button'],
            'languages_button' => [$this, 'block_languages_button'],
            'configure' => [$this, 'block_configure'],
            'titlebar_title' => [$this, 'block_titlebar_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/types/default/titlebar/list.html.twig"));

        // line 1
        $this->displayBlock('titlebar', $context, $blocks);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_titlebar($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlebar"));

        // line 2
        echo "    ";
        $this->displayBlock('titlebar_button_bar', $context, $blocks);
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('titlebar_title', $context, $blocks);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 2
    public function block_titlebar_button_bar($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlebar_button_bar"));

        // line 3
        echo "    <div class=\"button-bar\">
        ";
        // line 5
        echo "        ";
        $this->displayBlock('back_button', $context, $blocks);
        // line 8
        echo "
        ";
        // line 10
        echo "        ";
        if (($context["can_export"] ?? null)) {
            // line 11
            echo "        ";
            $this->displayBlock('export_button', $context, $blocks);
            // line 14
            echo "        ";
        }
        // line 15
        echo "
        ";
        // line 17
        echo "        ";
        if (($context["can_create"] ?? null)) {
            // line 18
            echo "        ";
            $this->displayBlock('create_button', $context, $blocks);
            // line 21
            echo "        ";
        }
        // line 22
        echo "
        ";
        // line 24
        echo "        ";
        if (($context["can_translate"] ?? null)) {
            // line 25
            echo "        ";
            $this->displayBlock('languages_button', $context, $blocks);
            // line 28
            echo "        ";
        }
        // line 29
        echo "
        ";
        // line 31
        echo "        ";
        $this->displayBlock('configure', $context, $blocks);
        // line 34
        echo "    </div>
    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 5
    public function block_back_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "back_button"));

        // line 6
        echo "            ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/back.html.twig"), 1 => "flex-objects/types/default/buttons/back.html.twig"], "flex-objects/types/default/titlebar/list.html.twig", 6)->display($context);
        // line 7
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 11
    public function block_export_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "export_button"));

        // line 12
        echo "            ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/export.html.twig"), 1 => "flex-objects/types/default/buttons/export.html.twig"], "flex-objects/types/default/titlebar/list.html.twig", 12)->display(twig_array_merge($context, ["export" => ((($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.views.export"], "method", true, true) &&  !(null === $this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.views.export"], "method")))) ? ($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.views.export"], "method")) : (((($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.export"], "method", true, true) &&  !(null === $this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.export"], "method")))) ? ($this->getAttribute(($context["directory"] ?? null), "config", [0 => "admin.export"], "method")) : ([]))))]));
        // line 13
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 18
    public function block_create_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "create_button"));

        // line 19
        echo "            ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/add.html.twig"), 1 => "flex-objects/types/default/buttons/add.html.twig"], "flex-objects/types/default/titlebar/list.html.twig", 19)->display($context);
        // line 20
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 25
    public function block_languages_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "languages_button"));

        // line 26
        echo "            ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/languages.html.twig"), 1 => "flex-objects/types/default/buttons/languages.html.twig"], "flex-objects/types/default/titlebar/list.html.twig", 26)->display($context);
        // line 27
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 31
    public function block_configure($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configure"));

        // line 32
        echo "            ";
        $this->loadTemplate("flex-objects/types/default/buttons/configuration.html.twig", "flex-objects/types/default/titlebar/list.html.twig", 32)->display($context);
        // line 33
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 37
    public function block_titlebar_title($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlebar_title"));

        // line 38
        echo "    <h1>
        ";
        // line 39
        if (($context["allowed"] ?? null)) {
            // line 40
            echo "            <i class=\"fa fa-fw ";
            ((($context["directory"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["title_icon"] ?? null), "html", null, true))) : (print ("fa-exclamation-triangle")));
            echo "\"></i>
            ";
            // line 41
            ((($context["directory"] ?? null)) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["title"] ?? null)), "html", null, true))) : (print ("Error")));
            echo "
        ";
        } else {
            // line 43
            echo "            <i class=\"fa fa-fw fa-exclamation-triangle\"></i>
            ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
            echo "
       ";
        }
        // line 46
        echo "    </h1>
    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/titlebar/list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  237 => 46,  232 => 44,  229 => 43,  224 => 41,  219 => 40,  217 => 39,  214 => 38,  208 => 37,  201 => 33,  198 => 32,  192 => 31,  185 => 27,  182 => 26,  176 => 25,  169 => 20,  166 => 19,  160 => 18,  153 => 13,  150 => 12,  144 => 11,  137 => 7,  134 => 6,  128 => 5,  120 => 34,  117 => 31,  114 => 29,  111 => 28,  108 => 25,  105 => 24,  102 => 22,  99 => 21,  96 => 18,  93 => 17,  90 => 15,  87 => 14,  84 => 11,  81 => 10,  78 => 8,  75 => 5,  72 => 3,  66 => 2,  59 => 37,  56 => 36,  53 => 2,  41 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block titlebar %}
    {% block titlebar_button_bar %}
    <div class=\"button-bar\">
        {# BACK #}
        {% block back_button %}
            {% include ['flex-objects/types/' ~ target ~ '/buttons/back.html.twig', 'flex-objects/types/default/buttons/back.html.twig'] %}
        {% endblock back_button %}

        {# EXPORT #}
        {% if can_export %}
        {% block export_button %}
            {% include ['flex-objects/types/' ~ target ~ '/buttons/export.html.twig', 'flex-objects/types/default/buttons/export.html.twig'] with {export: directory.config('admin.views.export') ?? directory.config('admin.export') ?? []} %}
        {% endblock export_button %}
        {% endif %}

        {# CREATE #}
        {% if can_create %}
        {% block create_button %}
            {% include ['flex-objects/types/' ~ target ~ '/buttons/add.html.twig', 'flex-objects/types/default/buttons/add.html.twig'] %}
        {% endblock create_button %}
        {% endif %}

        {# LANGUAGES #}
        {% if can_translate %}
        {% block languages_button %}
            {% include ['flex-objects/types/' ~ target ~ '/buttons/languages.html.twig', 'flex-objects/types/default/buttons/languages.html.twig'] %}
        {% endblock languages_button %}
        {% endif %}

        {# CONFIGURE #}
        {% block configure %}
            {% include 'flex-objects/types/default/buttons/configuration.html.twig' %}
        {% endblock configure %}
    </div>
    {% endblock titlebar_button_bar %}

    {% block titlebar_title %}
    <h1>
        {% if allowed %}
            <i class=\"fa fa-fw {{ directory ? title_icon : 'fa-exclamation-triangle' }}\"></i>
            {{ directory ? title|tu : 'Error' }}
        {% else %}
            <i class=\"fa fa-fw fa-exclamation-triangle\"></i>
            {{ 'PLUGIN_ADMIN.ERROR'|tu }}
       {% endif %}
    </h1>
    {% endblock titlebar_title %}
{% endblock %}
", "flex-objects/types/default/titlebar/list.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\titlebar\\list.html.twig");
    }
}
