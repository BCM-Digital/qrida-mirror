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

/* themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--item.html.twig */
class __TwigTemplate_d633774d4aa97d5b5a05d5e3fa2b28dc519d82761fe897b8219803c324ebeebb extends \Twig\Template
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
        $tags = ["set" => 42, "block" => 68];
        $filters = ["clean_class" => 43, "escape" => 69];
        $functions = ["create_attribute" => 42];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
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
        echo "
";
        // line 46
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 48
($context["paragraph"] ?? null), "bundle", [])))), 2 => (( !$this->getAttribute(        // line 49
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : ("")), 3 =>         // line 50
($context["view_mode"] ?? null), 4 => "au-body", 5 => "au-card", 6 => "au-card--centred"];
        // line 57
        $context["content_classes"] = [0 => ($this->sandbox->ensureToStringAllowed(        // line 58
($context["view_mode"] ?? null)) . "__content"), 1 => "au-card__inner"];
        // line 63
        $context["title_classes"] = [0 => "au-card__title"];
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 69
        echo "<div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

    ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 79
        echo "
  </div>
</div>
";
    }

    // line 72
    public function block_content($context, array $blocks = [])
    {
        // line 73
        echo "    <div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
        echo ">
      <h3>";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_heading", [])), "html", null, true);
        echo "</h3>
    </div>

    ";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_item_summary", [])), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 77,  113 => 74,  108 => 73,  105 => 72,  98 => 79,  96 => 72,  91 => 70,  86 => 69,  80 => 68,  77 => 67,  75 => 63,  73 => 58,  72 => 57,  70 => 50,  69 => 49,  68 => 48,  67 => 46,  64 => 44,  62 => 43,  60 => 42,  57 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--item.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--item.html.twig");
    }
}
