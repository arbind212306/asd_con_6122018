/*
 * function call when client id is changed from service manager page
 * on change it auto fills the text box for name and type
 * displays product details form 
 */

function getClientInfo(id) {

    var id = id.value;
    $.ajax({
        url: webroot + 'users/get-client-details',
        method: 'POST',
        data: 'id=' + id,
        beforeSend: function (xhr) {
            xhr.setRequestHeader('x-CSRF-Token', $('[name="_csrfToken"]').val());
        },
        success: function (data) {
            var result = JSON.parse(data);
            $('#industry_name').html(result);

        },
        error: function (data) {
            console.log(data);
        }
    });
}


function clientname(id) {

    var id = id.value;
    
    $.ajax({
        url: webroot + 'users/clientname',
        method: 'POST',
        data: 'id=' + id,
        beforeSend: function (xhr) {
            xhr.setRequestHeader('x-CSRF-Token', $('[name="_csrfToken"]').val());
        },
        success: function (data) {
            var clientlist = JSON.parse(data);
            $('#client_name').html(clientlist);
         


        },
        error: function (data) {
            console.log(data);
        }
    });
}

function getclientid(id) {

    var id = id.value;
    $.ajax({
        url: webroot + 'users/getclientid',
        method: 'POST',
        data: 'id=' + id,
        beforeSend: function (xhr) {
            xhr.setRequestHeader('x-CSRF-Token', $('[name="_csrfToken"]').val());
        },
        success: function (data) {
            // alert(data);
            var data = JSON.parse(data);
             $('#clientid').val(data[0].client_id);
             $('#companyCode').val(data[0].client_code);
        },
        error: function (data) {
            console.log(data);
        }
    });
}

// function current_date(date)
// {   var date = date.value;
//     alert(date);
// }


/*
 //function to add more service div input and dropdown fields.
 //the service function will work when users clicks on add more button from add service page.
 */
function addMoreService(increment) {
    $('#btn-control_' + increment + '').hide();
    $('#remove_btn_' + increment + '').show();
    increment++;
    var getoption = option();
    var html = '<div class="row" id="row_' + increment + '">' +
            '<div class="col-md-12">' +
            '<div class="box box-danger">' +
            '<div class="box-body">' +
            '<div class="row">' +
            '<div class="col-md-3">' +
            '<div class="form-group">' +
            '<label>Product Name</label>' +
            '<select class="form-control select2" id="productName_' + increment + '"' +
            'style="width: 100%;" onchange="">' +
            '<option selected="selected">- Select -</option>' +
            '</select>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-3">' +
            '<div class="form-group">' +
            '<label>Product Code</label>' +
            '<input class="form-control" id="productCode_' + increment + '" type="text"' +
            'name="product_code[]">' +
            '</div>' +
            '</div>' +
            '<div class="col-md-3">' +
            '<div class="form-group">' +
            '<label>Service Type</label>' +
            '<select class="form-control select2" name="service_type[]"' +
            'style="width: 100%;">' +
            '<option selected="selected"> Select </option>' +
            '<option value="1">Paid</option>' +
            '<option value="0">Trail</option>' +
            '</select>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-3">' +
            '<div class="form-group">' +
            '<label>Activation Date</label>' +
            '<input class="form-control datepick"  type="text"' +
            'name="activation_date[]">' +
            '</div>' +
            '</div>' +
            '<div class="col-md-3">' +
            '<div class="form-group">' +
            '<label>Deactivation Date</label>' +
            '<input class="form-control datepick"  type="text"' +
            'name="deactivation_date[]">' +
            '</div>' +
            '</div>' +
            '<div class="col-md-3">' +
            '<div class="form-group">' +
            '<label>No. Of Employees</label>' +
            '<select class="form-control select2" name="no_of_employes[]"' +
            'style="width: 100%;">' +
            getoption +
            '</select>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-3">' +
            '<div class="form-group">' +
            '<label>Price</label>' +
            '<input class="form-control" type="text" name="price[]">' +
            '</div>' +
            '</div>' +
            '<div class="col-md-3" style="margin-top:2.4%;" id="btn-control_' + increment + '">' +
            '<div class="col-md-2" style="width: 50%;">' +
            '<div class="form-group">' +
            '<button type="button" class="btn btn-block btn-success"' +
            'onclick="addMoreService(' + increment + ');">Add More</button>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-2" style="width: 50%;;float:right;">' +
            '<div class="form-group">' +
            '<button type="button" class="btn btn-block btn-primary">Add</button>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-3" id="remove_btn_' + increment + '"' +
            'style="margin-top:2.4%; display:none;">' +
            '<div class="col-md-2" style="width: 50%;">' +
            '<div class="form-group">' +
            '<button type="button" class="btn btn-block btn-danger"' +
            'onclick="remove(' + increment + ');">Remove</button>'
    '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>';

    $('#more_product').append(html);
    $('#more_product').show();
}

