<?php
    include('common/header.php');
	$currentPage = 'news';
    include('common/left-menu.php');

	$newsQry = "SELECT * FROM tbl_news";
	$ExcutenewsQry = mysqli_query($conn, $newsQry);
    	
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
                                            <th>Title</th>
                                            <th>Description</th>
											<th>Date</th>
											<th>Gallery</th>
                                            <th>Status</th>
                                            <th>Create date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										if(mysqli_num_rows($ExcutenewsQry) > 0){
											while($news = mysqli_fetch_assoc($ExcutenewsQry)) {
												$title = $news["title"];
												$description = $news["description"];
												$date = $news["date"];
												$gallery = $news["gallery"];
												$status = $news["status"];
												$created_date = $news["created_date"];
										?>
										<tr class="odd gradeX">
                                            <td><?php echo ucfirst($title);?></td>
											<td><?php echo $description;?></td>
											<td><?php echo $date;?></td>
                                            <td><?php echo $gallery;?></td>
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