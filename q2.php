
<html>
<body>
<div id="qes2">
<form action="q2.php" method="POST">
 <h3>2) Corey Anderson who has hit the fastest ODI century in 36 balls is from ?</h3>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-A" value="A" />
                        <label for="answers1-A">A)England</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-B" value="B" />
                        <label for="answers1-B">B) Australia </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-C" value="C" />
                        <label for="answers1-C">C) West Indies</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-D" value="D" />
                        <label for="answers1-D">D)New Zealand </label>
                    </div>
<br>
<br>
<center><input type="submit" name="signupbutton" value="Submit"/></center>
</div>
</form>
<?php
$answer1 = $_POST['answers1'];            
if ($answer1 == "D")
{
	
	header("refresh:0; url=q3.php");
}
elseif ( $answer1 == "A" OR $answer1 == "C" OR $answer1 == "B" )
{
	echo "<script>alert('You Lost')</script>";
	header("refresh:2; url=q1.php");
}
?>

</body>
</html>
