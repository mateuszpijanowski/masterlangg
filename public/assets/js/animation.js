let tabMenu = ["EDIT ACCOUNT", "USER ACCOUNT", "RANKING"];
let tabChange = [".CHANGELOGIN-page", ".CHANGEPASSWORD-page", ".CHANGEE-MAIL-page"];
let LastFromTheList = 2;
let currentOnTheList = 1;
let currentOnTheChange = 1;
let clickAnimation = true;

$(document).ready(function(){
    $( ".start" ).click(function() {
        if(clickAnimation==true){
            clickStop();
	    var data = {};
    		data['login'] = inputRead("#login");
   		data['password'] = inputRead("#password");
	    ajax2(data);
            login();			//przy logowaniu mui zostać wywołana ta fukcja a tu musi byc usunieta
        }
    });
    $( "#startRegister" ).click(function() {
        if(clickAnimation==true){
		var data = {};
		    data['loginRegister'] = inputRead("#loginRegister");
	   	    data['password1'] = inputRead("#password1");
		    data['password2'] = inputRead("#password2");
	   	    data['emailRegister'] = inputRead("#emailRegister");
		ajax2(data);
        }
    });
    $( "#ChangeLOGIN" ).click(function() {
        if(clickAnimation==true){
            
		var data = {};
	   	    data['ChangeLOGIN'] = inputRead(".ChangeLOGIN");
		ajax2(data);
        }
    });
    $( "#ChangePASSWORD" ).click(function() {
        if(clickAnimation==true){
		var data = {};
		    data['ChangePASSWORD1'] = inputRead(".ChangePASSWORD1");
	   	    data['ChangePASSWORD2'] = inputRead(".ChangePASSWORD2");
		ajax2(data);
        }
    });
    $( "#ChangeMAIL" ).click(function() {
        if(clickAnimation==true){
            
		var data = {};
	   	    data['ChangeMAIL'] = inputRead(".ChangeMAIL");
		ajax2(data);
        }
    });
    $( "#startGame" ).click(function() {
        if(clickAnimation==true){
		var data = {};
	   	    data['user_text'] = inputRead("#quotation");
		ajax2(data);
        }
    });
    $( "#ok" ).click(function() {
        if(clickAnimation==true){
		var data = {};
	   	    data['sel_lang'] = 'jp';/////////tu do zrobienia jezyk
		    data['time'] = 'jp';
		    data['difficulty'] = 'jp'; 
		ajax2(data);
        }
    });
    $( ".accountButtonLogOut" ).click(function() { //uwaga usunąć ten wywoływacz
        if(clickAnimation==true){
            clickStop();
		var data = {};
	   	    data['logout'] = 'logout';
		ajax2(data);
            logOut();									  //przy logowaniu mui zostać wywołana ta fukcja
        }
    });
    $( "#account" ).click(function() {
        if(clickAnimation==true){
            clickStop();
            PageMenuShow(".account-page");
        }
    });
    $( "#options" ).click(function() {
        if(clickAnimation==true){
            clickStop();
            PageMenuShow(".options-page");
        }
    });
    $( "#loginAnimation" ).click(function() {
        if(clickAnimation==true){
            clickStop();
            loginAnimation();
        }
    });
    $("#registerAnimation" ).click(function() {
        if(clickAnimation==true){
            clickStop();
            registerAnimation();
        }
    });


    $(".CHANGELOGIN" ).click(function() {
        if(clickAnimation==true){
            clickStop();
            accountPageOut(0);
        }
    });
    $(".CHANGEPASSWORD" ).click(function() {
        if(clickAnimation==true){
            clickStop();
            accountPageOut(1);
        }
    });
    $(".CHANGEE-MAIL" ).click(function() {
        if(clickAnimation==true){
            clickStop();
            accountPageOut(2);
        }
    });

    $(".Back").click(function() {
        if(clickAnimation==true){
            clickStop();
            accountPageIn();
        }
    });





    $("#EASY").click(function() {
        if(clickAnimation==true){
            clickStop();
            PageMenuHide(".options-page");
            	var data = {};
	   	    data['difficulty'] = 'EASY';
		ajax2(data);
        }
    });
    $("#NORMAL").click(function() {
        if(clickAnimation==true){
            clickStop();
            PageMenuHide(".options-page");
            	var data = {};
	   	    data['difficulty'] = 'NORMAL';
		ajax2(data);
        }
    });
    $("#HARD").click(function() {
        if(clickAnimation==true){
            clickStop();
            PageMenuHide(".options-page");
            	var data = {};
	   	    data['difficulty'] = 'HARD';
		ajax2(data);
        }
    });


    $(".rankingPosition").click(function() {                          //fukcja wywyołująca aktualne miejsce w rakingu
        if(clickAnimation==true){
            clickStop();
            accountPageContentOut(2,currentOnTheList);
            registerAnimationMenu(1, 2, 0, 1, 2);
        }
    });


    $('.account-pageMenu').on("click",".registerAnimationMenu0", function () {
        if(clickAnimation==true){
            clickStop();
            accountPageContentOut(0,currentOnTheList);
            registerAnimationMenu(2, 0, 1, 1, 0);
        }
    });
    $('.account-pageMenu').on("click",".registerAnimationMenu1", function () {
        if(clickAnimation==true){
            clickStop();
            accountPageContentOut(1,currentOnTheList);
            registerAnimationMenu(0, 1, 2, 1, 1);
        }
    });
    $('.account-pageMenu').on("click",".registerAnimationMenu2", function () {
        if(clickAnimation==true){
            clickStop();
            accountPageContentOut(2,currentOnTheList);
            registerAnimationMenu(1, 2, 0, 1, 2);
        }
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
    $(".dimness" ).click(function() {
        if(clickAnimation==true){
            loginAnimation();
        }
    });
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
    $(".dimness" ).click(function() {
        if(clickAnimation==true){
            PageMenuHide(nameClass);
        }
    });

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
function clickStop(){
    clickAnimation=false;
    setTimeout(function(){clickAnimation=true;}, 1100);
}
function inputRead(y){

    const input = document.querySelector(y);
    const val = input.value;
    //if (!val.length) {					//tu moża utworzyć wstepną walidacje
    //input.placeholder = 'Empty field';
    //} else {
    		//ajax(val,y);

    //	input.value = '';
    //}

	return (val);
}


function ajax2(data){
	$.ajax({
		type:"POST",
		url:"/",
        dataType: 'json',
		data: data,
		success: function(response){
			var json=JSON.stringify(response);
			alert(json);
		},
		error: function(){
		alert('Error Ajax:'+data);
		}
		});
}
