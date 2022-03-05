<fieldset class="padding-top-50 padding-bottom-100" id="bookingInformation">
    <div class="Info-overview padding-top-30">
        <h3 class="date-time-title"> Booking Information </h3>
        <div class="single-info-overview margin-top-30">
            <div class="single-info-input">
                <label class="info-title"> Your Name* <span class="err text-danger"></span></label>
                <input class="form--control infoInput" id="name" type="text" name="displayName" placeholder="Type Your Name">
            </div>
            <div class="single-info-input">
                <label class="info-title"> Your Email* <span class="err text-danger"></span></label>
                <input class="form--control infoInput" id="email" type="email" name="displayEmail" placeholder="Type Your Email">
            </div>
        </div>
        <div class="single-info-overview margin-top-30">
            <div class="single-info-input">
                <label class="info-title"> Phone Number* <span class="err text-danger"></span></label>
                <input class="form--control infoInput" id="phone" name="displayPhone" type="tel" placeholder="Type Your Number">
            </div>
            <div class="single-info-input">
                <label class="info-title"> Your City* <span class="err text-danger"></span></label>
                <select id="city" class="infoInput" name="displayCity">
                    <option selected value="">Select</option>
                    <option value="New York">New York</option>
                    <option value="London">London</option>
                    <option value="Eden Garden">Eden Garden</option>
                    <option value="Paris">Paris</option>
                    <option value="Barcelona">Barcelona</option>
                </select>
            </div>
        </div>
        <div class="single-info-overview margin-top-30">
            <div class="single-info-input">
                <label class="info-title"> Your Area* <span class="err text-danger"></span> </label>
                <input class="form--control infoInput"  name="displayArea" id="area" type="text" placeholder="Type Your Area">
            </div>
            <div class="single-info-input">
                <label class="info-title"> Post Code* <span class="err text-danger"></span></label>
                <input class="form--control infoInput" name="displayPostCode" id="postCode" type="tel" placeholder="Type Post Code">
            </div>
        </div>
        <div class="single-info-overview margin-top-30">
            <div class="single-info-input">
                <label class="info-title"> Your Address* <span class="err text-danger"></span></label>
                <input class="form--control infoInput" name="displayAddress" id="address" type="text" placeholder="Type Your Address">
            </div>
        </div>
        <div class="single-info-overview margin-top-30">
            <div class="single-info-input">
                <label class="info-title"> Order Note* <span class="err text-danger"></span></label>
                <textarea id="orderNote" name="displayOrderNote" class="form--control textarea--form infoInput"  placeholder="Type Order Note"></textarea>
            </div>
        </div>
        <div class="btn-wrapper margin-top-35">
            <button id="informationContinue" type="button" class="cmn-button btn-bg-1"> Continue </button>
        </div>
    </div>


    <input type="button" name="next" class="action-button" id="bookingInfoNextValidateBtn" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
    <input type="button" name="next" class="next action-button d-none" id="bookingInfoNextBtn" value="Next" />
</fieldset>
