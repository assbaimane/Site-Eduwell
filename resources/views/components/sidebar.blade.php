<link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
<link rel="stylesheet" href={{ asset('css/fontawesome.css') }}>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<div>
  <div class="sidebar">
    <div class="logo-details">
      <i class='icon de code'></i>
        <div class="logo_name">EduWell</div>
        <i class='text-light  fa-bars' id="btn" ></i>
      </div>

    <ul class="nav-list">
      <li>
        <a href="back/roles">
          <i class='fa-solid fa-medal'></i>
          <span class="links_name">Role</span>
        </a>
         <span class="tooltip">Role</span>
      </li>
      
      <li>
       <a href="back/titres">
         <i class='fa-solid fa-computer-mouse' ></i>
         <span class="links_name">Titre</span>
       </a>
       <span class="tooltip">Titre</span>
     </li>

     <li>
       <a href="back/banners">
         <i class='fa-solid fa-house' ></i>
         <span class="links_name">Banner</span>
       </a>
       <span class="tooltip">Banner</span>
     </li>

     <li>
       <a href="back/services">
         <i class='fa-solid fa-list-check' ></i>
         <span class="links_name">Service</span>
       </a>
       <span class="tooltip">Service</span>
     </li>

     <li>
       <a href="back/testimonials">
         <i class='fa-solid fa-hand-wave' ></i>
         <span class="links_name">Testimonial</span>
       </a>
       <span class="tooltip">Testimonial</span>
     </li>

     <li>
       <a href="back/contacts">
         <i class='fa-solid fa-bell-concierge' ></i>
         <span class="links_name">Contact</span>
       </a>
       <span class="tooltip">Contact</span>
     </li>

     <li class="profile">
         <div class="profile-details">
          <div class="name_job">
             <div class="name">Imane A.</div>
             <div class="job">Front developer à Molengeek</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  
  <section class="home-section">
      @yield('content')
  </section>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace(" fa-bars", " fa-chevron-left");//replacing the iocns class
   }else {
     closeBtn.classList.replace(" fa-chevron-left"," fa-bars");//replacing the iocns class
   }
  }
  </script>

</div>