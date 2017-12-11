<!DOCTYPE HTML>

<!--
File Name: aceInTheHole_index.html
Date: 12/4/17
Programmer: Stesha Norstrom
-->

<html>
    
<head>
    
<title>Ace in the Hole Multisport Event</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="author" content="Stesha Norstrom">
    
<link href="https://fonts.googleapis.com/css?family=Hind+Vadodara:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,700" rel="stylesheet">
    
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/grid.css" rel="stylesheet" type="text/css">  
<link href="css/navigation.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/less.js/1.3.1/less.min.js"></script>-->
    
    
</head>    

<body>
    
   <div id="fb-root"></div>
   <script>(function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
   fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));</script>
    
    <?php include "includes/header.php";?>
    
    <main>
        
        <div class="section group">
        <div class="col span_2_of_3 span_3_of_3">
    
            <!--single image mobile/tablet view only-->
            
            <img src="images/bicyclists.JPG" alt="bicyclists" id="mobileImage">
            
            <!--slideshow desktop view only--> 
            <ul class="rslides">
                <li><img src="images/cyclists.jpg" alt="triathlon bicyclists" ></li>
                <li><img src="images/kids_swimming.JPG" alt="kids swimming"></li>
                <li><img src="images/running.jpg" alt="triathlon runners"></li>
                <li><img src="images/swimmers.jpg" alt="triathlon swimmers"></li>
                <li><img src="images/kids_running.JPG" alt="triathlon kids running"</li>
            </ul>
            
            <section id="aboutEvent">
                <h1>About the Event</h1>
                <p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community.
                    It has become a traditional destination race for athletes from across the nation.</p> 

                <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, 
                    Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to
                    compete to win, but make sure you come to have fun!</p>
            
            </section>
        
            <article id="contactForm">
                <h1>Sign up now for more information!</h1>
                <form name="contactInput" method="POST" action="returnPageContact.html.php">
                    
                    <div class="row">
                        <div class="col-25">
                            <label for="firstLastName">Name (First and Last):</label><br>
                        </div>
                        <div class="col-75">
                            <input type="text" name="firstLastName" id="firstLastName">
                        </div>
                    </div>
                    
                        <br><br>
                
                    <div class="row">
                        <div class="col-25">
                            <label for="email">E-mail:</label><br>
                        </div>
                        <div class="col-75">
                            <input type="email" name="email" id="email">
                        </div>
                    </div>
                
                        <br><br>
                    
                    <label>Please choose how you wish to participate:</label><br><br>
                    <input type="radio" name="participationStatus" id="participationStatusAthlete" value="athlete">
                    <label for="participationStatusAthlete">Athlete</label><br>
                    <input type="radio" name="participationStatus" id="participationStatusVolunteer" value="volunteer">
                    <label for="participationStatusVolunteer">Volunteer</label>
                    
                        <br><br>
                    
                    <div class="row">
                        <div class="col-25">
                            <label for="comment">Comments or questions:</label><br>
                        </div>
                        <div class="col-75">
                            <textarea name="comment" id="comment" cols="40" rows="2"></textarea>
                        </div>
                    </div>
                        
                        <br><br>
                    
                    <input type="submit" value="Submit" class="button">
                </form> 
            </article>
            
        </div>
    
        <div class="col span_1_of_3 span_3_of_3">
            
            <aside id="weatherFeed">
               <span style="display: block !important; width: 100%; text-align: center; font-family: sans-serif; font-size: 12px;"><a href="http://www.wunderground.com/cgi-bin/findweather/getForecast?query=zmw:97201.1.99999&bannertypeclick=wu_blueglass" title="Portland, Oregon Weather Forecast" target="_blank"><img src="http://weathersticker.wunderground.com/weathersticker/cgi-bin/banner/ban/wxBanner?bannertype=wu_blueglass&airportcode=KPDX&ForcedCity=Portland&ForcedState=OR&zip=97201&language=EN" alt="Find more about Weather in Portland, OR" width="350" /></a><br><a href="http://www.wunderground.com/cgi-bin/findweather/getForecast?query=zmw:97201.1.99999&bannertypeclick=wu_blueglass" title="Get latest Weather Forecast updates" style="font-family: sans-serif; font-size: 12px" target="_blank">Click for weather forecast</a></span>
            </aside>
            <aside id="socialMediaFeed">
                <div class="twitter">
                    <h2>Follow us on Twitter!</h2>
                    <a class="twitter-timeline" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                
                <h2>Like us on Facebook!</h2>
                <div class="fb-page" data-href="https://www.facebook.com/pg/cas222cascade/about/" data-tabs="timeline" data-width="400" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/pg/cas222cascade/about/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pg/cas222cascade/about/">CAS 222</a></blockquote></div>
            </aside>
            
        </div>
        </div>    
    
    </main>
    
    <?php include "includes/footer.php";?>
    
    <script src="scripts/jquery.js"></script>
    <script src="scripts/navigation.js"></script>
    <script src="scripts/slideshow.js"></script>
    <script src="scripts/responsiveslides.min.js"></script>
    
</body>

</html>