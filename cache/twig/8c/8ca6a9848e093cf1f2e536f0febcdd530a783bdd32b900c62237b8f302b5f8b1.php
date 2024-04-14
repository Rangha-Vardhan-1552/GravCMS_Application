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

/* flex-objects/types/pages/edit.html.twig */
class __TwigTemplate_cb4e3ab1576acedb71e7ca6686290afebbdc2e3919f71ec09c40112af2f1b21c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'back_button' => [$this, 'block_back_button'],
            'preview_button' => [$this, 'block_preview_button'],
            'delete_button' => [$this, 'block_delete_button'],
            'extra_buttons' => [$this, 'block_extra_buttons'],
            'save_button' => [$this, 'block_save_button'],
            'content_top' => [$this, 'block_content_top'],
            'topbar' => [$this, 'block_topbar'],
            'edit' => [$this, 'block_edit'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "flex-objects/types/default/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "flex-objects/types/pages/edit.html.twig"));

        // line 4
        $context["expert"] = ($this->getAttribute(($context["user"] ?? null), "authorize", [0 => "admin.super"], "method") && ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) != "0"));
        // line 5
        if ((($context["expert"] ?? null) ||  !array_key_exists("form", $context))) {
            // line 6
            $context["form"] = $this->getAttribute(($context["object"] ?? null), "form", [0 => ((($context["expert"] ?? null)) ? ("raw") : (""))], "method");
            // line 7
            $context["object"] = $this->getAttribute(($context["form"] ?? null), "object", []);
        }
        // line 10
        $context["title"] = (($context["title"]) ?? (((($this->getAttribute(($context["form"] ?? null), "getValue", [0 => "header.title"], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getValue", [0 => "header.title"], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getValue", [0 => "header.title"], "method")) : (((($this->getAttribute(($context["object"] ?? null), "title", [], "any", true, true) &&  !(null === $this->getAttribute(($context["object"] ?? null), "title", [])))) ? ($this->getAttribute(($context["object"] ?? null), "title", [])) : (($context["key"] ?? null)))))));
        // line 11
        $context["parent"] = $this->getAttribute(($context["object"] ?? null), "parent", []);
        // line 12
        $context["can_read"] = (($context["can_read"]) ?? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->boolFilter((($this->getAttribute(($context["object"] ?? null), "exists", [])) ? ($this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "read", 1 => "admin", 2 => ($context["user"] ?? null)], "method")) : ($this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method"))))));
        // line 13
        $context["can_copy"] = (($context["can_copy"]) ?? (($this->getAttribute(($context["parent"] ?? null), "exists", []) && $this->getAttribute(($context["parent"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method"))));
        // line 14
        $context["can_create"] = (($context["can_create"]) ?? (($this->getAttribute(($context["object"] ?? null), "exists", []) && $this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method"))));
        // line 15
        $context["can_save"] = (($context["can_save"]) ?? ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->boolFilter((($this->getAttribute(($context["object"] ?? null), "exists", [])) ? ($this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "update", 1 => "admin", 2 => ($context["user"] ?? null)], "method")) : ($this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method"))))));
        // line 16
        $context["can_move"] = ((($context["can_move"]) ?? (($context["can_save"] ?? null))) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "blueprint", []), "schema", []), "property", [0 => "route"], "method"), "type", []) === "parents"));
        // line 17
        $context["can_translate"] = (($context["can_translate"]) ?? ((($this->getAttribute(($context["admin"] ?? null), "multilang", []) && $this->getAttribute(($context["object"] ?? null), "hasFlexFeature", [0 => "page-translate"], "method")) &&  !$this->getAttribute(($context["object"] ?? null), "root", [], "method"))));
        // line 22
        $context["macro"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("flex-objects/types/default/edit.html.twig", "flex-objects/types/pages/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "    ";
        $context["current_route"] = ("/" . $this->getAttribute(($context["route"] ?? null), "getRoute", [0 => 1], "method"));
        // line 26
        echo "
    ";
        // line 27
        if ( !$this->getAttribute(($context["object"] ?? null), "root", [], "method")) {
            // line 28
            echo "    ";
            $context["child"] = $this->getAttribute($this->getAttribute(($context["object"] ?? null), "children", []), "first", []);
            // line 29
            echo "    ";
            $context["prev"] = $this->getAttribute(($context["object"] ?? null), "prevSibling", []);
            // line 30
            echo "    ";
            $context["next"] = $this->getAttribute(($context["object"] ?? null), "nextSibling", []);
            // line 31
            echo "
    ";
            // line 32
            $context["parent_url"] = (((($context["parent"] ?? null) &&  !$this->getAttribute(($context["parent"] ?? null), "root", []))) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(($context["back_route"] ?? null))) : (""));
            // line 33
            echo "    ";
            $context["child_url"] = (((($context["can_read"] ?? null) && ($context["child"] ?? null))) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(((($context["current_route"] ?? null) . "/") . $this->getAttribute(($context["child"] ?? null), "slug", [])))) : (""));
            // line 34
            echo "    ";
            $context["prev_url"] = (((($context["can_read"] ?? null) && ($context["prev"] ?? null))) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(((($context["back_route"] ?? null) . "/") . $this->getAttribute(($context["prev"] ?? null), "slug", [])))) : (""));
            // line 35
            echo "    ";
            $context["next_url"] = (((($context["can_read"] ?? null) && ($context["next"] ?? null))) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(((($context["back_route"] ?? null) . "/") . $this->getAttribute(($context["next"] ?? null), "slug", [])))) : (""));
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        $context["back_url"] = (($context["back_url"]) ?? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc($this->getAttribute(($context["flex"] ?? null), "adminRoute", [0 => $this->getAttribute(($context["directory"] ?? null), "getFlexType", [], "method")], "method"))));
        // line 38
        echo "
    ";
        // line 39
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 42
    public function block_back_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "back_button"));

        // line 43
        echo "    ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/back.html.twig"), 1 => "flex-objects/types/pages/buttons/back.html.twig"], "flex-objects/types/pages/edit.html.twig", 43)->display(twig_array_merge($context, ["back_url" =>         // line 44
($context["back_url"] ?? null)]));
        // line 45
        echo "    ";
        if ( !$this->getAttribute(($context["object"] ?? null), "root", [], "method")) {
            // line 46
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-prev.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-prev.html.twig"], "flex-objects/types/pages/edit.html.twig", 46)->display(twig_array_merge($context, ["prev_url" =>             // line 47
($context["prev_url"] ?? null), "title" => $this->getAttribute(($context["prev"] ?? null), "route", [])]));
            // line 48
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-parent.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-parent.html.twig"], "flex-objects/types/pages/edit.html.twig", 48)->display(twig_array_merge($context, ["parent_url" =>             // line 49
($context["parent_url"] ?? null), "title" => $this->getAttribute(($context["parent"] ?? null), "route", [])]));
            // line 50
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-child.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-child.html.twig"], "flex-objects/types/pages/edit.html.twig", 50)->display(twig_array_merge($context, ["child_url" =>             // line 51
($context["child_url"] ?? null), "title" => $this->getAttribute(($context["child"] ?? null), "route", [])]));
            // line 52
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-next.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-next.html.twig"], "flex-objects/types/pages/edit.html.twig", 52)->display(twig_array_merge($context, ["next_url" =>             // line 53
($context["next_url"] ?? null), "title" => $this->getAttribute(($context["next"] ?? null), "route", [])]));
            // line 54
            echo "    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 57
    public function block_preview_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "preview_button"));

        // line 58
        echo "    ";
        if (($this->getAttribute(($context["object"] ?? null), "exists", []) &&  !$this->getAttribute(($context["object"] ?? null), "root", [], "method"))) {
            // line 59
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/preview.html.twig"), 1 => "flex-objects/types/pages/buttons/preview.html.twig"], "flex-objects/types/pages/edit.html.twig", 59)->display($context);
            // line 60
            echo "    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 63
    public function block_delete_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_button"));

        // line 64
        echo "    ";
        // line 65
        echo "    ";
        if ( !$this->getAttribute(($context["object"] ?? null), "root", [], "method")) {
            // line 66
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/delete.html.twig"), 1 => "flex-objects/types/pages/buttons/delete.html.twig"], "flex-objects/types/pages/edit.html.twig", 66)->display($context);
            // line 67
            echo "    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 70
    public function block_extra_buttons($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_buttons"));

        // line 71
        echo "    ";
        if (($this->getAttribute(($context["object"] ?? null), "exists", []) &&  !$this->getAttribute(($context["object"] ?? null), "root", [], "method"))) {
            // line 72
            echo "    ";
            if (($context["can_create"] ?? null)) {
                // line 73
                echo "    ";
                $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/add.html.twig"), 1 => "flex-objects/types/pages/buttons/add.html.twig"], "flex-objects/types/pages/edit.html.twig", 73)->display($context);
                // line 74
                echo "    ";
            }
            // line 75
            echo "    ";
            if (($context["can_copy"] ?? null)) {
                // line 76
                echo "    ";
                $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/copy.html.twig"), 1 => "flex-objects/types/pages/buttons/copy.html.twig"], "flex-objects/types/pages/edit.html.twig", 76)->display($context);
                // line 77
                echo "    ";
            }
            // line 78
            echo "    ";
            if (($context["can_move"] ?? null)) {
                // line 79
                echo "    ";
                $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/move.html.twig"), 1 => "flex-objects/types/pages/buttons/move.html.twig"], "flex-objects/types/pages/edit.html.twig", 79)->display($context);
                // line 80
                echo "    ";
            }
            // line 81
            echo "    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 84
    public function block_save_button($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "save_button"));

        // line 85
        echo "    ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/save.html.twig"), 1 => "flex-objects/types/pages/buttons/save.html.twig"], "flex-objects/types/pages/edit.html.twig", 85)->display($context);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 88
    public function block_content_top($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_top"));

        // line 89
        echo "    ";
        if ((($context["allowed"] ?? null) && $this->getAttribute(($context["user"] ?? null), "authorize", [0 => "admin.super"], "method"))) {
            // line 90
            echo "    <div class=\"alert notice\">
        ";
            // line 91
            $context["save_location"] = (($this->getAttribute(($context["object"] ?? null), "getStorageFolder", [], "method")) ? ($this->getAttribute(($context["object"] ?? null), "getStorageFolder", [], "method")) : ($this->getAttribute(($context["directory"] ?? null), "getStorageFolder", [], "method")));
            // line 92
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
            echo ": <b>";
            echo twig_escape_filter($this->env, twig_trim_filter($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(($context["save_location"] ?? null), false, true), "/"), "html", null, true);
            echo " ";
            (( !$this->getAttribute(($context["object"] ?? null), "exists", [])) ? (print (twig_escape_filter($this->env, (("[" . twig_upper_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.NEW"))) . "]"), "html", null, true))) : (print ("")));
            echo "</b> (type: <b>";
            (($this->getAttribute(($context["form"] ?? null), "getValue", [0 => "name"], "method")) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "getValue", [0 => "name"], "method"), "html", null, true))) : (print ("default")));
            echo "</b>)
    </div>
    ";
        }
        // line 95
        echo "    ";
        if (($this->getAttribute(($context["object"] ?? null), "exists", []) && $this->getAttribute($this->getAttribute(($context["form"] ?? null), "flash", []), "exists", []))) {
            // line 96
            echo "        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> ";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.EDITING_DRAFT"), "html", null, true);
            echo " <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.RESET"), "html", null, true);
            echo "</button>
        </div>
    ";
        }
        // line 100
        echo "    ";
        if ( !$this->getAttribute(($context["object"] ?? null), "exists", [])) {
            // line 101
            echo "        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> ";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.NOT_CREATED_YET"), "html", null, true);
            echo "
        </div>
    ";
        } elseif (        // line 104
($context["can_translate"] ?? null)) {
            // line 105
            echo "        ";
            $context["is_default"] = (($context["language"] ?? null) === ($context["default_language"] ?? null));
            // line 106
            echo "        ";
            if ((($context["is_default"] ?? null) && twig_in_filter(($context["default_language"] ?? null), ($context["object_languages"] ?? null)))) {
                // line 107
                echo "            ";
                if (( !($context["translate_include_default"] ?? null) && $this->getAttribute(($context["object"] ?? null), "property", [0 => "lang"], "method"))) {
                    // line 108
                    echo "            ";
                    // line 109
                    echo "            <div class=\"alert secondary-accent\">
                ";
                    // line 110
                    $context["overrideLanguage"] = ((($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")) : (($context["object_language"] ?? null)));
                    // line 111
                    echo "                ";
                    echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.USING_OVERRIDE", ($context["overrideLanguage"] ?? null), null);
                    echo "
                ";
                    // line 112
                    echo (($this->getAttribute(($context["object"] ?? null), "hasTranslation", [0 => "", 1 => false], "method")) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.UNUSED_DEFAULT")) : (""));
                    echo "
            </div>
            ";
                } elseif (                // line 114
($context["translate_include_default"] ?? null)) {
                    // line 115
                    echo "                ";
                    if ( !$this->getAttribute(($context["object"] ?? null), "property", [0 => "lang"], "method")) {
                        // line 116
                        echo "                    <div class=\"alert secondary-accent\">
                        ";
                        // line 117
                        echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.USING_DEFAULT");
                        echo "
                    </div>
                ";
                    } elseif ($this->getAttribute(                    // line 119
($context["object"] ?? null), "hasTranslation", [0 => "", 1 => false], "method")) {
                        // line 120
                        echo "                    <div class=\"alert secondary-accent\">
                        ";
                        // line 121
                        echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.UNUSED_DEFAULT");
                        echo "
                    </div>
                ";
                    }
                    // line 124
                    echo "            ";
                }
                // line 125
                echo "        ";
            } elseif ( !($context["has_translation"] ?? null)) {
                // line 126
                echo "        <div class=\"alert warning\">
            ";
                // line 127
                $context["overrideLanguage"] = ((($this->getAttribute(($context["all_languages"] ?? null), ($context["language"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), ($context["language"] ?? null), [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), ($context["language"] ?? null), [], "array")) : (($context["object_language"] ?? null)));
                // line 128
                echo "            ";
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.NOT_TRANSLATED_YET", ($context["overrideLanguage"] ?? null), null);
                echo "
            ";
                // line 129
                if ((($context["language"] ?? null) == ($context["object_language"] ?? null))) {
                    // line 130
                    echo "                ";
                    echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.NO_FALLBACK_FOUND");
                    echo "
            ";
                } else {
                    // line 132
                    echo "                ";
                    $context["overrideLanguage"] = ((($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")) : (($context["object_language"] ?? null)));
                    // line 133
                    echo "                ";
                    echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.LANGUAGE.FALLING_BACK", ($context["overrideLanguage"] ?? null), null);
                    echo "
            ";
                }
                // line 135
                echo "        </div>
        ";
            }
            // line 137
            echo "    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 140
    public function block_topbar($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "topbar"));

        // line 141
        echo "    ";
        if (($context["can_translate"] ?? null)) {
            // line 142
            echo "        <div id=\"admin-lang-toggle\" class=\"button-group\">
            <button type=\"button\" class=\"button disabled\">
                <i class=\"fa fa-flag-o\"></i>
                ";
            // line 145
            echo twig_escape_filter($this->env, ((($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")) : (($context["object_language"] ?? null))), "html", null, true);
            echo "
            </button>
            ";
            // line 147
            if ((count(($context["object_languages"] ?? null)) > $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->intFilter(twig_in_filter(($context["object_language"] ?? null), ($context["object_languages"] ?? null))))) {
                // line 148
                echo "                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu language-switcher\">
                ";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["object_languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang_code"]) {
                    // line 153
                    echo "                    ";
                    if (($context["lang_code"] != ($context["object_language"] ?? null))) {
                        // line 154
                        echo "                    <li>
                        <a href=\"";
                        // line 155
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc($this->getAttribute(($context["route"] ?? null), "getRoute", [0 => 1], "method"), $context["lang_code"]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["all_languages"] ?? null), $context["lang_code"], [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), $context["lang_code"], [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), $context["lang_code"], [], "array")) : ($context["lang_code"])), "html", null, true);
                        echo "</a>
                    </li>
                    ";
                    }
                    // line 158
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang_code'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "                </ul>
            ";
            }
            // line 161
            echo "        </div>
    ";
        }
        // line 163
        echo "
    ";
        // line 164
        if ($this->getAttribute(($context["user"] ?? null), "authorize", [0 => "admin.super"], "method")) {
            // line 165
            echo "    <form id=\"admin-mode-toggle\">
        ";
            // line 166
            $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
            // line 167
            echo "        ";
            $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
            // line 168
            echo "        ";
            $context["maxLen"] = max([0 => twig_length_filter($this->env, ($context["normalText"] ?? null)), 1 => twig_length_filter($this->env, ($context["expertText"] ?? null))]);
            // line 169
            echo "        ";
            $context["normalText"] = $context["macro"]->getspanToggle(($context["normalText"] ?? null), ($context["maxLen"] ?? null));
            // line 170
            echo "        ";
            $context["expertText"] = $context["macro"]->getspanToggle(($context["expertText"] ?? null), ($context["maxLen"] ?? null));
            // line 171
            echo "
        <div class=\"switch-toggle switch-grav\">
            <input type=\"radio\" value=\"normal\" data-leave-url=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "withGravParam", [0 => "mode", 1 => "normal"], "method"), "toString", [0 => true], "method"), "html", null, true);
            echo "\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
            if ((($context["expert"] ?? null) == "0")) {
                echo " checked=\"checked\"";
            }
            echo ">
            <label for=\"normal\">";
            // line 174
            echo twig_escape_filter($this->env, ($context["normalText"] ?? null), "html", null, true);
            echo "</label>
            <input type=\"radio\" value=\"expert\" data-leave-url=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "withGravParam", [0 => "mode", 1 => "expert"], "method"), "toString", [0 => true], "method"), "html", null, true);
            echo "\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
            if ((($context["expert"] ?? null) == "1")) {
                echo " checked=\"checked\"";
            }
            echo ">
            <label for=\"expert\">";
            // line 176
            echo twig_escape_filter($this->env, ($context["expertText"] ?? null), "html", null, true);
            echo "</label>
            <a></a>
        </div>
    </form>
    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 183
    public function block_edit($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "edit"));

        // line 184
        echo "    ";
        $this->loadTemplate("partials/blueprints.html.twig", "flex-objects/types/pages/edit.html.twig", 184)->display(twig_array_merge($context, ["context" => ($context["object"] ?? null), "data" => ($context["object"] ?? null), "blueprints" => $this->getAttribute(($context["form"] ?? null), "blueprint", [])]));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 187
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 188
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    ";
        // line 190
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "flex-objects/types/pages/edit.html.twig", 190)->display($context);
        // line 191
        echo "
    ";
        // line 192
        if ($this->getAttribute(($context["object"] ?? null), "exists", [])) {
            // line 193
            echo "        ";
            $context["modal_data"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->dataFunc(["route" => ("/" . $this->getAttribute(            // line 194
($context["object"] ?? null), "key", [])), "name" => ((($this->getAttribute($this->getAttribute(            // line 195
($context["object"] ?? null), "header", [], "any", false, true), "child_type", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["object"] ?? null), "header", [], "any", false, true), "child_type", [])))) ? ($this->getAttribute($this->getAttribute(($context["object"] ?? null), "header", [], "any", false, true), "child_type", [])) : (((($this->getAttribute($this->getAttribute(($context["object"] ?? null), "blueprint", [], "any", false, true), "child_type", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["object"] ?? null), "blueprint", [], "any", false, true), "child_type", [])))) ? ($this->getAttribute($this->getAttribute(($context["object"] ?? null), "blueprint", [], "any", false, true), "child_type", [])) : ("default"))))]);
            // line 197
            echo "
        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            ";
            // line 199
            $this->loadTemplate("partials/blueprints-new.html.twig", "flex-objects/types/pages/edit.html.twig", 199)->display(twig_array_merge($context, ["form" => null, "blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new"], "method"), "data" => ($context["modal_data"] ?? null), "form_id" => "new-page"]));
            // line 200
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 203
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "flex-objects/types/pages/edit.html.twig", 203)->display(twig_array_merge($context, ["form" => null, "blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new_folder"], "method"), "data" => ($context["modal_data"] ?? null), "form_id" => "new-folder"]));
            // line 204
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"module\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            ";
            // line 207
            $this->loadTemplate("partials/blueprints-new.html.twig", "flex-objects/types/pages/edit.html.twig", 207)->display(twig_array_merge($context, ["form" => null, "blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/modular_new"], "method"), "data" => ($context["modal_data"] ?? null), "form_id" => "new-module"]));
            // line 208
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-page-copy\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            ";
            // line 211
            $this->loadTemplate("partials/blueprints-copy.html.twig", "flex-objects/types/pages/edit.html.twig", 211)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/copy"], "method"), "data" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->dataFunc(["title" => ($this->getAttribute(($context["object"] ?? null), "title", []) . " (Copy)"), "folder" => ($this->getAttribute(($context["object"] ?? null), "slug", []) . "-copy")]), "form_id" => "copy"]));
            // line 212
            echo "        </div>
    ";
        }
        // line 214
        echo "
    ";
        // line 216
        echo "
    <div class=\"remodal parents-container\" data-remodal-id=\"parents\" data-remodal-options=\"hashTracking: false, stack: true\">
        <form>
            <h1>";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.PARENTS"), "html", null, true);
        echo "</h1>
            <div class=\"grav-loading\"><div class=\"grav-loader\">";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_FLEX_OBJECTS.STATE.LOADING"), "html", null, true);
        echo "</div></div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</a>
                <a class=\"button\" data-parents-select href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 231
    public function block_bottom($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        // line 232
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 19
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "spanToggle"));

            // line 20
            echo "    ";
            echo (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)) . ($context["input"] ?? null)) . $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)));
            echo "
