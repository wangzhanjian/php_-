<?php
/**
 * Created by PhpStorm.
 * User: ji
 * Date: 2016/11/21
 * Time: 14:37
 */

namespace Home\Controller;


class PdAutoResponseController extends BasisController
{
    //显示被添加自动回复设置信息页面
    public function subscribeResponse(){
        $this->assignProjectCenterCommonInfo();
        $this->display();
    }

    //被添加自动回复设置
    public function setSubscribeResponse(){

    }

    //删除被添加自动回复
    public function delSubscribeResponse(){

    }

    //显示消息自动回复设置信息页面
    public function msgResponsne(){

    }

    //消息自动回复设置
    public function setMsgResponse(){

    }

    //删除消息自动回复
    public function delMsgResponse(){

    }

    //显示关键字回复信息页面
    public function keywordResponse(){

    }

    //关键字自动回复设置
    public function setKeywordResponse(){

    }

    //删除某关键字回复设置信息
    public function delKeywordResponse(){

    }
}