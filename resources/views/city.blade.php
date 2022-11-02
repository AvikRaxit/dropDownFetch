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
        <form action="{{ route('storeCity') }}" method="POST">
          @csrf
            <div class="mb-12">
                <label for="exampleInputEmail1" class="form-label">Country</label>
                <select class="form-control " name="country_id" id="country_id" aria-label="Default select example">
                  <option selected>Choose an option</option>
                  @foreach($countryList as $cList)
                    <option value="{{$cList->id}}">{{$cList->name}}
                  @endforeach
                </select>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-12 mt-3">
                <label for="exampleInputEmail1" class="form-label">State</label>
                <select class="form-control " name="state_id" aria-label="Default select example">
                  <option selected>Choose an option</option>
                  @foreach($allState as $s)
                    <option value="{{$s->id}}">{{$s->state}}</option>
                  @endforeach
                </select>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-12 mt-3">
                <label for="exampleInputEmail1" class="form-label">City</label>
                <input type="text" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp" name="city" id="city_id" placeholder="Enter State Name" required>
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mt-3">
                <button type="submit" name="submit" class="btn btn-primary">Save</button>
            </div>   
        </form>
      </div>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

      <script>
        jQuery(document).ready(function(){
          jQuery('#country_id').change(function() {
            let cid = jQuery(this).val();
            jQuery.ajax({
              url: '/store-city',
              type:'post',
              data: 'cid='+cid+'&_token={{csrf_token()}}'
              success: function(result) {
                jQuery('#state_id').html(result)
              }
            });
          });
        });
      </script> -->
   </body>
</html>