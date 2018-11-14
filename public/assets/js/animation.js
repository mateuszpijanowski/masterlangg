let tabMenu = ["EDIT ACCOUNT", "USER ACCOUNT", "RANKING"];
let tabChange = [".CHANGELOGIN-page", ".CHANGEPASSWORD-page", ".CHANGEE-MAIL-page"];
let LastFromTheList = 2;
let currentOnTheList = 1;
let currentOnTheChange = 1;
let clickAnimation = true;
let langClicki ;
let dificultyClick;
let json;
let time;
let timegame
let stopTime=true;
let okLock=true;
let score;
$(document).ready(function(){
	langList();
	sesion();

    $( ".start" ).click(function() {
        if(clickAnimation==true){
            clickStop();
	    var data = {};
    		data['login'] = inputRead("#login");
   		data['password'] = inputRead("#password");
	    ajax2(data);
	    setTimeout(function(){
			$("#errorLogin").html(json);
			loadnig();
	    }, 1000);
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
			setTimeout(function(){$("#errorRegister").html(json);}, 1000);
        }
    });
    $( "#startMemorablePassword" ).click(function() {
        if(clickAnimation==true){
		var data = {};
	   	    data['emailMemorablePassword'] = inputRead("#emailMemorablePassword");
		ajax2(data);
			setTimeout(function(){$("#errorMemorablePassword").html(json);}, 1000);
        }
    });
    $( "#ChangeLOGIN" ).click(function() {
        if(clickAnimation==true){

		var data = {};
	   	    data['ChangeLOGIN'] = inputRead(".ChangeLOGIN");
		ajax2(data);
		setTimeout(function(){$("#error0").html(json);}, 1000);
        }
    });
    $( "#ChangePASSWORD" ).click(function() {
        if(clickAnimation==true){
		var data = {};
		    data['ChangePASSWORD1'] = inputRead(".ChangePASSWORD1");
	   	    data['ChangePASSWORD2'] = inputRead(".ChangePASSWORD2");
		ajax2(data);
		setTimeout(function(){$("#error1").html(json);}, 1000);
        }
    });
    $( "#ChangeMAIL" ).click(function() {
        if(clickAnimation==true){

		var data = {};
	   	    data['ChangeMAIL'] = inputRead(".ChangeMAIL");
		ajax2(data);
		setTimeout(function(){$("#error2").html(json);}, 1000);
        }
    });
    $( "#startGame" ).click(function() {
        if(clickAnimation==true){
		clickStop();
		game();

        }
    });
    $( "#ok" ).click(function() {
		if(okLock==false){
			okClick();
		}
    });
    $( ".accountButtonLogOut" ).click(function() {
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
			refresh();
            clickStop();
            PageMenuShow(".account-page");
        }
    });
    $( "#options" ).click(function() {
        if(clickAnimation==true){
			refresh();
            clickStop();
            PageMenuShow(".options-page");
        }
    });
    $( ".loginAnimation" ).click(function() {
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
    $("#memorablePasswordAnimation" ).click(function() {
        if(clickAnimation==true){
            clickStop();
            memorablePasswordAnimation();
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
    $(".about" ).click(function() {
        if(clickAnimation==true){
            clickStop();
            aboutPageOut(2);
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
	   	    data['difficulty_update'] = 'EASY';
		ajax2(data);
				setTimeout(function(){
					time=json;
					timegame=time;
					$("#timer").html(time);}, 1000);
			dificultyClick='EASY'
			$(".difficultyDisplays").html(dificultyClick);
        }
    });
    $("#NORMAL").click(function() {
        if(clickAnimation==true){
            clickStop();
            PageMenuHide(".options-page");
            	var data = {};
	   	    data['difficulty_update'] = 'NORMAL';
		ajax2(data);
				setTimeout(function(){
					time=json
					timegame=time;
					$("#timer").html(time);}, 1000);
			dificultyClick='NORMAL'
			$(".difficultyDisplays").html(dificultyClick);
        }
    });
    $("#HARD").click(function() {
        if(clickAnimation==true){
            clickStop();
            PageMenuHide(".options-page");
            	var data = {};
	   	    data['difficulty_update'] = 'HARD';
		ajax2(data);

				setTimeout(function(){
					time=json;
					timegame=time;
					$("#timer").html(time);}, 1000);
			dificultyClick='HARD'
			$(".difficultyDisplays").html(dificultyClick);
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
function memorablePasswordAnimation(){
    dimnesShow();
    $('.memorablePassword-page').css('display', 'block');
    $('.memorablePassword-page').removeClass('animated bounceOutUp');
    $('.memorablePassword-page').addClass('animated bounceInDown');
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
    $('.memorablePassword-page').removeClass('animated bounceInDown');
    $('.memorablePassword-page').addClass('animated bounceOutUp');
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
function aboutPageOut(x){
    currentOnTheChange = ".about-page";
    $('.account-page-content').addClass('animated fadeOut');
    setTimeout(function(){
        $('.account-page-content').css('display', 'none');
        $('.account-page-content').removeClass('animated fadeOut');


        $(".about-page").css('display', 'block');
        $(".about-page").addClass('animated fadeIn');
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
    setTimeout(function(){clickAnimation=true;}, 1000);
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
function langList(){
	$( "#az" ).click(function() {   $("#langClick").html("az");  langClicki='az';  });
	$( "#sq" ).click(function() {   $("#langClick").html("sq");langClicki='sq';    });
	$( "#am" ).click(function() {   $("#langClick").html("am");langClicki='am';    });
	$( "#en" ).click(function() {   $("#langClick").html("en");langClicki='en';    });
	$( "#ar" ).click(function() {   $("#langClick").html("ar");langClicki='az';    });

	$( "#hy" ).click(function() {   $("#langClick").html("hy");langClicki='hy';    });
	$( "#af" ).click(function() {   $("#langClick").html("af");langClicki='af';    });
	$( "#eu" ).click(function() {   $("#langClick").html("eu");langClicki='eu';    });
	$( "#ba" ).click(function() {   $("#langClick").html("ba");langClicki='ba';    });
	$( "#be" ).click(function() {   $("#langClick").html("be");langClicki='be';    });

	$( "#bn" ).click(function() {   $("#langClick").html("bn");langClicki='bn';    });
	$( "#my" ).click(function() {   $("#langClick").html("my");langClicki='my';    });
	$( "#bg" ).click(function() {   $("#langClick").html("bg");langClicki='bg';    });
	$( "#bs" ).click(function() {   $("#langClick").html("bs");langClicki='bs';    });
	$( "#cy" ).click(function() {   $("#langClick").html("cy");langClicki='cy';    });

	$( "#hu" ).click(function() {   $("#langClick").html("hu");langClicki='hu';    });
	$( "#vi" ).click(function() {   $("#langClick").html("vi");langClicki='vi';    });
	$( "#ht" ).click(function() {   $("#langClick").html("ht");langClicki='ht';    });
	$( "#gl" ).click(function() {   $("#langClick").html("gl");langClicki='gl';    });
	$( "#nl" ).click(function() {   $("#langClick").html("nl");langClicki='nl';    });

	$( "#mrj" ).click(function() {   $("#langClick").html("mrj");langClicki='mrj';    });
	$( "#el" ).click(function() {   $("#langClick").html("el");langClicki='el';    });
	$( "#ka" ).click(function() {   $("#langClick").html("ka");langClicki='ka';    });
	$( "#gu" ).click(function() {   $("#langClick").html("gu");langClicki='gu';    });
	$( "#da" ).click(function() {   $("#langClick").html("da");langClicki='da';    });
}
function loadnig()
{		if(json.id_user>0){
			$(".nick").html("Nick: "+json.login);
			$("#nick").html("Nick: "+json.login);
			$(".email").html("E-MAIL: "+json.email);
			$("#score").html("score: "+json.score);
			$("#score2").html(json.score);
			score=json.score;
			time=json.time;
			timegame=time;
			$("#timer").html(time);
			dificultyClick=json.difficulty
			$(".difficultyDisplays").html(dificultyClick);

			//json.user_lang
			//json.user_text
			login();
			if(json.transtext!=null){
				$("#TRANSTEXT").html(json.transtext);
				$("#DETECTLANG").html(json.detectlang);
				timee();}
		}
}
function timee(){
	if(time>1 && stopTime==false){
	setTimeout(function(){time=time-1;
	$("#timer").html(time);
	timee()}, 1000);}
}
function sesion()
{
	var data = {};
	   data['session'] = true;
	   ajax2(data);
	setTimeout(function(){
	    if(json.id_user>0){
			loadnig();
	    }
	}, 1000);
}
function game(){
		refresh();
		stopTime=true;
		var data = {};
	   	data['user_text'] = inputRead("#quotation");
		if(data.user_text.length>0){
		$("#ok").css('background-color', '#4CAF50');
		okLock=false;
		ajax2(data);
			setTimeout(function(){
				$("#TRANSTEXT").html(json.transtext);
				$("#DETECTLANG").html(json.detectlang);
				stopTime=false
				timee();
			}, 1000);
		}
		else{

		}
}
function refresh(){

	stopTime=true;
	time=timegame;
	$("#timer").html(time);
	$("#TRANSTEXT").html('');
	$("#DETECTLANG").html('');
	//$("#quotation").html();
	$("#langClick").html('');
	okLock=true;
	$("#ok").css('background-color', '#696969');

}
function okClick(){
	if(clickAnimation==true){
	var data = {};
		data['sel_lang'] = langClicki;
		data['time'] = time;
		$("#timer").html(time);
		data['difficulty'] = dificultyClick;
	ajax2(data);
	refresh();
	setTimeout(function(){
		$("#score2").html(json.score);
		if(score<json.score)
		{
			$('#score2').addClass('animated colorGreen1');
			setTimeout(function(){
				$('#score2').removeClass('animated colorGreen1');
				$('#score2').addClass('animated colorGreen2');
				setTimeout(function(){
					$('#score2').removeClass('animated colorGreen2');
				}, 200);
			}, 800);
		}
		else if (json.score<score) {
			$('#score2').addClass('animated colorRed1');
			setTimeout(function(){
				$('#score2').removeClass('animated colorRed1');
				$('#score2').addClass('animated colorRed2');
				setTimeout(function(){
					$('#score2').removeClass('animated colorRed2');
				}, 200);
			}, 800);
		}
		score=json.score;
	}, 1000);
	}
}
function ajax2(data){
	$.ajax({
		type:"POST",
		url:"/",
        dataType: 'json',
		data: data,
		success: function(response){
			json=response;
			//alert(JSON.stringify(response));

		},
		error: function(){
		alert('Error Ajax:'+data);
		}
		});
}
