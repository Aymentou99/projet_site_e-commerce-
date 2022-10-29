const allitems = document.querySelectorAll(".navmenuk ul li a");

allitems.forEach(item => {
	item.addEventListener("click", function(e) {
	
	for(var i = 0; i < allitems.length; i++){
		
		allitems[i].classList.remove("active");
	}
		
this.classList.add("active");

});});