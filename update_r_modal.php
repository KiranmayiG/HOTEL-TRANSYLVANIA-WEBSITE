 <div id="update_room_modal" class="modal fade" role="dialog">
         <div class="modal-dialog">
            <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times</button>
                <h4 class="modal-title" align='center'> <b>Update Room Details</b></h4>
            </div>
              
             <div class="modal-body">
                 <form method="post" action = 'update_room.php' enctype="multipart/form-data" >                  
                <label for="RoomType"> Room Type :</label>
                <input type ="text" list="room_types" placeholder="Room Type" name="RoomType" class="form-control">
                <datalist id="room_types">
                  <option value="Single Room">
                  <option value="Double Room">
                  <option value="Suite Room">                                    
                </datalist>
                <br>
                <label for="Price">  Cost:</label> <input type="number"  placeholder="Price" name="Price" class="form-control">
                <br>  
                 
               <center><input type="submit" class="btn w3-black w3-btn" name="upload" value ="Update"> </center>
                </form>        
       
             </div>
            
            </div>
         </div>
        </div>


