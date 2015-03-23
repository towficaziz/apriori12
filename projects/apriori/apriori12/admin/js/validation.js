/***************************/
//@Author: Adrian "yEnS" Mato Gondelle & Ivan Guardado Castro
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

$(document).ready(function(){
	//global vars
	var form = $("#customForm");
	
	var name = $("#name");
	var nameInfo = $("#nameInfo");
	
	var work_location = $("#work_location");
	var work_locationInfo = $("#work_locationInfo");
	
	
	var company = $("#company");
	var companyInfo = $("#companyInfo");
	
	var post = $("#post");
	var postInfo = $("#postInfo");
	
	var datepicker = $("#datepicker");
	var datepickerInfo = $("#datepickerInfo");
	
	var status = $("#status");
	var statusInfo = $("#statusInfo");
	
	var active = $("#active");
	var activeInfo = $("#activeInfo");
	
//	var email = $("#email");
//	var emailInfo = $("#emailInfo");
//	var telephone = $("#telephone");
//	var telephoneInfo = $("#telephoneInfo");
//	var longitude = $("#longitude");
//	var longitudeInfo = $("#longitudeInfo");
//	var latitude = $("#latitude");
//	var latitudeInfo = $("#latitudeInfo");
	//On blur
	name.blur(validateName);
	
	work_location.blur(validateWork_location);
	company.blur(validateCompany);
	post.blur(validatePost);
	datepicker.blur(validateDatepicker);
	status.blur(validateStatus);
	active.blur(validateActive);
//	email.blur(validateEmail);
	//longitude.blur(validateLongitude);
	//latitude.blur(validateLatitude);
	//On key press

	work_location.keyup(validateWork_location);
	company.keyup(validateCompany);
	post.keyup(validatePost);
	datepicker.keyup(validateDatepicker);
	status.keyup(validateStatus);
	active.keyup(validateActive);

	name.keyup(validateName);
//	email.keyup(validateEmail);
//	longitude.keyup(validateLongitude);
//	latitude.keyup(validateLatitude);

/*	
	//validation functions
	function validateEmail(){
		//testing regular expression
		var a = $("#email").val();
		var filter = /^[a-zA-Z0-9]+[a-zA-Z0-9_.-]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$/;
		//if it's valid email
		if(filter.test(a)){
			email.removeClass("error");
			emailInfo.text(" ");
			emailInfo.removeClass("error");
			return true;
		}
		//if it's NOT valid
		else{
			email.addClass("error");
			emailInfo.text("Type a valid e-mail please.");
			emailInfo.addClass("error");
			return false;
		}
	}
	function validateName(){
		//if it's NOT valid
		if(name.val().length < 4){
			name.addClass("error");
			nameInfo.text("We want names with more than 3 letters!");
			nameInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			name.removeClass("error");
			nameInfo.text(" ");
			nameInfo.removeClass("error");
			return true;
		}
	}
	
	function validateLatitude(){

		//it's NOT valid
		if(parseFloat(longitude.value)){
			latitude.addClass("error");
			latitudeInfo.text("Must be numeric.");
			latitudeInfo.addClass("error");
			return true;
		}
		//it's valid
		else{			
			latitude.removeClass("error");
			latitudeInfo.text(" ");
			latitudeInfo.removeClass("error");
			return true;
		}
	}
	function validateLongitude(){
		//it's NOT valid
		
		if(parseFloat(longitude.value)){
			longitude.addClass("error");
			longitudeInfo.text("Must be numeric.");
			longitudeInfo.addClass("error");
			return true;
		}
		//it's valid
		else{			
			longitude.removeClass("error");
			longitudeInfo.text(" ");
			longitudeInfo.removeClass("error");
			return true;
		}
	}
*/	

	function validateWork_location(){
		//if it's NOT valid
		if(name.val().length < 4){
			name.addClass("error");
			nameInfo.text("We want names with more than 3 letters!");
			nameInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			name.removeClass("error");
			nameInfo.text(" ");
			nameInfo.removeClass("error");
			return true;
		}
	}
	
	function validateCompany(){
		//if it's NOT valid
		if(company.val().length < 4){
			company.addClass("error");
			companyInfo.text("We want a vaild Company Name and more than 3 Character!");
			companyInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			company.removeClass("error");
			companyInfo.text(" ");
			companyInfo.removeClass("error");
			return true;
		}
	}
	
	function validateName(){
		//if it's NOT valid
		if(name.val().length < 4){
			name.addClass("error");
			nameInfo.text("We want names with more than 3 letters!");
			nameInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			name.removeClass("error");
			nameInfo.text(" ");
			nameInfo.removeClass("error");
			return true;
		}
	}
	
	function validateName(){
		//if it's NOT valid
		if(name.val().length < 4){
			name.addClass("error");
			nameInfo.text("We want names with more than 3 letters!");
			nameInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			name.removeClass("error");
			nameInfo.text(" ");
			nameInfo.removeClass("error");
			return true;
		}
	}
	
	function validateName(){
		//if it's NOT valid
		if(name.val().length < 4){
			name.addClass("error");
			nameInfo.text("We want names with more than 3 letters!");
			nameInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			name.removeClass("error");
			nameInfo.text(" ");
			nameInfo.removeClass("error");
			return true;
		}
	}
	
	function validateName(){
		//if it's NOT valid
		if(name.val().length < 4){
			name.addClass("error");
			nameInfo.text("We want names with more than 3 letters!");
			nameInfo.addClass("error");
			return false;
		}
		//if it's valid
		else{
			name.removeClass("error");
			nameInfo.text(" ");
			nameInfo.removeClass("error");
			return true;
		}
	}
		//On Submitting
	form.submit(function(){
		if(validateName() & validateEmail() & validateLongitude() & validateLatitude())
			return true;
		else
			return false;
	});
});