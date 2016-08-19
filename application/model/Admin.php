<?php
/**
 * Created by PhpStorm.
 * User: wqguo
 * Date: 2016-8-11
 * Time: 13:36:12
 * To change this template use File | Settings | File Templates.
 */
namespace app\model;    //声明自己的位置，我住在哪
use think\Model;        //引用这个类 ，使用think 房间下的 Model类

class Admin extends Model{  //如果模型层的类名和数据库中表名相同，则自动关联数据表
   /**
    * 用户登录
    * @param string $username 用户名
    * @param string $password 密码
    * @return bool 成功返回true,失败放回false
    **/
    static public function login($name,$password){
        //验证用户名是否存在
        $map =array('name'=>$name);
        $Manage =self::get($map);
        if($Manage !==false){
            //验证密码是否正确
            if($Manage->checkPassword($password)){
               //登录
                session('adminId',$Manage->getData('id'));
                return true;
            }
        }
        return false;
    }

   /**
    * 验证密码是否正确
    * @param string $password 密码
    * @return bool
    **/
    public function checkPassword($password){
        if($this->getData('password')===$password){
            return true;
        }
         return true;
    }
    /**
    * 注销
    *  @return bool
    *  @author wqguo
    **/
    static public function logOut(){
        //销毁session 中数据
        session('adminId',null);
        return true;
    }

    /**
     * 判断用户是否登录
     * @return boolean 已登录 true
     * @author wqguo
     **/
    static public function isLogin(){
          $teacherId =session('adminId');
         if(isset($teacherId)){
             return true;
         }else{
            return false;
         }
    }

}
