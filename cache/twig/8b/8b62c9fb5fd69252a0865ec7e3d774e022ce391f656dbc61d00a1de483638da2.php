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

/* forms/field.html.twig */
class __TwigTemplate_0a7b47440a0fb4f654ba65d2044cf67f6a448ab07b3fa8452a59ccec1396f14e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'global_attributes' => [$this, 'block_global_attributes'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/field.html.twig"));

        // line 1
        if ( !$this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "ignore", [])) {
            // line 2
            echo "
";
            // line 3
            if (( !($context["blueprints"] ?? null) || (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")) : (true)) === true))) {
                // line 4
                echo "    ";
                $context["default"] = $this->getAttribute(($context["field"] ?? null), "default", []);
                // line 5
                echo "    ";
                $context["toggleable"] = ((($this->getAttribute(($context["field"] ?? null), "toggleable", [], "any", true, true) &&  !(null === $this->getAttribute(($context["field"] ?? null), "toggleable", [])))) ? ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) : (false));
                // line 6
                echo "    ";
                if (($context["toggleable"] ?? null)) {
                    // line 7
                    echo "        ";
                    $context["originalValue"] = (($context["originalValue"]) ?? (($context["value"] ?? null)));
                    // line 8
                    echo "        ";
                    $context["toggleableChecked"] =  !(null === ($context["originalValue"] ?? null));
                    // line 9
                    echo "    ";
                }
                // line 10
                echo "
    ";
                // line 11
                $context["has_value"] =  !(null === ($context["value"] ?? null));
                // line 12
                echo "    ";
                if ( !($context["has_value"] ?? null)) {
                    // line 13
                    echo "        ";
                    $context["value"] = ($context["default"] ?? null);
                    // line 14
                    echo "    ";
                }
                // line 15
                echo "
    ";
                // line 16
                if ((($this->getAttribute(($context["field"] ?? null), "yaml", []) || ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "type", []) == "yaml")) && twig_test_iterable(($context["value"] ?? null)))) {
                    // line 17
                    echo "        ";
                    $context["value"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->toYamlFilter(($context["value"] ?? null));
                    // line 18
                    echo "    ";
                }
            } else {
                // line 20
                echo "    ";
                $context["toggleable"] = false;
            }
            // line 22
            $context["vertical"] = ($this->getAttribute(($context["field"] ?? null), "style", []) == "vertical");
            // line 23
            $context["field_name"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
            // line 24
            $context["show_label"] = ( !($this->getAttribute(($context["field"] ?? null), "label", []) === false) &&  !($this->getAttribute(($context["field"] ?? null), "display_label", []) === false));
            // line 25
            echo "
";
            // line 27
            $context["isDisabledToggleable"] = (($context["toggleable"] ?? null) &&  !($context["toggleableChecked"] ?? null));
            // line 28
            echo "
";
            // line 29
            $this->displayBlock('field', $context, $blocks);
            // line 129
            echo "
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 29
    public function block_field($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 30
        echo "    <div class=\"form-field grid";
        if (($context["vertical"] ?? null)) {
            echo " vertical";
        }
        if (($context["toggleable"] ?? null)) {
            echo " form-field-toggleable";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "outerclasses", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "field_classes", []), "html", null, true);
        echo "\">
        ";
        // line 31
        $this->displayBlock('contents', $context, $blocks);
        // line 127
        echo "    </div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 31
    public function block_contents($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contents"));

        // line 32
        echo "            ";
        if (($context["show_label"] ?? null)) {
            // line 33
            echo "            <div class=\"form-label";
            if ( !($context["vertical"] ?? null)) {
                echo " block size-1-3";
            }
            echo "\">
                ";
            // line 34
            if (($context["toggleable"] ?? null)) {
                // line 35
                echo "                    <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"";
                echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
                echo "\">
                        <input type=\"checkbox\"
                               id=\"toggleable_";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
                echo "\"
                               ";
                // line 38
                if (($context["toggleableChecked"] ?? null)) {
                    echo "value=\"1\"";
                }
                // line 39
                echo "                               name=\"toggleable_";
                echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
                echo "\"
                               ";
                // line 40
                if (($context["toggleableChecked"] ?? null)) {
                    echo "checked=\"checked\"";
                }
                // line 41
                echo "                        >
                        <label for=\"toggleable_";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
                echo "\"></label>
                    </span>
                ";
            }
            // line 45
            echo "               <label";
            echo (($this->getAttribute(($context["field"] ?? null), "toggleable", [])) ? (((((" class=\"toggleable " . $this->getAttribute(($context["field"] ?? null), "labelclasses", [])) . "\" for=\"toggleable_") . $this->getAttribute(($context["field"] ?? null), "name", [])) . "\"")) : (((" class=\"" . $this->getAttribute(($context["field"] ?? null), "labelclasses", [])) . "\"")));
            echo ">
                ";
            // line 46
            $this->displayBlock('label', $context, $blocks);
            // line 62
            echo "                </label>
                ";
            // line 63
            if ($this->getAttribute(($context["field"] ?? null), "sublabel", [])) {
                // line 64
                echo "                <div class=\"form-sublabel ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "sublabelclasses", []), "html", null, true);
                echo "\">
                    ";
                // line 65
                if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                    // line 66
                    echo "                        ";
                    echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "sublabel", [])), false);
                    echo "
                    ";
                } else {
                    // line 68
                    echo "                        ";
                    echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "sublabel", []));
                    echo "
                    ";
                }
                // line 70
                echo "                </div>
                ";
            }
            // line 72
            echo "            </div>
            ";
        }
        // line 74
        echo "            <div class=\"form-data";
        if ( !($context["vertical"] ?? null)) {
            echo " block size-2-3";
        }
        echo "\"
                ";
        // line 75
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 80
        echo "            >
                ";
        // line 81
        $this->displayBlock('group', $context, $blocks);
        // line 114
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [])) {
            // line 115
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
            echo "\">
                        <span class=\"form-description\">
                            ";
            // line 117
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 118
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", [])), false);
                echo "
                            ";
            } else {
                // line 120
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", []));
                echo "
                            ";
            }
            // line 122
            echo "                        </span>
                    </div>
                ";
        }
        // line 125
        echo "            </div>
        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 46
    public function block_label($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        // line 47
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 48
            echo "                        ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 49
                echo "                            <span class=\"hint--bottom\" data-hint=\"";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])), false);
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", [])), false);
                echo "</span> <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                        ";
            } else {
                // line 51
                echo "                            <span class=\"hint--bottom\" data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", []));
                echo " <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                        ";
            }
            // line 53
            echo "                    ";
        } else {
            // line 54
            echo "                        ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 55
                echo "                            ";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", [])), false);
                echo "
                        ";
            } else {
                // line 57
                echo "                            ";
                echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "label", []));
                echo "
                        ";
            }
            // line 59
            echo "                    ";
        }
        // line 60
        echo "                    ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 75
    public function block_global_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_attributes"));

        // line 76
        echo "                data-grav-field=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "type", []), "html", null, true);
        echo "\"
                data-grav-disabled=\"";
        // line 77
        echo twig_escape_filter($this->env, ($context["toggleableChecked"] ?? null), "html", null, true);
        echo "\"
                data-grav-default=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 81
    public function block_group($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "group"));

        // line 82
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 113
        echo "                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 82
    public function block_input($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 83
        echo "                        <div class=\"form-input-wrapper ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
        echo "\">
                            ";
        // line 84
        $this->displayBlock('prepend', $context, $blocks);
        // line 85
        echo "                            ";
        $context["input_value"] = ((twig_test_iterable(($context["value"] ?? null))) ? (twig_join_filter(($context["value"] ?? null), ",")) : ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->stringFilter(($context["value"] ?? null))));
        // line 86
        echo "                            <input
                                ";
        // line 88
        echo "                                name=\"";
        echo twig_escape_filter($this->env, ($context["field_name"] ?? null), "html", null, true);
        echo "\"
                                value=\"";
        // line 89
        echo twig_escape_filter($this->env, ($context["input_value"] ?? null), "html", null, true);
        echo "\"
                                ";
        // line 90
        if ($this->getAttribute(($context["field"] ?? null), "key", [])) {
            // line 91
            echo "                                    data-key-observe=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->fieldNameFilter((($context["scope"] ?? null) . ($context["field_name"] ?? null))), "html", null, true);
            echo "\"
                                ";
        }
        // line 93
        echo "                                ";
        // line 94
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 109
        echo "                            />
                            ";
        // line 110
        $this->displayBlock('append', $context, $blocks);
        // line 111
        echo "                        </div>
                    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 84
    public function block_prepend($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "prepend"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 94
    public function block_input_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input_attributes"));

        // line 95
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo "\" ";
        }
        // line 96
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []), "html", null, true);
            echo "\" ";
        }
        // line 97
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []), "html", null, true);
            echo "\" ";
        }
        // line 98
        echo "                                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 99
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", [])), "html", null, true);
            echo "\"";
        }
        // line 100
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 101
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 102
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 103
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "autocomplete", [], "any", true, true)) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "autocomplete", []), "html", null, true);
            echo "\"";
        }
        // line 104
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 105
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []), "html", null, true);
            echo "\"";
        }
        // line 106
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])), "html", null, true);
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 107
($context["field"] ?? null), "title", [], "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "title", [])), "html", null, true);
            echo "\" ";
        }
        // line 108
        echo "                                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 110
    public function block_append($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "append"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 110,  543 => 108,  537 => 107,  530 => 106,  523 => 105,  518 => 104,  511 => 103,  506 => 102,  501 => 101,  496 => 100,  489 => 99,  484 => 98,  477 => 97,  470 => 96,  463 => 95,  457 => 94,  446 => 84,  438 => 111,  436 => 110,  433 => 109,  430 => 94,  428 => 93,  422 => 91,  420 => 90,  416 => 89,  411 => 88,  408 => 86,  405 => 85,  403 => 84,  396 => 83,  390 => 82,  383 => 113,  380 => 82,  374 => 81,  365 => 78,  361 => 77,  356 => 76,  350 => 75,  340 => 60,  337 => 59,  331 => 57,  325 => 55,  322 => 54,  319 => 53,  311 => 51,  303 => 49,  300 => 48,  297 => 47,  291 => 46,  283 => 125,  278 => 122,  272 => 120,  266 => 118,  264 => 117,  258 => 115,  255 => 114,  253 => 81,  250 => 80,  248 => 75,  241 => 74,  237 => 72,  233 => 70,  227 => 68,  221 => 66,  219 => 65,  214 => 64,  212 => 63,  209 => 62,  207 => 46,  202 => 45,  196 => 42,  193 => 41,  189 => 40,  184 => 39,  180 => 38,  176 => 37,  170 => 35,  168 => 34,  161 => 33,  158 => 32,  152 => 31,  144 => 127,  142 => 31,  128 => 30,  122 => 29,  113 => 129,  111 => 29,  108 => 28,  106 => 27,  103 => 25,  101 => 24,  99 => 23,  97 => 22,  93 => 20,  89 => 18,  86 => 17,  84 => 16,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  52 => 5,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not field.validate.ignore %}

