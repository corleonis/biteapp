<?php
$url = 'http://www.brainyquote.com/quotes/topics/topic_food'.rand(1,10).'.html';
$pageContent = file_get_contents($url);

$quoteItems = array();
preg_match_all('/<a\s*title="view\squote"[^>]*>([^>]*)<\/a>/ism', $pageContent, $quoteItems);
$quoteItems = $quoteItems[1];

$quoteAuthors = array();
preg_match_all('/<a\s*title="view\sauthor"[^>]*>([^>]*)<\/a>/ism', $pageContent, $quoteAuthors);
$quoteAuthors = $quoteAuthors[1];

$key = rand(0, count($quoteItems) - 1);

echo json_encode(array('quote' => $quoteItems[$key], 'author' => $quoteAuthors[$key]));