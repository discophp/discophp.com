<?php

/* header.template.html */
class __TwigTemplate_2016d93ea4fb4f17041ca936811f8b69296f88095761d1f8fe6695401e2c95ec extends Twig_Template
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
        echo "<div class='logo-header clearfix'>
    <a href='/'>
        <img src='/images/logo.png'>
        <div class='name'>Disco PHP Framework</div>
    </a>
</div>

<nav class=\"top-bar docs\" data-topbar> 
    <ul class=\"title-area\"> 
        <li class=\"name version\"> 
            <a href=\"http://github.com/discophp/framework/tree/2.1\">v2.1</a> 
            <a href=\"http://github.com/discophp/framework/tree/2.2\">v2.2</a> 
        </li> 
        <li class=\"toggle-topbar menu-icon\">
            <a href=\"#\">Menu</a>
        </li> 
    </ul> 

    <section class=\"top-bar-section\"> 
        <!-- Right Nav Section --> 
        <ul class=\"right main-nav\"> 
            <li>
                <a href=\"/\">Home</a>
            </li> 
            <li>
                <a href=\"/docs\">Docs</a>
            </li>
            <li>
                <a href=\"/api/index.html\">API</a>
            </li>
            <li>
                <a href=\"http://github.com/discophp\">Github</a>
            </li>

        </ul> 
        
        <!-- Left Nav Section --> 
        <ul class=\"left\"> 
        </ul> 
    </section> 
</nav>
";
    }

    public function getTemplateName()
    {
        return "header.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
