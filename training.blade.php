@extends('layouts.app')

@section('content')
<div class="container">
    <br>

    <h3 align="center" style="color: blue">Training Registration</h3>
    <hr align="center" style="width: 50%">
      <form method="post" action="{{url('training')}}" enctype="multipart/form-data">
@csrf
<div class="row">

    <div class="col-md-8 col-md-offset-2" style="margin: auto">
        <div class="form-group">   <label for="Name">Your Name:</label>
        <input type="text" class="form-control" name="name" required>
        </div>
    <div class="form-group">
        <lable>Select Gender</lable>
        <select name="gender" class="form-control" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Others">Others</option>
        </select>
    </div>
    <div class="form-group"><label for="Email">Email Address:</label>
        <input type="text" class="form-control" name="email" required></div>
    <div class="form-group">
        <label for="Number">Phone Number:</label>
        <input type="text" class="form-control" name="phone" required>
    </div>
              <div class="form-group">
                  <label>Country</label>
                  <select class="form-control" name="state" required>
                      <option hidden>Select Country</option>
                      <option value="afghanistan">Afghanistan</option>
                      <option value="albania">Albania</option>
                      <option value="algeria">Algeria</option>
                      <option value="andorra">Andorra</option>
                      <option value="angola">Angola</option>
                      <option value="antigua_and_barbuda">Antigua and Barbuda</option>
                      <option value="argentina">Argentina</option>
                      <option value="armenia">Armenia</option>
                      <option value="australia">Australia</option>
                      <option value="austria">Austria</option>
                      <option value="azerbaijan">Azerbaijan</option>
                      <option value="bahamas">Bahamas</option>
                      <option value="bahrain">Bahrain</option>
                      <option value="bangladesh">Bangladesh</option>
                      <option value="barbados">Barbados</option>
                      <option value="belarus">Belarus</option>
                      <option value="belgium">Belgium</option>
                      <option value="belize">Belize</option>
                      <option value="benin">Benin</option>
                      <option value="bhutan">Bhutan</option>
                      <option value="bolivia">Bolivia</option>
                      <option value="bosnia_and_herzegovina">Bosnia and Herzegovina</option>
                      <option value="botswana">Botswana</option>
                      <option value="brazil">Brazil</option>
                      <option value="brunei">Brunei</option>
                      <option value="bulgaria">Bulgaria</option>
                      <option value="burkina_faso">Burkina Faso</option>
                      <option value="burundi">Burundi</option>
                      <option value="cabo_verde">Cabo Verde</option>
                      <option value="cambodia">Cambodia</option>
                      <option value="cameroon">Cameroon</option>
                      <option value="canada">Canada</option>
                      <option value="central_african_republic">Central African Republic (CAR)</option>
                      <option value="chad">Chad</option>
                      <option value="chile">Chile</option>
                      <option value="china">China</option>
                      <option value="colombia">Colombia</option>
                      <option value="comoros">Comoros</option>
                      <option value="congo">Congo</option>
                      <option value="costa_rica">Costa Rica</option>
                      <option value="cote_d'ivoire">Cote d'Ivoire</option>
                      <option value="croatia">Croatia</option>
                      <option value="cuba">Cuba</option>
                      <option value="cyprus">Cyprus</option>
                      <option value="czechia">Czechia</option>
                      <option value="denmark">Denmark</option>
                      <option value="djibouti">Djibouti</option>
                      <option value="dominica">Dominica</option>
                      <option value="dominican_republic">Dominican Republic</option>
                      <option value="ecuador">Ecuador</option>
                      <option value="egypt">Egypt</option>
                      <option value="el_salvador">El Salvador</option>
                      <option value="equatorial Guinea">Equatorial Guinea</option>
                      <option value="eritrea">Eritrea</option>
                      <option value="estonia">Estonia</option>
                      <option value="eswatini">Eswatini</option>
                      <option value="ethiopia">Ethiopia</option>
                      <option value="fiji">Fiji</option>
                      <option value="finland">Finland</option>
                      <option value="france">France</option>
                      <option value="gabon">Gabon</option>
                      <option value="gambia">Gambia</option>
                      <option value="georgia">Georgia</option>
                      <option value="germany">Germany</option>
                      <option value="ghana">Ghana</option>
                      <option value="greece">Greece</option>
                      <option value="grenada">Grenada</option>
                      <option value="guatemala">Guatemala</option>
                      <option value="guinea">Guinea</option>
                      <option value="guinea_bissau">Guinea-Bissau</option>
                      <option value="guyana">Guyana</option>
                      <option value="haiti">Haiti</option>
                      <option value="honduras">Honduras</option>
                      <option value="hungary">Hungary</option>
                      <option value="iceland">Iceland</option>
                      <option value="india">India</option>
                      <option value="indonesia">Indonesia</option>
                      <option value="iran">Iran</option>
                      <option value="iraq">Iraq</option>
                      <option value="ireland">Ireland</option>
                      <option value="israel">Israel</option>
                      <option value="italy">Italy</option>
                      <option value="jamaica">Jamaica</option>
                      <option value="japan">Japan</option>
                      <option value="jordan">Jordan</option>
                      <option value="kazakhstan">Kazakhstan</option>
                      <option value="kenya">Kenya</option>
                      <option value="kiribati">Kiribati</option>
                      <option value="kosovo">Kosovo</option>
                      <option value="kuwait">Kuwait</option>
                      <option value="kyrgyzstan">Kyrgyzstan</option>
                      <option value="laos">Laos</option>
                      <option value="latvia">Latvia</option>
                      <option value="lebanon">Lebanon</option>
                      <option value="lesotho">Lesotho</option>
                      <option value="liberia">Liberia</option>
                      <option value="libya">Libya</option>
                      <option value="liechtenstein">Liechtenstein</option>
                      <option value="lithuania">Lithuania</option>
                      <option value="luxembourg">Luxembourg</option>
                      <option value="madagascar">Madagascar</option>
                      <option value="malawi">Malawi</option>
                      <option value="malaysia">Malaysia</option>
                      <option value="maldives">Maldives</option>
                      <option value="mali">Mali</option>
                      <option value="malta">Malta</option>
                      <option value="marshall_islands">Marshall Islands</option>
                      <option value="mauritania">Mauritania</option>
                      <option value="mauritius">Mauritius</option>
                      <option value="mexico">Mexico</option>
                      <option value="micronesia">Micronesia</option>
                      <option value="moldova">Moldova</option>
                      <option value="monaco">Monaco</option>
                      <option value="mongolia">Mongolia</option>
                      <option value="montenegro">Montenegro</option>
                      <option value="morocco">Morocco</option>
                      <option value="mozambique">Mozambique</option>
                      <option value="myanmar">Myanmar </option>
                      <option value="namibia">Namibia</option>
                      <option value="nauru">Nauru</option>
                      <option value="nepal">Nepal</option>
                      <option value="netherlands">Netherlands</option>
                      <option value="new_zealand">New Zealand</option>
                      <option value="nicaragua">Nicaragua</option>
                      <option value="niger">Niger</option>
                      <option value="nigeria">Nigeria</option>
                      <option value="north_korea">North Korea</option>
                      <option value="north_macedonia">North Macedonia </option>
                      <option value="norway">Norway</option>
                      <option value="oman">Oman</option>
                      <option value="pakistan">Pakistan</option>
                      <option value="palau">Palau</option>
                      <option value="palestine">Palestine</option>
                      <option value="panama">Panama</option>
                      <option value="papua_new_guinea">Papua New Guinea</option>
                      <option value="paraguay">Paraguay</option>
                      <option value="peru">Peru</option>
                      <option value="philippines">Philippines</option>
                      <option value="poland">Poland</option>
                      <option value="portugal">Portugal</option>
                      <option value="qatar">Qatar</option>
                      <option value="romania">Romania</option>
                      <option value="russia">Russia</option>
                      <option value="rwanda">Rwanda</option>
                      <option value="saint_kitts_and_nevis">Saint Kitts and Nevis</option>
                      <option value="saint_lucia">Saint Lucia</option>
                      <option value="saint_vincent_and_the_grenadines">Saint Vincent and the Grenadines</option>
                      <option value="samoa">Samoa</option>
                      <option value="san_marino">San Marino</option>
                      <option value="sao_tome_and_principe">Sao Tome and Principe</option>
                      <option value="saudi_arabia">Saudi Arabia</option>
                      <option value="senegal">Senegal</option>
                      <option value="serbia">Serbia</option>
                      <option value="seychelles">Seychelles</option>
                      <option value="sierra_leone">Sierra Leone</option>
                      <option value="singapore">Singapore</option>
                      <option value="slovakia">Slovakia</option>
                      <option value="slovenia">Slovenia</option>
                      <option value="solomon_islands">Solomon Islands</option>
                      <option value="somalia">Somalia</option>
                      <option value="south_africa">South Africa</option>
                      <option value="south_korea">South Korea</option>
                      <option value="south_sudan">South Sudan</option>
                      <option value="spain">Spain</option>
                      <option value="sri_lanka">Sri Lanka</option>
                      <option value="sudan">Sudan</option>
                      <option value="suriname">Suriname</option>
                      <option value="sweden">Sweden</option>
                      <option value="switzerland">Switzerland</option>
                      <option value="syria">Syria</option>
                      <option value="taiwan">Taiwan</option>
                      <option value="tajikistan">Tajikistan</option>
                      <option value="tanzania">Tanzania</option>
                      <option value="thailand">Thailand</option>
                      <option value="timor_leste">Timor-Leste</option>
                      <option value="togo">Togo</option>
                      <option value="tonga">Tonga</option>
                      <option value="trinidad_and_tobago">Trinidad and Tobago</option>
                      <option value="tunisia">Tunisia</option>
                      <option value="turkey">Turkey</option>
                      <option value="turkmenistan">Turkmenistan</option>
                      <option value="tuvalu">Tuvalu</option>
                      <option value="uganda">Uganda</option>
                      <option value="ukraine">Ukraine</option>
                      <option value="united_arab_emirates">United Arab Emirates (UAE)</option>
                      <option value="united_kingdom">United Kingdom (UK)</option>
                      <option value="united_states_of_america">United States of America (USA)</option>
                      <option value="uruguay">Uruguay</option>
                      <option value="uzbekistan">Uzbekistan</option>
                      <option value="vanuatu">Vanuatu</option>
                      <option value="vatican_city">Vatican City (Holy See)</option>
                      <option value="venezuela">Venezuela</option>
                      <option value="vietnam">Vietnam</option>
                      <option value="yemen">Yemen</option>
                      <option value="zambia">Zambia</option>
                      <option value="zimbabwe">Zimbabwe</option>
                  </select>
              </div>


    <div class="form-group"><label for="Number">Course to Learn</label>
        <select name="course" class="form-control" required>
            <option value="Academic">Academic</option>
            <option value="Entrepreneurship">Entrepreneurship</option>

        </select></div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</div>
    </div>
</form>
</div>
@endsection