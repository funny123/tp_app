<?php
/**
 * Created by PhpStorm.
 * User: wqguo
 * Date: 2016-8-11
 * Time: 16:12:28
 * To change this template use File | Settings | File Templates.
 */
namespace app\common\validate;
use think\Validate;

class Admin extends Validate{
      protected $rule = array(
        'name'  => 'require|length:2,25',
        'password'  => 'require|length:2,25',
      );
}