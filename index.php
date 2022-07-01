<?php 
require_once('./connection.php');
require_once('./component/menu-card.php');

$database = new CreateDb(dbname:"website");
 ?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Service Page</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
      <link rel="stylesheet" href="./src/scss/mdb.pro.black.css">
    <!-- MDB -->
      </style>  
  </head>
  <body>
 <!--Navbar-->
<body>
<!--<script src="php-connection.php"></script>-->
  <nav class="navbar navbar-expand-lg bg-primary mb-lg-5" id="navigation">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top fluid">
        Chefaway
      </a>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <ul class="navbar-nav dropstart">
        <!-- Icon dropdown -->
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="flag-united-kingdom flag m-0"></i>
          </a>
          <ul class="dropdown-menu dropstart" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="#"
                ><i class="flag-united-kingdom flag"></i>English
                <i class="fa fa-check text-success ms-2"></i
              ></a>
            </li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-latvia flag"></i>Latviski</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
            </li>
            </li>
          </ul>
        </li>
      </ul>
    </div>
</nav>

<div class="bg-white">
  <div class=" mb-5">
    <div class="row d-flex justify-content-center">
      <!--SERVICE NAVIGATION--> 
      <div class="col-lg-10 bg-secondary">
        <ul class="nav nav-tabs nav-justified" id="ex1" role="tablist">
          <li class="nav-item" role="presentation">
              <a
              class="nav-link active"
              id="ex3-tab-dateAndTime"
              data-mdb-toggle="tab"
              href="#ex3-tabs-dateAndTime"
              role="tab"
              aria-controls="ex3-tabs-dateAndTime"
              aria-selected="true"
              >DATE&TIME</a
              >
          </li>
          <li class="nav-item" role="presentation">
              <a
              class="nav-link"
              id="ex3-tab-menu"
              data-mdb-toggle="tab"
              href="#ex3-tabs-menu"
              role="tab"
              aria-controls="ex3-tabs-menu"
              aria-selected="false"
              >MENU</a
              >
          </li>
          <li class="nav-item" role="presentation">
              <a
              class="nav-link"
              id="ex3-tab-drinks"
              data-mdb-toggle="tab"
              href="#ex3-tabs-drinks"
              role="tab"
              aria-controls="ex3-tabs-drinks"
              aria-selected="false"
              >DRINKS</a
              >
          </li>
          <li class="nav-item" role="presentation">
              <a
              class="nav-link"
              id="ex3-tab-allergeis"
              data-mdb-toggle="tab"
              href="#ex3-tabs-allergies"
              role="tab"
              aria-controls="ex3-tabs-allergies"
              aria-selected="false"
              >ALLERGIES</a
              >
          </li>
          <li class="nav-item" role="presentation">
              <a
              class="nav-link"
              id="ex3-tab-addOns"
              data-mdb-toggle="tab"
              href="#ex3-tabs-addOns"
              role="tab"
              aria-controls="ex3-tabs-addOns"
              aria-selected="false"
              >ADDONS</a
              >
          </li>
          <li class="nav-item" role="presentation">
              <a
              class="nav-link"
              id="ex3-tab-drinks"
              data-mdb-toggle="tab"
              href="#ex3-tabs-drinks"
              role="tab"
              aria-controls="ex3-tabs-overview"
              aria-selected="false"
              >OVERVIEW</a
              >
          </li>
          <li class="nav-item" role="presentation">
              <a
              class="nav-link"
              id="ex3-tab-checkout"
              data-mdb-toggle="tab"
              href="#ex3-tabs-checkout"
              role="tab"
              aria-controls="ex3-tabs-chekout"
              aria-selected="false"
              >CHECKOUT</a
              >
          </li>
        </ul>
      </div>
    </div>


  <div class="row d-flex justify-content-center">
    <div class="col-lg-10 bg-secondary" id="tab-content-background">
            <!-- TABS CONTENT -->
      <div class="tab-content" id="ex2-content">
        <div
            class="tab-pane fade show active"
            id="ex3-tabs-dateAndTime"
            role="tabpanel"
            aria-labelledby="dateAndTime"
        >
          DATE AND TIME
        </div>
        <div
            class="tab-pane fade"
            id="ex3-tabs-menu"
            role="tabpanel"
            aria-labelledby="menu"
        >

          <div class="row my-lg-5 dflex flex-wrap justify-content-center">
          <?php
        $result = $database->getData('menu');
        $num = 1;
        while ($row=mysqli_fetch_assoc($result)){
            createMenuCard($num, $row['starter1'],$row['starter2'],$row['starter3'],
                           $row['main1'],$row['main2'],$row['main3'],
                           $row['dessert1'],$row['dessert2'],$row['dessert3'],$row['price']);
          $num = ++$num;
        }
    ?>
          </div><!--End of Menu Selection-->


        </div>
        <div
            class="tab-pane fade"
            id="ex3-tabs-drinks"
            role="tabpanel"
            aria-labelledby="drinks"
        >
          <div class="row my-lg-5 dflex flex-wrap justify-content-center">
            <p>DRINKS</P>
      
          </div><!--End of Drinks Selection-->
        

        </div>
        <div
            class="tab-pane fade"
            id="ex3-tabs-allergies"
            role="tabpanel"
            aria-labelledby="allergies"
        >
          
          <div class="wrapper">
              <div class="row input-row justify-content-center mt-lg-5">
                <!--Guest Name-->
                <div class="col-lg-3">
                  <div class="form-outline d-grid gap-3  mx-auto my-2 ">
                    <input type="text" id="clear-incomplete" class="form-control" data-mdb-input-mask="99-999-99" data-mdb-clear-incomplete="false"/>
                    <label class="form-label" for="clear-incomplete">Guest Name</label>
                  </div>
                </div>
                <!--Chosen Menu-->
                  <div class="col-lg-3 ">
                    <div class="dropdown d-grid gap-3  mx-auto my-2">
                      <button
                        class="btn btn-primary dropdown-toggle bg-primary"
                        type="button"
                        id="dropdownMenuButton"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Chosen Menu
                      </button>
                      
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      </ul>
                    </div>   
                  </div>    
                
                <!--Menu  Selection-->

                  <div class="col-lg-3 ">
                    <div class="dropdown d-grid gap-3  mx-auto my-2">
                      <button
                        class="btn btn-primary dropdown-toggle bg-primary text-center"
                        type="button"
                        id="dropdownMenuButton"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Guest Allegries
                      </button>
                      
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">
                            <input class="form-check-input" type="checkbox" value="" id="gluten" />
                            <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                        </a></li>
                        <li><a class="dropdown-item" href="#"><div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="nuts" />
                            <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                        <li><a class="dropdown-item" href="#"><div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                            <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                          </div></a></li>  
                        <li><a class="dropdown-item" href="#"><div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                            <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                          </div></a></li>                                                          
                      </ul>
                    </div>
                  </div>
                  <div class="col-1 my-2">
                    <button type="button" class="btn btn-primary btn-floating add-button">
                        <i class="fas fa-plus"></i>
                    </button>         
                  </div>
                </div>
              </div>


        </div>


        <div
            class="tab-pane fade"
            id="ex3-tabs-addOns"
            role="tabpanel"
            aria-labelledby="addOns"
        >
            ADDONS
        </div>
        <div
            class="tab-pane fade"
            id="ex3-tabs-overview"
            role="tabpanel"
            aria-labelledby="overview"
        >
            OVERVIEW
        </div>
        <div
            class="tab-pane fade"
            id="ex3-tabs-checkout"
            role="tabpanel"
            aria-labelledby="checkout"
        >
        CHECKOUT
        </div>       
    </div>
    <div class="col-lg-1"></div>
    <div class="col-lg-12">
    </div>
    </div>
  </div>
  </div>
</div>

<!--FOOTER-->
<?php require_once("./component/footer.php")?>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script type="text/javascript" src="./cardButtons.js"></script>
    <!--Add Remove Script-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="appendAllergy.js"> </script>
  </body>
</html>