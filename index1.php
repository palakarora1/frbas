<?php
function get_data()
{
    $con=mysqli_connect("localhost","root","","frbas");
    $sql="SELECT * from attendance"; 
    $result=mysqli_query($con,$sql);
    $response=array();
    if($result){
        header("Content-Type: JS0N");
        $i=0;
        while($row =mysqli_fetch_assoc($result)){
            $response[$i]['name']=$row["name"];
            $response[$i]['date']=$row['date'];
            $response[$i]['time']=$row['time'];
            $i++;
        }
        return json_encode($response,JSON_PRETTY_PRINT);
    }
}
echo '<pre>';
print_r(get_data());
echo '</pre>';
$file_name=date('d-m-Y').'.json';
if(file_put_contents($file_name,get_data()))
{
    echo $file_name.'file created';
}
else{
    echo 'There is some error';
}

/*



/*
echo '<pre';
';

$response=array();
if($con){
    
    $result=mysqli_query($con,$sql);
      if($result){
         header("Content-Type: JS0N");
         $i=0;
         while($row =mysqli_fetch_assoc($result)){
            $response[$i]['name']=$row["name"];
            $response[$i]['date']=$row['date'];
            $response[$i]['time']=$row['time'];
            $i++;
        }
         echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else{
      echo"Database connection failed";
}
$file_name=date('d-m-Y').'.json';
if(file_put_contents($file_name,$response))
{
    echo $file_name.'file created';
}
?>


<?php
function get_data()
{
    $connect=mysqli_connect("localhost","root","","frbas");
    $query="select * from attendance";
    
   while($row = mysqli_fetch_array($result))
    {
        $employee_data[]=array(
            
        );
    }
    return json_encode()
}
                                                     
?>
*/
