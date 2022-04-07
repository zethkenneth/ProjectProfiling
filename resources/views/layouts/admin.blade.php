<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin</title>
        <script src="https://use.fontawesome.com/c21f12e3c0.js"></script>
         <!--Bootstrap css-->
        <!-- {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}} -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
        <!--font-awesome-icons-->
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        
        <!--Custom Css-->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
      
        
       
   
    </head>

    <body>

        {{--navbar --}}
        {{-- @include('includes.admin.navbar') --}}

        {{-- sidebar --}}
        @include('includes.admin.sidebar')

        {{-- main contents --}}
         <main class="mt-2 pt-3">
            <div class="container-fluid">
                @yield('content')
            </div>
        </main>
     <!--js bootstrap-->
     <script src={{asset('js/jquery-3.5.1.js')}}></script>
        <script src={{asset('js/bootstrap.bundle.min.js')}}></script>
        <script src="https://use.fontawesome.com/c21f12e3c0.js"></script>
    </body>
   

</html>