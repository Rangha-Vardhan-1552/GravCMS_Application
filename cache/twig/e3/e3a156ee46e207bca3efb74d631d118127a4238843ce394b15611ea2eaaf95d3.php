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

/* partials/blueprints.html.twig */
class __TwigTemplate_119ebdddabfb82e60ff839fd6d14e774145b837fe74c11b7eacbeae388b43f26 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/blueprints.html.twig"));

        // line 1
        $context["blueprints"] = (($context["blueprints"]) ?? ($this->getAttribute(($context["form"] ?? null), "blueprint", [])));
        // line 2
        $context["data"] = (($context["data"]) ?? ($this->getAttribute(($context["form"] ?? null), "data", [])));
        // line 3
        $context["form_id"] = (($context["form_id"]) ?? ("blueprints"));
        // line 4
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 5
        $context["field_layout"] = "admin";
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute(($context["admin"] ?? null), "findFormFields", [0 => "file", 1 => $this->getAttribute(($context["blueprints"] ?? null), "fields", [])], "method")) {
            // line 8
            echo "    ";
            $context["multipart"] = " enctype=\"multipart/form-data\"";
        }
        // line 10
        echo "
<form ";
        // line 11
        if (($context["form_action"] ?? null)) {
            echo "action=\"";
            echo twig_escape_filter($this->env, ($context["form_action"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " id=\"";
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" method=\"post\" data-grav-form=\"";
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" ";
        if ($this->getAttribute(($context["form"] ?? null), "novalidate", [])) {
            echo "novalidate";
        }
        echo " data-grav-keepalive=\"true\"";
        echo ($context["multipart"] ?? null);
        echo ">
    ";
        // line 12
        $this->loadTemplate("partials/blueprints.html.twig", "partials/blueprints.html.twig", 12, "1912797718")->display(twig_array_merge($context, ["name" => null, "fields" => $this->getAttribute(($context["blueprints"] ?? null), "fields", [])]));
        // line 16
        echo "
    ";
        // line 17
        if ($this->getAttribute(($context["data"] ?? null), "extra", [])) {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "extra", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 19
                echo "        ";
                if (!twig_in_filter($context["name"], [0 => "_json", 1 => "task", 2 => "admin-nonce"])) {
                    // line 20
                    echo "            ";
                    $context["field"] = ["name" => ("_json." . $context["name"])];
                    // line 21
                    echo "            ";
                    $context["value"] = twig_jsonencode_filter($context["value"]);
                    // line 22
                    echo "            ";
                    $this->loadTemplate("forms/fields/hidden/hidden.html.twig", "partials/blueprints.html.twig", 22)->display($context);
                    // line 23
                    echo "        ";
                }
                // line 24
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if (($context["form"] ?? null)) {
            // line 28
            echo "        ";
            $this->loadTemplate("forms/fields/formname/formname.html.twig", "partials/blueprints.html.twig", 28)->display($context);
            // line 29
            echo "        ";
            $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "partials/blueprints.html.twig", 29)->display($context);
            // line 30
            echo "        ";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc($this->getAttribute(($context["form"] ?? null), "getNonceAction", [], "method"), $this->getAttribute(($context["form"] ?? null), "getNonceName", [], "method"));
            echo "
    ";
        } else {
            // line 32
            echo "        ";
            echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->nonceFieldFunc("admin-form", "admin-nonce");
            echo "
    ";
        }
        // line 34
        echo "</form>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/blueprints.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 34,  147 => 32,  141 => 30,  138 => 29,  135 => 28,  133 => 27,  130 => 26,  127 => 25,  113 => 24,  110 => 23,  107 => 22,  104 => 21,  101 => 20,  98 => 19,  80 => 18,  78 => 17,  75 => 16,  73 => 12,  55 => 11,  52 => 10,  48 => 8,  46 => 7,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set blueprints = blueprints ?? form.blueprint %}
{% set data = data ?? form.data %}
{% set form_id = form_id ?? 'blueprints' %}
{% set scope = scope ?: 'data.' %}
{% set field_layout = 'admin' %}

{% if admin.findFormFields('file', blueprints.fields) %}
    {% set multipart = ' enctype=\"multipart/form-data\"' %}
{% endif %}

<form {% if form_action %}action=\"{{ form_action }}\"{% endif %} id=\"{{ form_id }}\" method=\"post\" data-grav-form=\"{{ form_id }}\" {% if form.novalidate %}novalidate{% endif %} data-grav-keepalive=\"true\"{{ multipart|raw }}>
    {% embed 'forms/default/fields.html.twig' with {name: null, fields: blueprints.fields} %}
        {% block inner_markup_field_open %}<div class=\"block block-{{ field.type }}\">{% endblock %}
        {% block inner_markup_field_close %}</div>{% endblock %}
    {% endembed %}

    {% if data.extra %}
    {% for name, value in data.extra %}
        {% if name not in ['_json','task','admin-nonce'] %}
            {% set field = {name: '_json.' ~ name} %}
            {% set value = value|json_encode %}
            {% include 'forms/fields/hidden/hidden.html.twig' %}
        {% endif %}
    {% endfor %}
    {% endif %}

    {% if form %}
        {% include \"forms/fields/formname/formname.html.twig\" %}
        {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
        {{ nonce_field(form.getNonceAction(), form.getNonceName())|raw }}
    {% else %}
        {{ nonce_field('admin-form', 'admin-nonce')|raw }}
    {% endif %}
</form>
", "partials/blueprints.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\blueprints.html.twig");
    }
}


/* partials/blueprints.html.twig */
class __TwigTemplate_119ebdddabfb82e60ff839fd6d14e774145b837fe74c11b7eacbeae388b43f26___1912797718 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'inner_markup_field_open' => [$this, 'block_inner_markup_field_open'],
            'inner_markup_field_close' => [$this, 'block_inner_markup_field_close'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "forms/default/fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/blueprints.html.twig"));

        $this->parent = $this->loadTemplate("forms/default/fields.html.twig", "partials/blueprints.html.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 13
    public function block_inner_markup_field_open($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inner_markup_field_open"));

        echo "<div class=\"block block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", []), "html", null, true);
        echo "\">";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 14
    public function block_inner_markup_field_close($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inner_markup_field_close"));

        echo "</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/blueprints.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 14,  256 => 13,  240 => 12,  153 => 34,  147 => 32,  141 => 30,  138 => 29,  135 => 28,  133 => 27,  130 => 26,  127 => 25,  113 => 24,  110 => 23,  107 => 22,  104 => 21,  101 => 20,  98 => 19,  80 => 18,  78 => 17,  75 => 16,  73 => 12,  55 => 11,  52 => 10,  48 => 8,  46 => 7,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set blueprints = blueprints ?? form.blueprint %}
{% set data = data ?? form.data %}
{% set form_id = form_id ?? 'blueprints' %}
{% set scope = scope ?: 'data.' %}
{% set field_layout = 'admin' %}

{% if admin.findFormFields('file', blueprints.fields) %}
    {% set multipart = ' enctype=\"multipart/form-data\"' %}
{% endif %}

<form {% if form_action %}action=\"{{ form_action }}\"{% endif %} id=\"{{ form_id }}\" method=\"post\" data-grav-form=\"{{ form_id }}\" {% if form.novalidate %}novalidate{% endif %} data-grav-keepalive=\"true\"{{ multipart|raw }}>
    {% embed 'forms/default/fields.html.twig' with {name: null, fields: blueprints.fields} %}
        {% block inner_markup_field_open %}<div class=\"block block-{{ field.type }}\">{% endblock %}
        {% block inner_markup_field_close %}</div>{% endblock %}
    {% endembed %}

    {% if data.extra %}
    {% for name, value in data.extra %}
        {% if name not in ['_json','task','admin-nonce'] %}
            {% set field = {name: '_json.' ~ name} %}
            {% set value = value|json_encode %}
            {% include 'forms/fields/hidden/hidden.html.twig' %}
        {% endif %}
    {% endfor %}
    {% endif %}

    {% if form %}
        {% include \"forms/fields/formname/formname.html.twig\" %}
        {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
        {{ nonce_field(form.getNonceAction(), form.getNonceName())|raw }}
    {% else %}
        {{ nonce_field('admin-form', 'admin-nonce')|raw }}
    {% endif %}
</form>
", "partials/blueprints.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\blueprints.html.twig");
    }
}