";
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "flex-objects/types/pages/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 20,  665 => 19,  652 => 232,  646 => 231,  633 => 224,  629 => 223,  623 => 220,  619 => 219,  614 => 216,  611 => 214,  607 => 212,  605 => 211,  600 => 208,  598 => 207,  593 => 204,  591 => 203,  586 => 200,  584 => 199,  580 => 197,  578 => 195,  577 => 194,  575 => 193,  573 => 192,  570 => 191,  568 => 190,  562 => 188,  556 => 187,  548 => 184,  542 => 183,  529 => 176,  521 => 175,  517 => 174,  509 => 173,  505 => 171,  502 => 170,  499 => 169,  496 => 168,  493 => 167,  491 => 166,  488 => 165,  486 => 164,  483 => 163,  479 => 161,  475 => 159,  469 => 158,  461 => 155,  458 => 154,  455 => 153,  451 => 152,  445 => 148,  443 => 147,  438 => 145,  433 => 142,  430 => 141,  424 => 140,  416 => 137,  412 => 135,  406 => 133,  403 => 132,  397 => 130,  395 => 129,  390 => 128,  388 => 127,  385 => 126,  382 => 125,  379 => 124,  373 => 121,  370 => 120,  368 => 119,  363 => 117,  360 => 116,  357 => 115,  355 => 114,  350 => 112,  345 => 111,  343 => 110,  340 => 109,  338 => 108,  335 => 107,  332 => 106,  329 => 105,  327 => 104,  322 => 102,  319 => 101,  316 => 100,  308 => 97,  305 => 96,  302 => 95,  289 => 92,  287 => 91,  284 => 90,  281 => 89,  275 => 88,  267 => 85,  261 => 84,  253 => 81,  250 => 80,  247 => 79,  244 => 78,  241 => 77,  238 => 76,  235 => 75,  232 => 74,  229 => 73,  226 => 72,  223 => 71,  217 => 70,  209 => 67,  206 => 66,  203 => 65,  201 => 64,  195 => 63,  187 => 60,  184 => 59,  181 => 58,  175 => 57,  167 => 54,  165 => 53,  163 => 52,  161 => 51,  159 => 50,  157 => 49,  155 => 48,  153 => 47,  151 => 46,  148 => 45,  146 => 44,  144 => 43,  138 => 42,  129 => 39,  126 => 38,  123 => 37,  120 => 36,  117 => 35,  114 => 34,  111 => 33,  109 => 32,  106 => 31,  103 => 30,  100 => 29,  97 => 28,  95 => 27,  92 => 26,  89 => 25,  83 => 24,  75 => 1,  73 => 22,  71 => 17,  69 => 16,  67 => 15,  65 => 14,  63 => 13,  61 => 12,  59 => 11,  57 => 10,  54 => 7,  52 => 6,  50 => 5,  48 => 4,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'flex-objects/types/default/edit.html.twig' %}

