<?php 
include "Includes/connection.php";
include "Includes/header.php"; 
?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">View All Our Mission</h3>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-2">Table</h4>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Image</th>
                            <th>Title 1</th>
                            <th>Title 2</th>
                            <th>Description 1</th>
                            <th>Description 2</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $select="SELECT * FROM `mission`";
                            $query=mysqli_query($conn , $select);
                            while($row=mysqli_fetch_assoc($query)):
                          ?>
                            <tr>
                              <td>
                                <img src="Upload/<?php echo $row['img_mission'] ?>" title="<?php echo $row['img_mission'] ?>" alt="<?php echo $row['img_mission'] ?>" height="65px" width="65px"/>
                              </td>
                              <td><?php echo $row['title_mission1'] ?></td>
                              <td><?php echo $row['description_mission1'] ?></td>
                              <td><?php echo $row['title_mission2'] ?></td>
                              <td><?php echo $row['description_mission2'] ?></td>
                              <td>
                                <a href="add_mission.php?edit_mission=<?php echo $row['id_mission']; ?>" > <i class="mdi mdi-pencil font-weight-bold" style="font-size: 18px;" title="edit"></i> </a>
                              </td>
                            </tr>
                          <?php endwhile; ?>  
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

<?php include "Includes/footer.php"; ?>