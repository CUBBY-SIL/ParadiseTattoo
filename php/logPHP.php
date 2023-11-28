<?
    session_start();

    $host='localhost';
    $database='paradisetattoo';
    $user='root';
    $password='';
    $link = mysqli_connect($host, $user, $password, $database) or die(mysqli_error($link));

    $pochta=$_POST['mailLog'];
    $pass=$_POST['passLog'];
    $clog="SELECT `EMAIL` FROM `users` WHERE `EMAIL`='$pochta'";
    $clresult= mysqli_query($link,$clog) or die(mysqli_error($link));
    $cpass="SELECT `PASSWORD` FROM `users` WHERE (`EMAIL`='$pochta' AND `PASSWORD`='$pass') ";

    $cpresult=mysqli_query($link,$cpass) or die(mysqli_error($link));

    if(!empty($pochta)&&!empty($pass)){

        if (mysqli_num_rows($clresult)==0)
        {
            exit("<script>
            alert(\"Такого пользователя не существует!\");
            location.href=\"http://paradiseshop.ru/sections/log.html\";
            </script>");
        
        }
        if (mysqli_num_rows($cpresult)==0)
        {
            exit("<script>
            alert(\"Неправильный логин или пароль!\");
            location.href=\"http://paradiseshop.ru/sections/log.html\";
            </script>");
        
        $i++;
        }
        
            $qry = "SELECT `NAME` FROM `users` WHERE `EMAIL` = '$pochta'";
            //Выполнение запроса или ошибка
          $rls = mysqli_query($link, $qry) or die("Ошибка " . mysqli_error($link));
            //Заносим результат выборки в массив 
          $row_name = mysqli_fetch_row($rls);
          $name = $row_name[0];
          $_SESSION['name'] = $name;
          $_SESSION['pochta'] = $pochta;
          header('Location: http://paradisetattoo/');
          exit();
    }
    else{
        echo 'Не все поля заполнены!';
    }
  
?>