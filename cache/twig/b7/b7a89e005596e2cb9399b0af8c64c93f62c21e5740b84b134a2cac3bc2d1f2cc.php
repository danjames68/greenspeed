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

/* partials/pagination.html.twig */
class __TwigTemplate_75189a13731699a600d16d3d6a0a331dfaedebea60687c1e6ad9e5bafacc7f84 extends \Twig\Template
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
        $context["pagination"] = (((isset($context["pagination"]) || array_key_exists("pagination", $context))) ? (_twig_default_filter(($context["pagination"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", []), "params", []), "pagination", []))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", []), "params", []), "pagination", [])));
        // line 2
        $context["base_url"] = (((isset($context["base_url"]) || array_key_exists("base_url", $context))) ? (_twig_default_filter(($context["base_url"] ?? null), $this->getAttribute(($context["page"] ?? null), "url", []))) : ($this->getAttribute(($context["page"] ?? null), "url", [])));
        // line 3
        echo "
";
        // line 4
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 5
            echo "
    <ul class=\"pagination\">
        ";
            // line 7
            if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", [])) {
                // line 8
                echo "            ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", [])), ["//" => "/"]);
                // line 9
                echo "            <li>
                <a class=\"prev\" rel=\"prev\" href=\"";
                // line 10
                echo ($context["url"] ?? null);
                echo "\">
                    <i class=\"fa fa-long-arrow-left\"></i>
                </a>
            </li>
        ";
            } else {
                // line 15
                echo "            <li>
                <span>
                    <i class=\"fa fa-long-arrow-left\"></i>
                </span>
            </li>
        ";
            }
            // line 21
            echo "
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 23
                echo "
            ";
                // line 24
                if ($this->getAttribute($context["paginate"], "isCurrent", [])) {
                    // line 25
                    echo "                <li>
                    <span>";
                    // line 26
                    echo $this->getAttribute($context["paginate"], "number", []);
                    echo "</span>
                </li>
            ";
                } elseif ($this->getAttribute(                // line 28
$context["paginate"], "isInDelta", [])) {
                    // line 29
                    echo "                ";
                    $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute($context["paginate"], "url", [])), ["//" => "/"]);
                    // line 30
                    echo "                <li>
                    <a href=\"";
                    // line 31
                    echo ($context["url"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", []);
                    echo "</a>
                </li>
            ";
                } elseif ($this->getAttribute(                // line 33
$context["paginate"], "isDeltaBorder", [])) {
                    // line 34
                    echo "                <li class=\"gap\">
                    <span>&hellip;</span>
                </li>
            ";
                }
                // line 38
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        ";
            if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", [])) {
                // line 41
                echo "            ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", [])) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", [])), ["//" => "/"]);
                // line 42
                echo "            <li>
                <a class=\"next\" rel=\"next\" href=\"";
                // line 43
                echo ($context["url"] ?? null);
                echo "\">
                    <i class=\"fa fa-long-arrow-right\"></i>
                </a>
            </li>
        ";
            } else {
                // line 48
                echo "            <li>
                <span>
                    <i class=\"fa fa-long-arrow-right\"></i>
                </span>
            </li>
        ";
            }
            // line 54
            echo "    </ul>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 54,  134 => 48,  126 => 43,  123 => 42,  120 => 41,  117 => 40,  110 => 38,  104 => 34,  102 => 33,  95 => 31,  92 => 30,  89 => 29,  87 => 28,  82 => 26,  79 => 25,  77 => 24,  74 => 23,  70 => 22,  67 => 21,  59 => 15,  51 => 10,  48 => 9,  45 => 8,  43 => 7,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/pagination.html.twig", "/Users/daniel/Sites/greenspeedstudio/user/themes/greenspeed/templates/partials/pagination.html.twig");
    }
}
