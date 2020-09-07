
// delete
// splice
var aPeople = [
  {"id":"ID111", "name":"A"},
  {"id":"ID222", "name":"B"},
  {"id":"ID333", "name":"C"}
]

for( var i = 0; i < aPeople.length; i++ ){
  var divPerson = `
  <div class="person">      
    <div>${aPeople[i].name}</div>
    <button data-userId="${aPeople[i].id}" 
            id="btnDelete" 
            onclick="deleteUser()"
    >
            DELETE
    </button>
  </div>`
  one("#people").insertAdjacentHTML('afterbegin', divPerson)

}

function deleteUser(){
  var btn = event.target
  var userId = btn.getAttribute('data-userId')
  // Remove person from UI
  var divPerson = btn.parentNode
  divPerson.remove()
  // Delete person from the array
  for(var i = 0; i < aPeople.length; i++){
    if( userId == aPeople[i].id ){
      aPeople.splice(i, 1)
      break
    }
  }
  console.log(aPeople)
}


function one(searchFor){
  return document.querySelector(searchFor)
}




