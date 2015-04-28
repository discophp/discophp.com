<?php

/* install.template.html */
class __TwigTemplate_223eccc1d1662f6d4f7a1b7c462a0ecc4633050fd17f3d32f0ef02cf17483d4d extends Twig_Template
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
        echo "<h1>Install</h1>

<h2 class='mlarge-font heading'>Git Clone then Composer</h2>

<p>First you will want to clone a Disco Project from github</p>
<p class='command'>git clone https://github.com/discophp/project.git</p>

<p>If you don't have composer installed globally grab a copy into the project directory</p>
<p class='command'>cd project</p>
<p class='command'>curl -sS https://getcomposer.org/installer | php</p>

<p>Make sure the <span class='path'>composer.phar</span> is in the projects root directory</p>

<p>Now install Disco!</p>

<p class='command'>php composer.phar install</p>

<hr>


<h3 class='heading mlarge-font'>Using only Composer</h3>

<p class='command'>composer create-project discophp/project your-project-folder 2.0</p>


";
    }

    public function getTemplateName()
    {
        return "install.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
