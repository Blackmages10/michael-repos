function myFunction() {
 document.querySelector(".modal").style.display = 'flex';
}
function closing() {
  document.querySelector(".modal").style.display = 'none';
}
function numberOnly(input){
  var regex = /[^0-9]/g;
  input.value = input.value.replace(regex, "");
}

function showPass(){
  var show = document.getElementById('show');
  var icon1 = document.querySelector('#eyes');
	var icon2 = document.querySelector('#eyeslash');
  if(show.type == "text"){
    show.type = "password";
    icon1.style.display="flex";
		icon2.style.display="none";

  }else {
    show.type = "text";
    icon1.style.display="none";
  	icon2.style.display="flex";
  }
}
