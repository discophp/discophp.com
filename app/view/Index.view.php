<?php

Class Index extends Disco\classes\View {

    public function header(){
        return Template::build('menu');
    }//header

    public function __construct(){

        $this->scriptSrc('http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');
        $this->scriptSrc('/scripts/js.js');
        $this->scriptSrc('/scripts/modernizr.js');
        $this->scriptSrc('/scripts/foundation.min.js');
        $this->scriptSrc('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js');

        $this->styleSrc('/css/foundation.min.css');
        $this->styleSrc('/css/css.css');

        $this->script('$(document).foundation();');

    }//construct

    public function footer(){
        return Template::build('footer');
    }//footer

}//Standard

?>
