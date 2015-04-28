<?php

/* View.template.html */
class __TwigTemplate_9c0886e01ebbae975c4c668c9cf7a84efd28ea3b7c22beba716d04389b9ee6a7 extends Twig_Template
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
        echo "<h1><a target='_blank' href='https://github.com/discophp/framework/blob/master/core/classes/View.core.php'>View Facade</a></h1>

<p>Requests to web applications typically result in one of two types of responses:</p>
<ul class='list'>
    <li><span>A Full HTML Page</span></li>
    <li><span>A Data Structure or HTML snippet</span></li>
</ul>


<p>The View Facade can be thought of as the orchestrater of the eventual output that will be your webpage for a specific route.
 This includes handling the production of both types of outputs listed above ^. 
It's in charge of holding all the html/javascript/css pieces that will go into creating the page as well as providing the functionality 
to accomplish the task of organizing and outputting the page. 
</p>


<p class='heading'>The way the Disco View class sees a webpage</p>
<p>The <span class='path'>_layout.html</span> Twig template serves as the base for all non-ajax requests<p>
<pre class='prettyprint'>
// app/template/_layout.html


    &lt;!doctype html&gt;
    &lt;html lang='&#123;&#123; view.lang &#125;&#125;'&gt;
        &lt;head&gt;
            &lt;meta charset='&#123;&#123; view.charset &#125;&#125;' /&gt;
            &lt;meta content='&#123;&#123; view.robots &#125;&#125;' name='robots'&gt;
            &lt;meta name='viewport' content='width=device-width, initial-scale=1.0' /&gt;
            &lt;title&gt;&#123;&#123; view.title &#125;&#125;&lt;/title&gt;
            &#123;% if view.description %&#125;
            &lt;meta name='description' content=\"&#123;&#123; view.description &#125;&#125;\"&gt;
            &#123;% endif %&#125;
    
            &lt;link type='image/x-icon' href='&#123;&#123; url(view.favIcon) &#125;&#125;' rel='shortcut icon'&gt;
    
            &#123;% for s in view.styleSrcs %&#125;
            &lt;link rel='stylesheet' href='&#123;&#123; url(s.src) &#125;&#125;' type='text/css'&#123;% for p,a in s.props %&#125; &#123;&#123; p &#125;&#125;=\"&#123;&#123; a &#125;&#125;\"&#123;% endfor %&#125; /&gt;
            &#123;% endfor %&#125;
    
            &#123;% if view.styles %&#125;
            &lt;style&gt;&#123;&#123; view.styles &#125;&#125;&lt;/style&gt;
            &#123;% endif %&#125;
    
            &#123;% for s in view.headScriptSrcs %&#125;
            &lt;script type='text/javascript' src='&#123;&#123; url(s.src) &#125;&#125;'&#123;% for p,a in s.props %&#125; &#123;&#123; p &#125;&#125;=\"&#123;&#123; a &#125;&#125;\"&#123;% endfor %&#125;&gt;&lt;/script&gt;
            &#123;% endfor %&#125;
    
            &#123;% if view.headExtra %&#125;
            &#123;&#123; view.headExtra &#125;&#125;
            &#123;% endif %&#125;
    
        &lt;/head&gt;
        &lt;body&#123;% if view.bodyStyles %&#125; class='&#123;&#123; view.bodyStyles &#125;&#125;'&#123;% endif %&#125;&gt;
    
            &#123;% block content %&#125;&#123;% endblock %&#125;
    
            &#123;% for s in view.scriptSrcs %&#125;
            &lt;script type='text/javascript' src='&#123;&#123; url(s.src) &#125;&#125;'&#123;% for p,a in s.props %&#125; &#123;&#123; p &#125;&#125;=\"&#123;&#123; a &#125;&#125;\"&#123;% endfor %&#125;&gt;&lt;/script&gt;
            &#123;% endfor %&#125;
    
            &#123;% if view.scripts %&#125;
            &lt;script type='text/javascript'&gt;&#123;&#123; view.scripts&#125;&#125;&lt;/script&gt;
            &#123;% endif %&#125;
    
        &lt;/body&gt;
    &lt;/html&gt;
</pre>

<p>And the <span class='path'>_default.html</span> Twig template serves as the default page structure. It is what populates the block content in the <span class='path'>_layout.html</span> template above.</p>

