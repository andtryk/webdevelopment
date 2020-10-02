function login(){
  var form = event.target
  if(form.querySelector(".error")){ return }
  var button = form.querySelector("button")
  button.disabled = true
  button.innerText = button.getAttribute("data-wait")
  // Connect to the API to login
}

function showModalTweet(){
  document.querySelector("#s4").style.display = "grid"
  document.querySelector("body").style.position = "fixed"
}
function hideModalTweet(){
  if(event.target.id == "s4" || event.target.id == "s411"){
    document.querySelector("#s4").style.display = "none"
    document.querySelector("body").style.position = "relative"
    document.querySelector("body").style.overflowY = "scroll"
  }
}

async function signup(){
  // AJAX only if there are no errors
  var form = event.target
  if( form.querySelector(".error") ){
    console.log('Cannot not continue')
    return
  }
  var connection = await fetch("api/api-signup.php", {
    method : "POST",
    body : new FormData(form)
  })
  if( connection.status != 200 ){
    alert('contact system admin')
    return
  }
  location.href="home.php"

}

async function tweet(event) {
	event.preventDefault();
	var data = new FormData(document.querySelector("#formTweet"));

	let bridge = await fetch("api/api-create-tweet.php", {
		method: "POST",
		body: data,
	});
	let sResponse = await bridge.text();
	let jResponse = JSON.parse(sResponse);

	if (bridge.status != 200) {
		alert('contact system admin')
    return
	}

  var sessionProfilePicture = "<?php echo $_SESSION['profile_picture']; ?>"
	var tweetMessage = document.querySelector("#tweet-message").value;
  var divTweet = `
		  <div class="tweet" id="${jResponse.id}"> 
		  <form class="tweet-form" id="updateTweet">
		  <div class="tweet-content">
		  <input class="tweet-id" type="hidden" name="tweetId" placeholder="tweet ID" value="${jResponse.id}">
		  <input class="tweet-message" type="text" name="newMessage" placeholder="tweet message" value="${tweetMessage}">
		  <div class="tweet-buttons">
		  <button onclick="deleteTweet(event); return false">delete</button>
		  <button onclick="updateTweet(event); return false">update</button>
		  </div> 
		  </div>
		  </form>
      </div>
      <div class="s231">
        <img src="" alt="">
      </div>
      <div class="s232">
        <div class="s2321">
          This is an awesome library
        </div>
        <div class="s2322">
          Everyone interested in web development should look at this library. It does
          single page applications and server side rendering          
        </div>
        <div class="s2323">
          <div>
            <i class="far fa-comment-alt fa-fw"></i>
            21
          </div>
          <div>
            <i class="far fa-thumbs-up fa-fw"></i>
            1.5K
          </div>
          <div>
            <i class="far fa-thumbs-down fa-fw"></i>
            54
          </div>
          <div>
            <i class="far fa-heart fa-fw"></i>
            63
          </div>
          <div>
            <i class="fas fa-retweet fa-fw"></i>  
            1.8k        
          </div>                                        
        </div>                
      </div>
    </div>
		  `     
		  document.querySelector(".s23").insertAdjacentHTML('afterbegin', divTweet)
		  document.querySelector("#formTweet").reset();
		}
