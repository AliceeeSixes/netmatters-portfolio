$(".animsition").animsition({
    inClass: "fade-in",
    outClass: "fade-out",
    linkElement: 'a:not([href^="#"])',
    inDuration: 400,
    outDuration: 600
});




// Vertical nav toggle
let sidebar = true;
let navVerticalWidth = $("#nav__vertical").width();


function toggleSidebar() {
    if (sidebar === true) {
        //hide
        $("main").css("margin-left","0");
        $(".nav__vertical--toggle").css("margin-left","0");
        $(".nav__vertical--toggle button").html(`<i class="fa fa-chevron-right"></i>`);
        console.log("hidden");
        sidebar = false;
    }
    else {
        //show
        $("main").css("margin-left",navVerticalWidth);
        $(".nav__vertical--toggle").css("margin-left",navVerticalWidth);   
        $(".nav__vertical--toggle button").html(`<i class="fa fa-chevron-left"></i>`);
        console.log("shown");
        sidebar = true;
    }
    
}

// Horizontal nav toggle
let topbar = true;

function toggleTopbar() {
    if (topbar === true) {
        //hide
        $(".nav__horizontal--button").css("display","none")
        $(".nav__horizontal--toggle button").html(`<i class="fa fa-chevron-down"></i>`);
        console.log("hidden");
        topbar = false;
    }
    else {
        //show
        $(".nav__horizontal--button").css("display","block")
        $(".nav__horizontal--toggle button").html(`<i class="fa fa-chevron-up"></i>`);
        console.log("shown");
        topbar = true;
    }
    
}


// Contact form notification

$(".contact__notif").on("click", "i", (event) => {

    $(".contact__notif").slideUp();


});

$(".contact__notif").hide();


// Contact form validation
function contactNotif(message, mood = "neutral") {

    if (mood === "bad") {
        $(".contact__notif").css("background","rgba(255, 0, 0, .5)")
    } else if (mood === "good") {
        $(".contact__notif").css("background","rgba(0, 255, 0, .5)")
    } else {
        $(".contact__notif").css("background","rgba(100, 100, 255, .5)")
    }

    $(".contact__notif h3").text(message);
    $(".contact__notif").slideDown();
}


$(`input[type="submit"]`).on("click", (event) => {
 
    event.preventDefault();
    let infoIsValid = true;

    // Get inputs from fields
    firstName = $("#fname").val();
    lastName = $("#lname").val();
    emailAddress = $("#email").val();
    emailSubject = $("#subject").val();
    emailMessage = $("#message").val();


    // Do checks
    var validator = $("#contact__form--form").validate({
        // validation rules
        rules: {
            fname: {
                required: true
            },
            lname: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            subject: {
                required: true
            }
        },

        //validation messages
        messages: {
            fname: {
                required: contactNotif("Form failed to send - first name is required","bad")
            },
            lname: {
                required: contactNotif("Form failed to send - last name is required","bad")
            },
            email: {
                required: contactNotif("Form failed to send - an email address is required","bad"),
                email: contactNotif("Form failed to send - not a valid email address","bad")
            },
            subject: {
                required: contactNotif("Form failed to send - a subject line is required","bad")
            }
        },
        errorPlacement: function(error, element) {
            error.appendTo( element.parent() );
          }
    });

    // firstName
    if (validator.element("#fname") === false) {
        infoIsValid = false;
    }
    if (validator.element("#lname") === false) {
        infoIsValid = false;
    }
    if (validator.element("#email") === false) {
        infoIsValid = false;
    }
    if (validator.element("#subject") === false) {
        infoIsValid = false;
    }

    // result

    if (infoIsValid) {
        //submit form
        console.log("form allowed through");
        contactNotif("Form successfully submitted", "good");

        // add form submission once backend is implemented
    } else {
        console.log("form stopped")

    }

});
