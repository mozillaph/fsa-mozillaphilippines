<!DOCTYPE html>
<html lang="en">
    <!-- 
    Created by:
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
        <title>FSA Philippines Sign-up and Renewal Form for AY 2016-2017</title>
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
        <link rel="shortcut icon" href="">
        <link rel="shortcut icon" href="//mozorg.cdn.mozilla.net/media/img/favicon.ico">
        <link href="//www.mozilla.org/tabzilla/media/css/tabzilla.css" rel="stylesheet" />
        <script src="//www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/modernizr.2.5.3.js"></script>
        <script>
            $(function() {
                $("#dialog-message").dialog({
                    closeOnEscape: false,
                    modal: true,
                    buttons: {
                        Ok: function() {
                            $(this).dialog("close");
                            location = 'index.php';
                        }
                    }
                });
            });
        </script>
        <script>
            $(function() {
                $("#datepicker").datepicker({
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '1990:2015'
                });
            });
        </script>
    </head>
    <body>
        <script>if (/*@cc_on!@*/false) {
                document.documentElement.className += ' ie10';
            }</script>
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
                <?php 
                 $id = $_GET['form'];
                 if($id=="newfsa"){
                     echo '
                         <div class="twelve columns">
                    <form id="custom" action="includes/add.php?form=newfsa" method="POST">


                        <fieldset title="Step 1">
                            <legend>Personal info</legend>
                            <div class="five columns alpha">
                                <label>First Name<a href="#" class="tooltip_1" title="Please capitalize the first letters of your names. Do not capitalize all letters.">Info</a></label>
                                <input type="text" name="first_name" placeholder="Alab" required/>
                            </div>
                            <div class="five columns omega">
                                <label>Last name <a href="#" class="tooltip_1" title="Please capitalize the first letters of your names. Do not capitalize all letters.">Info</a></label>
                                <input type="text" name="last-name" placeholder="Dela Cruz" required/>
                            </div>
                            <div class="five columns alpha">
                                <label>E-mail <a href="#" class="tooltip_1" title="Please provide an existing e-mail address, else you will miss a lot of updates from the community. Make sure you double check the spelling. We hate spam as much as you do.">Info</a></label>
                                <input type="email" name="email-add" placeholder="youremail@example.com" required/>
                            </div>
                            <div class="five columns omega">
                                <label>Mobile Number<a href="#" class="tooltip_1" title="Provide only one working cellphone number.">Info</a></label>
                                <input type="text" name="phone_number" pattern="\d*" placeholder="09999999999"/>
                            </div>
                            <div class="five columns alpha">
                                <label>Birthday <a href="#" class="tooltip_1" title="This is to ensure that you are at least 18 years of age">Info</a></label>
                                <input type="text" name="birthday" id="datepicker" required/>
                            </div>
                            <div class="five columns omega">
                                <label>School <a href="#" class="tooltip_1" title="Enter the complete name of your school, including your specific campus do not abbreviate. i.e. "Colegio de San Juan de Letran- Calamba"">Info</a></label>
                                <input type="text" name="school" placeholder="University of the World" required/>
                            </div>
                            <div class="five columns alpha">
                                <label>Degree Type</label>
                                <select name="degree" required>
                                    <option></option>
                                    <option>Bachelor of Science</option>
                                    <option>Master of Science</option>
                                    <option>Doctor of Philosophy</option>
                                </select>
                            </div>
                            <div class="five columns omega">
                                <label>Degree Program <a href="#" class="tooltip_1" title="Do not abbreviate. i.e. Information Technology major in Network Systems">Info</a></label>
                                <input type="text" name="program" placeholder="Computer Science" required/>
                            </div>
                            <br class="clear">
                            <div class="five columns alpha">
                                <label>Year Entered School</label>
                                <select name="year-entered" required>
                                    <option></option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                </select>
                            </div>
                            <div class="five columns omega">
                                <label>Expected Year of Graduation</label>
                                <select name="expected-grad" required>
                                    <option></option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                </select>
                            </div>
                            <br class="clear">
                        </fieldset> 

                        <fieldset title="Step 2">
                            <legend>Contact Info &amp; Affiliations</legend>
                            <div class="five columns alpha">
                                <label>Home Address <a href="#" class="tooltip_1" title="Enter your city/municipality only. Do not enter your complete address.">Home Address</a></label>
                                <input type="text" name="home-add" placeholder="Antipolo City, Rizal" required/>
                            </div>
                            <div class="five columns omega">
                                <label>Dorm Address <a href="#" class="tooltip_1" title="If you are staying at a dorm. Put n/a if not applicable. Enter the city/municipality only. Do not enter your complete address.">Dorm Address</a></label>
                                <input type="text" name="city-add" placeholder="Sampaloc, Manila"/>
                            </div>
                            <div class="five columns alpha">
                                <label>Facebook Profile Link <a href="#" class="tooltip_1" title="This will be used to add you to relevant Facebook groups for communication purposes">Facebook</a></label>
                                <input type="url" class="url" name="fb" placeholder="http://www.facebook.com/yourprofile" required/>
                            </div>
                            <div class="five columns omega">
                                <label>Twitter Link <a href="#" class="tooltip_1" title="twitter">Twitter</a></label>
                                <input type="text" name="twitter" placeholder="http://www.twitter.com/yourprofile"/>
                            </div>
                            <div class="five columns alpha">
                                <label>Blog/Website <a href="#" class="tooltip_1" title="blog">Blog/Website</a></label>
                                <input type="text" name="blog-web" placeholder="http://www.yourwebsite.com" />
                            </div>
                            <div class="five columns omega">
                                <label>Nationwide/International Organization/s <a href="#" class="tooltip_1" title="i.e. AIESEC Philippines, JPCS National Chapter etc">Nationwide/International Organization/s </a></label>
                                <input type="text" name="ntl-orgs" placeholder="National Organization"/>
                            </div>
                            <div class="five columns omega">
                                <label>University Organization/s<a href="#" class="tooltip_1" title="i.e. UST Computer Science Society etc.">University Organization/s</a></label>
                                <input type="text" name="uni-orgs" placeholder="University Organization"/>
                            </div>


                            <br class="clear">
                        </fieldset>

                        <fieldset title="Step 3">
                            <legend>Agreement</legend>
                            <p><input name="share" type="checkbox" value="Yes" required>I agree that the information I have provided be used to communicate with me regarding Mozilla PH Community and FSA program matters. I understand that this will not be shared to anyone outside the local community.</p>
                            <p><input name="years" type="checkbox" value="Yes" required>I’m 18 years old and eligible to participate in the program.</p>
                            <p><input name="terms" type="checkbox" value="Yes" required>I certify that the information that I have given is true and correct.</a></p>
                        </fieldset>

                        <input type="submit" name="submit" class="finish" value="Finish"/>
                    </form>
                </div>

                        ';
                 }else if($id=="renewfsa"){
                     echo '
                         <div class="twelve columns">
                    <form id="custom" action="includes/add.php?form=renewfsa" method="POST">


                        <fieldset title="Step 1">
                            <legend>Personal info</legend>
                            <div class="five columns alpha">
                                <label>First Name<a href="#" class="tooltip_1" title="Please capitalize the first letters of your names. Do not capitalize all letters.">Info</a></label>
                                <input type="text" name="first_name" placeholder="Alab" required/>
                            </div>
                            <div class="five columns omega">
                                <label>Last name <a href="#" class="tooltip_1" title="Please capitalize the first letters of your names. Do not capitalize all letters.">Info</a></label>
                                <input type="text" name="last-name" placeholder="Dela Cruz" required/>
                            </div>
                            <div class="five columns alpha">
                                <label>E-mail <a href="#" class="tooltip_1" title="Please provide an existing e-mail address, else you will miss a lot of updates from the community. Make sure you double check the spelling. We hate spam as much as you do.">Info</a></label>
                                <input type="email" name="email-add" placeholder="youremail@example.com" required/>
                            </div>
                            <div class="five columns omega">
                                <label>Mobile Number<a href="#" class="tooltip_1" title="Provide only one working cellphone number.">Info</a></label>
                                <input type="text" name="phone_number" pattern="\d*" placeholder="09999999999"/>
                            </div>
                            <div class="five columns alpha">
                                <label>Birthday <a href="#" class="tooltip_1" title="This is to ensure that you are at least 18 years of age">Info</a></label>
                                <input type="text" name="birthday" id="datepicker" required/>
                            </div>
                            <div class="five columns omega">
                                <label>School <a href="#" class="tooltip_1" title="Enter the complete name of your school, including your specific campus do not abbreviate. i.e. "Colegio de San Juan de Letran- Calamba"">Info</a></label>
                                <input type="text" name="school" placeholder="University of the World" required/>
                            </div>
                            <div class="five columns alpha">
                                <label>Degree Type</label>
                                <select name="degree" required>
                                    <option></option>
                                    <option>Bachelor of Science</option>
                                    <option>Master of Science</option>
                                    <option>Doctor of Philosophy</option>
                                </select>
                            </div>
                            <div class="five columns omega">
                                <label>Degree Program <a href="#" class="tooltip_1" title="Do not abbreviate. i.e. Information Technology major in Network Systems">Info</a></label>
                                <input type="text" name="program" placeholder="Computer Science" required/>
                            </div>
                            <br class="clear">
                            <div class="five columns alpha">
                                <label>Year Entered School</label>
                                <select name="year-entered" required>
                                    <option></option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                </select>
                            </div>
                            <div class="five columns omega">
                                <label>Expected Year of Graduation</label>
                                <select name="expected-grad" required>
                                    <option></option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                </select>
                            </div>
                            <br class="clear">
                        </fieldset> 

                        <fieldset title="Step 2">
                            <legend>Contact Info &amp; Affiliations</legend>
                            <div class="five columns alpha">
                                <label>Home Address <a href="#" class="tooltip_1" title="Enter your city/municipality only. Do not enter your complete address.">Home Address</a></label>
                                <input type="text" name="home-add" placeholder="Antipolo City, Rizal" required/>
                            </div>
                            <div class="five columns omega">
                                <label>Dorm Address <a href="#" class="tooltip_1" title="If you are staying at a dorm. Put n/a if not applicable. Enter the city/municipality only. Do not enter your complete address.">Dorm Address</a></label>
                                <input type="text" name="city-add" placeholder="Sampaloc, Manila"/>
                            </div>
                            <div class="five columns alpha">
                                <label>Facebook Profile Link <a href="#" class="tooltip_1" title="This will be used to add you to relevant Facebook groups for communication purposes">Facebook</a></label>
                                <input type="url" class="url" name="fb" placeholder="http://www.facebook.com/yourprofile" required/>
                            </div>
                            <div class="five columns omega">
                                <label>Twitter Link <a href="#" class="tooltip_1" title="twitter">Twitter</a></label>
                                <input type="text" name="twitter" placeholder="http://www.twitter.com/yourprofile"/>
                            </div>
                            <div class="five columns alpha">
                                <label>Blog/Website <a href="#" class="tooltip_1" title="blog">Blog/Website</a></label>
                                <input type="text" name="blog-web" placeholder="http://www.yourwebsite.com" />
                            </div>
                            <div class="five columns omega">
                                <label>Nationwide/International Organization/s <a href="#" class="tooltip_1" title="i.e. AIESEC Philippines, JPCS National Chapter etc">Nationwide/International Organization/s </a></label>
                                <input type="text" name="ntl-orgs" placeholder="National Organization"/>
                            </div>
                            <div class="five columns omega">
                                <label>University Organization/s<a href="#" class="tooltip_1" title="i.e. UST Computer Science Society etc.">University Organization/s</a></label>
                                <input type="text" name="uni-orgs" placeholder="University Organization"/>
                            </div>


                            <br class="clear">
                        </fieldset>

                        <fieldset title="Step 3">
                            <legend>Agreement</legend>
                            <p><input name="share" type="checkbox" value="Yes" required>I agree that the information I have provided be used to communicate with me regarding Mozilla PH Community and FSA program matters. I understand that this will not be shared to anyone outside the local community.</p>
                            <p><input name="years" type="checkbox" value="Yes" required>I’m 18 years old and eligible to participate in the program.</p>
                            <p><input name="terms" type="checkbox" value="Yes" required>I certify that the information that I have given is true and correct.</a></p>
                        </fieldset>

                        <input type="submit" name="submit" class="finish" value="Finish"/>
                    </form>
                </div>

                        ';
                 }else{
                     
                     echo '
                         <div class="twelve columns">
                    <form id="custom" action="includes/add.php?form='.$id.'" method="POST">


                        <fieldset title="Step 1">
                            <legend>Personal Information</legend>
                            <div class="five columns alpha">
                                <label>First Name<a href="#" class="tooltip_1" title="Please capitalize the first letters of your names. Do not capitalize all letters.">Info</a></label>
                                <input type="text" name="first_name" placeholder="Alab" required/>
                            </div>
                            <div class="five columns omega">
                                <label>Last name <a href="#" class="tooltip_1" title="Please capitalize the first letters of your names. Do not capitalize all letters.">Info</a></label>
                                <input type="text" name="last-name" placeholder="Dela Cruz" required/>
                            </div>
                            <div class="five columns alpha ">
                                <label>E-mail <a href="#" class="tooltip_1" title="Please provide an existing e-mail address, else you will miss a lot of updates from the community. Make sure you double check the spelling. We hate spam as much as you do.">Info</a></label>
                                <input type="email" name="email-add" placeholder="youremail@example.com" required/>
                            </div>
                            <div class="five columns omega">
                                <label>Mobile Number<a href="#" class="tooltip_1" title="Provide only one working cellphone number.">Info</a></label>
                                <input type="text" name="phone_number" pattern="\d*" placeholder="09999999999" required/>
                            </div>
                            <div class="five columns alpha">
                               <label>Birthday <a href="#" class="tooltip_1" title="This is to ensure that you are at least 18 years of age">Info</a></label>
                                <input type="text" name="birthday" id="datepicker" required/>
                            </div>
                            <div class="five columns omega">
                                <label>School <a href="#" class="tooltip_1" title="Enter the complete name of your school, including your specific campus do not abbreviate. i.e. "Colegio de San Juan de Letran- Calamba"">Info</a></label>
                                <input type="text" name="school" placeholder="University of the World" required/>
                            </div>
                            <div class="five columns alpha">
                                <label>Last Degree Obtained<a href="#" class="tooltip_1" title="Do not abbreviate. i.e. BS Information Technology major in Network Systems">Info</a></label>
                                <input type="text" name="program" placeholder="BS Computer Science" required/>
                            </div>
                            <br class="clear">
                        </fieldset> 

                        <fieldset title="Step 2">
                            <legend>Contact Info &amp; Affiliations</legend>
                            <div class="five columns alpha">
                                <label>Home Address <a href="#" class="tooltip_1" title="Enter your city/municipality only. Do not enter your complete address.">Home Address</a></label>
                                <input type="text" name="home-add" placeholder="Antipolo City, Rizal" required/>
                            </div>
                            <div class="five columns omega">
                                <label>Dorm Address <a href="#" class="tooltip_1" title="If you are staying at a dorm. Put n/a if not applicable. Enter the city/municipality only. Do not enter your complete address.">Dorm Address</a></label>
                                <input type="text" name="city-add" placeholder="Sampaloc, Manila" />
                            </div>
                            <div class="five columns alpha">
                               <label>Facebook Profile Link <a href="#" class="tooltip_1" title="This will be used to add you to relevant Facebook groups for communication purposes">Facebook</a></label>
                                <input type="text" name="fb" placeholder="https://www.facebook.com/yourprofile" required/>
                            </div>
                            <div class="five columns omega">
                                <label>Twitter Link <a href="#" class="tooltip_1" title="twitter">Twitter</a></label>
                                <input type="text" name="twitter" placeholder="https://www.twitter.com/yourprofile"/>
                            </div>
                            <div class="five columns alpha">
                                <label>Blog/Website <a href="#" class="tooltip_1" title="blog">Blog/Website</a></label>
                                <input type="text" name="blog-web" placeholder="https://www.yourwebsite.com"/>
                            </div>


                            <br class="clear">
                        </fieldset>

                        <fieldset title="Step 3">
                           <legend>Agreement</legend>
                            <p><input name="share" type="checkbox" value="Yes" required>I agree that the information I have provided be used to communicate with me regarding Mozilla PH Community and FSA program matters. I understand that this will not be shared to anyone outside the local community.</p>
                            <p><input name="years" type="checkbox" value="Yes" required>I’m 18 years old and eligible to participate in the program.</p>
                            <p><input name="terms" type="checkbox" value="Yes" required>I certify that the information that I have given is true and correct.</a></p>
                        </fieldset>

                        <input type="submit" name="submit" class="finish" value="Finish"/>
                    </form>
                </div>

                        ';
                     
                     
                 }
                
                ?>
                
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

