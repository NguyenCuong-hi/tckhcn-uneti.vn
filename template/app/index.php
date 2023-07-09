<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
?>

    <div style="display: flex;  margin-top: 30px; margin-right: 32px">
        <div style="display: flex; padding-right: 32px; width: 20%; flex-direction: column; box-sizing: border-box; padding: 8px; color: white; font-size: 12px; font-weight: 700; color: white  ">
            <div style="width: 100%; margin: 8px 0">
                <Button style=" color: white;font-weight: 700; border-radius: 8px; background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                    Trang chủ
                </Button>
            </div>
            <div style="width: 100%; margin: 8px 0">
                <Button onclick="window.location.href='<?= url('khoahoccongnghe')?>'" style="color: white; font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                    Khoa học - công nghệ
                </Button>
            </div>
            <div style="width: 100%; margin: 8px 0">
                <Button style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                    Kinh tế- xã hội
                </Button>
            </div>
            <div style="width: 100%; margin: 8px 0 ">
                <Button style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                    Diễn đàn khoa học
                </Button>
            </div>
            <div style="width: 100%; margin: 8px 0 ">
                <Button style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                    Thông tin trao đổi
                </Button>
            </div>
            <div style="width: 100%; margin: 8px 0">
                <Button style="color: white;font-weight: 700;border-radius: 8px;background-color: #348FDE; width: 100%; border: none ; padding: 18px 18px">
                    Liên hệ
                </Button>
            </div>
        </div>

<!-- _________________________________________________________________________________ -->
<div style="width: 60%; border: 1px solid #ddd; margin: 0 64px; padding: 4px; box-sizing: border-box">
    <div style="display: flex; flex: 1; justify-content: space-between">
        <!-- Cột giới thiệu -->
        <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">

            <h3 style="text-align: center; text-transform: uppercase; color: #3734ea;font-weight: 700; font-size: 30px;">Giới thiệu</h3>
            <div style=" margin-bottom: 70px; display: flex; justify-content: center; align-items: center;">
                <img style="border-radius: 5px; max-width: 580px;" src="../../../public/banner-image/gt3.png" alt="Giới thiệu">

            </div>
            <div style="margin-bottom: 70px; display: flex; justify-content:  center; align-items: center;">
                <img style="border-radius: 5px; max-width: 580px; margin-bottom: 15px;" src="../../../public/banner-image/gt3.png" alt="Giới thiệu">
            </div>

        </div>
        <!-- Cột thông báo -->
        <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">

            <h3 style="text-align: center; text-transform: uppercase; color: #3734ea;font-weight: 700; font-size: 30px;">Thông báo</h3>
            <div style=" margin-bottom: 70px; display: flex; justify-content: center; align-items: center;">
                <img style="border-radius: 5px; max-width: 580px;" src="../../../public/banner-image/gt3.png" alt="Giới thiệu">

            </div>
            <div style="margin-bottom: 70px; display: flex; justify-content:  center; align-items: center;">
                <img style="border-radius: 5px; max-width: 580px; margin-bottom: 15px;" src="../../../public/banner-image/gt3.png" alt="Giới thiệu">
            </div>

        </div>
        <!-- Cột sự kiện -->
        <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">

            <h3 style="text-align: center; text-transform: uppercase; color: #3734ea;font-weight: 700; font-size: 30px;">Sự kiện</h3>
            <div style=" margin-bottom: 70px; display: flex; justify-content: center; align-items: center;">
                <img style="border-radius: 5px; max-width: 580px;" src="../../../public/banner-image/gt3.png" alt="Giới thiệu">

            </div>
            <div style="margin-bottom: 70px; display: flex; justify-content:  center; align-items: center;">
                <img style="border-radius: 5px; max-width: 580px; margin-bottom: 15px;" src="../../../public/banner-image/gt3.png" alt="Giới thiệu">
            </div>

        </div>
    </div>
    <div style="display: flex; flex: 1; justify-content: space-between">
        <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">
            <h3 style="text-align: center; text-transform: uppercase; color: #3734ea;font-weight: 700; font-size: 30px;">Gửi bài</h3>
            <div style="display: flex; justify-content:  center; align-items: center;">
                <img style="max-width: 580px;margin-bottom: 15px;" src="../../../public/banner-image/gt3.png" alt="Sự kiện">
            </div>
        </div>
        <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">
        </div>
        <div style="background-color: #ffffff; padding: 8px; border-radius: 8px; width: 100%;">

        </div>

    </div>
