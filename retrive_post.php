<?php
include 'viewAllpost.php'
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
<meta name="viewport" content=
	"width=device-width, initial-scale=1">
<title>Posts</title>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	crossorigin="anonymous">

<!--Font Awesome-->
<link rel="stylesheet" href=
"path/to/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href=
"https://unpkg.com/flickity@2/dist/flickity.min.css">
</head>

<body>
<!-- Blog Latest -->

<div class="blog-latest">
	<div class="container">
	<h1 class="blog-secondary-heading text-dark">
		Latest Blogs</h1>

	<div class="main-carousel p-2 "
		id="latestCarousel">
		<div class="row">

		<?php
			
			for($x = 0; $x < 4; $x++) {

			// This is the loop to display all
			// the stored blog posts
			if(isset($x)) {
				$query = mysqli_query(
$conn,"SELECT * FROM `posts` WHERE id = '$idarray[$x]'");
				
				$res = mysqli_fetch_array($query);

				$image = $res['img'];
				$blog_title = $res['title'];
				$blog_text = $res['text'];
				$blog_id = $res['id'];
		?>
		<div class="column">
			<div class="carousel-cell p-2">
			<div class="card mx-2" style="width: 18rem;">
				<img class="card-img-top" src=
				"<?php echo 'images/'$image.'jpg'; ?>" alt="Card image cap">
				<div class="card-body">
				<h5 class="card-title">
					<a href="blog-template.php" class="
								blog-link">
					<?php
						echo $blog_title;
					?>
				</h5>
				</a>
				<h6 class="card-subtitle mt-2 text-muted">
					<?php
					echo $blog_text;
				?>
				</h6>
				</div>
			</div>
			</div>
		</div>
		<?php
			}
			}
		?>
		</div>
	</div>
	</div>
</div>

<!-- Bootstrap -->
<script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js"
	integrity=
"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
	crossorigin="anonymous">
</script>

<script src=
"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
	integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
	crossorigin="anonymous">
</script>
	
<script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
	crossorigin="anonymous">
</script>
	
<script src=
"https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js">
</script>
</body>

</html>
