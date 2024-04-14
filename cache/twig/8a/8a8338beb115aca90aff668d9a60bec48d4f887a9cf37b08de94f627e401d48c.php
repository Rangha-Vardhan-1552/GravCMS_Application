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

/* flex-objects/types/default/titlebar/edit.html.twig */
class __TwigTemplate_afdc5e302adf111623158fe9808f6234b23bd0a8c60606309c9915ce14898351 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'titlebar' => [$this, 'block_titlebar'],
            'titlebar_button_bar' => [$this, 'block_titlebar_button_bar'],
            'back_button' => [$this, 'block_back_button'],
            'preview_button' => [$this, 'block_preview_button'],
            'delete_button' => [$this, 'block_delete_button'],
            'extra_buttons' => [$this, 'block_extra_buttons'],
            'save_button' => [$this, 'block_save_button'],
            'titlebar_title' => [$this, 'block_titlebar_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/types/default/titlebar/edit.html.twig"));

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
        // line 33
        echo "
    ";
        // line 34
        $this->displayBlock('titlebar_title', $context, $blocks);
        // line 45
        echo "
";
        
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
        if (($context["can_preview"] ?? null)) {
            // line 11
            echo "        ";
            $this->displayBlock('preview_button', $context, $blocks);
            // line 14
            echo "        ";
        }
        // line 15
        echo "
        ";
        // line 17
        echo "        ";
        if (($context["can_delete"] ?? null)) {
            // line 18
            echo "        ";
            $this->displayBlock('delete_button', $context, $blocks);
            // line 21
            echo "        ";
        }
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('extra_buttons', $context, $blocks);
        // line 24
        echo "
        ";
        // line 26
        echo "        ";
        if ((($context["allowed"] ?? null) && ($context["can_save"] ?? null))) {
            // line 27
            echo "        ";
            $this->displayBlock('save_button', $context, $blocks);
            // line 30
            echo "        ";
        }
        // line 31
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
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/back.html.twig"), 1 => "flex-objects/types/default/buttons/back.html.twig"], "flex-objects/types/default/titlebar/edit.html.twig", 6)->display($context);
        // line 7
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 11
    public function block_preview_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preview_button"));

        // line 12
        echo "            ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/preview.html.twig"), 1 => "flex-objects/types/default/buttons/preview.html.twig"], "flex-objects/types/default/titlebar/edit.html.twig", 12)->display($context);
        // line 13
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 18
    public function block_delete_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_button"));

        // line 19
        echo "            ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/delete.html.twig"), 1 => "flex-objects/types/default/buttons/delete.html.twig"], "flex-objects/types/default/titlebar/edit.html.twig", 19)->display($context);
        // line 20
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 23
    public function block_extra_buttons($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_buttons"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 27
    public function block_save_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "save_button"));

        // line 28
        echo "            ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/save.html.twig"), 1 => "flex-objects/types/default/buttons/save.html.twig"], "flex-objects/types/default/titlebar/edit.html.twig", 28)->display(twig_array_merge($context, ["task" => "save"]));
        // line 29
        echo "        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 34
    public function block_titlebar_title($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titlebar_title"));

        // line 35
        echo "    <h1>
        ";
        // line 36
        if (($context["allowed"] ?? null)) {
            // line 37
            echo "            <i class=\"fa fa-fw ";
            echo twig_escape_filter($this->env, ($context["title_icon"] ?? null), "html", null, true);
            echo "\"></i>
            ";
            // line 38
            (( !$this->getAttribute(($context["object"] ?? null), "exists", [])) ? (print (twig_escape_filter($this->env, (("[" . twig_upper_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.NEW"))) . "]"), "html", null, true))) : (print ("")));
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(($context["title"] ?? null)), "html", null, true);
            echo "
        ";
        } else {
            // line 40
            echo "            <i class=\"fa fa-fw fa-exclamation-triangle\"></i>
            ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
            echo "
        ";
        }
        // line 43
        echo "    </h1>
    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "flex-objects/types/default/titlebar/edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  236 => 43,  231 => 41,  228 => 40,  221 => 38,  216 => 37,  214 => 36,  211 => 35,  205 => 34,  198 => 29,  195 => 28,  189 => 27,  178 => 23,  171 => 20,  168 => 19,  162 => 18,  155 => 13,  152 => 12,  146 => 11,  139 => 7,  136 => 6,  130 => 5,  122 => 31,  119 => 30,  116 => 27,  113 => 26,  110 => 24,  108 => 23,  105 => 22,  102 => 21,  99 => 18,  96 => 17,  93 => 15,  90 => 14,  87 => 11,  84 => 10,  81 => 8,  78 => 5,  75 => 3,  69 => 2,  61 => 45,  59 => 34,  56 => 33,  53 => 2,  41 => 1,);
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

        {# PREVIEW #}
        {% if can_preview %}
        {% block preview_button %}
            {% include ['flex-objects/types/' ~ target ~ '/buttons/preview.html.twig', 'flex-objects/types/default/buttons/preview.html.twig'] %}
        {% endblock preview_button %}
        {% endif %}

        {# DELETE #}
        {% if can_delete %}
        {% block delete_button %}
            {% include ['flex-objects/types/' ~ target ~ '/buttons/delete.html.twig', 'flex-objects/types/default/buttons/delete.html.twig'] %}
        {% endblock delete_button %}
        {% endif %}

        {% block extra_buttons %}{% endblock extra_buttons %}

        {# SAVE #}
        {% if allowed and can_save %}
        {% block save_button %}
            {% include ['flex-objects/types/' ~ target ~ '/buttons/save.html.twig', 'flex-objects/types/default/buttons/save.html.twig'] with {task: 'save'} %}
        {% endblock save_button %}
        {% endif %}
    </div>
    {% endblock titlebar_button_bar %}

    {% block titlebar_title %}
    <h1>
        {% if allowed %}
            <i class=\"fa fa-fw {{ title_icon }}\"></i>
            {{ not object.exists ? '[' ~ 'PLUGIN_FLEX_OBJECTS.NEW'|tu|upper ~ ']' }} {{ title|tu }}
        {% else %}
            <i class=\"fa fa-fw fa-exclamation-triangle\"></i>
            {{ 'PLUGIN_ADMIN.ERROR'|tu }}
        {% endif %}
    </h1>
    {% endblock titlebar_title %}

{% endblock %}
", "flex-objects/types/default/titlebar/edit.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\default\\titlebar\\edit.html.twig");
    }
}
