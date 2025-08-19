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

/* core/themes/stable9/templates/admin/help-section.html.twig */
class __TwigTemplate_1668f40b179a06cfe27c2e6bdde0e54f extends Template
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
        // line 13
        yield "<h2>";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</h2>
<p>";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
        yield "</p>
";
        // line 15
        if (($context["links"] ?? null)) {
            // line 16
            yield "  <ul>
  ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 18
                yield "    <li>";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["link"], "html", null, true);
                yield "</li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "  </ul>
";
        } else {
            // line 22
            yield "  <p>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "</p>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "description", "links", "empty"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/stable9/templates/admin/help-section.html.twig";
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
        return array (  75 => 22,  71 => 20,  62 => 18,  58 => 17,  55 => 16,  53 => 15,  49 => 14,  44 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/stable9/templates/admin/help-section.html.twig", "/app/web/core/themes/stable9/templates/admin/help-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 15, "for" => 17];
        static $filters = ["escape" => 13];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
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
