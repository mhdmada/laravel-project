@extends('layouts.app')


@section('content')

  <body>
  
 
   
    <div class="ps-panel--sidebar" id="search-sidebar">
      <div class="ps-panel__header">
        <form class="ps-form--search-mobile" action="index.html" method="get">
          <div class="form-group--nest">
            <input class="form-control" type="text" placeholder="Search something...">
            <button><i class="icon-magnifier"></i></button>
          </div>
        </form>
      </div>
      <div class="navigation__content"></div>
    </div>
    <div id="homepage-1">
      <div class="ps-home-banner ps-home-banner--1">
        <div class="ps-container">
          <div class="ps-section__left">
            <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
              <div class="ps-banner"><a href="#"><img src="img/slider/home-1/slide-1.jpg" alt=""></a></div>
              <div class="ps-banner"><a href="#"><img src="img/slider/home-1/slide-2.jpg" alt=""></a></div>
              <div class="ps-banner"><a href="#"><img src="img/slider/home-1/slide-3.jpg" alt=""></a></div>
            </div>
          </div>
          <div class="ps-section__right"><a class="ps-collection" href="#"><img src="img/slider/home-1/promotion-1.jpg" alt=""></a><a class="ps-collection" href="#"><img src="img/slider/home-1/promotion-2.jpg" alt=""></a></div>
        </div>
      </div>
      <div class="ps-site-features">
        <div class="ps-container">
          <div class="ps-block--site-features">
            <div class="ps-block__item">
              <div class="ps-block__left"><i class="icon-rocket"></i></div>
              <div class="ps-block__right">
                <h4>Free Delivery</h4>
                <p>For all oders over $99</p>
              </div>
            </div>
            <div class="ps-block__item">
              <div class="ps-block__left"><i class="icon-sync"></i></div>
              <div class="ps-block__right">
                <h4>90 Days Return</h4>
                <p>If goods have problems</p>
              </div>
            </div>
            <div class="ps-block__item">
              <div class="ps-block__left"><i class="icon-credit-card"></i></div>
              <div class="ps-block__right">
                <h4>Secure Payment</h4>
                <p>100% secure payment</p>
              </div>
            </div>
            <div class="ps-block__item">
              <div class="ps-block__left"><i class="icon-bubbles"></i></div>
              <div class="ps-block__right">
                <h4>24/7 Support</h4>
                <p>Dedicated support</p>
              </div>
            </div>
            <div class="ps-block__item">
              <div class="ps-block__left"><i class="icon-gift"></i></div>
              <div class="ps-block__right">
                <h4>Gift Service</h4>
                <p>Support gift service</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-deal-of-day">
        <div class="ps-container">
          <div class="ps-section__header">
            <div class="ps-block--countdown-deal">
              <div class="ps-block__left">
                <h3>Deals of the day</h3>
              </div>
              <div class="ps-block__right">
                <figure>
                  <figcaption>End in:</figcaption>
                  <ul class="ps-countdown" data-time="July 21, 2019 15:37:25">
                    <li><span class="days"></span></li>
                    <li><span class="hours"></span></li>
                    <li><span class="minutes"></span></li>
                    <li><span class="seconds"></span></li>
                  </ul>
                </figure>
              </div>
            </div><a href="#">View all</a>
          </div>
          <div class="ps-section__content">
            <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="5" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
              <div class="ps-product ps-product--inner">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/1.jpg" alt=""></a>
                  <div class="ps-product__badge">-16%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container">
                  <p class="ps-product__price sale">$567.99 <del>$670.00 </del><small>18% off</small></p>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <div class="ps-product__progress-bar ps-progress" data-value="68">
                      <div class="ps-progress__value"><span></span></div>
                      <p>Sold:5</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ps-product ps-product--inner">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/2.jpg" alt=""></a>
                  <div class="ps-product__badge out-stock">Out Of Stock</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container">
                  <p class="ps-product__price">$101.99<small>18% off</small></p>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <div class="ps-product__progress-bar ps-progress" data-value="43">
                      <div class="ps-progress__value"><span></span></div>
                      <p>Sold:12</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ps-product ps-product--inner">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/3.jpg" alt=""></a>
                  <div class="ps-product__badge">-25%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container">
                  <p class="ps-product__price sale">$42.00 <del>$60.00 </del><small>18% off</small></p>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>02</span>
                    </div>
                    <div class="ps-product__progress-bar ps-progress" data-value="14">
                      <div class="ps-progress__value"><span></span></div>
                      <p>Sold:25</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ps-product ps-product--inner">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/4.jpg" alt=""></a>
                  <div class="ps-product__badge out-stock">Out Of Stock</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container">
                  <p class="ps-product__price">$320.00<small>18% off</small></p>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <div class="ps-product__progress-bar ps-progress" data-value="30">
                      <div class="ps-progress__value"><span></span></div>
                      <p>Sold:15</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ps-product ps-product--inner">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/5.jpg" alt=""></a>
                  <div class="ps-product__badge out-stock">Out Of Stock</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container">
                  <p class="ps-product__price">$85.00<small>18% off</small></p>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <div class="ps-product__progress-bar ps-progress" data-value="97">
                      <div class="ps-progress__value"><span></span></div>
                      <p>Sold:24</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ps-product ps-product--inner">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/6.jpg" alt=""></a>
                  <div class="ps-product__badge out-stock">Out Of Stock</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container">
                  <p class="ps-product__price">$92.00<small>18% off</small></p>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <div class="ps-product__progress-bar ps-progress" data-value="22">
                      <div class="ps-progress__value"><span></span></div>
                      <p>Sold:59</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ps-product ps-product--inner">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/7.jpg" alt=""></a>
                  <div class="ps-product__badge">-46%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container">
                  <p class="ps-product__price sale">$42.00 <del>$60.00 </del><small>18% off</small></p>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>02</span>
                    </div>
                    <div class="ps-product__progress-bar ps-progress" data-value="73">
                      <div class="ps-progress__value"><span></span></div>
                      <p>Sold:79</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-home-ads">
        <div class="ps-container">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="img/collection/home-1/1.jpg" alt=""></a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="img/collection/home-1/2.jpg" alt=""></a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="img/collection/home-1/3.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-top-categories">
        <div class="ps-container">
          <h3>Top categories of the month</h3>
          <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
              <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/1.jpg" alt="">
                <p>Electronics</p>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
              <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/2.jpg" alt="">
                <p>Clothings</p>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
              <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/3.jpg" alt="">
                <p>Computers</p>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
              <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/4.jpg" alt="">
                <p>Home & Kitchen</p>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
              <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/5.jpg" alt="">
                <p>Health & Beauty</p>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
              <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/6.jpg" alt="">
                <p>Health & Beauty</p>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
              <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/7.jpg" alt="">
                <p>Jewelry & Watch</p>
              </div>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
              <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/8.jpg" alt="">
                <p>Technology Toys</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-product-list ps-clothings">
        <div class="ps-container">
          <div class="ps-section__header">
            <h3>Consumer Electronics</h3>
            <ul class="ps-section__links">
              <li><a href="shop-grid.html">New Arrivals</a></li>
              <li><a href="shop-grid.html">Best seller</a></li>
              <li><a href="shop-grid.html">Must Popular</a></li>
              <li><a href="shop-grid.html">View All</a></li>
            </ul>
          </div>
          <div class="ps-section__content">
            <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/1.jpg" alt=""/></a>
                  <div class="ps-product__badge">-16%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless</a>
                    <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/2.jpg" alt=""/></a>
                  <div class="ps-product__badge hot">hot</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$101.99</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                    <p class="ps-product__price">$101.99</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/3.jpg" alt=""/></a>
                  <div class="ps-product__badge">-25%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>02</span>
                    </div>
                    <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                    <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/4.jpg" alt=""/></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$320.00</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                    <p class="ps-product__price">$320.00</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/5.jpg" alt=""/></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$85.00</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                    <p class="ps-product__price">$85.00</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/6.jpg" alt=""/></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Store</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$92.00</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                    <p class="ps-product__price">$92.00</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/7.jpg" alt=""/></a>
                  <div class="ps-product__badge">-46%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>02</span>
                    </div>
                    <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                    <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/8.jpg" alt=""/></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Edifier Powered Bookshelf Speakers</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>02</span>
                    </div>
                    <p class="ps-product__price">$42.00</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Edifier Powered Bookshelf Speakers</a>
                    <p class="ps-product__price">$42.00</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/9.jpg" alt=""/></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>02</span>
                    </div>
                    <p class="ps-product__price">$42.00</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                    <p class="ps-product__price">$42.00</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/10.jpg" alt=""/></a>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>02</span>
                    </div>
                    <p class="ps-product__price">$42.00</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                    <p class="ps-product__price">$42.00</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-product-list ps-clothings">
        <div class="ps-container">
          <div class="ps-section__header">
            <h3>Apparels & Clothings</h3>
            <ul class="ps-section__links">
              <li><a href="shop-grid.html">New Arrivals</a></li>
              <li><a href="shop-grid.html">Best seller</a></li>
              <li><a href="shop-grid.html">Must Popular</a></li>
              <li><a href="shop-grid.html">View All</a></li>
            </ul>
          </div>
          <div class="ps-section__content">
            <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/1.jpg" alt=""/></a>
                  <div class="ps-product__badge">-16%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                    <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/2.jpg" alt=""/></a>
                  <div class="ps-product__badge out-stock">Out Of Stock</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$101.99</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Unero Military Classical Backpack</a>
                    <p class="ps-product__price">$101.99</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/3.jpg" alt=""/></a>
                  <div class="ps-product__badge">-25%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>02</span>
                    </div>
                    <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Rayban Rounded Sunglass Brown Color</a>
                    <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/4.jpg" alt=""/></a>
                  <div class="ps-product__badge out-stock">Out Of Stock</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$320.00</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                    <p class="ps-product__price">$320.00</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/5.jpg" alt=""/></a>
                  <div class="ps-product__badge out-stock">Out Of Stock</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$85.00</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                    <p class="ps-product__price">$85.00</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/6.jpg" alt=""/></a>
                  <div class="ps-product__badge out-stock">Out Of Stock</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Store</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$92.00</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                    <p class="ps-product__price">$92.00</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/7.jpg" alt=""/></a>
                  <div class="ps-product__badge">-46%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>02</span>
                    </div>
                    <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                    <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-product-list ps-garden-kitchen">
        <div class="ps-container">
          <div class="ps-section__header">
            <h3>Home, Garden & Kitchen</h3>
            <ul class="ps-section__links">
              <li><a href="shop-grid.html">New Arrivals</a></li>
              <li><a href="shop-grid.html">Best seller</a></li>
              <li><a href="shop-grid.html">Must Popular</a></li>
              <li><a href="shop-grid.html">View All</a></li>
            </ul>
          </div>
          <div class="ps-section__content">
            <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/1.jpg" alt=""/></a>
                  <div class="ps-product__badge">-16%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                    <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/2.jpg" alt=""/></a>
                  <div class="ps-product__badge out-stock">Out Of Stock</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$101.99</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                    <p class="ps-product__price">$101.99</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/3.jpg" alt=""/></a>
                  <div class="ps-product__badge">-25%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>02</span>
                    </div>
                    <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                    <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/4.jpg" alt=""/></a>
                  <div class="ps-product__badge out-stock">Out Of Stock</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$320.00</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                    <p class="ps-product__price">$320.00</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/5.jpg" alt=""/></a>
                  <div class="ps-product__badge out-stock">Out Of Stock</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$85.00</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                    <p class="ps-product__price">$85.00</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/6.jpg" alt=""/></a>
                  <div class="ps-product__badge out-stock">Out Of Stock</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Store</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$92.00</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                    <p class="ps-product__price">$92.00</p>
                  </div>
                </div>
              </div>
              <div class="ps-product">
                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/home/7.jpg" alt=""/></a>
                  <div class="ps-product__badge">-46%</div>
                  <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="icon-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>02</span>
                    </div>
                    <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                    <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-home-ads">
        <div class="ps-container">
          <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="img/collection/home-1/ad-1.jpg" alt=""></a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img src="img/collection/home-1/ad-2.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-download-app">
        <div class="ps-container">
          <div class="ps-block--download-app">
            <div class="container">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                  <div class="ps-block__thumbnail"><img src="img/app.png" alt=""></div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                  <div class="ps-block__content">
                    <h3>Download Martfury App Now!</h3>
                    <p>Shopping fastly and easily more with our app. Get a link to download the app on your phone</p>
                    <form class="ps-form--download-app" action="do_action" method="post">
                      <div class="form-group--nest">
                        <input class="form-control" type="Email" placeholder="Email Address">
                        <button class="ps-btn">Subscribe</button>
                      </div>
                    </form>
                    <p class="download-link"><a href="#"><img src="img/google-play.png" alt=""></a><a href="#"><img src="img/app-store.png" alt=""></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-product-list ps-new-arrivals">
        <div class="ps-container">
          <div class="ps-section__header">
            <h3>Hot New Arrivals</h3>
            <ul class="ps-section__links">
              <li><a href="shop-grid.html">Technologies</a></li>
              <li><a href="shop-grid.html">Electronic</a></li>
              <li><a href="shop-grid.html">Furnitures</a></li>
              <li><a href="shop-grid.html">Clothing & Apparel</a></li>
              <li><a href="shop-grid.html">Health & Beauty</a></li>
              <li><a href="shop-grid.html">View All</a></li>
            </ul>
          </div>
          <div class="ps-section__content">
            <div class="row">
              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                <div class="ps-product--horizontal">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt=""/></a></div>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 32GB</a>
                    <p class="ps-product__price">$990.50</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                <div class="ps-product--horizontal">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt=""/></a></div>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                    <p class="ps-product__price">$1120.50</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                <div class="ps-product--horizontal">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt=""/></a></div>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 128GB</a>
                    <p class="ps-product__price">$1220.50</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                <div class="ps-product--horizontal">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/2.jpg" alt=""/></a></div>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price">$36.78 – $56.99</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                <div class="ps-product--horizontal">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/3.jpg" alt=""/></a></div>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>02</span>
                    </div>
                    <p class="ps-product__price">$125.30</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                <div class="ps-product--horizontal">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/4.jpg" alt=""/></a></div>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>02</span>
                    </div>
                    <p class="ps-product__price">$55.30</p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                <div class="ps-product--horizontal">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/5.jpg" alt=""/></a></div>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>02</span>
                    </div>
                    <p class="ps-product__price sale">$41.27 <del>$52.99 </del></p>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                <div class="ps-product--horizontal">
                  <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/arrivals/6.jpg" alt=""/></a></div>
                  <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                    <div class="ps-product__rating">
                      <select class="ps-rating" data-read-only="true">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select><span>01</span>
                    </div>
                    <p class="ps-product__price sale">$41.27 <del>$62.39 </del></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-newsletter">
        <div class="ps-container">
          <form class="ps-form--newsletter" action="do_action" method="post">
            <div class="row">
              <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                <div class="ps-form__left">
                  <h3>Newsletter</h3>
                  <p>Subcribe to get information about products and coupons</p>
                </div>
              </div>
              <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                <div class="ps-form__right">
                  <div class="form-group--nest">
                    <input class="form-control" type="email" placeholder="Email address">
                    <button class="ps-btn">Subscribe</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer class="ps-footer">
      <div class="ps-container">
        <div class="ps-footer__widgets">
          <aside class="widget widget_footer widget_contact-us">
            <h4 class="widget-title">Contact us</h4>
            <div class="widget_content">
              <p>Call us 24/7</p>
              <h3>1800 97 97 69</h3>
              <p>502 New Design Str, Melbourne, Australia <br><a href="mailto:contact@martfury.co">contact@martfury.co</a></p>
              <ul class="ps-list--social">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </aside>
          <aside class="widget widget_footer">
            <h4 class="widget-title">Quick links</h4>
            <ul class="ps-list--link">
              <li><a href="#">Policy</a></li>
              <li><a href="#">Term & Condition</a></li>
              <li><a href="#">Shipping</a></li>
              <li><a href="#">Return</a></li>
              <li><a href="faqs.html">FAQs</a></li>
            </ul>
          </aside>
          <aside class="widget widget_footer">
            <h4 class="widget-title">Company</h4>
            <ul class="ps-list--link">
              <li><a href="about-us.html">About Us</a></li>
              <li><a href="#">Affilate</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="contact-us.html">Contact</a></li>
            </ul>
          </aside>
          <aside class="widget widget_footer">
            <h4 class="widget-title">Bussiness</h4>
            <ul class="ps-list--link">
              <li><a href="#">Our Press</a></li>
              <li><a href="checkout.html">Checkout</a></li>
              <li><a href="my-account.html">My account</a></li>
              <li><a href="shop-default.html">Shop</a></li>
            </ul>
          </aside>
        </div>
        <div class="ps-footer__links">
          <p><strong>Consumer Electric:</strong><a href="#">Air Conditioners</a><a href="#">Audios &amp; Theaters</a><a href="#">Car Electronics</a><a href="#">Office Electronics</a><a href="#">TV Televisions</a><a href="#">Washing Machines</a>
          </p>
          <p><strong>Clothing &amp; Apparel:</strong><a href="#">Printers</a><a href="#">Projectors</a><a href="#">Scanners</a><a href="#">Store &amp; Business</a><a href="#">4K Ultra HD TVs</a><a href="#">LED TVs</a><a href="#">OLED TVs</a>
          </p>
          <p><strong>Home, Garden &amp; Kitchen:</strong><a href="#">Cookware</a><a href="#">Decoration</a><a href="#">Furniture</a><a href="#">Garden Tools</a><a href="#">Garden Equipments</a><a href="#">Powers And Hand Tools</a><a href="#">Utensil &amp; Gadget</a>
          </p>
          <p><strong>Health &amp; Beauty:</strong><a href="#">Hair Care</a><a href="#">Decoration</a><a href="#">Hair Care</a><a href="#">Makeup</a><a href="#">Body Shower</a><a href="#">Skin Care</a><a href="#">Cologine</a><a href="#">Perfume</a>
          </p>
          <p><strong>Jewelry &amp; Watches:</strong><a href="#">Necklace</a><a href="#">Pendant</a><a href="#">Diamond Ring</a><a href="#">Sliver Earing</a><a href="#">Leather Watcher</a><a href="#">Gucci</a>
          </p>
          <p><strong>Computer &amp; Technologies:</strong><a href="#">Desktop PC</a><a href="#">Laptop</a><a href="#">Smartphones</a><a href="#">Tablet</a><a href="#">Game Controller</a><a href="#">Audio &amp; Video</a><a href="#">Wireless Speaker</a><a href="#">Done</a>
          </p>
        </div>
        <div class="ps-footer__copyright">
          <p>© 2018 Martfury. All Rights Reserved</p>
          <p><span>We Using Safe Payment For:</span><a href="#"><img src="img/payment-method/1.jpg" alt=""></a><a href="#"><img src="img/payment-method/2.jpg" alt=""></a><a href="#"><img src="img/payment-method/3.jpg" alt=""></a><a href="#"><img src="img/payment-method/4.jpg" alt=""></a><a href="#"><img src="img/payment-method/5.jpg" alt=""></a></p>
        </div>
      </div>
    </footer>
    <div class="ps-popup" id="subscribe" data-time="500">
      <div class="ps-popup__content bg--cover" data-background="img/bg/subscribe.jpg"><a class="ps-popup__close" href="#"><i class="icon-cross"></i></a>
        <form class="ps-form--subscribe-popup" action="index.html" method="get">
          <div class="ps-form__content">
            <h4>Get <strong>25%</strong> Discount</h4>
            <p>Subscribe to the Martfury mailing list <br /> to receive updates on new arrivals, special offers <br /> and our promotions.</p>
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Email Address" required>
              <button class="ps-btn">Subscribe</button>
            </div>
            <div class="ps-checkbox">
              <input class="form-control" type="checkbox" id="not-show" name="not-show"/>
              <label for="not-show">Don't show this popup again</label>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div id="back2top"><i class="pe-7s-angle-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
      <div class="ps-search__content">
        <form class="ps-form--primary-search" action="do_action" method="post">
          <input class="form-control" type="text" placeholder="Search for...">
          <button><i class="aroma-magnifying-glass"></i></button>
        </form>
      </div>
    </div>
   
   @endsection