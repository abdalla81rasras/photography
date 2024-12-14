<?php 
include "Includes/connection.php";
include "Includes/header.php";  
?>

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">View All Footer</h3>
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
                            <th>Image Logo</th>
                            <th>Title Footer</th>
                            <th>Facebook</th>
                            <th>Twitter</th>
                            <th>Globe</th>
                            <th>Instagram</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $select="SELECT * FROM `footer`";
                            $query=mysqli_query($conn , $select);
                            while($row=mysqli_fetch_assoc($query)):
                          ?>
                            <tr>
                              <td>
                                <img src="Upload/<?php echo $row['img_footer'] ?>" title="<?php echo $row['img_footer'] ?>" alt="<?php echo $row['img_footer'] ?>" height="65px" width="65px"/>
                              </td>
                              <td><?php echo $row['title_footer'] ?></td>
                              <td><?php echo $row['facebook_footer'] ?></td>
                              <td><?php echo $row['twitter_footer'] ?></td>
                              <td><?php echo $row['globe_footer'] ?></td>
                              <td><?php echo $row['instagram_footer'] ?></td>
                              <td>
                                <a href="add_footer.php?edit_footer=<?php echo $row['id_footer']; ?>" > <i class="mdi mdi-pencil font-weight-bold" style="font-size: 18px;" title="edit"></i> </a>
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