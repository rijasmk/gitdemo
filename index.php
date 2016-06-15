<?php
/**
* Need to add some comment here
*/

require "includes/FavoriteTweetsList.class.php";
require "includes/codebird/codebird.php";

// Enter the credentials of your app here:
$tweets = new FavoriteTweetsList(array(
    'twitter_consumer_key'		=> '',
    'twitter_consumer_secret'	=> '',
    'twitter_access_token'		=> '',
    'twitter_token_secret'		=> ''
));

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Display your Favorite Tweets using PHP and jQuery | Tutorialzine Demo</title>
        
        <!-- Our CSS stylesheet file -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>
		
		<div id="container">
	        <?php $tweets->generate(5);?>
        </div>

        <footer>
	        <h2>Display your Favorite Tweets using PHP and jQuery</h2>
            <a class="tzine" href="http://tutorialzine.com/2011/08/display-favorite-tweets-php-css/">Read &amp; Download on</a>
        </footer>
        
        <!-- JavaScript includes -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="assets/js/jquery.splitlines.js"></script>
        <script src="assets/js/script.js"></script>
         
    </body>
</html>

