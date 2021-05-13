<?php include __DIR__ . '/connect_parts/config.php'; ?>

<?php
$title = '灣廟 | NEWS';
$pageName = 'news_main';

// 取得總筆數、總頁數、該頁的商品資料

$perPage = 5; //一頁有幾個商品
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; //使用者在看第幾頁

$t_sql = "SELECT COUNT(1) FROM news_main";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0]; //總共有多少商品
$totalPages = ceil($totalRows/$perPage);

$p_sql = sprintf("SELECT * FROM news_main LIMIT %s, %s", ($page-1)*$perPage, $perPage);

$rows = $pdo->query($p_sql)->fetchAll();

// echo json_encode([
//     'totalRows' => $totalRows,
//     'rows' => $rows,
// ],JSON_UNESCAPED_UNICODE);

// exit;


?>


<?php include __DIR__ . '/connect_parts/news_main/newsMain_htmlHead.php' ?>
<?php include __DIR__ . '/connect_parts/navbar2.php' ?>
<?php include __DIR__ . '/connect_parts/news_main/newsMain_breadcrumbs.php' ?>

    

    <div class="news_content">
        <div class="news_pageTitle">NEWS</div>
        <div class="news_area">
        <?php foreach($rows as $r): ?>
            <div class="news_box">
                <div class="news_mainImg">
                    <img src="<?= WEB_ROOT ?>/FTproj/img/<?= $r['img'] ?>.jpg" alt="">
                </div>
                <div class="news_mainWordBox">
                    <div class="news_date"><?= $r['date'] ?></div>
                    <div class="news_title"><?= $r['main_title'] ?></div>
                    <div class="news_subContent"><?= $r['sub_title'] ?></div>
                    <div class="news_moreLink">
                        <a href="<?= WEB_ROOT ?>/FTproj/news_detail.php?sid=<?= $r['sid'] ?>">Read More+</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

           

            <div class="news_slidePage">
                <nav class="trip_page position-relative d-flex justify-content-end"
                    aria-label="Page navigation example">
                    <ul class="pagination ">
                        <li class="arrow-page-left page-item">
                            <a class="page-link trip_page_item" href="?page= <?= $page-1 ?>">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>

                        <?php for($i=1; $i<=$totalPages; $i++): ?>
                            <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                                <a class="page-link trip_page_item" href="?page= <?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php endfor; ?>
                        
                        <li class="arrow-page-right page-item <?= $page>=$totalPages ? 'disabled' : '' ?>">
                            <a class="page-link trip_page_item" href="?page= <?= $page+1 ?>">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/connect_parts/go-top.php' ?>

    <?php include __DIR__ . '/connect_parts/news_main/newsMain_scripts.php' ?>
    <?php include __DIR__ . '/connect_parts/html-foot.php' ?>
