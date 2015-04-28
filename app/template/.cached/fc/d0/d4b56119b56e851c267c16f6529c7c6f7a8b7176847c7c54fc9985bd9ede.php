<?php

/* template-guide.template.html */
class __TwigTemplate_fcd0d4b56119b56e851c267c16f6529c7c6f7a8b7176847c7c54fc9985bd9ede extends Twig_Template
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
        echo "<h1>Views & Templating</h1>

<p>Requests to web applications typically result in one of two types of responses:</p>
<ul class='list'>
    <li><span>A Full HTML Page</span></li>
    <li><span>A Data Structure or HTML snippet</span></li>
</ul>

<p>Our View Facade represents both the former and the latter. The View Facade embodies a full web page ready to be loaded up with data.
Its eventual output produces either a webpage including a header, body, and footer, or it produces a Data snippet via an AJAX request.
</p>

<a name='view-basics'></a>
<h2>View Basics</h2>

<p class='heading'>Putting HTML into the View</p>

<pre class='prettyprint'>
    View::html('some html');
</pre>

<p>The contents of your eventual page are treated as a Stack and you can keep pushing onto that stack untill the request is finished</p>

<p class='heading'>Putting JavaScript into the View</p>

<pre class='prettyprint'>
    View::script('alert(\"hi!\");');
</pre>

<p>Scripts you add to the page will always be printed last, after the footer is printed</p>

<hr>

<a name='view-extend'></a>
<h3>Extending the View class</h3>

<p>So how do we get our view to represent differing pages? We extend the Disco\\classes\\View class!</p>


<p class='heading'>This is the extended Disco\\classes\\View class being used to generate the Docs pages of this site</p>

<pre class='prettyprint'>

Class StandardView extends Disco\\classes\\View {

    public function header(){
        return Template::build('header');
    }//header

    public function __construct(){

        \$this->scriptSrc('http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');
        \$this->scriptSrc('/scripts/js.js');
        \$this->scriptSrc('/scripts/modernizr.js');
        \$this->scriptSrc('/scripts/foundation.min.js');
        \$this->scriptSrc('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js');

        \$this->styleSrc('/css/foundation.min.css');
        \$this->styleSrc('/css/css.css');

        \$this->script('\$(document).foundation();');

    }//construct

    public function footer(){
        return Template::build('footer');
    }//footer

}//Standard

</pre>

<p>A couple key things are happening in this extended View class</p>

<p>First we are overriding the three methods <span class='path'>header()</span>,<span class='path'>__construct()</span> and <span class='path'>footer()</span></p>

<ul class='list'>
    <li>header() <span>- return html markup to be used in the view.header variable for your view</li>
    <li>__construct() <span>- tell the view what scripts and style sheets we depend on and modify the view in anyway.</li>
    <li>footer() <span>- return html markup to be used in the view.footer variable for your view</li>
</ul>

<p class='heading'>How to set which View your application is using</p>

<pre class='prettyprint'>

    App::make('View',function(){
        return new StandardView();
    });

    View::html('Were now using the Standard View class which extends the Disco\\classes\\View class!');

</pre>

<p>You can set the View class from anywhere in your application</p>
<div class='panel notice'>
    When you shift which view you are using any previously added HTML/Scripts/Styles will be destoryed
</div>

<hr>

<p class='heading'>What if we have an AjaxRequest and don't need a full page returned and just some data structure or a snippet?</p>

<p>It's easy just use the isAjax() method</p>

<pre class='prettyprint'>
    View::isAjax();
</pre>


<hr>

<a name='template-basics'></a>
<h2>Templating Basics</h2>

<p><strike>Disco comes with its own powerful Templating engine (we call it tDisco)</strike></p>
<div class='panel warning'>
    <p>As of v2.3 the tDisco templating system has been removed and replaced with <a target='_blank' href='http://twig.sensiolabs.org'>Twig by Sensio Labs</a></p>
</div>

<p class='heading'>Using your first Tempalte</p>

<p>Templates are stored in <span class='path'>app/template/</span> and can adhere to any naming convention you like.</p>

<p>Lets create a simple template named <span class='path'>index.html</span></p>

<pre class='prettyprint'>

    &lt;h1&gt;&#123;&#123; heading &#125;&#125;&lt;/h1&gt;
    &lt;div&gt;&#123;&#123; text &#125;&#125;&lt;/div&gt;

</pre>

<p>You will notice that we define a variable with double brackets.</p> 

<p class='heading'>Lets use the template</p>

<pre class='prettyprint'>

    \$data = Array('heading'=>'Welcome to the Site!','text'=>'Some body paragraph');
    
    Template::with('index.html',\$data);

</pre>

<p>There are two main methods of the Template Facade that you really need to understand:</p>

<ul class='list'>
    <li>Template::with() <span>- This method will build a template and automatically push it onto the Current Views HTML stack</span></li>
    <li>Template::build() <span>- This method will build a template and return the HTML</span></li>
</ul>

<p>To learn more about the Templating System tDisco head over the the <a href='/docs/Template'>Template Docs page</a> for full a breakdown (you will want to do this!)</p>




";
    }

    public function getTemplateName()
    {
        return "template-guide.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
