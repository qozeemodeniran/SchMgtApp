
<?php  

$db = mysqli_connect('localhost', 'root', '', 'schmgt');
if(isset($_POST['Submit']))  
{  

$checkbox1=$_POST['subject'];  
$chk="";  


foreach ($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
   $in_ch = mysqli_query($db,"INSERT INTO students(courses) VALUES ('$chk')");
   mysqli_query($db, $in_ch);

if($in_ch==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
   header('location: profile2.php');
}  

?>