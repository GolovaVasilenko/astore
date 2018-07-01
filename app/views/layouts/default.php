<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?=$this->getMeta();?>
</head>
<body>
	<h1>Default</h1>
	<?=$content?>
<?php
    if(DEBUG){
        $logs = \R::getDatabaseAdapter()
            ->getDatabase()
            ->getLogger();

        debug( $logs->grep( 'SELECT' ) );
    }
?>
</body>
</html>