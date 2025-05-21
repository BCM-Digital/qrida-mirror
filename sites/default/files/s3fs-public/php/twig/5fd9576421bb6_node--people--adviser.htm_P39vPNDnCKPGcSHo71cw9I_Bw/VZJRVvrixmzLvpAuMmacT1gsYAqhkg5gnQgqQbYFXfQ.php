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

/* themes/custom/govcms8_uikit_starter/templates/content/node--people--adviser.html.twig */
class __TwigTemplate_4d013e769613f088ad4f949ef2a3fe35d8e65c36edacc2bc9f3b990d69a9739f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 44];
        $filters = ["clean_class" => 44, "escape" => 68];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
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
($context["view_mode"] ?? null), 1 => "au-card", 2 => "layout--m-space"];
        // line 53
        echo "
";
        // line 55
        $context["content_classes"] = [0 => ($this->sandbox->ensureToStringAllowed(        // line 56
($context["view_mode"] ?? null)) . "__content"), 1 => "layout--all-space"];
        // line 60
        echo "
";
        // line 62
        $context["title_classes"] = [0 => ($this->sandbox->ensureToStringAllowed(        // line 63
($context["view_mode"] ?? null)) . "__title"), 1 => "title"];
        // line 67
        echo "
<div ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

    <div class=\"";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null)), "html", null, true);
        echo "__top\">
      <h5 ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
        echo ">
        ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
        echo "
      </h5>
      ";
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
        echo "
    </div>

    <div class=\"";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null)), "html", null, true);
        echo "__bottom\">
      <div>
        ";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_phone", [])), "html", null, true);
        echo "
        ";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_mobile", [])), "html", null, true);
        echo "
        ";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_email", [])), "html", null, true);
        echo "
      </div>
      <div>
        ";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_accreditation_type", [])), "html", null, true);
        echo "
        ";
        // line 86
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_accreditation_number", [])), "html", null, true);
        echo "
        ";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_associations", [])), "html", null, true);
        echo "
        ";
        // line 88
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_operating_regions_list", [])), "html", null, true);
        echo "
        ";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profession_list", [])), "html", null, true);
        echo "
      </div>
      <div>
        ";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_summary", [])), "html", null, true);
        echo "
        ";
        // line 93
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_company_name", [])), "html", null, true);
        echo "
        ";
        // line 94
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_company_website", [])), "html", null, true);
        echo "
      </div>
      <div>
        ";
        // line 97
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_profession_list", [])), "html", null, true);
        echo "
        ";
        // line 98
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_experience_years", [])), "html", null, true);
        echo "
        ";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_text", [])), "html", null, true);
        echo "
      </div>
    </div>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/templates/content/node--people--adviser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 99,  168 => 98,  164 => 97,  158 => 94,  154 => 93,  150 => 92,  144 => 89,  140 => 88,  136 => 87,  132 => 86,  128 => 85,  122 => 82,  118 => 81,  114 => 80,  109 => 78,  103 => 75,  98 => 73,  94 => 72,  90 => 71,  85 => 69,  81 => 68,  78 => 67,  76 => 63,  75 => 62,  72 => 60,  70 => 56,  69 => 55,  66 => 53,  64 => 48,  63 => 47,  60 => 45,  58 => 44,  55 => 43,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/govcms8_uikit_starter/templates/content/node--people--adviser.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/content/node--people--adviser.html.twig");
    }
}
