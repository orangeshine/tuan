<?php
/*
Template Name:PC关于我们
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>团建前哨站-聚励体验-关于我们</title>
    <link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="32x32">
    <link rel="icon" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
    <meta name="msapplication-TileImage" content="http://www.juliedu.com/wp-content/uploads/2017/01/cropped-logo.png">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.juliedu.com/css/iconfont.css">
    <style>
        .aboutussec
        {
            width:880px;
            margin:0 auto;
            padding:10px;
            font-size:14px;
            font-family: "Helvetica Neue", "Luxi Sans", "DejaVu Sans", Tahoma, "Hiragino Sans GB", "Microsoft Yahei", sans-serif;
        }
        .aboutussec h2
        {
            font-size: 1.2rem;
            text-align: center;
            color: #4c4c4c;
            padding-bottom: 20px;
            border-bottom: 1px dashed gainsboro;
        }
        .aboutussec img
        {
            max-width: 800px;
            display: inherit;
            text-align: center;
            margin:0 auto;
        }
       .aboutussec .des
        {
            margin:30px 0;
            text-align: center;
        }
        .des div
        {
            display: inline-block;
            width:32%;
        }
        .des div ul
        {
            text-align: left;
            padding: 0;
            display: inline-block;
        }
        .sec
        {
            margin-top:50px;
        }
        .red
        {
            background-color: #ea847f;
            color:#fff;
            border-radius: 10px;
        }
        .purple
        {
            background-color: #9445ba;
            color:#fff;
            border-radius: 10px;
        }
        .yellow
        {
            background-color: #f9db61;
            color:#fff;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <?php include('nav.php'); ?>
    <div class="aboutussec">
        <h2>关于我们</h2>
        <div>
            <p>聚励体验是一站式团建服务机构，产品和服务涵盖团队建设、户外拓展、企业年会等各类团队活动，公司核心成员深耕体验九年，拥有一批资深的体验式培训师和高素质的服务团队，秉承严格的安全标准、规范的服务流程、定制的团建方案和一流的活动呈现。</p>
        </div>
        <h2 class="sec">团建的意义</h2>
        <img src="http://www.juliedu.com/img/yuan.png" alt="">
        <div class="des">
            <div class="red">
                <ul>
                    <li>促进组织变化中达成共识</li>
                    <li>减少组织变革中的沟通成本</li>
                    <li>推动企业文化的内化</li>
                </ul>
            </div>
            <div class="purple">
                <ul>
                    <li>加速团队内部的融合</li>
                    <li>构筑团队信任合作基础</li>
                    <li>增强团队凝聚力和战斗力</li>
                </ul>
            </div>
            <div class="yellow">
                <ul>
                    <li>体验是团队的一面镜子</li>
                    <li>帮助组织和个人找到团队薄弱点</li>
                    <li>为团队后续建设提供参考</li>
                </ul>
            </div>
        </div>
        <h2 class="sec">部分服务过的客户</h2>
        <img src="http://www.juliedu.com/img/kehu.png" alt="">
    </div>
    <?php include('footer.php'); ?>
</body>
</html>