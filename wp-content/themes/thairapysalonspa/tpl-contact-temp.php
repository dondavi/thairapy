<?php 
/* Template Name: Contact Us Page TEMP */ 
?>
<?php get_header(); ?>

<!-- header open --> 
<?php include (TEMPLATEPATH . '/components/nav-primary.php'); ?>
<!-- header close -->

<!-- hero open --> 
<?php include (TEMPLATEPATH . '/components/hero.php'); ?>
<!-- hero close -->

<!-- content begin -->
<div id="content" class="no-padding">

<?php if ($_GET['status'] && $_GET['status'] == 'success'): ?>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <br>
        <h2>Thank you for submitting your info</h2>
        <div class="small-border wow zoomIn" data-wow-delay=".3s" data-wow-duration=".3s"></div>
      </div>
    </div>
  </div>
<?php else: ?>
  <!-- section begin -->
  <section id="section-map" aria-label="section-map" class="no-top">
      <div id="map"></div>
  </section>
  <!-- section close -->
  <div class="container">
      <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
              <h2>Send Us A Message</h2>
              <div class="small-border wow zoomIn" data-wow-delay=".3s" data-wow-duration=".3s"></div>
          </div>
  
          <div class="col-md-8 col-md-offset-2">
            <form action='http://www.secure-booker.com/thairapysalonspa/WebToCustomer.aspx' method='POST' id='form496bb41d' onsubmit='javascript:submit496bb41d();' class="deform-1 bg-light">
              <input type='hidden' id='OnSuccessUrl' name='OnSuccessUrl' value='http://thairapysalonspa.com/contact-us/?status=success'/>
              <input type='hidden' id='SpaID' name='SpaID' value='b+mpV75EqcLfRShNS3ryJQplT2DRcJj50XdJvOnqP/h6'/>
              <input type='hidden' id='RequiredFields' name='RequiredFields' value='FirstName,LastName,Email,Birthday,MobilePhone,ReferredBy,ReceiveEmails'/>
              
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                  <label for="FirstName">First Name</label><br>
                  <input type="text" name="FirstName" id="FirstName" class="form-control" placeholder="First Name" required maxlength="50">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                  <label for="LastName">Last Name</label><br>
                  <input type="text" name="LastName" id="LastName" class="form-control" placeholder="Last Name" required maxlength="50">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                  <label for="Email">Email Address</label><br>
                  <input type="text" name="Email" id="Email" class="form-control" placeholder="Email Address" required maxlength="255">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                  <label for="">Phone Number</label><br>
                  (&nbsp;<input type="text" id="MobilePhone496bb41dPhone1" maxlength="3" style="width:30%">&nbsp;)&nbsp;<input type="text" id="MobilePhone496bb41dPhone2" maxlength="3" style="width:30%">&nbsp;-&nbsp;<input type="text" id="MobilePhone496bb41dPhone3" maxlength="4" style="width:30%">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                  <label for="">Birth Date</label><br>
                  <select id='BirthdayMonth' name='BirthdayMonth' style="width:32%">
                    <option value=''>Month</option>
                    <option value='1' >1</option>
                    <option value='2' >2</option>
                    <option value='3' >3</option>
                    <option value='4' >4</option>
                    <option value='5' >5</option>
                    <option value='6' >6</option>
                    <option value='7' >7</option>
                    <option value='8' >8</option>
                    <option value='9' >9</option>
                    <option value='10' >10</option>
                    <option value='11' >11</option>
                    <option value='12' >12</option>
                    </select>&nbsp;<select id='BirthdayDay' name='BirthdayDay' style="width:32%">
                    <option value=''>Day</option>
                    <option value='1' >1</option>
                    <option value='2' >2</option>
                    <option value='3' >3</option>
                    <option value='4' >4</option>
                    <option value='5' >5</option>
                    <option value='6' >6</option>
                    <option value='7' >7</option>
                    <option value='8' >8</option>
                    <option value='9' >9</option>
                    <option value='10' >10</option>
                    <option value='11' >11</option>
                    <option value='12' >12</option>
                    <option value='13' >13</option>
                    <option value='14' >14</option>
                    <option value='15' >15</option>
                    <option value='16' >16</option>
                    <option value='17' >17</option>
                    <option value='18' >18</option>
                    <option value='19' >19</option>
                    <option value='20' >20</option>
                    <option value='21' >21</option>
                    <option value='22' >22</option>
                    <option value='23' >23</option>
                    <option value='24' >24</option>
                    <option value='25' >25</option>
                    <option value='26' >26</option>
                    <option value='27' >27</option>
                    <option value='28' >28</option>
                    <option value='29' >29</option>
                    <option value='30' >30</option>
                    <option value='31' >31</option>
                    </select>&nbsp;<select id='BirthdayYear' name='BirthdayYear' style="width:32%">
                    <option value=''>Year</option>
                    <option value='2017' >2017</option>
                    <option value='2016' >2016</option>
                    <option value='2015' >2015</option>
                    <option value='2014' >2014</option>
                    <option value='2013' >2013</option>
                    <option value='2012' >2012</option>
                    <option value='2011' >2011</option>
                    <option value='2010' >2010</option>
                    <option value='2009' >2009</option>
                    <option value='2008' >2008</option>
                    <option value='2007' >2007</option>
                    <option value='2006' >2006</option>
                    <option value='2005' >2005</option>
                    <option value='2004' >2004</option>
                    <option value='2003' >2003</option>
                    <option value='2002' >2002</option>
                    <option value='2001' >2001</option>
                    <option value='2000' >2000</option>
                    <option value='1999' >1999</option>
                    <option value='1998' >1998</option>
                    <option value='1997' >1997</option>
                    <option value='1996' >1996</option>
                    <option value='1995' >1995</option>
                    <option value='1994' >1994</option>
                    <option value='1993' >1993</option>
                    <option value='1992' >1992</option>
                    <option value='1991' >1991</option>
                    <option value='1990' >1990</option>
                    <option value='1989' >1989</option>
                    <option value='1988' >1988</option>
                    <option value='1987' >1987</option>
                    <option value='1986' >1986</option>
                    <option value='1985' >1985</option>
                    <option value='1984' >1984</option>
                    <option value='1983' >1983</option>
                    <option value='1982' >1982</option>
                    <option value='1981' >1981</option>
                    <option value='1980' >1980</option>
                    <option value='1979' >1979</option>
                    <option value='1978' >1978</option>
                    <option value='1977' >1977</option>
                    <option value='1976' >1976</option>
                    <option value='1975' >1975</option>
                    <option value='1974' >1974</option>
                    <option value='1973' >1973</option>
                    <option value='1972' >1972</option>
                    <option value='1971' >1971</option>
                    <option value='1970' >1970</option>
                    <option value='1969' >1969</option>
                    <option value='1968' >1968</option>
                    <option value='1967' >1967</option>
                    <option value='1966' >1966</option>
                    <option value='1965' >1965</option>
                    <option value='1964' >1964</option>
                    <option value='1963' >1963</option>
                    <option value='1962' >1962</option>
                    <option value='1961' >1961</option>
                    <option value='1960' >1960</option>
                    <option value='1959' >1959</option>
                    <option value='1958' >1958</option>
                    <option value='1957' >1957</option>
                    <option value='1956' >1956</option>
                    <option value='1955' >1955</option>
                    <option value='1954' >1954</option>
                    <option value='1953' >1953</option>
                    <option value='1952' >1952</option>
                    <option value='1951' >1951</option>
                    <option value='1950' >1950</option>
                    <option value='1949' >1949</option>
                    <option value='1948' >1948</option>
                    <option value='1947' >1947</option>
                    <option value='1946' >1946</option>
                    <option value='1945' >1945</option>
                    <option value='1944' >1944</option>
                    <option value='1943' >1943</option>
                    <option value='1942' >1942</option>
                    <option value='1941' >1941</option>
                    <option value='1940' >1940</option>
                    <option value='1939' >1939</option>
                    <option value='1938' >1938</option>
                    <option value='1937' >1937</option>
                    <option value='1936' >1936</option>
                    <option value='1935' >1935</option>
                    <option value='1934' >1934</option>
                    <option value='1933' >1933</option>
                    <option value='1932' >1932</option>
                    <option value='1931' >1931</option>
                    <option value='1930' >1930</option>
                    <option value='1929' >1929</option>
                    <option value='1928' >1928</option>
                    <option value='1927' >1927</option>
                    <option value='1926' >1926</option>
                    <option value='1925' >1925</option>
                    <option value='1924' >1924</option>
                    <option value='1923' >1923</option>
                    <option value='1922' >1922</option>
                    <option value='1921' >1921</option>
                    <option value='1920' >1920</option>
                    <option value='1919' >1919</option>
                    <option value='1918' >1918</option>
                    <option value='1917' >1917</option>
                    <option value='1916' >1916</option>
                    <option value='1915' >1915</option>
                    <option value='1914' >1914</option>
                    <option value='1913' >1913</option>
                    <option value='1912' >1912</option>
                    <option value='1911' >1911</option>
                    <option value='1910' >1910</option>
                    <option value='1909' >1909</option>
                    <option value='1908' >1908</option>
                    <option value='1907' >1907</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                  <label for="">Referred By</label><br>
                  <input type="text" name="ReferredBy" id="ReferredBy" class="form-control" placeholder="Referred By" required maxlength="255">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <label><input type="checkbox" id="ReceiveEmails" name="ReceiveEmails">&nbsp;I would like to receive updates from Thairapy</label>
                </div>
              </div>
	<br/>
	<input type="submit" value="Submit" class="btn btn-custom">
	<script>	
	var usaId496bb41d = 1;
	var canadaId496bb41d = 2;
	var phonesIds496bb41d = 'MobilePhone496bb41d';
	function ChangePhonesAndStates496bb41d(updateFull){
		var obj = document.getElementById('AddressCountry496bb41d');
		var isNANPA = false;
		var currVal;
		if (obj && obj.value != ""){			
			currVal = obj.value;
		} else {
			currVal = 1;
		}
		isNANPA = usaId496bb41d == currVal || canadaId496bb41d == currVal;
		var phones = phonesIds496bb41d.split(';');
		for(var i=0;i<phones.length;i++){
			if (!document.getElementById(phones[i] + 'FullPhone')){
				break;
			}
			if (isNANPA){
				document.getElementById(phones[i] + 'Phone1').parentNode.style.display = 'inline';
				document.getElementById(phones[i] + 'FullPhone').parentNode.style.display = 'none';
			} else {
				document.getElementById(phones[i] + 'FullPhone').parentNode.style.display = 'inline';
				document.getElementById(phones[i] + 'Phone1').parentNode.style.display = 'none';
			}
			if (updateFull && isNANPA){			
				document.getElementById(phones[i] + 'FullPhone').value = document.getElementById(phones[i] + 'Phone1').value + document.getElementById(phones[i] + 'Phone2').value + document.getElementById(phones[i] + 'Phone3').value;
			}

		}

		// update states list
		var statesObj = document.getElementById('AddressState496bb41d');
		if (statesObj != null) {
			var statesLabelObj = document.getElementById('AddressState496bb41dLabel');
			var isUS = obj.value != '' && usaId496bb41d == currVal;
			statesObj.style.display = isUS ? '' : 'none';
			statesLabelObj.style.display = isUS ? '' : 'none';
			if (isUS){
				// we select the first item - Any state
				statesObj.options[0].selected = true;
			}
		}

	}

	ChangePhonesAndStates496bb41d(false);

	function submit496bb41d(){
		ChangePhonesAndStates496bb41d(true);
	}
	
	</script>
</form>
  <br><br><br>
          </div>

      </div>
  </div>
<?php endif; ?>
  <!-- make appointment open --> 
<?php include (TEMPLATEPATH . '/components/make-appointment.php'); ?>
  <!-- make appointment close -->
</div>

<script src="<?php echo get_template_directory_uri(); ?>/framework/dist/js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLtYIsm79vVCiGWuowRtL3z9KHAl1jRJA&callback=initMap" async defer></script>
  
<?php get_footer(); ?>
