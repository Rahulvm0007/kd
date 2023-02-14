<?php
include('apiConnection.php');

if ($_SERVER['REQUEST_METHOD']=='POST' ) 
{
    $header = apache_request_headers();
	$static_token=$header['SecurityToken'];
	$DynamicToken=$header['DynamicToken'];
   	
	
	     if($static_token='dXNlckBleGFtcGxlLmNvbTpzZWNyZXQ=')
	    
		 {
//check dynamic token
	          $adminId=$_POST['adminId'];
	          $adminfetch=$conn->prepare("select * from  admin where _adminId=:a");
	 		  $adminfetch->bindparam(':a',$adminId);
			  $adminfetch->execute();
//$result=$adminfetch->fetch(PDO::FETCH_ASSOC);
//$dynamictoken=$result->_loginToken;
		
			  foreach($adminfetch->fetchAll() as $row)
				  
			  {
				  	 
				  $dynamictoken=$row['_loginToken']; 
				
			  }
			        
			 
			  if($DynamicToken==$dynamictoken)
				
			  {
				  
				 
				  
				  
			 
			      $companyId=$_POST['companyId'];
				  $fiscalId=$_POST['fiscalId'];
				  $employeeName=$_POST['employeeName'];
				  $employeeLastName=$_POST['employeeLastName'];
				  $employeeGuardian=$_POST['employeeGuardian'];
				  $employeeGender=$_POST['employeeGender'];
				  
				  
				  $employeeDob=$_POST['employeeDob'];
				  $employeeCode=$_POST['employeeCode'];
				  $employeeNumber=$_POST['employeeNumber'];
				  
				  $employeeAddress=$_POST['employeeAddress'];
				  $employeeEmail=$_POST['employeeEmail'];
				  $employeePhone=$_POST['employeePhone'];
				  $alternativeNumber=$_POST['alternativeNumber'];
				  $employeeAadhar=$_POST['employeeAadhar'];
				 
				  $employeePan=$_POST['employeePan'];
				  $employeeJobrole=$_POST['employeeJobRole'];
				  $employeeBasicSalary=$_POST['employeeBasicSalary'];
				  
				  $employeeBankName=$_POST['employeeBankName'];
				  $employeeAccNo=$_POST['employeeAccNo'];
				  $employeeBankIfsc=$_POST['employeeBankIfsc'];
				  $employeeBranch=$_POST['employeeBranch'];
				  $employeeJoiningDate=$_POST['employeeJoiningDate'];
				  $maritalStatus=$_POST['maritalStatus'];
				  
			
				  
				  $imgBase64String = $_POST['employeePhoto'];
				  
				  
							
							
							$binaryDataOfImage = base64_decode($imgBase64String);
				  
				  			
							
							$size = getImageSizeFromString($binaryDataOfImage);

							if (empty($size['mime']) || strpos($size['mime'], 'image/') !== 0) {
							  die('Base64 value is not a valid image');
							}

							$ext = substr($size['mime'], 6);

							
							if (!in_array($ext, ['png', 'gif', 'jpeg','jpg','pdf','doc'])) {
							  die('Unsupported image type');
							}

							$filename = round(microtime(true)*1000).".$ext";
				  	
							$img_file = "../EmployeeImages/{$filename}";

							if(file_put_contents($img_file, $binaryDataOfImage))
							{
							
				               $stmt1=$conn->prepare("SELECT * FROM `employee` WHERE `_employeeCode`=:a");
					           $stmt1->bindParam(':a',$employeeCode);
					           $stmt1->execute();
                               $count=$stmt1->rowCount();
				               if ($count > 0) {
							   header('Content-type:application/json;charset=utf-8');
							   $data = json_encode(array('responseStatus' => false, 'responseCode' => 404, 'responseMessage' => "Employee already exist"));
							   echo $data;
            					
							   } 
							  
						       else 
								 
							   {
				  
							  $stmt=$conn->prepare("insert into employee(_fkcompanyId,_employeeName,_employeeLastName,_employeeGuardian,_employeeGender,_employeeDob,_employeeCode,_employeeNumber,_employeeAddress,_employeeEmail,_employeePhoneNumber,_alternativePhone,_employeeAdhaar,_employeePAN,_employeeJobRole,_employeeBasicSalary,_employeeBankName,_employeeAccNo,_employeeBankIfsc,_employeeBranch,_employeeJoiningDate,_maritalStatus,_employeePhoto,_createdBy,_fkfiscalId) values(:1,:2,:3,:4,:5,:6,:7,:8,:9,:10,:11,:12,:13,:14,:15,:16,:17,:18,:19,:20,:21,:22,:23,:24,:25)");
							  $stmt->bindparam(':1',$companyId);
							  $stmt->bindparam(':2',$employeeName);
							  $stmt->bindparam(':3',$employeeLastName);
							  $stmt->bindparam(':4',$employeeGuardian);
							  $stmt->bindparam(':5',$employeeGender);


							  $stmt->bindparam(':6',$employeeDob);
							  $stmt->bindparam(':7',$employeeCode);
								
							  $stmt->bindparam(':8',$employeeNumber);	
							  $stmt->bindparam(':9',$employeeAddress);

							  $stmt->bindparam(':10',$employeeEmail);
							  $stmt->bindparam(':11',$employeePhone);
							  $stmt->bindparam(':12',$alternativeNumber);
							  $stmt->bindparam(':13',$employeeAadhar);

							  $stmt->bindparam(':14',$employeePan);
							  $stmt->bindparam(':15',$employeeJobrole);
							  $stmt->bindparam(':16',$employeeBasicSalary);


							  $stmt->bindparam(':17',$employeeBankName);
							  $stmt->bindparam(':18',$employeeAccNo);
							  $stmt->bindparam(':19',$employeeBankIfsc);
							  $stmt->bindparam(':20',$employeeBranch);
							  $stmt->bindparam(':21',$employeeJoiningDate);
                              $stmt->bindparam(':22',$maritalStatus);
							  $stmt->bindparam(':23',$filename);

							  $stmt->bindparam(':24',$adminId);
							  $stmt->bindparam(':25',$fiscalId);



						  if($stmt->execute())

						  {

							
								 $companyId=$_POST['companyId'];
							     $certificate=$conn->prepare("select * from employee where _fkcompanyId=:1  order by _employeeId desc limit 1");
								 $certificate->bindparam(':1',$companyId);  
			                     $certificate->execute();
								 while($row=$certificate->fetch(PDO::FETCH_OBJ)) 
									
								 {
											$employee[] =$row;
									
								 }
							   // print_r($row);die();

										header('Content-type:application/json;charset=utf-8');
										$data=json_encode(array('responseStatus'=> true,'responseCode'=>200,'employeeCertificate'=>$employee));
										echo $data;
								
								
								
						
								
							}
							  
						else
								{
										header('Content-type:application/json;charset=utf-8');
										$data=json_encode(array('responseStatus'=> false,'responseCode'=>404,'responseMessage'=>"Ooops"));
										echo $data;

								}
							  
				

							}
								
							}
				           else
							{
								echo "error in file uplaoding";
							}
							
				 
	     }
 //dynamic token else
	
			 else
	 
			 {
		
			    header('Content-type:application/json;charset=utf-8');
                $data=json_encode(array('responseStatus'=> false,'responseCode'=>404,'responseMessage'=>"invalid dynamic token
		        ",'message'=>$DynamicToken,'table token'=>$dynamictoken));
                echo $data; 
		  
	         }
	    
           }
	
	        else
	 
			{
	  	  
				$message="invalid token";
	            echo json_encode($message);
	    
			}
           

            }

           else
      
		   {
				$message="only get method";
				echo json_encode($message);

	
}
	 
		?>