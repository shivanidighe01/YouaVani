<?php
 include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet"  type="text/css" href="homepage.css" />

   <link rel="stylesheet" href="https://fonts.google.com/specimen/Montserrat?query=montserrat">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 
  

  <script defer src="https://use.fontawesome.com/releases/v6.1.1/js/all.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin = "anonymous"></script>
  <script defer src="/your-path-to-fontawesome/js/v4-shims.js"></script>

<!-- post -->
  <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"
   rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
   
    
</head>
<body>
   <style>
    body{
  background-color: gray;
   
   padding: 0.5px;
   margin: 0.5px;
   /* height: 100%; */
   
   width: 100%;
   font-family: Arial, Helvetica, sans-serif;
/* hide scrollbar of middle section */
   overflow: auto; 
}

body::-webkit-scrollbar{
   display: none;
 }


/* logo */
.logo
{
   margin: 1px; 
   display: block;
   position: absolute;
   left: 45px;
   top: 85px;
   width: 100px;
   color:cyan;
}
.logo,.b {
   font-size: 22px;
   color:white;
 }
.leftside
{
   color: white;
   position: absolute;
   display: block;
   width: 300px;
   height: 100%;
   background-color:rgb(36, 35, 35) ;
   margin: 0.5px;
  
}
hr{
   color: #6a6f75;
   height: 0.5px;
}
.upleft
{
   height: 200px;
   margin: 1px;
}
.downleft
{
   margin:1px;
   height: 60%;
}
.middle
{
   color: white;
   position:absolute;
   display: block;
   width: 680px;
   height: 100%;
   left: 301.5px;
   background-color:rgb(36, 35, 35) ;
   margin: 0.5px;
  
  
   overflow-x: hidden;
   overflow-y: auto;
   text-align: center;
   padding: 20px;
}
/* hide the scrollbar */
.middle::-webkit-scrollbar{
   display: none;
 }

.rightside
{
   color: white;
   position: absolute;
   display: block;
   width: 320px;
   height: 100%;
    left: 982.5px;
   background-color:rgb(36, 35, 35) ;
   font-size: 1.2em;
}
/* tabs */
.home
{
   padding: 2px;
   margin: 2px;

   position: absolute;
   left: 150px;
   margin-left: auto;
   margin-right: auto;
   top: 90px;
   width: 60px;
   /* height: 40px; */
   padding-top: 0px;
   padding-bottom: 0px; 
}

