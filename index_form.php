<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Demo Contact Form'; 
    $to = 'tb@start-point.de'; 
    $subject = 'Message from Contact ';

    $body ="From: $name\n E-Mail: $email\n Message:\n $message";
    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Please enter your message';
    }
    //Check if simple anti-bot test is correct
    if ($human !== 5) {
        $errHuman = 'Your anti-spam is incorrect';
    }
    // If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="author" content="START-POINT">
      <meta name="description" content="Wir bieten Seminare und Workshops zu Arbeitsmethoden in Software-Entwicklung & -Design. Der Fokus liegt hierbei auf partizipativen, iterativen Methoden.">
      <meta name="keywords" content="Agile Softwareentwicklung, UX, UI, Scrum, Open Innovation, Visual Thinking, Design Thinking, Prototyping, Beratung, Seminare, Workshops">
    <title>START.</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-theme-start.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body data-spy="scroll" data-target="#navbar">
      <header class="navbar navbar-inverse navbar-fixed-top" id="navbar" role="banner">
          <div class="container">
              <div class="navbar-header">
                  <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="http://www.start-point.de">START<b>&#46;</b></a>
              </div>
              <nav class="collapse navbar-inverse navbar-collapse bs-navbar-collapse" role="navigation">
                  <ul class="nav navbar-nav">
                      <li class="dropdown">
                          <a href="http://lab.start-point.de" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LAB <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="http://lab.start-point.de#W01">Vision</a></li>
                              <li><a href="http://lab.start-point.de#W02">Leistungen</a></li>
                              <li><a href="http://lab.start-point.de#W03">Angebote</a></li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="http://dev.start-point.de" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DEV <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="http://dev.start-point.de#W01" class="active">Vision</a></li>
                              <li><a href="http://dev.start-point.de#W02">Leistungen</a></li>
                              <li><a href="http://dev.start-point.de#W03">Projekte</a></li>
                          </ul>
                      </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                      <li>
                          <a href="#" data-toggle="modal" data-target="#CONTACT">Kontakt</a>
                      </li>
                      <li>
                          <a href="#" data-toggle="modal" data-target="#IMPRESSUM">Impressum</a>
                      </li>    
                  </ul>
              </nav>
          </div>
      </header>
        <section class="teaser page" id="W01">
            <article class="container">
                <h1 class="hidden" hidden>START-POINT</h1>
                <figure>
                    <img src="svg/icon_idear_product.svg">
                </figure>
                <h1>Do the right things right</h1>
                <p>Heißt für uns - Sie zu unterstützen, nur die nachweislich besten Ideen mit innovativen Methoden effizient, elegant und nachhaltig zu realisieren.
                </p>
            </article>
        </section>
      <section class="page" id="W02">
              <article class="container marketing">
                  <h2>Was uns auszeichnet</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <img src="svg/icon_lab.svg">
              <h3>START.lab</h3>
                <p>In unseren Seminaren und Workshops arbeiten wir nach dem <b>C.L.I.P.</b> Prinzip: Kontextabhängiges Lernen in Iterationen duch Partizipation aller Beteiligten.</p>
                    <p><a class="btn btn-primary btn-lg" href="http://lab.start-point.de" title="START.lab" role="button">Weiter zu START.LAB</a></p>
            </div><!-- /.col-lg-4 -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              <img src="svg/icon_dev.svg">
              <h3>START.dev</h3>
                <p>Wir nutzen agile Vorgehensweisen und Kreativitätstechniken, um Problemen frühzeitig zu begegnen, stetiges Lernen zu unterstützen und schneller hochwertige Produkte zu entwickeln.</p>
                <p><a class="btn btn-primary btn-lg" href="http://dev.start-point.de" title="START.dev" role="button">Weiter zu START.dev</a></p>
            </div><!-- /.col-lg-4 -->
          </div>
            <hr>
            <p>Um die richtigen Ideen zu finden oder zu justieren nutzen wir<br> innovative Ansätze und Methoden.</p>
                  <ul class="list-group">
                      <li class="hashtag" title="Verständnis durch Visualisierung">VisualThinking</li>
                      <li class="hashtag" title="Nutzerzentrierte Ideen">DesignThinking</li>
                      <li class="hashtag" title="Schnelle Rückmeldungen">Prototyping</li>
                  </ul>
        </article>
      </section>
    <footer class="page" id="W04">
        <article class="container">
            <h2 class="hidden">KONTAKT</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="media">
                        <div class="media-left">
                            <a href="http://lab.start-point.de">
                                <span class="icon logo" aria-hidden="true"></span>
                            </a>
                        </div>
                        <div class="media-body vcard">
                            <h4 class="media-heading org">START.lab</span>
                            <p class="adr">
                                <span class="street-address">Neue&nbsp;Grünstr.&nbsp;25</span>,
                                <span class="postal-code">10179</span> <span class="locality">Berlin</span>
                            </p>
                            <p>
                                <a href="http://lab.start-point.de">lab.start-point.de</a><br>
                                <a href="mailto:lab@start-point.de" class="email">lab@start-point.de</a><br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="media">
                        <div class="media-left">
                            <a href="http://dev.start-point.de">
                                <span class="icon logo" aria-hidden="true"></span>
                            </a>
                        </div>
                        <div class="media-body vcard">
                            <h4 class="media-heading org">START.dev</span>
                            <p class="adr">
                                <span class="street-address">Köpenicker&nbsp;Straße&nbsp;154&nbsp;A</span>,
                                <span class="postal-code">10997</span> <span class="locality">Berlin</span>
                            </p>
                            <p>
                                <a href="http://dev.start-point.de">dev.start-point.de</a><br>
                                <a href="mailto:dev@start-point.de" class="email">dev@start-point.de</a><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a id="BOTTOMUP" href="#W01">&#8963;</a>
        </article>
    </footer>
        <div class="modal fade" id="CONTACT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form class="form-horizontal" role="form" method="post" action="index.php">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Kontakt</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                    <?php echo "<p class='text-danger'>$errName</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message" class="col-sm-2 control-label">Nachricht</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                    <?php echo "<p class='text-danger'>$errMessage</p>";?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                                    <?php echo "<p class='text-danger'>$errHuman</p>";?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <input id="submit" name="submit" type="submit" value="Nachricht senden" class="btn btn-primary">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <?php echo $result; ?>	
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
        <div class="modal fade" id="IMPRESSUM" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Impressum</h4>
                    </div>
                    <div class="modal-body">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseZero" aria-expanded="true" aria-controls="collapseOne">
                                            Inhaber der Seite
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseZero" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>
                                            Herr Dipl. Kommunikationsdesigner Thomas Bielich<br>
                                            Köpenicker Straße 154 A, Aufgang D/1.OG<br>
                                            10997 Berlin
                                        </p>
                                        <p>
                                            +49 30 26030852<br>
                                            info(at)start-point.de<br>
                                            www.start-point.de
                                        </p>
                                        <p>
                                            Ust-IdNr. DE272722517
                                        </p>
                                    </div>
                                </div>
                            </div><!--.panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Haftungsausschluß
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>Auf dieser Webseite sind Verlinkungen zu anderen Webseiten enthalten, die von Dritten gepflegt werden, und deren Inhalte uns nicht bekannt sind.
                                        </p>
                                        <p>
                                            Wir vermitteln lediglich den Zugang zu diesen Internet-Seiten
                                            und übernehmen keinerlei Haftung für deren Inhalte.
                                        </p>
                                    </div>
                                </div>
                            </div><!--.panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Urheberrecht
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>
                                            Alle Abbildungen, grafische Elemente sowie die Gestaltung dieser Webseite sind urheberrechtlich geschützt.
                                        </p>
                                        <p>
                                            Die vollständige oder auszugsweise Vervielfältigung oder Verwendung dieser Seiten oder ihres Inhalts bedarf der ausdrücklichen Zustimmung seitens des urheberrechtlichen Eigentümers.
                                        </p>
                                    </div>
                                </div>
                            </div><!--.panel-->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Google Analytics
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. („Google“). Google Analytics verwendet sog. „Cookies“, Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website (einschließlich Ihrer IP-Adresse) wird an einen Server von Google in den USA übertragen und dort gespeichert. Google wird diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten für die Websitebetreiber zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen zu erbringen. Auch wird Google diese Informationen gegebenenfalls an Dritte übertragen, sofern dies gesetzlich vorgeschrieben oder soweit Dritte diese Daten im Auftrag von Google verarbeiten. Google wird in keinem Fall Ihre IP-Adresse mit anderen Daten von Google in Verbindung bringen. Sie können die Installation der Cookies durch eine entsprechende Einstellung Ihrer Browser Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich nutzen können. Durch die Nutzung dieser Website erklären Sie sich mit der Bearbeitung der über Sie erhobenen Daten durch Google in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden.
                                    </div>
                                </div>
                            </div><!--.panel-->
                        </div><!--.panel-group-->
                    </div>
                </div>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/start.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-66665558-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
