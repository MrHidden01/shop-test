<?php
require_once '../../config.php';
$target_dir    = "../../asset/image/";
$target_file   = $target_dir . basename( $_FILES["product_image"]["name"] );
$uploadOk      = 1;
$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );

$product = new product();
$data=$_POST;
$id=$data['product_id'];

if($_FILES['product_image']['name']>4){
    $data['image']=$_FILES['product_image']['name'];
}else{
    $data['image']=$data['old_image'];

}
// if (isset($data['new_image'])){
//    $data['new_image'];
// }elseif (isset($data['old_image'])){
//    $data['old_image'];
// }
unset($data['old_image']);
//unset($data['id']);

$product->load($data);
$res = $product->save();

if ($res) {
    session::CreateMassage('محصول باموفقیت ویرایش شد ');
}else {
    session::CreateMassage('خطا: ویرایش محصول ناموفق بود');

}
Url::redirect('product',true);




// Check if image file is a actual image or fake image
if ( isset( $_POST["submit"] ) ) {
    $check = getimagesize( $_FILES["product_image"]["tmp_name"] );
    if ( $check !== false ) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if ( file_exists( $target_file ) ) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ( $_FILES["product_image"]["size"] > 1000000 ) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if ( $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ( $uploadOk == 0 ) {
    echo "Sorry, your file was not uploaded.";

// if everything is ok, try to uploads file
} else {
    if ( move_uploaded_file( $_FILES["product_image"]["tmp_name"], $target_file ) ) {
        echo "The file " . basename( $_FILES["product_image"]["name"] ) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
