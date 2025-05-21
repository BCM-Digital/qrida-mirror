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

/* themes/custom/govcms8_uikit_starter/templates/paragraphs/layout--qrida-50-50-stacked--paragraph--102.html.twig */
class __TwigTemplate_02fbd7736231d3a89c71997c5437120d41f0e26a0bca27da2edd8e961ece160e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "if" => 38];
        $filters = ["render" => 33, "escape" => 57];
        $functions = ["create_attribute" => 13];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['render', 'escape'],
                ['create_attribute']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 12
        echo "
";
        // line 13
        $context["wrapper_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
        // line 14
        echo "
";
        // line 16
        $context["classes"] = [0 => "container", 1 => "layout", 2 => "layout--space", 3 => "layout--equal", 4 => "paragraph-102"];
        // line 24
        echo "
";
        // line 26
        $context["wrapper_classes"] = [0 => "row", 1 => "d-md-flex", 2 => "align-items-center"];
        // line 32
        echo "
";
        // line 33
        $context["left"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "left", [])));
        // line 34
        $context["right"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "right", [])));
        // line 35
        echo "
";
        // line 36
        $context["region_cols"] = "col-lg-6";
        // line 37
        echo "
";
        // line 38
        if ((twig_test_empty(($context["left"] ?? null)) && twig_test_empty(($context["right"] ?? null)))) {
            // line 39
            echo "    ";
            $context["layout_class"] = "layout--single";
        }
        // line 41
        echo "
";
        // line 42
        if (((($context["left"] ?? null) &&  !($context["right"] ?? null)) || (($context["right"] ?? null) &&  !($context["left"] ?? null)))) {
            // line 43
            echo "    ";
            $context["region_cols"] = "col-sm-12";
        }
        // line 45
        echo "
";
        // line 46
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => ($context["layout_class"] ?? null)], "method");
        // line 47
        $context["wrapper_attributes"] = $this->getAttribute(($context["wrapper_attributes"] ?? null), "addClass", [0 => ($context["wrapper_classes"] ?? null)], "method");
        // line 48
        echo "
";
        // line 49
        if ($this->getAttribute(($context["attributes"] ?? null), "hasClass", [0 => "layout--style--apply"], "method")) {
            // line 50
            echo "    ";
            $context["attributes"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => ($context["layout_class"] ?? null)], "method"), "removeClass", [0 => "au-card"], "method"), "removeClass", [0 => "au-card--shadow"], "method");
            // line 51
            echo "    ";
            $context["wrapper_attributes"] = $this->getAttribute($this->getAttribute(($context["wrapper_attributes"] ?? null), "addClass", [0 => "au-card", 1 => "au-card--shadow"], "method"), "removeClass", [0 => "row"], "method");
        } elseif ($this->getAttribute(        // line 52
($context["attributes"] ?? null), "hasClass", [0 => "layout--style--promo"], "method")) {
            // line 53
            echo "    ";
            $context["attributes"] = $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => ($context["layout_class"] ?? null)], "method"), "removeClass", [0 => "au-card"], "method");
            // line 54
            echo "    ";
            $context["wrapper_attributes"] = $this->getAttribute($this->getAttribute(($context["wrapper_attributes"] ?? null), "addClass", [0 => "inner", 1 => "au-card"], "method"), "removeClass", [0 => "row"], "method");
        }
        // line 56
        echo "
<div ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
    <div ";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null)), "html", null, true);
        echo ">

        ";
        // line 60
        if (($context["left"] ?? null)) {
            // line 61
            echo "            <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "left", []), "addClass", [0 => "col-xs-12", 1 => ($context["region_cols"] ?? null), 2 => "layout__region", 3 => "layout__region--left"], "method")), "html", null, true);
            echo ">
                ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left"] ?? null)), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 65
        echo "
        ";
        // line 66
        if (($context["right"] ?? null)) {
            // line 67
            echo "            <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "right", []), "addClass", [0 => "col-xs-12", 1 => ($context["region_cols"] ?? null), 2 => "layout__region", 3 => "layout__region--right"], "method")), "html", null, true);
            echo ">
                ";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right"] ?? null)), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 71
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/templates/paragraphs/layout--qrida-50-50-stacked--paragraph--102.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 71,  162 => 68,  157 => 67,  155 => 66,  152 => 65,  146 => 62,  141 => 61,  139 => 60,  134 => 58,  130 => 57,  127 => 56,  123 => 54,  120 => 53,  118 => 52,  115 => 51,  112 => 50,  110 => 49,  107 => 48,  105 => 47,  103 => 46,  100 => 45,  96 => 43,  94 => 42,  91 => 41,  87 => 39,  85 => 38,  82 => 37,  80 => 36,  77 => 35,  75 => 34,  73 => 33,  70 => 32,  68 => 26,  65 => 24,  63 => 16,  60 => 14,  58 => 13,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/govcms8_uikit_starter/templates/paragraphs/layout--qrida-50-50-stacked--paragraph--102.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/paragraphs/layout--qrida-50-50-stacked--paragraph--102.html.twig");
    }
}
