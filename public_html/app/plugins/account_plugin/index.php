<?php
/**
 * Created by PhpStorm.
 * User: Chubs
 * Date: 12/8/2016
 * Time: 9:14 AM
 */
DEFINE("ACCOUNT_PLUGIN_PATH", dirname(__FILE__));
function account_plugin_messages() {
    return "My Messages";
}
function account_plugin_username() {
    return ucfirst(UserDetail("username", UserID()));
}
function account_plugin_logout() {
    return "<nav id='logout'>Logout</nav>";
}
function account_plugin_messages_body() {
    return "Create Panel";
}
function account_login_form() {
    PluginLoad(ACCOUNT_PLUGIN_PATH, "panels/login.inc");
}
function SetLogin($username, $password) {
    $accountPlugin = new account_plugin_user_functions();
    echo $accountPlugin->Login($username, $password);
}
class account_plugin_user_functions {
    public function __construct() {
        $this->webdb = new website_connection();
    }
    public function Login($username, $password) {
        $ucUN = strtoupper($username);
        $hashed = strtoupper(sha1($ucUN.':'.$password));
        $query = <<<SQL
SELECT id FROM accounts WHERE password = :password
SQL;
        $resource = $this->webdb->db->prepare( $query );
            $resource->execute( array (
                ":password" => $hashed,
            ));
            if($resource->rowCount() == 0) {
                return "Incorrect Username or Password";
            } else {
                $result = $resource->fetch(PDO::FETCH_ASSOC);
                return $this->SetSession($result['id']);
            }
    }
    public function SetSession($userID) {
        $_SESSION['user']['id'] = $userID;
        return UserID();
    }
}