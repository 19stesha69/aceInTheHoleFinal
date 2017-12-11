<!DOCTYPE HTML>

<!--
File Name: aceInTheHole_registration.html
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
    
    <?php include "includes/header.php";?>
    
    <main>
        
        <div id="regBodyWrap">
        
        <div class="section group">
        <div class="col span_2_of_3 span_3_of_3">
        
            <section id="registrationForm">
                
                <h1>Register Here</h1>
                <form name="registrationInput" method="POST" action="returnPageRegistration.html.php">
                    
                    <div class="row">
                        <div class="col-25">
                            <label for="firstLastName">Name (First and Last):</label><br>
                        </div>
                        <div>
                            <input type="text" name="firstLastName" id="firstLastNam">
                        </div>
                    </div>
                    
                        <br>
                    
                    <div class="row">
                        <div class="col-25">
                            <label for="name">E-mail:</label><br>
                        </div>
                        <div class="col-75">
                            <input type="email" name="email" id="email">
                        </div>
                    </div>
                    
                        <br>
                    
                    <div class="row">
                        <div class="col-25">
                            <label for="phoneNumber">Phone Number:</label><br>
                        </div>
                        <div class="col-75">
                            <input type="tel" name="phoneNumber" id="phoneNumber">
                        </div>
                    </div>
                    
                        <br>
                    
                    <div class="row">
                        <div class="col-25">
                            <label for="emergencyPhoneNumber">Emergency Contact Phone Number:</label><br>
                        </div>
                        <div class="col-75">
                            <input type="tel" name="emergencyPhoneNumber" id="emergencyPhoneNumber">
                        </div>
                    </div>
                    
                        <br>
                    
                    <label>Choose your event(s):</label><br>
                        <br>
                    <label for="eventSaturday">Saturday 12/20</label>
                    <select size="1" name="eventSaturday" id="eventSaturday">
                        <option value="" disabled="disabled" selected="selected">Events</option>
                        <option value="longCourse">Long Course</option>
                        <option value="olympic">Olympic</option>
                        <option value="run10k">10K</option>
                        <option value="halfMarathon">Half Marathon</option>
                    </select>
                        <br><br>
                    <label for="eventSunday">Sunday 12/21</label>
                    <select size="1" name="eventSunday" id="eventSunday">
                        <option value="" disabled="disabled" selected="selected">Events</option>
                        <option value="sprint">Sprint</option>
                        <option value="try_a_tri">Try-a-Tri</option>
                        <option value="splash_n_dash">Splash n Dash</option>
                    </select>
                        <br><br>
                    <input type="submit" value="Submit">
                    </form>  
            
            </section>
            
        </div>
    
        <div class="col span_1_of_3 span_3_of_3">
            <aside id="registrationCosts">
                
                <h2>Registration Costs</h2>
                
                <ul>
                    <li>Long Course:     $240</li>
                    <li>Olympic:         $110</li>
                    <li>Sprint           $90</li>
                    <li>Half Marathon:   $75</li>
                    <li>Sprint           $90</li>
                    <li>10K:             $50</li>
                    <li>Splash and Dash: $15 (free for kids who have 
                        a parent registered for another event)</li>
                </ul> 
                
            </aside>
            
            <article id="costIncludes">
                
                <h2>Cost Includes</h2>
                    
                <div id="costIncludesList">    
                    <ul>
                        <li>Food &#38; Beer</li>
                        <li>Access to the weekend’s live entertainment &#38; Fitness Expo</li>
                        <li>Commemorative Finisher medal</li>
                        <li>Accurate Chip Timing for competitive races</li>
                        <li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
                        <li>Post-event party &#38; entertainment</li>                        
                    </ul>
                </div>    
                <p>NOTE: Tech shirts guaranteed to pre-registered participants only.</p>
                
            </article>
                
            <div class="linkBack">
            <h3>Want more information?<a href="aceInTheHole_index.html.php#contactForm"> Sign up now</a>!</h3>
            </div>
            
        </div>
        </div> 
        </div>
    
    </main>
    
    <?php include "includes/footer.php";?>
    
    <script src="scripts/jquery.js"></script>
    <script src="scripts/navigation.js"></script>
    
</body>

</html>