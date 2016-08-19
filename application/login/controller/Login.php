<?php
/**
 * Created by PhpStorm.
 * User: wqguo
 * Date: 2016-8-12
 * Time: 13:53:04
 * To change this template use File | Settings | File Templates.
 */
 namespace app\login\controller;
 use think\Controller;
 use app\model\Admin;

class Login extends Controller{

    public function index(){
          //显示登录表单
        return $this->fetch();
    }

    //处理用户提交的登录数据
    public function login(){
        //直接调用M层方法，进行登录
        if(Admin::login(input('post.name'),input('post.password'))){
           return $this->success('登录成功',url('admin/index/Index')); //跳到后台页
        }else{
           return $this->error('密码错误',url('index'));
        }
    }
    //注销
    public function logOut(){
        if(Admin::logOut()){
            return $this->success('退出成功',url('index'));
        }else{
            return $this->error('退出失败');
        }
    }
}