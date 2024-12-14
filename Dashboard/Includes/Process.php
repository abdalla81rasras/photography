<?php
include "connection.php";
include "incProcess.php";

#header
if(isset($_POST['save_header'])){
	
    if(empty($_POST['name_tab'])){
       $errors['name_tab']="No Name !";
    }else{
       $name_tab = $_POST['name_tab'];
    }

    if(empty($_FILES['img_tab']['name'])){
        $errors['img_tab']="No Selected Image !";
    }else{
        $img_tab = $_FILES['img_tab']['name'];
        $img_tabTamp = $_FILES["img_tab"]["tmp_name"];
        $folderimg_tab= "Upload/" . $img_tab;
        move_uploaded_file($img_tabTamp , $folderimg_tab);
    }

    if(empty($_FILES['img_logo']['name'])){
        $errors['img_logo']="No Selected Image !";
    }else{
        $img_logo =$_FILES['img_logo']['name'];
        $img_logoTamp=$_FILES["img_logo"]["tmp_name"];
        $folderimg_logo="Upload/" . $img_logo;
        move_uploaded_file($img_logoTamp , $folderimg_logo);
    }

    if(!array_filter($errors)){
       $name_tab = mysqli_real_escape_string($conn , $_POST['name_tab']);
       $img_tab = mysqli_real_escape_string($conn , $_FILES['img_tab']['name']);
       $img_logo = mysqli_real_escape_string($conn , $_FILES['img_logo']['name']);

       $sql="UPDATE `header` SET `name_tab`='$name_tab' ,`img_tab`='$img_tab' ,`img_logo`='$img_logo'";

       if(mysqli_query($conn , $sql)){
            header("Location:view_header.php");
       }else{
            echo 'query error !' . mysqli_error($conn);
       }
    }
}

if(isset($_GET['edit_header'])){
    $id_header=$_GET['edit_header'];

    $update=true;
    $edit=true;

    $sql="SELECT * FROM `header` WHERE `id_header`='$id_header'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $name_tab = $row['name_tab'];
        $img_tab = $row['img_tab'];
        $img_logo = $row['img_logo'];
    }

    if(empty($_FILES['img_tab']['name'])){
        $errors['edit_img_tab']="Be selected Old image when updating data !!";
    }

    if(empty($_FILES['img_logo']['name'])){
        $errors['edit_img_logo']="Be selected Old image when updating data !!";
    }
}

if(isset($_POST['update_header'])){
    $id_header=$_POST['id_header'];

    $update=true;

    if(empty($_POST['name_tab'])){
       $errors['name_tab']="No Update Name !";
    }else{
       $name_tab = $_POST['name_tab'];
    }

    if(empty($_FILES['img_tab']['name'])){
        $errors['img_tab']="No update image , or the original image must be selected when updating data !!";
    }else{
        $img_tab = $_FILES['img_tab']['name'];
        $img_tabTamp = $_FILES["img_tab"]["tmp_name"];
        $folderimg_tab= "Upload/" . $img_tab;
        move_uploaded_file($img_tabTamp , $folderimg_tab);
    }

    if(empty($_FILES['img_logo']['name'])){
        $errors['img_logo']="No update image , or the original image must be selected when updating data !!";
    }else{
        $img_logo =$_FILES['img_logo']['name'];
        $img_logoTamp=$_FILES["img_logo"]["tmp_name"];
        $folderimg_logo="Upload/" . $img_logo;
        move_uploaded_file($img_logoTamp , $folderimg_logo);
    }

    if(!array_filter($errors)){
        $name_tab = mysqli_real_escape_string($conn , $_POST['name_tab']);
        $img_tab = mysqli_real_escape_string($conn , $_FILES['img_tab']['name']);
        $img_logo = mysqli_real_escape_string($conn , $_FILES['img_logo']['name']);
 
        $sql="UPDATE `header` SET `name_tab`='$name_tab' ,`img_tab`='$img_tab' ,`img_logo`='$img_logo' WHERE `id_header`= '$id_header'";
 
        if(mysqli_query($conn , $sql)){
             header("Location:view_header.php");
        }else{
             echo 'query error !' . mysqli_error($conn);
        }
    } 
}

#footer
if(isset($_POST['save_footer'])){

	if(empty($_FILES['img_footer']['name'])){
        $errors['img_footer']="No Selected Image !";
    }else{
        $img_footer = $_FILES['img_footer']['name'];
        $img_footerTamp = $_FILES["img_footer"]["tmp_name"];
        $folderimg_footer= "Upload/" . $img_footer;
        move_uploaded_file($img_footerTamp , $folderimg_footer);
    }

    if(empty($_POST['title_footer'])){
       $errors['title_footer']="No Title !";
    }else{
       $title_footer = $_POST['title_footer'];
    }

    if(empty($_POST['facebook_footer'])){
       $errors['facebook_footer']="No Link !";
    }else{
       $facebook_footer = $_POST['facebook_footer'];
    }

    if(empty($_POST['twitter_footer'])){
       $errors['twitter_footer']="No Link !";
    }else{
       $twitter_footer = $_POST['twitter_footer'];
    }

    if(empty($_POST['globe_footer'])){
       $errors['globe_footer']="No Link !";
    }else{
       $globe_footer = $_POST['globe_footer'];
    }

    if(empty($_POST['instagram_footer'])){
       $errors['instagram_footer']="No Link !";
    }else{
       $instagram_footer = $_POST['instagram_footer'];
    }
    
    if(!array_filter($errors)){
        $img_footer= mysqli_real_escape_string($conn , $_FILES['img_footer']['name']);
        $title_footer = mysqli_real_escape_string($conn , $_POST['title_footer']);
        $facebook_footer = mysqli_real_escape_string($conn , $_POST['facebook_footer']);
        $twitter_footer = mysqli_real_escape_string($conn , $_POST['twitter_footer']);
        $globe_footer = mysqli_real_escape_string($conn , $_POST['globe_footer']);
        $instagram_footer = mysqli_real_escape_string($conn , $_POST['instagram_footer']);

        $sql="UPDATE `footer` SET `img_footer`='$img_footer' ,`title_footer`='$title_footer' , `facebook_footer`='$facebook_footer' , `twitter_footer`='$twitter_footer' , `globe_footer`='$globe_footer' ,`instagram_footer`='$instagram_footer'";

        if(mysqli_query($conn , $sql)){
            header("Location:view_footer.php");
        }else{
            echo 'query error !' . mysqli_error($conn);
        }
    }
}

if(isset($_GET['edit_footer'])){
    $id_footer = $_GET['edit_footer'];

    $update=true;
    $edit=true;

    $sql="SELECT * FROM `footer` WHERE `id_footer`='$id_footer'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) { 
        $img_footer = $row['img_footer'];  
        $title_footer = $row['title_footer'];
        $facebook_footer = $row['facebook_footer'];
        $twitter_footer = $row['twitter_footer'];
        $globe_footer = $row['globe_footer'];
        $instagram_footer = $row['instagram_footer'];
    }

    if(empty($_FILES['img_footer']['name'])){
        $errors['edit_img_footer']="Be selected Old image when updating data !!";
    }
}

