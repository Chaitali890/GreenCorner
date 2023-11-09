<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src='main.js'></script>
</head>
<body>
  <!---header section start-->
  
        <!---header section end-->
        <?php
          include 'includes/header.php';
        ?>
        <!-- Modal section start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!---model section end-->
<!---slider section start-->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="100000">
        <img src="assets/img/Banner.jpg" class="d-block w-100" alt="Banner">
        <div class="carousel-caption">
            <div class="row">
              <div class="col md-7">
                <p>One click access to independent</p>
                <div class="head">
                <p>Research and Trading Opportunities</p>
                 <button class="btn head-btn">Hire an expert</button>
</div> 
              </div>
              <div class="col-md-5 py-5 my-5">
                <!-- <img src="assets/img/logo.png" alt=""> -->
              </div>
            </div>
            </div>
</div>
        
      <div class="carousel-item" data-bs-interval="100000">
        <img src="assets/img/Banner2.jpg" class="d-block w-100" alt="Banner2">
        <div class="carousel-caption">
        <div class="row">
              <div class="col md-7">
                <p>One click access to independent</p>
                <div class="head">
                <p>Research and Trading Opportunities</p>
                 <button class="btn head-btn">Hire an expert</button>
</div> 
              </div>
              <div class="col-md-5 py-5 my-5">
                <img src="assets/img/logo.png" alt="">
              </div>
            </div>
          </div>
      </div>
      <div class="carousel-item" data-bs-interval="100000">
        <img src="assets/img/Banner3.jpg" class="d-block w-100" alt="Banner3">
        <div class="carousel-caption">
        <div class="row">
              <div class="col md-7">
                <p>One click access to independent</p>
                <div class="head">
                <p>Research and Trading Opportunities</p>
                 <button class="btn head-btn">Hire an expert</button>
</div> 
              </div>
              <div class="col-md-5 py-5 my-5">
                <img src="assets/img/logo.png" alt="">
              </div>
            </div>
          </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!---slider section end -->

   <!--marquee start-->
   <marquee  class="p-3" direction="">Investment & trading in securities market is always subjected to market risks, past performance is not a guarantee of future performance. Green Corner Advisory (Investment Advisor) do not provide any Assured/ Guaranteed Return/ Profit services, any Profit Sharing services, and Services which are not mentioned in company website, Please beware of fraud calls/sms.</marquee>
   <!--marquee end-->

   <!--About Section start-->
  <?php include 'includes/about.php' ?>
 <!--About Section end-->
 <!------Why section start---->
 <section class="container-fluid pt-5 bg-light overflow-hidden" style="padding: 50px 0px ;overflow: hidden;height: 400px;">
            <div class="row pt-0">
                <h6 class="text-center text-success fw-bold">Why</h6>
                <h4 class="text-center fw-bolder">WHY US</h4>
                <div class=" border-bottom border-success fs-1" style="width:60px;margin-left: 700px;"></div>
            </div>
            <div class="container d-flex overflow-hidden">
                <div class="row mt-5 ">
                    <div class="col-md-4 d-flex">
                        <div class="text-center  why">
                            <i class="fa-regular fa-user itag fs-1 text-center"></i>
                            <p class="text-center">We have a customer-centric approach to solve all the
                                investment-related
                                queries</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="text-center why">
                            <i class="fa-solid fa-chart-simple itag fs-1"></i>
                            <p class="">13+ Years of experience in technical and fundamental research with more than
                                2000
                                hours of research.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex">
                        <div class="text-center why">
                            <i class="fa-solid fa-brain itag fs-1"></i>
                            <p class="text-center">In-depth analysis of trading charts for the generation of stock
                                market
                                signals</p>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>

 <!-----Why section end--->
<!-----Who section start------>
<div class="container-fluid pt-1 who  overflow-hidden ">
        <div class="row  pt-5 ">
            <h6 class="text-center text-success fw-bold pt-1">Who Is</h6>
            <h4 class="text-center fw-bolder">WHO IS THIS FOR</h4>
            <div class=" border-bottom border-success fs-1" style="width:50px;margin-left:730px"></div>
        </div>
        <div class="container pt-5 ">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-4 align-items-stretch">

                    <img src="assets/img/graph.jpg" alt="graph" class="img-fluid">

                </div>
                <div class="col-md-6 col-lg-8 d-flex align-items-stretch des">
                    <div class="clients">
                        <ul class="descriptions">
                            <li>Clients seeking low risk on their investment made.</li>
                            <li>Clients who are not able to manage their funds on their own.</li>
                            <li>Clients who require short and long term investment products.</li>
                            <li>Clients expecting good returns on their investments in less time span.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!----Who section end---->
