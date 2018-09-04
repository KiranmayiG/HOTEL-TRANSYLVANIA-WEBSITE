<div id="customersignup" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content w3-round-large">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times</button>
                <h4 class="modal-title" align='center'> <b>Sign Up</b></h4>
            </div>
             <div class="modal-body">
                 <form method="post" action="custoumer_register.php" >
                <br>
                <label for="Name"> Name:</label> <input type ="text" placeholder="Name" name="Name" class="form-control">
                <br><br>
                <label for="Email">  Email:</label> <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" name="Email" class="form-control">
                <br><br>   
                <label for="Password">  Password:</label> <input type="password" pattern=".{8,}" placeholder="Minimum 8 characters" name="Password" class="form-control">
                <br><br>  
                <label for="Number"> Phone Number:</label> <input type="tel" placeholder="Number" name="Number" class="form-control">
                <br><br>
                <label for="Address"> Address:</label> <input type ="text" placeholder="Address" name="Address" class="form-control">
                <br><br>
                <label for="DOB"> DOB:</label> <input type ="date" name="DOB" class="form-control">
                <br><br>
                <center><button type ="submit" class="btn w3-btn w3-black" name="Log in">Sign Up</button></center>
                 
                </form>
      </div>
                </div>
         </div>
        </div>