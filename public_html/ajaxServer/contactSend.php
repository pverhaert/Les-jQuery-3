<!doctype html>
<html lang="nl"><!-- InstanceBegin template="/Templates/jQuery.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>jQuery: contact verzenden</title>
    <!-- InstanceEndEditable -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
</head>
<body>
<div class="background-dark">
    <header class="container">
        <nav id="mainNav">
            <ul>
                <li><a href="../../index.html"><i class="fa fa-home"></i> Homepage</a></li>
                <li><a href="../../opdrachten/index.html"><i class="fa fa-th-list"></i> Opdrachten</a></li>
                <li><a href="https://oscarotero.com/jquery/"><i class="fa fa-eye"></i> Cheat sheet</a></li>
            </ul>
            <ul>
                <li><a href="#!"></a></li>
            </ul>
        </nav>
    </header>
</div>
<main class="container"> <!-- InstanceBeginEditable name="data" -->
    <h1>Contactformulier verzonden.</h1>
    <p><a href="contactForm.html">Vorige pagina</a></p>
    <section id="message">
        <p>
            <b>Bedankt, we hebben uw gegevens goed ontvangen.</b><br>
            We contacteren u zo spoedig mogelijk.
        </p>
        <h2>Uw gegevens:</h2>
        <p>
            <b>Naam</b>: <?php echo $_POST['naam'] ?><br>
            <b>E-mail</b>: <a href="mailto:<?php echo $_POST['email'] ?>"><?php echo $_POST['email'] ?></a><br>
            <b>Onderwerp</b>: <?php echo $_POST['onderwerp'] ?>

        </p>
        <p>
            <b>Bericht</b>:<br>
            <?php echo $_POST['bericht'] ?>
        </p>
    </section>
    <!-- InstanceEndEditable -->
</main>
<script src="../js/jquery.min.js"></script>
<script src="../js/les.js"></script>
<!-- InstanceBeginEditable name="script" -->
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>