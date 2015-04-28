<?php

/* Addons.template.html */
class __TwigTemplate_66ccad0c3cb8d32360d77cba997d9a05b7a530b54e19f966f216b3eadf13a2c7 extends Twig_Template
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
        echo "<h1>Addons</h1>

<p>Using and creating addons has never been easier using with the Disco PHP Framework. 
You can incorporate others addons or build you own for yourself and the community to use.</p>

<p>Addons for Disco by nature make use of the <a href='/docs/IoC-facades'>Inversion of Control and Facading principles</a> inherint in all Disco projects.</p>

<p>Addons are installable via <span class='path'>composer</span> and developers should make their packages available on <a href='http://packagist.org'>packagist</a>.</p>

<p>The use cases for Addons are limitless but their structure however is predefined.</p>

<p class='heading'>Addon Project Structure</p>

<ul>
    <li>addon/</li>
    <ul>
        <li>classes</li>
        <li>controller</li>
        <li>facade</li>
        <li>model</li>
        <li>router</li>
        <li>template</li>
    </ul>
    <li>composer.json</li>
    <li>LICENSE</li>
</ul>

<p>Your composer.json should contain all the necessary information about your addon and include a section for <span class='path'>autoloads</span> structured like so:</p>

<pre class='prettyprint'>
\"autoload\": {
    \"classmap\":[
        \"addon/facade/\",
        \"addon/controller/\",
        \"addon/classes/\",
        \"addon/model/\",
        \"addon/template/\"
    ],
    \"psr-4\":{
        \"Disco\\\\addon\\\\[Your Addon Name]\\\\\":\"addon/\"
    }
}
</pre>


<p class='panel'><a href='/docs/Router'>Routers</a> and <a href='/docs/Template'>Templates</a> 
are made available through the Disco addon autoloads feature which tracks files unavailable via 
<span class='path'>composers autload.php</span> and makes them availble during application runtime.</p>

<hr>

<h2>Registering the Addons Facades with the Disco container</h2>

<p class='panel notice'>Required on behalf of the installer of the addon will be the registering of the <a href='/docs/IoC-facades'>facades</a> the addon exposes and you want to make use of.</p>

<p class='heading'>Approaches to registering the addons facades with the Disco container</p>

<p><i>For examples sake we will use the <a target='_blank' href='http://github.com/discophp/wordpress'>Wordpress Addon</a> for the following</i></p>

<ol>
    <li>
        <p>Have the installer register the facades themselves, for example:</p>
        <pre class='prettyprint'>
Disco::make('WP',function(){
    reutrn new Disco\\addon\\Wordpress\\classes\\WordPress;
});
        </pre>
    </li>

    <li>
        <p>Create a static method on a class available via composers autoload and allow the installer to call it, for example:</p>
        <pre class='prettyprint'>
Disco\\addon\\Wordpress\\classes\\WordPress::registerFacades();
        </pre>
    </li>
    <li>
        <p><i>(not recommended)</i></p>
        <p>Have the installer require a file the holds the code to register the facades, for example:</p>
        <pre class='prettyprint'>
require('vendor/discophp/wordpress/registerFacades.php');
        </pre>
    </li>
</ol>


";
    }

    public function getTemplateName()
    {
        return "Addons.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
