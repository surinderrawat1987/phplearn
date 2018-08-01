<?php
//ini_set('display_errors','0');
//error_reporting(0);

require_once './autoload.php';

function pr($var) {
    echo "<pre>";
    print_r($var);
    echo "<pre>";
}

if(!Session::isAuth()){
    header("location:login.php");
}

$db = Database::getInstance();
//pr($db);
if (!$db->getConnection()) {
    echo "There is some problem with the site, Kindly try later";
}
$mysqlQueryObj = mysqli_query($db->getConnection(), "SELECT * from users");
?>
<html>
    <head>
        <script type="text/javascript" src="" ></script>
    </head>
    <body>
        <table width='30%' height='40%'  border="1">
            <tr>
                <td colspan="7"><input type="button" value="Add User" onclick="window.location='addUser.php'" name="adduser"></td>
            </tr>
            <tr>
                <th>Id</th>
                <th>fname</th>
                <th>lname</th>
                <th>username</th>
                <th>gender</th>
                <th></th>
                <th></th>
            </tr>
            <?php while($result = mysqli_fetch_assoc($mysqlQueryObj)): ?>
            <tr>
                <td><?php echo $result['id']; ?></td>
                <td><?php echo $result['fname']; ?></td>
                <td><?php echo $result['lname']; ?></td>
                <td><?php echo $result['usename']; ?></td>
                <td><?php echo $result['gender']; ?></td>
                <td><input type="button" value="Edit" name="edit" onclick="window.location='addUser.php?id=<?php echo $result['id']; ?>'"></td>
                <td><input type="button" value="Delete" name="delete" onclick="confirm('Do you really want to delete this ?')"></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </body>
</html>