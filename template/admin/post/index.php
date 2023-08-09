<?php

require_once(BASE_PATH . '/template/admin/layouts/head-tag.php')

?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h5"><i class="fas fa-newspaper"></i> Articles</h1>


    <form method="GET" action="<?= url('admin/post/search') ?>" style="display: flex; margin-right: 8px ; width: 100%;">
        <div style="display: flex; align-items: center; width: 80%;">
            <div style="font-size: 16px; margin-right: 8px; display: flex;
                    flex-direction: column ; width: 100%">
                <input type="text" name="keyword" style="padding-left: 8px ; width: 100%; margin: 1px 3px;" />
                <button type="submit" style=" margin-left: 3px; background-color: #ddd; border: none;
                            height: 30px;  border-radius: 4px; font-size: 16px; width: 92px;">
                    Tìm kiếm
                </button>
            </div>
        </div>

        <!-- <div style="display: flex; width: 50%">
            <label style="margin-right: 8px; width: 50%">
                <input type="radio" name="title"> Tiêu đề
            </label>
            <label style="width: 50%">
                <input type="radio" name="author"> Tác giả
            </label>
        </div> -->

    </form>

    <div class="btn-toolbar mb-2 mb-md-0">
        <a role="button" href="<?= url('admin/post/create') ?>" class="btn btn-sm btn-success">create</a>
    </div>

</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <caption>Danh sách bài đăng</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Tiêu đề</th>
                <th>Tóm tắt</th>
                <th>view</th>
                <th>Trạng thái</th>
                <th>Người đăng</th>
                <th>Mã danh mục</th>
                <th>Ảnh</th>
                <th >Setting</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($posts as $key => $post) { ?>

                <tr>
                    <td>
                        <?= $key += 1 ?>
                    </td>
                    <td>
                        <?= $post['title'] ?>
                    <td>
                        <?= $post['summary'] ?>
                    </td>
                    <td>
                        <?= $post['view'] ?>
                    </td>
                    <td>
                        <?php if ($post['breaking_news'] == 2) { ?>
                            <span class="badge badge-success">#breaking_news</span>
                        <?php }
                        if ($post['selected'] == 2) { ?>
                            <span class="badge badge-dark">#editor_selected</span>
                        <?php } ?>
                    </td>
                    <td>
                        <?= $post['user_id'] ?>
                    </td>
                    <td>
                        <?= $post['cat_id'] ?>
                    </td>
                    <td>
                        <img style="width: 80px;" src="<?= asset($post['image']) ?>" alt="">
                    </td>
                    <td style="width: 25rem;">
                        <a role="button" class="btn btn-sm btn-warning btn-info text-dark" href="<?= url('admin/post/breaking-news/' . $post['id']) ?>">
                            <?php if ($post['breaking_news'] == 2) { ?>
                                remove breaking news
                            <?php } else { ?>
                                add breaking news
                            <?php } ?>
                        </a>
                        <a role="button" class="btn btn-sm btn-warning btn-warning text-dark" href="<?= url('admin/post/selected/' . $post['id']) ?>">
                            <?php if ($post['selected'] == 2) { ?>
                                remove selcted
                            <?php } else { ?>
                                add selected
                            <?php } ?>
                        </a>
                        <hr class="my-1" />
                        <a role="button" class="btn btn-sm btn-primary text-white" href="<?= url('admin/post/edit/' . $post['id']) ?>">Sửa</a>
                        <a role="button" class="btn btn-sm btn-danger text-white" href="<?= url('admin/post/delete/' . $post['id']) ?>">Xóa</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>

    </table>
</div>


<script>
    function myFunction() {
        alert("Sự kiện đã xảy ra!");
        <tbody>

            <?php foreach ($posts as $key ) { ?>

                <tr>
                    <td>
                        <?= $key += 1 ?>
                    </td>
                    <td>
                        <?= $post['title'] ?>
                    </td>
                    <td>
                        <?= $post['summary'] ?>
                    </td>
                    <td>
                        <?= $post['view'] ?>
                    </td>
                    <td>
                        <?php if ($post['breaking_news'] == 2) { ?>
                            <span class="badge badge-success">#breaking_news</span>
                        <?php }
                        if ($post['selected'] == 2) { ?>
                            <span class="badge badge-dark">#editor_selected</span>
                        <?php } ?>
                    </td>
                    <td>
                        <?= $post['user_id'] ?>
                    </td>
                    <td>
                        <?= $post['cat_id'] ?>
                    </td>
                    <td>
                        <img style="width: 80px;" src="<?= asset($post['image']) ?>" alt="">
                    </td>
                    <td style="width: 25rem;">
                        <a role="button" class="btn btn-sm btn-warning btn-info text-dark" href="<?= url('admin/post/breaking-news/' . $post['id']) ?>">
                            <?php if ($post['breaking_news'] == 2) { ?>
                                remove breaking news
                            <?php } else { ?>
                                add breaking news
                            <?php } ?>
                        </a>
                        <a role="button" class="btn btn-sm btn-warning btn-warning text-dark" href="<?= url('admin/post/selected/' . $post['id']) ?>">
                            <?php if ($post['selected'] == 2) { ?>
                                remove selcted
                            <?php } else { ?>
                                add selected
                            <?php } ?>
                        </a>
                        <hr class="my-1" />
                        <a role="button" class="btn btn-sm btn-primary text-white" href="<?= url('admin/post/edit/' . $post['id']) ?>">edit</a>
                        <a role="button" class="btn btn-sm btn-danger text-white" href="<?= url('admin/post/delete/' . $post['id']) ?>">delete</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    }
</script>
<?php

require_once(BASE_PATH . '/template/admin/layouts/footer.php')

?>