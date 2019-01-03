@extends('layouts.master')
@section('title', 'Clean Blog - Sample Post')
@section('content')

    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto auto;
            grid-gap: 0px;

            padding: 2px;
        }
        .grid-container > div {

            text-align: center;
            padding: 20px 0;
            font-size: 20px;
        }

        .item1 {

            grid-column-start: 1;
            grid-column-end:3;
        }
        .item2 {
            border: 1px solid rgba(0, 0, 0, 0.8);
            grid-column-start:3;
            grid-column-end: 6;
        }
    </style>

    <header class="intro-header" style="background-image: url('img/view8.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>行程規劃</h1>
                        <hr class="small">
                        <span class="subheading">二日遊行程---菊島北環&悠閒遊吉貝</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('layouts.link')
    <br>
    <div class="container">
        <font color="#737373" size="6" face="微軟正黑體"><b>第一天(DAY1)</b></font><br><br>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayB1.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  馬公港(9:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  「澎湖國內商港馬公碼頭區(馬公港)」簡稱澎湖港，位在馬公市區南側海岸，為一開口朝西的馬蹄形天然港灣。組織架構為一港二碼頭區，包括馬公碼頭區及位於湖西鄉的龍門尖山碼頭區。港區遮蔽良好，風浪平緩，是澎湖群島對外海運的主要門戶，也是民生物資的主要輸入港口。</b></font><br><br>
                </p>

            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：8.5617公里</b></font><br></div>
            <div class="grid-container">
                <div class="item1">
                    <img src="img/dayplanview/2dayA3.jpg" width="450">

                </div>
                <div class="item2">
                    <font color="#737373" size="6" face="微軟正黑體"><b>★ 東衛石雕公園(9:30-10:30)</b></font><br><br>
                    <p align="left">
                        <font color="#737373" size="4" face="微軟正黑體"><b> ★  東衛石雕公園座落於東衛水庫北邊，位處於潮間帶的東南側。向北邊可眺望西衛、澎湖灣等地點。澎湖群島多數地形均為玄武岩台地，不乏石雕原料，因此成就許多石雕藝術家。東衛石雕公園內共有四座大型石雕作品。 龜遊大海：除了象徵延年益壽之意，同時希望喚醒更多人對於綠蠵龜生態保育的重視。天人菊：擁有過人的強韌生命力，為澎湖的縣花，象徵澎湖居民不屈不撓的奮鬥精神。 燕鷗、玄武岩：以雕塑呈現玄武岩壯闊的氣勢，同時澎湖為海鳥的繁衍生活的重要生態地區，藉此雕塑亦讓遊客瞭解瞭解海鷗築巢下蛋的姿態。 躍上希望：藉由海豚聰慧活潑的形象，追逐海上明珠，象徵澎湖充滿希望的發展契機。</b></font><br><br>
                    </p>

                </div>
            </div>
        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離3.2144公里</b></font><br></div>
            <div class="grid-container">
                <div class="item1">
                    <img src="img/dayplanview/2dayA2.jpg" width="450">

                </div>
                <div class="item2">
                    <font color="#737373" size="6" face="微軟正黑體"><b>★ 許家村古厝(10:50-11:20)</b></font><br><br>
                    <p align="left">
                        <font color="#737373" size="4" face="微軟正黑體"><b> ★ 許家村古厝群屬於一落四櫸頭的澎湖傳統民宅形制，其過水庭的屋脊採燕尾式的官宅形式，為其最大之特色。根據古厝群的後代子孫表示，古厝約建造於日本大正時代，據今已有80年以上的歷史，雖然歷經數次的整修，但仍然保存著當初建築的規模與樣式，在許家村，甚至是全澎湖頗具特色的傳統住宅。許家村的建築保留澎湖傳統院落的子孫巷、咾咕牆、牛車道，其中為許家村29號的古厝更有精湛的裝飾壁畫跟建築特色欣賞。此外，許家村內的古厝群，呈現了中國南方聚落的梳式配置，許家村下方西側住宅所形成的長巷，尚留存「隘門」之遺跡。許家村更是澎湖灰窯業的發源地。</b></font><br><br>
                    </p>

                </div>
            </div>
        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：2.244公里</b></font><br></div>
            <div class="grid-container">
                <div class="item1">
                    <img src="img/dayplanview/2datA2.jpg" width="450">

                </div>
                <div class="item2">
                    <font color="#737373" size="6" face="微軟正黑體"><b>★  中屯風力園區(11:50-12:30)</b></font><br><br>
                    <p align="left">
                        <font color="#737373" size="4" face="微軟正黑體"><b> ★  中屯古地名叫做中墩，因座落於澎湖本島和白沙島之間形成土墩而得名，光復後取諧音為中屯。後來分別興建了永安橋和中正橋北接白沙、南接澎湖本島。之後加上跨海大橋的興建，才將馬公、湖西、白沙跟西嶼四個鄉市連成一氣。 風力發電廠位於澎湖縣白沙鄉中屯村，於2001年10月正式商業運轉，風力發電廠位於中屯第二苗圃，目前已規劃為風車公園，成為澎湖縣白沙鄉的著名旅遊景點和新地標。這座風力發電廠為台灣第二座，是澎湖第三代風力發電機，風力發電機組二期總計設置八組，每組可發電600千瓦，以電腦控制變速功能。當風力變化時，葉片的角度亦可隨之調整，轉速便可隨著發電需求調整，以維持穩定的發電功率。</b></font><br><br>
                    </p>

                </div>
            </div>
            <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：3.1415公里</b></font><br>
            </div>
            <div class="grid-container">
                <div class="item1">
                    <img src="img/dayplanview/2dayB2.jpg" width="450">

                </div>
                <div class="item2">
                    <font color="#737373" size="6" face="微軟正黑體"><b>★ 赤崁沙灘(13:00-14:00)</b></font><br><br>
                    <p align="left">
                        <font color="#737373" size="4" face="微軟正黑體"><b> ★  出發到吉貝必經的遊客中心旁，也有一片美麗的沙灘─「赤崁珊瑚貝殼沙灘」，這裡是北海吉貝的主要船隻出入港口，常可見小艇出入，沙灘上卻罕見人跡。後來由任賢齊自編自導的電影「落跑吧！愛情」拍攝場景設立於此，更在一旁搭建起小木屋及木棧道，後來交由澎管處接手經營，成為不少遊客特地慕名而來的新興景點。</b></font><br><br>
                    </p>
                </div>
            </div>

            <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：7.1944公里</b></font><br> </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/2dayB1.jpg" width="450">
            </div>
            <div class="item2">

                <font color="#737373" size="6" face="微軟正黑體"><b>★ 瓦硐牛車(14:20-14:50)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  牛車阿伯十多年前就開始駛牛車帶遊客了，原意是想讓現在的孩子感受從前生活，也讓瓦硐村熱鬧起來。在他的規劃下，遊訪村落，可是有固定路線。約略30分鐘的遊程，搭配老牛悠緩的行進步伐，阿伯一邊介紹蔡英文外婆家老厝以及著名的張百萬故居，和日治時期作為國旗台的老建築；再話起從前，回憶小時童年生活，透過一張張日本恩師的賀卡與信件，老人家講述著人生故事，隨口幾句，即是充滿人生智慧的俚語，展現無比的聰慧，讓人敬服。 來到瓦硐，乘著牛車享受不同以往的慢遊方式，欣賞眼前純淨的田園風景，與舒緩悠閒的村落氣息，更能感受澎湖的另一種美。</b></font><br><br>
                </p>
            </div>
        </div>


        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：4.548公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/2dayB3.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★ 通樑古榕(15:00-15:30)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  相傳300多年前有一廈門的商船遇大風浪沈沒於通梁近海，船上不少物資漂流到通梁岸邊，其中一株榕樹苗為通梁鄭姓(通梁最大姓氏)人氏拾起，隨起栽植於保安宮前，沒想到這株榕樹像落土歸根似的，繁茂生衍，經過幾百年的歲月一點也不畏懼澎湖的風霜，茲長成97條氣根盤節錯綜，樹蔭覆蓋面積達到660坪的古榕。</b></font><br><br>
                </p>
            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：7.1944公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/2dayB4.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  跨海大橋(16:00-16:30)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  澎湖跨海大橋是澎湖的地標，是來澎湖遊客非留影不可的拍照景點之一，把『澎湖』二字拍攝在照片裡，證明來過澎湖，一直是遊客最想做的事情之一，在通梁端橋頭附近，還可以吃到知名導演吳念真推薦的仙人掌冰，酸甜的口感讓人一吃難忘。</b></font><br><br>
                </p>

            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：3.458公里</b></font><br> </div>
            <div class="grid-container">
                <div class="item1">

                    <img src="img/dayplanview/1dayA5.jpg" width="450">
                </div>
                <div class="item2">
                    <font color="#737373" size="6" face="微軟正黑體"><b>★  小門地質館(16:30-17:30)</b></font><br><br>
                    <p align="left">
                        <font color="#737373" size="4" face="微軟正黑體"><b> ★  小門地質館面積約為498平方公尺，遊客可在小門地質館內參觀到詳細的文字介紹以及圖片展示，全館展示內容依現場參觀動線前進，設置有1.導覽地圖區2.澎湖的地景區(澎湖地質年代表)3.小門嶼區4.小門地質區(小門嶼地層、小門嶼地質、小門嶼地形)5.地質觸摸區6.澎湖地景區7.世界地質區等七個主題展區。</b></font><br><br>
                    </p>
                </div>
            </div>

                <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：3.058公里</b></font><br> </div>
        <div class="grid-container">
            <div class="item1">

                <img src="img/dayplanview/2dayB5.jpg" width="450">
            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★ 螃蟹博物館(17:50-18:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  位於北環島附近一間廟宇的旁邊 看起來並不是很起眼 但是內容卻意外豐富， 裡面有著包羅萬象 的甲殼類標本， 同時裡面的解說員也相當專業 與盡責， 從頭到尾巨細儀靡的詳細解說著 螃蟹的種類， 以及他的毒種 還有河豚的有毒與否， 內容豐富又有趣 是整個澎湖旅遊裡 最值回票價的博物館</b></font><br><br>
                </p>
            </div>
        </div>

                    <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：11.1434公里</b></font><br>
                    </div>
                    <div class="grid-container">
                        <div class="item1">

                            <img src="img/dayplanview/1dayA7.jpg" width="450">
                        </div>
                        <div class="item2">
                            <font color="#737373" size="6" face="微軟正黑體"><b>★  二崁傳統聚落 (18:20-18:50)</b></font><br><br>
                            <p align="left">
                                <font color="#737373" size="4" face="微軟正黑體"><b> ★  澎湖保留最完整的閩式傳統聚落；有在地文化特色的各類小型展覽館，包括：常民生活館、潮間帶館、社區博物館、海藻館、童玩館、褒歌館等。</b></font><br><br>
                            </p>
                        </div>
                    </div>
        <p class="text-center"><font color="#737373" size="8" face="微軟正黑體"><b>第一天旅程結束~~返回民宿</b></font><br></p>
        <div class="grid-container">
            <div class="item1">
                <img src="img/about-3.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="7" face="微軟正黑體"><b>★  洪店民宿</b></font><br><br>
                <font color="#737373" size="6" face="微軟正黑體"><b>『遠離吵雜，回歸純樸』</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★   洪店民宿有六人房，四人房和二人房，遠離塵囂的馬公鬧區，是個安靜又離鬧區不遠的澎湖小漁村。我們不只是提供住的舒適的房間，最主要的是提供人的服務，讓您像是住到老朋友家。</b></font><br><br>
                </p>

            </div>
        </div>
        <font color="#737373" size="6" face="微軟正黑體"><b>第二天(DAY2)</b></font><br><br>

                    <div class="grid-container">
                        <div class="item1">
                            <img src="img/dayplanview/2dayB5.jpg" width="450">

                        </div>
                        <div class="item2">
                            <font color="#737373" size="6" face="微軟正黑體"><b>★  馬公港(9:00-9:30)</b></font><br><br>
                            <p align="left">
                                <font color="#737373" size="4" face="微軟正黑體"><b> ★  「澎湖國內商港馬公碼頭區(馬公港)」簡稱澎湖港，位在馬公市區南側海岸，為一開口朝西的馬蹄形天然港灣。組織架構為一港二碼頭區，包括馬公碼頭區及位於湖西鄉的龍門尖山碼頭區。港區遮蔽良好，風浪平緩，是澎湖群島對外海運的主要門戶，也是民生物資的主要輸入港口。</b></font><br><br>
                            </p>

                        </div>
                    </div>
                    <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：20.5617公里</b></font><br> </div>
                    <div class="grid-container">
                        <div class="item1">
                            <img src="img/dayplanview/2dayB6.jpg" width="450">

                        </div>
                        <div class="item2">
                            <font color="#737373" size="6" face="微軟正黑體"><b>★  吉貝漁港(11:00-11:30)</b></font><br><br>
                            <p align="left">
                                <font color="#737373" size="4" face="微軟正黑體"><b> ★  位於澎湖縣白沙鄉北方最大離島吉貝嶼之南端；屬於第二類漁港。早年為「待潮」港，船隻出入完全受到潮汐的控制，直到1981年深水漁港完成之後，漁船才能隨時進出[2]。漁撈方式以延繩釣、焚寄網、流刺網及一支釣等為主，附近有養殖漁塭，淺水灘區計有80多座石滬，位居澎湖之冠。</b></font><br><br>
                            </p>

                        </div>
                    </div>
                        <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：2.5617公里</b></font><br> </div>
                    <div class="grid-container">
                        <div class="item1">
                            <img src="img/dayplanview/2dayB7.jpg" width="450">

                        </div>
                        <div class="item2">
                            <font color="#737373" size="6" face="微軟正黑體"><b>★  東方龍馬石敢當(12:00-12:30)</b></font><br><br>
                            <p align="left">
                                <font color="#737373" size="4" face="微軟正黑體"><b> ★  石敢當信仰類似金門風獅爺，負有保境安民的功能，澎湖石敢當造型多為石碑或竹符，吉貝島上則有著兩個特殊造型的石敢當：一個為缽的形貌，另一個為木魚形狀的石敢當，分別立於碼頭東、西方位。</b></font><br><br>
                            </p>

                        </div>
                    </div>
                            <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：2.5617公里</b></font><br> </div>
                    <div class="grid-container">
                        <div class="item1">
                            <img src="img/dayplanview/2dayB8.jpg" width="450">

                        </div>
                        <div class="item2">
                            <font color="#737373" size="6" face="微軟正黑體"><b>★  菜宅遺跡13:00-13:30)</b></font><br><br>
                            <p align="left">
                                <font color="#737373" size="4" face="微軟正黑體"><b> ★  軍遺址周圍留有大量菜宅可一窺東吉嶼昔日的菜宅規模，東吉嶼的菜宅建置在北側陸塊上，為了抵抗迎風面強勁的東北季風，讓農作物產量提高，舊時村民還曾 經在山坡上另築一道防風牆來減低風襲。東吉嶼人口外移後，菜宅多已廢棄且長滿雜草，夏季時，阡陌交錯的翠綠草原一望無際，宛如「翡翠豆腐」般的美景。</b></font><br><br>
                            </p>

                        </div>
                    </div>
                                <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：3.5617公里</b></font><br> </div>
                    <div class="grid-container">
                        <div class="item1">
                            <img src="img/dayplanview/2dayB9.jpg" width="450">

                        </div>
                        <div class="item2">
                            <font color="#737373" size="6" face="微軟正黑體"><b>★  後山石滬群(14:00-15:00)</b></font><br><br>
                            <p align="left">
                                <font color="#737373" size="4" face="微軟正黑體"><b> ★  吉貝最有名的除了黃金海岸的吉貝海上樂園之外，潮間帶周圍大大小小的石滬群，有數百年歷史，是先民的智慧結晶，也是許多村民賴以為生的特殊人文景觀；廣大的潮間帶及珊瑚群是海底大花園，蝦蟹貝類鮮豔、無脊椎動物繽紛美麗，這些自然資源都是造物者賜給我們的瑰寶，也豐富了白沙鄉清澈的海底世界。</b></font><br><br>
                            </p>

                        </div>
                    </div>
                                    <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：8.5617公里</b></font><br> </div>
                    <div class="grid-container">
                        <div class="item1">
                            <img src="img/dayplanview/2dayB10.jpg" width="450">

                        </div>
                        <div class="item2">
                            <font color="#737373" size="6" face="微軟正黑體"><b>★  吉貝沙灘(16:00-18:00)</b></font><br><br>
                            <p align="left">
                                <font color="#737373" size="4" face="微軟正黑體"><b> ★  吉貝嶼位在白沙島北方，是澎湖北海上最大的島嶼，面積約為3.1平方公里，東邊為地勢較高的玄武岩台地，西邊則有大片的沙灘，長七百公尺、寬兩百公尺的沙嘴地形最為著名，還曾吸引偶像劇到此取景拍攝。島嶼周圍寬廣的海域蘊藏豐富的漁獲，吉貝嶼周圍也建有大大小小約八十多座捕魚石滬，是澎湖縣總數量的七分之一，並有百餘種的鳥類及植物，擁有多元的生態資源。吉貝嶼也富有人文歷史，當地居民運用珊瑚礁砌房屋，因季節強風吹襲，利用珊瑚礁片鋪蓋在墓地上，或是堆砌成「菜宅」，讓農作物免於遭受風害。</b></font><br><br>
                            </p>

                        </div>
                    </div>


        <p class="text-center">
            <br><i class="fa fa-plane fa-4x"> <font color="#737373" size="8" face="微軟正黑體"><b>旅程結束~~返程</b></font></i>
            <i class="fa fa-ship fa-4x"></i><br><br>
        </p>
        <font color="#737373" size="6" face="微軟正黑體"><b>遊客需知</b></font><br><br>
        <font color="#737373" size="3" face="微軟正黑體"><b>  ★ 買澎湖名產要貨比三家才不吃虧。（ 黑糖糕只有三天保存期限 ，強烈建議最後一天回台灣再買）</b></font><br>
        <font color="#737373" size="3" face="微軟正黑體"><b>  ★ 買澎湖文石要第一天買最好，萬一刻錯名字還有時間修改，而且趕工出來的刻印品質會小問題較多。</b></font><br>
        <font color="#737373" size="3" face="微軟正黑體"><b>  ★ 吃澎湖海鮮可要先確定好價錢 ，很多遊客都吃完海鮮再付款時才發現價錢貴的離譜ㄋ。</b></font><br>
        <font color="#737373" size="3" face="微軟正黑體"><b>  ★ 在澎湖的大馬路上騎乘機車或開車，時速不要超過60公里 ，否則保證回台灣後一定收到超速照片。</b></font><br>
        <font color="#737373" size="3" face="微軟正黑體"><b>  ★ 使用學生證購買旅遊景點門票、離島公共交通船..等會有學生優惠價ㄡ。</b></font><br>
        <font color="#737373" size="3" face="微軟正黑體"><b>  ★ 馬公市中心無線網路漫遊已全部開通 ，歡迎各位遊客自行攜帶筆記型電腦來ㄡ。</b></font><br>

    </div>
    </div>
@endsection