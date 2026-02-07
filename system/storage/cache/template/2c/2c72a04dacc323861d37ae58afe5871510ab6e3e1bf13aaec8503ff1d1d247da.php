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

/* default/template/checkout/login.twig */
class __TwigTemplate_808dd6f715682267f589dbd5ffdb17d57f16c96d2c67532db312345b4848fa8c extends Template
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
        yield "<div class=\"row\">
  <div class=\"col-sm-6\">
    <h2>";
        // line 3
        yield ($context["text_new_customer"] ?? null);
        yield "</h2>
    <p>";
        // line 4
        yield ($context["text_checkout"] ?? null);
        yield "</p>
    <div class=\"radio\">
      <label> ";
        // line 6
        if ((0 === CoreExtension::compare(($context["account"] ?? null), "register"))) {
            // line 7
            yield "        <input type=\"radio\" name=\"account\" value=\"register\" checked=\"checked\" />
        ";
        } else {
            // line 9
            yield "        <input type=\"radio\" name=\"account\" value=\"register\" />
        ";
        }
        // line 11
        yield "        ";
        yield ($context["text_register"] ?? null);
        yield "</label>
    </div>
    ";
        // line 13
        if (($context["checkout_guest"] ?? null)) {
            // line 14
            yield "    <div class=\"radio\">
      <label> ";
            // line 15
            if ((0 === CoreExtension::compare(($context["account"] ?? null), "guest"))) {
                // line 16
                yield "        <input type=\"radio\" name=\"account\" value=\"guest\" checked=\"checked\" />
        ";
            } else {
                // line 18
                yield "        <input type=\"radio\" name=\"account\" value=\"guest\" />
        ";
            }
            // line 20
            yield "        ";
            yield ($context["text_guest"] ?? null);
            yield "</label>
    </div>
    ";
        }
        // line 23
        yield "    <p>";
        yield ($context["text_register_account"] ?? null);
        yield "</p>
    <input type=\"button\" value=\"";
        // line 24
        yield ($context["button_continue"] ?? null);
        yield "\" id=\"button-account\" data-loading-text=\"";
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-primary\" />
  </div>
  <div class=\"col-sm-6\">
    <h2>";
        // line 27
        yield ($context["text_returning_customer"] ?? null);
        yield "</h2>
    <p>";
        // line 28
        yield ($context["text_i_am_returning_customer"] ?? null);
        yield "</p>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-email\">";
        // line 30
        yield ($context["entry_email"] ?? null);
        yield "</label>
      <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 31
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-password\">";
        // line 34
        yield ($context["entry_password"] ?? null);
        yield "</label>
      <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 35
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" />
      <a href=\"";
        // line 36
        yield ($context["forgotten"] ?? null);
        yield "\">";
        yield ($context["text_forgotten"] ?? null);
        yield "</a></div>
    <input type=\"button\" value=\"";
        // line 37
        yield ($context["button_login"] ?? null);
        yield "\" id=\"button-login\" data-loading-text=\"";
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-primary\" />
  </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/checkout/login.twig";
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
        return array (  135 => 37,  129 => 36,  125 => 35,  121 => 34,  115 => 31,  111 => 30,  106 => 28,  102 => 27,  94 => 24,  89 => 23,  82 => 20,  78 => 18,  74 => 16,  72 => 15,  69 => 14,  67 => 13,  61 => 11,  57 => 9,  53 => 7,  51 => 6,  46 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/login.twig", "");
    }
}
