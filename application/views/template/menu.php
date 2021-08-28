<ul class="nav pull-right top-menu"> 
    <!-- user login dropdown start-->
    <li class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
			<span class="profile-ava">
                <img alt="" src="<?php echo base_url() ?>dist/img/myprofil.jpg">
            </span>
            <span class="username">
				<?php echo ucfirst($this->session->userdata('username')); ?>
			</span>
                <b class="caret"></b>
        </a>
		<ul class="dropdown-menu extended logout">
			<div class="log-arrow-up"></div>
				<li class="border-top">
					<a href="<?php echo base_url() ?>login/logout"><i class="icon_key_alt"></i> Log Out</a>
				</li>
		</ul>
	</li>
	<!-- user login dropdown end -->
</ul>