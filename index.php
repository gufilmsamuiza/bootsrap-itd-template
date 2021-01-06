<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>ITD Walailak</title>
    <style>
        /*นายกฤษณพงศ์ กิ้มซื่อ 62100359
        นายธีรดนย์ บุญรอด 62104310
        นายภานุพงศ์ กองสุวรรณ 62107339
        นายยุทธภูมิ สนาน้อย 62107842
        */
        .navbar {
            margin-bottom: 0;
            background-color: black;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
        }
        
        .navbar li a,
        .navbar .navbar-brand {
            color: #fff !important;
        }
        
        .navbar-nav li a:hover,
        .navbar-nav li.active a {
            color: #f4511e !important;
            background-color: #fff !important;
        }
        
        .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
        }
        
        .jumbotron {
            font-family: Georgia, "Times New Roman", Times, serif;
            background-color: rgb(0, 221, 255);
            color: black;
        }
        
        .bg-blue {
            background-color: rgb(0, 221, 255);
        }
        
        .bg-grey {
            background-color: grey;
        }
        
        .container-fluid {
            padding: 50px 60px;
        }
        
        .logo {
            font-size: 200px;
        }
        
        .logo-small {
            color: black;
            font-size: 50px;
        }
        
        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
        }
        
        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }
        
        .thumbnail img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }
        
        .carousel-control.right,
        .carousel-control.left {
            background-image: none;
            color: #f4511e;
        }
        
        .carousel-indicators li {
            border-color: #f4511e;
        }
        
        .carousel-indicators li.active {
            background-color: #f4511e;
        }
        
        .item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }
        
        .item img {
            width: 500px;
            height: 500px;
            margin-left: 500px;
        }
        
        .item span {
            font-style: normal;
        }
        
        .panel {
            border: 1px solid #f4511e;
            border-radius: 0 !important;
            transition: box-shadow 0.5s;
        }
        
        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0, 0, 0, .2);
        }
        
        .panel-footer .btn:hover {
            border: 1px solid #f4511e;
            background-color: #fff !important;
            color: #f4511e;
        }
        
        .panel-heading {
            color: #fff !important;
            background-color: #f4511e !important;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }
        
        .panel-footer {
            background-color: white !important;
        }
        
        .panel-footer h3 {
            font-size: 32px;
        }
        
        .panel-footer h4 {
            color: #aaa;
            font-size: 14px;
        }
        
        .panel-footer .btn {
            margin: 15px 0;
            background-color: #f4511e;
            color: #fff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
                <a class="navbar-brand" href="#myPage">ITD WU</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">About</a></li>
                    <li><a href="#Career">Career</a></li>
                    <li>
                        <a href="#co">IT-Co Working Space</a>
                    </li>
                    <li><a href="#review ">Review</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron text-center">
        <h1>ITD Walailak</h1>
        <p>Information Technology & Digital Innovation</p>

    </div>
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h2>About Company Page</h2>
                <h4>
                    "...เพราะเราคือครอบครัวเดียวกัน เราจะดูแลกันไปตลอด 4 ด้วยระบบการดูแลอย่างใกล้ชิด จากคณาจารย์ในหลักสูตรสร้างความอบอุ่นใจต่อผู้ปกครอง มาเป็นครอบครัวเดียวกับเราสิ..."
                </h4>
                <br />
                <p>
                    หลักสูตรเทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล สำนักวิชาสารสนเทศศาสตร์ มหาวิทยาลัย มีปรัชญาในการมุ่งเน้นผลิตนักเทคโนโลยีสารสนเทศที่มีคุณภาพ สามารถทำงานได้จริงในสาขาอาชีพ เป้าหมายของหลักสูตร โดยมีความรู้ทั้งในด้านเทคโนโลยีสารสนเทศและความรู้ด้านการจัดการ สามารถบูรณาการความรู้สู่การปฏิบัติจริง
                    โดยเน้นการเรียนไปในแนวทางด้านการพัฒนาโปรแกรม ประยุกต์ทั้งบนเว็บและอุปกรณ์เคลื่อนที่ นอกจากนี้ยังมุ่งหวังให้บัณฑิตต้องเป็นผู้ที่มีจริยธรรมในการ พัฒนาและใช้งานเทคโนโลยีสารสนเทศอีกด้วย ทางหลักสูตรเทคโนโลยีสารสนเทศและ นวัตกรรมดิจิทัลได้ตระหนักถึงความสำคัญในการพัฒนาบุคลากรให้มีความรู้ความสามารถใน
                    เทคโนโลยีสารสนเทศ เพื่อรองรับการพัฒนาประเทศตามยุทธศาสตร์ชาติระยะ 20 ปีของประเทศไทย ตลอดจนรองรับความต้องการของภาคอุตสาหกรรมในยุคเศรษฐกิจใหม่ เพื่อให้ประเทศไทยมีความ มั่นคง คนในชาติมีคุณภาพชีวิตที่ดี และมั่งคั่ง และสามารถพัฒนาประเทศไปได้อย่างยั่งยืน
                </p>
                <button class="btn btn-default btn-lg">Click to get link</button>
            </div>
            <div class="col-sm-4">
                <img src="logo.jpg" alt="" />
            </div>
        </div>
    </div>

    <div class="container-fluid bg-blue">
        <div class="row">
            <div class="col-sm-4">
                <img src="mission.png" alt="" />
            </div>
            <div class="col-sm-8">
                <h2>Our Values</h2>
                <h4>
                    <strong>MISSION:</strong
            >ผู้นำในการสร้างสรรค์นวัตกรรมด้านดิจิทัลแห่งอาเซียน (Leader in
            Digital Innovation of ASEAN ).
          </h4>
          <p>
            <strong>VISION:</strong> ผลิตบัณฑิต ที่มีความรู้และศักยภาพรองรับอุตสาหกรรมดิจิทัลระดับสากล สร้างสรรค์งานวิจัยและนวัตกรรมด้านดิจิทัลเพื่อมุ่งสู่เศรษฐกิจสร้างสรรค์ บริการวิชาการแก่ชุมชนและสังคมภายใต้แนวคิดปรัชญาเศรษฐกิจพอเพียง
                    อนุรักษ์และยกระดับการเผยแพร่ศิลปวัฒนธรรมไทยสู่สากลผ่านนวัตกรรมด้านดิจิทัล
                    </p>
            </div>
        </div>
    </div>
    <div id="Career" class="container-fluid text-center">
        <h2>Career</h2>
        <br />
        <h4>อาชีพในอนาคตที่คุณสามารถจับต้องได้</h4>
        <br />
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-console logo-small"></span>
                <h4>นักพัฒนาโปรแกรมแบบฟูลสแต็ก</h4>
                <p><a href="https://bcd.academy/full-stack-%E0%B8%84%E0%B8%B7%E0%B8%AD%E0%B8%AD%E0%B8%B0%E0%B9%84%E0%B8%A3-front-end-back-end-%E0%B8%84%E0%B8%B7%E0%B8%AD%E0%B8%AD%E0%B8%B0%E0%B9%84%E0%B8%A3/" target="_blank">คลิกเพื่อดูข้อมูลเพิ่มเติม</a></p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-phone logo-small"></span>
                <h4>นักพัฒนาเว็บและโมบาย</h4>
                <p><a href="https://xn--12cas3c2av3m3a0g7c.com/mobile-application-developer/" target="_blank">คลิกเพื่อดูข้อมูลเพิ่มเติม</a></p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-eye-open logo-small"></span>
                <h4>นักวิเคราะห์ระบบ</h4>
                <p><a href="https://medium.com/@miwzkanyanat/system-analyst-%E0%B8%9A%E0%B8%97%E0%B8%9A%E0%B8%B2%E0%B8%97%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B8%97%E0%B8%B5%E0%B9%88-65b8dc075d8a " target="_blank">คลิกเพื่อดูข้อมูลเพิ่มเติม</a></p>
            </div>
        </div>
        <br /><br />
        <div class="row">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-hdd logo-small"></span>
                <h4>นักทดสอบระบบ</h4>
                <p><a href="https://www.admissionpremium.com/adplanning/work?id=20160127163339eNQnGcB" target="_blank">คลิกเพื่อดูข้อมูลเพิ่มเติม</a></p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-cloud logo-small"></span>
                <h4>นักพัฒนาโปรแกรมประยุกต์บนคลาวด์</h4>
                <p><a href="https://www.admissionpremium.com/adplanning/work?id=20160127163339eNQnGcB" target="_blank">คลิกเพื่อดูข้อมูลเพิ่มเติม</a></p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-wrench logo-small"></span>
                <h4 style="color: #303030">นักวิชาการคอมพิวเตอร์</h4>
                <p><a href="https://www.jobtopgun.com/article/%E0%B9%82%E0%B8%9B%E0%B8%A3%E0%B9%81%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B9%80%E0%B8%A1%E0%B8%AD%E0%B8%A3%E0%B9%8C-%E0%B8%AD%E0%B8%B2%E0%B8%8A%E0%B8%B5%E0%B8%9E%E0%B8%A2%E0%B8%AD%E0%B8%94%E0%B8%99%E0%B8%B4/#:~:text=%E0%B9%82%E0%B8%9B%E0%B8%A3%E0%B9%81%E0%B8%81%E0%B8%A3%E0%B8%A1%E0%B9%80%E0%B8%A1%E0%B8%AD%E0%B8%A3%E0%B9%8C%20%E0%B8%AD%E0%B8%B2%E0%B8%88%E0%B9%80%E0%B8%A3%E0%B8%B5%E0%B8%A2%E0%B8%81%E0%B8%A7%E0%B9%88%E0%B8%B2%E0%B8%99%E0%B8%B1%E0%B8%81,%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B9%80%E0%B8%81%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A7%E0%B8%82%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B9%84%E0%B8%AD%E0%B8%97%E0%B8%B5%E0%B9%81%E0%B8%A5%E0%B8%B0"
                        target="_blank">คลิกเพื่อดูข้อมูลเพิ่มเติม</a></p>
            </div>
        </div>
    </div>
    <div id="co" class="container-fluid text-center ">
        <h2>ห้อง IT-Co Working Space</h2>
        <br/>
        <h4>มีห้องส่วนตัวเฉพาะนักศึกษา ITD เท่านั้น</h4>
        <br>
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="co4.jpg" alt="Paris" width="400" height="300" />
                    <p><strong>IT-Co working Space</strong></p>
                    <p></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="co2.jpg" alt="New York" width="400" height="300" />
                    <p><strong>Gallery</strong></p>
                    <p></p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="co5.jpg" alt="San Francisco" width="400" height="300" />
                    <p><strong>LAB</strong></p>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <!--  review -->
    <h2 id="review" style="text-align: center; font-family: Georgia, 'Times New Roman', Times, serif;">รีวิวจากรุ่นพี่ ITD ปี 2</h2>
    <br>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="team.jpg" alt="">
                <h4>ITD ชื่อนี้อาจารย์เอาใจใส่ดีมาก บรรยากาศระหว่างผู้สอนและผู้เรียนเป็นไปอย่างผ่อนคลาย ทำให้เรียนรู้ได้ดีมากๆ<br><br><span>Theeradon Boonrod นักศึกษาสาขา ITD ปี 2</span></h4>
            </div>
            <div class="item">
                <img src="do.jpg" alt="">
                <h4>ITD เรียนเข้มข้น เรียนจบทฤษฎีได้ลงมือปฏิบัติทันที ทำให้เข้าใจได้ง่ายและนำความรู้ไปต่อยอดได้อย่างมีประสิทธิภาพยิ่งขึ้น<br><br><span>Panupong Kongsuwan นักศึกษาสาขา ITD ปี 2</span></h4>
            </div>
            <div class="item">
                <img src="a.jpg" alt="">
                <h4>ทีเด็ดต้องห้อง IT-CO Working Space เหมาะสมสำหรับเด็กสายเราสุดๆ<br><br><span>Surin Hawae นักศึกษาสาขา ITD ปี 2</span></h4>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    <!-- Container (Contact Section) -->
    <div class="container-fluid bg-grey" id="contact">
        <h2 class="text-center">CONTACT</h2>
        <div class="row">
            <div class="col-sm-5">
                <p>ติดต่อเรา</p>
                <p><span class="glyphicon glyphicon-map-marker"></span>สำนักวิชาสารสนเทศศาสตร์ อาคารวิชาการ 3 <br>มหาวิทยาลัยวลัยลักษณ์ 222 ต.ไทยบุรี อ. ท่าศาลา จ. นครศรีธรรมราช 80161</p>

                <p><span class="glyphicon glyphicon-phone"></span>075-672206, 075-672451</p>
                <p><span class="glyphicon glyphicon-envelope"></span> informatics@mail.wu.ac.th</p>
            </div>
            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>