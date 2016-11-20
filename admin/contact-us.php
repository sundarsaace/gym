<?php
    include('common/header.php');
	$currentPage = 'contact';
    include('common/left-menu.php');

	$photoQry = "SELECT * FROM tbl_contact";
	$ExcutephotoQry = mysqli_query($conn, $photoQry);
    	
?>
<div id="page-wrapper">
	<div id="page-inner">
            <div class="row">
                <div class="col-md-12">
					 <h1 class="page-header">
                            Enquery details
                      </h1>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact Number</th>
                                            <th>Select Type</th>
                                            <th>Message</th>
											<th>Created date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										if(mysqli_num_rows($ExcutephotoQry) > 0){
											while($photogallery = mysqli_fetch_assoc($ExcutephotoQry)) {
												$name = $photogallery["name"];
												$email = $photogallery["email"];
												$contact_number = $photogallery["contact_number"];
												$selecttype = $photogallery["selecttype"];
												$message = $photogallery["message"];
												$created_date = $photogallery["created_date"];
										?>
										<tr class="odd gradeX">
                                            <td><?php echo ucfirst($name);?></td>
											<td><?php echo $email;?></td>
											<td><?php echo $contact_number;?></td>
                                            <td><?php echo $selecttype;?></td>
                                            <td><?php echo $message;?></td>
                                            <td><?php echo $created_date;?></td>
											<td>
												<button class="btn btn-primary">view</button>
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