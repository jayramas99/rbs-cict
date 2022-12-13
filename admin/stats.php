<?php  include('../session.php'); ?>
<?php  include('header.php'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
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
    width: 70%;
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
<script>
	$(document).ready(function(){
		$("#myModal2").modal('show');
	});
</script>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                <!--/span-->
                <div class="span9" id="content" style="margin-left:400px;">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><h1>STUDENT INFO</h1></div>
                            </div>
                            <div style="width:80%;height:100%;margin-left:10%;">
                            <?php

$session_id = $_GET['id'];

                            $school_year_query = mysqli_query($conn,"select * from school_year order by school_year DESC")or die(mysqli_error());
                            $school_year_query_row = mysqli_fetch_array($school_year_query);
                            $school_year = $school_year_query_row['school_year'];
                            $idget = $_GET['id'];
                            $query = mysqli_query($conn,"select * from student where student_id = '$idget' ")or die(mysqli_error());
					$row = mysqli_fetch_array($query);
					$student_id = $row['student_id'];	
                            
                            
                            
                            ?>
<br>
<br>
<center>
                    <img src="<?php echo $row['location'];?>" alt="Student Picture" style="width:200px;height;200px;border-radius:10px;">
                    <h2><?php echo $row['firstname'];?>,<?php echo $row['lastname'];?></h2>
                    <h3><?php echo $row['strand'];?></h3>




                    <div class="block" >
                            <div class="navbar navbar-inner block-header" >
                              
									<?php $query = mysqli_query($conn,"select * from teacher_class_student
														LEFT JOIN teacher_class ON teacher_class.teacher_class_id = teacher_class_student.teacher_class_id 
														LEFT JOIN class ON class.class_id = teacher_class.class_id 
														LEFT JOIN subject ON subject.subject_id = teacher_class.subject_id
														LEFT JOIN teacher ON teacher.teacher_id = teacher_class.teacher_id
														where student_id = '$student_id' and school_year = '$school_year'
														")or die(mysqli_error());
														$count = mysqli_num_rows($query);
									?>
                                    <h2>See Result to there Assessment</h2>
							
                            </div>
                            
                            <div class="block-content collapse in">
                                <div>
							
  										<ul	 id="da-thumbs" class="da-thumbs">
													<?php
														if ($count != '0'){
														while($row = mysqli_fetch_array($query)){
														$id = $row['teacher_class_id'];	
													?>
											<li>
												<a href="stats.php<?php echo '?id='.$id; ?>&studid=<?php echo $student_id;?>">
														<img src ="<?php echo $row['thumbnails'] ?>" width="124" height="140" class="img-polaroid">
													<div>
													<span>
													<p><?php echo $row['class_name']; ?></p>
													
													</span>
													</div>
												</a>
												<p class="class"><?php echo $row['class_name']; ?></p>
												<p class="subject"><?php echo $row['subject_code']; ?></p>
												<p class="subject"><?php echo $row['firstname']." ".$row['lastname']?></p>
													
											
											</li>
								
			
									<?php }}else{ ?>
									<div class="alert alert-info"> You are currently not enroll to your class</div>
									<?php } ?>	
									</ul>
                                   
                                </div>
                            </div>
                               
                        </div>

</center>
<br>
<br>





                            </div>
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                
                
                 
                 
                </div>
            </div>
    
       
        </div>
        


        <div id="myModal2" class="modal fade" data-bs-backdrop="static" tabindex="-1"  >
        <div class="modal-dialog" style="width:1200px;">
            <div class="modal-content" style="width:1300px;height:auto;margin-left:-410px;">
            
                <div class="modal-header">
                    <h5 class="modal-title">Student Statistic</h5>
                    <button  type="button" onclick="window.location.href='student_info.php?id=<?php echo $student_id = $_GET['id'];?>'" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" style="background-color:white;width:1270px;height:1400px;">
                <br>
                <center>
							<br>
						<h1 style="background-color:#01b3a5;color:white;border-radius:10px;"><b>RESULT</b></h1>
						<hr>
						<br>
						</center>
          









                        <div style="width:406px;height:500px;position:absolute">
						<center>
						<h3 style="background-color:#01b3a5;color:white;border-radius:10px;"><b>PASSING GRADE 70%</b></h3>
						<br>
</center>
<div class="chart" style="position:absolute;">
     
     <ul class="bars">	

     <?php



$sql_sc = "SELECT * FROM student_class_quiz_main where student_id = '$session_id'";
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
$sty = "style='background-color:#02b2a5;'";
}
$grandtotal2 = 0;

$grandtotal2 = round(100*($topic2/$limit2));
if($grandtotal2 <= 70)
{
$sty2 = "style='background-color:red;'";
}
else{
$sty2 = "style='background-color:#02b2a5;'";
}
$grandtotal3 = 0;

$grandtotal3 = round(100*($topic3/$limit3));
if($grandtotal3 <= 70)
{
$sty3 = "style='background-color:red;'";
}
else{
$sty3 = "style='background-color:#02b2a5;'";
}
$grandtotal4 = 0;

$grandtotal4 = round(100*($topic4/$limit4));
if($grandtotal4 <= 70)
{
$sty4 = "style='background-color:red;'";
}
else{
$sty4 = "style='background-color:#02b2a5;'";
}

$grandtotal5 = 0;

$grandtotal5 = round(100*($topic5/$limit5));
if($grandtotal5 <= 70)
{
$sty5 = "style='background-color:red;'";
}
else{
$sty5 = "style='background-color:#02b2a5;'";
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
$sql_sc = "SELECT * FROM student_class_quiz_main where student_id = '$session_id'";
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
					</div>
					<div style="float:right;">
					<p><?php echo $topic1;?> Out of <?php echo $limit1;?>  &nbsp;&nbsp;<?php echo $status1?></p>
					<p><?php echo $topic2;?> Out of <?php echo $limit2;?>  &nbsp;&nbsp;<?php echo $status2?></p>
					<p><?php echo $topic3;?> Out of <?php echo $limit3;?>  &nbsp;&nbsp;<?php echo $status3?></p>
					<p><?php echo $topic4;?> Out of <?php echo $limit4;?>  &nbsp;&nbsp;<?php echo $status4?></p>
					<p><?php echo $topic5;?> Out of <?php echo $limit5;?>  &nbsp;&nbsp;<?php echo $status5?></p>
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



$sql_pi = "SELECT * FROM student_class_quiz_main where student_id = '$session_id'";
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
var xValues = ["Correct", "Incorrect"];
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





						




					   








                 








                <br>
                </div>
              
                <div class="modal-footer">
                
                    <button type="button" onclick="window.location.href='student_info.php?id=<?php echo $student_id = $_GET['id'];?>'"  class="btn btn-primary" >Close</button>
                    
                </div>
                 
            </div>
        </div>
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


var xValues = ["Correct", "Incorrect"];
var yValues = [<?php echo $correct;?>, <?php echo $alltotal-$correct;?>];
var barColors = [
  "#9dd1b1",
  "#dd5f5c",

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
      text: "OverAll"
    }
  }
});






    </script>



        
	<?php include('script.php'); ?>
    </body>

