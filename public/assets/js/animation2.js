$(document).ready(function(){
	$('.CHANGEPASSWORD-page').css('display', 'block');
	PageMenuShow(".account-page");
    $( "#ChangePASSWORD" ).click(function() {
		var data = {};
		    data['ChangePASSWORD1'] = inputRead(".ChangePASSWORD1");
	   	    data['ChangePASSWORD2'] = inputRead(".ChangePASSWORD2");
		ajax2(data);
		setTimeout(function(){$("#error1").html(json);}, 1000);      
    });
  
});

function PageMenuShow(nameClass){
    dimnesShow();
    $(nameClass).css('display', 'block');
    $(nameClass).removeClass('animated bounceOutUp');
    $(nameClass).addClass('animated bounceInDown');
    $(".dimness" ).click(function() {
    });

}
function dimnesShow(){
    $('.dimness').css('display', 'block');
    $('.dimness').removeClass('animated fadeOut2');
    $('.dimness').addClass('animated fadeIn2');
}
function clickStop(){
    clickAnimation=false;
    setTimeout(function(){clickAnimation=true;}, 1000);
}
function inputRead(y){

    const input = document.querySelector(y);
    const val = input.value;
	return (val);
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
