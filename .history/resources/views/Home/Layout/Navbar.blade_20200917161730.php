{{-- <div id="layout"> --}}
    {{-- <div id="logo">
        <a href="index.html"><img src="assets/images/logo.png" alt="Smartkids - International Kindergarten Ho Chi Minh City, Saigon" width="220" height="73" class="scalable shadowLogo" title="Smartkids - International Kindergarten Ho Chi Minh City, Saigon"/></a>
    </div> --}}

        <div id="p7PM3_1" class="p7PM3-16 p7PM3 p7PM3noscript horiz responsive menu-centered rounded shadows auto-subs sub-left">
        <div id="p7PM3tb_1" class="pmm3-toolbar closed"><a href="#" title="Hide/Show Menu">&equiv;</a></div>
            <ul>
                @foreach($menu as $item)
                    <li><a href="#" title="{{$item->name}}">{{$item->name}}</a>
                        <ul>
                            @if ($item->menu_child)
                                @foreach ($item->menu_child as $it)
                                    <li><a href="http://localhost/childschool/public/news/{{$it->name}}/" title="{{$it->name}}">{{$it->name}}</a></li>
                                @endforeach

                            @endif
                        </ul>
                    </li>

                @endforeach
            </ul>
            {{-- <script type="text/javascript">P7_PM3op('p7PM3_1',1,8,-5,-5,0,1,0,1,0,1,1,1,0,900,1,0,1)</script> --}}
        </div>
    {{-- </div> --}}
{{-- </div> --}}