.notification
{
   padding: 2px;
   margin: 2px;

   position: absolute;
   left: 150px;
   margin-left: auto;
   margin-right: auto;
   top: 150px;
   width: 120px;
   /* height: 40px; */
   padding-top: 0px;
   padding-bottom: 0px; 

}
.messages
{
   padding: 2px;
   margin: 2px;

   position: absolute;
   left: 150px;
   margin-left: auto;
   margin-right: auto;
   top: 210px;
   width: 100px;
   /* height: 40px; */
   padding-top: 0px;
   padding-bottom: 0px;
}
.bookmark
{
   padding: 2px;
   margin: 2px;

   position: absolute;
   left: 150px;
   margin-left: auto;
   margin-right: auto;
   top: 270px;
   width: 120px;
   /* height: 40px; */
   padding-top: 0px;
   padding-bottom: 0px;
}
.profile
{
   padding: 2px;
   margin: 2px;

   position: absolute;
   left: 150px;
   margin-left: auto;
   margin-right: auto;
   top: 330px;
   width: 60px;
   /* height: 40px; */
   padding-top: 0px;
   padding-bottom: 0px; 
}
.more
{
   padding: 2px;
   margin: 2px;

   position: absolute;
   left: 150px;
   margin-left: auto;
   margin-right: auto;
   top: 390px;
   width: 60px;
   /* height: 40px; */
   padding-top: 0px;
   padding-bottom: 0px;  
}
/* tabs hover */
.home:hover
{
   /* font-size: 1.2rem; */
   font-weight:bolder;
   -webkit-box-shadow:0 2px 0 rgba(244, 240, 240, 0.453),0 1px 0 rgba(160, 157, 157, 0.453) inset;
   box-shadow: 0 2px 0 rgba(244, 240, 240, 0.453),0 1px 0 rgba(160, 157, 157, 0.453) inset;
   text-shadow: 0 2px 3px rgba(244, 240, 240, 0.453);

}
.notification:hover
{
   font-weight:bolder;
   -webkit-box-shadow:0 2px 0 rgba(244, 240, 240, 0.453),0 1px 0 rgba(160, 157, 157, 0.453) inset;
   box-shadow: 0 2px 0 rgba(244, 240, 240, 0.453),0 1px 0 rgba(160, 157, 157, 0.453) inset;
   text-shadow: 0 2px 3px rgba(244, 240, 240, 0.453);
}
.messages:hover
{
   font-weight:bolder;
   -webkit-box-shadow:0 2px 0 rgba(244, 240, 240, 0.453),0 1px 0 rgba(160, 157, 157, 0.453) inset;
   box-shadow: 0 2px 0 rgba(244, 240, 240, 0.453),0 1px 0 rgba(160, 157, 157, 0.453) inset;
   text-shadow: 0 2px 3px rgba(244, 240, 240, 0.453);
}
.bookmark:hover
{
   font-weight:bolder;
   -webkit-box-shadow:0 2px 0 rgba(244, 240, 240, 0.453),0 1px 0 rgba(160, 157, 157, 0.453) inset;
   box-shadow: 0 2px 0 rgba(244, 240, 240, 0.453),0 1px 0 rgba(160, 157, 157, 0.453) inset;
   text-shadow: 0 2px 3px rgba(244, 240, 240, 0.453);
}
.profile:hover
{
   font-weight:bolder;
   -webkit-box-shadow:0 2px 0 rgba(244, 240, 240, 0.453),0 1px 0 rgba(160, 157, 157, 0.453) inset;
   box-shadow: 0 2px 0 rgba(244, 240, 240, 0.453),0 1px 0 rgba(160, 157, 157, 0.453) inset;
   text-shadow: 0 2px 3px rgba(244, 240, 240, 0.453);
}
.more:hover
{
   font-weight:bolder;
   -webkit-box-shadow:0 2px 0 rgba(244, 240, 240, 0.453),0 1px 0 rgba(160, 157, 157, 0.453) inset;
   box-shadow: 0 2px 0 rgba(244, 240, 240, 0.453),0 1px 0 rgba(160, 157, 157, 0.453) inset;
   text-shadow: 0 2px 3px rgba(244, 240, 240, 0.453);
}
/* search bar */
.search
{
   position: absolute;
   left: 142px;
   top: 80px;
  width: 90px;
   margin-right: 10px;
   margin: 3px;
   padding: 3px;

}
.search input[type="text"]
{
  background:url(images/search.PNG) no-repeat 0px 0px hwb(240 16% 84%) ;
  outline: none;
  border: 0 none;
  font: bold 12px Arial,Helvetica,Sans-serif;
  width: 150px;
  padding: 6px 15px 6px 35px;
  margin: 0px;
  text-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow:0 1px 0 rgba(255,255,255,0.1),0 1px 3px rgba(0,0,0,0.2) inset;
  -moz-box-shadow:0 1px 0 rgba(255,255,255,0.1),0 1px 3px rgba(0,0,0,0.2) inset;
   box-shadow: 0 1px 0 rgba(255,255,255,0.1),0 1px 3px rgba(0,0,0,0.2) inset;
   -webkit-transition: all 0.7s ease 0s;
  -moz-transition: all 0.7s ease 0s;
  -o-transition:all 0.7s ease 0s ;
  transition: all 0.7s ease 0s;
}
.search input[type="text"]:hover
{
   background: url(images/search3.PNG) no-repeat 0px 0px #fcfcfc;
   color: #6a6f75;
   width: 150px;
   -webkit-box-shadow:0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.9) inset;
   -moz-box-shadow:0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.9) inset;
   box-shadow: 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(0,0,0,0.9) inset;
   text-shadow: 0 2px 3px rgba(0,0,0,0.1);
}

/* post button */
.postbtn
{
   color: white;
   /* background-color: paleturquoise; */
   position: absolute;
   size: 100px;
   left: 150px;
   top: 450px;
   margin: 2px;
   padding: 2px;
}

.happen
{
   margin: 1px;
   padding: 1px;
   /* font-size: 1.5rem; */
   position: relative;
   left:70px;
   top: 20px;
   
   height: 70%;
   margin-right: 65px;
   width: 315px;
}

