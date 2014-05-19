<?php
$p = new Phar( './hello1.phar' );
$p->addFile( './hello1.php' );
$file_info = $p[ './hello1.php' ];
echo "\$file_info->getCompressedSize()==" . $file_info->getCompressedSize() . "\n";
echo "filesize( './hello1.php' )==" . filesize( './hello1.php' ) . "\n";
?>
