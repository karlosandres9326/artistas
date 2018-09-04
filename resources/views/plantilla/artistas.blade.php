<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Artistas </title>
</head>
<body>
    
    <center>
    <table border=1>
        <tr>
            <td colspan=2><center><b> @yield('title') </b</center></td>
        </tr>

           @for ($i=1;$i<=3;$i++){

            echo "<tr>\n";

            @endfor
            @for ($j=1;$j<=3;$j++)
            
            echo "<td></td>\n";
            @endfor
            echo "</tr>\n";
            }
            echo "</table>";
            
            
        

        <tr>
            <td colspan=2><center><b> ##### </b</center></td>
        </tr>
    </table>
    </center>
    
</body>
</html>