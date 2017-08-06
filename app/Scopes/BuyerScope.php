<?php
/**
 * Created by PhpStorm.
 * User: GlaDOS
 * Date: 7/30/2017
 * Time: 11:17 AM
 */

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class BuyerScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->has('transactions');
    }
}