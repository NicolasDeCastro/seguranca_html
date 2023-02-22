<?php

$nome='nicolas"<><>';
/*maneiras de porteger uma entrada de dados
addslashes
htmlentities*/
?>



<imput type ="test" name=" <?php echo htmlentities($nome); ?>"/>

