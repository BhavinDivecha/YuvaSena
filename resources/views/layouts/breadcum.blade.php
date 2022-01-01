<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{URL::to('/admin')}}"><i class="icon-home"></i> <span>Home</span></a>
        </li>
        @php
            $curUrl = URL('/');
        @endphp
        @foreach($urls as $no => $url)
            @if($url != '')
                @php
                    $curUrl .= '/'.$url;
                @endphp
                <li>
                    @if($no > 1)
                        <a href="{{$curUrl}}">
                            @if($url == 'create')
                                <i class="fa fa-plus"></i>
                            @elseif($url == 'edit')
                                <i class="fa fa-pencil"></i>
                            @else
                                <i class="fa fa-circle" style="font-size: 8px;"></i>
                            @endif
                            <span>{{ucwords(str_replace('-', ' ', $url))}}</span>    
                        </a>
                    @else
                        @if($url == 'create')
                            <i class="fa fa-plus"></i>
                        @elseif($url == 'edit')
                            <i class="fa fa-pencil"></i>
                        @else
                            <i class="fa fa-circle" style="font-size: 8px;"></i>
                        @endif
                        <span>{{ucwords(str_replace('-', ' ', $url))}}</span>
                    @endif
                </li>
            @endif
        @endforeach
    </ul>
</div>