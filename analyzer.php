<html>
<head>

    <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    
    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico">
    <script src="./js/pace.min.js"></script>
    <link href="./js/pace.css" rel="stylesheet" />
    <script src="./dist/js/vendor/jquery.min.js"></script>
    <link rel="Stylesheet" href="./dist/css/jquery-ui.css"/>

    


<title>Social Heatmap - Analyzer</title>
<style>
#content-wrapper
{
  margin: 0px auto;
  text-align: center;
  width: 1024px;
}

table
{
  border-collapse: collapse;
  margin: 0px auto;
  padding: auto;
}

table td, tr, th
{
  text-align: center;
  border-collapse: true;
  border: 1px solid black;
  padding: 4px 6px;
}
</style>
</head>
<body>

    <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="margin-left: 50px">Social Heatmaps</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="discover.html">Discover Trends</a>
                    </li>
                    <li class="active">
                        <a href="analyzer.php">Trends Analyzer</a>
                    </li>
                    <!--<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Individual Trends<strong class="caret"></strong></a>
                <ul class="dropdown-menu">
                    <li>
                       <a href="#">Facebook Trends</a>
                   </li>
                   <li>
                       <a href="#">Twitter Trends</a>
                   </li>
                   <li>
                       <a href="#">Something else here</a>
                   </li>
          
</ul>
           </li>-->
                </ul>
                <ul class="nav navbar-form navbar-right">
                    <!--<li>
            <div id="search-panel" >
              <input class="form-control" id="target" type="text" placeholder="Search Trends" autocomplete="off" style="
              margin-top: 0px; margin-right: 50px;
              ">
          </div>
      </li>-->
                </ul>
            </div>
        </nav>
    
    <div id='content-wrapper' class="form-group" style="text-align:center">
  <form method='POST' action='analyzer.php?type=search' class="form-inline">
    <input type='text' name='searchterm' id='searchterm' class="form-control" placeholder="Trend1,Trend2,...,Trend5" value="<?php echo $_POST['searchterm'];?>"/>
    <!--<input type='radio' name='searchtype' value='city' class="form-control">City</input>
    <input type='radio' name='searchtype' value='country' class="form-control">Country</input>
    <input type='radio' name='searchtype' value='countrylanguage' class="form-control">CountryLanguage</input>-->
      <select id="countries" name="countries" class="form-control" >
<option value="AF">Afghanistan</option>
<option value="AX">Åland Islands</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antarctica</option>
<option value="AG">Antigua and Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia</option>
<option value="BA">Bosnia and Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, The Democratic Republic of The</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="CI">Cote D'ivoire</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands (Malvinas)</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GG">Guernsey</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard Island and Mcdonald Islands</option>
<option value="VA">Holy See (Vatican City State)</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran, Islamic Republic of</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IM">Isle of Man</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JE">Jersey</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KP">Korea, Democratic People's Republic of</option>
<option value="KR">Korea, Republic of</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Lao People's Democratic Republic</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libyan Arab Jamahiriya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macao</option>
<option value="MK">Macedonia, The Former Yugoslav Republic of</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia, Federated States of</option>
<option value="MD">Moldova, Republic of</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="AN">Netherlands Antilles</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="MP">Northern Mariana Islands</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PS">Palestinian Territory, Occupied</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">Reunion</option>
<option value="RO">Romania</option>
<option value="RU">Russian Federation</option>
<option value="RW">Rwanda</option>
<option value="SH">Saint Helena</option>
<option value="KN">Saint Kitts and Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent and The Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome and Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="GS">South Georgia and The South Sandwich Islands</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syrian Arab Republic</option>
<option value="TW">Taiwan, Province of China</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania, United Republic of</option>
<option value="TH">Thailand</option>
<option value="TL">Timor-leste</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad and Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="GB">United Kingdom</option>
<option value="US">United States</option>
<option value="UM">United States Minor Outlying Islands</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela</option>
<option value="VN">Viet Nam</option>
<option value="VG">Virgin Islands, British</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis and Futuna</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZW">Zimbabwe</option>
<option value=" " selected="selected">World Wide</option>
</select>

        
<style type="text/css">
 
