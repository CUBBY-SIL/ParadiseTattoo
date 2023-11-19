<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows1251">
<title><?php echo $title; ?></title>

</head>
    <body>
        <?php
            if (empty($_SESSION['name'])){
                echo '                 
                <h2 class="content-tittle">Вы не авторизованы</h2>
            
                <p class="content-information">Для того, чтобы записаться на сеанс/консультацию,<br>
                     вы должны быть зарегистрированы и авторизованы</p>   
                ';
            }
            
            else { echo '
                <h2 class="content-tittle">Записаться к мастеру</h2>
            
                <p class="content-information">Для того, чтобы записаться на сеанс к одному из наших мастеров,<br> 
                    вам требуется заполнить анкету ниже.
                </p>
        
                <div class="box_anketa">
            
                    <div class="logo"><img src="../img/logo1.png" width="225"></div>


                    <form method="post" action="sections/addPHP.php">

                        <fieldset class="fld_anketa">
                            <legend style="margin-left: -65px">Номер телефона</legend>
                            <input class="intp_aketa" type="text" name="phoneClient" required>
                        </fieldset>
                        

                        
                        <div class="text_date">Дата записи</div>
                        <fieldset class="fld_anketa" style="background-color: white;">
                            <legend style="margin-left: -80px; color: white">.</legend>
                            <input class="intp_date" type="date" name="dateReg" required>
                        </fieldset>
                        
                        <br>
                        
                        <div class="text_time">Время записи: 
                            <select class="inpt_time" name="formTime" required>
                            <option selected="selected" value="12:00">12:00</option>
                            <option value="14:00">14:00</option>
                            <option value="16:00">16:00</option>
                            <option value="18:00">18:00</option>
                            <option value="20:00">20:00</option>
                        </select>
                        </div>
                        
                        <br><br>
                        
                        <div class="text_time">Вид услуги: 
                            <select class="inpt_time" name="formService" required>
                            <option selected="selected" value="Татуировка">Татуировка</option>
                            <option value="Удаление татуировки">Удаление татуировки</option>
                        </select>
                        </div>
                        
                        <br><br>
                        
                        <div class="text_time">Мастер: 
                            <select class="inpt_time" name="formMaster" required>
                            <option selected="selected" value="">Выберите мастера</option>
                            <option value="Александр Песок">Александр Песок</option>
                            <option value="Павел Костылев">Павел Костылев</option>
                            <option value="Михаил Кузьменко">Михаил Кузьменко</option>
                            <option value="Алексей Сильченко">Алексей Сильченко</option>
                            <option value="Алена Избышева">Алена Избышева</option>
                        </select>
                        </div>

                        <br><div class="box_butt" style="text-align: center;"><input type="submit" class="butt_enter" value="Записаться"></div>

                    </form>
                </div>
            ';}
        ?>
    </body>
</html>