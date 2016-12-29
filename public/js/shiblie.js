/**
 * Created by shiblie on 11/28/16.
 */


//function saveApplicant () {
//    $.ajax({
//        start:      function () { pace.restart() },
//        url:        '/public/auth/HR/applicant/',
//        type:       'post',
//        success:    function (response) {
//            alert('It Worked so far');
//        }
//    });
//};

$( function() {
    $('#accordion').accordion({
        collapsible: true,
        heightStyle: "content"
    });
});

function homeAddress() {
    $('#homeAddress').show('slow');
    $('#originAddress').hide('slow');
    $('#otherAddress').hide('slow');
    $('#otherName').hide('slow');
};

function originAddress() {
    $('#homeAddress').hide('slow');
    $('#originAddress').show('slow');
    $('#otherAddress').hide('slow');
    $('#otherName').hide('slow');
};

function otherAddress() {
    $('#homeAddress').hide('slow');
    $('#originAddress').hide('slow');
    $('#otherAddress').show('slow');
    $('#otherName').show('slow');
};

function typeOtherAddress () {
    $('#other').val($('#otherName').val());
};

$(function(){
    $(".select2").select2();
    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
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

    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
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
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
        showInputs: false
    });

    $('#homeAddress').hide();
    $('#originAddress').hide();
    $('#otherAddress').hide();
    $('#otherName').hide();
});


//$(document).ajaxStart(function() { Pace.restart(); });

// Populate States on Country Selection
function getStates() {
    var country = $('#country').val();
    var localurl = '/public/AJAX/states/' + country;
    $.ajax({
        start:      function () { Pace.restart(); },
        url:        localurl,
        type:       'get',
        success:    function(response){
                        var option_data = '';
                        $.each(response, function(i, response){
                            option_data = option_data + "<option id='"+response.id + "' value='" +response.id+"'>"+response.state_name+"</option>";
                        });
                        $('#state').html(option_data);
                    }
    });
};

// Populate cities on state selection
function getCities() {
    var state = $('#state').val();
    var oldState = $('#state_selection').val();
    $('#state_selection').val(state);
    var localurl = '/public/AJAX/cities/' + state;
    $.ajax({
        start:      function () { Pace.restart(); },
        url:        localurl,
        type:       'get',
        success:    function(response){
                        var option_data = '';
                        var result = '';
                        $.each(response, function(i, response){
                            result  = "<option id='";
                            result += response.id;
                            result += "' value='";
                            result += response.id;
                            result += "' ";
                            if(response.id == oldState){
                                result += "selected ";
                            };
                            result += ">";
                            result += response.city_name;
                            result += " - ";
                            result += response.city_name_ar;
                            result += "</option>";

                            option_data += result;
                        });
                        $('#city').html(option_data);
                    }
    });
};

function setCity() {
  var city = $('#city').val();
    $('#city_selection').val(city);
};

// Autocomplete applicant name on adding new address
function getApplicantName(Ray){
    var str = $(Ray).val().toString();
    alert (str);
    var localurl = '/public/auth/AJAX/applicant/' + str;
    if(str.length > 1) {
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

// selecting suggested applicant name
function selectName(ObJ) {
    var strName = ObJ.getAttribute('data-applicant');
    var strID = ObJ.getAttribute('id');
        //data('applicant');
    $('#applicant').val(strName);
    $('#applicantid').val(strID);
    $('#name-guide').hide();
};

// Add and remove attachment (input field) (New Applicant)
var attachment = -1;
var limit = 9;
var addErr = false;
var remErr = false;

function addInput(div){
    if(attachment < limit){
        var newDiv = div.slice(0,-1) + attachment;
        $('#'+div).clone().appendTo('#newAttachment').prop('id', newDiv);
        $('#'+newDiv).find('#remove').prop('hidden', '');
        $('#'+newDiv).find('#attachmentCountry').prop('name', 'attachmentCountry'+attachment);
        $('#'+newDiv).find('#attachmentType').prop('name', 'attachmentType'+attachment);
        $('#'+newDiv).find('#attachmentIssuer').prop('name', 'attachmentIssuer'+attachment);
        $('#'+newDiv).find('#attachmentIssueDate').prop('name', 'attachmentIssueDate'+attachment);
        $('#'+newDiv).find('#attachmentExpiryDate').prop('name', 'attachmentExpiryDate'+attachment);
        $('#attachmentCounter').val(attachment);
        if(remErr == true){
            $('#remErr').remove();
            remErr = false;
        }
        attachment++;
    } else {
        if(addErr == true){
            return false;
        } else {
            $('#'+div).before("<span id='addErr' class='alert-error'>you have reached the limit of attachments!</span><br/>");
            addErr = true;
        }
    }
}

function removeInput(Obj){
    if(attachment <= 1){
        if(remErr == true){
            return false;
        } else {
            $(Obj).parent().before("<span id='remErr' class='alert-error'>Nothing to remove!</span>");
            remErr = true;
        }
    } else {
        $(Obj).parent().remove();
        $('#attachmentCounter').val(attachment);
        $('#addErr').remove();
        addErr = false;
        attachment--;
    }
}

function showInput(div) {
    if(attachment < limit){
        attachment++;
        $('#' + div + attachment).removeClass(' hidden');
        $('#attachmentCounter').val(attachment);
        if(remErr == true){
            $('#remErr').remove();
            remErr = false;
        }
    } else {
        if(addErr == true){
            return false;
        } else {
            $('#' + div + '0').before("<span id='addErr' class='alert-error'>you have reached the limit of attachments!</span><br/>");
            addErr = true;
        }
    }
}

function hideInput(div) {
    if(attachment <= -1){
        if(remErr == true) {
            return false;
        } else {
            $('#' + div + attachment).before("<span id='remErr' class='alert-error'>Nothing to remove!</span>");
            remErr = true;
        }
    } else {
        $('#' + div + attachment).addClass(' hidden');
        $('#addErr').remove();
        addErr = false;
        attachment--;
        $('#attachmentCounter').val(attachment);
    }
}

$(function () {
    $('.has-error').each(function(i, Obj){
        if($('.has-error').hasClass('hidden')){
            var countErr = $(this).length - 1;
            $('#attachmentCounter').val(countErr);
            $('.has-error').removeClass('hidden');
        }
    });
});
