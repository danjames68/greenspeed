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

/* modular/articles.html.twig */
class __TwigTemplate_a5ccf353839d5e9e4f35905c6a91bda634be2cce8914b0dbe48c35a9cdd6bbf1 extends \Twig\Template
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
        $context["blog_image"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array")) : (twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []))));
        // line 2
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 3
        $context["blog"] = $this->getAttribute(($context["page"] ?? null), "find", [0 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("blog_url"), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("blog-page"))], "method");
        // line 4
        $context["show_pagination"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->pageHeaderVarFunc("show_pagination", [0 => ($context["page"] ?? null), 1 => ($context["blog"] ?? null)]), true);
        // line 5
        echo "
<!-- blog ================================================== -->
<section id=\"";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", [])) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", []);
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", []));
        }
        echo "\"
         class=\"s-blog ";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sectionBackground", []);
        echo " target-section\">

    <div class=\"row narrow section-intro has-bottom-sep\">
        <div class=\"col-full\">
            <h3>";
        // line 12
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "smallTitle", []);
        echo "</h3>
            <h1>";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
            <p class=\"lead\">";
        // line 14
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", []));
        echo "</p>
        </div>
    </div>

    <div class=\"row blog-content\">
        <div class=\"col-full\">

            <div class=\"blog-list block-1-2 block-tab-full\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 23
            echo "
                    <article class=\"col-block\">

                        <div class=\"blog-date\">
                            <a href=\"";
            // line 27
            echo $this->getAttribute($context["page"], "url", []);
            echo "\">";
            echo twig_date_format_filter($this->env, $this->getAttribute($context["page"], "date", []), "F d, Y");
            echo "</a>
                        </div>

                        <h2 class=\"h01\">
                            <a href=\"";
            // line 31
            echo $this->getAttribute($context["page"], "link", []);
            echo "\">";
            echo $this->getAttribute($context["page"], "title", []);
            echo "</a>
                        </h2>
                        <p>
                            ";
            // line 34
            echo twig_slice($this->env, $this->getAttribute($this->getAttribute($context["page"], "header", []), "lead", []), 0.3);
            echo "
                        </p>

                        <div class=\"blog-cat\">
                            <a href=\"";
            // line 38
            echo $this->getAttribute($context["page"], "categoryLink", []);
            echo "\">";
            echo $this->getAttribute($context["page"], "postCategory", []);
            echo "</a>
                        </div>

                    </article>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </div> <!-- end blog-list -->

        </div> <!-- end col-full -->
    </div> <!-- end blog-content -->
    
</section> <!-- end s-blog -->";
    }

    public function getTemplateName()
    {
        return "modular/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  110 => 38,  103 => 34,  95 => 31,  86 => 27,  80 => 23,  76 => 22,  65 => 14,  61 => 13,  57 => 12,  50 => 8,  42 => 7,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/articles.html.twig", "/Users/dan/Sites/greenspeed/user/themes/greenspeed/templates/modular/articles.html.twig");
    }
}
