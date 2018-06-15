@extends ('layouts.admin-main')

@section('content')
<link href="/css/bootstrap-datetimepicker.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body z-depth-2">

                    <div class="text-center">
                        <h3 class="dark-grey-text">
                            <strong>Add Trip</strong>
                        </h3>
                        <hr>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="md-form">
                                <i class="fa fa-bus prefix grey-text"></i>
                                
                                <label for="name">Trip Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="md-form">
                                <i class="fa fa-calendar prefix grey-text" aria-hidden="true"></i>
                                
                                <label for="date">Date (dd-mm-yyyy)</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="md-form">
                                <i class="fa fa-arrow-circle-o-right prefix grey-text" aria-hidden="true"></i>
                                <select class="custom-select select-width-adjustment pull-right" id="direction" name="direction">
                                    <option value="tomy">Singapore -> Malaysia</option>
                                    <option value="tosg">Malaysia -> Singapore</option>
                                </select>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="md-form">
                                <i class="fa fa-user-circle prefix grey-text"></i>
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="md-form">
                                <i class="fa fa-bus prefix grey-text"></i>
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="md-form">
                    </div>
                    
                        
                    <div class="modal-footer d-flex justify-content-center pt-4">
                        <a>CANCEL</a>    
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script type="text/javascript" src="/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="/js/moment.js"></script>
<script>
    $(document).ready(function() {

    });

    $('#date').datetimepicker({
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        showMeridian: true,
        forceParse: 0
    });
        
    $(function() {
        $('#search').on('keyup', function() {
            var pattern = $(this).val();
            $('.searchable-container .items').hide();
            $('.searchable-container .items').filter(function() {
                return $(this).text().match(new RegExp(pattern, 'i'));
            }).show();
        });
    });
</script>
@endsection           
<!--
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <div>
                <table class="table table-hover table-responsive-md table-fixed">
                    <tr>
                        <th>Entity Requirement</th>
                        <th>Liquidity Feedback</th>
                    </tr>
                    <tr>
                        <td>Client</td>
                        <td>*textfield*</td>
                        <td>Classification</td>
                        <td>*textfield*</td>
                    </tr>
                    <tr>
                        <td>System Name</td>
                        <td>*textfield*</td>
                    </tr>
                    <tr>
                        <td>Client main Point of contact</td>
                        <td>*textfield*</td>
                        <td>Email</td>
                        <td>*textfield*</td>
                        <td>Telephone</td>
                        <td>*textfield*</td>
                    </tr>
                    <tr>
                        <td>Request Ref ID</td>
                        <td>*textfield*</td>
                        <td>Assigned to</td>
                        <td>*textfield*</td>
                        <td>Request Date</td>
                        <td>*textfield*</td>
                        <td>Due Date</td>
                        <td>*textfield*</td>
                    </tr>
                    <tr>
                        <td>Has client requested LPs in CRM?</td>
                        <td>Yes</td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td>Can LP contact Client?</td>
                        <td>Yes</td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td>Will Client contact LP</td>
                        <td>Yes</td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td>Has client requested LPs in CRM?</td>
                        <td>Yes</td>
                        <td>No</td>
                    </tr>
                    <tr>
                        <td>LPs Reqeusted</td>
                        <td>*loops*</td>
                    </tr>
                    <tr>
                        <td>*Additional LPs that is not listed...*</td>
                    </tr>
                    <tr>
                        <td>Please select product type</td>
                        <td>SEP</td>
                        <td>RFS-Boost Spot</td>
                        <td>Forward</td>
                        <td>Swaps</td>
                        <td>NDF</td>
                        <td>NDS</td>
                        <td>MM</td>
                        <td>Option</td>
                    </tr>
                </table>
            <br />
                <table class="table table-hover table-responsive-md table-fixed">
                    <tr>
                        <th>Swap</th>
                    </tr>
                    <tr>
                        <th>Currency Pair</th>
                        <td>
                            <label class="radio-inline pl-4">
                                <input class="form-control" type="radio" name="direction" id="tomy" value="my" checked="checked">G10<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-inline pl-4">
                                <input class="form-control" type="radio" name="direction" id="tomy" value="my" checked="checked">EM<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-inline pl-4">
                                <input class="form-control" type="radio" name="direction" id="tomy" value="my" checked="checked">Metals<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-inline pl-4">
                                <input class="form-control" type="radio" name="direction" id="tomy" value="my" checked="checked">Specialist Pairs<i class="fa fa-long-arrow-right" aria-hidden="true"></i> 
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <th>Tenor</th>
                        <td>
                            <label class="radio-inline pl-4">
                                <input class="form-control" type="radio" name="direction" id="tomy" value="my" checked="checked">0-1W<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-inline pl-4">
                                <input class="form-control" type="radio" name="direction" id="tomy" value="my" checked="checked">1M-3M<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-inline pl-4">
                                <input class="form-control" type="radio" name="direction" id="tomy" value="my" checked="checked">3M-6M<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-inline pl-4">
                                <input class="form-control" type="radio" name="direction" id="tomy" value="my" checked="checked">6M-12M<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-inline pl-4">
                                <input class="form-control" type="radio" name="direction" id="tomy" value="my" checked="checked">12M-24M<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </label>
                        </td>
                        <td>
                            <label class="radio-inline pl-4">
                                <input class="form-control" type="radio" name="direction" id="tomy" value="my" checked="checked">> 24M<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <th>Clip Size</th>
                        <td>5M</td>
                    </tr>
                </table>
                <table>
                    <tr></tr>
                </table>
            </div>
