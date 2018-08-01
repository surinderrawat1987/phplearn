<?php 
include_once 'autoload.php';

if(Session::isAuth()){
    header('location:index.php');
}
        
if(count($_REQUEST) > 0){
    if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
        $auth = new Authentication($_REQUEST['username'],$_REQUEST['password']);
        if($auth->login()){
            Session::addToSession('auth',TRUE);
            Session::addToSession('username',$_REQUEST['username']);
            header('location:index.php');
        }else echo "Please enter valid credentails";
    }
}


?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="username" id="username" value="" placeholder="Please Enter your Username">
    <input type="password" name="password" id="password" value="" placeholder="Please Enter your Password">
    <input type="submit" name="Submit" id="submit" value="Submit">
</form>
