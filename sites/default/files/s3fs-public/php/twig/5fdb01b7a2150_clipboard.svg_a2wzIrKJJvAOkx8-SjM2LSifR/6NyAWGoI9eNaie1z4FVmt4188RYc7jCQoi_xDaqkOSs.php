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

/* themes/custom/govcms8_uikit_starter/assets/svgs/clipboard.svg */
class __TwigTemplate_22dca4112729b90bfe904572f374eb6615b867b52a4e731092037b280388c0d2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 1];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 28 32\"><path d=\"M6 3H4a4 4 0 00-4 4v21a4 4 0 004 4h20a4 4 0 004-4V7a4 4 0 00-4-4h-2v2h2a2 2 0 012 2v21a2 2 0 01-2 2H4a2 2 0 01-2-2V7a2 2 0 012-2h2z\" fill=\"";
        ((((isset($context["fill"]) || array_key_exists("fill", $context)) &&  !(null === ($context["fill"] ?? null)))) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["fill"] ?? null), "html", null, true))) : (print ("#bc591c")));
        echo "\" fill-rule=\"evenodd\"/><path d=\"M17 2h-6a1 1 0 00-1 1v2a1 1 0 001 1h6a1 1 0 001-1V3a1 1 0 00-1-1zm-6-2a3 3 0 00-3 3v2a3 3 0 003 3h6a3 3 0 003-3V3a3 3 0 00-3-3zm8.708 14.292a1 1 0 010 1.416l-6 6a1 1 0 01-1.416 0l-3-3a1.001 1.001 0 111.416-1.416L13 19.586l5.292-5.294a1 1 0 011.416 0z\" fill=\"";
        ((((isset($context["fill"]) || array_key_exists("fill", $context)) &&  !(null === ($context["fill"] ?? null)))) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["fill"] ?? null), "html", null, true))) : (print ("#bc591c")));
        echo "\" fill-rule=\"evenodd\"/></svg>";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/assets/svgs/clipboard.svg";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/govcms8_uikit_starter/assets/svgs/clipboard.svg", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/assets/svgs/clipboard.svg");
    }
}