-->
<!--
      <div class="container body-content">
          <form class="form-inline">
          <div class="row">
              <div class="col-md-2"><label class="form-control">Entity Requirement</label></div>
              <div class="col-md-2"><label class="form-control">Liquidty Feedback</label></div>
          </div>
          <br /><br /><br />
          <div class="row">
              <div class="form-group col-md-4">
                <div class="col-lg-6"><span>Client</span></div>
                <div class="col-lg-6"><select class="form-control"><option>1</option></select></div>
              </div>
              <div class="form-group col-md-4">
                <div class="col-lg-6"><span>Client</span></div>
                <div class="col-lg-6"><select class="form-control"><option>1</option></select></div>
              </div>
              <div class="form-group col-md-4">
                <div class="col-lg-6"><span>Client</span></div>
                <div class="col-lg-6"><select class="form-control"><option>1</option></select></div>
              </div>
          </div>
          <br /><br /><br />
          <div class="row">
              <div class="form-group col-md-4">
                  <div class="col-lg-6"><span>System name</span></div>
                  <div class="col-lg-6"><input class="form-control"/></div>
              </div>
              <div class="form-group col-md-4">
                <div class="col-md-6"></div>
                <div class="col-lg-6"><input class="form-control"/></div>
              </div>
              <div class="form-group col-md-4">
                <div class="col-md-6"></div>
                <div class="col-lg-6"><input class="form-control"/></div>
              </div>
          </div>
          <br /><br /><br />
          <div class="row">
              <div class="form-group col-md-4">
                <div class="col-lg-6"><span>Client Main Point Contact</span></div>
                <div class="col-lg-6"><select class="form-control"><option>1</option></select></div>
              </div>
              <div class="form-group col-md-4">
                <div class="col-lg-6"><span>Email</span></div>
                <div class="col-lg-6">asdasda@asdasd.com</div>
              </div>
              <div class="form-group col-md-4">
                 <div class="col-lg-6"><span>Telephone</span></div>
                <div class="col-lg-6">12345678</div>
              </div>
          </div>
         <br /><br /><br />
          <div class="row">
              <div class="form-group col-md-3">
                <div class="col-lg-6"><span>Request Ref ID</span></div>
                <div class="col-lg-6"><input class="form-control"/></div>
              </div>
              <div class="form-group col-md-3">
                <div class="col-lg-6"><span>Assigned To</span></div>
                <div class="col-lg-6"><select class="form-control"><option>1</option></select></div>
              </div>
              <div class="form-group col-md-3">
                 <div class="col-lg-6"><span>Request Date</span></div>
                <div class="col-lg-6"><select class="form-control"><option>1</option></select></div>
              </div>
              <div class="form-group col-md-3">
                 <div class="col-lg-6"><span>Due Date</span></div>
                <div class="col-lg-6"><select class="form-control"><option>1</option></select></div>
              </div>
          </div>
          <br /><br /><br /><br /><br /><br />
              <div class="row">
              <div class="form-group col-md-12">
                <div class="col-lg-3"><span>Has Client Requested LPs in CRM?</span></div>
                <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>Yes</label></div>
                <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>No</label></div>
              </div>
                  <div class="form-group col-md-12">
                <div class="col-lg-3"><span>Can LP Contact Client?</span></div>
                <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>Yes</label></div>
                <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>No</label></div>
              </div>
                      <div class="form-group col-md-12">
                <div class="col-lg-3"><span>will LP Contact Client?</span></div>
                <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>Yes</label></div>
                <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>No</label></div>
              </div>
          </div>
              <br /><br /><br /><br /><br /><br />
              <div class="row">
              <div class="form-group col-md-12">
                <div class="col-lg-3"><span>PS Requested?</span></div>
                <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>XTX</label></div>
                <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>DBS</label></div>
                  <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>OCBC</label></div>
                <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>Others</label></div>
              </div>
                  <div class="form-group col-md-12">
                <div class="col-lg-3"></div>
                <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>360T ECN</label></div>
                <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>SOCGEN</label></div>
                  <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>UBS</label></div>
                <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>Onshore</label></div>
              </div>
                  <div class="form-group col-md-12">
                <div class="col-lg-3"></div>
                <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>CitiBank</label></div>
                <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>RBS</label></div>
                  <div class="col-lg-2"><label class="checkbox-inline"><input type="checkbox"/>SCB</label></div>
              </div>
          </div>
      </form>
      </div>
-->
<!--
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
-->
