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

/* themes/custom/govcms8_uikit_starter/templates/views/views-view--program-display.html.twig */
class __TwigTemplate_388d26c12d49f26661decc6ad7d61650a17d6eb840152a082986c51a59bdd3e3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 34, "if" => 46];
        $filters = ["clean_class" => 34, "escape" => 44];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
        // line 33
        echo "
";
        // line 34
        $context["view_id"] = ("view-id--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["id"] ?? null))));
        // line 35
        echo "
";
        // line 37
        $context["classes"] = [0 => "view", 1 => ("view-id--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 39
($context["id"] ?? null)))), 2 => ("view-display-id--" . $this->sandbox->ensureToStringAllowed(        // line 40
($context["display_id"] ?? null))), 3 => ((        // line 41
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null)))) : (""))];
        // line 44
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
  ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 46
        if (($context["title"] ?? null)) {
            // line 47
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 49
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 50
        if (($context["header"] ?? null)) {
            // line 51
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_id"] ?? null)), "html", null, true);
            echo "__header\">
      ";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 55
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 56
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_id"] ?? null)), "html", null, true);
            echo "__filters col-xs-12 col-sm-4\">
      ";
            // line 57
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 60
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 61
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_id"] ?? null)), "html", null, true);
            echo "__attachment--before\">
      ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 65
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 66
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_id"] ?? null)), "html", null, true);
            echo "__content col-xs-12 col-sm-8\">
  ";
        } else {
            // line 68
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_id"] ?? null)), "html", null, true);
            echo "__content col-xs-12\">
  ";
        }
        // line 70
        echo "    ";
        if (($context["rows"] ?? null)) {
            // line 71
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null)), "html", null, true);
            echo "
    ";
        } elseif (        // line 72
($context["empty"] ?? null)) {
            // line 73
            echo "      <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_id"] ?? null)), "html", null, true);
            echo "__empty\">
        ";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 77
        echo "    ";
        if (($context["pager"] ?? null)) {
            // line 78
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null)), "html", null, true);
            echo "
    ";
        }
        // line 80
        echo "  </div>
  ";
        // line 81
        if (($context["attachment_after"] ?? null)) {
            // line 82
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_id"] ?? null)), "html", null, true);
            echo "__attachment--after\">
      ";
            // line 83
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 86
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 87
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_id"] ?? null)), "html", null, true);
            echo "__more\">
      ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 91
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 92
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_id"] ?? null)), "html", null, true);
            echo "__footer\">
      ";
            // line 93
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 96
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 97
            echo "    <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_id"] ?? null)), "html", null, true);
            echo "__icons\">
      ";
            // line 98
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 101
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/govcms8_uikit_starter/templates/views/views-view--program-display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 101,  228 => 98,  223 => 97,  220 => 96,  214 => 93,  209 => 92,  206 => 91,  200 => 88,  195 => 87,  192 => 86,  186 => 83,  181 => 82,  179 => 81,  176 => 80,  170 => 78,  167 => 77,  161 => 74,  156 => 73,  154 => 72,  149 => 71,  146 => 70,  140 => 68,  134 => 66,  131 => 65,  125 => 62,  120 => 61,  117 => 60,  111 => 57,  106 => 56,  103 => 55,  97 => 52,  92 => 51,  90 => 50,  85 => 49,  79 => 47,  77 => 46,  73 => 45,  68 => 44,  66 => 41,  65 => 40,  64 => 39,  63 => 37,  60 => 35,  58 => 34,  55 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/govcms8_uikit_starter/templates/views/views-view--program-display.html.twig", "/home/ubuntu/sites/qrida-website/docroot/themes/custom/govcms8_uikit_starter/templates/views/views-view--program-display.html.twig");
    }
}
