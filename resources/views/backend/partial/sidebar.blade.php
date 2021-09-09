
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <span data-feather="home"></span>
                    {{auth()->user()->name}}
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('category.list')}}">
                    <span data-feather="file"></span>
                    Category
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{route('items.list')}}">
                    <span data-feather="shopping-cart"></span>
                    Items
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('employee.list')}}">
                    <span data-feather="users"></span>
                    Employees
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link" href="{{route('delivery.list')}}">
                    <span data-feather="users"></span>
                    Delivery Man
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('customer.list')}}">
                    <span data-feather="users"></span>
                    Customers
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('user.list')}}">
                    <span data-feather="users"></span>
                    Users
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{route('order.list')}}">
                    <span data-feather="file"></span>
                    Orders
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    Order_details
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2"></span>
                    Reports
                </a>
            </li>

        </ul>


    </div>
</nav>
