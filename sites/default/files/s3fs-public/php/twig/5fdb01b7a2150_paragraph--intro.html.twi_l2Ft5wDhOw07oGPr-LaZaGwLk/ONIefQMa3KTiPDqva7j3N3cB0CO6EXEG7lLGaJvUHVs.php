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

/* themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--intro.html.twig */
class __TwigTemplate_35345883eda74e2c6c786685e552bbaddc5fe55686536289eaac9fbda634e3d0 extends \Twig\Template
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
        $tags = ["set" => 42, "if" => 63, "block" => 67];
        $filters = ["clean_class" => 43, "escape" => 68];
        $functions = ["create_attribute" => 42];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape'],
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
        // line 41
        echo "
";
        // line 42
        $context["content_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
        // line 43
        $context["view_mode"] = ((($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""));
        // line 44
        $context["type"] = ((($context["view_mode"] ?? null)) ? (("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["paragraph"] ?? null), "bundle", []))))) : (""));
        // line 45
        echo "
";
        // line 47
        $context["classes"] = [0 => "paragraph", 1 => (( !$this->getAttribute(        // line 49
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : ("")), 2 =>         // line 50
($context["type"] ?? null), 3 =>         // line 51
($context["view_mode"] ?? null)];
        // line 55
        $context["content_classes"] = [0 => ($this->sandbox->ensureToStringAllowed(        // line 56
($context["type"] ?? null)) . "__content"), 1 => "row"];
        // line 60
        echo "
";
        // line 61
        $context["media"] = $this->getAttribute(($context["content"] ?? null), "field_image", []);
        // line 62
        echo "
";
        // line 63
        if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video", []), 0, []), "#media", [], "array"))) {
            // line 64
            echo "  ";
            $context["media"] = $this->getAttribute(($context["content"] ?? null), "field_video", []);
        }
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 68
        echo "<div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div class=\"container\">
    <div ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

      ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 80
        echo "
    </div>
  </div>
</div>
";
    }

    // line 72
    public function block_content($context, array $blocks = [])
    {
        // line 73
        echo "      <div class=\"col-xs-12 col-sm-6 au-display-xlg ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null)), "html", null, true);
        echo "__left\">
        ";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_body", [])), "html", null, true);
        echo "
      </div>
      <div class=\"col-xs-12 col-sm-6 ";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null)), "html", null, true);
        echo "__right\">
        ";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["media"] ?? null)), "html", null, true);
        echo "
      </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 77,  134 => 76,  129 => 74,  124 => 73,  121 => 72,  113 => 80,  111 => 72,  106 => 70,  100 => 68,  94 => 67,  91 => 66,  87 => 64,  85 => 63,  82 => 62,  80 => 61,  77 => 60,  75 => 56,  74 => 55,  72 => 51,  71 => 50,  70 => 49,  69 => 47,  66 => 45,  64 => 44,  62 => 43,  60 => 42,  57 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--intro.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--intro.html.twig");
    }
}
