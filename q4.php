<html>
<body>
<div>
<form action="q4.php" method="POST">
 <h3>4) Which one of the following was the first fort constructed by the British in India? ?</h3>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-A" value="A" />
                        <label for="answers1-A">A) Fort William</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-B" value="B" />
                        <label for="answers1-B">B) Fort St. George </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-C" value="C" />
                        <label for="answers1-C">C) Fort St. David</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-D" value="D" />
                        <label for="answers1-D">D) Fort St. Angelo </label>
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
	
	header("refresh:0; url=q5.php");
}
elseif ( $answer1 == "B" OR $answer1 == "C" OR $answer1 == "D" )
{
	echo "<script>alert('You Lost')</script>";
	header("refresh:2; url=q1.php");
}
?>

</body>
</html>
