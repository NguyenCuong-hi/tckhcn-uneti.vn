

<style>

    .modal-4 a {
        margin: 0 5px;
        padding: 0;
        width: 30px;
        height: 30px;
        line-height: 30px;
        -moz-border-radius: 100%;
        -webkit-border-radius: 100%;
        border-radius: 100%;
        /* background-color: #3498DB; */
        font-size: 18px;
        color: #ffffff;
    }

    .modal-4 div {
        margin: 0 5px;
        padding: 0;
        width: 30px;
        height: 30px;
        line-height: 30px;
        -moz-border-radius: 100%;
        -webkit-border-radius: 100%;
        border-radius: 100%;
        background-color: #3498DB;
        font-size: 1vw;
        color: #ffffff;
    }

    .modal-4 div.prev {
        background-color: #3498DB;
        -moz-border-radius: 50px 0 0 50px;
        -webkit-border-radius: 50px;
        border-radius: 50px 0 0 50px;
        width: 5vw;
    }

    .modal-4 div.next {
        background-color: #3498DB;
        -moz-border-radius: 0 50px 50px 0;
        -webkit-border-radius: 0;
        border-radius: 0 50px 50px 0;
        width: 5vw;
    }

    .modal-4 div:hover {
        background-color: #CDCD00;
    }

    .modal-4 div.active, .modal-4 div:active {
        background-color: #003333;
    }
</style>

<div style="text-align: center; justify-content:center; display:flex; margin:20px 0;">
    <ul class="pagination modal-4">
        <?php
        if ($current_page > 3) {
            $first_page = 1;
            ?>
            <li>
                <a href="?per_page=<?= $item_per_page ?> &page=<?= $first_page ?>">
                    <div class="prev">
                        <i class="fa fa-chevron-left"></i>
                        <i class="fa fa-chevron-left"></i>
                        Đầu
                    </div>

                </a>
            </li>
        <?php } ?>
        <?php
        if ($current_page > 1) {
            $prev_page = $current_page - 1;
            ?>
            <li>
                <a href="?per_page=<?= $item_per_page ?> &page=<?= $prev_page ?>">
                    <div class="prev">
                        <i class="fa fa-chevron-left"></i>
                        Trước

                    </div>
                </a>
            </li>
        <?php } ?>
        <?php for ($num = 1; $num <= $totalPages; $num++) { ?>

            <?php if ($num != $current_page) { ?>
                <?php if ($num > $current_page - 3 && $num < $current_page + 3) { ?>
                    <li><a href="?per_page=<?= $item_per_page ?> &page=<?= $num ?>">
                            <div><?= $num ?></div>
                        </a></li>

                <?php } ?>
            <?php } else { ?>
                <li><a href="">
                        <div class="active"><?= $num ?></div>
                    </a></li>
            <?php } ?>
        <?php } ?>
        <?php
        if ($current_page < $totalPages - 1) {
            $next_page = $current_page + 1;
            ?>
            <li>
                <a href="?per_page=<?= $item_per_page ?> &page=<?= $next_page ?>">
                    <div class="next">
                        tiếp
                        <i class="fa fa-chevron-right"></i>

                    </div>
                </a>
            </li>
        <?php } ?>
        <?php
        if ($current_page < $totalPages - 3) {
            $end_page = $totalPages;
            ?>
            <li>
                <a href="?per_page=<?= $item_per_page ?> &page=<?= $end_page ?>">
                    <div class="next">
                        Cuối
                        <i class="fa fa-chevron-right"></i>
                        <i class="fa fa-chevron-right"></i>
                    </div>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>