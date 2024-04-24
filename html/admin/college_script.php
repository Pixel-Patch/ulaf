<script>
    document.getElementById("formValidationCategory").addEventListener("change", function() {
        var category = this.value;
        var collegeDropdown = document.getElementById("formValidationCollege");
        var courseDropdown = document.getElementById("formValidationCourse"); // Ensure correct ID for course dropdown
        collegeDropdown.innerHTML = ""; // Clear existing options
        courseDropdown.innerHTML = "<option value=''>Select Program</option>"; // Reset program dropdown

        // Populate college options based on selected category
        switch (category) {
            case "Undergraduate":
                collegeDropdown.innerHTML += "<option value='College of Agriculture'>College of Agriculture</option>";
                collegeDropdown.innerHTML += "<option value='College of Arts and Social Sciences'>College of Arts and Social Sciences</option>";
                collegeDropdown.innerHTML += "<option value='College of Business Administration and Accountancy'>College of Business Administration and Accountancy</option>";
                collegeDropdown.innerHTML += "<option value='College of Education'>College of Education</option>";
                collegeDropdown.innerHTML += "<option value='College of Engineering'>College of Engineering</option>";
                collegeDropdown.innerHTML += "<option value='College of Fisheries'>College of Fisheries</option>";
                collegeDropdown.innerHTML += "<option value='College of Home Science and Industry'>College of Home Science and Industry</option>";
                collegeDropdown.innerHTML += "<option value='College of Science'>College of Science</option>";
                collegeDropdown.innerHTML += "<option value='College of Veterinary Science and Medicine'>College of Veterinary Science and Medicine</option>";
                break;
            case "Graduate":
                collegeDropdown.innerHTML += "<option value='Doctor of Philosophy'>Doctor of Philosophy</option>";
                collegeDropdown.innerHTML += "<option value='Master of Science'>Master of Science</option>";
                collegeDropdown.innerHTML += "<option value='Other Masteral Programs'>Other Masteral Programs</option>";
                break;

            case "Other Curricular Offerings":
                collegeDropdown.innerHTML += "<option value='Distance, Open, and Transnational University (DOTUni)'>Distance, Open, and Transnational University (DOTUni)</option>";
                collegeDropdown.innerHTML += "<option value='Institute of Sports, Physical Education and Recreation'>Institute of Sports, Physical Education and Recreation</option>";
                collegeDropdown.innerHTML += "<option value='Vocational Course (1-Year Program)'>Vocational Course (1-Year Program)</option>";
                break;


        }
    });

    // JavaScript to populate program options based on selected college
    document.getElementById("formValidationCollege").addEventListener("change", function() {
        var college = this.value;
        var courseDropdown = document.getElementById("formValidationCourse");
        courseDropdown.innerHTML = ""; // Clear existing options

        // Populate program options based on selected college
        switch (college) {

            // Undergraduate
            case "College of Agriculture":
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Agribusiness (BSAb)'>Bachelor of Science in Agribusiness (BSAb)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Agriculture (BSA)'>Bachelor of Science in Agriculture (BSA)</option>";
                break;

            case "College of Arts and Social Sciences":
                courseDropdown.innerHTML += "<option value='Bachelor of Arts in Filipino (BAFil)'>Bachelor of Arts in Filipino (BAFil)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Arts in Literature (BALit)'>Bachelor of Arts in Literature (BALit)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Arts in Social Sciences (BASS)'>Bachelor of Arts in Social Sciences (BASS)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Development Communication (BSDC)'>Bachelor of Science in Development Communication (BSDC)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Psychology (BSPsych)'>Bachelor of Science in Psychology (BSPsych)</option>";
                break;

            case "College of Business Administration and Accountancy":
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Accountancy (BSAc)'>Bachelor of Science in Accountancy (BSAc)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Business Administration (BSBA)'>Bachelor of Science in Business Administration (BSBA)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Entrepreneurship (BSEntrep)'>Bachelor of Science in Entrepreneurship (BSEntrep)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Management Accounting (BSMA)'>Bachelor of Science in Management Accounting (BSMA)</option>";
                break;

            case "College of Education":
                courseDropdown.innerHTML += "<option value='Bachelor of Culture and Arts Education (BCAEd)'>Bachelor of Culture and Arts Education (BCAEd)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Early Childhood Education (BECEd)'>Bachelor of Early Childhood Education (BECEd)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Elementary Education (BEEd)'>Bachelor of Elementary Education (BEEd)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Physical Education (BPEd)'>Bachelor of Physical Education (BPEd)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Secondary Education (BSEd)'>Bachelor of Secondary Education (BSEd)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Technology and Livelihood Education (BTLEd)'>Bachelor of Technology and Livelihood Education (BTLEd)</option>";
                break;

            case "College of Engineering":
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Agricultural and Biosystems Engineering (BSABE)'>Bachelor of Science in Agricultural and Biosystems Engineering (BSABE)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Civil Engineering (BSCE)'>Bachelor of Science in Civil Engineering (BSCE)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Information Technology (BSIT)'>Bachelor of Science in Information Technology (BSIT)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Meteorology (BSMet)'>Bachelor of Science in Meteorology (BSMet)</option>";
                break;

            case "College of Fisheries":
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Fisheries (BSF)'>Bachelor of Science in Fisheries (BSF)</option>";
                break;

            case "College of Home Science and Industry":
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Food Technology (BSFT)'>Bachelor of Science in Food Technology (BSFT)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Fashion and Textile Technology (BSFTT)'>Bachelor of Science in Fashion and Textile Technology (BSFTT)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Hospitality Management (BSHM)'>Bachelor of Science in Hospitality Management (BSHM)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Tourism Management (BSTM)'>Bachelor of Science in Tourism Management (BSTM)</option>";
                break;

            case "College of Science":
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Biology (BSBio)'>Bachelor of Science in Biology (BSBio)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Chemistry (BSChem)'>Bachelor of Science in Chemistry (BSChem)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Environmental Science (BSES)'>Bachelor of Science in Environmental Science (BSES)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Mathematics (BSMath)'>Bachelor of Science in Mathematics (BSMath)</option>";
                courseDropdown.innerHTML += "<option value='Bachelor of Science in Statistics (BSStat)'>Bachelor of Science in Statistics (BSStat)</option>";
                break;

            case "College of Veterinary Science and Medicine":
                courseDropdown.innerHTML += "<option value='Doctor of Veterinary Medicine (DVM)'>Doctor of Veterinary Medicine (DVM)</option>";
                break;
                // Graduate
            case "Doctor of Philosophy":
                courseDropdown.innerHTML += "<option value='Doctor of Philosophy'>Doctor of Philosophy</option>";
                courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Agricultural Engineering'>Doctor of Philosophy in Agricultural Engineering</option>";
                courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Agricultural Entomology'>Doctor of Philosophy in Agricultural Entomology</option>";
                courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Animal Science'>Doctor of Philosophy in Animal Science</option>";
                courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Aquaculture'>Doctor of Philosophy in Aquaculture</option>";
                courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Biology'>Doctor of Philosophy in Biology</option>";
                courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Crop Science'>Doctor of Philosophy in Crop Science</option>";
                courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Development Communication'>Doctor of Philosophy in Development Communication</option>";
                courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Development Education'>Doctor of Philosophy in Development Education</option>";
                courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Environmental Management'>Doctor of Philosophy in Environmental Management</option>";
                courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Plant Breeding'>Doctor of Philosophy in Plant Breeding</option>";
                courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Rural Development'>Doctor of Philosophy in Rural Development</option>";
                courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Soil Science'>Doctor of Philosophy in Soil Science</option>";
                courseDropdown.innerHTML += "<option value='Doctor of Philosophy in Sustainable Food Systems by Research Program (DOTUni)'>Doctor of Philosophy in Sustainable Food Systems by Research Program (DOTUni)</option>";
                break;
            case "Master of Science":
                courseDropdown.innerHTML += "<option value='Master of Science in Agricultural Economics'>Master of Science in Agricultural Economics</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Agricultural Engineering'>Master of Science in Agricultural Engineering</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Animal Science'>Master of Science in Animal Science</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Aquaculture'>Master of Science in Aquaculture</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Biology'>Master of Science in Biology</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Biology Education'>Master of Science in Biology Education</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Chemistry Education'>Master of Science in Chemistry Education</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Crop Protection'>Master of Science in Crop Protection</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Crop Science'>Master of Science in Crop Science</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Development Communication'>Master of Science in Development Communication</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Education'>Master of Science in Education</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Environmental Management'>Master of Science in Environmental Management</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Grain Science'>Master of Science in Grain Science</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Guidance and Counselling'>Master of Science in Guidance and Counselling</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Rural Development'>Master of Science in Rural Development</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Soil Science'>Master of Science in Soil Science</option>";
                break;
            case "Other Masteral Programs":
                courseDropdown.innerHTML += "<option value='Master of Arts in Language and Literature'>Master of Arts in Language and Literature</option>";
                courseDropdown.innerHTML += "<option value='Master of Science in Renewable Energy Systems (DOTUni)'>Master of Science in Renewable Energy Systems (DOTUni)</option>";
                courseDropdown.innerHTML += "<option value='Master of Veterinary Studies'>Master of Veterinary Studies</option>";
                courseDropdown.innerHTML += "<option value='Master in Agribusiness Management'>Master in Agribusiness Management</option>";
                courseDropdown.innerHTML += "<option value='Master in Biology'>Master in Biology</option>";
                courseDropdown.innerHTML += "<option value='Master in Business Administration'>Master in Business Administration</option>";
                courseDropdown.innerHTML += "<option value='Master in Chemistry'>Master in Chemistry</option>";
                courseDropdown.innerHTML += "<option value='Master in Environmental Management (DOTUni)'>Master in Environmental Management (DOTUni)</option>";
                courseDropdown.innerHTML += "<option value='Master in Local Government Management (DOTUni)'>Master in Local Government Management (DOTUni)</option>";
                break;

                //Other
            case "Distance, Open, and Transnational University (DOTUni)":
                courseDropdown.innerHTML += "<option value='Diploma in Land Use Planning'>Diploma in Land Use Planning</option>";
                courseDropdown.innerHTML += "<option value='Diploma in Local Government Management'>Diploma in Local Government Management</option>";
                courseDropdown.innerHTML += "<option value='Certificate in Agricultural Research Management'>Certificate in Agricultural Research Management</option>";
                courseDropdown.innerHTML += "<option value='Certificate in Basic Environmental Impact Assessment'>Certificate in Basic Environmental Impact Assessment</option>";
                courseDropdown.innerHTML += "<option value='Certificate in Basic Local Governance'>Certificate in Basic Local Governance</option>";
                courseDropdown.innerHTML += "<option value='Certificate in Entrepreneurship'>Certificate in Entrepreneurship</option>";
                courseDropdown.innerHTML += "<option value='Certificate in Local Development Planning'>Certificate in Local Development Planning</option>";
                courseDropdown.innerHTML += "<option value='Certificate in Project Feasibility Preparation and Implementation'>Certificate in Project Feasibility Preparation and Implementation</option>";
                courseDropdown.innerHTML += "<option value='Certificate in Training Management'>Certificate in Training Management</option>";
                courseDropdown.innerHTML += "<option value='Certificate in Teaching'>Certificate in Teaching</option>";
                break;

            case "Institute of Sports, Physical Education and Recreation":
                courseDropdown.innerHTML += "<option value='Certificate in Physical Education'>Certificate in Physical Education</option>";
                break;

            case "Vocational Course (1-Year Program)":
                courseDropdown.innerHTML += "<option value='Certificate in Agricultural Mechanics'>Certificate in Agricultural Mechanics</option>";
                break;

        }
    });
</script>