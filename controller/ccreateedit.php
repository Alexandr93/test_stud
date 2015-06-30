<?php
 /*
 * класс контроллер, служит св¤зью между моделью и видом
  * в нем данные из БД забиваютьс¤ в массивы
 */
require_once "model/mcreateedit.php";
class Ccreateedit extends Mcreateedit{
        /*
         * создание страницы
         */	
    function cr_stud($post){
		$this->create_stud($post);
	}
        /*
         * вывод списка студентов
         */
        function list_st(){
            $res=$this->list_stud();
            
            $count=  count($res);
            $i=0;
            while ($i<$count) {
                echo '<tr>';
                foreach ($res[$i] as $key=> $value) {
                    
                    echo '<td>'.$key=$value."</td>";
                    
                }
            
                echo '</tr>';
                $i++;
            }
            return $res;
        
        }
         /*
         * вывод списка ссылок на страницы для редактирования
         */
	function print_stedit(){
            $res=  $this->print_studedit();
            while ($row = mysql_fetch_assoc($res)) {
                $r[$row['id']]=$row['sname'];
            }
            
            return $r;
	}
         /*
         * заносим в массив данные дл¤ заполнение формы редактировани¤ данными с БД
         */
        function ret_page($id) {
            $res=  $this->return_page($id);
           $row = mysql_fetch_assoc($res);
           
            return $row;
            
        }
         /*
         * обновление записи в БД
         */
        function up_stud($post) {
            $this->update_stud($post);
        }
         /*
         * удаление записи
         */
        function del_page($id) {
            $this->delete_page($id);
        }
}
$vcreateedit=new Ccreateedit();