<?php

/* Form.template.html */
class __TwigTemplate_7da728aaaf07ff156587585cb119eda73094c199558de6630727f74d20e7b292 extends Twig_Template
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
        echo "<h1><a target='_blank' href='https://github.com/discophp/framework/blob/core/classes/Form.class.php'>Form</a></h1>

<p>Most developers cringe when they are directed to build forms, especially when they have to build lots of them. They are generally just a pain to build due to a couple of factors:</p>
<ul>
    <li>Is the form modeled after a table?</li>
    <li>Which fields should we be inlcuding or excluding?</li>
    <li>Is the incoming data of the proper data type?</li>
    <li>Are we doing an update or a insert?</li>
    <li>Do we need to set the values of each input,textarea,radio,checkbox, or should they be empty?</li>
    <li>Are some fields required in order to update or insert?</li> 
</ul>

<p><b>It's time to dispell the woes caused by forms.</b></p>

<p class='heading'>Lets check out a simple example, building a form from a Model</p>

<pre class='prettyprint'>

    \$form = Form::from('user')
        ->where(Array('id'=>1))
        ->without(Array('password'))
        ->formProps(Array('action'=>'/user/update','method'=>'POST'))
        ->make();
    
</pre>

<p>In the above example we used the Model <span class='path'>user</span> to create our form using the <span class='path'>from('user')</span> method and 
specified that we want the form to be populated with data from the user Model where <span class='path'>id=1</span>.
By calling the <span class='path'>without()</span> method we indiciated that we want all fields from the model except the <span class='variable'>password</span> field. We then used the <span class='path'>formProps()</span> method to set properties on the form element, indicating what action should be taken when the form is submitted and what type of HTTP method should be used. In this example we want to POST the data to \"/user/update\".
Finally we build the form by calling the <span class='path'>make()</span> method and store it into <span class='variable'>\$form</span>.
</p>

<p class='heading'>Handling POSTing the form</p>

<pre class='prettyprint'>
    Form::from('user')->post();
</pre>

<p>POSTing the updates to the user Model is really that easy. When you build forms from a Model the primary keys of the Model are set as hidden fields and are used as the condition to update the Model with the incoming POST data. There are plently of other ways to handle this using the Form Facade and we will get into that shortly</p>


<h2>Methods</h2>

<p class='heading'><span class='path'>from()</span> Method</p>

<p>The <span class='path'>from()</span> method is used to specify a Model that the form is acting for.</p>

<div class='panel notice'>To use this method you must have a corresponding Model built and ready to use. <a href='/docs/Model'>See the Model docs</a></div>

<pre class='prettyprint'>
    Form::from('user');
</pre>

<br>

<p class='heading'><span class='path'>where()</span> Method</p>

<p>The <span class='path'>where()</span> method is used to specify a condition(s) that should be used when working with the underlying Model. This applies to both building the form and updating the form.</p>

<pre class='prettyprint'>
    Form::from('user')->where(Array('id'=>3));
</pre>

<br>

<p class='heading'><span class='path'>blank()</span> Method</p>

<p>Sometimes you may want to build a form from a Model but have it contain no values. That is the time to use the <span class='path'>blank()</span> method.</p>

<pre class='prettyprint'>
    Form::from('user')->blank();
</pre>

<br>

<p class='heading'><span class='path'>with()</span> Method</p>

<p>You can specify which fields from the Model you want to use in the form by passing the <span class='path'>with()</span> method an Array containing values that correspond to fields in your Model.</p>

<pre class='prettyprint'>
    Form::from('user')->with(Array('email'));
</pre>

<br>

<p class='heading'><span class='path'>without()</span> Method</p>

<p>You can specify which fields from the Model you do not want to use in the form by passing the <span class='path'>without()</span> method an Array containing values that correspond to fields in your Model.</p>

<pre class='prettyprint'>
    Form::from('user')->without(Array('password'));
</pre>

<br>

<p class='heading'><span class='path'>formProps()</span> Method</p>

<p>You can set html properties on the generated form element by calling the <span class='path'>formProps()</span> method and passing it an array of key value pairs representing each property on the element. This is the same way the <a href='/docs/Html'>Html Facade</a> operates.</p>

<pre class='prettyprint'>
    Form::formProps(Array('action'=>'/form-action','method'=>'POST','class'=>'form'));
</pre>

<br>

<p class='heading'><span class='path'>props()</span> Method</p>

