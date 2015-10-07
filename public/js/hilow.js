(function() {

	function getRandomNumber() {
		var rand = Math.floor((Math.random()*50)+1);
		return rand;
	}

	function playAgain() {
		var answer = prompt('Do you want to play again?');
		return answer;
	}

	function getGuess() {
		var guess = prompt('Please enter your guess between 1 and 50');
		return guess;

	}

	function isValidGuess(guess) {
		
		var parsedGuess = parseInt(guess);
		//If parsedGuess is not a number, then return false;
		if(isNaN(parsedGuess)) {
			return false;
		} else {
			return true;
		}
	}

	function get ValidGuess() {}
		do {
			var guess = getGuess();

		} while(isValidGuess(guess) == false);

		return guess;
	}

	function playGame() {
		var guess = getValidGuess();
		var rand = getRandomNumber();

		if(guess == random) {
			alert('You did it!');
			var answer = playAgain();
			if(answer) {
				playGame();
			} else {
				alert('Thank you for playing')
			}	

		} else if(guess > random) {
			console.log('Too HIGH!');
		} else if(guess < random) {
			console.log('Too Low!');
		}
	}

	playGame();
	var replay = playAgain();

	if(replay) {
		playGame();
	}

})();