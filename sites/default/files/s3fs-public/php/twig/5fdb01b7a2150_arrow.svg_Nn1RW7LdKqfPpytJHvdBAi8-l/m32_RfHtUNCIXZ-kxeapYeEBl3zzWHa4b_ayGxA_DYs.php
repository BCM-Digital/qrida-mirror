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

/* themes/custom/govcms8_uikit_starter/assets/svgs/arrow.svg */
class __TwigTemplate_57d7416ef20db0555b3e714c5cf702774cd367a1db7d55478673824ef8159f4b extends \Twig\Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 28.733 22.022\"><path d=\"M15.57 19.161l6.614-6.613H.5V9.472h21.683L15.57 2.861 17.724.707l10.3 10.3-10.3 10.3z\" fill=\"";
        ((((isset($context["fill"]) || array_key_exists("fill", $context)) &&  !(null === ($context["fill"] ?? null)))) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["fill"] ?? null), "html", null, true))) : (print ("#bc591c")));
        echo "\" stroke=\"";
        ((((isset($context["fill"]) || array_key_exists("fill", $context)) &&  !(null === ($context["fill"] ?? null)))) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["fill"] ?? null), "html", null, true))) : (print ("#bc591c")));
        echo "\"/></svg>";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/assets/svgs/arrow.svg";
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
        return new Source("", "themes/custom/govcms8_uikit_starter/assets/svgs/arrow.svg", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/assets/svgs/arrow.svg");
    }
}
