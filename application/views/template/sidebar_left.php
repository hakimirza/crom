
<?php 

$active = 'class="active"'; 

?>


<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->            
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">

                <li class="sub-menu">
                    <a href="javascript:;" <?php if($namaFile == "singleItem" || $namaFile == "supplier" || $namaFile == "promotion" || $namaFile == "inventory") echo $active; ?>">
                        <i class="fa fa-barcode"></i>
                        <span>Item Management</span>
                    </a>
                    <ul class="sub">
                        <li <?php if($namaFile == "singleItem") echo $active;; ?>><a href="single_item">Single Item</a></li> 
                        <li <?php if($namaFile == "supplier") echo $active;; ?>><a href="supplier">Supplier</a></li>
                        <li <?php if($namaFile == "promotion") echo $active;; ?>><a href="promotion">Promotion</a></li>
                        <li <?php if($namaFile == "inventory") echo $active;; ?>><a href="inventory">Inventory</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" <?php if($namaFile == "supplierDb" || $namaFile == "negotiation") echo $active; ?>>
                        <i class="fa fa-building-o"></i>
                        <span>Supplier Management</span>
                    </a>
                    <ul class="sub">
                        <li <?php if($namaFile == "supplierDb") echo $active; ?>><a href="database_supplier">Supplier Database</a></li>
                        <li <?php if($namaFile == "negotiation") echo $active; ?>><a href="negotiation">Negotiation</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" <?php if($namaFile == "trackingOrder" || $namaFile == "logisticMaintenance") echo $active; ?>>
                        <i class="fa fa-truck"></i>
                        <span>Logistic Management</span>
                    </a>
                    <ul class="sub">
                        <li <?php if($namaFile == "trackingOrder") echo $active; ?>><a href="tracking_order">Tracking Order</a></li>
                        <li <?php if($namaFile == "logisticMaintenance") echo $active; ?>><a href="logistic_maintenance">Logistic Maintenance</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" <?php if($namaFile == "customer_registration" || $namaFile == "customer_view") echo $active; ?>>
                        <i class="fa fa-user"></i>
                        <span>CR Management</span>
                    </a>
                    <ul class="sub">
                        <li <?php if($namaFile == "customer_registration") echo $active; ?>><a href="customer_registration">Customer Registration</a></li>
                        <li <?php if($namaFile == "customer_view") echo $active; ?>><a href="customer_view">Customer View</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" <?php if($namaFile == "principal_map" || $namaFile == "demografi" || $namaFile == "transaction" || $namaFile == "profitloss") echo $active; ?>>
                        <i class="fa fa-bar-chart-o"></i>
                        <span>KPI Statistik</span>
                    </a>
                    <ul class="sub">
                        <li <?php if($namaFile == "principal_map") echo $active; ?>><a href="principal_map">Retail, Logistic, and Principal Map</a></li>
                        <li <?php if($namaFile == "demografi") echo $active; ?>><a href="demografi">Demography</a></li>
                        <li <?php if($namaFile == "transaction") echo $active; ?>><a href="transaction">Transaction</a></li>
                        <li <?php if($namaFile == "profitloss") echo $active; ?>><a href="profitloss">Profit and Loss</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" <?php if($namaFile == "user_registration" || $namaFile == "user_view") echo $active; ?>>
                        <i class="fa fa-user"></i>
                        <span>User Management</span>
                    </a>
                    <ul class="sub">
                        <li <?php if($namaFile == "user_registration") echo $active; ?>><a href="user_registration">User Registration</a></li>
                        <li <?php if($namaFile == "user_view") echo $active; ?>><a href="user_view">View User</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="akun_manage" <?php if($namaFile == "akun_manage") echo $active; ?>>
                        <i class="fa fa-th"></i>
                        <span>Akun Management</span>
                    </a>
                </li>

            </ul>
        </div>        
        <!-- sidebar menu end-->
    </div>
</aside>