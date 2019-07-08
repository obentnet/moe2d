
        <?php 
        include './confirm.ini.php';
        $IndexFD = './vip.lock_1Jnver_WINDOWS';
        if(is_readable($IndexFD) == false){
            die('请确保文件没有缺失！');
        }else{
            include './themes/default/index.php';
        }
        ?>
    