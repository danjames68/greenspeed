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

/* modular/stats.html.twig */
class __TwigTemplate_09986057045b91128d764761ce7c34a692f356a65778df7beab11fd7b99a52dc extends \Twig\Template
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
        echo "<!-- s-stats ================================================== -->
<section id=\"";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", [])) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", []);
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", []));
        }
        echo "\"
         class=\"s-stats ";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sectionBackground", []);
        echo " target-section\">

    <div class=\"row block-1-4 block-tab-1-2 block-mob-full stats\">

        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "stats", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "            <div class=\"col-block stats__col ";
            if (($this->getAttribute($context["item"], "statHighlight", []) == "1")) {
                echo "stats__col--highlight";
            }
            echo "\">
                ";
            // line 9
            if ($this->getAttribute($context["item"], "statIconClass", [])) {
                // line 10
                echo "                    <div class=\"stats__upsign\">
                        <a href=\"";
                // line 11
                echo $this->getAttribute($context["item"], "statIconLink", []);
                echo "\"><i class=\"";
                echo $this->getAttribute($context["item"], "statIconClass", []);
                echo "\" aria-hidden=\"true\"></i></a>
                    </div>
                ";
            }
            // line 14
            echo "                <div class=\"stats__count\">
                    ";
            // line 15
            echo $this->getAttribute($context["item"], "statCount", []);
            echo "
                </div>
                <h4>";
            // line 17
            echo $this->getAttribute($context["item"], "statDescription", []);
            echo "</h4>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    </div>

</section> <!-- end s-stats -->";
    }

    public function getTemplateName()
    {
        return "modular/stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  80 => 17,  75 => 15,  72 => 14,  64 => 11,  61 => 10,  59 => 9,  52 => 8,  48 => 7,  41 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/stats.html.twig", "/Users/dan/Sites/greenspeed/user/themes/hola/templates/modular/stats.html.twig");
    }
}
