<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>

<section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5"> ویرایش کاربر</h1>
</section>

<section class="row my-3">
    <section class="col-12">
        <form method="post" action="http://localhost/admin-panel/user/update/<?php echo $id ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">نام کاربری</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter title ..." value="<?php echo $user["username"] ?>">
            </div>

            <div class="form-group">
                <label for="email">ایمیل</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter title ..." value="<?php echo $user["email"]?>">
            </div>

            <div class="form-group">
                <label for="password">رمز عبور</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Enter title ..." value="<?php echo $user["password"] ?>">
            </div>

            <div class="form-group">
                <label for="permission">سطح دسترسی</label>
                <select name="permission" id="permission" class="form-control" required autofocus>
                        <option value="user" <?php if($user['permission']=='user') echo 'selected'; ?>>کاربر</option>
                        <option value="admin" <?php if($user['permission']=='admin') echo 'selected'; ?>>مدیر</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">بروز رسانی</button>
        </form>
    </section>
</section>


<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>
