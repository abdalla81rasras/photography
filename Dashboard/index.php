<?php
include "Includes/connection.php";
include "Includes/header.php";
?>
        <style>
            .contents {
                display: grid;
                align-items: center;
                justify-content: center;
                min-height: 80vh;
            }

            .contents .img-logo {
                position: relative;
                display: flex;
                justify-content: center;
            }

            .contents .img-logo img {
                width: 150px;
            }

            .contents h3 {
                text-align: center;
            }
        </style>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="contents">
                <div class="row">
                    <div class="col-lg-12 grid-margin">
                        <div class="img-logo pb-4">
                            <img src="./assets/images/logo.png" alt="img">
                        </div>
                        <h3>Dashboard Photography</h3>
                    </div>
                </div>
            </div>
          </div>

<?php include "Includes/footer.php"; ?>