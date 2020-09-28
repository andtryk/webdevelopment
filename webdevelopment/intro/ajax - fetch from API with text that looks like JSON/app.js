// promises
// async await
// async function getName(){
//   var connection = await fetch('api-get-name.php')
//   var tweet = await connection.text()
//   document.querySelector("#userName").innerText = tweet
// }

// setInterval(async function(){
//   var connection = await fetch('api-get-name.php')
//   var tweet = await connection.text();
//   document.querySelector("#userName").insertAdjacentText('beforeend', tweet)
// }, 1000)

setInterval(async function(){
  let connection = await fetch('api-get-latest-tweets.php')
  let sTweet = await connection.text()
  let jTweet = JSON.parse(sTweet) // PHP json_decode
  console.log(jTweet.id, jTweet.title)
}, 1000)





