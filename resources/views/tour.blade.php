<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аслыкуль</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="{{ asset('/style/style.css')}}"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <header class="container">
    <div class="header_main">
        <p class="elemant-Logo">Аслыкуль</p>
            <div class="nav_element">
                <a>Информация</a>
                 <a>Туры</a>   
                 <a>Наследие</a>
             </div>
        <a>Меню</a>
    </div>
    </header>
    <div class="card mb-3" style="max-width: 1400px; margin: 0 auto; margin-top: 150px ; background-color: none;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="../img/{{$tour->image}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title" style="color: black; font-weight: 900;">{{$tour["title"]}}</h5>
              <p class="card-text" style="color: black;">{{$tour["description"]}}</p>
              <p class="card-text"><small class="text-body-secondary" style="color: black;">{{$tour["updated_at"]}}</small></p>
            </div>
          </div>
        </div>
      </div>
   <footer class="container" style="margin-top:300px; margin-bottom:100px;">
    <div class="upper_basement">
          <p class="elemant-Logo">Аслыкуль</p>
              <div class="upper_button">
                 <p>Готовы к Путешествию?</p>
                 <button type="button" class="btn btn-primary">Вперед!</button>
             </div>
    </div>
    
        <div class="lower_basement">
            <div>
                 <p style="font-weight: 900;">Заинтересовало?
                    <br>
                     Подпишись на <br> рассылку</p>
                 <input type="text" name="email" placeholder="email.adress" class="input_email">  <button type="button" class="btn btn-outline-info" style="background-color:  #008CC8 ; color:black">></button>
            </div>
            <div class="footer_navigation">
                <p>Сервис</p>
                <a>Туры</a>
                <a>Записаться</a>
            </div>
            <div class="footer_navigation">
                <p>О нас</p>
                <a>Наша история</a>
                <a>Гарантии</a>
                <a>Наша команда</a> 
            </div>
            <div class="footer_navigation">
                <p>Помощь</p>
                <a>Контакты</a>
            </div>
        </div>
   </footer>
</body>
</html>