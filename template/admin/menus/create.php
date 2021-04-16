<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>

                <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5">ایجاد منو</h1>
    </section>

<section class="row my-3">
    <section class="col-12">
        <form method="post" action="http://localhost/admin-panel/menu/store">
            <div class="form-group">
                <label for="name">عنوان</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name ..." required>
            </div>

            <div class="form-group">
                <label for="url">آدرس</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="Enter url ..." required>
            </div>

            <div class="form-group">
                <label for="parent_id">زیر منو</label>
                <select name="parent_id" id="parent_id" class="form-control" autofocus>
                    <option value="">root</option>
                    <?php  foreach ($menus as $menu) { ?>
                        <option value="<?php echo $menu['id']; ?>"><?php echo $menu['name']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-sm">ذخیره</button>
        </form>
    </section>
</section>

        </main>
    </div>
</div>

<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>


