<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- MATERIAL CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body style="background-color: black;">
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="/images/logo.jpg" alt="log" height="140px">
                    <h2>project<span class="danger">WEB</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="#">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Dashboard</h3>
                    <a href="index.php" class="active">
                        <span class="material-icons-sharp">people</span>
                        <h3>Customers</h3>
                        <a href="#">
                            <span class="material-icons-sharp">receipt_long</span>
                            <h3>Orders</h3>
                            <a href="#">
                                <span class="material-icons-sharp">insights</span>
                                <h3>Analytics</h3>
                                <a href="#">
                                    <span class="material-icons-sharp">mail_outline</span>
                                    <h3>Messages</h3>
                                    <a href="#">
                                        <span class="material-icons-sharp">inventory</span>
                                        <h3>Products</h3>
                                        <a href="#">
                                            <span class="material-icons-sharp">report_gmailerrorred</span>
                                            <h3>Reports</h3>
                                            <a href="#">
                                                <span class="material-icons-sharp">settings</span>
                                                <h3>Settings</h3>
                                                <a href="#">
                                                    <span class="material-icons-sharp">add</span>
                                                    <h3>Add Products</h3>
                                                    <a href="#">
                                                        <span class="material-icons-sharp">logout</span>
                                                        <h3></h3>
                                                    </a>
                                                </a>
                                            </a>
                                        </a>
                                    </a>
                                </a>
                            </a>
                        </a>
                    </a>
                </a>
            </div>
        </aside>

        <!-- END OF ASIDE -->
        <main>
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>
            <div class="insights">
                <div class="sales">
                    <span class="material-icons-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>₹45,500</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- END OF SALES -->
                <div class="expenses">
                    <span class="material-icons-sharp">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Expenses</h3>
                            <h1>₹30,000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- END OF EXPENSES -->
                <div class="income">
                    <span class="material-icons-sharp">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>₹20,500</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>44%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 Hours</small>
                </div>
                <!-- END OF INCOME -->
            </div>
            <!-- END OF INSIGHTS -->
            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>userName</th>
                            <th> Number</th>
                            <th>email</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>15895123</td>
                            <td>mel zahra</td>
                            <td>055789415</td>
                            <td class="warning">x@gmail.com</td>
                            <!-- <td class="primary">Details</td> -->
                        </tr>>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
        </main>
        <!-- END OF MAIN -->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey,<b>sidaxe</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="#">
                    </div>
                </div>
            </div>
            <!-- END OF TOP -->

        </div>
    </div>

</body>

</html>