<div class="preloading">
        <div class="sonar-wrapper">
            <div class="sonar-emitter"><img src="https://gettreewp.demothemesflat.com/wp-content/themes/gettree//assets/images/preloading.png" alt="Preloading">
                <div class="sonar-wave"></div>
            </div>
        </div>
    </div>
    <div class="overlay responsive-menu-button"></div>
    <div id="page" class="site">
        <div class="desktop-header">
            <div class="site-header-wrap header-2">
                <div class="bottom-header">
                    <div class="container-fluid">
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="bottom-header-inner">
                                    <div class="site-logo clearfix">
                                        <div class="site-logo-inner">
                                            <a href="#" title="Gettree"> <img src="https://gettreewp.demothemesflat.com/wp-content/uploads/2021/07/logo.svg" alt="Gettree"> </a>
                                        </div>
                                    </div>
                                    <div class="section-menu">
                                        <nav id="main-nav" class="main-nav">
                                            <ul id="menu-primary-menu" class="menu">
                                                <li id="menu-item-1251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1251"><a href="#">{{__('Home')}}</a>
                                                </li>
                                                <li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-14 current_page_item current_page_parent current-menu-ancestor current-menu-parent current_page_ancestor menu-item-has-children menu-item-26"><a href="#" aria-current="page">{{__('Blog')}}</a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-3753" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-14 current_page_item current_page_parent menu-item-3753"><a href="#" aria-current="page">{{__('Blog Listing')}}</a>
                                                        </li>
                                                        <li id="menu-item-1000" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1000"><a href="#">{{__('Blog Single')}}</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-1251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1251"><a href="#">{{__('Contact')}}</a>
                                                </li>
                                            </ul>   
                                        </nav>
                                        <button id="responsive-menu-button" class="responsive-menu-button responsive-menu-boring responsive-menu-accessible" type="button" aria-label="Menu"> <i class="fas fa-bars"></i> </button>
                                    </div>
                                    <div class="wrap-buttons">
                                        <div class="wrap-mini-button">
                                            <div class="widget-odd widget-first widget-1 widget widget_text">
                                                <div class="section-menu">
                                        <nav id="main-nav" class="main-nav">
                                            <ul id="menu-primary-menu" class="menu">
                                                <li id="menu-item-26" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-14 current_page_item current_page_parent current-menu-ancestor current-menu-parent current_page_ancestor menu-item-has-children menu-item-26"><a href="#" aria-current="page">{{__('Language')}}</a>
                                                    <ul class="sub-menu">
                                                        <li id="menu-item-3753" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-14 current_page_item current_page_parent menu-item-3753"><a href="{{URL::to('language',['en'])}}" aria-current="page">English</a>
                                                        </li>
                                                        <li id="menu-item-1000" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1000"><a href="{{URL::to('language',['vi'])}}">Việt Nam</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                        <button id="responsive-menu-button" class="responsive-menu-button responsive-menu-boring responsive-menu-accessible" type="button" aria-label="Menu"> <i class="fas fa-bars"></i> </button>
                                    </div>
                                            </div>
                                            <div class="widget-even widget-last widget-2 widget widget_text">
                                                <div class="textwidget">
                                                    <div class="get-quote"> 
                                                        @if($name)
                                                            <a href="{{URL::to('logout')}}">{{$name}}</a>
                                                        @else
                                                            <a href="{{URL::to('login')}}">{{__('Login')}}</a>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>