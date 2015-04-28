<?php

/* menu.template.html */
class __TwigTemplate_c4fb3f84e8bda81911261ec2b6502c7ebb14a88db2a45f4e88755888bde67bd7 extends Twig_Template
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
        // line 1
        echo "
<div class='entry-way'>
    <a href=\"/docs\">Docs</a>
    <a href=\"/api/index.html\">API</a>
    <a href=\"http://github.com/discophp/framework\">Github</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "menu.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