/* whats happening */
#event1
{
   margin: 1px;
   padding: 1px;
   position: absolute;
   left:10px;
   top:70px;
   font-weight: 0.5rem;
}
#event2
{
   margin: 1px;
   padding: 1px;
   position: absolute;
   left:10px;
   top:150px;
   font-weight: 0.5rem;
}

#event3
{
   margin: 1px;
   padding: 1px;
   position: absolute;
   left:10px;
   top:230px;
   font-weight: 0.5rem;
}
#file-input
{
   width: 200px;
   position: relative;
   right: 50px;
}








   </style>
    <div class="leftside">
   
<!-- upleft -->
   <div class="upleft">
     <div class="logo">
      <!-- logo -->
      <b class="logo_name">YuvaVani</b>
      <!-- <img src="#" alt="logo"> -->
     </div>
     <div class="search">
        <form action="#" method="POST" >
           <input type="text" name="search" size="25" placeholder="Search" ><p>
        </form>
     </div>
   </div>
   <hr>
<!-- downleft whats happening -->

   <div class="downleft">
<div class="happen">
   What's happening!!
   <div id="event1">
      <p>Ministry of Electronics & IT
         <br>
         <a href="https://www.meity.gov.in/"><i>@GoI_MeitY</i></a>
      </p>
      
      
   </div>
   <div id="event2">
      <p>DSTIndia<br>
         <a href="https://twitter.com/IndiaDST"><i>@IndiaDST</i></a>
      </p>
      
      
   </div>
   <div id="event3">
      <p>Edge computing
         <br>
         <a href="https://en.wikipedia.org/wiki/Edge_computing"><i>@EdgeComputing</i></a>
      </p>
      
      
   </div>

   
</div>
   </div>
</div>
   



   <div class="middle" id="mid_post">
    <style>
      /* post creation */

/* Import Google Font - Poppins  */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
*{
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 font-family: 'Poppins', sans-serif;
}
/* body{
 display: flex;
 align-items: center;
 justify-content: center;
 min-height: 100vh;
 background-color: rgb(54, 53, 53);
 color: white;
} */
::selection{
 color:rgb(36, 35, 35);
 background: rgb(36, 35, 35);
}
.container{
   display: block;
 width: 600px;
 height: 480px;
 overflow: hidden;
 background: rgb(41, 41, 41);
 border-radius: 10px;
 transition: height 0.2s ease;
 box-shadow: 0 12px 28px rgba(6, 6, 6, 0.12);
}

.container.active{
 height: 590px;
}
.container .wrapper{
 width: 1000px;
 display: flex;
}
.container .wrapper section{
 width: 500px;
 /* change background-color */
 background: rgb(41, 41, 41);  
}
.container img{
 cursor: pointer;
}
.container .post{
 transition: margin-left 0.18s ease;
}
.container.active .post{
 margin-left: -500px;
}

.post header{
 font-size: 22px;
 font-weight: 600;
 padding: 17px 0;
 text-align: center;
 border-bottom: 1px solid #bfbfbf;
}
.post form{
 margin: 20px 25px;
}
.post form .content,
.audience .list li .column{
 display: flex;
 align-items: center;
}
.post form .content img{
 cursor: default;
 max-width: 52px;
}
.post form .content .details{
 margin: -3px 0 0 12px;
}
form .content .details p{
 font-size: 17px;
 font-weight: 500;
}
.content .details .privacy{
 display: flex;
 height: 25px;
 cursor: pointer;
 padding: 0 10px;
 font-size: 11px;
 margin-top: 3px;
 border-radius: 5px;
 align-items: center;
 max-width: 98px;
 background: rgb(36, 35, 35);
 justify-content: space-between;
}
.details .privacy span{
 font-size: 13px;
 margin-top: 1px;
 font-weight: 500;
}
.details .privacy i:last-child{
 font-size: 13px;
 margin-left: 1px;
}
form :where(textarea, button){
 width: 100%;
 outline: none;
 border: none;
}
form textarea{
 resize: none;
 font-size: 18px;
 margin-top: 30px;
 min-height: 100px;
 width: 530px;
 color: white;
 background-color: rgb(36, 35, 35);
 border-radius: 5px;
 border: 1px solid gray;
}
form textarea::placeholder{
 color: #eee9e9;
padding: 10px;

}

