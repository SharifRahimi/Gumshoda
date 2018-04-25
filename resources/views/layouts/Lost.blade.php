<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>page</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="custom.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<!-- Link Jquery -->
		<!-- Link Bootstrap.min.js -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12f.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- FontAwesome CDN -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
		<link href="/css/custom.css" rel="stylesheet">
	</head>
	<body style="background-color: #f5f5f5;">
		<main>
			<h4 class="lost_title text-center mt-2 bg-dark text-light p-3">fill the form and let us help you</h4>
			<div class="container w-50 mt-5">
				<div class="row">
					<div class="col-sm">
						<form action="saveData.php" method="post">
							<div class="form-row">
								<div class="col">
									<label for="exampleFormControlSelect1">Item title</label>
									<input type="text" class="form-control" name="title" placeholder="enter the title">
								</div>
								
								
							</div>
							<div class="form-row mt-4">
								<div class="col">
									<label for="exampleFormControlSelect1" class="category">Description</label>
									<textarea class="form-control " name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
								</div>
							</div>
							
								
							
							<div class="form-row mt-4">
								<div class="col">
									<label for="exampleFormControlSelect1">Category</label>
									<select class="form-control" name="category" id="exampleFormControlSelect1">
										<option>electronics & acccessories</option>
										<option>Clothing</option>
										<option>vehicles</option>
										<option>animals</option>
									</select>
								</div>
								<div class="col">
									<label for="exampleFormControlSelect1">Subcategory</label>
									<select class="form-control" name="Subcategory" id="exampleFormControlSelect1">
										<option>Android</option>
										<option>Iphone</option>
										<option>laptop</option>
										<option>Disktop</option>
										<option>women clothing</option>
										<option>men clothing</option>
										<option>footwear</option>
										<option>Four wheelers</option>
										<option>two wheelers</option>
										<option>cat</option>

										
										<option>puppy</option>
									</select>
								</div>
							</div>
						
					
							<div class="form-row mt-4">
								<div class="col">
									<label for="exampleFormControlSelect1">Mobile Number</label>
									<input type="number" class="form-control" name="mobile" placeholder="mobile">
								</div>
								<div class="col">
									<label for="exampleFormControlSelect1">Email address</label>
									<input type="email" class="form-control" name="email" placeholder="email">
								</div>
								
							</div>
						
						<div class="custom-file mt-5">
							<input type="file" class="custom-file-input" id="customFile">
							<label class="custom-file-label" name="Upload" for="customFile">Upload Picture</label>
						</div>
						<button type="submit" class="btn btn-primary btn-lg btn-block mt-5 mb-5">Post</button>
					</div>
				</div>
			</div>	
		</form>
		</main>
	</body>
</html>


