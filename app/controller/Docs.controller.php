<?php

class Docs {

    public function introPage(){
        View::title('Disco PHP Framework');
        $content = Array('content'=>Template::build('docsIndex'));
        Template::with('docsBasePage',$content);
    }//introPage

    public function singlePage($pageName){
        View::title(ucwords(str_replace('-',' ',$pageName)));
        $content = Array('content'=>Template::build($pageName));
        Template::with('docsBasePage',$content);
    }//singlePage

}//Docs


?>
