<?php
include_once ('../db.php');
if(!isset($_SESSION))
{
    session_start();
}
$review     = isset($_POST['review'])?$_POST['review']:'';
$shop_id    = isset($_POST['shop_id'])?$_POST['shop_id']:'';
$num_rows = "";

if($review!="" && $shop_id!="")
{
    $query2 = 'SELECT * FROM review WHERE user_name = "'.$_SESSION['user']['username'].'" AND shop_id = '.$shop_id;
    $result = $conn->query($query2);
    $num_rows = $result->num_rows;
    if($num_rows == 0){

            $query = ' INSERT INTO review (shop_id,user_name, description, insertion_date)
                     VALUES ('.$shop_id.',"'.$_SESSION['user']['username'].'", "'.$review.'",now()) ';
            $result = $conn->query($query);
            if($result)
            {
                $query1 ="SELECT description,user_name FROM review WHERE shop_id=".$shop_id." ORDER BY insertion_date DESC";
                $result1 = $conn->query($query1);
                $html = "";
                while ($row = $result1->fetch_assoc())
                {
                    if($row['user_name']==$_SESSION['user']['username']) {
                        $html .= '<div class="p3_comment_list">
                        <div class="d1">
                            <img src="img/user.jpeg">
                        </div>
                        <div class="d2">
                            <div class="c_user_name">
                                ' . $row['user_name'] . '
                            </div>
                            <div class="c_content" id="newComment">
                                ' . $row['description'] . '
                            </div>
                            <button class="comment_fun_button" id="edit">Edit</button>
                            <button class="comment_fun_button" id="delete" style="float: left">Delete</button>
                        </div>
                    </div>';
                    }

                    else{
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
                }
                echo $html;
                die;
            }
            else
            {
                echo 'error';
            }
    }

    else{


//        echo "repeated entry";
//        echo "<br>";
//        $query2 = 'SELECT * FROM review WHERE user_name = "'.$_SESSION['user']['username'].'" AND shop_id = '.$shop_id;
//        $result = $conn->query($query2);
//        $num_pp = $result->num_rows;
//        echo $num_pp;
//        echo "<br>";
//        echo $shop_id;
//        echo "<br>";
//        echo $_SESSION['user']['username'];

        $query4 = "UPDATE review SET description='".$review."', insertion_date = now() WHERE shop_id = ".$shop_id." AND user_name = '".$_SESSION['user']['username']."'";

//        $query3 = ' INSERT INTO review (shop_id,user_name, description, insertion_date)
//                     VALUES ('.$shop_id.',"'.$_SESSION['user']['username'].'", "'.$review.'",now()) ';
        $result = $conn->query($query4);
        if($result)
        {
            $query1 ="SELECT description,user_name FROM review WHERE shop_id=".$shop_id." ORDER BY insertion_date DESC";
            $result1 = $conn->query($query1);
            $html = "";
            while ($row = $result1->fetch_assoc())
            {

                if($row['user_name']==$_SESSION['user']['username']) {
                    $html .= '<div class="p3_comment_list">
                        <div class="d1">
                            <img src="img/user.jpeg">
                        </div>
                        <div class="d2">
                            <div class="c_user_name">
                                ' . $row['user_name'] . '
                            </div>
                            <div class="c_content" id="newComment" >
                                ' . $row['description'] . '
                            </div>
                            <button class="comment_fun_button" id="edit">Edit</button>
                            <button class="comment_fun_button" id="delete" style="float: left">Delete</button>
                        </div>
                    </div>';
                }

                else{
                    $html .= '<div class="p3_comment_list">
                        <div class="d1">
                            <img src="img/user.jpeg">
                        </div>
                        <div class="d2">
                            <div class="c_user_name">
                                ' . $row['user_name'] . '
                            </div>
                            <div class="c_content" >
                                ' . $row['description'] . '
                            </div></div>
                    </div>';
                }

            }
            echo $html;
            die;
        }
        else
        {
            echo 'error';
        }




    }
}
else
{
    $query1 ="SELECT description,user_name FROM review WHERE shop_id=".$shop_id." ORDER BY insertion_date DESC";
    $result1 = $conn->query($query1);    
    $html = "";
    while ($row = $result1->fetch_assoc()) 
    {




        if($row['user_name']==$_SESSION['user']['username']) {
            $html .= '<div class="p3_comment_list">
                        <div class="d1">
                            <img src="img/user.jpeg">
                        </div>
                        <div class="d2">
                            <div class="c_user_name">
                                ' . $row['user_name'] . '
                            </div>
                            <div class="c_content" id="newComment">
                                ' . $row['description'] . '
                            </div>
                            <button class="comment_fun_button" id="edit">Edit</button>
                            <button class="comment_fun_button" id="delete" style="float: left">Delete</button>
                        </div>
                    </div>';
        }

        else{
            $html .= '<div class="p3_comment_list">
                        <div class="d1">
                            <img src="img/user.jpeg">
                        </div>
                        <div class="d2">
                            <div class="c_user_name">
                                ' . $row['user_name'] . '
                            </div>
                            <div class="c_content" >
                                ' . $row['description'] . '
                            </div></div>
                    </div>';
        }

    }
    echo $html;
    die;
}
