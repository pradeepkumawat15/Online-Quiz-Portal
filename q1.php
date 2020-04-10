
<html>
<body>
<div id="qes1">
<form action="q1.php" method="POST">
 <h3>1) Entomology is the science that studies ?</h3>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-A" value="A" />
                        <label for="answers1-A">A) Behaviour of Humans</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-B" value="B" />
                        <label for="answers1-B">B) Insects </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-C" value="C" />
                        <label for="answers1-C">C) The Origin and history of technical and scientific terms</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="answers1" id="answers1-D" value="D" />
                        <label for="answers1-D">D) The formation of Rocks </label>
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
	
	header("refresh:0; url=q2.php");
}
elseif ( $answer1 == "A" OR $answer1 == "C" OR $answer1 == "D" )
{
	echo "<script>alert('You Lost')</script>";
	header("refresh:2; url=q1.php");
}
?>

</body>
</html>
