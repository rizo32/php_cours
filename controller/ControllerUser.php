<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelUser');
RequirePage::requireModel('ModelPrivilege');

class ControllerUser{

    public function index(){
        echo 'abc';
    }

    public function create(){
        CheckSession::sessionAuth();
        // print_r($_SESSION);
        // faut être spécifique et garder à l'esprit qu'on pourrait changer la table privilège.
        if($_SESSION == 1 || $_SESSION['privilege_id'] == 2){
            $privilege = new ModelPrivilege;
            $selectPrivilege = $privilege->select();
            twig::render('user-create.php', ['privileges' => $selectPrivilege]);
        } else {
            requirePage::redirectPage('home/error');
        }
    }
    public function store(){
        if($_SESSION['privilege_id']==2){
            $_POST['privilege_id']==3;
        }



        $validation = new Validation;
        extract($_POST);
        // ne regarde pas si le nom est le même, seulement si ça fit le format
        $validation->name('nom')->value($nom)->pattern('alpha')->required()->max(45);
        $validation->name('username')->value($username)->pattern('email')->required()->max(50);
        $validation->name('password')->value($password)->max(20)->min(6);
        $validation->name('privilege_id')->value($privilege_id)->pattern('int')->required();

        if($validation->isSuccess()){
            $user = new ModelUser;
            $options = [
                'cost' => 10,
            ];
            $_POST['password']= password_hash($_POST['password'], PASSWORD_BCRYPT, $options);
            $userInsert = $user->insert($_POST);
            requirePage::redirectPage('user/login');
        }else{
            $errors = $validation->displayErrors();
            $privilege = new ModelPrivilege;
            $selectPrivilege = $privilege->select();
            twig::render('user-create.php', ['errors' => $errors,'privileges' => $selectPrivilege, 'user' => $_POST]);
        }
    }

    public function login(){
        twig::render('user-login.php');
    }

    public function auth(){
        $validation = new Validation;
        extract($_POST);
        /* veut pas dire que c'est les bonnes données */
        $validation->name('username')->value($username)->pattern('email')->required()->max(50);
        $validation->name('password')->value($password)->required();

        if($validation->isSuccess()){
            // on est pas obligé d'écrire la logique dynamiquement, mais si on réétulise c'est mieux
            $user = new ModelUser;
            $checkUser = $user->checkUser($_POST);
            
            twig::render('user-login.php', ['errors' => $checkUser, 'user' => $_POST]);
        
        }else{
            $errors = $validation->displayErrors();
            twig::render('user-login.php', ['errors' => $errors, 'user' => $_POST]);
        }
    }

    public function logout(){
        session_destroy();
        requirePage::redirectPage('user/login');
    }
}

?>