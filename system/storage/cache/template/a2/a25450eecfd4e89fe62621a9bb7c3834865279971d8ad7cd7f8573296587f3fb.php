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

/* default/template/product/product.twig */
class __TwigTemplate_eed96355091bdf0ae3f85ba4213d495cfcbb2fa75080053ecfcc49d24d4e9935 extends Template
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
<div id=\"product-product\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "    <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 11
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 13
            yield "    ";
        } else {
            // line 14
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 15
            yield "    ";
        }
        // line 16
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">";
        yield ($context["content_top"] ?? null);
        yield "
      <div class=\"row\"> ";
        // line 17
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            yield "        ";
            $context["class"] = "col-sm-6";
            // line 19
            yield "        ";
        } else {
            // line 20
            yield "        ";
            $context["class"] = "col-sm-8";
            // line 21
            yield "        ";
        }
        // line 22
        yield "        <div class=\"";
        yield ($context["class"] ?? null);
        yield "\"> ";
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 23
            yield "          <ul class=\"thumbnails\">
            ";
            // line 24
            if (($context["thumb"] ?? null)) {
                // line 25
                yield "            <li><a class=\"thumbnail\" href=\"";
                yield ($context["popup"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\"><img src=\"";
                yield ($context["thumb"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" alt=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" /></a></li>
            ";
            }
            // line 27
            yield "            ";
            if (($context["images"] ?? null)) {
                // line 28
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 29
                    yield "            <li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 29);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\"> <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 29);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" alt=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" /></a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                yield "            ";
            }
            // line 32
            yield "          </ul>
          ";
        }
        // line 34
        yield "          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 35
        yield ($context["tab_description"] ?? null);
        yield "</a></li>
            ";
        // line 36
        if (($context["attribute_groups"] ?? null)) {
            // line 37
            yield "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            yield ($context["tab_attribute"] ?? null);
            yield "</a></li>
            ";
        }
        // line 39
        yield "            ";
        if (($context["review_status"] ?? null)) {
            // line 40
            yield "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            yield ($context["tab_review"] ?? null);
            yield "</a></li>
            ";
        }
        // line 42
        yield "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 44
        yield ($context["description"] ?? null);
        yield "</div>
            ";
        // line 45
        if (($context["attribute_groups"] ?? null)) {
            // line 46
            yield "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 49
                yield "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 51
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 51);
                yield "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 55));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 56
                    yield "                <tr>
                  <td>";
                    // line 57
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 57);
                    yield "</td>
                  <td>";
                    // line 58
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 58);
                    yield "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                yield "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "              </table>
            </div>
            ";
        }
        // line 66
        yield "            ";
        if (($context["review_status"] ?? null)) {
            // line 67
            yield "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 70
            yield ($context["text_write"] ?? null);
            yield "</h2>
                ";
            // line 71
            if (($context["review_guest"] ?? null)) {
                // line 72
                yield "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 74
                yield ($context["entry_name"] ?? null);
                yield "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 75
                yield ($context["customer_name"] ?? null);
                yield "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 80
                yield ($context["entry_review"] ?? null);
                yield "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 82
                yield ($context["text_note"] ?? null);
                yield "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 87
                yield ($context["entry_rating"] ?? null);
                yield "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 88
                yield ($context["entry_bad"] ?? null);
                yield "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 98
                yield ($context["entry_good"] ?? null);
                yield "</div>
                </div>
                ";
                // line 100
                yield ($context["captcha"] ?? null);
                yield "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
\t\t\t\t\t";
                // line 103
                if (($context["text_agree"] ?? null)) {
                    // line 104
                    yield "\t\t\t\t\t\t";
                    if (($context["agree"] ?? null)) {
                        // line 105
                        yield "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t";
                    } else {
                        // line 107
                        yield "\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" />
\t\t\t\t\t\t";
                    }
                    // line 109
                    yield "\t\t\t\t\t\t";
                    yield ($context["text_agree"] ?? null);
                    yield "
\t\t\t\t\t";
                }
                // line 111
                yield "\t\t\t\t\t&nbsp;
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 112
                yield ($context["text_loading"] ?? null);
                yield "\" class=\"btn btn-primary\">";
                yield ($context["button_continue"] ?? null);
                yield "</button>
                  </div>
                </div>
                ";
            } else {
                // line 116
                yield "                ";
                yield ($context["text_login"] ?? null);
                yield "
                ";
            }
            // line 118
            yield "              </form>
            </div>
            ";
        }
        // line 120
        yield "</div>
        </div>
        ";
        // line 122
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 123
            yield "        ";
            $context["class"] = "col-sm-6";
            // line 124
            yield "        ";
        } else {
            // line 125
            yield "        ";
            $context["class"] = "col-sm-4";
            // line 126
            yield "        ";
        }
        // line 127
        yield "        <div class=\"sticky ";
        yield ($context["class"] ?? null);
        yield "\">
          <div class=\"btn-group\">
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 129
        yield ($context["button_wishlist"] ?? null);
        yield "\" onclick=\"wishlist.add('";
        yield ($context["product_id"] ?? null);
        yield "');\"><i class=\"fa fa-heart\"></i></button>
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 130
        yield ($context["button_compare"] ?? null);
        yield "\" onclick=\"compare.add('";
        yield ($context["product_id"] ?? null);
        yield "');\"><i class=\"fa fa-exchange\"></i></button>
          </div>