.ui-datepicker-calendar {
    display: none;
    }
 
</style>
       
 <label for="from">From</label>
 <input type="text" id="from" name="from"  class="form-control"style="width:120px"/ value="2004-01" >
 <label for="to">to</label>
 <input type="text" id="to" name="to" class="form-control" style="width:120px"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.15/jquery-ui.min.js"></script>
<script type="text/javascript">
//Show Modal Loader on Ajax Request
$(document).ready(function() {  
  $( "#from, #to" ).datepicker({  
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'yy-mm',      
            onClose: function(dateText, inst) { 
                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();       
                $(this).datepicker('setDate', new Date(year, month, 1));
            },
            beforeShow : function(input, inst) {
                if ((datestr = $(this).val()).length > 0) {
                    year = datestr.substring(datestr.length-4, datestr.length);
                    month = jQuery.inArray(datestr.substring(0, datestr.length-5), $(this).datepicker('option', 'monthNames'));
                    $(this).datepicker('option', 'defaultDate', new Date(year, month, 1));
                    $(this).datepicker('setDate', new Date(year, month, 1));  
        }
        var other = this.id == "from" ? "#to" : "#from";
        var option = this.id == "from" ? "maxDate" : "minDate";        
        if ((selectedDate = $(other).val()).length > 0) {
          year = selectedDate.substring(selectedDate.length-4, selectedDate.length);
                    month = jQuery.inArray(selectedDate.substring(0, selectedDate.length-5), $(this).datepicker('option', 'monthNames'));
          $(this).datepicker( "option", option, new Date(year, month, 1));
        }
            }
        });
    
    
    
    
    $("#btnSubmit").click(function(){ 
    if (($("#from").val().length == 0 && $("#to").val().length != 0) || $("#from").val() == $("#to").val()){
      alert('Invalid Dage Range!');
            return false;
    }
        else if ($("#searchterm").val() =="" ){
            alert('Please input trend names!');
            return false;
            }
    })
    
});
    
    
    
    
  $.fn.setNow = function (onlyBlank) {
  var now = new Date($.now())
    , year
    , month
    , formattedDateTime
    ;
  
  year = now.getFullYear();
  month = now.getMonth().toString().length === 1 ? '0' + (now.getMonth() + 1).toString() : now.getMonth() + 1;
  
  formattedDateTime = year + '-' + month;
 
  if ( onlyBlank === true && $(this).val() ) {
    return this;
  }
  
  $(this).val(formattedDateTime);
  
  return this;
}

$(function () {
    // Handler for .ready() called.
    $('input[id="to"]').setNow();
    
});  
    

</script>
        
        
        
        
        
    <input type='submit' id="btnSubmit" name='submit-search' value='Search' class="form-control btn btn-primary"/>
  </form>
  <table>
  </table>
</div>
</body>
</html>

