$(document).ready(function(){
//-------------------------------------------------------------------

var move_left = false;
var move_right = false;
var allow_control = true;

var int_current_margin = 0;

function right(){
	if(int_current_margin > -(400))
		int_current_margin -=1;
	$('#slides').css('margin-left',int_current_margin.toString()+'%');
}

function left(){
	if(int_current_margin<0)
		int_current_margin +=1;
	$('#slides').css('margin-left',int_current_margin.toString()+'%');
}


var automate = true;
automate = setInterval(move_auto,40);


var move_auto_direction = "right";

function move_auto(){
	
	if(int_current_margin == -1)
		move_auto_direction = "right";
	if(int_current_margin == -(400))
		move_auto_direction = "left";
	
	if(move_auto_direction == "right")
		right();
	else
		left();
}

//-------------------------------------------------------------------	
});