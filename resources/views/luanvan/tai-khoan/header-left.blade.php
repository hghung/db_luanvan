<div class="dashboard_sidebar_menu dn-992">
    <ul class="sidebar-menu">
        <li class="header">
          <img src="{{ asset('public/luanvan/images/header-logo2.png')}}" alt="header-logo2.png"> 
          NTKD-454
        </li>
       

        <li class="title"><span>Quản lý tài khoản</span></li>
        {{--    --}}
        <li class="treeview {{ request()->routeIs('taikhoan.dashbord') ? 'active' : '' }}">
          <a href="{{ route('taikhoan.dashbord') }}">
            <i class="flaticon-layers"></i>
            <span> Dashboard</span>
          </a>
        </li>
        {{--    --}}
        <li class="treeview {{ request()->routeIs('taikhoan.profile') ? 'active' : '' }}">
          <a href="{{ route('taikhoan.profile') }}">
            <i class="flaticon-user"></i> 
            <span>Thông tin tài khoản</span>
          </a>
        </li>
        {{--  --}}
        <li class="treeview {{ request()->routeIs('bantin.list') ? 'active' : '' }}">
          <a href="{{ route('bantin.list') }}">
            <i class="fa fa-list-alt"></i>
            <span>Danh sách bản tin</span>
          </a>
        </li>

        {{--  --}}
        <li class="treeview {{ request()->routeIs('datlich.list') ? 'active' : '' }}">
          <a href="{{ route('datlich.list') }}">
            <i class="fa fa-list-alt"></i>
            <span>Danh sách lịch hẹn</span>
          </a>
        </li>
        
        {{--    --}}
        <li class="treeview {{ request()->routeIs('cuahang.history','cuahang.list') ? 'active' : '' }}">
          <a href="page-my-properties.html">
            <i class="fa fa-shopping-cart"></i>
            <span>Cửa hàng</span>
            <i class="fa fa-angle-down pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li class="{{ request()->routeIs('cuahang.list') ? 'active' : '' }}"><a href="{{ route('cuahang.list') }}"><i class="fa fa-circle"></i> Danh sách</a></li>

              <li class="{{ request()->routeIs('cuahang.history') ? 'active' : '' }}"><a href="{{ route('cuahang.history') }}"><i class="fa fa-circle"></i> Lịch sử thanh toán </a></li>
          </ul>
        </li>
        {{--  --}}
        <li class="treeview">
          <a href="{{ route('chat.index') }}">
            <i class="flaticon-envelope"></i>
            <span> Tin nhắn</span>
          </a>
        </li>
        

        {{--  --}}
        <li>
          <a href="page-my-favorites.html">
            <i class="flaticon-heart"></i> 
            <span> Quan tâm</span>
          </a>
        </li>

        {{--    --}}
        <li class="treeview">
          <a href="page-my-review.html"><i class="flaticon-chat"></i><span> Đánh giá</span><i class="fa fa-angle-down pull-right"></i></a>
          <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle"></i> My Reviews</a></li>
              <li><a href="#"><i class="fa fa-circle"></i> Visitor Reviews</a></li>
          </ul>
        </li>
        {{--  --}}
        <li>
          <a href="{{ route('dangxuat') }}">
            <i class="flaticon-logout"></i> 
            <span>Đăng xuất</span>
          </a>
        </li>
        {{--  --}}
        @if(Auth::user()->id_vaitro == 1)
        <li class="title"><span>Quản lí hệ thống</span></li>
        {{--    --}}
        <li class="treeview {{ request()->routeIs('taikhoan.thongke') ? 'active' : '' }}">
          <a href="{{ route('taikhoan.thongke') }}">
            <i class="fa fa-line-chart"></i>
            <span>Thống kê</span>
          </a>
        </li>

        <li class="treeview {{ request()->routeIs('taikhoan.backup') ? 'active' : '' }}">
          <a href="page-my-packages.html">
            <i class="flaticon-box"></i> 
            <span>Backup</span>
          </a>
        </li>
        {{--    --}}
        <li class="treeview {{ request()->routeIs('taikhoan.backup') ? 'active' : '' }}">
          <a href="page-my-packages.html">
            <i class="fa fa-ticket"></i>            
            <span>Voucher</span>
          </a>
        </li>
        {{--  --}}
        <li class="treeview {{ request()->routeIs('trangthai.list','trangthai.add','trangthai.khoiphuc') ? 'active' : '' }}">
          <a href="page-my-properties.html">
            
            <i class="fa fa-recycle"></i>
            <span>Trạng thái</span>
            <i class="fa fa-angle-down pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li class="{{ request()->routeIs('trangthai.list') ? 'active' : '' }}"><a href="{{ route('trangthai.list') }}"><i class="fa fa-circle"></i> Danh sách</a></li>

              <li class="{{ request()->routeIs('trangthai.add') ? 'active' : '' }}"><a href="{{ route('trangthai.add') }}"><i class="fa fa-circle"></i> Thêm </a></li>

              <li class="{{ request()->routeIs('trangthai.khoiphuc') ? 'active' : '' }}"><a href="{{ route('trangthai.khoiphuc') }}"><i class="fa fa-circle"></i> Khôi phục</a></li>
          </ul>
        </li>
        {{--  --}}
        <li class="treeview {{ request()->routeIs('phuongthuc.list','phuongthuc.add','phuongthuc.khoiphuc') ? 'active' : '' }}">
          <a href="page-my-properties.html">
            
            <i class="fa fa-stumbleupon"></i>
            <span>Phương thức thanh toán</span>
            <i class="fa fa-angle-down pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li class="{{ request()->routeIs('phuongthuc.list') ? 'active' : '' }}"><a href="{{ route('phuongthuc.list') }}"><i class="fa fa-circle"></i> Danh sách</a></li>

              <li class="{{ request()->routeIs('phuongthuc.add') ? 'active' : '' }}"><a href="{{ route('phuongthuc.add') }}"><i class="fa fa-circle"></i> Thêm </a></li>

              <li class="{{ request()->routeIs('phuongthuc.khoiphuc') ? 'active' : '' }}"><a href="{{ route('phuongthuc.khoiphuc') }}"><i class="fa fa-circle"></i> Khôi phục</a></li>
          </ul>
        </li>
        {{--    --}}

        <li class="treeview {{ request()->routeIs('sanpham.list','sanpham.add','sanpham.khoiphuc') ? 'active' : '' }}">
          <a href="page-my-properties.html">
            
            <i class="fa fa-vimeo"></i>
            <span>Sản phẩm</span>
            <i class="fa fa-angle-down pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li class="{{ request()->routeIs('sanpham.list') ? 'active' : '' }}"><a href="{{ route('sanpham.list') }}"><i class="fa fa-circle"></i> Danh sách</a></li>

              <li class="{{ request()->routeIs('sanpham.add') ? 'active' : '' }}"><a href="{{ route('sanpham.add') }}"><i class="fa fa-circle"></i> Thêm </a></li>

              <li class="{{ request()->routeIs('sanpham.khoiphuc') ? 'active' : '' }}"><a href="{{ route('sanpham.khoiphuc') }}"><i class="fa fa-circle"></i> Khôi phục</a></li>
          </ul>
        </li>

          




        

        @endif
        {{--  --}}
        @if(Auth::user()->id_vaitro == 1)
        <li class="title"><span>Quản lí thành viên</span></li>
        {{--    --}}
        <li class="treeview {{ request()->routeIs('loaithanhvien.list') ? 'active' : '' }}">
          <a href="{{ route('loaithanhvien.list') }}">
            <i class="fa fa-trophy"></i>
            <span> Loại thành viên</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="flaticon-user"></i>
            <span> Quản lí thành viên</span>
          </a>
        </li>
        
        
        @endif
        {{--  --}}
        @if(Auth::user()->id_vaitro == 1)
        <li class="title"><span>Quản lí bản tin</span></li>
        <li class="treeview {{ request()->routeIs('ad.bantin.list','bantin.add','bantin.khoiphuc') ? 'active' : '' }}">
          <a href="page-my-properties.html">
            <i class="fa fa-list-alt"></i>
            <span>Bản tin</span>
            <i class="fa fa-angle-down pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li class="{{ request()->routeIs('ad.bantin.list') ? 'active' : '' }}"><a href="{{ route('bantin.list') }}"><i class="fa fa-circle"></i> Danh sách</a></li>

              <li class="{{ request()->routeIs('bantin.add') ? 'active' : '' }}"><a href="{{ route('bantin.add') }}"><i class="fa fa-circle"></i> Thêm </a></li>

              <li class="{{ request()->routeIs('bantin.khoiphuc') ? 'active' : '' }}"><a href="{{ route('bantin.khoiphuc') }}"><i class="fa fa-circle"></i> Khôi phục</a></li>
          </ul>
        </li>
        {{--  --}}
        <li class="treeview {{ request()->routeIs('loaibantin.list','loaibantin.add','loaibantin.khoiphuc') ? 'active' : '' }}">
          <a href="page-my-properties.html">
            <i class="fa fa-list-alt"></i>
            <span>Loại bản tin</span>
            <i class="fa fa-angle-down pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li class="{{ request()->routeIs('loaibantin.list') ? 'active' : '' }}"><a href="{{ route('loaibantin.list') }}"><i class="fa fa-circle"></i> Danh sách</a></li>

              <li class="{{ request()->routeIs('loaibantin.add') ? 'active' : '' }}"><a href="{{ route('loaibantin.add') }}"><i class="fa fa-circle"></i> Thêm </a></li>

              <li class="{{ request()->routeIs('loaibantin.khoiphuc') ? 'active' : '' }}"><a href="{{ route('loaibantin.khoiphuc') }}"><i class="fa fa-circle"></i> Khôi phục</a></li>
          </ul>
        </li>
        
        {{--  --}}
        <li class="treeview {{ request()->routeIs('loaiBDS.list','loaiBDS.add', 'loaiBDS.khoiphuc') ? 'active' : '' }}">
          <a href="page-my-properties.html">
            <i class="fa fa-list-alt"></i>
            <span>Loại bất động sản</span>
            <i class="fa fa-angle-down pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li class="{{ request()->routeIs('loaiBDS.list') ? 'active' : '' }}"><a href="{{ route('loaiBDS.list') }}"><i class="fa fa-circle"></i> Danh sách</a></li>

              <li class="{{ request()->routeIs('loaiBDS.add') ? 'active' : '' }}"><a href="{{ route('loaiBDS.add') }}"><i class="fa fa-circle"></i> Thêm </a></li>
              
              <li class="{{ request()->routeIs('loaiBDS.khoiphuc') ? 'active' : '' }}"><a href="{{ route('loaiBDS.khoiphuc') }}"><i class="fa fa-circle"></i> Khôi phục</a></li>
          </ul>
        </li>
        {{--  --}}
        <li class="treeview {{ request()->routeIs('taisan.list','taisan.add','taisan.khoiphuc') ? 'active' : '' }}">
          <a href="page-my-properties.html">
            <i class="fa fa-list-alt"></i>
            <span>Tài sản</span>
            <i class="fa fa-angle-down pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li class="{{ request()->routeIs('taisan.list') ? 'active' : '' }}"><a href="{{ route('taisan.list') }}"><i class="fa fa-circle"></i> Danh sách</a></li>

              <li class="{{ request()->routeIs('taisan.add') ? 'active' : '' }}"><a href="{{ route('taisan.add') }}"><i class="fa fa-circle"></i> Thêm </a></li>

              <li class="{{ request()->routeIs('taisan.khoiphuc') ? 'active' : '' }}"><a href="{{ route('taisan.khoiphuc') }}"><i class="fa fa-circle"></i> Khôi phục</a></li>
          </ul>
        </li>
        {{--  --}}
        <li class="treeview {{ request()->routeIs('thuoctinh.list','thuoctinh.add','thuoctinh.khoiphuc') ? 'active' : '' }}">
          <a href="page-my-properties.html">
            <i class="fa fa-list-alt"></i>
            <span>Thuộc tính</span>
            <i class="fa fa-angle-down pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li class="{{ request()->routeIs('thuoctinh.list') ? 'active' : '' }}"><a href="{{ route('thuoctinh.list') }}"><i class="fa fa-circle"></i> Danh sách</a></li>

              <li class="{{ request()->routeIs('thuoctinh.add') ? 'active' : '' }}"><a href="{{ route('thuoctinh.add') }}"><i class="fa fa-circle"></i> Thêm </a></li>

              <li class="{{ request()->routeIs('thuoctinh.khoiphuc') ? 'active' : '' }}"><a href="{{ route('thuoctinh.khoiphuc') }}"><i class="fa fa-circle"></i> Khôi phục</a></li>
          </ul>
        </li>



       
      @endif
        
        
        

        
    </ul>
</div>