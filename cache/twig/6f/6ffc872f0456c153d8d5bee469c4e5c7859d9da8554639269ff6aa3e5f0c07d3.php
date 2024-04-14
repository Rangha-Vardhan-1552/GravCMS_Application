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

/* partials/dashboard-problems.html.twig */
class __TwigTemplate_4726dc13e6d6c99c06ac5975f226273b2f969aee7c058186c0cc80645a648087 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/dashboard-problems.html.twig"));

        // line 1
        if (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->authorize([0 => "admin.plugins", 1 => "admin.super"]) && (null === $this->getAttribute(($context["grav"] ?? null), "flex_objects", [], "array")))) {
            // line 2
            echo "    <div id=\"dependency-missing\" class=\"dashboard-item-flex\">
        <div class=\"alert warning\">
            <h1>Admin plugin dependency is missing</h1>

            <p>Admin now requires the Flex Objects plugin for managing <em>User Accounts</em> and <em>Flex Pages</em>. For more information, please <a href=\"https://learn.getgrav.org/17/admin-panel/faq#flex-objects\">check the documentation</a>.</p>
            <p><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc("/plugins/flex-objects"), "html", null, true);
            echo "\" class=\"button\"><i class=\"fa fa-download\"></i> Install and enable Flex Objects plugin</a></p>
        </div>
    </div>

";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/dashboard-problems.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if authorize(['admin.plugins', 'admin.super']) and grav['flex_objects'] is null %}
    <div id=\"dependency-missing\" class=\"dashboard-item-flex\">
        <div class=\"alert warning\">
            <h1>Admin plugin dependency is missing</h1>

            <p>Admin now requires the Flex Objects plugin for managing <em>User Accounts</em> and <em>Flex Pages</em>. For more information, please <a href=\"https://learn.getgrav.org/17/admin-panel/faq#flex-objects\">check the documentation</a>.</p>
            <p><a href=\"{{ admin_route('/plugins/flex-objects') }}\" class=\"button\"><i class=\"fa fa-download\"></i> Install and enable Flex Objects plugin</a></p>
        </div>
    </div>

{% endif %}
", "partials/dashboard-problems.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\dashboard-problems.html.twig");
    }
}
