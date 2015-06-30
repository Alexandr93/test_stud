<!DOCTYPE html>
<!--
    вывод списка студентов 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><br/><h3>Список студентов</h3><br/>
        <table width="700px" border="1px">
             <tr><td>Фамилия</td><td>Имя</td><td>Пол</td><td>Возраст</td><td>Группа</td><td>Факультет</td></tr>       
 <?php
            require_once "controller/ccreateedit.php";
            $res=$vcreateedit->list_st();
            ?></table>
    </body>
</html>
