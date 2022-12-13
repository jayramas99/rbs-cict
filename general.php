<?php include('session.php'); ?>
<?php include('header_dashboard.php'); ?>
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
    <body id="class_div">
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('general_sidebar.php'); ?>
                <div class="span6" id="content" style="margin-left:400px;">
                     <div class="row-fluid">
						<br>
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<?php
								$school_year_query = mysqli_query($conn,"select * from school_year order by school_year DESC")or die(mysqli_error());
								$school_year_query_row = mysqli_fetch_array($school_year_query);
								$school_year = $school_year_query_row['school_year'];
								?>
								<li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
								<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a></li>
						</ul>
						 <!-- end breadcrumb -->
                        <!-- block -->
                        <div class="block" style="width:1100px;">
								<div class="navbar navbar-inner block-header" style="background-color:#f59d1f">
                                <div class="muted pull-left" style="width:100%"><h1 style="color:#4c4c4c">Bar Graph   <select style="float:right;font-size:20px;">
            <option>Choose Filter</option>
  
            <option value="red">Service Management</option>
            <option value="green">Business Analytics</option>
            <option value="blue">Web and Mobile Development</option>
        </select></h1></div>
								</div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                <div id="" class="">
                <div class="">
                    
                </div>
                <div class="">
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
    ["ELECTIVE 1", <?php echo $score1?>],
    ["ELECTIVE 2", <?php echo $score2?>],
    ["ELECTIVE 3", <?php echo $score3?>],
    ["ELECTIVE 4", <?php echo $score4?>],
    ["ELECTIVE 5", <?php echo $score5?>]
 
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
    ["ELECTIVE 1", <?php echo $score1?>],
    ["ELECTIVE 2", <?php echo $score2?>],
    ["ELECTIVE 3", <?php echo $score3?>],
    ["ELECTIVE 4", <?php echo $score4?>],
    ["ELECTIVE 5", <?php echo $score5?>]
 
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
    ["ELECTIVE 1", <?php echo $score1?>],
    ["ELECTIVE 2", <?php echo $score2?>],
    ["ELECTIVE 3", <?php echo $score3?>],
    ["ELECTIVE 4", <?php echo $score4?>],
    ["ELECTIVE 5", <?php echo $score5?>]
 
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
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
									
                </div>
				
            </div>
	
        </div>
		<?php include('script.php'); ?>
    </body>
</html>