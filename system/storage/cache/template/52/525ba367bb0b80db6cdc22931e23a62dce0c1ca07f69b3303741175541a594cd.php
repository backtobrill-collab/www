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

/* default/template/extension/module/carousel.twig */
class __TwigTemplate_8ca3b35f56947b5128806ccb5c91492f5e737b5968f775d7de545fe6e32ecf6d extends Template
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
        yield "<div class=\"carousel swiper-viewport\">
\t<div id=\"carousel";
        // line 2
        yield ($context["module"] ?? null);
        yield "\" class=\"swiper-container\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            yield "\t\t\t\t<div class=\"swiper-slide text-center\">";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5)) {
                yield "<a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5);
                yield "\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 5);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 5);
                yield "\" class=\"img-responsive\" /></a>";
            } else {
                yield "<img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 5);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 5);
                yield "\" class=\"img-responsive\" />";
            }
            yield "</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "\t\t</div>
\t</div>
\t<div class=\"swiper-pagination carousel";
        // line 9
        yield ($context["module"] ?? null);
        yield "\"></div>
\t<div class=\"swiper-pager\">
\t\t<div class=\"swiper-button-next\"></div>
\t\t<div class=\"swiper-button-prev\"></div>
\t</div>
</div>
<script>
\t\$('#carousel";
        // line 16
        yield ($context["module"] ?? null);
        yield "').swiper({
\t\tmode: 'horizontal',
\t\tslidesPerView: 5,
\t\tpagination: '.carousel";
        // line 19
        yield ($context["module"] ?? null);
        yield "',
\t\tpaginationClickable: true,
\t\tnextButton: '.carousel .swiper-button-next',
\t\tprevButton: '.carousel .swiper-button-prev',
\t\tautoplay: 2500,
\t\tloop: true
\t});
</script>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/extension/module/carousel.twig";
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
        return array (  93 => 19,  87 => 16,  77 => 9,  73 => 7,  50 => 5,  46 => 4,  41 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/carousel.twig", "");
    }
}
