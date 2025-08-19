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

/* themes/contrib/tara/templates/content/node.html.twig */
class __TwigTemplate_2b5af399c2cdfb7b611a0d0906a9ab12 extends Template
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
        // line 70
        $context["node_classes"] = ["node", ("node-type-" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "bundle", [], "any", false, false, true, 72))), ((CoreExtension::getAttribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 73)) ? ("node-promoted") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 74)) ? ("node-sticky") : ("")), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 75)) ? ("node-unpublished") : ("")), ((        // line 76
($context["view_mode"] ?? null)) ? (("node-view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : (""))];
        // line 79
        yield "<article";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["node_classes"] ?? null)], "method", false, false, true, 79), "html", null, true);
        yield ">
";
        // line 80
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 81
        if ( !($context["page"] ?? null)) {
            // line 82
            yield "    <h2";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", ["node-title"], "method", false, false, true, 82), "html", null, true);
            yield ">
      <a href=\"";
            // line 83
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" rel=\"bookmark\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</a>
    </h2>
  ";
        }
        // line 86
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "

";
        // line 88
        if (($context["display_submitted"] ?? null)) {
            // line 89
            yield "  <header class=\"node-header\">
    ";
            // line 90
            if (($context["node_author_pic"] ?? null)) {
                // line 91
                yield "      <div class=\"author-picture\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true);
                yield "</div>
    ";
            }
            // line 93
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", ["node-submitted-details"], "method", false, false, true, 93), "html", null, true);
            yield ">
      <div class=\"node-user\">
        ";
            // line 95
            yield t("<i class=\"icon-user\" aria-hidden=\"true\"></i> @author_name
      </div>
      <div class=\"node-date\">
        <i class=\"icon-calendar\" aria-hidden=\"true\"></i> @date", array("@author_name" => ($context["author_name"] ?? null), "@date" =>             // line 98
($context["date"] ?? null), ));
            // line 99
            yield "      </div>
      ";
            // line 100
            if ((($context["node_tags"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 100))) {
                // line 101
                yield "      <div class=\"node-tags\">
        ";
                // line 102
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 102));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 103
                    yield "          ";
                    if ((($_v0 = $context["item"]) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "#title", [], "array", false, false, true, 103))) {
                        // line 104
                        yield "            <a href=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v1 = $context["item"]) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#url"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "#url", [], "array", false, false, true, 104)), "html", null, true);
                        yield "\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v2 = $context["item"]) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "#title", [], "array", false, false, true, 104)), "html", null, true);
                        yield "</a>
          ";
                    }
                    // line 106
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                yield "      </div>
      ";
            }
            // line 109
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true);
            yield "
    </div>
  </header>
";
        }
        // line 113
        yield "  <div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["node-content"], "method", false, false, true, 113), "html", null, true);
        yield ">
    ";
        // line 114
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "title_prefix", "page", "title_attributes", "url", "label", "title_suffix", "display_submitted", "node_author_pic", "author_picture", "author_attributes", "author_name", "date", "node_tags", "content", "metadata", "content_attributes"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/tara/templates/content/node.html.twig";
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
        return array (  151 => 114,  146 => 113,  138 => 109,  134 => 107,  128 => 106,  120 => 104,  117 => 103,  113 => 102,  110 => 101,  108 => 100,  105 => 99,  103 => 98,  99 => 95,  93 => 93,  87 => 91,  85 => 90,  82 => 89,  80 => 88,  75 => 86,  67 => 83,  62 => 82,  60 => 81,  56 => 80,  51 => 79,  49 => 76,  48 => 75,  47 => 74,  46 => 73,  45 => 72,  44 => 70,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/tara/templates/content/node.html.twig", "/app/web/themes/contrib/tara/templates/content/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 70, "if" => 81, "trans" => 95, "for" => 102];
        static $filters = ["clean_class" => 72, "escape" => 79];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans', 'for'],
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
