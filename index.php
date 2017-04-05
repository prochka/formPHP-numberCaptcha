<?php include "mail.php";?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
 <title>Простая форма PHP+математическая капча</title>
</head>
<body>
<?php if(!empty($_SESSION['mes'])): ?>
   <script>alert('<?php echo $_SESSION['mes'] ?>')</script>
   <?php $_SESSION['mes'] = null; ?>
<?php endif; ?>
<form method="post" action="">
    <table>
        <tr>
            <td>Текст: </td><td><input type="text" name="text" required/>       </td>
        </tr>
        <tr>
            <td>Выражение: </td><td><input type="text" name="res" required/></td>
        </tr>
        <tr>
            <td><?php echo $a. ' + ' .$b. ' = ';?></td>
            <td><input type="text" name="res" /></td>
        </tr>
        <input type="text" class="spam" value="names" style="display: none;"> //скрытое поле для робота-спамера
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="отправить" /></td>
        </tr> 
    </table>
</form>
</body> 
</html> 