<?php
/**
 * Created by PhpStorm.
 * User: GlaDOS
 * Date: 7/29/2017
 * Time: 10:59 PM
 */
namespace App\Traits;

trait AdminActions
{
    public function before($user, $ability)
    {
        if ($user->isAdmin()) {
            return true;
        }
    }
}