@extends('layouts.video')



@section('content')
<div style="left: 30px; border: 0px none; height: 450px; position: fixed; width: 600px; overflow: hidden; top: 67px;">
    <div style="overflow: hidden;">
    </div>
    <iframe id="video_iframe" width="600" height="450" src="" frameborder="1" allowfullscreen></iframe>
    </div>
    </div>

<div style="position:absolute; top:52px; z-index:-1">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <div class="panel panel-default display">
                <div class="panel-heading">Links for Aquaponics - click to view</div>
                <div class="panel-body">
                    <div class="form-group col-md-12 " onclick="updateyoutube('-z1kozprw8Y')">
                        What is Aquaponics? How it works
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('ETE3muY6mYo')">
                        Complete Aquaponics Set up- Start to Finish
                    </div>
                     <div class="form-group col-md-12 " onclick="updateyoutube('sz20zUiTLUk')">
                        Aquaponics Greenhouse Build
                    </div>
                    <div class="form-group col-md-12 " onclick="updateyoutube('wpGwK81tOIs')">
                        Backyard Urban Aquaponics Farm Grow 3000 heads of Lettuce A Month
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>







@stop