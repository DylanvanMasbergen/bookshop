<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<p>Het boek <?php echo $books_item['title'];?> is geschreven door <?php echo $books_item['author'];?>. Het boek is uitgebracht in het jaar <?php echo $books_item['year'];?> en de genre van het boek is <?php echo $books_item['genre'];?>.

</body>
</html>

<?php
echo '<h2>'.$books_item['title'].'</h2>';
echo $books_item['description'];
