const body = document.querySelector("body")
      sidebar = body.querySelector(".sidebar")
      toggle = body.querySelector(".toggle")
      searchbar = body.querySelector(".search-bar")
      modeSwitch = body.querySelector(".toggle-switch")
      modetext = body.querySelector(".mode-text")

      toggle.addEventListener("click" , () =>{
        sidebar.classList.toggle("close");
      })
