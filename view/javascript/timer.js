let startingTime = 30;
const counDownEl = document.getElementById("countdown");
function updateTime(){
   
    startingTime.innerHTML = setInterval(()=>{
        counDownEl.innerHTML=startingTime + "s";
        startingTime--;
        if(startingTime==0){
               document.getElementById("next").click();
              startingTime = 30;
        }

    },1000) 
}

function getNextQuestion(){

}




updateTime();   
