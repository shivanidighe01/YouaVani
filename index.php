

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
   
    <!-- FONT AWESOME-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    
    <!-- <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png"> -->

    <title>YouaVani</title>
</head>

<body>

<style>
/** Google Fonts **/

@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Open+Sans&display=swap");

:root {
  --body-font: "Open Sans", sans-serif;
  --container-font: "Poppins", sans-serif;
  --background-color: hsl(257, 40%, 49%);
  --white: rgb(255, 255, 255);
  --hover-color: hsl(300, 69%, 71%);
  --box-shadow: -2px 10px 24px -11px rgba(0, 0, 0, 0.62);
}

/** Reset **/
*,
*::before,
*::after {
  box-sizing: border-box;
}

* {
  padding: 0;
  margin: 0;
}

/** Styling **/
body {
    -ms-overflow-style: none; /* for Internet Explorer, Edge */
  scrollbar-width: none; /* for Firefox */
  overflow-y: scroll;
  height: 100vh;
  background-color: var(--background-color);
  font-family: var(--body-font);
  background-image: url("images/bg-desktop.svg");
  background-repeat: no-repeat;
  background-size: auto;
}
body::-webkit-scrollbar {
  display: none; /* for Chrome, Safari, and Opera */
}

/** Main Container **/
.main-container {
  width: 100%;
  margin: 0 auto;
  justify-content: center;
  align-items: center;
}
/** Logo **/
header {
  position: relative;
  width: 100%;
  height: auto;
}
.logo {
  width: 15rem;
  height: 5rem;
  margin: 3.5rem 4.3rem;
}

.logo-img {
  /* background-image: url("images/logo.svg"); */
  background-size: contain;
  background-repeat: no-repeat;
  width: 90%;
  height: 90%;
}

/** Content Container **/
.content-container {
  max-width: 100%;
  display: flex;
  flex-direction: row;
  margin: 0 auto;
  margin-top: 1rem;
}

/** Illustration Container **/
.illustration-container {
  flex: 1.4;
  text-align: center;
}

.responsive-img {
  max-width: 100%;
  display: block;
  margin: auto;
}

/** Info Container **/
.info-container {
  display: flex;
  flex-direction: column;
  text-align: left;
  color: var(--white);
  gap: 1.4rem;
  max-width: 100%;
  flex: 1;
  margin-top: 2.7rem;
}

.info-container h1 {
  font-family: var(--container-font);
  font-size: 2.5rem;
  text-transform: capitalize;
  max-width: 90%;
}

.info-container p {
  max-width: 85%;
  line-height: 1.7rem;
  font-size: 1.1rem;
  overflow: hidden;
  word-spacing: 1px;
}

/** Registration Button **/
.registration-button {
  width: 32%;
  background-color: var(--white);
  color: var(--background-color);
  border-radius: 35px;
  border: none;
  padding: 16px;
  font-size: 1.1rem;
  font-weight: 200;
  font-family: var(--container-font);
  box-shadow: var(--box-shadow);
  -webkit-box-shadow: var(--box-shadow);
  -moz-box-shadow: var(--box-shadow);
  -webkit-transition: all ease-in-out 0.3s;
  position:absolute;
  left:35%;
}

/** Social Media **/
.social-media {
  position: relative;
  display: flex;
  width: 100%;
  height: 5rem;
  flex-direction: row;
  justify-content: flex-end;
  padding-right: 6.5rem;
  margin-top: 0.6rem;
  align-items: center;
  gap: 2.5rem;
}

.media-icon {
  align-items: center;
  width: 1rem;
  height: 3rem;
}

.fab {
  border-radius: 50%;
  padding: 10px;
  font-size: 1.2rem;
  border-radius: 50%;
  border: 1px solid var(--white);
  color: var(--white);
  width: 2.5rem;
  text-align: center;
}

/** Media Queries **/

/** Nonsticky Hover **/
@media (hover: hover) {
  button:hover {
    background-color: var(--hover-color);
    color: var(--white);
    cursor: pointer;
    transition: all ease-in-out 0.3s;
  }

  .media-icon .fab:hover {
    color: var(--hover-color);
    border-color: var(--hover-color);
    cursor: pointer;
    transition: all ease-in-out 0.3s;
  }
}

@media screen and (max-width: 1280px) {
  body {
    background-image: url("images/bg-mobile.svg");
    background-size: cover;
  }
  .content-container {
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    margin-bottom: 4rem;
    gap: 1rem;
  }

  .info-container {
    text-align: center;
  }

  .illustration-container {
    padding: 1.5rem;
  }
  
  .info-container h1,   .info-container p {
  margin: auto;
}

  .social-media {
    justify-content: center;
    padding: 0;
    margin-top: 0;
  }
  .info-container .btn
  {
    display:flex;
    text-align:center;
    justify-content:space-between;
    text-transform:capitalize;
  }
  
  /* a
  {
    width:100%;
    height:50px;
    display:flex;
    text-align:center;
    justify-content:space-between;
  text-transform:capitalize;
    font-size:16px;
    font-weight:600;
   
  } */
}


</style>
    
    <main class="main-container">
        <!-- Header -->
        <header>
            <!-- Logo -->
            <div class="logo">
                <div class="logo-img" style="color:white;margin:20px;font-size:30px; font-weight:600">
                    YouaVani
                </div>
            </div>
        </header>
        <!-- Content Container -->
        <section class="content-container">
            <!-- Illustration Container -->
            <section class="illustration-container">
                <img class="responsive-img" src="images/illustration-mockups.svg" alt="mockup illustration">
            </section>
            <!-- Info Container -->
            <section class="info-container">
                <div>
                    <h1>Build the community !</h1>
                </div>

                <div>
                    <p>
                        Create
                        connections with your colleagues as you engage in genuine discussion.</p>
                </div>
                <!-- Registration Button -->
                <div class="btn">
               <button class="registration-button">
                <a  href="register.php"> Register</a>
              </button>
                   </div>
            </section>
        </section>
        <div class="social-media">
            <div class="media-icon"><i class="fab fa-facebook-f"></i></div>
            <div class="media-icon"><i class="fab fa-twitter"></i></div>
            <div class="media-icon"><i class="fab fa-instagram"></i></div>
        </div>
    </main>



</body>

</html>