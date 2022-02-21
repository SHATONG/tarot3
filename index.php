<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tarot Cards Guidebooks</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<h1>Tarot Cards Guidebooks</h1><h4> by shatCrystal</h4>
<div class="row">
            <?php
            // 1.导入文件处理
            require "dir.php";
            $file = dir_list('img');
            for($i=0; $i<count($file); $i++){
                $row = $file[$i];
                $name1 = explode('.', $row)[0];
                $name = preg_replace('/([\x80-\xff]*)/', '', $name1);
                $name = str_replace('(', '', $name);
                $name = str_replace(')', '', $name);
                $name = str_replace('1', '', $name);
                $name = str_replace('_', ' ', $name);
                $name = strtolower($name);

                echo "<a href='gb\\$name1.pdf'><div class='col-md-1' style='height: 270px;'>";
                echo "<div class='thumbnail' style='border: 0px'>";
                echo "<img src='img\\$row' alt='$row' style='height: 100px;width: 100px' loading='lazy'>";
                echo "<div class='caption'>";
                echo "<h4 style='font-weight: bolder;font-size: small;text-align: center;'>$name</h4>";
                echo "<p></p>";
                echo "</div>";
                echo "</div>";
                echo "</div></a>";
            }
            ?>
</div>
</body>
</html>