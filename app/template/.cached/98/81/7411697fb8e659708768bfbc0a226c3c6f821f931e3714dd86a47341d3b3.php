<?php

/* routing-guide.template.html */
class __TwigTemplate_98817411697fb8e659708768bfbc0a226c3c6f821f931e3714dd86a47341d3b3 extends Twig_Template
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
        echo "<h1 class='mlarge-font'>Introducing Routers and Route Variables</h1>

<p>Disco is RESTful routing centric and endpoints are achived by resolving the requested URI with a <a href='/docs/Router'>Router</a></p>

<p class='heading'>Lets start with a simple example</p>

<pre class='prettyprint'>
    Router::get('/about-us',function(){

        View::html('&lt;h1&gt;About us&lt;/h1&gt;'); 

    })
</pre>

<p>It hopefully hardly needs explaining</p>

<p>We tell the Router Facade that if there is a GET request with the route of <span class='path'>/about-us</span> execute the Closure function and put the heading \"About Us\" in the view</p>

<p>There are some main methods you will want to be familar with:</p>

<ul class='list'>
    <li>Router::get() <span>- Match a HTTP GET request</span></li>
    <li>Router::post() <span>- Match a HTTP POST request</span></li>
    <li>Router::put() <span>- Match a HTTP PUT request</span></li>
    <li>Router::delete() <span>- Match a HTTP DELETE request</span></li>
    <li>Router::any() <span>- Match any type of HTTP request</span></li>
</ul>


<hr>

<p class='heading'>Where do you put your routers?</p>

<p>Routers can be put in a couple of locations:</p>
<p>In the <span class='path'>index.php</span> file</p>
<div>
    <p>
    By creating a router file in <span class='path'>app/router/</span> with a naming convention like <span class='path'>[YourRouter].router.php</span> 
    and telling Disco to use it by executing
    </p>
    <pre class='prettyprint'>
    Router::useRouter('YourRouter');
    </pre>
</div>
<p>You can also create your own file with routers in and just include it when you want to use them</p>
<pre class='prettyprint'>

    require('someFileThatHasRouters.php');

</pre>

<hr>

<p class='heading'>You can also specify routers in the <a href='http://github.com/discophp/project/blob/master/app/routes'><span class='path'>app/routes</span></a> file</p>

<p>The routes file uses a very simple syntax:</p>

<pre class='prettyprint'>
GET     /               RootController@index
POST    /               RootController@signin


GET     /{user}/dashboard      DashboardController@index    where(user=>alpha)  auth(user|admin,/login)
PUT     /{user}/dashboard      DashboardController@update   where(user=>alpha)  auth(user|admin,/login)
</pre>

<hr>


<p class='heading'>Introducing Variables and Using the <span class='path'>where()</span> method to apply variable restrictions to the route</p>

<pre class='prettyprint'>
    Router::get('/profile/{userName}',function(\$userName){

        View::html(\"&lt;h1&gt;\$userName&lt;/h1&gt\");

    })->where('userName','alpha_numeric');
</pre>

<p>If a GET request coming into the application has the url <span class='path'>/profile/[some form of alpha_numeric text]</span> execute the Closure Function (the second paramater)</p>

<p>So if the URL had been <span class='path'>/profile/timmy</span> you would have <span class='variable'>\$userName='timmy'</span> and the Closure function would put a heading in the view that says \"timmy\"</p>

<p>You can pass a single variable name and a corresponding regex pattern</p>

<p>Or you could pass an array of restrictions like so</p>

<pre class='prettyprint'>
    Router::get('/product/{category}/{item}',function(\$category,\$item){

        View::html(\"&lt;h1&gt;\$item - \$category&lt;/h1&gt\");

    })->where(Array('category'=>'alpha','item'=>'^[0-9]+\$'));
</pre>

<hr>

<h2 class='mlarge-font'>Introducing Controllers</h2>

<p>Controllers are really just a class that handles putting togethor and manipulating the pieces that go into completing a web request. Store them in <span class='path'>app/controllers/</span> with a naming convention like </br><span class='path'>[YourController].controller.php</span></p>

<p class='heading'>A sample Controller <small><span class='path'>app/controller/Profile.controller.php</span></small></p>

<pre class='prettyprint'>
Class Profile {

    public function printProfile(\$id){

        DB::query(\"SELECT name,profile_photo FROM profile WHERE user_id=?\",\$id);

        \$profileData = DB::last()->fetch_assoc();


        Template::with('profileHome',\$profileData);

    }//printProfile

}//Profile
</pre>


<p class='heading'>Now that we built it, lets use it!</p>


<pre class='prettyprint'>
    Router::get('/profile/{id}','Profile@printProfile')->where('id','[0-9]+');
</pre>

<p>This instructs the Router that upon a successful match it should resolve the Profile class from the container and call the function printProfile on it and pass it any matched variables</p>

<hr>

<h3 class='mlarge-font'>Router as a Filter</h3>

<p>You can filter directories of your application really easy using the <span class='path'>filter()</span> method of the Router. A filter can be used to force the processing of a Router File, or execute a closure function which stores other Routers.</p>

<p>To specify what should be filtered we use the special variable <span class='path'>{*}</span></p>

<p>To specify what action should be taken when a filter is matched, you use the <span class='path'>to()</span> method. Pass it either a Router File name like <span class='path'>ShoppingRouter</span> which is saved at 
<span class='path'>app/router/ShoppingRouter.router.php</span> , or pass it a Closure function</p>

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

<p class='heading'>You can also do filters in the <a href='http://github.com/discophp/project/blob/master/app/routes'><span class='path'>app/routes</span></a> file</p>

<pre class='prettyprint'>

[FILTER /user/{*} auth(user,/login)]

    GET     /user/dashboard     UserController@dashboard
    GET     /user/post/{id}     UserController@post         where(id=>integer)

[/FILTER]


</pre>

<hr>


";
    }

    public function getTemplateName()
    {
        return "routing-guide.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
