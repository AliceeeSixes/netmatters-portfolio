$(".animsition").animsition({
    inClass: "fade-in",
    outClass: "fade-out",
    linkElement: 'a',
    inDuration: 400,
    outDuration: 600
});




// Vertical nav toggle
let sidebar = true;
let navVerticalWidth = $("#nav__vertical").width();
console.log(navVerticalWidth);
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