<!--SLIDE SHOW-->
<div class="container-fluid" id="slide">
    <div class="row">
        <!--Slides -->
        <ul>

          <?php

              $server =  Route::backRoute();
              $slide = SlideController::ctrShowSlide();

              foreach ($slide as $key => $value) {
                
                $styleImgProduct = json_decode($value["styleImgProduct"], true);
                $styleTextSlide = json_decode($value["styleTextSlide"], true);
                $title1 = json_decode($value["title1"], true);
                $title2 = json_decode($value["title2"], true);
                $title3 = json_decode($value["title3"], true);





              echo '<li>
                  <img src="'.$server.$value["imgFont"].'">
                  <div class="slideOptions '.$value["typeSlide"].'">';

                    if($value["imgProduct"] != "")
                    {
                      echo '<img class="img-product" src="'.$server.$value["imgProduct"].'" style="top:'.$styleImgProduct["top"].'; right:'.$styleImgProduct["right"].'; width:'.$styleImgProduct["width"].'; left:'.$styleImgProduct["left"].'">';
                    }


                     
                     echo  '<div class="textSlide"  style="top:'.$styleTextSlide["top"].'; left:'.$styleTextSlide["left"].'; width:'.$styleTextSlide["width"].'; right:'.$styleTextSlide["right"].';">
                            <h1 style="color: '.$title1["color"].';"> '.$title1["text"].'</h1>
                            <h2 style="color: '.$title2["color"].';"> '.$title2["text"].' </h2>
                            <h3 style="color: '.$title3["color"].';"> '.$title3["text"].'</h3>
                            <a href="'.$value["url"].'">
                                 '.$value["btnShow"].'
                              </a>
                        </div>
                    </div>
              </li>';
             }

          ?>

          
          </ul>
          <!---Pagination-->
          
          <ol id="pagination-slide">
              <li item="1"><span class="fa fa-circle"></span></li>
              <li item="2"><span class="fa fa-circle"></span></li>
              <li item="3"><span class="fa fa-circle"></span></li>
              <li item="4"><span class="fa fa-circle"></span></li>
          </ol>


          <!---Arrows-->
          <div class="arrow" id="backward"><span class="fa fa-chevron-left"></span></div>
          <div class="arrow" id="forward"><span class="fa fa-chevron-right"></span></div>
    </div>
</div>

<center>
  <button id="btnSlide" class="backColor">
    <i class="fa fa-angle-up"></i>
  </button>
</center>