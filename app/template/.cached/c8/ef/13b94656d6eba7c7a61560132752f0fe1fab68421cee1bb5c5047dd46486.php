<?php

/* Event.template.html */
class __TwigTemplate_c8ef13b94656d6eba7c7a61560132752f0fe1fab68421cee1bb5c5047dd46486 extends Twig_Template
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
        echo "<h1><a target='_blank' href='https://github.com/discophp/framework/blob/master/core/classes/Event.core.php'>Event Facade</a></h1>

<p>An Event is really just an implementation of a broadcast receiver pattern</p>

<p>There are two critical parts to using an Event:</p>

<ul class='list'>
    <li>Event::listen() <span>- listen for a specified action</span></li>
    <li>Event::fire() <span>- fire off an event</span></li>
</ul>

<p class='heading'>Lets see an example</p>

<pre class='prettyprint'>

    Event::listen('logVisitor',function(\$ip,\$pageSlug){

    \t\$data = Array(\$ip,\$pageSlug);

        DB::query('INSERT INTO traffic VALUES(?,?,NOW())',\$data);

    });


    Event::fire('logVisitor',Array(\$_SERVER['REMOTE_ADDR'],\$_SERVER['REQUEST_URI']));

</pre>

<p>In this example we registered an Event \"logVisitor\" and specified a Closure to be executed when the Event is fired. We then fired that Event.</p>
<p>Variable binding into the called Closure or Object is automatic.</p>

<hr>

<h2>Where to put Events?</h2>

<ul class='list'>
    <li>index.php <span>- you can register your events in index.php</span></li>
    <li>In any block of code <span>- you can register your events anywhere really, as long as you register the event before you fire it</span></li>
    <li>Your own file <span>- you could create any number of events files and include them when you need them</span></li>
</ul>

<hr>

<h3>Calling classes rather than a Closure</h3>

<p>You can specify a class and method to be executed instead of a Closure</p>

<pre class='prettyprint'>
    Event::listen('logVisitor','Visitor@logHit');
</pre>

<p>Now when the event \"logVisitor\" is fired a Vistor object will be instantiated and the method logHit will be called</p>

<div class='panel notice'>If you don't specify a method a default method of <span class='path'>work()</span> will attempt to be called</div>

<h3>Priority</h3>

<p>You can bind multiple actions to a single event if you prioritize the actions to be called</p>

<pre class='prettyprint'>

    Event::listen('logVisitor','Visitor@wasSecure',20);

    Event::listen('logVisitor','Visitor@logHit',1);


    Event::fire('logVisitor');

</pre>

<div class='panel notice'>The lower the number the higher the priority.</div>
<p>In this example the method <span class='path'>logHit</span> will be called first and then the method <span class='path'>wasSecure</span> will be called</p>

";
    }

    public function getTemplateName()
    {
        return "Event.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
