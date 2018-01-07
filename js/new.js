jQuery(document).ready(function($){


$(".btn ").click(function(){

	

y = $(this).attr("name");

x = $(this).attr("id");
localStorage.setItem("getInput",x);
localStorage.setItem("getinput",y);




});


$("#event_name").val(localStorage.getItem("getInput"));
$("#money").text("(Pay   "+ localStorage.getItem("getinput")+")")
$("#event_name").attr("value",localStorage.getItem("getInput"));
 $("#event_name").attr("placeholder",localStorage.getItem("getInput"));
 $("#event_name1").val(localStorage.getItem("getInput"));
$("#event_name1").attr("value",localStorage.getItem("getInput"));
 $("#event_name1").attr("placeholder",localStorage.getItem("getInput"));




});
