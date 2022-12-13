<?php  include('../session.php'); ?>
<?php  include('header.php'); ?>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" 
href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" 
src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" 
src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                <!--/span-->
               
                <div class="span9" id="content" style="margin-left:380px;">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            <br>
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header" style="background-color:#f59d1f;color:#4c4c4c">
                                <div class="muted pull-left"><h1 style="color:#4c4c4c">REPORTS</h1></div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
                                    <div class="table-responsive">
<table id="myTable" class="display table" width="100%" > 
        <thead>  
          <tr>  
            <th>Student No.</th>  
            <th>Fullname</th>  
            <th>Section</th>  
            <th>Specialization</th>
            <th>ELECTIVE 1</th> 
            <th>ELECTIVE 2</th> 
            <th>ELECTIVE 3</th> 
            <th>ELECTIVE 4</th> 
            <th>ELECTIVE 5</th> 

           
          </tr>  
        </thead>  
        <tbody> 
        <?php
        $sql_grade = 'SELECT * FROM student_class_quiz_main where grade != ""';
        $result_grade = $conn->query($sql_grade);
        
        if ($result_grade->num_rows > 0) {
          // output data of each row
          while($row_grade = $result_grade->fetch_assoc()) {
           $final = $row_grade['final'];
           $items = $row_grade['items'];
           $stdno = $row_grade['student_id'];
        
           $topic1 = $row_grade['topic1'];
           $limit1 = $row_grade['limit1'];
         

           $topic2 = $row_grade['topic2'];
           $limit2 = $row_grade['limit2'];

           $topic3 = $row_grade['topic3'];
           $limit3 = $row_grade['limit3'];

           $topic4 = $row_grade['topic4'];
           $limit4 = $row_grade['limit4'];

           $topic5 = $row_grade['topic5'];
           $limit5 = $row_grade['limit5'];

        
           $grandtotal = 0;

$grandtotal = round(100*($topic1/$limit1));
if($grandtotal <= 70)
{
$sty = "<p style='color:red;'>FAILED</p>";
}
else{
  $sty = "<p style='color:green;'>PASSED</p>";
}
$grandtotal2 = 0;

$grandtotal2 = round(100*($topic2/$limit2));
if($grandtotal2 <= 70)
{
$sty2 = "<p style='color:red;'>FAILED</p>";
}
else{
$sty2 = "<p style='color:green;'>PASSED</p>";
}
$grandtotal3 = 0;

$grandtotal3 = round(100*($topic3/$limit3));
if($grandtotal3 <= 70)
{
$sty3 = "<p style='color:red;'>FAILED</p>";
}
else{
$sty3 = "<p style='color:green;'>PASSED</p>";
}
$grandtotal4 = 0;

$grandtotal4 = round(100*($topic4/$limit4));
if($grandtotal4 <= 70)
{
$sty4 = "<p style='color:red;'>FAILED</p>";
}
else{
$sty4 = "<p style='color:green;'>PASSED</p>";
}

$grandtotal5 = 0;

$grandtotal5 = round(100*($topic5/$limit5));
if($grandtotal5 <= 70)
{
$sty5 = "<p style='color:red;'>FAILED</p>";
}
else{
$sty5 = "<p style='color:green;'>PASSED</p>";
}
          
              
            $sql = "SELECT * FROM student where student_id = '$stdno'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
               $ustd = $row["username"];
               $firstname = $row["firstname"];
               $middlename = $row["middlename"];
               $lastname = $row["lastname"];
               $strand = $row["strand"];
               $fullname = "$firstname $middlename $lastname";

               $class = $row["class_id"];

           

              }
            }
       
        
        ?>     
          <tr>  
            <td><?php echo $ustd?></td>  
            <td><?php echo $fullname?></td>  
            <td><?php     $sql_sec = "SELECT * FROM class where class_id = '$class'";
            $result_sec = $conn->query($sql_sec);
            
            if ($result_sec->num_rows > 0) {
              // output data of each row
              while($row_sec = $result_sec->fetch_assoc()) {

               echo $section = $row_sec['class_name'];

              }}?></td>  
              <td><?php echo $strand;?></td>
            <td><?php echo $sty;?></td>
            <td><?php echo $sty2;?></td>
            <td><?php echo $sty3;?></td>
            <td><?php echo $sty4;?></td>
            <td><?php echo $sty5;?></td>
            
            
             
          </tr>  
         <?php
          
            }
        } 
        
        
         ?>
        </tbody> 
      
      </table> 
      <br>
        <a href="exporting.php" target="_blank"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-export"></span> Export
        </button></a>
      <div>
						
						
                            </div>
                        </div>
                        <!-- /block -->
                        
						
                    </div>
<br><br>

                        <!-- /block -->
                        
						
                    </div>


                    </div>
                
                
                 
                 
                </div>
            </div>
    
       
        </div>
	<?php include('script.php'); ?>
    </body>
    <script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
