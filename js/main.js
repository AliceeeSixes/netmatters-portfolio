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
        $("#nav__vertical").css("left","-100%")
        $(".nav__vertical--toggle").css("margin-left","0");
        $(".nav__vertical--toggle button").html(`<i class="fa fa-chevron-right"></i>`);
        console.log("hidden");
        sidebar = false;
    }
    else {
        //show
        $("main").css("margin-left",navVerticalWidth);
        $("#nav__vertical").css("left","0")
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