<?php 
include('include/header.php');
include('include/sidebar.php');

?> 







<div class="col-lg-9">
<div class="row">
<div class="breadcrumb">
<li> <a href="index.php"> الرئيسية </a> </li>
<li class="active"> تسجيل عضوية </li>
</div>
</div>

</div>



<article class="col-md-9 col-lg-9 art_bg">








<div class="page-header">

<h1> تسجيل عضوية جديدة  <small>الحقول المؤشر عليها مطلوبة </small>    </h1> 



 </div>

 <div class="col-md-12"> 
 
 <form class="from-horizontal"  action ="" method="post" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="username"><span style="color:red;">*</span>اسم المستخدم</label>
    <input type="text" class="form-control"  name="username" placeholder="ادخل الاسم">
  

  </div>
  <div class="form-group">
    <label for="email"><span style="color:red;">*</span>البريد الالكترونى</label>
    <input type="text" class="form-control"  name="email" placeholder="ادخل البريد الالكترونى">
    
  </div>

  <div class="form-group">
    <label for="password"><span style="color:red;">*</span>كلمة المرور</label>
    <input type="password" class="form-control"    name="password" placeholder="ادخل كلمة المرور">
  </div>



  <div class="form-group">
    <label for="con_password"><span style="color:red;">*</span>تأكيد كلمة المرور</label>
    <input type="password" class="form-control"   name="con_password" placeholder="ادخل كلمة المرور مرة اخرى">
  </div>




  <div class="form-group">
    <label for="gender"><span style="color:red;">*</span>الجنس</label>
     <select class="form-control"  name="gender" >
     <option value=""> اختر الجنس </option>
     <option value="m"> ذكر </option>
     <option value="f"> انثى </option>
      </select>
  </div>




  <div class="form-group">
    <label for="about-you"><span style="color:red;">*</span>وصف مختصر</label>
    <textarea class="form-control"  name="about" placeholder="ادخل الوصف"> </textarea>
  </div>


  <div class="form-group">
    <label for="image"><span style="color:red;">*</span> الصورة الشخصية</label>
    <input type="file" class="form-control"  name="image" placeholder="ارفق الصورة"> </textarea>
  </div>



  <div class="form-group">
    <label for="facebook"><span style="color:red;">*</span> "رابط صفحتك على الفيس بوك"  </label>
    <input type="text" class="form-control"  name="facebook" placeholder="رابط صفحتك على الفيس بوك">
  </div>



  <div class="form-group">
    <label for="twitter"><span style="color:red;">*</span>"رابط صفحتك على تويتر"</label>
    <input type="text" class="form-control"  name="twitter" placeholder="رابط صفحتك على تويتر">
  </div>



  <div class="form-group">
    <label for="youtube"><span style="color:red;">*</span> "رابط صفحتك على اليوتيوب"</label>
    <input type="text" class="form-control"  name="youtube" placeholder="رابط صفحتك على اليوتيوب">
  </div>



<div class="text-center"><div id="re"> </div></div>



  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary "> تسجيل  </button>
    </div>
  </div>

</form>
<?php 
include('include/re.php');
?>
 
 
 </div>

</article>






<?php 

include('include/footer.php');?>