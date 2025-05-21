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

/* modules/custom/qrida_layouts/templates/qrida-50-50-stacked.html.twig */
class __TwigTemplate_f13b5c92d6b68591b7cb83a38e9c0dc17d08f6bc80e21a7b06bd5f0ef9598fab extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 13, "if" => 36];
        $filters = ["render" => 31, "escape" => 55];
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
        $context["classes"] = [0 => "container", 1 => "layout", 2 => "layout--space", 3 => "layout--equal"];
        // line 23
        echo "
";
        // line 25
        $context["wrapper_classes"] = [0 => "row", 1 => "d-sm-flex"];
        // line 30
        echo "
";
        // line 31
        $context["left"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "left", [])));
        // line 32
        $context["right"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "right", [])));
        // line 33
        echo "
";
        // line 34
        $context["region_cols"] = "col-sm-6";
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
            $context["region_cols"] = "col-sm-12";
        }
        // line 43
        echo "
";
        // line 44
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => ($context["layout_class"] ?? null)], "method");
        // line 45
        $context["wrapper_attributes"] = $this->getAttribute(($context["wrapper_attributes"] ?? null), "addClass", [0 => ($context["wrapper_classes"] ?? null)], "method");
        // line 46
        echo "
";
        // line 47
        if ($this->getAttribute(($context["attributes"] ?? null), "hasClass", [0 => "layout--style--apply"], "method")) {
            // line 48
            echo "  ";
            $context["attributes"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => ($context["layout_class"] ?? null)], "method"), "removeClass", [0 => "au-card"], "method"), "removeClass", [0 => "au-card--shadow"], "method");
            // line 49
            echo "  ";
            $context["wrapper_attributes"] = $this->getAttribute($this->getAttribute(($context["wrapper_attributes"] ?? null), "addClass", [0 => "au-card", 1 => "au-card--shadow"], "method"), "removeClass", [0 => "row"], "method");
        } elseif ($this->getAttribute(        // line 50
($context["attributes"] ?? null), "hasClass", [0 => "layout--style--promo"], "method")) {
            // line 51
            echo "  ";
            $context["attributes"] = $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => ($context["layout_class"] ?? null)], "method"), "removeClass", [0 => "au-card"], "method");
            // line 52
            echo "  ";
            $context["wrapper_attributes"] = $this->getAttribute($this->getAttribute(($context["wrapper_attributes"] ?? null), "addClass", [0 => "inner", 1 => "au-card"], "method"), "removeClass", [0 => "row"], "method");
        }
        // line 54
        echo "
<div ";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  <div ";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null)), "html", null, true);
        echo ">

    ";
        // line 58
        if (($context["left"] ?? null)) {
            // line 59
            echo "      <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "left", []), "addClass", [0 => "col-xs-12", 1 => ($context["region_cols"] ?? null), 2 => "layout__region", 3 => "layout__region--left"], "method")), "html", null, true);
            echo ">
        ";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left"] ?? null)), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 63
        echo "
    ";
        // line 64
        if (($context["right"] ?? null)) {
            // line 65
            echo "      <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "right", []), "addClass", [0 => "col-xs-12", 1 => ($context["region_cols"] ?? null), 2 => "layout__region", 3 => "layout__region--right"], "method")), "html", null, true);
            echo ">
        ";
            // line 66
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right"] ?? null)), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 69
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/qrida_layouts/templates/qrida-50-50-stacked.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 69,  162 => 66,  157 => 65,  155 => 64,  152 => 63,  146 => 60,  141 => 59,  139 => 58,  134 => 56,  130 => 55,  127 => 54,  123 => 52,  120 => 51,  118 => 50,  115 => 49,  112 => 48,  110 => 47,  107 => 46,  105 => 45,  103 => 44,  100 => 43,  96 => 41,  94 => 40,  91 => 39,  87 => 37,  85 => 36,  82 => 35,  80 => 34,  77 => 33,  75 => 32,  73 => 31,  70 => 30,  68 => 25,  65 => 23,  63 => 16,  60 => 14,  58 => 13,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/qrida_layouts/templates/qrida-50-50-stacked.html.twig", "/home/ubuntu/sites/qrida-website/docroot/modules/custom/qrida_layouts/templates/qrida-50-50-stacked.html.twig");
    }
}
