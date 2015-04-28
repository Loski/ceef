<?php
function ceef_links__system_main_menu($variables) {
$link = $variables['links'];
$html = "";
  foreach ($variables['links'] as $link) {
      $html .= '<a href="'.url( $link['href'], array('alias' => false )).'">' .    $link['title']. '</a>';
  }
  return $html;
}
?>