\t\t  <br><br>
          <h1>";
        // line 133
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 135
        if (($context["manufacturer"] ?? null)) {
            // line 136
            yield "            <li>";
            yield ($context["text_manufacturer"] ?? null);
            yield " <a href=\"";
            yield ($context["manufacturers"] ?? null);
            yield "\">";
            yield ($context["manufacturer"] ?? null);
            yield "</a></li>
            ";
        }
        // line 138
        yield "            <li>";
        yield ($context["text_model"] ?? null);
        yield " ";
        yield ($context["model"] ?? null);
        yield "</li>
            ";
        // line 139
        if (($context["reward"] ?? null)) {
            // line 140
            yield "            <li>";
            yield ($context["text_reward"] ?? null);
            yield " ";
            yield ($context["reward"] ?? null);
            yield "</li>
            ";
        }
        // line 142
        yield "            <li>";
        yield ($context["text_stock"] ?? null);
        yield " ";
        yield ($context["stock"] ?? null);
        yield "</li>
          </ul>
          ";
        // line 144
        if (($context["price"] ?? null)) {
            // line 145
            yield "          <ul class=\"product-page__price list-unstyled\">
            ";
            // line 146
            if ( !($context["special"] ?? null)) {
                // line 147
                yield "            <li>
              <h2>";
                // line 148
                yield ($context["price"] ?? null);
                yield "</h2>
            </li>
            ";
            } else {
                // line 151
                yield "            <li><span style=\"text-decoration: line-through;\">";
                yield ($context["price"] ?? null);
                yield "</span></li>
            <li>
              <h2>";
                // line 153
                yield ($context["special"] ?? null);
                yield "</h2>
            </li>
            ";
            }
            // line 156
            yield "            ";
            if (($context["tax"] ?? null)) {
                // line 157
                yield "            <li>";
                yield ($context["text_tax"] ?? null);
                yield " ";
                yield ($context["tax"] ?? null);
                yield "</li>
            ";
            }
            // line 159
            yield "            ";
            if (($context["points"] ?? null)) {
                // line 160
                yield "            <li>";
                yield ($context["text_points"] ?? null);
                yield " ";
                yield ($context["points"] ?? null);
                yield "</li>
            ";
            }
            // line 162
            yield "            ";
            if (($context["discounts"] ?? null)) {
                // line 163
                yield "            <li>
              <hr>
            </li>
            ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 167
                    yield "            <li>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 167);
                    yield ($context["text_discount"] ?? null);
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 167);
                    yield "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                yield "            ";
            }
            // line 170
            yield "          </ul>
          ";
        }
        // line 172
        yield "          <div id=\"product\"> ";
        if (($context["options"] ?? null)) {
            // line 173
            yield "            <hr>
            <h4>";
            // line 174
            yield ($context["text_option"] ?? null);
            yield "</h4>
            ";
            // line 175
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 176
                yield "            ";
                if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 176), "select"))) {
                    // line 177
                    yield "            <div class=\"form-group";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 177)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 178
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 178);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 178);
                    yield "</label>
              <select name=\"option[";
                    // line 179
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    yield "]\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 179);
                    yield "\" class=\"form-control\">
                <option value=\"\">";
                    // line 180
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                ";
                    // line 181
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 181));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 182
                        yield "                <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 182);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 182);
                        yield "
                ";
                        // line 183
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 183)) {
                            // line 184
                            yield "                (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 184);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 184);
                            yield ")
                ";
                        }
                        // line 185
                        yield " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 187
                    yield "              </select>
            </div>
            ";
                }
                // line 190
                yield "            ";
                if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 190), "radio"))) {
                    // line 191
                    yield "            <div class=\"form-group";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 191)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\">";
                    // line 192
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 192);
                    yield "</label>
              <div id=\"input-option";
                    // line 193
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 193);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 193));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 194
                        yield "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 196
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 196);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 196);
                        yield "\" />
                    ";
                        // line 197
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 197)) {
                            yield " <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 197);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 197);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 197)) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 197);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 197);
                                yield " ";
                            }
                            yield "\" class=\"img-thumbnail\" /> ";
                        }
                        yield "                  
                    ";
                        // line 198
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 198);
                        yield "
                    ";
                        // line 199
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 199)) {
                            // line 200
                            yield "                    (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 200);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 200);
                            yield ")
                    ";
                        }
                        // line 201
                        yield " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 203
                    yield " </div>
            </div>
            ";
                }
                // line 206
                yield "            ";
                if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 206), "checkbox"))) {
                    // line 207
                    yield "            <div class=\"form-group";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 207)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\">";
                    // line 208
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 208);
                    yield "</label>
              <div id=\"input-option";
                    // line 209
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 209);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 209));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 210
                        yield "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 212
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 212);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 212);
                        yield "\" />
                    ";
                        // line 213
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 213)) {
                            yield " <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 213);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 213);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 213)) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 213);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 213);
                                yield " ";
                            }
                            yield "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 214
                        yield "                    ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 214);
                        yield "
                    ";
                        // line 215
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 215)) {
                            // line 216
                            yield "                    (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 216);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 216);
                            yield ")
                    ";
                        }
                        // line 217
                        yield " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    yield " </div>
            </div>
            ";
                }
                // line 222
                yield "            ";
                if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 222), "text"))) {
                    // line 223
                    yield "            <div class=\"form-group";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 223)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 224
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 224);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 224);
                    yield "</label>
              <input type=\"text\" name=\"option[";
                    // line 225
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 225);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 225);
                    yield "\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 225);
                    yield "\" class=\"form-control\" />
            </div>
            ";
                }
                // line 228
                yield "            ";
                if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 228), "textarea"))) {
                    // line 229
                    yield "            <div class=\"form-group";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 229)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 230
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 230);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 230);
                    yield "</label>
              <textarea name=\"option[";
                    // line 231
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 231);
                    yield "\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 231);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 231);
                    yield "</textarea>
            </div>
            ";
                }
                // line 234
                yield "            ";
                if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 234), "file"))) {
                    // line 235
                    yield "            <div class=\"form-group";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 235)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\">";
                    // line 236
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 236);
                    yield "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 237
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 237);
                    yield "\" data-loading-text=\"";
                    yield ($context["text_loading"] ?? null);
                    yield "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 238
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    yield "]\" value=\"\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 238);
                    yield "\" />
            </div>
            ";
                }
                // line 241
                yield "            ";
                if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 241), "date"))) {
                    // line 242
                    yield "            <div class=\"form-group";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 242)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 243
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 243);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 243);
                    yield "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 245
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 245);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 245);
                    yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 245);
                    yield "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 251
                yield "            ";
                if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 251), "datetime"))) {
                    // line 252
                    yield "            <div class=\"form-group";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 252)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 253
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 253);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 253);
                    yield "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 255
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 255);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 255);
                    yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 255);
                    yield "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 261
                yield "            ";
                if ((0 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 261), "time"))) {
                    // line 262
                    yield "            <div class=\"form-group";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 262)) {
                        yield " required ";
                    }
                    yield "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 263
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 263);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 263);
                    yield "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 265
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 265);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 265);
                    yield "\" data-date-format=\"HH:mm\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 265);
                    yield "\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 271
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            yield "            ";
        }
        // line 273
        yield "            ";
        if (($context["recurrings"] ?? null)) {
            // line 274
            yield "            <hr>
            <h3>";
            // line 275
            yield ($context["text_payment_recurring"] ?? null);
            yield "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 278
            yield ($context["text_select"] ?? null);
            yield "</option>
                ";
            // line 279
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 280
                yield "                <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 280);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 280);
                yield "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            yield "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 286
        yield "            <div class=\"product-page__qty-btn form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 287
        yield ($context["entry_qty"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 288
        yield ($context["minimum"] ?? null);
        yield "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 289
        yield ($context["product_id"] ?? null);
        yield "\" />
              <br />
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 291
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-primary btn-lg btn-block\"><i class=\"fa fa-shopping-cart\"></i> ";
        yield ($context["button_cart"] ?? null);
        yield "</button>
            </div>
            ";
        // line 293
        if ((1 === CoreExtension::compare(($context["minimum"] ?? null), 1))) {
            // line 294
            yield "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            yield ($context["text_minimum"] ?? null);
            yield "</div>
            ";
        }
        // line 295
        yield "</div>
          ";
        // line 296
        if (($context["review_status"] ?? null)) {
            // line 297
            yield "          <div class=\"rating\">
            <p>";
            // line 298
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 299
                yield "              ";
                if ((-1 === CoreExtension::compare(($context["rating"] ?? null), $context["i"]))) {
                    yield "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    yield "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 300
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            yield ($context["reviews"] ?? null);
            yield "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            yield ($context["text_write"] ?? null);
            yield "</a></p>
            <hr>
          </div>
          ";
        }
        // line 303
        yield " </div>
      </div>
      ";
        // line 305
        if (($context["products"] ?? null)) {
            // line 306
            yield "      <h3>";
            yield ($context["text_related"] ?? null);
            yield "</h3>
      <div class=\"row row-flex\"> ";
            // line 307
            $context["i"] = 0;
            // line 308
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 309
                yield "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 310
                    yield "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 311
                    yield "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 312
                    yield "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 313
                    yield "        ";
                } else {
                    // line 314
                    yield "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 315
                    yield "        ";
                }
                // line 316
                yield "        <div class=\"product-layout ";
                yield ($context["class"] ?? null);
                yield "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 318
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 318);
                yield "\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 318);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 318);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 318);
                yield "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 320
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 320);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 320);
                yield "</a></h4>
              <p>";
                // line 321
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 321);
                yield "</p>
              ";
                // line 322
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 322)) {
                    // line 323
                    yield "              <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 324
                        yield "                ";
                        if ((-1 === CoreExtension::compare(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 324), $context["j"]))) {
                            yield " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            yield " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 325
                        yield "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    yield " </div>
              ";
                }
                // line 327
                yield "              ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 327)) {
                    // line 328
                    yield "              <p class=\"price\"> ";
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 328)) {
                        // line 329
                        yield "                ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 329);
                        yield "
                ";
                    } else {
                        // line 330
                        yield " <span class=\"price-new\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 330);
                        yield "</span> <span class=\"price-old\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 330);
                        yield "</span> ";
                    }
                    // line 331
                    yield "                ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 331)) {
                        yield " <span class=\"price-tax\">";
                        yield ($context["text_tax"] ?? null);
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 331);
                        yield "</span> ";
                    }
                    yield " </p>
              ";
                }
                // line 332
                yield " </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('";
                // line 334
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 334);
                yield "', '";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 334);
                yield "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                yield ($context["button_cart"] ?? null);
                yield "</span> <i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 335
                yield ($context["button_wishlist"] ?? null);
                yield "\" onclick=\"wishlist.add('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 335);
                yield "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 336
                yield ($context["button_compare"] ?? null);
                yield "\" onclick=\"compare.add('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 336);
                yield "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        ";
                // line 340
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (0 === CoreExtension::compare(((($context["i"] ?? null) + 1) % 2), 0)))) {
                    // line 341
                    yield "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 342
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (0 === CoreExtension::compare(((($context["i"] ?? null) + 1) % 3), 0))))) {
                    // line 343
                    yield "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((0 === CoreExtension::compare(((                // line 344
($context["i"] ?? null) + 1) % 4), 0))) {
                    // line 345
                    yield "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 347
                yield "        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 348
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield " </div>
        ";
        }
        // line 350
        yield "        ";
        if (($context["tags"] ?? null)) {
            // line 351
            yield "        <p>";
            yield ($context["text_tags"] ?? null);
            yield "
        ";
            // line 352
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tags"] ?? null)) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 353
                yield "        ";
                if ((-1 === CoreExtension::compare($context["i"], (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tags"] ?? null)) - 1)))) {
                    yield " <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = ($context["tags"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 353);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = ($context["tags"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 353);
                    yield "</a>,
        ";
                } else {
                    // line 354
                    yield " <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = ($context["tags"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 354);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_3 = ($context["tags"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 354);
                    yield "</a> ";
                }
                // line 355
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield " </p>
        ";
        }
        // line 357
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 358
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 436
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 441
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 447
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 514
        yield ($context["product_id"] ?? null);
        yield "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 518
        yield ($context["product_id"] ?? null);
        yield "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script> 
";
        // line 556
        yield ($context["footer"] ?? null);
        yield " 
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "default/template/product/product.twig";
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
        return array (  1461 => 556,  1420 => 518,  1413 => 514,  1343 => 447,  1334 => 441,  1326 => 436,  1245 => 358,  1240 => 357,  1231 => 355,  1224 => 354,  1214 => 353,  1210 => 352,  1205 => 351,  1202 => 350,  1193 => 348,  1190 => 347,  1186 => 345,  1184 => 344,  1181 => 343,  1179 => 342,  1176 => 341,  1174 => 340,  1165 => 336,  1159 => 335,  1151 => 334,  1147 => 332,  1135 => 331,  1128 => 330,  1122 => 329,  1119 => 328,  1116 => 327,  1107 => 325,  1100 => 324,  1095 => 323,  1093 => 322,  1089 => 321,  1083 => 320,  1072 => 318,  1066 => 316,  1063 => 315,  1060 => 314,  1057 => 313,  1054 => 312,  1051 => 311,  1048 => 310,  1045 => 309,  1040 => 308,  1038 => 307,  1033 => 306,  1031 => 305,  1027 => 303,  1012 => 300,  1005 => 299,  1001 => 298,  998 => 297,  996 => 296,  993 => 295,  987 => 294,  985 => 293,  978 => 291,  973 => 289,  969 => 288,  965 => 287,  962 => 286,  956 => 282,  945 => 280,  941 => 279,  937 => 278,  931 => 275,  928 => 274,  925 => 273,  922 => 272,  916 => 271,  903 => 265,  896 => 263,  889 => 262,  886 => 261,  873 => 255,  866 => 253,  859 => 252,  856 => 251,  843 => 245,  836 => 243,  829 => 242,  826 => 241,  818 => 238,  810 => 237,  806 => 236,  799 => 235,  796 => 234,  784 => 231,  778 => 230,  771 => 229,  768 => 228,  756 => 225,  750 => 224,  743 => 223,  740 => 222,  735 => 219,  727 => 217,  720 => 216,  718 => 215,  713 => 214,  697 => 213,  691 => 212,  687 => 210,  681 => 209,  677 => 208,  670 => 207,  667 => 206,  662 => 203,  654 => 201,  647 => 200,  645 => 199,  641 => 198,  623 => 197,  617 => 196,  613 => 194,  607 => 193,  603 => 192,  596 => 191,  593 => 190,  588 => 187,  581 => 185,  574 => 184,  572 => 183,  565 => 182,  561 => 181,  557 => 180,  551 => 179,  545 => 178,  538 => 177,  535 => 176,  531 => 175,  527 => 174,  524 => 173,  521 => 172,  517 => 170,  514 => 169,  503 => 167,  499 => 166,  494 => 163,  491 => 162,  483 => 160,  480 => 159,  472 => 157,  469 => 156,  463 => 153,  457 => 151,  451 => 148,  448 => 147,  446 => 146,  443 => 145,  441 => 144,  433 => 142,  425 => 140,  423 => 139,  416 => 138,  406 => 136,  404 => 135,  399 => 133,  391 => 130,  385 => 129,  379 => 127,  376 => 126,  373 => 125,  370 => 124,  367 => 123,  365 => 122,  361 => 120,  356 => 118,  350 => 116,  341 => 112,  338 => 111,  332 => 109,  328 => 107,  324 => 105,  321 => 104,  319 => 103,  313 => 100,  308 => 98,  295 => 88,  291 => 87,  283 => 82,  278 => 80,  270 => 75,  266 => 74,  262 => 72,  260 => 71,  256 => 70,  251 => 67,  248 => 66,  243 => 63,  236 => 61,  227 => 58,  223 => 57,  220 => 56,  216 => 55,  209 => 51,  205 => 49,  201 => 48,  197 => 46,  195 => 45,  191 => 44,  187 => 42,  181 => 40,  178 => 39,  172 => 37,  170 => 36,  166 => 35,  163 => 34,  159 => 32,  156 => 31,  139 => 29,  134 => 28,  131 => 27,  117 => 25,  115 => 24,  112 => 23,  107 => 22,  104 => 21,  101 => 20,  98 => 19,  95 => 18,  93 => 17,  86 => 16,  83 => 15,  80 => 14,  77 => 13,  74 => 12,  71 => 11,  68 => 10,  66 => 9,  62 => 8,  59 => 7,  48 => 5,  44 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}
