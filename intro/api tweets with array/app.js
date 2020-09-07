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
  console.log(connection)
  if(connection.status != 200){
    alert('Something is wrong in the system')
  }

  let sTweet = await connection.text()
  let jTweet = JSON.parse(sTweet) // PHP json_decode
  var divTweet = `
  <div class="tweet" id="${jTweet.id}">
    <p>${jTweet.title}</p>
    <p>${jTweet.body}</p>
    <button>delete</button>
  </div>`  
  document.querySelector("#tweets").insertAdjacentHTML('afterbegin', divTweet)
}, 1000)





