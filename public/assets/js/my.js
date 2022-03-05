$(document).ready(function(){
    /*----------------------------------
        When Location Address Change than remove active Class
     */

    $('#msLocation').on('keyup', '#locationAddress',function (){
        let locations = $('.single-location');
        for(i = 0;i<locations.length;i++){
            if(locations.eq(i).hasClass('active')){
                locations.eq(i).removeClass('active');
                break;
            }
        }

        $("#cLocation").html($(this).val())
    })
    /*----------------------------------
       Location
       Get Location From Box
       And Set Location To Input field
     */

    $('#msLocation').on('click','.single-location',function(){
        let firstValue = $(this).children().first().html();
        let lastValue = $(this).children().last().html();

        $('#locationAddress').val(firstValue+lastValue);
        $("#cLocation").html(firstValue+lastValue)
    })



    $('#locationValidateBtn').on('click',function(){
        let thisBtn = $(this);
        let location = $('#locationAddress');
        if(location.val() === ""){
            location.css("border","1px solid red");
        }else{
            location.css("border","1px solid #CED4DA");
            thisBtn.next().trigger('click');
        }

    })



/*----------------------------SERVICES----------------------------------*/

    //BED CALCULATION
    $('#msServices').on('keyup','#bedRoom', function (){
        let bathRoomTotalPrice = $('#displayBathRoomPrice').html();
        let price = $(this).attr('price');
        let quantity = $(this).val();
        let totalPrice = price*quantity;
        $('#bedRoomQuantity').html(quantity);
        $('#displayBedRoomPrice').html(totalPrice);
        $('#bedRoomTotalPrice').val(totalPrice)
        $('#totalPackegePrice').html(parseInt(totalPrice) + parseInt(bathRoomTotalPrice));
        //set data to confirm Box
        $('#cBedRoomQuantity').html(quantity);
        $('#cDisplayBedRoomPrice').html(totalPrice)
        $('#cTotalPackegePrice').html(parseInt(totalPrice) + parseInt(bathRoomTotalPrice))
        SubTotal();
    });

    //Bathroom CALCULATION
    $('#msServices').on('keyup','#bathRoom', function (){
        let bedRoomTotalPrice = $('#displayBedRoomPrice').html();
        let price = $(this).attr('price');
        let quantity = $(this).val();
        let totalPrice = price*quantity;
        $('#bathRoomQuantity').html(quantity);
        $('#displayBathRoomPrice').html(totalPrice);
        $('#bathRoomTotalPrice').val(totalPrice);
        $('#totalPackegePrice').html(parseInt(totalPrice) + parseInt(bedRoomTotalPrice));
        //set data to confirm Box
        $('#cBathRoomQuantity').html(quantity);
        $('#cDisplayBathRoomPrice').html(totalPrice)
        $('#cTotalPackegePrice').html(parseInt(totalPrice) + parseInt(bedRoomTotalPrice))

        SubTotal();
    });









    ServiceChecked(
        $('#msServices'),
        '#kitchenCleaning',
        $('#kitchenServiceQuantity'),
        $('#kitchenServicePrice'),
        $('#kitchenServiceTotalPrice'),
        $('#kitchenAfterQuantity'),
        $('#kitchenAfterTotal'),
        '#kitchenList',
        $('#displayKitchenPrice'),
        '#cKitchenList'
    )

    //Kitchen Quantity On Change
    $('#msServices').on('keyup','#kitchenServiceQuantity',function (){
        let quantity = $(this).val();
        let price = $('#kitchenServicePrice').val();
        let totalPrice = parseInt(quantity)*parseInt(price);
        $('#displayKitchenPrice').html('$'+totalPrice);
        let checked = $('#kitchenCleaning').is(':checked');
        if(checked){
            $('#kitchenServiceTotalPrice').val(totalPrice);
            $('#kitchenAfterQuantity').val(quantity);
            $('#kitchenAfterTotal').val(totalPrice);
            $('#kitchenList #serviceQuantity').html(quantity);
            $('#kitchenList #serviceTotalPrice').html(totalPrice);
            //set data to confirm box
            $('#cKitchenList #serviceQuantity').html(quantity);
            $('#cKitchenList #serviceTotalPrice').html(totalPrice);
            SubTotal();
        }
    });


    //Fridge Checkbox
    ServiceChecked(
        $('#msServices'),
        '#fridgeCleaning',
        $('#fridgeServiceQuantity'),
        $('#fridgeServicePrice'),
        $('#fridgeServiceTotalPrice'),
        $('#fridgeAfterQuantity'),
        $('#fridgeAfterTotal'),
        '#fridgeList',
        $('#displayFridgePrice'),
        '#cFridgeList',
    );
    //Fridge Quantity On Change
    $('#msServices').on('keyup','#fridgeServiceQuantity',function (){
        let quantity = $(this).val();
        let price = $('#fridgeServicePrice').val();
        let totalPrice = parseInt(quantity)*parseInt(price);
        $('#displayFridgePrice').html('$'+totalPrice);
        let checked = $('#fridgeCleaning').is(':checked');
        if(checked){
            $('#fridgeServiceTotalPrice').val(totalPrice);
            $('#fridgeAfterQuantity').val(quantity);
            $('#fridgeAfterTotal').val(totalPrice);
            $('#fridgeList #serviceQuantity').html(quantity);
            $('#fridgeList #serviceTotalPrice').html(totalPrice);
            //set data to confirm box
            $('#cFridgeList #serviceQuantity').html(quantity);
            $('#cFridgeList #serviceTotalPrice').html(totalPrice);

            SubTotal();
        }
    });



    //Garden Checkbox
    ServiceChecked(
        $('#msServices'),
        '#gardenCleaning',
        $('#gardenServiceQuantity'),
        $('#gardenServicePrice'),
        $('#gardenServiceTotalPrice'),
        $('#gardenAfterQuantity'),
        $('#gardenAfterTotal'),
        '#gardenList',
        $('#displayGardenPrice'),
        '#cGardenList',
    );

    //Garden Quantity On Change
    $('#msServices').on('keyup','#gardenServiceQuantity',function (){
        let quantity = $(this).val();
        let price = $('#gardenServicePrice').val();
        let totalPrice = parseInt(quantity)*parseInt(price);
        $('#displayGardenPrice').html('$'+totalPrice);
        let checked = $('#gardenCleaning').is(':checked');
        if(checked){
            $('#gardenServiceTotalPrice').val(totalPrice);
            $('#gardenAfterQuantity').val(quantity);
            $('#gardenAfterTotal').val(totalPrice);
            $('#gardenList #serviceQuantity').html(quantity);
            $('#gardenList #serviceTotalPrice').html(totalPrice);

            //set data to confirm box
            $('#cGardenList #serviceQuantity').html(quantity);
            $('#cGardenList #serviceTotalPrice').html(totalPrice);
            SubTotal();
        }
    });



    //Bathroom Checkbox
    ServiceChecked(
        $('#msServices'),
        '#bathroomCleaning',
        $('#bathroomServiceQuantity'),
        $('#bathroomServicePrice'),
        $('#bathroomServiceTotalPrice'),
        $('#bathroomAfterQuantity'),
        $('#bathroomAfterTotal'),
        '#bathRoomList',
        $('#displayBathroomPrice'),
        '#cBathRoomList',
    );

    //Bathroom Services Quantity On Change
    $('#msServices').on('keyup','#bathroomServiceQuantity',function (){
        let quantity = $(this).val();
        let price = $('#bathroomServicePrice').val();
        let totalPrice = parseInt(quantity)*parseInt(price);
        $('#displayBathroomPrice').html('$'+totalPrice);
        let checked = $('#bathroomCleaning').is(':checked');
        if(checked){
            $('#bathroomServiceTotalPrice').val(totalPrice);
            $('#bathroomAfterQuantity').val(quantity);
            $('#bathroomAfterTotal').val(totalPrice);
            $('#bathRoomList #serviceQuantity').html(quantity);
            $('#bathRoomList #serviceTotalPrice').html(totalPrice);

            //set data to confirm box
            $('#cBathRoomList #serviceQuantity').html(quantity);
            $('#cBathRoomList #serviceTotalPrice').html(totalPrice);

            SubTotal();
        }
    });





    function SubTotal(){
        let bedRoomPrice = parseInt($('#bedRoomTotalPrice').val());
        let bathRoomPrice = parseInt($('#bathRoomTotalPrice').val());
        let kaTotal = parseInt($('#kitchenAfterTotal').val());
        let faTotal = parseInt($('#fridgeAfterTotal').val());
        let gaTotal = parseInt($('#gardenAfterTotal').val());
        let baTotal = parseInt($('#bathroomAfterTotal').val());

        let displayVAT = $('#displayVat');
        let displayTotal = $('#displayTotal');
        let displaySubTotal = $('#displaySubTotal');

        let cDisplayVAT = $('#cDisplayVat');
        let cDisplayTotal = $('#cDisplayTotal');
        let cDisplaySubTotal = $('#cDisplaySubTotal');


        let subTotal = (kaTotal+faTotal+gaTotal+baTotal+bedRoomPrice+bathRoomPrice);
        displaySubTotal.html(subTotal);
        cDisplaySubTotal.html(subTotal);
        $('#stAmount').val(subTotal);

        let vat15 = (subTotal*(15/100));
        displayVAT.html('$'+ vat15)
        cDisplayVAT.html('$'+ vat15)
        displayTotal.html('$'+ (vat15+subTotal));
        cDisplayTotal.html('$'+ (vat15+subTotal));
    }



    function ServiceChecked(rootElem,whichBox,quanti,prize,totalPrize,aftrQuantity,aftrTotal,list,dispPrice,confirmBox){
        rootElem.on('click',whichBox, function (){

            let checked = $(this).is(':checked');
            let quantity = quanti;
            let price = prize.val();
            let totalPrice = totalPrize;
            let displayPrice = dispPrice;
            let afterQuantity = aftrQuantity;
            let afterTotal = aftrTotal
            if(checked){
                $(list).removeClass('delete');
                $(confirmBox).removeClass('delete');
                totalPrice.val(quantity.val()*price);
                displayPrice.html('$'+ quantity.val()*price);
                afterQuantity.val(quantity);
                afterTotal.val(quantity.val()*price);
                $(list + ' #serviceQuantity').html(quantity.val());
                $(list + ' #serviceTotalPrice').html(quantity.val()*price);
                $(confirmBox + ' #serviceQuantity').html(quantity.val());
                $(confirmBox + ' #serviceTotalPrice').html(quantity.val()*price);

                SubTotal();

            }else{
                $(list).addClass('delete');
                $(confirmBox).addClass('delete');
                afterQuantity.val(0);
                afterTotal.val(0);

                SubTotal();
            }
        });
    }


    $('#serviceContinue').on('click',function(){
        $('#serviceNext').trigger('click');
    })



/*------------------------------------ DATE TIME SECTION---------------------------------------------*/

    let fixedDate = 8;
    let activeDate = 3;
    for(let i = 1; i < fixedDate; i++){
        if(i === activeDate){
            $('#dateTimeList').append(`
             <li class="list appDate active"> <a href="javascript:void(0)">${moment().add(i,'d').format('LL')} - ${moment().add(i,'d').format('ddd')} </a> </li>
        `)
        }else{
            $('#dateTimeList').append(`
             <li class="list appDate"> <a href="javascript:void(0)">${moment().add(i,'d').format('LL')} - ${moment().add(i,'d').format('ddd')} </a> </li>
        `)
        }
    }

    //get date from  list by click
    $('#dateTime').on('click','.appDate',function (){
        let date = $(this).children().html();
        $('#appointmentDate').val(date);
        $('#displayAppointmentDate').html(date)
    })

    //get time from  list by click
    $('#dateTime').on('click','.appTime',function (){
        let time = $(this).children().html();
        $('#appointmentTime').val(time);
        $('#displayAppointmentTime').html(time)
    })


    $('#bookAppointment').on('click',function(){
        $('#dateTimeNext').trigger('click');
    })


/*-------------------------------Booking Info---------------------------------------*/

    function inputValidate(input){
        if(input.val() === ""){
            input.prev().children().html('Empty.');
            return false;
        }else{
            input.prev().children().html('');
            return true;
        }
    }

    function isValidate(inpArr){
        let res = null;
        for(let i = 0;i<inpArr.length;i++){
            if(inpArr[i] === false){
                res = false;
                break;
            }else if (inpArr[i] === true){
                res = true;
            }
        }
        return res;
    }



    $('#bookingInfoNextValidateBtn').on('click',function (){
        let name = $('#name');
        let email = $('#email');
        let phone = $('#phone');
        let city = $('#city');
        let area = $('#area');
        let postCode = $('#postCode');
        let address = $('#address');
        let orderNote = $('#orderNote');

        let inpArr = [
            inputValidate(name),
            inputValidate(email),
            inputValidate(phone),
            inputValidate(city),
            inputValidate(area),
            inputValidate(postCode),
            inputValidate(address),
            inputValidate(orderNote),
        ];

        let res = isValidate(inpArr);
        if(res === true){
            $('#displayName').html(name.val());
            $('#displayEmail').html(email.val());
            $('#displayPhone').html(phone.val());
            $('#displayCity').html(city.val());
            $('#displayArea').html(area.val());
            $('#displayPostCode').html(postCode.val());
            $('#displayOrderNote').html(orderNote.val());

            $('#bookingInfoNextBtn').trigger('click')
        }
    })








    $('#bookingInformation').on('keyup','.infoInput',function (){
        let id = $(this).attr('name');
        let value = $(this).val();
        $('#'+id).html(value);
    });

    $('#bookingInformation').on('change','.infoInput',function (){
        let id = $(this).attr('name');
        let value = $(this).val();
        $('#'+id).html(value);
    });


    $('#informationContinue').on('click',function(){
       $('#bookingInfoNextValidateBtn').trigger('click');
    });




/*---------------------------------------------CONFIRMATION----------------------------------------*/

    let payBtn = $('#confirmation #confirmPay');
    let paymentCheckbox = $('#confirmation #checkOthersPayment');
    let cashCheckbox =  $('#confirmation #checkCashPayment')
    let confirmOrder  =  $('#confirmOrder');

    $('#confirmation').on('click','#checkCashPayment',function(){
        let check = $(this).is(':checked');
        let agree = $('#checkAgree').is(':checked');
        if(check){
            paymentCheckbox.removeAttr('checked');
            if(agree){
                payBtn.attr('disabled','');
                confirmOrder.attr('type',"button");
                confirmOrder.attr('action','cash');
                confirmOrder.removeClass("disabled")
            }else{
                confirmOrder.attr('type',"button");
                confirmOrder.attr('action','none');
                confirmOrder.addClass("disabled")
            }
        }else{
            payBtn.attr('disabled','');
            confirmOrder.attr('action','none');
            confirmOrder.addClass("disabled")
        }
    });



    $('#confirmation').on('click','#checkOthersPayment',function(){
        let check = $(this).is(':checked');
        let agree = $('#checkAgree').is(':checked');
        if(check){
            cashCheckbox.removeAttr('checked');
            if(agree){
                payBtn.removeAttr('disabled');
                confirmOrder.attr('type',"submit");
                confirmOrder.attr('action','online');
                confirmOrder.removeClass("disabled")
            }else{
                payBtn.attr('disabled','')
                confirmOrder.attr('type',"button");
                confirmOrder.attr('action','none');
                confirmOrder.addClass("disabled");
            }
        }else{
            payBtn.attr('disabled','')
            confirmOrder.attr('type',"button");
            confirmOrder.attr('action','none');
            confirmOrder.addClass("disabled");
        }
    });

    $('#confirmation').on('click','#checkAgree',function(){
        let check = $(this).is(':checked');
        let cash = cashCheckbox.is(':checked');
        let online = paymentCheckbox.is(':checked');
        if(check){
            if(cash){
                payBtn.attr('disabled','');
                confirmOrder.attr('type',"button");
                confirmOrder.attr('action','cash');
                confirmOrder.removeClass("disabled");
            }else if(online){
                payBtn.removeAttr('disabled');
                confirmOrder.attr('type',"submit");
                confirmOrder.attr('action','online');
                confirmOrder.removeClass("disabled");
            }else{
                payBtn.attr('disabled','');
                confirmOrder.attr('type',"button");
                confirmOrder.attr('action','none');
                confirmOrder.addClass("disabled");
            }
        }else{
            payBtn.attr('disabled','')
            confirmOrder.attr('type',"button");
            confirmOrder.attr('action','none');
            confirmOrder.addClass("disabled");
        }
    });


    //Cash On Delivery
    $('#confirmation').on('click','#confirmOrder',function(){
        let thisBtn = $(this);
        let type = thisBtn.attr('type');
        let action = thisBtn.attr('action');

        if(type === "button" && action === "none"){
            alert('please agree and chose any payment.');
        }else if(type === "button" && action === "cash"){
            let url = "/api/CashOnDelivery";
            let data = {
                stAmount: $('#stAmount').val(),
                location: $('#locationAddress').val(),
                bedRoomPrice: $('#bedRoomPrice').val(),
                bedRoomQuantity: $('#bedRoom').val(),
                bedRoomTotalPrice:$('#bedRoomTotalPrice').val(),

                bathRoomPrice: $('#bathRoomPrice').val(),
                bathRoomQuantity: $('#bathRoom').val(),
                bathRoomTotalPrice: $('#bathRoomTotalPrice').val(),

                ksPrice:  $('#kitchenServicePrice').val(),
                ksQuantity:  $('#kitchenAfterQuantity').val(),
                ksTotal:  $('#kitchenAfterTotal').val(),

                fsPrice:  $('#fridgeServicePrice').val(),
                fsQuantity:  $('#fridgeAfterQuantity').val(),
                fsTotal:  $('#fridgeAfterTotal').val(),

                gsPrice:  $('#gardenServicePrice').val(),
                gsQuantity:  $('#gardenAfterQuantity').val(),
                gsTotal:  $('#gardenAfterTotal').val(),

                bsPrice:  $('#bathroomServicePrice').val(),
                bsQuantity:  $('#bathroomAfterQuantity').val(),
                bsTotal:  $('#bathroomAfterTotal').val(),

                appointmentDate: $('#appointmentDate').val(),
                appointmentTime: $('#appointmentTime').val(),

                displayName: $('#name').val(),
                displayEmail: $('#email').val(),
                displayAddress: $('#address').val(),
                displayCity: $('#city').val(),
                displayPostCode: $('#postCode').val(),
                displayPhone: $('#phone').val(),
                displayArea: $('#area').val(),
                displayOrderNote: $('#orderNote').val(),

            }
            thisBtn.addClass('d-none');
            thisBtn.next().removeClass('d-none');
            axios.post(url,data).then(function(response){
                if(response.status === 200 && response.data === 1){
                    thisBtn.removeClass('d-none');
                    thisBtn.next().addClass('d-none');
                    $('#confirmationNext').trigger('click');
                }else{
                    alert("Ordered Failed. Try Again");
                    thisBtn.removeClass('d-none');
                    thisBtn.next().addClass('d-none');
                }
            }).catch(function(error){
                thisBtn.removeClass('d-none');
                thisBtn.next().addClass('d-none');
                console.log(error)
                alert("something went wrong. see error in Browser console");
            })
        }
    })




    payBtn.on('click',function(){
        let online = $(this).hasClass('disabled');
        if(!online){
            confirmOrder.trigger('click');
        }
    })






})

