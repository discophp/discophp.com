<?php

/**
 * Load Disco 
 * The only require you must write
*/
require_once('../vendor/jbhamilton/disco-core/core/Disco.core.php');



/**
 * Swap the View Facade with a new instance 
*/
Disco::make('View',function(){
    return new Standard();
});




/**
 * Set up a Router
*/
Disco::useRouter('pages');


View::seo();
View::bodyStyle('row');
//View::noIndex();


View::headExtra("
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49957596-1', 'discophp.com');
  ga('send', 'pageview');

  </script>
");

/**
 * Print out our View
*/
View::printPage();



?>
