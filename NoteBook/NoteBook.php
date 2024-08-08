
<?php
	include __DIR__ ."/includes/header.php";
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
		<link   href="styles.css" rel="stylesheet"/>
	<style>
  		.video-background {
            position: fixed;
            inset-inline-end: 0;
            inset-block-end: 0;
            min-inline-size: 100%;
            min-block-size: 100%;
            z-index: -1;
        }
			 /* Konteyner uslublari */
.container {
/*   background-image: url('oldPage.png'); */
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover; 
  padding-inline-start: 1rem;
  padding-inline-end: 1rem;
  padding-inline-start: 1.5rem;
  padding-inline-end: 1.5rem;
  background-color: rgba(0, 0, 0, 0.5);
}
 .container {
            border: 5px solid transparent;
            animation: borderAnimation 5s infinite;
        }

        @keyframes borderAnimation {
            0% {
                border-color: red;
            }
            25% {
                border-color: yellow;
            }
            50% {
                border-color: green;
            }
            75% {
                border-color: blue;
            }
            100% {
                border-color: red;
            }
        }

/* Qator uslublari */
.row {
  display: flex;
  flex-wrap: wrap;
  margin-inline-end: -1rem;
  margin-inline-start: -1rem;
}

.row.justify-content-center {
  justify-content: center;
}

/* Ustun uslublari */
.col-md-10 {
  flex: 0 0 auto;
  inline-size: 83.333333%;
}

.col-lg-8 {
  flex: 0 0 auto;
  inline-size: 66.666667%;
}

.col-xl-7 {
  flex: 0 0 auto;
  inline-size: 58.333333%;
}

/* Ustun uchun fon uslublari */
.col-md-10.col-lg-8.col-xl-7 {
  inline-size: 100%;
  block-size: auto;
  background-position: center;
}

/* Post ko'rinishi uslublari */
.post-preview {
  margin-block-end: 1.5rem;
  text-align: center;
}

.post-preview a {
  text-decoration: none;
  color: #17fe00;
}

.post-preview h2 {
  font-size: 2rem;
  margin-block-end: 0.5rem;
}

.post-preview p {
  margin: 0;
  color: red;
}

/* Ajratgich uslublari */
hr.my-4 {
  margin-block-start: 1.5rem;
  margin-block-end: 1.5rem;
  border: 0;
  border-block-start: 1px solid rgba(23,254,0,255);
}
</style>

    </head>		    
    <body>
  		
		<!--Backround video-->

		<video autoplay muted loop class="video-background">
			<source src="cyberBG.mp4" type="video/mp4">
		</video>


        <div class="container px-4 px-lg-5 ">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="/~w120211858/study/KUTUB/index.php">
                            <h2 class="post-title">KUTUB</h2>
                        </a>
                           <p> 날짜 - 2023년도	   </p>
                    </div>
					<!-- Divider-->
			  		<hr class="my-4" />
 					<!-- Post preview-->
                    <div class="post-preview">
                        <a href="/~w120211858/study/2023/index.php">
                            <h2 class="post-title">네트워크</h2>
                        </a>
                           <p> 날짜 - 2023년도</p>     
                    </div>
					<!-- Divider-->
			  		<hr class="my-4" />
					<!-- Post preview-->
					<div class="post-preview">
                        <a href="/~w120211858/study/network/index.php">
                            <h2 class="post-title">네트워크1</h2>
                        </a>
                            <p>날짜 - 2023년도</p>
                    </div>
   					
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="/~w120211858/study/forensic/index.php">
                            <h2 class="post-title">포렌식</h2>
                        </a>
                            <p>날짜 - 2024-1학기</p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="/~w120211858/study/Analysis/index.php">
                            <h2 class="post-title">악성코드 분석</h2>
                        </a>
                            <p>날짜 - 2024-1학기</p>
                    </div>
                    <hr class="my-4" />
                </div>
            </div>
        </div>
    </body>
</html>

<?php
	include __DIR__ ."/includes/footer.php";
?>