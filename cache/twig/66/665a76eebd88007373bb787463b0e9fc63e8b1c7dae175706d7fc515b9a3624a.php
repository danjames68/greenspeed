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

/* modular/resume.html.twig */
class __TwigTemplate_f758e40a2adfbe831c83b08bbcca911225cfdf7675f4cd88311e2a31e2cf855f extends \Twig\Template
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
        echo "<!-- resume Section
   ================================================== -->
<section id=\"";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", [])) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", []);
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", []));
        }
        echo "\"
         class=\"s-resume ";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sectionBackground", []);
        echo " target-section\">

    <div class=\"row section-intro\">
        <div class=\"col-twelve\">

            <h3>";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "smallTitle", []);
        echo "</h3>
            <h1>";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>

            <p class=\"lead\">";
        // line 12
        echo ($context["content"] ?? null);
        echo "</p>

        </div>
    </div> <!-- /section-intro-->

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "timeline", []));
        foreach ($context['_seq'] as $context["_key"] => $context["timeline"]) {
            // line 18
            echo "
        <div class=\"row resume-timeline\">

            <div class=\"col-twelve resume-header\">

                <h2>";
            // line 23
            echo $this->getAttribute($context["timeline"], "resumeTitle", []);
            echo "</h2>

            </div> <!-- /resume-header -->

            <div class=\"col-twelve\">

                <div class=\"timeline-wrap\">
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["timeline"], "timelineItems", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 31
                echo "
                        <div class=\"timeline-block\">

                            <div class=\"timeline-ico\">
                                <i class=\"";
                // line 35
                echo $this->getAttribute($context["item"], "icon_class", []);
                echo "\"></i>
                            </div>

                            <div class=\"timeline-header\">
                                <h3>";
                // line 39
                echo $this->getAttribute($context["item"], "position", []);
                echo "</h3>
                                <p>";
                // line 40
                echo $this->getAttribute($context["item"], "date", []);
                echo "</p>
                            </div>

                            <div class=\"timeline-content\">
                                <h4>";
                // line 44
                echo $this->getAttribute($context["item"], "title", []);
                echo "</h4>
                                <p>";
                // line 45
                echo $this->getAttribute($context["item"], "descripiton", []);
                echo "</p>
                            </div>

                        </div> <!-- /timeline-block -->
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                </div> <!-- /timeline-wrap -->

            </div> <!-- /col-twelve -->

        </div> <!-- /resume-timeline -->

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timeline'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
</section> <!-- /features -->";
    }

    public function getTemplateName()
    {
        return "modular/resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 57,  131 => 50,  120 => 45,  116 => 44,  109 => 40,  105 => 39,  98 => 35,  92 => 31,  88 => 30,  78 => 23,  71 => 18,  67 => 17,  59 => 12,  54 => 10,  50 => 9,  42 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/resume.html.twig", "/Users/dan/Sites/greenspeed/user/themes/hola/templates/modular/resume.html.twig");
    }
}