<p>You can set additional/override properties on each of the generated inputs by using the <span class='path'>props()</span> method.</p>
<p>Inputs by default have a <span class='variable'>type=\"[text|number]\"</span> a <span class='variable'>name=\"[field_name]\"</span> and a <span class='variable'>value=\"[field_value]\"</span> which you can override.</p>

<pre class='prettyprint'>
    //set each input to have a required property
    Form::from('user')->props(Array('required'=>'','class'=>'user-input'));
</pre>

<p>If the first parameter you pass is a string then the properties specified in the second arguement will be used as the properties only on the specified field name</p>

<pre class='prettyprint'>
    //set skill_level to a type integer 
    Form::from('user')->props('skill_level',Array('type'=>'integer'));
</pre>


<br>

<p class='heading'><span class='path'>force()</span> Method</p>

<p>The <span class='path'>force()</span> method allows for a passed Closure function to be put in charge of building the input. If the first arguement passed is a string then the Closure function will be in charge of building only that field. However if the first arguement passed is a Closure function the that function will be put in charge of building all the inputs. Field specific Closure functions take precedence over the general Closure.</p>

<p>The Closure function will be passed two arguements<br><span class='variable'>\$k</span> the_field_name<br><span class='variable'>\$v</span> the_field_value</p>

<pre class='prettyprint'>
    Form::from('user')
        ->force('password',function(\$k,\$v){
            return \"&lt;input type='password' name='{\$k}' value='{\$v}'/&gt\";
        })
        ->force(function(\$k,\$v){
            return \"&lt;input type='text' name='{\$k}' value='{\$v}'/&gt\";
        });
</pre>


<br>

<p class='heading'><span class='path'>wrap()</span> Method</p>

<p>You can provide a custom html wrapper that will be used to build each field name and input. It must contain two string formats:</br>

<span class='variable'>%1\\\$s</span> the field name<br>
<span class='variable'>%2\\\$s</span> the input element</p>

