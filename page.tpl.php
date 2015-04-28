<header>
	<h1>Mettre une photo</h1>
</header>
<nav class="main-nav">
	<?php if ($logo): ?>
		<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
			<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
		</a>
	<?php endif; ?>
	    <?php if ($main_menu): ?>
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        ));?>
    <?php endif; ?>
</nav>
<div class="main">
	<div class="container marketing">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Les buts du CEEF" width="140" height="140">
				<h1>Les missions du CEEF</h1>
				<p>En matière d’Education à l’Environnement pour un Développement Durable (EEDD), le CEEF constitue :</p>
				<ul>
					<li>une plate-forme d’échanges et de réflexions</li>
					<li>une force d’expertise et de propositions</li>
					<li>un interlocuteur régional représentatif</li>
				</ul>
				<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
			</div>
		</div>
	</div>
</div>
<?php print render($footer_first) ?>
<?php print render($footer_second) ?>