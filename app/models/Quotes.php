<?php

class Quotes
{
    const PAGE_URL_MASK = 'http://www.brainyquote.com/quotes/topics/topic_food%d.html';

    private static function getUrl() {
        return sprintf(static::PAGE_URL_MASK, rand(1,10));
    }

    private static function getPageContent($url) {
        return file_get_contents($url);
    }

    private static function parseQuoteAuthors($pageContent) {
        $quoteAuthors = array();
        preg_match_all('/<a\s*title="view\sauthor"[^>]*>([^>]*)<\/a>/ism', $pageContent, $quoteAuthors);
        return $quoteAuthors[1];
    }

    private static function parseQuotes($pageContent) {
        $quoteItems = array();
        preg_match_all('/<a\s*title="view\squote"[^>]*>([^>]*)<\/a>/ism', $pageContent, $quoteItems);
        return $quoteItems[1];
    }

    public static function getQuote() {
        $pageContent = static::getPageContent(static::getUrl());
        $quotes = static::parseQuotes($pageContent);
        $authors = static::parseQuoteAuthors($pageContent);

        $key = rand(0, count($quotes) - 1);

        return array('quote' => $quotes[$key], 'author' => $authors[$key]);
    }

}