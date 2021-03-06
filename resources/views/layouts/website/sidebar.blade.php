<div class="main-sidebar-menu-wrapper">
    <div class="main-sidebar-menu">
        <div class="sidebar-menu">
            <ul class="pt-3">
                @foreach($getCategory as $category)
                    <li class="sidebar-dropdown">
                        <a href="{{ route('maincategory',$category->id)}}" class="main-cat">{{$category->category_name}}
                            <span><i class="fas fa-angle-right"></i></span></a>
                        <div class="sidebar-submenu">
                            <ul>
                                @foreach($category->children as $subCategory)
                                    <li class=""><a href="{{ route('category',$subCategory->id)}}"
                                                    class="main-subcat"><span> {{$subCategory->category_name}}</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- sidebar-menu  -->
    </div>
    <main id="special-filters">
        <div class="row">
            <div class="mx-auto">
                <p>
                    <a href="#">Clearance Items</a>
                </p>
                <p>
                    <a href="#">Special Items</a>
                </p>
                <p>
                    <a href="#">Best Selling Items</a>
                </p>
                <p>
                    <a href="#">New Arrival Items</a>
                </p>
            </div>
        </div>
    </main>
</div>
