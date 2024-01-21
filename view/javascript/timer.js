let question = document.querySelectorAll(".question");
let answer = document.querySelectorAll('.answer');

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






let array1 = [].slice.call(answer);
array1.forEach(function(elem){
    elem.style.display = 'none';
})
let array = [].slice.call(question);
let counter = 0;
let count = 0 ;
for (i = 0; i < 4; i++) {
    array1[count].style.display = 'block';
}


array.forEach(function(element){
    element.style.display = 'none';
    
    
})

array[counter].style.display = 'block';

function getid() { 
    array.forEach(function (param) {
        if(param.style.display == 'block') {
            let id = param.getAttribute("data-id");
            console.log(id);
            if (choices.includes(id)) {
                
            }
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
    DisplayAnswers();
    console.log(array1[Co])
    console.log("the Co is "+Co);
    Co++;
    updateTime();
    getid();
    


  }
  function DisplayAnswers() {
    clearInterval(seconds);
    array1.forEach(function(elem) {
        elem.style.display = 'none';
    });

    let startIndex = Co * 4;
    for (let i = startIndex; i < startIndex + 4; i++) {
        if (array1[i]) {
            array1[i].style.display = 'block';
        }
    }
}




  updateTime();
  







