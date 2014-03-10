<?php

Router::get('/','HomePage@index');


Router::get('/docs','Docs@introPage');

Router::get('/docs/{pageName}','Docs@singlePage');


?>
