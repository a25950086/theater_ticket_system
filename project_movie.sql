-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-01-15 19:45:34
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `佩佩豬2.0`
--

-- --------------------------------------------------------

--
-- 資料表結構 `auditorium`
--

CREATE TABLE `auditorium` (
  `cName` varchar(20) NOT NULL,
  `aNumber` int(4) NOT NULL,
  `seats` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `auditorium`
--

INSERT INTO `auditorium` (`cName`, `aNumber`, `seats`) VALUES
('國賓影城', 1, 320),
('國賓影城', 2, 380),
('國賓影城', 3, 400),
('國賓影城', 4, 400),
('天母影城', 1, 280),
('天母影城', 2, 280),
('天母影城', 3, 340),
('天母影城', 4, 400),
('威秀影城', 1, 360),
('威秀影城', 2, 380),
('威秀影城', 3, 400),
('威秀影城', 4, 400),
('秀泰影城', 1, 280),
('秀泰影城', 2, 360),
('秀泰影城', 3, 360),
('秀泰影城', 4, 400),
('秀泰影城', 5, 450),
('大直影城', 1, 420),
('大直影城', 2, 380);

-- --------------------------------------------------------

--
-- 資料表結構 `cinemas`
--

CREATE TABLE `cinemas` (
  `cName` varchar(20) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `cPhone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `cinemas`
--

INSERT INTO `cinemas` (`cName`, `Address`, `cPhone`) VALUES
('國賓影城', '台北市中山區長春路176號', 225155757),
('大直影城', '台北市中山區敬業三路22號6樓', 285022208),
('天母影城', '台北市士林區忠誠路二段202號', 228763330),
('威秀影城', '台北市信義區松仁路58號', 287800800),
('秀泰影城', '基隆市中正區信一路177號', 224212388);

-- --------------------------------------------------------

--
-- 資料表結構 `comeout`
--

CREATE TABLE `comeout` (
  `cName` varchar(20) NOT NULL,
  `aNumber` int(4) NOT NULL,
  `mTitle` varchar(20) NOT NULL,
  `screening` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `comeout`
--

INSERT INTO `comeout` (`cName`, `aNumber`, `mTitle`, `screening`) VALUES
('國賓影城', 1, 'G風暴', '2022-01-12 19:44:21'),
('國賓影城', 2, 'GUCCI：豪門謀殺案', '2022-01-17 21:38:01'),
('國賓影城', 3, '魔境夢遊', '2022-01-05 20:33:11'),
('大直影城', 1, '忍者寶寶', '2022-01-03 15:26:04'),
('大直影城', 2, '蜘蛛人：無家日', '2022-01-08 14:22:04'),
('大直影城', 3, '無間對決', '2022-01-01 22:31:51'),
('天母影城', 1, '終極狩獵團', '2022-01-15 16:18:55'),
('天母影城', 2, '郊區的鳥', '2022-01-11 21:54:17'),
('天母影城', 3, '修行', '2022-01-10 14:12:33'),
('威秀影城', 1, '第一爐香', '2022-01-14 18:14:16'),
('威秀影城', 2, '金牌特務：金士曼起源', '2022-01-08 09:50:20'),
('威秀影城', 3, '忍者寶寶', '2022-01-12 16:44:45'),
('秀泰影城', 1, '在車上', '2022-01-11 11:52:22'),
('秀泰影城', 2, '慕夏狂潮－從崛起到永恆', '2022-01-05 18:43:17'),
('秀泰影城', 3, '我讓最想被擁抱的男人給威脅了 ', '2022-01-12 09:56:11');

-- --------------------------------------------------------

--
-- 資料表結構 `has`
--

CREATE TABLE `has` (
  `cName` varchar(20) NOT NULL,
  `pNumber` int(4) NOT NULL,
  `tNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `has`
--

INSERT INTO `has` (`cName`, `pNumber`, `tNumber`) VALUES
('國賓影城', 1, 14),
('國賓影城', 2, 6),
('國賓影城', 3, 8),
('秀泰影城', 4, 4),
('秀泰影城', 5, 1),
('威秀影城', 6, 13),
('威秀影城', 7, 10),
('大直影城', 8, 3),
('大直影城', 9, 2),
('大直影城', 10, 9),
('天母影城', 11, 2),
('天母影城', 12, 7),
('天母影城', 13, 5);

-- --------------------------------------------------------

--
-- 資料表結構 `include`
--

CREATE TABLE `include` (
  `mTitle` varchar(20) NOT NULL,
  `mId` varchar(10) NOT NULL,
  `iNumber` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `include`
--

INSERT INTO `include` (`mTitle`, `mId`, `iNumber`) VALUES
('2gether電影版：只因我們天生一對', 'A143672001', 3),
('GUCCI：豪門謀殺案', 'A144519807', 4),
('G風暴', 'A197464751', 2),
('修行', 'K193448849', 1),
('嵐 5x20演唱會電影～回憶全記錄～', 'M160042392', 3),
('慕夏狂潮－從崛起到永恆', 'M144643353', 5),
('月老', 'M144643353', 4),
('永恆族', 'M160732793', 3),
('終極狩獵團', 'K128365602', 4),
('豪門媳婦日記', 'K193448849', 2),
('郊區的鳥', 'M144643353', 6),
('金牌特務：金士曼起源', 'F149481492', 4),
('駭客任務：復活', 'M160732793', 5),
('魔境夢遊', 'F149481492', 3);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `mId` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mName` varchar(10) NOT NULL,
  `mPhone` int(10) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`mId`, `password`, `mName`, `mPhone`, `email`) VALUES
('A125526131', '125365', '米卡', 914315330, 'huhalari@altmails.com'),
('A140591107', '9149814', '林墨', 958990373, 'kezabazi@altmails.com'),
('A143672001', '96541961', '劉宇', 986375431, 'hidonadi@altmails.com'),
('A144519807', '198181', '力丸', 927382909, 'yumovihe@altmails.com'),
('A159105806', '7965', '高卿塵', 953606221, 'galaguku@altmails.com'),
('A197464751', '9781497', '贊多', 925698000, 'bebatipo@altmails.com'),
('F149481492', '5754', '任胤蓬', 970886762, 'cifemusi@altmails.com'),
('F185684631', '3758453', '吳宇恆', 920776015, '0920776015'),
('K109871578', '7411852', '伯遠', 912665631, 'nolazoja@altmails.com'),
('K128365602', '51561498', '張嘉元', 929846386, 'huseximi@altmails.com'),
('K184738849', '19812981', '尹浩宇', 972500232, 'lasinono@altmails.com'),
('K193448849', '714951759', '周柯宇', 937311640, 'simotapi@altmails.com'),
('M117394778', '3256156', '劉彰', 988113050, 'sijapexa@altmails.com'),
('M119627752', '1424453', '井汲大翔', 919412061, '0919412061'),
('M136443849', '11117112954', '甘望星', 952065058, 'rokehute@altmails.com'),
('M144643353', '453543', '奧斯卡', 955248873, 'gepikisi@altmails.com'),
('M160042392', '17718181', '慶憐', 914428719, 'xutanico@altmails.com'),
('M160732793', '6765434', '利路修', 929323080, 'tudakemo@altmails.com'),
('M190718078', '354378', '張星特	', 925963018, 'notecesu@altmails.com');

-- --------------------------------------------------------

--
-- 資料表結構 `movie`
--

CREATE TABLE `movie` (
  `mTitle` varchar(20) NOT NULL,
  `mTime` date NOT NULL,
  `mRating` varchar(4) NOT NULL,
  `mDirector` varchar(20) NOT NULL,
  `mLeading` varchar(40) NOT NULL,
  `mLength` time NOT NULL,
  `mPlot` varchar(200) NOT NULL,
  `mTrailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `movie`
--

INSERT INTO `movie` (`mTitle`, `mTime`, `mRating`, `mDirector`, `mLeading`, `mLength`, `mPlot`, `mTrailer`) VALUES
('2gether電影版：只因我們天生一對', '2021-12-24', '80', '維拉奇通吉拉', '瓦奇拉維特奇瓦雷、梅塔文歐帕西安卡瓊', '01:51:00', '大一新生Tine (Win 飾) 被一名男同學瘋狂追求，用盡全力也無法擺脫他，無計可施之下Tine與朋友們突發奇想，決定找上全校最帥的校草Sarawat (Bright 飾) 來扮演他的「假男友」，好讓纏人的追求者知難而退。在Tine的努力不懈之下，高冷的Sarawat終於答應了，隨著相處兩人關係竟日漸曖昧，而Tine也不知不覺地陷入Sarawat的霸道攻勢裡…', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/GgyNLvqDJP4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('GUCCI：豪門謀殺案', '2022-01-07', '85', '雷利史考特', '女神卡卡、亞當崔佛、傑瑞德雷托', '02:38:00', '一片靈感來自義大利時尚名牌Gucci家族帝國令人震驚的真實故事。故事描述橫跨三十年的愛情、背叛、墮落、復仇與謀殺，讓我們看到一個名字的意義、價值，以及一個家族為了爭奪控制權，願意採取多麼極端的手段。', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/9bTQe2yxoV4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('G風暴', '2022-01-05', '64', '林德碌', '古天樂、張智霖', '01:33:00', '廉政公署首席調查主任陸志廉 (古天樂 飾) 與總調查主任程德明 (鄭嘉穎 飾) 共同調查走私貪污案，意外發現另一起涉及人口販賣的海關貪腐重大弊案。\r\n', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/-sKx45oz094\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('修行', '2022-01-14', '77', '錢翔', '陳湘琪、陳以文、黃柔閩', '01:25:00', '', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/5cARIhFDKac\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('在車上', '2022-01-11', '75', '濱口竜介', '西島秀俊、三浦透子', '02:59:00', '知名的舞台劇演員及導演家福裕介 (西島秀俊 飾) 與妻子過著幸福美滿的生活，卻因愛妻驟逝而灰心喪志，妻子遺下的一盒卡式帶成為他思憶舊日時光的媒介。\r\n意外喪妻兩年後，家福裕介被邀請為廣島戲劇節製作舞台劇。在那裡，因工作關係需要聘請一位汽車代駕，家福遇見了沈默寡言的美沙紀（三浦透子 飾），兩人在一趟趟安靜的車程中，漸漸瞭解了彼此的過往，也解開了自己難解的心結，更發現了心愛妻子生前的秘密......', '<iframe  width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/V6bqGT1n0do\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('嵐 5x20演唱會電影～回憶全記錄～', '2021-11-05', '67', '堤幸彥', '相葉雅紀、松本潤', '02:27:00', '本國民天團ARASHI嵐（相葉雅紀／松本潤／二宮和也／大野智／櫻井翔）於1999年11月3日出道，2019年6月發行的第5張精選輯《5×20 All the BEST!! 1999-2019》狂賣330萬張，力壓全球熱門歌手，被金氏世界紀錄官方認定為「2019年最熱銷的專輯」，截至目前共舉辦了537場演唱會、總參加人數高達1600萬人以上，其中紀念出道20周年的《ARASHI Anniversar', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/pPC_VKwvyqs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('忍者寶寶', '2022-01-14', '74', '英格維德史弗利克', '克莉絲汀庫亞斯托普、亞瑟貝爾寧、納德卡戴米', '01:44:00', '23歲的拉琪 (克莉絲汀庫亞斯托普 飾) 在一夜情後發現自己懷孕了，爸爸還不是自己的男友，正當苦惱是否要將小孩拿掉或生下來送養時，拉琪筆下的忍者寶寶突然從書裡跳出來了！這個動畫角色不僅將她的生活搞得一團糟，更迫使拉琪正視自己身為母親的責任···', '<iframe  width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/G983FBDh3fk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('慕夏狂潮－從崛起到永恆', '2022-01-14', '89', '羅曼瓦夫拉', '', '01:35:00', '擅將女人與花卉入畫的慕夏，畫筆下端莊優雅的女性、流動唯美的線條風靡世人，成為他獨樹一幟的風格。慕夏風格在他過世後一度退燒，卻在嬉皮年代重掀風潮，前衛畫風受到人們崇拜程度更甚以往。奇妙的是，這股風潮影響了全球的藝術創作者，更吹進日本，啟發如動畫大師宮崎駿、插畫大師天野喜孝無數創作靈感…。', '<iframe  width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/C_pwJgTxszM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('我讓最想被擁抱的男人給威脅了 ', '2021-11-26', '88', '龍輪直征', '速水獎、落合福嗣、小野友樹', '01:19:00', '故事講述擁有20年精湛演出資歷，並連續五年獲得「最想被擁抱的男人」的殿堂級男演員「西條高人」，被僅僅三年資歷的新秀男演員「東谷准太」奪走了寶座，原本對准太充滿敵意的高人，在經過了各種試煉之後，決定正視自己的內心，並接受准太的心意，動畫劇情更在高人贈送的訂情戒指中迎來完美的段落，電影的時間線落在他們一同接下新舞台劇《血之婚禮》，在練習佛朗明哥舞蹈的過程中，高人發覺自己與准太的才能依舊存在明顯的差距，', '<iframe  width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/iG9WUvfAxws\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('月老', '2021-11-24', '55', '九把刀', '柯震東、王淨', '02:07:00', '慘遭雷擊而死的阿綸 (柯震東 飾) 來到陰間，生前所有的記憶歸零。他必須做出選擇：投胎轉世卻可能變成蝸牛；或是擔任神職，累積陰德再修轉世為人的正果？阿綸決定成為月老新鮮人，他與個性爆衝的粉紅女Pinky (王淨 飾) 搭檔，來到人間執行任務，當阿綸遇見狗狗阿魯以及牽著他的主人小咪 (宋芸樺 飾) 時，他前世的記憶都回來了，小咪就是他生前的摯愛。阿綸希望能幫助陽間的小咪尋得新的姻緣，但每一條綁在小咪', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/7FsxUoVblFk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('永恆族', '2021-11-05', '78', '趙婷', '陳靜,理察·麥登,庫梅爾·南賈尼,莉亞·麥克休,布萊恩·泰瑞·亨利,蘿倫·瑞德洛', '00:02:37', '公元前5000年，「天神族」的「審判者」阿里瑟姆從奧林匹亞星挑選10位擁有超能力的「永恆族」，派遣他們前往地球抵禦「變異族」的入侵。幾千年來，永恆族一直幫助人類抵禦變異族入侵，但不可干涉人類的發展或介入他們的戰爭。最後一批變異族在1521年被消滅後，永恆族內部對於是否繼續保護人類一事產生分歧，最終決定與人類不再往來，並等待阿里瑟姆將他們帶回母星。\r\n\r\n來到現在，瑟西和絲派特一同住在英國倫敦。50', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/1Y8jIMjTP3Y\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('無間對決', '2022-01-07', '67', '李揆萬', '趙震雄、崔宇植', '02:00:00', '廣域搜查隊組長朴康允 (趙震雄 飾)，收取來源不明的巨額款項，住在豪宅、身穿高級西裝，每天開著進口名車。然而，某天卻遇見了一名講求原則主義的新進警察崔旻載 (崔宇植 飾)。朴康允揭開了自己獨特的搜查方式，愈來愈親近的兩人在一起調查新型毒品案件的過程中，朴康允發現崔旻載是名負責監視自己的警察，而崔旻載也漸漸接近了隱藏在朴康允背後警察組織的祕密……', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/ZyKVt3oWRwk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('第一爐香', '2022-01-11', '88', '許鞍華', ' 彭于晏、馬思純', '02:20:00', '上海女學生葛薇龍 (馬思純 飾) 來香港求學，投靠姑媽梁太太 (俞飛鴻 飾)，卻反被梁太太利用，把她當作餌誘吸引男人，葛薇龍漸漸沉迷在紙醉金迷中。後來她被花花公子喬琪喬 (彭于晏 飾) 吸引，為了繼續過聲色犬馬的上流社會生活，不惜出賣自己的靈魂，費盡心機嫁給了喬琪喬，最終淪為姑媽梁太太和喬琪喬斂財的工具。', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/lFPuFe3SfHk\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('終極狩獵團', '2022-01-14', '95', '愛德華德雷克', '布魯斯威利、尼爾麥克唐納', '01:33:00', '前警官湯瑪斯馬龍 (布魯斯威利 飾) 在一次任務中失手殺人而被判無期徒刑，但如果他能在一場生存遊戲中活下來，就能夠重獲自由。這場生存遊戲的玩家是六名富人，他們花錢到孤島上享受殺戮的樂趣，剛開始，他們很看不起年事已高的馬龍，但是隨著遊戲的進行，他們發現自己漸漸從獵人變成了獵物...', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/9ha9TD7Xvf8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('蜘蛛人：無家日', '2021-12-15', '97', '喬恩沃茨', '湯姆霍蘭德,辛蒂亞,班奈狄克康柏拜區,艾佛烈蒙利納', '00:02:28', '彼得帕克的蜘蛛人身分曝光，再也無法回到原本平凡的生活，當他向奇異博士史傳奇尋求幫助，\r\n讓他重新回到沒有人知道他是蜘蛛人的那一刻，一切情形反而更加混亂。\r\n\r\n', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/JgWGVmgn8EA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('豪門媳婦日記', '2022-01-03', '61', '安托南佩黑提亞可', '安娜伊德穆斯提、喬希安芭拉絲寇', '01:26:00', '保羅的家族裡，財富就像他們的貴族頭銜一樣是可以傳承的，保羅坐在輪椅上的母親「太后」統治著家族王朝。平民小姊姊艾娃在巴黎地鐵公司上班，生平第一次搭地鐵的保羅對她一見鍾情，瘋狂地愛上她並想要把她娶回家。然而太后卻懷疑艾娃有外遇，於是僱了一名私家偵探調查，但事情的發展總是令人意想不到……', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/whlkj66TUnc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('郊區的鳥', '2022-01-12', '73', '仇晟', '李淳 、 黃璐', '01:53:00', '杭州郊區某處突發地層下陷，一隊工程師前往當地調查原因。地質探測員夏昊因這項任務回到家鄉杭州，每天背著沈重的測量設備，在已經撤空的郊區裡遊蕩，並結識了因公寓大樓傾斜而被迫安置在賓館的燕子，兩人陷入熱戀。某天他進入一間無人的小學，讀到一本日記，裡面記載了少年隱秘的成長和一個團體的破裂，讓他想起了兒時玩伴的失蹤事件，再度使他身陷噩夢之中。隨著調查的進行，夏昊發現原來日記如預言般，一切一一成真。', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/aPdn5yKgn5o\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('金牌特務：金士曼起源', '2021-12-30', '85', '馬修·范恩', '雷夫·范恩斯,哈里斯·迪金森,丹尼爾·布爾,查爾斯·丹斯', '00:02:11', '英國貴族奧蘭多·牛津曾為國家執行刺殺任務而獲得維多利亞十字勳章，但卻因此厭惡殺戮變為和平主義者，轉而協助紅十字會進行醫療救援。1902年第二次波耳戰爭期間，奧蘭多與妻子艾蜜莉、兒子康拉德和保鑣肖拉代表紅十字會一同前往南非，為英軍的集中營提供救援物資。艾蜜莉向兒子講述亞瑟王和圓桌騎士的故事，教導他人人平等的道理。然而他們不幸遇上敵軍突襲，過程中艾蜜莉被敵軍狙擊手誤殺，奧蘭多因喪妻之痛而發誓要致力阻止', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/UzjwwOoZkus\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('駭客任務：復活', '2021-12-22', '95', '拉娜華卓斯基', '基努李維、克莉絲汀蕾琪、凱麗安摩斯', '02:28:00', '【駭客任務：復活】由原系列導演 拉娜華卓斯基 執導，為影迷期待已久的【駭客任務】系列第四集，該系列開創性的詮釋重新定義了電影類型。導演表示此作品以情感為出發點，《駭客任務：復活》的靈感則是來自於父母親的過世。當時的她感到痛苦又悲傷，忍不住去想像一個撫慰人心的故事。這部新片集結了原班人馬基努李維與凱莉安摩絲，重新飾演他們各自的角色「尼歐」與「崔妮蒂」。\r\n', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/9iW7U5P81VM\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
('魔境夢遊', '2022-01-14', '83', '提姆波頓', '蜜雅瓦西寇斯卡、強尼戴普、海倫娜波漢卡特', '01:48:00', '十九歲少女愛麗絲遇上了一隻奇怪的兔子，接著掉入了一個兔子洞來到一個詭異、黑暗的世界。她遇到了許多奇奇怪怪的生物，捲入了壞心的紅皇后與善良的白皇后兩姐妹間爭奪天下的戰爭。在瘋狂帽客、小嗆鼠以及瘋兔的幫助下，她必須除掉天魔好讓世界恢復秩序...。最後，她要如何回到現實世界？\r\n', '<iframe width=\"100%\" height=\"auto\" src=\"https://www.youtube.com/embed/MTss3Ab9S_I\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `cName` varchar(20) NOT NULL,
  `pNumber` int(4) NOT NULL,
  `pName` varchar(10) NOT NULL,
  `Price` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `product`
--

INSERT INTO `product` (`cName`, `pNumber`, `pName`, `Price`) VALUES
('國賓影城', 1, '玩偶', 200),
('國賓影城', 2, '海報', 100),
('國賓影城', 3, '演員親筆簽名', 500),
('秀泰影城', 4, '公仔', 100),
('秀泰影城', 5, '吊飾', 50),
('威秀影城', 6, '水杯', 200),
('威秀影城', 7, '衣服', 300),
('大直影城', 8, '海報', 500),
('大直影城', 9, '徽章', 50),
('大直影城', 10, '明信片', 60),
('天母影城', 11, '書籤', 30),
('天母影城', 12, '玩偶', 400),
('天母影城', 13, '電影大海報', 500);

-- --------------------------------------------------------

--
-- 資料表結構 `transaction`
--

CREATE TABLE `transaction` (
  `mId` varchar(10) NOT NULL,
  `tNumber` int(10) NOT NULL,
  `tTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tPrice` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `transaction`
--

INSERT INTO `transaction` (`mId`, `tNumber`, `tTime`, `tPrice`) VALUES
('A140591107', 1, '2022-01-03 00:23:42', 200),
('A197464751', 2, '2022-01-04 23:24:53', 1600),
('M117394778', 3, '2022-01-14 14:57:43', 1000),
('M136443849', 4, '2022-01-06 21:15:44', 300),
('M119627752', 5, '2022-01-14 14:59:00', 1000),
('M160042392', 6, '2022-01-14 14:56:03', 300),
('M117394778', 7, '2022-01-14 14:58:43', 400),
('M160042392', 8, '2022-01-14 14:56:16', 500),
('M190718078', 9, '2022-01-14 14:58:11', 660),
('K109871578', 10, '2022-01-14 14:57:12', 600),
('A197464751', 11, '2022-01-05 03:30:15', 780),
('K184738849', 12, '2022-01-15 23:44:15', 630),
('M117394778', 13, '2022-01-14 14:56:49', 500),
('M117394778', 14, '2022-01-14 14:55:48', 400);

-- --------------------------------------------------------

--
-- 資料表結構 `transaction_seat`
--

CREATE TABLE `transaction_seat` (
  `mTitle` varchar(20) NOT NULL,
  `mId` varchar(10) NOT NULL,
  `seatNumber` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `transaction_seat`
--

INSERT INTO `transaction_seat` (`mTitle`, `mId`, `seatNumber`) VALUES
('慕夏狂潮－從崛起到永恆', 'F149481492', 58),
('我讓最想被擁抱的男人給威脅了 ', 'F185684631', 78),
('忍者寶寶', 'M117394778', 52),
('蜘蛛人：無家日', 'A144519807', 11),
('蜘蛛人：無家日', 'K109871578', 85),
('金牌特務：金士曼起源', 'K193448849', 12),
('2gether電影版：只因我們天生一對', 'A143672001', 74),
('豪門媳婦日記', 'A159105806', 44),
('GUCCI：豪門謀殺案', 'A125526131', 40),
('忍者寶寶', 'A143672001', 88),
('魔境夢遊', 'M117394778', 70),
('駭客任務：復活', 'K193448849', 71),
('G風暴', 'A143672001', 55),
('月老', 'A197464751', 80),
('終極狩獵團', 'A125526131', 10),
('我讓最想被擁抱的男人給威脅了 ', 'F185684631', 10),
('郊區的鳥', 'K128365602', 41),
('郊區的鳥', 'A159105806', 77),
('修行', 'A143672001', 86),
('豪門媳婦日記', 'A159105806', 36),
('豪門媳婦日記', 'M160732793', 21),
('郊區的鳥', 'M160732793', 49),
('慕夏狂潮－從崛起到永恆', 'M190718078', 54),
('嵐 5x20演唱會電影～回憶全記錄～', 'K193448849', 39),
('永恆族', 'A159105806', 98),
('駭客任務：復活', 'A144519807', 1),
('忍者寶寶', 'F185684631', 84),
('第一爐香', 'M190718078', 66),
('駭客任務：復活', 'F149481492', 62),
('修行', 'K109871578', 77),
('郊區的鳥', 'A197464751', 5),
('蜘蛛人：無家日', 'A144519807', 20),
('蜘蛛人：無家日', 'M160732793', 83),
('2gether電影版：只因我們天生一對', 'M144643353', 46),
('在車上', 'K184738849', 48),
('終極狩獵團', 'A197464751', 89),
('金牌特務：金士曼起源', 'K128365602', 47),
('永恆族', 'A159105806', 45),
('我讓最想被擁抱的男人給威脅了 ', 'K128365602', 13),
('月老', 'A144519807', 25),
('GUCCI：豪門謀殺案', 'M160732793', 27),
('郊區的鳥', 'F185684631', 35),
('月老', 'K109871578', 33),
('忍者寶寶', 'A197464751', 42),
('嵐 5x20演唱會電影～回憶全記錄～', 'A144519807', 43),
('GUCCI：豪門謀殺案', 'A144519807', 7),
('慕夏狂潮－從崛起到永恆', 'A144519807', 55),
('嵐 5x20演唱會電影～回憶全記錄～', 'F149481492', 52),
('第一爐香', 'F149481492', 55),
('修行', 'K109871578', 71),
('G風暴', 'A197464751', 91),
('駭客任務：復活', 'M136443849', 21),
('魔境夢遊', 'F185684631', 12);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `auditorium`
--
ALTER TABLE `auditorium`
  ADD KEY `cName` (`cName`),
  ADD KEY `aNumber` (`aNumber`);

--
-- 資料表索引 `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`cName`);

--
-- 資料表索引 `comeout`
--
ALTER TABLE `comeout`
  ADD KEY `cName` (`cName`),
  ADD KEY `aNumber` (`aNumber`),
  ADD KEY `mTitle` (`mTitle`);

--
-- 資料表索引 `has`
--
ALTER TABLE `has`
  ADD KEY `cName` (`cName`),
  ADD KEY `pNumber` (`pNumber`),
  ADD KEY `tNumber` (`tNumber`);

--
-- 資料表索引 `include`
--
ALTER TABLE `include`
  ADD KEY `mTitle` (`mTitle`),
  ADD KEY `mId` (`mId`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mId`);

--
-- 資料表索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`mTitle`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pNumber`);

--
-- 資料表索引 `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tNumber`),
  ADD KEY `mId` (`mId`);

--
-- 資料表索引 `transaction_seat`
--
ALTER TABLE `transaction_seat`
  ADD KEY `mTitle` (`mTitle`),
  ADD KEY `mId` (`mId`);

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `auditorium`
--
ALTER TABLE `auditorium`
  ADD CONSTRAINT `auditorium_ibfk_1` FOREIGN KEY (`cName`) REFERENCES `cinemas` (`cName`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `comeout`
--
ALTER TABLE `comeout`
  ADD CONSTRAINT `comeout_ibfk_1` FOREIGN KEY (`cName`) REFERENCES `cinemas` (`cName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comeout_ibfk_2` FOREIGN KEY (`aNumber`) REFERENCES `auditorium` (`aNumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comeout_ibfk_3` FOREIGN KEY (`mTitle`) REFERENCES `movie` (`mTitle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `has`
--
ALTER TABLE `has`
  ADD CONSTRAINT `has_ibfk_1` FOREIGN KEY (`cName`) REFERENCES `auditorium` (`cName`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `has_ibfk_2` FOREIGN KEY (`pNumber`) REFERENCES `product` (`pNumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `has_ibfk_3` FOREIGN KEY (`tNumber`) REFERENCES `transaction` (`tNumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `include`
--
ALTER TABLE `include`
  ADD CONSTRAINT `include_ibfk_1` FOREIGN KEY (`mTitle`) REFERENCES `movie` (`mTitle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `include_ibfk_2` FOREIGN KEY (`mId`) REFERENCES `member` (`mId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`mId`) REFERENCES `member` (`mId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `transaction_seat`
--
ALTER TABLE `transaction_seat`
  ADD CONSTRAINT `transaction_seat_ibfk_1` FOREIGN KEY (`mTitle`) REFERENCES `movie` (`mTitle`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaction_seat_ibfk_2` FOREIGN KEY (`mId`) REFERENCES `member` (`mId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