</div>

        <div style="width: 20%; padding-left: 32px">
            <img style="width: 100%" src="../../../public/banner-image/bo-cong-thuong.png"/>
            <img style="width: 100%" src="../../../public/banner-image/DHKTKTCN.png"/>
            <img style="width: 100%" src="../../public/banner-image/khcn.png"/>

        </div>
    </div>
    <!-- _________________________________________________________________________________ -->
<div>
    <div style="margin-left: 60px;">
        <h3 style="text-align: left;  color: #3734ea;font-weight: 700; font-size: 30px;">Các số đã xuất bản</h3>
    </div>
    <div style="margin-left: 120px;">


        <div style="   display: flex;
    flex-wrap: wrap;
    /*justify-content: center;*/ /* căn giữa các sản phẩm */
    margin-left: -20px;
    margin-right: -20px;
    margin-top: 50px;
    margin-bottom: 50px;">
            <div style="   flex-basis: calc(20% - 10px);">
                <img style="max-width: 350px;
         margin-bottom: 50px;
        margin-right: 30px;
        cursor: pointer;
        transition: border-color .2s ease-out; transform: scale(1.1);" src="../../../public/banner-image/sach.png" alt="Nhà xuất bản 1" style="max-width: 215px; height: auto; margin-right: 10px;">
            </div>
            <div style="   flex-basis: calc(20% - 10px);">
                <img style="max-width: 350px;
       margin-bottom: 50px;
      margin-right: 30px;
      cursor: pointer;
      transition: border-color .2s ease-out; transform: scale(1.1);" src="../../../public/banner-image/sach.png" alt="Nhà xuất bản 1" style="max-width: 215px; height: auto; margin-right: 10px;">
            </div>
            <div style="   flex-basis: calc(20% - 10px);">
                <img style="max-width: 350px;
   margin-bottom: 50px;
  margin-right: 30px;
  cursor: pointer;
  transition: border-color .2s ease-out; transform: scale(1.1);" src="../../../public/banner-image/sach.png" alt="Nhà xuất bản 1" style="max-width: 215px; height: auto; margin-right: 10px;">
            </div>
            <div style="   flex-basis: calc(20% - 10px);">
                <img style="max-width: 350px;
       margin-bottom: 50px;
      margin-right: 5px;
      cursor: pointer;
      transition: border-color .2s ease-out; transform: scale(1.1);" src="../../../public/banner-image/sach.png" alt="Nhà xuất bản 1" style="max-width: 215px; height: auto; margin-right: 10px;">
            </div>
            <div style="   flex-basis: calc(20% - 10px);">
                <img style="max-width: 350px;
   margin-bottom: 50px;
  margin-right: 5px;
  cursor: pointer;
  transition: border-color .2s ease-out; transform: scale(1.1);" src="../../../public/banner-image/sach.png" alt="Nhà xuất bản 1" style="max-width: 215px; height: auto; margin-right: 10px;">
            </div>
            <div style="   flex-basis: calc(20% - 10px);">
                <img style="max-width: 350px;
   margin-bottom: 50px;
  margin-right: 5px;
  cursor: pointer;
  transition: border-color .2s ease-out; transform: scale(1.1);" src="../../../public/banner-image/sach.png" alt="Nhà xuất bản 1" style="max-width: 215px; height: auto; margin-right: 10px;">
            </div>
            <div style="   flex-basis: calc(20% - 10px);">
                <img style="max-width: 350px;
   margin-bottom: 50px;
  margin-right: 5px;
  cursor: pointer;
  transition: border-color .2s ease-out; transform: scale(1.1);" src="../../../public/banner-image/sach.png" alt="Nhà xuất bản 1" style="max-width: 215px; height: auto; margin-right: 10px;">
            </div>

        </div>
    </div>
