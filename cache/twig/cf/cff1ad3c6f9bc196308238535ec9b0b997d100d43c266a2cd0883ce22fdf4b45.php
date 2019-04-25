<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modular/home.html.twig */
class __TwigTemplate_1d09f980752fa82064a61e4cb4b5a40eae6b2939e8e867635fc0bfb61f0a3691 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id=\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", [])) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", []);
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", []));
        }
        echo "\"
         class=\"s-home page-hero target-section\" data-parallax=\"scroll\" data-image-src=\"";
        // line 2
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background", []), [], "array"), "url", [], "method");
        echo "\"
         data-natural-width=\"3000\" data-natural-height=\"2000\" data-position-y=\"center\">


    <div class=\"home-content\">

        <div class=\"row home-content__main\">

            <h3>
                ";
        // line 11
        echo $this->getAttribute(($context["header"] ?? null), "question", []);
        echo "
            </h3>
            <h2>
                ";
        // line 14
        echo $this->getAttribute(($context["header"] ?? null), "statement", []);
        echo "
            </h2>
            <h1>
                ";
        // line 17
        echo ($context["content"] ?? null);
        echo "
            </h1>

            <div class=\"home-content__buttons\">
                ";
        // line 21
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Text", [])) {
            // line 22
            echo "                    <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Link", []);
            echo "\" class=\"smoothscroll btn btn--stroke\">
                        ";
            // line 23
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Text", []);
            echo "
                    </a>
                ";
        }
        // line 26
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button2Text", [])) {
            // line 27
            echo "                    <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button2Link", []);
            echo "\" class=\"smoothscroll btn btn--stroke\">
                        ";
            // line 28
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button2Text", []);
            echo "
                    </a>
                ";
        }
        // line 31
        echo "            </div>

            <div class=\"home-content__scroll\">
                <a href=\"";
        // line 34
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button3Link", []);
        echo "\" class=\"scroll-link smoothscroll\">
                    <span>";
        // line 35
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button3Text", []);
        echo "</span>
                </a>
            </div>

        </div>

    </div> <!-- end home-content -->
    ";
        // line 42
        if ($this->getAttribute(($context["site"] ?? null), "social", [])) {
            // line 43
            echo "        <ul class=\"home-social\">
            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 45
                echo "                <li>
                    <a href=\"";
                // line 46
                echo $this->getAttribute($context["icon"], "socialIconLink", []);
                echo "\">
                        <i class=\"";
                // line 47
                echo $this->getAttribute($context["icon"], "socialIconClass", []);
                echo "\" aria-hidden=\"true\"></i>
                        <span>";
                // line 48
                echo $this->getAttribute($context["icon"], "socialIconText", []);
                echo "</span></a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        </ul> <!-- end home-social -->
    ";
        }
        // line 53
        echo "
</section> <!-- end s-home -->";
    }

    public function getTemplateName()
    {
        return "modular/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 53,  145 => 51,  136 => 48,  132 => 47,  128 => 46,  125 => 45,  121 => 44,  118 => 43,  116 => 42,  106 => 35,  102 => 34,  97 => 31,  91 => 28,  86 => 27,  83 => 26,  77 => 23,  72 => 22,  70 => 21,  63 => 17,  57 => 14,  51 => 11,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/home.html.twig", "/Users/daniel/Sites/greenspeedstudio/user/themes/greenspeed/templates/modular/home.html.twig");
    }
}
