<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('/monjs.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/style.css') }}" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm rounded-2">
            <div class="container">
              {{-- <img id="logo" src="images/ee.png" alt=""> --}}
                <a class="navbar-brand" href="{{ url('/') }}" style="color:#012970;font-family:Geneva;">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto offset-11">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <aside id="sidebar" class="sidebar rounded-2 col-2" id="sidebar" style="font-family:Geneva;" >

                        <ul class="sidebar-nav" id="sidebar-nav">
                          <li class="nav-item ">
                            <a class="nav-link " href="#">
                              <i ><svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                                <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>
                            </svg></i>
                              <span>DASHBOARD</span>
                            </a>
                          </li>
                          <hr>
                          <li class="nav-item ">
                            <a class="nav-link " href="{{url('/home')}}">
                              <i><svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="icon-20">
                                <path opacity="0.4" d="M10.0833 15.958H3.50777C2.67555 15.958 2 16.6217 2 17.4393C2 18.2559 2.67555 18.9207 3.50777 18.9207H10.0833C10.9155 18.9207 11.5911 18.2559 11.5911 17.4393C11.5911 16.6217 10.9155 15.958 10.0833 15.958Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M22.0001 6.37867C22.0001 5.56214 21.3246 4.89844 20.4934 4.89844H13.9179C13.0857 4.89844 12.4102 5.56214 12.4102 6.37867C12.4102 7.1963 13.0857 7.86 13.9179 7.86H20.4934C21.3246 7.86 22.0001 7.1963 22.0001 6.37867Z" fill="currentColor"></path>
                                <path d="M8.87774 6.37856C8.87774 8.24523 7.33886 9.75821 5.43887 9.75821C3.53999 9.75821 2 8.24523 2 6.37856C2 4.51298 3.53999 3 5.43887 3C7.33886 3 8.87774 4.51298 8.87774 6.37856Z" fill="currentColor"></path>
                                <path d="M21.9998 17.3992C21.9998 19.2648 20.4609 20.7777 18.5609 20.7777C16.6621 20.7777 15.1221 19.2648 15.1221 17.3992C15.1221 15.5325 16.6621 14.0195 18.5609 14.0195C20.4609 14.0195 21.9998 15.5325 21.9998 17.3992Z" fill="currentColor"></path>
                            </svg></i>
                              <span>MENU</span>
                            </a>
                          </li><!-- End Dashboard Nav -->
                         
                          <li class="nav-heading">Pages devis</li>

                          <li class="nav-item">
                            <a class="nav-link collapsed dropdown-toggle " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                              <i class="bi bi-menu-button-wide">
                                <svg width="18" height="18" fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                viewBox="0 0 32 32" xml:space="preserve">
                             <path id="concept--expansion_1_" d="M31,31.36H21c-0.199,0-0.36-0.161-0.36-0.36v-1.64H16c-0.199,0-0.36-0.161-0.36-0.36V16.358
                               h-4.292C11.163,19.147,8.835,21.36,6,21.36c-2.956,0-5.36-2.405-5.36-5.36c0-2.956,2.404-5.36,5.36-5.36
                               c2.834,0,5.161,2.21,5.348,4.998h4.292V3c0-0.199,0.161-0.36,0.36-0.36l4.64-0.002V1c0-0.199,0.161-0.36,0.36-0.36h10
                               c0.199,0,0.36,0.161,0.36,0.36v4c0,0.199-0.161,0.36-0.36,0.36H21c-0.199,0-0.36-0.161-0.36-0.36V3.358l-4.28,0.001v12.278h4.28V14
                               c0-0.199,0.161-0.36,0.36-0.36h10c0.199,0,0.36,0.161,0.36,0.36v4c0,0.199-0.161,0.36-0.36,0.36H21c-0.199,0-0.36-0.161-0.36-0.36
                               v-1.642h-4.28V28.64h4.28V27c0-0.199,0.161-0.36,0.36-0.36h10c0.199,0,0.36,0.161,0.36,0.36v4C31.36,31.199,31.199,31.36,31,31.36z
                                M21.36,30.64h9.279v-3.28H21.36V30.64z M6,11.36c-2.559,0-4.64,2.082-4.64,4.64S3.441,20.64,6,20.64s4.64-2.081,4.64-4.64
                               S8.559,11.36,6,11.36z M21.36,17.64h9.279v-3.28H21.36V17.64z M21.36,4.64h9.279V1.36H21.36V4.64z"/>
                             <rect id="_Transparent_Rectangle" style="fill:none;" width="32" height="32"/>
                             </svg>
                            </i><span>{{__('Analyse et cadrage')}}</span><i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                              <li>
                                <a href="" class="nav-link bg-white">
                                  <i ><svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                    <g>
                                    <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                    </g>
                                </svg></i><span>{{__('Section analyse et cadrage')}}</span>
                                </a>
                                
  
                            </ul>
                          </li><!-- End Components Nav -->

                          <li class="nav-item">
                            <a class="nav-link collapsed dropdown-toggle" data-bs-target="#dev-nav" data-bs-toggle="collapse" href="#">
                              <i class="bi bi-menu-button-wide">
                                <svg opacity="0.7" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="https://icons8.com/icon/37927/code-file">
                                  <path d="M7 8L3 12L7 16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M17 8L21 12L17 16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M14 4L9.8589 19.4548" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                              </i><span>{{__('Developpement ')}}</span><i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="dev-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                              <li>
                                <a href="{{route('sectionDev')}}" class="nav-link bg-white">
                                  <i class="bi bi-circle">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                      <g>
                                      <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                      </g>
                                  </svg> </i><span>{{__('Developement et Test')}}</span>
                                </a>
                                <a href="{{url('/module')}}" class="nav-link bg-white">
                                  <i class="bi bi-circle">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                      <g>
                                      <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                      </g>
                                  </svg>  
                                  </i><span>{{__('Modules et Items')}}</span>
                                </a>
                                {{-- <a href="" class="nav-link bg-white">
                                  <i class="bi bi-circle">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                      <g>
                                      <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                      </g>
                                  </svg>  
                                  </i><span>{{__('Items')}}</span>
                                </a> --}}
  
                            </ul>
                          </li><!-- End Components Nav -->
                    
                          <li class="nav-item">
                            <a class="nav-link collapsed dropdown-toggle" data-bs-target="#planification-nav" data-bs-toggle="collapse" href="#">
                              <i class="bi bi-journal-text"><img src="" alt="">
                                 <svg class="icon-32" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M3.09277 9.40421H20.9167" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M16.442 13.3097H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M12.0045 13.3097H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M7.55818 13.3097H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M16.442 17.1962H16.4512" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M12.0045 17.1962H12.0137" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M7.55818 17.1962H7.56744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M16.0433 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M7.96515 2V5.29078" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2383 3.5791H7.77096C4.83427 3.5791 3 5.21504 3 8.22213V17.2718C3 20.3261 4.83427 21.9999 7.77096 21.9999H16.229C19.175 21.9999 21 20.3545 21 17.3474V8.22213C21.0092 5.21504 19.1842 3.5791 16.2383 3.5791Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            
                              </i><span>{{__('Planification')}}</span><i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="planification-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                              <li>
                                <a href="">
                                  <i class="bi bi-circle">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                      <g>
                                      <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                      </g>
                                  </svg> </i><span>{{__('Section Planification')}}</span>
                                </a>
                              </li>
                             
                            </ul>
                          </li><!-- End Forms Nav -->

                        
                          
                          <li class="nav-heading">Pages factures</li>

                          <li class="nav-item">
                            <a class="nav-link collapsed dropdown-toggle" data-bs-target="#facture-nav" data-bs-toggle="collapse" href="#">
                              <i class="bi bi-layout-text-window-reverse"><svg class="icon-20" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 24 24" fill="none">
                                <g>
                                <g>
                                <path d="M17 3.99988L4.99998 3.99998C3.89542 3.99999 3 4.89542 3 5.99998V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V6.69039" stroke="currentColor" stroke-linecap="round"></path>
                                <path d="M12 12L21 3" stroke="currentColor" stroke-linecap="round"></path>
                                </g>
                                </g>
                            </svg></i><span>{{__('Facturation')}}</span><i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="facture-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                              <li>
                                <a href="/gestion_classe">
                                  <i class="bi bi-circle">
                                    <svg class="icon-10" xmlns="http://www.w3.org/2000/svg" width="10" viewBox="0 0 24 24" fill="currentColor">
                                      <g>
                                      <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                                      </g>
                                  </svg> 
                                    </i><span> {{__('A propos de facture')}}</span>
                                </a>
                              </li>
                             
                            </ul>
                          </li><!-- End Tables Nav -->
                      
                          
                    
                          <li class="nav-heading">Pages de Paramétrage</li>
                    
                          <li class="nav-item">
                            <a class="nav-link collapsed" href="{{url('/profiles')}}">
                              <i><svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z" fill="currentColor"></path>
                                <path d="M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z" fill="currentColor"></path>
                                <path d="M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z" fill="currentColor"></path>
                            </svg></i>
                              <span>Gerer les profiles</span>
                            </a>
                          </li><!-- End Profile Page Nav -->
                    
                          <li class="nav-item">
                            <a class="nav-link collapsed" href="#">
                              <i class="bi bi-envelope"><img src="" alt=""></i>
                              <span>Contact</span>
                            </a>
                          </li><!-- End Contact Page Nav -->
                    
                         
                    
                          <li class="nav-item">
                            <a class="nav-link collapsed dropdown-toggle" data-bs-target="#forms-nav2" data-bs-toggle="collapse" href="#">
                              <i class="bi bi-journal-text"><img src="" alt=""></i><span>{{__('Déconnexion')}}</span><i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            
                          </li><!-- End Forms Nav -->
                         
                    
                        </ul>
                    
                    </aside>
                </div>
                <div class="col-lg-10">
                    <main class="py-4">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>

    </div>
    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script>
        $('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})


    </script>
</body>
</html>
