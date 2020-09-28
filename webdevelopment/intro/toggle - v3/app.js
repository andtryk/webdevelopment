async function toggleActive(){
  var btn = event.target
  var divUser = btn.parentNode
  var userId = divUser.id
  var btnCaption = event.target.textContent
  console.log(btnCaption)

  event.target.textContent = btnCaption == 'activate user' ?  'deactivate user' : 'activate user'
  /*
  if( btnCaption == 'activate user' ){
    event.target.textContent = 'deactivate user'
  }else{
    event.target.textContent = 'activate user'
  }
  */

  var form = new FormData()
  form.append('id', userId)
  var request = await fetch('api-toggle-active.php',
    {"method":"POST","body":form})
  
}