<?php
/**
 * Created by PhpStorm.
 * User: LeThanh
 * Date: 10/18/2017
 * Time: 8:50 PM
 */


function getMenu($category,$lvl = 0,$char='|--'){
    foreach($category as $key => $cate){
        if($cate->lvl == $lvl){
            echo "<option name='".$cate->cateParen_id."'>$char $cate->name</option>";
            //xoa mang lap
            unset($category[$key]);
            getMenu($category,$cate->cateParen_id,$char.'|--');
        }
    }
}