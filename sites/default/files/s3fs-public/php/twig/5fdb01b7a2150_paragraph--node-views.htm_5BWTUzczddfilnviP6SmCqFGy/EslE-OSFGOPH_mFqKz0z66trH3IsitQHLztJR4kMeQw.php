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

/* themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--node-views.html.twig */
class __TwigTemplate_c7e74fbfa66d9421038b562e29659ad21893d126622421c49a4d09a170b1b380 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "if" => 70, "block" => 82];
        $filters = ["clean_class" => 44, "t" => 73, "escape" => 83];
        $functions = ["create_attribute" => 42, "drupal_link" => 73];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 't', 'escape'],
                ['create_attribute', 'drupal_link']
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
        // line 41
        echo "
";
        // line 42
        $context["content_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
        // line 43
        $context["content_inner_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
        // line 44
        $context["view_mode"] = ((($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""));
        // line 45
        echo "
";
        // line 47
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 49
($context["paragraph"] ?? null), "bundle", [])))), 2 => (( !$this->getAttribute(        // line 50
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : ("")), 3 =>         // line 51
($context["view_mode"] ?? null), 4 => "layout--space"];
        // line 56
        $context["content_classes"] = [0 => ($this->sandbox->ensureToStringAllowed(        // line 57
($context["view_mode"] ?? null)) . "__content"), 1 => "container"];
        // line 61
        echo "
";
        // line 62
        $context["title_class"] = "layout--center";
        // line 63
        $context["content_class"] = "layout__content";
        // line 64
        echo "
";
        // line 65
        $context["content_attributes"] = $this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method");
        // line 66
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method");
        // line 67
        echo "
";
        // line 68
        $context["display_id"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_views_reference", []), "#items", [], "array"), 0, [], "array"), "value", []), "display_id", [], "array");
        // line 69
        echo "
";
        // line 70
        if ((($context["display_id"] ?? null) == "block_related_faq")) {
            // line 71
            echo "  ";
            $context["title_class"] = "col-xs-12 col-md-4";
            // line 72
            echo "  ";
            $context["content_class"] = "col-xs-12 col-md-8";
            // line 73
            echo "  ";
            $context["view_more"] = $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalLink(t("View all FAQs"), "tools-resources/faqs");
        }
        // line 75
        echo "
";
        // line 76
        if ((((($context["display_id"] ?? null) == "block_all_rams") || (($context["display_id"] ?? null) == "block_all_mediators")) || (($context["display_id"] ?? null) == "block_all_advisers"))) {
            // line 77
            echo "  ";
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "layout"], "method");
            // line 78
            echo "  ";
            $context["content_attributes"] = $this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "au-card"], "method");
            // line 79
            echo "  ";
            $context["content_inner_attributes"] = $this->getAttribute(($context["content_inner_attributes"] ?? null), "addClass", [0 => "layout--all-space"], "method");
        }
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 83
        echo "<div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  <div ";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null)), "html", null, true);
        echo ">
    <div ";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_inner_attributes"] ?? null)), "html", null, true);
        echo ">

      ";
        // line 87
        $this->displayBlock('content', $context, $blocks);
        // line 96
        echo "
    </div>
  </div>
</div>
";
    }

    // line 87
    public function block_content($context, array $blocks = [])
    {
        // line 88
        echo "        <div class=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_class"] ?? null)), "html", null, true);
        echo "\">
          ";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_heading", [])), "html", null, true);
        echo "
          ";
        // line 90
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_more"] ?? null)), "html", null, true);
        echo "
        </div>
        <div class=\"";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_class"] ?? null)), "html", null, true);
        echo "\">
          ";
        // line 93
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_views_reference", [])), "html", null, true);
        echo "
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--node-views.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 93,  176 => 92,  171 => 90,  167 => 89,  162 => 88,  159 => 87,  151 => 96,  149 => 87,  144 => 85,  140 => 84,  135 => 83,  129 => 82,  126 => 81,  122 => 79,  119 => 78,  116 => 77,  114 => 76,  111 => 75,  107 => 73,  104 => 72,  101 => 71,  99 => 70,  96 => 69,  94 => 68,  91 => 67,  89 => 66,  87 => 65,  84 => 64,  82 => 63,  80 => 62,  77 => 61,  75 => 57,  74 => 56,  72 => 51,  71 => 50,  70 => 49,  69 => 47,  66 => 45,  64 => 44,  62 => 43,  60 => 42,  57 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--node-views.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--node-views.html.twig");
    }
}
