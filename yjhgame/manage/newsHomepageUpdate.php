<?php
    header("Content-Type:text/html;charset=utf-8");
    include 'connect.php';
 
    $type = $_GET['type'];

    if ($type=='article') {    
        $id = $_GET['id'];
        $sql = 'select * from article where id='.$id;
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        if ($row['homepage'] == "0") {
            $homepage = "1";
        }else{
            $homepage = "0";
        }

      	$sq = "update article set homepage='$homepage'  where id='$id' ";
        mysql_query($sq,$con); // 获取影响的行数
        $rows = mysql_affected_rows();  // 返回影响行数
        if ($row['homepage'] == "0") {
            if($rows >= 1){
            	echo "<script language='javascript'>alert('已首页显示  注意：首页每个类最多显示6条新闻，攻略首页显示4条，按发布日期排列，如果首页看不到这条，请取消其他新闻的首页显示');</script>";
                header("refresh:0;url=newsManage.php");
            }else{
                echo "<script language='javascript'>alert('首页显示失败');history.back();</script>";
            }
        }else{
            echo "<script language='javascript'>alert('取消首页显示');</script>";
            header("refresh:0;url=newsManage.php");
        }

    }

    if ($type=='data') {    
        $id = $_GET['id'];
        $sql = 'select * from data where id='.$id;
        $result = mysql_query($sql);
        $row = mysql_fetch_array($result);
        if ($row['homepage'] == "0") {
            $homepage = "1";
        }else{
            $homepage = "0";
        }

        $sq = "update data set homepage='$homepage'  where id='$id' ";
        mysql_query($sq,$con); // 获取影响的行数
        $rows = mysql_affected_rows();  // 返回影响行数
        if ($row['homepage'] == "0") {
            if($rows >= 1){
                echo "<script language='javascript'>alert('已首页显示  注意：首页每个类最多显示6条新闻，按发布日期排列，如果首页看不到这条，请取消其他新闻的首页显示');</script>";
                header("refresh:0;url=data.php");
            }else{
                echo "<script language='javascript'>alert('首页显示失败');history.back();</script>";
            }
        }else{
            echo "<script language='javascript'>alert('取消首页显示');</script>";
            header("refresh:0;url=data.php");
        }

    }
?>
 