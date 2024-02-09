<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prime Rose - Home</title>
 <?php
 require("inc/link.php");
 ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <style>
    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width:575px) {
      .availability-form {
        margin-top: 25px;
        padding: 0 35px;
      }
    }
  </style>
</head>

<body class="bg-light">


  <?php
  require("inc/header.php");
  ?>


  <!-- carousel -->

  <div class="container-fluid px-lg-4 mt-4">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="image/corsoel/IMG_15372.png" alt="" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image/corsoel/IMG_40905.png" alt="" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image/corsoel/IMG_55677.png" alt="" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image/corsoel/IMG_62045.png" alt="" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image/corsoel/IMG_93127.png" alt="" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="image/corsoel/IMG_99736.png" alt="" class="w-100 d-block" />
        </div>
      </div>
    </div>

  </div>

  <!-- check availability form -->

  <div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Available</h5>
        <form>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500;">Check-in</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500;">Check-out</label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight:500;">Adults</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight:500;">Children</label>
              <select class="form-select shadow-none">
                <option value="1">One</option>
                <option value="2">Two</option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>




  <!--Our Room  -->


  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="image/rooms/IMG_11892.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Rooms Name</h5>
            <h6 class="mb-4">200/- per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark  text wrap ">
                2 Rooms
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                1 BathRooms
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                1 Balcony
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                3 sofa
              </span>
            </div>
            <div class="facility mb-4">
              <h6 class="mb-1">Facilities </h6>
              <span class="badge bg-light text-dark  text wrap ">
                Wifi
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                Television
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                AC
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                Room Heater
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="">
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>

            </div>


            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
              <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Detail</a>
            </div>
          </div>
        </div>
      </div>

      <!-- 2nd room -->

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="image/rooms/IMG_65019.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Rooms Name</h5>
            <h6 class="mb-4">200/- per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark  text wrap ">
                2 Rooms
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                1 BathRooms
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                1 Balcony
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                3 sofa
              </span>
            </div>
            <div class="facility mb-4">
              <h6 class="mb-1">Facilities </h6>
              <span class="badge bg-light text-dark  text wrap ">
                Wifi
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                Television
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                AC
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                Room Heater
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="">
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>

            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
              <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Detail</a>
            </div>
          </div>
        </div>
      </div>

      <!-- 3rooms -->

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="image/rooms/IMG_39782.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5>Simple Rooms Name</h5>
            <h6 class="mb-4">200/- per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge bg-light text-dark  text wrap ">
                2 Rooms
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                1 BathRooms
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                1 Balcony
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                3 sofa
              </span>
            </div>
            <div class="facility mb-4">
              <h6 class="mb-1">Facilities </h6>
              <span class="badge bg-light text-dark  text wrap ">
                Wifi
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                Television
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                AC
              </span>
              <span class="badge bg-light text-dark  text wrap ">
                Room Heater
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="">
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>

            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
              <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Detail</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>

      </div>
    </div>
  </div>

  <!-- our facilities -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR Facilities</h2>

  <div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5 ">
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image/facilities/IMG_27079.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image/facilities/IMG_41622.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image/facilities/IMG_43553.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image/facilities/IMG_49949.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
        <img src="image/facilities/IMG_96423.svg" width="80px">
        <h5 class="mt-3">Wifi</h5>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
      </div>
    </div>
  </div>

  <!-- Testimonials -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>

  <div class="container">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-item-center p-4">
            <!-- random user photo -->
            <img src="" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit molestiae aspernatur beatae natus corrupti
            recusandae totam harum animi, architecto sequi ipsum voluptates, aperiam doloribus! Dolorum, fugiat natus.
            In consequatur, ullam vero facere voluptate magnam inventore.</p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning "></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-item-center p-4">
            <!-- random user photo -->
            <img src="" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit molestiae aspernatur beatae natus corrupti
            recusandae totam harum animi, architecto sequi ipsum voluptates, aperiam doloribus! Dolorum, fugiat natus.
            In consequatur, ullam vero facere voluptate magnam inventore.</p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning "></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-item-center m-3">
            <!-- random user photo -->
            <img src="" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit molestiae aspernatur beatae natus corrupti
            recusandae totam harum animi, architecto sequi ipsum voluptates, aperiam doloribus! Dolorum, fugiat natus.
            In consequatur, ullam vero facere voluptate magnam inventore.</p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning "></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know more>>></a>
  </div>

  <!-- Reach us -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach us</h2>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3635788.8146235286!2d80.85930415!3d27.138192749999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39994e9f7b4a09d3%3A0xf6a5476d3617249d!2sUttar%20Pradesh!5e0!3m2!1sen!2sin!4v1707381516011!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call us</h5>
          <a href=" tel:+9185468569" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+9185468569
          </a>
          <br>
          <a href=" tel:+9185468569" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+9185468569
          </a>

        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow Us</h5>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-twitter-x me-1"></i>Twitter
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-instagram me-1"></i> InstaGram
            </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-light text-dark fs-6 p-2">
              <i class="bi bi-facebook me-1"></i>
              Facebook
            </span>
          </a>

        </div>
      </div>
    </div>
  </div>

  <?php
  require("inc/footer.php");
  ?>


  <br><br><br>
  <br><br><br>


  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      }
    });
  </script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoint: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        760: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>

</body>

</html>