</div>

    

    <!--    <div class="site-main-container">-->
    <!--         Start top-post Area -->
    <!--        <section class="top-post-area pt-10">-->
    <!--            <div class="container no-padding">-->
    <!--                <div class="row small-gutters">-->
    <!--                    <div class="col-lg-8 top-post-left">-->
    <!--                            --><?php //if(isset($topSelectedPosts[0])) {
//                                    ?>
    <!--                        <div class="feature-image-thumb relative">-->
    <!--                            <div class="overlay overlay-bg"></div>-->
    <!--                            <img class="img-fluid" src="--><?php //= asset($topSelectedPosts[0]['image']) ?><!--" alt="">-->
    <!--                        </div>-->
    <!--                        <div class="top-post-details">-->
    <!--                            <ul class="tags">-->
    <!--                            <li><a href="--><?php //= url('show-category/' . $topSelectedPosts[0]['cat_id']) ?><!--">--><?php //= $topSelectedPosts[0]['category'] ?><!--</a></li>-->
    <!--                            </ul>-->
    <!--                            <a href="--><?php //= url('show-post/' . $topSelectedPosts[0]['id']) ?><!--">-->
    <!--                                <h3 style="color: black;">--><?php //= $topSelectedPosts[0]['title'] ?><!--</h3>-->
    <!--                            </a>-->
    <!--                            <ul class="meta">-->
    <!--                                <li><a href="#" style="color: black;"><span class="lnr lnr-user" style="color: black;"></span>--><?php //= $topSelectedPosts[0]['username'] ?><!--</a></li>-->
    <!--                                <li><a href="#" style="color: black;">--><?php //= $topSelectedPosts[0]['created_at']  ?><!--<span class="lnr lnr-calendar-full" style="color: black;"></span></a></li>-->
    <!--                                <li><a href="#" style="color: black;">--><?php //= $topSelectedPosts[0]['comments_count'] ?><!--<span class="lnr lnr-bubble" style="color: black;"></span></a></li>-->
    <!--                            </ul>-->
    <!--                        </div>-->
    <!--                        --><?php //} ?>
    <!--                    </div>-->
    <!--                    <div class="col-lg-4 top-post-right">-->
    <!--                    --><?php //if(isset($topSelectedPosts[1])) { ?>
    <!---->
    <!--                        <div class="single-top-post">-->
    <!--                            <div class="feature-image-thumb relative">-->
    <!--                                <div class="overlay overlay-bg"></div>-->
    <!--                                <img class="img-fluid" src="--><?php //= asset($topSelectedPosts[1]['image']) ?><!--" alt="">-->
    <!--                            </div>-->
    <!--                            <div class="top-post-details">-->
    <!--                                <ul class="tags">-->
    <!--                                    <li><a href="--><?php //= url('show-category/' . $topSelectedPosts[1]['cat_id']) ?><!--">--><?php //= $topSelectedPosts[1]['category'] ?><!--</a></li>-->
    <!--                                </ul>-->
    <!--                                <a href="--><?php //= url('show-post/' . $topSelectedPosts[1]['id']) ?><!--">-->
    <!--                                    <h4>--><?php //= $topSelectedPosts[1]['title'] ?><!--</h4>-->
    <!--                                </a>-->
    <!--                                <ul class="meta">-->
    <!--                                    <li><a href="#"><span class="lnr lnr-user"></span>--><?php //= $topSelectedPosts[1]['username'] ?><!--</a></li>-->
    <!--                                    <li><a href="#">--><?php //= $topSelectedPosts[1]['created_at']  ?><!--<span class="lnr lnr-calendar-full"></span></a></li>-->
    <!--                                    <li><a href="#">--><?php //= $topSelectedPosts[1]['comments_count'] ?><!--<span class="lnr lnr-bubble"></span></a></li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        --><?php //}
