/**
 * Created by shiblie on 11/28/16.
 */

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


});


function getStates() {
    var country = $('#country');
//        alert (encodeURI(country.val()));
//        alert(country.val());
    $.ajax({
        url:        'get/states/', //+ encodeURI(country.val()),
        type:       'post',
        data:       {country:country.val()},
        success:    function(data){
            $('#state').html(data);
        }
    });
}

// Add and remove attachment (input field) (New Applicant)
var attachment = 1;
var limit = 10;
var addErr = false;
var remErr = false;

function addInput(div){
    if(attachment <= limit){
        $(div).clone().appendTo('#newAttachment');
    //    $('#attachment' + (attachment - 1)).after("<input type='file' class='btn btn-file' id='attachment" + attachment + "' name='attachment[" + attachment + "]'>");
        if(remErr == true){
            $('#remErr').remove();
            remErr = false;
        }
        attachment++;
    } else {
        if(addErr == true){
            return false;
        } else {
            $("div[id='attachmentGroup']:first").before("<span id='addErr' class='alert-error'>you have reached the limit of attachments!</span><br/>");
            addErr = true;
        }
    }
}

function removeInput(){
    if(attachment <= 1){
        if(remErr == true){
            return false;
        } else {
            $("div[id='attachmentGroup']:first").before("<span id='remErr' class='alert-error'>Nothing to remove!</span>");
            remErr = true;
        }
    } else {
        $("div[id='attachmentGroup']:last").remove();
        $('#addErr').remove();
        addErr = false;
        attachment--;
    }
}
