<?php 
 function redirect($url) {
    ob_start();
    header("Location: {$url}");
    ob_end_flush();
    die();   
 }

 function jsredirect($url){
    echo "<script>window.location.replace('$url')</script>";
 }

 function phpalert($message) {
    echo "<script>alert('$message')</script>";
}


 function imageConvert($file,$path){
                    
   $img_name = $file['name'];
   $img_type = $file['type'];
   $tmp_name = $file['tmp_name'];
   $img_explode = explode('.',$img_name);
   $img_ext = end($img_explode);
   $extensions = ["jpeg", "png", "jpg","pdf"];
   if(in_array($img_ext, $extensions) === true){
       $types = ["image/jpeg", "image/jpg", "image/png" ,"application/pdf"];
       if(in_array($img_type, $types) === true){
           $new_img_name = $img_name;
           //echo "<script>alert('".$new_img_name."')</script>";
           if(move_uploaded_file($tmp_name,$path.$new_img_name)){
       return $new_img_name;
       }else{
           echo "Please upload an image file - jpeg, png, jpg";
       }
   }else{
       echo "Please upload an image file - jpeg, png, jpg";
   }
}

}

?>