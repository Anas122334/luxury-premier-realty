<?php
$title = "Luxury Premier Realty-Contact Page for Selling/Buying Property.";
$description = "Contact Luxury Premier Realty, where you may buy, sell, or rent a home on thousands of listings that are updated hourly-one-stop online property platforms.";
include("./include/header.php") ?>

<div class="container-fluid mt-5 pt-5  sell-img contact-bg">
    <div class="row g-3 pt-5 pb-5 d-flex justify-content-center">
        <div class="col-12 col-md-6 col-sm-12 text-white">
            <h1 class="juana text-center">Lorem ipsum dolor sit</h1>
            <p class="humnst text-center footer-fontsize">Lorem ipsum dolor sit amet consectetur. Non lectus massa rutrum tristique interdum. Erat facilisi auctor neque tellus sem enim in et.</p>
            <div class="text-center">
                <a href="buy.php" class="btn text-decoration-none bttn2 mt-2 fs-5">Search Properties</a>
            </div>
        </div>
    </div>
</div>

<div class="conatiner-fluid pt-2 ">
    <div class="row  g-5 m-0">
        <div class="col-12 col-md-6 col-sm-12 home-contact-img p-0 d-flex justify-content-center align-items-center">
            <h3 class="text-white lh-base humnst fw-bold" style="letter-spacing: 2px;">Real Estate Isn't Business.<br /> It's Personal.<br /><span class="heading">Let's Connect.</span></h3>
        </div>
        <div class="col-12 col-md-6 col-sm-12  text-white">
            <form class="row g-3">
                <div class="col-12">
                    <label for="firstname" class="form-label fs-5">First Name</label>
                    <input type="text" class="form-control inp-text  text-white" id="firstname" required>
                </div>
                <div class="col-12">
                    <label for="lastname" class="form-label fs-5">Last Name</label>
                    <input type="text" class="form-control inp-text  text-white" id="lastname" required>
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
                    <input type="text" class="form-control  inp-text text-white" id="perferredagent" required placeholder="Search for an Agent">
                </div>
                <div class="col-12">
                    <label for="address" class="form-label fs-5">Address</label>
                    <input type="text" class="form-control inp-text  text-white" id="address" required placeholder="17 E 79th St #4e">
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