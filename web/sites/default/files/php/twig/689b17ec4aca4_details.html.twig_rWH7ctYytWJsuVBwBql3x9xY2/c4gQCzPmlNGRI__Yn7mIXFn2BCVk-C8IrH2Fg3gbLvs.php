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

/* themes/contrib/tara/templates/form/details.html.twig */
class __TwigTemplate_4d9909ca1fcb66403d2c21e68061b7da extends Template
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
        // line 17
        yield "<details";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">";
        // line 18
        if (($context["title"] ?? null)) {
            // line 20
            $context["summary_classes"] = [((            // line 21
($context["required"] ?? null)) ? ("js-form-required") : ("")), ((            // line 22
($context["required"] ?? null)) ? ("form-required") : (""))];
            // line 25
            yield "    <summary";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [($context["summary_classes"] ?? null)], "method", false, false, true, 25), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</summary>";
        }
        // line 27
        yield "<div class=\"form-details-wrapper\">
    ";
        // line 28
        if (($context["errors"] ?? null)) {
            // line 29
            yield "      <div class=\"form-item--error-message\">
        <strong>";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            yield "</strong>
      </div>
    ";
        }
        // line 33
        if (($context["description"] ?? null)) {
            // line 34
            yield "<div class=\"details-description\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
            yield "</div>";
        }
        // line 36
        if (($context["children"] ?? null)) {
            // line 37
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        }
        // line 39
        if (($context["value"] ?? null)) {
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["value"] ?? null), "html", null, true);
        }
        // line 42
        yield "</div>
</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title", "required", "summary_attributes", "errors", "description", "children", "value"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/tara/templates/form/details.html.twig";
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
        return array (  92 => 42,  89 => 40,  87 => 39,  84 => 37,  82 => 36,  77 => 34,  75 => 33,  69 => 30,  66 => 29,  64 => 28,  61 => 27,  54 => 25,  52 => 22,  51 => 21,  50 => 20,  48 => 18,  44 => 17,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/tara/templates/form/details.html.twig", "/app/web/themes/contrib/tara/templates/form/details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 18, "set" => 20];
        static $filters = ["escape" => 17];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
