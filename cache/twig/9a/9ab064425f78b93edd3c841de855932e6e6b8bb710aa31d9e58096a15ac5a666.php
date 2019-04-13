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

/* modular/testimonials.html.twig */
class __TwigTemplate_053e5772b1ac0b367da3b89e6d6ccd9dfa7d22a6e2733979aaa6e0ec8cbb71c5 extends \Twig\Template
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
        echo "<!-- testimonials ================================================== -->
<section id=\"";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", [])) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", []);
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", []));
        }
        echo "\"
         class=\"s-testimonials ";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sectionBackground", []);
        echo " target-section\"
         style=\"background: url(";
        // line 4
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sectionbackground", []), [], "array"), "url", []);
        echo ")\">

    <div class=\"overlay\" style=\"opacity:";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "backgroundOverlay", []);
        echo ";\"></div>

    <div class=\"row testimonials-header\">
        <div class=\"col-full\">
            <h1 class=\"h02\">";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
        </div>
    </div>

    <div class=\"row testimonials\">

        <div class=\"col-full testimonials__slider\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "testimonials", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "
                <div class=\"testimonials__slide\">
                    <img src=\"";
            // line 20
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($context["item"], "image", []), [], "array"), "url", []);
            echo "\" alt=\"Author image\" class=\"testimonials__avatar\">
                    <p>";
            // line 21
            echo $this->getAttribute($context["item"], "description", []);
            echo "</p>
                    <div class=\"testimonials__author h06\">
                        ";
            // line 23
            echo $this->getAttribute($context["item"], "clientName", []);
            echo "
                        <span>";
            // line 24
            echo $this->getAttribute($context["item"], "position", []);
            echo "</span>
                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
        </div> <!-- end testimonials__slider -->

    </div> <!-- end testimonials -->

</section> <!-- end s-testimonials -->
";
    }

    public function getTemplateName()
    {
        return "modular/testimonials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  88 => 24,  84 => 23,  79 => 21,  75 => 20,  71 => 18,  67 => 17,  57 => 10,  50 => 6,  45 => 4,  41 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/testimonials.html.twig", "/Users/dan/Sites/greenspeed/user/themes/hola/templates/modular/testimonials.html.twig");
    }
}
