document.getElementsByClassName("main_page_div2")[0].onclick = function(){
  location.href = "make_choice.php";
};

document.getElementById("main_page_name").onclick = function(){
  location.href = "main_page.php";
};

document.getElementById("creator").onclick = function(){
  location.href = "about_me.php";
};
/*---------------------------------------------------------------------------------------------*/

/*-----------------------------------------BUTTON TO TOP---------------------------------------*/
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("go_to_top").style.display = "block";
  } else {
        document.getElementById("go_to_top").style.display = "none";
  }
}

function topFunction() {
  $('html, body').animate({scrollTop:0}, 'slow');
}
/*---------------------------------------------------------------------------------------------*/

/*----------------------------------------CAPS LOCK ON-----------------------------------------*/
var input = document.getElementById("fname");

var text = document.getElementById("caps_lock");

input.addEventListener("keyup", function(event) {
  if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
/*--------------------------------------------------------------------------------------------*/

/*------------------------------------SHOW PASSWORD FUNCTION----------------------------------*/
function show_password_function() {
  if ( document.getElementById('login_checkbox').checked ) {
    document.getElementById('login_password').type = "text";
  } else {
    document.getElementById('login_password').type = "password";
  }
}
/*--------------------------------------------------------------------------------------------*/
