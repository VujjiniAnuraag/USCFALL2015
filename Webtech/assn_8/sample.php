<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <title>Forecast Search</title>
    </head>
    <body>       
             <div class="col-lg-6">
        	<div class="panel panel-default">
            <div class="panel-heading"><h3>Object Store</h3></div>
            <div class="panel-body">
<table  style="border-bottom:none" class="table table-condensed" style="border-collapse:collapse; border:0px; cellspacing:0px">

    <thead>
        <tr><th>&nbsp;</th>
            <th>Job Name</th>
            <th>Description</th>
            <th>Provider Name</th>
            <th>Region</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody height=100%>
        <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                  <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
            <td>OBS Name</td>
            <td>OBS Description</td>
            <td>hpcloud</td>
            <td>nova</td>
          <td> created</td>

        </tr>
        <tr>
            
            <td colspan=6 class="hiddenRow" ><div class="accordian-body collapse" id="demo1"> 
              <table class="table table-striped" style="width:50%; margin: auto">
                      <thead>
                        <tr><td><a href="WorkloadURL">Workload link</a></td><td>Bandwidth: Dandwidth Details</td><td>OBS Endpoint: end point</td></tr>
                        <tr><th>Access Key</th><th>Secret Key</th><th>Status </th><th> Created</th><th> Expires</th><th>Actions</th></tr>
                      </thead>
                      <tbody>
                        <tr><td>access-key-1</td><td>secretKey-1</td><td>Status</td><td>some date</td><td>some date</td><td><a href="#" class="btn btn-default btn-sm">
                  <i class="glyphicon glyphicon-cog"></i></a></td></tr>
                        
                     
                    
                      </tbody>
               	</table>
              
              </div> </td>
        </tr>
        <tr data-toggle="collapse" data-target="#demo2" class="accordion-toggle">
                <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
                <td>OBS Name</td>
            <td>OBS Description</td>
            <td>hpcloud</td>
            <td>nova</td>
          <td> created</td>
        </tr>
        <tr>
            <td colspan="6" class="hiddenRow"><div id="demo2" class="accordian-body collapse">Demo2</div></td>
        </tr>
        <tr data-toggle="collapse" data-target="#demo3" class="accordion-toggle">
            <td><button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span></button></td>
            <td>OBS Name</td>
            <td>OBS Description</td>
            <td>hpcloud</td>
            <td>nova</td>
          <td> created</td>
        </tr>
        <tr>
            <td colspan="6" class="hiddenRow"><div id="demo3" class="accordian-body collapse">Demo3</div></td>
        </tr>
    </tbody>
</table>
            </div>
        
          </div> 
        
      </div>
       


        </body>
</html>