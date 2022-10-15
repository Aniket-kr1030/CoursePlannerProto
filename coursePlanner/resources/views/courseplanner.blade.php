<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="offcanvas.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/offcanvas.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Course Planner </title>
    <style>
        .cont_11{
    transform: translateX(10px);
   padding-top: 10px;
   justify-content: center;
   width: max-content;
    font-weight: 500;
    font-size: large;
   
 }
 
 .three{
    
    float: left;
    margin: 1% 2.5%;
    text-align: justify;
   width: 100%;
   transform: translateY(-140px);

 }

 .c2{
    transform: translateY(10vw);



 }

 .button5 {background-color: #555555;} /* Black */
 .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  transform: translateX(35vw);
}


    </style>
</head>
<body>
    
   
    <div class="wrapper">

        
       <div class="section">
        <div class="footer">
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed, adipisci! <br> COPYRIGHT 2022 </p>
    </div>
        <div class="n1">
        
            <nav class="navbar navbar-expand-lg bg-light maincont fixing">
            <div class="container-fluid">
                
              <a class="navbar-brand logo" href="#">
                <img src="/images/rwamp_logo_v2.png" alt="Logo" width="100" height="50" class="d-inline-block align-text-top">  </a>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Courses
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Computer Science</a></li>
                          <li><a class="dropdown-item" href="#">Electronic & communication</a></li>
                          <li><a class="dropdown-item" href="#">Information Technology</a></li>
                          <li><a class="dropdown-item" href="#">Electrical </a></li>
                          <li><a class="dropdown-item" href="#">Mechanical</a></li>
                          <li><a class="dropdown-item" href="#">BioMedical</a></li>
                          
                        </ul>
                      </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Others
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            
                <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="username" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="/images/icons8-collaborator-male-30.png" alt="Logo" padding-left="5px" padding-right="30px" width="30" height="24" >
                    {{$data->name}}
                </a>
                    
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="profile"> {{$data->name}} <br> VTU{{$data->vtu}}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"> Log Out </a></li>
                      </ul>
                </div>
                        
                
              </div>
            </div>
          </nav>
        </div>
    <div class="top_navbar">
        
        
      <div class="hamburger">
        <a href="#">
          <i class="fas fa-bars"></i>
        </a>
      </div>
    </div>
    <div class="headcourseplan" style="padding: 10px;">

    <h1> What's your Pace ? </h1>
    </div>

    <div class="cont_11">
        <div class="checkbox">
        <div class="btn-group">
            <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked />
            <label class="btn btn-secondary" for="option1">Slow</label>
          
            <input type="radio" class="btn-check " name="options" id="option2" autocomplete="off" />
            <label class="btn btn-secondary" for="option2">Medium</label>
          
            <input type="radio" class="btn-check " name="options" id="option3" autocomplete="off" />
            <label class="btn btn-secondary" for="option3">Fast</label>
            
          </div>
    </div>
    </div>
    <div class="c2">
    <div class="three">
        
        <h2>Courses for You <a href="#"></a></h2>
        <form>
        <table  border="0" style="font-size:13px; width:100%; padding:2.5%;">
           <tr>
            <td>

            </td>
           </tr>
           <br>
            <tr>
               <td><strong> Select </strong></td> 
               <td><strong> Course Name </strong></td>
               <td><strong> Course ID </strong></td>
               <td><strong> Credit </strong></td>
               <td style="transform: translateX(7vw);"><strong> Schedule </strong></td>
               
               
             </tr>

             <tr>
                <td><strong> ------</strong></td> 
                <td><strong> --------------------</strong></td>
                <td><strong> -----------</strong></td>
                <td><strong> ----------- </strong></td>
                <td><strong> -------------------------------------------------- </strong></td>
                
                
              </tr>
              <tr>
                <td><strong> &nbsp;</strong></td> 
                <td><strong> &nbsp;</strong></td> 
                <td><strong> &nbsp;</strong></td> 
                <td><strong> &nbsp;</strong></td> 
                <td><strong> &nbsp;</strong></td> 
                
                
                
              </tr>
             
            <tr>
                <td><input type="checkbox"></td>

               <td> Data Structure &amp; Algorithm</td>
               <td>1151CS0241</td>
               <td> 3 </td>
               <td> Mon(01:45PM)-Thurs(11:45AM)-Fri(09:45AM) </td>
               
             </tr>
             <tr>
                <td><input type="checkbox"></td>

                <td>Programming in Python</td>
                <td>1151CS0242</td>
                <td> 2 </td>
                <td> Tue(01:45PM)-Wed(08:45AM)-Sat(02:45PM) </td>
              </tr>
             <tr>
                <td><input type="checkbox"></td>

                <td>Seminar II</td>
                <td>1151CS0251</td>
                <td> 1</td>
                <td style="transform: translateX(7vw);"> Tue(03:45PM) </td>
              </tr>
             <tr>
                <td><input type="checkbox"></td>

                <td>Operating System</td>
                <td>1151CS0222</td>
                <td> 3 </td>
                <td> Mon(02:45PM)-Wed(10:45AM)-Sat(02:45PM) </td>
              </tr>
             <tr>
                <td><input type="checkbox"></td>

                <td> Operating System Laboratory</td>
                <td>1151CS0212</td>
                <td> 1 </td>
                <td style="transform: translateX(7vw);"> Fri(10:45AM) </td>
              </tr>
             <tr>
                <td><input type="checkbox"></td>

                <td>Data Structure Laboratory</td>
                <td>1151CS0262</td>
                <td> 1 </td>
                <td style="transform: translateX(7vw);">Thurs(01:45AM) </td>
              </tr>
             
      </table>
       
      <br><br><br><br><br>
      <button class="button button5"> REGISTER </button>
        </form>

      
      <br>
     </div>


    </div>
       </div>


    <div class="sidebar">
        <div class="profile">
            <h3> {{$data->name}} </h3>
            <p>VTU{{$data->vtu}}</p>
        </div>
        <ul>
            <li>
                <a href="welcome" >
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="item">Home</span>
                </a>
            </li>
            <li>
                <a href="courseplanner" class="active">
                    <span class="icon"><i class="fas fa-user-friends"></i></span>
                    <span class="item"> Course Planner</span>
                </a>
            </li>
            <li>
                <a href="gpacalculator">
                    <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                    <span class="item"> GPA Tools</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-cog"></i></span>
                    <span class="item"> Settings </span>
                </a>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-database"></i></span>
                    <span class="item"> Others </span>
                </a>
            </li>
        </ul>
    </div>
    </div>
    
    






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script>
      var hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click", function(){
document.querySelector("body").classList.toggle("active");
})
</script>

</body>
</html>