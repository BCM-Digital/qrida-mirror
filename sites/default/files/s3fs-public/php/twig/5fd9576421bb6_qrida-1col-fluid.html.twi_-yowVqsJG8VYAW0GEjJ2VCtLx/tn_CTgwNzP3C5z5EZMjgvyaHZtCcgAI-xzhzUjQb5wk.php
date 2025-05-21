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

/* modules/custom/qrida_layouts/templates/qrida-1col-fluid.html.twig */
class __TwigTemplate_686feae33ca524ecf2619bb9f7f835cd17ee490b38b9db141b018109c7714860 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 17, "if" => 28];
        $filters = ["escape" => 26, "trim" => 28, "striptags" => 28, "render" => 28];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trim', 'striptags', 'render'],
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
        // line 15
        echo "
";
        // line 17
        $context["classes"] = [0 => "layout", 1 => "page-layout", 2 => "page-layout--wide", 3 => "page-layout--onecol-fluid", 4 => "au-grid"];
        // line 25
        echo "
<div ";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

  ";
        // line 28
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "admin", [])))))) {
            // line 29
            echo "    <div class=\"layout__region--admin container\">
      ";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "admin", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 33
        echo "
  ";
        // line 34
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "header", [])))))) {
            // line 35
            echo "  <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "header", []), "addClass", [0 => "layout__region", 1 => "layout__region--header"], "method")), "html", null, true);
            echo ">
    ";
            // line 37
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "header", [])), "html", null, true);
            echo "
  </div>
  ";
        }
        // line 40
        echo "
  ";
        // line 41
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "top", [])))))) {
            // line 42
            echo "      <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "top", []), "addClass", [0 => "layout__region", 1 => "layout__region--top"], "method")), "html", null, true);
            echo ">
        ";
            // line 43
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "top", [])), "html", null, true);
            echo "
      </div>
  ";
        }
        // line 46
        echo "
  ";
        // line 47
        if (( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "content", []))))) ||  !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "footer", []))))))) {
            // line 48
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "content", []), "addClass", [0 => "layout__region", 1 => "layout__region--content"], "method")), "html", null, true);
            echo ">
      <div class=\"container\">
        ";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "content", [])), "html", null, true);
            echo "
        ";
            // line 51
            if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "footer", [])))))) {
                // line 52
                echo "          <div class=\"layout__region layout__region--footer-float\">
            ";
                // line 53
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "footer", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 56
            echo "      </div>
    </div>
  ";
        }
        // line 59
        echo "
  ";
        // line 60
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "bottom", [])))))) {
            // line 61
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "bottom", []), "addClass", [0 => "layout__region", 1 => "layout__region--bottom"], "method")), "html", null, true);
            echo ">
      ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "bottom", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if ( !twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "footer", [])))))) {
            // line 67
            echo "    <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "footer", []), "addClass", [0 => "layout__region", 1 => "layout__region--footer"], "method")), "html", null, true);
            echo ">
      <div class=\"container\">
        ";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "footer", [])), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 73
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/qrida_layouts/templates/qrida-1col-fluid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 73,  170 => 69,  164 => 67,  162 => 66,  159 => 65,  153 => 62,  148 => 61,  146 => 60,  143 => 59,  138 => 56,  132 => 53,  129 => 52,  127 => 51,  123 => 50,  117 => 48,  115 => 47,  112 => 46,  106 => 43,  101 => 42,  99 => 41,  96 => 40,  89 => 37,  84 => 35,  82 => 34,  79 => 33,  73 => 30,  70 => 29,  68 => 28,  63 => 26,  60 => 25,  58 => 17,  55 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/qrida_layouts/templates/qrida-1col-fluid.html.twig", "/home/ubuntu/sites/qrida-website/docroot/modules/custom/qrida_layouts/templates/qrida-1col-fluid.html.twig");
    }
}
