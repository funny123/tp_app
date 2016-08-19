<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:67:"E:\www\tp_app\public/../application/admin\view\index\pro_batch.html";i:1471241698;s:58:"E:\www\tp_app\public/../application/admin\view\layout.html";i:1471311308;s:68:"E:\www\tp_app\public/../application/admin\view\index\admin_left.html";i:1471249480;s:67:"E:\www\tp_app\public/../application/admin\view\index\admin_top.html";i:1470894365;s:67:"E:\www\tp_app\public/../application/admin\view\index\admin_btn.html";i:1470894444;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="generator" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link href="http://1527v75j50.imwork.net:25308/tp_app/public/static/css/haiersoft.css" rel="stylesheet" type="text/css" media="screen,print" />
    <link href="http://1527v75j50.imwork.net:25308/tp_app/public/static/css/print.css" rel="stylesheet" type="text/css"  media="print" />
    <link rel="stylesheet" href="http://1527v75j50.imwork.net:25308/tp_app/public/static/css/pro_list.css" />
    <script src="http://1527v75j50.imwork.net:25308/tp_app/public/static/js/jquery-1.10.1.min.js"></script>
    <script src="http://1527v75j50.imwork.net:25308/tp_app/public/static/js/side.js" type="text/javascript"></script>
    <script src="http://1527v75j50.imwork.net:25308/tp_app/public/static/js/PinYin.js"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <title>供货港管理系统</title>
    <style>
        @charset "utf-8";
        *{ margin:0; padding:0;border:0;}
        body{font-family:"Microsoft YaHei",Verdana,Arial,Helvetica,sans-serif;font-size:12px;color:#333;}
        ul,ol,ul li,ol li,li{list-style: none;}
        input{font-family:"Microsoft YaHei";}
        img{ border:none;}
        a{color:#333;display:inline-block;text-decoration:none;outline:none; /*移除虚线框  IE8,FF有用*/ hide-focus: expression(this.hideFocus=true); /*IE6、IE7*/}
        a:hover{ color:#e42900;text-decoration:none;}
        a:focus {outline:none;}
        *, *:before, *:after {box-sizing: inherit;}
        /*  */
        form{width: 1200px;margin: 30px auto 0px;background: #f4f4f4;border: 1px solid #ccc;padding: 40px 20px;}
        #Contents form div{display:table; margin-bottom: 20px;}
        div select{display:inline-block;height:35px;line-height:35px;width:140px;margin-right:20px;border:1px solid #ccc;text-align: left;padding-left: 20px;}
        div select option{padding-left: 25px;}
        div label{display: inline-block;float: left;width: 110px;text-align: right; margin-right: 10px;height:35px;line-height:35px;font-size: 14px;}
        div input{float: left;height:35px;line-height:35px;width: 400px;text-indent: 1em;color: #c2c2c2;}
        div textarea#cat_name{height: 100px;width: 380px;padding: 10px;resize:vertical;color: #c2c2c2;}
        div input#btn{height: 30px;line-height: 28px;text-align: center;color: #fff;background: #e40000;border-radius: 4px;width: 100px;text-indent: 0;font-size: 16px;cursor: pointer;margin-left: 120px;}
    </style>
</head>
<body>
<div class="wrap_left" id="frmTitle" name="fmTitle">
    <div id="Logo"><span>人单合一</span></div>
    <script>
        $(function() {
            $(".menu_list dd");
            $(".menu_list dt").click(function(){
                $(this).toggleClass("open").next().slideToggle("fast");
            });
        });
    </script>
    <div class="menu_list">
        <dl>
            <dt><span>商品库</span></dt>
            <dd>
                <a href="<?php echo url('pro_list'); ?>" title="二级分类">商品库列表</a>
                <a href="<?php echo url('cat_add'); ?>" title="二级分类">分类管理</a>
                <a href="<?php echo url('brand_add'); ?>" title="二级分类">品牌管理</a>
                <a href="<?php echo url('supplier_add'); ?>" title="二级分类">供应商管理</a>
                <a href="<?php echo url('logistic_add'); ?>" title="二级分类">物流模板</a>
                <a href="<?php echo url('pro_add'); ?>" title="二级分类">商品添加</a>
                <a href="<?php echo url('pro_batch'); ?>" title="二级分类">商品批量导入</a>
                <a href="<?php echo url('pro_storage_list'); ?>" title="二级分类">仓库中的商品</a>
            </dd>
        </dl>
    </div>
</div>
<!-- /wrap_left -->
<div class="picBox" onclick="switchSysBar()" id="switchPoint"></div>

<div class="wrap_right">
    <header>
    <div id="Header">
        <div id="Head">
            <h1 title="供货港管理系统">供货港管理系统</h1>
            <script language="javascript">
                function showmenu(id){id.style.visibility = "visible";}
                function hidmenu(){UserList.style.visibility = "hidden";}
                document.onclick = hidmenu;
            </script>
            <div class="user">
                <a href="javascript:showmenu(UserList)">admin</a>
                <div id="UserList">
                    <a href="">修改</a>
                    <a href="">注销</a>
                    <a href="">退出</a>
                </div>
            </div>
        </div>
    </div>
</header>
    <div  id="Contents">
        
<form method="post" action="<?php echo url('pro_batch_submit'); ?>" enctype="multipart/form-data">
    <input type="hidden" value="add" name="submit">
    <dl>
        <dt><em>*</em>请选择文件：</dt>
        <dd>
            <p>
                <input type="file" id='csv' name="csv" value="" />
            </p>
            <p class="hint">导入程序默认从第二行执行导入，请保留CSV文件第一行的标题行，最大12M</p>
        </dd>
    </dl>

    <dl>
        <dt>文件格式：</dt>
        <dd>
            <p>csv文件 <a href="./upload/csv/product.csv" target="_blank">商品批量导入模版</a></p>
        </dd>
    </dl>
    <dl>
        <dt>导入说明：</dt>
        <dd>
            <p> 1.如果修改CSV文件请务必使用微软excel软件，且必须保证第一行表头名称含有如下项目: 商品名称、商品价格、商品单位、商品数量、品牌、关键字、宝贝描述、商品详情。<br />
                2.如果因为淘宝助理版本差异表头名称有出入，请先修改成上述的名称方可导入，不区分全新、二手、闲置等新旧程度，导入后商品类型都是全新。<br />
                3.如果CSV文件超过12M请通过excel软件编辑拆成多个文件进行导入。 </p>
        </dd>
    </dl>
    <input type="submit" value="提交" >
</form>

    </div>
    <footer>
    <address>电子邮箱：sales@ghuog.com  技术支持：世康技术部<br>Copyright&nbsp;&copy;&nbsp;2003&nbsp;–&nbsp;2016&nbsp;上海世康实业股份有限公司</address>
</footer>


</div>

</body>
</html>

