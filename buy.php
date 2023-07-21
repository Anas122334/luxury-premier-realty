<?php
$title = "Luxury Premier Realty –Buying Property Page.";
$description = "Searching for properties, scheduling viewings, making offers, counteroffers, and closing successfully are all made simpler by Luxury Premier Realty. We make it simple for you to locate your ideal property.";
include("./include/header.php") ?>

<div class="container mt-5 pt-5 mb-5 ">
    <div class="row g-3 pt-5 pb-5 ">
        <div class="col-12 col-md-7 col-sm-12 text-white">
            <span class="humnstt777blk "><span class="fs-1 me-2 fw-bold">Search Results</span> <span class="humnst text-light">(28 Properties)</span></span>
        </div>
        <div class="col-12 col-md-5 col-sm-12 text-white">
            <div class="input-group">
                <input type="search" class="form-control border-0 one" aria-label="search country" placeholder="Search by County, City or ZIP">
                <span class="btn input-group-text bg-white"><i class="bi bi-search fs-5"></i></span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="container w-75">
        <div class="row g-4">
            <div class="col-12 col-md-3 col-sm-12">
                <div class="form-outline">
                    <input type="number" id="typeNumber" min="0" class="form-control" style="border-radius: 11px;" placeholder="Bedroom" />
                </div>
            </div>
            <div class="col-12 col-md-3 col-sm-12">
                <div class="form-outline">
                    <input type="number" id="typeNumber" min="0" class="form-control" style="border-radius: 11px;" placeholder="Bathroom" />
                </div>
            </div>
            <div class="col-12 col-md-3 col-sm-12">
                <div class="form-outline">
                    <input type="number" id="typeNumber" min="0" class="form-control" style="border-radius: 11px;" placeholder="Min.Area" />
                </div>
            </div>
            <div class="col-12 col-md-3 col-sm-12">
                <div class="form-outline">
                    <input type="number" id="typeNumber" min="0" class="form-control" style="border-radius: 11px;" placeholder="Max.Area" />
                </div>
            </div>
            <div class="col-12 col-md-3 col-sm-12">
                <div class="form-outline">
                    <input type="number" id="typeNumber" min="0" class="form-control" style="border-radius: 11px;" placeholder="Min.Price" />
                </div>
            </div>
            <div class="col-12 col-md-3 col-sm-12">
                <div class="form-outline">
                    <input type="number" id="typeNumber" min="0" class="form-control" style="border-radius: 11px;" placeholder="Max.price" />
                </div>
            </div>
            <div class="col-12 col-md-3 col-sm-12 d-flex flex-column">
                <button class="btn bttn humnst " style="font-weight: 600;">Search</button>
            </div>
            <div class="col-12 col-md-3 col-sm-12 d-flex flex-column">
                <button class="btn bg-dark text-white humnst " data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-weight: 600;">All filter</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <form action="">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">SELECT FILTERS</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    PRICE
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <h5 class="juana fw-bold">SALE PRICE</h5>
                                                    <div class="row g-4">
                                                        <div class="col">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Min Price</label>
                                                            <input type="text" id="typeNumber1" class="form-control inp-text humnst" placeholder="$500,000" oninput="sanitizeInput(this.value, 'typeNumber1')" />
                                                        </div>
                                                        <div class="col">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Max Price</label>
                                                            <input type="text" id="typeNumber2" class="form-control inp-text humnst" placeholder="$1,000,000" oninput="sanitizeInput(this.value, 'typeNumber2')" />
                                                        </div>
                                                    </div>
                                                    <h5 class="juana fw-bold mt-3">REQUIRED DOWN PAYMENT</h5>
                                                    <div class="row g-4">
                                                        <div class="col">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Min Down Payment %</label>
                                                            <input type="text" id="typePercent1" class="form-control inp-text humnst" placeholder="20%" maxlength="4" oninput="sanitizeInput1(this.value, 'typePercent1')" />
                                                        </div>
                                                        <div class="col">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Max Down Payment %</label>
                                                            <input type="text" id="typePercent2" class="form-control inp-text humnst" placeholder="100%" maxlength="4" oninput="sanitizeInput1(this.value, 'typePercent2')" />
                                                        </div>
                                                    </div>
                                                    <div class="form-check mt-3 humnst fw-bold">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Include Unknown
                                                        </label>
                                                    </div>
                                                    <div class="row  mt-3">
                                                        <div class="col">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Max Down Payment</label>
                                                            <input type="text" id="typeNumber3" class="form-control inp-text humnst" placeholder="$1,000,000" oninput="sanitizeInput(this.value, 'typeNumber3')" />
                                                        </div>
                                                    </div>
                                                    <h5 class="juana mt-3 fw-bold">MONTHLY FEES<span class="humnst">/</span>CHARGES <span class="humnst">&</span> TAXES</h5>
                                                    <div class="row  ">
                                                        <div class="col">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Max Charges (Excluding Mortgage)</label>
                                                            <input type="text" id="typeNumber4" class="form-control inp-text humnst" placeholder="$500" oninput="sanitizeInput(this.value, 'typeNumber4')" />
                                                        </div>
                                                    </div>
                                                    <h5 class="juana fw-bold mt-3">PAYMENT AMOUNT</h5>
                                                    <div class="row g-4">
                                                        <div class="col">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Min Monthly Payment</label>
                                                            <input type="text" id="typeNumber5" class="form-control inp-text humnst" placeholder="$800" oninput="sanitizeInput(this.value, 'typeNumber5')" />
                                                        </div>
                                                        <div class="col">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Max Monthly Payment</label>
                                                            <input type="text" id="typeNumber6" class="form-control inp-text humnst" placeholder="$3000" oninput="sanitizeInput(this.value, 'typeNumber6')" />
                                                        </div>
                                                    </div>
                                                    <h5 class="juana fw-bold mt-3">MORTGAGE</h5>
                                                    <div class="row g-4">
                                                        <div class="col">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Down Payment</label>
                                                            <input type="text" id="typePercent3" class="form-control inp-text humnst" placeholder="20%" maxlength="4" oninput="sanitizeInput1(this.value, 'typePercent3')" />
                                                        </div>
                                                        <div class="col">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Interest %</label>
                                                            <input type="text" id="typePercent4" class="form-control inp-text humnst" placeholder="5%" maxlength="4" oninput="sanitizeInput1(this.value, 'typePercent4')" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    BEDROOMS
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Min Bedrooms</label>
                                                            <select class="form-select inp" aria-label="Default select example">
                                                                <option selected>No Min</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Max Bedrooms</label>
                                                            <select class="form-select inp" aria-label="Default select example">
                                                                <option selected>No Max</option>
                                                                <option value="1">Studio</option>
                                                                <option value="2">1</option>
                                                                <option value="3">2</option>
                                                                <option value="4">3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    BATHROOMS
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col-6">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Min Bathrooms</label>
                                                            <select class="form-select inp" aria-label="Default select example">
                                                                <option selected>No Min</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    HOME TYPE
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Co-Op
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Condop
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Single Family
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Three Family
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Commercial
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Income Property
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Mixed Use
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Rental Unit
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Vacant Lot
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Land
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Farm
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Condo
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Two Family
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Multi-Family
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Unknown
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Development Site
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Institutional
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Rental Property
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            lorem
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            lorem
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            lorem
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            lorem
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            lorem
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            lorem
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            lorem
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            lorem
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            lorem
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Include/Exclude Types</label>
                                                            <select class="form-select inp" aria-label="Default select example">
                                                                <option selected>Include</option>
                                                                <option value="1">Exclude</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12">
                                                            <h5 class="juana fw-bold">SPONSOR UNIT</h5>
                                                            <div class="form-check  humnst fw-bold ">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    Only Sponsor Units
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    AMENITIES
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col-4">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Laundry</label>
                                                            <select class="form-select inp" aria-label="Default select example">
                                                                <option selected>In Unit</option>
                                                                <option value="1">In Building or Unit</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Outdoor Space</label>
                                                            <select class="form-select inp" aria-label="Default select example">
                                                                <option selected>Public</option>
                                                                <option value="1">Private</option>
                                                                <option value="2">Public or Private</option>
                                                                <option value="3">Public and Private</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Furnished</label>
                                                            <select class="form-select inp" aria-label="Default select example">
                                                                <option selected>Furnished</option>
                                                                <option value="1">Unfurnished</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Dishwasher
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Elevator
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Gym
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Hardwood Floors
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Pool
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Lorem adipiscing
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Parking
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Walk-Up
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Doorman
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Fireplace
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Lorem adipiscing
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Lorem adipiscing </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSix">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    PET FRIENDLY
                                                </button>
                                            </h2>
                                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Pet Friendly
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Exclude Cat Unfriendly
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Include Unknown
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Exclude Dog Unfriendly
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSeven">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                    FLOOR AREA
                                                </button>
                                            </h2>
                                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col-6">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Square Feet</label>
                                                            <select class="form-select inp" aria-label="Default select example">
                                                                <option selected>Any</option>
                                                                <option value="1">300+</option>
                                                                <option value="2">400+</option>
                                                                <option value="3">500+</option>
                                                                <option value="3">600+</option>
                                                                <option value="3">700+</option>
                                                                <option value="3">800+</option>
                                                            </select>
                                                            <div class="form-check mt-3 humnst fw-bold">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    Include Unknown
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingEight">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                    OPEN HOUSE
                                                </button>
                                            </h2>
                                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col-6">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Beginning Data</label>
                                                            <input type="date" id="" class="form-control inp-text humnst" />
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">End Data</label>
                                                            <input type="date" id="" class="form-control inp-text humnst" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingNine">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseEight">
                                                    LISTING STATUS
                                                </button>
                                            </h2>
                                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col-6">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Listing Status</label>
                                                            <select class="form-select inp" aria-label="Default select example">
                                                                <option selected>Active & Coming Soon</option>
                                                                <option value="1">Active Excluding Coming Soon</option>
                                                                <option value="2">Coming Soon Only</option>
                                                                <option value="3">Pending / In Contract</option>
                                                                <option value="3">All Listings</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTen">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                    KEYWORDS
                                                </button>
                                            </h2>
                                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col-7">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Search by Keyword</label>
                                                            <div class="input-group border-0 ">
                                                                <input type="text" class="form-control inp-text" placeholder="Pantry, Marble, Island etc">
                                                                <div class="input-group-prepend">
                                                                    <button class="btn bttn humnst fw-bold" type="button">ADD</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingEleven">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                    BUILDING
                                                </button>
                                            </h2>
                                            <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col-12">
                                                            <label for="inputsearch" class="form-label humnst fw-bold">BUILDING SEARCH</label>
                                                            <input type="search" id="inputsearch" class="form-control inp-search humnst" />
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Include/Exclude Buildings</label>
                                                            <select class="form-select inp" aria-label="Default select example">
                                                                <option selected>Include</option>
                                                                <option value="1">Exclude</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 mt-1">
                                                        <h5 class="juana fw-bold">YEAR BUILT</h5>
                                                        <div class="col-6">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">From</label>
                                                            <select class="form-select inp" aria-label="Default select example" id="year-select">
                                                                <option selected></option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">To</label>
                                                            <select class="form-select inp" aria-label="Default select example" id="year-select">
                                                                <option selected></option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-check  humnst fw-bold">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    Exclude Dog Unfriendly
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <h5 class="juana fw-bold">LAND LEASE</h5>
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-radio  humnst fw-bold">
                                                                        <input class="form-radio-input" type="radio" value="" name="lease" id="flexradioDefault">
                                                                        <label class="form-radio-label" for="flexradioDefault">
                                                                            Only
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-radio  humnst fw-bold">
                                                                        <input class="form-radio-input" type="radio" value="" name="lease" id="flexradioDefault">
                                                                        <label class="form-radio-label" for="flexradioDefault">
                                                                            Exclude
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-radio  humnst fw-bold">
                                                                        <input class="form-radio-input" type="radio" value="" name="lease" id="flexradioDefault">
                                                                        <label class="form-radio-label" for="flexradioDefault">
                                                                            All Listings
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingtwelve">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
                                                    Lot size
                                                </button>
                                            </h2>
                                            <div id="collapsetwelve" class="accordion-collapse collapse" aria-labelledby="headingtwelve" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col-6">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Min Lot Size (Sq Feet)</label>
                                                            <input type="text" id="amountInput1" class="form-control inp-text inp-icon humnst" placeholder="4,000" oninput="convertAmount('amountInput1')" />
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Max Lot Size (Sq Feet)</label>
                                                            <input type="text" id="amountInput2" class="form-control inp-text inp-icon humnst" placeholder="10,000" oninput="convertAmount('amountInput2')" />
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Lot Size Unit</label>
                                                            <select class="form-select inp" aria-label="Default select example">
                                                                <option selected>Square Feet</option>
                                                                <option value="1">Acres</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThirteen">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                                    Days on Market
                                                </button>
                                            </h2>
                                            <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col-6">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Min Days</label>
                                                            <select class="form-select inp" aria-label="Default select example">
                                                                <option selected>0</option>
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="1">5</option>
                                                                <option value="1">6</option>
                                                                <option value="1">7</option>
                                                                <option value="1">8</option>
                                                                <option value="1">9</option>
                                                                <option value="1">10</option>
                                                                <option value="1">20</option>
                                                                <option value="1">30</option>
                                                                <option value="1">40</option>
                                                                <option value="1">50</option>
                                                                <option value="1">60</option>
                                                                <option value="1">70</option>
                                                                <option value="1">80</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="inputEmail4" class="form-label humnst fw-bold">Max Days</label>
                                                            <select class="form-select inp" aria-label="Default select example">
                                                                <option selected>0</option>
                                                                <option value="1">1</option>
                                                                <option value="1">2</option>
                                                                <option value="1">3</option>
                                                                <option value="1">4</option>
                                                                <option value="1">5</option>
                                                                <option value="1">6</option>
                                                                <option value="1">7</option>
                                                                <option value="1">8</option>
                                                                <option value="1">9</option>
                                                                <option value="1">10</option>
                                                                <option value="1">20</option>
                                                                <option value="1">30</option>
                                                                <option value="1">40</option>
                                                                <option value="1">50</option>
                                                                <option value="1">60</option>
                                                                <option value="1">70</option>
                                                                <option value="1">80</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFourteen">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                                    Exposures
                                                </button>
                                            </h2>
                                            <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Southern
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Northern
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Eastern
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Western
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFifteen">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                                    Income Restrictions
                                                </button>
                                            </h2>
                                            <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <h5 class="juana fw-bold">HDFC APPROVED</h5>
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-radio  humnst fw-bold">
                                                                        <input class="form-radio-input" type="radio" value="" name="hdfc" id="flexradioDefault">
                                                                        <label class="form-radio-label" for="flexradioDefault">
                                                                            Southern
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-radio  humnst fw-bold">
                                                                        <input class="form-radio-input" type="radio" value="" name="hdfc" id="flexradioDefault">
                                                                        <label class="form-radio-label" for="flexradioDefault">
                                                                            Northern
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-radio  humnst fw-bold">
                                                                        <input class="form-radio-input" type="radio" value="" name="hdfc" id="flexradioDefault">
                                                                        <label class="form-radio-label" for="flexradioDefault">
                                                                            Eastern
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSixteen">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                                    Media
                                                </button>
                                            </h2>
                                            <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Has Photos
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Has Video
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-check  humnst fw-bold">
                                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                        <label class="form-check-label" for="flexCheckDefault">
                                                                            Has Floor Plan
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSeventeen">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                                    The Luxury Premier Realty listing
                                                </button>
                                            </h2>
                                            <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-radio  humnst fw-bold">
                                                                        <input class="form-radio-input" type="radio" value="" name="agency" id="flexradioDefault">
                                                                        <label class="form-radio-label" for="flexradioDefault">
                                                                            Only The Agency Listings
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-radio  humnst fw-bold">
                                                                        <input class="form-radio-input" type="radio" value="" name="agency" id="flexradioDefault">
                                                                        <label class="form-radio-label" for="flexradioDefault">
                                                                            All Listings
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingEighteen">
                                                <button class="accordion-button collapsed  juana fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                                    Timeshares
                                                </button>
                                            </h2>
                                            <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row g-4">
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-radio  humnst fw-bold">
                                                                        <input class="form-radio-input" type="radio" value="" name="time" id="flexradioDefault">
                                                                        <label class="form-radio-label" for="flexradioDefault">
                                                                            Only
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="form-radio  humnst fw-bold">
                                                                        <input class="form-radio-input" type="radio" value="" name="time" id="flexradioDefault">
                                                                        <label class="form-radio-label" for="flexradioDefault">
                                                                            All Listings
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <ul class="p-0 lh-lg">
                                                                <li>
                                                                    <div class="form-radio  humnst fw-bold">
                                                                        <input class="form-radio-input" type="radio" value="" name="time" id="flexradioDefault">
                                                                        <label class="form-radio-label" for="flexradioDefault">
                                                                            Exclude
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer bg-black d-flex justify-content-between">
                                    <span><button type="button" class="btn bttn">Clear</button>
                                        <button type="button" class="btn bttn">Save Search</button></span>
                                    <span><button type="submit" class="btn bttn">Done</button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row select-div mt-5">
        <div class="col-12 col-lg-2 col-md-2 col-sm-12">
        <select class="form-select drop bg-dark shadow-none" style="border-radius: 11px;" aria-label="Default select example">
                <option selected>Default</option>
                <option value="1">Newest</option>
                <option value="2">Last Updated</option>
                <option value="3">$ High to Low</option>
                <option value="3">$ Low to High</option>
            </select>
        </div>
    </div>

    <div class="container mt-5 pb-5">
        <div class="row g-5">
            <div class="col-12 col-md-4 col-sm-12">
                <a href="" class="text-dark text-decoration-none">
                    <div class="buy-slide-card">
                        <!-- Swiper -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img1.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img1.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img1.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img1.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img1.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img1.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img1.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img1.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img1.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title juana fw-bold">Gorgeous Villa Bay View</h5>
                            <div class="d-flex justify-content-center">
                                <div style="height: 1.5px; width: 100%; background-color: #fad393; margin-bottom: 20px;"></div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4  col-md-12 col-sm-12 humnst">
                                    <span class="fs-5 fw-bold">$9,670,000</span>

                                </div>
                                <div class="col-12 col-lg-8 col-md-12 col-sm-12 humnst fw-bold d-flex justify-content-evenly">
                                    <span><img src="assests/images/bed.png" alt=""> 4</span> <span>|</span> <span><img src="assests/images/bath.png" alt=""> 2</span> <span>|</span> <span><img src="assests/images/scale.png" style="width: 17px;" alt=""> 1200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-sm-12">
                <a href="" class="text-dark text-decoration-none">
                    <div class="buy-slide-card">
                        <!-- Swiper -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img2.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img2.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img2.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img2.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img2.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img2.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img2.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img2.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img2.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title juana fw-bold">Gorgeous Villa Bay View</h5>
                            <div class="d-flex justify-content-center">
                                <div style="height: 1.5px; width: 100%; background-color: #fad393; margin-bottom: 20px;"></div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4  col-md-12 col-sm-12 humnst">
                                    <span class="fs-5 fw-bold">$9,670,000</span>

                                </div>
                                <div class="col-12 col-lg-8 col-md-12 col-sm-12 humnst fw-bold d-flex justify-content-evenly">
                                    <span><img src="assests/images/bed.png" alt=""> 4</span> <span>|</span> <span><img src="assests/images/bath.png" alt=""> 2</span> <span>|</span> <span><img src="assests/images/scale.png" style="width: 17px;" alt=""> 1200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-sm-12">
                <a href="" class="text-dark text-decoration-none">
                    <div class="buy-slide-card">
                        <!-- Swiper -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img3.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img3.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img3.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img3.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img3.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img3.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img3.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img3.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img3.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title juana fw-bold">Gorgeous Villa Bay View</h5>
                            <div class="d-flex justify-content-center">
                                <div style="height: 1.5px; width: 100%; background-color: #fad393; margin-bottom: 20px;"></div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4  col-md-12 col-sm-12 humnst">
                                    <span class="fs-5 fw-bold">$9,670,000</span>

                                </div>
                                <div class="col-12 col-lg-8 col-md-12 col-sm-12 humnst fw-bold d-flex justify-content-evenly">
                                    <span><img src="assests/images/bed.png" alt=""> 4</span> <span>|</span> <span><img src="assests/images/bath.png" alt=""> 2</span> <span>|</span> <span><img src="assests/images/scale.png" style="width: 17px;" alt=""> 1200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-sm-12">
                <a href="" class="text-dark text-decoration-none">
                    <div class="buy-slide-card">
                        <!-- Swiper -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img4.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img4.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img4.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img4.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img4.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img4.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img4.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img4.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img4.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title juana fw-bold">Gorgeous Villa Bay View</h5>
                            <div class="d-flex justify-content-center">
                                <div style="height: 1.5px; width: 100%; background-color: #fad393; margin-bottom: 20px;"></div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4  col-md-12 col-sm-12 humnst">
                                    <span class="fs-5 fw-bold">$9,670,000</span>

                                </div>
                                <div class="col-12 col-lg-8 col-md-12 col-sm-12 humnst fw-bold d-flex justify-content-evenly">
                                    <span><img src="assests/images/bed.png" alt=""> 4</span> <span>|</span> <span><img src="assests/images/bath.png" alt=""> 2</span> <span>|</span> <span><img src="assests/images/scale.png" style="width: 17px;" alt=""> 1200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-sm-12">
                <a href="" class="text-dark text-decoration-none">
                    <div class="buy-slide-card">
                        <!-- Swiper -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img5.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img5.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img5.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img5.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img5.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img5.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img5.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img5.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img5.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title juana fw-bold">Gorgeous Villa Bay View</h5>
                            <div class="d-flex justify-content-center">
                                <div style="height: 1.5px; width: 100%; background-color: #fad393; margin-bottom: 20px;"></div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4  col-md-12 col-sm-12 humnst">
                                    <span class="fs-5 fw-bold">$9,670,000</span>

                                </div>
                                <div class="col-12 col-lg-8 col-md-12 col-sm-12 humnst fw-bold d-flex justify-content-evenly">
                                    <span><img src="assests/images/bed.png" alt=""> 4</span> <span>|</span> <span><img src="assests/images/bath.png" alt=""> 2</span> <span>|</span> <span><img src="assests/images/scale.png" style="width: 17px;" alt=""> 1200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-sm-12">
                <a href="" class="text-dark text-decoration-none">
                    <div class="buy-slide-card">
                        <!-- Swiper -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img6.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img6.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img6.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img6.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img6.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img6.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img6.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img6.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img6.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title juana fw-bold">Gorgeous Villa Bay View</h5>
                            <div class="d-flex justify-content-center">
                                <div style="height: 1.5px; width: 100%; background-color: #fad393; margin-bottom: 20px;"></div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4  col-md-12 col-sm-12 humnst">
                                    <span class="fs-5 fw-bold">$9,670,000</span>

                                </div>
                                <div class="col-12 col-lg-8 col-md-12 col-sm-12 humnst fw-bold d-flex justify-content-evenly">
                                    <span><img src="assests/images/bed.png" alt=""> 4</span> <span>|</span> <span><img src="assests/images/bath.png" alt=""> 2</span> <span>|</span> <span><img src="assests/images/scale.png" style="width: 17px;" alt=""> 1200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-sm-12">
                <a href="" class="text-dark text-decoration-none">
                    <div class="buy-slide-card">
                        <!-- Swiper -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img7.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img7.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img7.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img7.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img7.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img7.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img7.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img7.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img7.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title juana fw-bold">Gorgeous Villa Bay View</h5>
                            <div class="d-flex justify-content-center">
                                <div style="height: 1.5px; width: 100%; background-color: #fad393; margin-bottom: 20px;"></div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4  col-md-12 col-sm-12 humnst">
                                    <span class="fs-5 fw-bold">$9,670,000</span>

                                </div>
                                <div class="col-12 col-lg-8 col-md-12 col-sm-12 humnst fw-bold d-flex justify-content-evenly">
                                    <span><img src="assests/images/bed.png" alt=""> 4</span> <span>|</span> <span><img src="assests/images/bath.png" alt=""> 2</span> <span>|</span> <span><img src="assests/images/scale.png" style="width: 17px;" alt=""> 1200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-sm-12">
                <a href="" class="text-dark text-decoration-none">
                    <div class="buy-slide-card">
                        <!-- Swiper -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img8.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img8.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img8.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img8.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img8.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img8.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img8.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img8.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img8.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title juana fw-bold">Gorgeous Villa Bay View</h5>
                            <div class="d-flex justify-content-center">
                                <div style="height: 1.5px; width: 100%; background-color: #fad393; margin-bottom: 20px;"></div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4  col-md-12 col-sm-12 humnst">
                                    <span class="fs-5 fw-bold">$9,670,000</span>

                                </div>
                                <div class="col-12 col-lg-8 col-md-12 col-sm-12 humnst fw-bold d-flex justify-content-evenly">
                                    <span><img src="assests/images/bed.png" alt=""> 4</span> <span>|</span> <span><img src="assests/images/bath.png" alt=""> 2</span> <span>|</span> <span><img src="assests/images/scale.png" style="width: 17px;" alt=""> 1200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 col-sm-12">
                <a href="" class="text-dark text-decoration-none">
                    <div class="buy-slide-card">
                        <!-- Swiper -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img9.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img9.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img9.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img9.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img9.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img9.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img9.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img9.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                                <div class="swiper-slide">
                                    <img src="assests/images/buy-card-img9.webp" class="img-fluid w-100" alt="">
                                    <div class="tag humnst">FOR SALE</div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title juana fw-bold">Gorgeous Villa Bay View</h5>
                            <div class="d-flex justify-content-center">
                                <div style="height: 1.5px; width: 100%; background-color: #fad393; margin-bottom: 20px;"></div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4  col-md-12 col-sm-12 humnst">
                                    <span class="fs-5 fw-bold">$9,670,000</span>

                                </div>
                                <div class="col-12 col-lg-8 col-md-12 col-sm-12 humnst fw-bold d-flex justify-content-evenly">
                                    <span><img src="assests/images/bed.png" alt=""> 4</span> <span>|</span> <span><img src="assests/images/bath.png" alt=""> 2</span> <span>|</span> <span><img src="assests/images/scale.png" style="width: 17px;" alt=""> 1200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


<?php include("./include/footer.php") ?>