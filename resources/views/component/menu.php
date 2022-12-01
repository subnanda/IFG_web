    <style>
	.dropdown-menu li {
	position: relative;
	}
	.dropdown-menu .dropdown-submenu {
	display: none;
	position: absolute;
	left: 100%;
	top: -7px;
	}
	.dropdown-menu .dropdown-submenu-left {
	right: 100%;
	left: auto;
	}
	.dropdown-menu > li:hover > .dropdown-submenu {
	display: block;
	}
	@media (min-width: 992px) {  
		#search_div{
			display:none;
		}

		#search_div2{
			display:inline;
		}
	}
	@media (max-width: 991px) {  
		#search_div{
			display:inline;
		}

		#search_div2{
			display:none;
		}
	}

	#search_input{
		display:none;
	}

	#search_input2{
		display:none;
	}
	</style>
	<header class="top-header fixed-menu" style="z-index:100;">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= url('/') ?>"><img src="<?= url('image/logo.PNG'); ?>" alt="image" id="logo-web"></a>
				<table id="width-search">
					<tr>
						<td align="right">
							<div id="search_div">
								<table style="width:100%;">
									<tr>
										<td style="padding-left:10px;" align="left">
											<font id="search_input"><input type="text" id="search_action2" class="form-control" placeholder="Pencarian" style="width:100%;" onkeyup="search_input2(this.value)"></font>
											<div id="search_hasil2" style="position: absolute; width:80%;"></div>
										</td>
										<td width="20">
											<div class="fa fa-close" style="font-size:20px; cursor:pointer;" id="search_close"></div>
											<font class="fa fa-search" style="font-size:20px; cursor:pointer; margin-top:5px;" id="search_click"></font>
										</td>
									</tr>
								</table>
							</div>
						</td>
						<td style="width:50px;">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
								<span></span>
								<span></span>
								<span></span>
							</button>
						</td>
					</tr>
				</table>
				
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
					<div style="padding-top:8px; margin-left:10%; width:80%; padding-left:20%; padding-right:20%; position:absolute;" id="search_input2">
						<center>
							<table style="width:100%;">
								<tr>
									<td>
										<input type="text" class="form-control" placeholder="Pencarian" style="width:100%;" id="search_action1" onkeyup="search_input(this.value)">
										<div id="search_hasil1" style="position: absolute; width:47%;"></div>
									</td>
									<td width="20" style="padding-top:35px; padding-left:15px;">
										<font class="fa fa-close" style="font-size:20px; cursor:pointer; float:right; margin-top:-28px; margin-right:7px; width:100%;" id="search_close2"></font>
									</td>
								</tr>
							</table>	
						</center>					
					</div>
                    <ul class="navbar-nav" style="font-family:'Montserrat'; font-size:13px;">
                        <?php
						$query = \App\Helpers\AppHelper::menu_parent();
						foreach ($query as $row) {
						$numsub1 = \App\Helpers\AppHelper::menu_child_num($row->id);	
						?>
						<li <?php if($numsub1){ echo 'class="nav-item dropdown search_div3"'; } else { echo 'class="search_div3"'; } ?>>
							<a onclick="menu_utama_bgt(<?php echo $row->id; ?>)" style="font-size:13px; font-weight:bold;" class="nav-link font-menu-title<?php echo $row->id; ?> <?php if($numsub1){ echo 'dropdown-toggle'; } ?>" <?php if($numsub1){ ?>href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"<?php } else {?>href="<?= url($row->menu_link.'/'.$row->menu_link_slug) ?>"<?php } ?>>
								<?php echo $row->menu_name; ?>
							</a>
							<?php if($numsub1){ ?>
							<ul class="dropdown-menu menu-utama<?php echo $row->id; ?>" aria-labelledby="navbarDropdownMenuLink" style="font-size:13px;">
								<?php
								$query2 = \App\Helpers\AppHelper::menu_child($row->id);
								foreach ($query2 as $row2) {
								$numsub2 = \App\Helpers\AppHelper::menu_child_num($row2->id);		
								?>
								<li class="show-submenu">
									<a class="dropdown-item" onclick="submenu(<?php echo $row->id; ?>, <?php echo $row2->id; ?>)" <?php if($numsub2){ ?>href="#"<?php } else { ?>href="<?= url($row->menu_link.'/'.$row2->menu_link_slug) ?>"<?php } ?>><?php echo $row2->menu_name; ?> <?php if($numsub2){ ?><font class="fa fa-caret-right" style="color:#ff0000; float:right; margin-top:7px; font-size:13px; font-weight:600; display:inline;"></font><?php } ?></a>
									<?php if($numsub2){ ?>
									<ul class="dropdown-menu dropdown-submenu dropdown-submenus<?php echo $row2->id; ?>" id="submenu-active">
										<?php
										$query3 = \App\Helpers\AppHelper::menu_child($row2->id);
										foreach ($query3 as $row3) {	
										?>
										<li>
											<a class="dropdown-item" href="<?= url($row->menu_link.'/'.$row3->menu_link_slug) ?>" style="font-size:13px; font-weight:600;"><?php echo $row3->menu_name; ?></a>
										</li>
										<?php } ?>
									</ul>
									<?php } ?>
								</li>
								<?php } ?>
							</ul>		
							<?php } ?>	
							<div class="font-menu<?php echo $row->id; ?> font-menuan"></div>		
						</li>
						<?php } ?>		
						<li style="padding-top:8px; padding-left:15px;" id="search_click2">
							<font class="fa fa-search" style="font-size:20px; cursor:pointer;"></font>
						</li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>