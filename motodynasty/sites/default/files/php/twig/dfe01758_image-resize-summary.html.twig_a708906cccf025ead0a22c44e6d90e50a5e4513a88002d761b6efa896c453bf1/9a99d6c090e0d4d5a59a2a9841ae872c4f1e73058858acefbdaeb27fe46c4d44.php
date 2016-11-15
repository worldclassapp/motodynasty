<?php

/* core/themes/stable/templates/admin/image-resize-summary.html.twig */
class __TwigTemplate_346e9f301a1803f8252b34e7137ee042725f324b913c2f1153e8854e2852648a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 16, "trans" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 16
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array()) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array()))) {
            // line 17
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array()), "html", null, true));
            echo "×";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array()), "html", null, true));
        } else {
            // line 19
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "width", array())) {
                // line 20
                echo "    ";
                echo t("width @data.width", array("@data.width" => $this->getAttribute(                // line 21
(isset($context["data"]) ? $context["data"] : null), "width", array()), ));
                // line 23
                echo "  ";
            } elseif ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "height", array())) {
                // line 24
                echo "    ";
                echo t("height @data.height", array("@data.height" => $this->getAttribute(                // line 25
(isset($context["data"]) ? $context["data"] : null), "height", array()), ));
                // line 27
                echo "  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/image-resize-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 27,  61 => 25,  59 => 24,  56 => 23,  54 => 21,  52 => 20,  50 => 19,  45 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a summary of an image resize effect.*/
/*  **/
/*  * Available variables:*/
/*  * - data: The current configuration for this resize effect, including:*/
/*  *   - width: The width of the resized image.*/
/*  *   - height: The height of the resized image.*/
/*  * - effect: The effect information, including:*/
/*  *   - id: The effect identifier.*/
/*  *   - label: The effect name.*/
/*  *   - description: The effect description.*/
/*  *//* */
/* #}*/
/* {% if data.width and data.height -%}*/
/*   {{ data.width }}×{{ data.height }}*/
/* {%- else -%}*/
/*   {% if data.width %}*/
/*     {% trans %}*/
/*       width {{ data.width }}*/
/*     {% endtrans %}*/
/*   {% elseif data.height %}*/
/*     {% trans %}*/
/*       height {{ data.height }}*/
/*     {% endtrans %}*/
/*   {% endif %}*/
/* {%- endif %}*/
/* */
