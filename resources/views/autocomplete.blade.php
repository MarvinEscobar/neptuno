@extends('layouts.app')

@section('content')

  <div class="container box">
      
   <div class="form-group">
    <input type="text" id="name" class="form-control input-lg" placeholder="Enter Country Name" />
    <div id="productList">
    </div>
   </div>
   {{ csrf_field() }}
  </div>
  <script>
$(document).ready(function(){

 $('#name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#productList').fadeIn();  
                    $('#productList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#name').val($(this).text());  
        $('#productList').fadeOut();  
    });  

});
</script>
  @endsection

