<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Личный кабинет</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/OnlineShop/templates/css/main-style.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/OnlineShop/templates/css/filters.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/OnlineShop/templates/css/cabinet.css">
        <style>
            body {
                background-image: url(http://localhost/OnlineShop/templates/images/body_bg_image.png);
                background-position: center left;
                background-repeat: repeat;
                background-attachment: scroll;
                background-color: #FAFAFA;
            }
            #wrapper {
                width: 100%;
                height: 600px;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            <div id="middle" style="background-color: white; margin-top: 180px; padding-top: 5px; padding-bottom: 5px;">
                <div class="options-form">
                    <div class="links fl">
                        <a href="/OnlineShop/"><span style="font-weight: bold;">Вернуться в магазин</span></a>
                    </div>
                    <div class="logout-div fr">
                        <?php echo $user['Name']; ?>
                        (
                        <a href="/OnlineShop/user/logout" class="links">Выход</a>
                        )
                    </div>
                </div>

                <div class="right-title" style="margin:25px 15px; font-weight: bold;">
                    Управление пользователями.    
                </div>
                <div class="register-form" style="margin-bottom: 0px; border-bottom: 0px; padding: 5px 15px; color: #333333; font-weight: bold;">
                    <?php if ($user['Role'] == 1) {?>
                        <div style="float: left; margin-right: 30px; "><a href="/OnlineShop/admin/users/add" style="font-weight: normal; color: #333333;">Добавить пользователя</a></div>
                        <div style="float: left; margin-right: 30px;"><a href="/OnlineShop/admin/users/edit" style="font-weight: bold; color: #333333;">Редактировать пользователя</a></div>
                    <?php } ?>
                    <div style="float: left; margin-right: 30px; "><a href="/OnlineShop/admin/products/add" style="font-weight: normal; color: #333333;">Добавить продукт</a></div>
                    <div style="float: left; margin-right: 30px;"><a href="/OnlineShop/admin/products/edit" style="font-weight: normal; color: #333333;">Редактировать продукты</a></div>
                    <div style="float: left; margin-right: 30px;"><a href="/OnlineShop/admin/orders" style="font-weight: normal; color: #333333;">Заказы</a></div>
                </div>                
                <div class="register-form" style="margin-top: 0px; margin-bottom: 0px;">
                    <?php if ($result): 
                            echo '<p style="background-color: green; color: black;">Пользователь редактирован!</p>';
                          endif; ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                            <div style="background-color: #f3c7c7; color: #c7271f;padding: 5px 5px; margin-bottom: 15px;">
                                <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li> - <?php echo $error; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                    <?php endif; ?>
                    <div style=" width: 100%; height: 30px; padding-top: 10px; margin-bottom: 20px;">
                       <div class="reg-label" style="float:left; font-weight: bold; font-size: 100%; color: #1D96E2; margin-right: 266px;"> <?php echo $name . ' ' .$surname; ?> </div>
                   </div>                      
                    <form action='/OnlineShop/admin/users/edit/<?php echo $viewedUser['User_ID']; ?>' method='post'>
                        <div style=" width: 100%; height: 30px; padding-top: 10px;">
                           <div class="reg-label" style="float:left; font-weight: bold; margin-right: 217px;">Имя:</div>
                           <div class="reg-label" style="float: left; margin-right: 150px;"><input style="width: 150px;" type="text" name="userName" value='<?php echo $name; ?>'></div>
                       </div> 
                        <div style=" width: 100%; height: 30px; padding-top: 10px;">
                           <div class="reg-label" style="float:left; font-weight: bold; margin-right: 184px;">Фамилия:</div>
                           <div class="reg-label" style="float: left; margin-right: 150px;"><input style="width: 150px;" type="text" name="userSurname" value='<?php echo $surname; ?>'></div>
                       </div>      
                        <div style=" width: 100%; height: 30px; padding-top: 10px;">
                           <div class="reg-label" style="float:left; font-weight: bold; margin-right: 203px;">E-mail:</div>
                           <div class="reg-label" style="float: left; margin-right: 150px;"><input style="width: 150px;" type="text" name="userEmail" value='<?php echo $email; ?>'></div>
                       </div>      
                        <div style=" width: 100%; height: 30px; padding-top: 10px;">
                           <div class="reg-label" style="float:left; font-weight: bold; margin-right: 184px;">Телефон:</div>
                           <div class="reg-label" style="float: left; margin-right: 150px;"><input style="width: 150px;" type="text" name="userPhone" value='<?php echo $phone; ?>'></div>
                       </div>       
                        <div style=" width: 100%; height: 30px; padding-top: 10px;">
                           <div class="reg-label" style="float:left; font-weight: bold; margin-right: 200px;">Адрес:</div>
                           <div class="reg-label" style="float: left; margin-right: 150px;"><input style="width: 150px;" type="text" name="userAddress" value='<?php echo $address; ?>'></div>
                       </div>   
                        <div style=" width: 100%; height: 30px; padding-top: 10px;">
                           <div class="reg-label" style="float:left; font-weight: bold; margin-right: 193px;">Пароль:</div>
                           <div class="reg-label" style="float: left; margin-right: 150px;"><input style="width: 150px;" type="text" name="userPassword" value='<?php echo $password; ?>'></div>
                        </div>
                        <div style=" width: 100%; height: 30px; padding-top: 10px;">
                           <div class="reg-label" style="float:left; font-weight: bold; margin-right: 208px;">Роль:</div>   
                           <div class="reg-label" style="float: left; margin-right: 150px;"><input style="width: 150px;" type="text" name="userRole" value='<?php echo $role; ?>'></div>
                        </div>
                        <div style=" margin-top: 20px; width: 100%; height: 30px; padding-top: 10px;">
                           <div class="reg-label" style="float:left; font-weight: bold; margin-right: 226px;"><input style="width: 150px;" type="submit" name="submitEditUser" value='РЕДАКТИРОВАТЬ' class="add_to_cart_btn"></div>
                           <div class="reg-label" style="float:left; font-weight: bold; margin-right: 196px;"><input style="width: 150px;" type="submit" name="submitDeleteUser" value='УДАЛИТЬ' class="add_to_cart_btn"></div>
                       </div>                         
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>