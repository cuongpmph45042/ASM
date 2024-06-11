-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2024 at 12:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asm`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Kinh tế'),
(2, 'Xã hội'),
(3, 'Khoa học'),
(4, 'Thể thao'),
(5, 'Pháp luật'),
(6, 'Giáo dục'),
(7, 'Quân sự');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `id_categories` int NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `contents` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `id_categories`, `title`, `image`, `contents`, `created_at`, `update_at`) VALUES
(4, 1, 'Người Việt chi hàng chục tỷ mỗi tháng mua iPhone qua livestream TikTok', 'assets/uploads/1718066298chart-1-copy-3-1718003804-1718-5510-3915-1718004634.png', '<p> Doanh số iPhone tháng 5 trên TikTok Shop đạt 84,8 tỷ đồng, tăng 4 lần so tháng trước, là nguyên nhân Apple yêu cầu nhà bán lẻ dừng kinh doanh trên nền tảng này. </p>\r\n\r\nDữ liệu thống kê bởi Công ty tư vấn thương mại điện tử YouNet ECI (Công ty phân tích dữ liệu và tư vấn thương mại điện tử thành lập năm 2021, trụ sở tại TP HCM) cho biết tổng giá trị giao dịch các dòng điện thoại iPhone trên nền tảng TikTok tháng qua tăng trưởng đến 307% so với tháng 4.</p>\r\n\r\nTrong đó, top 3 gian hàng dẫn đầu doanh số lần lượt là FPT Shop, Viettel Store và Di Động Việt. Ba gian hàng này chiếm tổng cộng đến 86,7% thị phần iPhone bán ra trên kênh thương mại điện tử này.</p>\r\n\r\nChia theo từng nhà bán lẻ, có 1.922 chiếc iPhone bán ra từ gian hàng FPT Shop, tăng doanh thu 240% so với tháng 4. Viettel Store và Di Động Việt lần lượt bán ra 576 và 453 chiếc trên TikTok Shop trong cùng thời gian.</p>\r\niPhone hút hàng trên TikTok Shop tháng qua nhờ các sự kiện kích cầu trong tháng 5, qua những phiên livestream mang về doanh thu được tuyên bố đến \"trăm tỷ đồng\" trên nền tảng, theo ông Nguyễn Phương Lâm, Giám đốc phân tích thị trường của YouNet ECI.</p>\r\n\r\n\"Viettel Store có phiên Mega Live cùng KOL Quyền Leo Daily, hay FPT Shop với các phiên livestream hàng tuần. Những con số tăng trưởng như trên đã cho thấy sự hiệu quả về doanh thu của cách làm này\", ông Lâm dẫn chứng.</p>\r\n\r\nTính chung 5 tháng đầu năm, các sản phẩm của Apple (bao gồm Iphone, Macbook, Ipad, Airpods, Apple Watch) đang bán khá tốt trên TikTok Shop, theo nền tảng số liệu thị trường thương mại điện tử Metric.</p>\r\n\r\nCụ thể, chúng mang về cho các đại lý gần 203 tỷ đồng, tăng kỷ lục 955% doanh thu so với cùng kỳ năm ngoái. Đồng thời, chỉ chưa đến nửa năm, doanh số đã đạt hơn 83% so với toàn năm 2023. Trong đó, Iphone 15 là các dòng sản phẩm bán chạy nhất trên nền tảng này, theo Metric.</p>\r\n<b>Khi doanh số iPhone và các sản phẩm \"nhà táo\" tăng vũ bão trên sàn TikTok Shop tại Việt Nam, Apple yêu cầu dừng kinh doanh qua kênh này.</b></p>\r\n\r\nCụ thể, từ đêm 31/5, nhiều chuỗi bán lẻ ủy quyền của Apple tại Việt Nam như Viettel Store, FPT Shop, Di Động Việt, Hoàng Hà Mobile đều đã gỡ bán các sản phẩm của Apple khỏi giỏ hàng trên TikTokShop.</p>\r\n\r\nNói với VnExpress, đại diện Di Động Việt xác nhận yêu cầu này của Apple. \"Hãng cũng không giải thích thêm\", đại diện chuỗi cho hay.</p>\r\n\r\nTheo các chuyên gia và nhà bán hàng, Apple yêu cầu dừng bán sản phẩm của hãng trên Tiktok Shop đến từ 2 lý do chính. Đầu tiên là gây mất cân bằng thị trường. Các sản phẩm trên sàn này đang được liên tục cắt giá sâu, trợ giá mạnh, nhất là trong các phiên livestream. Từ đó dẫn đến việc so sánh giá không cần thiết và ảnh hưởng tiêu cực tới các kênh offline đang hoạt động hiệu quả.</p>\r\n\r\n\"Có thể đoán rằng những phiên livestream này đang khiến Apple lo ngại về nguy cơ tạo ra mâu thuẫn với kênh offline. Chúng ta đã từng thấy vấn đề tương tự xảy ra ở những nhãn hàng khác và vì thế dễ hiểu khi Apple đang muốn thận trọng hơn\", ông Nguyễn Phương Lâm nói.</p>\r\nNgoài ra, các phiên livestream doanh số \"khủng\" cũng được cho là ảnh hưởng đến hình ảnh thương hiệu. \"Sản phẩm của Apple - điển hình là iPhone - chỉ được xem là công cụ để kéo tổng giá trị hàng hóa khiến hình ảnh thương hiệu bị ảnh hưởng nghiêm trọng\", phía Metric nhận định.</p>', '2024-06-09 22:17:06', '2024-06-11 07:38:18'),
(5, 1, 'Ông Biden và Trump đua lấy lòng doanh nghiệp', 'assets/uploads/1718066167AP24125559681818-3211-1718043125.jpg', '<p>Sau thời gian chỉ trích nhiều, ông Biden đang tích cực đối thoại với các CEO trong khi Trump nói rằng doanh nghiệp đứng về phía ông.</p>\r\n\r\nTrong quá trình tranh cử, Tổng thống Joe Biden thích giáng đòn mạnh vào giới kinh doanh. Ông nói với cử tri rằng các công ty nên nộp thuế nhiều hơn. Ông cũng đổ lỗi cho nhiều doanh nghiệp góp phần khiến giá cả leo thang, gây ra lạm phát. </p>\r\n\r\nNhưng vài tháng qua, thay vì chỉ trích, chiến thuật tranh cử của ông phần nào đã thay đổi. Giới chức Nhà Trắng đang tăng cường tiếp cận các CEO để hỏi xem họ cần gì. Theo AP, nỗ lực này đang \"lấn chiếm địa bàn\" cộng đồng doanh nghiệp mà cựu Tổng thống Donald Trump xem là sân nhà.</p>\r\n\r\nCả hai ứng cử viên đều muốn gửi một thông điệp tới các cử tri rằng họ có thể cộng tác với doanh nghiệp, tức các nhà tuyển dụng lao động. Nhưng nhiều công ty tỏ ra cảnh giác trong việc phải công khai đứng về bên nào, bởi dân chúng đang có sự chia rẽ lớn về lập trường ủng hộ Biden hay Trump.</p>\r\nVề phía Biden, cuối tháng 2, Chánh văn phòng Nhà Trắng Jeff Zients đã tập hợp 6 quan chức cấp cao của chính quyền trong một bữa tối để phổ biến chiến dịch trò chuyện với các CEO. Mỗi người đồng ý tiếp xúc với 10 CEO.</p>\r\n\r\nĐến cuối tháng 4, nhóm này đã trò chuyện với hơn 100 người. Thứ trưởng Tài chính Wally Adeyemo cho biết qua các cuộc đối thoại, ông nhận thức rõ hơn về cách các vấn đề liên kết với nhau. Ví dụ, các chính sách năng lượng tái tạo là cần thiết để xây dựng các trung tâm dữ liệu sử dụng cho trí tuệ nhân tạo.</p>\r\n\r\nÔng Adeyemo cho biết chính quyền đã đạt được một số thành công trong việc giảm bớt các thủ tục giấy tờ liên bang cần thiết cho việc cấp phép đầu tư. Chính quyền Biden đang đưa ra một lập luận tổng thể rằng các kế hoạch của họ tốt hơn cho tăng trưởng, điều mà về lâu dài sẽ có lợi cho doanh nghiệp.</p>\r\n\r\nSau các cuộc đối thoại cấp bộ trưởng, thứ trưởng. Đích thân ông Biden đã có buổi trò chuyện với 8 CEO vào tháng 5, bao gồm những người đứng đầu United Airlines, Marriott, Xerox, Corning, Bechtel và Citigroup.</p>\r\n\r\nĐến nay, thông điệp chính của nhóm vận động tái tranh cử của ông Biden dành cho các nhà lãnh đạo doanh nghiệp là: chúng tôi cho rằng nền kinh tế đang hoạt động tốt nhưng muốn nghe ý kiến quý vị về cách có thể thúc đẩy đầu tư.</p>\r\n\r\nLael Brainard, Giám đốc Hội đồng Kinh tế Quốc gia của Nhà Trắng hứa hẹn sẽ \"giải quyết vấn đề\" cho doanh nghiệp. \"Họ biết rằng họ sẽ luôn được lắng nghe\", ông nhắn nhủ.</p>\r\nTrong khi đó, hôm 13/6, Trump sẽ có buổi trình bày tại hội nghị của Bàn tròn Doanh nghiệp - một hiệp hội gồm hơn 200 CEO, về lý do tại sao nền kinh tế sẽ tốt hơn nếu ông trở lại Phòng Bầu dục.</p>\r\n\r\nÔng Biden cũng được hiệp hội mời đến nhưng bận đến Italy để tham dự Hội nghị thượng đỉnh của các lãnh đạo G7 - nhóm 7 nước phát triển gồm Mỹ, Canada, Anh, Đức, Pháp, Italy và Nhật Bản. Do đó, Chánh văn phòng Nhà Trắng Jeff Zients sẽ trình bày tầm nhìn của tổng thống dành cho cộng đồng doanh nghiệp.</p>\r\n\r\nÔng Biden từ lâu đã cố gắng cân bằng lợi ích của doanh nghiệp và người lao động. Tổng thống cố gắng kiềm chế chỉ trích các công ty bằng cách lưu ý rằng ông là cựu thượng nghị sĩ của Delaware, đến từ \"thủ đô doanh nghiệp của thế giới\".</p>\r\n\r\nDelaware được ví là \"thủ đô doanh nghiệp của thế giới\" bởi nhiều chuyên gia kinh tế và luật, cũng như nhà lãnh đạo chính trị và kinh doanh tại Mỹ do bang này có luật doanh nghiệp thuận lợi, thủ tục lập công ty đơn giản, thuế thấp, bảo mật cao và có tòa án chuyên biệt phục vụ các tranh chấp về doanh nghiệp.</p>\r\n\r\nVề phần mình, Trump đánh bóng danh tiếng với tư cách là tỷ phú bất động sản và có kinh nghiệm tiếp thị mọi thứ, từ các khóa học đến món bít tết hay cà vạt. Ngoài ra, ông còn có một tập đoàn truyền thông & công nghệ tên Trump đã niêm yết từ tháng 3 trên thị trường chứng khoán.</p>', '2024-06-10 13:10:15', '2024-06-11 07:36:07'),
(6, 2, 'Tình bạn nhiều thăng trầm của Tổng thống Biden - Macron', 'assets/uploads/1718066049AFP-20240606-34VQ64W-v1-HighRe-6916-8803-1717823916.jpg', '<p>Tổng thống Mỹ - Pháp có mối quan hệ thăng trầm, nhiều sóng gió, song lãnh đạo hai nước vẫn gắn bó trên nhiều phương diện.</p>\r\n\r\nTrong cuộc điện đàm gần đây với Tổng thống Mỹ Joe Biden, Tổng thống Pháp Emmanuel Macron đề xuất gửi sĩ quan huấn luyện phương Tây đến Ukraine để đào tạo tại chỗ cho các binh sĩ nước này đối phó chiến dịch tấn công của Nga.</p>\r\n\r\nDù hai lãnh đạo có mối quan hệ cá nhân rất gắn bó, ông Biden đã không ủng hộ ý tưởng của ông Macron. Theo hai nguồn tin am hiểu vấn đề, Tổng thống Mỹ bày tỏ lo ngại về hậu quả tiềm tàng của việc gửi quân từ bất kỳ quốc gia nào thuộc NATO đến một nơi mà họ có thể phải chịu thương vong và khiến nguy cơ xung đột trực tiếp với Nga leo thang.</p>\r\n\r\nCuộc gọi kết thúc mà hai bên không đạt được giải pháp nào. Nhưng đối với lãnh đạo Mỹ - Pháp, điều đó là bình thường.</p>\r\nTổng thống Biden và Macron không có cùng quan điểm trong một số vấn đề quan trọng. Macron đã thể hiện ông là người ủng hộ mạnh mẽ khả năng tự cường và quyền tự quyết của châu Âu. Nhà Trắng coi ông là một chính trị gia khó lường, thậm chí lo ngại về những đề xuất chính sách mà Macron đưa ra liên quan đến chiến sự Ukraine.</p>\r\n\r\nNhưng bất chấp những khác biệt như vậy cũng như cách biệt tuổi tác lên đến 35 tuổi, hai lãnh đạo vẫn tin tưởng lẫn nhau theo những cách riêng.</p>\r\n\r\nCác trợ lý cho hay mối quan hệ của hai lãnh đạo vẫn rất nồng ấm. Việc Tổng thống Biden nhận lời mời thăm chính thức Pháp trong tuần này, giữa thời điểm bận rộn của năm bầu cử, đã \"nói lên nhiều điều\" về sự tôn trọng của ông dành cho người đồng cấp Pháp, một cựu quan chức chính quyền Mỹ nhận xét.</p>\r\n\r\nTổng thống Macron vài năm trở lại đây cho thấy ông là một trong những lãnh đạo khu vực thẳng thắn nhất về quan điểm châu Âu cần \"quyền tự chủ chiến lược\" và giảm phụ thuộc vào Mỹ trong nỗ lực đảm bảo an ninh tập thể.</p>\r\n\r\n\"Mỹ có hai ưu tiên: Mỹ và sau đó là vấn đề Trung Quốc\", ông Macron nói trong bài phát biểu tại Đại học Sorbonne ở Paris hồi tháng 4. Tổng thống Pháp tuyên bố châu Âu đang đứng trước ngưỡng cửa \"sinh tử\", cảnh báo rằng \"châu Âu có thể chết và liệu điều đó có thực sự xảy ra hay không hoàn toàn phụ thuộc vào lựa chọn của chúng ta\".</p>\r\nNhiều nhà quan sát coi giọng điệu lo lắng trong bài phát biểu là một nỗ lực nhằm thổi thêm sức sống vào vị thế chính trị của chính ông Macron. Kết quả sơ bộ cuộc bầu cử Nghị viện châu Âu ngày 9/6 cho thấy liên minh trung dung do Tổng thống Pháp dẫn dắt đã thất thế trước phe cực hữu Pháp, buộc ông Macron phải tuyên bố giải tán quốc hội và tổ chức bầu cử sớm, với hy vọng sẽ chặn được đà trỗi dậy của đảng cực hữu đối lập.</p>\r\n\r\nTrước đó một ngày, ông Macron chủ trì lễ đón ông Biden tại Điện Élysée, nơi Tổng thống Mỹ đánh giá cao mối quan hệ với người đồng cấp Pháp cũng như hợp tác giữa hai nước.</p>\r\n\r\n\"Chúng ta đã cho thế giới thấy sức mạnh của quan hệ đồng minh, về thành tựu chúng ta có thể đạt được khi sát cánh cùng nhau. Đó cũng chính là điển hình cho mối quan hệ giữa Pháp và Mỹ\", ông Biden nói.</p>\r\n\r\n\"Macron tiếp đón Biden vào thời điểm mà ông ấy không được lòng nhiều người dân đất nước và Tổng thống Pháp đang cố gắng tìm ra thông điệp phản ánh di sản của mình\", Ian Bremmer, chủ tịch Nhóm Á - Âu, tổ chức đánh giá rủi ro toàn cầu, trụ sở ở New York, nhận định. \"Ông ấy ngày càng quyết liệt hơn vì ông ấy đang lo lắng\".</p>\r\n\r\nNhưng chuyến thăm của Tổng thống Mỹ còn diễn ra trong một bối cảnh khác lớn hơn ngoài cuộc bầu cử nghị viện châu Âu. Đó là viễn cảnh ông Biden sẽ thất bại trước đối thủ đảng Cộng hòa Donald Trump trong cuộc bầu cử Mỹ vào tháng 11.</p>\r\n\r\nTổng thống Macron lâu nay vẫn tích cực thúc đẩy châu Âu thực hiện việc phòng thủ tập thể một cách nghiêm túc hơn, nhằm chuẩn bị cho kịch bản Trump trở lại Nhà Trắng. Ông cũng cố gắng khẳng định mình là lãnh đạo dẫn dắt châu Âu, vai trò mà cựu thủ tướng Đức Angela Merkel từng đảm nhận.</p>', '2024-06-10 13:10:48', '2024-06-11 07:34:09'),
(7, 4, 'HLV Kim Sang-sik 4 lần tuyên bố sẽ thắng Iraq', 'assets/uploads/1718022452hlv-kim-sang-sik-viet-nam-2024-6681-8571-1718019035.jpg', '<p> Ở họp báo hôm nay, HLV Kim Sang-sik tuyên bố nhiều lần về mục tiêu chiến thắng của Việt Nam trước Iraq ở lượt cuối bảng F vòng loại hai World Cup 2026. </p>\r\nHLV Kim Sang-sik cho biết trận thắng Philippines 3-2 trên sân Mỹ Đình hôm 6/6 giúp Việt Nam sống lại cơ hội đi tiếp, dù sắp phải chạm trán đội tuyển mạnh và trước 65.000 khán giả Iraq tại sân Basra. </p>\r\n\r\n\"Việt Nam đến Iraq với một chút hy vọng\", HLV Kim Sang-sik nói chiều 10/6. \"Chúng tôi cũng mạnh và đến đây để giành chiến thắng\". </p>\r\nIraq đã chắc suất nhất bảng F khi toàn thắng năm trận. Trong khi đó, Việt Nam đứng thứ ba với sáu điểm, kém Indonesia một điểm. Việt Nam sẽ hết cơ hội đi tiếp nếu Indonesia thắng Philippines ở trận đấu trước đó, lúc 19h30 ngày mai. Nếu đội tuyển xứ vạn đảo hoà hoặc thua, Việt Nam sẽ có cơ hội để lách qua khe cửa hẹp, khi gặp Iraq lúc 1h00 ngày 12/6. </p>\r\n\r\nViệt Nam chưa từng thắng Iraq trong quá khứ. Ở sáu cuộc đối đầu, Việt Nam thua năm, còn trận hoà duy nhất với tỷ số 1-1 diễn ra từ tháng 10/2015, thuộc vòng loại hai World Cup 2018. </p>\r\n\r\nỞ hai trận gần nhất, Việt Nam thua Iraq 0-1 tại lượt hai vòng loại hai World Cup 2026 và 2-3 ở vòng bảng Asian Cup 2023, dưới thời HLV Philippe Troussier. Khi được hỏi Việt Nam đã rút được bài học gì, HLV Kim nói: \"Việt Nam thua nhưng khi ấy tôi không phải người dẫn dắt. Tôi chỉ biết hiện tại đã chuẩn bị kỹ lưỡng và hy vọng chiến thắng vào ngày mai\". </p>\r\n\r\nHLV người Hàn Quốc cho biết con người Việt Nam rất mạnh mẽ, còn các cầu thủ đang cố gắng hết sức để vượt qua khó khăn và thi đấu tốt. Một trong những khó khăn là thời tiết ban ngày ở Iraq lên tới 47 độ C được xem là thách thức, nhưng không thể ngăn cản khát khao chiến thắng của đội. </p>\r\n\r\nMột phóng viên Iraq hỏi HLV Kim cảm thấy thế nào khi nhiều người nước ngoài khó thích ứng với khí hậu nơi đây và thường xuyên phải sử dụng nhà tắm. \"Tôi muốn giành chiến thắng và trở lại Việt Nam càng sớm càng tốt\", ông Kim trả lời khiến nhiều người ở phòng họp báo bật cười. </p>\r\n\r\nCâu hỏi duy nhất HLV Kim không nói về chiến thắng là đánh giá về đội tuyển Iraq. Với HLV sinh năm 1976, Iraq giàu thể lực và kỹ thuật. Đội tuyển Tây Á không chỉ chơi bóng ngắn mà còn xây dựng lối chơi xoay quanh tiền đạo Aymen Hussein – có 26 bàn và đứng thứ bảy trong danh sách ghi bàn trong lịch sử ĐTQG. HLV trưởng Việt Nam sẽ cùng các cộng sự tiếp tục phân tích các cái tên đối phương đáng chú ý khác, hy vọng thông qua phân tích sẽ giúp cầu thủ chơi tốt hơn vào ngày mai. </p>', '2024-06-10 13:11:47', '2024-06-10 19:27:32'),
(8, 2, 'Tiểu thương lao đao sau lũ \'chưa từng thấy\'', 'assets/uploads/1718019182cho-2948-1718011849.jpg', '<p>QUẢNG NINH: Trận lũ lớn nhất từ trước tới nay ở chợ trung tâm Uông Bí khiến hàng trăm tiểu thương bị thiệt hại tài sản, phải tạm dừng kinh doanh. </p>\r\n\r\nSáng 10/6, chợ trung tâm Uông Bí phải tạm đóng cửa để Ban Quản lý dọn dẹp sau trận lũ sáng qua. Hàng trăm tiểu thương đứng kín ba cổng chợ ngóng vào những gian hàng bừa bộn bên trong. </p>\r\nẢnh hưởng của rãnh áp thấp, từ đêm 8/6 đến rạng sáng 9/6, TP Uông Bí mưa 177 mm. Cao điểm là sáng qua, mưa xối xả, nước từ sông Sinh dâng cao tràn vào đường Xuân Diệu rồi vào chợ trung tâm Uông Bí. Do chợ cách bờ sông hơn 20 m, địa hình trũng thấp nên nước tràn vào như thác. </p>\r\n\r\n\"Nước cuốn phăng hàng hóa, mọi người hô hoán gọi nhau trong hỗn loạn. Đến khi nước ngập đến gần cổ, chúng tôi buộc phải rời chợ\", bà Nguyễn Thị Bản, 51 tuổi, chủ một sạp bán quần áo, kể lại.</p>\r\n\r\nDòng nước đục ngầu cuốn trôi rau cỏ, thịt cá, quần áo... của hàng trăm tiểu thương đang kinh doanh trong khu chợ rộng hơn 20.000 m2.</p>\r\n50 tuổi, từng vài chục năm bán hải sản ở chợ, bà Đỗ Thị Hoa nói trận lũ hôm qua \"chưa từng thấy\". Đến giờ dù chưa được vào kiểm tra hàng, bà đánh giá tiểu thương ít cũng mất vài triệu đồng, nhiều thì cả trăm triệu.</p>\r\n\r\nSau khi nước rút, chợ trung tâm Uông Bí ngổn ngang rác thải, bùn đất xen lẫn với hàng hóa. Để đảm bảo vệ sinh, an toàn cho tiểu thương, Ban Quản lý chợ đã tạm thời đóng cửa dọn dẹp.</p>\r\n\r\nMột số tiểu thương mang hàng đến chợ phải bày ra đường và vỉa hè cạnh chợ để bán. Những người còn lại đứng kín cổng đợi vào xem hàng hóa. Họ đều mong chính quyền có chính sách hỗ trợ để giảm phần nào thiệt hại.</p>\r\nLãnh đạo TP Uông Bí cho biết trận mưa lũ hôm qua làm 1.064 hộ dân, trên 58 ha hoa màu và 134 ha ao đầm thủy sản bị ngập. 500 gia súc, gia cầm bị cuốn trôi. 7 tuyến tỉnh lộ, đường liên phường và khu dân cư bị sạt lở. Chợ trung tâm Uông Bí bị ngập sâu khoảng 1,5 m, đang được thống kê thiệt hại.</p>\r\n\r\nXây dựng từ những năm 1990, chợ trung tâm Uông Bí là đầu mối thương mại lớn nhất thành phố, thu hút 800 hộ kinh doanh cố định, hơn 200 điểm kinh doanh không cố định, giải quyết việc làm cho trên 1.000 lao động.</p>\r\n\r\n\r\n', '2024-06-10 13:12:08', '2024-06-10 18:33:02'),
(9, 7, 'Máy bay quân sự Ukraine \'lần đầu tập kích lãnh thổ Nga\'', 'assets/uploads/1718017020MiG-29-4179-1717990102.png', '<p>Báo Anh cho biết máy bay quân sự Ukraine đã tấn công mục tiêu tại tỉnh Belgorod, đánh đấu lần đầu Kiev dùng khí tài này nhắm vào lãnh thổ Nga.</p>\r\n\"Không quân Ukraine (UAF) đã tấn công một sở chỉ huy của Nga ở Belgorod. Đòn đánh đã trúng đích, song thiệt hại liên quan vẫn đang được xác minh. Đây là lần đầu tiên UAF phóng đạn từ trên không nhằm vào mục tiêu ở lãnh thổ Nga\", một nguồn tin quân sự nói với Sky News hôm 9/6.</p>\r\nNguồn tin không đề cập loại máy bay và đạn Ukraine sử dụng, cũng như đây có phải là vũ khí phương Tây hay không.</p>\r\nBộ Quốc phòng Nga chưa bình luận về thông tin nhưng trước đó cho biết phòng không nước này đánh chặn một số máy bay không người lái (UAV) tự sát của Ukraine tại tỉnh Belgorod vào chiều 9/6.</p>\r\nGiới chức tỉnh Belgorod cùng ngày ba lần phát cảnh báo về nguy cơ bị tấn công bằng tên lửa, bên cạnh thông tin bị UAV đối phương tấn công. Hình ảnh, video trên mạng xã hội cho thấy một cột khói lớn bốc cao lên bầu trời cùng nhiều tiếng nổ, không rõ do trúng UAV hay tên lửa.</p>\r\nKênh tin tức độc lập Astra cho biết một kho đạn ở quận Rakityansky tại tỉnh Belgorod đã bị tập kích và gây ra hỏa hoạn. Một số nguồn tin Nga nói rằng một phòng tập thể hình, nơi lực lượng Nga đóng quân, đã bị đánh trúng.</p>\r\nNguồn tin của Sky News cũng cho biết lực lượng Ukraine tối 8/6 đã thực hiện đòn tấn công hiệp đồng vào một tàu đổ bộ Nga ở biển Azov, sau khi nó vừa di chuyển đến từ Biển Đen. Đây là tàu lớp Ropucha thứ 5 của Moskva bị chìm hoặc \"không thể tiếp tục hoạt động\" do đòn đánh của Kiev, theo nguồn tin này. </p>\r\n\r\nMỹ, Pháp mới đây cho phép Ukraine sử dụng khí tài do các nước này viện trợ để tập kích mục tiêu quân sự trong lãnh thổ Nga, cụ thể là các khu vực mà Moskva dùng để phát động tấn công vào lãnh thổ đối phương.</p>\r\n\r\nAnh cũng đã cho phép Ukraine khai hỏa vũ khí do nước này cung cấp, bao gồm tên lửa tầm xa Storm Shadow, để tấn công mục tiêu tại Nga, đồng thời không giới hạn cách Kiev sử dụng loại đạn này.</p>\r\nYehor Cherniev, phó chủ tịch Ủy ban An ninh, Quốc phòng và Tình báo tại quốc hội Ukraine hôm 5/6 thông báo nước này đã sử dụng pháo phản lực HIMARS của Mỹ để phá hủy một số bệ phóng tên lửa phòng không Nga ở vùng Belgorod, cách biên giới hai nước hơn 30 km.</p>\r\nTổng cục Tình báo Quốc phòng Ukraine (GUR) ngày 9/6 thông báo lực lượng này đã tấn công một căn cứ không quân tại Cộng hòa Astrakhan ở miền nam Nga, đánh trúng một chiến đấu cơ Su-57, mẫu tiêm kích hiện đại nhất của đối phương.</p>\r\nFighter Bomber, blogger quân sự có hơn một triệu người theo dõi của Nga, cho biết chiếc Su-57 đã bị UAV Ukraine đánh trúng và giới chức đang đánh giá thiệt hại để xem có thể sửa chữa hay không. Nếu không thể khắc phục, đây sẽ là tiêm kích Su-57 đầu tiên của Nga bị phá hủy từ đầu chiến sự.</p>', '2024-06-10 13:14:09', '2024-06-10 17:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `avatar` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'member',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `name`, `email`, `password`, `type`, `created_at`, `update_at`) VALUES
(1, NULL, 'Nguyễn Văn A', 'aaavbb@gmail.com', '$2y$10$/HObaZ6XOtQRCqlAw.e16uvx4Tn0fk1tViEiPQPKJOvIfi4MIF306', 'member', '2024-06-10 20:40:27', '2024-06-10 20:40:27'),
(2, NULL, 'Mạnh Cường', 'manhcuong@gmail.com', '$2y$10$H.NiCmpovv3ROi9Y5aVOF.JV4rCfKZ7I4yAXvgm4ufHymyCKD9r8q', 'admin', '2024-06-10 20:41:19', '2024-06-10 20:41:19'),
(3, NULL, 'ahihi', 'ahihi@qe.com', '$2y$10$cy2FVKBkWdZGocyi2spQ9u6FoLNQFDMoVCM8Cyi7QKxNMNCEkLBO6', 'member', '2024-06-10 21:17:36', '2024-06-10 21:17:36'),
(4, NULL, 'hihi', 'hihi@gmail.com', '$2y$10$SkSLcd5d4Aa3fZoGwGQbYuWgfddKsUtqKbUB9p29xY3KUsheigmyC', 'member', '2024-06-10 21:24:34', '2024-06-10 21:24:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
