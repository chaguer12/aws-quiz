// const { get } = require("http");

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
const displayQ = document.querySelector("#displayQ");
let question = document.querySelectorAll(".question");

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
    
    array.forEach(function(element){
        element.style.display = 'none';
    })

    array[Co].style.display = "block";
    Co++;
    
    getid();
 
  }

  







