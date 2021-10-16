<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Custom CSS-->
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/icons/css/all.css">
    
    <title>Admin Dashboard</title>
</head>
<body>
<div class="row vh-100 mw-100 mh-100">
    <div class="h-100 m-0 left-side col-xs-1 text-white">
        <h2 class="fw-bolder">VACSYS</h2>
        <br>
        <div class="menu">

                <!-- Vertical tabs -->
        <ul class="nav nav-tabs flex-column" role="tablist">
        <li class="nav-item button">
            <a class="nav-link active" href="#members" data-bs-toggle="tab" role="tab">
            <i class="fas fa-users"></i>
            <span>All Members</span>
            </a>
        </li>
        <li class="nav-item button">
            <a class="nav-link" href="#dose1" data-bs-toggle="tab" role="tab">
            <i class="fas fa-user"></i>
            <span>Dose One Waiting</span>
            </a>
        </li>
        <li class="nav-item button">
            <a class="nav-link" href="#dose2" data-bs-toggle="tab" role="tab">
            <i class="fas fa-user-shield"></i>
            <span>Dose Two Waiting</span>
            </a>
        </li>
        <li class="nav-item button">
            <a class="nav-link" href="#complete" data-bs-toggle="tab" role="tab">
            <i class="fas fa-user-check"></i>
            <span>All Dose Done</span>
            </a>
        </li>
        <li class="nav-item button" id="logout">
            <a class="nav-link" href="#" data-bs-toggle="tab" role="tab">
            <i class="fas fa-user-check"></i>
            Log out
            </a>
        </li>
        </ul>
        </div>

    </div>

    <div class="h-100 m-25 right-side col-xs-1 text-dark">
        <div class="container">
                    <!-- Tabs content -->
        <div class="tab-content">
        <div class="tab-pane fade show active" id="members" role="tabpanel">
            <h2 align="center">All Members</h2>
            <table class="table table-striped table-hover">
                <tr>
                    <th>NID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Doses Done</th>
                    <th>Update</th>
                </tr>
                <?php
                include "php/dash.php";
                ?>
            </table>
        </div>
        <div class="tab-pane fade" id="dose1" role="tabpanel">
            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente.</p>
        </div>
        <div class="tab-pane fade" id="dose2" role="tabpanel">
            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
        </div>
        <div class="tab-pane fade" id="complete" role="tabpanel">
            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan.</p>
        </div>
        </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
$(function(){
    $(".updatemodal").click(function(){
        $('#nid').val($(this).data('nid'));
        $('#name').html($(this).data('name'));
        $('#fdose').val($(this).data('fdose'));
        $("#fdosedone").val($(this).data('fdosedone')).change();
        $('#sdose').val($(this).data('sdose'));
        $("#sdosedone").val($(this).data('sdosedone')).change();
        $('#venue').val($(this).data('venue'));
        $('#status').val($(this).data('status'));
        

        $("#update-form").modal("show");

    });
});
</script>


</body>
</html>