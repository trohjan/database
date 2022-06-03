$(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            group_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter Group Name'
                    }
                }
            },
             ward: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please select a ward'
                    }
                }
            },
			 
            area_of_operation: {
                validators: {
                  stringLength: {
                        min: 2, 
                      
                    notEmpty: {
                        message: 'Please select area of operation'
                    }
                }
            },
            
            },
			ward: {
                validators: {
                    notEmpty: {
                        message: 'Please select ward.'
                    }
                }
            },
            chairman_name: {
                validators: {
                    notEmpty: {
                        message: 'Please select group name.'
                    }
                }
            },
            area_of_operation: {
                validators: {
                    notEmpty: {
                        message: 'Please select area of operation.'
                    }
                }
            },
              
        }
            
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});