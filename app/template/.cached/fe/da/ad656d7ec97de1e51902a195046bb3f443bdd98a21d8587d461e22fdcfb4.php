<?php

/* user.template.html */
class __TwigTemplate_fedaad656d7ec97de1e51902a195046bb3f443bdd98a21d8587d461e22fdcfb4 extends Twig_Template
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
        echo "<h1>Disco projects ship with a <span class='path'>user</span> Model</h1>

<p>Most applications utilize a user in some way, so we provided a foundation for you to start with.</p>

<fieldset>
    <legend>user Table</legend>
    <table style='width:100%;'>
        <thead>
            <tr>
                <td>field name</td>
                <td>data type</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>id (PK)</td>
                <td>int(11) NOT NULL AUTO INCREMENT</td>
            </tr>
            <tr>
                <td>email</td>
                <td>varchar(120) NOT NULL</td>
            </tr>
            <tr>
                <td>password</td>
                <td>varchar(180) NOT NULL</td>
            </tr>
            <tr>
                <td>created</td>
                <td>datetime DEFAULT NULL</td>
            </tr>
            <tr>
                <td>last_access</td>
                <td>datetime DEFAULT NULL</td>
            </tr>
            <tr>
                <td>verified</td>
                <td>tinyint(1) DEFAULT 0</td>
            </tr>
            <tr>
                <td>admin</td>
                <td>tinyint(1) DEFAULT 0</td>
            </tr>
        </tbody>
    </table>
</fieldset>

<p>To create the table make sure your DB setting are configured correctly in your <span class='path'>.config.php</span> file and simply run the command:</p>
<pre class='prettyprint'>
    php disco with user createTable
</pre>


<h2>Methods</h2>

<p class='heading'><span class='path'>signup</span> Method</p>

<p>Pass this method a assoc array of key value pairs corresponding the fields in your user table and it will perform the insert on your user table and return either the new id of the user, 0 if it failed and -1 if the email is already in use. Fields named password will be auto hashed by the Crypt facade using your salts set in <span class='path'>.config.php</span>. You should never store plaintext passwords in your database.</p>

<pre class='prettyprint'>
    \$id = Model::m('user')->signup(\$data);
</pre>

<br>

<p class='heading'><span class='path'>signin</span> Method</p>

<p>You can sign users into your application by passing the email and password of the user to the <span class='path'>signin</span> method. There password will be hashed just like the signup method before it is used to query the DB. Upon successful login it will set the users id into the the session variable user and regenerate the session.</p>

<pre class='prettyprint'>
   \$success = Model::m('user')->signin(\$email,\$password); 
</pre>


<br>

<p class='heading'><span class='path'>emailInUse</span> Method</p>

<p>You can check to see if a email address is unique in the user table with this method.</p>

<pre class='prettyprint'>
    \$inUse = Model::m('user')->emailInUse(\$email);
</pre>
";
    }

    public function getTemplateName()
    {
        return "user.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
