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

/* default/template/common/header.twig */
class __TwigTemplate_1132f3ebf8baf2490aeddc4426953d694325608aeca91f143c8c6608c6931990 extends Template
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
        yield "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        yield ($context["title"] ?? null);
        yield "</title>
";
        // line 13
        if (($context["robots"] ?? null)) {
            // line 14
            yield "<meta name=\"robots\" content=\"";
            yield ($context["robots"] ?? null);
            yield "\" />
";
        }
        // line 16
        yield "<base href=\"";
        yield ($context["base"] ?? null);
        yield "\" />
";
        // line 17
        if (($context["description"] ?? null)) {
            // line 18
            yield "<meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\" />
";
        }
        // line 20
        if (($context["keywords"] ?? null)) {
            // line 21
            yield "<meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\" />
";
        }
        // line 23
        yield "<meta property=\"og:title\" content=\"";
        yield ($context["title"] ?? null);
        yield "\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:url\" content=\"";
        // line 25
        yield ($context["og_url"] ?? null);
        yield "\" />
";
        // line 26
        if (($context["og_image"] ?? null)) {
            // line 27
            yield "<meta property=\"og:image\" content=\"";
            yield ($context["og_image"] ?? null);
            yield "\" />
";
        } else {
            // line 29
            yield "<meta property=\"og:image\" content=\"";
            yield ($context["logo"] ?? null);
            yield "\" />
";
        }
        // line 31
        yield "<meta property=\"og:site_name\" content=\"";
        yield ($context["name"] ?? null);
        yield "\" />
<link href=\"catalog/view/theme/default/fonts/Inter-Regular.woff2\" rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin>
<link href=\"catalog/view/theme/default/fonts/Inter-Medium.woff2\" rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin>
<link href=\"catalog/view/theme/default/fonts/Inter-Bold.woff2\" rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin>
<script src=\"catalog/view/javascript/jquery/jquery-3.7.0.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 41
            yield "<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 41);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 41);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 41);
            yield "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 44
            yield "<script src=\"";
            yield $context["script"];
            yield "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 48
            yield "<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 48);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 48);
            yield "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 51
            yield $context["analytic"];
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "</head>
<body>
<nav id=\"top\">
  <div class=\"container\">
\t<div>
\t\t";
        // line 58
        yield ($context["currency"] ?? null);
        yield "
\t\t";
        // line 59
        yield ($context["language"] ?? null);
        yield "
\t\t";
        // line 60
        yield ($context["blog_menu"] ?? null);
        yield "
\t</div>
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\">
        <li><a href=\"";
        // line 64
        yield ($context["contact"] ?? null);
        yield "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
        yield ($context["telephone"] ?? null);
        yield "</span></li>
        <li class=\"dropdown\"><a href=\"";
        // line 65
        yield ($context["account"] ?? null);
        yield "\" title=\"";
        yield ($context["text_account"] ?? null);
        yield "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        yield ($context["text_account"] ?? null);
        yield "</span> <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 67
        if (($context["logged"] ?? null)) {
            // line 68
            yield "            <li><a href=\"";
            yield ($context["account"] ?? null);
            yield "\">";
            yield ($context["text_account"] ?? null);
            yield "</a></li>
            <li><a href=\"";
            // line 69
            yield ($context["order"] ?? null);
            yield "\">";
            yield ($context["text_order"] ?? null);
            yield "</a></li>
            <li><a href=\"";
            // line 70
            yield ($context["transaction"] ?? null);
            yield "\">";
            yield ($context["text_transaction"] ?? null);
            yield "</a></li>
            <li><a href=\"";
            // line 71
            yield ($context["download"] ?? null);
            yield "\">";
            yield ($context["text_download"] ?? null);
            yield "</a></li>
            <li><a href=\"";
            // line 72
            yield ($context["logout"] ?? null);
            yield "\">";
            yield ($context["text_logout"] ?? null);
            yield "</a></li>
            ";
        } else {
            // line 74
            yield "            <li><a href=\"";
            yield ($context["register"] ?? null);
            yield "\">";
            yield ($context["text_register"] ?? null);
            yield "</a></li>
            <li><a href=\"";
            // line 75
            yield ($context["login"] ?? null);
            yield "\">";
            yield ($context["text_login"] ?? null);
            yield "</a></li>
            ";
        }
        // line 77
        yield "          </ul>
        </li>
        <li><a href=\"";
        // line 79
        yield ($context["wishlist"] ?? null);
        yield "\" id=\"wishlist-total\" title=\"";
        yield ($context["text_wishlist"] ?? null);
        yield "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</span></a></li>
