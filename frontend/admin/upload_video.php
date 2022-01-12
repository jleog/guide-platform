<?php
if($_FILES['name_video']['name']) {
  ini_get("upload_max_filesize", '100M');
  define('ALLOW_UNFILTERED_UPLOADS', true);

  $tmp_name = $_FILES['name_video']['tmp_name'];
  $name = $_FILES['name_video']['name'];
  move_uploaded_file($tmp_name, '../static/videos/'.$name);

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $_SERVER['SERVER_NAME']."/backend/setVideo");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, "video_name=$name&".http_build_query($_REQUEST));
  curl_exec($ch);

  die(var_dump(curl_getinfo($ch)));
  curl_close($ch);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
    <title>Subir nuevo video</title>

    
</head>
<body>
    <form action="" id="form_send_video">

        <!-- Actions -->
        <div class="container">
            <label for="">Upload video</label>
            <input type="file" name="name_video" id="file_input">
            <label for="">Titulo</label>
            <input type="text" name="video_title" placeholder="Titulos" required>
            <label for="">Descripcion</label>
            <input type="text" name="video_description" placeholder="Descripcion" required>
        </div>

        <!-- Loading bar -->
        <div class="container load_bar">
            <div class="bar_blue" id="load_bar">
                <span></span>
            </div>
        </div>

        <!-- Actions -->
        <div class="actions">
            <button>Enviar</button>
            <button>Cancelar</button>
        </div>
    </form>
    
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="./static/js/script.js"></script>
    <script>
        $("#send_new_video").click((event) => {
            event.preventDefault();
            $.ajax({
                url: "/backend/setVideo",
                data: {
                    'name_video': $("#name_video").val()
                },
                type: "post",
                dateType: 'json',
                success: (res) => {
                    console.log(res);
                }
                
            })
        })
    </script>
</body>
</html>