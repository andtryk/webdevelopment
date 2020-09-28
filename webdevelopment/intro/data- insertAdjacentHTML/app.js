// Math.ceil( Math.random()*10000000 )

var aUsers = [] 
var sUserIdToDelete = ""
var sNameToType = ""

function saveUser(){
  var id = Math.ceil( Math.random()*10000000 )
  var name = document.querySelector("#userName").value
  var jUser = {"id":id, "name":name}
  aUsers.push(jUser)
  console.log(aUsers)
}

function deleteUser(){
  document.querySelector("#boxOne").style.display = "none"
  document.querySelector("#boxTwo").style.display = "none"

  var sUserId = document.getElementById('userIdToMatch').value
  // console.log(sUserId)
  for(var i = 0; i < aUsers.length; i++){
    // console.log("i", i)
    if( sUserId == aUsers[i].id ){
      document.querySelector("#boxOne").style.display = "grid"
      document.querySelector("#boxOne #boxOneName").innerText = aUsers[i].name
      sUserIdToDelete = aUsers[i].id
      sNameToType = aUsers[i].name // Santiago
      break
    }else{
      document.querySelector('#boxTwo').style.display = "grid"
    }
  }
  console.log(aUsers)
}


function confirmDelete(){
  if( document.querySelector("#boxOneUserName").value == sNameToType  ){
    console.log('go ahead, delete it')
    for(var i = 0; i < aUsers.length; i++){
      if( aUsers[i].id == sUserIdToDelete){
        aUsers.splice(i, 1)
        break
      }
    }
  }
  console.log(aUsers)
}