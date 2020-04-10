<html>
<body>
<div id="qes3">
<form action="q3.php" method="POST">
 <h3>3) The world smallest country is ?</h3>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-A" value="A" />
                        <label for="answers1-A">A) Canada</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-B" value="B" />
                        <label for="answers1-B">B) Russia </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-C" value="C" />
                        <label for="answers1-C">C) Maldives</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-D" value="D" />
                        <label for="answers1-D">D) Vatican City </label>
                    </div>
<br>
<br>
<center><input type="submit" name="signupbutton" value="Submit"/></center>
</div>
</form>
<?php
$answer1 = $_POST['answers1'];            
if ($answer1 == "B")
{
	
	header("refresh:0; url=q4.php");
}
elseif ( $answer1 == "A" OR $answer1 == "C" OR $answer1 == "D" )
{
	echo "<script>alert('You Lost')</script>";
	header("refresh:2; url=q1.php");
}
?>

</body>
</html>
