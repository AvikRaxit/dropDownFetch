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
                  @foreach($countries as $data)
                    <option value="{{$data->id}}">{{$data->name}}
                  @endforeach
                </select>
            </div>

            <div class="mb-12 mt-3">
                <label for="exampleInputEmail1" class="form-label">State</label>
                <select class="form-control" name="state_id" id="state_id" aria-label="Default select example">
                  <option selected>Choose an option</option>
                  
                </select>
            </div>
            
            <div class="mb-12 mt-3">
                <label for="exampleInputEmail1" class="form-label">City</label>
                <input type="text" class="form-control p-3" id="exampleInputEmail1" aria-describedby="emailHelp" name="city" id="city_id" placeholder="Enter State Name" required>
            </div>
            
            <div class="mt-3">
                <button type="submit" name="submit" class="btn btn-primary">Save</button>
            </div>   
        </form>
      </div>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
      <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
      
      <script type="text/javascript">
        $(document).ready(function() {
          $('#country_id').change(function(event) {
            var idCountry = this.value;
            // alert(idCountry);
            $('#state_id').html('');
            $.ajax({
              url: "{{url('/fetch-state')}}",
              type: 'POST',
              dataType: 'json',
              data: {country_id: idCountry,_token:"{{ csrf_token() }}"},
              success:function(response){
                // console.log(response);
                $('#state_id').html('<option value=""> Select State </option>');
                $.each(response.states, function(index, val) {
                  $('#state_id').append('<option value="'+val.id+'"> '+val.name+' </option>');
                });
              }
            });
          });
        });
      </script>
   </body>
</html>