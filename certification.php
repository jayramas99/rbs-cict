<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
<?php

$host = 'localhost';
$usernamee = 'root';
$password = '';
$database = 'dbs6046181';

$conn = mysqli_connect($host, $usernamee, $password, $database);

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL:". mysqli_connect_error();
}

$sql_sc = "SELECT * FROM student where student_id = '$session_id'";
$result_sc = $conn->query($sql_sc);

if ($result_sc->num_rows > 0) {
  // output data of each row
  while($row_sc = $result_sc->fetch_assoc()) {
    $fname = $row_sc['firstname'];
    $middle = $row_sc['middlename'];
    $lname = $row_sc['lastname'];

    $fullname = "$fname $middle $lname";
    $strand = $row_sc['strand'];
  }}
?>
<html>
<link href='https://fonts.googleapis.com/css?family=Pinyon Script' rel='stylesheet'>
  <script>
        var css = '@page { size: landscape; }',
    head = document.head || document.getElementsByTagName('head')[0],
    style = document.createElement('style');

style.type = 'text/css';
style.media = 'print';

if (style.styleSheet){
  style.styleSheet.cssText = css;
} else {
  style.appendChild(document.createTextNode(css));
}

head.appendChild(style);

window.print();
        </script>
        <style>
h1{
    width:100%;
    height:10%;
    margin-top:21%;
    position:fixed;
    text-align:center;
    font-size:5vw;
    font-family:Pinyon Script;
    color:#e1a730;
   
}
h2{
    width:100%;
    height:10%;
    margin-left:4%;
    margin-top:31.5%;
    position:fixed;
    text-align:center;
    font-size:2vw;
    font-family:TT chocolates;
    color:#1e3653;
   
}
h3{
    width:100%;
    height:10%;
    margin-left:4%;
    margin-top:34%;
    position:fixed;
    text-align:center;
    font-size:2vw;
    font-family:TT chocolates;
    color:#1e3653;
  
}
img{
    width:100%;
    height:100%;
    position:fixed;
    z-index:-1;
}
.water{
    width:100%;
    height:100%;
    
    opacity:0.2;
}

@media print {
    h1{
    width:100%;
    height:10%;
    margin-top:35%;
    position:fixed;
    text-align:center;
    font-size:5vw;
    font-family:Pinyon Script;
    color:#e1a730;
}
h2{
    width:100%;
    height:10%;
    margin-left:4%;
    margin-top:47.5%;
    position:fixed;
    text-align:center;
    font-size:2vw;
    font-family:TT chocolates;
    color:#1e3653;
   
}
h3{
    width:100%;
    height:10%;
    margin-left:5%;
    margin-top:51%;
    position:fixed;
    text-align:center;
    font-size:2vw;
    font-family:TT chocolates;
    color:#1e3653;
   
}
img{
    width:100%;
    height:100%;
    position:fixed;
    z-index:-1;
}
}
            </style>
    <body>
    <img src="cert2.jpg" alt="certification" >
    <h1 ><?php echo $fullname;?></h1>
    <h2 ><?php echo $strand;?></h2>
    <h3 ><?php 
     date_default_timezone_set('Asia/Manila');
     echo  date('F j, Y');
    ?></h3>

<img src="water.png" alt="certification" class="water">
 

</body>
</html>