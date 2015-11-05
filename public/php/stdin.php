<? php

//write the output
//notice the space after the ?
fwrite(STDOUT, 'What is your first Name? ');

//Get the input from the user
$firstName = fgets(STDIN);

//output the user's name
fwrite(STDOUT, "Hello $firstName\n");

?>