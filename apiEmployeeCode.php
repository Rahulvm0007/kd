<?php
include('apiConnection.php');
if ($_SERVER["REQUEST_METHOD"] === "POST") 
{


$header = apache_request_headers();

 $static_token=$header['SecurityToken'];
 $DynamicToken=$header['DynamicToken'];
 $companyId=$_POST['companyId'];		
 //print_r($DynamicToken);die();
  if ($static_token=='dXNlckBleGFtcGxlLmNvbTpzZWNyZXQ=')

  {

$admin=$_POST['adminId'];
//print_r($admin);die();
$stmt=$conn->prepare("select * from  admin where _adminId=:1");
         $stmt->bindparam(':1',$admin);
        $stmt->execute();
        
         foreach($stmt->fetchAll() as $row)
                                  {
                                         
                                         $dynamictoken=$row['_loginToken']; 
                                }
                                

         if($DynamicToken==$dynamictoken)
                                 {
                         
                                
            
$stmt=$conn->prepare("SELECT * FROM prefix WHERE`_companyId`='$companyId' and `_fkprefixcategoryId`='1'");
	
	
	$stmt->execute();

       while($row=$stmt->fetch(PDO::FETCH_OBJ)) 
        {
                $employee[] =$row;
        }
   // print_r($row);die();

$data='Content-type: application/json';

$data=json_encode(array('employeeCode'=>$employee));

$handle = fopen("works.json", 'w+');

if($handle)
{

        if(!fwrite($handle,$data ))
                die("couldn't write to file.");


        
        header('Location:works.json');

}
}
else{
        header('Content-type:application/json;charset=utf-8');
        $data=json_encode(array('responseStatus'=> false,'responseCode'=>404,'responseMessage'=>"Ooops"));
        echo $data;

}

}
else
{
$msg="invalid token";
echo json_encode ($msg);
}
}
else{
$msg="invalid method";
echo json_encode ($msg);
}






?>