<form method="post" action="{{action('App\Http\Controllers\Admin\SettingsController@updatebotswt')}}" enctype="multipart/form-data">

    <div class="form-group">
        <label for=""></label>
    <h5 class="text-{{$text}}">Direct Referral Commission 1 (%) </h5>
        <input type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission" value="{{$settings->referral_commission}}" required>
    </div>

    <!--div class="form-group">
        <h5 class="text-{{$text}}">Indirect Referral Commission 1 (%) </h5>
        <input type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission1" value="{{$settings->referral_commission1}}" required>
    </div-->

    <div class="form-group">
        <h5 class="text-{{$text}}">Indirect Referral Commission 2 (%) </h5>
        <input type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission2" value="{{$settings->referral_commission2}}" required>
    </div>

    <div class="form-group">
        <h5 class="text-{{$text}}">Indirect Referral Commission 3 (%) </h5>
        <input type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission3" value="{{$settings->referral_commission3}}" required>
    </div>

    <div class="form-group">
        <h5 class="text-{{$text}}">Indirect Referral Commission 4 (%) </h5>
        <input type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission4" value="{{$settings->referral_commission4}}" required>
    </div>

    <div class="form-group">
        <h5 class="text-{{$text}}">Indirect Referral Commission 5 (%) </h5>
        <input type="text" class="form-control  bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission5" value="{{$settings->referral_commission5}}" required>
    </div>
    <div class="form-group">
        <h5 class="text-{{$text}}">Indirect Referral Commission 6 (%) </h5>
        <input type="text" class="form-control  bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission6" value="{{$settings->referral_commission6}}" required>
    </div>
    <div class="form-group">
        <h5 class="text-{{$text}}">Indirect Referral Commission 7 (%) </h5>
        <input type="text" class="form-control  bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission7" value="{{$settings->referral_commission7}}" required>
    </div>
    <div class="form-group">
        <h5 class="text-{{$text}}">Indirect Referral Commission 8 (%) </h5>
        <input type="text" class="form-control  bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission8" value="{{$settings->referral_commission8}}" required>
    </div>
    <div class="form-group">
        <h5 class="text-{{$text}}">Indirect Referral Commission 9 (%) </h5>
        <input type="text" class="form-control  bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission9" value="{{$settings->referral_commission9}}" required>
    </div>
    <div class="form-group">
        <h5 class="text-{{$text}}">Indirect Referral Commission 10 (%) </h5>
        <input type="text" class="form-control  bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission10" value="{{$settings->referral_commission10}}" required>
    </div>
    <div class="form-group">
        <h5 class="text-{{$text}}">Indirect Referral Commission 11 (%) </h5>
        <input type="text" class="form-control  bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission11" value="{{$settings->referral_commission11}}" required>
    </div>
    <div class="form-group">
        <h5 class="text-{{$text}}">Indirect Referral Commission 12 (%) </h5>
        <input type="text" class="form-control  bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission12" value="{{$settings->referral_commission12}}" required>
    </div>
    <div class="form-group">
        <h5 class="text-{{$text}}">Indirect Referral Commission 13 (%) </h5>
        <input type="text" class="form-control  bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission13" value="{{$settings->referral_commission13}}" required>
    </div>
    <div class="form-group">
        <h5 class="text-{{$text}}">Indirect Referral Commission 14 (%) </h5>
        <input type="text" class="form-control  bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="ref_commission14" value="{{$settings->referral_commission14}}" required>
    </div>
    <hr/>
    <div class="form-group">
        <h5 class="text-{{$text}}">Passive Income (%) </h5>
        <input type="text" class="form-control  bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="passive_income" value="{{$settings->passive_income}}" required>
    </div>

    <div class="form-group">
        <h5 class="text-{{$text}}">Registration Bonus({{$settings->currency}})</h5>
        <input type="text" class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="signup_bonus" value="{{$settings->signup_bonus}}" required>
    </div>

    <input type="submit" class="px-5 btn btn-primary btn-lg" value="Update">
    <input type="hidden" name="id" value="1">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"><br/>
</form>