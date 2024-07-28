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
                        <form action="admission-backend.php" method="post" class="form">


                            <div class="photo-container">
                                <div class="photo-box hidden" id="photoBox">
                                    <img id="photoPreview" src="#" alt="Passport Photo">
                                </div>
                            </div>

                            <hr style="margin-top: 20px; margin-bottom: 20px;" />









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
                                            Student Mobile Number
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <!-- <input type="number" id="StudentMobileNo" maxlength="10" name="StudentMobileNo" placeholder="Enter phone number" required /> -->
                                    <input id="StudentMobileNo" type="number" name="StudentMobileNo" placeholder="Enter student Number" oninput="validatestudentPhoneNumber(this)" required>
                                    <span id="studentphoneError" class="hidden" style="color: red;">Phone number must be exactly 10 digits.</span>
                                    <script>
                                    function validatestudentPhoneNumber(input) {
                                        const phoneError = document.getElementById('studentphoneError');
                                        const phoneNumber = input.value;

                                        if (phoneNumber.length === 10 && /^\d{10}$/.test(phoneNumber)) {
                                            phoneError.classList.add('hidden');
                                            input.setCustomValidity('');
                                        } else {
                                            phoneError.classList.remove('hidden');
                                            input.setCustomValidity('Phone number must be exactly 10 digits.');
                                        }
                                    }                                
                                </script>
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

                                <div class="input-box file-upload">
                                    <label for="photo">
                                        <b>Passport Size Photo<span style="color: red;">*</span></b>
                                        <input type="file" id="photoInput" accept="image/*">
                                        <div id="photofileSizeError" class="hidden" style="color: red;">File size must be less than or equal to 1 MB.</div>
                                    </label>
                                </div>
                                <div id="uploadButton" class="input-box file-upload hidden">                                    
                                    <div class="column">
                                        <button type="button" onclick="uploadPhoto()">Upload Photo</button>
                                    </div>
                                </div>
                                

                                <script>
                                    const photoInput = document.getElementById('photoInput');
                                    const photoBox = document.getElementById('photoBox');
                                    const photoPreview = document.getElementById('photoPreview');
                                    const uploadButton = document.getElementById('uploadButton');
                                    const fileSizeError = document.getElementById('photofileSizeError');
                            
                                    photoInput.addEventListener('change', function() {
                                        const file = photoInput.files[0];
                                        if (file && file.size <= 1048576) { // 1 MB = 1048576 bytes
                                            const reader = new FileReader();
                                            reader.onload = function(e) {
                                                photoPreview.src = e.target.result;
                                                photoBox.classList.remove('hidden');
                                                uploadButton.classList.remove('hidden');
                                                fileSizeError.classList.add('hidden');
                                            };
                                            reader.readAsDataURL(file);
                                        } else {
                                            photoBox.classList.add('hidden');
                                            uploadButton.classList.add('hidden');
                                            fileSizeError.classList.remove('hidden');
                                            photoInput.value = '';
                                            alert('File must be less than or equal to 1 MB.');
                                        }
                                    });
                            
                                    function uploadPhoto() {
                                        if (photoInput.files.length > 0 && photoInput.files[0].size <= 1048576) {
                                            alert('Photo uploaded successfully.');
                                            // Here you can add the actual upload functionality
                                        } else {
                                            alert('No file selected to upload or file size exceeds limit.');
                                        }
                                    }
                                </script>
                                
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
                                            Salutation
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <div class="select-box">
                                        <select id="salute" name="Salutation">
                                            <option hidden>
                                                Selvan / Selvi
                                            </option>
                                            <option>
                                                Selvan
                                            </option>
                                            <option>
                                                Selvi
                                            </option>
                                        </select>
                                    </div>
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
                                    <label for="aadharPdf">
                                        <b>Aadhar Card (PDF)<span style="color: red;">*</span></b>
                                    </label>
                                    <input type="file" name="aadharPdf" id="aadharPdf" accept="application/pdf" required onchange="handleaadharFileSelect()">
                                    <span id="aadharfileSizeError" class="hidden" style="color: red;">File size must be less than 1 MB.</span>
                                </div>

                                <div id="aadharpdfFileLink" class="input-box file-upload hidden">
                                    <div class="column">
                                        <button type="button" id="viewaadharPdfButton" onclick="viewaadharPdf()">View PDF</button>
                                        <button type="button" id="uploadaadharFileButton" class="hidden" onclick="uploadaadharPdf()">Upload File</button>
                                    </div>
                                </div>
                            </div>

                            <script>
                                function handleaadharFileSelect() {
                                    const fileInput = document.getElementById('aadharPdf');
                                    const fileSizeError = document.getElementById('aadharfileSizeError');
                                    const pdfFileLink = document.getElementById('aadharpdfFileLink');
                                    const uploadButton = document.getElementById('uploadaadharFileButton');
                                    
                                    if (fileInput.files.length > 0) {
                                        const file = fileInput.files[0];
                                        if (file.size > 1048576) { // 1 MB = 1048576 bytes
                                            fileSizeError.classList.remove('hidden');
                                            pdfFileLink.classList.add('hidden');
                                            uploadButton.classList.add('hidden');
                                            fileInput.value = '';
                                            alert('File must be less than 1 MB.');
                                        } else {
                                            fileSizeError.classList.add('hidden');
                                            pdfFileLink.classList.remove('hidden');
                                            uploadButton.classList.remove('hidden');
                                        }
                                    } else {
                                        fileSizeError.classList.add('hidden');
                                        pdfFileLink.classList.add('hidden');
                                        uploadButton.classList.add('hidden');
                                    }
                                }

                                function viewaadharPdf() {
                                    const fileInput = document.getElementById('aadharPdf');
                                    if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                        const fileURL = URL.createObjectURL(fileInput.files[0]);
                                        window.open(fileURL);
                                    } else {
                                        alert('No file selected to view or file size exceeds limit.');
                                    }
                                }

                                function uploadaadharPdf() {
                                    const fileInput = document.getElementById('aadharPdf');
                                    if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                        alert('File uploaded successfully.');
                                        // Here you can add the actual upload functionality
                                    } else {
                                        alert('No file selected to upload or file size exceeds limit.');
                                    }
                                }
                            </script>

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
                                    <label for="communityPdf">
                                        <b>Community Certificate (PDF) <span style="color: red;">*</span></b>
                                    </label>
                                    <input type="file" name="communityPdf" id="communityPdf" accept="application/pdf" required onchange="handlecommunityFileSelect()">
                                    <span id="communityfileSizeError" class="hidden" style="color: red;">File size must be less than 1 MB.</span>
                                </div>

                                <div id="communitypdfFileLink" class="input-box file-upload hidden">
                                    <div class="column">
                                        <button type="button" id="viewcommunityPdfButton" onclick="viewcommunityPdf()">View PDF</button>
                                        <button type="button" id="uploadcommunityFileButton" class="hidden" onclick="uploadcommunityPdf()">Upload File</button>
                                    </div>
                                </div>
                            </div>

                            <script>
                                function handlecommunityFileSelect() {
                                    const fileInput = document.getElementById('communityPdf');
                                    const fileSizeError = document.getElementById('communityfileSizeError');
                                    const pdfFileLink = document.getElementById('communitypdfFileLink');
                                    const uploadButton = document.getElementById('uploadcommunityFileButton');
                                    
                                    if (fileInput.files.length > 0) {
                                        const file = fileInput.files[0];
                                        if (file.size > 1048576) { // 1 MB = 1048576 bytes
                                            fileSizeError.classList.remove('hidden');
                                            pdfFileLink.classList.add('hidden');
                                            uploadButton.classList.add('hidden');
                                            fileInput.value = '';
                                            alert('File must be less than 1 MB.');
                                        } else {
                                            fileSizeError.classList.add('hidden');
                                            pdfFileLink.classList.remove('hidden');
                                            uploadButton.classList.remove('hidden');
                                        }
                                    } else {
                                        fileSizeError.classList.add('hidden');
                                        pdfFileLink.classList.add('hidden');
                                        uploadButton.classList.add('hidden');
                                    }
                                }

                                function viewcommunityPdf() {
                                    const fileInput = document.getElementById('communityPdf');
                                    if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                        const fileURL = URL.createObjectURL(fileInput.files[0]);
                                        window.open(fileURL);
                                    } else {
                                        alert('No file selected to view or file size exceeds limit.');
                                    }
                                }

                                function uploadcommunityPdf() {
                                    const fileInput = document.getElementById('communityPdf');
                                    if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                        alert('File uploaded successfully.');
                                        // Here you can add the actual upload functionality
                                    } else {
                                        alert('No file selected to upload or file size exceeds limit.');
                                    }
                                }
                            </script>                     
        
                            
                            <div class="column">
                                <div class="yes-box">
                                    <label for="sportYes">
                                        <b>First Graduate?</b>
                                    </label>
                                    <div class="yes-option">
                                        <div class="yes">
                                            <input type="radio" id="FirstGraduateYes" name="FirstGraduate" value="yes">
                                            <label for="FirstGraduateYes">
                                                <b>Yes</b>
                                            </label>
                                        </div>
                                        <div class="yes">
                                            <input type="radio" id="FirstGraduateNo" name="FirstGraduate" value="no" checked>
                                            <label for="FirstGraduateNo">
                                                <b>No</b>
                                            </label>
                                        </div>
                                    </div>
                                </div>                                

                                <div id="uploadSection" class="input-box hidden">
                                    <div class="column">
                                        <div class="input-box file-upload">
                                            <label for="firstGraduateFile"><b>Upload First Graduate PDF:</b></label>
                                            <input type="file" id="firstGraduateFile" accept="application/pdf">
                                            <div id="fileInfo" class="hidden">
                                                <p id="fileName"></p>
                                            </div>
                                            <!-- <div id="errorMessage" class="hidden">                                            
                                                <span style="color: red">File must be less than 1 MB.</span>
                                            </div> -->
                                        </div>
                                        <div class="input-box file-upload">
                                            <div class="column">
                                                <button id="viewFile">View PDF</button>
                                                <button id="uploadFile" class="hidden">Upload File</button>  
                                            </div>                                
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', () => {
                                    const firstGraduateYes = document.getElementById('FirstGraduateYes');
                                    const firstGraduateNo = document.getElementById('FirstGraduateNo');
                                    const uploadSection = document.getElementById('uploadSection');
                                    const firstGraduateFile = document.getElementById('firstGraduateFile');
                                    const viewFile = document.getElementById('viewFile');
                                    const uploadFile = document.getElementById('uploadFile');
                                    const fileInfo = document.getElementById('fileInfo');
                                    const fileName = document.getElementById('fileName');

                                    firstGraduateYes.addEventListener('change', () => {
                                        if (firstGraduateYes.checked) {
                                            uploadSection.classList.remove('hidden');
                                        }
                                    });

                                    firstGraduateNo.addEventListener('change', () => {
                                        if (firstGraduateNo.checked) {
                                            uploadSection.classList.add('hidden');
                                            firstGraduateFile.value = '';
                                            fileInfo.classList.add('hidden');
                                            fileName.textContent = '';
                                            uploadFile.classList.add('hidden');
                                        }
                                    });

                                    firstGraduateFile.addEventListener('change', () => {
                                        if (firstGraduateFile.files.length > 0) {
                                            const file = firstGraduateFile.files[0];
                                            if (file.size > 1048576) { // 1 MB = 1048576 bytes
                                                alert('File must be less than 1 MB.');
                                                fileInfo.classList.add('hidden');
                                                fileName.textContent = '';
                                                firstGraduateFile.value = '';
                                                uploadFile.classList.add('hidden');
                                            } else {
                                                fileInfo.classList.remove('hidden');
                                                fileName.textContent = file.name;
                                                uploadFile.classList.remove('hidden');
                                            }
                                        } else {
                                            fileInfo.classList.add('hidden');
                                            fileName.textContent = '';
                                            uploadFile.classList.add('hidden');
                                        }
                                    });

                                    viewFile.addEventListener('click', () => {
                                        if (firstGraduateFile.files.length > 0 && firstGraduateFile.files[0].size <= 1048576) {
                                            const fileURL = URL.createObjectURL(firstGraduateFile.files[0]);
                                            window.open(fileURL);
                                        } else {
                                            alert('No file selected to view or file size exceeds limit.');
                                        }
                                    });

                                    uploadFile.addEventListener('click', () => {
                                        if (firstGraduateFile.files.length > 0 && firstGraduateFile.files[0].size <= 1048576) {
                                            alert('File uploaded successfully.');
                                            // Here you can add the actual upload functionality
                                        } else {
                                            alert('No file selected to upload or file size exceeds limit.');
                                        }
                                    });
                                });
                            </script>


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
                                    <input type="number" id="" name="AcademicYearJoining" min="1900" max="2100" required>
                                </div>

                                <!-- Course -->
                                <div class="input-box">
                                    <label for="course"><b>Course Type<span style="color: red;">*</span></b></label>
                                    <div class="select-box">
                                        <select name="CourseType" id="course" onchange="updateCourseType()">
                                            <option value="">-- Select --</option>
                                            <option value="UG">UG</option>
                                            <option value="PG">PG</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-box">
                                    <label for="courseType"><b>Course<span span style="color: red;">*</span></b></label>
                                    <div class="select-box">
                                        <select name="Course" id="courseType">
                                            <option value="">-- Select --</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-box">
                                    <label for="branch"><b>Branch / Specialization</b></label>
                                    <div class="select-box">
                                        <select name="Branch" id="branch" required>
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
                                    <select name="ModeOfStudy" required>
                                        <option value="">-- Select Mode --</option>
                                        <option>Regular</option>
                                        <option>Hybrid</option>
                                        <option>Part-Time</option>
                                    </select>
                                    </div>
                                </div>
                                
                                <div class="input-box">
                                    <label><b>Date Of Admission <span style="color: red;">*</span></b></label>
                                    <input type="date" name="DateOfAdmission" placeholder="Enter Admission date" required />
                                </div>

                                <div class="input-box">
                                    <label for="Source"><b>Type Of Admission <span style="color: red;">*</span></b></label>
                                    <div class="select-box">
                                        <select name="LateralEntry" id="Source" onchange="showFields()" required>
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
                                        <span id="counsellingfileSizeError" class="hidden" style="color: red;">File size must be less than 1 MB.</span>
                                    </div>                                    

                                    <div id="pdfFileLink" class="input-box file-upload hidden">
                                        <div class="column">                                        
                                            <button type="button" id="viewPdfButton" onclick="viewPdf()">View PDF</button>
                                            <button type="button" id="uploadFileButton" class="hidden">Upload File</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <script>
                                let fileURL = "";

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

                                function handleFileSelect() {
                                    var fileInput = document.getElementById("counsellingPdf");
                                    var pdfFileLink = document.getElementById("pdfFileLink");
                                    var uploadFileButton = document.getElementById("uploadFileButton");
                                    var fileSizeError = document.getElementById("counsellingfileSizeError");

                                    // Check if file is selected
                                    if (fileInput.files.length > 0) {
                                        var file = fileInput.files[0];
                                        var maxSize = 1 * 1024 * 1024; // 1 MB in bytes

                                        if (file.size > maxSize) {
                                            fileSizeError.classList.remove("hidden");
                                            alert("File size must be less than 1 MB.");
                                            pdfFileLink.classList.add("hidden");
                                            uploadFileButton.classList.add("hidden");
                                            fileURL = "";
                                        } else {
                                            fileSizeError.classList.add("hidden");
                                            // Check if file is a PDF
                                            if (file.type === "application/pdf") {
                                                fileURL = URL.createObjectURL(file);

                                                // Show the file link and upload button
                                                pdfFileLink.classList.remove("hidden");
                                                uploadFileButton.classList.remove("hidden");
                                            } else {
                                                pdfFileLink.classList.add("hidden");
                                                uploadFileButton.classList.add("hidden");
                                                fileURL = "";
                                            }
                                        }
                                    } else {
                                        pdfFileLink.classList.add("hidden");
                                        uploadFileButton.classList.add("hidden");
                                        fileURL = "";
                                    }
                                }

                                function viewPdf() {
                                    if (fileURL) {
                                        window.open(fileURL, '_blank');
                                    }
                                }

                                document.getElementById("uploadFileButton").addEventListener("click", function() {
                                    if (fileURL) {
                                        alert('File uploaded successfully.');
                                        // Here you can add the actual upload functionality
                                    } else {
                                        alert('No file selected to upload or file size exceeds limit.');
                                    }
                                });
                            </script>

                            <div class="column">
                                <div class="input-box file-upload">
                                    <label for="tcPdf">
                                        <b>TC (PDF) <span style="color: red;">*</span></b>
                                    </label>
                                    <input type="file" name="tcPdf" id="tcPdf" accept="application/pdf" required onchange="handletcFileSelect()">
                                    <span id="tcfileSizeError" class="hidden" style="color: red;">File size must be less than 1 MB.</span>
                                </div>

                                <div id="tcpdfFileLink" class="input-box file-upload hidden">
                                    <div class="column">
                                        <button type="button" id="viewtcPdfButton" onclick="viewtcPdf()">View PDF</button>
                                        <button type="button" id="uploadtcFileButton" class="hidden" onclick="uploadtcPdf()">Upload File</button>
                                    </div>
                                </div>
                            </div>

                            <script>
                                function handletcFileSelect() {
                                    const fileInput = document.getElementById('tcPdf');
                                    const fileSizeError = document.getElementById('tcfileSizeError');
                                    const pdfFileLink = document.getElementById('tcpdfFileLink');
                                    const uploadButton = document.getElementById('uploadtcFileButton');
                                    
                                    if (fileInput.files.length > 0) {
                                        const file = fileInput.files[0];
                                        if (file.size > 1048576) { // 1 MB = 1048576 bytes
                                            fileSizeError.classList.remove('hidden');
                                            pdfFileLink.classList.add('hidden');
                                            uploadButton.classList.add('hidden');
                                            fileInput.value = '';
                                            alert('File must be less than 1 MB.');
                                        } else {
                                            fileSizeError.classList.add('hidden');
                                            pdfFileLink.classList.remove('hidden');
                                            uploadButton.classList.remove('hidden');
                                        }
                                    } else {
                                        fileSizeError.classList.add('hidden');
                                        pdfFileLink.classList.add('hidden');
                                        uploadButton.classList.add('hidden');
                                    }
                                }

                                function viewtcPdf() {
                                    const fileInput = document.getElementById('tcPdf');
                                    if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                        const fileURL = URL.createObjectURL(fileInput.files[0]);
                                        window.open(fileURL);
                                    } else {
                                        alert('No file selected to view or file size exceeds limit.');
                                    }
                                }

                                function uploadtcPdf() {
                                    const fileInput = document.getElementById('tcPdf');
                                    if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                        alert('File uploaded successfully.');
                                        // Here you can add the actual upload functionality
                                    } else {
                                        alert('No file selected to upload or file size exceeds limit.');
                                    }
                                }
                            </script>
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
                                            <input type="radio" id="Hostel" name="Hosteller" value="yes">
                                            <label for="sportYes">
                                                <b>
                                                    Yes
                                                </b>
                                            </label>
                                        </div>
                                        <div class="yes">
                                            <input type="radio" id="Hostel" name="Hosteller" value="no" checked>
                                            <label for="sportNo">
                                                <b>
                                                    No
                                                </b>
                                            </label>
                                        </div>
                                    </div>
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
                                        <select name="SeekingAdmissionFor" id="educationLevel" >
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
                                        <input type="text" name="SchoolName10" id="schoolName10" placeholder="Enter your school name" required/>
                                    </div>

                                    <!-- Medium of instruction 10th -->
                                    <div class="input-box">
                                        <label><b>Medium Of Instruction</b></label>
                                        <div class="select-box">
                                        <select name="MediumOfInstruction10" required>
                                            <option value="">-- Select MediumOfInstruction --</option>
                                            <option>Tamil</option>
                                            <option>English</option>
                                        </select>
                                        </div>
                                    </div>

                                    <!-- TotalMarks in 10th -->
                                    <div class="input-box">
                                        <label for="tm10"><b>Total Marks(in 10th Std) <span style="color: red;">*</span></b></label>
                                        <input type="number" name="TotalMark10" id="tm10" min="0" max="500"placeholder="Enter total Marks" required />
                                    </div> 
                                
                                </div>
                                
                                <div class="column">
                                    <div class="input-box file-upload">
                                        <label for="ug10thPdf">
                                            <b>10th Marksheet(PDF) <span style="color: red;">*</span></b>
                                        </label>
                                        <input type="file" name="ug10thPdf" id="ug10thPdf" accept="application/pdf" required onchange="handleug10FileSelect()">
                                        <span id="ug10thfileSizeError" class="hidden" style="color: red;">File size must be less than 1 MB.</span>
                                    </div>

                                    <div id="ug10thpdfFileLink" class="input-box file-upload hidden">
                                        <div class="column">
                                            <button type="button" id="viewug10PdfButton" onclick="viewug10Pdf()">View PDF</button>
                                            <button type="button" id="uploadug10FileButton" class="hidden" onclick="uploadug10Pdf()">Upload File</button>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function handleug10FileSelect() {
                                        const fileInput = document.getElementById('ug10thPdf');
                                        const fileSizeError = document.getElementById('ug10thfileSizeError');
                                        const pdfFileLink = document.getElementById('ug10thpdfFileLink');
                                        const uploadButton = document.getElementById('uploadug10FileButton');
                                        
                                        if (fileInput.files.length > 0) {
                                            const file = fileInput.files[0];
                                            if (file.size > 1048576) { // 1 MB = 1048576 bytes
                                                fileSizeError.classList.remove('hidden');
                                                pdfFileLink.classList.add('hidden');
                                                uploadButton.classList.add('hidden');
                                                fileInput.value = '';
                                                alert('File must be less than 1 MB.');
                                            } else {
                                                fileSizeError.classList.add('hidden');
                                                pdfFileLink.classList.remove('hidden');
                                                uploadButton.classList.remove('hidden');
                                            }
                                        } else {
                                            fileSizeError.classList.add('hidden');
                                            pdfFileLink.classList.add('hidden');
                                            uploadButton.classList.add('hidden');
                                        }
                                    }

                                    function viewug10Pdf() {
                                        const fileInput = document.getElementById('ug10thPdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            const fileURL = URL.createObjectURL(fileInput.files[0]);
                                            window.open(fileURL);
                                        } else {
                                            alert('No file selected to view or file size exceeds limit.');
                                        }
                                    }

                                    function uploadug10Pdf() {
                                        const fileInput = document.getElementById('ug10thPdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            alert('File uploaded successfully.');
                                            // Here you can add the actual upload functionality
                                        } else {
                                            alert('No file selected to upload or file size exceeds limit.');
                                        }
                                    }
                                </script>

                                <!-- 12th Mark -->
                                <div class="input-box">
                                <label><b>12th : <span style="color: red;">*</span></b></label>
                                </div>

                                <!-- 12th school name , 12th medium of instruction,12th group -->
                                <div class="column">

                                <!-- 12th school name -->
                                <div class="input-box">
                                    <label for="schoolName12"><b>School Name(studied in 12th Std)</b></label>
                                    <input type="text" name="SchoolName12" id="schoolName12" placeholder="Enter your school name" required/>
                                </div>

                                <!-- 12th Medium of instruction -->
                                <div class="input-box">
                                    <label><b>Medium Of Instruction</b></label>
                                    <div class="select-box">
                                    <select name="MediumOfInstruction12" required>
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
                                    <select name="Group12" required>
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
                                        <input type="number" id="tm12" name="TotalMark12" min="0" max="600"placeholder="Enter total Marks" required />
                                    </div>

                                    <div class="input-box">
                                        <label for="co"><b>Cut Off(in 12th Std) <span style="color: red;">*</span></b></label>
                                        <input type="number" id="co" name="CutOff" min="0" max="200.0"placeholder="Enter your Cutoff" required />
                                    </div>

                                </div>

                                <div class="column">
                                    <div class="input-box file-upload">
                                        <label for="ug12thPdf">
                                            <b>12th Marksheet(PDF) <span style="color: red;">*</span></b>
                                        </label>
                                        <input type="file" name="ug12thPdf" id="ug12thPdf" accept="application/pdf" required onchange="handleug12FileSelect()">
                                        <span id="ug12thfileSizeError" class="hidden" style="color: red;">File size must be less than 1 MB.</span>
                                    </div>

                                    <div id="ug12thpdfFileLink" class="input-box file-upload hidden">
                                        <div class="column">
                                            <button type="button" id="viewug12PdfButton" onclick="viewug12Pdf()">View PDF</button>
                                            <button type="button" id="uploadug12FileButton" class="hidden" onclick="uploadug12Pdf()">Upload File</button>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function handleug12FileSelect() {
                                        const fileInput = document.getElementById('ug12thPdf');
                                        const fileSizeError = document.getElementById('ug12thfileSizeError');
                                        const pdfFileLink = document.getElementById('ug12thpdfFileLink');
                                        const uploadButton = document.getElementById('uploadug12FileButton');
                                        
                                        if (fileInput.files.length > 0) {
                                            const file = fileInput.files[0];
                                            if (file.size > 1048576) { // 1 MB = 1048576 bytes
                                                fileSizeError.classList.remove('hidden');
                                                pdfFileLink.classList.add('hidden');
                                                uploadButton.classList.add('hidden');
                                                fileInput.value = '';
                                                alert('File must be less than 1 MB.');
                                            } else {
                                                fileSizeError.classList.add('hidden');
                                                pdfFileLink.classList.remove('hidden');
                                                uploadButton.classList.remove('hidden');
                                            }
                                        } else {
                                            fileSizeError.classList.add('hidden');
                                            pdfFileLink.classList.add('hidden');
                                            uploadButton.classList.add('hidden');
                                        }
                                    }

                                    function viewug12Pdf() {
                                        const fileInput = document.getElementById('ug12thPdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            const fileURL = URL.createObjectURL(fileInput.files[0]);
                                            window.open(fileURL);
                                        } else {
                                            alert('No file selected to view or file size exceeds limit.');
                                        }
                                    }

                                    function uploadug12Pdf() {
                                        const fileInput = document.getElementById('ug12thPdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            alert('File uploaded successfully.');
                                            // Here you can add the actual upload functionality
                                        } else {
                                            alert('No file selected to upload or file size exceeds limit.');
                                        }
                                    }
                                </script>

                                <!-- Sports -->
                                <div class="column">
                                    <div class="yes-box">
                                        <label for="sportYes"><b>Are you in sports?</b></label>
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
                                            <label for="sportList"><b>Select Your Sport:</b></label>
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
                                            <label for="levelList"><b>Select Level:</b></label>
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

                                <!-- Sports JavaScript -->
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const sportYes = document.getElementById('sportYes');
                                        const sportNo = document.getElementById('sportNo');
                                        const sportsSelection = document.getElementById('sportsSelection');
                                        const levelSelection = document.getElementById('levelSelection');
                                        const sportList = document.getElementById('sportList');
                                        const levelList = document.getElementById('levelList');

                                        function handleSportChange() {
                                            if (sportYes.checked) {
                                                sportsSelection.classList.remove('hidden');
                                            } else {
                                                sportsSelection.classList.add('hidden');
                                                levelSelection.classList.add('hidden');
                                                sportList.value = 'none';
                                                levelList.value = 'none';
                                            }
                                        }

                                        function handleSportListChange() {
                                            if (sportList.value !== 'none') {
                                                levelSelection.classList.remove('hidden');
                                            } else {
                                                levelSelection.classList.add('hidden');
                                                levelList.value = 'none';
                                            }
                                        }

                                        sportYes.addEventListener('change', handleSportChange);
                                        sportNo.addEventListener('change', handleSportChange);
                                        sportList.addEventListener('change', handleSportListChange);
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
                                    <select name="MediumOfInstruction10" required>
                                        <option value="">-- Select MediumOfInstruction --</option>
                                        <option>Tamil</option>
                                        <option>English</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label for="tm10"><b>Total Marks(in 10th Std) <span style="color: red;">*</span></b></label>
                                    <input type="number" id="tm10" name="TotalMark10" min="0" max="500"placeholder="Enter total Marks" required />
                                </div>

                                </div>

                                <div class="column">
                                    <div class="input-box file-upload">
                                        <label for="lateral10thPdf">
                                            <b>10th Marksheet(PDF) <span style="color: red;">*</span></b>
                                        </label>
                                        <input type="file" name="lateral10thPdf" id="lateral10thPdf" accept="application/pdf" required onchange="handlelateral10FileSelect()">
                                        <span id="lateral10thfileSizeError" class="hidden" style="color: red;">File size must be less than 1 MB.</span>
                                    </div>

                                    <div id="lateral10thpdfFileLink" class="input-box file-upload hidden">
                                        <div class="column">
                                            <button type="button" id="viewlateral10PdfButton" onclick="viewlateral10Pdf()">View PDF</button>
                                            <button type="button" id="uploadlateral10FileButton" class="hidden" onclick="uploadlateral10Pdf()">Upload File</button>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function handlelateral10FileSelect() {
                                        const fileInput = document.getElementById('lateral10thPdf');
                                        const fileSizeError = document.getElementById('lateral10thfileSizeError');
                                        const pdfFileLink = document.getElementById('lateral10thpdfFileLink');
                                        const uploadButton = document.getElementById('uploadlateral10FileButton');
                                        
                                        if (fileInput.files.length > 0) {
                                            const file = fileInput.files[0];
                                            if (file.size > 1048576) { // 1 MB = 1048576 bytes
                                                fileSizeError.classList.remove('hidden');
                                                pdfFileLink.classList.add('hidden');
                                                uploadButton.classList.add('hidden');
                                                fileInput.value = '';
                                                alert('File must be less than 1 MB.');
                                            } else {
                                                fileSizeError.classList.add('hidden');
                                                pdfFileLink.classList.remove('hidden');
                                                uploadButton.classList.remove('hidden');
                                            }
                                        } else {
                                            fileSizeError.classList.add('hidden');
                                            pdfFileLink.classList.add('hidden');
                                            uploadButton.classList.add('hidden');
                                        }
                                    }

                                    function viewlateral10Pdf() {
                                        const fileInput = document.getElementById('lateral10thPdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            const fileURL = URL.createObjectURL(fileInput.files[0]);
                                            window.open(fileURL);
                                        } else {
                                            alert('No file selected to view or file size exceeds limit.');
                                        }
                                    }

                                    function uploadlateral10Pdf() {
                                        const fileInput = document.getElementById('lateral10thPdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            alert('File uploaded successfully.');
                                            // Here you can add the actual upload functionality
                                        } else {
                                            alert('No file selected to upload or file size exceeds limit.');
                                        }
                                    }
                                </script>

                                <div class="input-box">
                                <label><b>12th : (Optional)</b></label>
                                </div>

                                <div class="column">

                                <div class="input-box">
                                    <label for="schoolName12"><b>School Name(studied in 12th Std)</b></label>
                                    <input name="SchoolName12" type="text" id="schoolName12" placeholder="Enter your school name" required/>
                                </div>

                                <div class="input-box">
                                    <label><b>Medium Of Instruction</b></label>
                                    <div class="select-box">
                                    <select name="MediumOfInstruction12">
                                        <option value="">-- Select MediumOfInstruction --</option>
                                        <option>Tamil</option>
                                        <option>English</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label><b>12th Group </b></label>
                                    <div class="select-box">
                                    <select name="Group12LE">
                                        <option value="">-- Select Group --</option>
                                        <option>Bio-Maths</option>
                                        <option>Computer science-Maths</option>
                                        <option>Vocational</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label for="tm12"><b>Total Marks(in 12th std) </b></label>
                                    <input type="number" id="tm12" name="TotalMark12" min="0" max="600"placeholder="Enter total Marks" />
                                </div>

                                </div>

                                <div class="column">
                                    <div class="input-box file-upload">
                                        <label for="lateral12thPdf">
                                            <b>12th Marksheet(PDF) <span style="color: red;">*</span></b>
                                        </label>
                                        <input type="file" name="lateral12thPdf" id="lateral12thPdf" accept="application/pdf" required onchange="handlelateral12FileSelect()">
                                        <span id="lateral12thfileSizeError" class="hidden" style="color: red;">File size must be less than 1 MB.</span>
                                    </div>

                                    <div id="lateral12thpdfFileLink" class="input-box file-upload hidden">
                                        <div class="column">
                                            <button type="button" id="viewlateral12PdfButton" onclick="viewlateral12Pdf()">View PDF</button>
                                            <button type="button" id="uploadlateral12FileButton" class="hidden" onclick="uploadlateral12Pdf()">Upload File</button>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function handlelateral12FileSelect() {
                                        const fileInput = document.getElementById('lateral12thPdf');
                                        const fileSizeError = document.getElementById('lateral12thfileSizeError');
                                        const pdfFileLink = document.getElementById('lateral12thpdfFileLink');
                                        const uploadButton = document.getElementById('uploadlateral12FileButton');
                                        
                                        if (fileInput.files.length > 0) {
                                            const file = fileInput.files[0];
                                            if (file.size > 1048576) { // 1 MB = 1048576 bytes
                                                fileSizeError.classList.remove('hidden');
                                                pdfFileLink.classList.add('hidden');
                                                uploadButton.classList.add('hidden');
                                                fileInput.value = '';
                                                alert('File must be less than 1 MB.');
                                            } else {
                                                fileSizeError.classList.add('hidden');
                                                pdfFileLink.classList.remove('hidden');
                                                uploadButton.classList.remove('hidden');
                                            }
                                        } else {
                                            fileSizeError.classList.add('hidden');
                                            pdfFileLink.classList.add('hidden');
                                            uploadButton.classList.add('hidden');
                                        }
                                    }

                                    function viewlateral12Pdf() {
                                        const fileInput = document.getElementById('lateral12thPdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            const fileURL = URL.createObjectURL(fileInput.files[0]);
                                            window.open(fileURL);
                                        } else {
                                            alert('No file selected to view or file size exceeds limit.');
                                        }
                                    }

                                    function uploadlateral12Pdf() {
                                        const fileInput = document.getElementById('lateral12thPdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            alert('File uploaded successfully.');
                                            // Here you can add the actual upload functionality
                                        } else {
                                            alert('No file selected to upload or file size exceeds limit.');
                                        }
                                    }
                                </script>

                                <div class="input-box">
                                <label><b>Diploma :<span style="color: red;">*</span></b></label>
                                </div>

                                <!-- Diploma [nameofinstitution,percentage,course name] -->
                                <div class="column">

                                <div class="input-box">
                                    <label><b>Name Of the Institution </b></label>
                                    <input name="NameOfDiplomaCollege" type="text" placeholder="Enter your Institute name" required/>
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

                                <div class="column">
                                    <div class="input-box file-upload">
                                        <label for="diploma12thPdf">
                                            <b>Diploma Certificate(PDF) <span style="color: red;">*</span></b>
                                        </label>
                                        <input type="file" name="diplomaPdf" id="diplomaPdf" accept="application/pdf" required onchange="handlediplomaFileSelect()">
                                        <span id="diplomafileSizeError" class="hidden" style="color: red;">File size must be less than 1 MB.</span>
                                    </div>

                                    <div id="diplomapdfFileLink" class="input-box file-upload hidden">
                                        <div class="column">
                                            <button type="button" id="viewdiplomaPdfButton" onclick="viewdiplomaPdf()">View PDF</button>
                                            <button type="button" id="uploaddiplomaFileButton" class="hidden" onclick="uploaddiplomaPdf()">Upload File</button>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function handlediplomaFileSelect() {
                                        const fileInput = document.getElementById('diplomaPdf');
                                        const fileSizeError = document.getElementById('diplomafileSizeError');
                                        const pdfFileLink = document.getElementById('diplomapdfFileLink');
                                        const uploadButton = document.getElementById('uploaddiplomaFileButton');
                                        
                                        if (fileInput.files.length > 0) {
                                            const file = fileInput.files[0];
                                            if (file.size > 1048576) { // 1 MB = 1048576 bytes
                                                fileSizeError.classList.remove('hidden');
                                                pdfFileLink.classList.add('hidden');
                                                uploadButton.classList.add('hidden');
                                                fileInput.value = '';
                                                alert('File must be less than 1 MB.');
                                            } else {
                                                fileSizeError.classList.add('hidden');
                                                pdfFileLink.classList.remove('hidden');
                                                uploadButton.classList.remove('hidden');
                                            }
                                        } else {
                                            fileSizeError.classList.add('hidden');
                                            pdfFileLink.classList.add('hidden');
                                            uploadButton.classList.add('hidden');
                                        }
                                    }

                                    function viewdiplomaPdf() {
                                        const fileInput = document.getElementById('diplomaPdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            const fileURL = URL.createObjectURL(fileInput.files[0]);
                                            window.open(fileURL);
                                        } else {
                                            alert('No file selected to view or file size exceeds limit.');
                                        }
                                    }

                                    function uploaddiplomaPdf() {
                                        const fileInput = document.getElementById('diplomaPdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            alert('File uploaded successfully.');
                                            // Here you can add the actual upload functionality
                                        } else {
                                            alert('No file selected to upload or file size exceeds limit.');
                                        }
                                    }
                                </script>



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
                                    <select name="Board" required>
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
                                    <select name="MediumOfInstruction10" required>
                                        <option value="">-- Select MediumOfInstruction --</option>
                                        <option>Tamil</option>
                                        <option>English</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label for="tm10"><b>Total Marks(in 10th Std) <span style="color: red;">*</span></b></label>
                                    <input type="number" id="tm10" name="TotalMark10" min="0" max="500"placeholder="Enter total Marks" required />
                                </div>

                                </div>

                                <div class="column">
                                    <div class="input-box file-upload">
                                        <label for="pg10thPdf">
                                            <b>10th Marksheet(PDF) <span style="color: red;">*</span></b>
                                        </label>
                                        <input type="file" name="pg10thPdf" id="pg10thPdf" accept="application/pdf" required onchange="handlepg10FileSelect()">
                                        <span id="pg10thfileSizeError" class="hidden" style="color: red;">File size must be less than 1 MB.</span>
                                    </div>

                                    <div id="pg10thpdfFileLink" class="input-box file-upload hidden">
                                        <div class="column">
                                            <button type="button" id="viewpg10PdfButton" onclick="viewpg10Pdf()">View PDF</button>
                                            <button type="button" id="uploadpg10FileButton" class="hidden" onclick="uploadpg10Pdf()">Upload File</button>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function handlepg10FileSelect() {
                                        const fileInput = document.getElementById('pg10thPdf');
                                        const fileSizeError = document.getElementById('pg10thfileSizeError');
                                        const pdfFileLink = document.getElementById('pg10thpdfFileLink');
                                        const uploadButton = document.getElementById('uploadpg10FileButton');
                                        
                                        if (fileInput.files.length > 0) {
                                            const file = fileInput.files[0];
                                            if (file.size > 1048576) { // 1 MB = 1048576 bytes
                                                fileSizeError.classList.remove('hidden');
                                                pdfFileLink.classList.add('hidden');
                                                uploadButton.classList.add('hidden');
                                                fileInput.value = '';
                                                alert('File must be less than 1 MB.');
                                            } else {
                                                fileSizeError.classList.add('hidden');
                                                pdfFileLink.classList.remove('hidden');
                                                uploadButton.classList.remove('hidden');
                                            }
                                        } else {
                                            fileSizeError.classList.add('hidden');
                                            pdfFileLink.classList.add('hidden');
                                            uploadButton.classList.add('hidden');
                                        }
                                    }

                                    function viewpg10Pdf() {
                                        const fileInput = document.getElementById('pg10thPdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            const fileURL = URL.createObjectURL(fileInput.files[0]);
                                            window.open(fileURL);
                                        } else {
                                            alert('No file selected to view or file size exceeds limit.');
                                        }
                                    }

                                    function uploadpg10Pdf() {
                                        const fileInput = document.getElementById('pg10thPdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            alert('File uploaded successfully.');
                                            // Here you can add the actual upload functionality
                                        } else {
                                            alert('No file selected to upload or file size exceeds limit.');
                                        }
                                    }
                                </script>

                                <div class="input-box">
                                <label><b>12th :<span style="color: red;">*</span> </b></label>
                                </div>

                                <div class="column">
                                <div class="input-box">
                                    <label for="schoolName12"><b>School Name(studied in 12th Std)</b></label>
                                    <input type="text" name="SchoolName12" id="schoolName12" placeholder="Enter your school name" required/>
                                </div>

                                <div class="input-box">
                                    <label><b>Medium Of Instruction</b></label>
                                    <div class="select-box">
                                    <select name="MediumOfInstruction12" required>
                                        <option value="">-- Select MediumOfInstruction --</option>
                                        <option>Tamil</option>
                                        <option>English</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label><b>12th Group </b></label>
                                    <div class="select-box">
                                    <select name="Group12" required>
                                        <option value="">-- Select Group --</option>
                                        <option>Bio-Maths</option>
                                        <option>Computer science-Maths</option>
                                        <option>Vocational</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="input-box">
                                    <label for="tm12"><b>Total Marks(in 12th std) </b></label>
                                    <input type="number" id="tm12" name="TotalMark12" min="0" max="600"placeholder="Enter total Marks" required />
                                </div>
                                </div>

                                <div class="column">
                                    <div class="input-box file-upload">
                                        <label for="pg12thPdf">
                                            <b>12th Marksheet(PDF) <span style="color: red;">*</span></b>
                                        </label>
                                        <input type="file" name="pg12thPdf" id="pg12thPdf" accept="application/pdf" required onchange="handlepg12FileSelect()">
                                        <span id="pg12thfileSizeError" class="hidden" style="color: red;">File size must be less than 1 MB.</span>
                                    </div>

                                    <div id="pg12thpdfFileLink" class="input-box file-upload hidden">
                                        <div class="column">
                                            <button type="button" id="viewpg12PdfButton" onclick="viewpg12Pdf()">View PDF</button>
                                            <button type="button" id="uploadpg12FileButton" class="hidden" onclick="uploadpg12Pdf()">Upload File</button>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function handlepg12FileSelect() {
                                        const fileInput = document.getElementById('pg12thPdf');
                                        const fileSizeError = document.getElementById('pg12thfileSizeError');
                                        const pdfFileLink = document.getElementById('pg12thpdfFileLink');
                                        const uploadButton = document.getElementById('uploadpg12FileButton');
                                        
                                        if (fileInput.files.length > 0) {
                                            const file = fileInput.files[0];
                                            if (file.size > 1048576) { // 1 MB = 1048576 bytes
                                                fileSizeError.classList.remove('hidden');
                                                pdfFileLink.classList.add('hidden');
                                                uploadButton.classList.add('hidden');
                                                fileInput.value = '';
                                                alert('File must be less than 1 MB.');
                                            } else {
                                                fileSizeError.classList.add('hidden');
                                                pdfFileLink.classList.remove('hidden');
                                                uploadButton.classList.remove('hidden');
                                            }
                                        } else {
                                            fileSizeError.classList.add('hidden');
                                            pdfFileLink.classList.add('hidden');
                                            uploadButton.classList.add('hidden');
                                        }
                                    }

                                    function viewpg12Pdf() {
                                        const fileInput = document.getElementById('pg12thPdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            const fileURL = URL.createObjectURL(fileInput.files[0]);
                                            window.open(fileURL);
                                        } else {
                                            alert('No file selected to view or file size exceeds limit.');
                                        }
                                    }

                                    function uploadpg12Pdf() {
                                        const fileInput = document.getElementById('pg12thPdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            alert('File uploaded successfully.');
                                            // Here you can add the actual upload functionality
                                        } else {
                                            alert('No file selected to upload or file size exceeds limit.');
                                        }
                                    }
                                </script>

                                <div class="input-box">
                                <label><b>Bachelor's Degree : <span style="color: red;">*</span></b></label>
                                </div>

                                <div class="column">              
                                <div class="input-box">
                                    <label for="instituteName"><b>Name Of the College </b></label>
                                    <input type="text" name="NameOfUGCollege" id="instituteName" placeholder="Enter your Institute name" required/>
                                </div>

                                <div class="input-box">
                                    <label for="coursename"><b>Name Of UG Course </b></label>
                                    <input type="text" name="NameOfUGCourse" id="coursename" placeholder="Enter your Course name" required/>
                                </div>

                                <div class="input-box">
                                    <label for="cgpa"><b> CGPA or Percentage <span style="color: red;">*</span></b></label>
                                    <input type="number" id="cgpa" name="CGPA" min="0" max="10"placeholder="Enter your percentage" required />
                                </div>
                                </div>      
                                
                                <div class="column">
                                    <div class="input-box file-upload">
                                        <label for="degreePdf">
                                            <b>Degree (PDF) <span style="color: red;">*</span></b>
                                        </label>
                                        <input type="file" name="degreePdf" id="degreePdf" accept="application/pdf" required onchange="handledegreeFileSelect()">
                                        <span id="degreefileSizeError" class="hidden" style="color: red;">File size must be less than 1 MB.</span>
                                    </div>

                                    <div id="degreepdfFileLink" class="input-box file-upload hidden">
                                        <div class="column">
                                            <button type="button" id="viewdegreePdfButton" onclick="viewdegreePdf()">View PDF</button>
                                            <button type="button" id="uploaddegreeFileButton" class="hidden" onclick="uploaddegreePdf()">Upload File</button>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    function handledegreeFileSelect() {
                                        const fileInput = document.getElementById('degreePdf');
                                        const fileSizeError = document.getElementById('degreefileSizeError');
                                        const pdfFileLink = document.getElementById('degreepdfFileLink');
                                        const uploadButton = document.getElementById('uploaddegreeFileButton');
                                        
                                        if (fileInput.files.length > 0) {
                                            const file = fileInput.files[0];
                                            if (file.size > 1048576) { // 1 MB = 1048576 bytes
                                                fileSizeError.classList.remove('hidden');
                                                pdfFileLink.classList.add('hidden');
                                                uploadButton.classList.add('hidden');
                                                fileInput.value = '';
                                                alert('File must be less than 1 MB.');
                                            } else {
                                                fileSizeError.classList.add('hidden');
                                                pdfFileLink.classList.remove('hidden');
                                                uploadButton.classList.remove('hidden');
                                            }
                                        } else {
                                            fileSizeError.classList.add('hidden');
                                            pdfFileLink.classList.add('hidden');
                                            uploadButton.classList.add('hidden');
                                        }
                                    }

                                    function viewdegreePdf() {
                                        const fileInput = document.getElementById('degreePdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            const fileURL = URL.createObjectURL(fileInput.files[0]);
                                            window.open(fileURL);
                                        } else {
                                            alert('No file selected to view or file size exceeds limit.');
                                        }
                                    }

                                    function uploaddegreePdf() {
                                        const fileInput = document.getElementById('degreePdf');
                                        if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                            alert('File uploaded successfully.');
                                            // Here you can add the actual upload functionality
                                        } else {
                                            alert('No file selected to upload or file size exceeds limit.');
                                        }
                                    }
                                </script>
                                
                            
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
                                            Parent Mobile Number
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <!-- <input type="number" id="ParentsMobileNo" size="10" name="ParentsMobileNo" placeholder="Enter Parent Number"/> -->
                                    <input id="ParentsMobileNo" type="number" name="ParentsMobileNumber" placeholder="Enter Parent Number" oninput="validateParentPhoneNumber(this)" required>
                                    <span id="parentphoneError" class="hidden" style="color: red;">Phone number must be exactly 10 digits.</span>
                                </div>

                                <script>
                                    function validateParentPhoneNumber(input) {
                                        const phoneError = document.getElementById('parentphoneError');
                                        const phoneNumber = input.value;

                                        if (phoneNumber.length === 10 && /^\d{10}$/.test(phoneNumber)) {
                                            phoneError.classList.add('hidden');
                                            input.setCustomValidity('');
                                        } else {
                                            phoneError.classList.remove('hidden');
                                            input.setCustomValidity('Phone number must be exactly 10 digits.');
                                        }
                                    }                                
                                </script>
                                
                            </div>

                            <div class="column">
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
                            </div>


                            <div class="column">
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Guardian's Name (Optional)
                                        </b>
                                    </label>
                                    <input type="text" id="GuardianName" name="GuardianName" placeholder="Enter full name"
                                    />
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

                                <div class="input-box file-upload">
                                    <label for="incomePdf">
                                        <b>Income Certificate (PDF)<span style="color: red;">*</span></b>
                                    </label>
                                    <input type="file" name="incomePdf" id="incomePdf" accept="application/pdf" required onchange="handleincomeFileSelect()">
                                    <span id="incomefileSizeError" class="hidden" style="color: red;">File size must be less than 1 MB.</span>
                                </div>

                                <div id="incomepdfFileLink" class="input-box file-upload hidden">
                                    <div class="column">
                                        <button type="button" id="viewincomePdfButton" onclick="viewincomePdf()">View PDF</button>
                                        <button type="button" id="uploadincomeFileButton" class="hidden" onclick="uploadincomePdf()">Upload File</button>
                                    </div>
                                </div>
                                
                            </div>

                            <script>
                                function handleincomeFileSelect() {
                                    const fileInput = document.getElementById('incomePdf');
                                    const fileSizeError = document.getElementById('incomefileSizeError');
                                    const pdfFileLink = document.getElementById('incomepdfFileLink');
                                    const uploadButton = document.getElementById('uploadincomeFileButton');
                                    
                                    if (fileInput.files.length > 0) {
                                        const file = fileInput.files[0];
                                        if (file.size > 1048576) { // 1 MB = 1048576 bytes
                                            fileSizeError.classList.remove('hidden');
                                            pdfFileLink.classList.add('hidden');
                                            uploadButton.classList.add('hidden');
                                            fileInput.value = '';
                                            alert('File must be less than 1 MB.');
                                        } else {
                                            fileSizeError.classList.add('hidden');
                                            pdfFileLink.classList.remove('hidden');
                                            uploadButton.classList.remove('hidden');
                                        }
                                    } else {
                                        fileSizeError.classList.add('hidden');
                                        pdfFileLink.classList.add('hidden');
                                        uploadButton.classList.add('hidden');
                                    }
                                }

                                function viewincomePdf() {
                                    const fileInput = document.getElementById('incomePdf');
                                    if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                        const fileURL = URL.createObjectURL(fileInput.files[0]);
                                        window.open(fileURL);
                                    } else {
                                        alert('No file selected to view or file size exceeds limit.');
                                    }
                                }

                                function uploadincomePdf() {
                                    const fileInput = document.getElementById('incomePdf');
                                    if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                        alert('File uploaded successfully.');
                                        // Here you can add the actual upload functionality
                                    } else {
                                        alert('No file selected to upload or file size exceeds limit.');
                                    }
                                }
                            </script>

                            <hr style="margin-top: 50px; margin-bottom: 30px;" />

                            <header>
                                <b>
                                    Permanent Address
                                </b>
                            </header>
                            <div class="column" style="margin-top: 10px;">
                                <div class="input-box">
                                    <label><b>Country</b></label>
                                    <input id="P_Country" type="text" name="P_Country" placeholder="Enter Country" oninput="toUpperCase(this)">
                                </div>

                                <div class="input-box">
                                    <label for="State"><b>State <span style="color: red;">*</span></b></label>
                                    <div class="select-box">
                                        <select id="P_State" name="P_State" onchange="handleP_StateChange(this)">
                                            <option value="">-- Select State --</option>
                                            <option value="TAMIL NADU">TAMIL NADU</option>
                                            <option value="OTHER STATES">OTHER STATES</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="input-box hidden" id="district-box">
                                    <label for="District"><b>District <span style="color: red;">*</span></b></label>
                                    <input id="P_District" type="text" name="P_District" placeholder="Enter District" oninput="toUpperCase(this)">
                                </div>
                            </div>

                            <div id="other-states-box" class="hidden">
                                <div class="column">
                                    <div class="input-box">
                                        <label for="OtherStateName"><b>Other State Name <span style="color: red;">*</span></b></label>
                                        <input id="P_OtherStateName" type="text" name="P_OtherStateName" placeholder="Enter Other State Name" oninput="toUpperCase(this)">
                                    </div>

                                    <div class="input-box">
                                        <label for="OtherStateDistrictName"><b>Other State District Name <span style="color: red;">*</span></b></label>
                                        <input id="P_OtherStateDistrictName" type="text" name="P_OtherDistrictName" placeholder="Enter Other State District Name" oninput="toUpperCase(this)">
                                    </div>

                                    <div class="input-box file-upload">
                                        <label for="migrationPdf">
                                            <b>Migration Certificate (PDF) <span style="color: red;">*</span></b>
                                        </label>
                                        <input type="file" name="migrationPdf" id="migrationPdf" accept="application/pdf" required onchange="handleMigrationFileSelect()">
                                        <span id="migrationfileSizeError" class="hidden" style="color: red;">File size must be less than 1 MB.</span>
                                    </div>

                                    <div id="migrationpdfFileLink" class="input-box file-upload hidden">
                                        <div class="column">
                                            <button type="button" id="viewmigrationPdfButton" onclick="viewMigrationPdf()">View PDF</button>
                                            <button type="button" id="uploadmigrationFileButton" class="hidden" onclick="uploadMigrationPdf()">Upload File</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                function toUpperCase(input) {
                                    input.value = input.value.toUpperCase();
                                }

                                function handleP_StateChange(select) {
                                    const selectedValue = select.value;
                                    const districtBox = document.getElementById('district-box');
                                    const otherStatesBox = document.getElementById('other-states-box');
                                    
                                    if (selectedValue === 'TAMIL NADU') {
                                        districtBox.classList.remove('hidden'); // Show district input
                                        otherStatesBox.classList.add('hidden'); // Hide other states inputs
                                    } else if (selectedValue === 'OTHER STATES') {
                                        districtBox.classList.add('hidden'); // Hide district input
                                        otherStatesBox.classList.remove('hidden'); // Show other states inputs
                                    } else {
                                        districtBox.classList.add('hidden'); // Hide district input
                                        otherStatesBox.classList.add('hidden'); // Hide other states inputs
                                    }
                                }

                                function handleMigrationFileSelect() {
                                    const fileInput = document.getElementById('migrationPdf');
                                    const fileSizeError = document.getElementById('migrationfileSizeError');
                                    const pdfFileLink = document.getElementById('migrationpdfFileLink');
                                    const uploadButton = document.getElementById('uploadmigrationFileButton');
                                    
                                    if (fileInput.files.length > 0) {
                                        const file = fileInput.files[0];
                                        if (file.size > 1048576) { // 1 MB = 1048576 bytes
                                            fileSizeError.classList.remove('hidden');
                                            pdfFileLink.classList.add('hidden');
                                            uploadButton.classList.add('hidden');
                                            fileInput.value = '';
                                            alert('File must be less than 1 MB.');
                                        } else {
                                            fileSizeError.classList.add('hidden');
                                            pdfFileLink.classList.remove('hidden');
                                            uploadButton.classList.remove('hidden');
                                        }
                                    } else {
                                        fileSizeError.classList.add('hidden');
                                        pdfFileLink.classList.add('hidden');
                                        uploadButton.classList.add('hidden');
                                    }
                                }

                                function viewMigrationPdf() {
                                    const fileInput = document.getElementById('migrationPdf');
                                    if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                        const fileURL = URL.createObjectURL(fileInput.files[0]);
                                        window.open(fileURL);
                                    } else {
                                        alert('No file selected to view or file size exceeds limit.');
                                    }
                                }

                                function uploadMigrationPdf() {
                                    const fileInput = document.getElementById('migrationPdf');
                                    if (fileInput.files.length > 0 && fileInput.files[0].size <= 1048576) {
                                        alert('File uploaded successfully.');
                                        // Here you can add the actual upload functionality
                                    } else {
                                        alert('No file selected to upload or file size exceeds limit.');
                                    }
                                }

                                function copyAddress() {
                                    const isChecked = document.getElementById('sameAsPermanent').checked;
                                    
                                    if (isChecked) {
                                        // Copy fields from permanent address to communication address
                                        document.getElementById('C_Country').value = document.getElementById('P_Country').value;
                                        document.getElementById('C_State').value = document.getElementById('P_State').value;
                                        document.getElementById('C_District').value = document.getElementById('P_District').value;
                                        document.getElementById('C_OtherStateName').value = document.getElementById('P_OtherStateName').value;
                                        document.getElementById('C_OtherStateDistrictName').value = document.getElementById('P_OtherStateDistrictName').value;
                                        document.getElementById('C_LocationType').value = document.getElementById('P_LocationType').value;
                                        document.getElementById('C_Taluk').value = document.getElementById('P_Taluk').value;
                                        document.getElementById('C_Village').value = document.getElementById('P_Village').value;
                                        document.getElementById('C_Block').value = document.getElementById('P_Block').value;
                                        document.getElementById('C_Pincode').value = document.getElementById('P_Pincode').value;
                                        document.getElementById('C_VillagePanchayat').value = document.getElementById('P_VillagePanchayat').value;
                                        document.getElementById('C_PostalAddress').value = document.getElementById('P_PostalAddress').value;
                                        
                                        // Trigger state change to update visibility
                                        handleCommunicationStateChange(document.getElementById('C_State'));
                                    } else {
                                        // Clear communication address fields
                                        document.getElementById('C_Country').value = '';
                                        document.getElementById('C_State').value = '';
                                        document.getElementById('C_District').value = '';
                                        document.getElementById('C_OtherStateName').value = '';
                                        document.getElementById('C_OtherStateDistrictName').value = '';
                                        document.getElementById('C_LocationType').value = '';
                                        document.getElementById('C_Taluk').value = '';
                                        document.getElementById('C_Village').value = '';
                                        document.getElementById('C_Block').value = '';
                                        document.getElementById('C_Pincode').value = '';
                                        document.getElementById('C_VillagePanchayat').value = '';
                                        document.getElementById('C_PostalAddress').value = '';
                                        
                                        // Trigger state change to hide/show fields as necessary
                                        handleCommunicationStateChange(document.getElementById('C_State'));
                                    }
                                }
                            </script>

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

                        

                                
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Taluk
                                        </b>
                                    </label>
                                    <input id="P_Taluk" type="text" name="P_Taluk" placeholder="Enter Taluk">
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

                            <div class="column">
                                <!-- Checkbox to copy address -->
                                <div class="checkbox-container">
                                    <input type="checkbox" id="sameAsPermanent" onclick="copyAddress()">
                                    <label for="sameAsPermanent"><b>Same as Permanent Address</b></label>
                                </div>
                            </div>
                            <br>                            
                            <br>                            

                            <header>
                                <b>
                                    Communication Address
                                </b>
                            </header>
                            <div class="column" style="margin-top: 10px;">
                                <div class="input-box">
                                    <label><b>Country</b></label>
                                    <input id="C_Country" type="text" name="C_Country" placeholder="Enter Country" oninput="toUpperCase(this)">
                                </div>

                                <div class="input-box">
                                    <label for="State"><b>State <span style="color: red;">*</span></b></label>
                                    <div class="select-box">
                                        <select id="C_State" name="C_State" onchange="handleC_StateChange(this)">
                                            <option value="">-- Select State --</option>
                                            <option value="TAMIL_NADU">TAMIL NADU</option>
                                            <option value="OTHER_STATES">OTHER STATES</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="input-box hidden" id="C-district-box">
                                    <label for="District"><b>District <span style="color: red;">*</span></b></label>
                                    <input id="C_District" type="text" name="C_District" placeholder="Enter District" oninput="toUpperCase(this)">
                                </div>
                            </div>

                            <div id="C-other-states-box" class="hidden">
                                <div class="column">
                                    <div class="input-box">
                                        <label for="OtherStateName"><b>Other State Name <span style="color: red;">*</span></b></label>
                                        <input id="C_OtherStateName" type="text" name="C_OtherStateName" placeholder="Enter Other State Name" oninput="toUpperCase(this)">
                                    </div>

                                    <div class="input-box">
                                        <label for="OtherStateDistrictName"><b>Other State District Name <span style="color: red;">*</span></b></label>
                                        <input id="C_OtherStateDistrictName" type="text" name="C_OtherDistrictName" placeholder="Enter Other State District Name" oninput="toUpperCase(this)">
                                    </div>                                    
                                </div>
                            </div>

                            <script>
                                function toUpperCase(input) {
                                    input.value = input.value.toUpperCase();
                                }

                                function handleC_StateChange(select) {
                                    const selectedValue = select.value;
                                    const districtBox = document.getElementById('C-district-box');
                                    const otherStatesBox = document.getElementById('C-other-states-box');
                                    
                                    if (selectedValue === 'TAMIL_NADU') {
                                        districtBox.classList.remove('hidden'); // Show district input
                                        otherStatesBox.classList.add('hidden'); // Hide other states inputs
                                    } else if (selectedValue === 'OTHER_STATES') {
                                        districtBox.classList.add('hidden'); // Hide district input
                                        otherStatesBox.classList.remove('hidden'); // Show other states inputs
                                    } else {
                                        districtBox.classList.add('hidden'); // Hide district input
                                        otherStatesBox.classList.add('hidden'); // Hide other states inputs
                                    }
                                }                                
                            </script>


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
                                


                                <div class="input-box">
                                    <label>
                                        <b>
                                            Taluk
                                        </b>
                                    </label>
                                    <input id="C_Taluk" type="text" name="C_Taluk" placeholder="Enter Taluk">
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