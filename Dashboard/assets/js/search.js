function Search() {
    var search = document.getElementById("search").value;

    if(search.toLowerCase()=="add about"){
        location.href="add_about.php";
        return false;
    }else if(search.toLowerCase()=="add contact"){
        location.href="add_contact.php";
        return false;
    }else if(search.toLowerCase()=="add feedback"){
        location.href="add_feedback.php";
        return false;
    }else if(search.toLowerCase()=="add footer"){
        location.href="add_footer.php";
        return false;
    }else if(search.toLowerCase()=="add gallary"){
        location.href="add_gallary.php";
        return false;
    }else if(search.toLowerCase()=="add gallary page"){
        location.href="add_gallaryInner.php";
        return false;
    }else if(search.toLowerCase()=="add grid images"){
        location.href="add_grid_imgs.php";
        return false;
    }else if(search.toLowerCase()=="add header"){
        location.href="add_header.php";
        return false;
    }else if(search.toLowerCase()=="add image"){
        location.href="add_image.php";
        return false;
    }else if(search.toLowerCase()=="add mission"){
        location.href="add_mission.php";
        return false;
    }else if(search.toLowerCase()=="add service"){
        location.href="add_service.php";
        return false;
    }else if(search.toLowerCase()=="add take look image"){
        location.href="add_Takelook_img.php";
        return false;
    }else if(search.toLowerCase()=="add take look texts"){
        location.href="add_Takelook_texts.php";
        return false;
    }else if(search.toLowerCase()=="add under image"){
        location.href="add_under_img.php";
        return false;
    }else if(search.toLowerCase()=="view about"){
        location.href="view_about.php";
        return false;
    }else if(search.toLowerCase()=="view contact"){
        location.href="view_contact.php";
        return false;
    }else if(search.toLowerCase()=="view feedback"){
        location.href="view_feedback.php";
        return false;
    }else if(search.toLowerCase()=="view footer"){
        location.href="view_footer.php";
        return false;
    }else if(search.toLowerCase()=="view form contact"){
        location.href="view_form_contact.php";
        return false;
    }else if(search.toLowerCase()=="view gallary"){
        location.href="view_gallary.php";
        return false;
    }else if(search.toLowerCase()=="view gallary page"){
        location.href="view_gallaryInner.php";
        return false;
    }else if(search.toLowerCase()=="view grid images"){
        location.href="view_grid_imgs.php";
        return false;
    }else if(search.toLowerCase()=="view header"){
        location.href="view_header.php";
        return false;
    }else if(search.toLowerCase()=="view image"){
        location.href="view_image.php";
        return false;
    }else if(search.toLowerCase()=="view mission"){
        location.href="view_mission.php";
        return false;
    }else if(search.toLowerCase()=="view service"){
        location.href="view_service.php";
        return false;
    }else if(search.toLowerCase()=="view take look images"){
        location.href="view_Takelook_imgs.php";
        return false;
    }else if(search.toLowerCase()=="view take look texts"){
        location.href="view_Takelook_texts.php";
        return false;
    }else if(search.toLowerCase()=="view under image"){
        location.href="view_under_img.php";
        return false;
    }else{
        alert("Not Found Page");
    }
}