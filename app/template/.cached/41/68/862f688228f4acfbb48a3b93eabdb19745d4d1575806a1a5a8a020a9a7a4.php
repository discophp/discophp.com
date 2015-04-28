<?php

/* _default.html */
class __TwigTemplate_4168862f688228f4acfbb48a3b93eabdb19745d4d1575806a1a5a8a020a9a7a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute((isset($context["view"]) ? $context["view"] : null), "isAjax", array())) ? ("_ajax_layout.html") : ("_layout.html")), "_default.html", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div id='body-wrapper'>
    <div id='body'>";
        // line 6
        echo $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "body", array());
        echo "</div>
    <div id='header'>";
        // line 7
        echo $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "header", array());
        echo "</div>
    <div id='footer-spacing'></div>
</div>
<div id='footer'>";
        // line 10
        echo $this->getAttribute((isset($context["view"]) ? $context["view"] : null), "footer", array());
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "_default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  38 => 7,  34 => 6,  30 => 4,  27 => 3,  18 => 1,);
    }
}
