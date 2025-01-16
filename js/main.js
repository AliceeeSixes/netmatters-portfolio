$(".animsition").animsition({
    inClass: "fade-in",
    outClass: "fade-out",
    linkElement: 'a:not([href^="#"]):not([target="_blank"])',
    inDuration: 400,
    outDuration: 600
});




// Vertical nav toggle
let sidebar = true;
let navVerticalWidth = $("#nav__vertical").width();


function toggleSidebar() {
    if (sidebar === true) {
        //hide
        $(".nav__vertical--toggle button").html(`<i class="fa fa-chevron-right"></i>`);
        $("body").css("grid-template-columns", "0 0 1fr");
        console.log("hidden");
        sidebar = false;
    }
    else {
        //show
        $(".nav__vertical--toggle button").html(`<i class="fa fa-chevron-left"></i>`);
        $("body").css("grid-template-columns", "250px 0 1fr");
        console.log("shown");
        sidebar = true;
    }
    
}

// Horizontal nav toggle
let topbar = true;

function hideTopbar() {
    $(".nav__horizontal--button").css("display","none");
    $(".nav__horizontal--pfp").css("display","none");
    $("#nav__horizontal").css("padding-top","0");
    $(".nav__horizontal-row").css("display","none");
    $(".nav__horizontal--toggle button").html(`<i class="fa fa-chevron-down"></i>`);
    console.log("hidden");
    topbar = false;


}


function showTopbar() {
    $(".nav__horizontal--button").css("display","block");
    $(".nav__horizontal--pfp").css("display","block");
    $("#nav__horizontal").css("padding-top","80px");
    $(".nav__horizontal-row").css("display","block");
    $(".nav__horizontal--toggle button").html(`<i class="fa fa-chevron-up"></i>`);
    console.log("shown");
    topbar = true;



}



function toggleTopbar() {
    if (topbar === true) {
        //hide
        hideTopbar();

    }
    else {
        //show
        showTopbar();

    }
    
}




// Toggle top nav on scroll
// $(window).on("mousewheel",(event) => {
//     if (event.originalEvent.wheelDelta > 0) {
//         // Up Scroll

//     } else {
//         // Down Scroll
//         hideTopbar();

//     }

// });

let position = $(window).scrollTop();
 
$(window).scroll(function() {
    let scroll = $(window).scrollTop();
    if (scroll > position) {
        hideTopbar();
        
    } else {

    }
    position = scroll;
});

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
        // submit form
        console.log("form allowed through");
        contactNotif("Form successfully submitted", "good");



        // add form submission once backend is implemented


        // reset form
        $("input").val("");
        $("textarea").val("");
    } else {
        console.log("form stopped")

    }

});

// initialise dark mode
let darkMode = localStorage.getItem("darkMode");
console.log(darkMode);
if (darkMode === null) {
    darkMode = false;
}
if (darkMode == "true") {
    darkMode = true;
    $("body").addClass("darkmode");
    $("span.darkmode-text").text("Dark Mode: On");
} else {
    darkMode = false;
    $("body").removeClass("darkmode")
    $("span.darkmode-text").text("Dark Mode: Off");
}


// dark mode functionality

function toggleDarkMode() {
    if(darkMode === false) {
        //enable
        $("body").addClass("darkmode");
        $("span.darkmode-text").text("Dark Mode: On");

        //change and save status to localstorage
        darkMode = true;
        localStorage.setItem("darkMode",darkMode);
        console.log(darkMode);
        console.log(localStorage.getItem("darkMode"));
        
    } else {
        //disable
        $("body").removeClass("darkmode")
        $("span.darkmode-text").text("Dark Mode: Off");


        //change and save status to localstorage
        darkMode = false;
        localStorage.setItem("darkMode",darkMode);
        console.log(darkMode);
        console.log(localStorage.getItem("darkMode"));
    }
}