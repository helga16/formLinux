<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Form</title>
</head>

<body>
  <?php require_once('form.php');?>
	<style>
		body{
			background-color: #585965;
		}
		.container{
			max-width: 1024px;
			margin:0 auto;
		}
		.topdiv{
			margin-top: 30px;
      border-radius: 5px;
			background-color: #F2F2F2;

			padding: 60px;
		}
    .topdiv-title{
      text-align: center;
      font-size: 2rem;
    }
	</style>
	<div class="container topdiv">
    <p class="topdiv-title">Registration form</p>
	<form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputLogin">Login</label>
      <input type="text" class="form-control" id="inputLogin" name="login">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="12 Main St" name="Address">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Full name</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Ivanov Ivan" name="Full_name">
  </div></div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state">
        <option selected>Choose...</option>
        <option>Russia</option>
        <option>Ukraine</option>
        <option>Belarus</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Postal code</label>
      <input type="text" class="form-control" id="inputCode" name="code">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Subscribe on news
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>


</body>
</html>
