<?php

/* {# inline_template_start #}<div class="gallery_photo">
    <div class="image">{{ field_image }}</div>
    <div class="gallery_content">
        <div class="title">{{ title }}</div>
        <div class="sub-title">Volleyball </div>
    </div>
</div> */
class __TwigTemplate_f383a00312e95df93e753349ca54804a778e185de0c16f2762a94ff1296086ab extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div class=\"gallery_photo\">
    <div class=\"image\">";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_image"]) ? $context["field_image"] : null), "html", null, true));
        echo "</div>
    <div class=\"gallery_content\">
        <div class=\"title\">";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</div>
        <div class=\"sub-title\">Volleyball </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"gallery_photo\">
    <div class=\"image\">{{ field_image }}</div>
    <div class=\"gallery_content\">
        <div class=\"title\">{{ title }}</div>
        <div class=\"sub-title\">Volleyball </div>
    </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 4,  52 => 2,  49 => 1,);
    }
}
/* {# inline_template_start #}<div class="gallery_photo">*/
/*     <div class="image">{{ field_image }}</div>*/
/*     <div class="gallery_content">*/
/*         <div class="title">{{ title }}</div>*/
/*         <div class="sub-title">Volleyball </div>*/
/*     </div>*/
/* </div>*/
