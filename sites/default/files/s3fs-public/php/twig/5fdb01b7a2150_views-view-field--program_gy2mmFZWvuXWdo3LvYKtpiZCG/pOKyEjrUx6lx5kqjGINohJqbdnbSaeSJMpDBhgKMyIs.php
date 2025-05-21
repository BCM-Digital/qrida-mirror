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

/* themes/custom/govcms8_uikit_starter/templates/views/views-view-field--program-display--field-category.html.twig */
class __TwigTemplate_2be6bd1018df6f0c56d5e20473aa65d931e41d2e07c1f74f2ffb30c99344daeb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 23, "if" => 29, "include" => 30];
        $filters = ["escape" => 44];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['escape'],
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
        // line 23
        $context["view_mode"] = "view-id--program-display__items";
        // line 24
        echo "
";
        // line 25
        $context["category"] = ($context["output"] ?? null);
        // line 26
        $context["icon_color"] = "#CB6526";
        // line 27
        echo "
";
        // line 28
        ob_start(function () { return ''; });
        // line 29
        echo "  ";
        if ((($context["category"] ?? null) == "Farm Debt Services")) {
            // line 30
            echo "    ";
            $this->loadTemplate((($context["directory"] ?? null) . "/assets/svgs/arrow.svg"), "themes/custom/govcms8_uikit_starter/templates/views/views-view-field--program-display--field-category.html.twig", 30)->display(twig_array_merge($context, ["fill" => ($context["icon_color"] ?? null)]));
            // line 31
            echo "  ";
        } elseif ((((($context["category"] ?? null) == "Grant") || (($context["category"] ?? null) == "Subsidy")) || (($context["category"] ?? null) == "Rebate"))) {
            // line 32
            echo "    ";
            $this->loadTemplate((($context["directory"] ?? null) . "/assets/svgs/clipboard.svg"), "themes/custom/govcms8_uikit_starter/templates/views/views-view-field--program-display--field-category.html.twig", 32)->display(twig_array_merge($context, ["fill" => ($context["icon_color"] ?? null)]));
            // line 33
            echo "  ";
        } elseif ((($context["category"] ?? null) == "Loan")) {
            // line 34
            echo "    ";
            $this->loadTemplate((($context["directory"] ?? null) . "/assets/svgs/loan.svg"), "themes/custom/govcms8_uikit_starter/templates/views/views-view-field--program-display--field-category.html.twig", 34)->display(twig_array_merge($context, ["fill" => ($context["icon_color"] ?? null)]));
            // line 35
            echo "  ";
        } elseif (((($context["category"] ?? null) == "News") || (($context["category"] ?? null) == "Media Release"))) {
            // line 36
            echo "    ";
            $this->loadTemplate((($context["directory"] ?? null) . "/assets/svgs/news.svg"), "themes/custom/govcms8_uikit_starter/templates/views/views-view-field--program-display--field-category.html.twig", 36)->display(twig_array_merge($context, ["fill" => ($context["icon_color"] ?? null)]));
            // line 37
            echo "  ";
        } elseif ((($context["category"] ?? null) == "Client Story")) {
            // line 38
            echo "    ";
            $this->loadTemplate((($context["directory"] ?? null) . "/assets/svgs/stories.svg"), "themes/custom/govcms8_uikit_starter/templates/views/views-view-field--program-display--field-category.html.twig", 38)->display(twig_array_merge($context, ["fill" => ($context["icon_color"] ?? null)]));
            // line 39
            echo "  ";
        } elseif (($this->getAttribute(($context["node"] ?? null), "bundle", []) == "event")) {
            // line 40
            echo "    ";
            $this->loadTemplate((($context["directory"] ?? null) . "/assets/svgs/calendar.svg"), "themes/custom/govcms8_uikit_starter/templates/views/views-view-field--program-display--field-category.html.twig", 40)->display(twig_array_merge($context, ["fill" => ($context["icon_color"] ?? null)]));
            // line 41
            echo "  ";
        }
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 43
        echo "
<div class=\"";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null)), "html", null, true);
        echo "__top\">
  <div class=\"category--icon\">";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/templates/views/views-view-field--program-display--field-category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 45,  112 => 44,  109 => 43,  105 => 41,  102 => 40,  99 => 39,  96 => 38,  93 => 37,  90 => 36,  87 => 35,  84 => 34,  81 => 33,  78 => 32,  75 => 31,  72 => 30,  69 => 29,  67 => 28,  64 => 27,  62 => 26,  60 => 25,  57 => 24,  55 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/govcms8_uikit_starter/templates/views/views-view-field--program-display--field-category.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/views/views-view-field--program-display--field-category.html.twig");
    }
}
