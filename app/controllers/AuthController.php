<?php
class AuthController{
private PDO $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connection();
    }

public function Register(){
    
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email    = $_POST['email'];
    $role     = $_POST['role'];
    $password = $_POST['password'];

    if (!empty($name) && !empty($email) && !empty($role) && !empty($password)) {
        $stmt = $this->connection->prepare("SELECT id FROM users WHERE name = ?");
        $stmt->execute([$name]);
        if ($stmt->fetch()) {
            echo "name déjà utilisé.";
            exit;
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->connection->prepare("INSERT INTO users (name, email, role, password) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $role, $hashedPassword]);
        echo "Inscription réussie. <a href='../../views/front/Accueil.php'>Se connecter</a>";
        header("location: /login");
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
}

public function Login(){
    $utilisateur = new User();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];

    if (!empty($name) && !empty($password)) {
        $stmt = $this->connection->prepare("SELECT * FROM users WHERE name = ?");
        $stmt->execute([$name]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $user = $stmt->fetch();


        if ($user && password_verify($password, $user->getPassword())) {
            session_start();
            $_SESSION['id'] = $utilisateur->getId();
            $_SESSION['name'] = $utilisateur->getName();
            $_SESSION['role'] = $utilisateur->getRole();
            $_SESSION['email'] = $utilisateur->getEmail();

            if($_SESSION['role'] === 'Admin'){
                header('Location: /Admin');
            } else {
                header('Location: /Client');
            }
            exit;
        } else {
            echo "name ou mot de passe incorrect.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }

}
}

    public function logout() {
        session_destroy();
        header('Location: /');
    }
}
