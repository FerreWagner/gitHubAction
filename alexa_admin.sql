-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-22 09:22:27
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alexa_admin`
--

-- --------------------------------------------------------

--
-- 表的结构 `alexa_admin`
--

CREATE TABLE `alexa_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL,
  `count` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0为超级管理员,1为管理员',
  `switch` varchar(5) DEFAULT 'true' COMMENT 'true为开启,false为关闭',
  `update_time` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `alexa_admin`
--

INSERT INTO `alexa_admin` (`id`, `username`, `password`, `count`, `email`, `role`, `switch`, `update_time`, `create_time`) VALUES
(1, 'ferre1', '4f9754eb35624ccfca470d54b3a37010ddad554d', 17, '1379134879@qq.com', 1, 'false', 1513926388, 1513926388);

-- --------------------------------------------------------

--
-- 表的结构 `alexa_alog`
--

CREATE TABLE `alexa_alog` (
  `id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `alexa_alog`
--

INSERT INTO `alexa_alog` (`id`, `type`, `name`, `ip`, `time`) VALUES
(1, 1, 'ferre', '127.0.0.1', 1512548564),
(2, 1, '127.0.0.1', '127.0.0.1', 1512548920),
(3, 1, 'ferre', '127.0.0.1', 1512548928),
(4, 1, 'ferre', '127.0.0.1', 1512549457),
(5, 0, '127.0.0.1', '127.0.0.1', 1512549461),
(6, 1, 'ferre', '127.0.0.1', 1512549466),
(7, 0, '弗雷尔', '127.0.0.1', 1512549887),
(8, 1, 'ferre', '127.0.0.1', 1512549892),
(9, 1, 'ferre', '127.0.0.1', 1512612399),
(10, 1, 'ferre', '127.0.0.1', 1512700862),
(11, 1, 'ferre', '127.0.0.1', 1512976444),
(12, 1, 'ferre', '127.0.0.1', 1513130910);

-- --------------------------------------------------------

--
-- 表的结构 `alexa_article`
--

CREATE TABLE `alexa_article` (
  `id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL DEFAULT 'Ferre',
  `title` text NOT NULL,
  `cate` text NOT NULL,
  `order` int(11) NOT NULL,
  `content` text NOT NULL,
  `thumb` text NOT NULL,
  `desc` text NOT NULL,
  `see` int(11) NOT NULL,
  `keywords` text NOT NULL,
  `time` int(11) DEFAULT NULL,
  `pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `alexa_article`
--

INSERT INTO `alexa_article` (`id`, `author`, `title`, `cate`, `order`, `content`, `thumb`, `desc`, `see`, `keywords`, `time`, `pic`) VALUES
(3, 'Ferre', 'Alexa', '1', 1, '<p>风景指的是供<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E8%A7%82%E8%B5%8F\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">观赏</a>的自然风光、景物，包括<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E8%87%AA%E7%84%B6%E6%99%AF%E8%A7%82/68027\" data-lemmaid=\"68027\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">自然景观</a>和<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E4%BA%BA%E6%96%87%E6%99%AF%E8%A7%82\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">人文景观</a>。</p><p>风景是由光对物的反映所显露出来的一种<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E6%99%AF%E8%B1%A1\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">景象</a>。犹言<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E9%A3%8E%E5%85%89/32760\" data-lemmaid=\"32760\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">风光</a>或<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E6%99%AF%E7%89%A9\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">景物</a>、<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E6%99%AF%E8%89%B2\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">景色</a>等，含义广泛。在中国古书上，尤其纯文艺作品的<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E8%AF%97%E6%96%87\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">诗文</a>方面，更是延用已久<em>，</em>甚至写景多于<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E8%A8%80%E6%83%85\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">言情</a>，几乎和<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E6%97%85%E6%B8%B8\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">旅游</a>打成一片。而且还有一大部分作品是<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E5%80%9F%E6%99%AF%E6%8A%92%E6%83%85\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">借景抒情</a>，<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E5%AF%93%E6%83%85%E4%BA%8E%E6%99%AF\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">寓情于景</a>。</p><p><br/></p>', '/uploads/thumb/alexa15129800274b84b15bff6ee5796152495a230e45e3d7e947d9.jpg', 'About Alexa', 12, 'Alexa,Ferre', 1512979599, '/uploads/20171211\\09ca4b1627b23eda96ed46c719d5156a.jpg'),
(4, 'Ferre', 'Alexa Ferre', '1', 2, '<p>Alexa Internet公司是<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E4%BA%9A%E9%A9%AC%E9%80%8A%E5%85%AC%E5%8F%B8\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">亚马逊公司</a>的一家子公司，总部位于<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E5%8A%A0%E5%88%A9%E7%A6%8F%E5%B0%BC%E4%BA%9A%E5%B7%9E\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">加利福尼亚州</a><a target=\"_blank\" href=\"https://baike.baidu.com/item/%E6%97%A7%E9%87%91%E5%B1%B1/29211\" data-lemmaid=\"29211\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">旧金山</a>。于1996年由布鲁斯特·卡利（Brewster Kahle）及布鲁斯·吉里亚特（Bruce Gilliat）成立，作为Internet Archive的分支，受到杰奎琳·萨福拉的埃托勒投资支持。在1999年，被<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E4%BA%9A%E9%A9%AC%E9%80%8A/21766\" data-lemmaid=\"21766\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">亚马逊</a>公司以约价值两亿五千万美元的股票买下。</p><p>Alexa是一家专门发布网站世界排名的网站。以<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E6%90%9C%E7%B4%A2%E5%BC%95%E6%93%8E\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">搜索引擎</a>起家的Alexa创建于1996年4月（美国），目的是让互联网网友在分享虚拟世界资源的同时，更多地参与互联网资源的组织。</p><p>Alexa每天在网上搜集超过1,000GB的信息，不仅给出多达几十亿的网址链接，而且为其中的每一个网站进行了排名。可以说，Alexa是当前拥有<a target=\"_blank\" href=\"https://baike.baidu.com/item/URL\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">URL</a>数量最庞大，排名信息发布最详尽的网站。</p><p><br/></p>', '/uploads/thumb/alexa15129800204b84b15bff6ee5796152495a230e45e3d7e947d9.jpg', 'About Alexa', 123, 'Alexa,Ferre', 1512979650, '/uploads/20171211\\d7556d4d1be26526165c81a6c47e95d9.jpg'),
(5, 'Ferre', 'Alexa Set', '1', 6, '<p>Alexa中国免费提供Alexa中文排名官方数据查询，网站<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E8%AE%BF%E9%97%AE%E9%87%8F\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">访问量</a>查询，网站<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E6%B5%8F%E8%A7%88%E9%87%8F\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">浏览量</a>查询，排名变化趋势数据查询。<br/>　　Alexa 是互联网首屈一指的免费提供<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E7%BD%91%E7%AB%99%E6%B5%81%E9%87%8F\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">网站流量</a>信息的公司，创建于1996年，一直致力于开发<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E7%BD%91%E9%A1%B5%E6%8A%93%E5%8F%96\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">网页抓取</a>和网站流量计算的工具。<a target=\"_blank\" href=\"https://baike.baidu.com/item/Alexa%E6%8E%92%E5%90%8D\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">Alexa排名</a>是常引用的用来评价某一网站访问量的一个指标。总部位于<a target=\"_blank\" href=\"https://baike.baidu.com/item/%E7%BE%8E%E5%9B%BD%E6%97%A7%E9%87%91%E5%B1%B1\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">美国旧金山</a>的Alexa是亚马逊集团旗下的子公司之一。</p><p><span style=\"font-weight: 700;\">经历变化</span></p><p>2002年5月Alexa全新改版，放弃了搜索引擎转而与<a target=\"_blank\" href=\"https://baike.baidu.com/item/Google\" style=\"color: rgb(19, 110, 194); text-decoration-line: none;\">Google</a>合作，变身为一家专门发布网站世界排名的网站。Alexa每天在网上搜集超过1,000GB的信息，然后进行整合发布。</p><p><br/></p><p><img src=\"/ueditor/php/upload/image/20171211/1512979686547364.jpg\" title=\"1512979686547364.jpg\" alt=\"SouthEast.jpg\"/></p>', '/uploads/thumb/alexa15129800094b84b15bff6ee5796152495a230e45e3d7e947d9.jpg', 'About Alexa', 16, 'Alexa,Ferre', 1512979690, '/uploads/20171211\\049af93cd0a346780165c4068ba658b1.jpg'),
(6, 'Ferre', 'Wagner', '1', 5, '<p><img src=\"/ueditor/php/upload/image/20171211/1512980846698707.png\" title=\"1512980846698707.png\" alt=\"bpg5.png\"/></p>', '/uploads/thumb/alexa15129808494b84b15bff6ee5796152495a230e45e3d7e947d9.png', 'About Alexa', 15, 'Alexa,Ferre', 1512980849, '/uploads/20171211\\f75f3b3f636669fc395445cda43a30c6.png'),
(7, 'Ferre', 'Fate', '1', 4, '<p><img src=\"/ueditor/php/upload/image/20171211/1512980877486904.png\" title=\"1512980877486904.png\" alt=\"strip.png\"/></p>', '/uploads/thumb/alexa15129808814b84b15bff6ee5796152495a230e45e3d7e947d9.png', 'About Alexa', 17, 'Alexa,Ferre', 1512980881, '/uploads/20171211\\16af1d28f2fc57ed0cbf617aa62f77e3.png'),
(8, 'Ferre', 'Break', '1', 7, '<p><img src=\"/ueditor/php/upload/image/20171211/1512980890111714.png\" title=\"1512980890111714.png\" alt=\"1240.png\"/></p>', '/uploads/thumb/alexa15129809044b84b15bff6ee5796152495a230e45e3d7e947d9.png', 'About Alexa', 13, 'Alexa,Ferre', 1512980904, '/uploads/20171211\\0f26e116889ed945e6158caa77ed964f.png'),
(9, 'Ferre', 'Pike', '3', 8, '<p><img src=\"/ueditor/php/upload/image/20171211/1512980977975573.png\" title=\"1512980977975573.png\" alt=\"notice.png\"/></p>', '/uploads/thumb/alexa15129809934b84b15bff6ee5796152495a230e45e3d7e947d9.png', 'About Alexa', 12, 'Alexa,Ferre', 1512980993, '/uploads/20171211\\1c3900a5f9288e427abd9667eff62cbb.png'),
(10, 'Ferre', 'Alexa fake', '1', 6, '<p><img src=\"/ueditor/php/upload/image/20171212/1513067463111602.jpg\" title=\"1513067463111602.jpg\" alt=\"1499923696559.jpg\" width=\"843\" height=\"501\" style=\"width: 843px; height: 501px;\"/></p>', '/uploads/thumb/alexa15130674664b84b15bff6ee5796152495a230e45e3d7e947d9.jpg', 'About Alexa', 28, 'Alexa,Ferre', 1513067466, '/uploads/20171212\\e56bb90ecb138fedbbfb15a5f83c2b34.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `alexa_category`
--

CREATE TABLE `alexa_category` (
  `id` int(11) NOT NULL,
  `catename` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `desc` varchar(255) NOT NULL DEFAULT 'Alexa Zhang',
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `alexa_category`
--

INSERT INTO `alexa_category` (`id`, `catename`, `sort`, `desc`, `pid`) VALUES
(1, 'Alexa', 3, 'Alexa Zhang', 0),
(2, 'Ferre', 6, '', 1),
(3, 'Ashly', 7, '', 2),
(4, 'Freeze', 9, '', 2),
(5, '老铁', 123, '', 0),
(6, '222', 222, '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `alexa_link`
--

CREATE TABLE `alexa_link` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `url` text NOT NULL,
  `sort` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `alexa_link`
--

INSERT INTO `alexa_link` (`id`, `name`, `url`, `sort`) VALUES
(1, '谷歌首页', 'http://google.com', '111'),
(2, '百度', 'http://www.baidu.com', '1'),
(8, 'erat', 'rege', '123');

-- --------------------------------------------------------

--
-- 表的结构 `alexa_system`
--

CREATE TABLE `alexa_system` (
  `id` int(11) NOT NULL,
  `is_close` tinyint(4) NOT NULL,
  `title` text NOT NULL,
  `keywords` text NOT NULL,
  `desc` text NOT NULL,
  `record` varchar(50) NOT NULL DEFAULT '',
  `is_update` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `alexa_system`
--

INSERT INTO `alexa_system` (`id`, `is_close`, `title`, `keywords`, `desc`, `record`, `is_update`) VALUES
(1, 0, 'Alexa', '萨法', 'About Alexa', '蜀ICP备17036283号-2', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alexa_admin`
--
ALTER TABLE `alexa_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alexa_alog`
--
ALTER TABLE `alexa_alog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alexa_article`
--
ALTER TABLE `alexa_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alexa_category`
--
ALTER TABLE `alexa_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alexa_link`
--
ALTER TABLE `alexa_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alexa_system`
--
ALTER TABLE `alexa_system`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `alexa_admin`
--
ALTER TABLE `alexa_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `alexa_alog`
--
ALTER TABLE `alexa_alog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用表AUTO_INCREMENT `alexa_article`
--
ALTER TABLE `alexa_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `alexa_category`
--
ALTER TABLE `alexa_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `alexa_link`
--
ALTER TABLE `alexa_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `alexa_system`
--
ALTER TABLE `alexa_system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
