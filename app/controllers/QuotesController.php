<?php
/**
 * User: alex
 * Date: 25/07/13
 * Time: 17:53
 *
 * @package 
 * @category 
 * @copyright MOO Print Ltd. 2006-2013
 */
 
class QuotesController extends Controller {

    public function getIndex()
    {
        return Response::json(Quotes::getQuote());
    }
}
