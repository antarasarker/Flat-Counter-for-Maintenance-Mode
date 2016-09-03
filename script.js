var days = parseInt(document.getElementById("days").innerHTML);
var hours = parseInt(document.getElementById("hours").innerHTML);
var mins = parseInt(document.getElementById("mins").innerHTML);
var sec = parseInt(document.getElementById("sec").innerHTML);
var sec = 0; 

var interval = setInterval(function(){
    
    if(sec == 0){
        if(mins == 0 ){
            if(hours == 0){
                if( days !== 0 ){
                    days--;
                    hours = 23;
                    mins = 59;
                    sec = 59;
                }
            }else{
                    hours--;
                    mins = 59;
                    sec = 59;
                }
        }else{
            mins--;
            sec = 59;
        }
        
        sec = 59;
    }else{
        sec--;
    }
    
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("mins").innerHTML = mins;
    document.getElementById("sec").innerHTML = sec;
    console.log(days, hours, mins, sec);
}, 1000);


    
