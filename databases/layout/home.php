<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/home.css">
  <title>Produced by Tryk Webbureau</title>
</head>
<body>
<?php session_start();?>
  <div id="s1">
    <div id="s11">
      <a href="/" onclick="return false" class="active">
        <i class="fab fa-twitter fa-fw"></i>
        Home
      </a>
      <a href="explore" onclick="return false">          
        <i class="fas fa-hashtag fa-fw"></i>
        Explore          
      </a>
      <a href="notifications" onclick="return false">            
        <i class="far fa-bell fa-fw"></i>
        Notifications          
      </a>
      <a href="messages" onclick="return false">      
        <i class="far fa-envelope-open fa-fw"></i>
        Messages          
      </a>
      <a href="bookmarks" onclick="return false">      
        <i class="far fa-bookmark fa-fw"></i>
        Bookmarks          
      </a>
      <a href="lists" onclick="return false">      
        <i class="far fa-list-alt fa-fw"></i>
        Lists           
      </a>
      <a href="profile" onclick="return false">      
        <i class="far fa-user fa-fw"></i>
        Profile             
      </a>
      <a href="more" onclick="return false">      
        <i class="fas fa-ellipsis-h fa-fw"></i>
        More           
      </a>
      <button onclick="showModalTweet()">Tweet</button>
      <a href="api/api-logout.php"><button>Logout</button></a>
    </div>
    
    
    <div id="s12">
    <img src="<?php echo $_SESSION['profile_picture']; ?>" alt="Profile picture"/>
      <div>
        <div>
        <?php
        echo $_SESSION['name'].' '.$_SESSION['lastname'];
        ?>
        </div>
        <div id="s121">
        <?php
        echo '@'.$_SESSION['username'];
        ?>
        </div>
      </div>
      <i class="fas fa-sort-down"></i>
    </div>
  </div>



  <div id="s2">
    <div id="s21">
      Home
    </div> 

    <div id="s22">
      <div id="s221">
        <img src="<?php echo $_SESSION['profile_picture']; ?>" alt="Profile picture"/>
      </div>
      <div id="s222">
        <textarea placeholder="What is happening?"></textarea>
        <div id="s2221">
          <div id="s22211">
            <i class="far fa-image"></i>
            <i class="far fa-chart-bar"></i>
            <i class="far fa-smile-beam"></i>
            <i class="far fa-clock"></i>
          </div>
          <div id="s22212">
            <button onclick="showModalTweet()">Tweet</button>
          </div>
        </div>
      </div>      
    </div>

    <div class="s23">
      <div class="s231">
        <img src="https://pbs.twimg.com/profile_images/1287132544333357057/5D1E3q7o_200x200.jpg" alt="">
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


    <div class="s23">
      <div class="s231">
        <img src="https://pbs.twimg.com/profile_images/1215186980646113280/hnpbyjrK_200x200.jpg" alt="">
      </div>
      <div class="s232">
        <div class="s2321">
          The @nytimes has now joined the @w3c.
        </div>
        <div class="s2322">
          Everyone interested in web development should look at this library. It does
          single page applications and server side rendering
          <img src="https://pbs.twimg.com/card_img/1309627760470568965/TrrUGvZT?format=jpg&name=small" alt="">
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


    <div class="s23">
      <div class="s231">
        <img src="https://pbs.twimg.com/profile_images/1163536220686864384/SP6Xu8tl_200x200.jpg" alt="">
      </div>
      <div class="s232">
        <div class="s2321">
          This is an awesome library
        </div>
        <div class="s2322">
          We want a welcoming community around @sveltejs 

          We don't want:

          - Framework "wars"
          - to "kill" React
          - any other pointless violent metaphors

          Spread love, make cool things, be nice to fellow humans Heart suit
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


     <div class="s23">
      <div class="s231">
        <img src="https://pbs.twimg.com/profile_images/874276197357596672/kUuht00m_200x200.jpg" alt="">
      </div>
      <div class="s232">
        <div class="s2321">
          45th President of the United States of America
        </div>
        <div class="s2322">
          Many more people would have died from the China Virus if Sleepy Joe were your President. 
          He didn’t even want me to close our Country to Infected China until TWO MONTHS  later, 
          when he said I was right. Now he likes to say I didn’t close up “fast enough”. Just another politician!
          <img src="https://pbs.twimg.com/card_img/1308712395997577217/k9A6uXuz?format=jpg&name=small" alt="">
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



  </div>



  <div id="s3">
    
    <form id="s31" onsubmit="return false">
      <i class="fas fa-search"></i>
      <input type="text" placeholder="Search Twitter">
    </form>

    <div id="s32">

      <div id="s321">
        Trends for you
      </div>

      <div class="s322">
        <div class="s3221">
          <div class="s32211">
            #BarcelonaGame
          </div>
          <div class="s32212">
            <div>
              3.596 tweets            
            </div>
            <i class="far fa-thumbs-down"></i>
          </div>          
        </div>
      </div>    

      <div class="s322">
        <div class="s3221">
          <div class="s32211">
            #Covid19
          </div>
          <div class="s32212">
            <div>
              10.568 tweets            
            </div>
            <i class="far fa-thumbs-down"></i>    
          </div>          
        </div>
      </div>  

      <div class="s322">
        <div class="s3221">
          <div class="s32211">
            #CrazyRain
          </div>
          <div class="s32212">
            <div>
              1.244 tweets            
            </div>
            <i class="far fa-thumbs-down"></i>    
          </div>          
        </div>
      </div>  
    </div>

    <div id="s33">
      
      <div id="s331">
        Who to follow
      </div>

      <div class="s332">
        <img class="s3321" src="https://pbs.twimg.com/profile_images/822547732376207360/5g0FC8XX_200x200.jpg" alt="">
        <div class="s3322">
          <div class="s33221">
            Barack Obama
          </div>
          <div>
            @BarackObama
          </div>
        </div>
        <button class="s3323">
          Follow
        </button>
      </div>
      <div class="s332">
        <img class="s3321" src="https://pbs.twimg.com/profile_images/1308769664240160770/AfgzWVE7_200x200.jpg" alt="">
        <div class="s3322">
          <div class="s33221">
            Joe Biden
          </div>
          <div>
            @JoeBiden
          </div>
        </div>
        <button class="s3323">
          Follow
        </button>
      </div>
      <div class="s332">
        <img class="s3321" src="https://pbs.twimg.com/profile_images/651848780787122176/oTVWqZMO_200x200.jpg" alt="">
        <div class="s3322">
          <div class="s33221">
            Lukas Graham
          </div>
          <div>
            @LukasGraham
          </div>
        </div>
        <button class="s3323">
          Follow
        </button>
      </div>

    </div>

  </div>




  <div id="s4" onclick="hideModalTweet()">
    <div id="s41">
      <div id="s411" onclick="hideModalTweet()">
        X
      </div>
      <div id="s412">
        <img id="s4121" src="<?php echo $_SESSION['profile_picture']; ?>" alt="">
        <div id="s4122">
          <textarea placeholder="What is happening ?"></textarea>
          <div id="s41221">
            <div id="s412211">
              <i class="far fa-image"></i>
              <i class="far fa-chart-bar"></i>
              <i class="far fa-smile-beam"></i>
              <i class="far fa-clock"></i> 
            </div>
            <button id="s412212">Tweet</button>
          </div>
        </div>        
      </div>     
    </div>
  </div>






  <script src="js/app.js"></script> 
  <script src="js/validator.js"></script>
  <script src="https://kit.fontawesome.com/df600bcacf.js" crossorigin="anonymous"></script>

</body>
</html>