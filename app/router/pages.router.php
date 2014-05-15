<?php

Router::get('/',function(){

    Disco::make('View',function(){
        return new Index();
    });
    View::title('Disco PHP Framework - Inversion of Control, MVC, RESTful Routing');
    View::desc('PHP framework centric around Inversion of Control and Model View Controller principles. Composer based installation and dependency management.');
    View::bodyStyle('homepage');
    Template::with('index');

});



Router::get('/docs',function(){

    View::title('Disco PHP Framework');
    View::bodyStyle('docs-intro');
    $content = Array('content'=>Template::build('docsIndex'));
    Template::with('docsBasePage',$content);

});

Router::get('/docs/{pageName}',function($pageName){

        $titles = Array(
            'install'=>'Installing the Disco PHP Framework - Getting Started',
            'config'=>'Configuring Your Disco PHP Framework Web Application Or Project - Getting Started',
            'request-lifecycle'=>'Application Request Life Cycle - Getting Started',
            'routing-guide'=>'Using the Router Facade - Getting Started',
            'template-guide'=>'Using the Template Facade and tDisco Templating System - Getting Started',
            'IoC-facades'=>'Using Inversion of Control and Facade Design Patterns in the Disco PHP Framework',
            'Router'=>'Router Class - Disco PHP Framework',
            'Authentication'=>'Authenticating Routes and Requests - Disco PHP Framework',
            'Cache'=>'Cache Facade - Disco PHP Framework',
            'Crypt'=>'Crypt Facade - Disco PHP Framework',
            'Data'=>'Data Facade - Disco PHP Framework',
            'Database'=>'Database (DB) Facade - Disco PHP Framework',
            'Email'=>'Email Facade - Disco PHP Framework',
            'Event'=>'Event Facade - Disco PHP Framework',
            'Model'=>'Model Facade - Disco PHP Framework',
            'Session'=>'Session Facade - Disco PHP Framework',
            'Template'=>'Template Facade - Disco PHP Framework',
            'Util'=>'Util Facade - Disco PHP Framework',
            'View'=>'View Facade - Disco PHP Framework'
        );

        if(isset($titles[$pageName])){
            $title = $titles[$pageName];
        }//if
        else {
            $title = ucwords(str_replace('-',' ',$pageName));
        }

        View::title($title);
        $content = Array('content'=>Template::build($pageName));
        Template::with('docsBasePage',$content);

})->where('pageName','alpha');



?>
