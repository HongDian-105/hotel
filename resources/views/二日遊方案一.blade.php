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
                <img src="img/dayplanview/1dayA1.jpg" width="450">
            </div>
            <div class="item2">

                <font color="#737373" size="6" face="微軟正黑體"><b>★ 馬公機場(09:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★ 馬公機場為澎湖對外門戶的交通樞紐，新穎、寬廣、舒適、潔淨，已具有國際級機場的規模。機場大廳除提供各項旅遊諮詢與服務外，想品嘗美食、採購伴手禮等應有盡有，不失為一處休憩、整備再出發的起點。機場外等著迎接您的遊覽車、公車、計程車或摩托車，將帶您前往澎湖的每個角落。</b></font><br><br>
                </p>

            </div>

        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>★ 兩地距離：4.5617公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayC1.jpg" width="450">
            </div>
            <div class="item2">

                <font color="#737373" size="6" face="微軟正黑體"><b>★ 澎湖生活博物館(09:00-10:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  本館設館宗旨係以保存澎湖地方文化資產，闡揚澎湖生活智慧，凝聚澎湖人文化共識，開拓澎湖人文化視野，建立在地文化自信心為使命，並以追求博物館專業品質與服務，發揮文化社會教育功能為目標。 其願景為：守護島嶼、胸懷海洋、看見真正的澎湖。</b></font><br><br>
                </p>
            </div>
        </div>


        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：3.5公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayC2.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★ 星光海洋牧場(10:00-11:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  不同於水上活動的熱情，也不同於南、北環島的寧靜，星光海洋牧場給您的，是一份寧靜、美麗的感覺，站在岸邊遠眺大海，站在平台上遠眺岸邊 別有一番滋味！不管是在岸邊炭烤牡蠣、欣賞風景，或者是在平台上，跟花枝鬥智，努力的把花枝釣起來！一邊犒賞五臟廟、一邊大飽眼福，還在等什麼？趕快來電預約報名呀！</b></font><br><br>
                </p>
            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：7.1944公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayC3.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  山水沙灘(11:30-12:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  這裡是澎湖的夢幻沙灘首選，放眼望去是無止盡的藍，映入眼簾的大海及翠綠馬鞍藤，絢麗的陽光灑落在湛藍的碧海上，遼闊的視野令人心曠神怡，讓人迫不及待的，想跳進這凊涼的海水中，與海水交融在一起。由於澎湖天然資源豐富，又沒受到人工污染，沙子呈現美麗的金黃色，這裡也被稱為「黃金沙灘」。 堤防上的長椅、藍天白雲與紅花綠葉，和金色的沙蔚藍的海，讓這處原本只有澎湖人懂得前來戲水的美景終究藏不住，這幾年也成為遊客指名的旅遊觀光勝地。這裡有店家開設衝浪課程，讓您趁著陽光最棒的時刻享受及體驗衝浪樂趣。</b></font><br><br>
                </p>

            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：9.058公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">

                <img src="img/dayplanview/1dayC4.jpg" width="450">
            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  風櫃洞(13:30-14:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  風櫃位在風櫃半島的尾端，屬馬公市風櫃里，是一個非常古老的漁村，因風櫃濤聲、水柱噴潮、海水抽吸聲等三大奇觀而聞名。也因侯孝賢的電影「風櫃來的人」一片，而使風櫃聲名大噪，一度還成為澎湖的代名詞。 風櫃沿海盡是發達的柱狀節理玄武岩，由於海浪長年的沖擊，形成了狹長的海蝕溝及海蝕洞。每當巨浪激盪，衝向洞口，岩洞內一陣陣如雷濤聲，如風箱鼓風，如遇到風勢大、風向恰好、海水漲潮時，還可見到水柱噴潮的奇觀，風櫃聽濤即由此而來。</b></font><br><br>
                </p>
            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：1.224公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayC5.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  蛇頭山國家風景區(14:30-16:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  蛇頭山山頂可以遠望馬公市美麗的市景，著名的西瀛虹橋也在視線範圍內，並一窺日軍松島戰艦沈船紀念碑的全貌，發現它其實是建造一艘船上，獨具匠心，也說明了與戰艦的密不可分關係。蛇頭山從古至今為主要的軍事戰略基地，是踏進台灣的跳板，經過轟轟烈烈的戰爭，原本的古蹟紅毛城已經被破壞殆盡，只剩下遺址紀念碑，不見當時壯觀的城堡建築。</b></font><br><br>
                </p>
            </div>
        </div>

        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：15.214公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/1dayB1.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  馬公港(17:00-17:30)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  「澎湖國內商港馬公碼頭區(馬公港)」簡稱澎湖港，位在馬公市區南側海岸，為一開口朝西的馬蹄形天然港灣。組織架構為一港二碼頭區，包括馬公碼頭區及位於湖西鄉的龍門尖山碼頭區。港區遮蔽良好，風浪平緩，是澎湖群島對外海運的主要門戶，也是民生物資的主要輸入港口。</b></font><br><br>
                </p>

            </div>
        </div>
        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：2.244公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/2dayA1.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  夜釣小管(18:00-20:30)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  「夜釣小管」原本為夏季漁民夜晚捕抓小管的漁業活動，後來演變為休閒觀光事業。小管是趨光性的動物，所以在每一艘漁船上都會裝設數十顆的集魚燈，用來吸引小管靠近。出海可欣賞海景落日、餘暉晚霞，美不勝收，拋開白天的燥熱與汗流浹背，享受海風徐徐吹來的涼意，忘卻城市的喧囂與吵鬧。</b></font><br><br>
                </p>

            </div>
        </div>
        <p class="text-center">
        <font color="#737373" size="8" face="微軟正黑體"><b>第一天旅程結束~~返回民宿</b></font><br></p>
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
                <img src="img/dayplanview/2datA2.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  中屯風力園區(9:00-9:30)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  中屯古地名叫做中墩，因座落於澎湖本島和白沙島之間形成土墩而得名，光復後取諧音為中屯。後來分別興建了永安橋和中正橋北接白沙、南接澎湖本島。之後加上跨海大橋的興建，才將馬公、湖西、白沙跟西嶼四個鄉市連成一氣。 風力發電廠位於澎湖縣白沙鄉中屯村，於2001年10月正式商業運轉，風力發電廠位於中屯第二苗圃，目前已規劃為風車公園，成為澎湖縣白沙鄉的著名旅遊景點和新地標。這座風力發電廠為台灣第二座，是澎湖第三代風力發電機，風力發電機組二期總計設置八組，每組可發電600千瓦，以電腦控制變速功能。當風力變化時，葉片的角度亦可隨之調整，轉速便可隨著發電需求調整，以維持穩定的發電功率。</b></font><br><br>
                </p>

            </div>
        </div>
        <div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：3.244公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/2dayA2.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★ 許家村古厝(9:50-10:30)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★ 許家村古厝群屬於一落四櫸頭的澎湖傳統民宅形制，其過水庭的屋脊採燕尾式的官宅形式，為其最大之特色。根據古厝群的後代子孫表示，古厝約建造於日本大正時代，據今已有80年以上的歷史，雖然歷經數次的整修，但仍然保存著當初建築的規模與樣式，在許家村，甚至是全澎湖頗具特色的傳統住宅。許家村的建築保留澎湖傳統院落的子孫巷、咾咕牆、牛車道，其中為許家村29號的古厝更有精湛的裝飾壁畫跟建築特色欣賞。此外，許家村內的古厝群，呈現了中國南方聚落的梳式配置，許家村下方西側住宅所形成的長巷，尚留存「隘門」之遺跡。許家村更是澎湖灰窯業的發源地。</b></font><br><br>
                </p>

            </div>
        </div><div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：2.244公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/2dayA3.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★ 東衛石雕公園(11:00-12:30)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  東衛石雕公園座落於東衛水庫北邊，位處於潮間帶的東南側。向北邊可眺望西衛、澎湖灣等地點。澎湖群島多數地形均為玄武岩台地，不乏石雕原料，因此成就許多石雕藝術家。東衛石雕公園內共有四座大型石雕作品。 龜遊大海：除了象徵延年益壽之意，同時希望喚醒更多人對於綠蠵龜生態保育的重視。天人菊：擁有過人的強韌生命力，為澎湖的縣花，象徵澎湖居民不屈不撓的奮鬥精神。 燕鷗、玄武岩：以雕塑呈現玄武岩壯闊的氣勢，同時澎湖為海鳥的繁衍生活的重要生態地區，藉此雕塑亦讓遊客瞭解瞭解海鷗築巢下蛋的姿態。 躍上希望：藉由海豚聰慧活潑的形象，追逐海上明珠，象徵澎湖充滿希望的發展契機。</b></font><br><br>
                </p>

            </div>
        </div><div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：5.2344公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/2dayA4.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  林投公園(13:00-14:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  林投公園在民國35年林投海濱首次植林9萬餘株木麻黃，到42年2月設立公園時，木麻黃業已綠蔭處處。 林投村因為早期聚落東南小溪溝兩側叢生林投而得名，據說現在的林投公園及其以東的大片沙灘上都曾遍生林投。林投樹為抗風力、定沙力很強的優良樹種，極適合澎湖地區的特殊氣候，目前則只剩公園北側尚留有一小片的植株群簇，其他地方的林投都已剷除改植木麻黃林或其他花木。林投公園的沙灘綿延3個村落，尖山、林投與隘門，總長達3,000多公尺，是全澎湖最長的沙灘，環繞湖西鄉南面的海岸，景色壯麗。沙灘沙質綿密，海水清澈，是一片潔淨漂亮的「白色珊瑚碎屑沙灘」</b></font><br><br>
                </p>

            </div>
        </div><div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：3.244公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/2dayA5.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★ 龍門鼓浪(14:10-14:50)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  澎湖古八景之一的「龍門鼓浪」指的就是龍門靶場這片海岸，遊客夏天很難見到的景象，要冬季來臨時，東北季風正面襲擊岸邊，海浪被海蝕平台阻擋，怒濤泊岸，浪花飛濺，亂石將大浪一一擊破，成為雪白的飛幕，並發出像鼓一樣的轟隆聲響，這就是冬季龍門鼓浪的狀觀景象。海蝕平台前有一土地公廟與古井。</b></font><br><br>
                </p>

            </div>
        </div><div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：2.244公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/2dayA6.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  菓葉灰窯(15:00-15:30)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  菓葉灰窯位於湖西鄉菓葉村東南方海邊，俗稱為崁仔山的國有保安林地上，是村民陳福在民國49年（1960）獨力興建的石灰燒製窯場。窯址距著名的「菓葉觀日」海岸不遠，造形相當壯觀，遠望有如「城堡」一般，因此一直很受到遊客的矚目。從建築材料來看，這座灰窯可能是經過多次的增、改建，才構成現今的風貌的。1960年構建時，因水泥還不普及，所以牆體都以玄武岩加灰漿砌築；後來增、改建的部份才出現以空心磚（水泥磚）組砌的牆體，及鋼筋混凝土的樓板或屋頂。</b></font><br><br>
                </p>

            </div>
        </div><div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：4.244公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/2dayA7.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  奎壁山(16:00-17:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  磅礡的大海開始緩緩地往左右兩邊移動，中間竟出現了 S形的礫石踏浪步道通往對面的小島，彷彿是《聖經舊約》裡，猶太先知摩西帶領以色列人逃離埃及時，將紅海一分為二的情景。 這不是虛幻的場景，也不是電影情節，而是澎湖奎壁山地質公園近年來最夯的熱門景點－「摩西分海」。這條約 300公尺長、 6公尺寬的玄武岩礫石步道，被人戲稱是台版的「摩西分海」步道，也是奎壁山目前最精彩的新風景，每年都吸引大批的遊客來朝聖，體驗大海為你開路的震撼。 過去，奎壁山的好風景在清朝就被封為舊澎湖八景之一。由於奎壁山海上遙望這座山外型像趴在海邊的烏龜，因此得名「龜山」，但因名稱不雅，後改取諧音為「奎壁山」。</b></font><br><br>
                </p>

            </div>
        </div><div> <font color="#737373" size="5" face="微軟正黑體"><b>兩地距離：5.284公里</b></font><br>
        </div>
        <div class="grid-container">
            <div class="item1">
                <img src="img/dayplanview/2dayA8.jpg" width="450">

            </div>
            <div class="item2">
                <font color="#737373" size="6" face="微軟正黑體"><b>★  青螺沙嘴(17:30-18:00)</b></font><br><br>
                <p align="left">
                    <font color="#737373" size="4" face="微軟正黑體"><b> ★  青螺沙嘴濕地位在湖西鄉虎頭山的西北岸，是長度約150公尺的鉤狀沙嘴地形，為澎湖較為罕見的海積地形。青螺沙嘴濕地在村廟真武殿前方的濕地上種植大片的紅樹林，春、秋季節豐富的濕地生態經常吸引水鳥前來覓食，是澎湖境內面積最大的紅樹林保育區，居民也常在退潮時到此撿拾螺貝。</b></font><br><br>
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