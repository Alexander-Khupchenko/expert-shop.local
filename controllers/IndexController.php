<?php

/**
 * Контроллер главной страницы
 * 
 */

// подключаем модель
include_once '../model/CategoriesModel.php';
include_once '../model/ProductsModel.php'; 

/**
 * Формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty){
    
   $rsCategories = getAllMainCatsWithChildren();
   $rsProducts = getLastProducts(16);
   
   $smarty->assign('pageTitle', 'Главная страница сайта');
   $smarty->assign('rsCategories', $rsCategories);
   $smarty->assign('rsProducts', $rsProducts);
    
   loadTemplate($smarty, 'header');
   loadTemplate($smarty, 'index');
   loadTemplate($smarty, 'footer');
}

