@extends('marriage::layouts.master')

@section('page-title')
{{'Marriage Registration Page'}}
@endsection

@section('page-content')
 <div class="row" id="family">
    <div class="col-sm-12">
        <div class="card-box">
            <form id="wizard-validation-form" action="{{route('family.store')}}" method="POST">
                @csrf
                <div>
                    <h3>Husband Info</h3>
                    <section>
                        <div class="row">
                            <div class="col-md-3">
                                <strong class="lead">Family Location :</strong>
                                {{'The family location information was require to restrict other family having the same family name within your location example we may have two family of the same name but different location.'}}
                            </div>
                            <div class="col-md-9">
                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="Country">Country</label>
                                    <div class="col-lg-10">
                                        <input placeholder="Country" class="form-control" id="country" value="Nigeria"name="country" type="text">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="state">State</label>
                                    <div class="col-lg-10">
                                        <input placeholder="State" id="password2" value="{{ old('state') }}" name="state" type="text" class="required form-control">

                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="lga">Local Government</label>
                                    <div class="col-lg-10">
                                        <input id="confirm2" placeholder="Local Government" name="lga" value="{{ old('lga') }}" type="text" class="required form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="location">Location / address</label>
                                    <div class="col-lg-10">
                                        <input placeholder="Family Location" id="confirm2" value="{{ old('location') }}" name="location" type="text" class="required form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h3>Wife</h3>
                    <section>
                        <div class="row">
                            <div class="col-md-3">
                                <strong class="lead">Family Location :</strong>
                                {{'We need your family information to store agains any body who will be register under this family will be a member of this family and any information to be share in this family he will recive it'}}
                            </div>
                            <div class="col-md-9">
                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="family">Family Name</label>
                                    <div class="col-lg-10">
                                        <input placeholder="Family Name" class="form-control" value="{{ old('family') }}" id="family" name="family" type="text">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="title">Family Title</label>
                                    <div class="col-lg-10">
                                        <input placeholder="Family Title" id="title" value="{{ old('title') }}" name="title" type="text" class="required form-control">
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="tribe">Tribe</label>
                                    <div class="col-lg-10">
                                        <input placeholder="Family Tribe" id="tribe" value="{{ old('tribe') }}" name="tribe" type="text" class="required form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                     <h3>Marriage Info</h3>
                    <section>
                        <div class="row">
                            <div class="col-md-3">
                                <strong class="lead">Family Location :</strong>
                                {{'We need your family information to store agains any body who will be register under this family will be a member of this family and any information to be share in this family he will recive it'}}
                            </div>
                            <div class="col-md-9">
                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="family">Family Name</label>
                                    <div class="col-lg-10">
                                        <input placeholder="Family Name" class="form-control" value="{{ old('family') }}" id="family" name="family" type="text">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="title">Family Title</label>
                                    <div class="col-lg-10">
                                        <input placeholder="Family Title" id="title" value="{{ old('title') }}" name="title" type="text" class="required form-control">
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="tribe">Tribe</label>
                                    <div class="col-lg-10">
                                        <input placeholder="Family Tribe" id="tribe" value="{{ old('tribe') }}" name="tribe" type="text" class="required form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                     <h3>Address Info</h3>
                    <section>
                        <div class="row">
                            <div class="col-md-3">
                                <strong class="lead">Family Location :</strong>
                                {{'We need your family information to store agains any body who will be register under this family will be a member of this family and any information to be share in this family he will recive it'}}
                            </div>
                            <div class="col-md-9">
                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="family">Family Name</label>
                                    <div class="col-lg-10">
                                        <input placeholder="Family Name" class="form-control" value="{{ old('family') }}" id="family" name="family" type="text">
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="title">Family Title</label>
                                    <div class="col-lg-10">
                                        <input placeholder="Family Title" id="title" value="{{ old('title') }}" name="title" type="text" class="required form-control">
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-lg-2 control-label " for="tribe">Tribe</label>
                                    <div class="col-lg-10">
                                        <input placeholder="Family Tribe" id="tribe" value="{{ old('tribe') }}" name="tribe" type="text" class="required form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h3>Wife Family Info</h3>
                    <section>
                        <div class="row">
                            <div class="col-md-3">
                                <strong class="lead">Family Root :</strong>
                                {{'The family root is the father in the family you want to register this can be you, your father or your grandfather and soon'}}
                            </div>
                            <div class="col-md-9">
                                <div class="widget widget-tabs widget-tabs-gray border-bottom-none">
                                    <!-- Widget heading -->
                                    <div class="widget-head">
                                        <strong class="lead">Are you a root of this family ? </strong>
                                        <button  class="active btn btn-primary"  href="#yes" data-toggle="tab">Yes</button>
                                        <button class="btn btn-warning" value="" href="#no" data-toggle="tab">No</button>
                                        
                                    </div>
                                    <!-- // Widget heading END -->
                                    <div class="widget-body">
                                        <div class="tab-content">
                                            <!-- Tab content -->
                                            <div class="tab-pane active" id="yes">
                                                <strong>We assume that you are a root of the family you want register if not click <a no href="#no" data-toggle="tab"><i></i>No</a></li></strong>
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="mdate">Date Of Birth</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" value="{{ old('mdate') }}" id="date" name="mdate" type="date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="no">
                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="name">First Name</label>
                                                    <div class="col-lg-10">
                                                        <input placeholder="Root First Name" class="form-control" value="{{ old('name') }}" id="name" name="name" type="text">
                                                    </div>
                                                </div>

                                                <div class="form-group clearfix">
                                                    <label class="col-lg-2 control-label " for="sname">Last Name</label>
                                                    <div class="col-lg-10">
                                                        <input placeholder="Root Last Name" class="form-control" value="{{ old('sname') }}" id="sname" name="sname" type="text">
                                                    </div>
                                                </div>

                                                

                                                

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </section>
                    <h3>Be Notify</h3>
                    <section>
                        <div class="form-group clearfix">
                            <div class="col-lg-12">
                                <input id="acceptTerms-2" name="acceptTerms2" type="checkbox" class="required">
                                <label for="acceptTerms-2">Be notify that a single family accoount is enough to manage all the families in your family, and the information may be share accross those family and other related families.
                                <br>
                                Note that if you are creating family account where your father, grandfather is a root of the family your perosonal information was not yet added to the family, but if you are the root of the family your information was automatically register to the family.
                                <br>
                                For information refer to our manual.
                                </label>
                            </div>
                            <input type="submit" class="btb btn-primary" value="Create Account">
                        </div>

                    </section>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('footer')
<script>
    const app = new Vue({
        el: '#family',
        data: {
            no: '',
            yes: '',
        },
        mounted() {
        
      },
    )};

</script>
@endsection