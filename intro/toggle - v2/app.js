async function toggleActive(){
  var btn = event.target
  var divUser = btn.parentNode
  var userId = divUser.id
  var btnId = event.target.id
  console.log('We clicked on :', btnId)
  var form = new FormData()
  form.append('id', userId)
  var request = await fetch('api-toggle-active.php',
    {"method":"POST","body":form})
  
}