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

/* themes/custom/fundacion_acres/templates/page.html.twig */
class __TwigTemplate_1a35aebc017acf66af504327d2a5f67b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield "
<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <head-placeholder token=\"";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 6, $this->source));
        yield "\">
    <title>";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 7, $this->source), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 8, $this->source));
        yield "\">
    <js-placeholder token=\"";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 9, $this->source));
        yield "\">
  </head>
  <body>

    ";
        // line 14
        yield "    <header class=\"bg-dark text-white py-3\">
      <div class=\"container\">
        ";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 16)) {
            // line 17
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            yield "
        ";
        }
        // line 19
        yield "      </div>
    </header>

    ";
        // line 23
        yield "    <nav class=\"navbar navbar-expand-lg navbar-light bg-light sticky-top\">
      <div class=\"container\">
        ";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 25)) {
            // line 26
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            yield "
        ";
        }
        // line 28
        yield "      </div>
    </nav>

    ";
        // line 32
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 32)) {
            // line 33
            yield "      <section class=\"hero bg-primary text-white text-center py-5\">
        <div class=\"container\">
          ";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            yield "
        </div>
      </section>
    ";
        }
        // line 39
        yield "
    ";
        // line 41
        yield "    <main class=\"py-5\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-8\">
            ";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 45)) {
            // line 46
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            yield "
            ";
        }
        // line 48
        yield "          </div>
          <aside class=\"col-md-4\">
            ";
        // line 50
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 50)) {
            // line 51
            yield "              ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            yield "
            ";
        }
        // line 53
        yield "          </aside>
        </div>
      </div>
    </main>

    ";
        // line 59
        yield "    <footer class=\"bg-dark text-white text-center py-4\">
      <div class=\"container\">
        ";
        // line 61
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 61)) {
            // line 62
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            yield "
        ";
        }
        // line 64
        yield "      </div>
    </footer>

    <js-bottom-placeholder token=\"";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 67, $this->source));
        yield "\">
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["placeholder_token", "head_title", "page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/fundacion_acres/templates/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  166 => 67,  161 => 64,  155 => 62,  153 => 61,  149 => 59,  142 => 53,  136 => 51,  134 => 50,  130 => 48,  124 => 46,  122 => 45,  116 => 41,  113 => 39,  106 => 35,  102 => 33,  99 => 32,  94 => 28,  88 => 26,  86 => 25,  82 => 23,  77 => 19,  71 => 17,  69 => 16,  65 => 14,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/fundacion_acres/templates/page.html.twig", "C:\\xampp\\htdocs\\f_acres_drupal11\\web\\themes\\custom\\fundacion_acres\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array("raw" => 6, "safe_join" => 7, "escape" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'safe_join', 'escape'],
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
