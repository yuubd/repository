<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>

  <h1>JavaScript</h1>
    <script>
      function a(input){
        return input+1;
        // the value after return is the result of (a(6))
    }
      document.write(a(6));
      // document.write() is also another fn
      // document is a class, write is a class fn(method)
      prompt(a(6));
      // prompt is also a fn
    </script>

    <h1>php</h1>
      <?php
        function a($input){
          return $input + 1;
        }
        echo a(6);
      ?>

      <script>
      a();
      </script>


</body>
</html>
