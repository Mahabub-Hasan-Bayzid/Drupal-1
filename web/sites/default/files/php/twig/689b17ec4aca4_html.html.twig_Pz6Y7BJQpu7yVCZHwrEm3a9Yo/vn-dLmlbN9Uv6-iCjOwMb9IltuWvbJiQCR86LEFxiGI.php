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

/* themes/contrib/tara/templates/layout/html.html.twig */
class __TwigTemplate_630edc5b9a8ae7b3cf62b8cfc08a1d5f extends Template
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
        // line 27
        $context["body_classes"] = [((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("user-guest")), (( !        // line 29
($context["root_path"] ?? null)) ? ("frontpage") : (("inner-page path-" . \Drupal\Component\Utility\Html::getClass(($context["root_path"] ?? null))))), ((        // line 30
($context["node_type"] ?? null)) ? (("page-type-" . \Drupal\Component\Utility\Html::getClass(($context["node_type"] ?? null)))) : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 31) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 31))) ? ("no-sidebar") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 32) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 32))) ? ("one-sidebar sidebar-left") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 33
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 33) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 33))) ? ("one-sidebar sidebar-right") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 34
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 34) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 34))) ? ("two-sidebar") : (""))];
        // line 37
        yield "<!DOCTYPE html>
<html";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true);
        yield ">
  <head>
    <head-placeholder token=\"";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
    <title>";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
    ";
        // line 42
        if ((($context["google_font"] ?? null) == "local")) {
            // line 43
            yield "    <link rel=\"preload\" as=\"font\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
            yield "/fonts/open-sans.woff2\" type=\"font/woff2\" crossorigin>
    <link rel=\"preload\" as=\"font\" href=\"";
            // line 44
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
            yield "/fonts/roboto.woff2\" type=\"font/woff2\" crossorigin>
    ";
        }
        // line 46
        yield "    <css-placeholder token=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
    <js-placeholder token=\"";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
";
        // line 48
        if (($context["css_extra"] ?? null)) {
            // line 49
            yield "<style>
";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["css_code"] ?? null), "html", null, true);
            yield "
</style>
";
        }
        // line 53
        yield "  </head>
  <body";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 54), "html", null, true);
        yield ">
    ";
        // line 59
        yield "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
    </a>
    ";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_top"] ?? null), "html", null, true);
        yield "
    ";
        // line 63
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page"] ?? null), "html", null, true);
        yield "
    ";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["page_bottom"] ?? null), "html", null, true);
        yield "
    ";
        // line 65
        if ((($context["google_font"] ?? null) == "googlecdn")) {
            // line 66
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/googlefontscdn"), "html", null, true);
            yield "
    ";
        } elseif ((        // line 67
($context["google_font"] ?? null) == "local")) {
            // line 68
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/googlefontslocal"), "html", null, true);
            yield "
    ";
        }
        // line 70
        yield "    <js-bottom-placeholder token=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["placeholder_token"] ?? null));
        yield "\">
";
        // line 71
        yield from $this->loadTemplate("@tara/template-parts/settings.html.twig", "themes/contrib/tara/templates/layout/html.html.twig", 71)->unwrap()->yield($context);
        // line 72
        if ((($context["slider_show"] ?? null) && ($context["is_front"] ?? null))) {
            yield "\t
<script>
jQuery(document).ready(function (\$) {
\$('.home-slider').owlCarousel({
  items: 1,
  loop: true,
  autoplay: true,
  nav: false,
  dots: ";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slider_dots"] ?? null), "html", null, true);
            yield ",
  autoplayTimeout: ";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["slider_time"] ?? null), "html", null, true);
            yield ",
});
});
</script>
";
        }
        // line 86
        if (($context["logged_in"] ?? null)) {
            // line 87
            yield "  ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("tara/script-header"), "html", null, true);
            yield "
";
        }
        // line 89
        yield "  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "page", "html_attributes", "placeholder_token", "head_title", "google_font", "base_path", "directory", "css_extra", "css_code", "attributes", "page_top", "page_bottom", "slider_show", "is_front", "slider_dots", "slider_time"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/tara/templates/layout/html.html.twig";
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
        return array (  181 => 89,  175 => 87,  173 => 86,  165 => 81,  161 => 80,  150 => 72,  148 => 71,  143 => 70,  137 => 68,  135 => 67,  130 => 66,  128 => 65,  124 => 64,  120 => 63,  116 => 62,  111 => 60,  108 => 59,  104 => 54,  101 => 53,  95 => 50,  92 => 49,  90 => 48,  86 => 47,  81 => 46,  76 => 44,  71 => 43,  69 => 42,  65 => 41,  61 => 40,  56 => 38,  53 => 37,  51 => 34,  50 => 33,  49 => 32,  48 => 31,  47 => 30,  46 => 29,  45 => 28,  44 => 27,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/tara/templates/layout/html.html.twig", "/app/web/themes/contrib/tara/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 27, "if" => 42, "include" => 71];
        static $filters = ["clean_class" => 29, "escape" => 38, "raw" => 40, "safe_join" => 41, "t" => 60];
        static $functions = ["attach_library" => 66];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'include'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
