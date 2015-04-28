<?php

/* Cache.template.html */
class __TwigTemplate_d1b38bf539cf46084695cc5607ac5521e61656825f8e7a0892ce90f476bbfe15 extends Twig_Template
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
        echo "<h1><a target='_blank' href='https://github.com/discophp/framework/blob/master/core/classes/Cache.core.php'>Cache Facade</a></h1>

<p>Disco uses <a target='_blank' href='http://www.php.net/manual/en/book.memcache.php'>Memcache</a> as its default caching system</p>

<p>The Cache Facade extends the memcache class so all functionality associated your typical memcache object is available through the Cache Facade</p>

<div class='panel notice'>
    <p>You must have memcache installed and the memcached server installed and running.</p>
    <p class='command'>
        sudo apt-get install php5-memcache
        <br>
        sudo apt-get install memcached
    </p>
    <p>You must also have configured your memcache host and port number in <a target='_blank' href='https://github.com/discophp/project/blob/master/.config.php'><span class='path'>.config.php</span></a> file</p>
</div>

<p>We have extended two of the most used functions</p>

<pre class='prettyprint'>
Cache::get('key');
</pre>


<pre class='prettyprint'>
Cache::set('key','value');
</pre>

<p>By default the key is hashed using an <a href='http://www.php.net/md5'>md5()</a> so strings are safe as keys</p> 

<h2>Example Usage</h2>

<pre class='prettyprint'>
    \$visitor = Cache::get('last_visitor');

    if(!\$visitor){
        Cache::set('last_visitor',\$_SERVER['REMOTE_ADDR']);
    }//if

    View::html(\"last vistor was \$visitor\");

</pre>

";
    }

    public function getTemplateName()
    {
        return "Cache.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
