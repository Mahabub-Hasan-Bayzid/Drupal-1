<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/tara/templates/views/views-view.html.twig */
class __TwigTemplate_46fee541385d282fbd10a7db3b007c37 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 36
($context["id"] ?? null))), ("view-display-id-" .         // line 37
($context["display_id"] ?? null)), ((        // line 38
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : (""))];
        // line 41
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 41), "html", null, true);
        yield ">
  ";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "
  ";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "

  ";
        // line 46
        if (($context["header"] ?? null)) {
            // line 47
            yield "    <div class=\"view-header\">
      ";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 51
        yield "
  ";
        // line 52
        if (($context["exposed"] ?? null)) {
            // line 53
            yield "    <div class=\"view-filters\">
      ";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 57
        yield "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 58
            yield "    <div class=\"view-attachment view-attachment-before\">
      ";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 62
        yield "
  ";
        // line 63
        if (($context["rows"] ?? null)) {
            // line 64
            yield "    <div class=\"view-content\">
      ";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        } elseif (        // line 67
($context["empty"] ?? null)) {
            // line 68
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 70
        yield "
  ";
        // line 71
        if (($context["pager"] ?? null)) {
            // line 72
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 74
        yield "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 75
            yield "    <div class=\"view-attachment view-attachment-after\">
      ";
            // line 76
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 79
        yield "  ";
        if (($context["more"] ?? null)) {
            // line 80
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 82
        yield "
  ";
        // line 83
        if (($context["footer"] ?? null)) {
            // line 84
            yield "    <div class=\"view-footer\">
      ";
            // line 85
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 88
        yield "
  ";
        // line 89
        if (($context["feed_icons"] ?? null)) {
            // line 90
            yield "    <div class=\"feed-icons\">
      ";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 94
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/tara/templates/views/views-view.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  184 => 94,  178 => 91,  175 => 90,  173 => 89,  170 => 88,  164 => 85,  161 => 84,  159 => 83,  156 => 82,  150 => 80,  147 => 79,  141 => 76,  138 => 75,  135 => 74,  129 => 72,  127 => 71,  124 => 70,  119 => 68,  117 => 67,  112 => 65,  109 => 64,  107 => 63,  104 => 62,  98 => 59,  95 => 58,  92 => 57,  86 => 54,  83 => 53,  81 => 52,  78 => 51,  72 => 48,  69 => 47,  67 => 46,  62 => 44,  58 => 43,  54 => 42,  49 => 41,  47 => 38,  46 => 37,  45 => 36,  44 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/tara/templates/views/views-view.html.twig", "/app/web/themes/contrib/tara/templates/views/views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 34, "if" => 46];
        static $filters = ["clean_class" => 36, "escape" => 41];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
