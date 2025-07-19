<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end" id="notifications">
                <span class="dropdown-item dropdown-header">@if(count(Auth::user()->unreadNotifications) >5 )<span data-count="5" class="count">5+</span>
            @else
                <span class="count" data-count="{{count(Auth::user()->unreadNotifications)}}">{{count(Auth::user()->unreadNotifications)}}</span>
            @endif
        </span>

         @foreach(Auth::user()->notifications()->whereNull('read_at')->get() as $notification)
                         <div class="dropdown-divider"></div>
  <a href="{{route('admin.notification',$notification->id)}}" class="dropdown-item">
                  <i class="bi bi-envelope me-2"></i> {{$notification->data['fas']}}
                  <span class="float-end text-secondary fs-7">{{$notification->created_at->format('F d, Y h:i A')}}</span>
                </a>

              <a class="dropdown-item d-flex align-items-center" target="_blank" href="{{route('admin.notification',$notification->id)}}">
                  <div class="mr-3">
                      <div class="icon-circle bg-primary">
                          <i class="fas {{$notification->data['fas']}} text-white"></i>
                      </div>
                  </div>
                  <div>
                      <div class="small text-gray-500">{{$notification->created_at->format('F d, Y h:i A')}}</div>
                      <span class="@if(is_null($notification->read_at)) font-weight-bold @else small text-gray-500 @endif">
            {{$notification->data['title']}}
        </span>
                  </div>
              </a>
              @if($loop->index+1==5)
                  @php break; @endphp
              @endif
          @endforeach

              
                <a href="{{route('all.notification')}}" class="dropdown-item dropdown-footer"> See All Notifications </a>
              </div>



{{-- <div id="notifications">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <!-- Counter - Alerts -->
        <span class="badge badge-danger badge-counter">
            @if(count(Auth::user()->unreadNotifications) >5 )<span data-count="5" class="count">5+</span>
            @else
                <span class="count" data-count="{{count(Auth::user()->unreadNotifications)}}">{{count(Auth::user()->unreadNotifications)}}</span>
            @endif
        </span>
      </a>
      <!-- Dropdown - Alerts -->
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">
          Notifications Center
        </h6> --}}

        {{-- @foreach(Auth::user()->unreadNotifications as $notification) --}}
{{--        @foreach(Auth::user()->notifications()->whereNull('read_at')->get() as $notification)--}}

{{--    <a class="dropdown-item d-flex align-items-center" target="_blank" href="{{route('admin.notification',$notification->id)}}">--}}
{{--                <div class="mr-3">--}}
{{--                    <div class="icon-circle bg-primary">--}}
{{--                    <i class="fas {{$notification->data['fas']}} text-white"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="small text-gray-500">{{$notification->created_at->format('F d, Y h:i A')}}</div>--}}
{{--                    <span class="@if($notification->unread()) font-weight-bold @else small text-gray-500 @endif">{{$notification->data['title']}}</span>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--            @if($loop->index+1==5)--}}
{{--                @php --}}
{{--                    break;--}}
{{--                @endphp--}}
{{--            @endif--}}
{{--        @endforeach--}}
          {{-- @foreach(Auth::user()->notifications()->whereNull('read_at')->get() as $notification) --}}
              {{-- <a class="dropdown-item d-flex align-items-center" target="_blank" href="{{route('admin.notification',$notification->id)}}">
                  <div class="mr-3">
                      <div class="icon-circle bg-primary">
                          <i class="fas {{$notification->data['fas']}} text-white"></i>
                      </div>
                  </div>
                  <div>
                      <div class="small text-gray-500">{{$notification->created_at->format('F d, Y h:i A')}}</div>
                      <span class="@if(is_null($notification->read_at)) font-weight-bold @else small text-gray-500 @endif">
            {{$notification->data['title']}}
        </span>
                  </div>
              </a>
              @if($loop->index+1==5)
                  @php break; @endphp
              @endif
          @endforeach


          <a class="dropdown-item text-center small text-gray-500" href="{{route('all.notification')}}">See All Notifications</a>
      </div>
</div> --}}


