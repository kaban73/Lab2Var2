<?php
    session_start();

    if (!$_SESSION['user']) {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/slider.css">
    <link rel="stylesheet" href="styles/accordeon.css">
    <title>Главная страница</title>
</head>
<body>

    <div class="content_backrgound ">
        <div class="content">
            <div class="row_content">

                <div class="zastavka">
                    <img src="<?php echo $_SESSION['user']['image'] ?>" alt="">
                </div>

                <div class="header">
                    <div class="nav_panel">
                        <div class="nav_el">
                            <a href="#">HOME</a>
                        </div>
                        <div class="nav_el">
                            <a href="#">HOME</a>
                        </div>
                        <div class="nav_el">
                            <a href="#">HOME</a>
                        </div>
                        <div class="nav_el">
                            <a href="#">HOME</a>
                        </div>
                        <div class="nav_el">
                            <a href="#">HOME</a>
                        </div>
                        <div class="nav_el">
                            <a href="#">HOME</a>
                        </div>
                        <div class="nav_el nav_el_logOut">
                            <a href="vendor/logout.php">LOGOUT</a>
                        </div>
                    </div>
                </div>

                <div class="content_content">
                    <div class="row_content_content">
                        <div class="content_block_1">
                            <div class="content_block_1_row">
                                <div class="hello">
                                    <div class="row_hello">
                                        <div class="image_hello">
                                            <img src="images/hello.jpg" alt="">
                                        </div>
                                        <div class="text_hello">
                                            <div class="title_hello">
                                                Hello!
                                            </div>
                                            <div class="subtitle_hello">
                                                tationem laborum, impedit iusto consectetur, repudiandae pariatur fugiat, nostrum quis labore!
                                            </div>
                                            <div class="text_text_hello">
                                                <p>pedit fugit amet asperiores aliquam est rerum. Voluptatibus porro beatae, eum perspiciatis aut provident odit natus ut. Inventore rerum dolor non nihil molestias illum ducimus, dolorum cum perferendis eveniet saepe, cupiditate aut atque magnam.</p>
                                                <p>nderit tempore harum nulla aut quia? Aperiam, odio quos. Vero eligendi dolore similique in est mollitia quis expedita ex itaque reprehenderit deserunt aperiam sapiente, fuga sequi a provident dolor distinctio labore quibusdam aliquam.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="events">
                                    <div class="row_events">
                                        <div class="title_events">
                                            Latest events
                                        </div>
                                        <div class="block_events">
                                            <div class="scroll_events">

                                                <!--SLIDER -->
                                                <div class="events_slider_container swiper_container">
                                                    <div class="events_slider_wrapper swiper-wrapper">
                                                        <div class="events_slider_slide swiper-slide">
                                                            <div class="row_slide">
                                                                <div class="card_image">
                                                                    <div class="row_card_image">
                                                                        <div class="card_image_image">
                                                                            <img src="images/event_1.png" alt="">
                                                                        </div>
                                                                        <div class="card_image_date">
                                                                            <div class="card_image_date_date">
                                                                                <div class="date_num">24</div>
                                                                                <div class="date_month">SEPT</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="events_slider_text">
                                                                    <div class="events_slider_text_title">
                                                                        Aasdas daasd asdas!
                                                                    </div>
                                                                    <div class="events_slider_text_text">
                                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure maiores nisi nam animi pariatur nesciunt
                                                                        odio ad illum esse consequatur, illo voluptatem, adipisci sed reiciendis fuga praesentium expedita cum minus.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="events_slider_slide swiper-slide">
                                                            <div class="row_slide">
                                                                <div class="card_image">
                                                                    <div class="row_card_image">
                                                                        <div class="card_image_image">
                                                                            <img src="images/event_1.png" alt="">
                                                                        </div>
                                                                        <div class="card_image_date">
                                                                            <div class="card_image_date_date">
                                                                                <div class="date_num">24</div>
                                                                                <div class="date_month">SEPT</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="events_slider_text">
                                                                    <div class="events_slider_text_title">
                                                                        Aasdas daasd asdas!
                                                                    </div>
                                                                    <div class="events_slider_text_text">
                                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure maiores nisi nam animi pariatur nesciunt
                                                                        odio ad illum esse consequatur, illo voluptatem, adipisci sed reiciendis fuga praesentium expedita cum minus.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="events_slider_slide swiper-slide">
                                                            <div class="row_slide">
                                                                <div class="card_image">
                                                                    <div class="row_card_image">
                                                                        <div class="card_image_image">
                                                                            <img src="images/event_1.png" alt="">
                                                                        </div>
                                                                        <div class="card_image_date">
                                                                            <div class="card_image_date_date">
                                                                                <div class="date_num">24</div>
                                                                                <div class="date_month">SEPT</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="events_slider_text">
                                                                    <div class="events_slider_text_title">
                                                                        Aasdas daasd asdas!
                                                                    </div>
                                                                    <div class="events_slider_text_text">
                                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure maiores nisi nam animi pariatur nesciunt
                                                                        odio ad illum esse consequatur, illo voluptatem, adipisci sed reiciendis fuga praesentium expedita cum minus.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="events_slider_slide swiper-slide">
                                                            <div class="row_slide">
                                                                <div class="card_image">
                                                                    <div class="row_card_image">
                                                                        <div class="card_image_image">
                                                                            <img src="images/event_1.png" alt="">
                                                                        </div>
                                                                        <div class="card_image_date">
                                                                            <div class="card_image_date_date">
                                                                                <div class="date_num">24</div>
                                                                                <div class="date_month">SEPT</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="events_slider_text">
                                                                    <div class="events_slider_text_title">
                                                                        Aasdas daasd asdas!
                                                                    </div>
                                                                    <div class="events_slider_text_text">
                                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure maiores nisi nam animi pariatur nesciunt
                                                                        odio ad illum esse consequatur, illo voluptatem, adipisci sed reiciendis fuga praesentium expedita cum minus.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="events_slider_slide events_slider_slide_last swiper-slide" style="background-color: transparent;">

                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <!-- ACCORDEON 
                                                <div id="accordion" class="accordion">
                                                    <div class="accordion__item">
                                                      <div class="accordion__header">
                                                        <div class="card_event">
                                                            <div class="row_card_event">
                                                                <div class="card_image">
                                                                    <div class="row_card_image">
                                                                        <div class="card_image_image">
                                                                            <img src="images/event_1.png" alt="">
                                                                        </div>
                                                                        <div class="card_image_date">
                                                                            <div class="card_image_date_date">
                                                                                <div class="date_num">24</div>
                                                                                <div class="date_month">SEPT</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card_text">
                                                                    <div class="card_text_title" style="    color: #dfccbc;
                                                                    font-size: 20px;
                                                                    font-weight: 300;">Adsadasdas dsadas dasdasd dsasdas!</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      </div>
                                                      <div class="accordion__body">
                                                        <div class="accordion__content" style="    color: #938b9b;
                                                        font-size: 15px;
                                                        font-weight: 200;">
                                                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                          fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                          fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                          fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                          fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="accordion__item">
                                                        <div class="accordion__header">
                                                          <div class="card_event">
                                                              <div class="row_card_event">
                                                                  <div class="card_image">
                                                                      <div class="row_card_image">
                                                                          <div class="card_image_image">
                                                                              <img src="images/event_1.png" alt="">
                                                                          </div>
                                                                          <div class="card_image_date">
                                                                              <div class="card_image_date_date">
                                                                                  <div class="date_num">24</div>
                                                                                  <div class="date_month">SEPT</div>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="card_text">
                                                                      <div class="card_text_title" style="    color: #dfccbc;
                                                                      font-size: 20px;
                                                                      font-weight: 300;">Adsadasdas dsadas dasdasd dsasdas!</div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                        </div>
                                                        <div class="accordion__body">
                                                          <div class="accordion__content" style="    color: #938b9b;
                                                          font-size: 15px;
                                                          font-weight: 200;">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                            fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                            fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                            fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                            fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion__item">
                                                        <div class="accordion__header">
                                                          <div class="card_event">
                                                              <div class="row_card_event">
                                                                  <div class="card_image">
                                                                      <div class="row_card_image">
                                                                          <div class="card_image_image">
                                                                              <img src="images/event_1.png" alt="">
                                                                          </div>
                                                                          <div class="card_image_date">
                                                                              <div class="card_image_date_date">
                                                                                  <div class="date_num">24</div>
                                                                                  <div class="date_month">SEPT</div>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="card_text">
                                                                      <div class="card_text_title" style="    color: #dfccbc;
                                                                      font-size: 20px;
                                                                      font-weight: 300;">Adsadasdas dsadas dasdasd dsasdas!</div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                        </div>
                                                        <div class="accordion__body">
                                                          <div class="accordion__content" style="    color: #938b9b;
                                                          font-size: 15px;
                                                          font-weight: 200;">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                            fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                            fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                            fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                            fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion__item">
                                                          <div class="accordion__header">
                                                            <div class="card_event">
                                                                <div class="row_card_event">
                                                                    <div class="card_image">
                                                                        <div class="row_card_image">
                                                                            <div class="card_image_image">
                                                                                <img src="images/event_1.png" alt="">
                                                                            </div>
                                                                            <div class="card_image_date">
                                                                                <div class="card_image_date_date">
                                                                                    <div class="date_num">24</div>
                                                                                    <div class="date_month">SEPT</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card_text">
                                                                        <div class="card_text_title" style="    color: #dfccbc;
                                                                        font-size: 20px;
                                                                        font-weight: 300;">Adsadasdas dsadas dasdasd dsasdas!</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                          </div>
                                                          <div class="accordion__body">
                                                            <div class="accordion__content" style="    color: #938b9b;
                                                            font-size: 15px;
                                                            font-weight: 200;">
                                                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                              fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                              fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                              fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                              fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                            </div>
                                                          </div>
                                                    </div>
                                                    <div class="accordion__item">
                                                            <div class="accordion__header">
                                                              <div class="card_event">
                                                                  <div class="row_card_event">
                                                                      <div class="card_image">
                                                                          <div class="row_card_image">
                                                                              <div class="card_image_image">
                                                                                  <img src="images/event_1.png" alt="">
                                                                              </div>
                                                                              <div class="card_image_date">
                                                                                  <div class="card_image_date_date">
                                                                                      <div class="date_num">24</div>
                                                                                      <div class="date_month">SEPT</div>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                      <div class="card_text">
                                                                          <div class="card_text_title" style="    color: #dfccbc;
                                                                          font-size: 20px;
                                                                          font-weight: 300;">Adsadasdas dsadas dasdasd dsasdas!</div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                            </div>
                                                            <div class="accordion__body">
                                                              <div class="accordion__content" style="    color: #938b9b;
                                                              font-size: 15px;
                                                              font-weight: 200;">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                                fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                                fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                                fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                                fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                              </div>
                                                            </div>
                                                    </div>
                                                    <div class="accordion__item">
                                                              <div class="accordion__header">
                                                                <div class="card_event">
                                                                    <div class="row_card_event">
                                                                        <div class="card_image">
                                                                            <div class="row_card_image">
                                                                                <div class="card_image_image">
                                                                                    <img src="images/event_1.png" alt="">
                                                                                </div>
                                                                                <div class="card_image_date">
                                                                                    <div class="card_image_date_date">
                                                                                        <div class="date_num">24</div>
                                                                                        <div class="date_month">SEPT</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card_text">
                                                                            <div class="card_text_title" style="    color: #dfccbc;
                                                                            font-size: 20px;
                                                                            font-weight: 300;">Adsadasdas dsadas dasdasd dsasdas!</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                              </div>
                                                              <div class="accordion__body">
                                                                <div class="accordion__content" style="    color: #938b9b;
                                                                font-size: 15px;
                                                                font-weight: 200;">
                                                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                                  fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                                  fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                                  fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati consequuntur autem, mollitia rem aperiam
                                                                  fugit eos officia vel quidem quis officiis dolores porro beatae veritatis tenetur. Culpa ex libero a!
                                                                </div>
                                                              </div>
                                                    </div>
                                                </div>
                                                -->


                                                <!-- BAZA
                                                <div class="row_scroll_events">
                                                    <div class="card_event">
                                                        <div class="row_card_event">
                                                            <div class="card_image">
                                                                <div class="row_card_image">
                                                                    <div class="card_image_image">
                                                                        <img src="images/event_1.png" alt="">
                                                                    </div>
                                                                    <div class="card_image_date">
                                                                        <div class="card_image_date_date">
                                                                            <div class="date_num">24</div>
                                                                            <div class="date_month">SEPT</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card_text">
                                                                <div class="card_text_title">ddsadasdas</div>
                                                                <div class="card_text_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque exercitationem doloremque iusto quo, commodi sint asperiores deleniti excepturi nulla eius.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card_event">
                                                        <div class="row_card_event">
                                                            <div class="card_image">
                                                                <div class="row_card_image">
                                                                    <div class="card_image_image">
                                                                        <img src="images/event_1.png" alt="">
                                                                    </div>
                                                                    <div class="card_image_date">
                                                                        <div class="card_image_date_date">
                                                                            <div class="date_num">24</div>
                                                                            <div class="date_month">sept</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card_text">
                                                                <div class="card_text_title">ddsadasdas</div>
                                                                <div class="card_text_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque exercitationem doloremque iusto quo, commodi sint asperiores deleniti excepturi nulla eius.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card_event">
                                                        <div class="row_card_event">
                                                            <div class="card_image">
                                                                <div class="row_card_image">
                                                                    <div class="card_image_image">
                                                                        <img src="images/event_1.png" alt="">
                                                                    </div>
                                                                    <div class="card_image_date">
                                                                        <div class="card_image_date_date">
                                                                            <div class="date_num">24</div>
                                                                            <div class="date_month">sept</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card_text">
                                                                <div class="card_text_title">ddsadasdas</div>
                                                                <div class="card_text_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque exercitationem doloremque iusto quo, commodi sint asperiores deleniti excepturi nulla eius.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card_event">
                                                        <div class="row_card_event">
                                                            <div class="card_image">
                                                                <div class="row_card_image">
                                                                    <div class="card_image_image">
                                                                        <img src="images/event_1.png" alt="">
                                                                    </div>
                                                                    <div class="card_image_date">
                                                                        <div class="card_image_date_date">
                                                                            <div class="date_num">24</div>
                                                                            <div class="date_month">sept</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card_text">
                                                                <div class="card_text_title">ddsadasdas</div>
                                                                <div class="card_text_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque exercitationem doloremque iusto quo, commodi sint asperiores deleniti excepturi nulla eius.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card_event">
                                                        <div class="row_card_event">
                                                            <div class="card_image">
                                                                <div class="row_card_image">
                                                                    <div class="card_image_image">
                                                                        <img src="images/event_1.png" alt="">
                                                                    </div>
                                                                    <div class="card_image_date">
                                                                        <div class="card_image_date_date">
                                                                            <div class="date_num">24</div>
                                                                            <div class="date_month">sept</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card_text">
                                                                <div class="card_text_title">ddsadasdas</div>
                                                                <div class="card_text_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque exercitationem doloremque iusto quo, commodi sint asperiores deleniti excepturi nulla eius.</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="content_block_2">
                            <div class="content_block_2_row">
                                <div class="music">
                                    <div class="row_music">
                                        <div class="music_title">
                                            Music tracks
                                        </div>
                                        <div class="music_list">
                                            <div class="row_music_list">
                                                <div class="music_element">
                                                    <div class="row_music_element">
                                                        <div class="music_element_play"><img src="images/play.png" alt=""></div>
                                                        <div class="music_element_name">track number one</div>
                                                        <div class="music_element_time">07:12</div>
                                                    </div>
                                                </div>
                                                <div class="music_element">
                                                    <div class="row_music_element">
                                                        <div class="music_element_play"><img src="images/play.png" alt=""></div>
                                                        <div class="music_element_name">track number one</div>
                                                        <div class="music_element_time">07:12</div>
                                                    </div>
                                                </div>
                                                <div class="music_element">
                                                    <div class="row_music_element">
                                                        <div class="music_element_play"><img src="images/play.png" alt=""></div>
                                                        <div class="music_element_name">track number one</div>
                                                        <div class="music_element_time">07:12</div>
                                                    </div>
                                                </div>
                                                <div class="music_element">
                                                    <div class="row_music_element">
                                                        <div class="music_element_play"><img src="images/play.png" alt=""></div>
                                                        <div class="music_element_name">track number one</div>
                                                        <div class="music_element_time">07:12</div>
                                                    </div>
                                                </div>
                                                <div class="music_element">
                                                    <div class="row_music_element">
                                                        <div class="music_element_play"><img src="images/play.png" alt=""></div>
                                                        <div class="music_element_name">track number one</div>
                                                        <div class="music_element_time">07:12</div>
                                                    </div>
                                                </div>
                                                <div class="music_element">
                                                    <div class="row_music_element">
                                                        <div class="music_element_play"><img src="images/play.png" alt=""></div>
                                                        <div class="music_element_name">track number one</div>
                                                        <div class="music_element_time">07:12</div>
                                                    </div>
                                                </div>
                                                <div class="music_element">
                                                    <div class="row_music_element">
                                                        <div class="music_element_play"><img src="images/play.png" alt=""></div>
                                                        <div class="music_element_name">track number one</div>
                                                        <div class="music_element_time">07:12</div>
                                                    </div>
                                                </div>
                                                <div class="music_element">
                                                    <div class="row_music_element">
                                                        <div class="music_element_play"><img src="images/play.png" alt=""></div>
                                                        <div class="music_element_name">track number one</div>
                                                        <div class="music_element_time">07:12</div>
                                                    </div>
                                                </div>
                                                <div class="music_element">
                                                    <div class="row_music_element">
                                                        <div class="music_element_play"><img src="images/play.png" alt=""></div>
                                                        <div class="music_element_name">track number one</div>
                                                        <div class="music_element_time">07:12</div>
                                                    </div>
                                                </div>
                                                <div class="music_element">
                                                    <div class="row_music_element">
                                                        <div class="music_element_play"><img src="images/play.png" alt=""></div>
                                                        <div class="music_element_name">track number one</div>
                                                        <div class="music_element_time">07:12</div>
                                                    </div>
                                                </div>
                                                <div class="music_element">
                                                    <div class="row_music_element">
                                                        <div class="music_element_play"><img src="images/play.png" alt=""></div>
                                                        <div class="music_element_name">track number one</div>
                                                        <div class="music_element_time">07:12</div>
                                                    </div>
                                                </div>
                                                <div class="music_element">
                                                    <div class="row_music_element">
                                                        <div class="music_element_play"><img src="images/play.png" alt=""></div>
                                                        <div class="music_element_name">track number one</div>
                                                        <div class="music_element_time">07:12</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="pictures">
                                    <div class="row_pictures">
                                        <div class="title_pictures">
                                            The Kabani
                                        </div>
                                        <div class="gallery_pictures">
                                            <div class="row_gallery_pictures">
                                                <div class="element_gallery">
                                                    <img src="images/gallery_picture.jpg" alt="">
                                                </div>
                                                <div class="element_gallery">
                                                    <img src="images/gallery_picture.jpg" alt="">
                                                </div>
                                                <div class="element_gallery">
                                                    <img src="images/gallery_picture.jpg" alt="">
                                                </div>
                                                <div class="element_gallery">
                                                    <img src="images/gallery_picture.jpg" alt="">
                                                </div>
                                                <div class="element_gallery">
                                                    <img src="images/gallery_picture.jpg" alt="">
                                                </div>
                                                <div class="element_gallery">
                                                    <img src="images/gallery_picture.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer">
            <div class="footer_container">
                <div class="row_footer">
                    <div class="authors_license">
                        <span class="block_1">asdas </span><span class="block_2">dasdas</span>
                    </div>
                    <div class="contacts">
                        <div class="row_contacts">
                            <div class="element_contacts">
                                <img src="images/vk.png" alt="">
                            </div>
                            <div class="element_contacts">
                                <img src="images/vk.png" alt="">
                            </div>
                            <div class="element_contacts">
                                <img src="images/vk.png" alt="">
                            </div>
                            <div class="element_contacts">
                                <img src="images/vk.png" alt="">
                            </div>
                            <div class="element_contacts">
                                <img src="images/vk.png" alt="">
                            </div>
                            <div class="element_contacts">
                                <img src="images/vk.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="scripts/script.js"></script>
    <!--ACCORDEON
        <script>
        new ItcAccordion(document.querySelector('.accordion'), {
          alwaysOpen: true
        });
      </script>
      -->
</body>
</html>