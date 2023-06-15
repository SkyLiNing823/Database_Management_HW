<?php
require_once dirname(__FILE__) . "/views/include/head.php";
require_once dirname(__FILE__) . "/index_nav.php";
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>個人簡歷</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div id="main">
        <div id="profile">
            <div id="profile_left">
                <section>
                    <h1>李天寧</h1>
                    <h1>Henry Lee</h1>
                </section>
            </div>
            <div id="profile_img">
                <img src="resources/profile.jpg" width="100%" height="100%" onclcik="">
                <div id='bat_container'>
                    <img id="bat" src="resources/bonk.png" height="50%" width="50%" style="display:none">
                </div>
            </div>
            <div id="profile_right">
                <section>
                    <h2>陽明交通大學</h2>
                    <h2>資訊管理與財務金融學系 資管組</h2>
                    <h2>2002-08-23 A型</h2>
                    <h2>℡ 0906709977</h2>
                    <h2>FB:
                        <a href="https://www.facebook.com/profile.php?id=100007452076056">李天寧 </a><img src="https://i1.wp.com/cdn.iconscout.com/icon/free/png-256/facebook-logo-2019-1597680-1350125.png" height="30px" width="30px">
                    </h2>
                    <h2>IG:
                        <a href="https://www.instagram.com/skyning823/">@skyning823 </a><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/2048px-Instagram_icon.png" height="30px" width="30px">
                    </h2>
                    <h2>GitHub:
                        <a href="https://github.com/SkyLiNing823">SkyLiNing823 </a><img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" height="30px" width="30px">
                    </h2>
                </section>
            </div>
        </div>
        <hr>
        <div id="container">
            <div id="left">
                <div class="block">
                    <section>
                        <h2 class="paragraph">- Skill技能</h2>
                        <ul>
                            <li class="br">程式語言</li>
                            <ul>
                                <li>Python <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/640px-Python-logo-notext.svg.png" height="30px" width="30px"></li>
                                <li>C++ <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg" height="30px" width="30px"></li>
                                <li>HTML + CSS + JavaScript <img src="https://iconape.com/wp-content/files/ez/353342/svg/javascript-seeklogo.com.svg" height="30px" width="30px"></li>
                                <li>PHP <img src="https://img.icons8.com/ios/452/php-logo.png" height="30px" width="30px"></li>
                                <li>SQL <img src="https://cdn2.iconfinder.com/data/icons/programming-50/64/206_programming-sql-data-database-512.png" height="30px" width="30px"></li>
                            </ul>
                            <br>
                            <li class="br">語言檢定</li>
                            <ul>
                                <li>全民英檢 中高級初試 通過</li>
                                <li>JLPT N3 合格</li>
                            </ul>
                            <br>
                            <li class="br">比賽&活動經歷</li>
                            <ul>
                                <li>2021梅竹黑客松 參加獎</li>
                                <li>2021陽明交大金融科技程式菁英培訓課程 副講者</li>
                                <li>2021陽明交大日文朗讀比賽 決賽</li>
                            </ul>
                        </ul>
                    </section>
                </div>
                <div class="block">
                    <section>
                        <h2 class="paragraph">- Portfolio作品集
                        </h2>
                        <ul>
                            <li class="br">Line Bot 應用</li>
                            <a href="https://github.com/SkyLiNing823/Flask-LINE-Bot-Heroku">https://github.com/SkyLiNing823/Flask-LINE-Bot-Heroku </a><img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" height="30px" width="30px">
                            <br><br>
                            <img height="300px" width="300px" src="resources/QRcode.png">
                            <br><br><br>
                            <li class="br">Nonogram</li>
                            <a href="https://github.com/SkyLiNing823/nonogram">https://github.com/SkyLiNing823/nonogram </a><img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" height="30px" width="30px">
                            <br><br>
                            <button id="NNGbtn" onclick="location.href='./nonogram/index.html'">> Click To Play < </button>
                                    <br><br><br>
                                    <li class="br">巴哈姆特相關爬蟲</li>
                                    <br>
                                    <a href="https://github.com/SkyLiNing823/Python/blob/main/Scraper/GP_analysis_articleNum.py">小屋文章GP數分析 </a><img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" height="30px" width="30px"><br>
                                    <a href="https://github.com/SkyLiNing823/Python/blob/main/Scraper/%E5%B7%B4%E5%93%88%E6%94%B6%E8%97%8F/main_scraper.py">小屋文章收藏數分析 </a>
                                    <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" height="30px" width="30px"><br>
                                    <a href="https://github.com/SkyLiNing823/Python/blob/main/Scraper/autoreply.py">討論串指定樓層發文機器人 </a>
                                    <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" height="30px" width="30px">

                                    <br><br>
                        </ul>
                    </section>
                </div>
            </div>
            <div id="right">
                <div class="block">
                    <section>
                        <h2 class="paragraph">-Introduction自我簡介</h2>
                        <p>&emsp;個性率直、時而認真時而胡鬧的大二生，對於自己感興趣的事物會追根究柢甚至廢寢忘食，但是沒興趣的事物不只缺乏動力也很不情願去做，雖然是個不折不扣的捲毛宅男，但是意外地挺喜歡外出？
                        </p>
                    </section>
                </div>
                <div class="block">
                    <section>
                        <h2 class="paragraph">- Education學經歷
                        </h2>
                        <ul>
                            <li class="br">私立再興國小</li>
                            <li class="br">私立再興國中</li>
                            <li class="br">私立再興高中</li>
                            <li class="br">國立陽明交通大學 資訊管理與財務金融學系</li>
                        </ul>
                        <input type="image" img src="https://uniform.wingzero.tw/assets/images/badge/tw-taipei-thsh.gif" height="200px" width="200px" onclick="location.href='https://www.thsh.tp.edu.tw/nss/p/index'">
                        <input type="image" img src="https://upload.wikimedia.org/wikipedia/zh/thumb/6/6b/NCTU_emblem.svg/1200px-NCTU_emblem.svg.png" height="200px" width="200px" onclick="location.href='https://imf.nctu.edu.tw/'">

                    </section>
                </div>
                <div class="block">
                    <section>
                        <h2 class="paragraph">- Interest興趣
                        </h2>
                        <ul>
                            <li class="br">寫程式</li>
                            <p>從國中開始自學C，然後高中接觸Python，大學時學習了HTML+CSS+JavaScript、PHP還有SQL</p>
                            <p>主要研究領域為<b>網路爬蟲、機器學習</b></p>
                            <br>
                            <li class="br">看動漫、玩遊戲</li>
                            <p>我就宅，交大生不EY</p>
                            <img height="300px" width="300px" src="resources/otaku.jpg">
                            <br><br>
                            <li class="br">聽音樂</li>
                            <p>喜好ACG、J-pop等曲風</p>
                            <p>目前使用耳機為<b>水月雨KXXS</b>還有<b>final A4000</b></p>
                            <br>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script src='script.js'></script>
</body>

</html>