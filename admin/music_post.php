<?php include('connection.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>List of Products</b>
						<span class="float:right"><a class="btn btn-primary btn-block btn-sm col-sm-2 float-right" href="?add_music" id="new_product">
					<i class="fa fa-plus"></i> New Entry
				</a></span>
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="">Img</th>
									<th class="">Music</th>
									<th class="">Author</th>
                                    <th class="">Type</th>
                                    <th class="">Date</th>
									
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
                                $i=0;
                                $sql="select * from post_details order by post_id DESC";
                                $result=mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_assoc($result)){
								
								?>
								<tr data-id= '<?php echo $row['id'] ?>'>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										 <div class="row justify-content-center">
										 	<img src="<?php echo 'musicimage/'.$row['post_img'] ?>" alt="" height=100px>
										 </div>
									</td>
									
									<td class="">
										 <b><p>Title: <?php echo ucwords($row['post_title']) ?></p></b>
										 <p><small>Description: <b><?php echo $row['post_description'] ?></b></small></p>
									</td>
									<td class="">
										 <b><?php echo ucwords($row['author']) ?></b>
										 
									</td>
                                    <td class="">
										  <b><?php echo ucwords($row['post_type']) ?></b>
										 
									</td>
                                    <td class="">
										  <b><?php echo ucwords($row['post_date']) ?></b>
										 
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-outline-primary edit_product" type="button" data-id="<?php echo $row['post_id'] ?>" >Edit</button>
										<button class="btn btn-sm btn-outline-danger delete_product" type="button" data-id="<?php echo $row['post_id'] ?>">Delete</button>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	table td img{
		max-width:100px;
		max-height: :150px;
	}
	img{
		max-width:100px;
		max-height: :150px;
	}
</style>
