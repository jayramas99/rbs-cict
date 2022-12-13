<?php include('session.php'); ?>
<?php include('header_dashboard.php'); ?>
<?php $get_id = $_GET['id']; ?>

<style>
	hr{
		background-color: black; height: 1px; border: 0;
	}



	
canvas{
	display:none;
}








.chart{
    width: 600px;
    height: 100px;
    display: block;

  }
  .bars{
    color: BLACK;
    font-size: 12px;
    font-weight: 600;
    background: white;
    margin: 0;
    padding: 0;
    display: inline-block;
    width: 410px;
    height: 500px;
    box-shadow: 0 0 10px 0 #555;
    border-radius: 5px;
  }
  
  .bars li{
    display: table-cell;
    width: 80px;
    height: 500px;
    position: relative;
  }
  
  .bars span{
    width: 50%;
    position: absolute;
    bottom: -30px;
    margin-left:-30px;
  }
  
  .bars .bar{
    display: block;
    background: #02b2a5;
    width: 50px;
    position: absolute;
    bottom: 0;
    margin-left: 10px;
    text-align: center;
    box-shadow: 0 0 10px 0 rgba(23, 192, 235, 0.5);
    transition: 0.5s;
    transition-property: background, box-shadow;
  }
  .score{
	box-shadow: 0 0 10px 0 #555;
	border-radius:10px;
  }
  .chars{
	box-shadow: 0 0 10px 0 #555;
	border-radius:10px;
  }
  
  .bars .bar:hover{
    background: #55EFC4;
    box-shadow: 0 0 10px 0 rgba(85, 239, 196, 0.5);
    cursor: pointer;
  }
  
  .bars .bar:before{
    color: green;
    content: attr(data-percentage) '%';
    position: relative;
    bottom: 20px;
  }
	</style>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

    <body>
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('progress_link_student.php'); ?>
                <div class="span4" id="content" style="margin-left:400px;">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
				
										<?php $class_query = mysqli_query($conn,"select * from teacher_class
										LEFT JOIN class ON class.class_id = teacher_class.class_id
										LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
										where teacher_class_id = '$get_id'")or die(mysqli_error());
										$class_row = mysqli_fetch_array($class_query);
										$class_id = $class_row['class_id'];
										$school_year = $class_row['school_year'];
										?>
				
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><?php echo $class_row['subject_code']; ?></a> <span class="divider">/</span></li>
							<li><a href="#">School Year: <?php echo $class_row['school_year']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>Statistics</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                       <div style="width:1100px;height:700px;">
						<center>
							<br>
						<h1 style="background-color:#f59d1f;color:white;border-radius:10px;"><b>RESULT</b></h1>
						<hr>
						<br>
						</center>
						
						<div style="width:406px;height:500px;position:absolute">
						<center>
						<h3 style="background-color:#f59d1f;color:white;border-radius:10px;"><b>PASSING GRADE 70%</b></h3>
						<br>
</center>
						<div class="chart" style="position:absolute;">
     
						<ul class="bars">	

						<?php



$sql_sc = "SELECT * FROM student_class_quiz_main where student_id = '$session_id' and grade != ''";
$result_sc = $conn->query($sql_sc);

if ($result_sc->num_rows > 0) {
  // output data of each row
  while($row_sc = $result_sc->fetch_assoc()) {



    $topic1 = $row_sc['topic1'];
	$topic2 = $row_sc['topic2'];
	$topic3 = $row_sc['topic3'];
	$topic4 = $row_sc['topic4'];
	$topic5 = $row_sc['topic5'];

	$limit1 = $row_sc['limit1'];
	$limit2 = $row_sc['limit2'];
	$limit3 = $row_sc['limit3'];
	$limit4 = $row_sc['limit4'];
	$limit5 = $row_sc['limit5'];
  }
$grandtotal = 0;

$grandtotal = round(100*($topic1/$limit1));
if($grandtotal <= 70)
{
	$sty = "style='background-color:red;'";
}
else{
	$sty = "style='background-color:#ffdc5e;'";
}
$grandtotal2 = 0;

$grandtotal2 = round(100*($topic2/$limit2));
if($grandtotal2 <= 70)
{
	$sty2 = "style='background-color:red;'";
}
else{
	$sty2 = "style='background-color:#ffdc5e;'";
}
$grandtotal3 = 0;

$grandtotal3 = round(100*($topic3/$limit3));
if($grandtotal3 <= 70)
{
	$sty3 = "style='background-color:red;'";
}
else{
	$sty3 = "style='background-color:#ffdc5e;'";
}
$grandtotal4 = 0;

$grandtotal4 = round(100*($topic4/$limit4));
if($grandtotal4 <= 70)
{
	$sty4 = "style='background-color:red;'";
}
else{
	$sty4 = "style='background-color:#ffdc5e;'";
}

$grandtotal5 = 0;

$grandtotal5 = round(100*($topic5/$limit5));
if($grandtotal5 <= 70)
{
	$sty5 = "style='background-color:red;'";
}
else{
	$sty5 = "style='background-color:#ffdc5e;'";
}

?>   
      
        <li><div class="bar" data-percentage="<?php echo $grandtotal;?>" <?php echo $sty;?>></div><span >IT 306 </span></li>
        <li><div class="bar" data-percentage="<?php echo $grandtotal2;?>" <?php echo $sty2;?>></div><span>IT 307 </span></li>
        <li><div class="bar" data-percentage="<?php echo $grandtotal3;?>" <?php echo $sty3;?>></div><span>IT 311</span></li>
        <li><div class="bar" data-percentage="<?php echo $grandtotal4;?>" <?php echo $sty4;?>></div><span>IT 312</span></li>
        <li><div class="bar" data-percentage="<?php echo $grandtotal5;?>" <?php echo $sty5;?>></div><span>IT 403 </span></li>
      
	<?php 
	} else {

	}
	?>
     </ul>
    </div>
    <script type="text/javascript">
    $(function(){
      $('.bars li .bar').each(function(key, bar){
        var percentage = $(this).data('percentage');
        $(this).animate({
          'height' : percentage + '%'
        },1000);
      });
    });
    </script>

						</div>

						<div style="width:566px;height:590px;position:absolute;margin-left:420px">
						<div style="width:736px;height:260px;" class="score">
						<br>
					<h4 style="margin-left:100px">Topic</h4>
					<h4 style="margin-left:300px;margin-top:-30px;">Score</h4>
<?php
$sql_sc = "SELECT * FROM student_class_quiz_main where student_id = '$session_id' and grade != ''";
$result_sc = $conn->query($sql_sc);

if ($result_sc->num_rows > 0) {
  // output data of each row
  while($row_sc = $result_sc->fetch_assoc()) {
    $topic1 = $row_sc['topic1'];
	$topic2 = $row_sc['topic2'];
	$topic3 = $row_sc['topic3'];
	$topic4 = $row_sc['topic4'];
	$topic5 = $row_sc['topic5'];

	$limit1 = $row_sc['limit1'];
	$limit2 = $row_sc['limit2'];
	$limit3 = $row_sc['limit3'];
	$limit4 = $row_sc['limit4'];
	$limit5 = $row_sc['limit5'];

	$bleble = $row_sc['grade'];
  }
if($topic1 >= $limit1*0.70)
{
	$status1 = "<b style='color:green'>Passed</b>";
}
else{
	$status1 = "<b style='color:red'>Failed</b>";
}
if($topic2 >= $limit2*0.70)
{
	$status2 = "<b style='color:green'>Passed</b>";
}
else{
	$status2 = "<b style='color:red'>Failed</b>";
}
if($topic3 >= $limit3*0.70)
{
	$status3 = "<b style='color:green'>Passed</b>";
}
else{
	$status3 = "<b style='color:red'>Failed</b>";
}
if($topic4 >= $limit4*0.70)
{
	$status4 = "<b style='color:green'>Passed</b>";
}
else{
	$status4 = "<b style='color:red'>Failed</b>";
}
if($topic5 >= $limit5*0.70)
{
	$status5 = "<b style='color:green'>Passed</b>";
}
else{
	$status5 = "<b style='color:red'>Failed</b>";
}

?>




<div style="width:45%;margin-left:70px;">
					<div style="float:left;">
					<p>IT 306 ELECTIVE 1</p>
					<p>IT 307 ELECTIVE 2</p>
					<p>IT 311 ELECTIVE 3</p>
					<p>IT 312 ELECTIVE 4</p>
					<p>IT 403 ELECTIVE 5</p>
					<hr>
					<p style="margin-top:-10%;">Total Earned Points</p>
					</div>
					<div style="float:right;">
					<p><?php echo $topic1;?> Out of <?php echo $limit1;?>  &nbsp;&nbsp;<?php echo $status1?></p>
					<p><?php echo $topic2;?> Out of <?php echo $limit2;?>  &nbsp;&nbsp;<?php echo $status2?></p>
					<p><?php echo $topic3;?> Out of <?php echo $limit3;?>  &nbsp;&nbsp;<?php echo $status3?></p>
					<p><?php echo $topic4;?> Out of <?php echo $limit4;?>  &nbsp;&nbsp;<?php echo $status4?></p>
					<p><?php echo $topic5;?> Out of <?php echo $limit5;?>  &nbsp;&nbsp;<?php echo $status5?></p>
					<hr>
					<p style="margin-top:-10%;"><?php echo $bleble;?></p>
                    </div>
                    </div>



<?php
} else {

}
?>
					
	                    </div>


						</div>
	
						<div class="chars" style="width:366px;height:300px;background-color:white;position:absolute;margin-left:420px;margin-top:280px;">
						<center>
						<?php



$sql_pi = "SELECT * FROM student_class_quiz_main where student_id = '$session_id' and grade != ''";
$result_pi  = $conn->query($sql_pi );

if ($result_pi ->num_rows > 0) {
  // output data of each row
  while($row_pi = $result_pi ->fetch_assoc()) {
	$correct = $row_pi['final'];
	$alltotal = $row_pi['items'];
	
  }

?>
						<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
						<canvas id="myChart" style="width:100%;height:250px;"></canvas>

						<script>
var xValues = ["Correct Answer", "Incorrect Answer"];
var yValues = [<?php echo $correct;?>, <?php echo $alltotal-$correct?>];
var barColors = [
  "green",
  "red",

];

new Chart("myChart", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Overall"
    }
  }
});
</script>
<?php }
else{}
?>
						</center>
						

						</div>




						<div class="chars" style="width:366px;height:300px;background-color:white;position:absolute;margin-left:790px;margin-top:280px;">
						<center>
							<br>
						<p>You have Excelled in the following topics</p>
						<hr>
						<?php
						$result_exams = 0;
