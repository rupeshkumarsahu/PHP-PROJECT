<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 

echo "step1";
// include database and object files
include_once '../config/database.php';
include_once '../objects/community_reporting.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
$community_report = new CommunityReporter($db);


function compressImage($source, $destination, $quality) { 
    // Get image info 
    $imgInfo = getimagesize($source); 
    $mime = $imgInfo['mime']; 
     
    // Create a new image from file 
    switch($mime){ 
        case 'image/jpeg': 
            $image = imagecreatefromjpeg($source); 
            break; 
        case 'image/png': 
            $image = imagecreatefrompng($source); 
            break; 
        case 'image/gif': 
            $image = imagecreatefromgif($source); 
            break; 
        default: 
            $image = imagecreatefromjpeg($source); 
    } 
     
    // Save image 
    imagejpeg($image, $destination, $quality); 
     
    // Return compressed image 
    return $destination; 
} 
 

//file upload path
$targetDir = getcwd() . "/../uploads/community_reporting/";
$fileName = basename($_FILES["file"]["name"]);


$statusMsg = 'Error';
$errorMsg=1;
$uploadOk =0;

//$community_report->location = isset($_POST['dist'])? $_POST['dist']:"Odisha"; //$_POST['dist'];

$community_report ->name = ($_POST['name']);
$community_report ->email = ($_POST['email']);
$community_report ->address = ($_POST['address']);
$community_report ->mobile = ($_POST['mobile']);
$community_report->title =  ($_POST['title']);
$community_report ->storyline = ($_POST['storyline']);
$community_report ->location = ($_POST['location']);
//$community_report ->posted_on = ($_POST['posted_on']);
$community_report ->media_desc = ($_POST['media_desc']);


echo $community_report->name . $community_report->email . $community_report->address . $community_report->mobile . $community_report->title;
echo $community_report->storyline . $community_report->location . $community_report->media_desc;
// File upload path 
$uploadPath = $targetDir; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    //$statusMsg = 'error'; 
    if(!empty($_FILES["file"]["name"])) { 
        // File info 
        $fileName = basename($_FILES["file"]["name"]); 
        $temp = explode(".", $fileName);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $imageUploadPath = $uploadPath . $newfilename; 
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Image temp source 
            $imageTemp = $_FILES["file"]["tmp_name"]; 
             
            // Compress size and upload image 
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 90); 
            $community_report->media_link = "https://localwire.app/uploads/community_reporting/".$newfilename;
            $var = $community_report->storeCommunityPost();
            echo $var;
            if($compressedImage){ 
                $status = 'success'; 
                $statusMsg = "Image compressed and uploaded successfully."; 
                $errorMsg = $var;
                $uploadOk = 1;
            }else{ 
                $statusMsg = "Image compress failed!"; 
                $errorMsg = 4;
                $uploadOk =0;
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            $errorMsg = 5;
            $uploadOk = 0;
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
        $errorMsg = 6;
        $uploadOk = 0;
    } 
}else{
    $statusMsg = "not submit";
}

echo "Hello" . $uploadOk;
if($uploadOk==1)
{
    echo $statusMsg;
    //header("Location: ".$errorMsg."");
    header("Location: thankyou.php");
}else{
    echo $statusMsg;
    header("Location: thankyou.php");
    //header("Location: ".$errorMsg."");
    //echo json_encode(array($statusMsg => 0));
}

?>