<pre class='prettyprint'>
// app/template/_default.html


&#123;% extends view.isAjax ? \"_ajax_layout.html\" : \"_layout.html\" %&#125;

&#123;% block content %&#125;

&lt;div class='header'&gt;&#123;&#123; view.header|raw &#125;&#125;&lt;/div&gt;
&lt;div class='body'&gt;&#123;&#123; view.body|raw &#125;&#125;&lt;/div&gt;
&lt;div class='footer'&gt;&#123;&#123; view.footer|raw &#125;&#125;&lt;/div&gt;

&#123;% endblock %&#125;
</pre>

<p>You can dynamically change which template to use for the default page structure by using the <span class='path'>View::setBaseTemplate()</span> method</p>
<pre class='prettyprint'>
//lets use the page structure shopping.html
View::setBaseTemplate('shopping.html');
</pre>

<p>As you can see above the variable <span class='path'>view</span> is made available in both your <span class='path'>_layout.html</span> and <span class='path'>_default.html</span> templates. This variable contains all the data set by your extended view class as well as some sensible defaults.</p>
<p>Here is whats made available in the view variable</p>
<pre class='prettyprint'>
private \$view = Array(                                                                                              
         'title'             => '',
         'description'       => '',
         'charset'           => 'utf-8',
         'lang'              => 'en',
         'favIcon'           => '/favicon.png',
         'robots'            => '',
         'isAjax'            => false,
         'scriptSrcs'        => Array(),
         'scripts'           => '',
         'headScriptSrcs'    => Array(),
         'styles'            => '',
         'styleSrcs'         => Array(),
         'headExtra'         => '',
         'bodyStyles'        => '',
         'header'            => '',
         'body'              => '',
         'footer'            => ''
);
</pre>

