<?php
session_start();
set_include_path(dirname(__FILE__) . '/../');

$route = explode("?", $_SERVER["REQUEST_URI"])[0];
$method = strtolower($_SERVER["REQUEST_METHOD"]);

require_once 'libraries/auth.php';
require_once 'controllers/userManagement.php';
require_once 'controllers/articleManagement.php';

switch($route) {
    case "/":
        viewArticlesController();
    break;

    case "/register":
        registerController();
    break;

    case "/login":
        loginController();
    break;

    case "/logout":
        logoutController();
    break;

    case "/add_article":
      if(isLoggedIn()){
        addArticleController();
      } else {
        loginController();
      }
    break;

    case "/delete_article":
      if(isLoggedIn()){
        deleteArticleController();
      } else {
        loginController();
      }
    break;

    case "/update_article":
      if(isLoggedIn()){
        if($method == "get"){
          editArticleController();  
        } else {
          updateArticleController();
        }
      } else {
        loginController();
      }
    break;

    default:
      echo "404";
  }
