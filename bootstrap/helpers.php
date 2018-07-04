<?php
/**
 * Created by PhpStorm.
 * User: ZNZG
 * Date: 2018/6/27
 * Time: 21:19
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}