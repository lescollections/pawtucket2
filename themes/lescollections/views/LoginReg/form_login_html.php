<?php
	$vn_label_col = 2;
	if($this->request->isAjax()){
		$vn_label_col = 4;

print $this->render("Front/featured_set_slideshow_html.php");
?>

		<div id="caFormOverlay"><div class="pull-right pointer" onclick="caMediaPanel.hidePanel(); return false;"><span class="glyphicon glyphicon-remove-circle"></span></div>
<?php
	}
?>
			<H1><?php print _t("Login"); ?></H1>
<?php
	if($this->getVar("message")){
		print "<div class='alert alert-danger'>".$this->getVar("message")."</div>";
	}
?>
			<form id="LoginForm" action="<?php print caNavUrl($this->request, "", "LoginReg", "login"); ?>" class="form-horizontal" role="form" method="POST">
				<div class="form-group">
					<label for="username" class="col-sm-<?php print $vn_label_col; ?> control-label"><?php print _t("Username"); ?></label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="username" name="username">
					</div><!-- end col-sm-7 -->
				</div><!-- end form-group -->
				<div class="form-group">
					<label for="password" class="col-sm-<?php print $vn_label_col; ?> control-label"><?php print _t("Password"); ?></label>
					<div class="col-sm-7">
						<input type="password" name="password" class="form-control" id="password" />
					</div><!-- end col-sm-7 -->
				</div><!-- end form-group -->
				<div class="form-group">
					<div class="col-sm-offset-<?php print $vn_label_col; ?> col-sm-7">
						<button type="submit" class="btn btn-default"><?php print _t("login"); ?></button>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-<?php print $vn_label_col; ?> col-sm-7">
<?php
				if($this->request->isAjax()){
				
					if (!$this->request->config->get('dont_allow_registration_and_login')) {
?>
					<a href="#" onClick="jQuery('#caMediaPanelContentArea').load('<?php print caNavUrl($this->request, '', 'LoginReg', 'registerForm', null); ?>');"><?php print _t("Click here to register"); ?></a>
					<br/>
<?php
					}
?>
					<a href="#" onClick="jQuery('#caMediaPanelContentArea').load('<?php print caNavUrl($this->request, '', 'LoginReg', 'resetForm', null); ?>');"><?php print _t("Forgot your password?"); ?></a>
<?php
				}else{
					if (!$this->request->config->get('dont_allow_registration_and_login')) {
						print caNavLink($this->request, _t("Click here to register"), "", "", "LoginReg", "registerForm", array());
					}
					print "<br/>".caNavLink($this->request, _t("Forgot your password?"), "", "", "LoginReg", "resetForm", array());
				}
?>
					</div>
				</div><!-- end form-group -->
			</form>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <H1>
                            <?php print __LESCOLLECTIONS_NAME__; ?><br/><small>
                            <?php print __LESCOLLECTIONS_SUBNAME__; ?></small>
                        </H1>
                        <p class="login_page">
                            <?php print __LESCOLLECTIONS_LOGIN_REQUIS__; ?>
                        </p>
                    </div><!--end col-sm-8-->
                    <div class="col-sm-4">
                        <p class="front_page">
                            <?php print __LESCOLLECTIONS_INTRO__; ?>
                        </p>
                    </div> <!--end col-sm-4-->
                </div><!-- end row -->
            </div> <!--end container-->

<?php
	if($this->request->isAjax()){
?>
		</div><!-- end caFormOverlay -->
<script type='text/javascript'>
	jQuery(document).ready(function() {
		jQuery('#LoginForm').submit(function(e){		
			jQuery('#caMediaPanelContentArea').load(
				'<?php print caNavUrl($this->request, '', 'LoginReg', 'login', null); ?>',
				jQuery('#LoginForm').serialize()
			);
			e.preventDefault();
			return false;
		});
	});
</script>
<?php
	}
?>