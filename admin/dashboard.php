<?php  include('../session.php'); ?>
<?php  include('header.php'); ?>
<style>
 #container {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}
#container2 {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}
#container3 {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}
#container4 {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
} 
.box{
    width: 100%;
  height: 100%;
        display: none;
      
    }
    </style>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
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
            <br>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;">
                            <div class="muted pull-left" style="width:100%:"><h1 style="color:#4c4c4c;">Summary  </h1></div>
     
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
									<?php 
								$query_reg_teacher = mysqli_query($conn,"select * from teacher where teacher_status = 'Registered' ")or die(mysqli_error());
								$count_reg_teacher = mysqli_num_rows($query_reg_teacher);

                                $query_teacher = mysqli_query($conn,"select * from teacher")or die(mysqli_error());
								$count_teacher2 = mysqli_num_rows($query_teacher);

								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_teacher; ?>" style="font-size:50px;"><?php echo $count_reg_teacher; ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered Professor <?php echo $count_reg_teacher?> out of <?php echo $count_teacher2?></strong>

                                    </div>
                                </div>
								
							
							
								
								<?php 
								$query_student = mysqli_query($conn,"select * from student where status ='Registered'")or die(mysqli_error());
								$count_student = mysqli_num_rows($query_student);

                                $query_student2 = mysqli_query($conn,"select * from student")or die(mysqli_error());
								$count_student2 = mysqli_num_rows($query_student2);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_student;?>" style="font-size:50px;"><?php echo $count_student?></div>
                                    <div class="chart-bottom-heading"><strong>Registered Students <?php echo $count_student?> out of <?php echo $count_student2?></strong>

                                    </div>
                                </div>
								
								
									
								
								
								
								
							
								
									<?php 
								$query_class = mysqli_query($conn,"select * from class")or die(mysqli_error());
								$count_class = mysqli_num_rows($query_class);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_class; ?>" style="font-size:50px;"><?php echo $count_class; ?></div>
                                    <div class="chart-bottom-heading"><strong>Class</strong>

                                    </div>
                                </div>
								
								
									
								
								
										<?php 
								$query_subject = mysqli_query($conn,"select * from subject")or die(mysqli_error());
								$count_subject = mysqli_num_rows($query_subject);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_subject; ?>" style="font-size:50px;"><?php echo $count_subject; ?></div>
                                    <div class="chart-bottom-heading"><strong>Subjects</strong>

                                    </div>
                                </div>
						
						
                            </div>
                        </div>
                        <!-- /block -->
                        
						
                    </div>
                    <br><br>
                    <div class="row-fluid">
            
            <!-- block -->
            <div id="block_bg" class="block">
                <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;">
                    <div class="muted pull-left" style="width:100%"><h1 style="color:#4c4c4c;">Top/Low Score Percentage  <a style="float:right;font-size:20px;" href="student_passed.php">See Details</a></h1></div>
                </div>
                <div class="block-content collapse in">
          <div class="span12" style="display:inline-block;">

  
          <iframe scrolling="no" src="chart1.php" style="height:70vh;width:48%;display:inline-block; border:0 ;border-right:2px solid gray" title="Iframe Example"></iframe>
          <iframe scrolling="no" src="chart2.php" style="height:70vh;width:48%;display:inline-block; border: 0" title="Iframe Example"></iframe>
  
  
 

                </div>
            </div>
</div>
            <!-- /block -->


                    <br><br><br><br>
 <!-- grap -->

 <div class="row-fluid" >
            
            <!-- block -->
            <div id="block_bg" class="block">
                <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;">
                    <div class="muted pull-left" style="width:100%"><h1 style="color:#4c4c4c;">Bar Graph   <select style="float:right;font-size:20px;">
            <option>Choose Filter</option>
            <!--<option value="gray">All </option>-->
            <option value="red">Service Management</option>
            <option value="green">Business Analytics</option>
            <option value="blue">Web and Mobile Development</option>
        </select></h1></div>
                </div>
                <div class="block-content collapse in">
                        <div class="span12" style="width:100%;height:500px;">
        
                        <script src="https://cdn.anychart.com/releases/8.0.0/js/anychart-base.min.js"></script>
<div class="gray box" style="widht:100%">
<div id="container"></div>
 <?php
 $web = 0;
 $ba = 0;
 $sm = 0;
 $sql = "SELECT * FROM student_class_quiz_main where grade != ''";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {

      $str = $row['strand'];
      $score = $row['final'];
      $items = $row['items'];
if($score >= $items*0.70)
{
      if($str == 'Business Analytics')
      {
        $ba = $ba +1;

      }
      elseif($str == 'Service Management')
      {
        $sm = $sm + 1;
      }
      elseif($str == 'Web and Mobile Development')
      {
        $web = $web + 1;
      }
}


   }
 } 

 ?>                   
           <script>
            anychart.onDocumentReady(function() {

// set the data
var data = {
  header: ["Name", "All Passed"],
  rows: [
    ["Service Management", <?php echo $sm?>],
    ["Business Analytics", <?php echo $ba?>],
    ["Web and Mobile Development", <?php echo $web?>]
 
]};

// create the chart
var chart = anychart.column();

// add data
chart.data(data);

// set the chart title
chart.title("General Statistics of all subjects");

// draw
chart.container("container");
chart.draw();
});



           </script>     
  </div>  
  
  <div class="red box" style="widht:100%">
  <?php
