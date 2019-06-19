<!-- json export -->
<?php  
//PDO is a extension which  defines a lightweight, consistent interface for accessing databases in PHP.  
$db=new PDO('mysql:dbname=carinfo;host=localhost;','root','');  
//here prepare the query for analyzing, prepared statements use less resources and thus run faster  
$row=$db->prepare('select * from customer');  
  
$row->execute();//execute the query  
$json_data=array();//create the array  
foreach($row as $rec)//foreach loop  
{  
$json_array['id']=$rec['id'];  
    $json_array['cname']=$rec['cname'];    
    $json_array['address']=$rec['address'];    
    $json_array['contact']=$rec['contact'];    
    $json_array['model']=$rec['model'];    
    $json_array['price']=$rec['price'];    
    $json_array['payment']=$rec['payment'];   



//here pushing the values in to an array  
    array_push($json_data,$json_array);  
  
}  
  
//built in PHP function to encode the data in to JSON format  
echo json_encode($json_data);  
  
  
?>