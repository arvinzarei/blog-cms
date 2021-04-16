<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h5 "><i class="fas fa-newspaper"></i> نظرات</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a role="button" href="#" class="btn btn-sm btn-success disabled">ایجاد</a>
        </div>
    </div>
    <section class="table-responsive">
        <table class="table table-striped table-sm">
            <caption>List of comments</caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>نویسنده</th>
                    <th>دسته بندی</th>
                    <th>نظر</th>
                    <th>وضعیت</th>
                    <th>تنظیمات</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($comments as $comment) {?>
                <tr>
                    <td><a href="http://localhost/admin-panel/comment/show/<?php echo $comment['id']; ?>">1</a></td>
                    <td><?php echo $comment['user_id']; ?></td>
                    <td><?php echo $comment['article_id']; ?></td>
                    <td><?php echo $comment['comment']; ?></td>
                    <td><?php echo $comment['status']; ?></td>
                    <td>
                        <?php if($comment['status']  == 'seen') {?>
                        <a role="button" class="btn btn-sm btn-success text-white" href="http://localhost/admin-panel/comment/approved/<?php echo $comment['id']; ?>">تایید</a>
                        <?php } else{?>
                          <a role="button" class="btn btn-sm btn-info text-white" href="http://localhost/admin-panel/comment/approved/<?php echo $comment['id']; ?>">عدم تایید</a>
                        <?php } ?>
                      </td>
                </tr>
            <?php  }?>
            </tbody>
        </table>
    </section>
    <?php
    require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
    ?>