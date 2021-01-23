

  <?php
 include_once ('config.php');

if (isset ($_POST['submit'])){

$username = strip_tags ($_POST['username']);
$email = $_POST['email'];
$gender = $_POST['gender'];
$about =  strip_tags ($_POST['about']);
$facebook = htmlspecialchars ($_POST['facebook']);
$twitter =  htmlspecialchars ($_POST['twitter']);
$youtube =  htmlspecialchars ( $_POST['youtube']);
$date = date("Y-m-d");

if(empty ($username)){
  echo '<div class="alert alert-danger" role="alert"> الرجاء ادخال اسم  </div>';
}

elseif (empty ($email)){

    echo '<div class="alert alert-danger" role="alert"> الرجاء ادخال اسم الاميل </div>';

}
elseif (!filter_var ($email, FILTER_VALIDATE_EMAIL )){

  echo '<div class="alert alert-danger" role="alert"> الرجاء ادخال  الرقم الاميل </div>';
}

  elseif (empty ($_POST['password'])){

echo '<div class="alert alert-danger" role="alert"> الرجاء ادخل الرقم السرى  </div>';
}
 elseif (empty ($_POST['con_password'])){

  echo '<div class="alert alert-danger" role="alert"> الباسورد لا يتوافق </div>';
}
 elseif ($_POST['password'] != $_POST ['con_password']){

   echo '<div class="alert alert-danger" role="alert"> Erorr </div>';
}


//else {

//$sql_username = mysqli_query($conn, "SELECT 'username' FROM 'users' WHERE 'username' = 'username' " );
//$sql_email = mysqli_query($conn, "SELECT 'email' FROM 'users' WHERE 'email' = 'email' " );

//if (mysqli_num_rows($sql_username) > 0) {
//  echo '<div class="alert alert-danger" role="alert"> عذرا اسم المستخدم مسجل بالفعل </div>';

//}elseif  (mysqli_num_rows($sql_email) > 0) {

//  echo '<div class="alert alert-danger" role="alert">عذرا البريد الالكترونى مسجل بالفعل </div>';


else if{
   (isset($_FILES['image'])){

  $image = $_FILES['image'];
  $image_name = $image ['name'];
  $image_tmp = $image ['tmp_name'];
  $image_size = $image ['size'];
  $image_error = $image ['error'];

   $image_exe = explode ('.' , $image_name );
    $image_exe = strtolower (end($image_exe));

  $allow = array('png','jpg','gif','jepg','ai');
  if ( in_array( $image_exe , $allow )) {

  if ($image_error === 0) {

  if ($image_size <= 3000000) {

  $new_name = uniqid('user',false) . '.' . $image_exe;
  $image_dir = './images/avatar/' . $new_name;
  $image_db = 'images/avatar' . $new_name;
  if (move_uploaded_file($image_tmp,$image_dir)) {
$password = md5($_POST ['password']);

$insert = "INSERT INTO users ('username','email','password','gender','image','about_you','facebook','twiter','youtube','reg_date','role')
                        VALUES ('$username','$email','$password','$gender','$image_db','$about','$facebook','$twitter','$youtube', '$date', 'user')";

   if (mysqli_query($conn, $insert)) {
      echo '<div class="alert alert-success" role="alert">  تم تسجيلك لدينا بنجاح  </div>';

    }
    else {
      echo "error database";
    }

  }

}



?>
