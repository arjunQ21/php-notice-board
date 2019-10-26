var regForm = document.querySelector("form[action='backend/register.php']") ;
// console.log(regForm) ;
// var a ;
regForm.addEventListener("submit", function(e){
	let p1 = this.querySelector("input[name='password']") ;
	let p2 = this.querySelector("input[name='password_c']") ;
	if(p1.value.length < 8){
		showError("Password must contain at least 8 chars.") ;
		e.preventDefault() ;
	}
	if(p1.value != p2.value){
		showError("Passwords dont match.") ;
		e.preventDefault() ;	
	}

})

function showError( a ){
	alert("Error: " + a) ;
}