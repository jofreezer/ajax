<?php 
$conn =mysqli_connect('localhost','root','','ajax');

 echo "process..";

 //check for get variable
 if(isset($_GET['name'])){
     echo 'GET: your name is '.$_GET['name'];  
 }
 //post
 $name=filter_input(INPUT_POST,'name');
//  if(isset($_POST['name'])){
//      $name=$_POST['name'];
//     echo 'POST: your name is '.$_POST['name']; 
    
//     $query="INSERT INTO users(names)values($name)";
//     if(mysqli_query($conn,$query)){
//         echo "user added...";
//     }else{M
//         echo 'Error:'.mysqli_error($conn);
//     }
// }
if(mysqli_connect_error()){
    echo "no";
}else{
    if(isset($_POST['name'])){
        $name=$_POST['name'];
       echo 'POST: your name is '.$_POST['name']; 
       
       $query="INSERT INTO users(names)values('$name')";
       if(mysqli_query($conn,$query)){
           echo "user added...";
       }else{
           echo 'Error:'.mysqli_error($conn);
       }
   
   }
}
?>