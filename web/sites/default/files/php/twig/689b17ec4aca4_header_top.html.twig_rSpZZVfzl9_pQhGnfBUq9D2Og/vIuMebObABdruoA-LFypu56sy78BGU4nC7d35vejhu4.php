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

/* @tara/template-parts/header_top.html.twig */
class __TwigTemplate_e6f744343be4709732d455ae72a339d2 extends Template
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
        // line 1
        yield "<div class=\"header-top\">
  <div class=\"container\">
    <div class=\"header-top-container\">
      ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 4)) {
            // line 5
            yield "        <div class=\"header-top-left header-top-block\">
            ";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top", [], "any", false, false, true, 6), "html", null, true);
            yield "
        </div> <!--/.header-top-left -->
      ";
        }
        // line 9
        yield "      ";
        if (($context["all_icons_show"] ?? null)) {
            // line 10
            yield "        <div class=\"header-top-right header-top-block\">
          ";
            // line 11
            yield from $this->loadTemplate("@tara/template-parts/social-icons.html.twig", "@tara/template-parts/header_top.html.twig", 11)->unwrap()->yield($context);
            // line 12
            yield "        </div> <!--/.header-top-right -->
      ";
        }
        // line 14
        yield "    </div> <!--/.header-top-container -->
  </div> <!--/.container -->
</div> <!--/.header-top -->
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page", "all_icons_show"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@tara/template-parts/header_top.html.twig";
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
        return array (  72 => 14,  68 => 12,  66 => 11,  63 => 10,  60 => 9,  54 => 6,  51 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@tara/template-parts/header_top.html.twig", "/app/web/themes/contrib/tara/templates/template-parts/header_top.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 4, "include" => 11];
        static $filters = ["escape" => 6];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
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
