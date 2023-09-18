
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv='refresh' content='7; url=https://darkquark.eu'>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="discrption" content="parallax one page" />
    <meta name="keyword"
        content="agency, business, corporate, creative, freelancer, interior, joomla template, K2 Blog, minimal, modern, multipurpose, personal, portfolio, responsive, simple" />

    <!--  Title -->
    <title>DarkQuark - twók klucz do sukcesu</title>

    <!-- Font Google -->
   
    <link rel="stylesheet" type="text/css" href="../MyFontsWebfontsKit.css">

    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon" />

    <!-- custom styles (optional) -->
    <link href="../assets/plugins.css" rel="stylesheet" />
    <link href="../assets/stylesheet.css" rel="stylesheet" />


</head>

<body class="hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">

    <div class="preloader">
        <div class="preloader-after"></div>
        <div class="preloader-before"></div>
        <div class="preloader-block">
            <div class="title">
                <img src="../assets/img/dark.png" class="loader_d">
            </div>
            <div class="percent">0</div>
            <div class="loading">
                <img src="../assets/img/quark.png" class="loader_q">
            </div>

        </div>
        <div class="preloader-bar">
            <div class="preloader-progress"></div>
        </div>
    </div>

    <!-- Nav Bar -->
    <div class="dsn-nav-bar">
        <div class="site-header">
            <div class="extend-container">
                <div class="inner-header">
                    <div class="main-logo">
                        <a href="index.html">
<!--                             <img class="dark-logo" src="../assets/img/logo-dark.png" alt="" />
 -->                            <img class="light-logo" src="../assets/img/dq_bw.png" alt="" />
                        </a>
                    </div>
                </div>
                <nav class=" accent-menu main-navigation">
                    <ul class="extend-container">
                        <li><a href="amazon-dq.html">amazon i dq</a></li>
                        <li><a href="about-us.html">o nas</a></li>
                        <li><a href="partners.html">partnerzy</a></li>
                        <li><a href="contact.html">kontakt</a></li>
                        <li><a href="rodo.html">RODO</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="header-top header-top-hamburger">
            <div class="header-container">
                <div class="logo main-logo">
                    <a href="index.html">
<!--                         <img class="dark-logo" src="../assets/img/logo-dark.png" alt="" />
 -->                        <img class="light-logo" src="../assets/img/dq_bw.png" alt="" />
                    </a>
                </div>

                <div class="menu-icon" data-dsn="parallax" data-dsn-move="5">
                    <div class="icon-m">
                        <i class="menu-icon-close fas fa-times"></i>
                        <span class="menu-icon__line menu-icon__line-left"></span>
                        <span class="menu-icon__line"></span>
                        <span class="menu-icon__line menu-icon__line-right"></span>
                    </div>

                    <div class="text-menu">
                        <div class="text-button">Menu</div>
                        <div class="text-open">otwórz</div>
                        <div class="text-close">zamknij</div>
                    </div>
                </div>

                <div class="nav">
                    <div class="inner">
                        <div class="nav__content">

                        </div>
                    </div>
                </div>
                <div class="nav-content">
                    <div class="inner-content">
                        <address class="v-middle">
                            <span><img class="light-logo" src="../assets/img/logo.png" alt=""></span>
                        </address>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Nav Bar -->

    <main class="main-root">
    <div id="dsn-scrollbar">
      <header>
        <div class="container header-hero">
          <div class="row">
            <div class="col-lg-6">
              <div class="contenet-hero">
                <h5>Get in touch</h5>
                <h1>Contact us</h1>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="wrapper">
        <div class="root-contact">
         

<div class="container" ] 
                        font-size: xx-large;
                        font-weight: 400;
                        padding-bottom: 30vh;
"><?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'server579372.nazwa.pl';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;


    $mail->Username = 'info@server579372.nazwa.pl'; // YOUR gmail email
    $mail->Password = 'BE6221ai'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('info@server579372.nazwa.pl', 'Sender Name');
    $mail->addAddress('vovalockerz23@gmail.com', 'Receiver Name');
    $mail->addReplyTo($_POST['mail'], $_POST['subject']); // to set the reply to


    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = $_POST['subject'];
        $mail->Body    = $_POST['text'] ;
        $mail->Body    .= "<br> Message sent from DarkQuark website. The senders e-mail - <br>" ;
        $mail->Body    .= $_POST['mail'] ;
        $mail->Body    .= "<br> The senders name -" ;
        $mail->Body    .= $_POST['subject'] ;


    $mail->send();
    echo "Email message sent.";
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}
?>
</div></div></div>
 <footer class="footer">
                <div class="container">
                    <div class="footer-links p-relative">
                        <div class="row">
                            <div class="col-md-3 dsn-col-footer">
                                <div class="footer-block">
                                    <div class="footer-logo">
                                        <a href=""><img src="../assets/img/dq_fotter.png" ]position:absolute;"></a>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-3 dsn-col-footer">
                                <div class="footer-block col-menu">
                                    <h4 class="footer-title">zobacz także</h4>
                                    <nav>
                                        <ul>
                                           <li><a href="amazon-dq.html">amazon i dq</a></li>
                        <li><a href="about-us.html">o nas</a></li>
                        <li><a href="partners.html">partnerzy</a></li>
                        <li><a href="contact.html">kontakt</a></li>
                        <li><a href="rodo.html">RODO</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-md-3 dsn-col-footer">
                                <div class="footer-block col-contact">
                                    <h4 class="footer-title">kontakt</h4>
                                  
                                    <p class="over-hidden"><strong>tel</strong> <span>:</span><a class="link-hover"
                                            data-hover-text="darkquarksp@gmail.com" href="tel:+48 519 030 376">+48 519 030 376</a>
                                    </p>
                                    <p><strong>NIP</strong> <span>:</span>7792515780</p>
                                    <p><strong>REGON</strong> <span>:</span>386130752</p>
                                    <p><strong>KRS</strong> <span>:</span>0000843057</p>

                                    <p class="over-hidden"><strong>@</strong> <span>:</span><a class="link-hover"
                                            data-hover-text="darkquarksp@gmail.com" href="mailto:darkquarksp@gmail.com">darkquarksp@gmail.com</a>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-3 dsn-col-footer">
                                <div class="col-address">
                                    <h4 class="footer-title">Adres korespondencyjny:</h4>

                                    <p>Ul. Żmigrodzka 41/49 /213, <BR>60-171, Poznań, Polska</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="copyright">
                        <div class="text-center">
                            <p>© 2021 DarkQuark</p>
                            <div class="copright-text over-hidden">Designed by V<a class="link-hover"
                                    data-hover-text="DSN Grid" href="#" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
      </div>
    </div>
  </main>

    <!-- Wait Loader -->
    <div class="wait-loader">
        <div class="loader-inner">
            <div class="loader-circle">
                <div class="loader-layer"></div>
            </div>
        </div>
    </div>
    <!-- // Wait Loader -->


    <!-- cursor -->
    <div class="cursor">

        <div class="cursor-helper cursor-view">
            
        </div>

        <div class="cursor-helper cursor-close">
            <span>zamknij</span>
        </div>

        <div class="cursor-helper cursor-link"></div>
    </div>
    <!-- End cursor -->

    <!-- Optional JavaScript -->
    <script src="../assets/js/jquery-3.1.1.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/dsn-grid.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>

</html>