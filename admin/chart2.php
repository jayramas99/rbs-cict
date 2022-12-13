
                
                <?php
   include('../session.php'); 
   include('header.php'); 
?>
<html>
<head>
    
</head>
<body style="background-color:#ffffff;">
                
                
                <?php 
         
      
                $passing_grade = 0;
                $web = 0;
                $ba = 0;
                $sm= 0;
                
                $sql_grade = 'SELECT * FROM student_class_quiz_main where strand = "Web and Mobile Development" and grade != ""';
                $result_grade = $conn->query($sql_grade);
                
                if ($result_grade->num_rows > 0) {
                // output data of each row
                while($row_grade = $result_grade->fetch_assoc()) {
                $final = $row_grade['final'];
                $items = $row_grade['items'];
                
                $passing_grade = $items * 0.70;
                if($passing_grade >= $final)
                {
                $web = $web + 1;
                }
                
                }
                } 
                else{
                $web = 0; 
                }
                
                $passing_grade2 = 0;
                $sql_grade2 = 'SELECT * FROM student_class_quiz_main where strand = "Business Analytics" and grade != ""';
                $result_grade2 = $conn->query($sql_grade2);
                
                if ($result_grade2->num_rows > 0) {
                // output data of each row
                while($row_grade2 = $result_grade2->fetch_assoc()) {
                $final2 = $row_grade2['final'];
                $items2 = $row_grade2['items'];
                
                $passing_grade2 = $items2 * 0.70;
                if($passing_grade2 >= $final2)
                {
                $ba= $ba + 1;
                }
                
                }
                } 
                else{
                $ba = 0; 
                }
                
                
                $passing_grade3 = 0;
                $sql_grade3 = 'SELECT * FROM student_class_quiz_main where strand = "Service Management" and grade != ""';
                $result_grade3 = $conn->query($sql_grade3);
                
                if ($result_grade3->num_rows > 0) {
                // output data of each row
                while($row_grade3 = $result_grade3->fetch_assoc()) {
                $final3 = $row_grade3['final'];
                $items3 = $row_grade3['items'];
                
                $passing_grade3 = $items3 * 0.70;
                if($passing_grade3 >= $final3)
                {
                $sm= $sm + 1;
                }
                
                }
                } 
                else{
                $sm = 0; 
                }
                
                
                
                
                
                
                
                ?>	
                                    
                                        <div id="piechart" style="width:50%;display:inline-block"></div>
                
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                
                
                <script type="text/javascript">
                // Load google charts
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);
                
                // Draw the chart and set the chart values
                function drawChart() {
                var data = google.visualization.arrayToDataTable([
                ['all', 'student'],
                ['Service Management', <?php echo  $sm?>],
                ['Business Analytics', <?php echo  $ba?>],
                ['Web and Mobile Development', <?php echo  $web?>],
                
                ]);
                
                // Optional; add a title and set the width and height of the chart
                var options = {'title':'Low Score Percentage ',  'width':600, 'height':600, 
        
        slices: {0: {color: '#a6a6a6'}, 1:{color: '#f59d1f'}, 2:{color: '#ffdc5e'}}
 
       };
                
                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
                }
                </script>
                    