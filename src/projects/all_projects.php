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

function get_project_container($i)
{
    $project = get_project($i + 1)[0];
    $price = get_project($i + 1)[2];
    return '<figure class="hover-img">
                <a class="popup-trigger">
                    <img class="img-fluid project-img" src="' . $project . '" alt="no image? reload page">
                    <figcaption>
                        <p>Ultimate Design <span class="circle-icon"></span></p>
                    </figcaption>
                    <div class="pricetag-container">
                        <div class="top">
                          <div class="p-1">PRIJS</div>
                          <div class="price p-1">' . $price . '</div>
                        </div>
                        <div class="bottom">
                          <div class="left"></div>
                          <div class="right"></div>
                        </div>
                    </div>
                </a>
            </figure>';
}

add_project('/maxserv/Opdracht1_website/images/projects/proj_1.png', '1', '3.500,-', 'https://maxserv.com');
add_project('/maxserv/Opdracht1_website/images/projects/proj_2.png', '2', '5.450,-', 'https://maxserv.com');
add_project('/maxserv/Opdracht1_website/images/projects/proj_3.png', '3', '2.000,-', 'https://maxserv.com');
add_project('/maxserv/Opdracht1_website/images/projects/proj_4.png', '4', '7.450,-', 'https://maxserv.com');
add_project('/maxserv/Opdracht1_website/images/projects/proj_5.png', '5', '5.450,-', 'https://maxserv.com');
add_project('/maxserv/Opdracht1_website/images/projects/proj_6.png', '6', '7.000,-', 'https://maxserv.com');
add_project('/maxserv/Opdracht1_website/images/projects/proj_7.png', '7', '3.450,-', 'https://maxserv.com');
add_project('/maxserv/Opdracht1_website/images/projects/proj_8.png', '8', '5.400,-', 'https://maxserv.com');
?>

<div class="container mt-5 all_images">
    <div class="py-5">
        <a href="/maxserv/Opdracht1_website/index.php" class="py-2 px-3 custom-bg-blue text-white bold"><?= $back_button_txt ?></a>
    </div>
    <div class="row">
        <?php
        for ($i = 0; $i < 8; $i++) {
            echo '<div class="p-2 col-12 col-lg-6">' . get_project_container($i) . '</div>';
        }
        ?>
    </div>
</div>