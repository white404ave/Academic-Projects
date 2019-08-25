<?php
//array and displayForm function at the top
$classes = array("IT 1130"=>"Introduction to IT", "IT 1230"=>"Web Technologies", "IT1430"=>"Web Page Development", "IT 2333"=>"IT Infrastructure", "IT 3130"=>"Web App Design and Devel I", "IT 3131"=> "Web App Design and Devel II", "IT 3132"=> "Web Software", "IT 3233"=>"DB Design and Implementation", "IT 3234"=>"System Acq. Integr. & Imp", "IT 4130"=> "IT Issues and Management", "IT 4131"=>"IT Capstone Project", "IT 4234"=>"Datacenter Management", "IT 4335"=>"Netwrok Architecture", "IT 4790"=>"Internship in Info Tech", "IT 4890"=>"Directed Study in Info Tech", "IT 5090"=>"Advanced Datacenter Management", "IT 5135"=>"Data Analysis", "IT 5235"=>"Advanced Web Interfaces", "IT 5433"=>"Information Storage");

if (isset($_POST['submit'])){

$course = $_POST['course'];
$course = trim($course); 
$course = strtoupper($course); 
$description = $_POST['description']; 
$description = trim($description);
$description = strtoupper($description); 
//in_array for 6-3
foreach (($classes as $value) array_search("Introduction to IT",$classes)){
	echo "Description:".$classes[$description];
}else{

echo "Invalid Course Name"; 
	displayForm($classes);
}
}else{

displayForm($classes);

}
function displayForm($classes){ ?>
<form action = 'WhiteCW_6-3.php' method = 'post'> 
<table border = '1'> 
<tr><th>Course Code</th> 
<th>Course Title</th></tr> 
<?php 
foreach($classes as $row=>$description){?>
<tr>
<td><?php echo $row ;?></td>
<td><?php echo $description ;?></td>
<?php
}
echo "</table>"; 
?>
<p>"Course Title" <input type="text" name="description"/></p>
<p><input type = "Submit" value='send' name = "submit"/></p>
</form><?php
}
?>

