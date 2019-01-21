//Load the background image
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


//Add Scroll event to navigation style
window.addEventListener('scroll', this.handleScroll);

function handleScroll(){
	if(window.scrollY >0){
		// console.log('scrolled');
		document.getElementById('navigation').className="nav_scrolled";
	}else if(window.scrollY == 0){
		// console.log('scrolled back');
		document.getElementById('navigation').className="nav_default";
	}
}