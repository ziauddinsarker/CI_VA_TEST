	<!--include jquery library-->
	<script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<!--load jquery ui js file-->
	<script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/typeahead.bundle.js'); ?>"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
	
	<script type="application/javascript">
        $(document).ready(function() {
            $('#submit').click(function() {
                var form_data = {
                    username : $('.username').val(),
                    password : $('.password').val(),
                    ajax : '1'
                };
                $.ajax({
                    url: "<?php echo site_url('login/ajax_check'); ?>",
                    type: 'POST',
                    async : false,
                    data: form_data,
                    success: function(msg) {
                        $('#message').html(msg);
                    }
                });
                return false;
            });
        });
    </script>
	
	
	
</body>
</html>