<?php
    include('common/header.php');
	$currentPage = 'home_slider';
    include('common/left-menu.php');
	
	$homeQry = "SELECT * FROM tbl_home_slider";
	$ExcuteHomeQry = mysqli_query($conn, $homeQry);
    	
?>
<div id="page-wrapper">
	<div id="page-inner">
            <div class="row">
                <div class="col-md-12">
					 <h1 class="page-header">
                            Home Sliders
                      </h1>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading text-right">
                             <button class="btn btn-primary">Add New Slider</button>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Url</th>
                                            <th>Status</th>
                                            <th>Create date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										if(mysqli_num_rows($ExcuteHomeQry) > 0){
											while($homeSliders = mysqli_fetch_assoc($ExcuteHomeQry)) {
												$title = $homeSliders["title"];
												$image = $homeSliders["image"];
												$url = $homeSliders["link"];
												$status = $homeSliders["status"];
												$created_date = $homeSliders["created_date"];
											
										?>
										<tr class="odd gradeX">
                                            <td><?php echo ucfirst($title);?></td>
                                            <td><image src="../uploads/home-slider/<?php echo $image;?>" style="height:50px;width:50px;" /></td>
                                            <td><?php echo $url;?></td>
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