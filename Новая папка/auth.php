<?



include ("db.php");

if(isset($_POST['submit']))
{
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($link,"SELECT id, password FROM reg WHERE login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}
?>
