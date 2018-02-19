<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>

  <h1>JavaScript</h1>
    <ul>
    <script>
    list = new Array("choi", "choi2", "han", "han2", "ego");
    i = 0;
    while(i < 4){
      document.write("<li>" + list[i] + "</li>");
      i = i + 1;
    }

    list = new Array("Choi", "Choi2", "Han");
    i = 0;
    while(i < 4){
      document.write("<li>" + list[i] + "</li>");
      i = i + 1;
    }

    list = new Array("Choi", "Choi2", "Han", "han2", "ego");
    i = 0;
    while(i < list.length){
      document.write("<li>" + list[i] + "</li>");
      i = i + 1;
    }
    </script>
    </ul>

    <h1>php</h1>
    <ul>
      <?php
      $list = array("choi", "choi2", "han", "han2", "ego");
      $i = 0;
      while($i < count($list)){
        echo "<li>".$list[$i]."</li>";
        $i = $i + 1;
      }
      ?>
    </ul>

</body>
</html>
