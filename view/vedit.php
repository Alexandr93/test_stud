<!DOCTYPE html>
<!--
    форма редактирование страницы, заполненая текущими данными из БД
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once "controller/ccreateedit.php";
        $id=$_GET['edit'];
        $res=$vcreateedit->ret_page($id);//заполнение формы данными с БД
       if($_POST){ $vcreateedit->up_stud($_POST);//обновление данных в БД
        $res=$vcreateedit->ret_page($id);//повторное внесение данных в форму чтобы предотвратить путаницу
       }
       ?><br/>Редактирование списка студентов<br/>
<form method="post"><!--форма, с полученными данными из БД, для редактирования -->
            <input type="hidden" name="id" value="<?=$res['id']; ?>"/>
     <table><tr><td> Имя:  </td><td>      <input type="text" name="name" value="<?=$res['name']; ?>"/></td></tr>
            <tr><td> Фамилия:  </td><td> <input type="text" name="sname" value="<?=$res['sname']; ?>"></td></tr>
            <tr><td> Пол:  </td><td><input type="text" name="gender" value="<?=$res['gender']; ?>"></td></tr>
            <tr><td> Возраст:  </td><td><input type="text" name="age" value="<?=$res['age']; ?>"></td></tr>
            <tr><td> Группа:  </td><td> <input type="text" name="group" value="<?=$res['group']; ?>"></td></tr>
            <tr><td> Факультет:  </td><td> <input type="text" name="faculty" value="<?=$res['faculty']; ?>"></td></tr>
            <td> <input type="submit" name="submit" value="Изменить"></td>
     </table>
</form>
    </body>
</html>
