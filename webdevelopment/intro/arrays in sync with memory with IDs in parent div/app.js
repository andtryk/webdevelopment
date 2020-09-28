
// delete
// splice
var aPeople = [
  {"id":"ID111", "name":"A"},
  {"id":"ID222", "name":"B"},
  {"id":"ID333", "name":"C"}
]

for( var i = 0; i < aPeople.length; i++ ){
  var divPerson = `
  <div class="person" id="${aPeople[i].id}">      
    <div>${aPeople[i].name}</div>
    <button id="btnDelete" 
            onclick="deleteUser('${aPeople[i].id}')"
    >
            DELETE
    </button>
  </div>`
  one("#people").insertAdjacentHTML('afterbegin', divPerson)

}

function deleteUser(userId){
  //   ID333
  // document.querySelector('#'+userId)
  // document.querySelector(`#${userId}`)
  one(`#${userId}`).remove()


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