form textarea::-webkit-scrollbar{
 display: none;
}
form textarea:focus::placeholder{
 color: #eee9e9;
 padding: 10px;
}
form :where(.theme-emoji, .options){
 display: flex;
 align-items: center;
 justify-content: space-between;
}
.theme-emoji img:last-child{
 max-width: 24px;
}
form .options{
 height: 57px;
 width: 530px;
 margin: 15px 0;
 padding: 0 15px;
 border-radius: 7px;
 /* border: 1px solid #B9B9B9; */
 box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}
form .options :where(.list, li),
.audience :where(.arrow-back, .icon, li .radio){
 display: flex;
 align-items: center;
 justify-content: center;
}
form .options p{
 color: #595959;
 font-size: 15px;
 font-weight: 500;
 cursor: default;
}
form .options .list{
 list-style: none;
}
.options .list li{
 height: 42px;
 width: 42px;
 margin: 0 -1px;
 cursor: pointer;
 border-radius: 50%;
}
.options .list li:hover{
 background: #f0f1f4;
}
.options .list li img{
 width: 23px;
}
form button{
 height: 53px;
 width: 530px;
 color: #595959;
 font-size: 18px;
 font-weight: 500;
 cursor: pointer;
 color: #BCC0C4;
 cursor: no-drop;
 border-radius: 7px;
 background: #595959;
 transition: all 0.3s ease;
}
form textarea:valid ~ button{
 color: #fff;
 cursor: pointer;
 background: #4267B2;
}
form textarea:valid ~ button:hover{
 background: #4267B2;
}
.container .audience{
 opacity: 0;
 transition: opacity 0.12s ease;
}
.container.active .audience{
 opacity: 1;
}
.audience header{
 padding: 17px 0;
 text-align: center;
 position: relative;
 border-bottom: 1px solid #bfbfbf;
}
.audience header .arrow-back{
 position: absolute;
 left: 25px;
 width: 35px;
 height: 35px;
 cursor: pointer;
 font-size: 15px;
 color: white;
 border-radius: 50%;
 background: #747474;
}
.audience header p{
 font-size: 22px;
 font-weight: 600;
}
.audience .content{
 margin: 20px 25px 0;
}
.audience .content p{
 font-size: 17px;
 font-weight: 500;
}
.audience .content span{
 font-size: 14px;
 color: #65676B;
}
.audience .list{
 margin: 15px 16px 20px;
 list-style: none;
}
.audience .list li{
 display: flex;
 cursor: pointer;
 margin-bottom: 5px;
 padding: 12px 10px;
 border-radius: 7px;
 align-items: center;
 justify-content: space-between;
}
.list li.active,
.audience .list li.active:hover{
 background:black;
}
.audience .list li:hover{
 background: black;
}
.audience .list li .column .icon{
 height: 50px;
 width: 50px;
 color: #333;
 font-size: 23px;
 border-radius: 50%;
 background: #E4E6EB;
}
.audience .list li.active .column .icon{
 background: #cce4ff;
}
.audience .list li .column .details{
 margin-left: 15px;
}
.list li .column .details p{
 font-weight: 500;
}
.list li .column .details span{
 font-size: 14px;
 color: #65676B;
}
.list li .radio{
 height: 20px;
 width: 20px;
 border-radius: 50%;
 position: relative;
 border: 1px solid #707070;
}
.list li.active .radio{
 border: 2px solid #707070;
}
.list li .radio::before{
 content: "";
 width: 12px;
 height: 12px;
 border-radius: inherit;
}
.list li.active .radio::before{
 background: #707070;
}




    </style>

      <!-- post creation -->
     

    <div class="container">
      <div class="wrapper">
        <section class="post">
          <header>Feed</header>
          <form action="viewAllpost.php" method="POST" enctype="multipart/form-data">
            <div class="content">
              
              <div class="details">
                <p>Create post</p>
                <div class="privacy">s
                  <i class="fas fa-user-friends"></i>
                  <span>Friends</span>
                  <i class="fas fa-caret-down"></i>
                </div>
              </div>
            </div>
         
            <textarea placeholder="What's on your mind ?" name="text" value="" spellcheck="false" required></textarea>
            
            <div class="options">
              <!-- <input  type="file" onclick="postToFacebook()" id="file-input"> -->
               <!-- upload image -->
               <div class="uploadimg">
                  <input type='file' name="image" value="" onchange="readURL(this);" />
                  <img id="blah" src=""  />
                   
            </div>
            <!-- <input type="button" name="submit" class="btn btn-primary" value="Post" required> -->
            <button name="submit" value="upload" class="btn btn-primary">
              Post
           </button>
          </form>
                  <style>
                    #blah
                    {
                      position: absolute;
                      left: 50%;
                      top: 40%;
                    }
                  </style>
               </div>
              
              
    <script>
       function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <!-- upload img -->
           
        </section>
        <section class="audience">
          <header>
            <div class="arrow-back"><i class="fas fa-arrow-left"></i></div>
            <p>Select Audience</p>
          </header>
          <div class="content">
            <p>Who can see your post?</p>
            <span>Your post will show up in News Feed, on your profile and in search results.</span>
          </div>
          <ul class="list">
            <li>
              <div class="column">
                <div class="icon"><i class="fas fa-globe-asia"></i></div>
                <div class="details">
                  <p>Public</p>
                  <span>Anyone on website</span>
                </div>
              </div>
              <div class="radio"></div>
            </li>
            <li class="active">
              <div class="column">
                <div class="icon"><i class="fas fa-user-friends"></i></div>
                <div class="details">
                  <p>Friends</p>
                  <span>Your friends on website</span>
                </div>
              </div>
              <div class="radio"></div>
            </li>
            <li>
              <div class="column">
                <div class="icon"><i class="fas fa-user"></i></div>
                <div class="details">
                  <p>Specific</p>
                  <span>Only show to some friends</span>
                </div>
              </div>
              <div class="radio"></div>
            </li>
            <li>
              <div class="column">
                <div class="icon"><i class="fas fa-lock"></i></div>
                <div class="details">
                  <p>Only me</p>
                  <span>Only you can see your post</span>
                </div>
              </div>
              <div class="radio"></div>
            </li>
            <li>
              <div class="column">
                <div class="icon"><i class="fas fa-cog"></i></div>
                <div class="details">
                  <p>Custom</p>
                  <span>Include and exclude friends</span>
                </div>
              </div>
              <div class="radio"></div>
            </li>
          </ul>
        </section>
      </div>
    </div>


  
      <div class="allpost">
        <button class="allpostbtn"><a  href="viewAllpost.php">
        View all posts
        </a>
         </button>
         <style>
          .allpostbtn
          {
            color:white;
            background-color:#3561bb;
            margin:10px;
            padding:5px;
            justify-content:center;
          }
          .allpostbtn a
          {
            color:white;
            font-size:18px;
            font-weight:400;
          }
         </style>
      </div>



      
   </div>




   <div class="rightside">