if(isset($_POST['update_footer'])){
    $id_footer = $_POST['id_footer'];

    $update=true;
    
    if(empty($_FILES['img_footer']['name'])){
        $errors['img_footer']="No update image , or the original image must be selected when updating data !!";
     }else{
        $img_footer =$_FILES['img_footer']['name'];
        $img_footerTamp=$_FILES["img_footer"]["tmp_name"];
        $folderimg_footer="Upload/" . $img_footer;
        move_uploaded_file($img_footerTamp , $folderimg_footer);
    }

    if(empty($_POST['title_footer'])){
       $errors['title_footer']="No Update Title !";
    }else{
       $title_footer = $_POST['title_footer'];
    }

    if(empty($_POST['facebook_footer'])){
       $errors['facebook_footer']="No Update Link !";
    }else{
       $facebook_footer = $_POST['facebook_footer'];
    }

    if(empty($_POST['twitter_footer'])){
       $errors['twitter_footer']="No Update Link !";
    }else{
       $twitter_footer = $_POST['twitter_footer'];
    }

    if(empty($_POST['globe_footer'])){
       $errors['globe_footer']="No Update Link !";
    }else{
       $globe_footer = $_POST['globe_footer'];
    }

    if(empty($_POST['instagram_footer'])){
       $errors['instagram_footer']="No Update Link !";
    }else{
       $instagram_footer = $_POST['instagram_footer'];
    }

    if(!array_filter($errors)){
        $img_footer= mysqli_real_escape_string($conn , $_FILES['img_footer']['name']);
        $title_footer = mysqli_real_escape_string($conn , $_POST['title_footer']);
        $facebook_footer = mysqli_real_escape_string($conn , $_POST['facebook_footer']);
        $twitter_footer = mysqli_real_escape_string($conn , $_POST['twitter_footer']);
        $globe_footer = mysqli_real_escape_string($conn , $_POST['globe_footer']);
        $instagram_footer = mysqli_real_escape_string($conn , $_POST['instagram_footer']);

        $sql="UPDATE `footer` SET `img_footer`='$img_footer' ,`title_footer`='$title_footer' , `facebook_footer`='$facebook_footer' , `twitter_footer`='$twitter_footer' , `globe_footer`='$globe_footer' ,`instagram_footer`='$instagram_footer' WHERE `id_footer`= '$id_footer'";

        if(mysqli_query($conn , $sql)){
            header("Location:view_footer.php");
        }else{
            echo 'query error !' . mysqli_error($conn);
        }
    } 
}

#image section home page
if(isset($_POST['save_image'])){
	
    if(empty($_POST['sub_title_image'])){
       $errors['sub_title_image']="No Sub Title !";
    }else{
       $sub_title_image = $_POST['sub_title_image'];
    }

    if(empty($_POST['title_image'])){
       $errors['title_image']="No Title !";
    }else{
       $title_image = $_POST['title_image'];
    }

    if(empty($_FILES['img_image']['name'])){
        $errors['img_image'] = "No Selected Image !";
    }else{
        $img_image = $_FILES['img_image']['name'];
        $img_imageTamp = $_FILES["img_image"]["tmp_name"];
        $folderimg_image = "Upload/" . $img_image;
        move_uploaded_file($img_imageTamp , $folderimg_image);
    }

    if(!array_filter($errors)){
        $sub_title_image = mysqli_real_escape_string($conn , $_POST['sub_title_image']);
        $title_image = mysqli_real_escape_string($conn , $_POST['title_image']);
        $img_image = mysqli_real_escape_string($conn , $_FILES['img_image']['name']);

        $sql="UPDATE `image` SET `sub_title_image`='$sub_title_image' ,`title_image`='$title_image' ,`img_image`='$img_image'";

        if(mysqli_query($conn , $sql)){
                header("Location:view_image.php");
        }else{
                echo 'query error !' . mysqli_error($conn);
        }
    }
}

if(isset($_GET['edit_image'])){
    $id_image = $_GET['edit_image'];

    $update=true;
    $edit=true;

    $sql="SELECT * FROM `image` WHERE `id_image`='$id_image'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $sub_title_image = $row['sub_title_image'];
        $title_image = $row['title_image'];
        $img_image = $row['img_image'];
    }

    if(empty($_FILES['img_image']['name'])){
        $errors['edit_img_image']="Be selected Old image when updating data !!";
    }
}

if(isset($_POST['update_image'])){
    $id_image = $_POST['id_image'];

    $update=true;

    if(empty($_POST['sub_title_image'])){
       $errors['sub_title_image']="No Update Sub Title !";
    }else{
       $sub_title_image = $_POST['sub_title_image'];
    }

    if(empty($_POST['title_image'])){
       $errors['title_image']="No Update Title !";
    }else{
       $title_image = $_POST['title_image'];
    }

    if(empty($_FILES['img_image']['name'])){
        $errors['img_image']="No update image , or the original image must be selected when updating data !!";
    }else{
        $img_image =$_FILES['img_image']['name'];
        $img_imageTamp=$_FILES["img_image"]["tmp_name"];
        $folderimg_image="Upload/" . $img_image;
        move_uploaded_file($img_imageTamp , $folderimg_image);
    }

    if(!array_filter($errors)){
       $sub_title_image = mysqli_real_escape_string($conn , $_POST['sub_title_image']);
       $title_image = mysqli_real_escape_string($conn , $_POST['title_image']);
       $img_image = mysqli_real_escape_string($conn , $_FILES['img_image']['name']);

       $sql="UPDATE `image` SET `sub_title_image`='$sub_title_image' ,`title_image`='$title_image' ,`img_image`='$img_image' WHERE `id_image`= '$id_image'";

       if(mysqli_query($conn , $sql)){
            header("Location:view_image.php");
       }else{
            echo 'query error !' . mysqli_error($conn);
       }
    } 
}

#under image section home page
if(isset($_POST['save_under_img'])){
	
    if(empty($_POST['email_under_img'])){
       $errors['email_under_img']="No Email !";
    }else{
       $email_under_img = $_POST['email_under_img'];
    }

    if(empty($_POST['name_under_img'])){
       $errors['name_under_img']="No Name !";
    }else{
       $name_under_img = $_POST['name_under_img'];
    }

    if(empty($_POST['department_under_img'])){
       $errors['department_under_img']="No Department !";
    }else{
       $department_under_img = $_POST['department_under_img'];
    }

    if(empty($_POST['major_under_img'])){
       $errors['major_under_img']="No Major !";
    }else{
       $major_under_img = $_POST['major_under_img'];
    }

    if(empty($_POST['experience_under_img'])){
       $errors['experience_under_img']="No Experience !";
    }else{
       $experience_under_img = $_POST['experience_under_img'];
    }

    if(empty($_POST['description_under_img'])){
       $errors['description_under_img']="No Description !";
    }else{
       $description_under_img = $_POST['description_under_img'];
    }

   if(!array_filter($errors)){
       $email_under_img = mysqli_real_escape_string($conn , $_POST['email_under_img']);
       $name_under_img = mysqli_real_escape_string($conn , $_POST['name_under_img']);
       $department_under_img = mysqli_real_escape_string($conn , $_POST['department_under_img']);
       $major_under_img = mysqli_real_escape_string($conn , $_POST['major_under_img']);
       $experience_under_img = mysqli_real_escape_string($conn , $_POST['experience_under_img']);
       $description_under_img = mysqli_real_escape_string($conn , $_POST['description_under_img']);

       $sql="UPDATE `under_image` SET `email_under_img`='$email_under_img' ,`name_under_img`='$name_under_img' ,`department_under_img`='$department_under_img' ,`major_under_img`='$major_under_img' ,`experience_under_img`='$experience_under_img' ,`description_under_img`='$description_under_img'";

       if(mysqli_query($conn , $sql)){
            header("Location:view_under_img.php");
       }else{
            echo 'query error !' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['edit_under_img'])){
    $id_under_img = $_GET['edit_under_img'];

    $update=true;
    $edit=true;

    $sql="SELECT * FROM `under_image` WHERE `id_under_img`='$id_under_img'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $email_under_img = $row['email_under_img'];
        $name_under_img = $row['name_under_img'];
        $department_under_img = $row['department_under_img'];
        $major_under_img = $row['major_under_img'];
        $experience_under_img = $row['experience_under_img'];
        $description_under_img = $row['description_under_img'];
    }
}

