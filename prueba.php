<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
 
<body>
 
    <script>
    var miArray=new Array();
 
    // bucle del 1 al 5
    for(var i=1;i<=5;i++)
    {
        var name = prompt("Introduce un numero");
        miArray.push(name);
    }
    document.write(miArray);
    </script>
 
</body>
</html>