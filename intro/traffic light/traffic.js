function turnGreenOn(){
  document.querySelector("#green").style.backgroundColor = "green"
  document.querySelector("#yellow").style.backgroundColor = "white" 
  document.querySelector("#red").style.backgroundColor = "white"
  setTimeout(turnGreenAndYellowOn, 2000)
}

function turnGreenAndYellowOn(){
  document.querySelector("#green").style.backgroundColor = "green"
  document.querySelector("#yellow").style.backgroundColor = "yellow"
  setTimeout(turnRedOn, 1000)
}

function turnRedOn(){
  document.querySelector("#green").style.backgroundColor = "white"
  document.querySelector("#yellow").style.backgroundColor = "white"  
  document.querySelector("#red").style.backgroundColor = "red"
  setTimeout(turnYellowAndRedOn, 1000)
}

function turnYellowAndRedOn(){
  document.querySelector("#yellow").style.backgroundColor = "yellow"  
  setTimeout(turnGreenOn, 1000)
}






turnGreenOn()


