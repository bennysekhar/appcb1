<?php
require_once ('config.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html"/>
<head>
    <title>APPCB - Proforma </title>
    <!-- web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i & amp;subset-devanagari,latin-ext">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <?php
    if(isset($_POST['create'])){
        $first_name     = $_POST['first_name'];
        $last_name      = $_POST['last_name'];
        $address        = $_POST['address'];
        $mobile         = $_POST['mobile'];
        $email          = $_POST['email'];
        $date_of_birth  = $_POST['date_of_birth'];
        $qualification  = $_POST['qualification'];
        $university     = $_POST['university'];
        $year_of_pass   = $_POST['year_of_pass'];
        $position1      = $_POST['position1'];
        $from_date      = $_POST['from_date'];
        $to_date        = $_POST['to_date'];
        $nature_of_work = $_POST['nature_of_work'];
        $position2      = $_POST['position2'];
        $since_date     = $_POST['since_date'];
        $organization   = $_POST['organization'];
        $govt           = $_POST['govt'];
        $vo_ngo         = $_POST['vo_ngo'];
        $research_institute  = $_POST['research_institute'];
        $community      = $_POST['community'];

        $sql = "INSERT INTO proforma(first_name, last_name, address,mobile,email, date_of_birth,qualification,university,year_of_pass,position1,from_date,to_date,nature_of_work,position2,since_date,organization,govt,vo_ngo, research_institute,community) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$first_name,$last_name,$address,$mobile,$email,$date_of_birth,$qualification,$university, $year_of_pass,$position1,$from_date,$to_date,$nature_of_work, $position2, $since_date,$organization,$govt,$vo_ngo,$research_institute, $community]);
         if($result){
             echo "Successful Upload.";
         }else{
             echo "There was error while saving the data.";
         }
    }
    ?>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        var items = 0;

        function add() {
            items++;

            var html="<tr>";
            //html += "<td>" + items + "</td>";
            html +="<td><input name='position1' class='form-control' style='space-around; space-between; background-color: #f4f4f4;'></td>";
            html +="<td><input name='from_date' type='date' class='form-control' style='space-around; space-between; background-color: #f4f4f4;'></td>";
            html +="<td><input name='to_date' type='date' class='form-control' style='space-around; space-between; background-color: #f4f4f4;'></td>";
            html +="<td><input name='nature_of_work' class='form-control' style='space-around; space-between; background-color: #f4f4f4;'></td>";
            html +="<td><input class='btn btn-danger' type='button' name='remove' id='remove' value='X'></td>";
            html +="</tr>";
            document.getElementById("itbody").insertRow().innerHTML =html;
            var x = 1;
            $("#add2").click(function add(){
                alert("OK");
            });
        }
    </script>

    <div>
    <form action="index.php" method="POST">
        <div class="main-top" id="home" >
            <div class="container-fluid">
                <div class="row logodiv">
                    <div class="container">
                        <img src="logo.png" class="img-responsive logoimg" style="padding-left:10%;">
                    </div>
                </div>
            </div>
        </div>
            <center.>
                <div>
                    <div class="container"
                    <div class="row">
                        <h2 class="Page_Name text-left" style="display: inline-block; word-spacing: 2px;letter-spacing: 1px; font-size: 24px;
                          margin: 13px 0px; color: #076fac;">
                      Proforma for resume of a Professional/Experts as Member of the CFE/CFO Committee
                      </h2>
                      <p class="Page_Name text-left" style="display:margin: 20px 0px;">

                             <b>1. Personal Details</b></label></p>
                      <tbody>
                          <tr id="addr0">
                              <label for="first_name">First Name*
                                  <td><input class="form-control" style=" word-spacing: 50px; white-space: pre; justify-content:space-around; space-between; background-color: #f4f4f4; width: 300px; font-size: 15px; "
                                             type="text" name="first_name" cols="40" rows="1" required></td></label>

                              <label for="last_name">Last Name*
                                  <td><input class="form-control" style=" space-around; space-between; background-color: #f4f4f4; width: 300px; font-size: 15px; "
                                             type="text" name="last_name" cols="40" rows="1" required></td></label>
                          </tr>
                      </tbody>
                         <div class="col-sm-3"></div>
                        <label for="email" >Email address
                            <td><input class="form-control" type="email" style="space-around; space-between; background-color: #f4f4f4; width: 300px;  font-size: 15px; " name="email" placeholder="name@example.com"></td></label>
                        <label for="mobile">Mobile/Telephone
                            <td><input class="form-control" style="space-around; space-between; background-color: #f4f4f4; width: 300px;  font-size: 15px;"  type="number" name="mobile" required></td></label>
                        <label for="date_of_birth">Date of Birth
                            <td><input class="form-control" style="space-around; space-between; background-color: #f4f4f4; width: 300px;   font-size: 15px; " type="date" name="date_of_birth" ></td></label>

                      <div class="col-sm-3"></div>
                       <label for="address">Address
                           <td><textarea class="form-control" id="address" name="address" rows="3" style="background-color: #f4f4f4; width: 200px; font-size: 15px; " ></textarea></td></label>

                          <div class="mb-3"></div>
                      <p class="Page_Name text-left" style="display:margin: 20px 0px;">

                          <b>2. Professional Qualification  (As per Appendix VI to the Notification) relevant to the area of expertise</b></label></p>
                        <br />
                        <div class="table-responsive">
                            <table class="table table-borderless" id="input_field">
                            <tr>
                                <td>Qualification(s)</td>
                                <td>University</td>
                                <td>Year of Passing</td>
                            </tr>
                                <td contenteditable="true" class="qualification" style="space-around; space-between; background-color: #f4f4f4;" ></td>
                                <td contenteditable="true" class="university" style="space-around; space-between; background-color: #f4f4f4;"></td>
                                <td contenteditable="true" class="year_of_pass" type='date' style="space-around; space-between; background-color: #f4f4f4;" ></td>
                                <td><button class="btn btn-primary btn-xs" type="button" id="add1" onclick="addItem();" value="Add1" >Add Qualification</button></td>
                            <tbody id="btbody"></tbody>
                            </table>
                        </div>
                        <br />
                        <div id="inserted_item_data"></div>
                        <div class="mb-3"></div>
                        <p class="Page_Name text-left" style="display:margin: 20px 0px;">

                      <b><p>3. Work experience  (relevant experience as per Appendix VI to the Notification) starting with present position</b></p>
                               <div>
                                   <tbody>
                                   <table>
                                       <tr>
                                           <td>Position/ Organization(s)</td>
                                           <td>From Date</td>
                                           <td>To Date</td>
                                           <td>Nature of work</td>
                                       </tr>
                                       <td><input name='position1' class='form-control' style='center; space-around; space-between; background-color: #f4f4f4;'></td>
                                       <td><input name='from_date' type='date' class='form-control' style='space-around; space-between; background-color: #f4f4f4;'></td>
                                       <td><input name='to_date' type='date' class='form-control' style='space-around; space-between; background-color: #f4f4f4;'></td>
                                       <td><input name='nature_of_work' class='form-control' style='space-around; space-between; background-color: #f4f4f4;'></td>
                                       <td><button class="btn btn-primary" type="button" id="add2" onclick="add();" value="Add" >Add Work Details</button></td>
                                   <tbody id="itbody"></tbody>
                                   </table>
                                   </tbody>
                               </div>
                        <div class="mb-3"></div>
                      <p class="Page_Name text-left" style="display:margin: 20px 0px;">

                      <b>4. Current Organization Affiliation(s)</b></label></p>
                          <div class="mb-3"></div>
                      <tr id="addr4"></tr>
                        <tr>
                            <label for="position2">Position/ Organization(s)
                                <td><input class="form-control" type="text" style="space-around; space-between; background-color: #f4f4f4; width: 300px; font-size: 15px; " name="position2"></td></label>
                            <label for="since_date">Working Since
                                <td><input class="form-control" type="date" style="space-around; space-between; background-color: #f4f4f4; width: 300px; font-size: 15px; " name="since_date"></td></label>
                        </tr>
                            <div class="mb-3"></div>
                      <tbody>
                      <tr id="addr4">
                          <tr>Is it Govt?
                              <td><select name="govt">
                                      <option value=" ">Select...</option>
                                      <option value="yes">Yes</option>
                                      <option value="no">No</option>
                                  </select>
                              </td>
                          <tr>
                      </tr>
                      </tbody>
                        <tbody>
                        <tr id="addr4">
                        <tr>VO / NGO ?
                            <td><select name="vo_ngo">
                                    <option value=" ">Select...</option>
                                    <option value="vo">VO</option>
                                    <option value="ngo">NGO</option>
                                </select>
                            </td>
                        <tr>
                        </tr>
                        </tbody>
                      <div class="mb-3"></div>
                      <tbody>
                      <tr id="addr4"></tr>
                      <tr> <label for="organization">Organization
                              <td><input class="form-control" type="text" style="box-decoration-break: ; justify-content:space-between; background-color: #f4f4f4; width: 300px;  font-size: 15px; " name="organization"></td></label>
                        <label for="research_institute">University / Research Institute
                            <td><input class="form-control" type="text" style="box-decoration-break: slice; justify-content:space-between; background-color: #f4f4f4; width: 300px; font-size: 15px; " name="research_institute"></td></label>
                        <label for="community">Community
                            <td><input class="form-control" type="text" style="box-decoration-break: slice; justify-content: space-between; background-color: #f4f4f4; width: 300px; font-size: 15px; " name="community"></td></label>
                      </tr>
                      </tbody>
                      <div class="mb-4"></div>

                      <div class="mb-3"></div>
                    <center>
                    <input class="btn btn-success" name="create"  type="submit" value="Submit" >
                    </center>
                    <div class="mb-3"></div>
                  </div>

             </div>
             <!-- onload modal window ends -->

             <script src="footer5.js" type="text/javascript"></script>
                <script>
                    $(document).ready(function addItem(){
                        var count = 1;
                        $('#add1').click(function addItem(){
                            count = count + 1;
                            var html1 = "<tr>";
                            html1 += "<td contenteditable='true' class='qualification' style='space-around; space-between; background-color: #f4f4f4;></td>";
                            html1 += "<td contenteditable='true' class='university' style='space-around; space-between; background-color: #f4f4f4;></td>";
                            html1 += "<td contenteditable='true' class='year_of_pass' type='date' style='space-around; space-between; background-color: #f4f4f4;></td>";
                            html1 += "<td><button class='btn btn-danger btn-xs remove' type='button' name='remove' data-row='row"+count+"'>-</button></td>";
                            html1 += "</tr>";
                            $('#input_field').append(html1);
                            alert('ok');
                        });
                    });
                </script>
                <div class="row" style="background: #0c1f38;" id="footer1">
                    <div class="footer" style="padding: 10px;color: #fff;">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-4 mt-4 mt-sm-0"><div class="footer-widget-item">
                                    <h3>Know More</h3>
                                    <ul class="footer-widget-link">
                                        <li><a href="Copyright.aspx" target="_blank"><i class="fa fa-angle-double-right"></i> Copyright Policy</a></li>
                                        <li><a href="PrivacyPolicy.aspx" target="_blank"><i class="fa fa-angle-double-right"></i> Privacy Policy</a></li></ul>
                                </div></div>
                                <div class="col-12 col-sm-6 col-lg-4 mt-4 mt-sm-0"><div class="footer-widget-item">
                                    <h3>Government Portals</h3>
                                    <ul class="footer-widget-link">
                                        <li><a href="https://www.ap.gov.in/" target="_blank"><i class="fa fa-angle-double-right"></i> AP State Portal</a></li>
                                        <li><a href="https://www.meekosam.ap.gov.in/" target="_blank"><i class="fa fa-angle-double-right"></i> Meekosam Portal</a></li>
                                        <li><a href="https://cdma.ap.gov.in/" target="_blank"><i class="fa fa-angle-double-right"></i> Municipal Administration &amp; Urban Development</a></li>
                                        <li><a href="http://www.apeprocurement.gov.in/" target="_blank"><i class="fa fa-angle-double-right"></i> AP eProcurement Portal</a></li>
                                    </ul>
                                </div></div>
                                <div class="col-12 col-sm-6 col-lg-4 mt-4 mt-sm-0"><div class="footer-widget-item">
                                    <h3>Get In Touch</h3>
                                    <ul class="footer-widget-link get_touch">
                                        <h4><i class="fa fa-map-marker"></i> Office Address</h4>
                                        <li>APPCB  D.No. 33-26-14 D/2, Near Sunrise Hospital,</li>
                                        <li style="text-align:left;">Pushpa Hotel Centre, Chalamalavari Street,</li>
                                        <li> Kasturibaipet,Vijayawada – 520 010</li>
                                        <li><i class="fa fa-phone"></i> Phone : 0866-2463200  </li>
                                    </ul>
                                </div></div>
                        </div></div>
                    <div class="col-lg-12 p-2 pt-3 text-center" style="background-color: #0c1f38;color: #fff;"</div>
                </div>
</body>

