<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h5 "><i class="fas fa-newspaper"></i> تنظیمات سایت</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a role="button" href="http://localhost/admin-panel/web-setting/set" class="btn btn-sm btn-success">تنظیم کردن</a>
    </div>
</div>
<section class="table-responsive">
    <table class="table table-striped table-sm">
        <caption>تنظیمات سایت</caption>
        <thead>
            <tr>
                <th>نام</th>
                <th>مقدار</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>عنوان</td>
                <td><?php echo $setting['title']; ?></td>
            </tr>
            <tr>
                <td>توضیحات</td>
                <td><?php echo $setting['description']; ?></td>
            </tr>
            <tr>
                <td>کلمات کلیدی</td>
                <td><?php echo $setting['keywords']; ?></td>
            </tr>
            <tr>
                <td>لوگو</td>
                <td><img src="<?php echo $setting['logo']; ?>" alt="" width="100px" height="100px"></td>
            </tr>
            <tr>
                <td>آیکن</td>
                <td><img src="<?php echo $setting['icon']; ?>" alt="" width="100px" height="100px"</td>
            </tr>
        </tbody>
    </table>
</section>

<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>