<?php
include('apiConnection.php');
if($_SERVER["REQUEST_METHOD"] === "POST") 
{


$header = apache_request_headers();

 $static_token=$header['SecurityToken'];
 $DynamicToken=$header['DynamicToken'];
  if ($static_token=='dXNlckBleGFtcGxlLmNvbTpzZWNyZXQ=')

  {

							
//$payment=$_POST['Name'];
$adminId=$_POST['adminId'];

$stmt=$conn->prepare("select * from  admin where _adminId=:1");
         $stmt->bindparam(':1',$adminId);
        $stmt->execute();
        
         foreach($stmt->fetchAll() as $row)
                                  {
                                         
                                         $dynamictoken=$row['_loginToken']; 
                                }
                               
                              

         if($DynamicToken==$dynamictoken)
          {
		$companyId=$_POST['companyId']; 
        $stmt=$conn->prepare("select * from  prefix where _companyId=:a and _fkprefixcategoryId='1'");     
			 
			 $stmt->bindparam(':a',$companyId);
			 $stmt->execute();
			  foreach($stmt->fetchAll() as $row)
                                  {
                                         
                                         $employeeNumber=$row['_number'];
				                         
				  
                                }
                               

	 $employeeNumber=$employeeNumber+1; 
     
			                     
     $stmt=$conn->prepare("update prefix set _number=:a where _companyId=:b and _fkprefixcategoryId='1'");
	 $stmt->bindparam(':a',$employeeNumber);
	 $stmt->bindparam(':b',$companyId);
	 $stmt->execute();
        if($stmt)

{
header('Content-type:application/json;charset=utf-8');
        $data=json_encode(array('responseStatus'=> true,'responseCode'=>200,'responseMessage'=>"update success"));
        echo $data;
}
else{
	header('Content-type:application/json;charset=utf-8');
        $data=json_encode(array('responseStatus'=> false,'responseCode'=>404,'responseMessage'=>"failure"));
        echo $data;
}
		 }
else{
        header('Content-type:application/json;charset=utf-8');
        $data=json_encode(array('responseStatus'=> false,'responseCode'=>404,'responseMessage'=>"invalid dynamic token"));
        echo $data;

}

}
else
{
header('Content-type:application/json;charset=utf-8');
        $data=json_encode(array('responseStatus'=> false,'responseCode'=>404,'responseMessage'=>"invalid statictoken token"));
        echo $data;
}
}
else{
header('Content-type:application/json;charset=utf-8');
        $data=json_encode(array('responseStatus'=> false,'responseCode'=>404,'responseMessage'=>"invalid method"));
        echo $data;
}






?>