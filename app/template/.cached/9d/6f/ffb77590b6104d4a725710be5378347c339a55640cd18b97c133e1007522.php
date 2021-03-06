<?php

/* Router.template.html */
class __TwigTemplate_9d6fffb77590b6104d4a725710be5378347c339a55640cd18b97c133e1007522 extends Twig_Template
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
        echo "<h1><a target='_blank' href='https://github.com/discophp/framework/blob/master/core/classes/Router.core.php'>Router</a></h1>

<p>The Router class is used to resolve a RESTful style endpoint to an action. The action is either a Closure function, or a Controller/Method combination. The router class is a factory service in the container. It works like this, everytime you call a method chain to resolve
a endpoint a new Disco\\classes\\Router instance is instantiated and used as the starting point for the method chain of the call.
<i>(Method Chaining is simply the calling of multiple methods in a single line of code execution. It can be achieved by returning \$this from a function of a object.)</i>
Once a router has matched the request the container will no longer return a factory service, but a standard service returning a 
<a target='_blank' href='https://github.com/discophp/framework/blob/master/core/classes/MockBox.class.php'>MockBox</a> instance.
</p>

<p class='heading'>As of v2.2 you can specify routes in the <a href='http://github.com/discophp/project/blob/master/app/routes'><span class='path'>app/routes</span></a> file</p>

<p>It uses a super simple syntax and provides a ruby on rails-esque feel.</p>

<p>Let's check it out:</p>

<pre class='prettyprint'>


GET     /              RootController@index
POST    /              RootController@signin

#pound sign will comment out the route
#GET    /              RootController@index

#Using s: will only match on HTTPS requests
s:GET   /              SecureRoot@index

GET     /{user}/dashboard      DashboardController@index    where(user=>alpha)  auth(user|admin,/login)
PUT     /{user}/dashboard      DashboardController@update   where(user=>alpha)  auth(user|admin,/login)
DELETE  /{user}/dashboard      DashboardController@delete   where(user=>alpha)  auth(user|admin,/login)

</pre>

<p>You can also do Filters:</p>

<pre class='prettyprint'>

[FILTER /project/{*} auth(user|admin) ]

    GET     /project/{id}       Project@project     where(id=>integer)
    PUT     /project/{id}       Project@update      where(id=>integer)

[/FILTER]

#or we can make it for HTTPS only by adding s:
[FILTER s: /project/{*} auth(user|admin,/login) ]

    GET     /project/{id}       Project@project     where(id=>integer)
    PUT     /project/{id}       Project@update      where(id=>integer)

[/FILTER]

</pre>


<hr>

<p class='heading'>Standard in script method for Routing</p>

<p>BTW; you can call any of the methods on the Router in any order you wish</p>

<p class='heading'>GET Requests</p>

<pre class='prettyprint'>

    Router::get('/contact',function(){

        Template::with('contact');

    });

</pre>


<p class='heading'>POST Requests</p>

<pre class='prettyprint'>

    Router::post('/contact',function(){

        var_dump( Data::post()->all() );

    });

</pre>


<p class='heading'>PUT Requests</p>

<pre class='prettyprint'>

    Router::put('/contact',function(){

        var_dump( Data::put()->all() );

    });

</pre>


<p class='heading'>DELETE Requests</p>

<pre class='prettyprint'>

    Router::delete('/contact',function(){

        var_dump( Data::delete()->all() );

    });

</pre>


<p class='heading'>Any combination of Requests</p>

<pre class='prettyprint'>

    Router::any('/contact',function(){
        
    });

</pre>


<p class='heading'>HTTPS requests</p>

<pre class='prettyprint'>

    Router::secure()->get('/login',function(){

        Template::with('login');
        
    });


    Router::secure()->post('/login',function(){
        
        Model::m('User')->login();

    });


</pre>


<hr>


<h2>Variables</h2>

<p>We can extract variables from our endpoints easily</p>

