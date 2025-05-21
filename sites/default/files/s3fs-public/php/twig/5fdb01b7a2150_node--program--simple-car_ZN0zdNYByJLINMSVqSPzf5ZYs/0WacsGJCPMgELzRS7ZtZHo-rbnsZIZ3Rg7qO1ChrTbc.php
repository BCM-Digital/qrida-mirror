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

/* themes/custom/govcms8_uikit_starter/templates/content/node--program--simple-card.html.twig */
class __TwigTemplate_bf61fb422caf75f54f0ae740ee69193be0eb29b1f800246913ce1571e725d550 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 44, "if" => 72, "include" => 73];
        $filters = ["clean_class" => 44, "escape" => 87];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
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
        // line 43
        echo "
";
        // line 44
        $context["view_mode"] = ((($context["view_mode"] ?? null)) ? (("node--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("node--view-mode--default"));
        // line 45
        echo "
";
        // line 47
        $context["classes"] = [0 =>         // line 48
($context["view_mode"] ?? null), 1 => "au-body", 2 => "au-card", 3 => "au-card--clickable"];
        // line 54
        echo "
";
        // line 56
        $context["content_classes"] = [0 => ($this->sandbox->ensureToStringAllowed(        // line 57
($context["view_mode"] ?? null)) . "__content"), 1 => "au-card__inner"];
        // line 61
        echo "
";
        // line 63
        $context["title_classes"] = [0 => "au-card__title"];
        // line 67
        echo "
";
        // line 68
        $context["category"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_category", []), 0, []), "#plain_text", [], "array");
        // line 69
        $context["icon_color"] = "#CB6526";
        // line 70
        echo "
";
        // line 71
        ob_start(function () { return ''; });
        // line 72
        echo "  ";
        if ((($context["category"] ?? null) == "Farm Debt Services")) {
            // line 73
            echo "    ";
            $this->loadTemplate((($context["directory"] ?? null) . "/assets/svgs/arrow.svg"), "themes/custom/govcms8_uikit_starter/templates/content/node--program--simple-card.html.twig", 73)->display(twig_array_merge($context, ["fill" => ($context["icon_color"] ?? null)]));
            // line 74
            echo "  ";
        } elseif ((((($context["category"] ?? null) == "Grant") || (($context["category"] ?? null) == "Subsidy")) || (($context["category"] ?? null) == "Rebate"))) {
            // line 75
            echo "    ";
            $this->loadTemplate((($context["directory"] ?? null) . "/assets/svgs/clipboard.svg"), "themes/custom/govcms8_uikit_starter/templates/content/node--program--simple-card.html.twig", 75)->display(twig_array_merge($context, ["fill" => ($context["icon_color"] ?? null)]));
            // line 76
            echo "  ";
        } elseif ((($context["category"] ?? null) == "Loan")) {
            // line 77
            echo "    ";
            $this->loadTemplate((($context["directory"] ?? null) . "/assets/svgs/loan.svg"), "themes/custom/govcms8_uikit_starter/templates/content/node--program--simple-card.html.twig", 77)->display(twig_array_merge($context, ["fill" => ($context["icon_color"] ?? null)]));
            // line 78
            echo "  ";
        } elseif (((($context["category"] ?? null) == "News") || (($context["category"] ?? null) == "Media Release"))) {
            // line 79
            echo "    ";
            $this->loadTemplate((($context["directory"] ?? null) . "/assets/svgs/news.svg"), "themes/custom/govcms8_uikit_starter/templates/content/node--program--simple-card.html.twig", 79)->display(twig_array_merge($context, ["fill" => ($context["icon_color"] ?? null)]));
            // line 80
            echo "  ";
        } elseif ((($context["category"] ?? null) == "Client Story")) {
            // line 81
            echo "    ";
            $this->loadTemplate((($context["directory"] ?? null) . "/assets/svgs/stories.svg"), "themes/custom/govcms8_uikit_starter/templates/content/node--program--simple-card.html.twig", 81)->display(twig_array_merge($context, ["fill" => ($context["icon_color"] ?? null)]));
            // line 82
            echo "  ";
        } elseif (($this->getAttribute(($context["node"] ?? null), "bundle", []) == "event")) {
            // line 83
            echo "    ";
            $this->loadTemplate((($context["directory"] ?? null) . "/assets/svgs/calendar.svg"), "themes/custom/govcms8_uikit_starter/templates/content/node--program--simple-card.html.twig", 83)->display(twig_array_merge($context, ["fill" => ($context["icon_color"] ?? null)]));
            // line 84
            echo "  ";
        }
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 86
        echo "
<div ";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div ";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

    <div class=\"";
        // line 90
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null)), "html", null, true);
        echo "__top\">
      <div class=\"category--icon\">";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "html", null, true);
        echo "</div>
    </div>

    <div class=\"";
        // line 94
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null)), "html", null, true);
        echo "__bottom\">
      ";
        // line 95
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 96
            echo "        <div ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
            echo ">
          <a href=\"";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\" class=\"au-card--clickable__link\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
        </div>
      ";
        }
        // line 100
        echo "    </div>

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/templates/content/node--program--simple-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 100,  162 => 97,  157 => 96,  155 => 95,  151 => 94,  145 => 91,  141 => 90,  136 => 88,  132 => 87,  129 => 86,  125 => 84,  122 => 83,  119 => 82,  116 => 81,  113 => 80,  110 => 79,  107 => 78,  104 => 77,  101 => 76,  98 => 75,  95 => 74,  92 => 73,  89 => 72,  87 => 71,  84 => 70,  82 => 69,  80 => 68,  77 => 67,  75 => 63,  72 => 61,  70 => 57,  69 => 56,  66 => 54,  64 => 48,  63 => 47,  60 => 45,  58 => 44,  55 => 43,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/govcms8_uikit_starter/templates/content/node--program--simple-card.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/content/node--program--simple-card.html.twig");
    }
}
