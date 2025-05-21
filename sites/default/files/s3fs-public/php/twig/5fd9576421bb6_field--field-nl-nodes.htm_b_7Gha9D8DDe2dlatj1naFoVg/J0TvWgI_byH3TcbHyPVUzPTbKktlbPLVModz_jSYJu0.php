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

/* themes/custom/govcms8_uikit_starter/templates/field/field--field-nl-nodes.html.twig */
class __TwigTemplate_e1ae1ebbcebf32667fe6dd61775a323669b5eb169c4febb11805e3a6ceed0b86 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 26, "if" => 43, "for" => 55];
        $filters = ["clean_class" => 28, "round" => 41, "length" => 41, "escape" => 49];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'round', 'length', 'escape'],
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
        // line 26
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 28
($context["field_name"] ?? null)))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 29
($context["field_type"] ?? null)))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 30
($context["label_display"] ?? null))), 4 => "container-fluid content"];
        // line 35
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 37
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 40
        echo "
";
        // line 41
        $context["items_grid"] = twig_round((12 / twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null)))), 0, "floor");
        // line 42
        echo "
";
        // line 43
        if ((twig_length_filter($this->env, ($context["items"] ?? null)) > 2)) {
            // line 44
            echo "  ";
            $context["items_grid"] = ($context["items_grid"] ?? null);
        }
        // line 46
        echo "
";
        // line 47
        $context["grid_cols"] = (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null))) > 2)) ? (("col-xs-12 col-sm-4 col-md-" . $this->sandbox->ensureToStringAllowed(($context["items_grid"] ?? null)))) : (("col-xs-12 col-sm-" . $this->sandbox->ensureToStringAllowed(($context["items_grid"] ?? null)))));
        // line 48
        echo "
<div ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 50
        if ( !($context["label_hidden"] ?? null)) {
            // line 51
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</div>
  ";
        }
        // line 53
        echo "  <div class=\"row\">
    <ul class=\"au-card-list au-card-list--matchheight\">
      ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            echo "        <li ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["grid_cols"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </ul>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/templates/field/field--field-nl-nodes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 58,  107 => 56,  103 => 55,  99 => 53,  91 => 51,  89 => 50,  85 => 49,  82 => 48,  80 => 47,  77 => 46,  73 => 44,  71 => 43,  68 => 42,  66 => 41,  63 => 40,  61 => 37,  60 => 35,  58 => 30,  57 => 29,  56 => 28,  55 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/govcms8_uikit_starter/templates/field/field--field-nl-nodes.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/field/field--field-nl-nodes.html.twig");
    }
}
