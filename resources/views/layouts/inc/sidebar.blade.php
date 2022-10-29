 <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg" style="width:244px;">
   <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
   <div class="logo"><a href="#" class="simple-text logo-normal">
       E-shop
     </a></div>
   <div class="sidebar-wrapper">
     <ul class="nav">
       <li class="nav-item active  " >
         <a class="nav-link" href="{{url('dashboard')}}">
           <i class="material-icons" ><i style="color:red;" class="fa fa-bar-chart" aria-hidden="true"></i></i>
           <p style="color:red;">Analytics</p>
         </a>
       </li>
       <li class="nav-item {{Request::is('categories')? 'active' : ''; }}">
         <a class="nav-link" href="{{url('categories')}}">
           <i class="material-icons" style="color:red;">person</i>
           <p style="color:red;" >Categories</p>
         </a>
       </li>
       <li class="nav-item {{Request::is('add-category')? 'active' : ''; }}">
         <a class="nav-link" href="{{url('add-category')}}">
           <i class="material-icons" style="color:red;"> person </i>
           <p style="color:red;">Add Category</p>

         </a>
       </li>
       <li class="nav-item {{Request::is('Products')? 'active' : ''; }}">
         <a class="nav-link" href="{{url('Products')}}">
           <i class="material-icons" style="color:red;">library_books</i>
           <p style="color:red;">Products</p>
         </a>
       </li>
       <li class="nav-item {{Request::is('add-products')? 'active' : ''; }}">
         <a class="nav-link" href="{{url('add-products')}}">
           <i class="material-icons" style="color:red;">bubble_chart</i>
           <p style="color:red;">add-products</p>
         </a>
       </li>
       <li class="nav-item {{Request::is('Users')? 'active' : ''; }}">
         <a class="nav-link" href="{{url('Users')}}">
           <i class="material-icons" style="color:red;">person</i>
           <p style="color:red;">Users</p>
         </a>
       </li>
       <li class="nav-item {{Request::is('viewprofil')? 'active' : ''; }}">
         <a class="nav-link" href="{{url('viewprofil')}}">
           <i class="material-icons" style="color:red;">person</i>
           <p style="color:red;">Edit your profil</p>
         </a>
       </li>
       <li class="nav-item {{Request::is('orders')? 'active' : ''; }}">
         <a class="nav-link" href="{{url('orders')}}">
           <i class="material-icons" style="color:red;">language</i>
           <p style="color:red;">orders</p>
         </a>
       </li>
       <li class="nav-item {{Request::is('ratingsadmin')? 'active' : ''; }}">
         <a class="nav-link" href="{{url('ratingsadmin')}}">
           <i class="material-icons" style="color:red;">language</i>
           <p style="color:red;">Ratings</p>
         </a>
       </li>





       <li class="nav-item {{Request::is('logout')? 'active' : ''; }}">


         <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();                                                   document.getElementById('logout-form').submit();">


           <i class="material-icons" style="color:red;">person</i>
           <p style="color:red;">logout</p>
         </a>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
           @csrf
         </form>
       </li>
     </ul>

     </ul>
   </div>
 </div>
