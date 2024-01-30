<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows1251">
<title><?php echo $title; ?></title>
</head>
    <body>
    <div class="profile-container">
            
            <div class="profile-title">Личный кабинет</div>  
            <?  
                $host='localhost';
                $database='paradisetattoo';
                $user='root';
                $password='';
                
                $mail=$_SESSION['pochta'];
                $link = mysqli_connect($host, $user, $password, $database) or die(mysqli_error($link));
                $qry = "SELECT * FROM `users` WHERE `EMAIL` = '$mail'";
                $rls = mysqli_query($link, $qry) or die("Ошибка " . mysqli_error($link));
                $row_name = mysqli_fetch_row($rls);
                $name = $row_name[0];

                
                echo '<div class="profile-info-item">
                         <div class="info-item-title">
                            Имя: 
                         </div>
                         <div class="info-item-text">
                            '; echo $row_name[2]; echo' 
                         </div>
                     </div><br>
                ';

                echo '<div class="profile-info-item">
                         <div class="info-item-title">
                            Фамилия: 
                         </div>
                         <div class="info-item-text">
                            '; echo $row_name[3]; echo' 
                         </div>
                     </div><br>
                ';

                echo '<div class="profile-info-item">
                         <div class="info-item-title">
                            E-MAIL: 
                         </div>
                         <div class="info-item-text">
                            '; echo $row_name[1]; echo' 
                         </div>
                     </div><br>
                ';
                echo '<div class="profile-title">Информация о записях</div><br>';

                $search_all = "SELECT * FROM `registrations` WHERE `EMAIL` = '{$_SESSION['pochta']}'";
                $resultat = mysqli_query($link,$search_all) or die(mysqli_error($link));

                $rowl = mysqli_fetch_row($resultat);

                if (empty($rowl)){
                    echo '<div class="profile-info-item">
                
                         <div class="info-item-title>
                         
                            Вы не записаны на сеанс. 

                         </div>

                     </div><br>
                ';
                }
                else{
                    echo   '<div class="profile-info-item">
                              <div class="info-item-title">
                                 Время:
                              </div>
                              <div class="info-item-text">'; 
                                 echo $rowl[4]; echo'
                              </div>
                           </div>
                           <div class="profile-info-item">
                              <div class="info-item-title">
                                 Дата:
                              </div>
                              <div class="info-item-text">'; 
                                 echo $rowl[5]; echo'
                              </div>
                           </div>
                           <div class="profile-info-item">
                              <div class="info-item-title">
                                 Тип услуги:
                              </div>
                              <div class="info-item-text">'; 
                                 echo $rowl[6]; echo'
                              </div>
                           </div>
                           <div class="profile-info-item">
                              <div class="info-item-title">
                                 Мастер:
                              </div>
                              <div class="info-item-text">'; 
                                 echo $rowl[7]; echo'
                              </div>
                           </div>                        
                     <br>';    
               }  
            ?>
        </div>
    </body>
</html>