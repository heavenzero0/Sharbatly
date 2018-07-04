@extends('user.dashboard')
@section('content')

	<section class="content">
		<div class="container-fluid">

	   	<img src="/../images/logo.png" style=" width: 10%;
	                    display: block;
	                    margin-left: auto;
	                    margin-right: auto;
	                ">
	    <span style="font-weight: bold"><center>MOHAMMED A. SHARBATLY CO. LTD.</center></span>
	    <span style="font-weight: bold"><center>DAVAO BRANCH.</center></span>


        <form id="container-form" action=" " method="POST">
                        
    	    <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            

                            <div class="header bg-indigo">
                                <h2>
                                    <b>Create New Loading Details</b>
                                </h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>


                            <div class="body">
                            	<div class="demo-masked-input">
    	                            <div class="row clearfix">
    	                                
    	                                <div class="col-md-6">
    	                                        <b>Estimated Time Destination</b>
    	                                        <div class="input-group input-group-lg">
    	                                            <span class="input-group-addon">
    	                                                <i class="material-icons" style="color: #000000">flight_takeoff</i>
    	                                            </span>
    	                                            <div class="form-line">
    	                                                <input type="text" name="lod_ETD" class="form-control date" placeholder="DATE / MONTH / YEAR" required> 
    	                                            </div>
    	                                        </div>
    	                                </div>

    	                                <div class="col-md-6">
    	                                        <b>Estimated Time Arival</b>
    	                                        <div class="input-group input-group-lg">
    	                                            <span class="input-group-addon">
    	                                                <i class="material-icons" style="color: #000000">flight_land</i>
    	                                            </span>
    	                                            <div class="form-line">
    	                                               <input type="text" name="lod_ETA"  class="form-control date" placeholder="DATE / MONTH / YEAR" required>
    	                                            </div>
    	                                        </div>
    	                                </div>


                                    	<div class="col-md-4">
                                        	<p>
                                            	<b>Week No:</b>
                                        	</p>
                                        	<select class="form-control show-tick" name="lod_WEEK"  required>
                                            	<option>Mustard</option>
                                            	<option>Ketchup</option>
                                            	<option>Relish</option>
                                        	</select>
                                    	</div>

    	                                <div class="col-md-4">
                                        	<p>
                                            	<b>Term</b>
                                        	</p>
                                        	<select class="form-control show-tick "  name="lod_TERM"   required>
                                            	<option>Mustard</option>
                                            	<option>Ketchup</option>
                                            	<option>Relish</option>
                                        	</select>
                                    	</div>

                                    	<div class="col-md-4">
                                        	<p>
                                            	<b>Carrier</b>
                                        	</p>
                                        	<select class="form-control show-tick" name="lod_CARRIER"   required>
                                            	<option>Mustard</option>
                                            	<option>Ketchup</option>
                                            	<option>Relish</option>
                                        	</select>
                                    	</div>

                                    	<div class="col-md-4">
                                        	<p>
                                            	<b>BL No.</b>
                                        	</p>
                                        	<div class="input-group input-group-lg">
                                            	<span class="input-group-addon">
                                                	<i class="material-icons" style="color: #000000">view_column</i>
                                            	</span>
                                            	<div class="form-line">
                                                	<input type="text" class="form-control" placeholder="---" name="lod_BL"   required>
                                            	</div>
                                        	</div>
                                    	</div>

                                    	<div class="col-md-4">
                                        	<p>
                                            	<b>Vessel Name</b>
                                        	</p>
                                        	<div class="input-group input-group-lg">
                                            	<span class="input-group-addon">
                                                	<i class="material-icons" style="color: #000000">label_outline</i>
                                            	</span>
                                            	<div class="form-line">
                                                	<input type="text" class="form-control" placeholder="---"  name="lod_VESSEL"   required>
                                            	</div>
                                        	</div>
                                    	</div>

                                    	<div class="col-md-4">
                                        	<p>
                                            	<b>VOY. NO.</b>
                                        	</p>
                                        	<div class="input-group input-group-lg">
                                            	<span class="input-group-addon">
                                                	<i class="material-icons" style="color: #000000">view_column</i>
                                            	</span>
                                            	<div class="form-line">
                                                	<input type="text" class="form-control" placeholder="---" name="lod_VOY"   required>
                                            	</div>
                                        	</div>
                                    	</div>


                                        <div class="col-md-12" align="right">
                                            <div class="icon-and-text-button-demo">
                                                <button type="submit" class="btn bg-green waves-effect">
                                                        <i class="material-icons">content_paste</i>
                                                        <span>CREATE</span>
                                                </button>
                                            </div>
                                        </div>


    	                            </div>


                                     <div class="row clearfix con">


                                     </div>

                            	</div>
    						</div>

                            <div class="header bg-indigo">
                                <h2>
                                    <b>Container Details</b>
                                </h2>
                                <ul class="header-dropdown m-r--5">
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>


                            


                                <div class="body" id='con'>
                                    <div class="demo-masked-input">
                                        <div class="row clearfix">

                                            <div class="header bg-cyan">
                                                <h2>
                                                    <b>Container #1</b>
                                                </h2>
                                                <ul class="header-dropdown m-r--5">
                                                    <li class="dropdown">
                                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                            <i class="material-icons">more_vert</i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a href="javascript:void(0);">Action</a></li>
                                                            <li><a href="javascript:void(0);">Another action</a></li>
                                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-6">
                                                <p>
                                                    <b>Van No:</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons" style="color: #000000">label_outline</i>
                                                    </span>
                                                    <div class="form-line col-md-4">
                                                        <input type="text" class="form-control" placeholder="---" name="lod_VAN[1]"   required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <p>
                                                    <b>Seal No:</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons" style="color: #000000">label_outline</i>
                                                    </span>
                                                    <div class="form-line col-md-4">
                                                        <input type="text" class="form-control" placeholder="---" name="lod_SEAL[1]"   required>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12">
                                                <p>
                                                    <b>SHARBATLY 13KG</b>
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    <b>4H</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons" style="color: #000000">business_center</i>
                                                    </span>
                                                    <div class="form-line col-md-4">
                                                        <input type="text" class="form-control" placeholder="---" name="lod_4H[1]"   required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    <b>5H</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons" style="color: #000000">business_center</i>
                                                    </span>
                                                    <div class="form-line col-md-4">
                                                        <input type="text" class="form-control" placeholder="---" name="lod_5H[1]"   required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    <b>6H</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons" style="color: #000000">business_center</i>
                                                    </span>
                                                    <div class="form-line col-md-4">
                                                        <input type="text" class="form-control" placeholder="---" name="lod_6H[1]"   required>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <p>
                                                    <b>SHARBATLY 7KG</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons" style="color: #000000">business_center</i>
                                                    </span>
                                                    <div class="form-line col-md-4">
                                                        <input type="text" class="form-control" placeholder="---"  name="lod_7KG[1]"  required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    <b>SHARBATLY 5KG</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons" style="color: #000000">business_center</i>
                                                    </span>
                                                    <div class="form-line col-md-4">
                                                        <input type="text" class="form-control" placeholder="---"  name="lod_5KG[1]"  required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    <b>SHARBATLY 3KG</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons" style="color: #000000">business_center</i>
                                                    </span>
                                                    <div class="form-line col-md-4">
                                                        <input type="text" class="form-control" placeholder="---" name="lod_3KG[1]"   required>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-md-12">
                                                <p>
                                                    <b>SHARBATLY 13KG CLASS B</b>
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    <b>4H</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons" style="color: #000000">business_center</i>
                                                    </span>
                                                    <div class="form-line col-md-4">
                                                        <input type="text" class="form-control" placeholder="---" name="lod_4H_CB[1]"   required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    <b>5H</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons" style="color: #000000">business_center</i>
                                                    </span>
                                                    <div class="form-line col-md-4">
                                                        <input type="text" class="form-control" placeholder="---"  name="lod_5H_CB[1]"  required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    <b>6H</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons" style="color: #000000">business_center</i>
                                                    </span>
                                                    <div class="form-line col-md-4">
                                                        <input type="text" class="form-control" placeholder="---"  name="lod_6H_CB[1]"  required>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-3">
                                                <p>
                                                    <b>SHARBATLY 13KG CLUSTER</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons" style="color: #000000">business_center</i>
                                                    </span>
                                                    <div class="form-line col-md-4">
                                                        <input type="text" class="form-control" placeholder="---" name="lod_CLUSTER[1]"   required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <p>
                                                    <b>SHARBATLY 7KG CLASS B</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons" style="color: #000000">business_center</i>
                                                    </span>
                                                    <div class="form-line col-md-4">
                                                        <input type="text" class="form-control" placeholder="---"  name="lod_7KG_CB[1]"  required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <p>
                                                    <b>SHARBATLY 5KG CLASS B</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons" style="color: #000000">business_center</i>
                                                    </span>
                                                    <div class="form-line col-md-4">
                                                        <input type="text" class="form-control" placeholder="---"  name="lod_5KG_CB[1]"   required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <p>
                                                    <b>SHARBATLY 3KG CLASS B</b>
                                                </p>
                                                <div class="input-group input-group-lg">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons" style="color: #000000">business_center</i>
                                                    </span>
                                                    <div class="form-line col-md-4">
                                                        <input type="text" class="form-control" placeholder="---"  name="lod_3KG_CB[1]"  required>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" align="right">
                                    <div class="icon-and-text-button-demo">
                                        <button type="button" id="con-form" class="btn bg-indigo waves-effect">
                                            <i class="material-icons">local_shipping</i>
                                                <span>ADD CONTAINER</span>
                                        </button>
                                    </div>
                                </div>
                            

                        

    					</div>
    				</div>
            </div>
        </form>


		</div>
	</section>


    <script>
        (function($){

            var con_num = 1;
            
             $('#con-form').click(function(){
                   con_num++;
                $('#con').append(
                     "<div class='demo-masked-input'><div class='row clearfix'>" + //fiRst


                        "<div class='header bg-cyan'>" +
                            "<h2>" +
                                "<b>Container #" + con_num + "</b>" +
                            "</h2>" +
                            "<ul class='header-dropdown m-r--5'>" +
                                "<li class='dropdown'>" +
                                    "<a href='javascript:void(0);' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>" +
                                        "<i class='material-icons'>more_vert</i>" +
                                    "</a>" +
                                    "<ul class='dropdown-menu pull-right'>" +
                                        "<li><a href='javascript:void(0);'>Action</a></li>" +
                                        "<li><a href='javascript:void(0);'>Another action</a></li>" +
                                        "<li><a href='javascript:void(0);'>Something else here</a></li>" +
                                    "</ul>" +
                                "</li>" +
                            "</ul>" +
                        "</div>" +

                        "<div class='col-md-6'>" +
                            "<p>" +
                                "<b>Van No:</b>" +
                             "</p>" +
                            "<div class='input-group input-group-lg'>" +
                                "<span class='input-group-addon'>" +
                                    "<i class='material-icons' style='color: #000000'>label_outline</i>" +
                                "</span>" +
                                "<div class='form-line col-md-4'>" +
                                    "<input type='text' class='form-control' placeholder='---'  name=lod_VAN[" + con_num + "]  required>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +

                        "<div class='col-md-6'>" +
                            "<p>" +
                                "<b>Seal No:</b>" +
                             "</p>" +
                            "<div class='input-group input-group-lg'>" +
                                "<span class='input-group-addon'>" +
                                    "<i class='material-icons' style='color: #000000'>label_outline</i>" +
                                "</span>" +
                                "<div class='form-line col-md-4'>" +
                                    "<input type='text' class='form-control' placeholder='---'  name=lod_SEAL[" + con_num + "]   required>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +

                        "<div class='col-md-12'>" +
                            "<p>" +
                                "<b>SHARBATLY 13KG</b>" +
                             "</p>" +
                        "</div>" +


                        "<div class='col-md-4'>" +
                            "<p>" +
                                "<b>4H</b>" +
                             "</p>" +
                            "<div class='input-group input-group-lg'>" +
                                "<span class='input-group-addon'>" +
                                    "<i class='material-icons' style='color: #000000'>label_outline</i>" +
                                "</span>" +
                                "<div class='form-line col-md-4'>" +
                                    "<input type='text' class='form-control' placeholder='---'  name=lod_4H[" + con_num + "]   required>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +

                        "<div class='col-md-4'>" +
                            "<p>" +
                                "<b>5H</b>" +
                             "</p>" +
                            "<div class='input-group input-group-lg'>" +
                                "<span class='input-group-addon'>" +
                                    "<i class='material-icons' style='color: #000000'>label_outline</i>" +
                                "</span>" +
                                "<div class='form-line col-md-4'>" +
                                    "<input type='text' class='form-control' placeholder='---'  name=lod_5H[" + con_num + "]   required>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +

                        "<div class='col-md-4'>" +
                            "<p>" +
                                "<b>6H</b>" +
                             "</p>" +
                            "<div class='input-group input-group-lg'>" +
                                "<span class='input-group-addon'>" +
                                    "<i class='material-icons' style='color: #000000'>label_outline</i>" +
                                "</span>" +
                                "<div class='form-line col-md-4'>" +
                                    "<input type='text' class='form-control' placeholder='---'   name=lod_6H[" + con_num + "]  required>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +

                        "<div class='col-md-4'>" +
                            "<p>" +
                                "<b>SHARBATLY 7KG</b>" +
                             "</p>" +
                            "<div class='input-group input-group-lg'>" +
                                "<span class='input-group-addon'>" +
                                    "<i class='material-icons' style='color: #000000'>label_outline</i>" +
                                "</span>" +
                                "<div class='form-line col-md-4'>" +
                                    "<input type='text' class='form-control' placeholder='---'  name=lod_7KG[" + con_num + "]   required>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +

                        "<div class='col-md-4'>" +
                            "<p>" +
                                "<b>SHARBATLY 5KG</b>" +
                             "</p>" +
                            "<div class='input-group input-group-lg'>" +
                                "<span class='input-group-addon'>" +
                                    "<i class='material-icons' style='color: #000000'>label_outline</i>" +
                                "</span>" +
                                "<div class='form-line col-md-4'>" +
                                    "<input type='text' class='form-control' placeholder='---'  name=lod_5KG[" + con_num + "]   required>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +

                        "<div class='col-md-4'>" +
                            "<p>" +
                                "<b>SHARBATLY 3KG</b>" +
                             "</p>" +
                            "<div class='input-group input-group-lg'>" +
                                "<span class='input-group-addon'>" +
                                    "<i class='material-icons' style='color: #000000'>label_outline</i>" +
                                "</span>" +
                                "<div class='form-line col-md-4'>" +
                                    "<input type='text' class='form-control' placeholder='---'  name=lod_3KG[" + con_num + "]   required>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +

                         "<div class='col-md-12'>" +
                            "<p>" +
                                "<b>SHARBATLY 13KG CLASS B</b>" +
                             "</p>" +
                        "</div>" +

                         "<div class='col-md-4'>" +
                            "<p>" +
                                "<b>4H</b>" +
                             "</p>" +
                            "<div class='input-group input-group-lg'>" +
                                "<span class='input-group-addon'>" +
                                    "<i class='material-icons' style='color: #000000'>label_outline</i>" +
                                "</span>" +
                                "<div class='form-line col-md-4'>" +
                                    "<input type='text' class='form-control' placeholder='---'  name=lod_4H_CB[" + con_num + "]   required>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +

                        "<div class='col-md-4'>" +
                            "<p>" +
                                "<b>5H</b>" +
                             "</p>" +
                            "<div class='input-group input-group-lg'>" +
                                "<span class='input-group-addon'>" +
                                    "<i class='material-icons' style='color: #000000'>label_outline</i>" +
                                "</span>" +
                                "<div class='form-line col-md-4'>" +
                                    "<input type='text' class='form-control' placeholder='---'  name=lod_5H_CB[" + con_num + "]   required>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +

                        "<div class='col-md-4'>" +
                            "<p>" +
                                "<b>6H</b>" +
                             "</p>" +
                            "<div class='input-group input-group-lg'>" +
                                "<span class='input-group-addon'>" +
                                    "<i class='material-icons' style='color: #000000'>label_outline</i>" +
                                "</span>" +
                                "<div class='form-line col-md-4'>" +
                                    "<input type='text' class='form-control' placeholder='---'  name=lod_6H_CB[" + con_num + "]   required>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +

                        "<div class='col-md-3'>" +
                            "<p>" +
                                "<b>SHARBATLY 13KG CLUSTER</b>" +
                             "</p>" +
                            "<div class='input-group input-group-lg'>" +
                                "<span class='input-group-addon'>" +
                                    "<i class='material-icons' style='color: #000000'>label_outline</i>" +
                                "</span>" +
                                "<div class='form-line col-md-4'>" +
                                    "<input type='text' class='form-control' placeholder='---'  name=lod_CLUSTER[" + con_num + "]   required>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +

                        "<div class='col-md-3'>" +
                            "<p>" +
                                "<b>SHARBATLY 7KG CLASS B</b>" +
                             "</p>" +
                            "<div class='input-group input-group-lg'>" +
                                "<span class='input-group-addon'>" +
                                    "<i class='material-icons' style='color: #000000'>label_outline</i>" +
                                "</span>" +
                                "<div class='form-line col-md-4'>" +
                                    "<input type='text' class='form-control' placeholder='---'  name=lod_7KG_CB[" + con_num + "]   required>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +

                        "<div class='col-md-3'>" +
                            "<p>" +
                                "<b>SHARBATLY 5KG CLASS B</b>" +
                             "</p>" +
                            "<div class='input-group input-group-lg'>" +
                                "<span class='input-group-addon'>" +
                                    "<i class='material-icons' style='color: #000000'>label_outline</i>" +
                                "</span>" +
                                "<div class='form-line col-md-4'>" +
                                    "<input type='text' class='form-control' placeholder='---'  name=lod_5KG_CB[" + con_num + "]   required>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +

                        "<div class='col-md-3'>" +
                            "<p>" +
                                "<b>SHARBATLY 3KG CLASS B</b>" +
                             "</p>" +
                            "<div class='input-group input-group-lg'>" +
                                "<span class='input-group-addon'>" +
                                    "<i class='material-icons' style='color: #000000'>label_outline</i>" +
                                "</span>" +
                                "<div class='form-line col-md-4'>" +
                                    "<input type='text' class='form-control' placeholder='---'  name=lod_7KG_CB[" + con_num + "]   required>" +
                                "</div>" +
                            "</div>" +
                        "</div>" +

                        

                    "</div> </div>" //last
                );
            });


            function processForm( e )
            {
                    
            }


            $('#container-form').submit( processForm );
        })(jQuery);
    </script>


@endsection

@section('tabs')
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li> 
                <li>
                     <a href=' {{ route("docu_dashboard") }} '>
                        <i class="material-icons">home</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="active">
                     <a href=' {{ route("create_loading") }} '>
                        <i class="material-icons">home</i>
                        <span>Create Loading Details</span>
                    </a>
                </li>
                <li>
                    <a href="pages/typography.html">
                        <i class="material-icons">text_fields</i>
                        <span>View All Request</span>
                    </a>
                </li>
        </ul>
    </div>
@endsection
