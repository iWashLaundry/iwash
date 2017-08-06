    <header>
        <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse"> 
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">iWash</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ isset($page) && $page == 'home' ? 'active' : '' }}">
                        <a class="nav-link" href="/dashboard/home">
                            <i class="fa fa-home fa-lg" aria-hidden="true"></i>
                            Home <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item {{ isset($page) && $page == 'workflow' ? 'active' : '' }}">
                        <a class="nav-link" href="/dashboard/workflow">
                            <i class="fa fa-play fa-lg" aria-hidden="true"></i>
                            Workflow
                        </a>
                    </li>
                    <li class="nav-item {{ isset($page) && $page == 'customers' ? 'active' : '' }}">
                        <a class="nav-link" href="/dashboard/customers">
                            <i class="fa fa-male fa-lg" aria-hidden="true"></i>
                            Customers 
                        </a>
                    </li>
                    <li class="nav-item {{ isset($page) && $page == 'inventory' ? 'active' : '' }}">
                        <a class="nav-link" href="/dashboard/inventory">
                            <i class="fa fa-list fa-lg" aria-hidden="true"></i>
                            Inventory 
                        </a>
                    </li>
                    <li class="nav-item {{ isset($page) && $page == 'analytics' ? 'active' : '' }}">
                        <a class="nav-link" href="/dashboard/analytics">
                            <i class="fa fa-area-chart fa-lg" aria-hidden="true"></i>
                            Analytics 
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item {{ isset($page) && $page == 'profile' ? 'active' : '' }}">
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle" id="accountDropdownMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-id-card fa-lg" aria-hidden="true"></i>
                                Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="accountDropdownMenuButton">
                                <a class="dropdown-item" href="/dashboard/profile">Profile</a>
                                <a class="dropdown-item" href="/logout">Logout</a>
                            </div>
                        </div>
                            
                    </li>    
                </ul>
            </div>
        </nav>
    </header>