{% if not blueprints or (blueprints.schema.type(field.type)['input@'] ?? true) is same as(true) %}
    {% set default = field.default %}
    {% set toggleable = field.toggleable ?? false %}
    {% if toggleable %}
        {% set originalValue = originalValue ?? value %}
        {% set toggleableChecked = originalValue is not null %}
    {% endif %}

    {% set has_value = value is not null %}
    {% if not has_value %}
        {% set value = default %}
    {% endif %}

    {% if (field.yaml or field.validate.type == 'yaml') and value is iterable %}
        {% set value = value|toYaml %}
    {% endif %}
{% else %}
    {% set toggleable = false %}
{% endif %}
{% set vertical = field.style == 'vertical' %}
{% set field_name = (scope ~ field.name)|fieldName %}
{% set show_label = field.label is not same as(false) and field.display_label is not same as(false) %}

{# DEPRECATED: Needed by old form fields; remove when backwards compatibility breaks are allowed #}
{% set isDisabledToggleable = toggleable and not toggleableChecked %}

{% block field %}
    <div class=\"form-field grid{% if vertical %} vertical{% endif %}{% if toggleable %} form-field-toggleable{% endif %} {{ field.outerclasses }} {{ field.field_classes }}\">
        {% block contents %}
            {% if show_label %}
            <div class=\"form-label{% if not vertical %} block size-1-3{% endif %}\">
                {% if toggleable %}
                    <span class=\"checkboxes toggleable\" data-grav-field=\"toggleable\" data-grav-field-name=\"{{ field_name }}\">
                        <input type=\"checkbox\"
                               id=\"toggleable_{{ field.name }}\"
                               {% if toggleableChecked %}value=\"1\"{% endif %}
                               name=\"toggleable_{{ field_name }}\"
                               {% if toggleableChecked %}checked=\"checked\"{% endif %}
                        >
                        <label for=\"toggleable_{{ field.name }}\"></label>
                    </span>
                {% endif %}
               <label{{ (field.toggleable ? ' class=\"toggleable ' ~ field.labelclasses ~ '\" for=\"toggleable_' ~ field.name ~ '\"' : ' class=\"' ~ field.labelclasses ~ '\"')|raw }}>
                {% block label %}
                    {% if field.help %}
                        {% if field.markdown %}
                            <span class=\"hint--bottom\" data-hint=\"{{ field.help|t|markdown(false) }}\">{{ field.label|t|markdown(false)|raw }}</span> <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                        {% else %}
                            <span class=\"hint--bottom\" data-hint=\"{{ field.help|t }}\">{{ field.label|t|raw }} <i class=\"hint-icon fa fa-question-circle\" aria-hidden=\"true\"></i></span>
                        {% endif %}
                    {% else %}
                        {% if field.markdown %}
                            {{ field.label|t|markdown(false)|raw }}
                        {% else %}
                            {{ field.label|t|raw }}
                        {% endif %}
                    {% endif %}
                    {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
                {% endblock %}
                </label>
                {% if field.sublabel %}
                <div class=\"form-sublabel {{ field.sublabelclasses }}\">
                    {% if field.markdown %}
                        {{ field.sublabel|t|markdown(false)|raw }}
                    {% else %}
                        {{ field.sublabel|t|raw }}
                    {% endif %}
                </div>
                {% endif %}
            </div>
            {% endif %}
            <div class=\"form-data{% if not vertical %} block size-2-3{% endif %}\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ toggleableChecked }}\"
                data-grav-default=\"{{ field.default|json_encode|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"form-input-wrapper {{ field.size }} {{ field.wrapper_classes }}\">
                            {% block prepend %}{% endblock prepend %}
                            {% set input_value = value is iterable ? value|join(',') : value|string %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ field_name }}\"
                                value=\"{{ input_value }}\"
                                {% if field.key %}
                                    data-key-observe=\"{{ (scope ~ field_name)|fieldName }}\"
                                {% endif %}
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                                    {% if field.id is defined %}id=\"{{ field.id }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete is defined %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|t }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|t }}\" {% endif %}
                                {% endblock %}
                            />
                            {% block append %}{% endblock append %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">
                            {% if field.markdown %}
                                {{ field.description|t|markdown(false)|raw }}
                            {% else %}
                                {{ field.description|t|raw }}
                            {% endif %}
                        </span>
                    </div>
                {% endif %}
            </div>
        {% endblock %}
    </div>
{% endblock %}

{% endif %}
", "forms/field.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\field.html.twig");
    }
}
