<!DOCTYPE html>
<!--
    вид, для выбора страницы студента для редактирования и удаления
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
            require_once "controller/ccreateedit.php";
            $list=$vcreateedit->print_stedit();
        
            echo "<table>";
            echo "<br>"; 
            /*
             * вывод ссылок на редактирование и удаление страниц
             */
            foreach($list as $id => $menu_name):
       
        ?>

	<tr><td><a href="?edit=<?php echo $id?>">[Редактировать]</a></td><td><?php echo $menu_name;?></td><td>
                <a href="?delete=<?php echo $id;?>">[Удалить страницу]</a></td></tr>
 <?php
endforeach;
        echo "</table>";

        ?>
    </body>
</html>