if(isset($_POST['update_under_img'])){
    $id_under_img=$_POST['id_under_img'];

    $update=true;

    if(empty($_POST['email_under_img'])){
       $errors['email_under_img']="No Update Email !";
    }else{
       $email_under_img = $_POST['email_under_img'];
    }

    if(empty($_POST['name_under_img'])){
       $errors['name_under_img']="No Update Name !";
    }else{
       $name_under_img = $_POST['name_under_img'];
    }

    if(empty($_POST['department_under_img'])){
       $errors['department_under_img']="No Update Department !";
    }else{
       $department_under_img = $_POST['department_under_img'];
    }

    if(empty($_POST['major_under_img'])){
       $errors['major_under_img']="No Update Major !";
    }else{
       $major_under_img = $_POST['major_under_img'];
    }

    if(empty($_POST['experience_under_img'])){
       $errors['experience_under_img']="No Update Experience !";
    }else{
       $experience_under_img = $_POST['experience_under_img'];
    }

    if(empty($_POST['description_under_img'])){
       $errors['description_under_img']="No Update Description !";
    }else{
       $description_under_img = $_POST['description_under_img'];
    }

    if(!array_filter($errors)){
       $email_under_img = mysqli_real_escape_string($conn , $_POST['email_under_img']);
       $name_under_img = mysqli_real_escape_string($conn , $_POST['name_under_img']);
       $department_under_img = mysqli_real_escape_string($conn , $_POST['department_under_img']);
       $major_under_img = mysqli_real_escape_string($conn , $_POST['major_under_img']);
       $experience_under_img = mysqli_real_escape_string($conn , $_POST['experience_under_img']);
       $description_under_img = mysqli_real_escape_string($conn , $_POST['description_under_img']);

       $sql="UPDATE `under_image` SET `email_under_img`='$email_under_img' ,`name_under_img`='$name_under_img' ,`department_under_img`='$department_under_img' ,`major_under_img`='$major_under_img' ,`experience_under_img`='$experience_under_img' ,`description_under_img`='$description_under_img' WHERE `id_under_img`= '$id_under_img'";

       if(mysqli_query($conn , $sql)){
            header("Location:view_under_img.php");
       }else{
            echo 'query error !' . mysqli_error($conn);
       }
    } 
}

#grid images home page
if(isset($_POST['save_grid_imgs'])){

	if(empty($_FILES['img_grid_imgs1']['name'])){
        $errors['img_grid_imgs1']="No Selected Image !";
    }else{
        $img_grid_imgs1 =$_FILES['img_grid_imgs1']['name'];
        $img_grid_imgs1Tamp=$_FILES["img_grid_imgs1"]["tmp_name"];
        $folderimg_grid_imgs1="Upload/" . $img_grid_imgs1;
        move_uploaded_file($img_grid_imgs1Tamp , $folderimg_grid_imgs1);
    }

    if(empty($_POST['title_grid_imgs1'])){
       $errors['title_grid_imgs1']="No Title !";
    }else{
       $title_grid_imgs1 = $_POST['title_grid_imgs1'];
    }

    if(empty($_POST['sub_title_grid_imgs1'])){
       $errors['sub_title_grid_imgs1']="No Sub Title !";
    }else{
       $sub_title_grid_imgs1 = $_POST['sub_title_grid_imgs1'];
    }

    if(empty($_FILES['img_grid_imgs2']['name'])){
        $errors['img_grid_imgs2']="No Selected Image !";
    }else{
        $img_grid_imgs2 =$_FILES['img_grid_imgs2']['name'];
        $img_grid_imgs2Tamp=$_FILES["img_grid_imgs2"]["tmp_name"];
        $folderimg_grid_imgs2="Upload/" . $img_grid_imgs2;
        move_uploaded_file($img_grid_imgs2Tamp , $folderimg_grid_imgs2);
    }

    if(empty($_POST['title_grid_imgs2'])){
       $errors['title_grid_imgs2']="No Title !";
    }else{
       $title_grid_imgs2 = $_POST['title_grid_imgs2'];
    }

    if(empty($_POST['sub_title_grid_imgs2'])){
       $errors['sub_title_grid_imgs2']="No Sub Title !";
    }else{
       $sub_title_grid_imgs2 = $_POST['sub_title_grid_imgs2'];
    }

    if(empty($_FILES['img_grid_imgs3']['name'])){
        $errors['img_grid_imgs3']="No Selected Image !";
    }else{
        $img_grid_imgs3 =$_FILES['img_grid_imgs3']['name'];
        $img_grid_imgs3Tamp=$_FILES["img_grid_imgs3"]["tmp_name"];
        $folderimg_grid_imgs3="Upload/" . $img_grid_imgs3;
        move_uploaded_file($img_grid_imgs3Tamp , $folderimg_grid_imgs3);
    }

    if(empty($_POST['title_grid_imgs3'])){
       $errors['title_grid_imgs3']="No Title !";
    }else{
       $title_grid_imgs3 = $_POST['title_grid_imgs3'];
    }

    if(empty($_POST['sub_title_grid_imgs3'])){
       $errors['sub_title_grid_imgs3']="No Sub Title !";
    }else{
       $sub_title_grid_imgs3 = $_POST['sub_title_grid_imgs3'];
    }

   if(!array_filter($errors)){
       $img_grid_imgs1 = mysqli_real_escape_string($conn , $_FILES['img_grid_imgs1']['name']);
       $title_grid_imgs1 = mysqli_real_escape_string($conn , $_POST['title_grid_imgs1']);
       $sub_title_grid_imgs1 = mysqli_real_escape_string($conn , $_POST['sub_title_grid_imgs1']);
       $img_grid_imgs2 = mysqli_real_escape_string($conn , $_FILES['img_grid_imgs2']['name']);
       $title_grid_imgs2 = mysqli_real_escape_string($conn , $_POST['title_grid_imgs2']);
       $sub_title_grid_imgs2 = mysqli_real_escape_string($conn , $_POST['sub_title_grid_imgs2']);
       $img_grid_imgs3 = mysqli_real_escape_string($conn , $_FILES['img_grid_imgs3']['name']);
       $title_grid_imgs3 = mysqli_real_escape_string($conn , $_POST['title_grid_imgs3']);
       $sub_title_grid_imgs3 = mysqli_real_escape_string($conn , $_POST['sub_title_grid_imgs3']);

       $sql="UPDATE `grid_imgs` SET `img_grid_imgs1`='$img_grid_imgs1' ,`title_grid_imgs1`='$title_grid_imgs1' ,`sub_title_grid_imgs1`='$sub_title_grid_imgs1' , `img_grid_imgs2`='$img_grid_imgs2' ,`title_grid_imgs2`='$title_grid_imgs2' ,`sub_title_grid_imgs2`='$sub_title_grid_imgs2' , `img_grid_imgs3`='$img_grid_imgs3' ,`title_grid_imgs3`='$title_grid_imgs3' ,`sub_title_grid_imgs3`='$sub_title_grid_imgs3'";

       if(mysqli_query($conn , $sql)){
            header("Location:view_grid_imgs.php");
       }else{
            echo 'query error !' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['edit_grid_imgs'])){
    $id_grid_imgs=$_GET['edit_grid_imgs'];

    $update=true;
    $edit=true;

    $sql="SELECT * FROM `grid_imgs` WHERE `id_grid_imgs`='$id_grid_imgs'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $img_grid_imgs1 = $row['img_grid_imgs1'];
        $title_grid_imgs1 = $row['title_grid_imgs1'];
        $sub_title_grid_imgs1 = $row['sub_title_grid_imgs1'];
        $img_grid_imgs2 = $row['img_grid_imgs2'];
        $title_grid_imgs2 = $row['title_grid_imgs2'];
        $sub_title_grid_imgs2 = $row['sub_title_grid_imgs2'];
        $img_grid_imgs3 = $row['img_grid_imgs3'];
        $title_grid_imgs3 = $row['title_grid_imgs3'];
        $sub_title_grid_imgs3 = $row['sub_title_grid_imgs3'];
    }

    if(empty($_FILES['img_grid_imgs1']['name'])){
        $errors['edit_img_grid_imgs1']="Be selected Old image when updating data !!";
    }

    if(empty($_FILES['img_grid_imgs2']['name'])){
        $errors['edit_img_grid_imgs2']="Be selected Old image when updating data !!";
    }

    if(empty($_FILES['img_grid_imgs3']['name'])){
        $errors['edit_img_grid_imgs3']="Be selected Old image when updating data !!";
    }
}

