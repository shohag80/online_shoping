<header class="site-header"> <div class="container-fluid"> <div class="row">
    <div class="col-md-12">
    <form action="">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="logo col-md-3">
        <!-- <a href="/" title="Pizza"><img src="" alt="Logo" /><span class="sr-only">Logo</span></a> -->
        <h1><b><i>Online Shop</i></b></h1>
        </div>
        <div class="col-md-6">
            <input class="mailinglist-input form-control" type="text" name="Search" placeholder="Search"
                autocomplete="off" aria-required="true" aria-label="Search" />
        </div>
        <div class="col-md-1">
            <button class="mailinglist-submit btn btn-default" type="submit" name="www" aria-label="mailinglist button">
                <span id="mailing-btn-txt">GO</span>
            </button>
        </div>
    </div>
    </form>
    </div>
    </div>
    <div class="row col-md-12">
        <div class="container-fluid">
            <section class="navbar-wrapper hidden-xs">
                <nav class="navbar navbar-inverse navbar-static-top">

                    <div id="navbar" class="navbar-collapse collapse">

                        <ul id="" class="nav navbar-nav">

                            <li class="dropdown-toggle">
                                <a href="#" class="dropdown-toggle">Profile</a>
                            </li>

                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>

                            <li>
                                <a href="{{url('/Category')}}">Category</a>
                            </li>

                            <li>
                                <a href="{{url('/Brands')}}">Brands</a>
                            </li>

                            <li>
                                <a href="{{url('/Products')}}">Products</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </section>
        </div>
    </div>
    </div>
    </div>
</header>