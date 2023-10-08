<?php

if(isset($_POST['save']))
{
include 'connection.php';
$title=$_POST['name'];
$description=$_POST['description'];
$type=$_POST['type'];
$author=$_POST['author'];
//accessing udio file
$audio_vedio=$_FILES['file']['name'];
$temp_audio_vedio=$_FILES['file']['tmp_name'];
if($_FILES['file']['type']=='audio/mpeg' || $_FILES['file']['type']=='audio/mpeg3' || $_FILES['file']['type']=='audio/x-mpeg3' || $_FILES['file']['type']=='audio/mp3' || $_FILES['file']['type']=='audio/x-wav' || $_FILES['file']['type']=='audio/wav')
{ 
 $new_file_name=$_FILES['file']['name'];

 // Where the file is going to be placed
 $target_path = "../Audios/".$new_file_name;
 
 //target path where u want to store file.

move_uploaded_file($temp_audio_vedio, "$target_path");}
//accessing images
$image=$_FILES['image']['name'];
$temp_img=$_FILES['image']['tmp_name'];
move_uploaded_file($temp_img,"../musicimage/$image"); 
$sql="insert into post_details (post_title,post_description,post_type,author,audio_vedio_file,post_img,post_date) values('$title','$description','$type','$author','$audio_vedio','$image',NOW())";
$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('Successfully inserted the product')</script>";
    echo "<script>window.open('?music','_self')</script>";
}
else{
    echo "<script>alert('Not Successfully inserted the product')</script>";
}

}

?>
<div class="container-fluid">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<form action="" method="post" enctype="multipart/form-data">
					<hr>
					<div class="form-group row">
						<div class="col-md-4">
							<label for="" class="control-label">Music Title</label>
							<input type="text" class="form-control" name="name" required>
						</div>
					
					</div>
					
					<div class="form-group row">
						<div class="col-md-10">
							<label for="" class="control-label">Description</label>
							<textarea name="description" class="form-control" cols="30" rows="5" required></textarea>
						</div>
					</div>
                    <div class="form-group row">
						<div class="col-md-4">
							<label for="" class="control-label">Type</label>
							<input type="text" class="form-control" name="type" required>
						</div>
					
					</div>
                    <div class="form-group row">
						<div class="col-md-4">
							<label for="" class="control-label">Author</label>
							<input type="text" class="form-control" name="author" required>
						</div>
					
					</div>
					<div class=" row form-group">
						<div class="col-md-5">
							<label for="" class="control-label">Audio/vedio File</label>
							<input type="file" class="form-control" name="file" required>
						</div>

					
					<div class=" row form-group">
						<div class="col-md-5">
							<label for="" class="control-label">Vedio/Audio Image</label>
							<input type="file" class="form-control" name="image" required>
						</div>

						
					</div>
                    <br>
					<div class="row">
						<div class="col-md-12">
							<button class="btn btn-sm btn-block btn-primary col-sm-2" name="save"> Save</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

