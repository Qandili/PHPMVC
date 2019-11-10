<?php
//*****************Login Routes ********************
Route::set('Login',function(){
    AboutUs::Index('Login.php');
});
Route::set('vlogin',function (){
    $login=new LoginController();
    $login->login();
});
Route::set('logout',function (){
    $login=new LoginController();
    $login->logout();
});
//**************************************************
Route::set('home',function(){
    AboutUs::Index('Home.php');
});
Route::set('about-us',function(){
    AboutUs::Index('aboutUs.php');
});
Route::set('contact-us',function(){
    ContactUs::Index('ContactUs.php');
});

?>