<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
    <style>
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
        backgroun:var(--body-color);
        transition:var(--tran-02); 
      }
       .header .header-text {
        font-weight:900;
        font-size:25px;
       }
       .sidebar{
        position:fixed;
        top:0;
        left:0;
        height:100%;
        width:250px;
        /* padding:10px 14px; */
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
        /* white-space:pre;  */
        opacity:1;
      }
      .header .header-text{
        /* display:flex; */
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
      .nav-pill li span:hover,
      .nav-pill li a:hover{
        background-color:rgb(66,66,243);
        color:white;
      }
      
    </style>
</head>
<body>
  <div class="container-fluid sidebar close">
    <div class="row">
       <div class="d-flex flex-column justify-content-between col-auto min-vh-100">
        <div class="mt-4  header">
            <div class=" text header-text ">
                <span class="fs-5  name">Shri Baharat Mandir School Society</span>
            </div>
            <i class="bx bx-chevron-right toggle"></i>
        
        <div class=" mt-4 menubar">
            <div class="menu mt-4">
            <ul class=" nav nav-pill flex-column menu-link">
            <li class=" nav-item my-1 nav-link">
            <a href="#" class="nav-link "  aria-current="page" ><i class="bx bx-home-alt icon"></i>
            <span class="text nav-text">HOME</span>
          </a>
          </li>
          <li class=" nav-item my-1 nav-link">
            <a href="#" class="nav-link" aria-current="page" ><i class="bx bx-store-alt icon"></i>
            <span class="text nav-text">SHOPS</span>
          </a>
          </li>
          <li class="nav-item my-1 nav-link">
            <a href="#" class="nav-link" aria-current="page" ><i class="bx bx-user-circle icon"></i>
            <span class="text nav-text">CUSTOMERS</span>
          </a>
          </li>
          <li class="nav-item my-1 nav-link">
            <a href="#" class="nav-link" aria-current="page" ><i class="bx bx-message-alt-dots icon"></i>
            <span class="text nav-text">INVOICE</span>
          </a>
          
        </div>
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
       </div>

      </div>
  </div>
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