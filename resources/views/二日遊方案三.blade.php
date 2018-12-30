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
                        <span class="subheading">二日遊行程---玩遍本島。夜釣小管</span>
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

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：15.5617公里</b></font><br> </div>
            <div class="grid-container">
                <div class="item1">
                    <img src="img/dayplanview/2dayC1.jpg" width="450">

                </div>
                <div class="item2">
                    <font color="#737373" size="6" face="微軟正黑體"><b>★  潭門港(10:00-10:30)</b></font><br><br>
                    <p align="left">
                        <font color="#737373" size="4" face="微軟正黑體"><b> ★  潭門港如今也是望安主要漁業用港，早期望安島上尚有中社漁港、布袋漁港、水垵漁港等碼頭停靠作業漁船，如今僅剩下潭門港做為主要漁船吞吐碼頭，其他小港大多廢棄或沒落，潭門港的地位更行鞏固。潭門港區也是望安商業活動最密集的區域，除魚貨交易以外，港區內亦有小吃店、冰店、租車行等因應旅遊發展而生的服務業者，每當快艇泊靠潭門港時間點一到，遊客湧下船艙，潭門港區便會呈現欣欣向榮的景致，而遊客退去後的潭門港則又是另外一番風情：沈靜而恢復漁村本色。</b></font><br><br>
                    </p>

                </div>
            </div>

            <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：1.27公里</b></font><br> </div>
                <div class="grid-container">
                    <div class="item1">
                        <img src="img/dayplanview/2dayC2.jpg" width="450">

                    </div>
                    <div class="item2">
                        <font color="#737373" size="6" face="微軟正黑體"><b>★  花宅聚落(10:50-11:00)</b></font><br><br>
                        <p align="left">
                            <font color="#737373" size="4" face="微軟正黑體"><b> ★  花宅聚落是澎湖地區保存較完整的澎湖傳統聚落之一。漢人300多年前移民到此，先民觀察地形，周圍山丘環繞，宛如花瓣環繞著花心，於是在花心（山仔尾頂）附近墾地築屋，因此名為「花宅」。台灣光復後，以地理位置在望安鄉本島四個村落的中央，而更名為「中社」村。由於在地人口外流，古厝日見頹圮，花宅鄉親於民國94年成立「台灣花宅聚落古厝保存協會」，以喚起政府的重視。之後經澎湖縣政府公告為「望安花宅聚落」並進一步向文建會申請登入為「重要聚落」，目前刻正研擬再發展計畫中。 在花宅的古厝群中，最顯眼的莫過於曾家古厝其書卷造型的窗戶，像極微軟的註冊商標，還有紅磚裸砌成「曾」字型的窗櫺，如同開機的通關密碼般趣味。這是曾家子孫集資自費按原貌修護而成，保存先人產業令人敬佩。</b></font><br><br>
                        </p>

                    </div>
                </div>

                <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：8.5617公里</b></font><br> </div>
                    <div class="grid-container">
                        <div class="item1">
                            <img src="img/dayplanview/2dayC3.jpg" width="450">

                        </div>
                        <div class="item2">
                            <font color="#737373" size="6" face="微軟正黑體"><b>★  望安綠蠵龜觀光保育中心(11:10-11:30)</b></font><br><br>
                            <p align="left">
                                <font color="#737373" size="4" face="微軟正黑體"><b> ★  潭門港旁不遠處，一座似海龜造型的建築，矗立於望安嶼的東南方。進入館內，望安自然生態盡收眼底，候鳥、保育生物紛紛登場，當然少不了最重要的「綠蠵龜」，除了龜種的特徵辨別及分布環境，海龜與民間祈福活動「上元乞龜」，均為館內耐人尋味的展示內容。值得注意的是佇立於展示廳入口的「好善堂」石碑，碑文記載著130年前望安地區士紳為保護海龜、耕牛而募款，立碑明文以津貼獎勵居民矜憐生命、同時報請官府准以違者重罰，以示恩威並重。現在此碑文已成為早期先民對於海龜生態保育的重要見證。 進入綠蠵龜觀光保育中心，首先映入眼簾的是展示大廳，右邊為視聽簡報室，每天上午10點至下午4點整點播放綠蠵龜生態影片，另10人以上團體可預約導覽解說服務，讓學習與參觀成為一種知性趣味的行程。</b></font><br><br>
                            </p>

                        </div>
                    </div>

                    <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：8.5617公里</b></font><br> </div>
                        <div class="grid-container">
                            <div class="item1">
                                <img src="img/dayplanview/2dayC4.jpg" width="450">

                            </div>
                            <div class="item2">
                                <font color="#737373" size="6" face="微軟正黑體"><b>★  天台山(11:50-12:30)</b></font><br><br>
                                <p align="left">
                                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  望安素來被稱為澎湖的蜜月島，寧靜的草原風光是主要的原因，而天台山上鬱鬱蔥蔥綿延不絕、隨著山勢起伏的草原風光又為其中之首，天台山上最有名的當然是呂洞賓的仙人腳印，其實是一塊風化得有點像人類足印的玄武岩。據傳呂洞賓遊山玩水時突然想大解，就跑到天台山來，當時澎湖只有花嶼跟望安兩島而已，呂洞賓一腳踩在天台山頂，另外一腳落在花嶼，蹲下就是黃金灑滿大海，而這些仙屎通通化成澎湖群島諸多的島嶼。這當然只是傳說啦！這塊風化岩站友們有機會要多看幾眼，因為以風化的速度來看，除非加以保護，否則幾年後足印就無法辨識了。</b></font><br><br>
                                </p>

                            </div>
                        </div>

                        <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：8.5617公里</b></font><br> </div>
                            <div class="grid-container">
                                <div class="item1">
                                    <img src="img/dayplanview/2dayC1.jpg" width="450">

                                </div>
                                <div class="item2">
                                    <font color="#737373" size="6" face="微軟正黑體"><b>★  潭門港(12:40-13:00)</b></font><br><br>
                                    <p align="left">
                                        <font color="#737373" size="4" face="微軟正黑體"><b> ★  潭門港如今也是望安主要漁業用港，早期望安島上尚有中社漁港、布袋漁港、水垵漁港等碼頭停靠作業漁船，如今僅剩下潭門港做為主要漁船吞吐碼頭，其他小港大多廢棄或沒落，潭門港的地位更行鞏固。潭門港區也是望安商業活動最密集的區域，除魚貨交易以外，港區內亦有小吃店、冰店、租車行等因應旅遊發展而生的服務業者，每當快艇泊靠潭門港時間點一到，遊客湧下船艙，潭門港區便會呈現欣欣向榮的景致，而遊客退去後的潭門港則又是另外一番風情：沈靜而恢復漁村本色。</b></font><br><br>
                                    </p>

                                </div>
                            </div>

                            <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：1.27公里</b></font><br></div>
        <div class="grid-container">
            <div class="item1">

                <img src="img/view20.jpg" width="450">
            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  雙心石滬(13:40-13:50)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  從馬公港搭船至頂隙港後，雙心石滬便在一旁，雙心石滬因位在七美頂隙的地方，又稱為「頂隙滬」，特殊又浪漫的心型，吸引廣告影片前來拍攝取景，也成為澎湖觀光行銷的重要景點之一。石滬是當地傳統的捕魚設施，是由玄武岩及珊瑚礁所築成，製作過程相當不易，石滬是用工法推砌，並無黏著媒介，通常要動員數人用上數年的時間方能完成，在冬季時利用漲退潮來捕捉漁獲。雙心石滬的主人每年皆會進行修護維修，到此遊賞的遊客切記勿踩踏石滬，及任意搬動石塊，讓雙心石滬的美分享給更多的民眾。</b></font><br><br>
                </p>
            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：3.6224公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayB2.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  七美人塚(14:00-15:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  相傳為明朝時，成群的盜賊從七美的南邊海岸登陸，當時島上的男人都出海捕魚，剩下老弱婦孺，其中7位女子正在附近山上農忙（一說在井旁洗衣），不幸遇上倭寇侵襲，最後不甘受辱而相攜投井。事後鄉人，用土填井，後來長出7棵枝葉茂盛的香楸樹，民國38年劉燕夫縣長與何志浩將軍前來憑弔，何將軍有感而發，撰寫七美人歌一首，刻立於石岩上，歌曰：「七美人兮白璧姿，抱貞拒賊兮死隨之，英魂永寄孤芳樹，井上長春兮開滿枝」。七美人貞烈事蹟，遂為擴大整建為「七美人貞節園」，每年都有無數的遊客前來觀賞、憑弔。</b></font><br><br>
                </p>
            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：600公尺</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">

                <img src="img/dayplanview/1dayB3.jpg" width="450">
            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  望夫石 (15:10-15:50)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  「望夫石」位在七美島上，是一座深入海面的巨型礁岩，形狀有如身懷六甲的孕婦躺臥，關於「望夫石」有個淒美的傳說，相傳在島上有一對相當恩愛的夫妻，丈夫每日出海捕魚返航時，妻子皆會在岸邊等待，然而有天妻子卻等不到丈夫回家，妻子就在岸邊痴痴的等待，但是過了數天丈夫仍未出現，妻子不久後便不支倒地，而岸邊的岩石就成了孕婦的模樣，依舊等著丈夫歸來。</b></font><br><br>
                </p>
            </div>
        </div>
        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：250公尺</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">

                <img src="img/dayplanview/1dayB4.jpg" width="450">
            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b> ★  七美嶼燈 (16:00-16:30)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b>★  七美嶼燈塔又稱為「南滬燈塔」，是澎湖群島最南端的燈塔，也是澎湖南方海域航行指標。塔身為白色，塔高8.3公尺，為鋼筋混凝土構造物，是日本人在台灣地區最後興建的一座燈塔。由於造型為露天式燈塔，每年9至12月多風季節時，鹽垢與泥灰往往隨著風覆住燈籠外的玻璃或入侵其內的水晶玻璃，燈塔看管員須經常擦拭維修，極為辛苦。</b></font><br><br>
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