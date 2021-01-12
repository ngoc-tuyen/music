<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="insert_song.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="form_box">

	 <form action="" method="post" enctype="multipart/form-data">
	   
	   <table align="center" width="100%">
	     
		 <tr>
		   <td colspan="7">
		   <h2>Add Product</h2>
			   
		   <div class="border_bottom"></div><!--/.border_bottom -->
		   </td>
		 </tr>
		 
		 <tr>
		   <td><b>Song Title:</b></td>
		   <td><input type="text" name="Song_Title" size="60" required/></td>
		 </tr>
		 
		 <tr>
		   <td><b>Song genre:</b></td>
		   <td>
		    <select name="Song_Genre">
			  <option>Select a genre</option>
			  <option>US-UK</option>
			  <option>Korea</option>
			  <option>Chinese</option>
			  <option>Vietnamese</option>	
			  
			</select>
		   </td>
		   
		 </tr>
		
        <tr>
		  <td><b>Song Image: </b></td>
		  <td><input type="file" name="Song_Image" />
	      
		</tr>
		
		<tr>
		  <td><b>Song Price: </b></td>
		  <td><input type="text" name="Song_Price" required/></td>
		</tr>
		  
		 <tr>
		  <td><b>Song File: </b></td>
		  <td><input type="file" name="Song_File" /></td>
		  
		</tr>
		 <tr>
		  <td><b>Song Name: </b></td>
		  <td><input type="text" name="Song_Name" /></td>
		  
		</tr>
		   <tr>
		  <td><b>Song Id: </b></td>
		  <td><input type="text" name="Song_Id" /></td>
		  
		</tr>
		
		<tr>
		   <td></td>
		   <td colspan="7">
			<input type="submit" name="insert_song" value="Add song"/>
			<div class="exit">
			<a href="index.php" >exit</a>
			</div>
			</td>
			
		</tr>
	   </table>
	   
	 </form>
	 
  </div><!-- /.form_box -->

<?php 
	$con = new mysqli('localhost', 'root', '', 'sdlc');
if (!$con) 
	{
		echo "ket noi that bai";
	}

if(isset($_POST['insert_song'])){
   $Song_Title = $_POST['SongTitle'];
   $Song_Name = $_POST['SongName'];
   $Song_Id = $_POST['SongId'];
   $Song_Genre = $_POST['SongGenre'];
   $Song_Price = $_POST['SongPrice'];
   $Song_File = $_FILES['SongFile']['name']; 
  
   // Getting the image from the field
   $Song_Image  = $_FILES['SongImage']['name'];
   $Song_Image_tmp = $_FILES['SongImage']['tmp_name'];
   
   
   
   $insert_song = " insert into song (SongTitle,SongGenre,SongId,SongName,SongPrice,SongFile,SongImage) 
   values ('$Song_Title','$Song_Genre', '$Song_Id','$Song_Name','$Song_Price','$Song_File','$Song_Image',) ";

   $insert_song = mysqli_query($con, $insert_song);
   
   if($insert_song){
    echo "<script>alert('Song Has Been inserted successfully!')</script>";
	
	echo "<script>window.open('index.php?insert_Song','_self')</script>";
   }
   
   }
?>
</body>
</html>