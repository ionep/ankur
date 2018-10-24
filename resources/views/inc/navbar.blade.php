<nav class="navbar">
    <div class="navbar-header">
        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            &nbsp;
        </ul>

        <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            
            <li class="dropdown">
                <a role="button">
                    Services <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/plans">Saving Plans</a></li>
                    <li><a href="/loans">Loans</a></li>
                    <li><a href="/internalservice">Internal Services</a></li>
                    <li><a href="/hours">Working Hours</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a role="button">
                    Extras <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/extras/news">News</a></li> 
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/remit">Ankur Remit</a></li>
                    <li><a href="/online">Onine Utility</a></li>
                    <li><a href="/easy">Easy Buy Easy Pay</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a role="button">
                    About <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/introduction">Introduction</a></li> 
                    <li><a href="/boardmembers">Board Members</a></li>
                    <li><a href="/accountmembers">Accounting Committee</a></li>
                    <li><a href="/loancommittee">Loan Committee</a></li>
                    <li><a href="/advisors">Advisor Committee</a></li>
                    <!--<li><a href="/staffs">Staffs</a></li>-->
                    
                </ul>
            </li>
            <li class="dropdown">
                <a role="button">
                    FAQ <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/openaccount">Open new Account</a></li>
                    <li><a href="/getloan">Get loans</a></li> 
                    <li><a href="/buyvehicle">Buy new vehicle</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </li>
        </ul>

        <!--Right side of navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if(Auth::guest())
                
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href='/home'>Settings</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</nav>