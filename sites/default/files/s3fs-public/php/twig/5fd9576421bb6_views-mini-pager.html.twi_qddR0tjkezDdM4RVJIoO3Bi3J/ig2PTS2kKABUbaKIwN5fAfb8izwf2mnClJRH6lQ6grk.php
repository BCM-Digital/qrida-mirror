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

/* themes/custom/govcms8_uikit_starter/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_d0d356bfb7b8bb6c7f82a9f6ffaccfd9e8b62149f4d2de6b366b0cab4aae81ce extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 12, "trans" => 27];
        $filters = ["t" => 14, "escape" => 18, "without" => 18, "default" => 21];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'trans'],
                ['t', 'escape', 'without', 'default'],
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
        // line 12
        if (($this->getAttribute(($context["items"] ?? null), "previous", []) || $this->getAttribute(($context["items"] ?? null), "next", []))) {
            // line 13
            echo "  <nav class=\"pager\" aria-labelledby=\"pagination-heading\">
    <h4 class=\"pager__heading visually-hidden\">";
            // line 14
            echo t("Pagination");
            echo "</h4>
    <ul class=\"pager__items js-pager__items au-link-list au-link-list--inline\">
      ";
            // line 16
            if ($this->getAttribute(($context["items"] ?? null), "previous", [])) {
                // line 17
                echo "        <li class=\"pager__item\">
          <a class=\"au-direction-link\" href=\"";
                // line 18
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page"));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"au-direction-link__arrow au-direction-link__arrow--left\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">";
                // line 20
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 21
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", [], "any", false, true), "text", [])), t("Previous"))) : (t("Previous"))), "html", null, true);
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 25
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "current", [])) {
                // line 26
                echo "        <li class=\"pager__item is-active\">
          ";
                // line 27
                echo t("Page @items.current", array("@items.current" => $this->getAttribute(                // line 28
($context["items"] ?? null), "current", []), ));
                // line 30
                echo "        </li>
      ";
            }
            // line 32
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "next", [])) {
                // line 33
                echo "        <li class=\"pager__item\">
          <a class=\"au-direction-link\" href=\"";
                // line 34
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "href", [])), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page"));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", []), "attributes", [])), "href", "title", "rel"), "html", null, true);
                echo ">
            <span class=\"visually-hidden\">";
                // line 35
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page"));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 36
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [], "any", true, true)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", [], "any", false, true), "text", [])), t("Next"))) : (t("Next"))), "html", null, true);
                echo "</span>
            <span class=\"au-direction-link__arrow au-direction-link__arrow--right\" aria-hidden=\"true\"></span>
          </a>
        </li>
      ";
            }
            // line 41
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 41,  121 => 36,  117 => 35,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  97 => 28,  96 => 27,  93 => 26,  90 => 25,  83 => 21,  79 => 20,  70 => 18,  67 => 17,  65 => 16,  60 => 14,  57 => 13,  55 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/govcms8_uikit_starter/templates/views/views-mini-pager.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/views/views-mini-pager.html.twig");
    }
}
