<?php
/**
 * Created by PhpStorm.
 * User: maf
 * Date: 2016/8/11
 * Time: 13:59
 */
namespace app\admin\controller;
use think\Config;
use think\View;
use think\Url;
use think\Db;
use think\Input;
use think\File;
use think\Request;
use think\Controller;
use app\model\Admin;
class Index extends Controller
{
    public function __construct(){
        //调用父类构造函数
        parent::__construct();
         //验证用户是否登陆
        if(!Admin::isLogin()){
           return $this->error('请先登录',url('login/Login/index'));
        }
    }
    public function index()
    {
        $view = new View();
        return $view->fetch();
    }

    //添加商品1111
    public function pro_add()
    {
        $row = Db::table('pro_cat')->select();
        $brand_row = Db::table('pro_brand')->select();
        $sup_row = Db::table('supplier')->select();
        $log_row = Db::table('logistic')->select();
        $view = new View();
        $view->assign('cat_list', $row);
        $view->assign('brand_list', $brand_row);
        $view->assign('sup_list', $sup_row);
        $view->assign('log_list',$log_row);
        return $view->fetch();
    }

    //添加商品处理
    public function pro_add_submit()
    {
        $post = $_POST;
        $post['publisher'] = 'publish';
        $post['publish_time'] = date("Y-m-d H:i:s", time());
        $post['publish_ip'] = $_SERVER["REMOTE_ADDR"];

////图片
//        $file = $_FILES['pic'];//得到传输的数据
////print_r($file);
////得到文件名称
//        $name = $file['name'];
//        $type = strtolower(substr($name, strrpos($name, '.') + 1)); //得到文件类型，并且都转化成小写
//        $allow_type = array('jpg', 'jpeg', 'gif', 'png'); //定义允许上传的类型
////判断文件类型是否被允许上传
//        if (!in_array($type, $allow_type)) {
//            //如果不被允许，则直接停止程序运行
//
//        }
//
////判断是否是通过HTTP POST上传的
//        if (!is_uploaded_file($file['tmp_name'])) {
//            //如果不是通过HTTP POST上传的
//
//        }
//        $root = dirname(__FILE__);
//        $upload_path = ROOT_PATH . "upload/"; //上传文件的存放路径
////开始移动文件到相应的文件夹
//
//        if (move_uploaded_file($file['tmp_name'], $upload_path . time() . $file['name'])) {
//            $post['pic'] = time() . $file['name'];
//        } else {
//
//        }
        $file = request()->file('pic');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public'.DS.'pic');  //默认方式 保存
        if($info){
          $post['pic'] = $info->getFilename();

        }else{
            echo $file->getError();
        }
        $post['pic_more'] = 'pic_more';
        $post['status'] = 1;
//        $post[detail] = !empty($post[detail]) ? $post[detail] : '暂无详情描述';
        if (empty($post['detail'])) {
            $post['detail'] = '暂无详情描述';
        }
        if (empty($post['parameter'])) {
            $post['parameter'] = '暂无参数';
        }
        if (Db::table('product')->insert($post)) {
            echo "<script>alert('添加成功');window.location.href='/index.php/admin/index/pro_add';</script>";
        } else {
            echo "<script>alert('添加失败');window.location.href='/index.php/admin/index/pro_add';</script>";
        }
    }

    //仓库中宝贝
    public function pro_storage_list()
    {
        print_r($cat_id = Request::instance()->get('cat_num'));
        print_r($cat_id);
        $par_cat_row = Db::table('pro_cat')->where('pid=0')->select();
        $sub_cat_row = Db::table('pro_cat')->where('id',$cat_id)->select();
        $row = Db::table('product')->field('pro_name,id,item_number,item_number,pic,serial_number,market_price,yiwu_price,servicer_price,tax,parameter,sup_num')->where('status=1')->order('publish_time desc')->paginate(15);
        $view = new View();
        $page = $row->render();
        $view->assign('page', $page);
        $view->assign('storage_list',$row);
        $view->assign('cat_list',$par_cat_row);
        $view->assign('sub_cat_list',$sub_cat_row);
        return $view->fetch();
    }

    //商品列表
    public function pro_list()
    {
        $row = Db::table('product')->field('pro_name,id,item_number,item_number,pic,serial_number,market_price,yiwu_price,servicer_price,tax,parameter,sup_num')->where('status=2')->order('publish_time desc')->paginate(15);
        $view = new View();
        $page = $row->render();
        $view->assign('page', $page);
        $view->assign('pro_list',$row);
        return $view->fetch();
    }

