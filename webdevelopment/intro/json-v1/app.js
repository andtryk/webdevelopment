
function showPage(pageId){
  console.log('showing page...', pageId)
  // <div id="home" class="subpage">page home</div>
  document.querySelectorAll('.subpage').forEach( item => {
    item.style.display = "none"
  })
  document.getElementById(pageId).style.display = "grid"
}


