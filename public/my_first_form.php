<!DOCTYPE HTML>
<html>
    <head>
        <title>My First Form</title>
        <link rel="stylesheet" href="/css/site.css">
    </head>

    <body>
        <section class="output">
            <h1 class="fancy-header">GET</h1>
            <?php var_dump($_GET); ?>
            <h1 class="fancy-header">POST</h1>
            <?php var_dump($_POST); ?>
        
        <section class="login">
        <h2>User Login</h2>
            <form method="POST" action="/my_first_form.php">
                <p>
                     <label for="username">Username</label>
                     <input id="username" name="username" type="text" autofocus placeholder="Input your username">
                </p>
                <p>
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="Enter Password">
                </p>
                <p>
                    <button type="submit">Login</button>
                </p>
            </form>
        </section>

        <br>
        <br>

        <section class="email">
        <h2>Compose an email</h2>
        <form method="POST" action="forms.php">
            <p>
                <label for="to_address"></label>
                <input id="to_address" name="to_address" type="text" placeholder="To: Email">
            </p>    
            <p>
                <label for="from_address"></label>
                <input id="from_address" name="from_address" type="text" placeholder="From: Email">
                <input type="checkbox" id="mailing_list" name="mailing_list" value="yes">
                <label for="mailing_list">Sign me up for the mailing list!</label>
            </p>
            <p>
                <label for="subject"></label>
                <input id="subject" name="subject" type="text" placeholder="Enter Subject">
            </p>
            <p>
                <label for="message"></label>
                <textarea id="message" name="message" type="text" rows="8" cols="40" placeholder="Enter Message Here"></textarea>
            </p>

            <button type="submit">Send Message</button>
        </form>

        <h2>Multiple Choice Test</h2>
        <form method="POST" action="/my_first_form.php">
            <p>What is the capital of Texas?</p>
            <p><label><input type="radio" name="q1" value="Houston">Houston</label></p>
            <p><label><input type="radio" name="q1" value="Dallas">Dallas</label></p>
            <p><label><input type="radio" name="q1" value="Austin">Austin</label></p>
            <p><label><input type="radio" name="q1" value="San Antonio">San Antonio</label></p>
            <button type="submit">Submit</button>
        </form>
        <form method="POST" action="/my_first_form.php">
            <p>What kind of computer do you use?</p>
            <p><label><input type="checkbox" id="sys1" name="sys[]" value="Mac">Mac</label></p>
            <p><label><input type="checkbox" id="sys1" name="sys[]" value="Mac">Mac</label></p>
            <p><label><input type="checkbox" id="sys1" name="sys[]" value="Mac">Mac</label></p>
            <p><label><input type="checkbox" id="sysinfinite" name="sys[]" value="EverythingElse">Other</label></p>
            <button type="submit">Submit</button>
        </form>
        <form method="POST" action="/my_first_form.php">
            <p>Rate your happiness (1 to Unicorn)</p>
            <p><label><input type="radio" name="q3" value="1">1</label></p>
            <p><label><input type="radio" name="q3" value="2">2</label></p>
            <p><label><input type="radio" name="q3" value="3">3</label></p>
            <p><label><input type="radio" name="q3" value="4">4</label></p>
            <p><label><input type="radio" name="q3" value="5"><img src="/img/charlie.jpg"></label></p>
            <button type="submit">Submit</button>
        </form> 

        <h2>Select Testing</h2>
        <form method="POST" action="/my_first_form.php">
            <label for="gender">Are you a male?</label>
            <select id="gender" name="gender">
                <option disabled selected>Select One</option>
                <option value="0">Yes</option>
                <option value="1">No</option>
            </select>
            <button type="submit">submit</button>
        </form>

        <h2>Multi-Answer</h2>
        <form method="POST" action="/my_first_form.php">
            <label for="game">What gaming system have you played?(Use comm/contrl to select more than 1)</label>
        <p>
            <select id="game" name="game[]" multiple>
                <option value="Computer">Computer</option>
                <option value="Xbox">Xbox</option>
                <option value="Playstation">Playstation</option>
                <option value="Nintendo">Nintendo</option>
                <option value="Other">Other</option>
            </select>
        </p>
            <button type="submit">submit</button>
        </form>

    </body>
</html>

