<?php

/* Template.template.html */
class __TwigTemplate_5fb2027bd4f005743bdca93dfcd35cc2cb6167a4d3b8b883c3d970b71825ba85 extends Twig_Template
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
        echo "<h1><a target='_blank' href='https://github.com/discophp/framework/blob/master/core/classes/Template.core.php'>Template Facade</a></h1>

<div class='panel warning'>
    <p>As of v2.3 the tDisco templating system has been removed and replaced with <a target='_blank' href='http://twig.sensiolabs.org'>Twig by Sensio Labs</a></p>
</div>

<p>Disco is now using the Twig templating system created by Sensio Labs. If you haven't used twig head over to there <a target='_blank' href='http://twig.sensiolabs.org/documentation'>docs page</a> and check it out.
We came to the conclusion that it wouldn't make sense to pursue tDisco any longer when alternatives like twig exsist. It has all the flexiblity and features that you could ever ask for in a templating system. As such, we move forward with a 3rd party templating system and we believe it will be for the better.</p>

<hr>

<h2>Working with Disco and Twig</h2>

<p>The Template facade will provide you facaded access to twigs <span class='path'>Twig_Environment</span> class and as such you have the full power of twig through your app. We extended the Twig_Environement class so that we could carry some of the logic from tDisco and map it onto twig. Primarly just to be able to push rendered templates onto the Views html stack using the <span class='path'>with</span> method.</p>

<p class='heading'>How to render a twig template</p>
<pre class='prettyprint'>
    \$renderedTemplate = Template::render('template.html',Array('variable'=>'value'));
</pre>

<p class='heading'>Where do we store templates?</p>
<p>Templates are stored in <span class='path'>app/template/</span> and can use any naming convention you like.</p>

<p>You can create sub-directorys in the template folder to better organize your templates. Accessing templates stored in sub-directorys is really simple for 
example <span class='path'>Template::build('clothes/tshirt.html',\$data);</span> where the template <span class='path'>tshirt.html</span> is stored in <span class='path'>app/template/clothes/</span></p>

<p class='heading'>Specifing a default template extension</p>
<p>It's redundant to have to declare the templates extension everytime you render one, ie <span class='path'>.html</span> after every template name.</p>
<p>In your <span class='path'>.config.php</span> file you can declare a variable <span class='variable'>TEMPLATE_EXTENSION</span> that specifies a default template extension.</p>
<pre class='prettyprint'>
//This is in .config.php

\"TEMPLATE_EXTENSION\" => \".html\"

</pre>
<pre class='prettyprint'>
//now you don't need to specify the .html extension
Template::with('index');
</pre>


<p class='heading'>There are two main methods of the Template Facade that you really need to understand:</p>

<ul class='list'>
    <li>Template::with() <span>- This method will build a template and automatically push it onto the Current Views HTML stack</span></li>
    <li>Template::build() <span>- This method will build a template and return the HTML</span></li>
</ul>


<h2>Lets jump into some examples</h2>

<p class='heading'>Loading a template that has no variables into the View</p>
<pre class='prettyprint'>
    //push the template onto the Views html stack
    Template::with('index.html');

    //return the template
    \$index = Template::build('index.html');
</pre>

<hr>

<p class='heading'>Loading a template that has variables into the View</p>
<pre class='prettyprint'>
    \$data = Array('message'=>'Hello World!');

    Template::with('welcomePage.html',\$data);

</pre>

<hr>

<p class='heading'>Assign a Template to a variable</p>

<pre class='prettyprint'>
    \$data = Array('message'=>'Hello World!');

    \$template = Template::build('welcomePage.html',\$data);
</pre>


<h3>Building a Template From a Model</h3>

<p>You can build a template from a model that extends \\Disco\\classes\\Model by passing its class name as the second arguement and the where condition as the third arguement.
A ->select('*') will be performed on the model and the fields in your table will be available as variables inside the template with the exact name as they are in your database table.
</p>

<pre class='prettyprint'>
    //the from method will push the template onto the Views html stack.
    Template::from('dashboard.html','user',Array('id'=>Session::get('id')));

    //the build_from method will return the template
    \$dashboard = Template::buildFrom('dashboard.html','user',Array('id'=>Session::get('id')));

</pre>





";
    }

    public function getTemplateName()
    {
        return "Template.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
