<?php
/**
 * Created by PhpStorm.
 * User: pradip
 * Date: 12-06-2015
 * Time: 03:45
 */

include_once ('../db.php');
if(!isset($_SESSION))
{
    session_start();
}

$shop_id    = isset($_POST['shop_id'])?$_POST['shop_id']:'';

if($shop_id!=""){

    $query2 = 'DELETE FROM review WHERE user_name = "'.$_SESSION['user']['username'].'" AND shop_id = '.$shop_id;

    $result = $conn->query($query2);

    if($result){
        $query1 ="SELECT description,user_name FROM review WHERE shop_id=".$shop_id." ORDER BY insertion_date DESC";
        $result1 = $conn->query($query1);
        $html = "";
        while ($row = $result1->fetch_assoc())
        {
            $html .= '<div class="p3_comment_list">
                        <div class="d1">
                            <img src="img/user.jpeg">
                        </div>
                        <div class="d2">
                            <div class="c_user_name">
                                ' . $row['user_name'] . '
                            </div>
                            <div class="c_content">
                                ' . $row['description'] . '
                            </div></div>
                    </div>';

        }
        echo $html;
        die;

    }
    else
    {
        echo 'error';
    }
}