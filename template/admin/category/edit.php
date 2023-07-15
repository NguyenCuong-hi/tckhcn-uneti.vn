<?php

require_once(BASE_PATH . '/template/admin/layouts/head-tag.php')

?>

<section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Edit Category</h1>
</section>
<section class="row my-3">
    <section class="col-12">
        <form method="post" action="<?= url('admin/category/update/' . $category['id']) ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $category['name'] ?>">
            </div>
            <div class="form-group">
                <label for="name">Type</label>
                <select name="type" id="type" class="form-control" placeholder="Mời bạn nhập type...">
                    <!-- <option value="">-- Hãy chọn type --</option> -->
                    <option value="1">Khoa học - Công nghệ</option>
                    <option value="2">Kinh tế - Xã hội</option>
                    <option value="3">Diễn đàn khoa học</option>

                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Update</button>
        </form>
    </section>

    <?php

    require_once(BASE_PATH . '/template/admin/layouts/footer.php')

    ?>