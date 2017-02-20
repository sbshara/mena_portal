/*
 * Created by shiblie on 11/28/16.
 */
//
function homeAddress() {
    if( $( '#home' ).is( ':checked' ) === true) {
        $( '#homeAddress :input' ).attr('disabled', false);
    } else {
        $('#homeAddress :input').attr('disabled', true);
    }
};

function originAddress() {
    if($('#origin').is(':checked') === true) {
        $('#originAddress :input').attr('disabled', false);
    } else {
        $('#originAddress :input').attr('disabled', true);
    }
};

//
function otherAddress() {
    if($('#other').is(':checked') === true) {
        $('#otherAddress :input').attr('disabled', false);
        $('#otherName').attr('disabled', false);
    } else {
        $('#otherAddress :input').attr('disabled', true);
        $('#otherName').attr('disabled', true);
    }
};

function typeOtherAddress () {
    var srcName = $('#otherName').val();
    if(srcName.length > 0){
        $('#other').val(srcName);
        $('#otherAddressTTL').html(srcName);
    } else {
        $('#other').val('Other Address');
        $('#otherAddressTTL').html('Other Address');
    }
};

$(function(){
    $(".select2").select2();
    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
        },
        function (start, end) {
            $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    $('.date-picker').daterangepicker({
        defaultDate: null,
        singleDatePicker: true,
        autoclose: true,
        showDropdowns: true,
        changeMonth: true,
        changeYear: true,
        showInputs: true,
        autoUpdateInput: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
    });



    $('#interview_date').daterangepicker({
        defaultDate: null,
        singleDatePicker: true,
        showDropdowns: true,
        timePicker: true,
        timePickerIncrement: 15,
        opens: 'left',
        locale: {
            format: 'YYYY-MM-DD h:mm A'
        }
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    //$(".my-colorpicker1").colorpicker();
    //color picker with addon
    //$(".my-colorpicker2").colorpicker();

    ////Timepicker
    //$(".timepicker").timepicker({
    //    showInputs: true
    //});

    $('#accordion').accordion({
        collapsible: true,
        heightStyle: "content",
        icons: {
            "header": "ui-icon-plusthick",
            "activeHeader": "ui-icon-minusthick"
        }
    });

    $('#homeAddress :input').attr('disabled', true);
    $('#originAddress :input').attr('disabled', true);
    $('#otherAddress :input').attr('disabled', true);
    $('#otherName').attr('disabled', true);
});


$(document).ajaxStart(function() { Pace.restart(); });

// Populate States on Country Selection
function getStates(obj, trgt) {
    var country = obj.value;
    var localurl = document.location.origin + '/~shiblie/mena_portal/public' + '/AJAX/states/' + country;
    $.ajax({
        start:      function () { Pace.restart(); },
        url:        localurl,
        type:       'get',
        success:    function(response){
            var option_data = '<option>Please select a state...</option>';
            $.each(response, function(i, response){
                option_data = option_data + "<option id='"+response.id + "' value='" +response.id+"'>"+response.state_name+"</option>";
            });
            $('#' + trgt).html(option_data);
        }
    });
};

// Populate cities on state selection
function getCities(obj, trgt) {
    var state = obj.value;
    var objName = obj.name;
    var oldState = $('#' + objName + '_selection').val();
    var localurl = document.location.origin + '/~shiblie/mena_portal/public' + '/AJAX/cities/' + state;
    $('#' + oldState).val(state);
    $.ajax({
        start:      function () { Pace.restart(); },
        url:        localurl,
        type:       'get',
        success:    function(response){
            var option_data = '<option>Please select a city...</option>';
            $.each(response, function(i, response){
                option_data += "<option id='" + response.id + "' value='" + response.id + "' ";
                if(response.id == oldState){
                    option_data += "selected ";
                }
                option_data += ">";
                option_data += response.city_name;
                if(response.city_name_ar !== ''){
                    option_data += " - ";
                    option_data += response.city_name_ar;
                }
                option_data += "</option>";
            });
            $('#' + trgt).html(option_data);
        }
    });
};

function setCity(obj) {
    cityField = obj.name;
    var city = obj.value;
    $('#' + cityField + '_selection').val(city);
};

function getDepartmentHead(Obj, Trgt) {
    var source = $('#' + Obj.id);
    var target = $('#' + Trgt);
    var localUrl = document.location.origin + '/~shiblie/mena_portal/public' + '/AJAX/department/' + source.val();
    $.ajax({
        start: function () {
            Pace.restart();
        },
        url: localUrl,
        type: 'get',
        success: function (response) {
            var option_data = '';
            //$.each(response, function (i, response) {
                option_data += "<option id='" + response.id + "' value='" + response.id + "' ";
                //if (response.id == source.val()) {
                //    option_data += "selected ";
                //}
                option_data += ">";
                option_data += response.first_name;
                option_data += " ";
                option_data += response.last_name;
                //option_data += " ";
                //option_data += response.last_name;
                option_data += "</option>";
            //});
            target.html(option_data);
        }
    });
};

// Autocomplete applicant name on adding new address
function getApplicantName(Ray){
    var str = $(Ray).val().toString();
//    var localurl = document.location.origin + '/~shiblie/mena_portal/public' + '/AJAX/applicant/' + str; // Shiblie's MAC
    var localurl = document.location.origin + '/~shiblie/mena_portal/public' + '/AJAX/applicant/' + str; // MENA PC
    if(str.length >= 1) {
        $.ajax({
            start: function () { Pace.restart(); },
            url: localurl,
            type: 'get',
            success: function (response) {
                var option_data = "Options: (click on name to select)<ul>";
                $.each(response, function (i, response) {
                    option_data =
                        option_data +
                        "<li id='" +
                        response.id +
                        "'  style='cursor: pointer;' onclick='selectName(this)'" +
                        "data-applicant='" +
                        response.first_name + "." + response.last_name +
                        "'>" +
                        response.first_name + " " + response.last_name + "</li>";
                });
                option_data = option_data + "</ul>";
                $('#name-guide').show();
                $('#name-guide').html(option_data);
            },
            Error: function(response) {
                $('#name-guide').hide();
                //$('#name-guide').html(response);
            }
        });
    }
};

// get vehicle model using the brand name
function getModel(obj, trgt) {
    var brand = obj.value;
    var localurl = document.location.origin + '/~shiblie/mena_portal/public' + '/AJAX/models/' + brand;
    $.ajax({
        start:      function () { Pace.restart(); },
        url:        localurl,
        type:       'get',
        success:    function(response){
            var option_data = '<option>Please select a model...</option>';
            $.each(response, function(i, response){
                option_data = option_data + "<option id='"+response.id + "' value='" +response.id+"'>"+response.model_name+"</option>";
            });
            $('#' + trgt).html(option_data);
        }
    });
};

// selecting suggested applicant name
function selectName(ObJ) {
    var strName = ObJ.getAttribute('data-applicant');
    var strID = ObJ.getAttribute('id');
    //data('applicant');
    // window.location.replace("http://localhost/~shiblie/mena_portal/public/auth/HR/interview/"+strID); // Shiblie's MAC
    window.location.replace("/mena_portal/public/auth/HR/interview/"+strID); // MENA PC
    //$('#applicant').val(strName);
    //$('#applicantid').attr('id', strID);
    //$('#name-guide').hide();
};

// Add and remove attachment (input field) (New Applicant)
//var attachment = -1;
//var limit = 9;
var atachAddErr = false;
var atachRemErr = false;

function showInput(div, counter) {
    var cntrV = $('#' + counter).val();
    var cntrN = counter.toString();
    if(cntrV < 9){
        cntrV++;
        $('#' + div + cntrV).removeClass(' hidden');
        $('#' + cntrN).val(cntrV);
        if(atachRemErr === true){
            $('#' + div + 'Err').remove();
            atachRemErr = false;
        }
    } else {
        if(atachAddErr === true){
            return false;
        } else {
            $('#' + div + '0').before(
                "<span id='" +
                div +
                "Err'" +
                "class='alert-error'>" +
                "you have reached the limit of " +
                div.slice(3,div.length - 5) +
                "s!</span><br/>"
            );
            atachAddErr = true;
        }
    }
};

function hideInput(div, counter) {
    var cntrV = $('#' + counter).val();
    var cntrN = counter.toString();

    if(cntrV <= -1){
        if(atachRemErr === true) {
            return false;
        } else {
            $('#' + div + cntrV).before(
                "<span id='" +
                div +
                "Err'" +
                "class='alert-error'>" +
                "Nothing to remove!</span>"
            );
            atachRemErr = true;
        }
    } else {
        $('#' + div + cntrV).addClass(' hidden');
        $('#' + div + 'Err').remove();
        atachAddErr = false;
        cntrV--;
        $('#' + cntrN).val(cntrV);
    }
};


$(function () {
    $('.has-error').each(function(i, Obj){
        if($('.has-error').hasClass('hidden')){
            var countErr = $(this).length - 1;
            $('#attachmentCounter').val(countErr);
            $('.has-error').removeClass('hidden');
        }
    });
});

function languageCounter(obj){
    var checker = obj.id;
    var langCount = $('#languageCount').val();
    if($('#' + checker).is(':checked') === true){
        langCount++;
        $('#languageCount').val(langCount);
    } else {
        langCount--;
        $('#languageCount').val(langCount);
    }
};

function interviewCheck(obj){
    var Check = obj.id;
    if ($('#'+Check).is(':checked')){
        $('#'+Check).val('interview');
    } else {
        $('#'+Check).val('null');
    }
};

function showWarranty(obj) {
    var warranty = obj.id;
    if ( $('#'+warranty).is(':checked') === true) {
        $('#warranty_validity').val(1);
        $('#warranty').removeClass('hidden');
    } else {
        $('#warranty_validity').val(0);
        $('#warranty').addClass('hidden');
    }
};

