function validate(){
  var form = event.target
  var aElements = form.querySelectorAll("[data-type]")
  for(var i = 0; i < aElements.length; i++){
    aElements[i].classList.remove("error")
    var sDataType = aElements[i].getAttribute("data-type")
    switch(sDataType){
      case "string":
        isStringValid(aElements[i])
      break
      case "email":
        isEmailValid(aElements[i])
      break
    }
  }
}

function isStringValid(oElement){
  var iMin = oElement.getAttribute("data-min")
  var iMax = oElement.getAttribute("data-max")
  if(oElement.value.length < iMin){
    oElement.classList.add("error")
  }
  if(oElement.value.length > iMax){
    oElement.classList.add("error")
  }  
}

function isEmailValid(oElement){
  const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if(!re.test(String(oElement.value).toLowerCase())){
    oElement.classList.add("error")
  }
}

