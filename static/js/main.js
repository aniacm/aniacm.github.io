

//1. Load the background image
var bg_small = new Image();
bg_small.src = './static/img/bg_01_small.png';
bg_small.onload = () => {
    console.log("Initial background loaded.");
    this.document.body.style.backgroundImage = "url(" + bg_small.src + ")";
}

var bg_big = new Image();
bg_big.src = './static/img/bg_01.png';
bg_big.onload = () => { // Replace bg_small when bg_big is loaded.
    console.log("High quality background loaded.");
    // setTimeout("",5000)
    this.document.body.style.backgroundImage = "url(" + bg_big.src + ")";
    // console.log(this.document.body.style)
}


//2. Add Scroll event to change navigation style
window.addEventListener('scroll', this.handleScroll);
var navigation = document.getElementById('navigation');
function handleScroll(){
	if(window.scrollY > 0 && navigation.className=="nav_default" ){
		// console.log('scrolled');
		navigation.className="nav_scrolled";
	}else if(window.scrollY == 0){
		// console.log('scrolled back');
		navigation.className="nav_default";
	}
}


//3. Add click function of project list to show project detials
var content=document.getElementById('content');
var project_details=document.getElementsByClassName('project_details');

function Show_Details(data,n) {

	let index = [].indexOf.call(data.parentElement.children, data) -n ;
	// console.log(index);

	content.style.display = 'none';
	project_details[index].style.display = 'block';

	// console.log('#'+project_details[0].id);
	window.location.href = '#'+project_details[index].id;
}

//4. Add click function to navigation bar to hide project detials and show homepage
var nav_right = document.getElementsByClassName('nav_right');
nav_right[0].onclick = function Show_Content() {
	if (document.getElementById('content').style.display == 'none') {
		document.getElementById('content').style.display = 'block';
		for (var i = 0; i < project_details.length; i++) {
			project_details[i].style.display = 'none';
		}
		// console.log(project_details)
	}
}

nav_right[1].onclick = function Show_Content() {
  if (document.getElementById('content').style.display == 'none') {
    document.getElementById('content').style.display = 'block';
    for (var i = 0; i < project_details.length; i++) {
      project_details[i].style.display = 'none';
    }
    // console.log(project_details)
  }
}


//5. AJAX-Joker, Closure, Request Xml data

// (function() {

  // window.onload = init;

  // function init() {
  //   document.querySelector("#mybutton").onclick = loadData;
  // }

  // function loadData() {
  //   var xhr = new XMLHttpRequest();
  //   var allJokes = [];
  //   xhr.onload = function() {
  //     var html = "<h2>Here are the jokes!</h2>";
  //     var xml = xhr.responseXML;
  //     // 1) Get an array of all the <joke> elements
  //     var allJokes = xml.querySelectorAll("joke");
  //     // 2) loop through the <joke> elements
  //     for (var i = 0; i < allJokes.length; i++) {
  //       // 3) grab the current <joke>
  //       var joke = allJokes[i]; // 4) get the <question> element of that <joke>
  //       // you can also use the .innerHTML property
  //       var question = joke.querySelector("question").firstChild
  //         .nodeValue;
  //       // 5) get the <answer> element of that <joke>
  //       // you can also use the .innerHTML property
  //       var answer = joke.querySelector("answer").firstChild.nodeValue;
  //       // 6) get the rating attribute of that <joke>
  //       var rating = joke.getAttribute("rating"); // 7) do some concatenation
  //       html += "<div class='joke'>";
  //       html += "<h3>" + question + "</h3>";
  //       html += "<p><em>" + answer + "</em></p>";
  //       html += "<p>Rating = " + rating + "</p>";
  //       html += "</div>"; // 8) Update the #content div
  //       document.querySelector("#jokes").innerHTML = html;
  //     }
  //   };

  //   var url = "/646/jokes-data.xml";
  //   xhr.open("GET", url, true);
  //   // try to prevent browser caching by sending a header to the server
  //   xhr.setRequestHeader(
  //     "If-Modified-Since",
  //     "Sat, 1 Jan 2010 00:00:00 GMT"
  //   );
  //   xhr.send();
  // }



// })();

// function Fold() {
//             // body...
//             var menu=document.getElementsByClassName('wide')[0];
//             var narrow=document.getElementsByClassName('small')[0];
//             console.log(menu.children.length)
//             if (menu.style.display === 'block') {
//                 menu.style.display = 'none';
//                 for (var i = 0; i < menu.children.length; i++) {
//                     menu.children[i].style.display = 'none';
//                 }
//               } else {
//                 menu.style.display = 'block';
//                 for (var i = 0; i < menu.children.length; i++) {
//                     menu.children[i].style.display = 'block';
//                 }
//               }
//         }