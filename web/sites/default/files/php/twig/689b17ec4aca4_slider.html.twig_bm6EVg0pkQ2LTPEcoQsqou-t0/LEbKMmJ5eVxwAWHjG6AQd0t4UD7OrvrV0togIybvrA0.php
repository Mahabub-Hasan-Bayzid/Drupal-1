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

/* @tara/template-parts/slider.html.twig */
class __TwigTemplate_67d3b567cf6987ce0e1320d27da78f20 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/slider"), "html", null, true);
        yield "
<section id=\"slider\">
  <div class=\"container\">
    <ul class=\"owl-carousel home-slider\">
      ";
        // line 5
        if ((($context["slider_code"] ?? null) != "")) {
            // line 6
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::striptags(($context["slider_code"] ?? null), "<ol>,<ul>,<li>,<p>,<a>,<img>,<video>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>,<em>,<strong>,<br>,<i>,<div>,<span>,<button>"));
            yield "
      ";
        } else {
            // line 8
            yield "      <li>
        <h1>Slider Heading One</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>
      <li>
        <h1>Slider Heading Two</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>
      <li>
        <h1>Slider Heading Three</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>
      <li>
        <h1>Slider Heading Four</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        <br />
        <a class=\"button\" href=\"#\">read more</a>
      </li>
      ";
        }
        // line 33
        yield "    </ul> <!--/.home-slider -->
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["slider_code"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@tara/template-parts/slider.html.twig";
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
        return array (  86 => 33,  59 => 8,  53 => 6,  51 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@tara/template-parts/slider.html.twig", "/app/web/themes/contrib/tara/templates/template-parts/slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 5];
        static $filters = ["escape" => 1, "raw" => 6, "striptags" => 6];
        static $functions = ["attach_library" => 1];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw', 'striptags'],
                ['attach_library'],
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
