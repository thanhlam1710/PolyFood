<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form-test</title>
</head>
<body>
    <form autocomplete="off" action="<?php echo ROOT_URL ?>menu/insertmenu" method="post">
        <?php
            if(isset($alt)){
                echo '<span style="font-size: 20px; color: red;">'.$alt.'</span>';
            }    
        ?>
        <table>
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" require="1"></td>
            </tr>
            <tr>
                <th>Desc</th>
               <td>
                 <input type="text" name="desc" require="1">
               </td>
            </tr>
            <tr>
                <td><input type="submit" name="addmenu" value="insert"></td>
            </tr>
        </table>
    </form>
</body>
</html>