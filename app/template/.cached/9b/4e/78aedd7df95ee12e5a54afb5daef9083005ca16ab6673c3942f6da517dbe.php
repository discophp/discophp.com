<?php

/* footer.template.html */
class __TwigTemplate_9b4e78aedd7df95ee12e5a54afb5daef9083005ca16ab6673c3942f6da517dbe extends Twig_Template
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
        echo "<div class='row collapse'>
    <p class='copyright'>
        Disco is a TradeMark of Bradley Hamilton. Copyright &copy; 
        <a href='http://www.bradleyhamilton.com'>Bradley Hamilton</a>
    </p>
    <p>
        Disco Frame Work is distributed under the 
        <a href='https://github.com/discophp/framework/blob/master/LICENSE'>Apache License Version 2.0</a>
    </p>

    <hr>

    <p>See a typo on the site? Have an idea you want to implement?</p>
    <p><a target='_blank' href='https://github.com/discophp/discophp.com'>Fork this site and issue some pull requests!</a></p> 

</div>
";
    }

    public function getTemplateName()
    {
        return "footer.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