if(isset($_POST['update_grid_imgs'])){
    $id_grid_imgs=$_POST['id_grid_imgs'];

    $update=true;

    if(empty($_FILES['img_grid_imgs1']['name'])){
        $errors['img_grid_imgs1']="No update image , or the original image must be selected when updating data !!";
    }else{
        $img_grid_imgs1 =$_FILES['img_grid_imgs1']['name'];
        $img_grid_imgs1Tamp=$_FILES["img_grid_imgs1"]["tmp_name"];
        $folderimg_grid_imgs1="Upload/" . $img_grid_imgs1;
        move_uploaded_file($img_grid_imgs1Tamp , $folderimg_grid_imgs1);
    }

    if(empty($_POST['title_grid_imgs1'])){
       $errors['title_grid_imgs1']="No Update Title !";
    }else{
       $title_grid_imgs1 = $_POST['title_grid_imgs1'];
    }

    if(empty($_POST['sub_title_grid_imgs1'])){
       $errors['sub_title_grid_imgs1']="No Update Sub Title !";
    }else{
       $sub_title_grid_imgs1 = $_POST['sub_title_grid_imgs1'];
    }

    if(empty($_FILES['img_grid_imgs2']['name'])){
        $errors['img_grid_imgs2']="No update image , or the original image must be selected when updating data !!";
     }else{
        $img_grid_imgs2 =$_FILES['img_grid_imgs2']['name'];
        $img_grid_imgs2Tamp=$_FILES["img_grid_imgs2"]["tmp_name"];
        $folderimg_grid_imgs2="Upload/" . $img_grid_imgs2;
        move_uploaded_file($img_grid_imgs2Tamp , $folderimg_grid_imgs2);
    }

    if(empty($_POST['title_grid_imgs2'])){
       $errors['title_grid_imgs2']="No Update Title !";
    }else{
       $title_grid_imgs2 = $_POST['title_grid_imgs2'];
    }

    if(empty($_POST['sub_title_grid_imgs2'])){
       $errors['sub_title_grid_imgs2']="No Update Sub Title !";
    }else{
       $sub_title_grid_imgs2 = $_POST['sub_title_grid_imgs2'];
    }

    if(empty($_FILES['img_grid_imgs3']['name'])){
        $errors['img_grid_imgs3']="No update image , or the original image must be selected when updating data !!";
     }else{
        $img_grid_imgs3 =$_FILES['img_grid_imgs3']['name'];
        $img_grid_imgs3Tamp=$_FILES["img_grid_imgs3"]["tmp_name"];
        $folderimg_grid_imgs3="Upload/" . $img_grid_imgs3;
        move_uploaded_file($img_grid_imgs3Tamp , $folderimg_grid_imgs3);
    }

    if(empty($_POST['title_grid_imgs3'])){
       $errors['title_grid_imgs3']="No Update Title !";
    }else{
       $title_grid_imgs3 = $_POST['title_grid_imgs3'];
    }

    if(empty($_POST['sub_title_grid_imgs3'])){
       $errors['sub_title_grid_imgs3']="No Update Sub Title !";
    }else{
       $sub_title_grid_imgs3 = $_POST['sub_title_grid_imgs3'];
    }

    if(!array_filter($errors)){
       $img_grid_imgs1 = mysqli_real_escape_string($conn , $_FILES['img_grid_imgs1']['name']);
       $title_grid_imgs1 = mysqli_real_escape_string($conn , $_POST['title_grid_imgs1']);
       $sub_title_grid_imgs1 = mysqli_real_escape_string($conn , $_POST['sub_title_grid_imgs1']);
       $img_grid_imgs2 = mysqli_real_escape_string($conn , $_FILES['img_grid_imgs2']['name']);
       $title_grid_imgs2 = mysqli_real_escape_string($conn , $_POST['title_grid_imgs2']);
       $sub_title_grid_imgs2 = mysqli_real_escape_string($conn , $_POST['sub_title_grid_imgs2']);
       $img_grid_imgs3 = mysqli_real_escape_string($conn , $_FILES['img_grid_imgs3']['name']);
       $title_grid_imgs3 = mysqli_real_escape_string($conn , $_POST['title_grid_imgs3']);
       $sub_title_grid_imgs3 = mysqli_real_escape_string($conn , $_POST['sub_title_grid_imgs3']);

       $sql="UPDATE `grid_imgs` SET `img_grid_imgs1`='$img_grid_imgs1' ,`title_grid_imgs1`='$title_grid_imgs1' ,`sub_title_grid_imgs1`='$sub_title_grid_imgs1' , `img_grid_imgs2`='$img_grid_imgs2' ,`title_grid_imgs2`='$title_grid_imgs2' ,`sub_title_grid_imgs2`='$sub_title_grid_imgs2' , `img_grid_imgs3`='$img_grid_imgs3' ,`title_grid_imgs3`='$title_grid_imgs3' ,`sub_title_grid_imgs3`='$sub_title_grid_imgs3' WHERE `id_grid_imgs`= '$id_grid_imgs'";

       if(mysqli_query($conn , $sql)){
            header("Location:view_grid_imgs.php");
       }else{
            echo 'query error !' . mysqli_error($conn);
       }
    } 
}

#gallary section home page
if(isset($_POST['save_gallary'])){
	
    if(empty($_POST['title_gallary'])){
       $errors['title_gallary']="No Title !";
    }else{
       $title_gallary = $_POST['title_gallary'];
    }

    if(empty($_POST['sub_title_gallary'])){
       $errors['sub_title_gallary']="No Sub Title !";
    }else{
       $sub_title_gallary = $_POST['sub_title_gallary'];
    }

    if(empty($_FILES['img_gallary']['name'])){
        $errors['img_gallary']="No Selected Image !";
    }else{
        $img_gallary = $_FILES['img_gallary']['name'];
        $img_gallaryTamp = $_FILES["img_gallary"]["tmp_name"];
        $folderimg_gallary = "Upload/" . $img_gallary;
        move_uploaded_file($img_gallaryTamp , $folderimg_gallary);
    }

   if(!array_filter($errors)){
       $title_gallary = mysqli_real_escape_string($conn , $_POST['title_gallary']);
       $sub_title_gallary = mysqli_real_escape_string($conn , $_POST['sub_title_gallary']);
       $img_gallary= mysqli_real_escape_string($conn , $_FILES['img_gallary']['name']);

       $sql="INSERT INTO `gallary`(`title_gallary`,`sub_title_gallary`,`img_gallary`) VALUES('$title_gallary','$sub_title_gallary','$img_gallary')";

       if(mysqli_query($conn , $sql)){
            header("Location:view_gallary.php");
       }else{
            echo 'query error !' . mysqli_error($conn);
       }
   }
}

if(isset($_GET['delete_gallary'])){
    $id_gallary = $_GET['delete_gallary'];

    $sql="DELETE FROM `gallary` WHERE `id_gallary`='$id_gallary'";

    if(mysqli_query($conn, $sql)){

    } else {
        echo 'query error: '. mysqli_error($conn);
    }
    
    header('Location:view_gallary.php');
}

if(isset($_GET['edit_gallary'])){
    $id_gallary=$_GET['edit_gallary'];

    $update=true;
    $edit=true;

    $sql="SELECT * FROM `gallary` WHERE `id_gallary`='$id_gallary'";

    $query=mysqli_query($conn,$sql);

    while ($row=mysqli_fetch_assoc($query)) {   
        $title_gallary = $row['title_gallary'];
        $sub_title_gallary = $row['sub_title_gallary'];
        $img_gallary = $row['img_gallary'];
    }

    if(empty($_FILES['img_gallary']['name'])){
        $errors['edit_img_gallary']="Be selected Old image when updating data !!";
    }
}

