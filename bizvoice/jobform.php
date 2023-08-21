<?php include('conn.php'); ?>
<script type="text/javascript">
    var states_arr = new Array("Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura", "Uttar Pradesh", "Uttaranchal", "West Bengal", "Andaman and Nicobar Islands", "Chandigarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Lakshadweep", "Pondicherry");

    var district_arr = new Array();

    district_arr[0] = "";

    district_arr[1] = "Anantapur|Chittoor|Cuddapah|East Godavari|Guntur|Krishna|Kurnool|Nellore|Prakasam|Srikakulam|Vishakapatnam|Vizianagaram|West Godavari";

    district_arr[2] = "Anjaw|Changlang|Dibang Valley|East Kameng|East Siang|Kra Daadi|Kurung Kumey|Lohit|Longding|Lower Dibang Valley|Lower Subansiri|Namsai|Papum Pare|Siang|Tawang|Tirap|Upper Siang|Upper Subansiri|West Kameng|West Siang";

    district_arr[3] = "Baksa|Barpeta|Bongaigaon|Cachar|Chirang|Darrang|Dhemaji|Dhubri|Dibrugarh|Dima Hasao|Goalpara|Golaghat|Hailakandi|Jorhat|Kamrup M|Kamrup R|Karbi Anglong|Karimganj|Kokrajhar|Lakhimpur|Marigaon|Nagaon|Nalbari|Sibsagar|Sonitpur|Tinsukia|Udalguri";

    district_arr[4] = "Araria|Arwal|Aurangabad|Banka|Begusarai|Bhagalpur|Bhojpur|Buxar|Darbhanga|East Champaran|Gaya|Gopalganj|Jamui|Jehanabad|Kaimur Bhabua|Katihar|Khagaria|Kishanganj|Lakhisarai|Madhepura|Madhubani|Munger|Muzaffarpur|Nalanda|Nawada|Patna|Purnia|Rohtas|Saharsa|Samastipur|Saran|Sheikhpura|Sheohar|Sitamarhi|Siwan|Supaul|Vaishali|West Champaran";

    district_arr[5] = "Balod|Baloda Bazar|Balrampur|Bastar|Bemetra|Bijapur|Bilaspur|Dantewada|Dhamtari|Durg|Gariyaband|Janjgir Champa|Jashpur|Kanker|Kawardha|Kondagaon|Korba|Koriya|Mahasamund|Mungeli|Narayanpur|Raigarh|Raipur|Rajnandgaon|Sukma|Surajpur|Surguja";

    district_arr[6] = "North Goa|South Goa";

    district_arr[7] = "Ahmedabad|Amreli|Anand|Aravalli|Banas Kantha|Bharuch|Bhavnagar|Botad|Chhotaudepur|Dahod|Devbhumi Dwarka|Gandhinagar|Gir Somnath|Jamnagar|Junagadh|Kachchh|Kheda|Mahesana|Mahisagar|Morbi|Narmada|Navsari|Panch Mahals|Patan|Porbandar|Rajkot|Sabar Kantha|Surat|Surendranagar|Tapi|The Dangs|Vadodara|Valsad";

    district_arr[8] = "Ambala|Bhiwani|Faridabad|Fatehabad|Gurgaon|Hisar|Jhajjar|Jind|Kaithal|Karnal|Kurukshetra|Mahendragarh|Mewat|Palwal|Panchkula|Panipat|Rewari|Rohtak|Sirsa|Sonipat|Yamunanagar";

    district_arr[9] = "Bilaspur|Chamba|Hamirpur|Kangra|Kinnaur|Kullu|Lahul Spiti|Mandi|Shimla|Sirmaur|Solan|Una";

    district_arr[10] = "Anantnag|Badgam|Bandipora|Baramula|Doda|Ganderbal|Jammu|Kargil|Kathua|Kishtwar|Kulgam|Kupwara|Leh Ladakh|Poonch|Pulwama|Rajouri|Ramban|Reasi|Samba|Shopian|Srinagar|Udhampur";

    district_arr[11] = "Bokaro|Chatra|Deoghar|Dhanbad|Dumka|Garhwa|Giridih|Godda|Gumla|Hazaribagh|Jamtara|Khunti|Kodarma|Latehar|Lohardaga|Pakaur|Palamu|Pashchimi Singhbhum|Purbi Singhbhum|Ramgarh|Ranchi|Sahibganj|Saraikela|Simdega";

    district_arr[12] = "Bagalkote|Bangalore Rural|Bangalore Urban|Belgaum|Bellary|Bidar|Bijapur|Chamrajnagar|Chikkaballapur|Chikmagalur|Chitradurga|Dakshina Kannada|Davanagere|Dharwad|Gadag|Gulbarga|Hassan|Haveri|Kodagu|Kolar|Koppal|Mandya|Mysore|Raichur|Ramanagar|Shimoga|Tumkur|Udupi|Uttara Kannada|Yadgir";

    district_arr[13] = "Alappuzha|Ernakulam|Idukki|Kannur|Kasaragod|Kollam|Kottayam|KOZHIKKODE|Malappuram|Palakkad|Pathanamthitta|Thiruvananthapuram|Thrissur|Wayanad";

    district_arr[14] = "Agar Malwa|Alirajpur|Anuppur|Ashok Nagar|Balaghat|Barwani|Betul|Bhind|Bhopal|Burhanpur|Chhatarpur|Chhindwada|Damoh|Datia|Dewas|Dhar|Dindori|Guna|Gwalior|Harda|Hoshangabad|Indore|Jabalpur|Jhabua|Katni|Khandwa|Khargone|Mandla|Mandsaur|Morena|Narsinghpur|Neemuch|Panna|Raisen|Rajgarh|Ratlam|Rewa|Sagar|Satna|Sehore|Seoni|Shahdol|Shajapur|Sheopur|Shivpuri|Sidhi|Singroli|Tikamgarh|Ujjain|Umaria|Vidisha";

    district_arr[15] = "Ahmednagar|Akola|Amravati|Aurangabad|Bhandara|Bid|Brihan Mumbai|Buldana|Chandrapur|Dhule|Gadchiroli|Gondiya|Hingoli|Jalgaon|Jalna|Kolhapur|Latur|Nagpur|Nanded|Nandurbar|Nashik|Osmanabad|Palghar|Parbhani|Pune|Raigarh|Ratnagiri|Sangli|Satara|Sindhudurg|Solapur|Thane|Wardha|Washim|Yavatmal";

    district_arr[16] = "Bishnupur|Chandel|Churachandpur|Imphal East|Imphal West|Senapati|Tamenglong|Thoubal|Ukhrul";

    district_arr[17] = "East Garo Hills|East Jaintia Hills|East Khasi Hills|North Garo Hills|Ri Bhoi|South Garo Hills|South West Garo Hills|South West Khasi Hills|West Garo Hills|West Jaintia Hills|West Khasi Hills";

    district_arr[18] = "Aizawl East|Aizawl West|Champhai|Kolasib|Lawngtlai|Lunglei|Mamit|Saiha|Serchhip";

    district_arr[19] = "Dimapur|Kiphire|Kohima|Longleng|Mokokchung|Mon|Peren|Phek|Tuensang|Wokha|Zunheboto";

    district_arr[20] = "Anugul|Balangir|Baleshwar|Bargarh|Baudh|Bhadrak|Cuttack|Deogarh|Dhenkanal|Gajapati|Ganjam|Jagatsinghpur|Jajapur|Jharsuguda|Kalahandi|Kandhamal|Kendrapara|Keonjhar|Khordha|Koraput|Malkangiri|Mayurbhanj|Nabarangapur|Nayagarh|Nuapada|Puri|Rayagada|Sambalpur|Sonapur|Sundargarh";


    district_arr[21] = "Amritsar|Barnala|Bathinda|Faridkot|Fatehgarh Sahib|Fazilka|Firozpur|Gurdaspur|Hoshiarpur|Jalandhar|Kapurthala|Ludhiana|Mansa|Moga|Mohali SAS Nagar|Muktsar|Nawanshahr|Pathankot|Patiala|Rupnagar|Sangrur|Tarn Taran";

    district_arr[22] = "Ajmer|Alwar|Banswara|Baran|Barmer|Bharatpur|Bhilwara|Bikaner|Bundi|Chittaurgarh|Churu|Dausa|Dhaulpur|Dungarpur|Ganganagar|Hanumangarh|Jaipur|Jaisalmer|Jalor|Jhalawar|Jhunjhunun|Jodhpur|Karauli|Kota|Nagaur|Pali|Pratapgarh|Rajsamand|Sawai Madhopur|Sikar|Sirohi|Tonk|Udaipur";

    district_arr[23] = "East|North|South|West";

    district_arr[24] = "Ariyalur|Chennai|Coimbatore|Cuddalore|Dharmapuri|Dindigul|Erode|Kancheepuram|Kanniyakumari|Karur|Krishnagiri|Madurai|Nagapattinam|Namakkal|Nilgiris|Perambalur|Pudukkottai|Ramanathapuram|Salem|Sivaganga|Thanjavur|Theni|Thiruvallur|Thiruvarur|Tiruchirappalli|Tirunelveli|Tirupur|Tiruvanamalai|Toothukudi|Vellore|Viluppuram|Virudhunagar";

    district_arr[25] = "Adilabad|Hyderabad|Karim Nagar|Khammam|Mahbubnagar|Medak|Nalgonda|Nizamabad|Ranga Reddy|Warangal Urban";

    district_arr[26] = "Dhalai|Gomati|Khowai|North Tripura|Sipahijala|South Tripura|Unakoti|West Tripura";

    district_arr[27] = "Agra|Aligarh|Allahabad|Ambedkar Nagar|Auraiya|Azamgarh|Bagpat|Bahraich|Ballia|Balrampur|Banda|Barabanki|Bareilly|Basti|Bijnor|Budaun|Bulandshahar|C S M Nagar|Chandauli|Chitrakoot|Deoria|Etah|Etawah|Faizabad|Farrukhabad|Fatehpur|Firozabad|Gautam Buddha Nagar|Ghaziabad|Ghazipur|Gonda|Gorakhpur|Hamirpur|Hapur|Hardoi|Hathras|Jalaun|Jaunpur|Jhansi|Jyotiba Phule Nagar|Kannauj|Kanpur Dehat|Kanpur Nagar|Kashi Ram Nagar|Kaushambi|Kushinagar|Lakhimpur Kheri|Lalitpur|Lucknow|Maharajganj|Mahoba|Mainpuri|Mathura|Maunathbhanjan|Meerut|Mirzapur|Moradabad|Muzaffarnagar|Pilibhit|Pratapgarh|Rae Bareli|Rampur|Saharanpur|Sambhal|Sant Kabir Nagar|Sant Ravidas Nagar|Shahjahanpur|Shamli|Shrawasti|Siddharth Nagar|Sitapur|Sonbhadra|Sultanpur|Unnav|Varanasi";

    district_arr[28] = "Almora|Bageshwar|Chamoli|Champawat|Dehradun|Garhwal|Hardwar|Nainital|Pithoragarh|Rudraprayag|Tehri Garhwal|Udham Singh Nagar|Uttarkashi";

    district_arr[29] = "Alipurduar|Bankura|Barddhaman|Birbhum|Dakshin Dinajpur|Darjiling|Haora|Hugli|Jalpaiguri|Koch Bihar|Maldah|Murshidabad|Nadia|North Twenty Four Parganas|Paschim Medinipur|Purba Medinipur|Puruliya|South Twenty Four Parganas|Uttar Dinajpur";



    district_arr[30] = "Nicobar|North and Middle Andaman|South Andaman";

    district_arr[31] = "Chandigarh";

    district_arr[32] = "Dadra and Nagar Haveli";

    district_arr[33] = "Daman|Diu";

    district_arr[34] = "Central|East|New Delhi|North|North East|North West|Shahdara|South|South East|South West|West";

    district_arr[35] = "Lakshadweep";

    district_arr[36] = "Karaikal|Mahe|Pondicherry|Yanam";


    function populateDistricts(stateElementId, districtElementId) {
        var selectedStateIndex = document.getElementById(stateElementId).selectedIndex;
        var districtElement = document.getElementById(districtElementId);
        districtElement.length = 0;
        districtElement.options[0] = new Option('Select district', '');
        districtElement.selectedIndex = 0;
        var district_ar = district_arr[selectedStateIndex].split("|");
        for (var i = 0; i < district_ar.length; i++) {
            districtElement.options[districtElement.length] = new Option(district_ar[i], district_ar[i]);
        }
    }

    function populateStates(stateElementId, districtElementId) {
        // given the id of the <select> tag as function argument, it inserts <option> tags
        var stateElement = document.getElementById(stateElementId);
        stateElement.length = 0;
        stateElement.options[0] = new Option('Select state', '-1');
        stateElement.selectedIndex = 0;
        for (var i = 0; i < states_arr.length; i++) {
            stateElement.options[stateElement.length] = new Option(states_arr[i], states_arr[i]);
        }

        // Assigned all countries. Now assign event listener for the states.

        if (districtElementId) {
            stateElement.onchange = function() {
                populateDistricts(stateElementId, districtElementId);
            };
        }
    }
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
    <style>
        .card {
            width: 650px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 10px;
        }

        .card-header {
            background-color: #333;
            padding: 16px;
            text-align: center;
        }

        .card-header .text-header {
            margin: 0;
            font-size: 18px;
            color: rgb(255, 255, 255);
        }

        .card-body {
            padding: 12%;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            color: #333;
            font-weight: bold;
            margin-bottom: 1px;
        }

        .form-group select {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="password"],
        .form-group input[type="file"],
        .form-group textarea {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            padding: 12px 24px;
            margin-left: 13px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            background-color: #333;
            color: #fff;
            text-transform: uppercase;
            transition: background-color 0.2s ease-in-out;
            cursor: pointer
        }

        .btn:hover {
            background-color: #ccc;
            color: #333;
        }
        #subbtn{
            margin-left: 40%;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <div class="text-header">Apply Job</div>
        </div>
        <div class="card-body">
            <form action="" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input required="" class="form-control" name="name" id="name" type="text">
                </div>
                <div class="form-group">
                    <label for="qualification">Qualification:</label>
                    <input required="" class="form-control" name="qualification" id="qualification" type="text">
                </div>
                <div class="form-group">
                    <label for="appfor">Apply For:</label>
                    <select name="appfor" class="form-select" aria-label="Default select example">
                        <option selected value="Developer">Developer</option>
                        <option value="Testing">Testing</option>
                        <option value="Digital Marketting">Digital Marketting</option>
                        <option value="Business Development">Business Development</option>
                        <option value="Web Developer">Web Developer</option>
                        <option value="Tele Caller">Tele Caller</option>
                        <option value="Others">Others..</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="appfor">State:</label>

                    <select id="state_input" name="state_input"></select>

                    <script language="javascript">
                        populateStates("state_input", "district_input");
                    </script>

                </div>
                <div class="form-group">
                    <label for="appfor">District:</label>
                    <select name="district_input" id="district_input"></select>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input required="" class="form-control" name="email" id="email" type="email">
                </div>
                <div class="form-group">
                    <label for="con">Contact No:</label>
                    <input required="" class="form-control" name="con" id="con" type="tel">
                </div>
                <div class="form-group">
                    <label for="appfor">Preferred Location:</label>
                    <select name="preferedlocation" class="form-select" aria-label="Default select example">
                        <option selected value="Chennai">Chennai</option>
                        <option value="Pondicherry">Pondicherry</option>
                        <option value="Mayiladuthurai">Mayiladuthurai</option>
                        <option value="Bengaluru">Bengaluru</option>
                     
                    </select>
                </div>
                <div class="form-group">
                    <label for="payment">Resume:</label>
                    <input type="file" name="pdf_file">
                </div>
                
                <input id="subbtn" type="submit" name="submit" class="btn" value="submit">
            </form>
        </div>
    </div>

