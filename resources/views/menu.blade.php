@extends('layout', ['title'=> 'Home'])

@section('page-content')
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class="price"><h6>৳435</h6></div>
                            <div class='info'>
                              <h1 class='title'>Chocolate Cake</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                              </div>
                              
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class='card card2'>
                            <div class="price"><h6>৳399</h6></div>
                            <div class='info'>
                              <h1 class='title'>Midway Pancake</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6>৳135</h6></div>
                            <div class='info'>
                              <h1 class='title'>Tall Midway Bread</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class="price"><h6>৳230</h6></div>
                            <div class='info'>
                              <h1 class='title'>Blueberry CheeseCake</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class="price"><h6>৳670</h6></div>
                            <div class='info'>
                              <h1 class='title'>Midway Cup Cake</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6>৳750</h6></div>
                            <div class='info'>
                              <h1 class='title'>Klassic Cake</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->


    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Midway Week</h6>
                        <h2>This Week’s Special Meal Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="{{ asset('assets/images/tab-icon-01.png')}}" alt="">Breakfast</a></li>
                                          <li><a href='#tabs-2'><img src="{{ asset('assets/images/tab-icon-02.png')}}" alt="">Lunch</a></a></li>
                                          <li><a href='#tabs-3'><img src="{{ asset('assets/images/tab-icon-03.png')}}" alt="">Dinner</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-01.png')}}" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳350</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-02.png')}}" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳90</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-03.png')}}" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳160</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-04.png')}}" alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳25</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-05.png')}}" alt="">
                                                            <h4>Dollma Pire</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳190</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-06.png')}}" alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳110</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-04.png')}}" alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳25</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-05.png')}}" alt="">
                                                            <h4>Dollma Pire</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳190</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-06.png')}}" alt="">
                                                            <h4>Omelette & Cheese</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳110</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-01.png')}}" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳350</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-02.png')}}" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳150</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-03.png')}}" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳180</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-05.png')}}" alt="">
                                                            <h4>Eggs Omelette</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳25</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-03.png')}}" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳90</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-02.png')}}" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳160</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-01.png')}}" alt="">
                                                            <h4>Fresh Chicken Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳350</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-02.png')}}" alt="">
                                                            <h4>Orange Juice</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳90</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="{{ asset('assets/images/tab-item-03.png')}}" alt="">
                                                            <h4>Fruit Salad</h4>
                                                            <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                            <div class="price">
                                                                <h6>৳160</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>   
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** --> 
    
@endsection