<?php

/* Crypt.template.html */
class __TwigTemplate_a9281c9b6e5609a0c854e613255e8a5e1d5d0759a7c073d4c57e8dd902b4723d extends Twig_Template
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
        echo "<h1><a target='_blank' href='https://github.com/discophp/framework/blob/master/core/classes/Crypt.core.php'>Crypt Facade</a></h1>

<p>The Crypt Facade provides functionality for AES encryption using a 32bit key size through the 
<a href='http://www.php.net/manual/en/book.mcrypt.php'>mcrypt PHP module</a>, 
and hashing using the <a href='http://www.php.net/manual/en/functino.hash.php'>sha512 algorithmn</a></p>

<div class='panel notice'>
    <p>You must configure your AES_KEY256 setting variable in <a target='_blank' href='https://github.com/discophp/project/blob/master/.config.php'><span class='path'>.config.php</span></a> to a 32 bit random key for your encryption to be secure.</p>
    <p>This is done for you on install and can also be accomplished via the <a href='/docs/CLI'>disco CLI</a></p>
    <hr>
    <p>You must configure your SHA512_SALT_LEAD and SHA512_SALT_TAIL setting variable in <a target='_blank' href='https://github.com/discophp/project/blob/master/.config.php'><span class='path'>.config.php</span></a> to a random key of any length for your hasing to be secure</p>
    <p>This is done for you on install and can also be accomplished via the <a href='/docs/CLI'>disco CLI</a></p>
</div>

<hr>

<h2>Example Usage</h2>

<p class='heading'>Encryption</p>
<pre class='prettyprint'>
    \$crypt = Crypt::encrypt('encrypt this string!');
</pre>

<p class='heading'>Decryption</p>
<pre class='prettyprint'>
    \$decrypt = Crypt::decrypt(\$encryptedString);
</pre>

<p class='heading'>Hashing</p>
<pre class='prettyprint'>
    \$hashedPassWord = Crypt::hash('hashthispassword');
</pre>
";
    }

    public function getTemplateName()
    {
        return "Crypt.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
