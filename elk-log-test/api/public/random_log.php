<?php
include_once '__base.php';

for ($i=0;$i<1000;$i++) {
    $m = rand(11,12);
    $d = rand(10,30);

    $log = new MyLog(uuid(),__DIR__ .'/../log/2019-0' . $m . '-0' . $d . '.log');

    $log->log('info','2019-' . $m . '-' . $d . ' 查询生产服务器状态: 空闲');
    $log->log('info','2019-' . $m . '-' . $d . ' 批处理添加用户退款金额失败');
    $log->log('info','2019-' . $m . '-' . $d . ' 批处理添加用户剩余退款金额失败');
    $log->log('info','2019-' . $m . '-' . $d . ' 清空用户服务器失败');
    $log->log('info','2019-' . $m . '-' . $d . ' 发送短信失败');
    $log->log('info','2019-' . $m . '-' . $d . ' 发送站内短信失败');
    $log->log('info','2019-' . $m . '-' . $d . ' 发送站内短信第二次失败');
    $log->log('info','2019-' . $m . '-' . $d . ' 发送站内短信第三次失败');
    $log->log('info','2019-' . $m . '-' . $d . ' 添加客户资源失败');
    $log->log('ERROR','2019-' . $m . '-' . $d . ' 用户不存在:'. uniqid());
    $log->log('info','2019-' . $m . '-' . $d . ' 用户注销登录');
    $log->log('info','2019-' . $m . '-' . $d . ' 用户登录');

    for ($j=0;$j<10;$j++) {
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
    }

    sleep(1);

    $m = rand(1,9);
    $d = rand(1,9);

    $log = new MyLog(uuid(), __DIR__ .'/../log/2019-0' . $m . '-0' . $d . '.log');

    $log->log('info','2019-' . $m . '-' . $d . ' 查询生产服务器状态: 空闲');
    $log->log('info','2019-' . $m . '-' . $d . ' 批处理添加用户退款金额失败');
    $log->log('info','2019-' . $m . '-' . $d . ' 批处理添加用户剩余退款金额失败');
    $log->log('info','2019-' . $m . '-' . $d . ' 清空用户服务器失败');
    $log->log('info','2019-' . $m . '-' . $d . ' 发送短信失败');
    $log->log('info','2019-' . $m . '-' . $d . ' 发送站内短信失败');
    $log->log('info','2019-' . $m . '-' . $d . ' 发送站内短信第二次失败');
    $log->log('info','2019-' . $m . '-' . $d . ' 发送站内短信第三次失败');
    $log->log('info','2019-' . $m . '-' . $d . ' 添加客户资源失败');
    $log->log('ERROR','2019-' . $m . '-' . $d . ' 用户不存在:'. uniqid());
    $log->log('info','2019-' . $m . '-' . $d . ' 用户注销登录');
    $log->log('info','2019-' . $m . '-' . $d . ' 用户登录');

    for ($j=0;$j<10;$j++) {
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
        $log->log('info','2019-' . $m . '-' . $d . ' 日志日志随机生成 - ' . rand(0,10000));
    }


}
