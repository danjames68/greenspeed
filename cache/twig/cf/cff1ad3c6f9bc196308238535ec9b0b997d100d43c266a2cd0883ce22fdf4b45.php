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
        // line 18
        echo ($context["content"] ?? null);
        echo "
            </h1>

            <div class=\"home-content__buttons\">
                ";
        // line 22
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Text", [])) {
            // line 23
            echo "                    <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Link", []);
            echo "\" class=\"smoothscroll btn btn--stroke\">
                        ";
            // line 24
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Text", []);
            echo "
                    </a>
                ";
        }
        // line 27
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button2Text", [])) {
            // line 28
            echo "                    <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button2Link", []);
            echo "\" class=\"smoothscroll btn btn--stroke\">
                        ";
            // line 29
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button2Text", []);
            echo "
                    </a>
                ";
        }
        // line 32
        echo "            </div>

            <div class=\"home-content__scroll\">
                <a href=\"";
        // line 35
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button3Link", []);
        echo "\" class=\"scroll-link smoothscroll\">
                    <span>";
        // line 36
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button3Text", []);
        echo "</span>
                </a>
            </div>

        </div>

    </div> <!-- end home-content -->
    ";
        // line 43
        if ($this->getAttribute(($context["site"] ?? null), "social", [])) {
            // line 44
            echo "        <ul class=\"home-social\">
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 46
                echo "                <li>
                    <a href=\"";
                // line 47
                echo $this->getAttribute($context["icon"], "socialIconLink", []);
                echo "\">
                        <i class=\"";
                // line 48
                echo $this->getAttribute($context["icon"], "socialIconClass", []);
                echo "\" aria-hidden=\"true\"></i>
                        <span>";
                // line 49
                echo $this->getAttribute($context["icon"], "socialIconText", []);
                echo "</span></a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </ul> <!-- end home-social -->
    ";
        }
        // line 54
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
        return array (  150 => 54,  146 => 52,  137 => 49,  133 => 48,  129 => 47,  126 => 46,  122 => 45,  119 => 44,  117 => 43,  107 => 36,  103 => 35,  98 => 32,  92 => 29,  87 => 28,  84 => 27,  78 => 24,  73 => 23,  71 => 22,  64 => 18,  57 => 14,  51 => 11,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/home.html.twig", "/Users/daniel/Sites/greenspeed/user/themes/greenspeed/templates/modular/home.html.twig");
    }
}
