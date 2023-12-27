


const displayQ = document.querySelector("#displayQ");
let question = document.querySelectorAll(".question");
const counDownEl = document.getElementById("countdown");
let seconds;
function updateTime(){
    let startingTime = 30;
    seconds = setInterval(()=>{
        counDownEl.innerHTML=startingTime + "s";
        startingTime--;
        if(startingTime==0){
            
           
            clearInterval(seconds);
            document.getElementById("next").click();
        }

    },1000) 
}



let array = [].slice.call(question);
let counter = 0;
array.forEach(function(element){
    element.style.display = 'none';
})

array[counter].style.display = 'block';

function getid() { 
    array.forEach(function (param) {
        if(param.style.display == 'block') {
            let id = param.getAttribute("data-id");
            console.log(id);
        }
      });
 }

 getid();



var nextbutton = document.getElementById("next");
var Co = 1;
function test () {
    clearInterval(seconds);
    
    array.forEach(function(element){
        element.style.display = 'none';
    })

    array[Co].style.display = "block";
    Co++;
    updateTime();
    getid();
 
  }
  updateTime();
  