if(isset($_POST['update_gallary'])){
    $id_gallary = $_POST['id_gallary'];

    $update=true;

    if(empty($_POST['title_gallary'])){
       $errors['title_gallary']="No Update Title !";
    }else{
       $title_gallary = $_POST['title_gallary'];
    }

    if(empty($_POST['sub_title_gallary'])){
       $errors['sub_title_gallary']="No Update Sub Title !";
    }else{
       $sub_title_gallary = $_POST['sub_title_gallary'];
    }

    if(empty($_FILES['img_gallary']['name'])){
        $errors['img_gallary']="No update image , or the original image must be selected when updating data !!";
    }else{
        $img_gallary =$_FILES['img_gallary']['name'];
        $img_gallaryTamp=$_FILES["img_gallary"]["tmp_name"];
        $folderimg_gallary="Upload/" . $img_gallary;
        move_uploaded_file($img_gallaryTamp , $folderimg_gallary);
    }

    if(!array_filter($errors)){
        $title_gallary = mysqli_real_escape_string($conn , $_POST['title_gallary']);
        $sub_title_gallary = mysqli_real_escape_string($conn , $_POST['sub_title_gallary']);
        $img_gallary= mysqli_real_escape_string($conn , $_FILES['img_gallary']['name']);

       $sql="UPDATE `gallary` SET `title_gallary`='$title_gallary' ,`sub_title_gallary`='$sub_title_gallary' ,`img_gallary`='$img_gallary'  WHERE `id_gallary`= '$id_gallary'";
       
       if(mysqli_query($conn , $sql)){
            header("Location:view_gallary.php");
       }else{
            echo 'query error !' . mysqli_error($conn);
       }
    } 
}

