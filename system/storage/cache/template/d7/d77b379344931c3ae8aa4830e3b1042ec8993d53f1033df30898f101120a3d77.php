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

/* default/template/extension/module/slideshow.twig */
class __TwigTemplate_8839cf016cc61ff79485c6e1ecbd13f64919342df4bf45af37c30bd5dbee08f9 extends Template
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
        if (($context["banners"] ?? null)) {
            // line 2
            yield "\t<div class=\"slideshow swiper-viewport\">
\t\t<div id=\"slideshow";
            // line 3
            yield ($context["module"] ?? null);
            yield "\" class=\"swiper-container\">
\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["banners"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 6
                yield "\t\t\t\t\t<div class=\"swiper-slide text-center\">";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 6)) {
                    yield "<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 6);
                    yield "\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 6);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 6);
                    yield "\" class=\"img-responsive\" /></a>";
                } else {
                    yield "<img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 6);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 6);
                    yield "\" class=\"img-responsive\" />";
                }
                yield "</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            yield "\t\t\t</div>
\t\t</div>
\t\t<div class=\"swiper-pagination slideshow";
            // line 10
            yield ($context["module"] ?? null);
            yield "\"></div>
\t\t<div class=\"swiper-pager\">
\t\t\t<div class=\"swiper-button-next\"></div>
\t\t\t<div class=\"swiper-button-prev\"></div>
\t\t</div>
\t</div>
\t<script>
\t\t\$('#slideshow";
            // line 17
            yield ($context["module"] ?? null);
            yield "').swiper({
\t\t\tmode: 'horizontal',
\t\t\tslidesPerView: 1,
\t\t\tpagination: '.slideshow";
            // line 20
            yield ($context["module"] ?? null);
            yield "',
\t\t\tpaginationClickable: true,
\t\t\tnextButton: '.slideshow .swiper-button-next',
\t\t\tprevButton: '.slideshow .swiper-button-prev',
\t\t\tspaceBetween: 30,
\t\t\tautoplay: 2500,
\t\t\tautoplayDisableOnInteraction: true,
\t\t\tloop: true
\t\t});
\t</script>
";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/extension/module/slideshow.twig";
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
        return array (  95 => 20,  89 => 17,  79 => 10,  75 => 8,  52 => 6,  48 => 5,  43 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/slideshow.twig", "");
    }
}
