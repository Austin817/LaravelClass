@extends('layouts.template')


@section ('css')
    <link rel="stylesheet" href="{{ asset('/css/product_list_page.css') }}">
@endsection




@section('main')

        <!-- Demo page craeted by https://github.com/petr-goca -->
  <header role="banner" aria-label="Heading">
        <div class="header">
          <div class="_cont">
            <div class="shadow">
              <a class="logo" title="Home" href='https://github.com/greenwoodents/quickbeam.js'>Quickbeam.js Demo</a>
            </div>
            <div class="mobile-menu">
              <form action="/search" method="get" id="find">
                <div>
                  <input type="text" name="q" id="find-input" class="find-input" placeholder="Search..." value="">
                  <button type="submit" title="Search" id="find-btn">Search</button>
                </div>
              </form>
              <a id="customer_login_link">Sign In</a>
              <nav role="navigation" aria-label="Catalog">
                <ul>
                  <li class="nc nav-li-category">
                    <a class="nc nav-category" data-subcategories="1">Women</a>
                    <ul class="nc">
                    </ul>
                  </li>
                  <li class="nc nav-li-category">
                    <a class="nc nav-category" data-subcategories="1">Men</a>
                    <ul class="nc">
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
            <span id="nav-icon"></span>
          </div>
        </div>
        <div class="breadcrumb" role="navigation" aria-label="Breadcrumbs">
          <div class="_cont">
            <ol>
              <li><a title="Back to the frontpage">Home</a></li>
              <li><a title="">Men</a></li>
              <li>Tony Hunfinger T-Shirt New York</li>
            </ol>
          </div>
        </div>
      </header>
      <section aria-label="Main content" role="main" class="product-detail">
        <div itemscope itemtype="http://schema.org/Product">
          <meta itemprop="url" content="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
          <meta itemprop="image" content="//cdn.shopify.com/s/files/1/1047/6452/products/product_grande.png?v=1446769025">
          <div class="shadow">
            <div class="_cont detail-top">
              <div class="cols">
                <div class="left-col">
                  <div class="thumbs">
                    <a class="thumb-image active" href="//cdn.shopify.com/s/files/1/1047/6452/products/product_1024x1024.png?v=1446769025" data-index="0">
                      <span><img src="//cdn.shopify.com/s/files/1/1047/6452/products/product_150x150.png?v=1446769025" alt="Tommy Hilfiger T-Shirt New York"></span>
                    </a>
                    <a class="thumb-image" href="//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_1024x1024.jpg?v=1447104179" data-index="1">
                      <span><img src="//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_150x150.jpg?v=1447104179" alt="Tommy Hilfiger T-Shirt New York"></span>
                    </a>
                    <a class="thumb-image" href="//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_1024x1024.jpg?v=1447104180" data-index="2">
                      <span><img src="//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_150x150.jpg?v=1447104180" alt="Tommy Hilfiger T-Shirt New York"></span>
                    </a>
                    <a class="thumb-image" href="//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_1024x1024.jpg?v=1447104182" data-index="3">
                      <span><img src="//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_150x150.jpg?v=1447104182" alt="Tommy Hilfiger T-Shirt New York"></span>
                    </a>
                  </div>
                  <div class="big">
                    <span id="big-image" class="img" quickbeam="image" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_1024x1024.png?v=1446769025')" data-src="//cdn.shopify.com/s/files/1/1047/6452/products/product_1024x1024.png?v=1446769025"></span>
                    <div id="banner-gallery" class="swipe">
                      <div class="swipe-wrap">
                        <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_large.png?v=1446769025')"></div>
                        <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_large.jpg?v=1447104179')"></div>
                        <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_large.jpg?v=1447104180')"></div>
                        <div style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_large.jpg?v=1447104182')"></div>
                      </div>
                    </div>
                    <div class="detail-socials">
                      <div class="social-sharing" data-permalink="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
                        <a target="_blank"  class="share-facebook" title="Share"></a>
                        <a target="_blank"  class="share-twitter" title="Tweet"></a>
                        <a target="_blank"  class="share-pinterest" title="Pin it"></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="right-col">
                  <h1 itemprop="name">Tony Hunfinger T-Shirt New York</h1>
                  <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                    <meta itemprop="priceCurrency" content="USD">
                    <link itemprop="availability" href="http://schema.org/InStock">
                    <div class="price-shipping">
                      <div class="price" id="price-preview" quickbeam="price" quickbeam-price="800">
                        $800.00
                      </div>
                      <a>Free shipping</a>
                    </div>
                    <div class="swatches">
                      <div class="swatch clearfix" data-option-index="0">
                        <div class="header">Size</div>
                        <div data-value="M" class="swatch-element plain m available">
                          <input id="swatch-0-m" type="radio" name="option-0" value="M" checked  />
                          <label for="swatch-0-m">
                            M
                            <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                          </label>
                        </div>
                        <div data-value="L" class="swatch-element plain l available">
                          <input id="swatch-0-l" type="radio" name="option-0" value="L"  />
                          <label for="swatch-0-l">
                            L
                            <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                          </label>
                        </div>
                        <div data-value="XL" class="swatch-element plain xl available">
                          <input id="swatch-0-xl" type="radio" name="option-0" value="XL"  />
                          <label for="swatch-0-xl">
                            XL
                            <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                          </label>
                        </div>
                        <div data-value="XXL" class="swatch-element plain xxl available">
                          <input id="swatch-0-xxl" type="radio" name="option-0" value="XXL"  />
                          <label for="swatch-0-xxl">
                            XXL
                            <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                          </label>
                        </div>
                      </div>
                      <div class="swatch clearfix" data-option-index="1">
                        <div class="header">Color</div>
                        <div data-value="Blue" class="swatch-element color blue available">
                          <div class="tooltip">Blue</div>
                          <input quickbeam="color" id="swatch-1-blue" type="radio" name="option-1" value="Blue" checked  />
                          <label for="swatch-1-blue" style="border-color: blue;">
                            <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                            <span style="background-color: blue;"></span>
                          </label>
                        </div>
                        <div data-value="Red" class="swatch-element color red available">
                          <div class="tooltip">Red</div>
                          <input quickbeam="color" id="swatch-1-red" type="radio" name="option-1" value="Red"  />
                          <label for="swatch-1-red" style="border-color: red;">
                            <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                            <span style="background-color: red;"></span>
                          </label>
                        </div>
                        <div data-value="Yellow" class="swatch-element color yellow available">
                          <div class="tooltip">Yellow</div>
                          <input quickbeam="color" id="swatch-1-yellow" type="radio" name="option-1" value="Yellow"  />
                          <label for="swatch-1-yellow" style="border-color: yellow;">
                            <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886" />
                            <span style="background-color: yellow;"></span>
                          </label>
                        </div>
                      </div>
                      <div class="guide">
                        <a>Size guide</a>
                      </div>
                    </div>
                    <!-- <form method="post" enctype="multipart/form-data" id="AddToCartForm"> -->
                    <form id="AddToCartForm">
                      <select name="id" id="productSelect" quickbeam="product" class="product-single__variants">
                        <option  selected="selected"  data-sku="" value="7924994501">
                          M / Blue - $800.00 USD
                        </option>
                        <option  data-sku="" value="7924995077">
                          M / Red - $850.00 USD
                        </option>
                        <option  data-sku="" value="7924994437">
                          L / Blue - $850.00 USD
                        </option>
                        <option  data-sku="" value="7924994693">
                          L / Yellow - $850.00 USD
                        </option>
                        <option  data-sku="" value="7924995013">
                          L / Red - $850.00 USD
                        </option>
                        <option  data-sku="" value="7924994373">
                          XL / Blue - $900.00 USD
                        </option>
                        <option  data-sku="" value="7924994629">
                          XL / Yellow - $850.00 USD
                        </option>
                        <option  data-sku="" value="7924830021">
                          XXL / Blue - $950.00 USD
                        </option>
                        <option  data-sku="" value="7924994885">
                          XXL / Red - $850.00 USD
                        </option>
                      </select>
                      <div class="btn-and-quantity-wrap">
                        <div class="btn-and-quantity">
                          <div class="spinner">
                            <span class="btn minus" data-id="2721888517"></span>
                            <input type="text" id="updates_2721888517" name="quantity" value="1" class="quantity-selector">
                            <input type="hidden" id="product_id" name="product_id" value="2721888517">
                            <span class="q">Qty.</span>
                            <span class="btn plus" data-id="2721888517"></span>
                          </div>
                          <div id="AddToCart" quickbeam="add-to-cart">
                            <span id="AddToCartText">Add to Cart</span>
                          </div>
                        </div>
                      </div>
                    </form>
                    <div class="tabs">
                      <div class="tab-labels">
                        <span data-id="1" class="active">Info</span>
                        <span data-id="2">Brand</span>
                      </div>
                      <div class="tab-slides">
                        <div id="tab-slide-1" itemprop="description"  class="slide active">
                          We open source it for you https://github.com/greenwoodents/quickbeam.js if you want to use it on your ecommerce.
                        </div>
                        <div id="tab-slide-2" class="slide">
                          Tony Hunfinger
                        </div>
                      </div>
                    </div>
                    <div class="social-sharing-btn-wrapper">
                      <span id="social_sharing_btn">Share</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <aside class="related">
            <div class="_cont">
              <h2>You might also like</h2>
              <div class="collection-list cols-4" id="collection-list" data-products-per-page="4">
                <a class="product-box">
                  <span class="img">
                    <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_70d2887b-ec6a-4bcb-a93b-7fd1783e6445_grande.jpg?v=1447530130')" class="i first"></span>
                    <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_030f9fc5-f253-4dca-a43a-fe2b719d0704_grande.png?v=1447530130')"></span>
                  </span>
                  <span class="text">
                    <strong>Tony Hunfinger T-Shirt New York 2</strong>
                    <span>
                      From $800.00
                    </span>
                    <div class="variants">
                      <div class="variant">
                        <div class="var m available">
                          <div class="t">M</div>
                        </div>
                        <div class="var l available">
                          <div class="t">L</div>
                        </div>
                        <div class="var xl available">
                          <div class="t">XL</div>
                        </div>
                        <div class="var xxl available">
                          <div class="t">XXL</div>
                        </div>
                      </div>
                      <div class="variant">
                        <div class="var color blue available">
                          <div class="c" style="background-color: blue;"></div>
                        </div>
                        <div class="var color red available">
                          <div class="c" style="background-color: red;"></div>
                        </div>
                        <div class="var color yellow available">
                          <div class="c" style="background-color: yellow;"></div>
                        </div>
                      </div>
                    </div>
                  </span>
                </a>
                <a class="product-box">
                  <span class="img">
                    <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_357767df-d7ff-4b58-b705-edde76bb32b7_grande.jpg?v=1447530150')" class="i first"></span>
                    <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_613d5776-ea61-4f9b-abef-0ce847c63a67_grande.jpg?v=1447530150')"></span>
                  </span>
                  <span class="text">
                    <strong>Tony Hunfinger T-Shirt New York 3</strong>
                    <span>
                      From $800.00
                    </span>
                    <div class="variants">
                      <div class="variant">
                        <div class="var m available">
                          <div class="t">M</div>
                        </div>
                        <div class="var l available">
                          <div class="t">L</div>
                        </div>
                        <div class="var xl available">
                          <div class="t">XL</div>
                        </div>
                        <div class="var xxl available">
                          <div class="t">XXL</div>
                        </div>
                      </div>
                      <div class="variant">
                        <div class="var color blue available">
                          <div class="c" style="background-color: blue;"></div>
                        </div>
                        <div class="var color red available">
                          <div class="c" style="background-color: red;"></div>
                        </div>
                        <div class="var color yellow available">
                          <div class="c" style="background-color: yellow;"></div>
                        </div>
                      </div>
                    </div>
                  </span>
                </a>
                <a href="/collections/men/products/copy-of-copy-of-copy-of-tommy-hilfiger-t-shirt-new-york-4" class="product-box">
                  <span class="img">
                    <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_0e98498a-123c-4305-9d94-d8280bb46416_grande.jpg?v=1447530164')" class="i first"></span>
                    <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_6c949188-dba0-4789-9434-c0821b92f3f4_grande.jpg?v=1447530164')"></span>
                  </span>
                  <span class="text">
                    <strong>Tony Hunfinger T-Shirt New York 4</strong>
                    <span>
                      From $800.00
                    </span>
                    <div class="variants">
                      <div class="variant">
                        <div class="var m available">
                          <div class="t">M</div>
                        </div>
                        <div class="var l available">
                          <div class="t">L</div>
                        </div>
                        <div class="var xl available">
                          <div class="t">XL</div>
                        </div>
                        <div class="var xxl available">
                          <div class="t">XXL</div>
                        </div>
                      </div>
                      <div class="variant">
                        <div class="var color blue available">
                          <div class="c" style="background-color: blue;"></div>
                        </div>
                        <div class="var color red available">
                          <div class="c" style="background-color: red;"></div>
                        </div>
                        <div class="var color yellow available">
                          <div class="c" style="background-color: yellow;"></div>
                        </div>
                      </div>
                    </div>
                  </span>
                </a>
                <a class="product-box">
                  <span class="img">
                    <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_7d606126-1b60-4738-99b3-062810f2db8b_grande.png?v=1447530674')" class="i first"></span>
                    <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko3_fd08d231-654c-4304-81b2-9191e6fd141e_grande.jpg?v=1447530674')"></span>
                  </span>
                  <span class="text">
                    <strong>Tony Hunfinger T-Shirt New York 5</strong>
                    <span>
                      From $800.00
                    </span>
                    <div class="variants">
                      <div class="variant">
                        <div class="var m available">
                          <div class="t">M</div>
                        </div>
                        <div class="var l available">
                          <div class="t">L</div>
                        </div>
                        <div class="var xl available">
                          <div class="t">XL</div>
                        </div>
                        <div class="var xxl available">
                          <div class="t">XXL</div>
                        </div>
                      </div>
                      <div class="variant">
                        <div class="var color blue available">
                          <div class="c" style="background-color: blue;"></div>
                        </div>
                        <div class="var color red available">
                          <div class="c" style="background-color: red;"></div>
                        </div>
                        <div class="var color yellow available">
                          <div class="c" style="background-color: yellow;"></div>
                        </div>
                      </div>
                    </div>
                  </span>
                </a>
                <a class="product-box hidden">
                  <span class="img">
                    <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_bba77d82-7f85-47af-9a45-f4700bcc04ad_grande.jpg?v=1447530689')" class="i first"></span>
                    <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/product_f065e961-d296-48a8-8a67-a3532200e257_grande.png?v=1447530689')"></span>
                  </span>
                  <span class="text">
                    <strong>Tony Hunfinger T-Shirt New York 6</strong>
                    <span>
                      From $800.00
                    </span>
                    <div class="variants">
                      <div class="variant">
                        <div class="var m available">
                          <div class="t">M</div>
                        </div>
                        <div class="var l available">
                          <div class="t">L</div>
                        </div>
                        <div class="var xl available">
                          <div class="t">XL</div>
                        </div>
                        <div class="var xxl available">
                          <div class="t">XXL</div>
                        </div>
                      </div>
                      <div class="variant">
                        <div class="var color blue available">
                          <div class="c" style="background-color: blue;"></div>
                        </div>
                        <div class="var color red available">
                          <div class="c" style="background-color: red;"></div>
                        </div>
                        <div class="var color yellow available">
                          <div class="c" style="background-color: yellow;"></div>
                        </div>
                      </div>
                    </div>
                  </span>
                </a>
                <a class="product-box hidden">
                  <span class="img">
                    <span style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko2_bf59c7f2-7c1f-4822-9494-6a984598a56c_grande.jpg?v=1447530706')" class="i first"></span>
                    <span class="i second" style="background-image: url('//cdn.shopify.com/s/files/1/1047/6452/products/tricko1_c6fa0fc1-99a0-4bd0-a1d8-0270127977fc_grande.jpg?v=1447530706')"></span>
                  </span>
                  <span class="text">
                    <strong>Tony Hunfinger T-Shirt New York 7</strong>
                    <span>
                      From $800.00
                    </span>
                    <div class="variants">
                      <div class="variant">
                        <div class="var m available">
                          <div class="t">M</div>
                        </div>
                        <div class="var l available">
                          <div class="t">L</div>
                        </div>
                        <div class="var xl available">
                          <div class="t">XL</div>
                        </div>
                        <div class="var xxl available">
                          <div class="t">XXL</div>
                        </div>
                      </div>
                      <div class="variant">
                        <div class="var color blue available">
                          <div class="c" style="background-color: blue;"></div>
                        </div>
                        <div class="var color red available">
                          <div class="c" style="background-color: red;"></div>
                        </div>
                        <div class="var color yellow available">
                          <div class="c" style="background-color: yellow;"></div>
                        </div>
                      </div>
                    </div>
                  </span>
                </a>
              </div>
              <div class="more-products" id="more-products-wrap">
                <span id="more-products" data-rows_per_page="1">More products</span>
              </div>
            </div>
          </aside>
        </div>
      
      </section>
      <footer role="contentinfo" aria-label="Footer">
        <div class="_cont">
          <div class="socials">
            <strong>follow us:</strong>
            <ul>
              <li><a  title="html-koder / test on Twitter" class="tw" target="_blank">Twitter</a></li>
              <li><a  title="html-koder / test on Facebook" class="fb" target="_blank">Facebook</a></li>
              <li><a  title="html-koder / test on Instagram" class="in" target="_blank">Instagram</a></li>
              <li><a  title="html-koder / test on Pinterest" class="pi" target="_blank">Pinterest</a></li>
            </ul>
          </div>
          <div class="top">
            <div class="right">
              <form method="post" action="/contact" class="contact-form" accept-charset="UTF-8">
                <input type="hidden" value="customer" name="form_type" /><input type="hidden" name="utf8" value="✓" />
                <div>
                  <input type="hidden" id="contact_tags" name="contact[tags]" value="newsletter"/>
                  <input type="text" id="contact_email" name="contact[email]" placeholder="Submit e-mail for special offers...">
                  <button type="submit" title="Newsletter Signup">OK</button>
                </div>
              </form>
            </div>
            <div class="left">
              <span class="phone">+420 123 456 789</span>
              <a class="mail" href="mailto:email.from@settings.com">email.from@settings.com</a>
            </div>
          </div>
          <div class="bottom">
            <div class="left">
              <nav role="navigation" aria-label="Service menu">
                <ul>
                  <li><a >Lorem ipsum</a></li>
                  <li><a >About Us</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </footer>
      
      <!-- Quickbeam cart-->
      
      <div id="quick-cart" quickbeam="cart">
        <a id="quick-cart-pay" quickbeam="cart-pay" class="cart-ico">
          <span>
            <strong class="quick-cart-text">Pay<br></strong>
            <span id="quick-cart-price">0</span>
            <span id="quick-cart-pay-total-count">0</span>
          </span>
        </a>
      </div>
      
      <!-- Quickbeam cart end -->

