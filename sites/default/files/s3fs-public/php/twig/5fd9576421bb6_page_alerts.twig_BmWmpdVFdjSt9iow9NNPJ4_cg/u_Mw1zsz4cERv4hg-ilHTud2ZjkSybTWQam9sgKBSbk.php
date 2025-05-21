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

/* @govcms8_uikit/page-alerts/page_alerts.twig */
class __TwigTemplate_4ed317084992e51c20a8ebfc868d12f592b8be9a5125a103a953bb6ab40fee11 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'heading' => [$this, 'block_heading'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 14, "if" => 15, "for" => 23];
        $filters = ["escape" => 13, "length" => 21, "first" => 28];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for'],
                ['escape', 'length', 'first'],
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
        // line 13
        echo "<div class=\"au-body au-page-alerts ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["modifier_class"] ?? null)), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 14
        $this->displayBlock('heading', $context, $blocks);
        // line 19
        echo "
  ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "</div>
";
    }

    // line 14
    public function block_heading($context, array $blocks = [])
    {
        // line 15
        echo "    ";
        if (($context["heading"] ?? null)) {
            // line 16
            echo "      <h3 class=\"visually-hidden\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading"] ?? null)), "html", null, true);
            echo "</h3>
    ";
        }
        // line 18
        echo "  ";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        // line 21
        echo "    ";
        if ((twig_length_filter($this->env, ($context["messages"] ?? null)) > 1)) {
            // line 22
            echo "      <ul>
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "          <li>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "      </ul>
    ";
        } else {
            // line 28
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null))), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "  ";
    }

    public function getTemplateName()
    {
        return "@govcms8_uikit/page-alerts/page_alerts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 30,  118 => 28,  114 => 26,  105 => 24,  101 => 23,  98 => 22,  95 => 21,  92 => 20,  88 => 18,  82 => 16,  79 => 15,  76 => 14,  71 => 31,  69 => 20,  66 => 19,  64 => 14,  57 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@govcms8_uikit/page-alerts/page_alerts.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/uikit/page-alerts/page_alerts.twig");
    }
}
