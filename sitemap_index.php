<?php
/*Sitemap Generator By Tanish Raj*/

$path = "./";
$root = "https://yourdomain.com";

$skip_dir = array(
	".well-known", "cgi-bin"
);

$skip_files = array(
	"sitemap_index.php", "test_codes.php"
);

$skip_file_extensions = array(
	"html", "xml", "zip", "txt"
);

/*Try not to make any change in below code*/
header("Content-Type: application/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;

$root_content = array_diff(scandir($path, 0), array('.', '..'));

foreach($root_content as $f){
	if(is_file($path . $f)){
		if(!in_array($f, $skip_files)){
			$ext = pathinfo($path . $f, PATHINFO_EXTENSION);
			if(!in_array($ext, $skip_file_extensions)){
				echo '<url>' . PHP_EOL;
				echo '<loc>'. $root.'/'. $f .'</loc>' . PHP_EOL;
				echo '<changefreq>daily</changefreq>' . PHP_EOL;
				echo '</url>' . PHP_EOL;
			}
		}
	}else{
		if(!in_array($f, $skip_dir)){
			echo '<url>' . PHP_EOL;
			echo '<loc>'. $root.'/'. $f .'/</loc>' . PHP_EOL;
			echo '<changefreq>daily</changefreq>' . PHP_EOL;
			echo '</url>' . PHP_EOL;
		}
	}
}


echo '</urlset>' . PHP_EOL;
?>
