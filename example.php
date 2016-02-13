<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

/**
 *    PHP Web Article Extractor
 *    A PHP library to extract the primary article content of a web page.
 *
 * @author Luke Hines
 * @link https://github.com/zackslash/PHP-Web-Article-Extractor
 * @licence: PHP Web Article Extractor is made available under the MIT License.
 */

require_once 'vendor/autoload.php';

if (isset($_GET['article'])) {
	$extractionResult = WebArticleExtractor\Extract::extractFromURL($_GET['article']);

	if (!isset($extractionResult)) {
		return;
	}

	// Replace newlines with breaks for demonstration
	$articleTextForDisplay = str_replace("\r\n", '<br />', $extractionResult->text);

	echo "<b>Extracted Title:</b><br />{$extractionResult->title}<br /><br />
          <b>Extracted Article content:</b><br />{$articleTextForDisplay}<br /><br />
          <b>Image:</b><br /><img src='{$extractionResult->image}'><br /><br />
          <b>Detected Language:</b><br />{$extractionResult->language}<br /><br />
          <b>Source:</b><br />{$extractionResult->source}<br /><br />
          <b>Extracted Keywords:</b><br />";

	foreach ($extractionResult->keywords as $keyword) {
		echo $keyword . "<br/>";
	}

	//Uncomment this line for raw result
	//echo json_encode($extractionResult);
} else {
	echo "Specify a URL as 'article' parameter e.g.: example.php?article=http://techcrunch.com/2015/09/02/more-shots-of-frankenblackberry/";
}
?>
    