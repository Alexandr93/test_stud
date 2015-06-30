

        <a href="?page=list">Список студентов</a> - <a href="?page=edition">Редактор списка студентов</a> - <a href="?page=create">Добавление нового студента</a><br/>
        <?php
        require_once "config/db.php";
        require_once "controller/ccreateedit.php";
        /*
        * создание страницы студента, при существовании отправленных данных
        */
        if($_GET['page']=="create"){
            require_once "view/vcreate.php";
            
            $vcreateedit=new Ccreateedit();
            if($_POST){ 
                $vcreateedit->cr_stud($_POST);
                }
                
        }
        /*
        * вывод списка студентов
        */
        if($_GET['page']=="list"){
            
            require_once 'view/vlist.php';
        }
        /*
        * выбор страницы для редактирования
        */
        if($_GET['page']=="edition"){
            require_once 'view/veditlist.php';
            
        }
        /*
         * переход к редактированию страницы по ид
         */
        if($_GET['edit']){
               
		require_once "view/vedit.php";
	
	}
        /*
         * удаление страницы
        */
        if($_GET['delete']){
		
		$vcreateedit->del_page($_GET['delete']);
		
		require_once "view/veditlist.php";
	}
        ?>

