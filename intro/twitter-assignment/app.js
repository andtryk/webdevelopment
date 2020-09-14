async function tweet() {
	// TODO: validate input fields
	// Pretend that all the data is valid

	// Get the data from the form
	// it will make it ready to be passed via AJAX
	var data = new FormData(document.querySelector("#formTweet"));
	// console.log(data.get('tweetTitle'))

	let bridge = await fetch("api/api-create-tweet.php", {
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

/* async function updateTweet() {
	// TODO: validate input fields
	// Pretend that all the data is valid

	// Get the data from the form
	// it will make it ready to be passed via AJAX
	var data = new FormData(document.querySelector("#formTweet"));
	// console.log(data.get('tweetTitle'))

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
} */

var latestReceivedTweetId = 0 // 47

setTimeout(async function(){
  // let connection = await fetch('api-get-latest-tweets.php?latestReceivedTweetId='+latestReceivedTweetId)
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
      <div class="tweet-content">
      <b><p>${aTweets[i].title}</p></b>
      <p>${aTweets[i].message}</p>
      </div>
      <div class="tweet-buttons">
      <a href='api/api-delete-tweet.php?tweetId=${aTweets[i].id}'>
      <button>delete</button>
      </a>
      <a href='api/api-bridge-update-tweet.php?tweetId=${aTweets[i].id}'>
      <button>update</button>
      </a>
      </div>
    </div>`     
    document.querySelector("#tweets").insertAdjacentHTML('afterbegin', divTweet)
  }
  console.log('latestReceivedTweetId', latestReceivedTweetId)


}, 1000)