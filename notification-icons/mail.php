<!-- Final Solution -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/js/all.min.js">
	</script>
</head>

<style>
    h1 {
        color:green;
       }
   .badge {
        position: relative;
        top: -20px;
        left: -25px;
        border: 1px solid black;
        border-radius: 50%;
       }
    button {
        margin:5px;
       }
</style>

<body>
	<div class="container-fluid">
		<br>
		<br>
		<center>
			<h1>GeeksforGeeks</h1>
			<h4>Icon with count Badge:

			<!-- Wrapping the icon and badge -->
			<span id="group">
				<button type="button" class="btn btn-info">
				<i class="fa fa-envelope"></i>
				</button>
				<span class="badge badge-light">5</span>
			</span>
			</h4>
			<br>
			<br>
			<button class="btn btn-danger">
				<i class="fas fa-minus"></i>
			Subtract
			</button>
			<button class="btn btn-success">
				<i class="fas fa-plus"></i>
			Addition
			</button>
		</center>
	</div>

    <script>

	// Use find() function to extract the badge
	// count from '#group' container.
	$(document).ready(function() {
		$(".btn").click(function() {
			var val = parseInt($('#group').find('.badge').text());

			// Check for the button clicked
			if ($(this).hasClass('btn-danger')) {
				$('#group').find('.badge').text(val - 1);
			} else if ($(this).hasClass('btn-success')) {
				$('#group').find('.badge').text(val + 1);
			}
		});
	});
</script>

</body>


</html>
