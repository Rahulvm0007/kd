<?php
include('apiConnection.php');

if ($_SERVER['REQUEST_METHOD']=='POST' ) 
{
    $header = apache_request_headers();
	$static_token=$header['SecurityToken'];
	$DynamicToken=$header['DynamicToken'];
   	
	
			 if($static_token='dXNlckBleGFtcGxlLmNvbTpzZWNyZXQ=')

			 {

	          $adminId=$_POST['adminId'];
	          $adminfetch=$conn->prepare("select * from  admin where _adminId=:a");
	 		  $adminfetch->bindparam(':a',$adminId);
			  $adminfetch->execute();

		
			  foreach($adminfetch->fetchAll() as $row)
				  
			  {
				  	 
				  $dynamictoken=$row['_loginToken']; 
				
			  }
			        
			 
			  if($DynamicToken==$dynamictoken)
				
			  {
			 
							$companyId=$_POST['companyId'];
							$fiscalId=$_POST['fiscalId'];
				            $employeeId=$_POST['employeeId'];
				            if(empty($_POST['employeeAadhaar']))
							{
							$aadhaar ="";	
								
							}
				         
				            else
						   
							{
								
								
							$imgAadhaar = $_POST['employeeAadhaar'];
				            
							$binaryDataOfAadhaar = base64_decode($imgAadhaar );					
							$size = getImageSizeFromString($binaryDataOfAadhaar);
							if (empty($size['mime']) || strpos($size['mime'], 'image/') !== 0)
							{
							  die('Base64 value is not a valid image');
							}

							$ext = substr($size['mime'], 6);

							
							if (!in_array($ext, ['png', 'gif', 'jpeg','jpg','pdf','doc'])) 
							{
							  die('Unsupported image type');
							}

							$aadhaar = round(microtime(true)*1000).rand(0,100).".$ext";
				  	
							$aadhaarFile = "../EmployeeCertificates/{$aadhaar}";

							file_put_contents($aadhaarFile, $binaryDataOfAadhaar);
				            }
				  
				  
				  
				  
				            
				            if(empty($_POST['employeePan']))
							{
							$pan ="";	
								
							}
				         
				            else
				            { 
								
				            $imgPan = $_POST['employeePan'];
							$binaryDataOfPan = base64_decode($imgPan );					
							$size = getImageSizeFromString($binaryDataOfPan);
							if (empty($size['mime']) || strpos($size['mime'], 'image/') !== 0) {
							  die('Base64 value is not a valid image');
							}

							$ext = substr($size['mime'], 6);

							
							if (!in_array($ext, ['png', 'gif', 'jpeg','jpg','pdf','doc'])) {
							  die('Unsupported image type');
							}

							$pan = round(microtime(true)*1000).rand(0,100).".$ext";
				  	
							$panFile = "../EmployeeCertificates/{$pan}";

							file_put_contents($panFile, $binaryDataOfPan);
				  			}
				  
				  
				  
				            if(empty($_POST['employeeSchoolCertificate']))
							{
							$SchoolCertificate ="";	
								
							}
				         
				            else
				            { 
				   
				             
				            $imgSchoolCertificate = $_POST['employeeSchoolCertificate'];
							$binaryDataOfSchool = base64_decode($imgSchoolCertificate );					
							$size = getImageSizeFromString($binaryDataOfSchool);
							if (empty($size['mime']) || strpos($size['mime'], 'image/') !== 0) {
							  die('Base64 value is not a valid image');
							}

							$ext = substr($size['mime'], 6);

//							
							if (!in_array($ext, ['png', 'gif', 'jpeg','jpg','pdf','doc'])) {
							  die('Unsupported image type');
							}

							$SchoolCertificate = round(microtime(true)*1000).rand(0,100).".$ext";
				  	
							$SchoolCertificateFile = "../EmployeeCertificates/{$SchoolCertificate}";

							file_put_contents($SchoolCertificateFile, $binaryDataOfSchool);
				  
							}
				  
				  
				            
				            if(empty($_POST['employeeGraduation']))
							{
							$Graduation ="";	
								
							}
				         
				            else
				            {  
				  
				            $imgGraduation = $_POST['employeeGraduation'];
							$binaryDataOfGraduation = base64_decode($imgGraduation );					
							$size = getImageSizeFromString($binaryDataOfGraduation);
							if (empty($size['mime']) || strpos($size['mime'], 'image/') !== 0) {
							  die('Base64 value is not a valid image');
							}

							$ext = substr($size['mime'], 6);

//							
							if (!in_array($ext, ['png', 'gif', 'jpeg','jpg','pdf','doc'])) {
							  die('Unsupported image type');
							}

							$Graduation = round(microtime(true)*1000).rand(0,100).".$ext";
				  	
							$GraduationFile = "../EmployeeCertificates/{$Graduation}";

							file_put_contents($GraduationFile, $binaryDataOfGraduation);
							}
								
				  
				  
				  
				  
				            if(empty($_POST['postGraduation']))
							{
							$postGraduation ="";	
								
							}
				         
				            else
				            {  
				  
				            $imgPostGraduation = $_POST['postGraduation'];
							$binaryDataOfPostGraduation = base64_decode($imgPostGraduation );					
							$size = getImageSizeFromString($binaryDataOfPostGraduation);
							if (empty($size['mime']) || strpos($size['mime'], 'image/') !== 0) {
							  die('Base64 value is not a valid image');
							}

							$ext = substr($size['mime'], 6);

							
							if (!in_array($ext, ['png', 'gif', 'jpeg','jpg','pdf','doc'])) {
							  die('Unsupported image type');
							}

							$postGraduation = round(microtime(true)*1000).rand(0,100).".$ext";
				  	
							$postGraduationFile = "../EmployeeCertificates/{$postGraduation}";

							file_put_contents($postGraduationFile, $binaryDataOfPostGraduation);
								
							}
				  
				  
				    
				            if(empty($_POST['employeeOther']))
							{
							$Other ="";	
								
							}
				         
				            else
				            {  
				  
				            $imgOther = $_POST['employeeOther'];
							$binaryDataOfimgOther = base64_decode($imgOther );					
							$size = getImageSizeFromString($binaryDataOfimgOther);
							if (empty($size['mime']) || strpos($size['mime'], 'image/') !== 0) {
							  die('Base64 value is not a valid image');
							}

							$ext = substr($size['mime'], 6);

							
							if (!in_array($ext, ['png', 'gif', 'jpeg','jpg','pdf','doc'])) {
							  die('Unsupported image type');
							}

							$Other = round(microtime(true)*1000).rand(0,100).".$ext";
				  	
							$OtherFile = "../EmployeeCertificates/{$Other}";

							file_put_contents($OtherFile, $binaryDataOfimgOther);
								
							}
				  
							
							  $stmt=$conn->prepare("insert into certificates(_fkcompanyId,_fkfiscalId,_fkUserId,_aadhaar,_panNumber,_sslc,_graduation,_postGraduation,_others,_createdBy) values(:1,:2,:3,:4,:5,:6,:7,:8,:9,:10)");
							  $stmt->bindparam(':1',$companyId);
							  $stmt->bindparam(':2',$fiscalId);
							  $stmt->bindparam(':3',$employeeId);

							  $stmt->bindparam(':4',$aadhaar);
				              $stmt->bindparam(':5',$pan);
				  
							  $stmt->bindparam(':6',$SchoolCertificate);
				              $stmt->bindparam(':7',$Graduation);
				              $stmt->bindparam(':8',$postGraduation);
				              $stmt->bindparam(':9',$Other);

							  $stmt->bindparam(':10',$adminId);
							

							 if($stmt->execute())
                {
        header('Content-type:application/json;charset=utf-8');
                        $data=json_encode(array('responseStatus'=> true,'responseCode'=>200,'responseMessage'=>"Employee Details Updated "));
                        echo $data;
        }
                else
                {
        header('Content-type:application/json;charset=utf-8');
                $data=json_encode(array('responseStatus'=> false,'responseCode'=>400,'responseMessage'=>"Something Went Wrong"));
                        echo $data;
        }
        
        }
        else
        {
         header('Content-type:application/json;charset=utf-8');
        $data=json_encode(array('responseStatus'=> false,'responseCode'=>404,'responseMessage'=>"Ooops
                "));
        echo $data;
        }
        }

        else
        {
        header('Content-type:application/json;charset=utf-8');
                        $data=json_encode(array('responseStatus'=> false,'responseCode'=>404,'responseMessage'=>"Invalid Token"));
                        echo $data;
        }
        }
        else
        {
        header('Content-type:application/json;charset=utf-8');
                        $data=json_encode(array('responseStatus'=> false,'responseCode'=>400,'responseMessage'=>"Invalid Request"));
                        echo $data;}
        



?>