<!----Offer section start---->
<div class="container-fluid bg-light overflow-hidden" style="height: 820px;">
        <div class="row text-center">
            <h6 class="text-success fw-semibold mt-5">Offers</h6>
            <h4 style="color: rgb(82, 79, 79);" class=" fw-bolder pt-1">WHAT WE OFFER</h4>
            <div class=" border-bottom border-success fs-1" style="width:50px;margin-left:730px"></div>
        </div>
        <div class="container  overflow-hidden">
            <div class="row pt-4">
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="offer">
                        <i class="fa-solid fa-money-bill text-center itag fs-1"></i>
                        <h4 class="fs-5 p-2"><a href="javascript:void()" class="text-decoration-none text-black fw-semibold ">EQUALITY</a></h4>
                        <p>
                            Equity here refers to cash and derivative stocks and indices which are traded on national
                            exchanges of India. Investment in equity market is preffered by both traders and investors.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="offer ">
                        <i class="fa-solid fa-square-poll-vertical itag fs-1"></i>
                        <h4 class="fs-5 p-2"><a href="javascript:void()" class="text-decoration-none text-black fw-semibold ">MCX COMMODITY</a></h4>
                        <p>MCX refers to Multi Commodity Exchange in which Bullions (Gold &amp; Silver), Base Metals
                            (Aluminium, Copper, Lead, Nickel &amp; Zinc) and Energy (Crude Oil &amp; Natural Gas) is traded.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="offer ">
                        <i class="fa-regular fa-file-zipper itag fs-1"></i>
                        <h4 class="fs-5 p-2"><a href="javascript:void()" class="text-decoration-none text-black fw-semibold ">PMS</a></h4>
                        <p>PMS here refers to Profile Management Service which is an exclusive product designed for the
                            customers who are busy in their day to day activities and require core investment assistance
                            on time to time basis.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container  overflow-hidden">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="offer">
                        <i class="fa-solid fa-chart-column fs-1 itag"></i>
                        <h4 class="fs-5 p-2"><a href="javascript:void()" class="text-decoration-none text-black fw-semibold ">NCDEX</a></h4>
                        <p>
                            NCDEX refers to National Commodity and Derivatives Exchange in which agricultural commodity
                            derivatives such as Chana, Soyabean, Refined Soya Oil, Dhaniya, Jeera etc is traded.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="offer ">
                        <i class="fa-solid fa-circle-dollar-to-slot  itag fs-1"></i>

                        <h4 class="fs-5 p-2"><a href="javascript:void()" class="text-decoration-none text-black fw-semibold ">FOREX</a></h4>
                        <p>FOREX here refers to Foreign Exchange which basically is a product designed for traders who
                            trade global CFD's of major currencies such as EURUSD, GBPUSD, USDJPY, AUDUSD, USDCAD,
                            NZDUSD &amp; USDCHF and commodities such as Gold, Silver &amp; Crude Oil.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="offer ">
                        <i class="fa-solid fa-indian-rupee-sign itag fs-1"></i>
                        <h4 class="fs-5 p-2"><a href="javascript:void()" class="text-decoration-none text-black fw-semibold ">PMS</a></h4>
                        <p>PMS here refers to Profile Management Service which is an exclusive product designed for the
                            customers who are busy in their day to day activities and require core investment assistance
                            on time to time basis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!-----Offer section end---->