    //分类管理
    public function cat_add()
    {
        $row = DB::table('pro_cat')->where('pid',0)->select();
        $view = new View();
        $view->assign('cat_list',$row);
        return $view->fetch();
    }
    //分类添加处理
    public function cat_add_submit()
    {
          $cat = $_POST;
        if (Db::table('pro_cat')->insert($cat)) {
            echo "<script>alert('添加分类成功');window.location.href='/index.php/admin/index/cat_add'</script>";
        } else {
            echo "<script>alert('添加分类失败');window.location.href='/index.php/admin/index/cat_add'</script>";
        }
    }

    //品牌管理
    public function brand_add()
    {
        $view = new View();
        return $view->fetch();
    }
    //品牌管理添加处理
    public function brand_add_submit()
    {
        $brand = $_POST;
        if (Db::table('pro_brand')->insert($brand)) {
            echo "<script>alert('添加品牌成功');window.location.href='/index.php/admin/index/brand_add';</script>";
        } else {
            echo "<script>alert('添加品牌失败');window.location.href='/index.php/admin/index/brand_add';</script>";
        }
    }

    //供应商管理
    public function supplier_add()
    {
        $view = new View();
        return $view->fetch();
    }
    //供应商管理添加处理
    public function supplier_add_submit()
    {
        $supplier = $_POST;
        if (Db::table('supplier')->insert($supplier)) {
            echo "<script>alert('添加供应商成功');window.location.href='/index.php/admin/index/supplier_add';</script>";
        } else {
            echo "<script>alert('添加供应商失败');window.location.href='/index.php/admin/index/supplier_add';</script>";
        }
    }

    //物流模板
    public function logistic_add()
    {
        $row = DB::table('logistic')->select();
        $view = new View();
        $view->assign('log_list',$row);
        return $view->fetch();
    }
    //物流模板添加处理
    public function logistic_add_submit()
    {
        $logistic = $_POST;
        if (Db::table('logistic')->insert($logistic)) {
            echo "<script>alert('添加物流模板成功');window.location.href='/index.php/admin/index/logistic_add';</script>";
        } else {
            echo "<script>alert('添加物流模板失败');window.location.href='/index.php/admin/index/logistic_add';</script>";
        }
    }

    //商品导入
    public function pro_batch()
    {
        $view = new View();
        return $view->fetch();
    }
    //商品批量导入处理
    public function pro_batch_submit()
    {
        setlocale(LC_ALL, 'en_US.UTF-8');            //先上传
//       $fname = "/tp_app/public/csv/".time().".csv";
//        $do = copy($_FILES['csv']['tmp_name'],$fname);
        $file = request()->file('csv');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'csv');  //默认方式 保存
        if($info){
            // 成功上传后 获取上传信息
            // 输出 jpg
//            echo $info->getExtension();
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
//            echo $info->getPathname();
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }

        $content = file_get_contents($info->getPathname());
        $content = iconv("GB2312","UTF-8//IGNORE",$content);
        $fp = fopen($info->getPathname(), "w");
        fputs($fp, $content);
        fclose($fp);


        $sql="";                            //再 插入数据库
        $num=1;
        $file = fopen($info->getPathname(),"r");
         $ip = getIP();
        $publisher = session('user');
        while ($data = fgetcsv ($file, 2000, ","))
        {
            if($num!=1)
            {
                Db::table('product')->where('serial_number',$data[3])->delete();
                $sql="INSERT INTO product
            (pro_name,barcode,item_number,serial_number,cat_num,
            brand_num,sup_num,factory_price,yiwu_price,servicer_price,
            channel_price,market_price,tax,packing,stock,
            cubage,weight,stock_cycle,unit,dimension,
            parameter,publisher,publish_time,filler,publish_ip,logistic_id
            )
            VALUES
            (
            '$data[5]','$data[6]','$data[4]','$data[3]','$data[0]',
            '$data[1]','$data[2]','$data[13]','$data[14]','$data[15]',

            '$data[16]','$data[17]','$data[12]','$data[7]','$data[8]',
            '$data[9]','$data[10]','$data[19]','$data[11]','$data[18]',
            '$data[20]','$publisher','".date("Y-m-d H:i:s",time())."','$data[21]','$ip',1)";
                Db::execute($sql);

            }
            $num++;
        }
        echo "<script>alert('导入成功');window.history.back();</script>";
        fclose($file);
        @unlink($info->getPathname());
    }
}
