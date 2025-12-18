<?php   
include '../includes/config/query.php';
$users = [];

while ($row = $stmt->fetch()) {
    $users[] = $row;
}

switch ($_POST['submit']) {
    case 'register':
        register();
        break;
    case 'login':
        // 
        break;
}

function register()
{
    if (!isset($_POST['submit']))
        header('location: ../includes/register.php');
    $username = $_POST['username'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;
    $cPassword = $_POST['cPassword'] ?? null;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $date = date('Y-m-d');
    $time = date('H:i:s');

    if (!$username || !$email || !$password || !$cPassword)
        header("location: ../includes/register.php");

    if ($password !== $cPassword)
        header("location: ../includes/register.php");

}
// try {
//     $conn->prepare($sql)->execute([$hashedPassword, $username, $email, $date]);
// } catch (Exception $e) {
//     header("location: signUp.php");
// }

// session_start();
// $_SESSION["id"] = "";

// header("location: ../profile.php");
?>
<!-- <script>
    const users = "<?php echo $_POST['username']; ?>";
</script>
<script src="../assets/signUp.js"></script> -->