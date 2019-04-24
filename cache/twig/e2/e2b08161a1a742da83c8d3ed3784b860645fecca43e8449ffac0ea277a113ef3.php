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

/* item.html.twig */
class __TwigTemplate_73f5ea740ed102307113347e5c769e615aee6d74a29365c8974b07a029fedcd9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "
    <article class=\"blog-single\">

        <!-- page header/blog hero ================================================== -->
        <div class=\"page-header page-header--single page-hero\" style=\"background-image:url(";
        // line 7
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array"), "url", [], "method");
        echo ")\">

            <div class=\"row page-header__content narrow\">
                <article class=\"col-full\">
                    <div class=\"page-header__info\">
                        <div class=\"page-header__cat\">
                            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "taxonomy", []), "category", []));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 14
            echo "                                <a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
            echo "/category:";
            echo $context["category"];
            echo "\">";
            echo $context["category"];
            echo "</a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
                        </div>
                    </div>
                    <h1 class=\"page-header__title\">
                        <a href=\"";
        // line 20
        echo $this->getAttribute(($context["page"] ?? null), "url", []);
        echo "\" title=\"\">
                            ";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "
                        </a>
                    </h1>
                    <ul class=\"page-header__meta\">
                        <li class=\"date\">";
        // line 25
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "F d, Y");
        echo "</li>
                        <li class=\"author\">
                            By
                            <span>
                                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "taxonomy", []), "author", []));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 30
            echo "                                    ";
            echo $context["author"];
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                            </span>
                        </li>
                    </ul>

                </article>
            </div>

        </div> <!-- end page-header -->

        <div class=\"row blog-content\">
            <div class=\"col-full blog-content__main\">

                <p class=\"lead\">";
        // line 44
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "lead", []);
        echo "</p>

                ";
        // line 46
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "

                <p class=\"blog-content__tags\">
                    <span>Post Tags</span>

                    <span class=\"blog-content__tag-list\">
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "taxonomy", []), "tag", []));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 53
            echo "                            <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", [0 => true], "method");
            echo "/tag:";
            echo $context["tag"];
            echo "\">";
            echo $context["tag"];
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </span>

                </p>

                <div class=\"blog-content__pagenav\">
                    <div class=\"blog-content__nav\">
                        <div class=\"blog-content__prev\">
                            ";
        // line 62
        if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
            // line 63
            echo "                                <a class=\"button\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
            echo "\">
                                    <span>Next Article</span>";
            // line 64
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "title", []);
            echo "</a>
                            ";
        }
        // line 66
        echo "                        </div>
                        <div class=\"blog-content__next\">
                            ";
        // line 68
        if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
            // line 69
            echo "                                <a class=\"button\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
            echo "\">
                                    <span>Previous Article</span>
                                    ";
            // line 71
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "title", []);
            echo "</a>
                            ";
        }
        // line 73
        echo "                        </div>
                    </div>

                    <div class=\"blog-content__all\">
                        <a href=\"";
        // line 77
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", [], "method");
        echo "\" class=\"btn btn--primary\">
                            View All Articles
                        </a>
                    </div>
                </div>

            </div> <!-- end blog-content__main -->
        </div> <!-- end blog-content -->

    </article>

";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 77,  194 => 73,  189 => 71,  183 => 69,  181 => 68,  177 => 66,  172 => 64,  167 => 63,  165 => 62,  156 => 55,  143 => 53,  139 => 52,  130 => 46,  125 => 44,  111 => 32,  102 => 30,  98 => 29,  91 => 25,  84 => 21,  80 => 20,  74 => 16,  61 => 14,  57 => 13,  48 => 7,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "item.html.twig", "/Users/dan/Sites/greenspeed/user/themes/greenspeed/templates/item.html.twig");
    }
}
