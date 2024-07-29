<!-- <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

    custom css file link  -->
   <!--
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="enquiry-backend.php" method="post">
      <h3>register now</h3>
      ?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="StudentName"  placeholder="enter your name">
      <input type="email" name="StudentEmailId"  placeholder="enter your email">
      <input type="number" name="StudentMobileNo"  placeholder="enter your mobile">
      <input type="submit" name="submit" value="register now" class="form-btn">
   </form>

</div>

</body>
</html> -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="UTF-8">
    <title> Enquiry Form </title>
    <link rel="stylesheet" href="styles/admission.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!--Auto fill and Duplicate requisite-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="jquery-ui/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="jquery-ui\jquery-ui.min.css">
    <script src="script/username.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <!--- Start Sidebar --->
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Admission</span>
    </div>

    <ul class="nav-links">
      <li>
        <a href="enquiry.php" class="active">
          <i class='bx bx-grid-alt' ></i>
          <span class="links_name">Enquiry Form</span>
        </a> 
      </li>
      <li>
        <a href="admission.php" class="active">
          <i class='bx bx-grid-alt' ></i>
          <span class="links_name">Admission Form</span>
        </a> 
      </li>
    </ul>
  </div>
    <!--- End Sidebar --->

  
  <section class="home-section">
    <!--- Start Navbar --->
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Enquiry Form</span>
      </div>
      
    </nav>
    <!--- End Sidebar --->


    <div class="home-content">
    <div class="form-body">
      <section class="container">
        <header><b>Enquiry Form</b></header>
        <form action="enquiry-backend.php" method="post" class="form">
          <!-- Student name,mobile number,DOB -->
          <div class="column">

            <!-- Student name -->
            <div class="input-box">
              <label><b>Student's Full Name <span style="color: red;">*</span></b></label>
              <input type="text" id="StudentName" name="StudentName" placeholder="Enter full name" />
            </div>

            <!-- Student mobile number -->
            <div class="input-box">
              <label><b>Student's Mobile Number <span style="color: red;">*</span></b></label>
              <input type="number" id="StudentMobileNo" name="StudentMobileNo" placeholder="Enter phone number" required /> 
              <div id='avail'></div>
              <!-- <span style="color: red;">* This mobile number already exists</span> -->
            </div>

            <!-- date of birth -->
            <div class="input-box">
              <label><b>Date Of Birth <span style="color: red;">*</span></b></label>
              <input type="date" id="dob" name="dob" placeholder="Enter birth date"  />
            </div>
          </div>
          
          <!-- Email , Emis , Gender -->
          <div class="column">
            <div class="input-box">
              <label><b>Student's Email Address</b></label>
              <input type="text" id="StudentEmailId" name="StudentEmailId" placeholder="Enter email address"  />
            </div>

            <div class="input-box">
              <label><b>EMIS Number </b></label>
              <input type="number" id="EmisId" name="EmisId" placeholder="Enter EMIS number"/>
            </div>

            <div class="input-box">
              <label><b>Gender <span style="color: red;">*</span></b></label>
              <div class="select-box">
                <select id="Gender" name="Gender" >
                  <option hidden>gender</option>
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
            </div>

          </div>

          <!-- Father name,MobileNo,Occupation -->
          <div class="column">
            <!-- Father name -->
            <div class="input-box">
              <label><b>Father's Name <span style="color: red;">*</span></b></label>
              <input type="text" id="FatherName" name="FatherName" placeholder="Enter full name"  />
            </div>
            <!-- father mobile no -->
            <div class="input-box">
              <label><b>Father's Mobile Number <span style="color: red;">*</span></b></label>
              <input type="number" id="ParentsMobileNo" name="ParentsMobileNo" placeholder="Enter phone number" />
            </div>
            <!-- Father occupation -->
            <div class="input-box">
              <label><b>Father's Occupation</b></label>
              <div class="select-box">
                <select id="FatherOccupation" name="FatherOccupation">
                  <option hidden>Occupation</option>
                  <option>Private employee</option>
                  <option>Government employee</option>
                  <option>Self-Employed</option>
                  <option>N/A</option>
                </select>
              </div>
            </div>
          </div>

          <!-- Nationality,Religion,Community -->
          <div class="column">
            <!-- Nationality -->
            <div class="input-box">
              <label><b>Nationality</b></label>
              <div class="select-box">
                <select id="Nationality" name="Nationality">
                  <option hidden>Nationality</option>
                  <option>Indian</option>
                  <option>NRI</option>
                  <option>Other Countries</option>
                </select>
              </div>
            </div>
            <!-- Religion -->
            <div class="input-box">
              <label><b>Religion </b></label>
              <div class="select-box">
                <select id="Religion" name="Religion" >
                  <option hidden>religion</option>
                  <option>Hindu</option>
                  <option>Muslim</option>
                  <option>Christian</option>
                </select>
              </div>
            </div>
            <!-- community -->
            <div class="input-box">            
              <label><b>Community <span style="color: red;">*</span></b></label>
              <div class="select-box">
                <select id="Community" name="Community" >
                  <option hidden>Community</option>
                  <option>OC</option>
                  <option>BC</option>
                  <option>MBC</option>
                  <option>SC</option>
                  <option>ST</option>
                </select>
              </div>
            </div>
          </div>

          <!-- state,district,pincode,village -->
          <div class="column">

            <!-- state -->
            <div class="input-box">
              <label for="State"><b>State <span style="color: red;">*</span></b></label>
              <div class="select-box">
                <select id="State" name="State" >
                  <option value="">-- Select State --</option>
                </select>
              </div>
            </div>
            <!-- district -->
            <div class="input-box">
              <label for="District"><b>District <span style="color: red;">*</span></b></label>
              <div class="select-box">
                <select id="District" name="District" >
                  <option value="">-- Select One --</option>
                </select>
              </div>
            </div>
            <!-- pincode -->
            <div class="input-box">
              <label><b>PinCode</b></label>
              <input id="Pincode" type="number" name="Pincode" maxlength="6" placeholder="Enter the pincode">
            </div>
            <!-- village -->
            <div class="input-box">
              <label><b>Village</b></label>
              <input id="Village" type="text" name="Village" placeholder="Enter Your Village">
            </div>

          </div>

          <!-- District & state [JavaScript] -->
          <script>
            var stateDistricts = {
              "TamilNadu": ["Ariyalur","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kanchipuram","Kanyakumari","Karur","Krishnagiri","Madurai","Nagapattinam","Namakkal","Nilgiris","Perambalur","Pudukkottai","Ramanathapuram","Salem","Sivaganga","Thanjavur","Theni","Thoothukudi","Tiruchirappalli","Tirunelveli","Tiruppur","Tiruvallur","Tiruvannamalai","Tiruvarur","Vellore","Viluppuram","Virudhunagar"],
              "Kerala": ["Alappuzha","Ernakulam","Idukki","Kannur","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"],
              "Karnataka": ["Bagalkot","Bangalore Rural","Bangalore Urban","Belgaum","Bellary","Bidar","Vijayapura","Chamarajanagar","Chikkaballapur","Chikkamagaluru","Chitradurga","Dakshina Kannada","Davanagere","Dharwad","Gadag","Gulbarga","Hassan","Haveri","Kodagu","Kolar","Koppal","Mandya","Mysore","Raichur","Ramanagara","Shimoga","Tumkur","Udupi","Uttara Kannada","Yadgir"],
              "AndraPradesh": ["Anantapur","Chittoor","East Godavari","Guntur","Kadapa","Krishna","Kurnool","Prakasam","Nellore","Srikakulam","Visakhapatnam","Vizianagaram","West Godavari"]
          
            };
            
            $(document).ready(function () 
            {
              var stateSelect = $("#State");
              var districtSelect = $("#District");
            
              // Populate state options
              $.each(stateDistricts, function (state, districts) {
                stateSelect.append($("<option></option>").attr("value", state).text(state));
              });
            
              // On state change, populate district options
              stateSelect.change(function () 
              {
                var selectedState = $(this).val();
                var districts = stateDistricts[selectedState];
                districtSelect.empty().append("<option value=''>-- select one --</option>");
                $.each(districts, function (index, district) 
                {
                  districtSelect.append($("<option></option>").attr("value", district).text(district));
                });
              });
            });
          </script>

          <!--Seeking Admission,Approached by-->          
          <div class="column">
            <!-- Seeking Admission -->
            <div class="input-box">
              <label for="SeekingAdmission"><b>Seeking Admission For :</b></label>
              <div class="select-box">
                <select name="SeekingAdmission" id="SeekingAdmission" >
                  <option value="">-- Select --</option>
                  <option value="UG">B.E/B.TECH First Year</option>
                  <option value="LE">B.E/B.TECH Lateral</option>
                  <option value="PG">M.E/M.TECH</option>
                </select>
              </div>
            </div>
            <!-- Approached by -->
            <div class="input-box">
              <label for="Source"><b>How you know about the college? <span style="color: red;">*</span></b></label>
              <div class="select-box">
                <select name="ApproachedBy" id="ApproachedBy" onchange="showFields()" >
                  <option value="">-- Select an option --</option>
                  <option value="faculty">The staff currently working at this college</option>
                  <option value="student">Student currently studying at this college</option>
                  <option value="alumni">By Alumni</option>
                  <option value="relatives">By Relatives</option>
                  <option value="familyFriends">By Family friends</option>
                  <option value="socialMedia">By Social media</option>
                  <option value="news">By News</option>
                </select>
              </div>
            </div>

            <!-- faculty name -->
            <div id="facultyDetails" class="input-box hidden">
                <label for="facultyName"><b>Faculty Name</b></label>
                <input type="text" name="FacultyName" id="facultyName" placeholder="Enter faculty name">
            </div>
            
          </div>

          <!-- Student name,Studying Year, Department -->
          <div id="studentDetails" class="input-box hidden">
            <div class="column">
            <!-- Student name -->
              <div class="input-box">
                <label for="studentDetails"><b>Student Name</b></label>
                <input type="text" name="RecommendedStudentName" id="RecommendedStudentName" placeholder="Enter student name">
              </div>
            <!-- Studying year -->
              <div class="input-box">
                <label for="studyingYear"><b>Studying Year</b></label>                
                <div class="select-box">
                  <select id="RecommendedStudentYear" name="RecommendedStudentYear" >
                    <option value="">-- Select Year --</option>
                    <option>1st Year</option>
                    <option>2nd Year</option>
                    <option>3rd Year</option>
                    <option>4th Year</option>
                  </select>
                </div>
              </div>
              <!-- Department -->
              <div class="input-box">              
                <label for="branch"><b>Department</b></label>                
                <div class="select-box">
                  <select id="RecommendedStudentDepartment" name="RecommendedStudentDepartment" >
                    <option value="">-- Select Department --</option>
                    <option>BE Computer Science and Engineering</option>
                    <option>BE Cyber Security</option>
                    <option>BE Agriculture Engineering</option>
                    <option>BE Biomedical Engineering</option>
                    <option>BE Civil Engineering</option>
                    <option>BE Electrical and Electronics Engineering</option>
                    <option>B.Tech Information Technology</option>                  
                    <option>B.Tech Artificial Intelligence and Data Science</option>
                    <option>B.Tech Artificial Intelligence and Machine Learning</option>
                    <option>BE Electronics and Communication Engineering</option>
                    <option>B.Tech Biotechnology</option>
                    <option>B.Tech Food Technology</option>  
                  </select>
                </div>
              </div>
            </div>
          </div>         


          <script>
            function showFields() {
                var Source = document.getElementById("ApproachedBy").value;
                var facultyDetails = document.getElementById("facultyDetails");
                var studentDetails = document.getElementById("studentDetails");

                // Hide both faculty and student details initially
                facultyDetails.classList.add("hidden");
                studentDetails.classList.add("hidden");

                if (Source === "faculty") {
                    facultyDetails.classList.remove("hidden");
                } else if (Source === "student") {
                    studentDetails.classList.remove("hidden");
                }
            }
          </script>

          <!-- UG -->
          <div id="ugFields" style="display: none;">
            <br>
            <hr>
            <br>

            <label><b>10th :<span style="color: red;">*</span></b></label>

            <!-- Board,schoolname,medium of instruction,10th mark -->
            <div class="column">

              <!-- Board -->
              <div class="input-box">
                <label><b>Board </b></label>
                <div class="select-box">
                  <select name="BoardUG" >
                    <option value="">-- Select Board --</option>
                    <option>State Board</option>
                    <option>CBSE</option>
                    <option>ICSE</option>
                  </select>
                </div>
              </div>

              <!-- schoolname 10th -->
              <div class="input-box">
                <label for="schoolName10"><b>School Name(studied in 10th Std) </b></label>
                <input type="text" name="SchoolName10UG" id="SchoolName10UG" placeholder="Enter your school name" />
              </div>

              <!-- Medium of instruction 10th -->
              <div class="input-box">
                <label><b>Medium Of Instruction</b></label>
                <div class="select-box">
                  <select id="MediumOfInstruction10UG" name="MediumOfInstruction10UG" >
                    <option value="">-- Select MediumOfInstruction --</option>
                    <option>Tamil</option>
                    <option>English</option>
                  </select>
                </div>
              </div>

              <!-- TotalMarks in 10th -->
              <div class="input-box">
                <label for="tm10"><b>Total Marks(in 10th Std) <span style="color: red;">*</span></b></label>
                <input type="number" name="TotalMark10UG" id="TotalMark10UG" min="0" max="500"placeholder="Enter total Marks"  />
              </div> 
              
            </div>      

            <!-- 12th Mark -->
            <div class="input-box">
              <label><b>12th : <span style="color: red;">*</span></b></label>
            </div>

            <!-- 12th school name , 12th medium of instruction,12th group -->
            <div class="column">

              <!-- 12th school name -->
              <div class="input-box">
                <label for="schoolName12"><b>School Name(studied in 12th Std)</b></label>
                <input type="text" name="SchoolName12UG" id="SchoolName12UG" placeholder="Enter your school name" />
              </div>

              <!-- 12th Medium of instruction -->
              <div class="input-box">
                <label><b>Medium Of Instruction</b></label>
                <div class="select-box">
                  <select id="MediumOfInstruction12UG" name="MediumOfInstruction12UG" >
                    <option value="">-- Select MediumOfInstruction --</option>
                    <option>Tamil</option>
                    <option>English</option>
                  </select>
                </div>
              </div>

              <!-- 12th Group -->
              <div class="input-box">
                <label><b>12th Group <span style="color: red;">*</span></b></label>
                <div class="select-box">
                  <select id="Group12UG" name="Group12UG" >
                    <option value="">-- Select Group --</option>
                    <option>Bio-Maths</option>
                    <option>Computer science-Maths</option>
                    <option>Vocational</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- Marks in 12th subjects -->
            <div class="column"> 
              
              <!-- Maths Mark -->
              <div class="input-box">
                <label for="maths"><b>Mathematics Mark</b></label>
                <input type="number" name="MathsMark" id="MathsMark" min="0" max="100" placeholder="Enter Maths Mark" >
              </div>

              <!-- Physics Mark -->
              <div class="input-box">
                <label for="phy"><b>Physics Mark</b></label>
                <input type="number" name="PhysicsMark" id="PhysicsMark" min="0" max="100" placeholder="Enter physics Mark"  />
              </div>

              <!-- Chemistry Mark -->
              <div class="input-box">
                <label for="che"><b>Chemistry Mark</b></label>
                <input type="number" name="ChemistryMark" id="ChemistryMark" min="0" max="100" placeholder="Enter chemistry Mark"  />
              </div>

            </div>

            <!-- 12th register No, Total Marks in 12th, Cut Off -->
            <div class="column">
              
              <div class="input-box">
                <label for="registerNo"><b>12th Register Number <span style="color: red;">*</span></b></label>
                <input type="number" id="RegisterNo12" name="RegisterNo12" placeholder="Enter register number"  />
              </div>

              <div class="input-box">
                <label for="tm12"><b>Total Marks(in 12th Std) <span style="color: red;">*</span></b></label>
                <input type="number" id="TotalMark12UG" name="TotalMark12UG" min="0" max="600"placeholder="Enter total Marks"  />
              </div>

              <div class="input-box">
                <label for="co"><b>Cut Off(in 12th Std) <span style="color: red;">*</span></b></label>
                <input type="number" id="Cutoff" name="Cutoff" min="0" max="200.0"placeholder="Enter your Cutoff"  />
              </div>

            </div>

            <!-- Sports -->
            <div class="column">

              <div class="yes-box">
                <label for="sportYes"><b>Are you in sports ?</b></label>
                <div class="yes-option">
                  <div class="yes">
                    <input type="radio" id="sportYes" name="Sport" value="yes">
                    <label for="sportYes"><b>Yes</b></label>
                  </div>
                  <div class="yes">
                    <input type="radio" id="sportNo" name="Sport" value="no" checked>
                    <label for="sportNo"><b>No</b></label>
                  </div>
                </div>
              </div>      

              <div id="sportsSelection" class="hidden">
                <div class="input-box">
                  <label for="SportName"><b>Select Your Sport :</b></label>
                  <div class="select-box">
                    <select name="SportName" name = "SportName" id="sportList" required>
                      <option value="none">--Select Sport--</option>
                      <option value="football">Football</option>
                      <option value="basketball">Basketball</option>
                      <option value="tennis">Tennis</option>
                      <option value="baseball">Baseball</option>
                      <option value="handball">HandBall</option>
                      <option value="cricket">Cricket</option>                      
                      <option value="hockey">Hockey</option>
                      <option value="boxing">Boxing</option>
                      <option value="swimming">Swimming</option>                      
                      <option value="volleyball">Volleyball</option>
                      <option value="table_tennis">Table Tennis</option>
                      <option value="badminton">Badminton</option>
                    </select>
                  </div>
                </div>           
              </div>
                
              <div id="levelSelection" class="hidden">
                <div class="input-box">
                  <label for="Sportlevel"><b>Select level :</b></label>
                  <div class="select-box">
                    <select name="SportLevel" id="levelList">
                      <option value="none">--Select Level--</option>
                      <option value="district">District</option>
                      <option value="state">State</option>
                      <option value="national">National</option>
                      <option value="international">International</option>
                    </select>
                  </div>
                </div>
              </div>                       
                      
            </div>

            <!-- Department choice -->
            <br>
            <label><b>Preferred Department</b></label>
            <div class="column">

              <div class="input-box">
                <label for="ugchoice1"><b>Choice 1 <span style="color: red;">*</span></b></label>
                <div id="ugchoice1" class="select-box">
                  <select id="DeptChoice1UG" name="DeptChoice1UG">
                    <option value="">-- Select Department --</option>
                    <option>BE Mechanical Engineering</option>
                    <option>BE Computer Science and Engineering</option>
                    <option>BE Cyber Security</option>
                    <option>BE Agriculture Engineering</option>
                    <option>BE Biomedical Engineering</option>
                    <option>BE Civil Engineering</option>
                    <option>BE Electrical and Electronics Engineering</option>
                    <option>B.Tech Information Technology</option>                  
                    <option>B.Tech Artificial Intelligence and Data Science</option>
                    <option>B.Tech Artificial Intelligence and Machine Learning</option>
                    <option>BE Electronics and Communication Engineering</option>
                    <option>B.Tech Biotechnology</option>
                    <option>B.Tech Food Technology</option>                
                  </select>
                </div>
              </div>

              <div class="input-box">
                <label for="ugchoice2"><b>Choice 2 <span style="color: red;">*</span></b></label>
                <div class="select-box">
                  <select name="DeptChoice2UG" id="DeptChoice2UG" >
                    <option value="">-- Select Department --</option>
                    <option>BE Mechanical Engineering</option>
                    <option>BE Computer Science and Engineering</option>
                    <option>BE Cyber Security</option>
                    <option>BE Agriculture Engineering</option>
                    <option>BE Biomedical Engineering</option>
                    <option>BE Civil Engineering</option>
                    <option>BE Electrical and Electronics Engineering</option>
                    <option>B.Tech Information Technology</option>                  
                    <option>B.Tech Artificial Intelligence and Data Science</option>
                    <option>B.Tech Artificial Intelligence and Machine Learning</option>
                    <option>BE Electronics and Communication Engineering</option>
                    <option>B.Tech Biotechnology</option>
                    <option>B.Tech Food Technology</option>
                  </select>
                </div>
              </div>

              <div class="input-box">
                <label for="ugchoice3"><b>Choice 3</b></label>
                <div class="select-box">
                  <select name="DeptChoice3UG" id="DeptChoice3UG">
                    <option value="">-- Select Department --</option>
                    <option>BE Mechanical Engineering</option>
                    <option>BE Computer Science and Engineering</option>
                    <option>BE Cyber Security</option>
                    <option>BE Agriculture Engineering</option>
                    <option>BE Biomedical Engineering</option>
                    <option>BE Civil Engineering</option>
                    <option>BE Electrical and Electronics Engineering</option>
                    <option>B.Tech Information Technology</option>                  
                    <option>B.Tech Artificial Intelligence and Data Science</option>
                    <option>B.Tech Artificial Intelligence and Machine Learning</option>
                    <option>BE Electronics and Communication Engineering</option>
                    <option>B.Tech Biotechnology</option>
                    <option>B.Tech Food Technology</option>
                  </select>
                </div>
              </div>

            </div>

            <!-- Sports Java Script -->
            <script>
              const sportYes = document.getElementById('sportYes');
              const sportsSelection = document.getElementById('sportsSelection');
              const levelSelection = document.getElementById('levelSelection');
          
              sportYes.addEventListener('change', function() {
                if (sportYes.checked) {
                  sportsSelection.classList.remove('hidden');
                } else {
                  sportsSelection.classList.add('hidden');
                  levelSelection.classList.add('hidden');
                }
              });
          
              const sportList = document.getElementById('sportList');
              const levelList = document.getElementById('levelList');
          
              sportList.addEventListener('change', function() {
                if (sportList.value !== 'none') {
                  levelSelection.classList.remove('hidden');
                } else {
                  levelSelection.classList.add('hidden');
                }
              });
            </script> 
            <!-- End Sports -->

          </div>

          <!-- Lateral -->
          <div id="leFields" style="display: none;">

            <br>
            <hr>

            <div class="input-box">
              <label><b>10th : <span style="color: red;">*</span></b></label>
            </div>            

            <div class="column">
              
              <div class="input-box">
                <label><b>Board </b></label>
                <div class="select-box">
                  <select name="BoardLE" >
                    <option value="">-- Select Board --</option>
                    <option>State Board</option>
                    <option>CBSE</option>
                    <option>ICSE</option>
                  </select>
                </div>
              </div>

              <div class="input-box">
                <label for="schoolName10"><b>School Name(studied in 10th Std) </b></label>
                <input name="SchoolName10" type="text" id="SchoolName10" placeholder="Enter your school name" />
              </div>

              <div class="input-box">
                <label><b>Medium Of Instruction</b></label>
                <div class="select-box">
                  <select name="MediumOfInstruction10LE" >
                    <option value="">-- Select MediumOfInstruction --</option>
                    <option>Tamil</option>
                    <option>English</option>
                  </select>
                </div>
              </div>

              <div class="input-box">
                <label for="tm10"><b>Total Marks(in 10th Std) <span style="color: red;">*</span></b></label>
                <input type="number" id="TotalMark10LE" name="TotalMark10LE" min="0" max="500"placeholder="Enter total Marks"  />
              </div>

            </div>

            <div class="input-box">
              <label><b>12th : </b></label>
            </div>

            <div class="column">

              <div class="input-box">
                <label for="schoolName12"><b>School Name(studied in 12th Std)</b></label>
                <input name="SchoolName12LE" type="text" id="SchoolName12LE" placeholder="Enter your school name" />
              </div>

              <div class="input-box">
                <label><b>Medium Of Instruction</b></label>
                <div class="select-box">
                  <select name="MediumOfInstruction12LE" >
                    <option value="">-- Select MediumOfInstruction --</option>
                    <option>Tamil</option>
                    <option>English</option>
                  </select>
                </div>
              </div>

              <div class="input-box">
                <label><b>12th Group </b></label>
                <div class="select-box">
                  <select name="Group12LE" >
                    <option value="">-- Select Group --</option>
                    <option>Bio-Maths</option>
                    <option>Computer science-Maths</option>
                    <option>Vocational</option>
                  </select>
                </div>
              </div>

              <div class="input-box">
                <label for="tm12"><b>Total Marks(in 12th std) </b></label>
                <input type="number" id="TotalMark12LE" name="TotalMark12LE" min="0" max="600"placeholder="Enter total Marks"  />
              </div>

            </div>

            <div class="input-box">
              <label><b>Diploma :<span style="color: red;">*</span></b></label>
            </div>

            <!-- Diploma [nameofinstitution,percentage,course name] -->
            <div class="column">

              <div class="input-box">
                <label><b>Name Of the Institution </b></label>
                <input name="NameOfInstitution" type="text" placeholder="Enter your Institute name" />
              </div>

              <div class="input-box">
                <label for="coursename"><b>Name Of the Diploma Course </b></label>
                <input name="NameOfDiplomaCourse" type="text" id="coursename" placeholder="Enter your Course name" />
              </div>

              <div class="input-box">
                <label for="dipmark"><b>Percentage Scored in Diploma <span style="color: red;">*</span></b></label>
                <input type="number" step="any" id="dipmark" name="PercentageDiploma" min="0" max="100"placeholder="Enter your percentage"  />
              </div>

            </div>

            <br>
            <label><b>Preferred Department</b></label>
            <div class="column">

              <div class="input-box">
                <label for="ugchoice1"><b>Choice 1 <span style="color: red;">*</span></b></label>
                <div id="ugchoice1" class="select-box">
                  <select id="DeptChoice1LE" name="DeptChoice1LE" >
                    <option value="">-- Select Department --</option>
                    <option>BE Mechanical Engineering</option>
                    <option>BE Computer Science and Engineering</option>
                    <option>BE Cyber Security</option>
                    <option>BE Agriculture Engineering</option>
                    <option>BE Biomedical Engineering</option>
                    <option>BE Civil Engineering</option>
                    <option>BE Electrical and Electronics Engineering</option>
                    <option>B.Tech Information Technology</option>                  
                    <option>B.Tech Artificial Intelligence and Data Science</option>
                    <option>B.Tech Artificial Intelligence and Machine Learning</option>
                    <option>BE Electronics and Communication Engineering</option>
                    <option>B.Tech Biotechnology</option>
                    <option>B.Tech Food Technology</option>                
                  </select>
                </div>
              </div>

              <div class="input-box">
                <label for="ugchoice2"><b>Choice 2 <span style="color: red;">*</span></b></label>
                <div class="select-box">
                  <select name="DeptChoice2LE" id="DeptChoice2LE">
                    <option value="">-- Select Department --</option>
                    <option>BE Mechanical Engineering</option>
                    <option>BE Computer Science and Engineering</option>
                    <option>BE Cyber Security</option>
                    <option>BE Agriculture Engineering</option>
                    <option>BE Biomedical Engineering</option>
                    <option>BE Civil Engineering</option>
                    <option>BE Electrical and Electronics Engineering</option>
                    <option>B.Tech Information Technology</option>                  
                    <option>B.Tech Artificial Intelligence and Data Science</option>
                    <option>B.Tech Artificial Intelligence and Machine Learning</option>
                    <option>BE Electronics and Communication Engineering</option>
                    <option>B.Tech Biotechnology</option>
                    <option>B.Tech Food Technology</option>
                  </select>
                </div>
              </div>

              <div class="input-box">
                <label for="ugchoice3"><b>Choice 3</b></label>
                <div class="select-box">
                  <select name="DeptChoice3LE" id="DeptChoice3LE">
                    <option value="">-- Select Department --</option>
                    <option>BE Mechanical Engineering</option>
                    <option>BE Computer Science and Engineering</option>
                    <option>BE Cyber Security</option>
                    <option>BE Agriculture Engineering</option>
                    <option>BE Biomedical Engineering</option>
                    <option>BE Civil Engineering</option>
                    <option>BE Electrical and Electronics Engineering</option>
                    <option>B.Tech Information Technology</option>                  
                    <option>B.Tech Artificial Intelligence and Data Science</option>
                    <option>B.Tech Artificial Intelligence and Machine Learning</option>
                    <option>BE Electronics and Communication Engineering</option>
                    <option>B.Tech Biotechnology</option>
                    <option>B.Tech Food Technology</option>
                  </select>
                </div>
              </div>
              
            </div>

          </div>     

          <!-- Post Graduate -->
          <div id="pgFields" style="display: none;">

            <br>
            <hr>

            <div class="input-box">
              <label><b>10th : <span style="color: red;">*</span></b></label>
            </div>            

            <div class="column">
              <div class="input-box">
                <label><b>Board </b></label>
                <div class="select-box">
                  <select name="BoardPG" >
                    <option value="">-- Select Board --</option>
                    <option>State Board</option>
                    <option>CBSE</option>
                    <option>ICSE</option>
                  </select>
                </div>
              </div>

              <div class="input-box">
                <label for="schoolName10"><b>School Name(studied in 10th Std) </b></label>
                <input type="text" name="SchoolName10" id="SchoolName10" placeholder="Enter your school name" />
              </div>

              <div class="input-box">
                <label><b>Medium Of Instruction</b></label>
                <div class="select-box">
                  <select id="MediumOfInstruction10PG" name="MediumOfInstruction10PG" >
                    <option value="">-- Select MediumOfInstruction --</option>
                    <option>Tamil</option>
                    <option>English</option>
                  </select>
                </div>
              </div>

              <div class="input-box">
                <label for="tm10"><b>Total Marks(in 10th Std) <span style="color: red;">*</span></b></label>
                <input type="number" id="TotalMark10PG" name="TotalMark10PG" min="0" max="500"placeholder="Enter total Marks"  />
              </div>

            </div>

            <div class="input-box">
              <label><b>12th :<span style="color: red;">*</span> </b></label>
            </div>

            <div class="column">
              <div class="input-box">
                <label for="schoolName12"><b>School Name(studied in 12th Std)</b></label>
                <input type="text" name="SchoolName12PG" id="SchoolName12PG" placeholder="Enter your school name" />
              </div>

              <div class="input-box">
                <label><b>Medium Of Instruction</b></label>
                <div class="select-box">
                  <select id="MediumOfInstruction12PG" name="MediumOfInstruction12PG" >
                    <option value="">-- Select MediumOfInstruction --</option>
                    <option>Tamil</option>
                    <option>English</option>
                  </select>
                </div>
              </div>

              <div class="input-box">
                <label><b>12th Group </b></label>
                <div class="select-box">
                  <select id="Group12PG" name="Group12PG" >
                    <option value="">-- Select Group --</option>
                    <option>Bio-Maths</option>
                    <option>Computer science-Maths</option>
                    <option>Vocational</option>
                  </select>
                </div>
              </div>

              <div class="input-box">
                <label for="tm12"><b>Total Marks(in 12th std) </b></label>
                <input type="number" id="TotalMark12PG" name="TotalMark12PG" min="0" max="600"placeholder="Enter total Marks"  />
              </div>
            </div>

            <div class="input-box">
              <label><b>Bachelor's Degree : <span style="color: red;">*</span></b></label>
            </div>

            <div class="column">              
              <div class="input-box">
                <label for="instituteName"><b>Name Of the College </b></label>
                <input type="text" name="NameOfTheCollege" id="NameOfTheCollege" placeholder="Enter your Institute name" />
              </div>

              <div class="input-box">
                <label for="coursename"><b>Name Of UG Course </b></label>
                <input type="text" name="NameOfUGcourse" id="NameOfUGcourse" placeholder="Enter your Course name" />
              </div>

              <div class="input-box">
                <label for="cgpa"><b> CGPA or Percentage <span style="color: red;">*</span></b></label>
                <input type="number" step = "any" id="CGPA" name="CGPA" min="0" max="10"placeholder="Enter your percentage"  />
              </div>
            </div>

            <br>
            <label><b>Preferred Department</b></label>
            <div class="column">
              
              <div class="input-box">
                <label for="ugchoice1"><b>Choice 1 <span style="color: red;">*</span></b></label>
                <div id="ugchoice1" class="select-box">
                  <select id="DeptChoice1PG" name="DeptChoice1PG" >
                    <option value="">-- Select Department --</option>
                    <option>ME Computer Science and Engineering</option>
                    <option>ME CAD CAM Engineering</option>           
                    <option>ME Embedded Systems Technology</option>           
                    <option>ME Structural Engineering</option>           
                    <option>ME VLSI Design</option>                     
                  </select>
                </div>
              </div>

              <div class="input-box">
                <label for="ugchoice2"><b>Choice 2 <span style="color: red;">*</span></b></label>
                <div class="select-box">
                  <select name="DeptChoice2PG" id="DeptChoice2PG" >
                    <option value="">-- Select Department --</option>
                    <option>ME Computer Science and Engineering</option>
                    <option>ME CAD CAM Engineering</option>           
                    <option>ME Embedded Systems Technology</option>           
                    <option>ME Structural Engineering</option>           
                    <option>ME VLSI Design</option>
                    
                  </select>
                </div>
              </div>

              <div class="input-box">
                <label for="ugchoice3"><b>Choice 3</b></label>
                <div class="select-box">
                  <select name="DeptChoice3PG" id="DeptChoice3PG" >
                    <option value="">-- Select Department --</option>
                    <option>ME Computer Science and Engineering</option>
                    <option>ME CAD CAM Engineering</option>           
                    <option>ME Embedded Systems Technology</option>           
                    <option>ME Structural Engineering</option>           
                    <option>ME VLSI Design</option>
                    
                  </select>
                </div>
              </div>

            </div>
        
          </div>
          
          <script>
            document.getElementById('SeekingAdmission').addEventListener('change', function() {
              var ugFields = document.getElementById('ugFields');
              var leFields = document.getElementById('leFields');
              var pgFields = document.getElementById('pgFields');

              ugFields.style.display = 'none';
              leFields.style.display = 'none';
              pgFields.style.display = 'none';

              var selectedOption = this.value;

              if (selectedOption === 'UG') {
                ugFields.style.display = 'block';
                // Add logic for UG fields here
              } else if (selectedOption === 'LE') {
                leFields.style.display = 'block';
                // Add logic for LE fields here
              } else if (selectedOption === 'PG') {
                pgFields.style.display = 'block';
                // Add logic for PG fields here
              }
            });
          </script>

        <button type="submit" name="submit" class="form-btn">Submit</button>
        </form>
      </section>
</div>
</div>
        <script>
          let sidebar = document.querySelector(".sidebar");
          let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
          sidebar.classList.toggle("active");
          if(sidebar.classList.contains("active")){
          sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
        }else
          sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
        </script>

</body>
</html>