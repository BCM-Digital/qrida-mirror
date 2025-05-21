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

/* themes/custom/govcms8_uikit_starter/templates/form/form-element.html.twig */
class __TwigTemplate_653cecac55665e6c25755c5eb9890a761fb0272c945ff4792b60319302a69e6f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 48, "if" => 70];
        $filters = ["clean_class" => 51, "escape" => 69];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
        // line 48
        $context["classes"] = [0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 51
($context["type"] ?? null)))), 3 => ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["type"] ?? null)))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["name"] ?? null)))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["name"] ?? null)))), 6 => ((!twig_in_filter(        // line 55
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 7 => (((        // line 56
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 8 => ((        // line 57
($context["errors"] ?? null)) ? ("form-item--error") : ("")), 9 => "au-form-group", 10 => ((        // line 59
($context["errors"] ?? null)) ? ("au-form-group--invalid") : (""))];
        // line 63
        $context["description_classes"] = [0 => "description", 1 => (((        // line 65
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : ("")), 2 => "au-hint-text"];
        // line 69
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 70
        if (((($context["type"] ?? null) == "checkbox") || (($context["type"] ?? null) == "radio"))) {
            // line 71
            echo "    <label class=\"au-control-input\">
      ";
            // line 72
            if ((($context["label_display"] ?? null) == "before")) {
                // line 73
                echo "        <span class=\"au-control-input__text\">
          ";
                // line 74
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["label"] ?? null), "#title", [], "array")), "html", null, true);
                echo "
        </span>
      ";
            }
            // line 77
            echo "      ";
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 78
                echo "        <span class=\"field-prefix\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true);
                echo "</span>
      ";
            }
            // line 80
            echo "      ";
            if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", []))) {
                // line 81
                echo "        <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "attributes", [])), "html", null, true);
                echo ">
          ";
                // line 82
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 85
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
            echo "
      ";
            // line 86
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 87
                echo "        <span class=\"field-suffix\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
                echo "</span>
      ";
            }
            // line 89
            echo "      ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 90
                echo "        <span class=\"au-control-input__text\">
          ";
                // line 91
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["label"] ?? null), "#title", [], "array")), "html", null, true);
                echo "
        </span>
      ";
            }
            // line 94
            echo "    </label>
    ";
            // line 95
            if (($context["errors"] ?? null)) {
                // line 96
                echo "      <div class=\"form-item--error-message au-error-text\">
        <span>";
                // line 97
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true);
                echo "</span>
      </div>
    ";
            }
            // line 100
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && $this->getAttribute(($context["description"] ?? null), "content", []))) {
                // line 101
                echo "      <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true);
                echo ">
        ";
                // line 102
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 105
            echo "
    ";
            // line 107
            echo "  ";
        } else {
            // line 108
            echo "    ";
            if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
                // line 109
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                echo "
    ";
            }
            // line 111
            echo "    ";
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 112
                echo "      <span class=\"field-prefix\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null)), "html", null, true);
                echo "</span>
    ";
            }
            // line 114
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", []))) {
                // line 115
                echo "      <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "attributes", [])), "html", null, true);
                echo ">
        ";
                // line 116
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 119
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null)), "html", null, true);
            echo "
    ";
            // line 120
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 121
                echo "      <span class=\"field-suffix\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null)), "html", null, true);
                echo "</span>
    ";
            }
            // line 123
            echo "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 124
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                echo "
    ";
            }
            // line 126
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 127
                echo "      <div class=\"form-item--error-message au-error-text\">
        <span>";
                // line 128
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null)), "html", null, true);
                echo "</span>
      </div>
    ";
            }
            // line 131
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && $this->getAttribute(($context["description"] ?? null), "content", []))) {
                // line 132
                echo "      <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["description"] ?? null), "attributes", []), "addClass", [0 => ($context["description_classes"] ?? null)], "method")), "html", null, true);
                echo ">
        ";
                // line 133
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["description"] ?? null), "content", [])), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 136
            echo "  ";
        }
        // line 137
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 137,  251 => 136,  245 => 133,  240 => 132,  237 => 131,  231 => 128,  228 => 127,  225 => 126,  219 => 124,  216 => 123,  210 => 121,  208 => 120,  203 => 119,  197 => 116,  192 => 115,  189 => 114,  183 => 112,  180 => 111,  174 => 109,  171 => 108,  168 => 107,  165 => 105,  159 => 102,  154 => 101,  151 => 100,  145 => 97,  142 => 96,  140 => 95,  137 => 94,  131 => 91,  128 => 90,  125 => 89,  119 => 87,  117 => 86,  112 => 85,  106 => 82,  101 => 81,  98 => 80,  92 => 78,  89 => 77,  83 => 74,  80 => 73,  78 => 72,  75 => 71,  73 => 70,  68 => 69,  66 => 65,  65 => 63,  63 => 59,  62 => 57,  61 => 56,  60 => 55,  59 => 54,  58 => 53,  57 => 52,  56 => 51,  55 => 48,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/govcms8_uikit_starter/templates/form/form-element.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/form/form-element.html.twig");
    }
}
