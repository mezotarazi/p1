

<!DOCTYPE html>
<html>
<head>

	<title>Ramez Tarazi - Project 1</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">

	<link href='css/main.css' rel='stylesheet'>

</head>
<body>
	<header>
	    <h1 id="name">Ramez Tarazi</h1>
	</header>
	<div class="container">
		<img src='images/ramez-pic.jpg' alt='Ramez Pic'>

		<h2>About Me</h2>
		<p>
			I am orginally an Australian living in Washington DC. I have lived and travelled to many areas in Europe and Asia. I work in the Information Technology industry with 5 years experience in Data Technologies. I currently hold a Data Science Certificate from Harvard Extension School and enjoyed the
            program so much that I decided to further my experience and education to achieving a Software Engineering Masters. Looking forward to learning about Dynamic Web Technologies in this class!
        </p>
        <p>
            My hobbies include reading, coding, traveling, sports, and activities outdoors.
		</p>


		<h2>Random Quote</h2>
        <blockquote>
        <?php
            $strings = array(
            'Don\'t cry because it\'s over, smile because it happened. -- Dr. Seuss',
            'I\'m selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can\'t handle me at my worst, then you sure as hell don\'t deserve me at my best. --  Marilyn Monroe',
            'Be yourself; everyone else is already taken. -- Oscar White'
            );
            $key = array_rand($strings);
            echo $strings[$key];
        ?>
        </blockquote>

	</div>
    <footer>
        <p>
            Ramez Tarazi
            <br />
            <a href="mailto:rst296@g.harvard.edu">rst296@g.harvard.edu</a>
        </p>
    </footer>


    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
