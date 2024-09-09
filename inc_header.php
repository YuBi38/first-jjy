<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $g_title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
    <?php
    if(isset($js_array)){

        foreach($js_array AS $var) {
          echo '<script src="'.$var.'?v='. date('YMdHis') . '"></script>'.PHP_EOL;
        }
      }
    ?>

</head>
<body>
    <div class="contrainer">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
              <img src="images/logo.svg" style="width:2rem" class="me-2">
              <span class="fs-4">회원가입 기능 구현</span>
            </a>

            
      
            <ul class="nav nav-pills">
              <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Home</a></li>
              <li class="nav-item"><a href="#" class="nav-link">자기소개</a></li>
              <li class="nav-item"><a href="#" class="nav-link">회원가입</a></li>
              <li class="nav-item"><a href="#" class="nav-link">게시판</a></li>
              <li class="nav-item"><a href="#" class="nav-link">로그인</a></li>
            </ul>
            </header>