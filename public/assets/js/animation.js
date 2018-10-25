var tabMenu = ["EDIT ACCOUNT", "USER ACCOUNT", "RANKING"];
var tabChange = [".CHANGELOGIN-page", ".CHANGEPASSWORD-page", ".CHANGEE-MAIL-page"];
var LastFromTheList = 2;
let currentOnTheList = 1;
let currentOnTheChange = 1;

$(document).ready(function(){
	$( ".start" ).click(function() {                 //uwaga usunąć ten wywoływacz
	  login();										//przy logowaniu mui zostać wywołana ta fukcja
	});			
	$( ".accountButtonLogOut" ).click(function() { //uwaga usunąć ten wywoływacz
	  logOut();									  //przy logowaniu mui zostać wywołana ta fukcja
	});		
	$( "#account" ).click(function() {
	  PageMenuShow(".account-page");
	});		
	$( "#options" ).click(function() {
	  PageMenuShow(".options-page");
	});	
	$( "#loginAnimation" ).click(function() {
	  loginAnimation();
	});	
	$("#registerAnimation" ).click(function() {
	  registerAnimation();
	});		
	
	
	$(".CHANGELOGIN" ).click(function() {
	  accountPageOut(0);
	});		
	$(".CHANGEPASSWORD" ).click(function() {
	  accountPageOut(1);
	});		
	$(".CHANGEE-MAIL" ).click(function() {
	  accountPageOut(2);
	});		
	
	$(".Back").click(function() {
	  accountPageIn();
	});	

	
	
	

	$("#EASY").click(function() {
	  PageMenuHide(".options-page");
	  ajax('EASY');
	});	
	$("#NORMAL").click(function() {
	  PageMenuHide(".options-page");
	  ajax('NORMAL');
	});	
	$("#HARD").click(function() {
	  PageMenuHide(".options-page");
	  ajax('HARD');
	});	
	
	
	$('.account-pageMenu').on("click",".registerAnimationMenu0", function () {
		accountPageContentOut(0,currentOnTheList);
	    registerAnimationMenu(2, 0, 1, 1, 0);
	});	
	$('.account-pageMenu').on("click",".registerAnimationMenu1", function () {
		accountPageContentOut(1,currentOnTheList);
	    registerAnimationMenu(0, 1, 2, 1, 1);
	});	
	$('.account-pageMenu').on("click",".registerAnimationMenu2", function () {
		accountPageContentOut(2,currentOnTheList);
	    registerAnimationMenu(1, 2, 0, 1, 2);
	});
});
function login(){
		 $('#gamePanel').css('display', 'table');
		 $.scrollTo($('#gamePanel'), 750);//scroll
		 setTimeout(function(){$('#loginPanel').css('display', 'none');}, 750);
}
function logOut(){
		 PageMenuHide(".account-page");
		 setTimeout(function(){
			 $('#loginPanel').css('display', 'table');
			 $.scrollTo($('#gamePanel'), 0);//scroll
			 $.scrollTo($('#loginPanel'), 750);//scroll
			 setTimeout(function(){$('#gamePanel').css('display', 'none');}, 750);
		 }, 750);
}
function registerAnimation(){
	 dimnesShow();
	 $('.register-page').css('display', 'block');
	 $('.register-page').removeClass('animated bounceOutUp');
	 $('.register-page').addClass('animated bounceInDown');	 
	 $('.login-page').addClass('animated bounceOutLeft');
}
function loginAnimation(){
	 dimnesHide();
	 $('.register-page').removeClass('animated bounceInDown');
	 $('.register-page').addClass('animated bounceOutUp'); 
	 setTimeout(function(){
		 $('.login-page').removeClass('animated bounceOutLeft');
		 $('.login-page').addClass('animated bounceInLeft');}, 250);
}
function PageMenuShow(nameClass){
	dimnesShow();
	$(nameClass).css('display', 'block');
	$(nameClass).removeClass('animated bounceOutUp');
	$(nameClass).addClass('animated bounceInDown');	
	$(".dimness" ).click(function() {PageMenuHide(nameClass);});
}
function PageMenuHide(nameClass){
	 dimnesHide();
	 $(nameClass).removeClass('animated bounceInDown');
	 $(nameClass).addClass('animated bounceOutUp');
	 accountPageIn();
}
function dimnesShow(){
	$('.dimness').css('display', 'block');
	$('.dimness').removeClass('animated fadeOut2');
	$('.dimness').addClass('animated fadeIn2');
}
function dimnesHide(){
	 $('.dimness').removeClass('animated fadeIn2');
	 $('.dimness').addClass('animated fadeOut2');
	 setTimeout(function(){$('.dimness').css('display', 'none');}, 1000);
}
function registerAnimationMenu(x1,x2,x3,theDirectionOfAnimation,numberOnClick){
	if(LastFromTheList==numberOnClick)
		{
		currentOnTheList = 10;
		registerAnimationMenu(x3,x1,x2, 0, 10);
		}
	else
	if(currentOnTheList!=x2){
			if(theDirectionOfAnimation==1){
				$('.registerAnimationMenu'+x2).addClass('animated animationMenuSelect'+theDirectionOfAnimation);
				$('.registerAnimationMenu'+x3).addClass('animated animationMenu'+theDirectionOfAnimation);
			}else{
				$('.registerAnimationMenu'+x2).addClass('animated animationMenu'+theDirectionOfAnimation);
				$('.registerAnimationMenu'+x3).addClass('animated animationMenuSelect'+theDirectionOfAnimation);
			}
			$('.registerAnimationMenu'+x1).addClass('animated animationMenu'+theDirectionOfAnimation+'On');
			setTimeout(function(){
				$('.registerAnimationMenu'+x1).addClass('animated animationMenu'+theDirectionOfAnimation+'In');
			}, 250);
			if(theDirectionOfAnimation==1)
				printMenuDiv(x1,x2,x3);
			else
				printMenuDiv(x2,x3,x1);
	}
}
function printMenuDiv(x1,x2,x3){
	setTimeout(function(){
				$(".account-pageMenu").html("<div class='account-pageMenu"+x1+" col-sm-4'><a href='#' class='registerAnimationMenu"+x1+"'>"+tabMenu[x1]+"</a></div><div class='account-pageMenu"+x2+" col-sm-4'><a href='#' class='registerAnimationMenu"+x2+"'>"+tabMenu[x2]+"</a></div><div class='account-pageMenu"+x3+" col-sm-4'><a href='#' class='registerAnimationMenu"+x3+"'>"+tabMenu[x3]+"</a></div>");
				$('.registerAnimationMenu'+x2).css('font-size', '25px');
			}, 1100);
			currentOnTheList = x2;
			LastFromTheList = x3;
}
function accountPageContentOut(x1,x2){
	
	$('.account-pageContent'+x2).addClass('animated fadeOut');
	setTimeout(function(){
		$('.account-pageContent'+x2).css('display', 'none');
		$('.account-pageContent'+x2).removeClass('animated fadeOut');

		$('.account-pageContent'+x1).css('display', 'block');
		$('.account-pageContent'+x1).addClass('animated fadeIn');
		setTimeout(function(){
			$('.account-pageContent'+x1).removeClass('animated fadeIn');
		}, 500);
	}, 500);
}
function accountPageOut(x){
	currentOnTheChange = tabChange[x];
	$('.account-page-content').addClass('animated fadeOut');
	setTimeout(function(){
		$('.account-page-content').css('display', 'none');
		$('.account-page-content').removeClass('animated fadeOut');
		
		
		$(tabChange[x]).css('display', 'block');
		$(tabChange[x]).addClass('animated fadeIn');
		setTimeout(function(){
			$(tabChange[x]).removeClass('animated fadeIn');
		}, 500);
	}, 500);

}
function accountPageIn(){
	$(currentOnTheChange).addClass('animated fadeOut');
	setTimeout(function(){
		$('.account-page-content').css('display', 'block');
		$('.account-page-content').addClass('animated fadeIn');
		$(currentOnTheChange).css('display', 'none');
		setTimeout(function(){	
			$('.account-page-content').removeClass('animated fadeIn');
				$(currentOnTheChange).removeClass('animated fadeOut');
		}, 1000);
	}, 1000);

}
function ajax(x){
	$.ajax({
		type:"POST",
		url:"/",
		dataType: "text",
		data: {'levelOfDifficulty':x},
		success: function(data){
		$('.langList').text(data);
		},
		error: function(){
		alert('Jakiś błąd');
		}
		});
}
