<!DOCTYPE html>
<html lang="en">
<head>
<!--<link rel="stylesheet" href="{{asset('css/app.css')}}">-->
<link rel="stylesheet" href="{{URL::to('css/app.css')}}">

</head>
<body>
    @if (isset($produtos))
        
        @if (count($produtos)==0)
            <h1>Nenhum produto</h1>        
        @elseif (count($produtos)===1)
            <h1>um produto</h1>
        @else
        <h1>Temos varios produtos</h1>
        @endif

    @else
        <h1>não temos produtos</h1>            
    @endif
      

    @empty($produtos)
        <h1>Nada em produtos</h1>        
    @endempty

  

<script src="{{URL::to('js/app.js')}}" type="text/javascript">
</script>
    
</body>
</html>