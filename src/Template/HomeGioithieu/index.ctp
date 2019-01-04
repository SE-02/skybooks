<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <style type="text/css">
      #gioithieup{
          margin-left: 110px;
          width: 1200px;
          margin-right: auto;
          line-height: 25px;
          color: #170404;
          font-size: 13px;
          font-weight: 400;
      }
      #strong1{
        font-size: 15px;
      }

      .lienhe{
            width: 1200px;
            margin-right: auto;
            margin-left: 110px;
           
        }
        .google{
            width: 100%;
        }
        .google-map{
            width: 100%;
            height: 450px;
            background: #dedede;
        }
        .trangchu ul{
            background: #f2f2f2;
            margin: 15px 0px;
            padding: 12px 15px;
            margin-bottom: 30px;

        }
        .trangchu ul li{
            display: inline-block;
            font-size: 12px;
            text-transform: uppercase;
            position: relative;
            line-height: 16px;
            font-weight: normal;
            color: #e66430;
        }
        .trangchu ul li a{
            color: #444;
            background: url(//bizweb.dktcdn.net/100/197/269/themes/517883/assets/icon_breadcrumb.png?1521102652214) center right no-repeat;
            padding-right: 15px;
            background-size: 8px;
            line-height: 20px;
        }
        h4{
            text-transform: uppercase;
            margin-top: 60px;
            color: #252525;
            margin-bottom: 30px;

        }
    </style>
</head>
<body id="home">
      <div class="wrapper">
    <div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">SKYBOOKS</span></div>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>Chào mừng bạn</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Mỗi một cuốn sách sẽ đưa bạn đến một chân trời mới<br>- Ngọc Phương -</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img src="/img/d.jpg" alt=""></div> 
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400">
                           <h1>THẾ GIỚI SÁCH </h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500">
                           <h2>Thế giới là một cuốn sách và người không <br> đi chỉ đọc được một trang <br>- Kim Quý -</h2>
                        </div>
                        <div class="flat-button caption5 formLeft delay600"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="/img/e.png" alt=""></div> 
                     </li>
                     <li>
                        <div class="flat-caption caption2 formLeft delay400 text-center">
                           <h1>SÁCH LÀ BẠN</h1>
                        </div>
                        <div class="flat-caption caption3 formLeft delay500 text-center">
                           <p>Sách là người bạn đặc biệt, lúc nào cũng sẵn sàng mở lòng với ta... <br>Lúc nào bạn cũng đợi ta ở trên kệ sách.<br> - Nguyễn Oanh -</p>
                        </div>
                        <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="flat-image formBottom delay200" data-bottom="true"><img src="/img/f.jpg" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div>
           <div class="promotion-banner">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="/img/w.PNG" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="/img/o.PNG" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="/img/s.PNG" alt=""></div>
                     </div>
                  </div>
               </div>
            </div> 
         </div>

         <div class="clearfix"></div>
         <div class="container_fullwidth">

         <div class="lienhe">
            <div class="trangchu" style="">
            <ul>
                <li>
                    <a href="/HomeUsers/index">Trang chủ</a>
                </li>
                <li>
                    <strong>Giới thiệu</strong>
                </li>
            </ul>
           </div>
          </div>
         
         <h3 style="margin-left: 110px;margin-top:10px !important;margin-bottom: 30px;font-weight: 450;color: #666666;">Giới thiệu</h3>
         <p id="gioithieup">
           Công ty cổ phần Sách Sky (Sky Books Joint-Stock Company – gọi tắt là Sky Books) do một nhóm trí thức trẻ thành lập ở Hà Nội năm 2005 với niềm tin: Tri thức là Sức mạnh. Thông qua việc giới thiệu các tác phẩm có giá trị của thế giới, Sky Books mong muốn trở thành nhịp cầu nối nguồn tri thức nhân loại với dân tộc Việt Nam.
         </p>
         <p id="gioithieup">
           Trong bối cảnh Việt Nam gia nhập WTO, thực thi Luật Xuất bản mới và Công ước Berne về bản quyền có hiệu lực, Sky Books đặt mục tiêu mua bản quyền và xuất bản những đầu sách có giá trị đáp ứng nhu cầu của độc giả Việt Nam.
         </p>

         <p id="gioithieup">
           Sau hơn 12 năm hoạt động và phát triển, Sky Books đã trở thành một trong những thương hiệu hàng đầu trong giới xuất bản và được nhiều độc giả yêu mến. Với đội ngũ nhân sự trẻ trung, năng động, có chuyên môn cao và đam mê sách, Sky Books đang trên đường hướng tới mục tiêu trở thành một trong những công ty xuất bản hàng đầu Việt Nam.
         </p>

         <p id="gioithieup">
           Hiện nay, Sky Books tập trung xây dựng các dòng sách chính gồm:
           <br>

          - Sky Core (Biz + Gen): gồm các sách hướng dẫn khởi nghiệp, các bài học, phương pháp và kinh nghiệm quản lý kinh doanh của các chuyên gia, các hãng và tập đoàn nổi tiếng trên thế giới.
          <br>

          - Sky Omega - Tinh hoa Nhân loại: dòng sách kinh điển chuyển tải những tri thức tiên tiến nhất trong các lĩnh vực như văn hóa, chính trị, xã hội của các nước trên thế giới.
          <br>
          - Sống: Dòng sách của tác giả Việt.
          <br>

          - ETS: không gian của những sản phẩm khoa học, sáng tạo, trí tuệ, hiện đại.
         </p>

         <p id="gioithieup" >
           <br>
           <strong id="strong1">LỊCH SỬ PHÁT TRIỂN</strong>
         </p>
         <p id="gioithieup">
           <strong id="strong1">NĂM 2015</strong>
           <br>
           Ngày 21/1/2005: Công ty Cổ phần Sách Sky được cấp giấy phép thành lập có trụ sở tại 25 B12, Hồ Đắc Di, Nam Đồng, Đống Đa, Hà Nội, bao gồm 6 sáng lập viên: Nguyễn Cảnh Bình, Lê Thanh Huy, Nguyễn Thành Lân, Đặng Tài An Trang, Hồ Thanh Vân, Trịnh Minh Giang.
           <br>
           Phát triển hệ thống đại diện của SkyBooks tại nước ngoài.
           <br>
           Ngày 23/3/2005, cuốn Trí tuệ Kinh doanh châu Á được in xong, lần đầu tiên logo của Sky Books xuất hiện trên bìa một cuốn sách.
           <br>
           Ngày 26/3/2005, Sky Books chính thức khai trương.
           <br>

           Ngày 24/6, tái bản cuốn Hiến Pháp Mỹ được làm ra như thế nào? của anh Nguyễn Cảnh Bình.
           <br>
           Sky Books ký hợp đồng mua bản quyền với Hiệp hội quản trị Hoa Kỳ AMACOM, NXB McGraw-Hill.
         </p>
         <p id="gioithieup">
          <br>
         <strong id="strong1">NĂM 2006</strong>
          <br>

          Phê duyệt cấu trúc Tủ sách Sky BIZ.
          <br>
          Sky Books làm việc với Pearson Education, Tập đoàn xuất bản lớn nhất nước Anh về kế hoạch hợp tác dài hạn
          <br>
          Sky Books tham gia Hội Doanh nghiệp Trẻ Hà Nội, VCCI…
         </p>
         <p id="gioithieup">
           <br>
           <strong id="strong1">NĂM 2007</strong>
           <br>

          Xuất bản cuốn sách Chiến lược đại dương xanh. Đây cũng là cuốn sách kinh điển về quản trị kinh doanh và là một trong những cuốn sách bán chạy nhất tính đến nay của Sky Books.
          <br>

          Anh Nguyễn Cảnh Bình tham dự Hội thảo Các doanh nghiệp nhỏ và việc bảo vệ sở hữu trí tuệ do APEC tổ chức tại Bangkok, từ 8-10/5. Gặp giám đốc của Tutle Mori Agency và Thormson Education vào 20/6/07.
          <br>

          Ra mắt Bộ sách chứng khoán gồm 7 cuốn, phần lớn trong số đó đều nằm trong Top 10 cuốn sách hay nhất mọi thời đại về chứng khoán.
          <br>

          Ra mắt cuốn sách Những người khổng lồ bé nhỏ. Đây là một cuốn sách quan trọng dành cho chủ doanh nghiệp vừa và nhỏ, những người đang loay hoay với câu hỏi mở rộng hay không không mở rộng quy mô của mình.
          <br>

          Tháng 10/2007: Sky Books chuyển VP về 164B Đội Cấn, Ba Đình.
          <br>

          Lập VPĐD tại 194 Nguyễn Thị Minh Khai, TP Hồ Chí Minh.
          <br>

          Lên kế hoạch mở nhà sách của SKy, đặt tên là bizSPACE – Không gian Sách Quản trị Kinh doanh.
         </p>
         <p id="gioithieup">
           <br>
           <strong id="strong1">NĂM 2008</strong>
           <br>
           Tháng 1/ 2008: Sky Books hợp tác với tập đoàn Panasonic xuất bản cuốn sách Mạn đàm nhân sinh. Lễ ra mắt cuốn sách được tổ chức tại Trung tâm Hợp tác Nguồn nhân lực Việt Nam - Nhật Bản, Đại học Ngoại Thương Hà Nội
           <br>
           Tháng 1/2008: Sky Books tổ chức chương trình University Tour, anh Nguyễn Cảnh Bình tham gia giao lưu với sinh viên ĐH Kinh tế quốc dân & ĐH Ngoại thương.
           <br>

          Tháng 3/2008: Cha đẻ của “Những người khổng lồ bé nhỏ” đến Việt Nam theo lời mời của Sky Books. Ông đã tham dự hội thảo về bí quyết xây dựng doanh nghiệp vừa và nhỏ tại trường Đại học Ngoại thương do Sky Books kết hợp với trường Đại học Ngoại thương tổ chức
          <br>

          5/2008 : Chương trình Gặp gỡ “Bill Gates Châu Á” Trương Minh Chính (Steve Chang) và ra mắt cuốn sách Xu thế không gì ngăn cản nổi do công ty sách SkyBooks và Công ty InnovGreen tổ chức với sự than gia của gần 400 sinh viên Đại học kinh tế quốc dân
          <br>
          Sky Books lần đầu tiên tham gia Hội chợ Sách TP HCM;
          <br>
          Sky Books tham gia Câu lạc bộ Sách Hà Nội, tổ chức giao lưu, gặp mặt giới xuất bản 2 miền.
         </p>
         <p id="gioithieup">
           <br>
           <strong id="strong1">NĂM 2009</strong>
           <br>

        20/4/2009 Sky Books cùng Chương trình Thương hiệu Quốc gia (THQG- Cục Xúc tiến Thương mại) ký văn bản hợp tác xây dựng Tủ sách Quốc gia “Tri thức @ Thương hiệu Quốc gia” nhằm phát triển cơ sở dữ liệu tri thức quản trị kinh doanh, nâng cao năng lực cạnh tranh và xây dựng thương hiệu của doanh nghiệp Việt Nam. Nhân dịp này hai bên cũng cho ra mắt và 2 cuốn sách đầu tiên của tủ sách là Quản trị thương hiệu &amp; Chiến lược thương hiệu châu Á
        <br>
        Tháng 10/2009: Bắt tay soạn thảo FAQs & Culture Book.
        </p>

        <p id="gioithieup">
          <br>
          <strong id="strong1">NĂM 2010</strong>
          <br>
          Sky Kids - Tủ sách tư duy giáo dục dành cho thiếu nhi ra đời nhân dịp quốc tế thiếu nhi 1/6/2010 với phương châm mang đến Việt Nam những xu hướng, phương pháp giáo dục tư duy, nhân cách và đạo đức tại các quốc gia tiên tiến trên thế giới. Ngoài việc chuyển ngữ và giới thiệu các ấn phẩm tư duy giáo dục, kỹ năng sống đẹp được mua bản quyền từ các NXB dành cho thiếu nhi danh tiếng thế giới như Free Spirit, Houghton Mifflin, Harper Child – Hoa Kỳ, Nathan – Pháp…Sky Kids vẫn luôn trăn trở theo đuổi, nghiên cứu và cho ra mắt những sản phẩm hoàn toàn của người Việt, dành cho người Việt, vì người Việt. Trên tinh thần đó 2 bộ Đồng dao cho bé và Bố ơi vì sao (Thụy Anh) với phương pháp giáo dục hoàn toàn Việt Nam, của tác giả Việt Nam, họa sĩ Việt Nam đã mở đầu cho dòng sản phẩm Made in Vietnam, với khối lượng và chủ đề, cách thức thế hiện vô cùng phong phú.
          <br>
          FAQs & Culture Book của công ty ra mắt vào dịp sinh nhật công ty lần thứ 5 với version 1.
          <br>

        Thành lập Alfun với nhiệm vụ tổ chức các hoạt động văn hóa cho công ty, nhằm tăng cường tinh thần đoàn kết, tạo môi trường làm việc thân thiện thoải mái cho các thành viên.
        <br>
        Tháng 1/ 2010: Sky Books phối hợp với tập đoàn Panasonic ra mắt cuốn sáchSống xanh. Buổi Tọa đàm “Sống xanh” do Công ty Sách Sky (Sky Books) phối hợp với Panasonic, VC Invest, Trung tâm Sống và Học tập vì Môi trường và Cộng đồng (Trung tâm Live & Lean) tổ chức diễn ra vào ngày 26/01/2010, tại Trung tâm Hợp tác Nguồn Nhân lực Việt Nam- Nhật Bản (VJCC), Đại học Ngoại thương, Hà Nội. Buổi tọa đàm có sự tham gia của đại diện Panasonic, Trung tâm Live & Lean, VC Invest_Mr Lê Tuấn, một trong sáu người Việt Nam đã đặt chân và cắm cờ Việt Nam tại Nam Cực, cùng đại diện các cơ quan thông tấn và hơn 100 bạn trẻ quan tâm đến vấn đề bảo vệ môi trường
        <br>

        3/2010: Theo lời mời của Sky Books, tác giả cuốn sách Bí mật của trí nhớ siêu phàm Eran Katz đến Việt Nam, giao lưu với độc giả tại ba thành phố Hà Nội, Hải Phòng và Tp. HCM.
      <br>
        4/2010 anh Nguyễn Cảnh Bình lần đầu tiên tham dự Hội chợ sách Quốc tế London Book fair, một trong những hội chợ về sách lớn nhất thế giới.
      <br>

        Tháng 7/2010: Tổ chức lễ ra mắt cuốn sách Thời tiết đô thị của blogger 5 xu tại Café Sách Trung nguyên Hà Nội
      <br>

        Sky Books lần đầu tham gia Hội chợ sách Quốc tế Hà Nội.
        <br>

        Ra đời dòng sách văn học với tên gọi Imone – Dòng sách Văn học
        <br>
        Thỏa thuận sơ bộ thành lập Small Giants Việt Nam do Sky Books làm đại diện, gồm 7 công ty.
        </p>

        <p id="gioithieup">
          <br>
          <strong id="strong1">NĂM 2011</strong>
          <br>
          3/2011: Sky Books mời tác giả bộ sách Tư duy cùng bé, ông Oscar Brenifier đến Việt Nam và tổ chức chương trình “Hội thảo dạy con tư duy cách nào?” và tham quan, làm việc với một số trường mẫu giáo, tiểu học và trung học ở Hà Nội.
          <br>

          Sky Books mời tác giả cuốn sách “Vì sao ai cũng hài lòng” Paul Spiegman sang Việt Nam.
          <br>

          Từ ngày 17-21/11/2010, Công ty Sách Sky (Sky Books), Trung tâm Đào tạo Quản trị Kinh doanh (INPRO) và Ngân hàng TMCP Kỹ thương Việt Nam (Techcombank) phối hợp tổ chức chuỗi sự kiện: Small Giants Culture Tour_ Để trở thành doanh nghiệp hùng mạnh. Chương trình có sự tham gia của Paul Spiegelman - diễn giả nổi tiếng trong khối SMEs tại Mỹ, đồng thời cũng là chủ doanh nghiệp tư vấn dịch vụ y tế số 1 của Mỹ Beryl- cùng ông Nguyễn Thành Nam (CEO Tập đoàn FPT) và ông Lê Tấn Phước (CEO Searefico). Tham gia chuỗi sự kiện, khách mời có cơ hội trao đổi, học hỏi kinh nghiệm từ CEO hàng đầu đã gặt hái nhiều thành công trong việc xây dựng văn hóa doanh nghiệp, tạo dựng mối quan hệ tốt đẹp với nhân viên, hạt nhân cốt lõi cho sự tăng trưởng bền vững của doanh nghiệp. Cộng đồng Những người khổng lồ bé nhỏ Việt Nam cũng chính thức ra mắt trong thời điểm này.
          <br>

          Sky Bếp khai trương, mọi người rất vui vẻ & có lẽ đây là sự kiện hấp dẫn nhất của Sky với việc tất cả nhân viên đều ăn trưa tại VP. Xây dựng văn hóa doanh nghiệp, các nhóm tự thiết kế, trang trí phòng làm việc của mình…

          7/2011, anh Nguyễn Cảnh Bình nhận lời mời và tham dự chương trình Asian Publishing Convention tổ chức tại Bangkok
          <br>
          Ra mắt bộ sách Trí tuệ xuất chúng thiên tài kinh doanh gồm 4 cuốn sách hay nhất viết về tứ đại doanh nhân Warren Buffet, Bill Gates, Steve Jobs, Richard Branson
          <br>
          Tọa đàm “Tinh thần doanh nhân việt” được tổ chức tại Hà Nội (29/9) và Sài Gòn (1/10) với sự tham gia của CEO Sky Books Nguyễn Cảnh Bình cùng nhiều diễn giả nổi tiếng như Ông Nguyễn Trần Bạt – Chủ tịch kiêm tổng Giám đốc của Invest Consult Group, Ông Nguyễn Hoài Nam – Tổng Giám đốc tập đoàn BerJaya Việt Nam, Ông Nguyễn Tuấn Quỳnh – Phó TGĐ Công ty vàng bạc đá quý Phú Nhuận PNJ; Ông Võ Chí Thành – Phó viện trưởng Viện Nghiên cứu Quản lý Kinh tế Trung ương. Tọa đàm là một không gian kết nối giữa các thế hệ doanh nhân, các chuyên gia kinh tế, những người thực sự tâm huyết với một xã hội kinh doanh tương lai của Việt Nam.
          <br>
          Tháng 8: Sách điện tử Sky Books ra đời nhằm giúp bạn đọc tiếp cận với sách của Sky Books thông qua các thiết bị kĩ thuật số như máy tính bảng, điện thoại di động,…
          <br>
          Tháng 10: Sky Books lên kế hoạch để phát triển các sản phẩm mới (non book, digital) và phát triển các kênh bán hàng mới (BS, directsales, telesales, online, ebook, platform, membership…)
          <br>
          10/2011: anh Nguyễn Cảnh Bình tham dự Hội chợ sách Frankfurt, hội chợ sách lớn nhất thế giới. Anh đã gặp gỡ vào trao đổi với nhiều nhà xuất bản đang hợp tác với Sky Books cùng một số đối tác triển vọng khác.
          <br>
          11/2011: anh Nguyễn Cảnh Bình tham gia triển lãm về giáo dục và cung cấp các thiết bị giáo dục tại Kualalumpur do British Educational Suppliers Association tổ chức.
          <br>
          Nhân sự/Cơ chế sẽ có những thay đổi tương ứng (giỏi hơn, thiên về công nghệ, làm việc hiệu quả/sáng tạo & quyết liệt hơn) để đáp ứng kế hoạch kinh doanh mới
          <br>

          Chính thức thành lập Chi nhánh Sky Books tại SG để chủ động kinh doanh & đảm bảo hiệu quả, tăng vai trò, đẩy mạnh phát triển hoạt động Kinh doanh.

        </p>

        <p id="gioithieup">
          <br>
          <strong id="strong1">NĂM 2013</strong>
          <br>

          Là năm đánh dấu cho số lượng nhân sự làm việc lên đến con số 100. Với sự hình thành dần mô hình các khối của công ty đánh dấu bước ngoặt về tổ chức hoạt động, bao gồm các khối: Sản xuất, Kinh doanh, Văn phòng, Hợp tác phát triển. Trong 2013 đã tổ chức thành lập Khối Kinh doanh và khối Sản xuất. Đầu năm 2014 sẽ tiếp tục thành lập các khối còn lại.
          <br>

          Đây là năm khởi sắc cho việc “mở rộng” của Sky, nhiều hoạt động được triển khai hướng ra bên ngoài, các nhân sự cũng thay phiên nhau đi ra ngoài để tìm hiểu và học hỏi các sản phẩm của các nước bạn, những buổi chia sẻ tại các trường từ mẫu giáo đến đại học,….
          <br>
          Trong nội bộ tổ chức được nhiều các chương trình hoạt động, đào tạo cho các vị trí quản lý, nhân viên
          <br>

          Tham gia nhiều vào các hoạt động xã hội, tặng sách cho các thư viện,…
          <br>

          Thành công với các dự án lớn như Tập đoàn Trung Nguyên in 195 nghìn cuốn dành tặng cho Thanh niên Việt Nam, Dự án với Sam Sung về cuốn Lee Kun Hee,…
          <br>

          Cuốn “Đại Gia” bị đình chỉ phát hành, đây là lần đầu tiên Skybooks gặp tình huống này trong sự nghiệp xuất bản tính đến thời điểm bây giờ.
          <br>

          Mở rông từ gia trị cốt lõi, Tư duy của chiến lược gia_ Nghệ thuật kinh doanh Nhật bản, Khoảng cách từ nói đến làm (nằm trong Top 100 cuốn sách quản trị kinh doanh hay nhất mọi thời đại- The 100 best business books of all times).
        </p>

        <p id="gioithieup">
          <br>
          <strong id="strong1">NĂM 2014- 2015</strong>
          <br>

          Đánh dấu việc đầu tiên dự án xuất bản sách theo hình thức gây quỹ cộng đồng có tên Crobo (Crowdfunding for book) được triển khai với cuốn Xứ Đông Dương thuộc Pháp.
        </p>

        <p id="gioithieup">
          <br>
          <strong id="strong1">NĂM 2016</strong>
          <br>

        Thành lập Ban sách Sống – Dòng sách viết cho tác giá Việt Nam
        </p>

        <p id="gioithieup">
          Tách dòng sách Chính trị Xã hội Omega thành Công ty cổ phần Sách Omega
          <br>

          &nbsp;
        </p>

        <p id="gioithieup">
          
          <strong id="strong1">NĂM 2017</strong>
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <br>

          Thành lập Ban sách ETS (Education Technology Science) – Dòng sách Khám phá Sáng tạo   
          <br>                                                  
        </p>
         <?= $this->Flash->render() ?>
      <div class="container clearfix">
        <?= $this->fetch('content') ?>
    
   
    </div>
    </div>
    <footer>
    </footer>
</body>
</html>
         