<?php

/* Html.template.html */
class __TwigTemplate_2e4ea07b517a9578b221bc4b74202de65da0ba79eefb834667fe3e15fa983663 extends Twig_Template
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
        echo "<h1><a href='https://github.com/discophp/framework/blob/master/core/classes/Html.class.php'>Html</a></h1>

<p>The Html Facade can be used to generate html dynamically in your application.</p>

<p>Lets hop into some examples</p>

<pre class='prettyprint'>
    \$d = Html::div('Super cool');

    \$s = Html::section(Array('class'=>'row collapse'),\$d);

    \$span = Html::span('nice span!');

    \$div = Html::div( Array('data-id'=>5,'class'=>'take-action'), 'Click me to do something');

</pre>

<p>As you can see above, the type of element that you want to build is specified by the method name. If the first
paramater passed is an array then those keys and values will be used to build the properties for the element specified by the 
method name. Other wise it is assumed what is being passed in is the content that should be inside the generated element.</p>

<p>There is no limit to what elements you can build, as this class uses the magic method <span class='path'>__call(\$method,\$args)</span> to determine 
what element it should be building.</p>

<p class='heading'>What about singleton elements (elements that don't have a closing tag)?</p>

<p>Singleton elements such as inputs, textareas, imgs, hrs ect will all be built correctly. The intended element to be built will be crossed check with this 
array to determine whether or not it is a singleton element and will omit the closing tag accordingly.</p>
<pre class='prettyprint'>
Array('area','base','br','col','command','embed','hr','img','input','link','meta','param','source');
</pre>


<h2><span class='path'>push()</span> - Pushing the generated html onto the Views stack</h2>

<p>The Html class does in fact have one hard coded method, the <span class='path'>push()</span> method. Calling this before your method call to build your element 
will cause the resulting html to be pushed onto the current Views html stack.</p>

<pre class='prettyprint'>
    Html::push()->ul(Html::li('first item'));
</pre>
";
    }

    public function getTemplateName()
    {
        return "Html.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
