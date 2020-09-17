
function sliders(){
    if(document.getElementsByClassName("slider_item")[0].classList.contains("active")){
    
   document.getElementsByClassName("slider_item")[1].classList.add("active");
   document.getElementsByClassName("slider_item")[0].classList.remove("active");
    
}else if(document.getElementsByClassName("slider_item")[1].classList.contains("active")){
         
      document.getElementsByClassName("slider_item")[2].classList.add("active");
      document.getElementsByClassName("slider_item")[1].classList.remove("active");   
    
}else if(document.getElementsByClassName("slider_item")[2].classList.contains("active")){
         
      document.getElementsByClassName("slider_item")[3].classList.add("active");
      document.getElementsByClassName("slider_item")[2].classList.remove("active"); 
    
}else if(document.getElementsByClassName("slider_item")[3].classList.contains("active")){
         
      document.getElementsByClassName("slider_item")[0].classList.add("active");
      document.getElementsByClassName("slider_item")[3].classList.remove("active");   
}
    
    
}
setInterval(sliders,5000);
















