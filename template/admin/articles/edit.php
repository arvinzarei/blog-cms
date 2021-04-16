<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>

<section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">ویرایش پست</h1>
</section>
<section class="row my-3">
    <section class="col-12">

        <form method="post" action="http://localhost/admin-panel/article/update/<?php echo $id;?>"
              enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">عنوان</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title ..." value="<?php echo $article['title'];?>">
            </div>

            <div class="form-group">
                <label for="cat_id">دسته بندی</label>
                <select name="cat_id" id="cat_id" class="form-control" required autofocus>
                     <?php foreach ($categories as $category) { ?>
                         <option value="<?php echo $category['id']?>"><?php echo $category['name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <img style="width: 100px;" src="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/admin-panel/' .$article['image'];?>" alt="">
                <hr/>
                <label for="image">عکس</label>
                <input type="file" id="image" name="image" class="form-control-file" autofocus>
            </div>

            <div class="form-group">
                <label for="summary">خلاصه</label>
                <textarea class="form-control" id="summary" name="summary" placeholder="summary ..." rows="3"><?php echo $article['summary'];?></textarea>
            </div>
            <div class="form-group">
                <label for="body">بدنه</label>
               <textarea class="form-control" id="body" name="body" placeholder="body ..." rows="5"><?php echo $article['body'];?></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">بروز رسانی</button>
        </form>
    </section>
</section>

<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>
