<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Document</title>
    <style>
      *{
        margin:0;
        padding:0;
        box-sizing:border-box;
      }

      :root{
        --toggle-color:blue;
        --primary-color:aqua;
        --body-color:wheat;
        --sidebar-color:grey;
        --text-color:black;

        /**transition*/
        --tran-02:all 0.2s ease;
        --tran-03:all 0.3s ease;
        --tran-04:all 0.4s ease;
        --tran-05:all 0.5s ease;
       
      }
      .sidebar{
        position:fixed;
        top:0;
        left:0;
        height:100vh;
        width:250px;
        background:var(--sidebar-color);
      }
      body{
        height:100vh;
        background:var(--body-color);
      }
      .sidebar .text{
        font-size:16px;
      }
    </style>
</head>
<body>
    <nav class="sidebar">
        <div class="header">
        <div class=" text header-text">
            <span class="name">Shri Bharat Mandir School Society</span>
        </div>
        <i class="bx bx-chevron-right toggle"></i>
        </div>
        
    </nav>
</body>
</html>