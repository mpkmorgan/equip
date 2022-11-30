
<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px; 
        }
    </style>

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->

        
        <div class="container-fluid page-body-wrapper">
      <h1>Add Equipment</h1>
         

         <div class="container" align="center" style="padding-top: 50px">

            @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                
                {{session()->get('message')}}

            </div>

            @endif

            <form action="{{url('upload_equipment')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div style="padding: 15px">
                    <label>Equipment Name</label>
                    <input type="text" name="name" style="color: black" placeholder="Equipment Name" required="">
                </div>

                <div style="padding: 15px">
                    <label>Phone</label>
                    <input type="number" name="number" style="color: black" placeholder="Number" required="">
                </div>

                <div style="padding: 15px">
                    <label>Location</label>
                    <select name="location" style="color: black; width:200px" required="">
                        <option>--Select--</option>
                        <option value="Farm1">Farm1</option>
                        <option value="Farm2">Farm2</option>
                        <option value="Farm3">Farm3</option>
                        <option value="Farm4">Farm4</option>
                        <option value="Farm5">Farm5</option>

                    </select>
                </div>

                <div style="padding: 15px">
                    <label>Rate</label>
                    <input type="text" name="rate" style="color: black" placeholder="Rate per hour" required="">
                </div>

                <div style="padding: 15px">
                    <label>Equipment Image</label>
                    <input type="file" name="file" required="">
                </div>

                <div style="padding:15px">
                    
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

            
         </div>

        </div>
        <!--May decide to include body-->







    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>