<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width,initial-scale=1,user-scalable=0">
    <title>Yeting Bao - ISTE 646</title>
    <link href=./static/css/style.css rel=stylesheet>
    <script>
        
    </script>
</head>

<body>
    <div id="app">
        <div id="navigation" class="nav_default">
            <div class="nav_left">YETING BAO</div>

<!--             <div class="nav_right small" onclick="Fold()">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Narrow_down" x="0px" y="0px" viewBox="0 0 240.811 240.811" style="enable-background:new 0 0 240.811 240.811;" xml:space="preserve" width="1em" height="1em">
                    <path id="Expand_More" d="M220.088,57.667l-99.671,99.695L20.746,57.655c-4.752-4.752-12.439-4.752-17.191,0   c-4.74,4.752-4.74,12.451,0,17.203l108.261,108.297l0,0l0,0c4.74,4.752,12.439,4.752,17.179,0L237.256,74.859   c4.74-4.752,4.74-12.463,0-17.215C232.528,52.915,224.828,52.915,220.088,57.667z" fill="#FFFFFF"/>
                </svg>
            </div>
 -->
            <div class="nav_right wide">
                <div><a href="#about">ABOUT</a></div>
                <div><a href="#project">PROJECT</a></div>
                <!-- <div><a href="#experience">EXPERIENCE</a></div> -->
            </div>

            <div class="nav_right small">
                <div><a href="#about">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_0" x="0px" y="0px" width="1em" height="1em" viewBox="0 0 27.555 27.555" style="enable-background:new 0 0 27.555 27.555;" xml:space="preserve">
                        <path id='about_icon' d="M13.777,0C7.108,0,1.701,5.406,1.701,12.076c0,3.45,1.454,6.553,3.773,8.752L5.07,27.555l5.736-3.785   c0.952,0.24,1.944,0.383,2.971,0.383c6.67,0,12.076-5.408,12.076-12.076C25.854,5.406,20.447,0,13.777,0z M17.844,5.915h1.406   l-0.99,4.112h-1.008L17.844,5.915z M17.59,10.481c0.444,0,0.754,0.318,0.754,0.763c0,0.518-0.381,0.89-0.891,0.89   c-0.445,0-0.734-0.317-0.734-0.744C16.717,10.908,17.082,10.481,17.59,10.481z M16.08,5.661c0.381,0,0.654,0.254,0.654,0.645   c0,0.463-0.354,0.735-0.771,0.735c-0.363,0-0.636-0.245-0.636-0.636C15.336,5.96,15.68,5.661,16.08,5.661z M16.452,7.594   l-0.844,4.439h-1.307l0.844-4.439H16.452z M9.465,5.915h1.308l-0.454,2.388h2.225l0.454-2.388h1.308l-1.162,6.119h-1.308   l0.481-2.569h-2.215l-0.49,2.569H8.304L9.465,5.915z M13.777,20.229c-3.335,0-6.039-2.646-6.039-4.17   c0-1.525,2.703,0.062,6.039,0.062c3.335,0,6.038-1.588,6.038-0.062C19.815,17.582,17.112,20.229,13.777,20.229z" fill="#FFFFFF"/>
                    </svg>
                    </a>
                </div>
                <div><a href="#project">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="1em" height="1em" viewBox="0 0 535.5 535.5" style="enable-background:new 0 0 535.5 535.5;" xml:space="preserve">
                            <path id="project_icon" d="M471.75,255H433.5V153c0-28.05-22.95-51-51-51h-102V63.75C280.5,28.05,252.45,0,216.75,0S153,28.05,153,63.75V102H51    c-28.05,0-51,22.95-51,51v96.9h38.25c38.25,0,68.85,30.6,68.85,68.85S76.5,387.6,38.25,387.6H0v96.9c0,28.05,22.95,51,51,51h96.9    v-38.25c0-38.25,30.6-68.85,68.85-68.85s68.85,30.6,68.85,68.85v38.25h96.9c28.05,0,51-22.95,51-51v-102h38.25    c35.7,0,63.75-28.05,63.75-63.75S507.45,255,471.75,255z" fill="#FFFFFF"/>
                    </svg>
                </a></div>
