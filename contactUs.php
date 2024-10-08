<?php
$title = "contactUs";
include('../connection/connection.php');
include('inc/cleaninput.php');
include('inc/feedback.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="images/Logo mark with letter mark.png" type="image/x-icon">
     <!-- Font -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
 

     <link href="both/fontawesome-free-6.4.2-web/css/all.css" rel="stylesheet">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="all.css">
     <title>MentalVerse | Contact Us</title>
</head>
<body>
    
     <!-- ----------- How It Works -------------- -->
     <section class="container">
          <div class="row row-cols-2 align-items-center">
               <div class="col d-flex flex-column gap-3 p-5">
                    <h6 class="title">HOW IT WORKS</h6>
                    <h1 class="head w-75     ">We’d Love to Hear From You</h1>
                    <p class="story">Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla.</p>
                    <div class="d-flex flex-column">
                         <!-- Phone Number -->
                         <div class="row align-items-center">
                              <div class="col-1">
                                   <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                              </div>
                              <div class="col-8 d-flex flex-column text-left">
                                   <h2>Phone Number</h2>
                                   <h6>+987 654 3210</h6>
                              </div>
                         </div>
                         <hr>
                         <!-- Business Hours -->
                         <div class="row align-items-center">
                              <div class="col-1">
                                   <div class="icon"><i class="fa fa-clock" aria-hidden="true"></i></div>
                              </div>
                              <div class="col-8 d-flex flex-column text-left">
                                   <h2>Business Hours</h2>
                                   <h6>Mon-Fri, 07.00-16.00</h6>
                              </div>
                         </div>
                         <hr>
                         <!-- Address -->
                         <div class="row align-items-center">
                              <div class="col-1">
                                   <div class="icon"><i class="fa fa-location-dot"></i> </div>
                              </div>
                              <div class="col-8 d-flex flex-column text-left">
                                   <h2>Address</h2>
                                   <h6>7676 Arden Avenue, Ginashire</h6>
                              </div>
                         </div>
                    </div>
               </div>
               <form class="col py-5" action="" method="">
                    <div class="mx-4 mb-4">
                         <label for="exampleFormControlInput1" class="form-label">Your Name</label>
                         <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name">
                    </div>
                    <div class="mx-4 mb-4">
                         <label for="exampleFormControlInput2" class="form-label">Your Email</label>
                         <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Enter your email">
                    </div>
                    <div class="mx-4 mb-4">
                         <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mx-4 mb-4">
                         <button type="submit" class="send">SEND MESSAGE</button>
                    </div>
               </form>
          </div>
     </section>

     <!-- ----------- Statistic -------------- -->
     <section class="statistics d-flex justify-content-center align-items-center">
         <div class="container">
               <div class="row row-cols-2 align-items-center">
                    <div><img src="images/Image-4.png" alt=""></div>
                    <div class="col d-flex flex-column gap-3 p-5">
                         <h6 class="title">Statistic</h6>
                         <h1 class="head w-75">Mental Health by the Numbers</h1>
                         <p class="story">Vulputate bibendum erat morbi interdum diam sit. Eu sit dolor vel sodales sed nibh ut. Ac fringilla fames eget a aliquet. Gravida placerat viverra purus sed ac ultricies sem nulla.</p>
                         <div class="row row-cols-2 g-4">
                              <div class="d-flex justify-content-center align-items-center flex-column">
                                   <div class="num">500+</div>
                                   <div class="numText w-50">SATISFIED CLIENTS</div>
                              </div>
                              <div class="d-flex justify-content-center align-items-center flex-column">
                                   <div class="num">1,200+</div>
                                   <div class="numText w-50">POSITIVE REVIEWS</div>
                              </div>
                              <div class="d-flex justify-content-center align-items-center flex-column">
                                   <div class="num">200+</div>
                                   <div class="numText w-50">WORKSHOPS HELD</div>
                              </div>
                              <div class="d-flex justify-content-center align-items-center flex-column">
                                   <div class="num">1,800+</div>
                                   <div class="numText w-50">THERAPY SESSIONS</div>
                              </div>
                         </div>
                    </div>
               </div>
         </div>
     </section>

     <!-- ----------- faq -------------- -->
     <section class="faqs d-flex justify-content-center align-items-center">
         <div class="container">
               <div class="row row-cols-2 align-items-center">
                    <div class="col d-flex flex-column gap-3 p-5">
                         <h6 class="title">FAQ</h6>
                         <h1 class="head">Your Questions Answered</h1>
                         <div class="accordion accordion-flush" id="accordionFlushExample">
                              <div class="accordion-item">
                                   <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                             How can I schedule an appointment?
                                        </button>
                                   </h2>
                                   <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                   <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                   </div>
                              </div>
                              <div class="accordion-item">
                                   <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                             Do you accept insurance?
                                        </button>
                                   </h2>
                                   <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                   <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                   </div>
                              </div>
                              <div class="accordion-item">
                                   <h2 class="accordion-header">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        What types of payment do you accept?
                                   </button>
                                   </h2>
                                   <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                   <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                   </div>
                              </div>
                              <div class="accordion-item">
                                   <h2 class="accordion-header">
                                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        Are your services confidential?
                                   </button>
                                   </h2>
                                   <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                   <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div><img src="images/Image-9.png" alt=""></div>
               </div>
         </div>
     </section>

     

     <!-- BootStrap Js -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>