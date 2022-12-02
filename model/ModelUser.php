<?php

class ModelUser extends Crud {

    protected $table = 'user';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'nom', 'username', 'password', 'privilege_id'];

    public function checkUser($data){
        extract($data);
        $sql = "SELECT * FROM $this->table WHERE username = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute(array($username));
        $count = $stmt->rowCount();
        if($count == 1){
            // juste fetch parce que de toute façon on a juste un user
            $user_info = $stmt->fetch();
            /* Comme password_hash */
            if(password_verify($password, $user_info['password'])){
                    
                session_regenerate_id();
                // c'est ici qu'on pourrait faire un "salut"
                $_SESSION['user_id'] = $user_info['id'];
                $_SESSION['privilege_id'] = $user_info['privilege_id'];
                /* on pourrait décrypter md5, c'est pas sécuritaire, on vérifie si la variable existe à chaque page */
                $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
                
                requirePage::redirectPage('client');
                
            }else{
               return "<ul><li>Verifier le mot de passe</li></ul>";  
            }
        }else{
            return "<ul><li>Le non d'utilisateur n'exist pas</li></ul>";
        }
    } 
}

?>