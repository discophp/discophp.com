<?php

/* Data.template.html */
class __TwigTemplate_0a568db3960ff99f1a910e7c8494308e1833da18eba3dbee10eed9b6cce1a668 extends Twig_Template
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
        echo "<h1><a target='_blank' href='https://github.com/discophp/framework/blob/master/core/classes/Data.core.php'>Data Facade</a></h1>

<p>The Data Facade provides a convient wrapper around using HTTP GET, POST, PUT, and DELETE data.</p>

<p>PHP comes out of the box with the two suberglobals <span class='variable'>\$_POST</span> and <span class='variable'>\$_GET</span>, it does not however, 
provide the same superglobal access for what you would think would be <span class='variable'>\$_PUT</span> and <span class='variable'>\$_DELETE</span> data.
The Data Facade will parse incoming data from a PUT or DELETE stream when the HTTP request is one of the two types of methods and allow the same type of superglobal 
access through its methods.</p>

<h2>Examples</h2>

<p class='heading'>Getting a value by key</p>

<pre class='prettyprint'>

    \$getVar = Data::get('someGetVariable');

    \$postVar = Data::post('somePostVariable');

    \$putVar = Data::put('somePutVariable');

    \$delVar = Data::delete('someDeleteVariable');

</pre>

<p class='heading'>Getting a value by key with a condition</p>

<pre class='prettyprint'>

    \$getVar = Data::get()->where('getVar','integer');

    \$postVar = Data::post()->where('postVar','^[a-zA-Z\\s]+\$');

</pre>

<div class='panel'>
<p>You can set your own regex conditions by calling:</p>
<pre class='prettyprint'>
    App::addCondition('numberAndDashes','^[0-9\\-]+&');
</pre>
<p>See the default list of conditions available on the <a href='/docs/Router'>router page</a></p>
</div>


<p class='heading'>Setting a key/value pair</p>

<pre class='prettyprint'>

    Data::delete()->set('valueToDelete',52);

    Data::get()->set('someGet','donut');

    Data::post()->set('somePost','pictures');

    Data::put()->set('somePut','someputvalue');

</pre>

<p class='heading'>Determining if a key is set</p>

<pre class='prettyprint'>
    
    if(Data::delete('update-article-id')!==false)
        //value is set
    else
        //value is not set

</pre>

<p class='heading'>Get all the key/value pairs as an associative array</p>

<pre class='prettyprint'>

    \$allPostData = Data::post()->all();


    \$allDeleteData = Data::delete()->all();

</pre>


<p class='heading'>Removing a value</p>

<pre class='prettyprint'>

    Data::post()->remove('post-value-to-remove');

</pre>
";
    }

    public function getTemplateName()
    {
        return "Data.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
