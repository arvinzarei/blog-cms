<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/head-tag.php"));
?>



            <section class="pt-3 pb-1 mb-2 border-bottom">
                <h1 class="h5">ساخت دسته بندی</h1>
            </section>
            <section class="row my-3">
                <section class="col-12">
                    <form method="post" action="http://localhost/admin-panel/category/store">
                        <div class="form-group">
                            <label for="name">عنوان</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name ...">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">ذخیره</button>
                    </form>
                </section>
            </section>
<?php
require_once(realpath(dirname(__FILE__) . "/../layouts/footer.php"));
?>