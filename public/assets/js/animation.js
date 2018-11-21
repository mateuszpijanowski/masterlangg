const tabMenu = ["EDIT ACCOUNT", "USER ACCOUNT", "RANKING"];
const tabChange = [".CHANGELOGIN-page", ".CHANGEPASSWORD-page", ".CHANGEE-MAIL-page"];
let LastFromTheList = 2;
let currentOnTheList = 1;
let currentOnTheChange = 1;
let clickAnimation = true;
let langClicki='none';
let dificultyClick;
let json;
let time;
let timegame
let stopTime=true;
let okLock=true;
let okLock2=true;
let score;
let quotationLock=true;
const lang1="<button id='sq' class='langButton'>Albanian</button><button id='ar' class='langButton'>Arabic</button><button id='zh' class='langButton'>Chinese</button><button id='cs' class='langButton'>Czech</button><button id='en' class='langButton'>English</button><button id='fr' class='langButton'>French</button><button id='de' class='langButton'>German</button><button id='el' class='langButton'>Greek</button><button id='it' class='langButton'>Italian</button><button id='ja' class='langButton'>Japanese</button><button id='jv' class='langButton'>Javanese</button><button id='no' class='langButton'>Norwegian</button><button id='pl' class='langButton'>Polish</button><button id='pt' class='langButton'>Portuguese</button><button id='ru' class='langButton'>Russian</button><button id='gd' class='langButton'>Scottish</button><button id='es' class='langButton'>Spanish</button><button id='sv' class='langButton'>Swedish</button><button id='tr' class='langButton'>Turkish</button><button id='uk' class='langButton'>Ukrainian</button>";
const lang2="<button id='sq' class='langButton'>Albanian</button><button id='ar' class='langButton'>Arabic</button><button id='hy' class='langButton'>Armenian</button><button id='bg' class='langButton'>Bulgarian</button><button id='my' class='langButton'>Burmese</button><button id='zh' class='langButton'>Chinese</button><button id='cs' class='langButton'>Czech</button><button id='da' class='langButton'>Danish</button><button id='nl' class='langButton'>Dutch</button><button id='en' class='langButton'>English</button><button id='et' class='langButton'>Estonian</button><button id='fi' class='langButton'>Finnish</button><button id='fr' class='langButton'>French</button><button id='de' class='langButton'>German</button><button id='el' class='langButton'>Greek</button><button id='id5' class='langButton'>Indonesian</button><button id='it' class='langButton'>Italian</button><button id='ja' class='langButton'>Japanese</button><button id='jv' class='langButton'>Javanese</button><button id='kk' class='langButton'>Kazakh</button><button id='la' class='langButton'>Latin</button><button id='mk' class='langButton'>Macedonian</button><button id='ms' class='langButton'>Malay</button><button id='ml' class='langButton'>Malayalam</button><button id='no' class='langButton'>Norwegian</button><button id='pl' class='langButton'>Polish</button><button id='pt' class='langButton'>Portuguese</button><button id='ro' class='langButton'>Romanian</button><button id='ru' class='langButton'>Russian</button><button id='gd' class='langButton'>Scottish</button><button id='sr' class='langButton'>Serbian</button><button id='sl' class='langButton'>Slovenian</button><button id='es' class='langButton'>Spanish</button><button id='su' class='langButton'>Sundanese</button><button id='sv' class='langButton'>Swedish</button><button id='tr' class='langButton'>Turkish</button><button id='uk' class='langButton'>Ukrainian</button><button id='ur' class='langButton'>Urdu</button><button id='vi' class='langButton'>Vietnamese</button><button id='cy' class='langButton>Welsh</button>";
const lang3="<button id='af' class='langButton'>Afrikaans</button><button id='sq' class='langButton'>Albanian</button><button id='am' class='langButton'>Amharic</button><button id='ar' class='langButton'>Arabic</button><button id='hy' class='langButton'>Armenian</button><button id='az' class='langButton'>Azerbaijan</button><button id='ba' class='langButton'>Bashkir</button><button id='eu' class='langButton'>Basque</button><button id='be' class='langButton'>Belarusian</button><button id='bs' class='langButton'>Bosnian</button><button id='bg' class='langButton'>Bulgarian</button><button id='my' class='langButton'>Burmese</button><button id='ca' class='langButton'>Catalan</button><button id='ceb' class='langButton'>Cebuano</button><button id='zh' class='langButton'>Chinese</button><button id='hr' class='langButton'>Croatian</button><button id='cs' class='langButton'>Czech</button><button id='da' class='langButton'>Danish</button><button id='nl' class='langButton'>Dutch</button><button id='en' class='langButton'>English</button><button id='eo' class='langButton'>Esperanto</button><button id='et' class='langButton'>Estonian</button><button id='fi' class='langButton'>Finnish</button><button id='fr' class='langButton'>French</button><button id='gl' class='langButton'>Galician</button><button id='ka' class='langButton'>Georgian</button><button id='de' class='langButton'>German</button><button id='el' class='langButton'>Greek</button><button id='ht' class='langButton'>Haitian (Creole)</button><button id='he' class='langButton'>Hebrew</button><button id='mrj' class='langButton'>Hill Mari</button><button id='hu' class='langButton'>Hungarian</button><button id='is' class='langButton'>Icelandic</button><button id='id5' class='langButton'>Indonesian</button><button id='ga' class='langButton'>Irish</button><button id='it' class='langButton'>Italian</button><button id='ja' class='langButton'>Japanese</button><button id='jv' class='langButton'>Javanese</button><button id='kk' class='langButton'>Kazakh</button><button id='ky' class='langButton'>Kyrgyz</button><button id='lo' class='langButton'>Laotian</button><button id='la' class='langButton'>Latin</button><button id='lv' class='langButton'>Latvian (Creole)</button><button id='lt' class='langButton'>Lithuanian</button><button id='lb' class='langButton'>Luxembourgish</button><button id='mk' class='langButton'>Macedonian</button><button id='mg' class='langButton'>Malagasy</button><button id='ms' class='langButton'>Malay</button><button id='ml' class='langButton'>Malayalam</button><button id='mt' class='langButton'>Maltese</button><button id='mi' class='langButton'>Maori</button><button id='mhr' class='langButton'>Mari</button><button id='mn' class='langButton'>Mongolian</button><button id='no' class='langButton'>Norwegian</button><button id='pap' class='langButton'>Papiamento</button><button id='fa' class='langButton'>Persian</button><button id='pl' class='langButton'>Polish</button><button id='pt' class='langButton'>Portuguese</button><button id='ro' class='langButton'>Romanian</button><button id='ru' class='langButton'>Russian</button><button id='gd' class='langButton'>Scottish</button><button id='sr' class='langButton'>Serbian</button><button id='sk' class='langButton'>Slovakian (Creole)</button><button id='sl' class='langButton'>Slovenian</button><button id='es' class='langButton'>Spanish</button><button id='su' class='langButton'>Sundanese</button><button id='sw' class='langButton'>Swahili</button><button id='sv' class='langButton'>Swedish</button><button id='tl' class='langButton'>Tagalog</button><button id='tg' class='langButton'>Tajik</button><button id='tt' class='langButton'>Tatar</button><button id='tr' class='langButton'>Turkish</button><button id='udm' class='langButton'>Udmurt</button><button id='uk' class='langButton'>Ukrainian</button><button id='ur' class='langButton'>Urdu</button><button id='uz' class='langButton'>Uzbek</button><button id='vi' class='langButton'>Vietnamese</button><button id='cy' class='langButton'>Welsh</button><button id='xh' class='langButton'>Xhosa</button><button id='yi' class='langButton'>Yiddish</button>";

