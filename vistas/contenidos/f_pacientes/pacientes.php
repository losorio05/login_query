
<div class="">
<div class="page-title"><div class="title_left"><h3>PACIENTES</h3></div></div>
<div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
		  
		  <div id="lista_pacientes">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title"><h2>Listado de Pacientes</h2>
					<ul class="nav navbar-right panel_toolbox"><li class="icon_new_registro" title="Nuevo Registro"><a><i class="fa fa-plus"></i></a></li></ul>
				  <div class="clearfix"></div></div>
                  <div class="x_content">
				  
				  
					<div id="viewlistado">
						<div class="table-responsive">
						  <table class="table table-striped jambo_table bulk_action">
							<thead>
							  <tr class="headings">
								<th>&nbsp;</th>
								<th class="column-title">Nombre</th>
								<th class="column-title">Apellido</th>
								<th class="column-title">C&eacute;dula</th>
								<th class="column-title">Edad</th>
							  </tr>
							</thead>
							<tbody>
							  <tr class="even pointer">
								<td class="no_padding"><a href="javascript:;" class="icon_link_menu" id=""><i class="fa fa-edit"></i></a></td>
								<td class=" ">121000040</td>
								<td class=" ">May 23, 2014 11:47:56 PM </td>
								<td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
								<td class=" ">John Blank L</td>
							  </tr>
							  <tr class="odd pointer">
								<td class="a-center ">
								  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
								</td>
								<td class=" ">121000039</td>
								<td class=" ">May 23, 2014 11:30:12 PM</td>
								<td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
								</td>
								<td class=" ">John Blank L</td>
							  </tr>
							  <tr class="even pointer">
								<td class="a-center ">
								  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
								</td>
								<td class=" ">121000038</td>
								<td class=" ">May 24, 2014 10:55:33 PM</td>
								<td class=" ">121000203 <i class="success fa fa-long-arrow-up"></i>
								</td>
								<td class=" ">Mike Smith</td>
							  </tr>
							  <tr class="odd pointer">
								<td class="a-center ">
								  <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
								</td>
								<td class=" ">121000037</td>
								<td class=" ">May 24, 2014 10:52:44 PM</td>
								<td class=" ">121000204</td>
								<td class=" ">Mike Smith</td>
							  </tr>
							</tbody>
						  </table>
						</div>
					</div>
					
					<div id="createlistado" class="form-horizontal form-label-left">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input type="text" id="nombre" name="nombre" class="form-control col-md-7 col-xs-12">
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellido <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input type="text" id="apellido" name="apellido" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						  </div>
						  <div class="form-group">
							<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">C&eacute;dula <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <input id="cedula" class="form-control col-md-7 col-xs-12" type="text" name="cedula">
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">G&eacute;nero <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <div id="gender" class="btn-group" data-toggle="buttons">
								<div class="iradio_flat-green"><input type="radio" class="flat" checked name="genero" value="1"><ins class="iCheck-helper"></ins></div> Masculino &nbsp; &nbsp; 
								<div class="iradio_flat-green"><input type="radio" class="flat" name="genero" value="2"><ins class="iCheck-helper"></ins></div> Femenino
							  </div>
							</div>
						  </div>
						  <div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha Nacimiento <span class="required">*</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
							  <div class="input-group date" id="myDatepicker">
								<input type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento">
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							  </div>
							</div>
						  </div>
						  <div class="ln_solid"></div>
						  <div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							  <button type="submit" class="btn btn-success" id="guardar_nuevo_paciente">Guardar</button>
							  <button class="btn btn-primary" type="button" id="cancelar_nuevo_paciente">Cancel</button>
							</div>
						  </div>
					</div>
					
					
                  </div>
                </div>
              </div>
            </div>
		</div>
			
			
			
			
			
		<div id="detalle_paciente">
			<div class="row">
              <div class="col-md-2 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <table class="table table-striped">
						<thead><tr><th>FECHA</th></tr></thead>
						<tbody>
							<tr><td>26/07/2019</td></tr>
						</tbody>
						</table>
                  </div>
                </div>

              </div>

              <div class="col-md-10 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
					  <div class="" role="tabpanel" data-example-id="togglable-tabs">
						  <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
							<li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Home</a>
							</li>
							<li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Profile</a>
							</li>
							<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
							</li>
						  </ul>
						  <div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
							  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
								synth. Cosby sweater eu banh mi, qui irure terr.</p>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
							  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
								booth letterpress, commodo enim craft beer mlkshk aliquip</p>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
							  <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
								booth letterpress, commodo enim craft beer mlkshk </p>
							</div>
						  </div>
						</div>
                    <br>
                    <form class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" placeholder="Default Input">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <textarea class="form-control" rows="3" placeholder="Date Of Birth"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="password" class="form-control" value="passwordonetwo">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">AutoComplete</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Custom</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_single form-control" tabindex="-1">
                            <option></option>
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Grouped</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_group form-control">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                              <option value="AK">Alaska</option>
                              <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                              <option value="CA">California</option>
                              <option value="NV">Nevada</option>
                              <option value="OR">Oregon</option>
                              <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                              <option value="AZ">Arizona</option>
                              <option value="CO">Colorado</option>
                              <option value="ID">Idaho</option>
                              <option value="MT">Montana</option>
                              <option value="NE">Nebraska</option>
                              <option value="NM">New Mexico</option>
                              <option value="ND">North Dakota</option>
                              <option value="UT">Utah</option>
                              <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                              <option value="AL">Alabama</option>
                              <option value="AR">Arkansas</option>
                              <option value="IL">Illinois</option>
                              <option value="IA">Iowa</option>
                              <option value="KS">Kansas</option>
                              <option value="KY">Kentucky</option>
                              <option value="LA">Louisiana</option>
                              <option value="MN">Minnesota</option>
                              <option value="MS">Mississippi</option>
                              <option value="MO">Missouri</option>
                              <option value="OK">Oklahoma</option>
                              <option value="SD">South Dakota</option>
                              <option value="TX">Texas</option>
                              <option value="TN">Tennessee</option>
                              <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                              <option value="CT">Connecticut</option>
                              <option value="DE">Delaware</option>
                              <option value="FL">Florida</option>
                              <option value="GA">Georgia</option>
                              <option value="IN">Indiana</option>
                              <option value="ME">Maine</option>
                              <option value="MD">Maryland</option>
                              <option value="MA">Massachusetts</option>
                              <option value="MI">Michigan</option>
                              <option value="NH">New Hampshire</option>
                              <option value="NJ">New Jersey</option>
                              <option value="NY">New York</option>
                              <option value="NC">North Carolina</option>
                              <option value="OH">Ohio</option>
                              <option value="PA">Pennsylvania</option>
                              <option value="RI">Rhode Island</option>
                              <option value="SC">South Carolina</option>
                              <option value="VT">Vermont</option>
                              <option value="VA">Virginia</option>
                              <option value="WV">West Virginia</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Multiple</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="select2_multiple form-control" multiple="multiple">
                            <option>Choose option</option>
                            <option>Option one</option>
                            <option>Option two</option>
                            <option>Option three</option>
                            <option>Option four</option>
                            <option>Option five</option>
                            <option>Option six</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                          <br>
                          <small class="text-navy">Normal Bootstrap elements</small>
                        </label>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="checkbox">
                            <label>
                              <div class="icheckbox_flat-green checked" style="position: relative;"><input type="checkbox" class="flat" checked="checked" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Checked
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Unchecked
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <div class="icheckbox_flat-green disabled" style="position: relative;"><input type="checkbox" class="flat" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Disabled
                            </label>
                          </div>
                          <div class="checkbox">
                            <label>
                              <div class="icheckbox_flat-green checked disabled" style="position: relative;"><input type="checkbox" class="flat" disabled="disabled" checked="checked" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Disabled &amp; checked
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <div class="iradio_flat-green" style="position: relative;"><input type="radio" class="flat" name="iCheck" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Checked
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <div class="iradio_flat-green" style="position: relative;"><input type="radio" class="flat" checked name="iCheck" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Unchecked
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <div class="iradio_flat-green disabled" style="position: relative;"><input type="radio" class="flat" name="iCheck" disabled="disabled" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Disabled
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <div class="iradio_flat-green checked disabled" style="position: relative;"><input type="radio" class="flat" name="iCheck3" disabled="disabled" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Disabled &amp; Checked
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Switch</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(38, 185, 154); border-color: rgb(38, 185, 154); box-shadow: rgb(38, 185, 154) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span> Checked
                            </label>
                          </div>
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span> Unchecked
                            </label>
                          </div>
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" disabled="disabled" data-switchery="true" readonly="" style="display: none;"><span class="switchery switchery-default" style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s; opacity: 0.5;"><small style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span> Disabled
                            </label>
                          </div>
                          <div class="">
                            <label>
                              <input type="checkbox" class="js-switch" disabled="disabled" checked="checked" data-switchery="true" readonly="" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(38, 185, 154); border-color: rgb(38, 185, 154); box-shadow: rgb(38, 185, 154) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s; opacity: 0.5;"><small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span> Disabled Checked
                            </label>
                          </div>
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancel</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>


           </div>
		</div>	
			
			
			
			
			
          </div>
        </div>
      </div>
    </div>
  </div>

<script src="<?php echo SERVERURL; ?>vistas/contenidos/f_pacientes/pacientes.js"></script>