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
      <form action="{{ route('storeCountry') }}" method="POST">
         @csrf
         <div class="mb-12">
            <label for="exampleInputEmail1" class="form-label">Country Name</label>
            <input type="text" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp" name="country" id="country_id" placeholder="Enter Country Name" required>
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
         </div>
         <div class="mt-3">
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
         </div>   
      </form>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   </body>
</html>