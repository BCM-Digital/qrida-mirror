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

/* modules/custom/qrida_layouts/templates/qrida-60-40-stacked.html.twig */
class __TwigTemplate_7397af6d0b8d90f7e6e2c31fa54c514c8307ea981f1cfbdb796f86d33e0e0c65 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "if" => 36];
        $filters = ["render" => 30, "escape" => 56];
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
        $context["classes"] = [0 => "container", 1 => "layout", 2 => "layout--space", 3 => "layout--righty"];
        // line 23
        echo "
";
        // line 25
        $context["wrapper_classes"] = [0 => "row"];
        // line 29
        echo "
";
        // line 30
        $context["left"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "left", [])));
        // line 31
        $context["right"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "right", [])));
        // line 32
        echo "
";
        // line 33
        $context["left_region_cols"] = "col-sm-8";
        // line 34
        $context["right_region_cols"] = "col-sm-4";
        // line 35
        echo "
";
        // line 36
        if ((twig_test_empty(($context["left"] ?? null)) && twig_test_empty(($context["right"] ?? null)))) {
            // line 37
            echo "  ";
            $context["layout_class"] = "layout--single";
        }
        // line 39
        echo "
";
        // line 40
        if (((($context["left"] ?? null) &&  !($context["right"] ?? null)) || (($context["right"] ?? null) &&  !($context["left"] ?? null)))) {
            // line 41
            echo "  ";
            $context["left_region_cols"] = "";
            // line 42
            echo "  ";
            $context["right_region_cols"] = "";
        }
        // line 44
        echo "
";
        // line 45
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => ($context["layout_class"] ?? null)], "method");
        // line 46
        $context["wrapper_attributes"] = $this->getAttribute(($context["wrapper_attributes"] ?? null), "addClass", [0 => ($context["wrapper_classes"] ?? null)], "method");
        // line 47
        echo "
";
        // line 48
        if ($this->getAttribute(($context["attributes"] ?? null), "hasClass", [0 => "layout--style--apply"], "method")) {
            // line 49
            echo "  ";
            $context["attributes"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => ($context["layout_class"] ?? null)], "method"), "removeClass", [0 => "au-card"], "method"), "removeClass", [0 => "au-card--shadow"], "method");
            // line 50
            echo "  ";
            $context["wrapper_attributes"] = $this->getAttribute($this->getAttribute(($context["wrapper_attributes"] ?? null), "addClass", [0 => "au-card", 1 => "au-card--shadow"], "method"), "removeClass", [0 => "row"], "method");
        } elseif ($this->getAttribute(        // line 51
($context["attributes"] ?? null), "hasClass", [0 => "layout--style--promo"], "method")) {
            // line 52
            echo "  ";
            $context["attributes"] = $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => ($context["layout_class"] ?? null)], "method"), "removeClass", [0 => "au-card"], "method");
            // line 53
            echo "  ";
            $context["wrapper_attributes"] = $this->getAttribute($this->getAttribute(($context["wrapper_attributes"] ?? null), "addClass", [0 => "inner", 1 => "au-card"], "method"), "removeClass", [0 => "row"], "method");
        }
        // line 55
        echo "
<div ";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  <div ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null)), "html", null, true);
        echo ">

    ";
        // line 59
        if (($context["left"] ?? null)) {
            // line 60
            echo "      <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "left", []), "addClass", [0 => "col-xs-12", 1 => ($context["left_region_cols"] ?? null), 2 => "layout__region", 3 => "layout__region--left"], "method")), "html", null, true);
            echo ">
        ";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left"] ?? null)), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 64
        echo "
    ";
        // line 65
        if (($context["right"] ?? null)) {
            // line 66
            echo "      <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "right", []), "addClass", [0 => "col-xs-12", 1 => ($context["right_region_cols"] ?? null), 2 => "layout__region", 3 => "layout__region--right"], "method")), "html", null, true);
            echo ">
        ";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right"] ?? null)), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 70
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/qrida_layouts/templates/qrida-60-40-stacked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 70,  167 => 67,  162 => 66,  160 => 65,  157 => 64,  151 => 61,  146 => 60,  144 => 59,  139 => 57,  135 => 56,  132 => 55,  128 => 53,  125 => 52,  123 => 51,  120 => 50,  117 => 49,  115 => 48,  112 => 47,  110 => 46,  108 => 45,  105 => 44,  101 => 42,  98 => 41,  96 => 40,  93 => 39,  89 => 37,  87 => 36,  84 => 35,  82 => 34,  80 => 33,  77 => 32,  75 => 31,  73 => 30,  70 => 29,  68 => 25,  65 => 23,  63 => 16,  60 => 14,  58 => 13,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/qrida_layouts/templates/qrida-60-40-stacked.html.twig", "/home/ubuntu/sites/qrida-website/docroot/modules/custom/qrida_layouts/templates/qrida-60-40-stacked.html.twig");
    }
}
