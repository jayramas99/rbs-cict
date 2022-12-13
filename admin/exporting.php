<?php  include('../session.php'); ?>
<?php include('dbcon.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/minty/bootstrap.min.css">
<link href="toast.css" rel="stylesheet">
<style>
body { background-color: #fafafa; }
.container { margin: 150px auto; }
</style>



</head>

<body>





  <table id="example" class="display table" width="100%" > 
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





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
<script src="src/tableHTMLExport.js"></script>
<script>
  $('#json').on('click',function(){
    $("#example").tableHTMLExport({type:'json',filename:'sample.json'});
    window.location.href='student_passed.php';
  })
 
  $('#pdf').on('click',function(){
    $("#example").tableHTMLExport({type:'pdf',filename:'sample.pdf'});
  })
  </script>
  <script>
  $(document).ready(function(){
    $("#example").tableHTMLExport({type:'csv',filename:'sample.csv'});
    window.location.href='student_passed.php';
  });
  </script>
  <script>
try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>
</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>
