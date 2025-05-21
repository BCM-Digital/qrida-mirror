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

/* modules/custom/qrida_layouts/templates/qrida-2col-stacked-fluid.html.twig */
class __TwigTemplate_7526bf2d5b8a34552edd9391b0d3a07361bb5f3675e9f005952df4224a464bc9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 16, "if" => 31];
        $filters = ["render" => 24, "escape" => 43];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['render', 'escape'],
                []
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
        // line 14
        echo "
";
        // line 16
        $context["classes"] = [0 => "layout", 1 => "layout--space", 2 => "layout--twocol-stacked", 3 => "au-grid"];
        // line 23
        echo "
";
        // line 24
        $context["left"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "left", [])));
        // line 25
        $context["right"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "right", [])));
        // line 26
        $context["header_attributes"] = $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "header", []), "addClass", [0 => "col-xs-12", 1 => "layout__region", 2 => "layout__region--top"], "method");
        // line 27
        echo "

";
        // line 29
        $context["region_cols"] = "col-md-6";
        // line 30
        echo "
";
        // line 31
        if ((twig_test_empty(($context["left"] ?? null)) && twig_test_empty(($context["right"] ?? null)))) {
            // line 32
            echo "  ";
            $context["layout_class"] = "layout--single";
        }
        // line 34
        echo "
";
        // line 35
        if (((($context["left"] ?? null) &&  !($context["right"] ?? null)) || (($context["right"] ?? null) &&  !($context["left"] ?? null)))) {
            // line 36
            echo "  ";
            $context["region_cols"] = "col-md-12";
        }
        // line 38
        echo "
";
        // line 39
        if ($this->getAttribute(($context["attributes"] ?? null), "layout-mode", [], "array")) {
            // line 40
            echo "  ";
            $context["header_attributes"] = $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "header", []), "addClass", [0 => "layout__region--center"], "method");
        }
        // line 42
        echo "
<div ";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => ($context["layout_class"] ?? null)], "method")), "html", null, true);
        echo ">
  <div class=\"container\">
    <div class=\"row\">

      ";
        // line 47
        if ($this->getAttribute(($context["content"] ?? null), "header", [])) {
            // line 48
            echo "        <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_attributes"] ?? null)), "html", null, true);
            echo ">
          ";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "header", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 52
        echo "
      ";
        // line 53
        if ( !twig_test_empty(($context["left"] ?? null))) {
            // line 54
            echo "        <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "left", []), "addClass", [0 => "col-xs-12", 1 => ($context["region_cols"] ?? null), 2 => "layout__region", 3 => "layout__region--left"], "method")), "html", null, true);
            echo ">
          ";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["left"] ?? null)), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 58
        echo "
      ";
        // line 59
        if ( !twig_test_empty(($context["right"] ?? null))) {
            // line 60
            echo "        <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "right", []), "addClass", [0 => "col-xs-12", 1 => ($context["region_cols"] ?? null), 2 => "layout__region", 3 => "layout__region--right"], "method")), "html", null, true);
            echo ">
          ";
            // line 61
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["right"] ?? null)), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 64
        echo "
      ";
        // line 65
        if ($this->getAttribute(($context["content"] ?? null), "footer", [])) {
            // line 66
            echo "        <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "footer", []), "addClass", [0 => "col-xs-12", 1 => "layout__region", 2 => "layout__region--bottom"], "method")), "html", null, true);
            echo ">
          ";
            // line 67
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "footer", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 70
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/qrida_layouts/templates/qrida-2col-stacked-fluid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 70,  167 => 67,  162 => 66,  160 => 65,  157 => 64,  151 => 61,  146 => 60,  144 => 59,  141 => 58,  135 => 55,  130 => 54,  128 => 53,  125 => 52,  119 => 49,  114 => 48,  112 => 47,  105 => 43,  102 => 42,  98 => 40,  96 => 39,  93 => 38,  89 => 36,  87 => 35,  84 => 34,  80 => 32,  78 => 31,  75 => 30,  73 => 29,  69 => 27,  67 => 26,  65 => 25,  63 => 24,  60 => 23,  58 => 16,  55 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/qrida_layouts/templates/qrida-2col-stacked-fluid.html.twig", "/home/ubuntu/sites/qrida-website/docroot/modules/custom/qrida_layouts/templates/qrida-2col-stacked-fluid.html.twig");
    }
}
