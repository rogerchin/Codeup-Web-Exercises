"use strict"

var buttons = document.getElementsByTagName('button');


for(var i = 0; i < buttons.length; i+=1) {
	buttons[i].addEventListener('click', listener, false);
	console.log(buttons)
}

function listener(event) {
	var clickedButton = this;
	console.log(clickedButton);
}

function calculateOutput(){
	var leftscreen = document.getElementById('leftscreen');
	var middlescreen = document.getElementById('middlescreen');
	var rightscreen = document.getElementById('rightscreen');
	var answer = document.getElementById('answer');
}


function getValue(number) {
	var firstValue = 
}


// 	if(operator == '÷'){
// 		return leftscreen / rightscreen;
// 	} else if (operator == '*') {
// 		return leftscreen * rightscreen 
// 	} else if (operator == '+') {
// 		return leftscreen + rightscreen;
// 	} else if (operator =='-') {
// 		return leftscreen - rightscreen;
// 	}
// }


