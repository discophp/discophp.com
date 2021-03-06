<?php

/* Model.template.html */
class __TwigTemplate_4b9884283969f3805823f77114860fd5fef468ac00d001f20caf42e8ed853e7a extends Twig_Template
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
        echo "<h1><a target='_blank' href='https://github.com/discophp/framework/blob/master/core/classes/Model.core.php'>Model Facade</a></h1>

<p>A Model is meant to encapsulate CRUD (Create Read Udate Delete) properities and serve as an encapsulation of working with a specific data model (in our case a SQL table)</p>


<p>Models live in the directory <span class='path'>app/model/</span> and use the naming convention <span class='path'>MyModel.model.php</span></p>


<p class='heading'>Models may extend \\Disco\\classes\\Model to gain added functionality</p>

<p>By extending the BaseModel class you will have the ability to treat your Model as a ORM (Object-Relational Mapping) object</p>

<p class='heading'>Lets see an example</p>

<p>Lets say we have two tables</p>

<div class='clearfix' style='margin-bottom:25px;'>

    <div class='sql-table'>
        <p class='table-name'>band</p>
        <div>
            <div class='sql-key'>
                <p>band_id</p>
            </div>
            <p>name</p>
            <p>genre</p>
            <p>year_formed</p>
        </div>
    </div>
    
    <div class='sql-table'>
        <p class='table-name'>album</p>
        <div>
            <div class='sql-key'>
                <p>album_id</p>
                <p>band_id</p>
            </div>
            <p>album_name</p>
            <p>release_date</p>
            <p>number_of_tracks</p>
        </div>
    </div>

</div>

<p>We have created a table \"band\" and a table \"album\" to hold some info about some artists</p>

<p class='heading'>Turning it into a ORM</p>

<pre class='prettyprint'>

    class Band extends Disco\\classes\\Model {

        public \$table='band';
        public \$ids='band_id';

    }//Band

    class Album extends Disco\\classes\\Model {

        public \$table='album';
        public \$ids=Array('band_id','album_id');

    }//Album

</pre>

<div class='panel notice'>
You will need to have your SQL environment settings set and have SQL server running to work with the ORMs
</div>


<p>So what we did above was create two classes called Band and Album that extend BaseModel.
They have two important variables that need to be defiend if you wish to work with them as an ORM
</p>

<ul class='list'>
    <li>\$table <span>- this should be set to the name of the table that the Model should work with</span></li>
    <li>\$ids <span>- this should list the names of the primary keys on the table</span></li>
</ul>


<p class='heading'>Creating Models via command line</p>

<p>You can create models from your SQL tables through the Disco CLI</p>
<p>The CLI will not overwrite existing model files</p>

<pre class='prettyprint'>

    php disco create model Table_Name

    //OR YOU CAN CREATE A MODEL FOR ALL YOUR TABLES

    php disco create model all

</pre>

<hr>

<p class='heading'>Working with a Model</p>

<p>You can work with your Models in 3 ways:</p>

<p class='heading'>1. Through the ModelFactory</p>

<pre class='prettyprint'>

    Model::m('Band')->select('name');

</pre>

<p class='heading'>2. In the Disco container</p>

<pre class='prettyprint'>

    App::with('Band')->select('name');

</pre>

<p class='heading'>3. Or as a <a href='/docs/IoC-facades'>Facade</a></p>

<p>Start by creating your Facade class</p>

<pre class='prettyprint'>

    class Band extends Disco\\classes\\Facade {
        
        protected static function returnFacadeId(){
            return 'Band';
        }//returnFacadeId

    }//Band

</pre>


<p>Now your BaseBand class</p>

<pre class='prettyprint'>

    class BaseBand extends \\Disco\\classes\\Model {

        public \$table='band';
        public \$ids='band_id';

    }//Band

</pre>

<p>Now register the Facade with the Disco Container</p>

<pre class='prettyprint'>

    App::make('Band',function(){
        return new BaseBand();
    });

</pre>

<p>Now use it!</p>

<pre class='prettyprint'>

    Band::select('name','genre')->where('genre','LIKE','%hip%')->limit(10);


    while(\$row = Band::data()->fetch_assoc()){

        var_dump(\$row);

    }//while

</pre>



<hr>


<h2>C<span class='crud-section'><small>(</small>R<small>ead)</small></span>UD of the ORM</h2>

<p class='heading'>Now lets work with reading from the Models</p>

<pre class='prettyprint'>

    Model::m('Band')->select('name','genre','year_formed');
    //OR
    Model::m('Band')->select(Array('name','genre','year_formed'));
    //OR
    Model::m('Band')->select('name,genre,year_formed');

    while(\$row = Model::m('Band')->data()->fetch_assoc()){
        var_dump(\$row);
    }//while

</pre>

<p>This would select all the bands listed in the table and echo out their name, genre, and year formed</p>

<p>Notice that we specify which Model we want to use by calling <span class='path'>Model::m('ModelName')</span><p> 

<p>Models serve as singleton objects and once called will keep their state untill the application request is finished</p>

<p class='heading'>Adding Conditions</p>

<pre class='prettyprint'>

    Model::m('Band')
        ->select('name,genre,year_formed')
        ->where(Array('genre'=>'rock'))
        ->where('year_formed&lt;?',1990);
        //OR
        ->where('genre=? AND year_formed&lt;?',Array('rock',1990))

    while(\$row = Model::m('Band')->data()->fetch_assoc()){
        var_dump(\$row);
    }//while

</pre>

<p>This would select all the bands in the table whos genre was rock and were formed before 1990</p>


<p class='heading'>Specifying an OR</p>

