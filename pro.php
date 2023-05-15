<!DOCTYPE html>
<html>
    <head>
        <title>
            Medical
        </title>
        <style>           
            .menu{
                background-color: #2197c5;
                height: 60px;
                width: 100%;
                text-align: center;
                text-decoration: double;
                text-shadow: 10px;
                color: azure;
                font-size:xx-large;
                padding-top: 35px;
                font-weight: bold;
            }
            body{
                margin: 0px;
                padding: 0px;
                background-color: rgb(160, 203, 209);
                text-decoration: double;
            }
            .button{
                
                background-color: #0877a3;
                cursor: pointer;
                font-weight: bold;
                
                border-radius: 6rem;
                margin-top: 15px;
                text-align: center;
                margin-left: 550px;
                border-color: #063244;
            }
          .container{
                
                padding-top: 100px;
           
            }  
          
            label{
                color: #0d4f69;
                font-size: medium;
                font-weight:bolder;
            } 
            
            form{
                margin-left: 550px;
                border-radius: 10px;
                margin-top: -15px;
               
            }
            input{
                width: 200px;
                height: 27px;
                border-radius: 10px;
                text-align: center;
            

            }
            select{
                width: 209px;
                height: 36px;
                border-radius: 10px;
                text-align: center;
            
            }
            /* .warning{
                background-color: beige;
                font-size: larger;
                font-weight: bold;
            } */
          
                 
          
          
         </style>
    </head>
    <body>
        
        <div class="menu">
            E-Medicare
            
        </div>
        <div class="container">
           
            <form method="POST">
                <label>PATIENT ID<br>
                    <input type = "number" name="id" required placeholder="ID"><br><br>
                </label>
                <label>PATIENT NAME<BR>
                <input type="text"  name="name" required placeholder="Name"><br><br> 
                </label> 
                
                <label>GENDER<BR>
                    <SELECT name="gender">required 
                    <option value="MALE">MALE</option>
                    <option value="FEMALE">FEMALE</option>
                    <option value="OTHERS">OTHERS</option>
                </SELECT>
                </label><BR><BR>

                    <label>AGE<BR>
                        <input type="number" name="age" required  maxlength="2"><br><BR>    
                        </label> 
                <label>ENTER PHONE NUMBER<BR>
                <input type="phone" name="phoneNumber" placeholder="Phone Number" required  maxlength="10"><br>   <br>  
                </label>  
                <label>SPECIALIST <BR>                    
                <select name="care" >
                    <option value="Cardiologist">Cardiologist</option>
                    <option value="Psychiatrist">Psychiatrist</option>
                    <option value="Pediatrician">Pediatrician</option>
                    <option value="Orthopedic surgeon">Orthopedic surgeon</option>
                    <option value="Urologist">Urologist</option>
                    <option value="Dermatologist">Dermatologist</option>
                    <option value="Ophthalmologist">Ophthalmologist</option>
                    <option value="Pathologist">Pathologist</option>
                    <option value="Surgeon">Surgeon</option>
                    <option value="Neurologist">Neurologist</option>
                </label> 
                </select><br><br>   
                <input class="button" type="submit" name="submit" value="Register">
            </form>
        
        
        <!-- <div class="warning">
            <h3>ALERT</h3>
            <p>Doctor is not avilable.</p>
          </div>  -->


    </body>
</html>