<html lang="en">
    <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>      
  <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
  <script type="text/javascript" src="http://openlayers.org/api/OpenLayers.js"></script>
  <script src="http://openlayers.org/api/OpenLayers.js"></script>
  <script type="text/javascript" src="jquery-validation-1.14.0/dist/jquery.validate.js"></script> 
  <script type="text/javascript" src="jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>         
  <link rel="stylesheet" type="text/css" href="styling.css">

              
        <script type="text/javascript">
        function clearform()
            {
                document.getElementById("straddr").value='';
                document.getElementById("city").value='';
                document.getElementById("State").selectedIndex=0;
                document.getElementsByName("degree")[0].checked=true;
                document.getElementById("myform").submit();
                return false;
            
            }
           
        </script>
       
    </head>
    
    <body id="home" style="margin-right:0px;">
        
        <div class="container"> 
            
            <center><b><h2>Forecast Search</h2></b></center>
            
                <form class="form-inline" id="myform" name="myform" method="get" style="padding-top:10px;">
                    
                  <div class="form-group col-sm-3" id="Straddr" align="left" style="padding-top:10px;padding-left:8px;padding-right:4em;">
                      <label for="staddr" style="padding-top:0px;color:white;">Street Address:<span style="color:red;size:10px;">*</span></label>
                     <input type="text" class="form-control" id="straddr" name="straddr" style="color:white transparent;padding-right:89px;"  required />
                  </div>
                  <div class="form-group col-sm-2" align="left" style="padding-top:10px;padding-left:0px;margin-left:1px;margin-right:10px;">
                      <label for="city" style="color:white;">City:<span style="color:red;">*</span></label>
                      <input type="text" class="form-control" id="city" name="city" style="color:white transparent;padding-left:10px;" required />
                  </div>
                  <div class="form-group col-sm-2" align="left" style="padding-top:10px;">
                      <label for="State" style="color:white;">State:<span style="color:red;">*</span></label>
                      <select class="form-control" size=1 name="State" id="State" style="color:white transparent;"  required />
                            <option value="" selected="selected">Select your state</option>    
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                    </select>
                    </div>
                  <div class="radio col-sm-2" id="DEgree" style="padding-top:10px;">
                      <span style="padding-top:30px;color:white;padding-left:0px;padding-right:95px;" id="Degree"><label for="degree"><b>Degree:</b><span style="color:red;size:10px;">*</span></label></span>
                     <span style="margin-bottom:40px;" ><span style="color:white;"><label>Fahrenheit</label></span>
                         <input type="radio" id="degree" name="degree" value="Fahrenheit" checked /></span>
                         <span style="margin-bottom:40px;" id="DEGree"><span style="color:white;"><label>Celsius</label></span>
                        <input type="radio" id="degree" name="degree" value="Celsius" style="color:white;"/></span>
                  </div>
            <button type="submit" id="clear" class="btn btn-default col-sm-2" id="clear" name="clear" value="clear" onclick="return clearform();" style="background-color:white;padding-right:2px;width:7em;text-align:right;margin-top:30px;padding-bottom:10px;margin-right:1px;padding-right:10px;"><span style="color:black;text-align:left;"><span class="glyphicon glyphicon-refresh" style="padding-right:2em;"></span><span style="padding-left:0px;">Clear</span></span></button>
        <button type="submit" class="btn btn-default col-sm-2" id="search" name="search" value="search" style="background-color:#003399;padding-right:2px;width:7em;text-align:right;margin-top:30px;padding-bottom:10px;margin-right:1px;padding-right:8px;color:white;"><span class="glyphicon glyphicon-search" style="padding-right:1em;"></span>Search</button> 
        <p id="logo" ><span style="margin-left:60em;"><span style="color:white;margin-right:6px;">Powered By:</span><span style="margin-right:11px;"><a href="http://forecast.io/"><img src="http://cs-server.usc.edu:45678/hw/hw8/images/forecast_logo.png" alt="Forecast Logo"                                                                                     id="forecastlogo" style="width:108px;"></a></span></span></p>
      
    </form>
        <script type="text/javascript">'<hr>';</script>
         
           
            <script type="text/javascript">
                
               
                var LOngitude;
                var LAtitude;
                var fbimage;
                      
                           if(myform.degree.value == "Fahrenheit")
                            {TUnit = "&deg; F";}
                           else if(myform.degree.value == "Celsius")
                            {TUnit = "&deg; C";}
                
                       

                          window.fbAsyncInit = function() {
                          FB.init({
                            appId      : '208005236197713',
                            xfbml      : true,  
                            version    : 'v2.5' 
                          });
                        };      

                        function Login()
                        {

                            FB.login(function(response) {
                               if (response.authResponse) 
                               {
                                    getUserInfo(); // Get User Information.

                                }
                             },{scope: 'public_profile,email'});

                        }

                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/en_US/sdk.js";
                            fjs.parentNode.insertBefore(js, fjs);
                          }(document, 'script', 'facebook-jssdk'));
                
                
                              
                        function getUserInfo()
                              {
                              var Obj = {
                                            method: 'feed',
                                            link: 'http://forecast.io/',
                                            picture: fbimage ,
                                            name: 'Current Weather in'+' '+myform.city.value+','+' '+myform.State.value,
                                            caption: 'WEATHER INFORMATION FROM FORECAST.IO',
                                            description: obj.currently.summary+','+' '+ parseInt(obj.currently.temperature) + TUnit
                                        };
                                  FB.ui(Obj, function(response) {if(response)
                                    {
                                            alert("Posted Succesfully");
                                    }
                                    else{
                                        alert("Not Posted");
                                    }});
                              }
                
                
    
                

                function timeformat(time) 
                {
                      timefinal=new Date(time*1000);
                      var hrs = timefinal.getHours();
                      var mins = timefinal.getMinutes();
                      var ampm = hrs >= 12 ? 'PM' : 'AM';
                      hrs = hrs % 12;
                      hrs = hrs ? hrs : 12; 
                      mins = mins < 10 ? '0'+mins : mins;
                      var timestr = hrs + ':' + mins + ' ' + ampm;
                      return timestr;
                }
                function dayformat(tim)
                {   timfin=new Date(tim*1000);  
                    var day =  timfin.getDay();
                      
                      var datenum = timfin.getDate();
                        if(day == '0')
                        {dayname = "Sunday";}
                        else if(day == '1')
                        {dayname = "Monday";}
                        else if(day == '2')
                        {dayname = "Tuesday";}
                        else if(day == '3')
                        {dayname = "Wednesday";}
                        else if(day == '4')
                        {dayname = "Thursday";}
                        else if(day == '5')
                        {dayname = "Friday";}
                        else if(day == '6')
                        {dayname = "Saturday";}
                          
                        return dayname;   
                }
                                             
                function monformat(tim){
                    timfin=new Date(tim*1000);
                    var mon = timfin.getMonth();
                if(mon == '0'){monname = "Jan";}
                        else if(mon == '1'){monname = "Feb";}
                        else if(mon == '2'){monname = "Mar";}
                        else if(mon == '3'){monname = "Apr";}
                        else if(mon == '4'){monname = "May";}
                        else if(mon == '5'){monname = "Jun";}
                        else if(mon == '6'){monname = "Jul";}
                        else if(mon == '7'){monname = "Aug";}
                        else if(mon == '8'){monname = "Sep";}    
                        else if(mon == '9'){monname = "Oct";}
                        else if(mon == '10'){monname = "Nov";}
                        else if(mon == '11'){monname = "Dec";}  
                 return monname;
                }
                function dateformat(tim)
                {
                timfin=new Date(tim*1000);
                var datfin = timfin.getDate();   
                return datfin;    
                }
        
                    function mapfunc()
                    {
                    var lonlat = new OpenLayers.LonLat(LOngitude, LAtitude).transform(new OpenLayers.Projection("EPSG:4326"), new OpenLayers.Projection("EPSG:900913"));

                    var map = new OpenLayers.Map("basicMap");

                    var mapnik = new OpenLayers.Layer.OSM(); 
                        


                    var layer_cloud = new OpenLayers.Layer.XYZ(
                        "clouds",
                        "http://${s}.tile.openweathermap.org/map/clouds/${z}/${x}/${y}.png",
                        {

                            isBaseLayer: false,
                            opacity: 0.7,
                            sphericalMercator: true
                        }
                    );

                    var layer_precipitation = new OpenLayers.Layer.XYZ(
                        "precipitation",
                        "http://${s}.tile.openweathermap.org/map/precipitation/${z}/${x}/${y}.png",
                        {

                            isBaseLayer: false,
                            opacity: 0.7,
                            sphericalMercator: true
                        }
                    );

                    map.addLayers([mapnik, layer_precipitation, layer_cloud]);
                       
                    map.setCenter(lonlat,6);    
                    }
               
                
                function parsing(obj)
                {
                if(obj.currently.icon == "clear-day"){
                         image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/clear.png" alt="clear" title="clear" height="90" width="85"/>';
                    }
                    else if(obj.currently.icon == "clear-night"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/clear_night.png" alt="clear-night" title="clear-night" height="90" width="85"/>';
 
                    }
                    else if(obj.currently.icon == "rain"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/rain.png" alt="rain" title="rain" height="90" width="85"/>';
                    }
                    else if(obj.currently.icon == "snow"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/snow.png" alt="snow" title="snow" height="90" width="85"/>';

                    }
                    else if(obj.currently.icon == "sleet"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/sleet.png" alt="sleet" title="sleet" height="90" width="85"/>';
 
                    }
                    else if(obj.currently.icon == "wind"){
                       image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/wind.png" alt="wind" title="wind" height="90" width="85"/>';
                    }
                    else if(obj.currently.icon == "fog"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/fog.png" alt="fog" title="fog" height="90" width="85"/>';
                    }
                    else if(obj.currently.icon == "cloudy"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/cloudy.png" alt="cloudy" title="cloudy" height="90" width="85"/>';
    
                    }
                    else if(obj.currently.icon == "partly-cloudy-day"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/cloud_day.png" alt="partly-cloudy-day" title="partly-cloudy-day" height="90" width="85"/>';

                    }
                    else if(obj.currently.icon == "partly-cloudy-night"){
                        image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/cloud_night.png" alt="partly-cloud-night" title="partly-cloud-night" height="90" width="85"/>';
                            
                    }
                    
                    document.getElementById("SelTabs").innerHTML = '<div class="col-sm-12"><ul class="nav nav-pills" role="tablist"><li role="presentation" class="active"><a  href="#tab1" role="tab" data-toggle="tab" style="color:blue;">Right Now</a></li><li role="presentation"><a href="#tab2" role="tab" data-toggle="tab" style="color:blue;">Next 24 Hours</a></li><li role="presentation"><a href="#tab3" role="tab" data-toggle="tab" style="color:blue;">Next 7 Days</a></li></ul></div>';
                    document.getElementById("Fulldata").innerHTML = '<div role="tabpanel" class="tab-pane fade in active" id="tab1"></div><div role="tabpanel" class="tab-pane fade" id="tab2"><table  style="border-bottom:none" class="table table-condensed" id="tab2table" style="border-collapse:collapse; border:0px; cellspacing:0px"></table></div><div role="tabpanel" class="tab-pane fade" id="tab3"></div>';
                    
                    document.getElementById("tab1").innerHTML = '<div class="row" id="initdata"></div>';
                    document.getElementById("initdata").innerHTML = '<div class="col-sm-6" style="margin-left:15px;width:590px;"><div class="row" id="top"></div><div class="row" id="bottom"></div></div><div class="col-sm-6" id="basicMap" style="margin-right:1px;width:554px;"></div>';
                
                    document.getElementById("top").innerHTML = '<div class="col-sm-6" id="topleft"></div><div class="col-sm-6" id="topright"><div id="topright1" class="row"></div><br><div id="topright2" class="row"></div><div id="topright3" class="row" style="padding-bottom:2px;"></div></div>';
                    
                    document.getElementById("topleft").innerHTML=image;
                    
                    weathcond = obj.currently.summary+' '+'in'+' '+ myform.city.value +','+myform.State.value;
                    document.getElementById("topright1").innerHTML=weathcond;
                    
                    
                    if(myform.degree.value == 'Fahrenheit')
                    {
                       d = '&deg F';
                    currtemp =  parseInt(obj.currently.temperature)  ; 
                    document.getElementById("topright2").innerHTML= currtemp + d.sup() ;
                    }
                    else if(myform.degree.value == 'Celsuis'){
                       d = '&deg C';
                    currtemp =  parseInt(obj.currently.temperature)  ; 
                    document.getElementById("topright2").innerHTML= currtemp + d.sup() ;
                    }
                    
                    lowhigh1 = obj.daily.data[0].temperatureMax ; 
                    lowhigh1 = 'L:'+' '+lowhigh1.toFixed(0)+'&deg' ;
                    lowhigh2 = obj.daily.data[0].temperatureMin ;
                    lowhigh2 = 'H:'+' '+lowhigh2.toFixed(0)+'&deg';
                    
                       pipe = ' ' + '|' + ' ' ;
                 
                    document.getElementById("topright3").innerHTML = '<span style="color:blue;">'+lowhigh1+'</span>'+ pipe +'<span style="color:green;">'+lowhigh2 +'</span>'+ '<span><a href="#" onclick="return Login();"><img src="http://cs-server.usc.edu:45678/hw/hw8/images/fb_icon.png" alt="Facebook page" height="29px" width="32px" style="float:right;padding-right:5px;"/></a></span>';
                    
                  document.getElementById("bottom").innerHTML = '<div id="precip"><span style="float:left;">Precipitation</span><span id="precipval"></span></div><div id="chr"><span style="float:left;">Chance of Rain</span><span id="rainchance"></span></div><div id="ws"><span style="float:left;">Wind Speed</span><span id="windspeed"></span></div><div id="dp"><span style="float:left;">Dew Point</span><span id="dewpoint"></span></div><div id="hd"><span style="float:left;">Humidity</span><span id="humid"></span></div><div id="vs"><span style="float:left;">Visibility</span><span id="visi"></span></div><div id="sr"><span style="float:left;">Sunrise</span><span id="risetime"></span></div><div id="ss"><span style="float:left;">Sunset</span><span id="settime"></span></div>';    
                    
                    if(obj.currently.precipIntensity >= '0' && obj.currently.precipIntensity < '0.002')
                    {
                        
                          pre = "None";
                          document.getElementById("precipval").innerHTML = pre ;
                    }
                    else if(obj.currently.precipIntensity >= '0.002' && obj.currently.precipIntensity < '0.017')
                    {
                          pre = "Very Light";
                          document.getElementById("precipval").innerHTML = pre ;
                    }
                    else if(obj.currently.precipIntensity >= '0.017' && obj.currently.precipIntensity < '0.1')
                    {
                          pre = "Light";
                          document.getElementById("precipval").innerHTML = pre ;
                    }
                    else if(obj.currently.precipIntensity >= '0.1' && obj.currently.precipIntensity < '0.4')
                    {
                        pre = "Moderate";
                          document.getElementById("precipval").innerHTML = pre ;
                    }
                    else if(obj.currently.precipIntensity >= '0.4')
                    {
                        pre = "Heavy";
                          document.getElementById("precipval").innerHTML = pre ;
                    }
                    
                    chance = obj.currently.precipProbability * 100;
                    document.getElementById("rainchance").innerHTML = chance + '%';
                   
                    if(myform.degree.value == 'Fahrenheit')
                    {
                    winds = obj.currently.windSpeed;
                    document.getElementById("windspeed").innerHTML = winds.toFixed(2) +' ' +'mph';
                    }
                    else if(myform.degree.value == 'Celsius')
                    {
                    winds = obj.currently.windSpeed;
                    document.getElementById("windspeed").innerHTML = winds.toFixed(2) + 'm/s';
                    }
                    
                    if(myform.degree.value == 'Fahrenheit')
                    {
                    dew = obj.currently.dewPoint;
                    document.getElementById("dewpoint").innerHTML = dew.toFixed(2) + '&deg  F';
                    }
                    else if(myform.degree.value == 'Celsius')
                    {
                    dew = obj.currently.dewPoint;
                    document.getElementById("dewpoint").innerHTML = dew.toFixed(2) + '&deg  C';
                    }
                    
                    hum = obj.currently.humidity * 100;
                    document.getElementById("humid").innerHTML = parseInt(hum).toFixed(0) + '%'; 
                    
                    if(myform.degree.value == 'Fahrenheit')
                    {
                    vis = obj.currently.visibility;
                    document.getElementById("visi").innerHTML = vis.toFixed(2) +' ' +'mi';
                    }
                    else if(myform.degree.value == 'Celsius')
                    {
                    vis = obj.currently.visibility;
                    document.getElementById("visi").innerHTML = vis.toFixed(2) +' '+'km';
                    }
                    
                    time = obj.daily.data[0].sunriseTime;
                    document.getElementById("risetime").innerHTML = timeformat(time);
                    
                    time = obj.daily.data[0].sunsetTime;
                    document.getElementById("settime").innerHTML = timeformat(time);
                
                    document.getElementById("tab2table").innerHTML = "<thead><tr><th>Time</th><th>Summary</th><th>Cloud Cover</th><th>Temp(&deg;<span id=\"tab2deg\">F</span>)</th><th>View Details</th></tr</thead><tbody>";
                    
                     
                      var z="";
                         
                   
                    if(myform.degree.value == "Fahrenheit")
                    {
                        document.getElementById("tab2deg").innerHTML = 'F';}
                    else if(myform.degree.value == "Celsius")
                    {   document.getElementById("tab2deg").innerHTML = 'C';} 
                    
                    
                     for(i=1;i<25;i++)
                    { 
                    if(obj.hourly.data[i].icon == "clear-day")
                     {
                         Image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/clear.png" alt="clear" title="clear" height="40" width="40"/>';
                    
                     }
                    else if(obj.hourly.data[i].icon == "clear-night"){
                        Image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/clear_night.png" alt="clear-night" title="clear-night" height="40" width="40"/>';
 
                    }
                    else if(obj.hourly.data[i].icon == "rain"){
                        Image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/rain.png" alt="rain" title="rain" height="40" width="40"/>';
                    }
                    else if(obj.hourly.data[i].icon == "snow"){
                        Image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/snow.png" alt="snow" title="snow" height="40" width="40"/>';

                    }
                    else if(obj.hourly.data[i].icon == "sleet"){
                        Image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/sleet.png" alt="sleet" title="sleet" height="40" width="40"/>';
 
                    }
                    else if(obj.hourly.data[i].icon == "wind"){
                       Image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/wind.png" alt="wind" title="wind" height="40" width="40"/>';
                    }
                    else if(obj.hourly.data[i].icon == "fog"){
                        Image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/fog.png" alt="fog" title="fog" height="40" width="40"/>';
                    }
                    else if(obj.hourly.data[i].icon == "cloudy"){
                        Image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/cloudy.png" alt="cloudy" title="cloudy" height="40" width="40" />';
    
                    }
                    else if(obj.hourly.data[i].icon == "partly-cloudy-day"){
                        Image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/cloud_day.png" alt="partly-cloudy-day" title="partly-cloudy-day" height="40" width="40"/>';

                    }
                    else if(obj.hourly.data[i].icon == "partly-cloudy-night"){
                        Image = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/cloud_night.png" alt="partly-cloud-night" title="partly-cloud-night" height="40" width="40"/>';
                            
                    }
                        
                    
                        
                    y = obj.hourly.data[i].temperature.toFixed(2);
                        
                    CC = obj.hourly.data[i].cloudCover * 100;
                    CC = parseInt(CC).toFixed(0);    
                    if(myform.degree.value == "Fahrenheit")
                    { WW = obj.hourly.data[i].windSpeed + "mph"; }
                    else if(myform.degree.value == "Celsius")
                    { WW = obj.hourly.data[i].windSpeed + "m/s";}
                        
                    HH = obj.hourly.data[i].humidity * 100 + '%';
                        
                    if(myform.degree.value == "Fahrenheit")
                    { VV = obj.hourly.data[i].visibility + "mi"; }
                    else if(myform.degree.value == "Celsius")
                    { VV = obj.hourly.data[i].visibility + "km";}     
                    
                    if(myform.degree.value == "Fahrenheit")
                    {  PP = obj.hourly.data[i].pressure + "mb";  }
                    else if(myform.degree.value == "Celsius")
                    {  PP = obj.hourly.data[i].pressure + "hPa"; }    
                     
                      
                        
                    
                   
                   z += '<tr data-toggle=\"collapse\" data-target=\"#demo'+i+'\" class=\"accordion-toggle\"><td>'+timeformat(obj.hourly.data[i].time)+'</td><td>'+Image+'</td><td>'+CC+'%'+'</td><td>'+y+'</td><td><button class=\"btn btn-default btn-xs\"><span class=\"glyphicon glyphicon-plus\"></span></button></td></tr><tr><td colspan=6 class=\"hiddenRow\"><div class=\"accordian-body collapse\" id=\"demo'+i+'\"><table class=\"table table-striped\" id=\"Viewing\" style=\"width:50%; margin: auto; color:grey;\"><thead><tr><th>Wind</th><th>Humidity</th><th>Visibility </th><th>Pressure</th></tr></thead><tbody><tr><td>'+WW+'</td><td>'+HH+'</td><td>'+VV+'</td><td>'+PP+'</td></tr></table></div></td></tr>';
                   
                }
                
            document.getElementById("tab2table").innerHTML += z + "</tbody>";
                    if(myform.degree.value == "Fahrenheit")
                    {dum = "mph";
                     dim = "mi";
                     dsm = "mb";
                    }
                    else if(myform.degree.value == "Celsius")
                    {
                    dum = "m/s";
                    dim = "km";
                    dsm = "hPa";    
                    }
                     
                    
                     document.getElementById("tab3").innerHTML = '<div class="col" style="padding-left:188px;"><div class="panel panel-default" style="width:90px;"><div class="panel-body" id="pb1" data-toggle="modal" data-target="#Modal1"></div></div><div class="modal fade" id="Modal1" role="dialog"><div class="modal-dialog"><!-- Modal content--><div class="modal-content"><div class="modal-header" id="Mhead1"><button type="button" class="close" data-dismiss="modal">&times;</button></div><div class="modal-body" id="Mbody1"></div><div class="modal-footer" id="Mfoot1"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div></div><div class="col" style="padding-left:100px;"><div class="panel panel-default" style="width:90px;"><div class="panel-body" id="pb2" data-toggle="modal" data-target="#Modal2"></div></div><div class="modal fade" id="Modal2" role="dialog"><div class="modal-dialog"><!-- Modal content--><div class="modal-content"><div class="modal-header" id="Mhead2"> <button type="button" class="close" data-dismiss="modal">&times;</button></div><div class="modal-body" id="Mbody2"></div><div class="modal-footer" id="Mfoot2"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div></div><div class="col" style="padding-left:4.5em;"><div class="panel panel-default" style="width:81px;"><div class="panel-body" id="pb3" data-toggle="modal" data-target="#Modal3"></div></div><div class="modal fade" id="Modal3" role="dialog"><div class="modal-dialog"><!-- Modal content--><div class="modal-content"><div class="modal-header" id="Mhead3"><button type="button" class="close" data-dismiss="modal">&times;</button></div><div class="modal-body" id="Mbody3"></div><div class="modal-footer" id="Mfoot3"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div></div><div class="col" style="padding-left:1em;padding-right:1em;"><div class="panel panel-default" style="width:90px;"><div class="panel-body" id="pb4" data-toggle="modal" data-target="#Modal4"></div></div><div class="modal fade" id="Modal4" role="dialog"><div class="modal-dialog"><!-- Modal content--><div class="modal-content"><div class="modal-header" id="Mhead4"><button type="button" class="close" data-dismiss="modal">&times;</button></div><div class="modal-body" id="Mbody4"></div><div class="modal-footer" id="Mfoot4"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div></div><div class="col" style="padding-left:1em;padding-right:1em;"><div class="panel panel-default" style="width:90px;"><div class="panel-body" id="pb5" data-toggle="modal" data-target="#Modal5"></div></div><div class="modal fade" id="Modal5" role="dialog"><div class="modal-dialog"><!-- Modal content--><div class="modal-content"><div class="modal-header" id="Mhead5"><button type="button" class="close" data-dismiss="modal">&times;</button></div><div class="modal-body" id="Mbody5"></div><div class="modal-footer" id="Mfoot5"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div></div><div class="col" style="padding-left:1em;"><div class="panel panel-default" style="width:90px;"><div class="panel-body" id="pb6" data-toggle="modal" data-target="#Modal6"></div></div><div class="modal fade" id="Modal6" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header" id="Mhead6"><button type="button" class="close" data-dismiss="modal">&times;</button></div><div class="modal-body" id="Mbody6"></div><div class="modal-footer" id="Mfoot6"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div></div></div></div></div><div class="col" style="padding-left:1px;"><div class="panel panel-default" style="width:90px;"><div class="panel-body" id="pb7" data-toggle="modal" data-target="#Modal7"></div></div><div class="modal fade" id="Modal7" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header" id="Mhead7"></div><div class="modal-body" id="Mbody7"></div><div class="modal-footer" id="Mfoot7"></div></div></div></div></div>';   
              
                    for(i=1;i<8;i++)
                    {
                if(obj.daily.data[i].icon == "clear-day")
                  {
                         IMage = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/clear.png" alt="clear" title="clear" height="40" width="40"/>';
                    
                  }
                else if(obj.daily.data[i].icon == "clear-night"){
                        IMage = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/clear_night.png" alt="clear-night" title="clear-night" height="40" width="40"/>';
 
                    }
                    else if(obj.daily.data[i].icon == "rain"){
                        IMage = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/rain.png" alt="rain" title="rain" height="40" width="40"/>';
 
                    }
                    else if(obj.daily.data[i].icon == "snow"){
                        IMage = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/snow.png" alt="snow" title="snow" height="40" width="40"/>';
 
                    }
                    else if(obj.daily.data[i].icon == "sleet"){
                        IMage = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/sleet.png" alt="sleet" title="sleet" height="40" width="40"/>';
 
                    }
                    else if(obj.daily.data[i].icon == "wind"){
                        IMage = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/wind.png" alt="wind" title="wind" height="40" width="40"/>';
 
                    }
                    else if(obj.daily.data[i].icon == "fog"){
                        IMage = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/fog.png" alt="fog" title="fog" height="40" width="40"/>';
 
                    }
                    else if(obj.daily.data[i].icon == "cloudy"){
                        IMage = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/cloudy" alt="cloudy" title="cloudy" height="40" width="40"/>';
 
                    }
                    else if(obj.daily.data[i].icon == "partly-cloudy-day"){
                        IMage = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/cloud_day.png" alt="partly-cloudy-day" title="partly-cloudy-day" height="40" width="40"/>';
 
                    }
                    else if(obj.daily.data[i].icon == "partly-cloudy-night"){
                        IMage = '<img src="http://cs-server.usc.edu:45678/hw/hw8/images/cloud_night.png" alt="partly-cloudy-night" title="partly-cloudy-night" height="40" width="40"/>';
 
                    }
                    
                    
                    tim = obj.daily.data[i].time;    
                    Dayname = dayformat(tim);
                    Monname = monformat(tim);
                    Datenum = dateformat(tim);  
                    tMin = obj.daily.data[i].temperatureMin;
                    tMinf = tMin.toFixed(0) + '&deg';    
                    tMax = obj.daily.data[i].temperatureMax; 
                    tMaxf = tMax.toFixed(0) + '&deg'; 
                        
                    

                  
                  YY = '<span id="tom">'+Dayname +'</span><br><br><span id="tim">' +Monname + ' ' + Datenum + '</span><br><br>'+ IMage +'<br>'+'<span id="tem">Min'+'<br>'+'Temp'+'</span><br><br>'+ '<span id="MIN">'+tMinf +'</span><br><span id="tum">'+ 'Max'+'<br>'+'Temp' +'</span><br><br><span id="MAX">'+ tMaxf+'</span>'; 
                    
                      document.getElementById("pb"+i).innerHTML = YY;
                        
                      document.getElementById("Mhead"+i).innerHTML = '<button type="button" class="close" data-dismiss="modal">&times;</button> <span style=\"text-align:left;\"><b>Weather'+' '+'in'+' '+myform.city.value+' '+"on"+' '+Monname+' '+Datenum+'</b><span>';
                      document.getElementById("Mbody"+i).innerHTML = '<center><span style=\"height:90px;\">'+IMage+'</span></center><br><br><span id="dubuk"><b>'+Dayname+':</b></span>'+'<span id="Summ"><b>'+obj.daily.data[i].summary+'</b></span><br>'+'<div class=\"col-sm-4\"><b>Sunrise Time</b><br>'+
timeformat(obj.daily.data[i].sunriseTime)+'<br><b>Wind Speed</b><br>'+ obj.daily.data[i].windSpeed+dum +'</div><div class=\"col-sm-4\"><b>Sunset Time</b><br>'+timeformat(obj.daily.data[i].sunsetTime)+'<br><b>Visibility</b><br>'+obj.daily.data[i].visibility+dim+'</div><div class=\"col-sm-4\"><b>Humidity</b><br>'+obj.daily.data[i].humidity * 100 + '%'+'<br><b>Pressure</b><br>'+obj.daily.data[i].pressure+dsm +'</div>';
                          
                    document.getElementById("Mfoot"+i).innerHTML = "<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>";    
                    }
                    
                    if(obj.currently.icon == "clear-day"){
                         fbimage = "http://cs-server.usc.edu:45678/hw/hw8/images/clear.png";
                    }
                    else if(obj.currently.icon == "clear-night"){
                        fbimage = "http://cs-server.usc.edu:45678/hw/hw8/images/clear_night.png";
 
                    }
                    else if(obj.currently.icon == "rain"){
                        fbimage = "http://cs-server.usc.edu:45678/hw/hw8/images/rain.png";
                    }
                    else if(obj.currently.icon == "snow"){
                        fbimage = "http://cs-server.usc.edu:45678/hw/hw8/images/snow.png";

                    }
                    else if(obj.currently.icon == "sleet"){
                        fbimage = "http://cs-server.usc.edu:45678/hw/hw8/images/sleet.png";
 
                    }
                    else if(obj.currently.icon == "wind"){
                       fbimage = "http://cs-server.usc.edu:45678/hw/hw8/images/wind.png";
                    }
                    else if(obj.currently.icon == "fog"){
                        fbimage = "http://cs-server.usc.edu:45678/hw/hw8/images/fog.png";
                    }
                    else if(obj.currently.icon == "cloudy"){
                        fbimage = "http://cs-server.usc.edu:45678/hw/hw8/images/cloudy.png";
    
                    }
                    else if(obj.currently.icon == "partly-cloudy-day"){
                        fbimage = "http://cs-server.usc.edu:45678/hw/hw8/images/cloud_day.png";

                    }
                    else if(obj.currently.icon == "partly-cloudy-night"){
                        fbimage = "http://cs-server.usc.edu:45678/hw/hw8/images/cloud_night.png";}
                    
                    LOngitude = obj.longitude;
                    LAtitude = obj.latitude;
                    mapfunc();
                           
                      
      } 
    </script>
            
        
        <script type="text/javascript">
            var contentType="application/x-www-form-urlencoded; charset=utf-8";

              $('#search').click(function(){

                $("#myform").validate({
                        rules:{
                                    straddr: {required:true},
                                    city: {required:true},  
                                    State: {required:true}   
                                },
                        messages:{
                                     
                                    straddr: "Please enter your Street Address",
                                     city: "Please enter your city",
                                    State: "Please select your State"
                                          
                                 },
                        submitHandler:function(){
                                    submit();
                }
                
                });

              });
            
            
            function submit()
            {
               $.ajax({	
                url:	'http://cs-server.usc.edu:22221/index.php' ,
                dataType: "json",        
                data:{straddr: document.getElementById("straddr").value, city: document.getElementById("city").value,State: "CA" ,degree: document.getElementsByName("degree")[0].checked ? "Fahrenheit" : "Celsius" },
                type:'GET',
                crossDomain : true,
                contentType : contentType,
                success: function(output)
                {
                    obj=JSON.parse(output);
                    parsing(obj);
                    
                    
                },
                error:	function(er){
                        console.log(er);
                }
            });
             return false;
            }
        </script>
  
           
            
             <div class="row" id="SelTabs"></div>
            
             <div class="tab-content" id="Fulldata"></div>        
</div>
</body>
</html>