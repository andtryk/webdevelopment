(async function loadTweet(){
	var latestReceivedTweetId = 0
	let connection = await fetch(`api/api-get-latest-tweets.php?latestReceivedTweetId=${latestReceivedTweetId}`)
	console.log(connection)
	if(connection.status != 200){
	  alert('Something is wrong in the system')
	}
  
	let sTweets = await connection.text()
	let aTweets = JSON.parse(sTweets) // PHP json_decode
  
	for(var i = 0; i < aTweets.length; i++){
	  latestReceivedTweetId = aTweets[i].id
	  var divTweet = `
	  <div class="tweet" id="${aTweets[i].id}"> 
	  <form class="tweet-form" id="updateTweet">
	  <div class="tweet-content">
	  <input class="tweet-id" type="hidden" name="tweetId" placeholder="tweet ID" value="${aTweets[i].id}">
	  <input class="tweet-title" type="text" name="newTitle" placeholder="tweet title" value="${aTweets[i].title}">
	  <input class="tweet-message" type="text" name="newMessage" placeholder="tweet message" value="${aTweets[i].message}">
	  <div class="tweet-buttons"> 
	  <button onclick="deleteTweet(event); return false">delete</button>
	  <button onclick="updateTweet(event); return false">update</button>
	  </div>
	  </div>
	  </form>
	  </div>
	  `     
	  document.querySelector("#tweets").insertAdjacentHTML('afterbegin', divTweet)
	}
	console.log('latestReceivedTweetId', latestReceivedTweetId)
  })();

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
		console.log("error");
	}
	var tweetTitle = document.querySelector("#tweet-title").value;
	var tweetMessage = document.querySelector("#tweet-message").value;
	var divTweet = `
		  <div class="tweet" id="${jResponse.id}"> 
		  <form class="tweet-form" id="updateTweet">
		  <div class="tweet-content">
		  <input class="tweet-id" type="hidden" name="tweetId" placeholder="tweet ID" value="${jResponse.id}">
		  <input class="tweet-title" type="text" name="newTitle" placeholder="tweet title" value="${tweetTitle}">
		  <input class="tweet-message" type="text" name="newMessage" placeholder="tweet message" value="${tweetMessage}">
		  <div class="tweet-buttons">
		  <button onclick="deleteTweet(event); return false">delete</button>
		  <button onclick="updateTweet(event); return false">update</button>
		  </div> 
		  </div>
		  </form>
		  </div>
		  `     
		  document.querySelector("#tweets").insertAdjacentHTML('afterbegin', divTweet)
		  document.querySelector("#formTweet").reset();
		}

async function updateTweet(event) {
	event.preventDefault();
	var data = new FormData(document.querySelector(".updateTweet"));

	let bridge = await fetch("api/api-update-tweet.php", {
		method: "POST",
		body: data,
	});
	let sResponse = await bridge.text();
	let jResponse = JSON.parse(sResponse);

	if (bridge.status != 200) {
		console.log("error");
	}

	console.log(jResponse);
}

async function deleteTweet(event) {
	event.preventDefault();
	event.target.parentNode.remove();
	var data = new FormData(document.querySelector("#updateTweet"));

	let bridge = await fetch("api/api-delete-tweet.php", {
		method: "POST",
		body: data,
	});
	

	if (bridge.status != 200) {
		console.log("error");
	}
	
}
