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

/* flex-objects/types/pages/buttons/save.html.twig */
class __TwigTemplate_423c1474ffb68edaa1b55933b48635dfa45b402bef0b0afcbd93cd94c5fd74ce extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/types/pages/buttons/save.html.twig"));

        // line 1
        $context["task"] = (($context["task"]) ?? ("save"));
        // line 2
        echo "<div id=\"titlebar-save\" class=\"button-group\">
    <button class=\"button success\" type=\"submit\" name=\"task\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["task"] ?? null), "html", null, true);
        echo "\" lang=\"";
        echo twig_escape_filter($this->env, ($context["language"] ?? null), "html", null, true);
        echo "\" form=\"blueprints\">
        <i class=\"fa fa-check\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
        echo "
    </button>
    ";
        // line 6
        if (($context["can_translate"] ?? null)) {
            // line 7
            echo "        ";
            $context["untranslated"] = array_diff(($context["admin_languages"] ?? null), ($context["object_languages"] ?? null));
            // line 8
            echo "        ";
            if (count(($context["untranslated"] ?? null))) {
                // line 9
                echo "            <button id=\"titlebar-button-save\" type=\"button\" class=\"button success dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"fa fa-caret-down\"></i>
            </button>
            <ul class=\"dropdown-menu lang-switcher\">
                ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["untranslated"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang_code"]) {
                    // line 14
                    echo "                    <li>
                        <button class=\"button success task\" type=\"submit\" name=\"task\" value=\"saveas\" lang=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $context["lang_code"], "html", null, true);
                    echo "\" form=\"blueprints\">
                            ";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ((($this->getAttribute(($context["all_languages"] ?? null), $context["lang_code"], [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), $context["lang_code"], [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), $context["lang_code"], [], "array")) : ($context["lang_code"])), "html", null, true);
                    echo "
                        </button>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang_code'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "            </ul>
        ";
            }
            // line 22
            echo "    ";
        }
        // line 23
        echo "</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/buttons/save.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  90 => 22,  86 => 20,  74 => 16,  70 => 15,  67 => 14,  63 => 13,  57 => 9,  54 => 8,  51 => 7,  49 => 6,  44 => 4,  38 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set task = task ?? 'save' %}
<div id=\"titlebar-save\" class=\"button-group\">
    <button class=\"button success\" type=\"submit\" name=\"task\" value=\"{{ task }}\" lang=\"{{ language }}\" form=\"blueprints\">
        <i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}
    </button>
    {% if can_translate %}
        {% set untranslated = admin_languages|array_diff(object_languages) %}
        {% if count(untranslated) %}
            <button id=\"titlebar-button-save\" type=\"button\" class=\"button success dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"fa fa-caret-down\"></i>
            </button>
            <ul class=\"dropdown-menu lang-switcher\">
                {% for lang_code in untranslated %}
                    <li>
                        <button class=\"button success task\" type=\"submit\" name=\"task\" value=\"saveas\" lang=\"{{ lang_code }}\" form=\"blueprints\">
                            {{ \"PLUGIN_ADMIN.SAVE_AS\"|tu }} {{ all_languages[lang_code] ?? lang_code }}
                        </button>
                    </li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endif %}
</div>
", "flex-objects/types/pages/buttons/save.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\buttons\\save.html.twig");
    }
}
