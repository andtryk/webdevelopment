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

/* async function getTweet() {
	// console.log('x')
	var inputId = document.querySelector("#inputId").value;
	// console.log(inputId)
	// Validate tweet id
	if (inputId.length != 13) {
		document.querySelector("#tweets").innerHTML = "";
		return;
	}
	// Clear #tweets div
	document.querySelector("#tweets").innerHTML = "";

	let bridge = await fetch(`/api/api-get-tweet.php?id=${inputId}`);
	let sResponse = await bridge.text();
	// Convert text to JSON
	let jResponse = JSON.parse(sResponse);

	if (bridge.status != 200) {
		console.log("error");
		return;
	}

	var divTweet = `
	<div class="tweet" data-id="${jResponse.id}">
		<strong>${jResponse.title}</strong>
		<p>${jResponse.message}</p>
	</div>
	`;
	document.querySelector("#tweets").innerHTML = divTweet;
} */