$(document).ready(function(){
	let keyy = 0;
$(document).keydown(function(key) {
	let keyCode = key.keyCode;

	if (keyCode==27) {
		if(clickAnimation==true){
            clickStop();
			PageMenuHide('.account-page');
			PageMenuHide('.options-page');
			loginAnimation();
		}
	}
	if (keyCode==13) {
		if(clickAnimation==true){
            clickStop();
			if(okLock2==false){
				okClick();
			}
			else if(clickAnimation==true && quotationLock==false){
				clickStop();
				game();
			}
	}
	}
})









	langList();
	sesion();
    $( ".start" ).click(function() {
        if(clickAnimation==true){
            clickStop();
	    let data = {};
    		data['login'] = inputRead("#login");
   		data['password'] = inputRead("#password");

	    ajax2(data);
	    setTimeout(function(){
			$("#errorLogin").html(json);
			loadnig();
	    }, 1000);
        }
    });
	$( "#quotation" ).click(function() {
		inputWalidation();
	});
    $( "#startRegister" ).click(function() {
        if(clickAnimation==true){
		let data = {};
		    data['loginRegister'] = inputRead("#loginRegister");
	   	    data['password1'] = inputRead("#password1");
		    data['password2'] = inputRead("#password2");
			$("#password1").val('');
			$("#password2").val('');
	   	    data['emailRegister'] = inputRead("#emailRegister");
		ajax2(data);
			setTimeout(function(){$("#errorRegister").html(json);}, 1000);
        }
    });
    $( "#startMemorablePassword" ).click(function() {
        if(clickAnimation==true){
		let data = {};
	   	    data['emailMemorablePassword'] = inputRead("#emailMemorablePassword");
		ajax2(data);
			setTimeout(function(){$("#errorMemorablePassword").html(json);}, 1000);
        }
    });
    $( "#ChangeLOGIN" ).click(function() {
        if(clickAnimation==true){

		let data = {};
	   	    data['ChangeLOGIN'] = inputRead(".ChangeLOGIN");
		ajax2(data);
		setTimeout(function(){$("#error0").html(json);}, 1000);
		$(".nick").html("Nick: "+inputRead(".ChangeLOGIN"));
		$("#nick").html("Nick: "+inputRead(".ChangeLOGIN"));
        }
    });
    $( "#ChangePASSWORD" ).click(function() {
        if(clickAnimation==true){
		let data = {};
		    data['ChangePASSWORD1'] = inputRead(".ChangePASSWORD1");
	   	    data['ChangePASSWORD2'] = inputRead(".ChangePASSWORD2");
		ajax2(data);
		setTimeout(function(){$("#error1").html(json);}, 1000);
        }
    });
    $( "#ChangeMAIL" ).click(function() {
        if(clickAnimation==true){

		let data = {};
	   	    data['ChangeMAIL'] = inputRead(".ChangeMAIL");
		ajax2(data);
		setTimeout(function(){$("#error2").html(json);}, 1000);
		$(".email").html("E-MAIL: "+inputRead(".ChangeMAIL"));
        }
    });
    $( "#startGame" ).click(function() {
        if(clickAnimation==true && quotationLock==false){
		clickStop();
		game();

        }
    });
    $( "#ok" ).click(function() {
		if(okLock2==false){
			okClick();
		}
    });
    $( ".accountButtonLogOut" ).click(function() {
        if(clickAnimation==true){
            clickStop();
		let data = {};
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
			let data = {};
			data['ranking'] = 'position';
			ajax2(data);
			setTimeout(function(){
				ranking();
				$(".rankingPosition").html("Ranking position: "+json);
			}, 750);
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
            	let data = {};
	   	    data['difficulty_update'] = 'EASY';
		ajax2(data);
				setTimeout(function(){
					time=json;
					timegame=time;
					$("#timer").html(time);
					langList1();}, 1000);
			dificultyClick='EASY'
			$(".difficultyDisplays").html(dificultyClick);

        }
    });
    $("#NORMAL").click(function() {
        if(clickAnimation==true){
            clickStop();
            PageMenuHide(".options-page");
            	let data = {};
	   	    data['difficulty_update'] = 'NORMAL';
		ajax2(data);
				setTimeout(function(){
					time=json
					timegame=time;
					$("#timer").html(time);
					langList2();}, 1000);
			dificultyClick='NORMAL'
			$(".difficultyDisplays").html(dificultyClick);

        }
    });
    $("#HARD").click(function() {
        if(clickAnimation==true){
            clickStop();
            PageMenuHide(".options-page");
            	let data = {};
	   	    data['difficulty_update'] = 'HARD';
		ajax2(data);

				setTimeout(function(){
					time=json;
					timegame=time;
					$("#timer").html(time);
					langList3();}, 1000);
			dificultyClick='HARD'
			$(".difficultyDisplays").html(dificultyClick);

        }
    });


    $(".rankingPosition").click(function() {                          //fukcja wywyołująca aktualne miejsce w rakingu
        if(clickAnimation==true){
            clickStop();
            accountPageContentOut(2,currentOnTheList);
            registerAnimationMenu(1, 2, 0, 1, 2);
			setTimeout(function(){
				let data = {};
				data['ranking'] = 'position';
				ajax2(data);
				setTimeout(function(){
					scroll_to2('#id'+json);
				}, 750);
			}, 750);
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

	$('.langList').on("click",".langButton", function () {
		if(okLock==false){
			$("#ok").css('background-color', '#4CAF50');
			okLock2=false;
		}
	});



	$('.langList').on("click","#az", function () {   $("#langClick").html("az");  langClicki='az';  });
	$('.langList').on("click","#sq", function () {   $("#langClick").html("sq");langClicki='sq';    });
	$('.langList').on("click","#am", function () {   $("#langClick").html("am");langClicki='am';    });
	$('.langList').on("click","#en", function () {   $("#langClick").html("en");langClicki='en';    });
	$('.langList').on("click","#ar", function () {   $("#langClick").html("ar");langClicki='ar';    });

	$('.langList').on("click","#hy", function () {   $("#langClick").html("hy");langClicki='hy';    });
	$('.langList').on("click","#af", function () {   $("#langClick").html("af");langClicki='af';    });
	$('.langList').on("click","#eu", function () {   $("#langClick").html("eu");langClicki='eu';    });
	$('.langList').on("click","#ba", function () {   $("#langClick").html("ba");langClicki='ba';    });
	$('.langList').on("click","#be", function () {   $("#langClick").html("be");langClicki='be';    });

	$('.langList').on("click","#bn", function () {   $("#langClick").html("bn");langClicki='bn';    });
	$('.langList').on("click","#my", function () {   $("#langClick").html("my");langClicki='my';    });
	$('.langList').on("click","#bg", function () {   $("#langClick").html("bg");langClicki='bg';    });
	$('.langList').on("click","#bs", function () {   $("#langClick").html("bs");langClicki='bs';    });
	$('.langList').on("click","#cy", function () {   $("#langClick").html("cy");langClicki='cy';    });

	$('.langList').on("click","#hu", function () {   $("#langClick").html("hu");langClicki='hu';    });
	$('.langList').on("click","#vi", function () {   $("#langClick").html("vi");langClicki='vi';    });
	$('.langList').on("click","#ht", function () {   $("#langClick").html("ht");langClicki='ht';    });
	$('.langList').on("click","#gl", function () {   $("#langClick").html("gl");langClicki='gl';    });
	$('.langList').on("click","#nl", function () {   $("#langClick").html("nl");langClicki='nl';    });

	$('.langList').on("click","#mrj", function () {   $("#langClick").html("mrj");langClicki='mrj'; });
	$('.langList').on("click","#el", function () {   $("#langClick").html("el");langClicki='el';    });
	$('.langList').on("click","#ka", function () {   $("#langClick").html("ka");langClicki='ka';    });
	$('.langList').on("click","#gu", function () {   $("#langClick").html("gu");langClicki='gu';    });
	$('.langList').on("click","#da", function () {   $("#langClick").html("da");langClicki='da';    });

	$('.langList').on("click","#is", function () {   $("#langClick").html("is");  langClicki='is';  });
	$('.langList').on("click","#es", function () {   $("#langClick").html("es");langClicki='es';    });
	$('.langList').on("click","#kk", function () {   $("#langClick").html("kk");langClicki='kk';    });
	$('.langList').on("click","#kn", function () {   $("#langClick").html("kn");langClicki='kn';    });
	$('.langList').on("click","#ca", function () {   $("#langClick").html("ca");langClicki='ca';    });

	$('.langList').on("click","#ky", function () {   $("#langClick").html("ky");langClicki='ky';    });
	$('.langList').on("click","#ko", function () {   $("#langClick").html("ko");langClicki='ko';    });
	$('.langList').on("click","#xh", function () {   $("#langClick").html("xh");langClicki='xh';    });
	$('.langList').on("click","#km", function () {   $("#langClick").html("km");langClicki='km';    });
	$('.langList').on("click","#lo", function () {   $("#langClick").html("lo");langClicki='lo';    });

	$('.langList').on("click","#la", function () {   $("#langClick").html("la");langClicki='la';    });
	$('.langList').on("click","#lv", function () {   $("#langClick").html("lv");langClicki='lv';    });
	$('.langList').on("click","#zh", function () {   $("#langClick").html("zh");langClicki='zh';    });
	$('.langList').on("click","#lt", function () {   $("#langClick").html("lt");langClicki='lt';    });
	$('.langList').on("click","#lb", function () {   $("#langClick").html("lb");langClicki='lb';    });

	$('.langList').on("click","#mg", function () {   $("#langClick").html("mg");langClicki='mg';    });
	$('.langList').on("click","#ms", function () {   $("#langClick").html("ms");langClicki='ms';    });
	$('.langList').on("click","#ml", function () {   $("#langClick").html("ml");langClicki='ml';    });
	$('.langList').on("click","#mt", function () {   $("#langClick").html("mt");langClicki='mt';    });
	$('.langList').on("click","#mk", function () {   $("#langClick").html("mk");langClicki='mk';    });

	$('.langList').on("click","#he", function () {   $("#langClick").html("he");langClicki='he'; });
	$('.langList').on("click","#yi", function () {   $("#langClick").html("yi");langClicki='yi';    });
	$('.langList').on("click","#id5", function () {   $("#langClick").html("id5");langClicki='id';    });
	$('.langList').on("click","#ga", function () {   $("#langClick").html("ga");langClicki='ga';    });
	$('.langList').on("click","#it", function () {   $("#langClick").html("it");langClicki='it';    });

	$('.langList').on("click","#mi", function () {   $("#langClick").html("mi");  langClicki='mi';  });
	$('.langList').on("click","#mr", function () {   $("#langClick").html("mr");langClicki='mr';    });
	$('.langList').on("click","#mhr", function () {   $("#langClick").html("mhr");langClicki='mhr';    });
	$('.langList').on("click","#mn", function () {   $("#langClick").html("mn");langClicki='mn';    });
	$('.langList').on("click","#de", function () {   $("#langClick").html("de");langClicki='de';    });

	$('.langList').on("click","#ne", function () {   $("#langClick").html("ne");langClicki='ne';    });
	$('.langList').on("click","#no", function () {   $("#langClick").html("no");langClicki='no';    });
	$('.langList').on("click","#pa", function () {   $("#langClick").html("pa");langClicki='pa';    });
	$('.langList').on("click","#pap", function () {   $("#langClick").html("pap");langClicki='pap';    });
	$('.langList').on("click","#fa", function () {   $("#langClick").html("fa");langClicki='fa';    });

	$('.langList').on("click","#pl", function () {   $("#langClick").html("pl");langClicki='pl';    });
	$('.langList').on("click","#pt", function () {   $("#langClick").html("pt");langClicki='pt';    });
	$('.langList').on("click","#ro", function () {   $("#langClick").html("ro");langClicki='ro';    });
	$('.langList').on("click","#ru", function () {   $("#langClick").html("ru");langClicki='ru';    });
	$('.langList').on("click","#ceb", function () {   $("#langClick").html("ceb");langClicki='ceb';    });

	$('.langList').on("click","#sr", function () {   $("#langClick").html("sr");langClicki='sr';    });
	$('.langList').on("click","#si", function () {   $("#langClick").html("si");langClicki='si';    });
	$('.langList').on("click","#sk", function () {   $("#langClick").html("sk");langClicki='sk';    });
	$('.langList').on("click","#sl", function () {   $("#langClick").html("sl");langClicki='sl';    });
	$('.langList').on("click","#sw", function () {   $("#langClick").html("sw");langClicki='sw';    });

	$('.langList').on("click","#su", function () {   $("#langClick").html("su");langClicki='su'; });
	$('.langList').on("click","#tg", function () {   $("#langClick").html("tg");langClicki='tg';    });
	$('.langList').on("click","#th", function () {   $("#langClick").html("th");langClicki='th';    });
	$('.langList').on("click","#tl", function () {   $("#langClick").html("tl");langClicki='tl';    });
	$('.langList').on("click","#ta", function () {   $("#langClick").html("ta");langClicki='ta';    });

	$('.langList').on("click","#ta", function () {   $("#langClick").html("ta");  langClicki='ta';  });
	$('.langList').on("click","#te", function () {   $("#langClick").html("te");langClicki='te';    });
	$('.langList').on("click","#tr", function () {   $("#langClick").html("tr");langClicki='tr';    });
	$('.langList').on("click","#udm", function () {   $("#langClick").html("udm");langClicki='udm';    });
	$('.langList').on("click","#uz", function () {   $("#langClick").html("uz");langClicki='uz';    });

	$('.langList').on("click","#uk", function () {   $("#langClick").html("uk");langClicki='uk';    });
	$('.langList').on("click","#ur", function () {   $("#langClick").html("ur");langClicki='ur';    });
	$('.langList').on("click","#fi", function () {   $("#langClick").html("fi");langClicki='fi';    });
	$('.langList').on("click","#fr", function () {   $("#langClick").html("fr");langClicki='fr';    });
	$('.langList').on("click","#hi", function () {   $("#langClick").html("hi");langClicki='hi';    });

	$('.langList').on("click","#hr", function () {   $("#langClick").html("hr");langClicki='hr';    });
	$('.langList').on("click","#cs", function () {   $("#langClick").html("cs");langClicki='cs';    });
	$('.langList').on("click","#sv", function () {   $("#langClick").html("sv");langClicki='sv';    });
	$('.langList').on("click","#gd", function () {   $("#langClick").html("gd");langClicki='gd';    });
	$('.langList').on("click","#et", function () {   $("#langClick").html("et");langClicki='et';    });

	$('.langList').on("click","#eo", function () {   $("#langClick").html("eo");langClicki='eo';    });
	$('.langList').on("click","#jv", function () {   $("#langClick").html("jv");langClicki='jv';    });
	$('.langList').on("click","#ja", function () {   $("#langClick").html("ja");langClicki='ja';    });

}
function loadnig()
{		if(json.id_user>0){
			setTimeout(function(){
				$("#login").val('');
				$("#password").val('');
			}, 1000);
			$(".nick").html("Nick: "+json.login);
			$("#nick").html("Nick: "+json.login);
			$(".email").html("E-mail: "+json.email);
			$("#score").html("Score: "+json.score);
			$("#score2").html(json.score);
			score=json.score;
			time=json.time;
			timegame=time;
			$("#timer").html(time);
			dificultyClick=json.difficulty
			$(".difficultyDisplays").html(dificultyClick);
			if(dificultyClick=="EASY"){langList1();}
			else if(dificultyClick=="NORMAL"){langList2();}
			else if(dificultyClick=="HARD"){langList3();}
			//json.user_lang
			//json.user_text
			login();
			let data = {};
			data['ranking'] = 'position';
			ajax2(data);
			setTimeout(function(){
				$(".rankingPosition").html("Ranking position: "+json);
			}, 750);
			if(json.transtext!=null){
				$("#TRANSTEXT").html(json.transtext);
				$("#DETECTLANG").html(json.detectlang);
				timee();}
		}
}
function timee(){
	if(time>=1 && stopTime==false){
	setTimeout(function(){time=time-1;
	$("#timer").html(time);
	timee()}, 1000);}
	if(time==0 && stopTime==false){
		okClick();
	}
}
function sesion()
{
	let data = {};
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
		let data = {};
	   	data['user_text'] = inputRead("#quotation");
		if(data.user_text.length>0){
		okLock=false;
		ajax2(data);
			setTimeout(function(){
				$("#TRANSTEXT").html(json.transtext);
				$("#DETECTLANG").html(json.detectlang);
				stopTime=false
				timee();
			}, 1500);
		}
		else{

		}
}
function inputWalidation(){
	if(okLock==false){

	}
	else if(inputRead("#quotation").length>0){
		quotationLock=false;
		setTimeout(function(){inputWalidation();}, 100);
		$(".startGame").css('background-color', '#4CAF50');
		$("#ok").css('background-color', '#696969');
	}
	else if (quotationLock==true) {
		setTimeout(function(){inputWalidation();}, 100);
	}
	else  {
		setTimeout(function(){inputWalidation();}, 100);
		quotationLock=true;
		$(".startGame").css('background-color', '#696969');
	}
}
function refresh(){

	stopTime=true;
	setTimeout(function(){
		time=timegame;
		$("#timer").html(time);
	}, 1000);
	$("#TRANSTEXT").html('');
	$("#DETECTLANG").html('');
	//$("#quotation").html();
	$("#langClick").html('');
	okLock=true;
	okLock2=true;
	$("#ok").css('background-color', '#696969');

}
function okClick(){
	if(clickAnimation==true){
	let data = {};
		data['sel_lang'] = langClicki;
		data['time'] = time;
		$("#timer").html(time);
		data['difficulty'] = dificultyClick;
	ajax2(data);
	refresh();
	setTimeout(function(){

		$("#score").html("Score: "+json.score);
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
		else if (json.score<score ) {
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
function ranking(){
	let data = {};
	data['ranking'] = 'ranking';
	ajax2(data);
	setTimeout(function(){
		$("#rankingg").html('');
		for(let i=0;i<=json.length;i++){
			$("#rankingg").append("<tr id='id"+json[i].Position+"'><td> "+json[i].Position+" </td><td> "+json[i].Nick+" </td><td> "+json[i].Score+" </td></tr>");
		}
	}, 800);
}
function ajax2(data){
	$.ajax({
		type:"POST",
		url:"/",
        dataType: 'json',
		data: data,
		success: function(response){
			json=response;
			alert(JSON.stringify(response));

		},
		error: function(){
		alert('Error Ajax:'+data);
		}
		});
}
function langList1(){
	$(".langList").html(lang1);
}
function langList2(){
	$(".langList").html(lang2);
}
function langList3(){
	$(".langList").html(lang3);
}
function scroll_to2(selector) {
    $('.account-pageContent2').animate({scrollTop: $(selector).offset().top}, 1000);
    return false;
}
