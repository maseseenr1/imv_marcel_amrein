<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bachelorthesis</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/overlay.css">

</head>
    <body>
            <!-- overlay -->
        <?php include('overlay.php'); ?> 
            <!-- header -->
        <?php include('phpTemplates/header.php'); ?>
            <!-- content -->
        <div class="content">
            <!-- Button -->
        <?php include('phpTemplates/button.php'); ?>
            <div class="about_parent">
                <div class="about_img">
                    <img src="img/portrait.jpg" alt="Portrait Marcel Amrein" />
                </div>
                <div class="about_info">
                    <div class="about_info_header">
                        <h2>Marcel Amrein</h2>
                    </div>
                    <div class="about_info_text">
                        Ich habe meine Karriere in der IT gestartet. Als gelernter Softwareentwickler bringe ich breites Grundwissen in den Technologien von KI und Blockchain.
                        Zusammen mit dem EFZ habe ich den Abschluss der Technischen Berufsmatura abgeschlossen. Nach einem halben Jahr als Backenddeveloper besuchte ich die Rekrutenschule.
                        Der Wechsel in die Multimedia-Produktion hat sich schon länger abgezeichnet. Obwohl ich noch während des Studiums als Softwaredeveloper gearbeitet habe, war es klar,
                        dass ich in die Medienbranche wechseln möchte. Im Januar 2024 werde ich bein Ringier Advertising starten.
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="about_parent" id="about_parent_b">
                <div class="about_info">
                    <div class="about_info_header">
                        <h2>
                            Bachelorthesis
                        </h2>
                    </div>
                    <div class="about_info_text">
                            Finde ich zu breit gestellt. Mein Vorschlag: Formuliere mal in die Richtung. Damit du die Fragestellung konkreter bearbeiten kannst:
                            Sind Medienhäuser in Zeiten von KI für GenZ (und GenAlpha) als Orientierung und Lebenshilfe noch relevant? Wie (in welchen Bereichen, bei welchen Aufgaben)
                            kann KI eine Neuausrichtung unterstützen? (Welche Best Practices gibt es bereits?)
                    </div>
                </div>
                <div class="about_img">
                    <img src="img/bachelor.jpg" alt="Bachelorthesis Illustration" />
                </div>
            </div>

            <div class="content_header">
                <h2>Unternehmen, welche untersucht werden:</h2>
            </div>

            <div class="three_rows">
                <div class="three_rows_child">
                    <a href="companies/ringier.php?route=../img/ai_logo.png">Ringier</a>
                </div>
                <div class="three_rows_child">
                    <a href="companies/tx.php">TX Group</a>
                </div>
                <div class="three_rows_child">
                    <a href="companies/srg.php">SRG SSR</a>
                </div>
                <div class="three_rows_child">
                    <a href="companies/watson.php">Watson</a>
                </div>
                <div class="three_rows_child">
                    <a href="companies/az.php">AZ Medien</a>
                </div>
                <div class="three_rows_child">
                    <a href="companies/orell.php">Orell Füssli</a>
                </div>
                <div class="three_rows_child">
                    <a href="companies/nzz.php">NZZ</a>
                </div>
                <div class="three_rows_child">
                    <a href="companies/highlight.php">Highlight Communications</a>
                </div>

            </div>
            <div class="content_header">
                <h2>10 Anwendemöglichkeiten für KI in Medienunternehmen (Quelle: ChatGPT):</h2>
            </div>
            <!-- use cases -->
        <div class="usecase_list">
            <?php include('phpTemplates/aiUsecases.php'); ?>
        </div>
        </div>
            <!-- footer -->
        <?php include('phpTemplates/footer.php'); ?>
            <!-- scripts -->
        <script src="js/header.js"></script>
        <script src="js/index.js"></script>
        <script src="js/overlay.js"></script>
    </body>
</html>