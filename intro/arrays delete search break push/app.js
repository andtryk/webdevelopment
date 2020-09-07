// Math.ceil( Math.random()*10000000 )

var aUsers = [] 

function saveUser(){
  var id = Math.ceil( Math.random()*10000000 )
  var name = document.querySelector("#userName").value
  var jUser = {"id":id, "name":name}
  aUsers.push(jUser)
  console.log(aUsers)
}

function deleteUser(){
  var sUserId = document.getElementById('userIdToMatch').value
  // console.log(sUserId)
  for(var i = 0; i < aUsers.length; i++){
    // console.log("i", i)
    if( sUserId == aUsers[i].id ){
      console.log("match")
      aUsers.splice(i, 1)
      break
    }
  }
  console.log(aUsers)
}