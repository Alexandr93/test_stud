<!DOCTYPE html>
<!--
    форма добавление нового студента
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<form method="post">
    <br/>Введите информацию про студента:
     <table><tr><td> Имя:  </td><td>      <input type="text" name="name"/></td></tr>
   <tr><td> Фамилия:  </td><td> <input type="text" name="sname"/></td></tr>
    <tr><td> Пол:  </td><td>
    <select name="gender">   
        <option value="Мужской">Мужской</option>
        <option value="Женский">Женский</option></td></tr>
     </select>
    <tr><td> Возраст:  </td><td><input type="text" name="age"/></td></tr>
   <tr><td> Группа:  </td><td> <input type="text" name="group"/></td></tr>
   <tr><td> Факультет:  </td><td> <input type="text" name="faculty"/></td></tr>
   <td> <input type="submit"  value="Создать"/></td>
     </table>
</form>
</body>
</html>