<!-----How it works start ---->
<section>
    <div class="container-fluid pt-1 overflow-hidden">
        <div class="row">
            <div class="row text-center">
                <h6 class="text-success fw-semibold mt-5">Work</h6>
                <h4 style="color: rgb(82, 79, 79);" class=" fw-bolder pt-1">HOW IT WORKS</h4>
                <div class=" border-bottom border-success fs-1" style="width:50px;margin-left:730px"></div>
            </div>
        </div>
        <div class="container pt-4 d-flex">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="how_work">
                        <i class="fa-regular fa-clock itag fs-1"></i>
                        <p class="discription">Time and tested signal generation models</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="how_work">
                        <i class="fa-solid fa-headset fs-1 itag"></i>
                        <p class="discription">Client support and query resolution on a real time basis</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="how_work">
                        <i class="fa-solid fa-circle-notch itag fs-1"></i>
                        <p class="discription">Dedicated NISM Certified Research Team</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex">
                    <div class="how_work">
                        <i class="fa-solid fa-box itag fs-1"></i>
                        <p class="discription">Customized products as per risk profiling and return requirements of
                            clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!----How it works end---->
  <!---Client section start-->
  <section class="they_trusted mt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="title-section">
                        <h2>Clients</h2>
                        <p>THEY ARE TRUSTED</p>
                    </div>
                    <div class="trust_img_content text-center position-relative pt-5">
                        <img class="position-absolute p-1 shadow " src="assets/img/client.jpg" alt="testi" width="70" height="70">
                        <p>"They took the time to understand my needs and then provided me with several options that
                            ensured all
                            my needs were met.The ongoing communication and quality of service is superb and at
                            a level rarely seen or experienced these days in the market."
                        </p>
                        <span class="fs-6 mt-3 text-uppercase">prashant</span>
                        <span class="text-black text-uppercase">
                            <i class="fa-solid fa-map-location"></i>
                            new delhi
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </section>
 <!--client section end-->

 <!----Need help section start---->
 <section class="need">
        <div class="help">
            <h4>Need Help?</h4>
            <p class="descrip text-uppercase">Get a Call Back From Our Market Experts</p>
        </div>
        <div class="container">
            <div class="row d-flex word">
                <div class="col-lg-5 d-flex align-content-center">
                    <div class="infor">
                        <div class="location">
                            <i class="fa-solid fa-location-dot"></i>
                            <h4 class="text-uppercase">location:</h4>
                            <p>Green Corner Advisory, Sharjapur, Bangalore - 562125</p>
                        </div>
                        <div class="email">
                            <a href="mailto:mdujefaansari@gmial.com" class="text-decoration-none"> <i class="fa-solid fa-envelope"></i></a>
                            <h4 class="text-uppercase">email:</h4>
                            <p>info@greeencornerby.com</p>
                        </div>
                        <div class="phone">
                            <i class="fa-solid fa-mobile"></i>
                            <h4 class="text-uppercase">call:</h4>
                            <p>+91 910212240</p>
                        </div>
                        <div class="whatsapp">
                            <i class="fa-brands fa-whatsapp"></i>
                            <h4 class="text-uppercase">whatsapp:</h4>
                            <p>+91 8983493982</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7 d-flex">

                    <form action="#" class="trust_contact">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type=" text" class="form-control rounded-pill" placeholder="Your Name">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control rounded-pill" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-6 form-group phone">
                                <input type="phone" class="form-control rounded-pill " placeholder="Your Number">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <div class="custom-select position-relative ">
                                    <select class="form-select select_option" aria-label="Default select example">
                                        <option selected="">NIFTY TIPS</option>
                                        <option value="1">COMMODITY PACK</option>
                                        <option value="2">HNI EQUITY</option>
                                        <option value="3">STOCK OPTIONS</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Message</label>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="submit_button">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
 <!----Need help section end------>

 <!---capital section start---->
  <section class="capital-section bg-light">

 <div class="container" style="width:75%">
  <div class="row">
    <div class="col-lg-12 mt-5 py-3">
      <p>
      Green Corner Advisory is the symbol of trust, prosperity and courage. We enable scalable growth
      by leveraging stock market intelligence and analytics, exercising judicious investment with risk
      appetite, operating effectively to deliver business outcome. We also believe that the people
      entering into stock market are aware of the risk and returns involved with investment in stock
      market. And with our time and tested financial models to generate high quality signals we ensure
      that the investment made by the clients grow by the leaps and bounds for their prosperity. This
      makes us complete stock market advisors. 
      </p>
    </div>
  </div>
 </div>


    <div class="container mt-4" style="width:75%">
        <div class="row">
          <div class="col-lg-12">
            <div class="capital-risk">
                <h4 class="text-uppercase">CAPITAL @ RISK</h4>
                <p class="mt-2">
                With investment, your capital is at risk. Investing/Trading is subject to market
                risk. Please read all the documents before investing.
                </p>
            </div>
          </div>
        </div>
    </div>
</section>

 <!----capital section end---->

 
       <!--footer section start-->
      <?php include 'includes/footer.php'; ?>
       <!--footer section end-->

 
 <!-- Back to top button -->
<!-- Back to top button -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
</body>
</html>