<fieldset class="padding-top-50 padding-bottom-100" id="msServices">
    <div class="row">
        <div class="col-lg-8 margin-top-30">
            <div class="service-overview-wrapper padding-bottom-30">
                <div class="overview-author overview-author-border">
                    <div class="overview-flex-author">
                        <div class="overview-thumb">
                            <img src="assets/img/service/overview1.jpg" alt="">
                        </div>
                        <div class="overview-contents">
                            <h4 class="overview-title"> <a href="javascript:void(0)"> Lorem ipsum dolor sit amet, consectetur adipiscing about Aelit</a> </h4>
                            <span class="overview-review"> <i class="las la-star"></i> 4.9 <b>(231)</b> </span>
                        </div>
                    </div>
                </div>
                <div class="overview-single padding-top-40">
                    <h4 class="title"> What's Included </h4>
                    <div class="include-contents margin-top-30">

                        <div class="single-include">
                            <ul class="include-list">
                                <li class="lists">
                                    <div class="list-single">
                                        <span class="rooms"> 3 Bed Room </span>
                                    </div>
                                    <div class="list-single">
                                        <span class="values"> $30 </span>
                                        <span class="value-input">
                                            <input id="bedRoomPrice" name="bedRoomPrice" type="hidden" value="30">
                                            <input id="bedRoomTotalPrice" name="bedRoomTotalPrice" type="hidden" value="90">
                                            <input type="text" id="bedRoom" name="bedRoomQuantity" price="30" value="3">
                                        </span>
                                    </div>
                                </li>
                                <li class="lists"> <a class="remove" href="javascript:void(0)">Remove</a> </li>
                            </ul>
                        </div>

                        <div class="single-include">
                            <ul class="include-list">
                                <li class="lists">
                                    <div class="list-single">
                                        <span class="rooms"> 2 Bath Room </span>
                                    </div>
                                    <div class="list-single">
                                        <span class="values"> $20 </span>
                                        <span class="value-input">
                                            <input id="bathRoomPrice" name="bathRoomPrice" type="hidden" value="20">
                                            <input id="bathRoomTotalPrice" name="bathRoomTotalPrice" type="hidden" value="40">
                                            <input id="bathRoom" type="text" name="bathRoomQuantity" price="20" value="2">
                                        </span>
                                    </div>
                                </li>
                                <li class="lists"> <a class="remove" href="javascript:void(0)">Remove</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="overview-single padding-top-60">
                    <h4 class="title"> Upgrade your order with extras </h4>
                    <div class="row">
                        <div class="col-lg-6 margin-top-30">
                            <div class="overview-extra">
                                <div class="checkbox-inlines">
                                    <input class="check-input service-checkbox" checked type="checkbox" id="kitchenCleaning">
                                    <label class="checkbox-label" for="kitchenCleaning"> Kitchen Cleaning </label>
                                </div>
                                <div class="overview-extra-flex-content">
                                    <div class="list-single">
                                        <span class="values"> $25 </span>
                                        <span class="value-input">
                                            <input type="text" id="kitchenServiceQuantity" value="1">
                                            <input type="hidden" id="kitchenServiceTotalPrice" value="25">

                                            <!--send data -->
                                              <input type="hidden" name="ksPrice" id="kitchenServicePrice" value="25">
                                              <input type="hidden" name="ksQuantity" id="kitchenAfterQuantity" value="1">
                                              <input type="hidden" name="ksTotal" id="kitchenAfterTotal" value="25">
                                            <!--end send data -->
                                        </span>
                                    </div>
                                    <span class="price-value" id="displayKitchenPrice"> $25 </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 margin-top-30">
                            <div class="overview-extra">
                                <div class="checkbox-inlines">
                                    <input class="check-input service-checkbox" checked type="checkbox" id="fridgeCleaning">
                                    <label class="checkbox-label" for="fridgeCleaning"> Fridge Cleaning </label>
                                </div>
                                <div class="overview-extra-flex-content">
                                    <div class="list-single">
                                        <span class="values"> $25 </span>
                                        <span class="value-input">
                                             <input type="text" id="fridgeServiceQuantity" value="1">
                                             <input type="hidden" id="fridgeServiceTotalPrice" value="25">

                                            <!--send data -->
                                              <input type="hidden" name="fsPrice" id="fridgeServicePrice" value="25">
                                              <input type="hidden" name="fsQuantity" id="fridgeAfterQuantity" value="1">
                                              <input type="hidden" name="fsTotal" id="fridgeAfterTotal" value="25">
                                            <!--end send data -->
                                        </span>
                                    </div>
                                    <span class="price-value" id="displayFridgePrice"> $25 </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 margin-top-30">
                            <div class="overview-extra">
                                <div class="checkbox-inlines">
                                    <input class="check-input service-checkbox" checked type="checkbox" id="gardenCleaning">
                                    <label class="checkbox-label" for="gardenCleaning"> Garden Cleaning </label>
                                </div>
                                <div class="overview-extra-flex-content">
                                    <div class="list-single">
                                        <span class="values" > $25 </span>
                                        <span class="value-input">
                                             <input type="text"  id="gardenServiceQuantity" value="1">
                                             <input type="hidden" id="gardenServiceTotalPrice" value="25">


                                            <!--send data -->
                                              <input type="hidden" name="gsPrice" id="gardenServicePrice" value="25">
                                              <input type="hidden" name="gsQuantity" id="gardenAfterQuantity" value="1">
                                              <input type="hidden" name="gsTotal" id="gardenAfterTotal" value="25">
                                            <!--end send data -->
                                        </span>
                                    </div>
                                    <span class="price-value" id="displayGardenPrice"> $25 </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 margin-top-30">
                            <div class="overview-extra">
                                <div class="checkbox-inlines">
                                    <input class="check-input service-checkbox" checked type="checkbox" id="bathroomCleaning">
                                    <label class="checkbox-label" for="bathroomCleaning"> Bathroom Cleaning </label>
                                </div>
                                <div class="overview-extra-flex-content">
                                    <div class="list-single">
                                        <span class="values"> $25 </span>
                                        <span class="value-input">
                                             <input type="text" id="bathroomServiceQuantity" value="1">
                                             <input type="hidden" id="bathroomServiceTotalPrice" value="25">

                                            <!--send data -->
                                              <input type="hidden" name="bsPrice" id="bathroomServicePrice" value="25">
                                              <input type="hidden" name="bsQuantity" id="bathroomAfterQuantity" value="1">
                                              <input type="hidden" name="bsTotal" id="bathroomAfterTotal" value="25">
                                            <!--end send data -->
                                        </span>
                                    </div>
                                    <span class="price-value" id="displayBathroomPrice"> $25 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overview-single padding-top-60">
                    <h4 class="title"> Benifits of the Package: </h4>
                    <ul class="overview-benefits margin-top-30">
                        <li class="list"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a egestas leo. </li>
                        <li class="list"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a egestas leo. </li>
                        <li class="list"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a egestas leo. </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 margin-top-30">
            <div class="service-overview-summery">
                <h4 class="title"> Booking Summery </h4>
                <div class="overview-summery-contents">
                    <div class="single-summery">
                        <span class="summery-title"> Appointment Package Service </span>
                        <div class="summery-list-all">
                            <ul class="summery-list">
                                <li class="list">
                                    <span class="rooms"> Bed Room</span>
                                    <span class="room-count" id="bedRoomQuantity">3</span>
                                    <span class="value-count">
                                        $<span id="displayBedRoomPrice">90</span>
                                    </span>
                                </li>
                                <li class="list">
                                    <span class="rooms"> Bath Room</span>
                                    <span class="room-count" id="bathRoomQuantity">2</span>
                                    <span class="value-count" >
                                        $<span id="displayBathRoomPrice">40</span>
                                    </span>

                                </li>
                            </ul>
                            <ul class="summery-result-list">
                                <li class="result-list">
                                    <span class="rooms"> Pagckage Fee</span>
                                    <span class="value-count">
                                        $<span id="totalPackegePrice">130</span>
                                    </span>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-summery">
                        <span class="summery-title"> Extra Service </span>
                        <div class="summery-list-all">
                            <ul class="summery-list">
                                <li class="list" id="kitchenList">
                                    <span class="rooms"> Kitchen</span>
                                    <span class="room-count" id="serviceQuantity">1</span>
                                    <span class="value-count">
                                        $<span id="serviceTotalPrice">25</span>
                                    </span>
                                </li>
                                <li class="list" id="fridgeList">
                                    <span class="rooms"> Fridge</span>
                                    <span class="room-count" id="serviceQuantity">1</span>
                                    <span class="value-count">
                                        $<span id="serviceTotalPrice">25</span>
                                    </span>
                                </li>
                                <li class="list" id="gardenList">
                                    <span class="rooms"> Garden</span>
                                    <span class="room-count">1</span>
                                    <span class="value-count">
                                        $<span id="serviceTotalPrice">25</span>
                                    </span>
                                </li>
                                <li class="list" id="bathRoomList">
                                    <span class="rooms"> Bathroom</span>
                                    <span class="room-count">1</span>
                                    <span class="value-count">
                                        $<span id="serviceTotalPrice">25</span>
                                    </span>
                                </li>
                            </ul>
                            <ul class="summery-result-list result-border padding-bottom-20">
                                <li class="result-list">
                                    <input type="hidden" name="stAmount" id="stAmount" value="230">
                                    <span class="rooms"> Subtotal</span>
                                    <span class="value-count">
                                        $<span id="displaySubTotal">230</span>
                                    </span>
                                </li>
                            </ul>
                            <ul class="summery-result-list result-border padding-bottom-20">
                                <li class="result-list">
                                    <span class="rooms"> Tax(+)15%</span>
                                    <span class="value-count" id="displayVat">$34.5</span>
                                </li>
                            </ul>
                            <ul class="summery-result-list">
                                <li class="result-list">
                                    <span class="rooms"> <strong>Total</strong></span>
                                    <span class="value-count" id="displayTotal">$264.5</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-wrapper">
                        <a href="javascript:void(0)" id="serviceContinue" class="cmn-btn  btn-appoinment btn-bg-1"> Continue </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="button" name="next" id="serviceNext" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
</fieldset>
