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
    <section class="container caption_main">
            <div class="element_social">
                <span>Мы есть в </span>
                <img src="img/vk.png" alt="">
                <img src="img/telegram.png" alt="">
                <img src="img/odnoklas.png" alt="">
            </div>
                <div class="caption">
                    <div class="inscription">
                        <div class="rectangle"></div>
                         <p > Исcледуй красоту родной природы </p> 
                    </div>
                         <span> 
                              <span style="font-weight: 900;">Путешествие</span> <br>
                                  Волшебный Аслыкуль </span>    
                </div>
                  
     </section>
     
     <section>
<div class="container">
    <div class="section_element_1">
        <img alt="" src="img/image 1.png">
        <div class="text_drive">
        <div class="inscription" style="margin-bottom: 20px;">
                        <div class="rectangle"></div>
                         <p> Немного о поездке </p> 
                         </div>
                         <h2 class="drive_caption">Хотите насладиться волшебством природы?</h2>
                         <p style="font-size: 14px; font-weight:100; line-height: 30px;">
                         Озеро Аслыкуль (или Асылыкуль, Асликуль) – самое большое по площади в Республике Башкортостан. С этим красивым водоёмом связано много интересных фактов и интригующих загадок. Они придают и без того живописному озеру особенное очарование и делают его одним из самых удивительных водоёмов Урала.
                         </p>
                    <a style="color: #008CC8; font-size:20px; font-weight: bold;" href="">Читать подробнее →</a>
        </div>
    </div>
</div>
     </section>
     <section>
        <div class="container section_slider">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
 
  </div>



  <div class="carousel-inner">
  @foreach ($tour as $item)
    <div class="carousel-item active" >
      
      <img src="img/{{$item->image}}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block" style="padding-bottom: 120px;">
      <div class="inscription_tur">
                        <div class="rectangle"></div>
                         <p > Тур</p> 
                         <div class="rectangle"></div>
                    </div>
                    
        <h5 style="font-size: 50px; font-weight:900;">{{$item->title}}</h5>
        <p>{{$item->description}}</p>
        <a style="color: #008CC8; font-size:20px; font-weight: bold;" href="/tours/{{$item->id}}/">Читать подробнее →</a>  
    </div>

    </div>
    @endforeach
</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
     </section>
     <section>
     <div class="container" style="margin-top: 600px;">
    <div class="section_element_1">
      
        <div class="text_drive">
        <div class="inscription" style="margin-bottom: 20px;">
                        <div class="rectangle"></div>
                         <p> Наследие нашей природы </p> 
                         </div>
                         <h2 class="drive_caption">Наше маленькое море  </h2>
                         <p style="font-size: 14px; font-weight:100; line-height: 30px;">
                         Вода в Аслыкуле немного солоноватая (1887 мг/л), сульфатно-натриевая. Эта особенность подмечена и в названии озера. В переводе с башкирского языка оно означает «солоноватое озеро». Впрочем, есть и другие версии происхождения названия. В зависимости от башкирских слов, которые могли лечь в основу, есть следующие трактовки: горькое, развалистое, прекрасное, сердитое, с двойным дном. 
                         </p>
                         <p style="font-size: 14px; font-weight:100; line-height: 30px;">
                         Вода в озере прозрачная, имеет светло-бирюзовый оттенок. А при купании ноги и тело кажутся неестественно синими. Это связано с содержащимися в воде примесями. В некоторой литературе встречается смелая версия, что Аслыкуль может быть реликтовым остатком древнего мелководного моря, которое в прошлом было в предгорьях Урала. Даже воздух на озере напоминает морской. Во время сильного дождя или тумана озеро Аслыкуль действительно кажется настоящим, безбрежным морем.
                         </p>
                    <a style="color: #008CC8; font-size:20px; font-weight: bold;">Читать подробнее →</a>
        </div>
        <img alt="" src="img/image2.png">
    </div> 
</div>
     </section>
   <footer class="container" style="margin-top:300px; margin-bottom:100px;">
    <div class="upper_basement">
          <p class="elemant-Logo">Аслыкуль</p>
              <div class="upper_button">
                 <p>Готовы к Путешествию?</p>
                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Вперед!</button>

                 
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Заполните заявку!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/ApplicationController/new_applications">
        @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label" style="color: black;">Имя</label>
            <input type="text" class="form-control" id="recipient-name" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label" style="color: black;">Фамилия:</label>
            <input type="text" class="form-control" id="recipient-name" name="surname">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label" style="color: black;">Выберите тур!</label>
            <select class="form-select" name="tour_id">
                    @foreach ($tour as $item)
                        <option value="{{$item->id}}" style="color:black">{{$item->title}}</option>
                        @endforeach
                      </select>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label" style="color: black;">Количество человек</label>
            <input type="text" class="form-control" id="recipient-name" name="amount">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="submit" class="btn btn-primary">Отправить заявку</button>
      </div>
      </form>
    </div>
  </div>
</div>  


             </div>
    </div>
   <hr>
        <div class="lower_basement">
            <div>
                 <p style="font-weight: 900;">Заинтересовало?
                    <br>
                     Подпишись на <br> рассылку</p>
                     <form method="POST" action="/enroll">
                      @csrf
                 <input type="email" name="email" id="email" placeholder="email.adress" class="input_email"> 
                  <button type="submit" class="btn btn-outline-info" style="background-color:  #008CC8 ; color:black">></button>
                 </form>
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

<!-- public function new_subscription (Request $request) {
        $subscription=$request->all();
        subscription::create([
            "email"=> $subscription["email"],
        ]);

        return redirect("/"); -->
        <!-- protected $fillable=[
        "email"
    ]; -->