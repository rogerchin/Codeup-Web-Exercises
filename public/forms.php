    <!DOCTYPE html>
<html>
	<head>
		<title>The Perfect Forms</title>
	</head>
	<body>
		<h1>GET</h1>
		<?php var_dump($_GET); ?>

		<h1>POST</h1>
		<?php var_dump($_POST); ?>

		<hr>
		<h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Search</h2>
		<form method="GET" action="/forms.php">
            <p>
                 <label for="Search"></label>
                 <input id="Search" name="Search" type="text" autofocus placeholder="Search Here">
                 <button type="Submit">Submit</button>
            </p>
        </form>

        <hr>

        <h2>Log-In Form</h2>
        <form method="POST" action="/forms.php">
            <p>
                 <label for="username">Username</label>
                 <input id="username" name="username" type="text" placeholder="Input your username">
            </p>
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Enter Password">
            </p>
            <p>
                <button type="Login">Login</button>
            </p>
        </form>

        <hr>

        <h2>Sign-Up Form</h2>
        <form method="POST" action="forms.php">
            <p>
                 <label for="Name">Name</label>
                 <input id="Name" name="Name" type="text" placeholder="Enter Name">
            </p>
            <p>
                <label for="Email">Email</label>
                <input id="Email" name="Email" type="Email" placeholder="Enter Email Address">
                <input type="checkbox" id="mailing_list" name="mailing_list" value="yes">
                <label for="mailing_list">Sign me up for the mailing list!</label>
            </p>
            <p>
            	<label for="username">Username</label>
            	<input id="username" name="username" type="text" required placeholder="Enter Username">
            </p>
            <p>
            	<label for="password">Password</label>
            	<input id="password" name="password" type="password" required placeholder="Enter Password">
            </p>   		
            <p>
                <button type="submit">Submit</button>
            </p>
        </form>

        <hr>

        <h2>&nbsp;&nbsp;&nbsp;&nbsp;Contact Me</h2>
        <form method="POST" action="forms.php">
        	<p>
        		<label for="address"></label>
        		<input id="address" name="address" type="text" placeholder="Email Address">
			</p>
			<p>
				<label for="subject"></label>
				<input id="subject" name="subject" type="text" placeholder="Enter Subject">
			</p>
			<p>
				<label for="message"></label>
				<textarea id="message" name="message" type="text" rows="8" cols="40" placeholder="Enter Message Here"></textarea>
			</p>

			<button type="submit">Submit Message</button>
		</form>

		<img src="/img/forms.gif" alt="You're awesome">

	</body>
</html>