//                        if(isset($topSelectedPosts[2])) { ?>
    <!--                        <div class="single-top-post mt-10">-->
    <!--                            <div class="feature-image-thumb relative">-->
    <!--                                <div class="overlay overlay-bg"></div>-->
    <!--                                <img class="img-fluid" src="--><?php //= asset($topSelectedPosts[2]['image']) ?><!--" alt="">-->
    <!--                            </div>-->
    <!--                            <div class="top-post-details">-->
    <!--                                <ul class="tags">-->
    <!--                                    <li><a href="--><?php //= url('show-category/' . $topSelectedPosts[2]['cat_id']) ?><!--">--><?php //= $topSelectedPosts[2]['category'] ?><!--</a></li>-->
    <!--                                </ul>-->
    <!--                                <a href="--><?php //= url('show-post/' . $topSelectedPosts[2]['id']) ?><!--">-->
    <!--                                    <h4>--><?php //= $topSelectedPosts[2]['title'] ?><!--</h4>-->
    <!--                                </a>-->
    <!--                                <ul class="meta">-->
    <!--                                <li><a href="#"><span class="lnr lnr-user"></span>--><?php //= $topSelectedPosts[2]['username'] ?><!--</a></li>-->
    <!--                                    <li><a href="#">--><?php //= $topSelectedPosts[2]['created_at']  ?><!--<span class="lnr lnr-calendar-full"></span></a></li>-->
    <!--                                    <li><a href="#">--><?php //= $topSelectedPosts[2]['comments_count'] ?><!--<span class="lnr lnr-bubble"></span></a></li>-->
    <!--                                </ul>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        --><?php //} ?>
    <!--                    </div>-->
    <!---->
    <!--                    --><?php //if(!empty($breakingNews)) { ?>
    <!--                    <div class="col-lg-12">-->
    <!--                        <div class="news-tracker-wrap text-left">-->
    <!--                            <h6><span> Breaking News :</span> <a href="--><?php //= url('show-post/' . $breakingNews['id']) ?><!--">--><?php //= $breakingNews['title'] ?><!--</a></h6>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    --><?php //} ?>
    <!--                </div>-->
    <!--            </div>-->
    <!--        </section>-->
    <!--         End top-post Area -->
    <!--         Start latest-post Area -->
    <!--        <section class="latest-post-area pb-120">-->
    <!--            <div class="container no-padding">-->
    <!--                <div class="row">-->
    <!--                    <div class="col-lg-8 post-list">-->
    <!--                         Start latest-post Area -->
    <!--                        <div class="latest-post-wrap">-->
    <!--                            <h4 class="cat-title post-left text-left">Latest News</h4>-->
    <!--                            --><?php //foreach ($lastPosts as $lastPost) { ?>
    <!--                            <div class="single-latest-post row align-items-center">-->
    <!--                                <div class="col-lg-5 post-left">-->
    <!--                                    <div class="feature-img relative">-->
    <!--                                        <div class="overlay overlay-bg"></div>-->
    <!--                                        <img class="img-fluid" src="--><?php //= asset($lastPost['image']) ?><!--" alt="">-->
    <!--                                    </div>-->
    <!--                                    <ul class="tags">-->
    <!--                                        <li><a href="--><?php //= url('show-category/' . $lastPost['cat_id']) ?><!--">--><?php //= $lastPost['category'] ?><!--</a></li>-->
    <!--                                    </ul>-->
    <!--                                </div>-->
    <!--                                <div class="col-lg-7 post-left text-left">-->
    <!--                                    <a href="--><?php //= url('show-post/' . $lastPost['id']) ?><!--">-->
    <!--                                        <h4>--><?php //= $lastPost['title'] ?><!--</h4>-->
    <!--                                    </a>-->
    <!--                                    <ul class="meta">-->
    <!--                                        <li><a href="#"><span class="lnr lnr-user"></span>--><?php //= $lastPost['username'] ?><!--</a></li>-->
    <!--                                        <li><a href="#">--><?php //= $lastPost['created_at'] ?><!--<span class="lnr lnr-calendar-full"></span></a></li>-->
    <!--                                        <li><a href="#">--><?php //= $lastPost['comments_count'] ?><!--<span class="lnr lnr-bubble"></span></a></li>-->
    <!--                                    </ul>-->
    <!--                                    <p class="excert text-left">-->
    <!--                                    --><?php //= $lastPost['summary'] ?>
    <!--                                        -->
    <!--                                    </p>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            --><?php //} ?>
    <!--                          -->
    <!--                 -->
    <!--                        </div>-->
    <!--                         End latest-post Area --
    -->
    <!--                         Start banner-ads Area --
                        --><?php //if(!empty($bodyBanner)) { ?>
    <!--                        <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">-->
    <!--                                <a href="--><?php //= $bodyBanner['url'] ?><!--">-->
    <!--                                <img class="img-fluid" src="--><?php //= asset($bodyBanner['image']) ?><!--" alt="">-->
    <!--                                </a>-->
    <!--                        </div>-->
    <!--                        --><?php //} ?>
    <!---->
    <!---->
    <!--                         End banner-ads Area -->
    <!--                        Start popular-post Area -->
    <!--                        <div class="popular-post-wrap">-->
    <!--                            <h4 class="title post-left text-left">Popular News</h4>-->
    <!--                            --><?php //if(isset($popularPosts[0])) { ?>
    <!--                            <div class="feature-post relative post-left text-left">-->
    <!--                                <div class="feature-img relative">-->
    <!--                                    <div class="overlay overlay-bg"></div>-->
    <!--                                    <img class="img-fluid" src="--><?php //= asset($popularPosts[0]['image']) ?><!--" alt="">-->
    <!--                                </div>-->
    <!--                                <div class="details post-left text-left">-->
    <!--                                    <ul class="tags">-->
    <!--                                        <li><a href="--><?php //= url('show-category/' . $popularPosts[0]['cat_id']) ?><!--">--><?php //= $popularPosts[0]['category'] ?><!--</a></li>-->
    <!--                                    </ul>-->
    <!--                                    <a href="--><?php //= url('show-post/' . $popularPosts[0]['id']) ?><!--">-->
    <!--                                        <h3>--><?php //= $popularPosts[0]['title'] ?><!--</h3>-->
    <!--                                    </a>-->
    <!--                                    <ul class="meta">-->
    <!--                                        <li><a href="#"><span class="lnr lnr-user"></span>--><?php //= $popularPosts[0]['username'] ?><!--</a></li>-->
    <!--                                        <li><a href="#">--><?php //= $popularPosts[0]['created_at'] ?><!--<span class="lnr lnr-calendar-full"></span></a></li>-->
    <!--                                        <li><a href="#">--><?php //= $popularPosts[0]['comments_count'] ?><!--<span class="lnr lnr-bubble"></span></a></li>-->
    <!--                                    </ul>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                            --><?php //} ?>
    <!--                            <div class="row mt-20 medium-gutters">-->
    <!--                                    --><?php //if(isset($popularPosts[1])) {  ?>
    <!--                                <div class="col-lg-6 single-popular-post">-->
    <!--                                    <div class="feature-img-wrap relative">-->
    <!--                                        <div class="feature-img relative">-->
    <!--                                            <div class="overlay overlay-bg"></div>-->
    <!--                                            <img class="img-fluid" src="--><?php //= asset($popularPosts[1]['image']) ?><!--" alt="">-->
    <!--                                        </div>-->
    <!--                                        <ul class="tags">-->
    <!--                                            <li><a href="--><?php //= url('show-category/' . $popularPosts[1]['cat_id']) ?><!--">--><?php //= $popularPosts[1]['category'] ?><!--</a></li>-->
    <!--                                        </ul>-->
    <!--                                    </div>-->
    <!--                                    <div class="details post-left text-left">-->
    <!--                                        <a href="--><?php //= url('show-post/' . $popularPosts[1]['id']) ?><!--">-->
    <!--                                            <h4>--><?php //= $popularPosts[1]['title'] ?><!--</h4>-->
    <!--                                        </a>-->
    <!--                                        <ul class="meta">-->
    <!--                                            <li><a href="#"><span class="lnr lnr-user"></span>--><?php //= $popularPosts[1]['username'] ?><!--</a></li>-->
    <!--                                            <li><a href="#">--><?php //= $popularPosts[1]['created_at'] ?><!--<span class="lnr lnr-calendar-full"></span></a></li>-->
    <!--                                            <li><a href="#">--><?php //= $popularPosts[1]['comments_count'] ?><!--<span class="lnr lnr-bubble"></span></a></li>-->
    <!--                                        </ul>-->
    <!--                                        <p class="excert post-left text-left">-->
    <!--                                            --><?php //= $popularPosts[1]['summary'] ?>
    <!--                                        </p>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                --><?php //}
