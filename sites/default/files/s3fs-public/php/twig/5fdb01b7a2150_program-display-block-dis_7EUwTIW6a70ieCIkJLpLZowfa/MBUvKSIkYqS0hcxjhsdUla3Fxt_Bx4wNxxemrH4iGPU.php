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

/* @govcms8_uikit_starter/views/program-display-block-disaster-list.html.twig */
class __TwigTemplate_e3bdb8c3bf6f558958b48a774407c7e72d57ce23e997796cb586b0042055b8af extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 21, "if" => 39, "for" => 44];
        $filters = ["escape" => 40];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
        // line 20
        echo "
";
        // line 21
        $context["view_mode"] = "view-id--program-display__items";
        // line 22
        echo "
";
        // line 24
        $context["classes"] = [0 =>         // line 25
($context["view_mode"] ?? null), 1 => "au-body", 2 => "au-card", 3 => "au-card--clickable"];
        // line 31
        echo "
";
        // line 33
        $context["content_classes"] = [0 => ($this->sandbox->ensureToStringAllowed(        // line 34
($context["view_mode"] ?? null)) . "__content"), 1 => "au-card__inner"];
        // line 38
        echo "
";
        // line 39
        if (($context["title"] ?? null)) {
            // line 40
            echo "  <h3>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
";
        }
        // line 42
        echo "
<ul class=\"au-card-list au-card-list--matchheight\">
";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 45
            echo "  ";
            // line 46
            $context["row_classes"] = [0 => ((            // line 47
($context["default_row_class"] ?? null)) ? ("views-row") : ("")), 1 => "col-xs-6 col-sm-4"];
            // line 51
            echo "  <li ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null)], "method")), "html", null, true);
            echo ">
    <div ";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
      <div ";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
            // line 55
            echo "</div>
    </div>
  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "@govcms8_uikit_starter/views/program-display-block-disaster-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 59,  110 => 55,  108 => 54,  105 => 53,  101 => 52,  96 => 51,  94 => 47,  93 => 46,  91 => 45,  87 => 44,  83 => 42,  77 => 40,  75 => 39,  72 => 38,  70 => 34,  69 => 33,  66 => 31,  64 => 25,  63 => 24,  60 => 22,  58 => 21,  55 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@govcms8_uikit_starter/views/program-display-block-disaster-list.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/views/program-display-block-disaster-list.html.twig");
    }
}
