<?php 
include "Includes/connection.php";
include "Includes/header.php"; 
?>

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">View All Sectiton Grid Images Home</h3>
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
                            <th>Image 1</th>
                            <th>Title 1</th>
                            <th>Sub Title 1</th>
                            <th>Image 2</th>
                            <th>Title 2</th>
                            <th>Sub Title 2</th>
                            <th>Image 3</th>
                            <th>Title 3</th>
                            <th>Sub Title 3</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $select="SELECT * FROM `grid_imgs`";
                            $query=mysqli_query($conn , $select);
                            while($row=mysqli_fetch_assoc($query)):
                          ?>
                            <tr>
                              <td>
                                <img src="Upload/<?php echo $row['img_grid_imgs1'] ?>" title="<?php echo $row['img_grid_imgs1'] ?>" alt="<?php echo $row['img_grid_imgs1'] ?>" height="65px" width="65px"/>
                              </td>
                              <td><?php echo $row['title_grid_imgs1'] ?></td>
                              <td><?php echo $row['sub_title_grid_imgs1'] ?></td>
                              <td>
                                <img src="Upload/<?php echo $row['img_grid_imgs2'] ?>" title="<?php echo $row['img_grid_imgs2'] ?>" alt="<?php echo $row['img_grid_imgs2'] ?>" height="65px" width="65px"/>
                              </td>
                              <td><?php echo $row['title_grid_imgs2'] ?></td>
                              <td><?php echo $row['sub_title_grid_imgs2'] ?></td>
                              <td>
                                <img src="Upload/<?php echo $row['img_grid_imgs3'] ?>" title="<?php echo $row['img_grid_imgs3'] ?>" alt="<?php echo $row['img_grid_imgs3'] ?>" height="65px" width="65px"/>
                              </td>
                              <td><?php echo $row['title_grid_imgs3'] ?></td>
                              <td><?php echo $row['sub_title_grid_imgs3'] ?></td>
                              <td>
                                <a href="add_grid_imgs.php?edit_grid_imgs=<?php echo $row['id_grid_imgs']; ?>" > <i class="mdi mdi-pencil font-weight-bold" style="font-size: 18px;" title="edit"></i> </a>
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