#Take a look texts section home page
if(isset($_POST['save_look_txt'])){
	
   if(empty($_POST['title_look_txt'])){
      $errors['title_look_txt']="No Title !";
   }else{
      $title_look_txt = $_POST['title_look_txt'];
   }

   if(empty($_POST['sub_title_look_txt'])){
      $errors['sub_title_look_txt']="No Sub Title !";
   }else{
      $sub_title_look_txt = $_POST['sub_title_look_txt'];
   }

   if(!array_filter($errors)){
      $title_look_txt = mysqli_real_escape_string($conn , $_POST['title_look_txt']);
      $sub_title_look_txt = mysqli_real_escape_string($conn , $_POST['sub_title_look_txt']);

      $sql="UPDATE `look_txt` SET `title_look_txt`='$title_look_txt' ,`sub_title_look_txt`='$sub_title_look_txt'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_Takelook_texts.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_look_txt'])){

   $id_look_txt=$_GET['edit_look_txt'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `look_txt` WHERE `id_look_txt`='$id_look_txt'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $title_look_txt = $row['title_look_txt'];
      $sub_title_look_txt = $row['sub_title_look_txt'];
   }
}

if(isset($_POST['update_look_txt'])){

   $id_look_txt = $_POST['id_look_txt'];

   $update=true;

   if(empty($_POST['title_look_txt'])){
      $errors['title_look_txt']="No Update Title !";
   }else{
      $title_look_txt = $_POST['title_look_txt'];
   }

   if(empty($_POST['sub_title_look_txt'])){
      $errors['sub_title_look_txt']="No Update Sub Title !";
   }else{
      $sub_title_look_txt = $_POST['sub_title_look_txt'];
   }

   if(!array_filter($errors)){
      $title_look_txt = mysqli_real_escape_string($conn , $_POST['title_look_txt']);
      $sub_title_look_txt = mysqli_real_escape_string($conn , $_POST['sub_title_look_txt']);

      $sql="UPDATE `look_txt` SET `title_look_txt`='$title_look_txt' ,`sub_title_look_txt`='$sub_title_look_txt' WHERE `id_look_txt`= '$id_look_txt'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_Takelook_texts.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      } 
   }
}

#Take a look images section home page
if(isset($_POST['save_look_imgs'])){

   if(empty($_FILES['img_look_imgs']['name'])){
      $errors['img_look_imgs']="No Selected Image !";
   }else{
      $img_look_imgs  = $_FILES['img_look_imgs']['name'];
      $img_look_imgsTamp = $_FILES["img_look_imgs"]["tmp_name"];
      $folderimg_look_imgs = "Upload/" . $img_look_imgs ;
      move_uploaded_file($img_look_imgsTamp , $folderimg_look_imgs );
   }

   if(empty($_POST['title_look_imgs'])){
      $errors['title_look_imgs']="No Title !";
   }else{
      $title_look_imgs = $_POST['title_look_imgs'];
   }

   if(empty($_POST['year_prize'])){
      $errors['year_prize']="No Year !";
   }else{
      $year_prize = $_POST['year_prize'];
   }

   if(!array_filter($errors)){
      $img_look_imgs = mysqli_real_escape_string($conn , $_FILES['img_look_imgs']['name']);
      $title_look_imgs = mysqli_real_escape_string($conn , $_POST['title_look_imgs']);
      $year_prize = mysqli_real_escape_string($conn , $_POST['year_prize']);

      $sql="INSERT INTO `look_imgs`(`img_look_imgs` , `title_look_imgs` , `year_prize`) VALUES('$img_look_imgs' , '$title_look_imgs' , '$year_prize')";

      if(mysqli_query($conn , $sql)){
         header("Location:view_Takelook_imgs.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_look_imgs'])){
   $id_look_imgs = $_GET['delete_look_imgs'];

   $sql="DELETE FROM `look_imgs` WHERE `id_look_imgs`='$id_look_imgs'";

   if(mysqli_query($conn, $sql)){

   } else {
      echo 'query error: '. mysqli_error($conn);
   }
   
   header('Location:view_Takelook_imgs.php');
}

if(isset($_GET['edit_look_imgs'])){

   $id_look_imgs = $_GET['edit_look_imgs'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `look_imgs` WHERE `id_look_imgs`='$id_look_imgs'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_look_imgs = $row['img_look_imgs'];
      $title_look_imgs = $row['title_look_imgs'];
      $year_prize = $row['year_prize'];
   }

   if(empty($_FILES['img_look_imgs']['name'])){
      $errors['edit_img_look_imgs']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_look_imgs'])){

   $id_look_imgs = $_POST['id_look_imgs'];

   $update=true;

   if(empty($_FILES['img_look_imgs']['name'])){
      $errors['img_look_imgs']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_look_imgs = $_FILES['img_look_imgs']['name'];
      $img_look_imgsTamp = $_FILES["img_look_imgs"]["tmp_name"];
      $folderimg_look_imgs = "Upload/" . $img_look_imgs ;
      move_uploaded_file($img_look_imgsTamp , $folderimg_look_imgs );
   }

   if(empty($_POST['title_look_imgs'])){
      $errors['title_look_imgs']="No Update Title !";
   }else{
      $title_look_imgs = $_POST['title_look_imgs'];
   }

   if(empty($_POST['year_prize'])){
      $errors['year_prize']="No Update Year !";
   }else{
      $year_prize = $_POST['year_prize'];
   }

   if(!array_filter($errors)){
      $img_look_imgs = mysqli_real_escape_string($conn , $_FILES['img_look_imgs']['name']);
      $title_look_imgs = mysqli_real_escape_string($conn , $_POST['title_look_imgs']);
      $year_prize = mysqli_real_escape_string($conn , $_POST['year_prize']);

      $sql="UPDATE `look_imgs` SET `img_look_imgs`='$img_look_imgs' , `title_look_imgs`='$title_look_imgs' , `year_prize`='$year_prize' WHERE `id_look_imgs`= '$id_look_imgs'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_Takelook_imgs.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

#feddback home page 
if(isset($_POST['save_feedback'])){
	
   if(empty($_POST['name_feedback'])){
      $errors['name_feedback']="No Name !";
   }else{
      $name_feedback = $_POST['name_feedback'];
   }

   if(empty($_POST['department_feedback'])){
      $errors['department_feedback']="No Department !";
   }else{
      $department_feedback = $_POST['department_feedback'];
   }

   if(empty($_POST['description_feedback'])){
      $errors['description_feedback']="No Description !";
   }else{
      $description_feedback = $_POST['description_feedback'];
   }

   if(empty($_FILES['img_feedback']['name'])){
      $errors['img_feedback']="No Selected Image !";
   }else{
      $img_feedback = $_FILES['img_feedback']['name'];
      $img_feedbackTamp = $_FILES["img_feedback"]["tmp_name"];
      $folderimg_feedback = "Upload/" . $img_feedback ;
      move_uploaded_file($img_feedbackTamp , $folderimg_feedback );
   }

   if(!array_filter($errors)){
      $name_feedback = mysqli_real_escape_string($conn , $_POST['name_feedback']);
      $department_feedback = mysqli_real_escape_string($conn , $_POST['department_feedback']);
      $description_feedback = mysqli_real_escape_string($conn , $_POST['description_feedback']);
      $img_feedback = mysqli_real_escape_string($conn , $_FILES['img_feedback']['name']);

      $sql="INSERT INTO `feedback`(`name_feedback`,`department_feedback`,`description_feedback`,`img_feedback`) VALUES('$name_feedback','$department_feedback','$description_feedback','$img_feedback')";

      if(mysqli_query($conn , $sql)){
         header("Location:view_feedback.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_feedback'])){
   $id_feedback = $_GET['delete_feedback'];

   $sql="DELETE FROM `feedback` WHERE `id_feedback`='$id_feedback'";

   if(mysqli_query($conn, $sql)){

   } else {
       echo 'query error: '. mysqli_error($conn);
   }
   
   header('Location:view_feedback.php');
}

if(isset($_GET['edit_feedback'])){

   $id_feedback = $_GET['edit_feedback'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `feedback` WHERE `id_feedback`='$id_feedback'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $name_feedback = $row['name_feedback'];
      $department_feedback = $row['department_feedback'];
      $description_feedback = $row['description_feedback'];
      $img_feedback = $row['img_feedback'];
   }

   if(empty($_FILES['img_feedback']['name'])){
      $errors['edit_img_feedback']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_feedback'])){

   $id_feedback = $_POST['id_feedback'];

   $update=true;

   if(empty($_POST['name_feedback'])){
      $errors['name_feedback']="No Update Name !";
   }else{
      $name_feedback = $_POST['name_feedback'];
   }

   if(empty($_POST['department_feedback'])){
      $errors['department_feedback']="No Update Department !";
   }else{
      $department_feedback = $_POST['department_feedback'];
   }

   if(empty($_POST['description_feedback'])){
      $errors['description_feedback']="No Update Description !";
   }else{
      $description_feedback = $_POST['description_feedback'];
   }

   if(empty($_FILES['img_feedback']['name'])){
      $errors['img_feedback']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_feedback = $_FILES['img_feedback']['name'];
      $img_feedbackTamp = $_FILES["img_feedback"]["tmp_name"];
      $folderimg_feedback = "Upload/" . $img_feedback ;
      move_uploaded_file($img_feedbackTamp , $folderimg_feedback );
   }

   if(!array_filter($errors)){
      $name_feedback = mysqli_real_escape_string($conn , $_POST['name_feedback']);
      $department_feedback = mysqli_real_escape_string($conn , $_POST['department_feedback']);
      $description_feedback = mysqli_real_escape_string($conn , $_POST['description_feedback']);
      $img_feedback = mysqli_real_escape_string($conn , $_FILES['img_feedback']['name']);

      $sql="UPDATE `feedback` SET `name_feedback`='$name_feedback' ,`department_feedback`='$department_feedback' , `description_feedback`='$description_feedback' , `img_feedback`='$img_feedback'  WHERE `id_feedback`= '$id_feedback'";

      if(mysqli_query($conn , $sql)){
         header('Location:view_feedback.php');
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

#about section about page
if(isset($_POST['save_about'])){
	
   if(empty($_POST['description_about'])){
      $errors['description_about']="No Description!";
   }else{
      $description_about = $_POST['description_about'];
   }

   if(empty($_POST['email_about'])){
      $errors['email_about']="No Email !";
   }else{
      $email_about = $_POST['email_about'];
      if(!filter_var($email_about, FILTER_VALIDATE_EMAIL)){
         $errors['email_about'] = 'Email valid !';
      }  
   }

   if(empty($_POST['name_about'])){
      $errors['name_about']="No Name !";
   }else{
      $name_about = $_POST['name_about'];
   }

   if(empty($_POST['department_about'])){
      $errors['department_about']="No Department !";
   }else{
      $department_about = $_POST['department_about'];
   }

   if(empty($_POST['major_about'])){
      $errors['major_about']="No Major !";
   }else{
      $major_about = $_POST['major_about'];
   }

   if(empty($_POST['experience_about'])){
      $errors['experience_about']="No Experience !";
   }else{
      $experience_about = $_POST['experience_about'];
   }

   if(!array_filter($errors)){
      $email_about = mysqli_real_escape_string($conn , $_POST['email_about']);
      $name_about = mysqli_real_escape_string($conn , $_POST['name_about']);
      $department_about = mysqli_real_escape_string($conn , $_POST['department_about']);
      $major_about = mysqli_real_escape_string($conn , $_POST['major_about']);
      $experience_about = mysqli_real_escape_string($conn , $_POST['experience_about']);
      $description_about = mysqli_real_escape_string($conn , $_POST['description_about']);

      $sql="UPDATE `about` SET `email_about`='$email_about' ,`name_about`='$name_about' ,`department_about`='$department_about' ,`major_about`='$major_about' ,`experience_about`='$experience_about' ,`description_about`='$description_about'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_about.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

if(isset($_GET['edit_about'])){

   $id_about = $_GET['edit_about'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `about` WHERE `id_about`='$id_about'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $email_about = $row['email_about'];
      $name_about = $row['name_about'];
      $department_about = $row['department_about'];
      $major_about = $row['major_about'];
      $experience_about = $row['experience_about'];
      $description_about = $row['description_about'];
   }
}

if(isset($_POST['update_about'])){

   $id_about = $_POST['id_about'];

   $update=true;

   if(empty($_POST['description_about'])){
      $errors['description_about']="No Update Description!";
   }else{
      $description_about = $_POST['description_about'];
   }

   if(empty($_POST['email_about'])){
      $errors['email_about']="No Update Email !";
   }else{
      $email_about = $_POST['email_about'];
      if(!filter_var($email_about, FILTER_VALIDATE_EMAIL)){
         $errors['email_about'] = 'Email valid !';
      }  
   }

   if(empty($_POST['name_about'])){
      $errors['name_about']="No Update Name !";
   }else{
      $name_about = $_POST['name_about'];
   }

   if(empty($_POST['department_about'])){
      $errors['department_about']="No Update Department !";
   }else{
      $department_about = $_POST['department_about'];
   }

   if(empty($_POST['major_about'])){
      $errors['major_about']="No Update Major !";
   }else{
      $major_about = $_POST['major_about'];
   }

   if(empty($_POST['experience_about'])){
      $errors['experience_about']="No Update Experience !";
   }else{
      $experience_about = $_POST['experience_about'];
   }

   if(!array_filter($errors)){
      $email_about = mysqli_real_escape_string($conn , $_POST['email_about']);
      $name_about = mysqli_real_escape_string($conn , $_POST['name_about']);
      $department_about = mysqli_real_escape_string($conn , $_POST['department_about']);
      $major_about = mysqli_real_escape_string($conn , $_POST['major_about']);
      $experience_about = mysqli_real_escape_string($conn , $_POST['experience_about']);
      $description_about = mysqli_real_escape_string($conn , $_POST['description_about']);

      $sql="UPDATE `about` SET `email_about`='$email_about' ,`name_about`='$name_about' ,`department_about`='$department_about' ,`major_about`='$major_about' ,`experience_about`='$experience_about' ,`description_about`='$description_about'  WHERE `id_about`= '$id_about'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_about.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

#misstion section about page
if(isset($_POST['save_mission'])){

   if(empty($_FILES['img_mission']['name'])){
      $errors['img_mission']="No Selected Image !";
   }else{
      $img_mission = $_FILES['img_mission']['name'];
      $img_missionTamp = $_FILES["img_mission"]["tmp_name"];
      $folderimg_mission = "Upload/" . $img_mission ;
      move_uploaded_file($img_missionTamp , $folderimg_mission );
   }

   if(empty($_POST['title_mission1'])){
      $errors['title_mission1']="No Title !";
   }else{
      $title_mission1 = $_POST['title_mission1'];
   }

   if(empty($_POST['description_mission1'])){
      $errors['description_mission1']="No Description !";
   }else{
      $description_mission1 = $_POST['description_mission1'];
   }

   if(empty($_POST['title_mission2'])){
      $errors['title_mission2']="No Title !";
   }else{
      $title_mission2 = $_POST['title_mission2'];
   }

   if(empty($_POST['description_mission2'])){
      $errors['description_mission2']="No Description !";
   }else{
      $description_mission2 = $_POST['description_mission2'];
   }

   if(!array_filter($errors)){
      $title_mission1 = mysqli_real_escape_string($conn , $_POST['title_mission1']);
      $description_mission1 = mysqli_real_escape_string($conn , $_POST['description_mission1']);
      $title_mission2 = mysqli_real_escape_string($conn , $_POST['title_mission2']);
      $description_mission2 = mysqli_real_escape_string($conn , $_POST['description_mission2']);
      $img_mission = mysqli_real_escape_string($conn , $_FILES['img_mission']['name']);

      $sql="UPDATE `mission` SET `img_mission`='$img_mission' , `title_mission1`='$title_mission1' , `description_mission1`='$description_mission1' , `description_mission2`='$description_mission2' , `title_mission2`='$title_mission2'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_mission.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_mission'])){

   $id_mission = $_GET['edit_mission'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `mission` WHERE `id_mission`='$id_mission'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $img_mission = $row['img_mission'];
      $title_mission1 = $row['title_mission1'];
      $description_mission1 = $row['description_mission1'];
      $title_mission2 = $row['title_mission2'];
      $description_mission2 = $row['description_mission2'];
   }

   if(empty($_FILES['img_mission']['name'])){
      $errors['edit_img_mission']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_mission'])){

   $id_mission = $_POST['id_mission'];

   $update=true;

   if(empty($_FILES['img_mission']['name'])){
      $errors['img_mission']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_mission = $_FILES['img_mission']['name'];
      $img_missionTamp = $_FILES["img_mission"]["tmp_name"];
      $folderimg_mission = "Upload/" . $img_mission ;
      move_uploaded_file($img_missionTamp , $folderimg_mission );
   }

   if(empty($_POST['title_mission1'])){
      $errors['title_mission1']="No Update Title !";
   }else{
      $title_mission1 = $_POST['title_mission1'];
   }

   if(empty($_POST['description_mission1'])){
      $errors['description_mission1']="No Update Description !";
   }else{
      $description_mission1 = $_POST['description_mission1'];
   }

   if(empty($_POST['title_mission2'])){
      $errors['title_mission2']="No Update Title !";
   }else{
      $title_mission2 = $_POST['title_mission2'];
   }

   if(empty($_POST['description_mission2'])){
      $errors['description_mission2']="No Update Description !";
   }else{
      $description_mission2 = $_POST['description_mission2'];
   }

   if(!array_filter($errors)){
      $title_mission1 = mysqli_real_escape_string($conn , $_POST['title_mission1']);
      $description_mission1 = mysqli_real_escape_string($conn , $_POST['description_mission1']);
      $title_mission2 = mysqli_real_escape_string($conn , $_POST['title_mission2']);
      $description_mission2 = mysqli_real_escape_string($conn , $_POST['description_mission2']);
      $img_mission = mysqli_real_escape_string($conn , $_FILES['img_mission']['name']);

      $sql="UPDATE `mission` SET `img_mission`='$img_mission' , `title_mission1`='$title_mission1' , `description_mission1`='$description_mission1' , `description_mission2`='$description_mission2' , `title_mission2`='$title_mission2' WHERE `id_mission`= '$id_mission'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_mission.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

#gallary section gallary page
if(isset($_POST['save_gallary_inner'])){
	
   if(empty($_POST['title_gallary_inner'])){
      $errors['title_gallary_inner']="No Title !";
   }else{
      $title_gallary_inner = $_POST['title_gallary_inner'];
   }

   if(empty($_POST['sub_title_gallary_inner'])){
      $errors['sub_title_gallary_inner']="No Sub Title !";
   }else{
      $sub_title_gallary_inner = $_POST['sub_title_gallary_inner'];
   }

   if(empty($_FILES['img_gallary_inner']['name'])){
      $errors['img_gallary_inner']="No Selected Image !";
   }else{
      $img_gallary_inner = $_FILES['img_gallary_inner']['name'];
      $img_gallary_innerTamp = $_FILES["img_gallary_inner"]["tmp_name"];
      $folderimg_gallary_inner = "Upload/" . $img_gallary_inner ;
      move_uploaded_file($img_gallary_innerTamp , $folderimg_gallary_inner );
   }

   if(!array_filter($errors)){
      $title_gallary_inner = mysqli_real_escape_string($conn , $_POST['title_gallary_inner']);
      $sub_title_gallary_inner = mysqli_real_escape_string($conn , $_POST['sub_title_gallary_inner']);
      $img_gallary_inner = mysqli_real_escape_string($conn , $_FILES['img_gallary_inner']['name']);

      $sql="INSERT INTO `gallary_inner`(`title_gallary_inner`,`sub_title_gallary_inner`,`img_gallary_inner`) VALUES('$title_gallary_inner','$sub_title_gallary_inner','$img_gallary_inner')";

      if(mysqli_query($conn , $sql)){
         header("Location:view_gallaryInner.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_gallary_inner'])){
   $id_gallary_inner = $_GET['delete_gallary_inner'];

   $sql="DELETE FROM `gallary_inner` WHERE `id_gallary_inner`='$id_gallary_inner'";

   if(mysqli_query($conn, $sql)){

   } else {
       echo 'query error: '. mysqli_error($conn);
   }
   
   header("Location:view_gallaryInner.php");
}

if(isset($_GET['edit_gallary_inner'])){

   $id_gallary_inner = $_GET['edit_gallary_inner'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `gallary_inner` WHERE `id_gallary_inner`='$id_gallary_inner'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $title_gallary_inner = $row['title_gallary_inner'];
      $sub_title_gallary_inner = $row['sub_title_gallary_inner'];
      $img_gallary_inner = $row['img_gallary_inner'];
   }

   if(empty($_FILES['img_gallary_inner']['name'])){
       $errors['edit_img_gallary_inner']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['delete_gallary_inner'])){

   $id_gallary_inner = $_POST['id_gallary_inner'];

   $update=true;

   if(empty($_POST['title_gallary_inner'])){
      $errors['title_gallary_inner']="No Update Title !";
   }else{
      $title_gallary_inner = $_POST['title_gallary_inner'];
   }

   if(empty($_POST['sub_title_gallary_inner'])){
      $errors['sub_title_gallary_inner']="No Update Sub Title !";
   }else{
      $sub_title_gallary_inner = $_POST['sub_title_gallary_inner'];
   }

   if(empty($_FILES['img_gallary_inner']['name'])){
       $errors['img_gallary_inner']="No update image , or the original image must be selected when updating data !!";
   }else{
       $img_gallary_inner = $_FILES['img_gallary_inner']['name'];
       $img_gallary_innerTamp = $_FILES["img_gallary_inner"]["tmp_name"];
       $folderimg_gallary_inner = "Upload/" . $img_gallary_inner ;
       move_uploaded_file($img_gallary_innerTamp , $folderimg_gallary_inner );
   }

   if(!array_filter($errors)){
      $title_gallary_inner = mysqli_real_escape_string($conn , $_POST['title_gallary_inner']);
      $sub_title_gallary_inner = mysqli_real_escape_string($conn , $_POST['sub_title_gallary_inner']);
      $img_gallary_inner = mysqli_real_escape_string($conn , $_FILES['img_gallary_inner']['name']);

      $sql="UPDATE `gallary_inner` SET `title_gallary_inner`='$title_gallary_inner' , `sub_title_gallary_inner`='$sub_title_gallary_inner' , `img_gallary_inner`='$img_gallary_inner'  WHERE `id_gallary_inner`= '$id_gallary_inner'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_gallaryInner.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

#Services page
if(isset($_POST['save_service'])){
	
   if(empty($_POST['title_service'])){
      $errors['title_service']="No Title !";
   }else{
      $title_service = $_POST['title_service'];
   }

   if(empty($_POST['sub_title_service'])){
      $errors['sub_title_service']="No Sub Title !";
   }else{
      $sub_title_service = $_POST['sub_title_service'];
   }

   if(empty($_FILES['img_service']['name'])){
      $errors['img_service']="No Selected Image !";
   }else{
      $img_service = $_FILES['img_service']['name'];
      $img_serviceTamp = $_FILES["img_service"]["tmp_name"];
      $folderimg_service = "Upload/" . $img_service ;
      move_uploaded_file($img_serviceTamp , $folderimg_service );
   }

   if(!array_filter($errors)){
      $title_service = mysqli_real_escape_string($conn , $_POST['title_service']);
      $sub_title_service = mysqli_real_escape_string($conn , $_POST['sub_title_service']);
      $img_service = mysqli_real_escape_string($conn , $_FILES['img_service']['name']);

      $sql="INSERT INTO `service`(`title_service`,`sub_title_service`,`img_service`) VALUES('$title_service','$sub_title_service','$img_service')";

      if(mysqli_query($conn , $sql)){
         header("Location:view_service.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['delete_service'])){
   $id_service = $_GET['delete_service'];

   $sql="DELETE FROM `service` WHERE `id_service`='$id_service'";

   if(mysqli_query($conn, $sql)){

   } else {
       echo 'query error: '. mysqli_error($conn);
   }
   
   header("Location:view_service.php");
}

if(isset($_GET['edit_service'])){

   $id_service = $_GET['edit_service'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `service` WHERE `id_service`='$id_service'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $title_service = $row['title_service'];
      $sub_title_service = $row['sub_title_service'];
      $img_service = $row['img_service'];
   }

   if(empty($_FILES['img_service']['name'])){
      $errors['edit_img_service']="Be selected Old image when updating data !!";
   }
}

if(isset($_POST['update_service'])){

   $id_service = $_POST['id_service'];

   $update=true;

   if(empty($_POST['title_service'])){
      $errors['title_service']="No Update Title !";
   }else{
      $title_service = $_POST['title_service'];
   }

   if(empty($_POST['sub_title_service'])){
      $errors['sub_title_service']="No Update Sub Title !";
   }else{
      $sub_title_service = $_POST['sub_title_service'];
   }

   if(empty($_FILES['img_service']['name'])){
      $errors['img_service']="No update image , or the original image must be selected when updating data !!";
   }else{
      $img_service = $_FILES['img_service']['name'];
      $img_serviceTamp = $_FILES["img_service"]["tmp_name"];
      $folderimg_service = "Upload/" . $img_service ;
      move_uploaded_file($img_serviceTamp , $folderimg_service );
   }

   if(!array_filter($errors)){
      $title_service = mysqli_real_escape_string($conn , $_POST['title_service']);
      $sub_title_service = mysqli_real_escape_string($conn , $_POST['sub_title_service']);
      $img_service = mysqli_real_escape_string($conn , $_FILES['img_service']['name']);

      $sql="UPDATE `service` SET `title_service`='$title_service' ,`sub_title_service`='$sub_title_service' ,`img_service`='$img_service'  WHERE `id_service`= '$id_service'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_service.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

#Contact page
if(isset($_POST['save_contact'])){
	
   if(empty($_POST['address_contact'])){
      $errors['address_contact']="No Address !";
   }else{
      $address_contact = $_POST['address_contact'];
   }

   if(empty($_POST['email_contact'])){
      $errors['email_contact']="No Email !";
   }else{
      $email_contact = $_POST['email_contact'];
      if(!filter_var($email_contact, FILTER_VALIDATE_EMAIL)){
         $errors['email_contact'] = 'Email valid !';
      }
   }

   if(empty($_POST['phone_contact'])){
      $errors['phone_contact']="No Phone Number !";
   }else{
      $phone_contact = $_POST['phone_contact'];
      if(!preg_match('/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/', $phone_contact)){
         $errors['phone_contact'] = 'Phone Number No corrent !';
      }
   }

   if(!array_filter($errors)){
      $address_contact = mysqli_real_escape_string($conn , $_POST['address_contact']);
      $email_contact = mysqli_real_escape_string($conn , $_POST['email_contact']);
      $phone_contact = mysqli_real_escape_string($conn , $_POST['phone_contact']);

      $sql="UPDATE `contact` SET `address_contact`='$address_contact' ,`email_contact`='$email_contact' ,`phone_contact`='$phone_contact'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_contact.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   }
}

if(isset($_GET['edit_contact'])){

   $id_contact = $_GET['edit_contact'];

   $update=true;
   $edit=true;

   $sql="SELECT * FROM `contact` WHERE `id_contact`='$id_contact'";

   $query=mysqli_query($conn,$sql);

   while ($row=mysqli_fetch_assoc($query)) {   
      $address_contact = $row['address_contact'];
      $email_contact = $row['email_contact'];
      $phone_contact = $row['phone_contact'];
   }
}

if(isset($_POST['update_contact'])){

   $id_contact = $_POST['id_contact'];

   $update=true;

   if(empty($_POST['address_contact'])){
      $errors['address_contact']="No Update Address !";
   }else{
      $address_contact = $_POST['address_contact'];
   }

   if(empty($_POST['email_contact'])){
      $errors['email_contact']="No Update Email !";
   }else{
      $email_contact = $_POST['email_contact'];
      if(!filter_var($email_contact, FILTER_VALIDATE_EMAIL)){
         $errors['email_contact'] = 'Email valid !';
      }
   }

   if(empty($_POST['phone_contact'])){
      $errors['phone_contact']="No Update Phone Number !";
   }else{
      $phone_contact = $_POST['phone_contact'];
      if(!preg_match('/^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$/', $phone_contact)){
         $errors['phone_contact'] = 'Phone Number No corrent !';
      }
   }

   if(!array_filter($errors)){
      $address_contact = mysqli_real_escape_string($conn , $_POST['address_contact']);
      $email_contact = mysqli_real_escape_string($conn , $_POST['email_contact']);
      $phone_contact = mysqli_real_escape_string($conn , $_POST['phone_contact']);

      $sql="UPDATE `contact` SET `address_contact`='$address_contact' ,`email_contact`='$email_contact' ,`phone_contact`='$phone_contact' WHERE `id_contact`= '$id_contact'";

      if(mysqli_query($conn , $sql)){
         header("Location:view_contact.php");
      }else{
         echo 'query error !' . mysqli_error($conn);
      }
   } 
}

#form Conact
if(isset($_GET['delete_form_contact'])){

   $id_form_contact = $_GET['delete_form_contact'];

   $sql="DELETE FROM `form_contact` WHERE `id_form_contact`='$id_form_contact'";

   if(mysqli_query($conn, $sql)){

   } else {
       echo 'query error: '. mysqli_error($conn);
   }
   
   header('Location:view_form_contact.php');
}
?>