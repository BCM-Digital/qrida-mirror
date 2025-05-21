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

/* themes/custom/govcms8_uikit_starter/assets/svgs/news.svg */
class __TwigTemplate_eed506ed3fe5376f6b531e8f4226f79c3def38faa274e5c593db23a2fa171023 extends \Twig\Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 32 30\"><g fill=\"";
        ((((isset($context["fill"]) || array_key_exists("fill", $context)) &&  !(null === ($context["fill"] ?? null)))) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["fill"] ?? null), "html", null, true))) : (print ("#bc591c")));
        echo "\"><path d=\"M0 3a3 3 0 013-3h22a3 3 0 013 3v24a3 3 0 01-3 3H3a3 3 0 01-3-3zm3-1a1 1 0 00-1 1v24a1 1 0 001 1h22a1 1 0 001-1V3a1 1 0 00-1-1z\" fill-rule=\"evenodd\"/><path d=\"M31 5a1 1 0 011 1v21a3 3 0 01-3 3h-6v-2h6a1 1 0 001-1V6a1 1 0 011-1z\" fill-rule=\"evenodd\"/><path d=\"M4 5h20v4H4zm0 6h8v6H4zm0 8h8v2H4zm0 4h8v2H4zm10-12h4v2h-4zm6 0h4v2h-4zm-6 4h4v2h-4zm6 0h4v2h-4zm-6 4h4v2h-4zm6 0h4v2h-4zm-6 4h4v2h-4zm6 0h4v2h-4z\"/></g></svg>";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/assets/svgs/news.svg";
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
        return new Source("", "themes/custom/govcms8_uikit_starter/assets/svgs/news.svg", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/assets/svgs/news.svg");
    }
}
