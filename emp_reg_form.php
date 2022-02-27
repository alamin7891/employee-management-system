<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employee Registration Form</title>


	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


	<style>
		/*@media (min-width: 1025px) {
  .h-custom {
    height: 100vh !important;
  }
}*/
.card-registration .select-input.form-control[readonly]:not([disabled]) {
  font-size: 1rem;
  line-height: 2.15;
  padding-left: .75em;
  padding-right: .75em;
}
.card-registration .select-arrow {
  top: 13px;
}

.gradient-custom-2 {
  /* fallback for old browsers */
  background: #a1c4fd;


  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
}

.bg-indigo {
  background-color: #4835d4;
  border-radius: 5px;
}
@media (min-width: 992px) {
  .card-registration-2 .bg-indigo {
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
  }
}
@media (max-width: 991px) {
  .card-registration-2 .bg-indigo {
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
  }
}
	</style>

</head>
<body>

<section class="h-100 h-custom gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">

              <div class="col-lg-12 bg-indigo text-white">
                <div class="p-5">
                  <h2 class="fw-normal mb-5 text-center">Employee Information</h2>

                  <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="form3Examplev2" class="form-control form-control-lg" name="fname" placeholder="First Name" />
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                        <input type="text" id="form3Examplev3" class="form-control form-control-lg" name="lname" placeholder="Last Name"/>
                      </div>

                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="email" name="email" id="form3Examplev4" class="form-control form-control-lg" placeholder="Enter your Email" />
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="password" name="password" class="form-control form-control-lg" placeholder="Enter your password" />
                    </div>
                  </div>


                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                    	<label for="" class="form-check-inline">Gender:</label>
                      <div class="form-check-inline">
							<label class="form-check-label">
							    <input type="radio" class="form-check-input" name="gender">Male
							</label>
							
						</div>
                      <div class="form-check-inline">
							<label class="form-check-label">
							    <input type="radio" class="form-check-input" name="gender">Female
							</label>
							
						</div>
                      </div>
                  </div>


                  <div class="row">
                    <div class="col-md-5 mb-4 pb-2">

                    	<div class="mb-4 pb-2">
		                    <div class="form-outline">
		                      <input type="text" name="dept" id="form3Examplev4" class="form-control form-control-lg" placeholder="Enter your Department" />
		                    </div>
	                  	</div>
                    </div>

                    <div class="col-md-7 mb-4 pb-2">

                      <div class="form-outline">
	                      <input type="text" name="deg" id="form3Examplev4" class="form-control form-control-lg" placeholder="Enter your Degree" />
	                    </div>
                    </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                      <input type="number" name="phone" class="form-control form-control-lg" placeholder="Enter your Phone" />
                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="form-outline form-white">
                      <textarea type="text" class="form-control form-control-lg" placeholder="Enter your Phone"> </textarea> 
                    </div>
                  </div>

                  <button type="button" class="btn btn-lg btn btn-primary" data-mdb-ripple-color="dark">Register</button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




</body>
</html>