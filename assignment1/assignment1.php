<!DOCTYPE html>
<html>
<head>
	<title>CPAN204RNA Assignment1 Ji Yun Baik N01383344</title>
	<style>
		#form {
			padding: 2.5px 10px 2.5px 10px;
			clear: both;
			border: 1px solid red;
			border-radius: 10px;
			box-shadow: 10px 5px 10px red;
		}

		h3 {
			margin-bottom: 30px;
			padding-bottom: 5px;
			float: center;
			text-align: center;
			font-style: italic;
			text-shadow: 5px 5px 5px red;
		}

		body {
			background-color: black;	
			color: white;
			font-family :Arial,Times,serif;
			width: 680px;		
			margin: 15px auto;
			padding-top: 15px auto;
		}	

		.story {
			float: center;
			padding-left: 100px;
			padding-right: 100px;
		}

		.picture {
			float: left;
			padding-left: 10px;
			padding-right: 10px;
			height: 150px;
			width: 150px;
		}

		.para:first-letter {
			font-size: 1.5em;
		}

		.word {
			font-weight: bold;
			font-style: italic;
			text-decoration: underline;
		}

		.click_me {
			float: center;
			padding-left: 300px;
			padding-right: ]300px;
			padding-top: 20px;
			padding-bottom: 20px;
		}

	</style>
</head>
<body>
	<form id="form" action="assignment1.php" method="post">
		<!--Page info-->
		<h3>CPAN204RNA Assignment1 Ji Yun Baik N01383344</h3>

		<!--PHP code starts here-->
		<?php
		//if statement to show random result when "Click Me!" is clicked
		if (isset($_POST['random_result'])) {
			//define arrays for noun, verb, adj and adverb
			$array_noun = array("New Year's Day", "Family Day", "Labour Day", "Canada Day","Christmas Day");
			$array_verb = array("indulge", "satisfy", "fulfill", "satiate", "give in to");	
			$array_adj = array("lazy", "inactive", "idle", "sluggish", "slothful");
			$array_adverb = array("Thankfully", "Luckily", "Gratefully", "Fortunately","Abnormally");

			//shuffle individual arrays to mix up the order of items
			shuffle($array_noun);
			shuffle($array_verb);
			shuffle($array_adj);
			shuffle($array_adverb);

			//pick first index item from each array and assign them into new variable
			$random_noun = $array_noun[0];
			$random_verb = $array_verb[0];
			$random_adj = $array_adj[0];
			$random_adverb = $array_adverb[0];

			//depending on value of $random_noun, show appropriate image
			if ($random_noun == "New Year's Day"){
				echo '<img class= "picture" src="newyearsday.jpg" alt="new years day image">';
			} elseif ($random_noun == "Family Day") {
				echo '<img class= "picture" src="familyday.jpg" alt="family day image">';
			} elseif ($random_noun == "Labour Day") {
				echo '<img class= "picture" src="labourday.jpg" alt="labour day image">';
			} elseif ($random_noun == "Canada Day") {
				echo '<img class= "picture" src="canadaday.jpg" alt="canada day image">';
			} elseif ($random_noun == "Christmas Day") {
				echo '<img class= "picture" src="christmasday.jpg" alt="christmas day image">';	
			} 

			//prints Mad Lib story with randomly picked values
			echo "<p class='para'>
				<span class='word'>$random_adverb</span> we have many holidays in Canada.
				<span class='word'>$random_noun</span> is a time to be with the family and friends. 
				It is also the time to <span class='word'>$random_verb</span> in our favourite sport or pursue our hobbies.
				We make numerous plans for our <span class='word'>$random_noun</span> but most of them are not fulfilled.
				We want to do a lot during our <span class='word'>$random_noun</span> but usually get <span class='word'>$random_adj</span>.
				<span class='word'>$random_noun</span> is a good time to take a break from the routine.
				It is time to <span class='word'>$random_verb</span> in our hobbies and spend time with family member.
				</P>";
		} else {
			//prints default Mad Lib story as page is loaded
			echo "<p class='story'>	
			<span class='word'>(ADVERB)</span> we have many holidays in Canada.
			<span class='word'>(NOUN)</span> is a time to be with the family and friends. 
			It is also the time to <span class='word'>(VERB)</span> in our favourite sport or pursue our hobbies.
			We make numerous plans for our <span class='word'>(NOUN)</span> but most of them are not fulfilled.
			We want to do a lot during our <span class='word'>(NOUN)</span> but usually get <span class='word'>(ADJ)</span>.
			<span class='word'>(NOUN)</span> is a good time to take a break from the routine.
			It is time to <span class='word'>(VERB)</span> in our hobbies and spend time with family member.
			</p>";
		}

		//generate click me button
		echo '<div class="click_me">
		<input name="random_result" type="submit" value="Click Me!">
		</div>'
		?>
	</form>
</body>
</html>