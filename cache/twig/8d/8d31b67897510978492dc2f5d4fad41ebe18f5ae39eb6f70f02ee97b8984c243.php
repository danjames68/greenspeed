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

/* modular/intro.html.twig */
class __TwigTemplate_753f2e0cf3f9e79c30c5a90aa24360e7cae021bc35265186dd52289f013f7894 extends \Twig\Template
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
         class=\"s-basic ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sectionBackground", []);
        echo " target-section\">
    <div class=\"row narrow section-intro has-bottom-sep\">
        <div class=\"col-full text-center\">
            <h3>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "smallTitle", []);
        echo "</h3>
            <h1>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
            <p class=\"lead\">";
        // line 7
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", []));
        echo "</p>
        </div>
    </div>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "row", []));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "
       
            <div class=\"row basic-content one-column\">
                <div class=\"col-eight tab-full\">
                    <h3>";
            // line 15
            echo $this->getAttribute($context["column"], "firstColumnTitle", []);
            echo "</h3>
                    <p class=\"lead\">";
            // line 16
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["column"], "firstColumnContent", []));
            echo "
                    </p>
                </div>
            </div>
       

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
    <!-- end basic-content -->

    <div class=\"service-content__buttons\">
                ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Text", [])) {
            // line 28
            echo "                    <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Link", []);
            echo "\" class=\"smoothscroll btn btn--stroke\">
                        ";
            // line 29
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "button1Text", []);
            echo "
                    </a>
                ";
        }
        // line 31
        echo "   
     </div>

</section>
<!-- end basic -->";
    }

    public function getTemplateName()
    {
        return "modular/intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  99 => 29,  94 => 28,  92 => 27,  86 => 23,  73 => 16,  69 => 15,  63 => 11,  59 => 10,  53 => 7,  49 => 6,  45 => 5,  39 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/intro.html.twig", "/Users/daniel/Sites/greenspeedstudio/user/themes/greenspeed/templates/modular/intro.html.twig");
    }
}
