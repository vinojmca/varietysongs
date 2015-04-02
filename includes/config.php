<?php
require 'inc/rb.php';
 R::setup( 'mysql:host=' . getenv('IP') . ';dbname=c9', getenv('C9_USER') , '' ); 
 