function option() {
    var option = '<option value="" selected="selected"> Select </option>' +
            '<option value="0 - 10">0 - 10</option>' +
            '<option value="11 - 15">11 - 15</option>' +
            '<option value="16 - 20">16 - 20</option>' +
            '<option value="21 - 25">21 - 25</option>' +
            '<option value="26 - 50">26 - 50</option>' +
            '<option value="51 - 75">51 - 75</option>' +
            '<option value="76 - 100">76 - 100</option>' +
            '<option value="101 - 150">101 - 150</option>' +
            '<option value="151 - 200">151 - 200</option>' +
            '<option value="201 - 250">201 - 250</option>' +
            '<option value="251 - 300">251 - 300</option>' +
            '<option value="301 - 350">301 - 350</option>' +
            '<option value="351 - 400">351 - 400</option>' +
            '<option value="401 - 450">401 - 450</option>' +
            '<option value="451 - 500">451 - 500</option>' +
            '<option value="501 - 600">501 - 600</option>' +
            '<option value="601 - 700">601 - 700</option>' +
            '<option value="701 - 800">701 - 800</option>' +
            '<option value="801 - 900">801 - 900</option>' +
            '<option value="901 - 1000">901 - 1,000</option>' +
            '<option value="1,001 - 1,500">1,001 - 1,500</option>' +
            '<option value="1,501 - 2,000">1,501 - 2,000</option>' +
            '<option value="2,001 - 2,500">2,001 - 2,500</option>' +
            '<option value="2,501 - 3,000">2,501 - 3,000</option>' +
            '<option value="3,001 - 3,500">3,001 - 3,500</option>' +
            '<option value="3,501 - 4,000">3,501 - 4,000</option>' +
            '<option value="4,001 - 4,500">4,001 - 4,500</option>' +
            '<option value="4,501 - 5,000">4,501 - 5,000</option>' +
            '<option value="5,001 - 5,500">5,001 - 5,500</option>' +
            '<option value="5,501 - 6,000">5,501 - 6,000</option>' +
            '<option value="6,001 - 6,500">6,001 - 6,500</option>' +
            '<option value="6,501 - 7,000">6,501 - 7,000</option>' +
            '<option value="7,001 - 7,500">7,001 - 7,500</option>' +
            '<option value="7,501 - 8,000">7,501 - 8,000</option>' +
            '<option value="8,001 - 8,500">8,001 - 8,500</option>' +
            '<option value="8,501 - 9,000">8,501 - 9,000</option>' +
            '<option value="9,001 - 9,500">9,001 - 9,500</option>' +
            '<option value="9,501 - 10,000">9,501 - 10,000</option>' +
            '<option value="10,000+">10,000 plus</option>';
    return option;
}

/*
 * 
 * @param {type} stid
 * this function removes the entire div based on id
 */
function remove(stid) {
    if (stid !== 0) {
        $('#row_' + stid).remove();
    }
}

/*
 * @param {type} stid
 * function to fetch product deatils and auto fill product id based on selected product name 
 */
function getProductDetails(stid) {
    $.ajax({
        url: webroot + 'users/get-product-details',
        method: 'POST',
        beforeSend: function (xhr) {
            xhr.setRequestHeader('x-CSRF-Token', $('[name="_csrfToken"]').val());
        },
        success: function (data) {
            $('#productName_1').html(data);
        },
        error: function (error) {
            console.log(error);
        }
    });
}

function getProductCode(){
    var id = $('#productName_1').val();
    $.ajax({
        url: webroot + 'users/getproductcode',
        method: 'POST',
        data: {'id': id},
        beforeSend: function (xhr) {
            xhr.setRequestHeader('x-CSRF-Token', $('[name="_csrfToken"]').val());
        },
        success: function (data) {
            var productCode = JSON.parse(data);
            $('#productCode_1').val(productCode[0].product_id);
        },
        error: function (error) {
            alert('value not reaching to controller');
        }

    });
}

//$('#service').on('click', function(){
//    alert('hi');
//});
function getServiceRow(){
    var arr = [];
    $("#service option:selected").each(function() {
         arr.push($(this).val());
    });
    console.log(arr);
    $.ajax({
        url: webroot + 'users/get-service-div',
        method: 'POST',
        data: 'arr=' +arr,
        beforeSend: function(xhr){
            xhr.setRequestHeader('x-CSRF-Token', $('[name="_csrfToken"]').val());
        },
        success: function(data){
            $('#hideServiectTr').hide();
            $('#appendServiceTr').html(data);
//            $('#appendServiceTr').show(data);
            console.log(data);
        },
        error: function(error){
            console.log(error);
        }
    });
}


function getServiceDiv(){
    console.log('hi');
    alert('hi');
//    var get_selected = $("#service option:selected").last().val();
//    alert(get_selected);
//    $.ajax({
//        url: webroot + 'users/get-service-div',
//        method: 'POST',
//        data: 'id=' +get_selected,
//        beforeSend: function(xhr){
//            xhr.setRequestHeader('x-CSRF-Token', $('[name="_csrfToken"]').val());
//        },
//        success: function(data){
//            $('#hideServiectTr').hide();
//            $('#appendServiceTr').append(data);
////            $('#appendServiceTr').show(data);
//            console.log(data);
//        },
//        error: function(error){
//            console.log(error);
//        }
//    });
}




/*
 * @param {type} stid
 * function 
 */

//$(function () {
//    $(".datepick").datepicker();
//});
//
//function displayDate(){
//    $(".datepick").datepicker("show");
//}


//code for activation date picker    
$(".datepick").datepicker();
//code for deactivation date picker
$(".datepick").datepicker();

