<?php include('header.php'); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <h2 class="py-5 text-black">Customer</h2>
            <!-- Home content goes here -->         
            
            <!--MODAL-->

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark p-5" data-toggle="modal" data-target="#exampleModalLong">
            View Customer Comments  
            </button>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark p-5" data-toggle="modal" data-target="#exampleModalCenter">
            View All Customers
            </button>

            <!--QUERY Modal -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Customer Queries</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php

                        $query = "SELECT * from user_query order by timestamp_column desc";
                
                        $result =  mysqli_query($conn,$query);

                        if(!$result){
                            die("Query Failed");
                        }
                        else{
                            while($row = mysqli_fetch_assoc($result)){
                                
                                ?>

                        <div class="card border border-dark mb-5">
                            <div class="card-header">
                            <?php echo $row['customer_mail'] ?>
                            </div>
                            <div class="card-body">
                            <small class="text-black" ><?php echo $row['timestamp_column'] ?></small>
                                <h5 class="card-title"><?php echo $row['customer_name'] ?></h5>
                                <p class="card-text"><?php echo $row['customer_query'] ?></p>
                                <a href="" class="btn btn-primary">Reply</a>
                            </div>
                        </div>

                                <?php

                                
                            
                            }
                        }                        
                    
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>
        

            <!-- CUSTOMER Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Customer Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    

                <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th class="fw-bold text-black">Name</th>
            <th class="fw-bold text-black">Mail</th>
            <th class="fw-bold text-black">Password</th> 
        </tr>
    </thead>
    <tbody>

    <?php
        
        $query = "SELECT * from user_accounts";
        
        $result =  mysqli_query($conn,$query);

        if(!$result){
            die("Query Failed");
        }
        else{
            while($row = mysqli_fetch_assoc($result)){
              
                ?>

                <tr>
                    <td><?php echo $row['Uname'] ?></td>
                    <td><?php echo $row['Umail'] ?></td>
                    <td class="font-italic"><?php echo $row['Upassword'] ?></td>
                </tr>


                <?php

                
            
            }
        }
    ?>   
    </tbody>
</table>                        


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>


            </div>

        </main>
    </div>
</div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../js/app.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
</body>
</html>
