
//hw02. AJAX-Joker, Closure, Request Xml data
//As long as window is loaded, (function(){})() will be runned

(function() {

  window.onload = init;
  //window.addEventListener(“load”,init); // will not be over-writted

  function init() {
    
    document.querySelector("#clear_alldata").onclick = clearAlldata;
    document.querySelector("#mybutton_01").onclick = loadData1;
    document.querySelector("#mybutton_02").onclick = loadData2;
    document.querySelector("#mybutton_03").onclick = loadData3;
  }

  function clearAlldata() {
    document.querySelector("#jokes").innerHTML = "";
    document.querySelector("#concerts").innerHTML = "";
    document.querySelector("#movies").innerHTML = "";
  }

  function loadData1() {
    var xhr = new XMLHttpRequest();
    var allJokes = [];
    xhr.onload = function() {
      var html = "<h2>Here are the jokes!</h2>";
      var xml = xhr.responseXML;
      // 1) Get an array of all the <joke> elements
      var allJokes = xml.querySelectorAll("joke");
      // 2) loop through the <joke> elements
      for (var i = 0; i < allJokes.length; i++) {
        // 3) grab the current <joke>
        var joke = allJokes[i]; // 4) get the <question> element of that <joke>
        // you can also use the .innerHTML property
        var question = joke.querySelector("question").firstChild
          .nodeValue;
        // 5) get the <answer> element of that <joke>
        // you can also use the .innerHTML property
        var answer = joke.querySelector("answer").firstChild.nodeValue;
        // 6) get the rating attribute of that <joke>
        var rating = joke.getAttribute("rating"); // 7) do some concatenation
        html += "<div class='joke'>";
        html += "<h3>" + question + "</h3>";
        html += "<p><em>" + answer + "</em></p>";
        html += "<p>Rating = " + rating + "</p>";
        html += "</div>"; // 8) Update the #content div
        document.querySelector("#jokes").innerHTML = html;
      }
    };

    var url = "./data/jokes-data.xml";
    xhr.open("GET", url, true);
    // try to prevent browser caching by sending a header to the server
    xhr.setRequestHeader(
      "If-Modified-Since",
      "Sat, 1 Jan 2010 00:00:00 GMT"
    );
    xhr.send();
  }

  function loadData2() {
    var xhr = new XMLHttpRequest();
    var allconcerts = [];
    xhr.onload = function() {
      var html = "<h2>Here are the old concerts!</h2>";
      var xml = xhr.responseXML;
      // 1) Get an array of all the <event> elements
      var allconcerts = xml.querySelectorAll("event");
      // 2) loop through the <event> elements
      for (var i = 0; i < allconcerts.length; i++) {
        // 3) grab the current <event>
        var event = allconcerts[i]; 
        // 4) get the <title> element of that <event>
        // you can also use the .innerHTML property
        var title = event.querySelector("title").firstChild.nodeValue;
        // 5) get the <city> element of that <event>
        // you can also use the .innerHTML property
        var city = event.querySelector("city").firstChild.nodeValue;
        var startDate = event.querySelector("startDate").firstChild.nodeValue;

        var image = event.querySelectorAll("image")[8].firstChild.nodeValue;
        
        // 6) get the rating attribute of that <event>
        // var rating = event.getAttribute("rating"); 
        // 7) do some concatenation
        html += "<div class='event'>";
        html += "<h3>" + title + "</h3>";
        html += "<p>" + city + " - " + startDate + "</p>";
        html += "<img src=" + image + ">";
        html += "</div>"; // 8) Update the #content div
        document.querySelector("#concerts").innerHTML = html;
      }
    };

    var url = "./data/last-fm-results.xml";
    xhr.open("GET", url, true);
    // try to prevent browser caching by sending a header to the server
    xhr.setRequestHeader(
      "If-Modified-Since",
      "Sat, 1 Jan 2010 00:00:00 GMT"
    );
    xhr.send();
  }

  function loadData3() {
    var xhr = new XMLHttpRequest();
    var allMovies = [];
    xhr.onload = function() {
      var html = "<h2>Here are the movies!</h2>";
      var xml = xhr.responseXML;
      // 1) Get an array of all the <movie> elements
      var allMovies = xml.querySelectorAll("movie");
      // 2) loop through the <movie> elements
      for (var i = 0; i < allMovies.length; i++) {
        // 3) grab the current <movie>
        var movie = allMovies[i]; // 4) get the <title> element of that <movie>
        // you can also use the .innerHTML property
        var title = movie.querySelector("title").firstChild.nodeValue;
        // 5) get the <actor> element of that <movie>
        // you can also use the .innerHTML property
        var actors = movie.querySelectorAll("actor");
        // 6) get the rating attribute of that <movie>
        var rating = movie.getAttribute("rating"); // 7) do some concatenation
        html += "<div class='movie'>";
        html += "<h3>" + title + "</h3>";
        for (let j = 0; j < actors.length; j++) {
          html += "<p>" + actors[j].firstChild.nodeValue + "</p>";
        }
        html += "<p>Rating = " + rating + "</p>";
        html += "</div>"; // 8) Update the #content div
        document.querySelector("#movies").innerHTML = html;
      }
    };

    var url = "./data/movies-data.xml";
    xhr.open("GET", url, true);
    // try to prevent browser caching by sending a header to the server
    xhr.setRequestHeader(
      "If-Modified-Since",
      "Sat, 1 Jan 2010 00:00:00 GMT"
    );
    xhr.send();
  }




})();