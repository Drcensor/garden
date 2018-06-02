<!DOCTYPE html>
<html lang="en">

<head>



<meta charset="UTF-8">
<title>Document</title>

</head>

<body>


	 @if ($flash = session('message'))
           <div class="alert alert-success" role="alert" style="position: absolute; z-index: 10;">
                <strong>{{ $flash }}</strong>
           </div>

           @endif



</body>
</html>