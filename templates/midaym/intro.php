		<div class="container">
            <header>
                <div class="row">
                    <div class="span3">
                        <a class="branding" href="<?php echo $blog_url ?>"><img src="<?php echo $template_dir_url ?>/img/branding.png" width="48px" height="48px"><? echo $blog_title?></a>
                    </div>
                    <div class="span9">
                        <nav class="pull-right">
                            <ul>
								<?php if($filename==NULL) { ?>
	                            <li class="active">
	                            <?php } else { ?>
	                            <li>
	                            <?php } ?>
                                	<a href="<?php echo $blog_url ?>"><i class="icon-home"></i> Home</a></li>
                                <?php if($filename=='about') { ?>
	                            <li class="active">
	                            <?php } else { ?>
	                            <li>
	                            <?php } ?>
                                	<a href="<?php echo $blog_url ?>/about"><i class="icon-vcard"></i> About</a></li>
                                <?php if($filename=='contact') { ?>
	                            <li class="active">
	                            <?php } else { ?>
	                            <li>
	                            <?php } ?>
                                	<a href="<?php echo $blog_url ?>/contact"><i class="icon-envelope-alt"></i> Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <hgroup>
                    <h1>
                        <? echo $page_title;?>
                        <small>
                            <? echo $page_tag;?>
                        </small>
                    </h1>
                </hgroup>
            </header>
        </div>