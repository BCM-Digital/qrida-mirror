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

/* themes/custom/govcms8_uikit_starter/assets/svgs/loan.svg */
class __TwigTemplate_25d18fb3c62e046032e4e2c6881c0eb2f49451fbd5e3609355a5f8bad53a3803 extends \Twig\Template
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
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 30.924 30.929\"><g fill=\"";
        ((((isset($context["fill"]) || array_key_exists("fill", $context)) &&  !(null === ($context["fill"] ?? null)))) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["fill"] ?? null), "html", null, true))) : (print ("#bc591c")));
        echo "\" stroke=\"";
        ((((isset($context["fill"]) || array_key_exists("fill", $context)) &&  !(null === ($context["fill"] ?? null)))) ? (print ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["fill"] ?? null), "html", null, true))) : (print ("#bc591c")));
        echo "\" stroke-width=\".5\"><path d=\"M29.465 1.468a4.139 4.139 0 00-5.866 0L8.708 16.394a.761.761 0 00-.212.449l-.639 5.378a.762.762 0 00.761.851h.083l5.424-.563a.761.761 0 00.456-.22L29.465 7.354a4.178 4.178 0 000-5.888zM13.699 21.01l-4.214.444.487-4.176L21.733 5.492l3.72 3.728zM26.523 8.148l-3.72-3.735 1.862-1.879a2.685 2.685 0 013.728 0 2.641 2.641 0 010 3.728z\"/><path d=\"M26.113 25.354a3.8 3.8 0 01-3.8 3.8H5.575a3.8 3.8 0 01-3.8-3.8V8.619a3.8 3.8 0 013.8-3.8h11.41V3.294H5.575A5.326 5.326 0 00.25 8.619v16.735a5.326 5.326 0 005.325 5.325H22.31a5.326 5.326 0 005.325-5.325v-11.41h-1.522z\"/></g></svg>";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/assets/svgs/loan.svg";
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
        return new Source("", "themes/custom/govcms8_uikit_starter/assets/svgs/loan.svg", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/assets/svgs/loan.svg");
    }
}
