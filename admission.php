<!DOCTYPE html>
<html lang="en" dir="ltr">
    
    <head>
        <meta charset="UTF-8">
        <title>
            Admission Form
        </title>
        <link rel="stylesheet" href="styles/admission.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
        integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous">
        </script>
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <!--Auto fill and Duplicate requisite-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js">
        </script>
        <script src="jquery-ui/jquery-ui.min.js">
        </script>
        <script src="script/autofill.js">
        </script>
        <link rel="stylesheet" href="jquery-ui\jquery-ui.min.css">
        <script src="script/username.js">
        </script>
        <script src="script/uplaodfiles.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <!--- Start Sidebar --->
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bxl-c-plus-plus'>
                </i>
                <span class="logo_name">
                    Admission
                </span>
            </div>
            <ul class="nav-links">
                <li>
                    <a href="enquiry.php" class="active">
                        <i class='bx bx-grid-alt'>
                        </i>
                        <span class="links_name">
                            Enquiry Form
                        </span>
                    </a>
                </li>
                <li>
                    <a href="admission.php" class="active">
                        <i class='bx bx-grid-alt'>
                        </i>
                        <span class="links_name">
                            Admission Form
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <!--- End Sidebar --->
        <section class="home-section">
            <!--- Start Navbar --->
            <nav>
                <div class="sidebar-button">
                    <i class='bx bx-menu sidebarBtn'>
                    </i>
                    <span class="dashboard">
                        Admission Form
                    </span>
                </div>
            </nav>
            <!--- End Sidebar --->
            <div class="home-content">
                <div class="form-body">
                    <section class="container">
                        <header>
                            <b>
                                General Information
                            </b>
                        </header>
                        <form action="admission-backend.php" method="post" class="form" enctype = "multipart/form-data">
                            <!-- Student name,mobile number,DOB -->
                            <div class="column">
                                <!-- Student name -->
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Student's Full Name
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <input type="text" id="StudentName" name="StudentName" placeholder="Enter full name"
                                    />
                                </div>
                                <!-- Student mobile number -->
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Student's Mobile Number
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <input type="number" id="StudentMobileNo" name="StudentMobileNo" placeholder="Enter phone number"
                                    required />
                                    <div id='avail'>
                                    </div>
                                    <!-- <span style="color: red;">* This mobile number already exists</span> -->
                                </div>
                                <!-- date of birth -->
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Date Of Birth
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <input type="date" id="dob" name="dob" placeholder="Enter birth date"
                                    />
                                </div>
                                
                            </div>
                            <!-- Email , Emis , Gender -->
                            <div class="column">
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Student's Email Address
                                        </b>
                                    </label>
                                    <input type="text" id="StudentEmailId" name="StudentEmailId" placeholder="Enter email address"
                                    />
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            EMIS Number
                                        </b>
                                    </label>
                                    <input type="number" id="EmisId" name="EmisId" placeholder="Enter EMIS number"
                                    />
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Gender
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <div class="select-box">
                                        <select id="Gender" name="Gender">
                                            <option hidden>
                                                gender
                                            </option>
                                            <option>
                                                Male
                                            </option>
                                            <option>
                                                Female
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="column">


                                <div class="input-box">
                                    <label>
                                        <b>
                                            Blood Group
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <div class="select-box">
                                        <select id="BloodGroup" name="BloodGroup">
                                            <option hidden>
                                                Blood Group
                                            </option>
                                            <option>
                                                O
                                            </option>
                                            <option>
                                                A+
                                            </option>
                                            <option>
                                                A-
                                            </option>
                                            <option>
                                                B+
                                            </option>
                                            <option>
                                                B-
                                            </option>
                                            <option>
                                                AB-
                                            </option>
                                        </select>
                                    </div>
                                </div>


                                <!-- Nationality -->
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Nationality
                                        </b>
                                    </label>
                                    <div class="select-box">
                                        <select id="Nationality" name="Nationality">
                                            <option hidden>
                                                Nationality
                                            </option>
                                            <option>
                                                Indian
                                            </option>
                                            <option>
                                                NRI
                                            </option>
                                            <option>
                                                Other Countries
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Religion -->
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Religion
                                        </b>
                                    </label>
                                    <div class="select-box">
                                        <select id="Religion" name="Religion">
                                            <option hidden>
                                                religion
                                            </option>
                                            <option>
                                                Hindu
                                            </option>
                                            <option>
                                                Muslim
                                            </option>
                                            <option>
                                                Christian
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Caste
                                        </b>
                                    </label>
                                    <input type="text" id="Caste" name="Caste" placeholder="Enter Caste"
                                    />
                                </div>
                            </div>

                            <div class="column">
                                <!-- Aadhar Number Input -->
                                <div class="input-box">
                                    <label><b>Aadhar Number</b></label>
                                    <input type="number" id="AadhaarNumber" name="AadhaarNumber" placeholder="Enter Aadhar number"/>
                                </div>

                                <!-- Aadhar Card PDF Upload -->
                                <div class="input-box file-upload">
                                    <label for="aadharPdf"><b>Aadhar Card (PDF) <span style="color: red;">*</span></b></label>
                                    <input type="file" name="aadharPdf" id="aadharPdf" accept="application/pdf" required onchange="handleAadharFileSelect()">
                                    <span id="aadharFileSizeError" style="color: red; display: none;">File size must be less than 5 MB.</span>
                                </div>
                                
                                <div id="aadharFileLink" class="input-box file-upload hidden">
                                    <div class="column">
                                        <button type="button" onclick="viewAadharPdf()">View PDF</button>
                                        <button type="button" id="uploadButton" name="fileupload" value="Upload">Upload</button>
                                        <button type="button" class="file-upload" onclick="clearAadharFile()">Clear File</button>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <!-- Community -->
                                <div class="input-box">
                                    <label><b>Community <span style="color: red;">*</span></b></label>
                                    <div class="select-box">
                                        <select id="Community" name="Community">
                                            <option hidden>Community</option>
                                            <option>OC</option>
                                            <option>BC</option>
                                            <option>MBC</option>
                                            <option>SC</option>
                                            <option>ST</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Community Certificate PDF Upload -->
                                <div class="input-box file-upload">
                                    <label for="communityPdf"><b>Community Certificate (PDF) <span style="color: red;">*</span></b></label>
                                    <input type="file" name="communityPdf" id="communityPdf" accept="application/pdf" required onchange="handleCommunityFileSelect()">
                                    <span id="communityFileSizeError" style="color: red; display: none;">File size must be less than 5 MB.</span>
                                </div>
                                
                                <div id="communityFileLink" class="input-box file-upload hidden">
                                    <div class="column">
                                        <button type="button" onclick="viewCommunityPdf()">View PDF</button>
                                        <button type="button" class="file-upload" onclick="clearCommunityFile()">Clear File</button>
                                    </div>
                                </div>
                            </div>


                            <script>
                                var aadharFileURL = "";
                                var communityFileURL = "";

                                function validateForm() {
                                    var aadharFileInput = document.getElementById("aadharPdf");
                                    var communityFileInput = document.getElementById("communityPdf");
                                    var aadharFileSizeError = document.getElementById("aadharFileSizeError");
                                    var communityFileSizeError = document.getElementById("communityFileSizeError");

                                    // Hide any previous error messages
                                    aadharFileSizeError.style.display = "none";
                                    communityFileSizeError.style.display = "none";

                                    // Check if Aadhar file is selected and its size
                                    if (aadharFileInput.files.length > 0) {
                                        var aadharFile = aadharFileInput.files[0];
                                        var maxSize = 5 * 1024 * 1024; // 5 MB in bytes

                                        if (aadharFile.size > maxSize) {
                                            aadharFileSizeError.style.display = "block";
                                            return false; // Prevent form submission
                                        }
                                    }

                                    // Check if Community Certificate file is selected and its size
                                    if (communityFileInput.files.length > 0) {
                                        var communityFile = communityFileInput.files[0];

                                        if (communityFile.size > maxSize) {
                                            communityFileSizeError.style.display = "block";
                                            return false; // Prevent form submission
                                        }
                                    }

                                    return true; // Allow form submission
                                }

                                function handleAadharFileSelect() {
                                    var fileInput = document.getElementById("aadharPdf");
                                    var fileLink = document.getElementById("aadharFileLink");

                                    // Check if file is selected
                                    if (fileInput.files.length > 0) {
                                        var file = fileInput.files[0];

                                        // Check if file is a PDF
                                        if (file.type === "application/pdf") {
                                            aadharFileURL = URL.createObjectURL(file);

                                            // Show the file link
                                            fileLink.classList.remove("hidden");
                                        } else {
                                            // Hide the file link if file is not a PDF
                                            fileLink.classList.add("hidden");
                                            aadharFileURL = "";
                                        }
                                    }
                                }

                                function viewAadharPdf() {
                                    if (aadharFileURL) {
                                        window.open(aadharFileURL, '_blank');
                                    }
                                }

                                function clearAadharFile() {
                                    var fileInput = document.getElementById("aadharPdf");
                                    var fileLink = document.getElementById("aadharFileLink");

                                    // Clear the file input
                                    fileInput.value = "";

                                    // Hide the file link and reset the file URL
                                    fileLink.classList.add("hidden");
                                    aadharFileURL = "";
                                }
                            </script>

                            <script>
                                function handleCommunityFileSelect() {
                                    var fileInput = document.getElementById("communityPdf");
                                    var fileLink = document.getElementById("communityFileLink");

                                    // Check if file is selected
                                    if (fileInput.files.length > 0) {
                                        var file = fileInput.files[0];

                                        // Check if file is a PDF
                                        if (file.type === "application/pdf") {
                                            communityFileURL = URL.createObjectURL(file);

                                            // Show the file link
                                            fileLink.classList.remove("hidden");
                                        } else {
                                            // Hide the file link if file is not a PDF
                                            fileLink.classList.add("hidden");
                                            communityFileURL = "";
                                        }
                                    }
                                }

                                function viewCommunityPdf() {
                                    if (communityFileURL) {
                                        window.open(communityFileURL, '_blank');
                                    }
                                }

                                function clearCommunityFile() {
                                    var fileInput = document.getElementById("communityPdf");
                                    var fileLink = document.getElementById("communityFileLink");

                                    // Clear the file input
                                    fileInput.value = "";

                                    // Hide the file link and reset the file URL
                                    fileLink.classList.add("hidden");
                                    communityFileURL = "";
                                }
                            </script>
                            
                            
                            <div class="column">
                                <div class="yes-box">
                                    <label for="sportYes">
                                        <b>
                                            First Graduate?
                                        </b>
                                    </label>
                                    <div class="yes-option">
                                        <div class="yes">
                                            <input type="radio" id="FirstGraduate" name="FirstGraduate" value="yes">
                                            <label for="sportYes">
                                                <b>
                                                    Yes
                                                </b>
                                            </label>
                                        </div>
                                        <div class="yes">
                                            <input type="radio" id="FirstGraduate" name="FirstGraduate" value="no" checked>
                                            <label for="sportNo">
                                                <b>
                                                    No
                                                </b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="yes-box">
                                    <label for="sportYes">
                                        <b>
                                            Any Special Admission Quota?
                                        </b>
                                    </label>
                                    <div class="yes-option">
                                        <div class="yes">
                                            <input type="radio" id="SpecialAdmissionQuota" name="SpecialAdmissionQuota" value="yes">
                                            <label for="sportYes">
                                                <b>
                                                    Yes
                                                </b>
                                            </label>
                                        </div>
                                        <div class="yes">
                                            <input type="radio" id="SpecialAdmissionQuota" name="SpecialAdmissionQuota" value="no" checked>
                                            <label for="sportNo">
                                                <b>
                                                    No
                                                </b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="yes-box">
                                    <label for="sportYes">
                                        <b>
                                            Differently Abled Category?
                                        </b>
                                    </label>
                                    <div class="yes-option">
                                        <div class="yes">
                                            <input type="radio" id="DifferentlyAbled" name="DifferentlyAbled" value="yes">
                                            <label for="sportYes">
                                                <b>
                                                    Yes
                                                </b>
                                            </label>
                                        </div>
                                        <div class="yes">
                                            <input type="radio" id="DifferentlyAbled" name="DifferentlyAbled" value="no" checked>
                                            <label for="sportNo">
                                                <b>
                                                    No
                                                </b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr style="margin-top: 30px; margin-bottom: 30px;" />

                            <header>
                                <b>
                                    Current Academic Information
                                </b>
                            </header>
                            <div class="column" style="margin-top: 10px;">
                                <div class="input-box">
                                    <label for=""><b>Academic Year of Joining  <span style="color: red;">*</span></b></label>
                                    <input type="number" id="" name="" min="1900" max="2100" required>
                                </div>

                                <!-- Course -->
                                <div class="input-box">
                                    <label for="course"><b>Course <span style="color: red;">*</span></b></label>
                                    <div class="select-box">
                                        <select name="course" id="course" onchange="updateCourseType()">
                                            <option value="">-- Select --</option>
                                            <option value="UG">UG</option>
                                            <option value="PG">PG</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-box">
                                    <label for="courseType"><b>Course Type <span style="color: red;">*</span></b></label>
                                    <div class="select-box">
                                        <select name="courseType" id="courseType">
                                            <option value="">-- Select --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-box">
                                    <label for="branch"><b>Branch / Specialization</b></label>
                                    <div class="select-box">
                                        <select name="branch" id="branch" required>
                                            <option value="">-- Select Branch --</option>
                                        </select>
                                    </div>
                                </div>                        
                            </div>


                            <script>
                                function updateCourseType() {
                                    var course = document.getElementById("course").value;
                                    var courseType = document.getElementById("courseType");
                                    var branch = document.getElementById("branch");

                                    // Clear previous options
                                    courseType.innerHTML = '<option value="">-- Select --</option>';
                                    branch.innerHTML = '<option value="">-- Select Branch --</option>';

                                    if (course === "UG") {
                                        courseType.innerHTML += '<option value="B.Tech">B.Tech</option>';
                                        courseType.innerHTML += '<option value="B.E">B.E</option>';
                                        branch.innerHTML += `
                                            <option>Computer Science and Engineering</option>
                                            <option>Cyber Security</option>
                                            <option>Agriculture Engineering</option>
                                            <option>Biomedical Engineering</option>
                                            <option>Civil Engineering</option>
                                            <option>Electrical and Electronics Engineering</option>
                                            <option>Information Technology</option>
                                            <option>Artificial Intelligence and Data Science</option>
                                            <option>Artificial Intelligence and Machine Learning</option>
                                            <option>Electronics and Communication Engineering</option>
                                            <option>Biotechnology</option>
                                            <option>Food Technology</option>
                                        `;
                                    } else if (course === "PG") {
                                        courseType.innerHTML += '<option value="M.Tech">M.Tech</option>';
                                        courseType.innerHTML += '<option value="M.E">M.E</option>';
                                        branch.innerHTML += `
                                            <option>ME Computer Science and Engineering</option>
                                            <option>ME CAD CAM Engineering</option>           
                                            <option>ME Embedded Systems Technology</option>           
                                            <option>ME Structural Engineering</option>           
                                            <option>ME VLSI Design</option>
                                        `;
                                    }
                                }
                            </script>

                            <div class="column">                
                                <div class="input-box">
                                    <label><b>Medium Of Instruction</b></label>
                                    <div class="select-box">
                                    <select name="" required>
                                        <option value="">-- Select MediumOfInstruction --</option>
                                        <option>Tamil</option>
                                        <option>English</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label><b>Mode Of Study <span style="color: red;">*</span></b></label>
                                    <div class="select-box">
                                    <select name="" required>
                                        <option value="">-- Select Mode --</option>
                                        <option>Regular</option>
                                        <option>Hybrid</option>
                                        <option>Part-Time</option>
                                    </select>
                                    </div>
                                </div>
                                
                                <div class="input-box">
                                    <label><b>Date Of Admission <span style="color: red;">*</span></b></label>
                                    <input type="date" name="" placeholder="Enter Admission date" required />
                                </div>

                                <div class="input-box">
                                    <label for="Source"><b>Type Of Admission <span style="color: red;">*</span></b></label>
                                    <div class="select-box">
                                        <select name="Source" id="Source" onchange="showFields()" required>
                                            <option value="">-- Select Type --</option>
                                            <option value="management">Management</option>
                                            <option value="counselling">Counselling</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                
                            <div id="counsellingNo" class="input-box hidden">
                                <div class="column">
                                    <div class="input-box">
                                        <label for="counsellingNumber"><b>Counselling / Admission Number <span style="color: red;">*</span></b></label>
                                        <input type="text" name="counsellingNumber" id="counsellingNumber" placeholder="Enter counselling number">
                                    </div>

                                    <div class="input-box file-upload">
                                        <label for="counsellingPdf"><b>Counselling Allotment (PDF) <span style="color: red;">*</span></b></label>
                                        <input type="file" name="counsellingPdf" id="counsellingPdf" accept="application/pdf" required onchange="handleFileSelect()">
                                        <span id="fileSizeError" style="color: red; display: none;">File size must be less than 5 MB.</span>
                                    </div>                                    

                                    <div id="pdfFileLink" class="input-box file-upload hidden">
                                        <div class="column">                                        
                                            <button type="button" onclick="viewPdf()">View PDF</button>
                                            <button type="button" class="file-upload" onclick="clearFile()">Clear File</button>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>

                            <div class="column">
                                <div class="yes-box">
                                    <label for="sportYes">
                                        <b>
                                            Has the student joined as lateral entry ?
                                        </b>
                                    </label>
                                    <div class="yes-option">
                                        <div class="yes">
                                            <input type="radio" id="LateralEntry" name="LateralEntry" value="yes">
                                            <label for="sportYes">
                                                <b>
                                                    Yes
                                                </b>
                                            </label>
                                        </div>
                                        <div class="yes">
                                            <input type="radio" id="LateralEntry" name="LateralEntry" value="no" checked>
                                            <label for="sportNo">
                                                <b>
                                                    No
                                                </b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="yes-box">
                                    <label for="sportYes">
                                        <b>
                                            Hosteller ?
                                        </b>
                                    </label>
                                    <div class="yes-option">
                                        <div class="yes">
                                            <input type="radio" id="Hostel" name="Hostel" value="yes">
                                            <label for="sportYes">
                                                <b>
                                                    Yes
                                                </b>
                                            </label>
                                        </div>
                                        <div class="yes">
                                            <input type="radio" id="Hostel" name="Hostel" value="no" checked>
                                            <label for="sportNo">
                                                <b>
                                                    No
                                                </b>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <script>
                                function showFields() {
                                    var Source = document.getElementById("Source").value;
                                    var counsellingNo = document.getElementById("counsellingNo");

                                    // Initially hide the counselling number input
                                    counsellingNo.classList.add("hidden");

                                    // Show the counselling number input if "counselling" is selected
                                    if (Source === "counselling") {
                                        counsellingNo.classList.remove("hidden");
                                    }
                                }

                                function validateForm() {
                                    var fileInput = document.getElementById("counsellingPdf");
                                    var fileSizeError = document.getElementById("fileSizeError");

                                    // Hide any previous error message
                                    fileSizeError.style.display = "none";

                                    // Check if file is selected and its size
                                    if (fileInput.files.length > 0) {
                                        var file = fileInput.files[0];
                                        var maxSize = 5 * 1024 * 1024; // 5 MB in bytes

                                        if (file.size > maxSize) {
                                            fileSizeError.style.display = "block";
                                            return false; // Prevent form submission
                                        }
                                    }

                                    return true; // Allow form submission
                                }

                                function handleFileSelect() {
                                    var fileInput = document.getElementById("counsellingPdf");
                                    var pdfFileLink = document.getElementById("pdfFileLink");

                                    // Check if file is selected
                                    if (fileInput.files.length > 0) {
                                        var file = fileInput.files[0];

                                        // Check if file is a PDF
                                        if (file.type === "application/pdf") {
                                            fileURL = URL.createObjectURL(file);

                                            // Show the file link
                                            pdfFileLink.classList.remove("hidden");
                                        } else {
                                            // Hide the file link if file is not a PDF
                                            pdfFileLink.classList.add("hidden");
                                            fileURL = "";
                                        }
                                    }
                                }

                                function viewPdf() {
                                    if (fileURL) {
                                        window.open(fileURL, '_blank');
                                    }
                                }

                                function clearFile() {
                                    var fileInput = document.getElementById("counsellingPdf");
                                    var pdfFileLink = document.getElementById("pdfFileLink");

                                    // Clear the file input
                                    fileInput.value = "";

                                    // Hide the file link and reset the file URL
                                    pdfFileLink.classList.add("hidden");
                                    fileURL = "";
                                }
                            </script>

                            <hr style="margin-top: 50px; margin-bottom: 30px;" />

                            <header>
                                <b>
                                    Family Information
                                </b>
                            </header>
                            <div class="column" style="margin-top: 10px;">
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Father's Name
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <input type="text" id="FatherName" name="FatherName" placeholder="Enter full name"
                                    />
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Father's Occupation
                                        </b>
                                    </label>
                                    <div class="select-box">
                                        <select id="FatherOccupation" name="FatherOccupation">
                                            <option hidden>
                                                Occupation
                                            </option>
                                            <option>
                                                Private employee
                                            </option>
                                            <option>
                                                Government employee
                                            </option>
                                            <option>
                                                Self-Employed
                                            </option>
                                            <option>
                                                N/A
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Mother's Name
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <input type="text" id="MotherName" name="MotherName" placeholder="Enter full name"
                                    />
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Mother's Occupation
                                        </b>
                                    </label>
                                    <div class="select-box">
                                        <select id="MotherOccupation" name="MotherOccupation">
                                            <option hidden>
                                                Occupation
                                            </option>
                                            <option>
                                                Private employee
                                            </option>
                                            <option>
                                                Government employee
                                            </option>
                                            <option>
                                                Self-Employed
                                            </option>
                                            <option>
                                                N/A
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Guardian's Name
                                        </b>
                                    </label>
                                    <input type="text" id="GuardianName" name="GuardianName" placeholder="Enter full name"
                                    />
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Is Orphan Category
                                        </b>
                                    </label>
                                    <div class="select-box">
                                        <select id="Orphan" name="Orphan">
                                            <option hidden>
                                                -- select --
                                            </option>
                                            <option>
                                                yes
                                            </option>
                                            <option>
                                                no
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Annual Family Income
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <input type="number" id="AnnualFamilyIncome" name="AnnualFamilyIncome" placeholder="Enter Annual Family Income"
                                    />
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Parent Mobile Number
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <input type="number" id="ParentsMobileNo" name="ParentsMobileNo" placeholder="Enter Parent Number"
                                    />
                                </div>
                            </div>

                            <hr style="margin-top: 50px; margin-bottom: 30px;" />

                            <header>
                                <b>
                                    Permanent Address
                                </b>
                            </header>
                            <div class="column" style="margin-top: 10px;">
                                <div class="input-box">
                                    <label><b>Country</b></label>
                                    <input id="P_Country" type="text" name="P_Country" placeholder="Enter Country">
                                </div>

                                <div class="input-box">
                                    <label for="State"><b>State <span style="color: red;">*</span></b></label>
                                    <div class="select-box">
                                        <select id="P_State" name="P_State">
                                            <option value="">-- Select State --</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label for="District"><b>District <span style="color: red;">*</span></b></label>
                                    <div class="select-box">
                                        <select id="P_District" name="P_District">
                                            <option value="">-- Select One --</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- <div class="input-box file-upload hidden" id="fileUploadSection">
                                    <label for="migrationPdf"><b>Migration (PDF) <span style="color: red;">*</span></b></label>
                                    <input type="file" name="migrationPdf" id="migrationPdf" accept="application/pdf" onchange="handleMigrationFileSelect()">
                                    <span id="fileSizeError" style="color: red; display: none;">File size must be less than 1 MB.</span>
                                </div>

                                <div id="migrationFileLink" class="input-box file-upload hidden">
                                    <div class="column">
                                        <button type="button" id="viewMigrationPdf" onclick="viewMigrationPdf()">View PDF</button>
                                        <button type="button" id="clearMigrationFile" onclick="clearMigrationFile()">Clear File</button>
                                    </div>
                                </div> -->
                            </div>


                            <div class="column">
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Location Type
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <div class="select-box">
                                        <select id="P_LocationType" name="P_LocationType">
                                            <option hidden>
                                                --select--
                                            </option>
                                            <option>
                                                Rural
                                            </option>
                                            <option>
                                                Costal
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <!-- state -->

                                <script>
                                    var stateDistricts = {
                                    "TamilNadu": ["Ariyalur","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kanchipuram","Kanyakumari","Karur","Krishnagiri","Madurai","Nagapattinam","Namakkal","Nilgiris","Perambalur","Pudukkottai","Ramanathapuram","Salem","Sivaganga","Thanjavur","Theni","Thoothukudi","Tiruchirappalli","Tirunelveli","Tiruppur","Tiruvallur","Tiruvannamalai","Tiruvarur","Vellore","Viluppuram","Virudhunagar"],
                                    "Kerala": ["Alappuzha","Ernakulam","Idukki","Kannur","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"],
                                    "Karnataka": ["Bagalkot","Bangalore Rural","Bangalore Urban","Belgaum","Bellary","Bidar","Vijayapura","Chamarajanagar","Chikkaballapur","Chikkamagaluru","Chitradurga","Dakshina Kannada","Davanagere","Dharwad","Gadag","Gulbarga","Hassan","Haveri","Kodagu","Kolar","Koppal","Mandya","Mysore","Raichur","Ramanagara","Shimoga","Tumkur","Udupi","Uttara Kannada","Yadgir"],
                                    "AndraPradesh": ["Anantapur","Chittoor","East Godavari","Guntur","Kadapa","Krishna","Kurnool","Prakasam","Nellore","Srikakulam","Visakhapatnam","Vizianagaram","West Godavari"]
                                
                                    };
                                    
                                    $(document).ready(function () 
                                    {
                                    var stateSelect = $("#P_State");
                                    var districtSelect = $("#P_District");
                                    
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

                                
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Taluk
                                        </b>
                                    </label>
                                    <input id="P_Taluk" type="number" name="P_Taluk" maxlength="6" placeholder="Enter Taluk">
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Village
                                        </b>
                                    </label>
                                    <input id="P_Village" type="text" name="P_Village" placeholder="Enter Your Village">
                                </div>                            
                            </div>
                            <div class="column">
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Block
                                        </b>
                                    </label>
                                    <input id="P_Block" type="text" name="P_Block" placeholder="Enter Block">
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Pincode
                                        </b>
                                    </label>
                                    <input id="P_Pincode" type="number" name="P_Pincode" placeholder="Enter Pincode">
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Village Panchayat
                                        </b>
                                    </label>
                                    <input id="P_VillagePanchayat" type="text" name="P_VillagePanchayat" placeholder="Enter Village Panchayat">
                                </div>
                            </div>
                            <div class="column">
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Postal Address
                                        </b>
                                    </label>
                                    <input id="P_PostalAddress" type="text" name="P_PostalAddress" placeholder="Enter Address">
                                </div>
                            </div>

                            <hr style="margin-top: 50px; margin-bottom: 30px;" />

                            <header>
                                <b>
                                    Communication Address
                                </b>
                            </header>
                            <div class="column" style="margin-top: 10px;">
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Country
                                        </b>
                                    </label>
                                    <input id="C_Country" type="text" name="C_Country" placeholder="Enter Country">
                                </div>
                                <div class="input-box">
                                    <label for="State">
                                        <b>
                                            State
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <div class="select-box">
                                        <select id="C_State" name="C_State">
                                            <option value="">
                                                -- Select State --
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-box">
                                    <label for="District">
                                        <b>
                                            District
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <div class="select-box">
                                        <select id="C_District" name="C_District">
                                            <option value="">
                                                -- Select One --
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Location Type
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <div class="select-box">
                                        <select id="C_LocationType" name="C_LocationType">
                                            <option hidden>
                                                -- Select --
                                            </option>
                                            <option>
                                                Rural
                                            </option>
                                            <option>
                                                Costal
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <script>
                                    var stateDistricts = {
                                    "TamilNadu": ["Ariyalur","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kanchipuram","Kanyakumari","Karur","Krishnagiri","Madurai","Nagapattinam","Namakkal","Nilgiris","Perambalur","Pudukkottai","Ramanathapuram","Salem","Sivaganga","Thanjavur","Theni","Thoothukudi","Tiruchirappalli","Tirunelveli","Tiruppur","Tiruvallur","Tiruvannamalai","Tiruvarur","Vellore","Viluppuram","Virudhunagar"],
                                    "Kerala": ["Alappuzha","Ernakulam","Idukki","Kannur","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"],
                                    "Karnataka": ["Bagalkot","Bangalore Rural","Bangalore Urban","Belgaum","Bellary","Bidar","Vijayapura","Chamarajanagar","Chikkaballapur","Chikkamagaluru","Chitradurga","Dakshina Kannada","Davanagere","Dharwad","Gadag","Gulbarga","Hassan","Haveri","Kodagu","Kolar","Koppal","Mandya","Mysore","Raichur","Ramanagara","Shimoga","Tumkur","Udupi","Uttara Kannada","Yadgir"],
                                    "AndraPradesh": ["Anantapur","Chittoor","East Godavari","Guntur","Kadapa","Krishna","Kurnool","Prakasam","Nellore","Srikakulam","Visakhapatnam","Vizianagaram","West Godavari"]
                                
                                    };
                                    
                                    $(document).ready(function () 
                                    {
                                    var stateSelect = $("#C_State");
                                    var districtSelect = $("#C_District");
                                    
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
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Taluk
                                        </b>
                                    </label>
                                    <input id="C_Taluk" type="number" name="C_Taluk" maxlength="6" placeholder="Enter Taluk">
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Village
                                        </b>
                                    </label>
                                    <input id="C_Village" type="text" name="C_Village" placeholder="Enter Your Village">
                                </div>
                                <!-- village -->
                            </div>
                            <div class="column">
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Block
                                        </b>
                                    </label>
                                    <input id="C_Block" type="text" name="C_Block" placeholder="Enter Block">
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Pincode
                                        </b>
                                    </label>
                                    <input id="C_Pincode" type="number" name="C_Pincode" placeholder="Enter Pincode">
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Village Panchayat
                                        </b>
                                    </label>
                                    <input id="C_VillagePanchayat" type="text" name="C_VillagePanchayat" placeholder="Enter Village Panchayat">
                                </div>
                            </div>
                            <div class="column">
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Postal Address
                                        </b>
                                    </label>
                                    <input id="C_PostalAddress" type="text" name="C_PostalAddress" placeholder="Enter Address">
                                </div>
                            </div>

                            <hr style="margin-top: 50px; margin-bottom: 30px;" />

                            <header>
                                <b>
                                    Bank Account Details
                                </b>
                            </header>
                            <div class="column" style="margin-top: 10px;">
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Account Number
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <input type="text" id="AccountNumber" name="AccountNumber" placeholder="Enter Account Number"
                                    />
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            IFSC Code
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <input type="text" id="IfscCode" name="IfscCode" placeholder="Enter IFSC Code"
                                    />
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Bank Name
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <input type="text" id="BankName" name="BankName" placeholder="Enter Bank name"
                                    />
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Bank Branch                                    
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <input type="text" id="BankBranch" name="BankBranch" placeholder="Enter Branch name"
                                    />
                                </div>
                                <div class="input-box">
                                    <label>
                                        <b>
                                            City
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <input type="text" id="City" name="City" placeholder="Enter City"
                                    />
                                </div>
                            </div>

                            <hr style="margin-top: 50px; margin-bottom: 30px;" />

                            <header>
                                <b>
                                    Educational Details
                                </b>
                            </header>

                            <div class="column" style="margin-top: 10px;">
                                <!-- Seeking Admission -->
                                <div class="input-box">
                                    <label for="educationLevel"><b>Seeking Admission For :</b></label>
                                    <div class="select-box">
                                        <select name="SeekingAdmission" id="educationLevel" >
                                            <option value="">-- Select --</option>
                                            <option value="UG">B.E/B.TECH First Year</option>
                                            <option value="LE">B.E/B.TECH Lateral</option>
                                            <option value="PG">M.E/M.TECH</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
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
                                    <select name="BoardUG" required>
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
                                    <input type="text" name="SchoolName10UG" id="schoolName10" placeholder="Enter your school name" required/>
                                </div>

                                <!-- Medium of instruction 10th -->
                                <div class="input-box">
                                    <label><b>Medium Of Instruction</b></label>
                                    <div class="select-box">
                                    <select name="MediumOfInstruction10UG" required>
                                        <option value="">-- Select MediumOfInstruction --</option>
                                        <option>Tamil</option>
                                        <option>English</option>
                                    </select>
                                    </div>
                                </div>

                                <!-- TotalMarks in 10th -->
                                <div class="input-box">
                                    <label for="tm10"><b>Total Marks(in 10th Std) <span style="color: red;">*</span></b></label>
                                    <input type="number" name="TotalMark10UG" id="tm10" min="0" max="500"placeholder="Enter total Marks" required />
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
                                    <input type="text" name="SchoolName12UG" id="schoolName12" placeholder="Enter your school name" required/>
                                </div>

                                <!-- 12th Medium of instruction -->
                                <div class="input-box">
                                    <label><b>Medium Of Instruction</b></label>
                                    <div class="select-box">
                                    <select name="MediumOfInstruction12UG" required>
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
                                    <select name="Group12UG" required>
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
                                    <input type="number" name="MathsMark" id="maths" min="0" max="100" placeholder="Enter Maths Mark" required>
                                </div>

                                <!-- Physics Mark -->
                                <div class="input-box">
                                    <label for="phy"><b>Physics Mark</b></label>
                                    <input type="number" name="PhysicsMark" id="phy" min="0" max="100"placeholder="Enter physics Mark" required />
                                </div>

                                <!-- Chemistry Mark -->
                                <div class="input-box">
                                    <label for="che"><b>Chemistry Mark</b></label>
                                    <input type="number" name="ChemistryMark" id="che" min="0" max="100"placeholder="Enter chemistry Mark" required />
                                </div>

                                </div>

                                <!-- 12th register No, Total Marks in 12th, Cut Off -->
                                <div class="column">
                                
                                <div class="input-box">
                                    <label for="registerNo"><b>12th Register Number <span style="color: red;">*</span></b></label>
                                    <input type="number" id="registerNo" name="RegisterNo12" placeholder="Enter register number" required />
                                </div>

                                <div class="input-box">
                                    <label for="tm12"><b>Total Marks(in 12th Std) <span style="color: red;">*</span></b></label>
                                    <input type="number" id="tm12" name="TotalMark12UG" min="0" max="600"placeholder="Enter total Marks" required />
                                </div>

                                <div class="input-box">
                                    <label for="co"><b>Cut Off(in 12th Std) <span style="color: red;">*</span></b></label>
                                    <input type="number" id="co" name="CutOff" min="0" max="200.0"placeholder="Enter your Cutoff" required />
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
                                    <label for="sportList"><b>Select Your Sport :</b></label>
                                    <div class="select-box">
                                        <select name="SportName" id="sportList" required>
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
                                    <label for="levelList"><b>Select level :</b></label>
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
                                    <select name="BoardLE" required>
                                        <option value="">-- Select Board --</option>
                                        <option>State Board</option>
                                        <option>CBSE</option>
                                        <option>ICSE</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label for="schoolName10"><b>School Name(studied in 10th Std) </b></label>
                                    <input name="SchoolName10" type="text" id="schoolName10" placeholder="Enter your school name" required/>
                                </div>

                                <div class="input-box">
                                    <label><b>Medium Of Instruction</b></label>
                                    <div class="select-box">
                                    <select name="MediumOfInstruction10LE" required>
                                        <option value="">-- Select MediumOfInstruction --</option>
                                        <option>Tamil</option>
                                        <option>English</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label for="tm10"><b>Total Marks(in 10th Std) <span style="color: red;">*</span></b></label>
                                    <input type="number" id="tm10" name="TotalMark10LE" min="0" max="500"placeholder="Enter total Marks" required />
                                </div>

                                </div>

                                <div class="input-box">
                                <label><b>12th : </b></label>
                                </div>

                                <div class="column">

                                <div class="input-box">
                                    <label for="schoolName12"><b>School Name(studied in 12th Std)</b></label>
                                    <input name="SchoolName12LE" type="text" id="schoolName12" placeholder="Enter your school name" required/>
                                </div>

                                <div class="input-box">
                                    <label><b>Medium Of Instruction</b></label>
                                    <div class="select-box">
                                    <select name="MediumOfInstruction12LE" required>
                                        <option value="">-- Select MediumOfInstruction --</option>
                                        <option>Tamil</option>
                                        <option>English</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label><b>12th Group </b></label>
                                    <div class="select-box">
                                    <select name="Group12LE" required>
                                        <option value="">-- Select Group --</option>
                                        <option>Bio-Maths</option>
                                        <option>Computer science-Maths</option>
                                        <option>Vocational</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label for="tm12"><b>Total Marks(in 12th std) </b></label>
                                    <input type="number" id="tm12" name="TotalMark12LE" min="0" max="600"placeholder="Enter total Marks" required />
                                </div>

                                </div>

                                <div class="input-box">
                                <label><b>Diploma :<span style="color: red;">*</span></b></label>
                                </div>

                                <!-- Diploma [nameofinstitution,percentage,course name] -->
                                <div class="column">

                                <div class="input-box">
                                    <label><b>Name Of the Institution </b></label>
                                    <input name="NameOfInstitution" type="text" placeholder="Enter your Institute name" required/>
                                </div>

                                <div class="input-box">
                                    <label for="coursename"><b>Name Of the Diploma Course </b></label>
                                    <input name="NameOfDiplomaCourse" type="text" id="coursename" placeholder="Enter your Course name" required/>
                                </div>

                                <div class="input-box">
                                    <label for="dipmark"><b>Percentage Scored in Diploma <span style="color: red;">*</span></b></label>
                                    <input type="number" id="dipmark" name="PercentageDiploma" min="0" max="100"placeholder="Enter your percentage" required />
                                </div>

                                </div>

                                <br>
                                

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
                                    <select name="BoardPG" required>
                                        <option value="">-- Select Board --</option>
                                        <option>State Board</option>
                                        <option>CBSE</option>
                                        <option>ICSE</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label for="schoolName10"><b>School Name(studied in 10th Std) </b></label>
                                    <input type="text" name="SchoolName10" id="schoolName10" placeholder="Enter your school name" required/>
                                </div>

                                <div class="input-box">
                                    <label><b>Medium Of Instruction</b></label>
                                    <div class="select-box">
                                    <select name="MediumOfInstruction10PG" required>
                                        <option value="">-- Select MediumOfInstruction --</option>
                                        <option>Tamil</option>
                                        <option>English</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label for="tm10"><b>Total Marks(in 10th Std) <span style="color: red;">*</span></b></label>
                                    <input type="number" id="tm10" name="TotalMark10PG" min="0" max="500"placeholder="Enter total Marks" required />
                                </div>

                                </div>

                                <div class="input-box">
                                <label><b>12th :<span style="color: red;">*</span> </b></label>
                                </div>

                                <div class="column">
                                <div class="input-box">
                                    <label for="schoolName12"><b>School Name(studied in 12th Std)</b></label>
                                    <input type="text" name="SchoolName12PG" id="schoolName12" placeholder="Enter your school name" required/>
                                </div>

                                <div class="input-box">
                                    <label><b>Medium Of Instruction</b></label>
                                    <div class="select-box">
                                    <select name="MediumOfInstruction12PG" required>
                                        <option value="">-- Select MediumOfInstruction --</option>
                                        <option>Tamil</option>
                                        <option>English</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label><b>12th Group </b></label>
                                    <div class="select-box">
                                    <select name="Group12PG" required>
                                        <option value="">-- Select Group --</option>
                                        <option>Bio-Maths</option>
                                        <option>Computer science-Maths</option>
                                        <option>Vocational</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label for="tm12"><b>Total Marks(in 12th std) </b></label>
                                    <input type="number" id="tm12" name="TotalMark12PG" min="0" max="600"placeholder="Enter total Marks" required />
                                </div>
                                </div>

                                <div class="input-box">
                                <label><b>Bachelor's Degree : <span style="color: red;">*</span></b></label>
                                </div>

                                <div class="column">              
                                <div class="input-box">
                                    <label for="instituteName"><b>Name Of the College </b></label>
                                    <input type="text" name="NameOfTheCollege" id="instituteName" placeholder="Enter your Institute name" required/>
                                </div>

                                <div class="input-box">
                                    <label for="coursename"><b>Name Of UG Course </b></label>
                                    <input type="text" name="NameOfUGcourse" id="coursename" placeholder="Enter your Course name" required/>
                                </div>

                                <div class="input-box">
                                    <label for="cgpa"><b> CGPA or Percentage <span style="color: red;">*</span></b></label>
                                    <input type="number" id="cgpa" name="CGPA" min="0" max="10"placeholder="Enter your percentage" required />
                                </div>
                                </div>                              
                                
                            
                            </div>
                            
                            <script>
                                document.getElementById('educationLevel').addEventListener('change', function() {
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
                        
                            <button type="submit" name="submit" class="form-btn">
                                Submit
                            </button>
                        </form>
                    </section>
                </div>
            </div>
            <script>
                let sidebar = document.querySelector(".sidebar");
                let sidebarBtn = document.querySelector(".sidebarBtn");
                sidebarBtn.onclick = function() {
                    sidebar.classList.toggle("active");
                    if (sidebar.classList.contains("active")) {
                        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
                    } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
                }
            </script>
    </body>

</html>