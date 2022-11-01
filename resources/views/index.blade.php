<!DOCTYPE html>
<html lang="en">
   <head>
      <title></title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/style.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   </head>
   <body>
      <!-- Registration Form  -->
      <div class="container m-5 p-3">
        <a href="{{ route('getCountry') }}"><button type="button" class="btn btn-outline-success">Add Country</button></a>
        <a href="#"><button type="button" class="btn btn-outline-danger">Add State</button></a>
        <a href="#"><button type="button" class="btn btn-outline-primary">Add City</button></a>
        <div class="col-md-12 m-5">
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Country</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Choose an option</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>

        <div class="col-md-12 m-5">
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">State</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Choose an option</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>

        <div class="col-md-12 m-5">
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">City</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Choose an option</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   </body>
</html>