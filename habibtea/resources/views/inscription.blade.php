<!DOCTYPE html>
<html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Registration </title>
         <link rel="stylesheet" type="text/css" href="css/inscription.css"/>
        <script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
       
    </head>
    <body>

    <div class="container">
        <h1>Registeration Form</h1>
        <form action="#" class="form">
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" placeholder="Enter full name"required/>
            </div>
            <div class="input-box">
                <label>Email Address</label>
                <input type="text" placeholder="Enter email Address"required/>
            </div>
            <div class="input-box">
                <label>Phone Number</label>
                <input type="text" placeholder="Enter phone number"required/>
            </div>

            <div class="input-box">
                <label>Birth Date</label>
                <input type="text" placeholder="Enter birth date"required/>
            </div>

            <div class="check-box">
                <input type= "checkbox" id= "Policy" name="check-box" />
                <label class="check" for="check">Privacy policy</label>
            </div>
            <div class="check-box">
                <input type= "checkbox" id= "News" name="check-box" />
                <label class="check" for="check">Newsletters</label>
            </div>
            <div class="input-box address">
                <label>Address</label>
                <input type="text" placeholder="Enter street address"required/>
                <input type="text" placeholder="Enter street address line 2"required/>
                <select>
                    <option hidden>Country</option> 
                    <option>America</option> 
                    <option>Japan</option> 
                    <option>Egypt</option> 
                    <option>France</option>
                    <option>Others</option>  
                </select>    
                <input type="text" placeholder="Enter your city"required/>
                <input type="text" placeholder="Enter your region"required/>
                <input type="text" placeholder="Enter postal code"required/>
            </div>
            <button>Sumbit</button>
        </form>
    </div>
    </section>
    
       
        <header>
        <nav class= "bannière">
                  <ul>
                    <li class="menu"><a href="X.html">Menu</a>
                    <ul class="submenu" >
                        <li><a href="inscription ">Register</a></li>
                        <li><a href="login">Login</a></li>
                        <li><a href= "">Our Bubble Teas</a></li>
                        </ul>
                    </li> 
                  
             </nav>
               
                
        
           
        </header>
        
        <footer>
            <br/> 
            <div id="footer">
                         | <a href="#">need help</a>
                        |<a href="#">conditions</a>
        </footer>
    </body>
</html>