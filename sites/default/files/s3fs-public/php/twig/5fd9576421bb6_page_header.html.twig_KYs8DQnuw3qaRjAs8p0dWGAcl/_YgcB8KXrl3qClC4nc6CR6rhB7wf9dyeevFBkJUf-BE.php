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

/* @govcms8_uikit_starter/inc/page_header.html.twig */
class __TwigTemplate_c81a68c70e3942b5de8e57ce891fc6132aea07e3a561c2e791207e989cc91de2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 2, "if" => 19];
        $filters = ["escape" => 15, "trim" => 25, "striptags" => 25, "render" => 25];
        $functions = ["create_attribute" => 2];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trim', 'striptags', 'render'],
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
        // line 2
        $context["header_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
        // line 3
        echo "
";
        // line 6
        $context["header_classes"] = [0 => "au-header", 1 => "au-header--alt", 2 => "au-header--hero", 3 => ((        // line 10
($context["header_style"] ?? null)) ? (($context["header_style"] ?? null)) : (""))];
        // line 13
        echo "
<div class=\"content-header\">
  <header ";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["header_attributes"] ?? null), "addClass", [0 => ($context["header_classes"] ?? null)], "method")), "html", null, true);
        echo ">
    <div class=\"container\">
      <div class=\"row\">

        ";
        // line 19
        if ($this->getAttribute(($context["page"] ?? null), "logo", [])) {
            // line 20
            echo "          <div class=\"col-xs-12 col-md-7\">
            ";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "logo", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 24
        echo "
        ";
        // line 25
        if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "search", []))))) {
            // line 26
            echo "          <div class=\"mt-3 search col-xs-12 col-md-5 d-flex justify-content-end align-items-center\">
            <a href=\"/contact-us\" class=\"pr-3 no-underline text-xs\">Contact us</a>
            ";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 31
        echo "
      </div>
    </div>
  </header>

  ";
        // line 36
        if ($this->getAttribute(($context["page"] ?? null), "navigation", [])) {
            // line 37
            echo "    <div class=\"navigation\">
      ";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 41
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "@govcms8_uikit_starter/inc/page_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 41,  112 => 38,  109 => 37,  107 => 36,  100 => 31,  94 => 28,  90 => 26,  88 => 25,  85 => 24,  79 => 21,  76 => 20,  74 => 19,  67 => 15,  63 => 13,  61 => 10,  60 => 6,  57 => 3,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@govcms8_uikit_starter/inc/page_header.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/inc/page_header.html.twig");
    }
}
