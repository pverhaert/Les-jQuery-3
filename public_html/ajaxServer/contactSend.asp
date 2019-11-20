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
                <li><a href="../../index.html"><i class="fas fa-home"></i> Homepage</a></li>
                <li><a href="../../opdrachten/index.html"><i class="fas fa-th-list"></i> Opdrachten</a></li>
                <li><a href="https://oscarotero.com/jquery/"><i class="fas fa-eye"></i> Cheat sheet</a></li>
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
      <p><b>Bedankt, we hebben uw gegevens goed ontvangen.</b><br>
        We contacteren u zo spoedig mogelijk.</p>
      <h2>Uw gegevens:</h2>
      <p><b><span class="error">Naam</span></b>: <%= Request.Form("naam") %></p>
      <p><b><span class="error">E-mail</span></b>: <a href="mailto:<%= Request.Form("email") %>"><%=Request.Form("email") %></a></p>
      <p><b><span class="error">Onderwerp</span></b>: <%= Request.Form("onderwerp") %></p>
      <p><b><span class="error">Bericht</span></b>: <br>
        <%= Request.Form("bericht") %></p>
    </section>
    <!-- InstanceEndEditable -->
</main>
<script src="../js/jquery.min.js"></script>
<script src="../js/les.js"></script>
<!-- InstanceBeginEditable name="script" -->
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>