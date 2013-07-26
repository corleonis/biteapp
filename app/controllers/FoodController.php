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

class FoodController extends BaseController {

    public function lunchForm()
    {
        return View::make('lunchForm');
    }

    public function listLunches()
    {
        return View::make('listLunches');
    }
}
