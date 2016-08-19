<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:65:"E:\www\tp_app\public/../application/admin\view\index\pro_add.html";i:1471317777;s:58:"E:\www\tp_app\public/../application/admin\view\layout.html";i:1471311308;s:68:"E:\www\tp_app\public/../application/admin\view\index\admin_left.html";i:1471249480;s:67:"E:\www\tp_app\public/../application/admin\view\index\admin_top.html";i:1470894365;s:67:"E:\www\tp_app\public/../application/admin\view\index\admin_btn.html";i:1470894444;}*/ ?>
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
        
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="generator" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <link href="http://192.168.0.61:9096/tp_app/public/static/css/haiersoft.css" rel="stylesheet" type="text/css" media="screen,print" />
    <link href="http://192.168.0.61:9096/tp_app/public/static/css/print.css" rel="stylesheet" type="text/css"  media="print" />
    <script src="http://192.168.0.61:9096/tp_app/public/static/js/jquery-1.10.1.min.js"></script>
    <script src="http://192.168.0.61:9096/tp_app/public/static/js/side.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <title>发布商品</title>
    <style>
        @charset "utf-8";
        *{ margin:0; padding:0;border:0;}
        body{font-family:"Microsoft YaHei",Verdana,Arial,Helvetica,sans-serif;font-size:12px;color:#333;}
        ul,ol,ul li,ol li,li{list-style: none;}
        input{font-family:"Microsoft YaHei";}
        img{ border:none;vertical-align:middle}
        a{color:#333;display:inline-block;text-decoration:none;outline:none; /*移除虚线框  IE8,FF有用*/ hide-focus: expression(this.hideFocus=true); /*IE6、IE7*/}
        a:hover{ color:#e42900;text-decoration:none;}
        a:focus {outline:none;}
        *, *:before, *:after {box-sizing: inherit;}
        /*  */
        form{width:942px;margin: 30px auto 0px;background: #f4f4f4;border: 1px solid #ccc;padding: 40px 20px;}
        #Contents form div{display:table; margin-bottom: 20px;}
        div select{display:inline-block;height:35px;line-height:35px;width:390px;margin-right:20px;border:1px solid #ccc;text-align: left; padding-left:10px;}
        div select:nth-child(1){margin-left:120px;}
        div select option{ padding-left:14px;}
        div label{display: inline-block;float: left;width: 110px;text-align: right; margin-right: 10px;height:35px;line-height:35px;font-size: 14px;}
        div input{float: left;height:35px;line-height:35px;width: 400px;text-indent: 1em;color: #c2c2c2;}
        div input#pic{text-indent: 0;line-height:20px;padding-top: 8px;}
        div textarea#detail,div textarea#parameter{height: 100px;width: 380px;padding: 10px;resize:vertical;}
        div section{float: left;height:35px;line-height:35px;width: 50px;}
        div section input{width: 15px;margin-right: 4px;}
        div input#btn{height: 30px;line-height: 28px;text-align: center;color: #fff;background: #e40000;border-radius: 4px;width: 100px;text-indent: 0;font-size: 16px;cursor: pointer;}
    </style>
</head>
<body>
<div class="wrap_right">
    <div id="Contents">

        <form action="<?php echo url('pro_add_submit'); ?>" name="submit_product" method="post" enctype="multipart/form-data">
            <div>
                <select name="cat_num" id="cat_id" value="">
                    <option value="" selected="">所属分类</option>
                    <?php if(is_array($cat_list) || $cat_list instanceof \think\Collection): $i = 0; $__LIST__ = $cat_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['cat_num']; ?>" selected=""><?php echo $vo['name']; ?>-<?php echo $vo['cat_num']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div>
                <select name="brand_id" id="brand_id">
                    <option value="" selected="">所属品牌</option>
                    <?php if(is_array($brand_list) || $brand_list instanceof \think\Collection): $i = 0; $__LIST__ = $brand_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['brand_num']; ?>" selected=""><?php echo $vo['name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div>
                <select name="sup_num" id="supplier_id">
                    <option value="" selected="">供应商</option>
                    <?php if(is_array($sup_list) || $sup_list instanceof \think\Collection): $i = 0; $__LIST__ = $sup_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['sup_num']; ?>" selected=""><?php echo $vo['factory_name']; ?>--<?php echo $vo['sup_num']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div><label for="pro_name">商品名</label><input type="text" id="pro_name" name="pro_name"></div>
            <div><label for="barcode">条形码</label><input type="text" id="barcode" name="barcode"></div>
            <div><label for="item_num">厂家货号</label><input type="text" id="item_num" name="item_number"></div>
            <div><label for="serial_num">供货港编号</label><input type="text" id="serial_num" name="serial_number"></div>
            <div><label for="factory_price">出厂价</label><input type="text" id="factory_price" name="factory_price"></div>
            <div><label for="yiwu_price">义乌供价</label><input type="text" id="yiwu_price" name="yiwu_price"></div>
            <div><label for="servicer_price">世康售价</label><input type="text" id="servicer_price" name="servicer_price"></div>
            <div><label for="channel_price">百云港汇售价</label><input type="text" id="channel_price" name="channel_price"></div>
            <div><label for="market_price">建议零售价</label><input type="text" id="market_price" name="market_price"></div>
            <div><label for="tax">税点</label><input type="text" id="tax" name="tax">%</div>
            <div>
                <select name="logistic_id" id="logistic_id">
                    <option value="" selected="">物流模板</option>
                    <?php if(is_array($log_list) || $log_list instanceof \think\Collection): $i = 0; $__LIST__ = $log_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo $vo['id']; ?>" selected=""><?php echo $vo['mb_name']; ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div><label for="pic">图片上传(限5张)</label><input type="file" id="pic" name="pic"></div>
            <div><label for="detail">详情介绍</label><textarea name="detail" id="detail"></textarea></div>
            <div><label for="packing">装箱数</label><input type="text" id="packing" name="packing"></div>
            <div><label for="cubage">体积</label><input type="text" id="cubage" name="cubage"></div>
            <div><label for="weight">重量</label><input type="text" id="weight" name="weight"></div>
            <div><label for="stock">库存</label><input type="text" id="stock" name="stock"></div>
            <div><label for="unit">单位</label><input type="text" id="unit" name="unit"></div>
            <div><label for="dimension">产地</label><input type="text" id="dimension" name="dimension"></div>
            <div><label for="stock_cycle">备货周期</label><input type="text" id="stock_cycle" name="stock_cycle"></div>
            <div><label for="parameter">产品参数</label><textarea name="parameter" id="parameter"></textarea></div>
            <div><input type="submit" value="发布" id="btn"></div>
        </form>

    </div>

</div>

</body>
</html>
    </div>
    <footer>
    <address>电子邮箱：sales@ghuog.com  技术支持：世康技术部<br>Copyright&nbsp;&copy;&nbsp;2003&nbsp;–&nbsp;2016&nbsp;上海世康实业股份有限公司</address>
</footer>


</div>

</body>
</html>

