
<?php 

$active = 'class="active"'; 

?>


<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->            
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">

                <li class="sub-menu">
                    <a href="javascript:;" <?php if($namaFile == "dashboard" || $namaFile == "region_view") echo $active; ?>>
                        <i class="fa fa-tachometer"></i>
                        <span>Dashboard</span>
                    </a>
                    <ul class="sub">
                        <li <?php if($namaFile == "dashboard") echo $active; ?>><a href="dashboard">Main Dashboard</a></li>
                        <li <?php if($namaFile == "region_view") echo $active; ?>><a href="region_view">Region View</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" <?php if($namaFile == "product" || $namaFile == "upload_prod") echo $active; ?>>
                        <i class="fa fa-barcode"></i>
                        <span>Item Management</span>
                    </a>
                    <ul class="sub">
                        <li <?php if($namaFile == "product") echo $active; ?>><a href="product">Product Details</a></li>
                        <li <?php if($namaFile == "upload_prod") echo $active; ?>><a href="upload_prod">Upload</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="promo" <?php if($namaFile == "promo") echo $active; ?>>
                        <i class="fa fa-gift"></i>
                        <span>Promotion Management</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" <?php if($namaFile == "supplier" || $namaFile == "negotiation") echo $active; ?>>
                        <i class="fa fa-building-o"></i>
                        <span>Supplier Management</span>
                    </a>
                    <ul class="sub">
                        <li <?php if($namaFile == "supplier") echo $active; ?>><a href="supplier">Supplier Profile</a></li>
                        <li <?php if($namaFile == "negotiation") echo $active; ?>><a href="negotiation">Upload Negotiation</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" <?php if($namaFile == "logistic" || $namaFile == "upload_logistic" || $namaFile == "inventory" || $namaFile == "trackingOrder") echo $active; ?>>
                        <i class="fa fa-truck"></i>
                        <span>Logistic Management</span>
                    </a>
                    <ul class="sub">
                        <li <?php if($namaFile == "logistic") echo $active; ?>><a href="logistic">Logistic Profile</a></li>
                        <li <?php if($namaFile == "upload_logistic") echo $active; ?>><a href="upload_logistic">Upload</a></li>
                        <li <?php if($namaFile == "inventory") echo $active; ?>><a href="inventory">Inventory Management</a></li>
                        <li <?php if($namaFile == "tracking_order") echo $active; ?>><a href="tracking_order">Tracking Order</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" <?php if($namaFile == "shop" || $namaFile == "stat_shop") echo $active; ?>>
                        <i class="fa fa-shopping-cart"></i>
                        <span>Shop Management</span>
                    </a>
                    <ul class="sub">
                        <li <?php if($namaFile == "shop") echo $active; ?>><a href="shop">Shop Profile</a></li>
                        <li <?php if($namaFile == "stat_shop") echo $active; ?>><a href="stat_shop">Statistic</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" <?php if($namaFile == "customer" || $namaFile == "stat_customer" || $namaFile == "loyalty") echo $active; ?>>
                        <i class="fa fa-users"></i>
                        <span>Customer Management</span>
                    </a>
                    <ul class="sub">
                        <li <?php if($namaFile == "customer") echo $active; ?>><a href="customer">Customer Profile</a></li>
                        <li <?php if($namaFile == "stat_customer") echo $active; ?>><a href="stat_customer">Statistic</a></li>
                        <li <?php if($namaFile == "loyalty") echo $active; ?>><a href="loyalty">Loyalty System</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" <?php if($namaFile == "upload_human" || $namaFile == "update_human" || $namaFile == "user_registration") echo $active; ?>>
                        <i class="fa fa-user"></i>
                        <span>Human Management</span>
                    </a>
                    <ul class="sub">
                        <li <?php if($namaFile == "upload_human") echo $active; ?>><a href="upload_human">Upload</a></li>
                        <li <?php if($namaFile == "update_human") echo $active; ?>><a href="update_human">Update</a></li>
                        <li <?php if($namaFile == "user_registration") echo $active; ?>><a href="user_registration">User Registration</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="ticket" <?php if($namaFile == "ticket") echo $active; ?>>
                        <i class="fa fa-ticket"></i>
                        <span>Ticketing Management</span>
                    </a>
                </li>

            </ul>
        </div>        
        <!-- sidebar menu end-->
    </div>
</aside>