<pre class='prettyprint'>
    Form::from('user')
        ->wrap(\"&lt;label&gt; %1\\\$s %2\\\$s&lt;/label&gt;\");
</pre>


<br>

<p class='heading'><span class='path'>submitButton()</span> Method</p>

<p>You can provide your own custom submit button by passing it as an arguement to <span class='path'>submitButton()</span></p>

<pre class='prettyprint'>
    Form::from('user')
        ->submitButton(\"&lt;div class='some-action button'&gt;Update It!&lt;/div&gt;\");
</pre>


<br>

<p class='heading'><span class='path'>withToken()</span> Method</p>

<p>You can add CSRF tokens to your forms by calling the <span class='path'>withToken()</span> method. The token is added as a hidden input element in your form, named <span class='variable'>disco-csrf-token</span>.
 When posting with a token the incoming token will be cross checked against the token stored in the session.</p>

<pre class='prettyprint'>
    
    Form::withToken();

    //Or you can retrieve the token 
    \$token = Form::token();

    //If you want to do a token comparision yourself
    \$vt = Form::validToken( \$token );


</pre>



<br>
<hr>

<h2><span class='path'>make()</span> Method</h2>

<p>The <span class='path'>make()</span> method is the final method you call after setting up the form which actually returns the generated html representing the form.</p> 

<p>If you did not build your form from a model then this is the time to pass it the data that the form should be built after.</p>

<p>If you are building your form from a Model and don't specify a where condition it will be assumed that you want all the fields from that model, excluding the primary keys.</p>

<pre class='prettyprint'>

    //super basic form from a model
    \$form = Form::from('user')->where(Array('id'=>3))->make();

    //super basic form with no values and a email and password field
    \$form = Form::make(Array('email'=>'','password'=>''));

    //super basic form from a model with no where condition
    \$form = Form::from('user')->make();

</pre>


<br>
<hr>

<h2><span class='path'>post()</span> Method</h2>

<p>To handle submiting the form you can use the <span class='path'>post()</span> method. If you don't pass an arguement then it is assumed that all POST data is to be used in the UPDATE or INSERT. If you pass a string then the Form will take the data stored in the post variable defined by the string arguement.</p>

<p>This method will do a cross check on your Models columns/fields and only use POST data who's keys exactly match your field/column name in the UPDATE or INSERT statement.</p>

<p>If the POST data contains values that are found to be primary keys on your Model then the Form will perform and UPDATE, otherwise it is going to perform and INSERT with the POST data.</p>

<p>Specifying a WHERE condition using the <span class='path'>where()</span> method when you post your form will cause the form to do an UPDATE using the passed condition, taking precendence over previously described cases.</p>

<pre class='prettyprint'>

    //POST data contains primary key
    //will do an UPDATE
    \$success = Form::from('user')->post();


    //WHERE condition is specified
    //wil do an UPDATE
    \$success = Form::from('user')->where(Array('id'=>3))->post();


    //POST data does not contain primary key
    //and WHERE condition not specified
    //will do an INSERT
    \$autoIncrementKey = Form::from('user')->post();


    //use POST data contained in 'data'
    \$success = Form::from('user')->post('data');

</pre>


<br>
<br>
<hr>


<h3>Select Menu & Radio Buttons</h3>

<p class='heading'>Using The <span class='path'>selectMenu()</span> Method To Build Select Menus (drop down menus)</p>

<p>You can build select menus from Arrays and mysqli_result objects.</p>

<p>The first paramater is always the data the select menu should be built from.<br>If you pass a mysqli_result object it must contain aliased fields corresponding to <span class='variable'>option_value</span> and <span class='variable'>option_text</span>.<br>If you pass an array then its key/value will be used for the option_value/option_text respectively.</p>

<p>The second paramater is the name property of the generated select html element.</p>

<p>The third and optional paramater is a value that corresponds to a option_value in the passed data in paramater one that should be set as the currently selected item in the select menu.</p>

<pre class='prettyprint'>

    //building a select menu from an Array
    \$data = Array('na'=>'','r'=>'red','b'=>'blue','g'=>'green');
    \$name = 'fav-color';

    //build the select menu 
    \$dd = Form::selectMenu(\$data,\$name);

    //with a pre-selected option
    \$dd = Form::selectMenu(\$data,\$name,'g');



    //building a select menu from a mysqli_result object
    \$data = Model::m('state')->select('id AS option_value','state AS option_text')->data();
    \$name = 'state';

    //build the select menu 
    \$dd = Form::selectMenu(\$data,\$name);

    //with a pre-selected option
    \$dd = Form::selectMenu(\$data,\$name,22);


</pre>

<br>

<p class='heading'>Using The <span class='path'>radioButtons()</span> Method To Build radio button groups</p>

<p>You can build radio button groups from Arrays and mysqli_result objects.</p>

<p>The first paramater is always the data the radio button group should be built from.<br>If you pass a mysqli_result object it must contain aliased fields corresponding to <span class='variable'>button_value</span> and <span class='variable'>button_text</span>.<br>If you pass an array then its key/value will be used for the button_value/button_text respectively.</p>

<p>The second paramater is the name property of the generated radio button html elements.</p>

<p>The third and optional paramater is a value that corresponds to a button_value in the passed data in paramater one that should be set as the currently selected radio button in the group.</p>

<pre class='prettyprint'>

    //building a radio button group from an Array
    \$data = Array('r'=>'red','b'=>'blue','g'=>'green');
    \$name = 'fav-color';

    //build the radio button group
    \$dd = Form::radioButtons(\$data,\$name);

    //with a pre-selected radio button 
    \$dd = Form::radioButtons(\$data,\$name,'g');


    //building a radio button group from a mysqli_result object
    \$data = Model::m('rating')->select('rating_id AS button_value','rating AS button_text')->data();
    \$name = 'rating';

    //build the radio button group 
    \$dd = Form::radioButtons(\$data,\$name);

    //with a pre-selected radio button 
    \$dd = Form::radioButtons(\$data,\$name,4);


</pre>


<br>
<hr>
<br>


<h4>Putting It All Togethor</h4>

<p>Now to demonstrate a more real world example.</p>


<pre class='prettyprint'>

    //BUILDING THE FORM

    \$wrap = Html::div(Array('class'=>'location-label'),\"%1\\\$s\");
    \$wrap .= Html::div(Array('class'=>'lcation-value'),\"%2\\\$s\");
    \$wrap = Html::div(Array('class'=>'location-info',\$wrap);

    \$sb = Html::div(Array('class'=>'update-user-location button'),'Update Location');

    \$form = Form::from('user')
                ->where(Array('id' => Session::get('user')))
                ->with(Array('address1','address2','city','state_id','zip'))
                ->submitButton(\$sb)
                ->wrap(\$wrap)
                ->formProps(Array('data-abide'=>''))
                ->force('state_id',function(\$k,\$v){

                    \$data = Model::m('state')
                            ->select('state_id AS option_value','state AS option_text')
                            ->data();

                    return Form::selectMenu(\$data,\$k,\$v);

                })
                ->make();



    //POSTING THE FORM

    \$res = Form::from('user')
                ->where(Array('id' => Session::get('user'))
                ->post();


</pre>


";
    }

    public function getTemplateName()
    {
        return "Form.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
