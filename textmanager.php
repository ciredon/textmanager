<html>
<head>
<title> Text manager</title>
<link rel="stylesheet" href="https://unpkg.com/mustard-ui@latest/dist/css/mustard-ui.min.css">
<style>
    .highlight {
        background: yellowgreen;
    }
</style>
</head>
<body>


<header style="height: 200px;">
<h1> Text manager</h1>
</header>
<br>
<div class="row">
    <div class="col col-sm-5">
        <div class="panel">
            <div class="panel-body">
                <form action="index.php" method="post">   
                <h2 class="panel-title">1.Get text</h2>
                    <input type="text" name="textUrl" value=""><br >
                    <button type="submit" name="action" value="fetch" class="button-primary align-center">Fetch text</button>
                <h2 class="panel-title">2.Find keywords</h2>
                    <input type="text" name="searchQuery" value=""><br >
                    <button type="submit" name="action" value="search" class="button-primary">Search text</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col col-sm-7" style="padding-left: 25px;">
                    
    </div>
</div>

</body>
</html>
