<!--205CDE Assignment PHP Form body-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Complete Form </title>
		<style>
			h1 {color:red;text-align:center;background-color:black;}
			h2 {color:black; font-size:14pt;border:2px solid red}
			h3 {color:black; font-size:14pt;text-decoration: underline}
			p {color:black; font-size:12pt;}
		</style>
		<meta charset="utf-8"> 
	</head>
	<body style="background-color:lightgrey;">
		
		<h1>Questionnaire Completed</h1>
		<h2>
		Thank you for your cooperation<br>
		With the feedback you have given we will procede to give the following friendy advice.<br> 
		</h2>
		<h3>Our advice</h3>
		<!--advice calculations-->
		<!--variables-->
		<?php
			//free time variables
			$HoursPerWeek=168;
			$StudyPerWeek=$_POST["StudyPerWeek"];
			$PlayPerDay=$_POST["PlayTime"];
			$PlayPerWeek=$PlayPerDay*7;
			$SleepPerday=$_POST["SleepLength"];
			$SleepPerweek=$SleepPerday*7;
			$FreeTimePerWeek=$HoursPerWeek-$StudyPerWeek-$PlayPerWeek-$SleepPerweek-25;
			$FreeTimePerDay=$FreeTimePerWeek/7;
			//memory and study time variables
			$Memory=$_POST["memory"];
			//sleep time and sleep length variables
			$SleepTime=$_POST["SleepTime"];
			$SleepLength=$_POST["SleepLength"];
			//exercise and snacking variables
			$Snacking=$_POST["Snack"];
			$Exercise=$_POST["Exercise"];
			
			//free time calculation
			if ($FreeTimePerWeek< 0){
				echo"There is not enough time to do everything.please recheck your input values";
			}
			else{
				//Spare free time
				echo"You have on average $FreeTimePerDay hours of free time per day assuming you are a full time student.<br>";
				if ($FreeTimePerDay <2){
					echo" We advice you to becareful with your time management because an unexpected event may throw off your daily schedule<br>";
				}
				elseif ($FreeTimePerDay <4){
					echo"You have some spare time on your hands so try browsing online to expand your knowledge<br>";
				}
				else {
					echo"You have too much free time so try picking up a hobby or self study more to improve your self worth<br>";
				}
				
				//memory
				if ($Memory == "Clearly"){
					echo"Your memory is good and can absorb what you learnt.Keep up the good work<br>";
				}
				elseif ($Memory == "Hazily" && $StudyPerWeek<6){
					echo"Your memory is average so you should spend some time studying<br>";
				}
				elseif ($Memory == "Vaguely" && $StudyPerWeek<11){
					echo"Your memory is bad so you are adviced to spend more time studying<br>";
				}
				else {
					echo"You cover up your memory flaws with additional self study.Good work<br>";
				}
				//sleep
				if ($SleepLength<6){
					if($SleepTime=="Early"){
						echo"You should rest more as sleep is essential for good development<br>";
					}
					elseif($SleepTime=="Normaly"){
						echo"You should rest earlier to get a better sleep<br>";
					}
					elseif($SleepTime=="Lately"){
						echo"You should cut back on those hours and get proper sleep because it affects your health<br>";
					}
					
				}
				elseif ($SleepLength<9){
					if($SleepTime=="Early"){
						echo"You have a good sleep cycle and keep it that way<br>";
					}
					elseif($SleepTime=="Normaly"){
						echo"You have a tendency to wake up late so becareful of classes that in the early morning<br>";
					}
					elseif($SleepTime=="Lately"){
						echo"you are always sleepy in the morning especially on those days when you need to wake up early.Try sleeping earlier<br>";
					}
				}
				elseif ($SleepLength>=9){
					echo"You are sleeping too much.Cut back on sleep and be awake more there is so much to see and do<br>";
				}
				
				//exercise
				if($Snacking=="Often"){
					if($Exercise=="Often"){
						echo"You should cut down in snacking to lose weight<br>";
					}
					elseif($Exercise=="Sometimes"){
						echo"You should be more active or else you will gain weight<br>";
					}
					elseif($Exercise=="Rarely"){
						echo"You are gaining weight and fast.Therefore, we recomend a diet <br>";
					}
				}
				elseif($Snacking=="Sometimes"){
					if($Exercise=="Often"){
						echo"You should cut down in snacking to lose weight<br>";
					}
					elseif($Exercise=="Sometimes"){
						echo"You should watch your body weight as you have a chance to gain a kilo or two without you noticing<br>";
					}
					elseif($Exercise=="Rarely"){
						echo"You are gaining weight slowly.we recomend more exercise<br>";
					}
				}
				elseif($Snacking=="Rarely"){
					if($Exercise=="Often"){
						echo"Keep up the active lifestyle<br>";
					}
					elseif($Exercise=="Sometimes"){
						echo"Put some more effort into exercising and you will get that healthy body you desire<br>";
					}
					elseif($Exercise=="Rarely"){
						echo"We recomend some exercise to avoid gaining weight and keep muscle atrophy at bay <br>";
					}
				}
				
			}
			
			
			
		?>
		
		<!--Your survey answers-->
		<h3>Your questionnaire answers</h3>
		Hello, <?php echo $_POST["name"]; ?><br>
		<!--Q1-->
		Your education level is: <?php echo $_POST["education"];?><br>
		<!--Q2-->
		You self study for <?php echo $_POST["StudyPerWeek"];?> hours a week<br>
		<!--Q3-->
		And can remember what you study <?php echo $_POST["memory"];?><br>
		<!--Q4-->
		You lose focus by <?php echo $_POST["Reason"]; ?><br>
		<!--Q5-->
		You suggest improving your learning experience by:<?php echo $_POST["LearnExp"]; ?><br>
		<!--Q6-->
		You play on average <?php echo $_POST["PlayTime"]; ?> hours a day<br>
		<!--Q7-->
		while sleeping <?php echo $_POST["SleepTime"]; ?><br>
		<!--Q8-->
		and sleep for <?php echo $_POST["SleepLength"]; ?> hours every night<br>
		<!--Q9-->
		You snack <?php echo $_POST["Snack"]; ?><br>
		<!--Q10-->
		and exercise <?php echo $_POST["Exercise"]; ?><br>
		
		<!--Return button-->
		<form action="AssignmentMLWH.php" method="post">
			<button onclick >
				<p>Take the survey again?</p>
			</button>
		</form>

	</body>
</html>