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
	<header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= url('/') ?>"><img src="<?= url('image/logo.PNG'); ?>" alt="image" id="logo-web"></a>
				<table>
					<tr>
						<td>
							<div id="search_div">
								<table>
									<tr>
										<td>
											<font class="fa fa-search" style="font-size:20px; cursor:pointer; margin-top:5px;" id="search_action"></font>
										</td>
										<td style="padding-left:10px;">
											<font id="search_input"><input type="text" class="form-control" placeholder="Pencarian"><font class="fa fa-close" style="font-size:20px; cursor:pointer; float:right; margin-top:-28px; margin-right:7px;" id="search_close"></font></font>
										</td>
									</tr>
								</table>
							</div>
						</td>
						<td>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
						</td>
					</tr>
				</table>
				
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav" style="font-family:'Montserrat';">
                        <?php
						$query = \App\Helpers\AppHelper::menu_parent();
						foreach ($query as $row) {
						$numsub1 = \App\Helpers\AppHelper::menu_child_num($row->id);	
						?>
						<li <?php if($numsub1){ echo 'class="nav-item dropdown"'; } ?>>
							<a class="nav-link <?php if($numsub1){ echo 'dropdown-toggle'; } ?>" <?php if($numsub1){ ?>href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"<?php } else {?>href="<?= url($row->menu_link.'/'.$row->menu_link_slug) ?>"<?php } ?>>
								<?php echo $row->menu_name; ?>
							</a>
							<?php if($numsub1){ ?>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<?php
								$query2 = \App\Helpers\AppHelper::menu_child($row->id);
								foreach ($query2 as $row2) {
								$numsub2 = \App\Helpers\AppHelper::menu_child_num($row2->id);		
								?>
								<li>
									<a class="dropdown-item" <?php if($numsub2){ ?>href="#"<?php } else { ?>href="<?= url($row->menu_link.'/'.$row2->menu_link_slug) ?>"<?php } ?>><?php echo $row2->menu_name; ?> <?php if($numsub2){ ?><font class="fa fa-caret-right" style="color:#ff0000; float:right; margin-top:7px;"></font><?php } ?></a>
									<?php if($numsub2){ ?>
									<ul class="dropdown-menu dropdown-submenu">
										<?php
										$query3 = \App\Helpers\AppHelper::menu_child($row2->id);
										foreach ($query3 as $row3) {	
										?>
										<li>
											<a class="dropdown-item" href="<?= url($row->menu_link.'/'.$row3->menu_link_slug) ?>"><?php echo $row3->menu_name; ?></a>
										</li>
										<?php } ?>
									</ul>
									<?php } ?>
								</li>
								<?php } ?>
							</ul>		
							<?php } ?>			
						</li>
						<?php } ?>
						<li style="padding-top:8px; padding-left:20px;">
							<div id="search_div2">
								<table>
									<tr>
										<td>
											<font class="fa fa-search" style="font-size:20px; cursor:pointer;" id="search_action2"></font>
										</td>
										<td style="padding-left:10px;">
											<font id="search_input2"><input type="text" class="form-control" placeholder="Pencarian"><font class="fa fa-close" style="font-size:20px; cursor:pointer; float:right; margin-top:-28px; margin-right:7px;" id="search_close2"></font></font>
										</td>
									</tr>
								</table>
							</div>					
						</li>		

                    </ul>
                </div>
            </div>
        </nav>
    </header>