<p>You can add your own if needed by using the <span class='path'>View::setViewVariable()</span> method.</p>
<pre class='prettyprint'>
//lets add a custom variable to the view
View::addViewVariable('customVar',Array('blue','green');
</pre>

<p class='heading'>Don't worry about mixed content types (SSL)</p>
<p>Seen in the <span class='path'>_layout.html</span> template is a custom twig function <span class='path'>url()</span>, which handles making sure your urls are correct. It will make them https if the user is connected via SSL, and it will make sure resources requested outside of your domain will be prefex with \"http://\" so you dont have to</p>

<hr>

<a name='view-basics'></a>
<h2 data-magellan-destination='view-basics'>View Basics</h2>

<p class='heading'>Putting HTML into the View</p>

<pre class='prettyprint'>
    View::html('some html');
</pre>

<p>The contents of your eventual page are treated as a Stack and you can keep pushing onto that stack untill the request is finished. 
All html you push through this method will end up in the #body element.</p>


<hr>


<p class='heading'>Setting the title of the page</p>

<pre class='prettyprint'>
    View::title('Welcome to our site!');
</pre>


<hr>


<p class='heading'>Setting the description of the page</p>

<pre class='prettyprint'>
    View::desc('
        We do full service dog care across 3 counties in Florida 
        and are open from 9am - 5pm Monday - Saturday
    ');
</pre>


<hr>


<p class='heading'>Including an External CSS stylesheet</p>

<pre class='prettyprint'>
    View::styleSrc('/css/styles.css');
</pre>

<p>Your stylesheets will be included in the head of the page.</p>


<hr>


<p class='heading'>Putting JavaScript into the View</p>

<pre class='prettyprint'>
    View::script('alert(\"hi!\");');
</pre>

<p>Scripts you add to the page will always be printed last, after the footer is printed.</p>


<hr>


<p class='heading'>Including an External Javascript File</p>

<pre class='prettyprint'>
    View::scriptSrc('/js/myjs.js');
    View::scriptSrc('http://www.somesite.com/path/to/script/file.js');
</pre>

<p>Scripts Sources you add to the page will always be printed last, after the footer is printed.</p>


<hr>


<p class='heading'>Including an External Javascript File In the HEAD of the page</p>

<pre class='prettyprint'>
    View::headScriptSrc('/scripts/js.js');
</pre>

<p>Scripts added with this method will put the script in the header of the page, specifying that you don't want the page to be ready until those scripts are loaded.</p>


<hr>


<p class='heading'>Setting a property on a &lt;script&gt; or &lt;link&gt; element</p>

<pre class='prettyprint'>

    //load the script file asynchronously
    View::scriptSrc('/js/js.js')->prop('async','true');

    //load the script file asynchronously
    View::headScriptSrc('/js/js.js')->prop('async','true');

    //set a media query on the style sheet
    View::styleSrc('/css/800px.css')->prop('media','screen and (min-device-width: 800px)');

</pre>


<hr>

<p class='heading'>Adding arbitrary elements to the head of the page</p>

<pre class='prettyprint'>

    View::headExtra('&lt;script src=\"/js/js.js\"&gt;&lt;/script&gt;');

</pre>


<hr>


<p class='heading'>Adding a css class to the body element</p>

<pre class='prettyprint'>
    View::bodyStyle('someBodyClass');
</pre>


<hr>


<p class='heading'>Setting the FavIcon of a page</p>

<pre class='prettyprint'>
    View::favIcon('/yourIcon.png');
</pre>

<p>The default value used if not set is <span class='path'>/favicon.png</span></p>


<hr>

<p class='heading'>Setting the language of a page</p>

<pre class='prettyprint'>

    //set the page language to French
    View::lang('fr');

</pre>

<p>The default value used for the lang attr is 'en' for English</p>


<hr>


<p class='heading'>Setting the charset of a page</p>

<pre class='prettyprint'>

    //set the charset to UTF-16 
    View::charset('utf-16');

</pre>

<p>The default value used for the charset attr is 'utf-8'</p>


<hr>



<a name='view-extend'></a>
<h3 data-magellan-destination='view-extend'>Extending the View class</h3>

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

<p>A couple key things are happening in this extended Disco\\classes\\View class</p>

<p>First we are overriding the three methods <span class='path'>header()</span>,<span class='path'>__construct()</span> and <span class='path'>footer()</span></p>

<ul class='list'>
    <li>header() <span>- return html markup to be used in the #header element of the page</li>
    <li>__construct() <span>- tell the view what scripts and style sheets we depend on (you could take numerous actions from here, such as calling an <a href='/docs/Event'>Event</a>)</li>
    <li>footer() <span>- return html markup to be used in the #footer element of the page</li>
</ul>



<h4>Setting the View</h4>

<pre class='prettyprint'>

    App::make('View',function(){
        return new StandardView();
    });

    View::html('Were now using the Standard View class which extends the View class!');

</pre>

<p>You can set the View class from anywhere in your application</p>
<div class='panel notice'>
    When you shift which view you are using any previously added HTML/Scripts/Styles will be destoryed
</div>

<hr>

<p class='heading'>What if we want to set the header or footer of a view manually?</p>

<pre class='prettyprint'>

    View::setHeader(Template::build('pageHeader'));

    //OR 
    View::setHeader('Here is some header text and markup');

    //now the footer
    View::setFooter(Template::build('pageFooter'));

</pre>


<hr>

<br>

<h4>AjaxRequests and JSON</h4>

<p class='heading'>What if we have an AjaxRequest and don't need a full page returned and just some data structure or a snippet?</p>

<p>It's easy just use the isAjax() method</p>

<pre class='prettyprint'>
    View::isAjax();
</pre>

<p>This will force the View to only echo out the contents of the html stack when its <span class='path'>printPage()</span> method is called. 
Leaving behind all the script, css, header, body, and footer content.</p>

<hr>

<p class='heading'>Returning JSON</p>

<pre class='prettyprint'>
    View::json();
</pre>

<p>This will set the header Content-type to \"application/json\" and subsequently call <span class='path'>View::isAjax()</span></p>




<hr>

<h4>Setting how a page should be seen by a robot</h4>

<p>In the heading of your page you may set a meta tag like <span class='path'>&lt;meta name='robots' content='index,follow'&gt;</span>.
All the possible values of this meta tag are list below along with the corresponding method in the View Facade:
</p>

<ul class='list'>
    <li>index,follow <span>- <span class='path'>View::index()</span>   (default value)</span></li>
    <li>noindex,nofollow - <span class='path'>View::noIndex()</span></li>
    <li>index,nofollow - <span class='path'>View::indexNoFollow()</span></li>
    <li>noindex,follow - <span class='path'>View::noIndexFollow()</span></li>
</ul>





";
    }

    public function getTemplateName()
    {
        return "View.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
