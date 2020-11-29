<!--205CDE Assignment PHP main body-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Student Lifestyle Questionnaire </title>
		<style>
			h1 {color:red;text-align:center;background-color:black;}
			h2 {color:black; font-size:14pt;border:2px solid red}
			h3 {color:black; font-size:14pt;text-decoration: underline}
			p {color:black; font-size:12pt;}
		</style>
		<meta charset="utf-8"> 
	</head>
	<body style="background-color:lightgrey;">
		<!--title and introduction-->
		<h1>Student Lifestyle Questionnaire</h1>
		<h2>
		This questionnaire is to collect data on how students spend their time<br>
		Please answer all the questions. 
		</h2>
		
		<!--form-->
		<form action="CompleteForm.php" method="post">
			<p>
				<h3>Identity</h3>
				What is your name?
				<input type="text" name="name"><br>
				<h3>Education</h3>
				1.What is your current education level<br>
				<input type="radio" id="Primary" name="education" value="Primary">
				<label for="Primary">Primary</label><br>
				<input type="radio" id="Secondary" name="education" value="Secondary">
				<label for="Secondary">Secondary</label><br>
				<input type="radio" id="University" name="education" value="University">
				<label for="University">University</label>
				<br>
				
				2.How much time do you spend studying outside of class hours every week?<br>
				<input type="text" name="StudyPerWeek"><br>
				
				3.Can you remember what you learn clearly?<br>
				<input type="radio" id="Clearly" name="memory" value="Clearly">
				<label for="Clearly">Yes!</label><br>
				<input type="radio" id="Hazy" name="memory" value="Hazily">
				<label for="Hazy">No,I forget some parts</label><br>
				<input type="radio" id="Forgot" name="memory" value="Vaguely">
				<label for="Forgot">No,I need to review my notes</label>
				<br>
				
				4.Do you lose focus in class? if yes please state the reason.<br>
				<input type="text" name="Reason" value="none"><br>
				5.In what way do you think the teachers can do to improve the learning expirence?<br>
				<input type="text" name="LearnExp"><br>
				
				<h3>Life style</h3>
				6.How many hours on average do you spend on your digital devices playing per day?<br>
				<input type="text" name="PlayTime"><br>
				7.What time do you sleep at night?<br>
				<input type="radio" id="Early" name="SleepTime" value="Early">
				<label for="Early"> I sleep before 10pm</label><br>
				<input type="radio" id="Normal" name="SleepTime" value="Normaly">
				<label for="Normal">I sleep between 10pm to 12am</label><br>
				<input type="radio" id="Late" name="SleepTime" value="Lately">
				<label for="Late">I sleep whenever i want to after midnight</label>
				<br>
				8.How long do you sleep each day on average?<br>
				<input type="text" name="SleepLength"><br>
				
				9.Do you eat in between meals?<br>
				<input type="radio" id="Often" name="Snack" value="Often">
				<label for="Often"> Often</label><br>
				<input type="radio" id="Sometimes" name="Snack" value="Sometimes">
				<label for="Sometimes">Sometimes</label><br>
				<input type="radio" id="Rarely" name="Snack" value="Rarely">
				<label for="Rarely">Rarely</label>
				<br>
				10.How often do you exercise?<br>
				<input type="radio" id="Often" name="Exercise" value="Often">
				<label for="Often"> Often</label><br>
				<input type="radio" id="Sometimes" name="Exercise" value="Sometimes">
				<label for="Sometimes">Sometimes</label><br>
				<input type="radio" id="Rarely" name="Exercise" value="Rarely">
				<label for="Rarely">Rarely</label>
				<br>
				
				<!--submit-->
				<input type="submit">
			</p>			
			
		</form>
			
		
		
		
		

	</body>
</html>