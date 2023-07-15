<?php

require_once(BASE_PATH . '/template/admin/layouts/head-tag.php')

?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h5"><i class="fas fa-newspaper"></i> Articles</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a role="button" href="<?= url('admin/post/create') ?>" class="btn btn-sm btn-success">create</a>
    </div>
</div>
<div class="table-responsive">
    <!-- Test -->
    <div style="display: flex; align-items: center; width: 80%;">
        <div style="font-size: 16px; margin-right: 8px; display: flex;
                    flex-direction: column ; width: 100%">
            <input type="text" name="keyword" style="padding-left: 8px ; width: 30%; margin: 1px 3px;" />

           

        </div>
    </div>

    <div style="display: flex; width: 50%">


    </div>
    <button type="submit" onclick="myFunction()" style=" margin-left: 3px; background-color: #ddd; border: none;
                            height: 30px;  border-radius: 4px; font-size: 16px; width: 92px;">
        Tìm kiếm
    </button>

    <!-- Test -->


    <table class="table table-striped table-sm">
        <caption>List of posts</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>title</th>
                <th>summary</th>
                <th>view</th>
                <th>status</th>
                <th>user ID</th>
                <th>cat ID</th>
                <th>image</th>
                <th>setting</th>
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
                        <a role="button" class="btn btn-sm btn-primary text-white" href="<?= url('admin/post/edit/' . $post['id']) ?>">edit</a>
                        <a role="button" class="btn btn-sm btn-danger text-white" href="<?= url('admin/post/delete/' . $post['id']) ?>">delete</a>
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