<?php

class HomePage {

    public function index(){
        Disco::make('View',function(){
            return new Index();
        });
        View::title('Disco PHP Framework - RESTful routing, Controllers, Templates, Events, MYSQL And More');
        View::bodyStyle('homepage');
        Template::with('index');
    }//root

}//homePage

?>
