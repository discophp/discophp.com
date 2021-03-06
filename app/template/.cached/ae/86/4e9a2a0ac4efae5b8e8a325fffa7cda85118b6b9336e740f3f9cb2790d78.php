<?php

/* Util.template.html */
class __TwigTemplate_ae864e9a2a0ac4efae5b8e8a325fffa7cda85118b6b9336e740f3f9cb2790d78 extends Twig_Template
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
        echo "<h1><a target='_blank' href='https://github.com/discophp/project/blob/master/app/class/Util.core.php'>Util Facade</a></h1>

<p>The Util (Utilitiy) Facade is a Facade that is meant to be extended by you! You ever find that you have functions that you constantly need through out a project? This is the place to put them</p>

<p class='heading'>Out of the box functions</p>

<ul class='list'>
    <li>Util::decodeURL() <span>- check out the API for this one</span></li>
    <li>Util::encodeURL() <span>- check out the API for this one</span></li>
    <li>Util::cleanInput() <span>- apply <a href='http://php.net/manual/en/function.htmlentities.php'>htmlentities()</a> to input string</span></li>
    <li>Util::timeSince() <span>- take a string representing a date and return either x mins ago, x hours ago, x days ago, x months ago, x years ago</span></li>
    <li>Util::death() <span>- redirect the user to a <span class='path'>/404</span> page</span></li>
</ul>

<p class='heading'>Get to extending!</p>

<p>
Remember how to create a Facade from the section <a href=/docs/IoC-facades'>IoC & Facades</a> right?
Create a facade for your Utility class that extends the BaseUtilities Disco class (but it doesn't have to!) and put it into use.
</p>

<pre class='prettyprint'>

    Disco::make('Util',function(){
        return new YourUtilClass();
    });

</pre>

";
    }

    public function getTemplateName()
    {
        return "Util.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
