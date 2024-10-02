<!DOCTYPE html>
<html lang="en">
<head>
   @include('include.head')
</head>
<body>
   <!-- #region -->
   <div>
        @include('include.header')
    </div>

    <div>
        @include('include.banner')
    </div>

    <div>
        @include('include.offer')
    </div>
    <div>
        @include('include.exlusivesection')
    </div>
   

    <div>
       @yield('content') <!-- Placeholder for child content -->
   </div>
    <div>
        @include('include.script')
    </div>
</body>
</html>
