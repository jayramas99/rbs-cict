			
						
						<ul	  class="da-thumbs">
										<?php $query = mysqli_query($conn,"select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
                                        LEFT JOIN teacher ON teacher.teacher_id = teacher_class.teacher_id
										 ")or die(mysqli_error());
										$count = mysqli_num_rows($query);
										
										if ($count > 0){
										while($row = mysqli_fetch_array($query)){
										$id = $row['teacher_class_id'];
                                        $tid = $row['teacher_id'];
				


										
										
										
										$querys = mysqli_query($conn,"select * from teacher WHERE teacher_id = '$tid'") or die (mysqli_error($conn));
										while($file=mysqli_fetch_array($querys)){
												
										   $f_name =  $file['firstname'];
										   $l_name =  $file['lastname'];
										   
										
										
										


										?>
											<li id="del<?php echo $id; ?>">
											<a href="my_students.php<?php echo '?id='.$id; ?>">
											<img src ="admin/<?php echo $row['thumbnails'] ?>" width="124" height="140" class="img-polaroid" alt="">
													<div>
													<span><p><?php echo $row['class_name']; ?></p></span>
													</div>
												</a>
														
													<div>
													<span><p>
													<center>
													<?php echo $f_name;?>
													<?php echo $l_name;?>
										            </center>
													</p></span>
                                                
													</div>
												
												<p class="class"><?php echo $row['class_name']; ?></p>
												<p class="subject"><?php echo $row['subject_title']; ?></p>
												<a href="#<?php echo $id; ?>" data-toggle="modal">Remove</a>	
											
											</li>
										<?php include("delete_class_modal.php"); ?>
									<?php }} }else{ ?>
									<div class="alert alert-info">< No Class Currently Added</div>
									<?php  } ?>
									</ul>