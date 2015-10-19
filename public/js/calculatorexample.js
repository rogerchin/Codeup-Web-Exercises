"use strict";

function listener(event) {
	var clickedButton = this;
	console.log(clickedButton);
}

var buttons = document.getElementsByTagName('button');
var operators = ['*','/','+','-']

for(var i = 0; i < buttons.length; i += 1) {
	buttons[i].addEventListener('click', listener, false);

}

function calculateOutput() {
	var left = document.getElementById('left');
	var operator = document.getElementById('operator');
	var right = document.getElementById('right')


// 	if(operator == '/'){
// 		return left / right;
// 	} else if (operator == '*') {
// 		return left * right;
// 	} else if (operator == '+') {
// 		return left + right;
// 	} else if (operator == '-') {
// 		return left - right;
// 	}
// }






