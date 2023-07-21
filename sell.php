<?php
$title = "Luxury Premier Realty –Selling Property Page. ";
$description = "With Luxury Premier Realty -Sell your property for a predetermined flat fee. By working with us, homeowners may sell their homes with simplicity and ease.";
include("./include/header.php") ?>

<div class="container-fluid mt-5 pt-5 mb-5 sell-img">
    <div class="row g-3 pt-5 pb-5 d-flex justify-content-center">
        <div class="col-12 col-md-6 col-sm-12 text-white">
            <h1 class="juana text-center">THE SMARTER WAY TO SELL</h1>
            <p class="humnst text-center footer-fontsize">Powered by market insights and unparalleled client service, we deliver<br /> better results than anywhere else.</p>
            <div class="text-center">
                <a href="buy.php" class="btn text-decoration-none bttn fs-5 mt-2 me-3">Get Started</a>
                <a href="buy.php" class="btn text-decoration-none bttn2 mt-2 fs-5">Search Properties</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5 pt-5 mb-5 overflow-hidden">
    <div class="row g-5">
        <div class="col-12 col-md-4 col-sm-12">
            <h3 class="text-center text-white juana">Lead Generation</h3>
            <div class="d-flex justify-content-center">
                <div style="height: 2px; width: 40%; background-color: #fad393; margin-bottom: 20px;"></div>
            </div>
            <p class="text-center text-white humnst">With the help of our real estate lead-generation service, you can concentrate on doing what you do best—providing outstanding service to your clients—while we handle the rest. Our service is designed to be simple and efficient, giving you the peace of mind that comes from knowing that you have a consistent stream of high-quality leads coming in.</p>
        </div>
        <div class="col-12 col-md-4 col-sm-12">
            <h3 class="text-center text-white juana">Real Estate Listing </h3>
            <div class="d-flex justify-content-center">
                <div style="height: 2px; width: 40%; background-color: #fad393; margin-bottom: 20px;"></div>
            </div>
            <p class="text-center text-white humnst">Daily, we offer you all the listings you need to get started. We provide complete seller listings that are fully qualified and available for immediate sale or rental. However, if all you're after are master lists, contact us as well. We'll help you with the listing-generating process.</p>
        </div>
        <div class="col-12 col-md-4 col-sm-12">
            <h3 class="text-center text-white juana"> Concierge Services</h3>
            <div class="d-flex justify-content-center">
                <div style="height: 2px; width: 40%; background-color: #fad393; margin-bottom: 20px;"></div>
            </div>
            <p class="text-center text-white humnst">To make getting your property ready for the market considerably more accessible and affordable, we offer a compass concierge service. It covers the upfront costs of your home repairs, including everything from handyman services to replacing worn-out floors. This service enables the seller to make the required property upgrades to raise the property's value.</p>
        </div>
    </div>
</div>

<div class="conatiner-fluid pt-2 ">
    <div class="row  g-5 m-0">
        <div class="col-12 col-md-6 col-sm-12 home-contact-img p-0 d-flex justify-content-center align-items-center">
            <h2 class="text-white text-center lh-base humnst fw-bold" style="letter-spacing: 2px;">CONNECT WITH AN EXPERT</h2>
        </div>
        <div class="col-12 col-md-6 col-sm-12  text-white">
            <form class="row g-3">
                <div class="col-12">
                    <label for="firstname" class="form-label fs-5">First Name</label>
                    <input type="text" class="form-control inp-text text-white" id="firstname" required>
                </div>
                <div class="col-12">
                    <label for="lastname" class="form-label fs-5">Last Name</label>
                    <input type="text" class="form-control inp-text text-white" id="lastname" required>
                </div>
                <div class="col-12">
                    <label for="email" class="form-label fs-5">Email</label>
                    <input type="email" class="form-control text-white" id="email" placeholder="" required>
                </div>
                <div class="col-md-6">
                    <label for="phonenumber" class="form-label fs-5">Phone Number</label>
                    <input type="tel" class="form-control  text-white" id="phonenumber" required>
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label fs-5">Best Time To Call</label>
                    <select id="inputState" class="form-select inp2 text-white bg-black">
                        <option selected class="bg-black">Anytime</option>
                        <option class="bg-black">...</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="perferredagent" class="form-label fs-5">Perferred Agent</label>
                    <input type="text" class="form-control inp-text text-white" id="perferredagent" required placeholder="Search for an Agent">
                </div>
                <div class="col-12">
                    <label for="address" class="form-label fs-5">Address</label>
                    <input type="text" class="form-control inp-text text-white" id="address" required placeholder="17 E 79th St #4e">
                </div>
                <div class="col-12">
                    <div class="form-floating ">
                        <textarea class="form-control text-white" style="background-color: black; border: none; border-bottom: 1px solid white;" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Message</label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn bttn2">Lets Connect</button>
                </div>
            </form>
        </div>
    </div>
</div>



<?php include("./include/footer.php") ?>