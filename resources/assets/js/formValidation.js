
    $("#achievementsForm").validate({
        rules: {
            title: {
                required: true,
                minlength: 5
            },
            dateOfachievement: {
                required: true
            },
            achievementsImage: {
                required: true
            },
            content: {
                required: true,
                minlength: 15
            },
        },
        //For custom messages
        messages: {
            title:{
                required: "Enter a username",
                minlength: "Enter at least 5 characters"
            },
            dateOfachievement:{
                required: "Enter a username",

            },achievementsImage:{
                required: "Enter a username",

            },content:{
                required: "Enter a username",
                minlength: "Enter at least 15 characters"
            }

        },
        errorElement : 'div',
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            if (placement) {
                $(placement).append(error)
            } else {
                error.insertAfter(element);
            }
        }
    });