\t\t<!--
        <li><a href=\"";
        // line 81
        yield ($context["shopping_cart"] ?? null);
        yield "\" title=\"";
        yield ($context["text_shopping_cart"] ?? null);
        yield "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        yield ($context["text_shopping_cart"] ?? null);
        yield "</span></a></li>
        <li><a href=\"";
        // line 82
        yield ($context["checkout"] ?? null);
        yield "\" title=\"";
        yield ($context["text_checkout"] ?? null);
        yield "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        yield ($context["text_checkout"] ?? null);
        yield "</span></a></li>
\t\t-->
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-3\">
\t\t<div id=\"logo\">
          ";
        // line 93
        if (($context["logo"] ?? null)) {
            // line 94
            yield "            ";
            if ((0 === CoreExtension::compare(($context["home"] ?? null), ($context["og_url"] ?? null)))) {
                // line 95
                yield "              <img src=\"";
                yield ($context["logo"] ?? null);
                yield "\" title=\"";
                yield ($context["name"] ?? null);
                yield "\" alt=\"";
                yield ($context["name"] ?? null);
                yield "\" class=\"img-responsive\" />
            ";
            } else {
                // line 97
                yield "              <a href=\"";
                yield ($context["home"] ?? null);
                yield "\"><img src=\"";
                yield ($context["logo"] ?? null);
                yield "\" title=\"";
                yield ($context["name"] ?? null);
                yield "\" alt=\"";
                yield ($context["name"] ?? null);
                yield "\" class=\"img-responsive\" /></a>
            ";
            }
            // line 99
            yield "          ";
        } else {
            // line 100
            yield "            <h1><a href=\"";
            yield ($context["home"] ?? null);
            yield "\">";
            yield ($context["name"] ?? null);
            yield "</a></h1>
          ";
        }
        // line 102
        yield "\t\t</div>
      </div>
      <div class=\"col-sm-6\">";
        // line 104
        yield ($context["search"] ?? null);
        yield "</div>
      <div class=\"col-sm-3\">";
        // line 105
        yield ($context["cart"] ?? null);
        yield "</div>
    </div>
  </div>
</header>
";
        // line 109
        yield ($context["menu"] ?? null);
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/common/header.twig";
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
        return array (  373 => 109,  366 => 105,  362 => 104,  358 => 102,  350 => 100,  347 => 99,  335 => 97,  325 => 95,  322 => 94,  320 => 93,  302 => 82,  294 => 81,  285 => 79,  281 => 77,  274 => 75,  267 => 74,  260 => 72,  254 => 71,  248 => 70,  242 => 69,  235 => 68,  233 => 67,  224 => 65,  218 => 64,  211 => 60,  207 => 59,  203 => 58,  196 => 53,  188 => 51,  184 => 50,  173 => 48,  169 => 47,  166 => 46,  157 => 44,  153 => 43,  140 => 41,  136 => 40,  123 => 31,  117 => 29,  111 => 27,  109 => 26,  105 => 25,  99 => 23,  93 => 21,  91 => 20,  85 => 18,  83 => 17,  78 => 16,  72 => 14,  70 => 13,  66 => 12,  55 => 6,  48 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/header.twig", "");
    }
}
