<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Series</title>
</head>

<body>
     <h1>Lista de series</h1>
     <div>
          <ul type="square">
               @foreach ($series as $key => $value)
               <?php if ($key > 2) : ?>
                    <li onclick="mostrar(<?= $key ?>)">{{$series[$key]['nome']}} </li>
               <?php else : ?>
               <?php endif; ?>
               @endforeach
          </ul>
     </div>

     <script>
          function mostrar(key) {
               switch (key) {
                    case 1:
                         console.log('vc esta no 1')
                         break;
                    case 2:
                         console.log('vc esta no 2')
                         break;
                    case 3:
                         console.log('vc esta no 3')
                         break;
                    case 4:
                         console.log('vc esta no 4')
                         break;
                    default:
                         break;
               }
          }
     </script>
</body>


</html>