{# Avoid defining form and object twice: object should always come from the form! #}
{% set expert = user.authorize('admin.super') and admin.session.expert != '0' %}
{% if expert or form is not defined %}
    {% set form = object.form(expert ? 'raw' : '') %}
    {% set object = form.object %}
{% endif %}

{% set title = title ?? form.getValue('header.title') ?? object.title ?? key %}
{% set parent = object.parent %}
{% set can_read = can_read ?? (object.exists ? object.isAuthorized('read', 'admin', user) : object.isAuthorized('create', 'admin', user))|bool %}
{% set can_copy = can_copy ?? (parent.exists and parent.isAuthorized('create', 'admin', user)) %}
{% set can_create = can_create ?? (object.exists and object.isAuthorized('create', 'admin', user)) %}
{% set can_save = can_save ?? (object.exists ? object.isAuthorized('update', 'admin', user) : object.isAuthorized('create', 'admin', user))|bool %}
{% set can_move = can_move ?? can_save and form.blueprint.schema.property('route').type is same as('parents') %}
{% set can_translate = can_translate ?? (admin.multilang and object.hasFlexFeature('page-translate') and not object.root()) %}

{% macro spanToggle(input, length) %}
    {{ (repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2))|raw }}
{% endmacro %}
{% import _self as macro %}