<span>
   <i id="icon" class="fa-solid fa-house-user" style="position: absolute; left:100px; top:95px"></i>
    <div class="home">
        <a href="welcome.php" style="color:white; font-size:18px; font-weight:400;">Home</a>
           
       </div>
       <i id="icon"  class="fa-solid fa-bell" style="position: absolute; left:100px; top:155px"></i>
       <div class="notification">
       <a href="welcome.php" style="color:white; font-size:18px; font-weight:400;"> Notification</a> 
       </div>
       
       
       <!-- <button type="submit" style="position: absolute; left:100px; top:215px">
      <span class="fa-solid fa-envelope"></span>
    </button> -->
    <i id="icon" class="fa-solid fa-envelope" style="position: absolute; left:100px; top:215px"></i>
       <div class="messages">
        <a href="https://zesty-shortbread-11c8da.netlify.app/" style="color:white;"> Messages</a>
       
       </div>
       <i id="icon" class="fa-sharp fa-solid fa-book-bookmark" style="position: absolute; left:100px; top:275px"></i>
       <div class="bookmark">
       <a href="welcome.php" style="color:white; font-size:18px; font-weight:400;">Book Mark</a> 
       </div>
       <i id="icon" class="fa-sharp fa-solid fa-address-card" style="position: absolute; left:100px; top:335px"></i>
       <div class="profile">
        <a href="profile.php" style="color:white; font-size:18px; font-weight:400;">Profile</a>
         
       </div>
       <i id="icon" class="fa-sharp fa-solid fa-circle-info" style="position: absolute; left:100px; top:395px"></i>
       <div class="more">
       <a href="welcome.php" style="color:white; font-size:18px; font-weight:400;">More</a>  
       </div>
         <style>
            
          #icon:hover
          {
            color: rgb(21, 144, 238);
          }
          .registration-button
          {
            position:relative;
            left:10rem;
            top:30rem;
          }
         </style>
      
       
    </span>
   </div>
   

   <script src="homepage.js"></script>

</body>
</html>
