<html>
    <head>
        <title> MORG Homestay </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton|Shrikhand|EB+Garamond|Prata|Zen+Dots|Caveat|Cinzel|Josefin+Sans|Acme|Tangerine|Salsa">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .contacts {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                /* font-family: ; */
                background-size: cover;
            }
            .contact {
                position: relative;
                min-height: 100vh;
                padding: 0 100px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                background-color: #C6A969;
                background-size: cover;
                background-position: center;
                /* background-size: cover; */
            }
            .contact .content3 {
                max-width: 800px;
                text-align: center;
            }
            .contact .content3 h2 {
                font-size: 36px;
                font-weight: 300;
                color: black;
                font-family: Cinzel;
            }
            .contact .content3 p { 
                color: black;
                font-family: "Krona+One";
                font-size: 20px;
            }
            .container {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 30px;
            }
            .container .contactInfo {
                width: 50%;
                display: flex;
                flex-direction: column;
            }
            .container .contactInfo .box {
                position: relative;
                padding: 20px 0;
                display: flex;
            }
            .container .contactInfo a{
                text-decoration: none;
            }
            .container .contactInfo a:hover {
                text-decoration: underline;
                color: #000000;
            }
            .container .contactInfo .box .icon {
                min-width: 60px;
                height: 60px;
                background-color: rgb(255, 255, 255);
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
                font-size: 22px;
                color: #000000;
                text-decoration: none;
            }
            .container .contactInfo .box .icon:hover {
                color: blue;
            }
            .container .contactInfo .box .text {
                display: flex;
                margin-left: 20px;
                font-size: 16px;
                color: #000000;
                flex-direction: column;
                font-weight: 300;
            }
            .container .contactInfo .box .text a {
                color: #000000;
                text-decoration: none;
            }
            .container .contactInfo .box .text a:hover{
                text-decoration: underline;
                color: blue;
            }
            .container .contactInfo .box .text h3 {
                font-weight: 500;
                color: rgb(21, 0, 255);
            }
            .contactForm {
                width: 100%;
                padding: 25px;
                background: #f0b874;
                border-radius: 25px;
            }
            .contactForm h2 {
                font-size: 30px;
                color: #333;
                font-weight: 500;
                text-align: center;
                font-family: 'Zen Dots';
            }
            .contactForm .inputBox {
                position: relative;
                width: 100%;
                margin-top: 10px;
            }
            .contactForm .inputBox input,
            .contactForm .inputBox textarea
            {
                width: 100%;
                padding: 5px 0;
                font-size: 16px;
                margin: 10px 0;
                border: none;
                border-bottom: 2px solid #333;
                outline: none;
            }
            footer {
                text-align: center;
                padding: 3px;
                background-color: DarkSalmon;
                color: white;
            }
            #about {
            position: relative;
            overflow: hidden;
            }
            #about .about-image {
                float: right;
                margin: 20px 0 20px 20px;
                max-width: 625px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            }
            #about .about-description {
                margin: 20px;
                max-width: 600px;
                text-align: justify;
            }
        </style>
    </head>
    <body>
        <div class="banner">
            <div class="navbarmain">
                <div class="navbar">
                    <img src="admin/logo.svg" class="logo">
                    <ul>
                        <li> <a href="#"> Home </a> </li>
                        <li> <a href="#about"> About Us </a> </li>
                        <li> <a href="/hotel/auth/register"> Regist/Login </a> </li>
                        <li> <a href="#contacts"> Contacts </a> </li>
                        <li> <a href="#last">  </a> </li>
                    </ul>
                </div>
            </div>
            <div class="content">
                <h1 class="head1"> Your </h1>
                <h1 class="head2"> better </h1> 
                <h1 class="head3"> day </h1> 
                <h1 class="head4"> is </h1> 
                <h1 class="head5"> coming! </h1> <br>
                <p> Get an unforgettable moment here. 
                    <br> We'll make sure you're happier than ever. 
                    <br> We promise! </p> 
                <a href="/hotel/auth/register">
                    <button class="button"> <span></span> Book yours now! </button>
                </a>
            </div>        
        </div>
        <div id="about">
        <div class="content2">
            <h1>About Us</h1>
            <!-- Floating image on the right -->
            <img src="room.jpg" alt="About Us" class="about-image">
            <div class="about-description">
                <p class="twt">
                    At MORG Homestay, we redefine your travel experience by providing more than just accommodation.
                    We offer a cozy retreat, a haven of tranquility, and a home away from home.
                    Every corner of Morg Homestay tells a story, and your presence adds a new chapter.
                    Join us in creating memories that linger long after your stay.
                </p>
            </div>
        </div>
    </div>

            <!-- <div id="rsv">
                <h3> <br><br> Tambahkan Data Tamu </h3>
                    <form method = "post" action="input-aksi-guest.php">
                        <table>
                            <tr>
                                <td> ID Order </td>
                                <td> <input type="number" name="idorder"> </td>
                            </tr>
                            <tr>
                                <td> Waktu Pemesanan </td>
                                <td> <input type="datetime-local" name="ordertime"> </td>
                            </tr>
                            <tr>
                                <td> Nama Pemesan </td>
                                <td> <input type="text" name="namatamu"> </td>
                            </tr>
                            <tr>
                                <td> ID Kamar </td>
                                <td> <input type="number" name="idkamar"> </td>
                            </tr>
                            <tr>
                                <td> Harga Permalam </td>
                                <td> <input type="number" name="harga"> </td>
                            </tr>
                            <tr>
                                <td> Night(s) </td>
                                <td> <input type="number" name="nights"> </td>
                            </tr>
                            <tr>
                                <td> Check-in Date </td>
                                <td> <input type="datetime-local" name="checkin"> </td>
                            </tr>
                            <tr>
                                <td> Check-out Date </td>
                                <td> <input type="datetime-local" name="checkout"> </td>
                            </tr>
                            <tr>
                                <td> totalharga </td>
                                <td> <input type="number" name="totalharga" placeholder="auto-calculate when it's saved"> </td>
                            </tr>
                            <tr>
                                <td> Status </td>
                                <td> <input type="text" name="status" placeholder="tidak perlu diisi"> </td>
                            </tr>
                            <tr>
                                <td><input type="submit" value="Simpan"></td>
                            </tr>
                            </form>
                        </table> -->
            <div id="contacts">
                <section class="contact">
                    <div class="content3">
                        <h2> Contact Us </h2>
                        <p> Write down your inquiries, criticism, or suggestion for us.<br>Let us know what's on your mind! </p>
                    </div>
                    <div class="container";>
                        <div class="contactInfo">
                            <a href="https://maps.app.goo.gl/ztVWTcAnAapwA6A1A" target="_blank"><div class="box">
                                <div class="icon"> <i class="fa fa-map-marker" aria-hidden="true"> </i></div>
                                <div class="text">
                                    <h3 style="line-height: 1.7; font-family: Caveat; font-weight: bold; font-size: 20px;"> Address </h3>
                                    <p style="font-family: 'Prata', serif; font-weight: bolder;"> 586 Greeke Street, <br> Newcastle, NSW,<br>22451</p>
                                </div>
                            </div> </a>
                            <a href="tel:+6285756676768"><div class="box">
                                <div class="icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                                <div class="text">
                                   <h3 style="line-height: 1.7; font-family: Caveat; font-weight: bold; font-size: 20px;"> Phone </h3>
                                    <p style="font-family: 'Prata', serif; font-weight: bolder;"> +62 857 5667 6768 </p>
                                </div>
                            </div></a>
                            <a href="mailto:morghomestay@mrgn.my.id"> <div class="box">
                                <div class="icon"> <i class="fa fa-envelope" aria-hidden="true"> </i></div>
                                <div class="text">
                                   <h3 style="line-height: 1.7; font-family: Caveat; font-weight: bold; font-size: 20px;"> E-mail </h3>
                                   <p style="font-family: 'Prata', serif; font-weight: bolder;"> morghomestay@mrgn.my.id </p>
                                </div>
                            </div> </a>
                        </div>
                        <div class="contactForm">
                            <form method="post" action="input-aksi-msg.php">
                                <h2> Send us message </h2>
                                <div class="inputBox">
                                    <span> Full name </span>
                                    <input type="text" name="fname" required="required">
                                </div>
                                <div class="inputBox">
                                    <span> E-mail </span>
                                    <input type="text" name="email" required="required">
                                </div>
                                <div class="inputBox"> 
                                    <span> Type your message.. </span>
                                    <input type="text" name="msg" required="required">
                                </div>
                                <div class="inputBox">
                                    <input type="submit" name="" value="Send">
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
            <footer>
                <p>Made with confusion <br> by
                <a href="https://instagram.com/nrfntr" target="_blank">Morgan</a></p>
            </footer>
    </body>
</html>