<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

         

              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="name" class="form-control" />
                <label class="form-label" for="form3Example1q">Name</label>
              </div>
     
              <div class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="email" class="form-control" />
                <label class="form-label" for="form3Example1q">Email</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="form3Example1q" Name="password" class="form-control" />
                <label class="form-label" for="form3Example1q">Password</label>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline datepicker">
                    <input type="date" class="form-control" name="date" id="exampleDatepicker1" />
                    <label for="exampleDatepicker1" class="form-label">Select a date</label>
                  </div>
                </div>
                
                <div class="col-md-6 mb-4">

                  Gender<select class="select" name="gender">
                    <option value="gender" disabled>Gender</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="other">Other</option>
                  </select>

                </div>
              </div>

              <div class="mb-4">

               Subject <select class="select" name="subject">
                  <option value="php" disabled>php</option>
                  <option value="html">html</option>
                  <option value="css">css</option>
                  <option value="javascript">javascript</option>
                </select>

              </div>

              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-6">

                 

                </div>
              </div>

              <input type="submit" class="btn btn-success btn-lg mb-1"></input>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </form>
</body>
</html>