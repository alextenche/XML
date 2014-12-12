<!DOCTYPE html>
<html>

	<head>
		<title>CNN RSS</title>
	</head>

	<body>

		<?php

		function getFeed($url){

			$x = simplexml_load_file($url);

			echo '<ul>';
			foreach($x->channel->item as $entry){
				echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title. '</a></li>';
			}
			echo '</ul>';
		}

		echo getFeed('http://rss.cnn.com/rss/edition.rss');
		//echo getFeed('http://www.hotnews.ro/rss');


		?>
		
	</body>

</html>
	