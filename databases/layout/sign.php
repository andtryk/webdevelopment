<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/sign.css">
  <title>Twitter Produced by Tryk Webbureau</title>
</head>
<body>

  <div id="sign">
    <div id="s_1_2">
      <div id="s_1">
        <i class="fas fa-cat"></i>
        <!-- <svg viewBox="0 0 576 512"><path fill="currentColor" d="M575.81 217.98C572.64 157.41 518.28 112 457.63 112h-9.37c-52.82 0-104.25-16.25-147.74-46.24-41.99-28.96-96.04-41.62-153.21-28.7C129.3 41.12-.08 78.24 0 224c.04 70.95 38.68 132.8 95.99 166.01V464c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-54.26c15.36 3.96 31.4 6.26 48 6.26 5.44 0 10.68-.73 16-1.18V464c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-59.43c14.24-5.06 27.88-11.39 40.34-19.51C342.07 355.25 393.86 336 448.46 336c25.48 0 16.01-.31 23.05-.78l74.41 136.44c2.86 5.23 8.3 8.34 14.05 8.34 1.31 0 2.64-.16 3.95-.5 7.09-1.8 12.05-8.19 12.05-15.5 0 0 .14-240.24-.16-246.02zM463.97 248c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24zm80 153.25l-39.86-73.08c15.12-5.83 28.73-14.6 39.86-25.98v99.06z"></path></svg> -->        
        <div id="s_1_1">
          <div>
            <i class="fas fa-search fa-fw"></i>
            Follow your interests         
          </div>
          <div>
            <i class="fas fa-user-friends fa-fw"></i>
            Hear what people are talking about
          </div>
          <div>
            <i class="far fa-comments fa-fw"></i>
            Join the conversation
          </div>
        </div>
      </div>

      <div id="s_2">
        <div class="weight_700">
          Login
        </div>
        <form id="s_2_1" class="mt_1" onsubmit="validate(); login(); return false">
          <input type="text" placeholder="email" value="abc"
            data-type="email" data-min="2" data-max="5"
          >
          <input type="password" placeholder="password" value="abcdfrgty"
            data-type="string" data-min="6" data-max="100"
          >
          <button data-wait="wait ...">login</button>
        </form>

        <div class="weight_700 mt_2">
          Signup
        </div> 
        <form class="mt_1" enctype="multipart/form-data" onsubmit="validate(); signup(); return false;">
          <input name="name" type="text" placeholder="name" value=""
            data-type="string" data-min="2" data-max="20"      
          >
          <input name="lastname" type="text" placeholder="lastname" value=""
            data-type="string" data-min="2" data-max="20"      
          >                  
          <input name="username" type="text" placeholder="username" value=""
            data-type="string" data-min="2" data-max="20"      
          >
          <input name="email" type="text" placeholder="email" value=""
            data-type="email"
          >
          <input name="password" type="password" placeholder="password" value=""
            data-type="string" data-min="2" data-max="20"
          >
          <input name="confirmPassword" type="password" placeholder="confirm password" value=""
            data-type="string" data-min="2" data-max="20"
          >
          <p>Upload profile picture</p>
          <input type="file" name="profile_picture">
          <button>signup</button>
        </form>               
      </div>
    </div>
    <div id="s_3">
      <div>About</div>
      <div>Help Center</div>
      <div>Terms</div>
      <div>Privacy policy</div>
      <div>Cookies</div>
      <div>Ads info</div>
      <div>Blog</div>
      <div>Status</div>
      <div>Jobs</div>
      <div>Brand</div>
      <div>Advertise</div>
      <div>Marketing</div>
      <div>© 2020 Tryk Webbureau</div>
    </div>  
  </div>


  <script src="js/app.js"></script>
  <script src="js/validator.js"></script>
  <script src="https://kit.fontawesome.com/df600bcacf.js" crossorigin="anonymous"></script>

</body>
</html>