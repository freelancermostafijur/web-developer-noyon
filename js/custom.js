$(document).ready(function(){
            

/*----AOS-SCROLL JS----*/
AOS.init({
    duration:1200,
});


    
$(".about_sticky").waypoint(function(direction){
    if(direction == "down"){
       $("nav").addClass("sticky")
       }else{
        $("nav").removeClass("sticky")
       }
},1000)



/*----TYPE JS----*/
  var typed3 = new Typed('.type', {
    strings: [
        "Web Designer |",
        "Web Designer |",
        "Web Developer |",
        "WordPress Theme Customization |",
        "E-Commerce WebSite |",
        "Data Entry |",
        "YouTuber |"
    ],
    typeSpeed: 40,
    backSpeed: 20,
    smartBackspace: true, // this is a default
    loop: true
  });   
    

    
})

/*----Open Navigation-bar JS----*/
function openNav(){
    document.getElementById("myNav").setAttribute("style","width: 100%;")
}

function closeNav(){
    document.getElementById("myNav").setAttribute("style","width: 0%;")
}


        /*----active menu color----*/
        var path = window.location.pathname.split("/").pop();
        if(path == ""){
           path = "index.php";
           }
        console.log(path);
        var act = $('.primaryMenu li a[href="'+path+'"]');
        act.addClass('menu_active');


/*skype alert messege*/
    document.querySelector("#skype").addEventListener("click",function(){
    alert("skype Live: mustafijur34bd")
})