<?php
  if (isset($_POST['submit-search']))
  {
    $keyword = $_POST['searchterm'];
    $countryCode = $_POST['countries'];
        //$fromDate = new DateTime($_POST['from'] . "-01");
        //$toDate = new DateTime($_POST['to'] . "-28");
        $fromDate = date_create($_POST['from'] . "-01");
        $toDate = date_create($_POST['to'] . "-28");

        $diff = $fromDate->diff($toDate);
        
        $months = $diff->y * 12 + $diff->m + $diff->d / 30;
        
        $fromYear = $_POST['from'][0] . $_POST['from'][1] . $_POST['from'][2] . $_POST['from'][3];
        $fromMonth = $_POST['from'][5] . $_POST['from'][6];
        
        if($_POST['from'] == '' && $_POST['to'] == '')
        {
             echo"<div class=\"container\" style=\"text-align:center;\"><div class=\"row\"><script type=\"text/javascript\">
                    document.write('<iframe scrolling=\"no\" style=\"border:none;\" width=\"880\" height=\"290\" src=\"http://www.google.com/trends/fetchComponent?hl=en-US&q=" . $keyword . "&geo=" . $countryCode . "&cid=TIMESERIES_GRAPH_0&export=5&w=880&h=290\"></iframe>');
                </script></div>";
        
        echo"<div class=\"row\"><div class=\"col-xs-6\"><script type=\"text/javascript\">
                    document.write('<iframe scrolling=\"no\" style=\"border:none;\" width=\"440\" height=\"360\" src=\"http://www.google.com/trends/fetchComponent?hl=en-US&q=" . $keyword . "&geo=" . $countryCode . "&cid=GEO_MAP_0_0&export=5&w=500&h=300\"></iframe>');
                </script></div>";
        
        echo"<div class=\"col-xs-6\"><script type=\"text/javascript\">
                    document.write('<iframe scrolling=\"no\" style=\"border:none;\" width=\"440\" height=\"413\" src=\"http://www.google.com/trends/fetchComponent?hl=en-US&q=" . $keyword . "&geo=" . $countryCode . "&cid=GEO_TABLE_0_0&export=5&w=500&h=300\"></iframe>');
                </script></div></div></div>";
        }
        else {
            echo"<div class=\"container\" style=\"text-align:center;\"><div class=\"row\"><script type=\"text/javascript\">
                    document.write('<iframe scrolling=\"no\" style=\"border:none;\" width=\"880\" height=\"290\" src=\"http://www.google.com/trends/fetchComponent?hl=en-US&q=" . $keyword . "&geo=" . $countryCode . "&date=" . $fromMonth . "/" . $fromYear . "+" . round($months) . "m&cid=TIMESERIES_GRAPH_0&export=5&w=880&h=290\"></iframe>');
                </script></div>";
            
            echo"<div class=\"row\"><div class=\"col-xs-6\"><script type=\"text/javascript\">
                    document.write('<iframe scrolling=\"no\" style=\"border:none;\" width=\"440\" height=\"360\" src=\"http://www.google.com/trends/fetchComponent?hl=en-US&q=" . $keyword . "&geo=" . $countryCode . "&date=" . $fromMonth . "/" . $fromYear . "+" . round($months) . "m&cid=GEO_MAP_0_0&export=5&w=500&h=300\"></iframe>');
                </script></div>";
        
        echo"<div class=\"col-xs-6\"><script type=\"text/javascript\">
                    document.write('<iframe scrolling=\"no\" style=\"border:none;\" width=\"440\" height=\"413\" src=\"http://www.google.com/trends/fetchComponent?hl=en-US&q=" . $keyword . "&geo=" . $countryCode . "&date=" . $fromMonth . "/" . $fromYear . "+" . round($months) . "m&cid=GEO_TABLE_0_0&export=5&w=500&h=300\"></iframe>');
                </script></div></div></div>";
        }
            
            
        
        
    
    //echo "<script type='text/javascript' src='//www.google.com/trends/embed.js?hl=en-US&q=$keyword&geo=$countryCode&cmpt=q&tz&tz&content=1&cid=TIMESERIES_GRAPH_0&export=5&w=500&h=330'></script>";
    
    //echo "<script type='text/javascript' src='//www.google.com/trends/embed.js?hl=en-US&q=$keyword&geo=$countryCode&tz&content=1&cid=GEO_MAP_0_0&export=5&w=500&h=530'></script>";
    
    //echo "<script type='text/javascript' src='//www.google.com/trends/embed.js?hl=en-US&q=$keyword&geo=$countryCode&tz&content=1&cid=GEO_TABLE_0_0&export=5&w=500&h=330'></script>";  
        
       
  }


?>

<script src="./dist/js/daterangepicker.js"></script>