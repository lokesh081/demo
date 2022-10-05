<!DOCTYPE html>


<html>
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
	background:white;
}
.form-1,.container{
	text-align:center;
	height:auto;
	margin:auto;
	display:flex;
	flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 15px;	
	align-items:center;
	justify-content:center;
	
	
	}
	
	input {
    width: 50%;
	margin: 6px;
}
	
	.container{
	padding-top:10%;
	}
	
	.form-1{
		background:white;
		border-radius:30px;
		width:60%;
		height:auto;
		padding:20px;
		box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
	}

</style>
</head>
<body>

<div class="container">
<div style="text-align:center;padding:20px;">
<h2>Upload CSV to Database:)</h2></div>
<div class="form-1">
<p>Click on the "Choose File" button to upload a file:</p>

<form action="includes/process.php" method="POST" enctype="multipart/form-data">

  <input type="file" name="upload">
  <input type="submit" name="submit">
</form> 
</div> 
  <?php
  
    if(isset($_GET['update'])){
		  
		  echo'<div style="padding-top:10px;color:green;">'.$_GET["update"].' Entries Updated :)<div>';
		  
	  }
	  
    if(isset($_GET['inserted'])){
		  
		  echo'<div style="padding-top:10px;color:green;">'.$_GET["inserted"].' Entries Newly Added :)<div>';
		  
	  }
  
  if(isset($_GET['error'])){
  
	  if($_GET['error'] == 'invalidfile'){
		
		echo'<div style="padding-top:60px;color:red;">Plz Upload CSV File Type :(<div>';
		
	  }elseif($_GET['error'] == 'userexist'){
		  
		  echo'<div style="padding-top:60px;color:red;">User <b>'.$_GET['uname'].'</b> already exist :( <div>';
		  
	  }elseif($_GET['error'] == 'nofileuploaded'){
		  
		  echo'<div style="padding-top:60px;color:red;">No File is Submitted :(<div>';
		  
	  }
  }
  
  ?>
  



<div>
</body>
</html>