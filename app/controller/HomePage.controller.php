<?php

class HomePage {

    public function index(){
        Disco::make('View',function(){
            return new Index();
        });
        View::title('Disco PHP Framework - Inversion of Control, MVC, RESTful Routing');
        View::desc('PHP framework centric around Inversion of Control and Model View Controller principles. Composer based installation and dependency management.');
        View::bodyStyle('homepage');
        Template::with('index');
    }//root

}//homePage

?>
