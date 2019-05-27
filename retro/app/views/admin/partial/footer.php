<?php if(!isset($panel) || @$panel === true){ ?>
		</div>
	  	<footer class="main-footer">
			<div class="pull-right hidden-xs">
				<!--  -->
			</div>
			<strong>Copyright &copy; <?php echo date('Y') ?> <a href="#">Retro.</a></strong> All rights reserved.
	  	</footer>
	</div>
<?php } ?>

	<script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('dist/js/adminlte.min.js') ?>"></script>
	<script src="<?php echo base_url('plugins/iCheck/icheck.min.js') ?>"></script>
</body>
</html>