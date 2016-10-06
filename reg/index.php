<!DOCTYPE html>
<html lang="en">
    <!-- 
 ____  __.      .__          __  .__                   
|    |/ _|______|__| _______/  |_|__|____    ____      
|      < \_  __ \  |/  ___/\   __\  \__  \  /    \     
|    |  \ |  | \/  |\___ \  |  | |  |/ __ \|   |  \    
|____|__ \|__|  |__/____  > |__| |__(____  /___|  /    
        \/              \/               \/     \/     
                         .__                __         
                         |  |  __ __  _____/  |_ __ __ 
                         |  | |  |  \/ ___\   __\  |  \
                         |  |_|  |  / /_/  >  | |  |  /
                         |____/____/\___  /|__| |____/ 
                                   /_____/             
    -->
    <head>
        <meta charset="utf-8">
        <title>FSA Philippines Sign-up and Renewal form for AY 2016-2017</title>
        <meta name="description" content="Firefox Student Ambassadors Philippines">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" href="css/skeleton.css">
        <link rel="stylesheet" href="css/forms.css">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/socialize-bookmarks.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="js/fancybox/source/jquery.fancybox63b9.css?v=2.1.4">
        <link rel="shortcut icon" href="//mozorg.cdn.mozilla.net/media/img/favicon.ico">
        <link href="//www.mozilla.org/tabzilla/media/css/tabzilla.css" rel="stylesheet" />
        <script src="//www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/modernizr.2.5.3.js"></script>
    </head>
    <body>
        <br />
        <div id="masthead">
            <a href="http://www.mozilla.org/" id="tabzilla">mozilla</a>
        </div>
        <header>

            <div class="container">
                <div class=" four columns" id="logo"><a href="http://fsa.mozillaphilippines.org"><img src="img/logo.png" class="scale-with-grid" alt="Logo"></a></div>
                <!-- Your logo-->
                <div class="twelve columns" id="top-nav">
                </div>
            </div>
        </header><!-- End Header-->
        <br />

        <section id="form_area">
            <div id="shadow"></div>
            <article class="container">
                <br /><br />
                <div class=" four columns" id="top-msg">
                    <div id="top-msg-wp">
                        <h2>Complete the form</h2>
                        <p>Hello Firefox Student Ambassador!</p>
                        <p>By filling out this form, you agree that the Mozilla Philippines Community will use the information solely to communicate with you. Rest assured that it will not be given to anyone outside the Mozilla Philippines Community and will not be used to send you updates not related to Mozilla and the FSA program. </p>
                    </div>
                </div>
                <div class="twelve columns">
                    <form id="custom" action="" method="POST">
                        <fieldset title="Step 1">
                            <legend>Choose one</legend>
                            <br class="clear">
                            <br />
                            <label><input type="radio" name="opt" value="newfsa" required/> Register (as NEW) FSA (student) for AY 2016-2017</label>
                            <br />
                            <label><input type="radio" name="opt" value="renewfsa" required/> Renew as an FSA (student) for AY 2016-2017</label>
                            <br />
                            <label><input type="radio" name="opt" value="fsaalumni" required/> Register as an FSA alumnus (member of the graduating class of 2016)</label>
                            <br /><br /><br />
                        </fieldset>

                        <input type="submit" name="submit" class="finish" value="Next"/>
                    </form>
                </div>
            </article>
            <br />
        </section>


        <footer>
            <nav class="twelve columns">
                <ul class="social-bookmarks">
                    <li>  </li><li>  </li>
                    <li class="facebook"><a href="http://www.facebook.com/mozillaphilippines" target="_blank">facebook</a></li>
                    <li class="twitter"><a href="https://twitter.com/MozillaPH" target="_blank">twitter</a></li>
                    <li class="flickr"><a href="http://www.flickr.com/photos/mozph" target="_blank">flickr</a></li>
                    <li class="html5"><a href="http://www.mozillaphilippines.org/" target="_blank">website</a></li>
                </ul>
            </nav>
            <div class="four columns copy">© Mozilla Philippines 2016 - All Rights Reserved.</div>
            <br class="clear">
        </footer><!-- End Footer -->

    </div><!-- End Container -->
    <!-- Form style  --> 
    <script src="js/jquery.uniform.js"></script> 
    <script type="text/javascript">$(function() {
            $("input[type='text'],input[type='email'],input[type='radio'],input[type='checkbox'],input[type='date'], textarea, select").uniform();
        });</script>
    <!-- Add fancyBox --> 
    <script src="js/fancybox/source/jquery.fancybox.pack63b9.js?v=2.1.4"></script> 
    <script src="js/fancybox/source/helpers/jquery.fancybox-media3447.js?v=1.0.5"></script> 
    <script src="js/fancy_func.js"></script> 

    <script src="js/flexi_slider.js"></script>

    <!-- JQUERY plugins: Poshy Tip, GMAP3, jQuery Validation, Tabs --> 
    <script src="js/plug_ins.js"></script> 

    <script src="js/jquery.stepy.min.js"></script> 
    <script src="js/sign-up-validate.js"></script> 
    <script src="js/functions.js"></script> 
</body>
</html>

<?php
//include 'includes/database.php';
//
if (isset($_POST['submit'])) {
    $opt = $_POST['opt'];
    echo "<script>window.location.replace('form.php?form=$opt');</script>";
}
?>