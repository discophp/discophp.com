<?php

/* Queue.template.html */
class __TwigTemplate_943db9a59b14dd5e19518c78674a3d9c6286b0337513c35c583f2530c90cb9d4 extends Twig_Template
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
        echo "<h1>Queue</h1>

<p>Often times it is required/necessary to defer or run in parallel some heavy processing or long running job that is triggered dynamically
within your application. That's where the Queue Facade will come in handy.
</p>

<p class='heading'>Meet the Queue Facade</p>

<p>The queue takes a minimum of 2 paramaters. The first is the Class you want to use to do the work. You can pair the Class name 
with a \"@\" symbol to denote which method you wish to call on the Class specified. If no \"@\" symbol exists then a default method of <span class='path'>work()</span>
will attempt to be called on the Class. The second paramater is the delay you wish to execute before the job begins being processed.</p>

<p>Optionally you can pass a 3rd paramater in the form of a string, a number, or an array. All of which are variables that will be passed to the job you specified in 
the first paramater.</p>

<pre class='prettyprint'>

    \$job = 'DB@sp';

    \$delay = 0;

    \$var = 'CALL really_long_running_job()';

    Queue::push(\$job,\$delay,\$var);

</pre>

<p>The stored procedure <span class='path'>really_long_running_job()</span> will now start being processed immeditaly in parallel to the execution
of the application request. Its completion and execution will not interfere with our applications request in any way.</p>


<p class='heading'>Another Example</p>


<pre class='prettyprint'>

    \$userId = 439583;

    \$job = 'DB@query';

    \$delay = 5;

    \$var = Array('
        UPDATE USER_FINANCE SET total_worth = 
            (SELECT SUM(udp.portfolio_value) FROM USER_DAILY_PORTFOILIO udp WHERE udp.user_id=?)
        WHERE user_id=?',

        Array(\$userId,\$userId)

        );

    Queue::push(\$job,\$delay,\$var);

</pre>

";
    }

    public function getTemplateName()
    {
        return "Queue.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
