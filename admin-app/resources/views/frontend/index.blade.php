@extends('frontend.include.venderapp')

@section('contents')
    <header>
        <section class="reviewTop_menuArea">
            <div class="container">
                <div class="reviewTop_menuBodyContainer">
                    <div class="logoAndContent">
                        <div class="logoImageBox">
                            <img src="images/logo-img.png">
                        </div>
                        <div class="cafeName_andLocation">
                            <h5>Le Cafe</h5>
                            <p><i class="fa-solid fa-location-dot"></i>78 Sazz Street, India</p>
                            <a href="#" class="btn openButton">OPEN</a>
                        </div>
                    </div>
                    <div class="cafeShope_imageBox">
                        <img src="images/background-image.jpg">
                    </div>
                    <div class="cafeTimeContent">
                        <p><i class="fa-regular fa-clock"></i> time:12:00AM-11:59PM</p>
                    </div>
                </div><!-- reviewTop_menuBodyContainer end-->
            </div><!-- container -->
        </section><!-- reviewTop_menuArea end-->
    </header>
    <main>
        <section class="shopItems_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-sm-12">
                            <form action="">
                                <div class="shopItems_searchBox">
                                    <input type="text" name="search" placeholder="search you favourite items...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div><!-- shopItems_searchBox -->
                            </form>
                        <div class="soupItemsArea">
                            <div class="soupItemTittle">
                                <p>Soup</P>
                                <span>(2 ITEMS)</span>
                            </div>
                            <div class="soupItemsInfo">
                                <div class="mushroomItems_imgAndNameBox">
                                    <div class="itemsImgBox">
                                        <img src="images/mushroom1.jpeg">
                                    </div>
                                    <div class="mushroomItems_NameAndButton">
                                        <div class="itemName">
                                            <h5><span></span> Spinach Mushroom Soup</h5>
                                            <p><i class="fa-solid fa-dollar-sign"></i> 240.00-300 mililitre</p>
                                        </div>
                                        <div class="itemsButton">
                                            <a href="#" class="btn">ADD</a>
                                        </div>
                                    </div><!-- itemsNameAndButton -->
                                </div><!-- firstItems_imgAndNameBox -->
                                <div class="noodleItems_imgAndNameBox">
                                    <div class="itemsImgBox">
                                        <img src="images/chicken-noods1.jpg">
                                    </div>
                                    <div class="noodleItems_NameAndButton">
                                        <div class="itemName">
                                            <h5><span></span> chicken noodle soup</h5>
                                            <p><i class="fa-solid fa-dollar-sign"></i> 140.00-300 mililitre</p>
                                        </div>
                                        <div class="itemsButton">
                                            <a href="#" class="btn">ADD</a>
                                        </div>
                                    </div><!-- noodleItems_NameAndButton -->
                                </div><!-- noodleItems_imgAndNameBox -->
                            </div><!-- soupItemsInfo -->
                        </div><!-- soupItemsArea -->

                        <div class="coffeeItemsArea">
                            <div class="coffeeItemTittle">
                                <p>Coffee</P>
                                <span>(3 ITEMS)</span>
                            </div>
                            <div class="coffeeItemsInfo">
                                <div class="blackCoffee_imgAndNameBox">
                                    <div class="itemsImgBox">
                                        <img src="images/black-coffee1.jpeg">
                                    </div>
                                    <div class="blackCoffee_nameAndButton">
                                        <div class="itemName">
                                            <h5><span></span> Black Coffee</h5>
                                            <p><del><i class="fa-solid fa-dollar-sign"></i> 100</del> <i class="fa-solid fa-dollar-sign"></i> 80.00 - 150 mililitre</p>
                                        </div>
                                        <div class="itemsButton">
                                            <a href="#" class="btn">ADD</a>
                                        </div>
                                    </div><!-- blackCoffee_nameAndButton -->
                                </div><!-- blackCoffee_imgAndNameBox -->
                                <div class="espressoCoffee_imgAndNameBox">
                                    <div class="itemsImgBox">
                                        <img src="images/cup-coffee.jpg">
                                    </div>
                                    <div class="espressoCoffee_NameAndButton">
                                        <div class="itemName">
                                            <h5><span></span> Espresso</h5>
                                            <p><i class="fa-solid fa-dollar-sign"></i> 80.00-50 mililitre</p>
                                        </div>
                                        <div class="itemsButton">
                                            <a href="#" class="btn">ADD</a>
                                        </div>
                                    </div><!-- espressoCoffee_NameAndButton -->
                                </div><!-- espressoCoffee_imgAndNameBox -->
                                <div class="cafeLatte_imgAndNameBox">
                                    <div class="itemsImgBox">
                                        <img src="images/cafe1.jpeg">
                                    </div>
                                    <div class="cafeLatte_nameAndButton">
                                        <div class="itemName">
                                            <h5><span></span> Cafe Latte</h5>
                                            <p><i class="fa-solid fa-dollar-sign"></i> 120.00-300 mililitre</p>
                                        </div>
                                        <div class="itemsButton">
                                            <a href="#" class="btn">ADD</a>
                                        </div>
                                    </div><!-- cafeLatte_nameAndButton -->
                                </div><!-- cafeLatte_imgAndNameBox -->
                            </div><!-- coffeeItemsInfo -->
                        </div><!-- soupItemsArea -->

                        <div class="teaItemsArea">
                            <div class="teaItemTittle">
                                <p>Tea</P>
                                <span>(2 ITEMS)</span>
                            </div>
                            <div class="teaItemsInfo">
                                <div class="masalaChaiItems_imgAndNameBox">
                                    <div class="itemsImgBox">
                                        <img src="images/masala-chai1.jpeg">
                                    </div>
                                    <div class="masalaChaiItems_NameAndButton">
                                        <div class="itemName">
                                            <h5><span></span> Masala Chai</h5>
                                            <p><i class="fa-solid fa-dollar-sign"></i> 240.00-300 mililitre</p>
                                        </div>
                                        <div class="itemsButton">
                                            <a href="#" class="btn">ADD</a>
                                        </div>
                                    </div><!-- itemsNameAndButton -->
                                </div><!-- masalaChaiItems_imgAndNameBox -->
                                <div class="morocconteaItems_imgAndNameBox">
                                    <div class="itemsImgBox">
                                        <img src="images/moroccan-tea.jpeg">
                                    </div>
                                    <div class="morocconteaItems_NameAndButton">
                                        <div class="itemName">
                                            <h5><span></span> Moroccan tea</h5>
                                            <p><i class="fa-solid fa-dollar-sign"></i> 120.00-200 mililitre</p>
                                        </div>
                                        <div class="itemsButton">
                                            <a href="#" class="btn">ADD</a>
                                        </div>
                                    </div><!-- morocconteaItems_NameAndButton -->
                                </div><!-- morocconteaItems_imgAndNameBox -->
                            </div><!-- teaItemsInfo -->
                        </div><!-- teaItemsArea -->

                        <div class="pizzaAndPasta_itemsArea">
                            <div class="pizzaAndPastaItemTittle">
                                <p>Pizza and Pasta</P>
                                <span>(3 ITEMS)</span>
                            </div>
                            <div class="pizzaAndPasta_itemsInfo">
                                <div class="margaritaPizza_imgAndNameBox">
                                    <div class="itemsImgBox">
                                        <img src="images/pizza1.jpeg">
                                    </div>
                                    <div class="margaritaPizza_nameAndButton">
                                        <div class="itemName">
                                            <h5><span></span> Pizza Margarita</h5>
                                            <p><i class="fa-solid fa-dollar-sign"></i> 200.00 - 1 piece</p>
                                        </div>
                                        <div class="itemsButton">
                                            <a href="#" class="btn">ADD</a>
                                        </div>
                                    </div><!-- margaritaPizza_nameAndButton -->
                                </div><!-- margaritaPizza_imgAndNameBox -->
                                <div class="paneerPizza_imgAndNameBox">
                                    <div class="itemsImgBox">
                                        <img src="images/pizza2.jpeg">
                                    </div>
                                    <div class="paneerPizza_NameAndButton">
                                        <div class="itemName">
                                            <h5><span></span> Paneer pizza</h5>
                                            <p><i class="fa-solid fa-dollar-sign"></i> 140.00 - 1 piece</p>
                                        </div>
                                        <div class="itemsButton">
                                            <a href="#" class="btn">ADD</a>
                                        </div>
                                    </div><!-- paneerPizza_NameAndButton -->
                                </div><!-- paneerPizza_imgAndNameBox -->
                                <div class="chickenPizza_imgAndNameBox">
                                    <div class="itemsImgBox">
                                        <img src="images/pizza3.jpeg">
                                    </div>
                                    <div class="chickenPizza_nameAndButton">
                                        <div class="itemName">
                                            <h5><span></span> Chicken pizza</h5>
                                            <p><i class="fa-solid fa-dollar-sign"></i> 200.00-1 piece</p>
                                        </div>
                                        <div class="itemsButton">
                                            <a href="#" class="btn">ADD</a>
                                        </div>
                                    </div><!-- chickenPizza_nameAndButton -->
                                </div><!-- chickenPizza_imgAndNameBox -->
                            </div><!-- pizzaAndPasta_itemsInfo -->
                        </div><!-- pizzaAndPasta_itemsArea -->

                        <div class="recommendedItemsArea">
                            <div class="recommendedItemTittle">
                                <p>Recommended</P>
                                <span>(2 ITEMS)</span>
                            </div>
                            <div class="recommendedItemsInfo">
                                <div class="saladItems_imgAndNameBox">
                                    <div class="itemsImgBox">
                                        <img src="images/salad.jpeg">
                                    </div>
                                    <div class="saladItems_NameAndButton">
                                        <div class="itemName">
                                            <h5><span></span> Spiced Arugula and Feta Salad</h5>
                                            <p>very very spicey...</p>
                                            <p><del><i class="fa-solid fa-dollar-sign"></i> 360</del> <i class="fa-solid fa-dollar-sign"></i> 300.00-250 gram</p>
                                        </div>
                                        <div class="itemsButton">
                                            <a href="#" class="btn">ADD</a>
                                        </div>
                                    </div><!-- saladItems_NameAndButton -->
                                </div><!-- saladItems_imgAndNameBox -->
                                <div class="breastItems_imgAndNameBox">
                                    <div class="itemsImgBox">
                                        <img src="images/breats.jpeg">
                                    </div>
                                    <div class="breastItems_NameAndButton">
                                        <div class="itemName">
                                            <h5><span></span> Grilled Chicken Breast</h5>
                                            <p><i class="fa-solid fa-dollar-sign"></i> 200.00-300 gram</p>
                                        </div>
                                        <div class="itemsButton">
                                            <a href="#" class="btn">ADD</a>
                                        </div>
                                    </div><!-- breastItems_NameAndButton -->
                                </div><!-- breastItems_imgAndNameBox -->
                            </div><!-- recommendedItemsInfo -->
                        </div><!-- recommendedItemsArea -->

                        <!-- Button trigger modal -->
                        <button type="button" class="btn modalButoonStyle" data-toggle="modal" data-target="#exampleModal">
                            <div class="buttonContainer">
                                <div class="buttonLeftContent">
                                    <p><i class="fa-solid fa-cart-shopping"></i>41 items</p>
                                </div>
                                <div class="buttonRightContent">
                                    <p>View Cart<i class="fa-solid fa-arrow-right"></i></p>
                                </div>
                            </div>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">your card</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="itemsPriceDetails">
                                                    <div class="itemsContainer">
                                                        <div class="itemHeadTittle">
                                                            <h6><span>41</span>Items</h6>
                                                        </div>
                                                        <div class="itemsNameAndPrice">

                                                            <div class="mushroomItemsBox">
                                                                <div class="itemsImgBox">
                                                                    <img src="images/mushroom1.jpeg">
                                                                </div>
                                                                <div class="mushroomItemsButtonBox">
                                                                    <div class="itemName">
                                                                        <h5><span></span> Spinach Mushroom Soup</h5>
                                                                        <p><i class="fa-solid fa-dollar-sign"></i> 240.00</p>
                                                                    </div>
                                                                    <div class="itemsButton">
                                                                        <form action="">
                                                                            <div class="inputButton">
                                                                                <button class="pieceButton">
                                                                                    <span><i class="fa-solid fa-minus"></i></span>
                                                                                </button>
                                                                                <input type="text" name="text" class="buttonInput" value="1">
                                                                                <button class="pieceButton">
                                                                                    <span><i class="fa-solid fa-plus"></i></span>
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                        <h6><i class="fa-solid fa-dollar-sign"></i> 240.00</h6>
                                                                    </div><!-- itemsButton -->
                                                                </div><!-- mushroomItemsButtonBox -->
                                                            </div><!-- mushroomItemsBox -->

                                                            <div class="cafeLatteItemsBox">
                                                                <div class="itemsImgBox">
                                                                    <img src="images/cafe1.jpeg">
                                                                </div>
                                                                <div class="itemsName_andButtonBox">
                                                                    <div class="itemName">
                                                                        <h5><span></span> chicken noodle soup</h5>
                                                                        <p><i class="fa-solid fa-dollar-sign"></i> 120.00</p>
                                                                    </div>
                                                                    <div class="itemsButton">
                                                                        <form action="">
                                                                            <div class="inputButton">
                                                                                <button class="pieceButton">
                                                                                    <span><i class="fa-solid fa-minus"></i></span>
                                                                                </button>
                                                                                <input type="text" name="text" class="buttonInput" value="5">
                                                                                <button class="pieceButton">
                                                                                    <span><i class="fa-solid fa-plus"></i></span>
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                        <h6><i class="fa-solid fa-dollar-sign"></i> 600.00</h6>
                                                                    </div><!-- itemsButton -->
                                                                </div><!-- itemsName_andButtonBox -->
                                                            </div><!-- cafeLatteItemsBox -->

                                                            <div class="saladItemsBox">
                                                                <div class="itemsImgBox">
                                                                    <img src="images/salad.jpeg">
                                                                </div>
                                                                <div class="saladItemsButtonBox">
                                                                    <div class="itemName">
                                                                        <h5><span></span> Spiced Arugula and Feta Salad</h5>
                                                                        <p><i class="fa-solid fa-dollar-sign"></i> 300.00</p>
                                                                    </div>
                                                                    <div class="itemsButton">
                                                                        <form action="">
                                                                            <div class="inputButton">
                                                                                <button class="pieceButton">
                                                                                    <span><i class="fa-solid fa-minus"></i></span>
                                                                                </button>
                                                                                <input type="text" name="text" class="buttonInput" value="35">
                                                                                <button class="pieceButton">
                                                                                    <span><i class="fa-solid fa-plus"></i></span>
                                                                                </button>
                                                                            </div>
                                                                        </form>
                                                                        <h6><i class="fa-solid fa-dollar-sign"></i> 10500.00</h6>
                                                                    </div><!-- itemsButton -->
                                                                </div><!-- saladItemsButtonBox -->
                                                            </div><!-- saladItemsBox -->

                                                        </div><!-- itemsNameAndPrice -->
                                                    </div><!-- itemsContainer -->
                                                    <div class="accordion_ContentBox">
                                                        <div class="accordionTittle">
                                                            <h6><i class="fa-solid fa-percent"></i> Apply Coupon</h6>
                                                        </div>
                                                        <div class="accordionText">
                                                            <ul>
                                                                <li>
                                                                    <p>Subtotal</p>
                                                                    <span>11340.00</span>
                                                                </li>
                                                                <li>
                                                                    <p>Delivery Free</p>
                                                                    <span>10.00</span>
                                                                </li>
                                                                <li class="text">
                                                                    <p>Subtotal</p>
                                                                    <span>11340.00</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- accordion_ContentBox -->
                                                </div><!-- itemsPriceDetails -->
                                            </div>
                                            <div class="col-lg-6 col-sm-12">
                                                <div class="tabsArea">
                                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                                            </li>

                                                            <li class="nav-item">
                                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                                            </li>

                                                            <li class="nav-item">
                                                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                                            </li>
                                                    </ul>
                                                    <div class="tab-content" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                                        </div>
                                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                                        </div>
                                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                                                        </div>
                                                    </div>
                                                </div><!-- tabsArea -->
                                            </div>
                                        </div>
                                    </div><!-- modal-body -->
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div><!-- modal-content -->
                            </div><!-- modal-dialog -->
                        </div><!-- modal -->
                    </div>
                    <div class="col-lg-4 col-sm-12">

                    </div>
                </div>
            </div><!-- container -->
        </section><!-- shopItems_section end-->
    </main>
@endsection



