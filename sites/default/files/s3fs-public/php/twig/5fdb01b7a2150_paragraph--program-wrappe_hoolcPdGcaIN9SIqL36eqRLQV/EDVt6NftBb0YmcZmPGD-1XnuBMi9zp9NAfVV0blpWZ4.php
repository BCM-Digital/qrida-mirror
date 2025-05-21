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

/* themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--program-wrapper.html.twig */
class __TwigTemplate_49bfa43fca66a2c4c428119852003065ef239e97e80887fdd0f78121fad8809d extends \Twig\Template
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
        $tags = ["block" => 40, "if" => 41, "for" => 46];
        $filters = ["length" => 44, "escape" => 47];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for'],
                ['length', 'escape'],
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
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 41
        echo "  ";
        if (($context["tabs"] ?? null)) {
            // line 42
            echo "    <div class=\"container\">
      <div id=\"tabs\" class=\"ui-tabs layout--space\">
        ";
            // line 44
            if ((twig_length_filter($this->env, ($context["tabs"] ?? null)) > 1)) {
                // line 45
                echo "          <ul class=\"au-link-list au-link-list--inline ui-tabs__inline\">
            ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 47
                    echo "              <li><a href=\"#tabs-";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])), "html", null, true);
                    echo "\" class=\"au-btn au-btn--quaternary\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["tab"]), "html", null, true);
                    echo "</a></li>
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "          </ul>
        ";
            }
            // line 51
            echo "        <div class=\"ui-tabs__panel\">
        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs_content"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cont"]) {
                // line 53
                echo "          <div id=\"tabs-";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["loop"], "index", [])), "html", null, true);
                echo "\">
            ";
                // line 54
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["cont"]), "html", null, true);
                echo "
          </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cont'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        </div>
      </div>
    </div>
  ";
        } else {
            // line 61
            echo "    ";
            $this->displayBlock('content', $context, $blocks);
            // line 64
            echo "  ";
        }
    }

    // line 61
    public function block_content($context, array $blocks = [])
    {
        // line 62
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--program-wrapper.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  177 => 62,  174 => 61,  169 => 64,  166 => 61,  160 => 57,  143 => 54,  138 => 53,  121 => 52,  118 => 51,  114 => 49,  95 => 47,  78 => 46,  75 => 45,  73 => 44,  69 => 42,  66 => 41,  60 => 40,  57 => 39,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--program-wrapper.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/paragraphs/paragraph--program-wrapper.html.twig");
    }
}
