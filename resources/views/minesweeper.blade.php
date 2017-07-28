<html>
<head>
</head>
<body>
      <title id="title">
          Minesweeper
      </title>
      <table id="title">
          @for($i=1;$i<=8;$i++)
            <tr>
                @for($j=1;$j<=8;$j++)
                  <td id="cell-{{$i}}x{{$j}}">
                    bau
                  </td>
                @endfor
            </tr>
          @endfor
      </table>
</body>
</html>
