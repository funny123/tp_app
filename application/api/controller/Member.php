<?php
/**
 * Created by PhpStorm.
 * User: maf
 * Date: 2016/8/11
 * Time: 13:59
 */
namespace app\api\controller;
use think\Config;
use think\View;
use think\Url;
use think\Db;
use think\Input;
use think\File;
use think\Request;
use think\Controller;

class Member extends Controller
{
    //会员
    public function member()
    {
        echo 'member';
    }

    //会员登录
    public function login11()
    {
        if (file_get_contents("php://input")) {
            $a = json_decode(file_get_contents("php://input"), true);
//
        }
            if (!$a['username']||!$a['password']) {
                $res['result']=0;
                $res['data']="param error";
            }else{
                $data['name']=input('post.username');
                $data['password']=input('post.password');
                $mess=db('member')->where($data)->find();
                if ($mess) {
                    $res['result']=1;
                    $res['data']="login success";
                    $_SESSION=$mess;
                }else{
                    $res['result']=0;
                    $res['data']="account error password error";
                }
            }

        echo json_encode($res);
    }

         //注册
    public function reg()
    {
        $data['name']     = Request::instance()->post('username');
        $data['password'] = Request::instance()->post('password1');
        $data['appid']    = substr(md5($data['name'].time()),16);
        $data['secret']   = md5($data['name'].$data['password'].time());
        $user=Db::table('member')->insert($data);
        if($user)
        {
                $res['code']=1;
                $res['data']="注册成功";
        }
        else
        {
            $res['code']=0;
            $res['data']="注册失败";
        }
        echo json_encode($res);
    }

    public function login()
    {
        $data['name'] = Request::instance()->post('username');
//        $data['password'] = Request::instance()->post('password');
        $row = Db::table('member')->where($data)->find();
            if ($row) {
                if ($row['password'] == Request::instance()->post('password')) {
                    $str     = Db::table('member')->where('name',$data['name'])->find();
                    $insert['appsecret']  = md5($str['secret'].$str['appid'].time());
                    $insert['uid']        = $str['id'];
                    $insert['time']       = time();
                    $insert['last_uuid'] = Request::instance()->post('uuid');
                    if(Db::table('appsecret')->insert($insert)){
                        $res['code'] = 200;
                        $res['message'] = '登录成功';
                        $res['token']   = $insert['appsecret'];
                    }
                } else {
                    $res['code'] = 402;
                    $res['message'] = '密码错误';
                }
            } else {
                $res['code'] = 403;
                $res['message'] = '账号错误';
            }


        echo json_encode($res);
    }

    //秘钥
    public function token()
    {
          $uuid   = Request::instance()->post('uuid');
          $token  = Request::instance()->post('token');
        $data['last_uuid'] = $uuid;
        $row = Db::table('appsecret')->where($data)->order('id desc')->find();
        if((time()-$row['time'])<=7200){
            if($row['appsecret']==$token)
            {
                $res['code'] = 404;
                $res['message'] = '验证通过';
            }else
            {
                $res['code'] = 405;
                $res['message'] = '验证失败';
            }
        }else{
            if($row['appsecret']==$token)
            {
                $str     = Db::table('member')->where('id',$row['uid'])->find();
                $insert['appsecret']  = md5($str['secret'].$str['appid'].time());
                $insert['time']  = time();
                if(Db::table('appsecret')->insert($insert)){
                    $res['code'] = 404;
                    $res['message'] = '验证通过';
                }
            }else
            {
                $res['code'] = 406;
                $res['message'] = '非法调用';
//                $res['token'] =$row['appsecret'];
            }
        }

        echo json_encode($res);

    }



}