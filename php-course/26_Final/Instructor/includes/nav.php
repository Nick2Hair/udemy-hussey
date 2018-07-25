<link rel="stylesheet" href="../../assets/styles.css" />
<ul>
	<?php
		foreach ($navItems as $item) {
			echo "<li><a href=\"$item[slug]\">$item[title]</a></li>";
		}
	?>
</ul>