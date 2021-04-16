<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>



                <section class="pt-3 pb-1 mb-2 border-bottom">
        <h1 class="h5"> ویرایش منو</h1>
    </section>

<section class="row my-3">
    <section class="col-12">
        <form method="post" action="http://localhost/admin-panel/menu/update/<?php echo $id; ?>">

            <div class="form-group">
                <label for="name">نام</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name ..." value="<?php echo $menu['name']; ?>" required>
            </div>

            <div class="form-group">
                <label for="url">آدرس</label>
                <input type="text" class="form-control" id="url" name="url" placeholder="Enter url ..." value="<?php echo $menu['url']; ?>" required>
            </div>

            <div class="form-group">
                <label for="parent_id">زیر منو</label>
                <select name="parent_id" id="parent_id" class="form-control" autofocus>
                    <option value="" <?php if($menu['parent_id']=='') echo "selected"; ?>>root</option>
                    <?php foreach($menus->fetchAll() as $selectMenu) { ?>
                         <?php if($menu['id'] != $selectMenu['id']){ ?>
                             <option value="<?php echo $selectMenu['id']; ?>  <?php if($menu['parent_id'] == $selectMenu['id']) echo "selected"; ?>" <?php echo $selectMenu['name']; ?></option>
                    <?php }} ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-sm">بروز رسانی</button>
        </form>
    </section>
</section>



        </main>
    </div>
</div>

<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>



