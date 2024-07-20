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
                        <form action="admission.php" method="post" class="form">
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
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Aadhar Number
                                        </b>
                                    </label>
                                    <input type="number" id="AadhaarNumber" name="AadhaarNumber" placeholder="Enter Aadhar number"
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
                            </div>
                            <div class="column">
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
                                <!-- community -->
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Community
                                            <span style="color: red;">
                                                *
                                            </span>
                                        </b>
                                    </label>
                                    <div class="select-box">
                                        <select id="Community" name="Community">
                                            <option hidden>
                                                Community
                                            </option>
                                            <option>
                                                OC
                                            </option>
                                            <option>
                                                BC
                                            </option>
                                            <option>
                                                MBC
                                            </option>
                                            <option>
                                                SC
                                            </option>
                                            <option>
                                                ST
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
                                    Permanent Address
                                </b>
                            </header>
                            <div class="column" style="margin-top: 10px;">
                                <div class="input-box">
                                    <label>
                                        <b>
                                            Country
                                        </b>
                                    </label>
                                    <input id="P_Country" type="text" name="P_Country" placeholder="Enter Country">
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
                                        <select id="P_State" name="P_State">
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
                                        <select id="P_District" name="P_District">
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
                                <!-- district -->
                                <!-- pincode -->
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
                                <!-- village -->
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
                                <!-- state -->
                                <!-- district -->
                                <!-- pincode -->
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
                                            <span style="color: red;">
                                                *
                                            </span>
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
                                    Current Academic Information
                                </b>
                            </header>
                            <div class="column" style="margin-top: 10px;">
                            </div>
                            <!-- District & state [JavaScript] -->
                            <script>
                                var stateDistricts = {
                                    "TamilNadu": ["Ariyalur", "Chennai", "Coimbatore", "Cuddalore", "Dharmapuri", "Dindigul", "Erode", "Kanchipuram", "Kanyakumari", "Karur", "Krishnagiri", "Madurai", "Nagapattinam", "Namakkal", "Nilgiris", "Perambalur", "Pudukkottai", "Ramanathapuram", "Salem", "Sivaganga", "Thanjavur", "Theni", "Thoothukudi", "Tiruchirappalli", "Tirunelveli", "Tiruppur", "Tiruvallur", "Tiruvannamalai", "Tiruvarur", "Vellore", "Viluppuram", "Virudhunagar"],
                                    "Kerala": ["Alappuzha", "Ernakulam", "Idukki", "Kannur", "Kasaragod", "Kollam", "Kottayam", "Kozhikode", "Malappuram", "Palakkad", "Pathanamthitta", "Thiruvananthapuram", "Thrissur", "Wayanad"],
                                    "Karnataka": ["Bagalkot", "Bangalore Rural", "Bangalore Urban", "Belgaum", "Bellary", "Bidar", "Vijayapura", "Chamarajanagar", "Chikkaballapur", "Chikkamagaluru", "Chitradurga", "Dakshina Kannada", "Davanagere", "Dharwad", "Gadag", "Gulbarga", "Hassan", "Haveri", "Kodagu", "Kolar", "Koppal", "Mandya", "Mysore", "Raichur", "Ramanagara", "Shimoga", "Tumkur", "Udupi", "Uttara Kannada", "Yadgir"],
                                    "AndraPradesh": ["Anantapur", "Chittoor", "East Godavari", "Guntur", "Kadapa", "Krishna", "Kurnool", "Prakasam", "Nellore", "Srikakulam", "Visakhapatnam", "Vizianagaram", "West Godavari"]

                                };

                                $(document).ready(function() {
                                    var stateSelect = $("#State");
                                    var districtSelect = $("#District");

                                    // Populate state options
                                    $.each(stateDistricts,
                                    function(state, districts) {
                                        stateSelect.append($("<option></option>").attr("value", state).text(state));
                                    });

                                    // On state change, populate district options
                                    stateSelect.change(function() {
                                        var selectedState = $(this).val();
                                        var districts = stateDistricts[selectedState];
                                        districtSelect.empty().append("<option value=''>-- select one --</option>");
                                        $.each(districts,
                                        function(index, district) {
                                            districtSelect.append($("<option></option>").attr("value", district).text(district));
                                        });
                                    });
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