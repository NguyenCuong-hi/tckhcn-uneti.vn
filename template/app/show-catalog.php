
<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
?>

<div class="body_getdata" style="display: flex; margin-top: 30px; margin-right: 32px">

    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

    <div class="the-content">

        <div class="content-image">

            <?php
            foreach ($result_image as $item):
            ?>
            <img src="<?php  $item['image'] ;?> ">

            <?php echo $item['image']?>
            <?php endforeach; ?>
            
        </div>



        <div class="ead-preview">
            <div class="ead-document" style="position: relative;padding-top: 90%;">
                <div class="ead-iframe-wrapper">
                    <iframe class="ead-iframe"
                            src="//docs.google.com/viewer?url=https%3A%2F%2Funeti.edu.vn%2Fwp-content%2Fuploads%2F2023%2F06%2F1-3.pdf&amp;embedded=true&amp;hl=en"
                            style="width: 100%; height: 100%; border: none; position: absolute; left: 0px; top: 0px; visibility: visible;"
                            title="Embedded Document"></iframe>
                </div>
                <div class="ead-document-loading"
                     style="width:100%;height:100%;position:absolute;left:0;top:0;z-index:10;">
                    <div class="ead-loading-wrap">
                        <div class="ead-loading-main">
                            <div class="ead-loading">
                                <img class="lazy"
                                     src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2055%2055'%3E%3C/svg%3E"
                                     data-src="https://uneti.edu.vn/wp-content/plugins/embed-any-document/images/loading.svg"
                                     width="55" height="55" alt="Loader">
                                <span>Loading...</span>
                            </div>
                        </div>
                        <div class="ead-loading-foot">
                            <div class="ead-loading-foot-title">
                                <img class="lazy"
                                     src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2036%2023'%3E%3C/svg%3E"
                                     data-src="https://uneti.edu.vn/wp-content/plugins/embed-any-document/images/EAD-logo.svg"
                                     alt="EAD Logo" width="36" height="23">
                                <span>Taking too long?</span>
                            </div>
                            <p>
                            </p>
                            <div class="ead-document-btn ead-reload-btn" role="button">
                                <img class="lazy"
                                     src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2012%2012'%3E%3C/svg%3E"
                                     data-src="https://uneti.edu.vn/wp-content/plugins/embed-any-document/images/reload.svg"
                                     alt="Reload" width="12" height="12"> Reload document
                            </div>
                            <span>|</span>
                            <a href="https://uneti.edu.vn/wp-content/uploads/2023/06/1-3.pdf"
                               class="ead-document-btn" target="_blank">
                                <img class="lazy"
                                     src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2012%2012'%3E%3C/svg%3E"
                                     data-src="https://uneti.edu.vn/wp-content/plugins/embed-any-document/images/open.svg"
                                     alt="Open" width="12" height="12"> Open in new tab </a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="embed_download"><a href="https://uneti.edu.vn/wp-content/uploads/2023/06/1-3.pdf" download="">Download
                    File </a></p></div>
    </div>

    <div class="img_lienket" style="width: 15%; ">
        <img style="width: 100%" src="/OnlineNewsSite/public/banner-image/bo-cong-thuong.png">
        <img style="width: 100%" src="/OnlineNewsSite/public/banner-image/DHKTKTCN.png">
        <img style="width: 100%" src="/OnlineNewsSite/public/banner-image/khcn.png">
    </div>

</div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>