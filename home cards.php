<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="home.card.css">
    <title>Title</title>
</head>

<body id="body">

    <header id="home" class="sticky top-0 shadow-lg z-30" style="z-index: 2;">
        <div class="top-header text-black bg-white">
            <div class="lg:flex lg:justify-between lg:items-center  max-w-7xl mx-auto px-[16px] py-[12px]">
                <div class="flex justify-center items-center lg:block">

                    <div class="side-nav lg:hidden absolute left-4 cursor-pointer">
                        <input type="checkbox" name="" onclick="FuncClick()" id="shopping-cart-checkbox" class="" autocompleted="">
                        <label for="shopping-cart-checkbox" class="uncheck-label text-black trans"><i class="fas fa-bars text-2xl"></i></label>
                    </div>
                    <div class="side-nav-f fixed top-0 bottom-0 w-full max-w-[17rem] z-10 bg-[#000000] trans -left-[17rem]" id="SideNav" style="transition: 0.5s ease-in-out;">
                        <div class="w-full py-5 flex justify-between items-center px-4">

                            <img src="https://livsham.softwarebyte.co/frontend/images/logo.png" alt="logo" class="w-[100px]">
                            <label for="shopping-cart-checkbox" class=" transform hover:scale-150 transition duration-500 ease-in-out" onclick="FuncClick()">
                                <i class="bi bi-x-circle text-gray-500 hover:text-white px-[3px] rounded-md"></i>
                            </label>
                        </div>
                        <div class="text-white">
                            <ul>
                                <li class="border-t-2 border-gray-600 py-2 px-10 hover:px-10 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Logga in</a>
                                </li>
                                <li class="border-t-2 border-gray-600 py-2 px-10 hover:px-10 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Bli Medlem</a>
                                </li>
                                <li class="border-t-2 border-gray-600 py-2 px-10 hover:px-10 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Hem</a>

                                </li>

                                <li class="border-t-2 border-gray-600 py-2 px-10 hover:px-10 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Handla om</a>
                                </li>
                                <li class="border-t-2 border-gray-600 py-2 px-10 hover:px-10 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Kontakter</a>
                                </li>

                                <li class="border-t-2 border-gray-600  py-2 transition-all ease-in-out hover:text-green-600 font-bold">

                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-heading1">
                                                <button style="background-color: black; color: white;" class="nav-accordion-button accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
                                                    Fruit & Vegitable
                                                </button>
                                            </h2>
                                            <div style="visibility: visible;" id="panelsStayOpen-collapse1" class="accordion-collapse" aria-labelledby="panelsStayOpen-heading1">
                                                <div style="background-color: black;" class="accordion-body">
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Fruit & Vegitable
                                                            </a>

                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Vegetables
                                                                        <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Fruit<span>(73)</span> </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Potatoes &
                                                                        Onions <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Bear <span>(136
                                                                            )</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Cabbage plants
                                                                        <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Sponge
                                                                        <span>(45)</span> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Dairy, cheese & juice
                                                            </a>

                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="fruit.html">Ost
                                                                        <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">juice &
                                                                        drinks<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Milk
                                                                        <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Cheese
                                                                        <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Yogurt
                                                                        <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Plant
                                                                        based <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">snackes &
                                                                        dessert <span>(18)</span> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Bread & bakery
                                                            </a>

                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Bread <span>(44)</span>
                                                                    </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Crackers &
                                                                        crusts<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Biscuits & cookies
                                                                        <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">hamburger bread
                                                                        <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Coffee bread & cakes
                                                                        <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Snack <span>(45)</span>
                                                                    </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Drink
                                                            </a>

                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Soda
                                                                        <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Coffee<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Juice and still
                                                                        drink <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Mineral water
                                                                        <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">oil
                                                                        <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cider, must &
                                                                        drinkmixer <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Functional drinks
                                                                        <span>(18)</span> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </li>

                                <li class="border-t-2 border-gray-600  py-2 transition-all ease-in-out hover:text-green-600 font-bold">

                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-heading2">
                                                <button style="background-color: black; color: white;" class="nav-accordion-button accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="true" aria-controls="panelsStayOpen-collapse2">
                                                    Fruit & Vegitable
                                                </button>
                                            </h2>
                                            <div style="visibility: visible;" id="panelsStayOpen-collapse2" class="accordion-collapse" aria-labelledby="panelsStayOpen-heading2">
                                                <div style="background-color: black;" class="accordion-body">
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Fruit & Vegitable
                                                            </a>

                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Vegetables
                                                                        <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Fruit<span>(73)</span>
                                                                    </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Potatoes &
                                                                        Onions <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Bear <span>(136
                                                                            )</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Cabbage plants
                                                                        <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Sponge
                                                                        <span>(45)</span> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Dairy, cheese & juice
                                                            </a>

                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="fruit.html">Ost
                                                                        <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">juice &
                                                                        drinks<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Milk
                                                                        <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Cheese
                                                                        <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Yogurt
                                                                        <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Plant
                                                                        based <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">snackes &
                                                                        dessert <span>(18)</span> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Bread & bakery
                                                            </a>

                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Bread <span>(44)</span>
                                                                    </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Crackers &
                                                                        crusts<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Biscuits & cookies
                                                                        <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">hamburger bread
                                                                        <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Coffee bread & cakes
                                                                        <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Snack <span>(45)</span>
                                                                    </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Drink
                                                            </a>

                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Soda
                                                                        <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Coffee<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Juice and still
                                                                        drink <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Mineral water
                                                                        <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">oil
                                                                        <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cider, must &
                                                                        drinkmixer <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Functional drinks
                                                                        <span>(18)</span> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </li>

                                <li class="border-t-2 border-gray-600  py-2 transition-all ease-in-out hover:text-green-600 font-bold">

                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-heading3">
                                                <button style="background-color: black; color: white;" class="nav-accordion-button accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="true" aria-controls="panelsStayOpen-collapse3">
                                                    Fruit & Vegitable
                                                </button>
                                            </h2>
                                            <div style="visibility: visible;" id="panelsStayOpen-collapse3" class="accordion-collapse" aria-labelledby="panelsStayOpen-heading3">
                                                <div style="background-color: black;" class="accordion-body">
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Fruit & Vegitable
                                                            </a>

                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Vegetables
                                                                        <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Fruit<span>(73)</span>
                                                                    </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Potatoes &
                                                                        Onions <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Bear <span>(136
                                                                            )</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Cabbage plants
                                                                        <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit-and-vegitable.html">Sponge
                                                                        <span>(45)</span> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Dairy, cheese & juice
                                                            </a>

                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="fruit.html">Ost
                                                                        <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">juice &
                                                                        drinks<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Milk
                                                                        <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Cheese
                                                                        <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Yogurt
                                                                        <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">Plant
                                                                        based <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="fruit.html">snackes &
                                                                        dessert <span>(18)</span> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Bread & bakery
                                                            </a>

                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Bread <span>(44)</span>
                                                                    </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Crackers &
                                                                        crusts<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Biscuits & cookies
                                                                        <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">hamburger bread
                                                                        <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Coffee bread & cakes
                                                                        <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="citrus fruit.html">Snack <span>(45)</span>
                                                                    </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Drink
                                                            </a>

                                                            <ul class="dropdown-menu nav-dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Soda
                                                                        <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Coffee<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Juice and still
                                                                        drink <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Mineral water
                                                                        <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">oil
                                                                        <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cider, must &
                                                                        drinkmixer <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Functional drinks
                                                                        <span>(18)</span> </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </li>


                                <!-- <li
                                    class="border-t-2 border-gray-600  py-2 transition-all ease-in-out hover:text-green-600 font-bold">

                                    <div class="accordion-item">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-collapseTwo">
                                                <button style="background-color: black; color: white;" class="nav-accordion-button accordion-button collapsed " type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapseTwo">
                                                    Dairy, cheese & juice
                                                </button>
                                            </h2>
                                            <div style="visibility: visible;" id="panelsStayOpen-collapseTwo" class="accordion-collapse"
                                                aria-labelledby="panelsStayOpen-collapseTwo">
                                                <div style="background-color: black;" class="accordion-body">
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Fruit & Vegitable
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" >
                                                                <li><a class="dropdown-item" href="#">Vegetables <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Fruit<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Potatoes & Onions <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Bear <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cabbage plants <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Sponge <span>(45)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                              Dairy, cheese & juice
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Ost <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">juice & drinks<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Milk <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cheese <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Yogurt <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Plant based <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">snackes & dessert <span>(18)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Bread & bakery
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Bread <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Crackers & crusts<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Biscuits & cookies <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">hamburger bread <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Coffee bread & cakes <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Snack <span>(45)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Drink
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Soda <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Coffee<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Juice and still drink <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Mineral water <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">oil <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cider, must & drinkmixer <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Functional drinks <span>(18)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li
                                    class="border-t-2 border-gray-600  py-2 transition-all ease-in-out hover:text-green-600 font-bold">

                                    <div class="accordion-item">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-collapseThree">
                                                <button style="background-color: black; color: white;" class="nav-accordion-button accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                                                    aria-controls="panelsStayOpen-collapseThree">
                                                    Fruit & Vegitable
                                                </button>
                                            </h2>
                                            <div style="visibility: visible;" id="panelsStayOpen-collapseThree" class="accordion-collapse"
                                                aria-labelledby="panelsStayOpen-collapseThree">
                                                <div style="background-color: black;" class="accordion-body">
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Fruit & Vegitable
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" >
                                                                <li><a class="dropdown-item" href="#">Vegetables <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Fruit<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Potatoes & Onions <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Bear <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cabbage plants <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Sponge <span>(45)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                              Dairy, cheese & juice
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Ost <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">juice & drinks<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Milk <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cheese <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Yogurt <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Plant based <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">snackes & dessert <span>(18)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Bread & bakery
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Bread <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Crackers & crusts<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Biscuits & cookies <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">hamburger bread <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Coffee bread & cakes <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Snack <span>(45)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                
                                                    <div class="col-lg-12 my-2">
                                                        <div style="background-color: black; margin: 0;" class="dropdown">
                                                            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Drink
                                                            </a>
                                                          
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Soda <span>(44)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Coffee<span>(73)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Juice and still drink <span>(5)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Mineral water <span>(136 )</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">oil <span>(14)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Cider, must & drinkmixer <span>(45)</span> </a></li>
                                                                <li><a class="dropdown-item" href="#">Functional drinks <span>(18)</span> </a></li>
                                                              </ul>
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> -->



                            </ul>
                        </div>


                    </div>

                    <h1 class="p-3 lg:pb-0"><a href="home cards.html">
                            <picture>
                                <img src="images/logo.png" alt="" class="" width="160px">
                            </picture>
                        </a></h1>

                </div>

                <form class="nav-search" action="" method="POST">
                    <div class="search-bar flex items-center  border-2 border-green-700 bg-white text-black  overflow-hidden ">
                        <ul class="" id="drop-down-box">
                        </ul>

                        <div class="flex items-center justify-center pr-[16px]">
                            <i class="fa fa-search"></i>
                        </div>
                        <input type="hidden" name="_token" value="iiEynT7XUYtwhb4BoR4zQ66K8q1K3t0BqlDABV0l">
                        <div class="w-full py-[14px]" id="searchWrapper">

                            <input id="SearchInput" type="search" name="searchbar" type="text" class="w-full focus:outline-none" placeholder="Here you search for products and recipes">



                        </div>

                        <button type="submit" class="hidden lg:block hover:bg-green-900 bg-green-700 text-white h-[40px] px-10 rounded-md">Search
                        </button>

                        <!-- <div class="wrapper">
                            <ul class="drop-down-box" id="drop-down-box">
                                <li>some-content</li>
                                <li>some-content</li>
                                <li>some-content</li>
                                <li>some-content</li>
                            </ul>
                        </div> -->

                    </div>
                </form>
                <div class="lg:flex items-center hidden lg:inline-block">

                    <span class="mr-1">
                        <a href="login.html"><i class="fa fa-user mr-2  login-icon">
                            </i>Log In</a>
                    </span>
                </div>
            </div>
        </div>
        <div class="bottom-header whitespace-nowrap bg-green-700 text-white">
            <div class="max-w-7xl hidden lg:flex items-center justify-between py-0 mx-auto">
                <div class="flex items-center space-x-12">
                    <div class="antialiased">
                        <div class="">
                            <div class="group inline-block relative">
                                <a href="home cards.html" class="bg-green-700 text-white font-semibold py-2 px-4 rounded inline-flex items-center" style="font-size: 18px; font-weight: 600;">
                                    <span class="">Home</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="antialiased">
                        <div class="">
                            <div class="group inline-block relative">
                                <a class="bg-green-700 text-white font-semibold  py-4 px-4 rounded inline-flex items-center cursor-pointer" style="font-size: 18px; font-weight: 600;">
                                    <span class="">Category</span>

                                </a>
                                <div class="absolute  hidden text-gray-700 group-hover:block bg-white p-8 pb-10 rounded-b-[60px] overflow-hidden" style="box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.06);">
                                    <div class="flex space-x-4">
                                        <ul class="drop-down-link pr-16 border-r-2 border-gray-300">
                                            <li><a href="fruit-and-vegitable.html">Fruit
                                                    &amp; Vegetables</a>
                                            </li>
                                            <li>
                                                <a href="Dairy chees and juice.html">Dairy, Cheese & Juice</a>
                                            </li>
                                            <li>
                                                <a href="bakery and bread.html">Bread & bakery</a>
                                            </li>
                                            <li>
                                                <a href="drinks.html">Drinks</a>
                                            </li>
                                            <li>
                                                <a href="pantery.html">Pantery</a>
                                            </li>
                                            <li>
                                                <a href="fish and shell fish.html">Fish Shellfish</a>
                                            </li>

                                            <li>
                                                <a href="meat.html">Meat</a>
                                            </li>
                                        </ul>
                                        <ul class="drop-down-link pr-16 border-r-2 border-gray-300">
                                            <li>
                                                <a href="ready meal.html">Ready meals & snacks</a>
                                            </li>

                                            <li>
                                                <a href="baby accessories.html">baby food & accessories</a>
                                            </li>

                                            <li>
                                                <a href="spices and flavouring.html">spices & Flavorings</a>
                                            </li>

                                            <li>
                                                <a href="pet food.html">Pet food & accessories</a>
                                            </li>

                                        </ul>

                                        <ul class="pr-16 border-r-2 border-gray-300">
                                            <li><a href="fruit-and-vegitable.html">Fruit
                                                    &amp; Vegetables</a></li>
                                            <li><a href="">Milk</a>
                                            </li>
                                            <li><a href="">Bread</a>
                                            </li>

                                        </ul>

                                        <!-- <div class="space-y-2">
                                            <div class="bg-green-300 w-36 h-8">
                                            </div>
                                            <div class="bg-red-300 w-36 h-8">
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="antialiased">
                        <div class="">
                            <div class="group inline-block relative">
                                <a class="bg-green-700 text-white font-semibold  py-4 px-4 rounded inline-flex items-center cursor-pointer" style="font-size: 18px; font-weight: 600;">
                                    <span class="">Offers
                                    </span>

                                </a>
                                <!-- <div
                                    class="absolute hidden text-gray-700 group-hover:block bg-white p-8 pb-10 rounded-b-[60px] overflow-hidden mt-0">
                                    <div class="flex space-x-4">


                                        <ul class="pr-16 border-r-2 border-gray-300">
                                            <li><a
                                                    href="https://livsham.softwarebyte.co/product/category?offer=1">Wheat</a>
                                            </li>
                                            <li><a
                                                    href="https://livsham.softwarebyte.co/product/category?offer=3">Fruits</a>
                                            </li>
                                            <li><a href="https://livsham.softwarebyte.co/product/category?offer=5">Fruit
                                                    &amp; Vegetables</a></li>
                                        </ul>
                                        <ul class="pr-16 border-r-2 border-gray-300">
                                            <li><a
                                                    href="https://livsham.softwarebyte.co/product/category?offer=7">Bread</a>
                                            </li>
                                            <li><a href="https://livsham.softwarebyte.co/product/category?offer=8">Pasta
                                                    &amp; Pasta Sauce</a></li>

                                        </ul>
                                        <hr>
                                        <hr>
                                        <div class="space-y-2">
                                            <div class="bg-green-300 w-36 h-8">
                                            </div>
                                            <div class="bg-red-300 w-36 h-8">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">

                    <div class="antialiased hidden">
                        <div class="">
                            <div class="group inline-block relative">
                                <a class="bg-green-700 text-white font-semibold py-2 px-4 rounded inline-flex items-center">
                                    <span class="mr-1"></span></a><a href="https://livsham.softwarebyte.co/register">Ny
                                    kund</a>
                            </div>
                        </div>
                    </div>
                    <div class="antialiased">
                        <div class="">
                            <div class="group inline-block relative">
                                <a class="bg-green-700 text-white font-semibold py-2 px-4 rounded inline-flex items-center">
                                    <input type="checkbox" name="Shopping-cartbtn" id="Shopping-cartbtn" value="false" class="hidden">
                                    <label for="Shopping-cartbtn">
                                        <h1 class="cart-open h-[40px] px-16 border-2 border-white bg-white font-extrabold rounded-md pb-[1px] whitespace-nowrap flex justify-center items-center cursor-pointer tracking-wider">
                                            <img style="width: 100px;" src="images/logo.png" alt="logo" class="w-8 mr-2">
                                        </h1>

                                    </label>
                                    <div class="px-2 py-1 bg-red-500 border-2 border-white text-white rounded-full text-xs font-semibold tracking-wider -mt-9 -ml-4 hidden" id="">
                                        0
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    <div class="down-nav">
        <div class="d-nav-icons">
            <span><a href="home cards.html">
                    <i class="bi bi-house-door-fill"></i>
                    <p>Home</p>
                </a></span>

            <span><a href="catagories.html">
                    <i class="bi bi-list"></i>
                    <p>Catrgory</p>
                </a></span>

            <span><a href="favoutite.html">
                    <i class="bi bi-heart-fill"></i>
                    <p>Favourite</p>
                </a></span>

            <span class="cart-open-1 cursor-pointer">
                <i class="bi bi-cart-fill"></i>
                <p>Cart</p>
            </span>
        </div>
    </div>


    <a class="to-top" href="#">
        <i class="fa fa-chevron-up"></i>
    </a>
    <!-- ----------------green----------- -->

    <div class="green">
        <div class="container">
            <div class="row">
                <div class="green-box col-lg-10 mx-auto">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="row">

                                <div class="green-box-1 col-lg-6 mx-auto">
                                    <div class="green-img">
                                        <img src="images/price.svg" alt="">
                                    </div>

                                    <div class="green-content">
                                        <h2>Now lower prices</h2>
                                        <p>We've reduced the price <br> of lots of favorite items</p>
                                    </div>
                                </div>

                                <div class="green-box-2 col-lg-6 mx-auto">
                                    <div class="green-img">
                                        <img src="images/truck.svg" alt="">
                                    </div>

                                    <div class="green-content">
                                        <h2>Now lower prices</h2>
                                        <p>We've reduced the price <br> of lots of favorite items</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------carousel----------- -->

    <div class="carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 mx-auto">

                    <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/slider-3.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/grocries.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/slider-1.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ---------------card-slider------------>

    <div class="card-slider col-lg-10 mx-auto">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto d-flex" style="justify-content: space-between; align-items: center;">
                    <div class="slider-heading">
                        <h1>This week's extra prices</h1>
                    </div>

                    <div class="slider-btn">
                        <h3>Visa alla</h3>

                        <div class="custom-btn">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- -----------------cards---------- -->

    <section class="livshem-cards col-lg-10 mx-auto">
        <div class="home-cards">
            <div class="container">
                <div id="products" class="row">


                </div>
            </div>
        </div>
    </section>

    <div class="more">
        <button class="load-more">Load more</button>
    </div>

    <!-- ---------------------card-pop-up----------------------- -->

    <div class="products-preview">

        <div class="preview" data-target="p-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/1.PNG" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>

                        <div class="buy-now">
                            <div class="buy-content">
                                <span>
                                    <h4 class="discount-price">50:-</h4>
                                    <p>62:34/kg <span>100:-</span></p>
                                </span>

                                <div class="card-counter d-flex">
                                    <a><i class="bi bi-dash-circle-fill minus"></i></a>
                                    <input type="number" class="st" value="0" size="2">
                                    <a><i class="bi bi-plus-circle-fill plus"></i></a>

                                    <button class="first-btn">
                                        <p>kop</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/2.webp" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/3.webp" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/4.webp" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/5.webp" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/6.PNG" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/7.webp" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/8.jpg" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-9">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/9.jpeg" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/10.webp" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-11">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/11.jpg" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview" data-target="p-12">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <i class="bi bi-x"></i>
                        <img src="images/12.webp" alt="">

                        <div class="like">
                            <i class="bi bi-heart"></i>
                        </div>

                        <div class="links">
                            <i class="bi bi-house-door-fill"></i>
                            <h4> Frukt & Grönt</h4>
                            <h4> Grönsaker</h4>
                            <h4> Sallat</h4>
                            <h4> Romansallat</h4>
                        </div>

                        <div class="product">
                            <div class="product-1">
                                <h1>Roman salad Class 1</h1>
                                <p>250 g</p>
                            </div>

                            <div class="product-button">
                                <a href="#" class="product-btn">Fruit & Vegitables</a>
                            </div>
                        </div>


                        <div class="accordion" id="accordionPanelsStayOpenExample" style="width: 100%;">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        Product information
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <strong>This is the first item's accordion body.</strong> It is shown by
                                        default,
                                        until the
                                        collapse plugin adds the appropriate classes that we use to style each element.
                                        These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can
                                        modify any of this with custom CSS or overriding our default variables. It's
                                        also
                                        worth noting
                                        that just about any HTML can go within the <code>.accordion-body</code>, though
                                        the
                                        transition
                                        does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product-country">
                            <i class="bi bi-globe"></i>

                            <div class="country-info">
                                <p>Origin</p>
                                <h3>Spain</h3>
                            </div>
                        </div>

                        <div class="product-discription">
                            <h5>Good to know</h5>
                            <p>Note, changes in the products' content may occur. Therefore, always check the product
                                information on the
                                packaging. For questions about the contents of non-prepackaged food, contact Customer
                                Service.</p>

                            <h5>Nutritional content</h5>
                            <p>Nutritional value per 100g. Energy: 17 kcal/71 kJ, Water: 94.61g, Protein: 1.23g, Fat:
                                0.3g
                                of which
                                saturated 0.04g of which monounsaturated 0.01g of which polyunsaturated 0.16g,
                                Carbohydrates: 3.29g of
                                which sugars 1, 19g, Fibre: 2.1g Vitamin C: 24mg, Niacin: 0.31mg, B2: 0.07mg, B1:
                                0.07mg,
                                B6: 0.07mg,
                                Carotene: 3484mcg, Alpha-tocopherol: 0.13mg, Phosphorus : 30mg, Iron: 0.97mg, Calcium:
                                33mg,
                                Potassium:
                                247mg, Magnesium: 14mg, Sodium: 8mg, Zinc: 0.23mg.</p>

                            <h5>Storage</h5>
                            <p>Store cold in the coldest part of the refrigerator. Is sensitive to drying out, therefore
                                preferably
                                stored in plastic. Keeps well for a week or so.</p>

                            <h5>Use</h5>
                            <p>Romaine lettuce is good for making green salad mixed with other types of lettuce. The
                                classic
                                Caesar
                                salad is made with romaine lettuce.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ---------------cta-------------- -->

    <section class="cta-box">
        <div class="container">
            <div class="row">
                <div class="cta col-lg-10 col-md-12 mx-auto">
                    <h1>Good evening!</h1>
                    <span>
                        <h3>Ta en titt på vår</h3>
                        <a href="#">Recept</a>
                    </span>
                </div>
            </div>
        </div>
    </section>


    <!-- ---------------cart-------------- -->

    <section class="cart " tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="cart-heading">
            <h3>Shopping cart</h3>
            <p id="continue-shopping">Countinue to shopping</p>
        </div>

        <div class="cart-progress-bar">
            <span>
                <h3 id="p_message">Shop for 1000 more</h3>
                <i class="bi bi-exclamation-circle"></i>
            </span>

            <div class="progress">
                <div id="p-bar" class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

            <p id="p_message2">then you avoid the fee of SEK 95 for a small shopping basket</p>
        </div>

        <div id="cart-product" class="cart-product">
            <h2 class="ms-3" id="message"></h2>
        </div>
        </div>

        <div class="cart-icons">
            <span>
                <i class="bi bi-cart-fill"></i>
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Save as shopping
                    list</button>

                <span>
                    <i class="bi bi-trash" style="color: rgb(0, 118, 33);"></i>
                    <button style="color: rgb(0, 118, 33);" data-bs-toggle="modal" data-bs-target="#staticBackdrop">empty basket</button>
                </span>
        </div>


        <div class="summa total">

            <span>
                <h2>Delivery</h2>
                <h2 id="delivery">95</h2>
            </span>
            <span>
                <h2>Total</h2>
                <h2 id="total"></h2>
            </span>
            <div class="total">

                <span>
                    <h2>Grand Total</h2>
                    <h2 id="grand_total"></h2>
                </span>
            </div>
        </div>


        <div class="To-cheackout">
            <div class="buy-content">
                <span>
                    <h4>Shopping cart</h4>
                </span>


                <a href="#"><button id="checkout" type="button" onclick="Checkout()" disabled>Checkout</button>
                </a>
            </div>
        </div>
    </section>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose the name of the shopping list:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Add items to list:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="display: flex; justify-content: space-around; ">
                    <button type="button" class="btn modal-btn-1" data-bs-dismiss="modal">cancel</button>
                    <button type="button" class="btn modal-btn-2">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Start a new shopping cart?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Do you really want to start a new shopping cart?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn modal-btn-3" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="EmptyCart()" class="btn modal-btn-4">Understood</button>
                </div>
            </div>
        </div>
    </div>


    </span>


    <!-- -----------------footer------------->

    <section class="footer ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mx-auto">
                    <h2>Handla</h2>
                    <p>Sa handler du pa livesham.se</p>
                    <p>Vanliga Fragor</p>
                    <p>Koplivkor</p>
                    <p>GDPR</p>
                </div>

                <div class="col-lg-3 col-md-6 mx-auto">
                    <h2>Livesham</h2>
                    <p>Om Livesham</p>
                    <p>KonKata Oss</p>
                    <p>Facebook</p>
                    <p>Instagram</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h2>Betalning</h2>
                    <img src="images/klarna-logo.webp" alt="">
                </div>
            </div>

            <h5 class="col-lg-11 mx-auto">Copyright © 2022 livshem.se</h5>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        src = "https://code.jquery.com/jquery-3.6.3.min.js"
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>
    <script src="home-card.js"></script>

    <script>

    </script>

</body>

</html>