<pre class='prettyprint'>

    Router::get('/profile/{userName}',function(\$userName){

        View::html(\"you requested profile \$userName\");

    })->where('userName','alpha_numeric');

</pre>

<hr>

<h3>Restricting matches</h3>

<p>We can instruct the router to restrict matches to regex criteria using the <span class='path'>->where()</span> method</p>

<pre class='prettyprint'>

    Router::get('/profile/{id}',function(\$id){

    \tView::html(\"this id: \$id - is numeric\");

    })->where('id','[0-9]+');

</pre>

<br><br>

<p class='heading'>Default matching conditions</p>

<p>Instead of making you repeat common regex patterns constantly we have provided a few default ones for your use.</p>

<div class='row collapse'>
    <div class='small-12 medium-4 columns'>
        <p><b><u>Name</u></b></p>
    </div>
    <div class='small-12 medium-8 columns'>
        <p><b><u>Valid Example or Format</u></b></p>
    </div>
    <hr>
    <div class='small-12 medium-4 columns'>
        <p>alpha</p>
    </div>
    <div class='small-12 medium-8 columns'>
        <p>Disco</p>
    </div>
    <hr>
    <div class='small-12 medium-4 columns'>
        <p>alpha_numeric</p>
    </div>
    <div class='small-12 medium-8 columns'>
        <p>B42-bomber</p>
    </div>
    <hr>
    <div class='small-12 medium-4 columns'>
        <p>integer</p>
    </div>
    <div class='small-12 medium-8 columns'>
        <p>-55</p>
    </div>
    <hr>
    <div class='small-12 medium-4 columns'>
        <p>numeric</p>
    </div>
    <div class='small-12 medium-8 columns'>
        <p>4.75089</p>
    </div>
    <hr>
    <div class='small-12 medium-4 columns'>
        <p>all</p>
    </div>
    <div class='small-12 medium-8 columns'>
        <p>koolaid\$rink*8it-()001##@</p>
    </div>
    <hr>
</div>

<div class='panel'>
    <p>You can add your own matching conventions to the default list and they will be accesible through both the Router and Data Facades.</p>
    <pre class='prettyprint'>
        App::addCondition('numbersAndDashes','^[0-9\\-]+\$');
        App::addCondition('lclettersAndDashes','^[a-z\\-]+\$');
    </pre>
</div>

<p class='heading'>Using a default matching condition</p>


<pre class='prettyprint'>

    Router::put('/profile/{id}',function(\$id){

        Model::m('user')->addBlogPost(\$id);

    })->where('id','integer');


    //ANOTHER EXAMPLE

    Router::get('/article/{id}','Article@display')->where('id','aplha_numeric');

</pre>


<hr>

<p class='heading'>Restricting multiple variables</p>

<pre class='prettyprint'>

    Router::get('/profile/{id}/{area}',function(\$id,\$area){

        View::html(\"a profile with id: \$id and area: \$area requested\");

    })->where(Array('id'=>'[0-9]+','area'=>'photo|video|likes'));

</pre>

<hr>

<h4>Calling a Controller instead of a Closure</h4>

<p>You can instruct the Router to execute a <a href='/docs/routing-guide#controller'>Controller</a> instead of a Closure</p>


<p>Controllers are really just a class. Store them in <span class='path'>app/controllers/</span> with a naming convention like </br><span class='path'>[Your Controller Name].controller.php</span></p>

<p class='heading'>A sample Controller</p>

<pre class='prettyprint'>
Class Profile {

    public function printProfile(\$id){

        DB::query(\"SELECT name,profile_photo FROM profile WHERE user_id=?\",\$id);

        \$profileData = DB::last()->fetch_assoc();


        Template::with('profileHome',\$profileData);

    }//printProfile

}//Profile
</pre>


<pre class='prettyprint'>

    Router::get('/profile/{id}','Profile@printProfile')->where('id','[0-9]+');

</pre>

<p>The <span class='variable'>\$id</span> variable will automatically be passed into the requested method <span class='path'>printProfile</span> as a parameter</p>


<hr>


<p class='heading'>Un-matching the Router</p>

<p>Even though a router matched the incoming URI you may occasionally want to speicify that it actually didn't. Say if a certain product failed to exist from the variable that was in the URI.</p>
<p>By returning <span class='variable'>false</span> from your Closure or controller method you can unmatch the route, most likely causing a 404, unless of course another router matches.</p>

<pre class='prettyprint'>
    Router::('/bad-page',function(){
        return false;
    });


    //You can also force a no match like this
    Router::routeMatch(false);

</pre>


<hr>


<h5 class='mlarge-font'>Router as a Filter</h5>

<p>You can filter directories of your application really easy using the <span class='path'>filter()</span> method of the Router. A filter can be used to force the processing of a Router File, or execute a closure function which stores other Routers.</p>

<p>To specify what should be filtered we use the special variable <span class='path'>{*}</span></p>

<p>To specify what action should be taken when a filter is matched, you use the <span class='path'>to</span> method. Pass it either a Router File name like <span class='path'>ShoppingRouter</span> which is saved at app/router/ShoppingRouter.router.php, or pass it a Closure function</p>

<p class='heading'>Examples of using the <span class='path'>filter</span> method and the <span class='path'>to</span> method

<pre class='prettyprint'>

    // ----- EXAMPLE #1
    // The secured shopping area of the application 

    Router::secure()->filter('/shopping/{*}')->to('ShoppingRouter');



    // ----- EXAMPLE #2
    // We want to make sure when a user is in the shopping area they use https

    Router::filter('/shopping/{*}')->to(function(){
        header(\"https://{\$_SERVER['URL']}/shopping\");
        exit;
    });



    // ----- EXAMPLE #3
    // protecting an area of your appliction and using a filter

    Router::secure()->filter('/admin/{*}')->to('AdminRouter')->auth('admin','/login');


</pre>




";
    }

    public function getTemplateName()
    {
        return "Router.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
