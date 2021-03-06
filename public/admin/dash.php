<?php
session_start();
include_once "../php/config.php";
$sql = "SELECT * FROM member";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
    $nid = $row['nid'];
    $fd = "SELECT * FROM first_dose WHERE id=$nid";
    $first_dose = mysqli_fetch_assoc(mysqli_query($conn, $fd));
    $sd = "SELECT * FROM second_dose WHERE id=$nid";
    $second_dose = mysqli_fetch_assoc(mysqli_query($conn, $sd));
    $vid = $row['venue'];
    $venue = mysqli_fetch_assoc(mysqli_query($conn, "SELECT name FROM venue WHERE id='$vid'"));


    echo "<tr><td>" . $row['nid'] . "</td><td>" . $row['name'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['status'] .
      "</td><td><button class='btn updatemodal' id='updatemodal' data-nid='" . $row['nid'] . "' data-name='" . $row['name'] .
      "'data-fdose='" . $first_dose['dose_date'] . "'data-fdosedone='" . $first_dose['dose_done'] .
      "'data-sdose='" . $second_dose['dose_date'] . "'data-sdosedone='" . $second_dose['dose_done'] .
      "'data-venue='" . $venue['name'] . "'data-status='" . $row['status'] .
      "'><i class='fas fa-edit'></i></button></td></tr>";
  }
} else {
  echo "Row 0";
}
mysqli_close($conn);
?>



<div class="modal fade date-warning" id="update-all" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center">
        <h4 id="name"></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick=""></button>
      </div>
      <div class="modal-body update-info">
        <form class="update-form" id="update-form" action="" method="POST" novalidate>

          <!--Birth date information-->
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-4 col-form-label">NID</label>
            <div class="col-sm-8">
              <input type="text" name="nid" id="nid" readonly class="form-control form_data" value="">
            </div>
          </div>
          <!--First Dose information-->
          <div class="mb-3 row">
            <label for="fdose" class="col-sm-4 col-form-label">First Dose Date</label>
            <div class="col-sm-2">
              <input type="text" placeholder="dd" name="fdate" id="fdate" class="form-control form_data">
            </div>
            <div class="col-sm-3">
              <select class="form-select form_data" name="fmonth" id="fmonth" aria-label="Default select example">
                <option value="">Month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
            </div>
            <div class="col-sm-3">
              <select class="form-select form_data" name="fyear" id="fyear" aria-label="Default select example">
                <option>Year</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
              </select>
            </div>
          </div>
          <!--First Dose done information-->
          <div class="mb-3 row">
            <label for="fdosedone" class="col-sm-4 col-form-label">First Dose Done</label>
            <div class="col-sm-8">
              <select class="form-select form_data" name="fdosedone" id="fdosedone" aria-label="Default select example">
                <option>Select..</option>
                <option value="0">No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </div>
          <!--Second Dose information-->
          <div class="mb-3 row">
            <label for="sdose" class="col-sm-4 col-form-label">Second Dose Date</label>
            <div class="col-sm-2">
              <input type="text" placeholder="dd" name="sdate" id="sdate" class="form-control form_data">
            </div>
            <div class="col-sm-3">
              <select class="form-select form_data" name="smonth" id="smonth" aria-label="Default select example">
                <option value="">Month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
            </div>
            <div class="col-sm-3">
              <select class="form-select form_data" name="syear" id="syear" aria-label="Default select example">
                <option selected>Year</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
              </select>
            </div>
          </div>
          <!--second Dose done information-->
          <div class="mb-3 row">
            <label for="sdosedone" class="col-sm-4 col-form-label">Second Dose Done</label>
            <div class="col-sm-8">
              <select class="form-select form_data" name="sdosedone" id="sdosedone" aria-label="Default select example">
                <option>Select..</option>
                <option value="0">No</option>
                <option value="1">Yes</option>
              </select>
            </div>
          </div>
          <!--Venue information-->
          <div class="mb-3 row">
            <label for="venue" class="col-sm-4 col-form-label">Venue</label>
            <div class="col-sm-8">
              <input type="text" name="venue" id="venue" readonly class="form-control" value="">
            </div>
          </div>
          <!--Birth date information-->
          <div class="mb-3 row">
            <label for="status" class="col-sm-4 col-form-label">Doses Done</label>
            <div class="col-sm-8">
              <input type="text" name="status" id="status" readonly class="form-control" value="">
            </div>
          </div>
          <div class="mb-3 row">
            <div class="col-sm-12" id="message">
            </div>
          </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal" id="modal-okay" onclick="">Cancel</button>
        <button class="btn btn-primary" type="button" id="submit" name="submit" onclick="update_member(); return false;">Update</button>
      </div>
    </div>
    </form>
  </div>
</div>