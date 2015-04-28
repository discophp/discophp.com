<?php

/* request-lifecycle.template.html */
class __TwigTemplate_a613d43c3c4a8933c4b90237c190870ccb11b89f2b40554f3fc0264b4104ef92 extends Twig_Template
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
        echo "<h1>Request Life-Cycle</h1>

<p>Here we will detail each piece of the applications request life-cycle in a step-wise process.</p>

<p>First off, all requests in Disco are routed through <span class='path'>public/index.php</span>, unless there is a filename given with a matching file on the system to execute the request.
See the <a href='http://github.com/discophp/project/blob/master/public/.htaccess'><span class='path'>.htaccess</span></a> file and check out the modrewrite rules.</p>
<div class='notice panel'>
    <p>You must enable modrewrite if your using the Apache2 Server.</p>
    <p class='command'>sudo a2enmod rewrite</p>
</div>

<ol>

    <li>The first line in <span class='path'>public/index.php</span> is going to require the the composer autoloader</li>
    
    <li>We then construct a new App at which point the necessary preprocessing is done to make the application ready for use</li>
    <ul>
        <p>Call <span class='path'>App::setUp()</span> to bootstrap the App:</p>
        <li>Call <span class='path'>prep()</span> which handles loading your <a href='/docs/config'>applications configuration</a></li>
        <li>Call <span class='path'>services()</span> to register the default <a href='/docs/IoC-facades'>Facades</a> with the Disco container</li>
        <li>If our application is in <span class='variable'><a href='/docs/config'>MAINTENANCE_MODE</a></span> then display the maintenance screen and exit the application immediatly</li>
    </ul>
    
    <li>Now our flow of control is back to <span class='path'>public/index.php</span> and all user written logic begins being processed</li>

    <li>Lastly <span class='path'>App::tearDown()</span> is called to handle the necessary application post processing. This is when routes in <a href='http://github.com/discophp/project/blob/master/app/routes'><span class='path'>app/routes</span></a></p> 
    <ul>
        <li>Check that a Router did match the requested URI, <b>if not</b> then display the applications <span class='path'>/404</span> page</li>
        <li><span class='path'>View::printPage()</span> is called and the View is printed</li>
    </ul>

</ol>

";
    }

    public function getTemplateName()
    {
        return "request-lifecycle.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
