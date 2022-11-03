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
        <a href="{{ route('getState') }}"><button type="button" class="btn btn-outline-danger">Add State</button></a>
        <a href="{{ route('getCity') }}"><button type="button" class="btn btn-outline-primary">Add City</button></a>
        <div class="col-md-12 m-5">
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">Country</label>
            <select class="form-select" id="country_id" aria-label="Default select example">
              <option selected>Choose an option</option>
              @foreach ($countries as $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="col-md-12 m-5">
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">State</label>
            <select class="form-select" id="state_id" aria-label="Default select example">
              <option selected>Choose an option</option>
            </select>
          </div>
        </div>

        <div class="col-md-12 m-5">
          <div class="form-group">
            <label for="exampleInputEmail1" class="form-label">City</label>
            <select class="form-select" id="city_id" aria-label="Default select example">
              <option selected>Choose an option</option>
            </select>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

      <script type="text/javascript">
        $(document).ready(function() {

          // For fetch State
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
                $('#city_id').html('<option value=""> Select City </option>');
              }
            });
          });
          
          // For fetch city
          $('#state_id').change(function(event) {
            var idState = this.value;
            // alert(idCountry);
            $('#city_id').html('');
            $.ajax({
              url: "{{url('/fetch-city')}}",
              type: 'POST',
              dataType: 'json',
              data: {state_id: idState,_token:"{{ csrf_token() }}"},
              success:function(response){
                // console.log(response);
                $('#city_id').html('<option value=""> Select City </option>');
                $.each(response.cities, function(index, val) {
                  $('#city_id').append('<option value="'+val.id+'"> '+val.city+' </option>');
                });
                // $('#city_id').html('<option value=""> Select City </option>');
              }
            });
          });
        });
      </script>
   </body>
</html>