{% block body %}
    {% set current_route = '/' ~ route.getRoute(1) %}

    {% if not object.root() %}
    {% set child = object.children.first %}
    {% set prev = object.prevSibling %}
    {% set next = object.nextSibling %}

    {% set parent_url = parent and not parent.root ? admin_route(back_route) %}
    {% set child_url = can_read and child ? admin_route(current_route ~ '/' ~ child.slug) %}
    {% set prev_url = can_read and prev ? admin_route(back_route ~ '/' ~ prev.slug) %}
    {% set next_url = can_read and next ? admin_route(back_route ~ '/' ~ next.slug) %}
    {% endif %}
    {% set back_url = back_url ?? admin_route(flex.adminRoute(directory.getFlexType())) %}

    {{ parent() }}
{% endblock body %}

{% block back_button %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/back.html.twig', 'flex-objects/types/pages/buttons/back.html.twig']
        with { back_url: back_url } %}
    {% if not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-prev.html.twig', 'flex-objects/types/pages/buttons/nav-prev.html.twig']
        with { prev_url: prev_url, title: prev.route } %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-parent.html.twig', 'flex-objects/types/pages/buttons/nav-parent.html.twig']
        with { parent_url: parent_url, title: parent.route } %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-child.html.twig', 'flex-objects/types/pages/buttons/nav-child.html.twig']
        with { child_url: child_url, title: child.route } %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-next.html.twig', 'flex-objects/types/pages/buttons/nav-next.html.twig']
        with { next_url: next_url, title: next.route } %}
    {% endif %}
{% endblock back_button %}

