<?php if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); }
/*
Plugin Name: 歧视IE浏览器插件
Version: 1.0
Plugin URL: http://www.superxzr.net
Description: 对使用IE的用户进行提示！让他们知道IE是渣渣！
Author:alien
Author URL: http://www.superxzr.net
For: V3.1+
*/




function alien_lookdown_ie() {      //提示函数
    if(strpos($_SERVER[HTTP_USER_AGENT], 'MSIE 8.0')) {     //如果为IE8
        echo '<script>alert("Alien提示：你的浏览器为过时的IE8浏览器，为了更好的访问效果，请更换现代浏览器，如Chrome！");</script>';//输出提示
    }elseif(strpos($_SERVER[HTTP_USER_AGENT], 'MSIE 7.0')) {    //如果为IE7
        echo '<script>alert("Alien提示：你的浏览器为过时的IE7浏览器，为了更好的访问效果，请更换现代浏览器，如Chrome！");</script>';//输出提示
    } elseif(strpos($_SERVER[HTTP_USER_AGENT], 'MSIE 6.0')) {   //如果为IE6
        echo '<script>alert("Alien提示：你的浏览器为过时的IE6浏览器，为了更好的访问效果，请更换现代浏览器，如Chrome！");</script>';//输出提示
    } elseif(strpos($_SERVER[HTTP_USER_AGENT], 'MSIE 9.0')) {   //如果为IE9
        echo '<script>alert("Alien提示：你的浏览器为过时的IE9浏览器，为了更好的访问效果，请更换现代浏览器，如Chrome！");</script>';//输出提示
    }

    }


addAction('header','alien_lookdown_ie');     //挂载函数

?>