$sql_sc = "SELECT * FROM student_class_quiz_main where student_id = '$session_id' and grade != ''";
$result_sc = $conn->query($sql_sc);

if ($result_sc->num_rows > 0) {
  // output data of each row
  while($row_sc = $result_sc->fetch_assoc()) {
    $topic1 = $row_sc['topic1'];
	$topic2 = $row_sc['topic2'];
	$topic3 = $row_sc['topic3'];
	$topic4 = $row_sc['topic4'];
	$topic5 = $row_sc['topic5'];

	$limit1 = $row_sc['limit1'];
	$limit2 = $row_sc['limit2'];
	$limit3 = $row_sc['limit3'];
	$limit4 = $row_sc['limit4'];
	$limit5 = $row_sc['limit5'];
  }
if($topic1 >= $limit1*0.70)
{
	$result_exams = $result_exams + 1;
	echo $status1 = "<p>IT 306 ELECTIVE 1</p>";
}
else{
	
}
if($topic2 >= $limit2*0.70)
{
	$result_exams = $result_exams + 1;
	echo	$status2 = "<p>IT 307 ELECTIVE 2</p>";
}
else{
	
}
if($topic3 >= $limit3*0.70)
{
	$result_exams = $result_exams + 1;
	echo	$status3 = "<p>IT 311 ELECTIVE 3</p>";
}
else{
	
}
if($topic4 >= $limit4*0.70)
{
	$result_exams = $result_exams + 1;
	echo	$status4 = "<p>IT 312 ELECTIVE 4</p>";
}
else{

}
if($topic5 >= $limit5*0.70)
{
	$result_exams = $result_exams + 1;
	echo	$status5 = "<p>IT 403 ELECTIVE 5</p>";
}
else{
	
}


if($result_exams == 5)
{
	
	echo '<hr>';

	echo "<a href='certification.php?id=$session_id' target='_blank'><button style= 'background-color: #87ceeb'><i class='icon-download'></i></button>&nbsp&nbsp&nbsp&nbspClick here to download your certificate</a>";
}

}
else{

	

}
?>

						</center>


						</div>




					   </div>
                        <!-- /block -->
                    </div>


                </div>
				
				
				<!--
				                <div class="span5" id="content">
                     <div class="row-fluid">
					   
				
							
				
					     <ul class="breadcrumb">
		
							<li><a href="#"><b>..</b></a></li>
						</ul>
						
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
							    <div id="" class="muted pull-left"><h4> Practice Quiz Progress</h4></div>
							</div>
                            <div class="block-content collapse in">
                                <div class="span12">
			
								<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
										<thead>
										        <tr>
												<th>Quiz Title</th>
												<th>Description</th>
												<th>Quiz Time (In Minutes)</th>
												<th></th>
												</tr>
										</thead>
										<tbody>
                              		<?php
										$query = mysqli_query($conn,"select * FROM class_quiz 
										LEFT JOIN quiz on class_quiz.quiz_id = quiz.quiz_id
										where teacher_class_id = '$get_id' order by class_quiz_id DESC ")or die(mysqli_error());
										while($row = mysqli_fetch_array($query)){
										$id  = $row['class_quiz_id'];
										$quiz_id  = $row['quiz_id'];
										$quiz_time  = $row['quiz_time'];
									
										$query1 = mysqli_query($conn,"select * from student_class_quiz where class_quiz_id = '$id' and student_id = '$session_id'")or die(mysqli_error());
										$row1 = mysqli_fetch_array($query1);
										$grade = $row1['grade'];

									?>          
										<?php if ($grade ==""){
										
										}else{ ?>	
										<tr>                     
										 <td><?php echo $row['quiz_title']; ?></td>
                                         <td><?php  echo $row['quiz_description']; ?></td>                                     
                                         <td><?php  echo $row['quiz_time'] / 60; ?></td>                                     
                                         <td width="200">
									
										<b>Already Taken Score <?php echo $grade; ?></b>
						
										</td>            
														<script type="text/javascript">
														$(document).ready(function(){
															$('#<?php echo $id; ?>Take This Quiz').tooltip('show');
															$('#<?php echo $id; ?>Take This Quiz').tooltip('hide');
														});
														</script>										 
										</tr>
										<?php } ?>
						 <?php } ?>
										</tbody>
									</table>
						
                                </div>
                            </div>
                        </div>
                       
                    </div>


                </div>
													-->
				<?php /* include('downloadable_sidebar.php') */ ?>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>

 
	
    </body>

</html>