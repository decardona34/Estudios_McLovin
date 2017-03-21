<?php
    require_once "model/snack.model.php";

    class SnackController{
        private $Smodel;

        public function __CONSTRUCT(){
          $this->Smodel = new SnackModel();
        }

        public function mainPage(){
            require_once 'views/include/header.php';
            require_once 'views/modules/mod_snack/snack.add.php';
            require_once 'views/include/footer.php';
        }

        public function create(){
            $data = $_POST["data"];
            $result = $this->Smodel->createSnack($data);
            header("Location: index.php?c=snack&msn=$result");
        }

        public function update(){
          $field = $_GET["scode"];
          require_once 'views/include/header.php';
          require_once 'views/modules/mod_snack/snack.update.php';
          require_once 'views/include/footer.php';
        }

        public function updateData(){
            $data = $_POST["data"];
            $result = $this->Smodel->updateSnack($data);
            header("Location: index.php?c=snack&msn=$result");
        }

        public function delete(){
            $data = $_GET["scode"];
            $result = $this->Smodel->deleteSnack($data);
            header("Location: index.php?c=snack&msn=$result");
        }

    }

?>
