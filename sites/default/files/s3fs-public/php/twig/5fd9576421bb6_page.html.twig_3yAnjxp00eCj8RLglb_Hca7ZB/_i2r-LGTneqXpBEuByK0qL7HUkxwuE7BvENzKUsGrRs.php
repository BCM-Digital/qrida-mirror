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

/* themes/custom/govcms8_uikit_starter/templates/layout/page.html.twig */
class __TwigTemplate_221a604e9cef39254992a87b83106cd6f9cb72b11ee2bb2177d1a940dbe6bdf8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 46, "if" => 57, "include" => 63];
        $filters = ["escape" => 58];
        $functions = ["create_attribute" => 46, "attach_library" => 58];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['escape'],
                ['create_attribute', 'attach_library']
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
        // line 45
        echo "
";
        // line 46
        $context["layout_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
        // line 47
        $context["layout_classes"] = ((($context["is_node"] ?? null)) ? ("main-inner-content") : ("container layout--space"));
        // line 48
        echo "
";
        // line 50
        $context["classes"] = [0 => "au-body", 1 => "au-grid", 2 => ((        // line 53
($context["theme__highlighted_layouts"] ?? null)) ? (($context["theme__highlighted_layouts"] ?? null)) : (""))];
        // line 56
        echo "
";
        // line 57
        if (($context["theme__highlighted_layouts"] ?? null)) {
            // line 58
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("govcms8_uikit_starter/highlighted-layouts"), "html", null, true);
            echo "
";
        }
        // line 60
        echo "
<div";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 63
        echo "  ";
        $this->loadTemplate("@govcms8_uikit_starter/inc/page_header.html.twig", "themes/custom/govcms8_uikit_starter/templates/layout/page.html.twig", 63)->display($context);
        // line 64
        echo "
  ";
        // line 65
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 66
            echo "    <div class=\"help\">
      <div class=\"container\">
        ";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 72
        echo "
  ";
        // line 73
        if ($this->getAttribute(($context["page"] ?? null), "admin", [])) {
            // line 74
            echo "    <div class=\"admin-tasks\">
      ";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "admin", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 78
        echo "
  ";
        // line 79
        if (($this->getAttribute(($context["page"] ?? null), "content_top", []) &&  !($context["is_node"] ?? null))) {
            // line 80
            echo "    <div class=\"content-top\">
      <div class=\"container\">
        ";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
      </div>
    </div>
  ";
        }
        // line 86
        echo "
  ";
        // line 88
        echo "  <main>
    ";
        // line 90
        echo "    <a id=\"main-content\" tabindex=\"-1\"></a>
    ";
        // line 91
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 92
            echo "      <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["layout_attributes"] ?? null), "addClass", [0 => ($context["layout_classes"] ?? null)], "method")), "html", null, true);
            echo ">
        ";
            // line 93
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 96
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 97
            echo "      <div class=\"container\">
        ";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom", [])), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 101
        echo "  </main>

  ";
        // line 104
        echo "  ";
        $this->loadTemplate("@govcms8_uikit_starter/inc/page_footer.html.twig", "themes/custom/govcms8_uikit_starter/templates/layout/page.html.twig", 104)->display($context);
        // line 105
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 105,  173 => 104,  169 => 101,  163 => 98,  160 => 97,  157 => 96,  151 => 93,  146 => 92,  144 => 91,  141 => 90,  138 => 88,  135 => 86,  128 => 82,  124 => 80,  122 => 79,  119 => 78,  113 => 75,  110 => 74,  108 => 73,  105 => 72,  98 => 68,  94 => 66,  92 => 65,  89 => 64,  86 => 63,  82 => 61,  79 => 60,  73 => 58,  71 => 57,  68 => 56,  66 => 53,  65 => 50,  62 => 48,  60 => 47,  58 => 46,  55 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/govcms8_uikit_starter/templates/layout/page.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/layout/page.html.twig");
    }
}
