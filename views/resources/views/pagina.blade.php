<!DOCTYPE html>
<html lang="en">
<head>
<!--<link rel="stylesheet" href="{{asset('css/app.css')}}">-->
<link rel="stylesheet" href="{{URL::to('css/app.css')}}">

</head>
<body>
      

    <!--<script src="{{asset('js/app.js')}}" type="text/javascript">
        </script>-->

<script src="{{URL::to('js/app.js')}}" type="text/javascript">
</script>

@alerta( ['tipo'=>'danger' , 'titulo'=>'Erro fatal'])
    <strong>Erro: </strong> Sua mensagem de erro
    
@endalerta
    
</body>
</html>