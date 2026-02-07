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

/* default/template/extension/module/featured_article.twig */
class __TwigTemplate_a3d624151ce848d2eebb7835d4f7b9fa837e4bb9cd7209d94cc262347149fbdb extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["articles"] ?? null)) {
            // line 2
            yield "\t<h3>";
            yield ($context["heading_title"] ?? null);
            yield "</h3>
\t<div class=\"row\">
\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 5
                yield "\t\t\t<div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t<div class=\"product-thumb transition\">
\t\t\t\t\t<div class=\"image\"><a href=\"";
                // line 7
                yield CoreExtension::getAttribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 7);
                yield "\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["article"], "thumb", [], "any", false, false, false, 7);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 7);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 7);
                yield "\" class=\"img-responsive\" /></a></div>
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t<h4><a href=\"";
                // line 9
                yield CoreExtension::getAttribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 9);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["article"], "name", [], "any", false, false, false, 9);
                yield "</a></h4>
\t\t\t\t\t\t<p>";
                // line 10
                yield CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 10);
                yield "</p>
\t\t\t\t\t\t";
                // line 11
                if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 11)) {
                    // line 12
                    yield "\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t";
                    // line 13
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(5);
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 14
                        yield "\t\t\t\t\t\t\t\t\t";
                        if ((-1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "rating", [], "any", false, false, false, 14), $context["i"]))) {
                            // line 15
                            yield "\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 17
                            yield "\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 19
                        yield "\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 22
                yield "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"location.href = ('";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["article"], "href", [], "any", false, false, false, 24);
                yield "');\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                yield ($context["button_more"] ?? null);
                yield "</span></button>
\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["article"], "date_added", [], "any", false, false, false, 25);
                yield "\" \"><i class=\"fa fa-clock-o\"></i></button>
\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 26
                yield ($context["text_views"] ?? null);
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["article"], "viewed", [], "any", false, false, false, 26);
                yield "\" \"><i class=\"fa fa-eye\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "\t</div>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/extension/module/featured_article.twig";
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
        return array (  132 => 31,  119 => 26,  115 => 25,  109 => 24,  105 => 22,  101 => 20,  95 => 19,  91 => 17,  87 => 15,  84 => 14,  80 => 13,  77 => 12,  75 => 11,  71 => 10,  65 => 9,  54 => 7,  50 => 5,  46 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/featured_article.twig", "");
    }
}
