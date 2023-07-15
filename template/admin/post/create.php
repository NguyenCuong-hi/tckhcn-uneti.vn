<?php

        require_once (BASE_PATH . '/template/admin/layouts/head-tag.php')

?>



<section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Create Article</h1>
</section>

<section class="row my-3">
    <section class="col-12">

        <form method="post" action="<?= url('admin/post/store') ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Tiêu đề</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nhập tiêu đề bài viết ..." required autofocus>
                </div>

                <div class="form-group">
                    <label for="cat_id">Danh mục</label>
                    <select name="cat_id" id="cat_id" class="form-control" required autofocus>
                <?php foreach ($categories as $category) { ?>
                 <option value="<?= $category['id'] ?>">
                        <?= $category['name'] ?>
                    </option>

                    <?php } ?>


                    </select>
        </div>

        <div class="form-group">
            <label for="images">Ảnh</label>
            <input type="file" id="images" name="image_upload[]" multiple="multiple" class="form-control-file" required autofocus>
        </div>

            <div class="form-group">
                <label for="file-upload">Tải lên tệp tin</label>
                <div class="file-upload">
                    <input type="file" id="file-upload" name="file-upload" class="file-input" accept=".pdf,.doc,.docx,.png,.jpg,.jpeg" >
                    <span class="file-name">Chọn tệp tin</span>
                    <span class="file-btn">Duyệt</span>
                </div>
            </div>

            <div class="form-group">
                <label for="published_at">Ngày đăng</label>
                <input type="date" class="form-control" id="published_at" name="published_at" required autofocus>
            </div>
            <script>
                var today = new Date().toISOString().substr(0, 10);
                document.querySelector("#published_at").value = today;
            </script>




        <div class="form-group">
            <label for="summary">Tóm tắt</label>
            <textarea class="form-control" id="summary" name="summary" placeholder="Tóm tắt ..." rows="3" required autofocus></textarea>
        </div>

        <div class="form-group">
            <label for="body">Bài viết</label>
            <textarea class="form-control" id="body" name="body" placeholder="Bài viết ..." rows="5" required autofocus></textarea>
        </div>
            <div class="form-group">
                <label for="author">Tác giả</label>
                <textarea class="form-control" id="author" name="author" placeholder="Tác giả ..." rows="3" required autofocus></textarea>
            </div>

        <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
        </form>
        </section>
        </section>




<?php

require_once (BASE_PATH . '/template/admin/layouts/footer.php')

?>