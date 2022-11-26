<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('list_chart')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>
        
            <!-- Danh mục -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1"
                    aria-expanded="true" aria-controls="collapse1">
                    <i class='bx bx-category-alt'></i>
                    <span>Danh mục</span>
                </a>
                <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('list_dm')}}">Danh sách danh mục</a>
                        <a class="collapse-item" href="{{route('add_dm')}}">Thêm danh mục</a>
                    </div>
                </div>
            </li>
            <!-- Sản phẩm -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse2"
                    aria-expanded="true" aria-controls="collapse2">
                    <i class='bx bx-store-alt'></i>
                    <span>Sản phẩm</span>
                </a>
                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('list_sp')}}">Danh sách sản phẩm</a>
                        <a class="collapse-item" href="{{route('add_sp')}}">Thêm sản phẩm</a>
                    </div>
                </div>
            </li>
            <!-- Bình luận -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3"
                    aria-expanded="true" aria-controls="collapse3">
                    <i class='bx bx-message-dots'></i>
                    <span>Bình luận</span>
                </a>
                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('list_bl')}}">Danh sách bình luận</a>                    
                    </div>
                </div>
            </li>
            <!-- Khách hàng -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4"
                    aria-expanded="true" aria-controls="collapse4">
                    <i class='bx bx-user'></i>
                    <span>Khách hàng</span>
                </a>
                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('list_kh')}}">Danh sách khách hàng</a>
                    </div>
                </div>
            </li>
            {{-- Hóa đơn --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5"
                    aria-expanded="true" aria-controls="collapse5">
                    <i class='bx bxs-calendar'></i>
                    <span>Hóa đơn</span>
                </a>
                <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('list_hd')}}">Danh sách hóa đơn</a>
                    </div>
                </div>
            </li>
            {{-- Bài viết --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse7"
                    aria-expanded="true" aria-controls="collapse7">
                    <i class='bx bx-news'></i>
                    <span>Bài viết</span>
                </a>
                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{route('list_bv')}}">Danh sách bài viết</a>
                        <a class="collapse-item" href="{{route('add_bv')}}">Thêm bài viết</a>
                    </div>
                </div>
            </li>
            {{-- Về trang chủ --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route('index')}}">
                    <i class='bx bx-home'></i>
                    <span>Về trang chủ</span>
                </a>
            </li>
        </ul>
        <!-- End of Sidebar -->   

        {{-- nội dung  --}}
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">
                    @yield('main_admin')
                </div>
            </div>
        </div>
        {{-- end nội dung --}}
    </div>
    <!-- Bootstrap core JavaScript--> 
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
    </script>
</body>
</html>

{{-- THỐNG KÊ DOANH THU BIỂU ĐỒ CỘT --}}
{{-- <script>
    var xValues = ["Casio", "Sekio", "Citizen", "Casio G-Shock"];
    var yValues = [5, 5, 5, 5];
    var barColors = ["red", "green","blue","orange"];
    
    new Chart("myChart_doanhthu", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
          display: true,
          text: "Thống kê doanh thu"
        }
      }
    });
</script> --}}

{{-- ---------------------------------------------------------------------------------------------- --}}

{{-- THỐNG KÊ SẢN PHẨM BIỂU ĐỒ TRÒN --}}
{{-- <script>
    var xValues = ["Casio", "Sekio", "Citizen", "Casio G-Shock"];
    var yValues = [5, 5, 5, 5];
    var barColors = [
      "#b91d47",
      "#00aba9",
      "#2b5797",
      "#e8c3b9",
    ];
    
    new Chart("myChart_sanpham", {
      type: "pie",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: "Thống kê sản phẩm"
        }
      }
    });
</script> --}}