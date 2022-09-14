<?php
$projects = array();
function add_project($img_link, $name, $price, $url)
{
    global $projects;
    $project = array($img_link, $name, $price, $url);
    $projects[] = $project;
}

function get_project($name)
{
    global $projects;
    for ($i = 0; $i < sizeof($projects); $i++) {
        if ($projects[$i][1] == $name) {
            return $projects[$i];
        }
    }
    return 'not found: "' . $name . '"';
}

add_project('/Opdracht1_website/images/projects/proj_1.png', '1', '3.500,-', 'https://maxserv.com');
add_project('/Opdracht1_website/images/projects/proj_2.png', '2', '5.450,-', 'https://maxserv.com');
add_project('/Opdracht1_website/images/projects/proj_3.png', '3', '2.000,-', 'https://maxserv.com');
add_project('/Opdracht1_website/images/projects/proj_4.png', '4', '7.450,-', 'https://maxserv.com');
add_project('/Opdracht1_website/images/projects/proj_5.png', '5', '5.450,-', 'https://maxserv.com');
add_project('/Opdracht1_website/images/projects/proj_6.png', '6', '7.000,-', 'https://maxserv.com');
add_project('/Opdracht1_website/images/projects/proj_7.png', '7', '3.450,-', 'https://maxserv.com');
add_project('/Opdracht1_website/images/projects/proj_8.png', '8', '5.400,-', 'https://maxserv.com');

//echo
//    "
//<img src='".get_project('1')[0]."'>
//<img src='".get_project('2')[0]."'>
//<img src='".get_project('3')[0]."'>
//<img src='".get_project('4')[0]."'>
//<img src='".get_project('5')[0]."'>
//<img src='".get_project('6')[0]."'>
//<img src='".get_project('7')[0]."'>
//<img src='".get_project('8')[0]."'>
//";

?>

<div class="container p-lg-5 mb-0 pb-0">
    <div class="row">
        <?php
        for ($i = 0; $i < 6; $i++) {
            $project = get_project($i + 1)[0];
            $price = get_project($i + 1)[2];
            echo '<div class="col-12 col-lg-6 p-2 m-0"><figure class="hover-img p-0"><a class="popup-trigger">';
            echo "<img class='img-fluid project-img' src='$project' alt='no image? reload page'>";
            echo '<figcaption><p>Ultimate Design <span class="circle-icon"></span></p></figcaption>';
            echo '<div class="pricetag-container">
                        <div class="top">
                          <div class="p-1">PRIJS</div>
                          <div class="price p-1">' . $price . '</div>
                        </div>
                        <div class="bottom">
                          <div class="left"></div>
                          <div class="right"></div>
                        </div>
                      </div>';
            echo '</a></figure></div>';
        }
        ?>
    </div>
</div>
