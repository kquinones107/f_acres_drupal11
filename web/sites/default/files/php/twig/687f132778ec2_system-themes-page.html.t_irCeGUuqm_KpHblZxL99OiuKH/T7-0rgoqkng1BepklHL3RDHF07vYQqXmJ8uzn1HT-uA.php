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

/* themes/contrib/bootstrap5/templates/admin/system-themes-page.html.twig */
class __TwigTemplate_683bdec84801a49294961ae8dbb34fd9 extends Template
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
        // line 32
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 32, $this->source), "html", null, true);
        yield ">
  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["theme_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 34
            yield "    ";
            // line 35
            $context["theme_group_classes"] = ["system-themes-list", ("system-themes-list-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,             // line 37
$context["theme_group"], "state", [], "any", false, false, true, 37), 37, $this->source)), "row g-3"];
            // line 41
            yield "    <h2 class=\"system-themes-list__header m-3\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme_group"], "title", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            yield "</h2>
    <div";
            // line 42
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["theme_group"], "attributes", [], "any", false, false, true, 42), "addClass", [($context["theme_group_classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
            yield ">
      ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["theme_group"], "themes", [], "any", false, false, true, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 44
                yield "        ";
                // line 45
                $context["theme_classes"] = [((CoreExtension::getAttribute($this->env, $this->source,                 // line 46
$context["theme"], "is_default", [], "any", false, false, true, 46)) ? ("theme-default") : ("")), ((CoreExtension::getAttribute($this->env, $this->source,                 // line 47
$context["theme"], "is_admin", [], "any", false, false, true, 47)) ? ("theme-admin") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,                 // line 48
$context["theme_group"], "state", [], "any", false, false, true, 48) == "installed")) ? ("col-12 col-md-3") : ("col-12 col-md-2"))];
                // line 51
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "attributes", [], "any", false, false, true, 51), "addClass", [($context["theme_classes"] ?? null)], "method", false, false, true, 51), 51, $this->source), "html", null, true);
                yield ">
        <div class=\"card h-100\">
          ";
                // line 53
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "screenshot", [], "any", false, false, true, 53)) {
                    // line 54
                    yield "          <div class=\"card-img-top\">
            ";
                    // line 55
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "screenshot", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                    yield "
          </div>
          ";
                }
                // line 58
                yield "          <div class=\"card-body\">
            <h3 class=\"card-title\">";
                // line 60
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "version", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                // line 61
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "notes", [], "any", false, false, true, 61)) {
                    // line 62
                    yield "                (";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "notes", [], "any", false, false, true, 62), 62, $this->source), ", "));
                    yield ")";
                }
                // line 64
                yield "</h3>
            <div class=\"card-text\">";
                // line 65
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "description", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                yield "</div>
            ";
                // line 66
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "module_dependencies", [], "any", false, false, true, 66)) {
                    // line 67
                    yield "              <div class=\"theme-info__requires\">
                ";
                    // line 68
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Requires: @module_dependencies", ["@module_dependencies" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "module_dependencies", [], "any", false, false, true, 68), 68, $this->source))]));
                    yield "
              </div>
            ";
                }
                // line 71
                yield "            ";
                // line 72
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "incompatible", [], "any", false, false, true, 72)) {
                    // line 73
                    yield "              <div class=\"incompatible\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "incompatible", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                    yield "</div>
            ";
                } else {
                    // line 75
                    yield "              ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "operations", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                    yield "
            ";
                }
                // line 77
                yield "          </div>
        </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            yield "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "theme_groups"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/bootstrap5/templates/admin/system-themes-page.html.twig";
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
        return array (  156 => 83,  149 => 81,  140 => 77,  134 => 75,  128 => 73,  125 => 72,  123 => 71,  117 => 68,  114 => 67,  112 => 66,  108 => 65,  105 => 64,  100 => 62,  98 => 61,  94 => 60,  91 => 58,  85 => 55,  82 => 54,  80 => 53,  74 => 51,  72 => 48,  71 => 47,  70 => 46,  69 => 45,  67 => 44,  63 => 43,  59 => 42,  54 => 41,  52 => 37,  51 => 35,  49 => 34,  45 => 33,  40 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap5/templates/admin/system-themes-page.html.twig", "C:\\xampp\\htdocs\\f_acres_drupal11\\web\\themes\\contrib\\bootstrap5\\templates\\admin\\system-themes-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 33, "set" => 35, "if" => 53);
        static $filters = array("escape" => 32, "safe_join" => 62, "t" => 68, "render" => 68);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'safe_join', 't', 'render'],
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
