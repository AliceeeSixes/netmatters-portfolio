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

$("#contact").on("click", ".close-message", (event) => {

    $(event.target).parent().slideUp();
    console.log("close");


});

$(".contact__notif").hide();




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