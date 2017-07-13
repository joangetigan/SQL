//$(document).ready(function(){
$(function(){

$('.openbtn').click( function(){
	$("#mySidenav").css("width","250px");
	$('body').css("background-color","rgba(0,0,0,0.4)");
})
$('.closebtn').click( function(){
	$("#mySidenav").css("width","0");
	$('body').css("background-color","white");
})

    $("#login").click( function(){
	    var username = $('#username').val();
	    var password = $('#password').val();
	    $.post("login.php",
	    {
	        username: username,
	        password: password
	    },
	    function(data, status){
	        alert(data);
	    });

	});


});