{% block preview_button %}
    {% if object.exists and not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/preview.html.twig', 'flex-objects/types/pages/buttons/preview.html.twig'] %}
    {% endif %}
{% endblock preview_button %}

{% block delete_button %}
    {# FIXME: add support for deleting root file only #}
    {% if not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/delete.html.twig', 'flex-objects/types/pages/buttons/delete.html.twig'] %}
    {% endif %}
{% endblock delete_button %}

{% block extra_buttons %}
    {% if object.exists and not object.root() %}
    {% if can_create %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/add.html.twig', 'flex-objects/types/pages/buttons/add.html.twig'] %}
    {% endif %}
    {% if can_copy %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/copy.html.twig', 'flex-objects/types/pages/buttons/copy.html.twig'] %}
    {% endif %}
    {% if can_move %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/move.html.twig', 'flex-objects/types/pages/buttons/move.html.twig'] %}
    {% endif %}
    {% endif %}
{% endblock extra_buttons %}

{% block save_button %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/save.html.twig', 'flex-objects/types/pages/buttons/save.html.twig'] %}
{% endblock save_button %}

{% block content_top %}
    {% if allowed and user.authorize('admin.super') %}
    <div class=\"alert notice\">
        {% set save_location = object.getStorageFolder() ?: directory.getStorageFolder() %}
        {{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ url(save_location, false, true)|trim('/') }} {{ not object.exists ? '[' ~ 'PLUGIN_FLEX_OBJECTS.NEW'|tu|upper ~ ']' }}</b> (type: <b>{{ (form.getValue('name') ?: 'default') }}</b>)
    </div>
    {% endif %}
    {% if object.exists and form.flash.exists %}
        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> {{ 'PLUGIN_FLEX_OBJECTS.STATE.EDITING_DRAFT'|tu }} <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">{{ \"PLUGIN_ADMIN.RESET\"|tu }}</button>
        </div>
    {% endif %}
    {% if not object.exists %}
        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> {{ 'PLUGIN_FLEX_OBJECTS.STATE.NOT_CREATED_YET'|tu }}
        </div>
    {% elseif can_translate %}
        {% set is_default = language is same as(default_language) %}
        {% if is_default and default_language in object_languages %}
            {% if not translate_include_default and object.property('lang') %}
            {# Handle default language extension #}
            <div class=\"alert secondary-accent\">
                {% set overrideLanguage = all_languages[object_language] ?? object_language %}
                {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.USING_OVERRIDE'|tu(overrideLanguage, null)|raw }}
                {{ object.hasTranslation('', false) ? 'PLUGIN_FLEX_OBJECTS.LANGUAGE.UNUSED_DEFAULT'|tu|raw }}
            </div>
            {% elseif translate_include_default %}
                {%  if not object.property('lang') %}
                    <div class=\"alert secondary-accent\">
                        {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.USING_DEFAULT'|tu|raw }}
                    </div>
                {% elseif object.hasTranslation('', false) %}
                    <div class=\"alert secondary-accent\">
                        {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.UNUSED_DEFAULT'|tu|raw }}
                    </div>
                {% endif %}
            {% endif %}
        {% elseif not has_translation %}
        <div class=\"alert warning\">
            {% set overrideLanguage = all_languages[language] ?? object_language %}
            {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.NOT_TRANSLATED_YET'|tu(overrideLanguage, null)|raw }}
            {% if language == object_language %}
                {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.NO_FALLBACK_FOUND'|tu|raw }}
            {% else %}
                {% set overrideLanguage = all_languages[object_language] ?? object_language %}
                {{ 'PLUGIN_FLEX_OBJECTS.LANGUAGE.FALLING_BACK'|tu(overrideLanguage, null)|raw }}
            {% endif %}
        </div>
        {% endif %}
    {% endif %}
{% endblock content_top %}

{% block topbar %}
    {% if can_translate %}
        <div id=\"admin-lang-toggle\" class=\"button-group\">
            <button type=\"button\" class=\"button disabled\">
                <i class=\"fa fa-flag-o\"></i>
                {{ all_languages[object_language] ?? object_language }}
            </button>
            {% if count(object_languages) > (object_language in object_languages)|int %}
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu language-switcher\">
                {% for lang_code in object_languages %}
                    {% if lang_code != object_language %}
                    <li>
                        <a href=\"{{ admin_route(route.getRoute(1), lang_code) }}\">{{ all_languages[lang_code] ?? lang_code }}</a>
                    </li>
                    {% endif %}
                {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}

    {% if user.authorize('admin.super') %}
    <form id=\"admin-mode-toggle\">
        {% set normalText = 'PLUGIN_ADMIN.NORMAL'|tu %}
        {% set expertText = 'PLUGIN_ADMIN.EXPERT'|tu %}
        {% set maxLen = max([normalText|length, expertText|length]) %}
        {% set normalText = macro.spanToggle(normalText, maxLen) %}
        {% set expertText = macro.spanToggle(expertText, maxLen) %}

        <div class=\"switch-toggle switch-grav\">
            <input type=\"radio\" value=\"normal\" data-leave-url=\"{{ route.withGravParam('mode', 'normal').toString(true) }}\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" {% if expert == '0' %} checked=\"checked\"{% endif %}>
            <label for=\"normal\">{{ normalText }}</label>
            <input type=\"radio\" value=\"expert\" data-leave-url=\"{{ route.withGravParam('mode', 'expert').toString(true) }}\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" {% if expert == '1' %} checked=\"checked\"{% endif %}>
            <label for=\"expert\">{{ expertText }}</label>
            <a></a>
        </div>
    </form>
    {% endif %}
{% endblock topbar %}

{% block edit %}
    {% include 'partials/blueprints.html.twig' with { context: object, data: object, blueprints: form.blueprint } %}
{% endblock edit %}

{% block content %}
    {{ parent() }}

    {% include 'partials/modal-changes-detected.html.twig' %}

    {% if object.exists %}
        {% set modal_data = data({
            route: '/' ~ object.key,
            name: object.header.child_type ?? object.blueprint.child_type ?? 'default'
        }) %}

        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            {% include 'partials/blueprints-new.html.twig' with { form: null, blueprints: admin.blueprints('admin/pages/new'), data: modal_data, form_id: 'new-page' } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new-folder.html.twig' with { form: null, blueprints: admin.blueprints('admin/pages/new_folder'), data: modal_data, form_id: 'new-folder' } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"module\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            {% include 'partials/blueprints-new.html.twig' with { form: null, blueprints: admin.blueprints('admin/pages/modular_new'), data: modal_data, form_id: 'new-module' } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-page-copy\" data-remodal-options=\"hashTracking: false, closeOnOutsideClick: false\">
            {% include 'partials/blueprints-copy.html.twig' with { blueprints: admin.blueprints('admin/pages/copy'), data: data({ title: object.title ~ ' (Copy)', folder: object.slug ~ '-copy' }), form_id: 'copy' } %}
        </div>
    {% endif %}

    {# TODO: regular pages support extra modals from admin config #}

    <div class=\"remodal parents-container\" data-remodal-id=\"parents\" data-remodal-options=\"hashTracking: false, stack: true\">
        <form>
            <h1>{{ 'PLUGIN_FLEX_OBJECTS.PARENTS'|tu }}</h1>
            <div class=\"grav-loading\"><div class=\"grav-loader\">{{ 'PLUGIN_FLEX_OBJECTS.STATE.LOADING'|tu }}</div></div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</a>
                <a class=\"button\" data-parents-select href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>

{% endblock content %}

{% block bottom %}
    {{ parent() }}
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
{% endblock bottom %}
", "flex-objects/types/pages/edit.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\plugins\\flex-objects\\admin\\templates\\flex-objects\\types\\pages\\edit.html.twig");
    }
}
