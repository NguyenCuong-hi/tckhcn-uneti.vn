<?php

        require_once (BASE_PATH . '/template/admin/layouts/head-tag.php')

?>
    <script src="../../plugins/ckeditor/ckeditor.js"></script>


<section class="pt-3 pb-1 mb-2 border-bottom">
    <h1 class="h5">Sửa bài viết</h1>
</section>

<section class="row my-3">
    <section class="col-12">

        <form method="post" action="<?= url('admin/post/update/' . $post['id']) ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Tiêu đề</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $post['title'] ?>" required autofocus>
                </div>

                <div class="form-group">
                    <label for="cat_id">Danh mục</label>
                    <select name="cat_id" id="cat_id" class="form-control" required autofocus>
                <?php foreach ($categories as $category) { ?>
                 <option value="<?= $category['id'] ?>" <?php if($category['id'] == $post['cat_id']) echo 'selected' ?> >
                        <?= $category['name'] ?>
                    </option>

                    <?php } ?>
                  

                    </select>
        </div>

            <div class="form-group">
                <label for="images">Ảnh</label>
                <input type="file" id="images" name="image_upload[]" multiple="multiple" class="form-control-file" >
            </div>

            <div class="form-group">
                <label for="file_upload">Tải lên tệp tin</label>
                <div class="file_upload">
                    <input type="file" id="file-upload" name="file_upload[]" multiple = "multiple" class="file-input" accept=".pdf,.doc,.docx,.png,.jpg,.jpeg" >
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
            <textarea class="form-control" id="summary" name="summary" placeholder="summary ..." rows="3"><?= $post['summary'] ?></textarea>
        </div>

            <script>
                CKEDITOR.replace('body');
            </script>

        <div class="form-group">
            <label for="body">Bài viết</label>
            <textarea class="form-control" id="body" name="body" placeholder="body ..." rows="5"><?= $post['body'] ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-sm">Update</button>
        </form>
        </section>
        </section>




<?php

require_once (BASE_PATH . '/template/admin/layouts/footer.php')

?>