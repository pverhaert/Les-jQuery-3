<!doctype html>
<html lang="nl"><!-- InstanceBegin template="/Templates/jQuery.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- InstanceBeginEditable name="doctitle" -->
<title>jQuery PHP cURL</title>
<!-- InstanceEndEditable -->
    <link href="../../css/style.css" rel="stylesheet">
    <!-- InstanceBeginEditable name="head" -->
<style>
section div {
	padding: 10px;
	width: 600px;
	border: solid 1px black;
}
.groen {
	background-color: lightGreen;
}
.rood {
	background-color: #F9C;
}
</style>
<script>
$(function() {
	// script hier
});
</script>
<!-- InstanceEndEditable -->
</head>
<body>
<div class="background-dark">
    <header class="container">
        <nav id="mainNav">
            <ul>
                <li><a href="../../../index.html"><i class="fa fa-home"></i> Homepage</a></li>
                <li><a href="../../../opdrachten/index.html"><i class="fa fa-th-list"></i> Opdrachten</a></li>
                <li><a href="https://oscarotero.com/jquery/"><i class="fa fa-eye"></i> Cheat sheet</a></li>
            </ul>
            <ul>
                <li><a href="#!"></a></li>
            </ul>
        </nav>
    </header>
</div>
<main class="container"> <!-- InstanceBeginEditable name="data" -->
    <h1>PHP cURL</h1>
    <section>
      <?php if(in_array  ('curl', get_loaded_extensions())) { ?>
      <div class="groen">
        <p>De PHP-functie cURL is actief.</p>
      </div>
      <?php } else{ ?>
      <div class="rood">
        <P class='error'>De PHP-functie cURL is niet actief !!!</p>
        <p>Gelieve deze extensie eerst te <a href='http://forum.wampserver.com/read.php?2,43026,43027'>activeren</a>.</p>
      </div>
      <?php } ?>
    </section>

    <!-- InstanceEndEditable -->
</main>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/les.js"></script>
<!-- InstanceBeginEditable name="script" -->
<script>
$(function() {
	// script hier
});
</script>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>