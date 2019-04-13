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

/* modular/cta.html.twig */
class __TwigTemplate_4eb5f32dd9738734dd9654af46a4ccdea5706ac6abea9ef0be279966dfeada10 extends \Twig\Template
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
         class=\"s-cta ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sectionBackground", []);
        echo " target-section\">

    <div class=\"row narrow cta\">

        <div class=\"col-full cta__content\">

            <h2 class=\"h01\"><a href=\"";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "titleLink", []);
        echo "\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</a></h2>

            <p class=\"lead\">
                ";
        // line 11
        echo strip_tags(($context["content"] ?? null), "<a><span>");
        echo "
            </p>

            <div class=\"cta__action\">
                <a class=\"btn btn--primary btn--large\" href=\"";
        // line 15
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttonLink", []);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttonText", []);
        echo "</a>
            </div>

        </div>

    </div> <!-- end cta -->

</section>
";
    }

    public function getTemplateName()
    {
        return "modular/cta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  56 => 11,  48 => 8,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/cta.html.twig", "/Users/dan/Sites/greenspeed/user/themes/greenspeed/templates/modular/cta.html.twig");
    }
}
