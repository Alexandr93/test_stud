<?php
/*
    класс моделей, в нем находятся функции с различными запросами к БД
 */
require_once "config/db.php";
class Mcreateedit extends Db{
    /*
         создание новой записи студента
     * принимает значение из формы запонения
    */
    function create_stud($post){
        
        $sql="INSERT INTO student (`name`, `sname`, `gender`, `age`, `group`, `faculty`) VALUES ('{$post['name']}', '{$post['sname']}', '{$post['gender']}', '{$post['age']}', '{$post['group']}', '{$post['faculty']}') ";
        //echo $sql;
               $this->sql($sql);
               echo 'Запись успешно создана';
               return true;
    }
    
    /*
     *      возвращаем список студентов из базы(для вывода списка студентов) и забиваем в массив, сортируем по фамилии
     */
    function list_stud(){
        
        $sql="SELECT `sname`, `name` , `gender`, `age`, `group`, `faculty` FROM student ORDER BY `sname`";
        $result= $this->sql($sql);
        $ar=array();
        $i=0;
            while ($row = mysql_fetch_assoc($result)) {
            $ar[$i]=$row;
            $i++;
        }
        
        return $ar;
    }
    /* 
     * получение из базы данных, для создания меню выбора страницы редактирования
     */
    function print_studedit() {//
        $sql="SELECT `id`, `name`, `sname` FROM student";
                        $res=$this->sql($sql);
                        //print_r($res);
                      
                        return $res;
    }
    /*
     * возвращает данные из базы по ид для заполнения формы редактирования нужными данными
     */
    function return_page($id) {
        $sql="SELECT `id`, `name`, sname, gender, age, `group`, faculty FROM student WHERE id={$id}";
        $res=$this->sql($sql);
        //echo $sql;
        return $res;
    }
    /*
     * обновление записи о студенте по  ид
     * записываются данные полученые с формы методом POST
     */
    function update_stud($post) {
          $sql="UPDATE student SET `name`='".$post['name']."', sname='".$post['sname']."', gender='".$post['gender']."', age='".$post['age']."', `group`='".$post['group']."', ". "faculty='".$post['faculty']."'  WHERE id=".$post['id'];
                       echo "Запись успешно обновлена"; 
                        $this->sql($sql);
    }
    /*
     * удаление страницы студента
     */
    function delete_page($id) {
        $sql="DELETE FROM student WHERE id=".$id;
  
        $this->sql($sql);
    }
}
