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

/* @govcms8_uikit_starter/inc/page_footer.html.twig */
class __TwigTemplate_1807dbadd28fd91fd2d4e3029877c1baa70903e6a5ef8787622188a0c6114a3f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 15];
        $filters = ["escape" => 10, "date" => 26];
        $functions = ["create_attribute" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'date'],
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
        // line 1
        $context["footer_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
        // line 2
        echo "
";
        // line 4
        $context["footer_classes"] = [0 => "au-footer", 1 => "au-footer--dark"];
        // line 9
        echo "
<footer";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["footer_attributes"] ?? null), "addClass", [0 => ($context["footer_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <a href=\"#top\" title=\"Back to top\" class=\"back-to-top__link au-direction-link\">
    <span class=\"au-direction-link__arrow au-direction-link__arrow--up\" aria-hidden=\"true\"></span>
  </a>

  ";
        // line 15
        if ($this->getAttribute(($context["page"] ?? null), "footer_top", [])) {
            // line 16
            echo "    <div class=\"au-footer__top\">
      ";
            // line 17
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 20
        echo "
  ";
        // line 21
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 22
            echo "    <div class=\"au-footer__bottom container\">
      ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
      <div>
        <div>
          © The State of Queensland (Department of Agriculture, Water and the Environment) 2020–";
            // line 26
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo "
        </div>
        <div>
          <a href=\"http://www.qld.gov.au/\" target=\"_blank\">Queensland Government</a>
        </div>
      </div>
    </div>
  ";
        }
        // line 34
        echo "
</footer>
";
    }

    public function getTemplateName()
    {
        return "@govcms8_uikit_starter/inc/page_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 34,  98 => 26,  92 => 23,  89 => 22,  87 => 21,  84 => 20,  78 => 17,  75 => 16,  73 => 15,  65 => 10,  62 => 9,  60 => 4,  57 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@govcms8_uikit_starter/inc/page_footer.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/inc/page_footer.html.twig");
    }
}
