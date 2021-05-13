<?php include __DIR__ . '/connect_parts/config.php'; ?>
<?php 

// $_GET['sid'];

$title = '';
$pageName = 'news_detail';

$sid = (int)$_GET['sid'];

$sql = 'SELECT * FROM news_detail where sid = "'.$sid.'" ';
$v = $pdo->query($sql)->fetchAll();

// echo json_encode([
//     // 'totalRows' => $totalRows,
//     'v' => $v,
// ],JSON_UNESCAPED_UNICODE);

// exit;

?>

<?php include __DIR__ . '/connect_parts/news_detail/newsDetail_htmlHead.php' ?>
<?php include __DIR__ . '/connect_parts/navbar2.php' ?>

    <!-- 我是麵包屑-->
    <?php foreach($v as $vBC ): ?>
        <div class="breadcrumb_style   backgroundimg_1">
            <div class="d-flex flex-wrap breadcrumb_style_1 ">
                <a href="" class="astlyep">首頁</a>
                <!-- 共用雲端找箭頭icon-->
                <img src="./img/nav_arrow_right.svg">
                <a href="<?= WEB_ROOT ?>/FTproj/news_main.php" class="astlyep">最新消息</a>
                <img src="./img/nav_arrow_right.svg">
                <a href="<?= WEB_ROOT ?>/FTproj/news_detail.php?sid=<?= $r['sid'] ?>" class="astlyep"><?= $vBC['main_title'] ?></a>
            </div>
        </div>
    <?php endforeach; ?>
   


    <div class="newsDetail_container">
        <div class="newsDetail_pageTitle">NEWS</div>

        <?php foreach($v as $v ): ?>
            <div class="newsDetail_area">
                <div class="newsDetail_imgBox">
                    <img src="<?= WEB_ROOT ?>/FTproj/img/<?= $v['img'] ?>.jpg" alt="">
                </div>

                <div class="newsDetail_wordBox">
                    <div class="newsDetail_date mt-3"><?= $v['date'] ?></div>
                    <div class="newsDetail_title"><?= $v['main_title'] ?></div>
                    <p class="newsDetail_content">
                        <?= $v['article_content'] ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>


    <?php include __DIR__ . '/connect_parts/go-top.php' ?>

    <?php include __DIR__ . '/connect_parts/news_detail/newsDetail_scripts.php' ?>
    <?php include __DIR__ . '/connect_parts/html-foot.php' ?>