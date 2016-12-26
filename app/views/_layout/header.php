<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?=isset($data['title']) ? $data['title'] : '';?></title>
        <link rel="stylesheet" type="text/css" href="/MVC/public/css/vendors/plugins.css">
        <link rel="stylesheet" type="text/css" href="/MVC/public/css/style.css">
    </head>
    <body>
        <div class="header">
            <div class="header-content">
                <h1>LB PHP - MVC</h1>
            </div>            
        </div>
        <div class="main-content">
            <div style="background-color: #fff">
                <a href="<?=DIRECTORY.'home/index';?>">Index</a>
                <a href="<?=DIRECTORY.'home/test/1';?>">test</a> 
            </div>
            


