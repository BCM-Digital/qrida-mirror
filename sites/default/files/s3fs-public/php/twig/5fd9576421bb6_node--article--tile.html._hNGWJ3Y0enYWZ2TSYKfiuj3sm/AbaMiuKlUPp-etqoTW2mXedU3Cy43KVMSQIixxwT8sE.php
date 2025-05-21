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

/* themes/custom/govcms8_uikit_starter/templates/content/node--article--tile.html.twig */
class __TwigTemplate_4fad913e7f866ef57505cb8add1a9c216d986280d9cbe82fe15051be7fc5c3a5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 44, "if" => 79, "include" => 80];
        $filters = ["clean_class" => 45, "image_style" => 86, "escape" => 87, "striptags" => 89, "render" => 89, "length" => 90, "truncate" => 90];
        $functions = ["create_attribute" => 44];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'image_style', 'escape', 'striptags', 'render', 'length', 'truncate'],
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
        // line 43
        echo "
";
        // line 44
        $context["top_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
        // line 45
        $context["view_mode"] = ((($context["view_mode"] ?? null)) ? (("node--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("node--view-mode--default"));
        // line 46
        echo "
";
        // line 48
        $context["classes"] = [0 =>         // line 49
($context["view_mode"] ?? null), 1 => "au-body", 2 => "au-card", 3 => "au-card--clickable"];
        // line 55
        echo "
";
        // line 57
        $context["content_classes"] = [0 => ($this->sandbox->ensureToStringAllowed(        // line 58
($context["view_mode"] ?? null)) . "__content"), 1 => "au-card__inner"];
        // line 62
        echo "
";
        // line 64
        $context["title_classes"] = [0 => "au-card__title"];
        // line 68
        echo "
";
        // line 70
        $context["top_classes"] = [0 => ($this->sandbox->ensureToStringAllowed(        // line 71
($context["view_mode"] ?? null)) . "__top")];
        // line 74
        echo "
";
        // line 75
        $context["category"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_category", []), 0, []), "#plain_text", [], "array");
        // line 76
        $context["icon_color"] = "#CB6526";
        // line 77
        echo "
";
        // line 78
        ob_start(function () { return ''; });
        // line 79
        echo "  ";
        if (((($context["category"] ?? null) == "News") || (($context["category"] ?? null) == "Media Release"))) {
            // line 80
            echo "    ";
            $this->loadTemplate((($context["directory"] ?? null) . "/assets/svgs/news.svg"), "themes/custom/govcms8_uikit_starter/templates/content/node--article--tile.html.twig", 80)->display(twig_array_merge($context, ["fill" => ($context["icon_color"] ?? null)]));
            // line 81
            echo "  ";
        } elseif ((($context["category"] ?? null) == "Client Story")) {
            // line 82
            echo "    ";
            $this->loadTemplate((($context["directory"] ?? null) . "/assets/svgs/stories.svg"), "themes/custom/govcms8_uikit_starter/templates/content/node--article--tile.html.twig", 82)->display(twig_array_merge($context, ["fill" => ($context["icon_color"] ?? null)]));
            // line 83
            echo "  ";
        }
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 85
        echo "
";
        // line 86
        $context["image"] = $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->imageStyle($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_thumbnail", []), 0, [], "array"), "#media", [], "array"), "field_media_image", []), "entity", []), "uri", []), "value", [])), "medium_tall");
        // line 87
        $context["bg"] = (("background-image: url(" . $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null)))) . "); background-size: cover;background-position:center; height:200px;");
        // line 88
        echo "
";
        // line 89
        $context["body_text"] = strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", []))));
        // line 90
        $context["body"] = (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["body_text"] ?? null))) > 140)) ? ($this->env->getExtension('Drupal\twig_tweak\TwigExtension')->truncate($this->sandbox->ensureToStringAllowed(($context["body_text"] ?? null)), 140, true, "...")) : (($context["body_text"] ?? null)));
        // line 91
        echo "
<div ";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div ";
        // line 93
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

    <div ";
        // line 95
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["top_attributes"] ?? null), "addClass", [0 => ($context["top_classes"] ?? null)], "method"), "setAttribute", [0 => "style", 1 => ($context["bg"] ?? null)], "method")), "html", null, true);
        echo ">
      <div class=\"category--icon\">";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "html", null, true);
        echo "</div>
    </div>

    <div class=\"";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null)), "html", null, true);
        echo "__bottom\">
      ";
        // line 100
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 101
            echo "        <h5 ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
            echo ">
          <a href=\"";
            // line 102
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\" class=\"au-card--clickable__link\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
        </h5>
      ";
        }
        // line 105
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "
    </div>

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/templates/content/node--article--tile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 105,  160 => 102,  155 => 101,  153 => 100,  149 => 99,  143 => 96,  139 => 95,  134 => 93,  130 => 92,  127 => 91,  125 => 90,  123 => 89,  120 => 88,  118 => 87,  116 => 86,  113 => 85,  109 => 83,  106 => 82,  103 => 81,  100 => 80,  97 => 79,  95 => 78,  92 => 77,  90 => 76,  88 => 75,  85 => 74,  83 => 71,  82 => 70,  79 => 68,  77 => 64,  74 => 62,  72 => 58,  71 => 57,  68 => 55,  66 => 49,  65 => 48,  62 => 46,  60 => 45,  58 => 44,  55 => 43,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/govcms8_uikit_starter/templates/content/node--article--tile.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/content/node--article--tile.html.twig");
    }
}
