/*
 * Created by shiblie on 11/28/16.
 */
//
function homeAddress() {
    if ($( '#home' ).is( ':checked' ) === true) {
        $( '#homeAddress :input' ).attr('disabled', false);
    } else {
        $('#homeAddress :input').attr('disabled', true);
    }
}

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

    $('#serviceDetails').focus(function() {
        CKEDITOR.replace('serviceDetails');
    });

    Dropzone.options.serviceAttachment = {
        //url: '',	                                //Has to be specified on elements other than form (or when the form doesn't have an action attribute). You can also provide a function that will be called with files and must return the url (since v3.12.0)
        //method: '',                               //Defaults to "post" and can be changed to "put" if necessary. You can also provide a function that will be called with files and must return the method (since v3.12.0)
        parallelUploads: 1,                         //How many file uploads to process in parallel (See the Enqueuing file uploads section for more info)
        maxFilesize: 5,                             //in MB
        //filesizeBase: '',                         //Defaults to 1000. This defines whether a base of 1000 or 1024 should be used to calculate file sizes. 1000 is correct, because 1000 Bytes equal 1 Kilobyte, and 1024 Bytes equal 1 Kibibyte. You can change this to 1024 if you don't care about validity.
        paramName: 'serviceAttachment',             //The name of the file param that gets transferred. Defaults to file. NOTE: If you have the option uploadMultiple set to true, then Dropzone will append [] to the name.
        uploadMultiple: false,                      //Whether Dropzone should send multiple files in one request. If this it set to true, then the fallback file input element will have the multiple attribute as well. This option will also trigger additional events (like processingmultiple). See the events section for more information.
        headers: {                                  //An object to send additional headers to the server. Eg: headers: { "My-Awesome-Header": "header value" }
            'csrf_name' : $('#csrf_name').val(),
            'csrf_value' : $('#csrf_value').val()
        },
        addRemoveLinks: true,                       //This will add a link to every file preview to remove or cancel (if already uploading) the file. The dictCancelUpload, dictCancelUploadConfirmation and dictRemoveFile options are used for the wording.
        //previewsContainer: '',                    //defines where to display the file previews – if null the Dropzone element is used. Can be a plain HTMLElement or a CSS selector. The element should have the dropzone-previews class so the previews are displayed properly.
        //hiddenInputContainer: '',                 //This is the element the hidden input field (which is used when clicking on the dropzone to trigger file selection) will be appended to. This might be important in case you use frameworks to switch the content of your page. Defaults to body.
        clickable: true,	                        //If true, the dropzone element itself will be clickable, if false nothing will be clickable. Otherwise you can pass an HTML element, a CSS selector (for multiple elements) or an array of those.
        //createImageThumbnails: '',                //
        //maxThumbnailFilesize: '',	                //  in MB. When the filename exceeds this limit, the thumbnail will not be generated.
        //thumbnailWidth: '',	                    //if null, the ratio of the image will be used to calculate it.
        //thumbnailHeight: '',	                    //the same as thumbnailWidth. If both are null, images will not be resized.
        maxFiles: 10,	                            //if not null defines how many files this Dropzone handles. If it exceeds, the event maxfilesexceeded will be called. The dropzone element gets the class dz-max- files-reached accordingly so you can provide visual feedback.
        //resize: '',	                            //is the function that gets called to create the resize information. It gets the file as first parameter and must return an object with srcX, srcY, srcWidth and srcHeight and the same for trg*. Those values are going to be used by ctx.drawImage().
        //init: '',	                                //is a function that gets called when Dropzone is initialized. You can setup event listeners inside this function.
        //acceptedMimeTypes: '',	                //Deprecated in favor of acceptedFiles
        //acceptedFiles: '',	                    //The default implementation of accept checks the file's mime type or extension against this list. This is a comma separated list of mime types or file extensions. Eg.: image/*,application/pdf,.psd. If the Dropzone is clickable this option will be used as accept parameter on the hidden file input as well.
        //accept: '',	                            //is a function that gets a file and a done function as parameter. If the done function is invoked without a parameter, the file will be processed. If you pass an error message it will be displayed and the file will not be uploaded. This function will not be called if the file is too big or doesn't match the mime types.
        //renameFilename: '',	                    //is a function that is invoked before the file is uploaded to the server and renames the file. See the renameFilename pull request for more information.
        //enqueueForUpload: '',    	                //Deprecated in favor of autoProcessQueue.
        //autoProcessQueue: '',	                    //When set to false you have to call myDropzone.processQueue() yourself in order to upload the dropped files. See below for more information on handling queues.
        //previewTemplate: '',	                    //is a string that contains the template used for each dropped image. Change it to fulfill your needs but make sure to properly provide all elements. You can include the HTML in your page in a <div id="preview-template" style="display: none;"></div> container, and set it like this: previewTemplate: document.getElementById('preview-template').innerHTML.
        forceFallback: true,	                    //Defaults to false. If true the fallback will be forced. This is very useful to test your server implementations first and make sure that everything works as expected without dropzone if you experience problems, and to test how your fallbacks will look.
        //fallback: '',	                            //is a function that gets called when the browser is not supported. The default implementation shows the fallback input field and adds a text.
        //to translate dropzone, you can also provide these options:
        //dictDefaultMessage:	                    //The message that gets displayed before any files are dropped. This is normally replaced by an image but defaults to "Drop files here to upload"
        //dictFallbackMessage: '',	                //If the browser is not supported, the default message will be replaced with this text. Defaults to "Your browser does not support drag'n'drop file uploads."
        //dictFallbackText: '',	                    //This will be added before the file input files. If you provide a fallback element yourself, or if this option is null this will be ignored. Defaults to "Please use the fallback form below to upload your files like in the olden days."
        //dictInvalidFileType: '',	                //Shown as error message if the file doesn't match the file type.
        //dictFileTooBig: '',	                    //Shown when the file is too big. {{filesize}} and {{maxFilesize}} will be replaced.
        //dictResponseError: '',	                //Shown as error message if the server response was invalid. {{statusCode}} will be replaced with the servers status code.
        //dictCancelUpload: '',	                    //If addRemoveLinks is true, the text to be used for the cancel upload link.
        //dictCancelUploadConfirmation: '',         //If addRemoveLinks is true, the text to be used for confirmation when cancelling upload.
        //dictRemoveFile: '',	                    //If addRemoveLinks is true, the text to be used to remove a file.
        //dictMaxFilesExceeded: '',	                //If maxFiles is set, this will be the error message when it's exceeded.


        dictDefaultMessage: 'Drag & Drop your files here, or click to select files'
        //accept: function () {
        //    $('#csrf_name').value();
        //    $('#csrf_value').value();
        //}
    };

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
        start:      function () { Pace.restart(); },
        url:        localUrl,
        async:      true,
        type:       'get',
        success:    function (response) {
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
            start:      function () { Pace.restart(); },
            async:      true,
            url:        localurl,
            type:       'get',
            success:    function (response) {
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
        async:      true,
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
    // window.location.replace("http://localhost/~shiblie/mena_portal/public/auth/HR/interview/"+strID); // Shiblie's MAC
    window.location.replace("/mena_portal/public/auth/HR/interview/"+strID); // MENA PC
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
}

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
        $('#warranty_val').val(1);
        $('#warranty').removeClass('hidden');
    } else {
        $('#warranty_validity').val(0);
        $('#warranty_val').val(0);
        $('#warranty').addClass('hidden');
    }
};

$('#allTrucks').DataTable({
    'paging': true,
    'lengthChange': true,
    'searching': true,
    'ordering': true,
    'info': true,
    'autoWidth': true
});



