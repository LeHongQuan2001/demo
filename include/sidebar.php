<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview"> 
		<a href="<?php echo WEB_ROOT; ?>views/?v=DB"><i class="fa fa-calendar"></i><span>Events Calendar</span></a>
	</li>
    <li class="treeview"> 
		<a href="<?php echo WEB_ROOT; ?>views/?v=LIST"><i class="fa fa-newspaper-o"></i><span>Quản lý sự kiện</span></a>
	</li>
	<li class="treeview"> 
		<a href="<?php echo WEB_ROOT; ?>views/?v=USERS"><i class="fa fa-users"></i><span>Quản lý tài khoản</span></a>
	</li>
	<?php 
	$type = $_SESSION['calendar_fd_user']['type'];
	if($type == 'admin') {
	?>
	<li class="treeview"> 
		<a href="<?php echo WEB_ROOT; ?>views/?v=HOLY"><i class="fa fa-plane"></i><span>Holidays</span></a>
	</li>
	<?php
	}
	?>
	<li class="treeview"> 
		<a href="<?php echo WEB_ROOT; ?>views/?v=DB"><i class="fa fa-calendar"></i><span>Lịch giảng dạy</span></a>
	</li>
	<li>
                        <a href="#"><i class="fa fa-desktop "></i>Công tác giảng dạy <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="lichtheotiendo.html"><i class="fa fa-toggle-on"></i>Lịch theo tiến độ</a>
                            </li>
                            <li>
                                <a href="lichtheotuan.html"><i class="fa fa-bell "></i>Lịch theo tuần</a>
                            </li>
                            <li>
                                <a href="thongkethucgiang.html"><i class="fa fa-circle-o "></i>Thống kê thực giảng</a>
                            </li>
  </ul>
</section>
<!-- /.sidebar -->