<?php

include './inc/bd.php';

include './inc/form.php';
include './inc/selct.php';

include './inc/db_close.php';

?>

<?php include './part/header.php'?>



        <div class="container">
        <div class="position-relative  text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <img src="./Credi.jpeg" alt="">
                <h1 class="display-4 fw-normal">اربح مع يحيى</h1>
                <p class="lead fw-normal">باقي على فتح التسجيل</p>
                <h3 id="countdown"></h3>
                <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
            </div>
              <div class="container">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">تابع البث المباشر على منتدى نور من الرابط الموجود بالتاريخ أعلاه</li>
                        <li class="list-group-item">يجب تسجيل الدخول هنا حتى تتمكن من الاشتراك في المسابقة</li>
                        <li class="list-group-item">اختيار اسم أو بريد إلكتروني مطابق للفيديو المباشر</li>
                        <li class="list-group-item">الربح يسهل على نسخة مجانية من برنامجنا</li>
                    </ul> 
              </div>

        </div>


  

        <div class="container">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
        <form class="mb-3" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
            <h3>الرجاء ، أدخل معلوماتك</h3>

            <div class="mb-3">
                <label class="form-label">الاسم الأول</label>
                <input type="text" name="firstName" class="form-control"
                    value="<?php echo htmlspecialchars($firstName); ?>">
                <div class="form-text error"><?php echo $errors['firstNameError']; ?></div>
            </div>

            <div class="mb-3">
                <label class="form-label">الاسم الأخير</label>
                <input type="text" name="lastName" class="form-control"
                    value="<?php echo htmlspecialchars($lastName); ?>">
                <div class="form-text error"><?php echo $errors['lastNameError']; ?></div>
            </div>

            <div class="mb-3">
                <label class="form-label">البريد الإلكتروني</label>
                <input type="text" name="email" class="form-control"
                    value="<?php echo htmlspecialchars($email); ?>">
                <div class="form-text error"><?php echo $errors['emailError']; ?></div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto my-5"></div>
             <button type="submit" name="submit" class="btn btn-primary">إرسال المعلومات</button>
            
        </form>
    </div>
 
<div class="loadercon">
    <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>
    <!-- Button trigger modal -->
 <div class="d-grid gap-2 col-6 mx-auto my-5">

<button type="button" id="winner" class="btn btn-primary">
 اختيار الرابح </button>
</div>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalLabel">
                   الرابح فى المسابقة 
        
       </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
            
              <?php /*تامين المخرجات*/ foreach ($users as  $user) :?>
            <h3 class=" display-3 text-center  modal-title" id="modalLabel">
                <?php echo  htmlspecialchars($user['firstname'])
                 . ' ' .  htmlspecialchars($user['lastname'])?></h3>
        <?php endforeach; ?>
    </div>
  </div>
</div>

<?php include './part/footer.php';?>
