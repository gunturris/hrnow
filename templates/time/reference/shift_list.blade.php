@extends('layout.page')

@section('content')


<div class="">  
            <div class="row" style="display: block;">
              
 
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                      
                    <div class=" col-sm-5   top_search">
                    <form method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keyword" placeholder="Search for...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Go!</button>
                        </span>
                    </div>
                    </form>
                    </div>
                
                    <ul class="nav navbar-right panel_toolbox">
                      <li>
                        <button type="button" class="btn-sm btn-secondary" 
                        onclick="javascript:openModalFromList('TItile di sini','/time/reference/form')"> 
                          <i class="fa fa-plus"></i>  Tambah data 
                        </button>
                      </li>
                      <li> 

                      </li> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                     

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <!-- th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th -->
                            <th class="column-title">Kode </th>
                            <th class="column-title">Desktipsi </th>
                            <th class="column-title">Jam masuk </th>
                            <th class="column-title">Jarak waktu masuk </th>
                            <th class="column-title">Jam pulang </th>
                            <th class="column-title">Jarak waktu pulang </th>
                            <th class="column-title">Lintas hari </th> 
                            <th class="column-title no-link last" style="width:90px;"><span class="nobr"> </span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          @foreach($datas_shifts as $data)
                          <tr class="even pointer">
                            <!-- td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td -->
                            <td class=" ">{{$data->code}}</td>
                            <td class=" ">{{$data->label}}</td>
                            <td class=" "><b><?php echo date('H:i',strtotime($data->schedule_in)) ?></b></td>
                            <td class=" "><?php echo date('H:i',strtotime($data->schedule_in_open)) ?> - <?php echo date('H:i',strtotime($data->schedule_in_close)) ?></td>
                            <td class=" "><b><?php echo date('H:i',strtotime($data->schedule_out)) ?></b></td>
                            <td class=" "><?php echo date('H:i',strtotime($data->schedule_out_open)) ?> - <?php echo date('H:i',strtotime($data->schedule_out_close)) ?></td>
                            <td class=" "><?php echo ($data->crossday == '1' ? 'Ya' : 'Tidak') ?></td>
                            <td class=" last ">
                                <h6>
                                    <i class="fa fa-pencil"></i> 
                                    &nbsp;  
                                    <i class="fa fa-trash-o"></i>
                                </h6>
                            </td>
                          </tr>
                          @endforeach; 
                          

                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
            </div>
          </div>


          
           <!-- Modal -->
           <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" 
                  aria-labelledby="modalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-lg" role="document" >
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Data jam kerja</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" style="padding:5px">
                  <iframe id="frameModalBox" src="/misc/loading" height="400px" width="100%" style="margin:0;border:0;">iframe not support</iframe>
                </div>
                {{--<div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>--}}
              </div>
            </div>
          </div> 

          <script language="Javascript">

            function openModalFromList(title, url){
               
                $('#modalCenterTitle').html(title)
                $('#frameModalBox').attr('src',  url)
      
                $('#modalForm').modal('show')
            }

            function deleteConfirmFormList(msg, url){
              x = confirm(msg);
              if(x){
                location.href=url;
              
              }
              return;
            }
          </script>
@endsection