//                                if ($popularPosts[2]) {
//                                    ?>
    <!--                                <div class="col-lg-6 single-popular-post">-->
    <!--                                    <div class="feature-img-wrap relative">-->
    <!--                                        <div class="feature-img relative">-->
    <!--                                            <div class="overlay overlay-bg"></div>-->
    <!--                                            <img class="img-fluid" src="--><?php //= asset($popularPosts[2]['image']) ?><!--" alt="">-->
    <!--                                        </div>-->
    <!--                                        <ul class="tags post-left text-left">-->
    <!--                                        <li><a href="--><?php //= url('show-category/' . $popularPosts[2]['cat_id']) ?><!--">--><?php //= $popularPosts[2]['category'] ?><!--</a></li>-->
    <!--                                        </ul>-->
    <!--                                    </div>-->
    <!--                                    <div class="details post-left text-left">-->
    <!--                                        <a href="--><?php //= url('show-post/' . $popularPosts[2]['id']) ?><!--">-->
    <!--                                        <h4>--><?php //= $popularPosts[2]['title'] ?><!--</h4>-->
    <!--                                        </a>-->
    <!--                                        <ul class="meta">-->
    <!--                                        <li><a href="#"><span class="lnr lnr-user"></span>--><?php //= $popularPosts[2]['username'] ?><!--</a></li>-->
    <!--                                            <li><a href="#">--><?php //= $popularPosts[2]['created_at'] ?><!--<span class="lnr lnr-calendar-full"></span></a></li>-->
    <!--                                            <li><a href="#">--><?php //= $popularPosts[2]['comments_count'] ?><!--<span class="lnr lnr-bubble"></span></a></li>-->
    <!--                                        </ul>-->
    <!--                                        <p class="excert post-left text-left">-->
    <!--                                            --><?php //= $popularPosts[2]['summary'] ?>
    <!--                                        </p>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                --><?php
//                                } ?>
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                         End popular-post Area -->
    <!--                    </div>-->
    <!--                    --><?php //
//                        require_once(BASE_PATH . '/template/app/layouts/sidebar.php');
//                        ?>
    <!--                </div>-->
    <!--            </div>-->
    <!--        </section>-->
    <!--        End latest-post Area -->
    <!--    </div>-->

    <!-- start footer Area -->
<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>