<!--                 <div><a href="#experience">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_2" x="0px" y="0px" width="1em" height="1em" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                            <path id='experience_icon' d="M382.5,51V0h-255v51H51v459h153v-51h102v51h153V51H382.5z M229.5,382.5h-51v-51h51V382.5z M229.5,280.5h-51v-51h51V280.5z     M229.5,178.5h-51v-51h51V178.5z M331.5,382.5h-51v-51h51V382.5z M331.5,280.5h-51v-51h51V280.5z M331.5,178.5h-51v-51h51V178.5z" fill="#FFFFFF"/>
                    </svg>
                </a></div> -->
            </div>
        </div>
        
        <div id="navi"></div>

        <div id="content">
            <div id="about">
                <div id='abstract'>
                    <div><img id="avatar" src="./static/img/avatar0.jpg" alt="avatar"></div>
                    <div id="quote">“Hi,
                        <p>I am <span id='ab_name'>Yeting Bao</span>.</p>
                        <p id="major">First-year graduate student in HCI program.</p>”</div>
                </div>
                <div id="introduce" class="details">
                    <div class="intro_left"><img src="./static/img/location.svg" alt="location icon">Rochester, NY</div>
                    <div class="intro_right">
                        <p>I am from Shanghai, China, which is a beautiful city with lovely people. My future career goal is to be a web developer or UX engineer. The books I recommend for UX learning: 1. The Design of Everyday Things--Don Norman; 2.Don’t Make Me Think--Steve Krug</p>
                    </div>
                </div>
            </div>
            <div id="project" class="details">
                <h3>Homework</h3>
                <div id="hw01" class="project_abstract" onclick="Show_Details(this,1)">
                    <p class="pro_name">Ajax</p>
                    <p class="pro_describe">Request XML data</p>
                </div>
                <div id="hw02" class="project_abstract" onclick="window.open('./event-jaunt-start.html');">
                    <p class="pro_name">API</p>
                    <p class="pro_describe">Web Services</p>
                </div>
                <h3>In-class Exercises</h3>
                <h3>Web Projects</h3>
                <div id="we01" class="project_abstract" onclick="window.open('project1/desgin-document.html');">
                    <p class="pro_name">WhatCanICook</p>
                    <p class="pro_describe">Individual Project 1 - Web Service Mashup</p>
                </div>
                <h3>UX Projects</h3>
                <div id="ux01" class="project_abstract" onclick="window.open('https://sites.google.com/g.rit.edu/hci-ritfoodrecovery','Recover_Rochester');">
                    <p class="pro_name">RecoverRochester</p>
                    <p class="pro_describe">RIT Food recovery app</p>
                </div>
                <div id="ux02" class="project_abstract" onclick="Show_Details(this,4)">
                    <p class="pro_name">Treadmill</p>
                    <p class="pro_describe">Interactive screen</p>
                </div>
            </div>
<!--             <div id="experience" class="details">
                <h3>Education Experience</h3>
                <div id="e2">
                    <div class="exp_left">08/2018 - 05/2020</div>
                    <div class="exp_right">Rochester Institue of Technology - Master of Science - Human Computer Interaction</div>
                </div>
                <div id="e1">
                    <div class="exp_left">09/2013 - 07/2017</div>
                    <div class="exp_right">Shanghai Ocean University - Bachelor of Engineering - Computer Science and Technology</div>
                </div>
                <h3>Work Experience</h3>
                <div id="w2">
                    <div class="exp_left">06/2017-08/2017</div>
                    <div class="exp_right">Front-end developer, Shangyuan Software Technology, Shanghai, China</div>
                </div>
                <div id="w1">
                    <div class="exp_left">03/2016-10/2016</div>
                    <div class="exp_right">Customer Service Engineer Assistant, DELL EMC, Shanghai, China</div>
                </div>
            </div> -->
        </div>

        <div id="ajax" class="details project_details">
            
            <button id="clear_alldata">Clear All Data</button>

            <h1>1. Jokes!</h1>
            <p>
                <button id="mybutton_01">Fetch Data</button>
            </p>
            <div id="jokes" class="data_requested"></div>
            
            <h1>2. Concerts!</h1>
            <p>
                <button id="mybutton_02">Fetch Data</button>
            </p>
            <div id="concerts" class="data_requested"></div>

            <h1>3. Movies!</h1>
            <p>
                <button id="mybutton_03">Fetch Data</button>
            </p>
            <div id="movies" class="data_requested"></div>

        </div>

        <div id="api" class="details project_details"></div>

        <div id="whaticancook" class="details project_details"></div>
        
        <div id="rocover_rochester" class="details project_details"></div>

        <div id="treadmill" class="details project_details">
                <img id="treadmill_photo" src="./static/img/treadmill/treadmill_head.png" height="454" width="1224" alt="">
                <h2>Treadmill</h2>
                <h3>Overview</h3>
                        <p>Our purpose is to improve the user experience of common treadmill. By observation and interview, we collected data and found goal of participants. The problem and design storyboard were created.</p>
                        <p>Team member: Linyun Zhu, Qiwen Zhao, Vaishnavi Mande and Yeting Bao</p>
                <h3>Personas</h3>
                        <img id="per1" src="./static/img/treadmill/Persona1.jpg" height="1002" width="1600" alt="">
                        <img id="per2" src="./static/img/treadmill/Persona2.jpg" height="1002" width="1600" alt="">
                        <img id="per3" src="./static/img/treadmill/Persona3.jpg" height="1002" width="1600" alt="">
                        <img id="per4" src="./static/img/treadmill/Persona4.jpg" height="1002" width="1600" alt="">
                <h3>Storybords</h3>
                        <img id="pro1" src="./static/img/treadmill/Problem1.png" height="1980" width="1356" alt="">
                        <img id="pro2" src="./static/img/treadmill/Problem2.png" height="1980" width="1356" alt="">
                        <img id="des1" src="./static/img/treadmill/Design3.png" height="1980" width="1356" alt="">
                        <img id="des2" src="./static/img/treadmill/Design4.png" height="1980" width="1356" alt="">
        </div>

        <div id="foot">
            <a class="icon" href="https://github.com/aniacm">
                <img src="static/img/GitHub-Mark-32px.png" height="32" width="32" alt="">
            </a>
            <a class="icon" href="mailto:yb5803@rit.edu">
                <img src="static/img/email_32px.png" height="32" width="32" alt="">
            </a>

            <div id="icons_credit">Icons made by <a href="https://www.flaticon.com/authors/google" title="Google">Google</a> from <a href="https://www.flaticon.com/"                 title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"              title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
            
			<p>
				<?php
					$filename = 'index.php';
					if (file_exists($filename)) {     
						echo "Last modified: " . date ("l, F d Y h:ia",        filemtime($filename)); 
					} 
				?>
			</p>
        </div>
        	
    </div>

    <script src="static/js/main.js"></script>
    <script src="static/js/ajax-data.js"></script>
</body>

</html>
