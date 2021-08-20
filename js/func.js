/*  Wizard */
jQuery(function($) {
    "use strict";
    // Chose below which method to send the email, available:
    // Simple phpmail text/plain > send_email_3.php (default)
    // PHPMailer text/html > phpmailer/send_email_3_phpmailer.php
    // PHPMailer text/html SMTP > phpmailer/send_email_3_phpmailer_smtp.php
    // PHPMailer with html template > phpmailer/send_email_3_phpmailer_template.php
    // PHPMailer with html template SMTP > phpmailer/send_email_3_phpmailer_template_smtp.php
    $('form#wrapped').attr('action', 'order.php');
    $("#wizard_container").wizard({
        stepsWrapper: "#wrapped",
        submit: ".submit",
        unidirectional: false,
        beforeSelect: function(event, state) {
            if ($('input#website').val().length != 0) {
                return false;
            }
            if (!state.isMovingForward)
                return true;
            var inputs = $(this).wizard('state').step.find(':input');
            return !inputs.length || !!inputs.valid();
        }
    }).validate({
        errorPlacement: function(error, element) {
            if (element.is(':radio') || element.is(':checkbox')){
                error.insertBefore(element.next());
            } else {
                error.insertAfter(element);
            }
        }
    });
    //  progress bar
    $("#progressbar").progressbar();
    $("#wizard_container").wizard({
        afterSelect: function(event, state) {
            $("#progressbar").progressbar("value", state.percentComplete);
            $("#location").text("langkah ke " + state.stepsComplete + " dari " + state.stepsPossible + " langkah");
        }
    });
});

$("#wizard_container").wizard({
    transitions: {
        branchtype: function($step, action) {
            var branch = $step.find(":checked").val();
            if (!branch) {
                $("form").valid();
            }
            return branch;
        }
    }
});

/* File upload validate size and file type - For details: https://github.com/snyderp/jquery.validate.file*/
$("form#wrapped")
    .validate({
        rules: {
            fileupload: {
                fileType: {
                    types: ["pdf", "application/msword", "application/vnd.openxmlformats-officedocument.wordprocessingml.document"]
                },
                maxFileSize: {
                    "unit": "KB",
                    "size": 150
                },
                minFileSize: {
                    "unit": "KB",
                    "size": "2"
                }
            }
        }
    });

// Input name and email value
function getVals(formControl, controlType) {
    switch (controlType) {

        case 'name_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#name_field").text(value);
            break;

        case 'email_field':
            // Get the value for input
            var value = $(formControl).val();
            $("#email_field").text(value);
            break;
    
    case 'domain_field':
        // Get the value for input
        var value = $(formControl).val();
        var nama_domain = $("#nama_domain").val();
        $("#frm_nama_domain").show();
        $("#frm_nama_domain").fadeOut();
        nama_domain = nama_domain.replace(/^http(s?):\/\//i, "");
        $("#nama_domain").val("http://" + nama_domain);
        if (value == "Ya"){ 
            $("#label_nama_domain").html("Nama Domain Sekarang");
            $("#nama_domain").attr("placeholder", "Nama Domain Sekarang");
        }else{
            $("#label_nama_domain").html("RENCANA Nama Domain");
            $("#nama_domain").attr("placeholder", "RENCANA Nama Domain");

        }
        $("#frm_nama_domain").fadeIn();

        break;
    }    
}