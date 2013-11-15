<!DOCTYPE html>
<html>
  <head>
    <title>Title</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
     <link rel="stylesheet" type="text/css" href="assets/remark.css" /> 
  </head>
  <body>
    <div id="source" style="display:none">
		<?php
		if ($_GET['doc']!='') {
			/* On récupère d'abord le paramètre "doc" */
			$doc = $_GET['doc'];
			
			/* On le nettoie pour supprimer les éventuels rigolos qui passeraient une valeur du genre ../../toto (pour atteindre un autre répertoire */
			$tmpDoc = explode('/',$doc);
			$doc = $tmpDoc[sizeof($tmpDoc)-1];
			
			/* On charge enfin le contenu */
			require_once($doc.'.md');
		}
		?>
    </div>
	<script src="assets/jquery-2.0.3.min.js"></script>
    <script src="assets/remark.min.js" type="text/javascript">
    </script>
    <script type="text/javascript">
	
		/* Contrairement à l'autre test en HTML, on n'a pas besoin ici de charger via .load() le contenu d'une page externe, il est directement inclus dans la page */
		var slideshow = remark.create();
	</script>
  </body>
</html>