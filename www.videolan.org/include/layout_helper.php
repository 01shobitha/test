<?php
/* Motto statements */
function motto( $title, $array ) {
  echo '<div id="project_statement">'.
    '<h1 id="motto">'.$title.'</h1>'.
    '<table class="fixed_table"><tr>';
  foreach( $array as $ar ) {
    echo '<td class="highlight"><h2>'.$ar['title']."</h2>\n";
    echo $ar['text'];
    echo '</td>';
  }

  echo '</tr></table></div>';
}

?>
