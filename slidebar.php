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
        --toggle-color:#DDD;
        --primary-color:#695CFE;
        --primary-color-light:#F6F5FF;
        --body-color:#E4E9F7;
        --sidebar-color:#FFF;
        --text-color:#707070;

        /**transition*/
        --tran-02:all 0.2s ease;
        --tran-03:all 0.3s ease;
        --tran-04:all 0.4s ease;
        --tran-05:all 0.5s ease;
       
      }
      body{
        height:100vh;
        background:var(--body-color);
        transition:var(--tran-02); 
      }
      
      .header .header-text .name{
        font-weight:900;
        font-size:25px;
        /* margin-bottom:30px; */
     
      }
      .sidebar{
        position:fixed;
        top:0;
        left:0;
        height:100%;
        width:250px;
        padding:10px 14px;
        background:var(--sidebar-color);
        transition:var(--tran-05);
      }
      .sidebar .header{
        position:relative;

      }
      .sidebar.close{
        width:88px;
      }
      .sidebar.close .text{
        opacity:0;
      }
    
      .sidebar .text{
        font-size:20px;
        font-weight:500;
        color:var(--text-color);
        transition:var(--tran-04);
        white-space:pre; 
        opacity:1;
      }
      .header .header-text{
        display:flex;
        flex-direction:column;
      }
      .sidebar .header .toggle{
        position:absolute;
        top:50%;
        right:-24px;
        transform:translateY(-50%) rotate(180deg);
        height:25px;
        width:25px;
        background:var(--primary-color);
        display:flex;
        align-items:center;
        justify-content:center;
        border-radius:50%;
        color:var(--sidebar-color);
        font-size:22px;
        transition:var(--trans-03);
      }
      .sidebar.close .header .toggle{
      transform:translateY(-50%)
      }
      .sidebar li{
        height:50px;
        margin-top:10px;
        list-style:none;
        display:flex;
        align-items:center;
      }
      .sidebar li .icon{
        font-size:20px;
        /* margin:10px; */
        min-width:60px;
        display:flex;
        align-items:center;
        justify-content:center;

      }
      .sidebar li .icon,
      .sidebar li .text{
        color:var(--text-color);
        transition:var(--tran-02);
      }
      .sidebar li a{
        height:100%;
        width:100%;
        display:flex;
        align-items:center;
        text-decoration:none;
        border-radius:6px;
        transition:var(--tran-04);
      }
      .sidebar .search-bar{
        background:var(--primary-color-light);
      }
      /* .search-bar input{
        height:100%;
        width:100%;
        outline:none;
        border:none;
        border-radius:6px;
        background:var(--primary-color-light);
      } */
      .sidebar li a:hover{
        background:var(--primary-color);
      }
      
      .sidebar li a:hover .icon,
      .sidebar li a:hover .text{
        color:var(--sidebar-color); 
      }
      .sidebar .menubar{
        height:calc(100% - 50px);
        display:flex;
        flex-direction:column;
        justify-content:space-between
      }
      
      .menubar .mode .toggle-switch{
        position:absolute;
        display:flex;
        align-items:center;
        justify-content:center;
        height:100%;
        min-width:60px;
        cursor:pointer;
        
      }
      .toggle-switch .switch{
        position:relative;
        height:22px;
        width:44px;
        border-radius:25px;
        background:var(--toggle-color);
      }
      .switch::before{
        content: '';
        position:absolute;
        height:15px;
        width:15px;
        border-radius:50%;
        top:-19%;
        left:5px;
        cursor:pointer;
        transform:translateY(50%);
        background:var(--sidebar-color);
        transition:var(--tran-03);

      }
      body.dark .switch::before{
        left:20px;
      }



    </style>
</head>
<body >
    <nav class="sidebar close">
      <header>
        <div class="header">
        <div class=" text header-text">
            <span class="name">Shri Bharat Mandir </span>
            <span class="name">School Society</span>
        </div>
        <i class="bx bx-chevron-right toggle"></i>
        </div>
     </header>
     <div class="menubar">
      <div class="menu">
        <!-- <li class="search-bar">
          <i class="bx bx-search icon"></i>
          <input type="search" placeholder="Search.....">
        </li> -->
        <ul class="menu-link">
          <li class="nav-link">
            <a href="#" ><i class="bx bx-home-alt icon"></i>
            <span class="text nav-text">HOME</span>
          </a>
          </li>
          <li class="nav-link">
            <a href="#" ><i class="bx bx-store-alt icon"></i>
            <span class="text nav-text">SHOPS</span>
          </a>
          </li>
          <li class="nav-link">
            <a href="#" ><i class="bx bx-user-circle icon"></i>
            <span class="text nav-text">CUSTOMERS</span>
          </a>
          </li>
          <li class="nav-link">
            <a href="#" ><i class="bx bx-message-alt-dots icon"></i>
            <span class="text nav-text">INVOICE</span>
          </a>
          
        </ul>
      </div>
     

     <div class="bottom-content">
      <li class="">
        <a href="#">
          <i class="bx bx-log-out icon"></i>
          <span class="text nav-text">Logout</span>
        </a>
      </li>
      
     </div>
    </div>
    </nav>
</body>

<script type="text/javascript">
const body = document.querySelector("body")
      sidebar = body.querySelector(".sidebar")
      toggle = body.querySelector(".toggle")
      searchbar = body.querySelector(".search-bar")
      modeSwitch = body.querySelector(".toggle-switch")
      modetext = body.querySelector(".mode-text")

      toggle.addEventListener("click" , () =>{
        sidebar.classList.toggle("close");
      })
                  


</script>
</html>