@endsection




@section ('js')

  <script>
        //Hey you! Thanks for checking this pen. :) I open source it as library. https://github.com/greenwoodents/quickbeam.js

  var Quickbeam = (function () {
    // Instance stores a reference to the Singleton
    var instance;

    function init(att) {
      // Singleton
      var els = {};
      var self = {};

      //Select attributes
      var cart = document.querySelector('#quick-cart');
      var cartPay = document.querySelector('#quick-cart-pay');
      var cartPrice = document.querySelector('#quick-cart-price');

      var addToCart = document.querySelector('[quickbeam="add-to-cart"]');
      var ProductImage = document.querySelector('[quickbeam="image"]');
      var price = document.querySelector('[quickbeam="price"]');

      var variantId;
      var imageUrl;
      var count;
      var color = '#000';

      var last_removed_variant;
      var last_removed_variant_count;


      (function main() {

        window.onresize = function(event) {
          setPayButtonAction();
        };

        setPayButtonAction();

        if (cartPay.length > 0) {return false;}

        if (att.animationLib === 'gsap') {
          if (typeof TweenMax !== 'function') {throw "GSAP is not loaded."}
        }

        if (price) {
          price = price.innerHTML;
        }

        if (ProductImage) {
          imageUrl = ProductImage.getAttribute('src');

          if (!imageUrl) {
            var patt = /url\(\s*(['"]?)(.*?)\1\s*\)/i
            imageUrl = ProductImage.getAttribute('style').match(patt)[2];
          }
        }

        [].forEach.call(document.querySelectorAll('.quickbeam-variant'), function(el){
          if (el.checked) {
            variantId = parseInt(el.getAttribute('quickbeam-value'));
          }
        });


        //Add event listeners
        var listeners = {
          '.quick-cart-product-remove': function(el){
              var id = el.getAttribute("data-id");
              var product = el.parentNode;
              var productCount = product.querySelector('.count');
              var count = parseInt(productCount.innerText);
              var imgWrap = product.querySelector('div');

              if (!(product && cart)) {return false}

              count--;

              if (count <= 0) {
                //Animation
                product.classList.add("remove-product");
                window.setTimeout(function() {
                  product.classList.remove("remove-product");
                  removeProduct(product);
                }, 1000);
              } else {
                productCount.innerText = count;

                var clone = imgWrap.cloneNode(true);
                clone.classList.add('animateOut')
                imgWrap.parentNode.appendChild(clone);

                window.setTimeout(function() {
                  clone.parentNode.removeChild(clone);
                }, 1000);


                if (count <= 1) {
                  productCount.classList.add("hide");
                }
              }

              if (last_removed_variant == id) {
                last_removed_variant_count++;
              } else {
                last_removed_variant = id;
                last_removed_variant_count = 1;
              }

              if (3 == last_removed_variant_count && count > 1) {
                product.classList.add("show-remove-all");
              }


              ajaxRemoveProduct({quantity: count, id: id});
            },

            '.quick-cart-product-removeall': function(el) {
                var id = el.getAttribute("data-id");
                var product = el.parentNode;

                if (!(product && cart)) {return false}

                product.classList.add("remove-product");
                window.setTimeout(function() {
                  removeProduct(product_box);
                }, 200);

                ajaxRemoveProduct({quantity: 0, id: id});
            }
        }

        //Event delegation for cart
        cart.addEventListener("click",function(e) {
          //calling callback if item of object have a match.
          for (var key in listeners) {
            if (listeners.hasOwnProperty(key) && e.target && e.target.matches(key)) {
              listeners[key].apply(null, [e.target]);
            }
          }
        });

        if (addToCart) {
          //Buy button listener.
          addToCart.addEventListener('click', start, false);
        }

        function start(e){
          e.preventDefault();
          this.blur();

          // display pay button if is not
          if (!(cartPay.classList.contains('open'))) {
            cartPay.classList.add("open");
          }

          count = parseInt(document.querySelector('.quantity-selector').value);

          addProduct();

          animateProduct();

          if (ProductImage) {
            ProductImage.classList.add("animate");
            window.setTimeout(function(){
              ProductImage.classList.remove("animate");
            }, 400);
          }
        }

        return false;
      })();

      //Procedure for creating product in cart and displaying after animation.
      function addProduct() {
        var variant;

        //Calling select variant from attributes or falling back to default select variant.
        if (typeof att.variantSelector === 'function') {
          variant = att.variantSelector.call();
          if (typeof variant !== string) {
            console.error("variantSelector not returning a string.");
            variant = '';
          }
        } else {
          [].forEach.call(document.querySelectorAll('.quickbeam-variant'), function(el){
            if (el.checked) {
              variantId = parseInt(el.getAttribute('quickbeam-value'));
              variant = el.getAttribute('value');
            }
          });
        }

        if (typeof variant === 'undefined') {
          console.error("Not able to select variant");
          variant = '';
        }

        var cart_product = document.querySelector("#quick-cart-product-" + variantId) || false;

        if (cart && ProductImage && cart_product == false ) {
          //Create product box
          var element = createProductBox({
            id: variantId,
            price: price,
            image: imageUrl,
            size: variant,
            color: color
          });
          //Append element to cart
          cart.insertBefore(element, cart.firstChild);
          //Display created element
          displayProductBox(element, 1000);
        }
      }

      // Function for creating DOM element from pre-set template.
      // Private function
      // Arguments: variantId, price, swatchesContent
      // Returning created DOM element.
      function createProductBox(data) {
        var template = '<div class="quick-cart-product-wrap">'+
                          '<img src="' + data.image + '">'+
                          '<span class=" s1" style="background-color: '+data.color+'; opacity: .5">'+ data.price.trim() +'</span>'+
                          '<span class=" s2">'+ data.size.trim() +'</span>'+
                        '</div>'+
                        '<span class="count hide fadeUp" id="quick-cart-product-count-'+ data.id +'">0</span>'+
                        '<span class="quick-cart-product-remove remove" data-id="'+ data.id +'"></span>'+
                        '<span class="quick-cart-product-removeall removeall" data-id="'+ data.id +'"></span>';

        var div = document.createElement("div");
        div.classList.add("quick-cart-product");
        div.classList.add("quick-cart-product-static");
        div.setAttribute("id", "quick-cart-product-" + data.id);
        div.style.opacity = 0;
        div.innerHTML = template;

        return div;
      }

      // Function for displaying product box.
      // private function
      // Arguments: createde element, delay of display.
      function displayProductBox(el, delay) {
        //Defaults
        delay = typeof delay !== 'undefined' ? delay : 0;

        window.setTimeout(function(){
          el.style.opacity = 1;
        }, delay);
      }

      //requst animation frame animation function
      function animate(item) {
        var duration = item.time,
        end = +new Date() + duration;

        var step = function() {

          var current = +new Date(),
              remaining = end - current;

          if(remaining < 60) {
            item.run(1);  //1 = progress is at 100%
            return;

          } else {
            var rate = 1 - remaining/duration;
            item.run(rate);
          }

          requestAnimationFrame(step);
        }
        step();
      }

      //Procedure for animating process of adding product box to cart using bezire curve.
      //Private
      function animateProduct() {
        // create and append copy of large image.
        var element = createAnimatedObject();
        var c = getAnimationCoordinations(element);

        if (att.animationLib === 'gsap') {
          gsapAnimation(element, c);
        } else {
          fallbackAnimation(element, c);
        }
      }

      function gsapAnimation(element, c) {
        element.style.position = 'absolute';
        element.classList.add("run");

        var countBox = document.getElementById("quick-cart-product-count-" + variantId);
        if (countBox) {
          countBox.classList.remove('fadeUp')
          countBox.classList.add('fadeDown')
        }

        TweenMax.to(element, 1, {bezier:{type:"soft", values:c.through}, ease:Power1.easeInOut});

        setTimeout(function(){
          element.style.opacity = 0;
          document.body.removeChild(element);

          setTimeout(function(){
            ajaxAddProductToCart();
          },100)
        }, 1000);
      }

      //Vanilla JS Animation
      function fallbackAnimation(element, c) {
        var cordeIndex = 0;
        var coord = function (x,y) {
          if(!x) var x=0; if(!y) var y=0;
          return {x: x, y: y};
        };

        var bezier = function(t, p0, p1, p2, p3){
          var cX = 3 * (p1.x - p0.x),
              bX = 3 * (p2.x - p1.x) - cX,
              aX = p3.x - p0.x - cX - bX;

          var cY = 3 * (p1.y - p0.y),
              bY = 3 * (p2.y - p1.y) - cY,
              aY = p3.y - p0.y - cY - bY;

          var x = (aX * Math.pow(t, 3)) + (bX * Math.pow(t, 2)) + (cX * t) + p0.x;
          var y = (aY * Math.pow(t, 3)) + (bY * Math.pow(t, 2)) + (cY * t) + p0.y;

          return {x: x, y: y};
        };
        //Coordinations
        //Start
        var P1 = coord(c.start.x,c.start.y);
        //HELPERS
        var P2 = coord(c.start.x-300,c.final.y);
        var P3 = coord(c.start.x+500,c.start.y+500);
        //final destination
        var P4 = coord(c.final.x,c.final.y);

        //Actaully animate.
        var stage = 0;
        element.style.position = 'absolute';
        element.classList.add("run");
        animate({
          time: 1000,

          run: function(t) {
            if(t == 1) {
              setTimeout(function(){
                element.style.opacity = 0;
                document.body.removeChild(element);

                setTimeout(function(){
                  ajaxAddProductToCart();
                },1000)
              }, 500);

            }
            //find position on bezier curve
            var curpos = bezier(t,P1,P2,P3,P4)

            var trans = "translate("+Math.round(curpos.x)+"px,"+Math.round(curpos.y)+"px)";

            element.style.webkitTransform = trans;
            element.style.transform = trans;
          }
        });
      }

      // Function for creating DOM element from pre-set template.
      // Private function
      // Arguments: none
      // Returning created DOM element.
      function createAnimatedObject(data) {
        var width = ProductImage.offsetWidth - 2;
        var height = Math.round(parseInt(ProductImage.offsetWidth - 2) * 1.33);
        var offset = ProductImage.getBoundingClientRect();

        var template =  '<div style="width:'+ width +'px; height:'+ height +'px;">'+
                        '<img src="'+ imageUrl +'">'+
                        '<span class="s1" style="background-color: '+color+'; opacity: .5; transition: 1000ms"></span>'+
                        '<span class="s2"></span>'+
                        '</div>';

        // Animace pridani produktu k produktovemu boxu
        var div = document.createElement("div");
        div.classList.add("quick-cart-product");
        div.classList.add("quick-cart-product");
        div.classList.add("animated");
        div.setAttribute("id", "quick-cart-product-animated");

        if (att.animationLib === 'gsap') {
          var trans = "translate("+ offset.left +"px,"+ offset.top +"px)";
          div.style.webkitTransform = trans;
          div.style.transform = trans;
        }

        //Apend template
        div.innerHTML = template;
        //Append child to body
        document.body.appendChild(div);
        //return
        return div;
      }

      // Function for calculating animation coordinations
      // Private function
      // Arguments: element from DOM.
      // Returning object { start:{x,y}, finish: {x,y} }.
      function getAnimationCoordinations(element) {
        var child = element.querySelector('div');
        // Calc of start and finish positions of animation.
        var start = ProductImage.getBoundingClientRect();
        var final = document.querySelector("#quick-cart-product-" + variantId).getBoundingClientRect();
        var fTop = final.top;
        // adding scroll heihft to Y
        var doc = document.documentElement;
        var left = (window.pageXOffset || doc.scrollLeft) - (doc.clientLeft || 0);
        var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);

        var throughX = parseInt(start.left) - parseInt(child.style.width) * 1.4;
        var throughY = (fTop + top) - parseInt(child.style.height) / 3;

        return {
          start: {
            x: start.left,
            y: start.top
          },
          through: [
            {x:throughX, y:throughY},
            {x:final.left, y:fTop + top}
          ],
          final: {
            x: final.left,
            y: fTop + top
          }
        }
      }

      // Function for adding product to shopify cart using AJAX
      // Private function
      // Arguments:
      // Returning nothing, procedure.
      function ajaxAddProductToCart() {
        var product_box = document.getElementById("quick-cart-product-" + variantId);

        var product_count_box = document.getElementById("quick-cart-product-count-" + variantId);
        var product_count = parseInt(product_count_box.innerText);
        var cartPay_total_count = document.getElementById("quick-cart-pay-total-count");
        var cartPay_total_count_value = parseInt(cartPay_total_count.innerText);
        product_count += count;
        product_count_box.innerText = product_count;
        if (product_count > 1) {
          product_count_box.classList.remove("hide");
        }
        // aktualizace celkoveho poctu ks pro mobilni vzhled
        cartPay_total_count_value += count;
        cartPay_total_count.innerText = cartPay_total_count_value;


        var countBox = document.getElementById("quick-cart-product-count-" + variantId);
        countBox.classList.remove('fadeDown')
        countBox.classList.add('fadeUp')

        if (count < 0) {
          count = 1;
        }

        if (product_box) {
          product_box.classList.remove("show-remove-all");
          last_removed_variant_count = 0;
        }

        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function() {
          if (ajax.readyState == 4 && ajax.status == 200) {
            ajaxUpdateCart();
          }
        };
        ajax.open("POST", "/cart/add.js", true);
        ajax.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        ajax.send(JSON.stringify({quantity: count, id: variantId}));
      }

      function ajaxRemoveProduct(data) {
        var ajax = new XMLHttpRequest();

        ajax.onreadystatechange = function() {
          if (ajax.readyState == 4 && ajax.status == 200) {
            ajaxUpdateCart();
          }
        };
        ajax.open("POST", "/cart/change.js", true);
        ajax.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        ajax.send(JSON.stringify(data));
      }

      function ajaxRemoveAllProducts(data) {
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function() {
          if (ajax.readyState == 4 && ajax.status == 200) {
            ajaxUpdateCart();
          }
        };
        ajax.open("POST", "/cart/change.js", true);
        ajax.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        ajax.send(JSON.stringify(data));
      }

      // Function for updating cart with quantity of actual item and orice
      // Private function
      // Arguments:
      // Returning nothing
      function ajaxUpdateCart() {
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function() {
          if (ajax.readyState == 4 && ajax.status == 200) {
            var response = JSON.parse(ajax.responseText);
            cartPrice.innerText = Shopify.formatMoney(response.total_price);
            // Zobrazeni tlacitka na nakup
            if (response.total_price <= 0) {
              cartPay.classList.remove("open");
            }
          }
        };
        ajax.open("GET", "/cart.js", true);
        ajax.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        ajax.send();
      }

      // Function for removing html of product from cart
      // Private function
      function removeProduct(product_box) {
        cart.removeChild(product_box);
      }

      // procedure for changing cart link destionation depending on size of screen.
      function setPayButtonAction() {
        if (cartPay) {
          // Cart is fixed in right bottom of screen
          var window_w = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

          if (window_w > 600) {
            cartPay.setAttribute("href", "/checkout");
            cartPay.classList.remove("cart-ico");
          } else {
            cartPay.setAttribute("href", "/cart");
            cartPay.classList.add("cart-ico");
          }
        }
      }
      //public methods
      return self;
    };

    return {
      // Get the Singleton instance if one exists
      // or create one if it doesn't
      init: function (att) {
        if ( !instance ) {
          instance = init(att);
        }
        return instance;
      }
    };

  })();


  // Usage:
  var cart = Quickbeam.init({
    'animationLib': 'gsap'
  });
</script>

@endsection
