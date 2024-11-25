<!--  Author Name: MH RONY.
                        GigHub Link: https://github.com/dev-mhrony
                        Facebook Link:https://www.facebook.com/dev.mhrony
                        Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                        for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
                        Visit My Website : developerrony.com -->
<div class="col-md-3  >
    Search Widget -->
    <!-- 
    <h4 class="widget-title mb-5"> </h4>

    <div class="card mb-4 border-0">
        <h5 class="card-header border-0 bg-white">ابحث هنا</h5>
        <div class="card-body">
            <form name="search" action="search.php" method="post">
                <div class="input-group">
                    <input type="text" name="searchtitle" class="form-control rounded-0" placeholder="Search for..." required>
                    <span class="input-group-btn">
                        <button class="btn btn-secondary rounded-0" type="submit"><i class="fa fa-search"></i></button>
                    </span>
            </form>
        </div>
    </div>
</div>
<!--  Author Name: MH RONY.
                        GigHub Link: https://github.com/dev-mhrony
                        Facebook Link:https://www.facebook.com/dev.mhrony
                        Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                        for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
                        Visit My Website : developerrony.com -->
<!-- <a href="tel:090 087 5999">
    <img src="images/ads.jpg" class="img-fluid"></a> -->

<!-- Side Widget -->
<div class="card my-4 border-0">
    <h5 class="card-header border-0 bg-white " >اخر الاخبار</h5>
    <div class="card-body">
        <ul class="mb-0 list-unstyled">
            <?php
            $query = mysqli_query($con, "select tblposts.id as pid,tblposts.PostImage,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
            while ($row = mysqli_fetch_array($query)) {

            ?>
                <li class="d-flex mb-2 align-items-center">
                    <img class="mr-2 rounded-circle" src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" alt="<?php echo htmlentities($row['posttitle']); ?>" width="50px" height="50px">
                    <a href="news-details.php?nid=<?php echo htmlentities($row['pid']) ?>" class="text-dark font-weight-bold"><?php echo htmlentities($row['posttitle']); ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<!-- <a href="tel:090 087 5999">
    <img src="images/ads.jpg" class="img-fluid"></a>
  -->
<div class="card my-4 border-0">
    <h5 class="card-header border-0 bg-white">Popular News</h5>
    <div class="card-body">
        <ul class="list-unstyled">
            <?php
            $query1 = mysqli_query($con, "select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId  order by viewCounter desc limit 5");
            while ($result = mysqli_fetch_array($query1)) {

            ?>
                <li class="mb-2">
                    <a href="news-details.php?nid=<?php echo htmlentities($result['pid']) ?>" class="text-dark font-weight-bold"><?php echo htmlentities($result['posttitle']); ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<!-- <a href="tel:090 087 5999">
    <img src="images/ads.jp" class="img-fluid"></a> -->

<!-- Side Widget -->
<div class="card my-4 border-0">
    <h5 class="card-header border-0 bg-white">الأكثر رواجاً</h5>
    <div class="card-body">
        <ul class="mb-0 list-unstyled">
            <?php
            $query = mysqli_query($con, "select tblposts.id as pid,tblposts.PostImage,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
            while ($row = mysqli_fetch_array($query)) {

            ?>
                <li class="d-flex mb-2 align-items-center">
                    <img class="mr-2 rounded" src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" alt="<?php echo htmlentities($row['posttitle']); ?>" width="50px" height="50px">
                    <a href="news-details.php?nid=<?php echo htmlentities($row['pid']) ?>" class="text-dark font-weight-bold"><?php echo htmlentities($row['posttitle']); ?></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<!--  Author Name: MH RONY.
                        GigHub Link: https://github.com/dev-mhrony
                        Facebook Link:https://www.facebook.com/dev.mhrony
                        Youtube Link: https://www.youtube.com/channel/UChYhUxkwDNialcxj-OFRcDw
                        for any PHP, Laravel, Python, Dart, Flutter work contact me at developer.mhrony@gmail.com  
                        Visit My Website : developerrony.com -->

<!-- <a href="tel:090 087 5999">
    <img src="images/ads.jp" class="img-fluid"></a> -->

<h5 class="card-header border-0 bg-transparent">Most Popular</h5>
<div class="card my-4 border-0">
    <div class="card-body p-2">
        <iframe width="100%" height="180px" src="https://www.youtube.com/embed/BtBKv5d-uME?si=R48loif2S3PHrq6m" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>
<!-- <a href="tel:090 087 5999">
    <img src="images/ads.jp" class="img-fluid"></a> -->
<div class="card my-4 border-0">
    <div class="card-body p-2">
        <!-- <iframe width="100%" height="180px" class="youtube" src="https://youtu.be/VN9IAy4Jz3E?si=v1Ghjbms_8p2JqsW" title="Sample Videos / Dummy Videos For Demo Use" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             -->
        <iframe width="100%" height="180px" src="https://www.youtube.com/embed/V-Qb4ZPyKeo?si=LebTwhO_4Seq7d7s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>

<!-- <a href="tel:090 087 5999">
    <img src="/images/ads.jpg" class="img-fluid"></a> -->

<div class="card my-4 border-0">
    <div class="card-body p-2">
        <iframe width="100%" height="180px" src="https://www.youtube.com/embed/wYHspF1YeA4?si=GAYqEdy3sB2Hn3b3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>
<!-- <a href="tel:090 087 5999">
    <img src="images/ads.jp" class="img-fluid"></a> -->
<div class="card my-4 border-0">
    <div class="card-body p-2">
        <iframe width="100%" height="180px" src="https://www.youtube.com/embed/5_YIYDeOM3g?si=Jgql50QkcfB_Xvow" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>

<div class="card my-4 border-0">
    <div class="card-body p-2">
        <iframe width="100%" height="180px" src="https://www.youtube.com/embed/jws4QAG4Loo?si=PH-70ay3VoDlLa9x" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>
</div>