<?php
    include('common/header.php');
	$currentPage = 'gallery';
    include('common/left-menu.php');

	$photoQry = "SELECT * FROM tbl_photo_gallery";
	$ExcutephotoQry = mysqli_query($conn, $photoQry);
    	
?>
<div id="page-wrapper">
	<div id="page-inner">
            <div class="row">
                <div class="col-md-12">
					 <h1 class="page-header">
                            Training Programme
                      </h1>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading text-right">
                             <button class="btn btn-primary">Add Training Program</button>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>photos</th>
                                            <th>Status</th>
                                            <th>Create date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										if(mysqli_num_rows($ExcutephotoQry) > 0){
											while($photogallery = mysqli_fetch_assoc($ExcutephotoQry)) {
												$name = $photogallery["name"];
												$image = $photogallery["image"];
												$photos = $photogallery["photos"];
												$status = $photogallery["status"];
												$created_date = $photogallery["created_date"];
										?>
										<tr class="odd gradeX">
                                            <td><?php echo ucfirst($name);?></td>
											<td><?php echo $image;?></td>
											<td><?php echo $photos;?></td>
                                            <td><?php echo ($status == 1)?'Active':'In Active';?></td>
                                            <td><?php echo $created_date;?></td>
											<td>
												<button class="btn btn-primary">Edit</button>
												<button class="btn btn-danger">Delete</button>
											</td>
                                            
                                        </tr>
										<?php
											} 
											} else {
												echo "<tr><td>No Sliders Found</td></tr>";
											}
										?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
          <!-- /. ROW  -->
    </div>
	<footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p></footer>
</div>
<!-- /. PAGE INNER  -->
<?php
    include('common/footer.php');
?> 
<script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>