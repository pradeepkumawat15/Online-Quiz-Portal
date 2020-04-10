<html>
<body>
<div>
<form action="q5.php" method="POST">
 <h3>5) Galileo was an astronomer who ?</h3>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-A" value="A" />
                        <label for="answers1-A">A) developed the telescope</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-B" value="B" />
                        <label for="answers1-B">B) discovered four satellites of Jupiter </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-C" value="C" />
                        <label for="answers1-C">C) discovered that the movement of pendulum produces a regular time measurement</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-D" value="D" />
                        <label for="answers1-D">D) All the above. </label>
                    </div>
<br>
<br>
<center><input type="submit" name="signupbutton" value="Submit"/></center>
</div>
</form>
<?php
$answer1 = $_POST['answers1'];            
if ($answer1 == "A")
{
	
	header("refresh:0; url=user.php");
}
elseif ( $answer1 == "B" OR $answer1 == "C" OR $answer1 == "D" )
{
	echo "<script>alert('You Lost')</script>";
	header("refresh:2; url=q1.php");
}
?>

</body>
</html>
