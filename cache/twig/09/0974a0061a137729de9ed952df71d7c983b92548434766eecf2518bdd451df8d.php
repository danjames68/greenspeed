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

/* partials/footer.html.twig */
class __TwigTemplate_bd18db530341c1502eebddbb9b119fa8afe2467dc4c0b630d6a256d66c2925da extends \Twig\Template
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
        echo "<footer>
    <div class=\"row\">
        <div class=\"col-full\">

            <div class=\"footer-logo\">
                <a class=\"footer-site-logo\" href=\"";
        // line 6
        echo ($context["base_url_relative"] ?? null);
        echo "\">";
        $this->loadTemplate("partials/logo.html.twig", "partials/footer.html.twig", 6)->display($context);
        echo "</a>
            </div>

            <ul class=\"footer-social\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                    <li>
                        <a href=\"";
            // line 12
            echo $this->getAttribute($context["item"], "socialIconLink", []);
            echo "\">
                            <i class=\"";
            // line 13
            echo $this->getAttribute($context["item"], "socialIconClass", []);
            echo "\" aria-hidden=\"true\"></i>
                            <span>";
            // line 14
            echo $this->getAttribute($context["item"], "socialIconText", []);
            echo "</span>
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </ul>
        </div>
    </div>

    <div class=\"row footer-bottom\">

        <div class=\"col-twelve\">
            <div class=\"copyright\">
                <span>";
        // line 26
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("footer-text");
        echo "</span>
                <span>";
        // line 27
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("footer-design");
        echo "</span>
                <span>";
        // line 28
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("footer-additional-text");
        echo "</span>
            </div>

            <div class=\"go-top\">
                <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#top\">
                    <i class=\"fa fa-long-arrow-up\" aria-hidden=\"true\"></i>
                </a>
            </div>
        </div>

    </div> <!-- end footer-bottom -->

    <!-- Please leave this as a credit.It's not visible. Thank you. -->
    <a href=\"https://devlom.com\" style=\"display: none;\">Grav CMS Development by Devlom</a>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 28,  85 => 27,  81 => 26,  71 => 18,  61 => 14,  57 => 13,  53 => 12,  50 => 11,  46 => 10,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/footer.html.twig", "/Users/daniel/Sites/greenspeed/user/themes/greenspeed/templates/partials/footer.html.twig");
    }
}
