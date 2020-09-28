var aTweets = []

function tweet(){
  console.log(tweetMessage)
  // var divTweet = `
  //   <div class="tweet">
  //     `+tweetMessage+`
  //   </div>`
  // var divTweet = `
  //   <div class="tweet">
  //     #tweetMessage#   
  //   </div>`
  var tweetMessage = document.querySelector("#tweetMessage").value
  aTweets.push(tweetMessage)
  var tweetId = Math.ceil( Math.random()*100 )
  var divTweet = `
    <div class="tweet" data-id="${tweetId}">
      ${tweetMessage} 
      <button onclick="deleteTweet()">delete</button> 
    </div>`      
  // divTweet = divTweet.replace('#tweetMessage#', tweetMessage)
  // document.querySelector("#tweets").innerHTML += divTweet
  document.querySelector("#tweets").insertAdjacentHTML('afterbegin', divTweet)
}


function deleteTweet(){
  var btn = event.target // This is the button the user clicked on
  // btn.remove()
  // select the parent element
  btn.parentNode.remove()
}