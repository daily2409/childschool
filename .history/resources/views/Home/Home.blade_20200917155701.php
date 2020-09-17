@extends('Home.Layout.Master')
@section('title')
    Trường mầm non hàng đầu thế giới
@endsection
@section('content')
<div class="design-row">
    <div class="design-column margin-top percent60">
        <div class="column-content border-right p7ehc-1">
            <!--SMILEY TITLE-->
            <div class="design-row titlePage no-shadow">
                <div class="design-column no-padding percent20 p7ehc-2">
                    <img src="landing/images/img/smile1.png" alt="Smartkids Childcare" width="100" height="95" class="scalable displayed" title="Smartkids Childcare"/>
                </div>
                <div class="design-column percent80 p7ehc-2 spacer">
                    <div class="column-content small-padding">
                        <h1>{!!$data->name!!}</h1>
                    </div>
                </div>
            </div>
            <!--MAIN CONTENT C'TND-->
            <p>{!!$data->content!!}</p>
            @foreach ($blog as $item)
                <h2>{!!$item->Title!!}</h2>
                <div class="design-row no-shadow">
                    <div class="design-column no-padding percent20">
                        <p><img src="landing/images/img/smile2.png" alt="Smartkids Childcare" width="150" height="95" class="scalable displayed" title="Smartkids Childcare"/></p>
                    </div>
                    <div class="design-column percent80 spacer">
                        <div class="column-content small-padding">
                            <p>{!!$item->Description!!}</p>
                        </div>
                    </div>
                </div>
            @endforeach




    </div>
</div>
@endsection
