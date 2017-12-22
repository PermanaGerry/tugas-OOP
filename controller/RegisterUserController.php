<?php
    // get file from model
    require_once 'model/CrudRegister.php';

    /**
    * 
    */
    class RegisterUserController
    {
        
        public $CrudRegister;

        public function __construct()
        {
            $this->CrudRegister = new CrudRegister();
        }

        public function redirect($location) {
            header('Location: '.$location);
        }

        private function validateContactParams($data) {
            $errors = array();
            if ( !isset($data) || empty($data) ) {
                $errors[] = 'Name is required';
            }
            if ( empty($errors) ) {
                return;
            }
            throw new ValidationException($errors);
        }

        public function hendleRequest()
        {
            $op = isset($_GET['op']) ? $_GET['op'] : null;

            try {
                
                if (! $op || $op == 'list') {
                    $this->listRegister($op);
                } elseif ($op == 'new') {
                    $this->addRegister();
                } elseif ($op == 'update') {
                    $this->updateRegister();
                } elseif ($op == 'delete') {
                    $this->deleteRegister();
                } else {
                    echo "Halaman tidak bisa di temukan!";
                }

            } catch (Exception $e) {
                // menampilkan Exception terjadi erro
                echo "Erro " . $e->getMessage();
            }
        }

        public function listRegister()
        {
            $title = 'List contact';
            $data = $this->CrudRegister->getAll('tb_user');
            include 'view/index.php';
        }

        public function addRegister()
        {
            $title = 'Add new contact';

            if (isset($_POST['submit'])) {
                $add = array(
                    'firstName' => isset($_POST['firstName']) ? $_POST['firstName'] : null,
                    'lastName'  => isset($_POST['lastName']) ? $_POST['lastName'] : null,
                    'gender'    => isset($_POST['gender']) ? $_POST['gender'] : null,
                    'address'  => isset($_POST['address']) ? $_POST['address'] : null,
                    'dob'  => isset($_POST['dob']) ? $_POST['dob'] : null,
                );

                $sql = $this->CrudRegister->add('tb_user',$add);
                
                if ($sql === TRUE) {
                    $this->redirect('index.php');
                } else {
                    echo $sql;
                }
            }

            include 'view/addRegister.php';
        }

        public function getRegister($id)
        {
            $sql = $this->CrudRegister->get('tb_user', 'id_user', [$id]);
            return $sql;
        }

        public function updateRegister()
        {
            if (isset($_GET['id'])) {
                $result = $this->getRegister(isset($_GET['id']) ? $_GET['id'] : null);

                if (isset($_POST['submit']) && $_POST['submit'] == 'simpan') {
                    $data = array(
                        'id_user'   => $_POST['id_user'],
                        'firstName' => isset($_POST['firstName']) ? $_POST['firstName'] : null,
                        'lastName'  => isset($_POST['lastName']) ? $_POST['lastName'] : null,
                        'gender'    => isset($_POST['gender']) ? $_POST['gender'] : null,
                        'address'   => isset($_POST['address']) ? $_POST['address'] : null,
                        'DOB'       => isset($_POST['dob']) ? $_POST['dob'] : null,
                    );

                    $sql = $this->CrudRegister->update('tb_user',$data);

                    if ($sql == "TRUE") {
                        $this->redirect('index.php');
                    } else {
                        echo $sql;
                    }



                }

            } else {
                echo "Data Tidak Ditemukan";
            }

            include 'view/addRegister.php';
        }

        public function deleteRegister()
        {
            if (isset($_GET['id']))
            {
                $sql = $this->CrudRegister->delete('tb_user',$_GET['id']);
                
                if ($sql == "TRUE")
                {
                    $this->redirect('index.php');
                } else {
                    echo $sql;
                }

            } else {
                echo "tidak ada data yang di temukan";
            }
        }

    }

 ?>