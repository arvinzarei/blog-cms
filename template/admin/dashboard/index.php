<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>
    <div class="row mt-3">

        <div class="col-sm-6 col-lg-3">
            <a href="http://localhost/admin-panel/category" class="text-decoration-none">
                <div class="card text-white bg-gradiant-green-blue mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-clipboard-list"></i> دسته بندی ها</span> <span class="badge badge-pill right"><?php echo $categoryCount['COUNT(*)']; ?></span></div>
                    <div class="card-body">
                        <section class="font-12 my-0"><i class="fas fa-clipboard-list"></i> مشاهده تمام دسته بندی ها</section>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="http://localhost/admin-panel/user" class="text-decoration-none">
                <div class="card text-white bg-juicy-orange mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-users"></i> کاربران</span>  <span class="badge badge-pill right"><?php echo $userCount['COUNT(*)']; ?></span></div>
                    <div class="card-body">
                        <section class="d-flex justify-content-between align-items-center font-12">
                            <span class=""><i class="fas fa-users-cog"></i> مدیر <span class="badge badge-pill mx-1"><?php echo $adminCount['COUNT(*)']; ?></span></span>
                            <span class=""><i class="fas fa-user"></i> تمام کاربران <span class="badge badge-pill mx-1"><?php echo $userCount['COUNT(*)']+ $adminCount['COUNT(*)']; ?></span></span>
                        </section>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="http://localhost/admin-panel/article" class="text-decoration-none">
                <div class="card text-white bg-dracula mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-newspaper"></i> پست ها</span>  <span class="badge badge-pill right"><?php echo $articleCount['COUNT(*)']; ?></span></div>
                    <div class="card-body">
                        <section class="d-flex justify-content-between align-items-center font-12">
                            <span class=""><i class="fas fa-bolt"></i> بازدیدها <span class="badge badge-pill mx-1"><?php echo $articlesViews['SUM(view)']; ?></span></span>
                        </section>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="http://localhost/admin-panel/comment" class="text-decoration-none">
                <div class="card text-white bg-neon-life mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center"><span><i class="fas fa-comments"></i> نظرات</span>  <span class="badge badge-pill right"><?php echo $commentsCount['COUNT(*)']; ?></span></div>
                    <div class="card-body">
<!--                        <h5 class="card-title">Info card title</h5>-->
                        <section class="d-flex justify-content-between align-items-center font-12">
                            <span class=""><i class="far fa-eye-slash"></i> دیده نشده <span class="badge badge-pill mx-1"><?php echo $commentsUnseenCount['COUNT(*)']; ?></span></span>
                            <span class=""><i class="far fa-check-circle"></i> تایید شده <span class="badge badge-pill mx-1"><?php echo $commentsApprovedCount['COUNT(*)']; ?></span></span>
                        </section>
                    </div>
                </div>
            </a>
        </div>

    </div>


    <div class="row mt-2">
        <div class="col-4">
            <h2 class="h6 pb-0 mb-0">
                <b>پست های با بیشترین بازدید</b>
            </h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>عنوان</th>
                        <th>بازدید</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($articlesWithView as $article) {?>
                    <tr>
                        <td><a class="text-primary" href="http://localhost/admin-panel/article/show/<?php echo  $article['id'] ?>"><?php echo  $article['id'] ?></a></td>
                        <td><?php echo  $article['title'] ?></td>
                        <td><span class="badge badge-secondary"><?php echo  $article['view'] ?></span></td>
                    </tr>
                    <?php }?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4">
            <h2 class="h6 pb-0 mb-0">
            <b>پست های با بیشترین نظرات</b>
            </h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان</th>
                            <th>نظر</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($articlesComments as $article) {?>
                        <tr>
                            <td><a class="text-primary" href="http://localhost/admin-panel/article/show/<?php echo  $article['id'] ?>"><?php echo  $article['id'] ?></a></td>
                            <td><?php echo  $article['title'] ?></td>
                            <td><span class="badge badge-success"><?php echo  $article['comment_count'] ?></span></td>
                        </tr>
                        <?php }?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4">
            <h2 class="h6 pb-0 mb-0">
               <b> نظرات</b>
            </h2>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>نام کاربری</th>
                        <th>متن نظر</th>
                        <th>وضعیت</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($lastComments as $comment) {?>

                        <tr>
                            <td><a class="text-primary" href="http://localhost/admin-panel/comment/show/<?php echo  $comment['id'] ?>"><?php echo  $comment['id'] ?></a></td>
                            <td><?php echo  $comment['username'] ?></td>
                            <td><?php echo  $comment['comment'] ?></td>
                            <td><span class="badge badge-warning"><?php echo  $comment['status'] ?></span></td>
                        </tr>
                    <?php }?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>