<pre class='prettyprint'>

    Model::m('Band')
        ->select('name','genre','year_formed')
        ->where('year_formed=?',1981)
        ->otherwise(Array('year_formed'=>1982));

    while(\$row = Model::m('Band')->data()->fetch_assoc()){
        var_dump(\$row);
    }//while

</pre>

<p>Using the method <span class='path'>->otherwise()</span> we can specify that we would like bands formed in the year 1981 OR 1982</p>

<p class='heading'>Adding A LIMIT or ORDER</p>

<pre class='prettyprint'>

    Model::m('Band')
        ->select(Array('name','genre','year_formed'))
        ->where('genre=?','downtempo')
        ->order('name','ASC')
        ->limit(5,5);

    while(\$row = Model::m('Band')->data()->fetch_assoc()){
        var_dump(\$row);
    }//while

</pre>

<p>This will get you band results 6-10 who are of the genre downtempo ordered by name ascending</p>

<p class='heading'>Joining Models togethor</p>

<p>Now lets see how to join two models togethor, we will be joining the bands to their albums</p>

<pre class='prettyprint'>

    Model::m('Band')
        ->select('name','genre','album_name','release_date')
        ->join('Album');

</pre>

<p>This is going to return all the bands join with all their albums and return the band name, genre, album name, and release date in each row</p>

<p>Joins can be called like this:
<ul class='list'>
    <li>->join() <span>- INNER JOIN</span></li>
    <li>->ljoin() <span>- LEFT JOIN</span></li>
    <li>->rjoin() <span>- RIGHT JOIN</span></li>
</ul>


<p>To successfully join two models togethor without implicitly specifying a join condition you must have set the <span class='variable'>\$ids</span> for both models
and there must be a foreign key in the joined table that matches with the parent table</p>

<p class='heading'>Specifying what to join ON</p>

<pre class='prettyprint'>
    ->join('album AS a','a.band_id=5')
    //OR
    ->join('album AS a','a.album_name LIKE ? AND a.number_of_tracks>?',Array('%wind%',5))
    //OR
    ->join('album AS a','a.album_id=25')
</pre>


<h2><span class='crud-section'><small>(</small>C<small>reate)</small></span>RUD of the ORM</h2>

<p class='heading'>Lets look at creating a record with the Model</p>


<pre class='prettyprint'>

    \$data = Array('name'=>'Bobbys Coleslaw','genre'=>'southern-rock','year_formed'=>2006);

    Model::m('Band')
        ->insert(\$data);

</pre>

<p>We just created a band record with a name of \"Bobbys Coleslaw\" and a genre of \"southern-rock\" and the year they formed 2006</p>


<h2>CR<span class='crud-section'><small>(</small>U<small>pdate)</small></span>D of the ORM</h2>

<p class='heading'>Lets look at updating a record with the Model</p>

<pre class='prettyprint'>

    Model::m('Album')
        ->update('number_of_tracks',12)
        //OR
        ->update(Array('number_of_tracks'=>12))
        ->where(Array('album_id'=>15))
        ->finalize();



</pre>

<p>We just updated the number of tracks on the album with a album_id = 15 to be 12</p>

<p>You must call the method <span class='path'>->finalize()</span> after an update statement to make it execute</p>



<h2>CRU<span class='crud-section'><small>(</small>D<small>elete)</small></span> of the ORM</h2>

<p class='heading'>Lets look at deleting a record with the Model</p>

<pre class='prettyprint'>

    Model::m('Album')
        ->delete('album_id=?',15);
        //OR
        ->delete(Array('album_id'=>15));

</pre>

<p>We just deleted the album with an album_id of 15</p>

<hr>

<h3>Putting it all togethor</h3>

<pre class='prettyprint'>

    Model::m('Band')
        ->select('name,genre,album_name,release_date')
        ->join('Album')
        ->where(Array('genre'=>'bluegrass'))
        ->order('release_date','DESC')
        ->limit(5);

</pre>

<p>Pretty simply we just got the 5 newest released bluegrass albums.</p>


<hr>


<h3>Doing more with your models</h3>

<p>Your models should be a place where you help encapsulate functionality around an entity in your Database.
You should add other methods to your Model that conceal working with the data.
</p>

<p>
When using Disco your Models do not have to extend the BaseModel if you do not wish to have ORM functionality associated with the Model.
</p>


<p class='heading'>Lets create a Model that doesn't extend the BaseModel class</span>

<pre class='prettyprint'>

    Class UserModel extends \\Disco\\classes\\Model {

        public \$table = 'user';
        public \$ids = 'user_id';

        public function profileData(){

            \$fields = Array('name','birthday','profile_photo','create_date');

            return \$this->select(\$fields)
                ->where('user_id=?',Session::get('user_id'))
                ->data()->fetch_assoc();

        }//profileData

    }//UserModel

</pre>

<p>We just created a Model saved at <span class='path'>app/model/UserModel.model.php</span> with a function <span class='path'>profileData</span></p>

<p class='heading'>Now lets use our Model</p>

<pre class='prettyprint'>

    Router::get('/dashboard',function(){

        \$data = Model::m('UserModel')->profileData();

        Template::with('userDashboard',\$data);

    })->auth('user_id','/');

</pre>

<hr>

<p class='heading'>Inherited functions <span class='path'>about()</span> & <span class='path'>columns()</span> from \\Disco\\classes\\Model</p>

<p>Using the <span class='path'>about()</span> function on an extended model will return you an associative 
array with all the details about the underlying table</p>

<p>Using the <span class='path'>columns()</span> function on an extended model will return you an array of associative arrays 
containing the details of each field in the table</p>


";
    }

    public function getTemplateName()
    {
        return "Model.template.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
