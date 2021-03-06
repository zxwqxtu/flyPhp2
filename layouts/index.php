<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- 新 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
        <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
        <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    </head>
    <body>
        <!-- Header -->
            <?php include __DIR__.'/head.php';?>
        <!-- main -->
        <div class="container">
            <?php echo $this->viewContent;?>
        </div>
        <footer class="text-center">
            <?php include __DIR__.'/footer.php';?>
        </footer>
    </body>

</html>
