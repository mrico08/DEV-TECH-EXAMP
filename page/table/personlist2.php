<?php include("backend/connect.php")?>

<div class="card mt-3">
    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
        <h4>Person List</h4>
    </div>
    <div class="card-body pt-2 row">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Birthdate</th>                        
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Age</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Controls</th>
                        <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Controls</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $qry = mysqli_query($conn,"SELECT * FROM persons2");
                        while($row=mysqli_fetch_array($qry)){
                            ?>
                            <tr>
                                <td>
                                    <p class="text-xs text-secondary mb-0"><?php echo $row["name"];?></p>
                                </td>
                                <td>
                                    <p class="text-xs text-secondary mb-0"><?php echo $row["birthdate"];?></p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <?php
                                        $now = new DateTime();
                                        $dob = new DateTime($row["birthdate"]);
                                        $age = $dob->diff($now);
                                        echo '<p class="text-xs text-secondary mb-0">'. $age->format('%Y').'&nbsp;years old</p>';
                                    ?>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold"><?php echo $row["email"];?></span>
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex justify-content-center">
                                        <button type="button" id="<?php echo $row['id'];?>" class="btn bg-gradient-danger me-2 delete_button">Delete</button>
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" 
                                            name1="<?php echo $row["name"];?>" 
                                            id="<?php echo $row['id'];?>" 
                                            birthdate="<?php echo $row['birthdate'];?>" 
                                            email="<?php echo $row['email'];?>" 
                                            class="btn bg-gradient-info  edit_button"
                                        >
                                            Update
                                        </button>

                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("page/modal/update_record2.php")?>