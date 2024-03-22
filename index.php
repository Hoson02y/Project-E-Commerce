<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PizzaromaRealm</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="script.js"></script>
</head>

<body>

    <section id="Home">
        <?php include 'header.php'?>

        <div class="main">



            <div class="men_text">
                <h1>Get the latest phones<br>straight to<span>you</span></h1>
            </div>

            <div class="main_image">
                <img src="images/IMG_0753.JPG">
            </div>

        </div>

        <p id="main-p">
        Embark on a journey into the realm of cutting-edge mobile technology, where innovation meets functionality with every touch. Each device unveils a world of endless possibilities, merging sleek design with powerful performance. From flagship models to budget-friendly options, we deliver the finest in mobile innovation right to your fingertips. Join us as we explore the boundless horizons of mobile connectivity, where every device is crafted to redefine your digital experience.

        </p>
    </section>

    <!--About-->

    <div class="about" id="About">
        <div class="about_main">

            <div class="image">
                <img src="images/aboutus.jpg">
            </div>

            <div class="about_text">
                <h1><span>About</span>Us</h1>
                <h3>Why Choose Us?</h3>
                <p>
                At Troxin, we are passionate about providing our customers with the latest and greatest in technology, offering a diverse range of products to suit every need and budget. Whether you're a gadget enthusiast, a professional in need of cutting-edge tools, or simply looking to upgrade your digital lifestyle, we've got you covered.<br><br>
                Our mission is simple: to make technology accessible and enjoyable for everyone. With a carefully curated selection of products from leading brands and emerging innovators, we strive to offer the best-in-class quality and performance in every item we carry.<br><br>

But we're more than just an online store. We're a community of tech enthusiasts, dedicated to sharing our knowledge and expertise to help you make informed decisions and get the most out of your purchases. Our team of tech experts is always on hand to provide personalized recommendations, answer your questions, and ensure that your shopping experience is nothing short of exceptional.
            </p>

            </div>
        </div>
    </div>





    <!-- special -->


    <div class="special" id="Special">
        <h1>Today's<span>Offer</span></h1>
        <div class="special-box">
            <img id="content-image" src="images/IMG_0754.JPG">
            <img id="content-image" src="images/IMG_0755.JPG">
        </div>
    </div>



    <!--Gallary-->

    <div class="gallary" id="Gallary">
        <h1>Our<span>Gallary</span></h1>

        <div class="gallary_image_box">
            <div class="gallary_image">
                <img src="images/IMG_0748.JPG">
                <h3>Veggie Vitality</h3>
                <p>
                    A vibrant array of fresh vegetables — bell peppers, olives, onions — on a golden crust. Nature's
                    bounty in every slice.
                </p>

                <a href="#" class="gallary_btn">Order Now</a>
            </div>

            <div class="gallary_image">
                <img src="images/IMG_0748.JPG">

                <h3>Spicy Diavolo</h3>
                <p>
                    Hot jalapeños, spicy sausage, and red chili flakes create a fiery symphony. Not for the
                    faint-hearted but for the spice lovers.
                </p>
                <a href="#" class="gallary_btn">Order Now</a>
            </div>

            <div class="gallary_image">
                <img src="images/IMG_0748.JPG">

                <h3>BBQ Bliss</h3>
                <p>
                    Smoky barbecue sauce meets tender chicken and red onions. A rustic taste sensation designed for
                    indulgence.
                </p>
                <a href="#" class="gallary_btn">Order Now</a>
            </div>

            <div class="gallary_image">
                <img src="images/IMG_0748.JPG">

                <h3>White Garlic Wonder</h3>
                <p>
                    Creamy white sauce base with garlic undertones, complemented by mushrooms and spinach. A gourmet's
                    choice.
                </p>
                <a href="#" class="gallary_btn">Order Now</a>
            </div>

            <div class="gallary_image">
                <img src="images/IMG_0748.JPG">

                <h3>Pepperoni Passion</h3>
                <p>
                    Savory pepperoni slices spread generously atop a cheesy delight. A bite that takes you to pizza
                    paradise.
                </p>
                <a href="#" class="gallary_btn">Order Now</a>
            </div>

            <div class="gallary_image">
                <img src="images/IMG_0748.JPG">

                <h3>Classic Margherita</h3>
                <p>
                    Tantalizingly fresh tomatoes paired with aromatic basil and rich mozzarella. Experience the heart of
                    Italian flavors.
                </p>
                <a href="#" class="gallary_btn">Order Now</a>
            </div>

        </div>

    </div>




    <!--Order-->

    <div class="order" id="Order">
        <h1><span>Order</span>Now</h1>

        <div class="order_main">

            <div class="gallary_image">
                <img src="images/OIG4.jpg">
            </div>

            <form name="form" method="post" action="order.php">

                <div class="input">
                    <p>Name</p>
                    <input type="text" placeholder="your name" name="name">
                    <div id="name-error"></div>
                </div>

                <div class="input">
                    <p>Email</p>
                    <input type="email" placeholder="your email" name="email">
                    <div id="email-error"></div>
                </div>

                <div class="input" id="number">
                    <p>Number</p>
                    <input type="number" placeholder="your number" name="number">
                    <div id="number-error"></div>
                </div>

                <div class="input">
                    <p>Address</p>
                    <input placeholder="you Address" name="address">
                    <div id="address-error"></div>
                </div>

                <button class="order_btn" onclick="validated(event)">Add info</button>
                <button class="card-order" onclick="showOrder()">Order now</button>

            </form>

        </div>

    </div>

<?php include 'footer.php'?>




</body>

</html>