</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['con'];
    $applyfor=$_POST['appfor'];
    $qualification=$_POST['qualification'];
    $state=$_POST['state_input'];
    $district=$_POST['district_input'];
    $prefer_location=$_POST['preferedlocation'];


    $sql = "SELECT * FROM job";
    $res = mysqli_query($con,$sql);
    while($ro=mysqli_fetch_assoc( $res))
    {
        $row_count=$ro['job_id'];
        if(empty($row_count))
        {
            $row_count=0;
        }
    }
    
    $id = $row_count+1;
   
    $pdf_file = $_FILES['pdf_file']['name'];
    $tmp = $_FILES['pdf_file']['tmp_name'];
    $sqli = "INSERT INTO job(`job_id`,`name`,`email`,`contact`,`qualification`,`apply_for`,`state`,`district`,`prefer_location`,`resume`) VALUES('$id','$name','$email','$contact','$qualification','$applyfor','$state','$district','$prefer_location','$pdf_file')";
    $sqlicon = mysqli_query($con, $sqli);
    $sel = "select * from job where job_id='$id'";
    $que = mysqli_query($con, $sel);
    ?>
    <script>

        Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Applied Successfully',
        showConfirmButton: false,
        timer: 1500
        }).then(function() {
    window.location = "index.php";
    });
        </script>
        <?php
    if ($sqlicon == true) {
        $folder = "assets\\resume\\" . $pdf_file;
        move_uploaded_file($tmp, $folder);
        while ($row = mysqli_fetch_assoc($que)) {
            if (rename("assets/resume/" . $row['resume'], "assets/resume/" . $row['name'] ."-".$row['job_id'].".pdf")) {
                echo "Succesfully name changed";
                echo $_FILES['pdf_file']['size'];
               
            } else {
                echo "<script>alert(' not change');</script>";
            }
        }
    }
    else
    {
        echo "<script>alert(' not Success');</script>";
    }
   
}
?>