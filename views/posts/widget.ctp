function planetuga() {

document.write("

<div id='planetugawidget'>
	<div class='titulo'><a href='http://www.planetuga.com'>Planetuga</a></div>

	<ul class='planetuga'>

		<?php foreach ($posts as $post): ?>

			<li><a href='http://planetuga.com/posts/view/<? echo $post['Post']['slug'] ?>'><? echo $post['Post']['title'] ?></a></li>

		<?php endforeach; ?>
	</ul>

</div>
");
}

planetuga();