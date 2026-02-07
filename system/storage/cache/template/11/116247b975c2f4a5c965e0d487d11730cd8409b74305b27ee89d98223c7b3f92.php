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

/* default/template/product/category.twig */
class __TwigTemplate_0811f83c8a6a328761082d0a655318a19eb522a2da9c7e61bef3728dedb86333 extends Template
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
        yield ($context["header"] ?? null);
        yield "
<div id=\"product-category\" class=\"container\">
\t<ul class=\"breadcrumb\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "\t\t\t<li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "\t</ul>
\t<div class=\"row\">
\t\t";
        // line 9
        yield ($context["column_left"] ?? null);
        yield "
\t\t";
        // line 10
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 11
            yield "\t\t\t";
            $context["class"] = "col-sm-6";
            // line 12
            yield "\t\t";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 13
            yield "\t\t\t";
            $context["class"] = "col-sm-9";
            // line 14
            yield "\t\t";
        } else {
            // line 15
            yield "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 16
            yield "\t\t";
        }
        // line 17
        yield "\t\t<div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">
\t\t\t";
        // line 18
        yield ($context["content_top"] ?? null);
        yield "
\t\t\t<h1>";
        // line 19
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t";
        // line 20
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 21
            yield "\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
            // line 22
            if (($context["thumb"] ?? null)) {
                // line 23
                yield "\t\t\t\t\t\t<div class=\"col-sm-2\"><img src=\"";
                yield ($context["thumb"] ?? null);
                yield "\" alt=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" class=\"img-thumbnail\" /></div>
\t\t\t\t\t";
            }
            // line 25
            yield "\t\t\t\t\t";
            if (($context["description"] ?? null)) {
                // line 26
                yield "\t\t\t\t\t\t<div class=\"col-sm-10\">";
                yield ($context["description"] ?? null);
                yield "</div>
\t\t\t\t\t";
            }
            // line 28
            yield "\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t";
        }
        // line 31
        yield "\t\t\t";
        if (($context["categories"] ?? null)) {
            // line 32
            yield "\t\t\t\t<h4>";
            yield ($context["text_refine"] ?? null);
            yield "</h4>
\t\t\t\t<ul class=\"category__category-list row-flex\">
\t\t\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 35
                yield "\t\t\t\t\t\t<li class=\"category__category-list-item\"><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 35);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35);
                yield "</a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            yield "\t\t\t\t</ul>
\t\t\t";
        }
        // line 39
        yield "\t\t\t";
        if (($context["products"] ?? null)) {
            // line 40
            yield "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-2 col-sm-6 hidden-xs\">
\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 43
            yield ($context["button_list"] ?? null);
            yield "\"><i class=\"fa fa-th-list\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            // line 44
            yield ($context["button_grid"] ?? null);
            yield "\"><i class=\"fa fa-th\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"form-group\"><a href=\"";
            // line 48
            yield ($context["compare"] ?? null);
            yield "\" id=\"compare-total\" class=\"btn btn-link\">";
            yield ($context["text_compare"] ?? null);
            yield "</a></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-xs-6\">
\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-sort\">";
            // line 52
            yield ($context["text_sort"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 55
                yield "\t\t\t\t\t\t\t\t\t";
                if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 55), Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null))))) {
                    // line 56
                    yield "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 56);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 56);
                    yield "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 58
                    yield "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 58);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 58);
                    yield "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 60
                yield "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
            // line 66
            yield ($context["text_limit"] ?? null);
            yield "</label>
\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 69
                yield "\t\t\t\t\t\t\t\t\t";
                if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 69), ($context["limit"] ?? null)))) {
                    // line 70
                    yield "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 70);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 70);
                    yield "</option>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 72
                    yield "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 72);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 72);
                    yield "</option>
\t\t\t\t\t\t\t\t\t";
                }
                // line 74
                yield "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row row-flex\">
\t\t\t\t\t";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 81
                yield "\t\t\t\t\t\t<div class=\"product-layout product-list col-xs-12\">
\t\t\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t\t\t<div class=\"image\"><a href=\"";
                // line 83
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 83);
                yield "\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 83);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 83);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 83);
                yield "\" class=\"img-responsive\" /></a></div>
\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 85
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 85);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 85);
                yield "</a></h4>
\t\t\t\t\t\t\t\t\t<p>";
                // line 86
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 86);
                yield "</p>
\t\t\t\t\t\t\t\t\t";
                // line 87
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 87)) {
                    // line 88
                    yield "\t\t\t\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 89
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 89)) {
                        // line 90
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 90);
                        yield "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 92
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 92);
                        yield "</span> <span class=\"price-old\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 92);
                        yield "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 94
                    yield "\t\t\t\t\t\t\t\t\t\t\t";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 94)) {
                        yield "<span class=\"price-tax\">";
                        yield ($context["text_tax"] ?? null);
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 94);
                        yield "</span>";
                    }
                    // line 95
                    yield "\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 97
                yield "\t\t\t\t\t\t\t\t\t";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 97)) {
                    // line 98
                    yield "\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 99
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 100
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((-1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 100), $context["i"]))) {
                            yield "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            yield " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 101
                        yield "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    yield "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 104
                yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.add('";
                // line 106
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 106);
                yield "', '";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 106);
                yield "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                yield ($context["button_cart"] ?? null);
                yield "</span></button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 107
                yield ($context["button_wishlist"] ?? null);
                yield "\" onclick=\"wishlist.add('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 107);
                yield "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 108
                yield ($context["button_compare"] ?? null);
                yield "\" onclick=\"compare.add('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 108);
                yield "');\"><i class=\"fa fa-exchange\"></i></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            yield "\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
            // line 115
            yield ($context["pagination"] ?? null);
            yield "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
            // line 116
            yield ($context["results"] ?? null);
            yield "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 119
        yield "\t\t\t";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 120
            yield "\t\t\t\t<p>";
            yield ($context["text_empty"] ?? null);
            yield "</p>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 122
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 125
        yield "\t\t\t";
        yield ($context["content_bottom"] ?? null);
        yield "
\t\t</div>
\t\t";
        // line 127
        yield ($context["column_right"] ?? null);
        yield "
\t</div>
</div>
";
        // line 130
        yield ($context["footer"] ?? null);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/product/category.twig";
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
        return array (  433 => 130,  427 => 127,  421 => 125,  413 => 122,  407 => 120,  404 => 119,  398 => 116,  394 => 115,  390 => 113,  377 => 108,  371 => 107,  363 => 106,  359 => 104,  355 => 102,  349 => 101,  342 => 100,  338 => 99,  335 => 98,  332 => 97,  328 => 95,  319 => 94,  311 => 92,  305 => 90,  303 => 89,  300 => 88,  298 => 87,  294 => 86,  288 => 85,  277 => 83,  273 => 81,  269 => 80,  262 => 75,  256 => 74,  248 => 72,  240 => 70,  237 => 69,  233 => 68,  228 => 66,  221 => 61,  215 => 60,  207 => 58,  199 => 56,  196 => 55,  192 => 54,  187 => 52,  178 => 48,  171 => 44,  167 => 43,  162 => 40,  159 => 39,  155 => 37,  144 => 35,  140 => 34,  134 => 32,  131 => 31,  126 => 28,  120 => 26,  117 => 25,  107 => 23,  105 => 22,  102 => 21,  100 => 20,  96 => 19,  92 => 18,  87 => 17,  84 => 16,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  69 => 11,  67 => 10,  63 => 9,  59 => 7,  48 => 5,  44 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
