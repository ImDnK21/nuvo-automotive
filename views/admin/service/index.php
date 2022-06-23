<html>
<style>
    @import url(https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700|Lato:400,100,700);
    @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css);     

.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 0%;
    text-decoration: none;
    text-align: center;
    transition:all 0.3s ease;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border-bottom: 5px solid white;
    
}
    
  .col h5 {
      font-family: 'Lato', sans-serif;
      color: #43A8ED;
      font-size: 12px;
      font-weight: 700;
      display: block;
      text-transform: uppercase;
      padding: 0 5px;
      margin-top: 5px;
      display: block;
      text-decoration: none;
  }  
      
  .col i {
      margin-top: 15px;
      color: #146A96;
  }
    
.col:hover {
  -ms-transform: translate(0,-5px); /* IE 9 */
  -webkit-transform: translate(0,-5px); /* Safari */
  transform: translate(0,-5px);
  background-color: #43A8ED;
    border-bottom: 5px solid #43A8ED;
}

 .col:hover > h5 {color: #fff;}
  .col:hover > i {color: #fff;}    
    
    
.col:first-child { margin-left: 0; }

/*  GROUPING  */
.group:before,
.group:after { content:""; display:table; }
.group:after { clear:both;}
.group { zoom:1; /* For IE 6/7 */ }
/*  GRID OF THREE  */
.span_3_of_3 { width: 100%; }
.span_2_of_3 { width: 66.66%; }
.span_1_of_3 { width: 33.33%; }

    
    
#intro {
  font-family: 'Lato', sans-serif;
  color: black;
  font-size: 42px;
  font-weight: 400;
  display: block;
  text-align: center;
  padding-top: 40px;
  margin-top: 30px;


}
  
    
@media only screen and (max-width: 480px) {
	.col {  margin: 1% 0 1% 0%; }
	.span_3_of_3, .span_2_of_3, .span_1_of_3 { width: 46%; height: 80px; vertical-align: top }
    #intro {display: none}  
}
</style>


<h2 id="intro">Catalogo de servicios 'Nuvo Automotive'</h2>
<div class="section group">
	<a class="col span_1_of_3" href="">
        <i class="fa fa-key fa-2x"></i>
        <h5>Accounts & Passwords</h5>
	</a>
    
	<a class="col span_1_of_3" href="">
        <i class="fa fa-desktop fa-2x"></i>
        <h5>Desktop Services</h5>
	</a>
    
	<a class="col span_1_of_3" href="">
        <i class="fa fa-graduation-cap fa-2x"></i>
        <h5>Educational Technology</h5>
	</a>  
    
	<a class="col span_1_of_3" href="" target="_top">
        <i class="fa fa-envelope-o fa-2x"></i>
        <h5>Email & Collaboration</h5>
	</a>
    
	<a class="col span_1_of_3" href="">
        <i class="fa fa-wifi fa-2x"></i>
        <h5>Internet & Network</h5>
	</a>
    
	<a class="col span_1_of_3" href="">
        <i class="fa fa-bug fa-2x"></i>
        <h5>Media & Events</h5>
	</a>      

	<a class="col span_1_of_3" href="">
        <i class="fa fa-phone fa-2x"></i>
        <h5>Voice Communications</h5>
	</a>
    
	<a class="col span_1_of_3" href="">
        <i class="fa fa-bar-chart fa-2x"></i>
        <h5>Research Services</h5>
	</a>
    
	<a class="col span_1_of_3" href="">
        <i class="fa fa-lock fa-2x"></i>
        <h5>Security</h5>
	</a>  
    
	<a class="col span_1_of_3" href="">
        <i class="fa fa-database fa-2x"></i>
        <h5>Servers & Storage</h5>
	</a>
    
	<a class="col span_1_of_3" href="">
        <i class="fa fa-laptop fa-2x"></i>
        <h5>Software & Business Applications</h5>
	</a>
    
	<a class="col span_1_of_3" href="">
        <i class="fa fa-globe fa-2x"></i>
        <h5>Web Services</h5>
	</a>        
</div>
</html>