$score1 = 0;
$score2 = 0;
$score3 = 0;
$score4 = 0;
$score5 = 0;


$sql_sc = "SELECT * FROM student_class_quiz_main where grade != '' and strand = 'Service Management'";
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
 
if($topic1 >= $limit1*0.70)
{
	$score1 = $score1 + 1;
}
else{
	
}
if($topic2 >= $limit2*0.70)
{
	$score2 = $score2 + 1;
}
else{
	
}
if($topic3 >= $limit3*0.70)
{
  $score3 = $score3 + 1;
}
else{
	
}
if($topic4 >= $limit4*0.70)
{
	$score4 = $score4 + 1;
}
else{

}
if($topic5 >= $limit5*0.70)
{
	$score5 = $score5 + 1;
}
else{
	
}
}
}
?>



<div id="container2"></div>
                    
           <script>
            anychart.onDocumentReady(function() {

// set the data
var data = {
  header: ["Name", "summary"],
  rows: [
    ["Elective 1", <?php echo $score1?>],
    ["Elective 2", <?php echo $score2?>],
    ["Elective 3", <?php echo $score3?>],
    ["Elective 4", <?php echo $score4?>],
    ["Elective 5", <?php echo $score5?>]
 
]};

// create the chart
var chart = anychart.column();

// add data
chart.data(data);

// set the chart title
chart.title("Service Management all Topics");

// draw
chart.container("container2");
chart.draw();
});



           </script>     
  </div>      

  <div class="green box" style="widht:100%">

  <?php
$score1 = 0;
$score2 = 0;
$score3 = 0;
$score4 = 0;
$score5 = 0;


$sql_sc = "SELECT * FROM student_class_quiz_main where grade != '' and strand = 'Business Analytics'";
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
 
if($topic1 >= $limit1*0.70)
{
	$score1 = $score1 + 1;
}
else{
	
}
if($topic2 >= $limit2*0.70)
{
	$score2 = $score2 + 1;
}
else{
	
}
if($topic3 >= $limit3*0.70)
{
  $score3 = $score3 + 1;
}
else{
	
}
if($topic4 >= $limit4*0.70)
{
	$score4 = $score4 + 1;
}
else{

}
if($topic5 >= $limit5*0.70)
{
	$score5 = $score5 + 1;
}
else{
	
}
}
}
?>
<div id="container3"></div>
                    
           <script>
            anychart.onDocumentReady(function() {

// set the data
var data = {
  header: ["Name", "summary"],
  rows: [
    ["Elective 1", <?php echo $score1?>],
    ["Elective 2", <?php echo $score2?>],
    ["Elective 3", <?php echo $score3?>],
    ["Elective 4", <?php echo $score4?>],
    ["Elective 5", <?php echo $score5?>]
 
]};

// create the chart
var chart = anychart.column();

// add data
chart.data(data);

// set the chart title
chart.title("Business Analytics all Topics");

// draw
chart.container("container3");
chart.draw();
});



           </script>     
  </div>     
  
  
  <div class="blue box" style="widht:100%">


  <?php
$score1 = 0;
$score2 = 0;
$score3 = 0;
$score4 = 0;
$score5 = 0;


$sql_sc = "SELECT * FROM student_class_quiz_main where grade != '' and strand = 'Web and Mobile Development'";
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
 
if($topic1 >= $limit1*0.70)
{
	$score1 = $score1 + 1;
}
else{
	
}
if($topic2 >= $limit2*0.70)
{
	$score2 = $score2 + 1;
}
else{
	
}
if($topic3 >= $limit3*0.70)
{
  $score3 = $score3 + 1;
}
else{
	
}
if($topic4 >= $limit4*0.70)
{
	$score4 = $score4 + 1;
}
else{

}
if($topic5 >= $limit5*0.70)
{
	$score5 = $score5 + 1;
}
else{
	
}
}
}
?>
<div id="container4"></div>
                    
           <script>
            anychart.onDocumentReady(function() {

// set the data
var data = {
  header: ["Name", "summary"],
  rows: [
    ["Elective 1", <?php echo $score1?>],
    ["Elective 2", <?php echo $score2?>],
    ["Elective 3", <?php echo $score3?>],
    ["Elective 4", <?php echo $score4?>],
    ["Elective 5", <?php echo $score5?>]
 
]};

// create the chart
var chart = anychart.column();

// add data
chart.data(data);

// set the chart title
chart.title("Web and Mobile Development all Topics");

// draw
chart.container("container4");
chart.draw();
});



           </script>     
  </div>  
                    
                    
                   
            
            
                </div>
            </div>
            <!-- /block -->
            
            
        </div>

 <!-- /grap -->
<br><br>

                        
						
                    </div>


                    </div>
                
                
                 
                 
                </div>
            </div>
    
       
        </div>
	<?php include('script.php'); ?>
    </body>
