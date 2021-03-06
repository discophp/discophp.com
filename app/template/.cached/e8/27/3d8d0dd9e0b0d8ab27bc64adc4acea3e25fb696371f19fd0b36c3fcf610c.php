<?php

/* CLI.template.html */
class __TwigTemplate_e8273d8d0dd9e0b0d8ab27bc64adc4acea3e25fb696371f19fd0b36c3fcf610c extends Twig_Template
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
        echo "<h1>Command Line Interface CLI</h1>

<p>The Disco PHP Framework ships with its own CLI or Command Line Interface that you can use to monitor and tweak your application with.</p>

<p class='heading'>Usage</p>

<p class='command'>php disco [task] [[options]]</p>

<br>
<hr>
<br>

<p class='heading'>Switching Your Application Into <span class='variable'>DEV</span> and <span class='variable'>PROD</span> mode</p>

<p class='command'>php disco mode [DEV|PROD]</p>

<p>Or to check which mode your application is currently in</p>

<p class='command'>php disco mode</p>

<br>
<hr>
<br>


<p class='heading'>Putting Your Application into <span class='variable'>MAINTENANCE_MODE</a></p>

<p>When your application is in maintenance mode all requests made to it will display the result of the Closure function stored in <a href='http://github.com/discophp/project/blob/master/app/maintenance.php' target='_blank'>app/maintenance.php</a>
on every page and none of your applications logic will be called.</p>

<p class='command'>php disco maintenance-mode [YES|NO]</p>

<p>Or to check which mode your application is currently in</p>

<p class='command'>php disco maintenance-mode</p>

<br>
<hr>
<br>


<p class='heading'>View Queued Jobs</p>

<p class='command'>php disco jobs</p>

<p>Example Output</p>

<div class='text-center'>
    <img src='/images/jobs.png'>
</div>


<p class='heading'>Kill a Queued Job</p>

<p class='command'>php disco kill-job [job#]</p>

<br>
<hr>
<br>

<p class='heading'>View MySQL Statistics</p>

<p class='command'>php disco mysql</p>

<p>Example Output</p>

<div class='text-center'>
    <img src='/images/mysql-stats.png' title='sample output from running the mysql CLI command'>
</div>


<br>
<hr>
<br>


<p class='heading'>Generate AES256 Key</p>

<p class='command'>php disco gen aes</p>

<p>Output</p>

<p><span class='variable'>0e0d82b85c5d840df16488ea7b3dbc6a</span></p>


<p class='heading'>Generate and Set AES256 Key</p>

<p class='command'>php disco gen aes set</p>

<p>This will set the <span class='variable'>AES_KEY256</span> in <span class='path'>.config.php</span> to the newly generated key</p>


<p class='heading'>Generate SHA512 Key</p>

<p class='command'>php disco gen sha [length]</p>

<p>For the sha512 keys you will need to specifiy what length you wish generated</p>

<p class='command'>php disco gen sha 12</p>

<p>Output</p>

<p><span class='variable'>2ca5fcdb77c4</span></p>


<p class='heading'>Generate and Set SHA512 Key</p>

<p>To set the sha512 values in your <span class='path'>.config.php</span> pass one of the two paramters <span class='path'>set-lead</span> or <span class='path'>set-tail</span> after the length paramater.</p>

<p class='command'>php disco gen sha 12 [set-lead|set-tail]</p>

<p>This will set the <span class='variable'>SHA512_SALT_[LEAD|TAIL]</span> in <span class='path'>.config.php</span> to the newly generated key</p>

<br>
<hr>
<br>

<p class='heading'>Dynamically call a Facade or Class and method of your Application</p>

<p>format</p>
<p class='command'>php disco with [[object] [method] [var0] [var1]...]</p>

<p>Examples</p>

<p>Check out the information about a Models table</p>
<p class='command'>php disco with SomeModel about</p>
<p>Check out the columns of a Models table</p>
<p class='command'>php disco with SomeModel columns</p>

<p>Call some random methods</p>
<p class='command'>php disco with User profileData 3205</p>

<p class='command'>php disco with View header</p>

<p class='command'>php disco with DB sp 'CALL user_data(?)' 3205</p>

<br>
<hr>
<br>

<p class='heading'>Creating models from your DB</p>
<p>format</p>
<p class='command'>php disco create model [table_name]</p>

<p>This will not override a model that already exists</p>
<p>You can use the keyword <span class='variable'>all</span> to create a model for all your tables.</p>
<p class='command'>php disco create model all</p>

<p>Example</p>

<p class='command'>php disco create model products</p>

<br>
<hr>
<br>

<p class='heading'>Listing all your routers in an organized fashion</p>

<p class='command'>php disco routes [[output_format]]</p>

<p>You may specify what type of output format you wish to generate by passing either nothing, which will print_r the routes,
passing <span class='variable'>html</span> to generate HTML, or by passing <span class='variable'>csv</span> to generate CSV output.</p>

<a href='/routes.html'>View Sample HTML Output</p>



";
    }

    public function getTemplateName()
    {
        return "CLI.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
