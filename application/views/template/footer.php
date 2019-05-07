
    <footer>
        
    </footer>

    <script src="<?= base_url() ?>assets/js/uikit.min.js"></script>
    <script src="<?= base_url() ?>assets/js/uikit-icons.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <script>
        function confirm_password() {
            if($('#password').val() != $('#conf_password').val()) {
                $('#alerts').click();
            } else {
                const nim = document.getElementById('nim').value;
                if(nim != '') {
                    $.ajax({
                        type: 'POST',
                        url: '<?= site_url('main/cek_nim') ?>',
                        dataType: 'JSON',
                        data: {
                            username: nim,
                            unique_key_public: 'db13d57686711a4df355588f22a7723e',
                            unique_key: '<?= $this->session->userdata('user_key') ?>'
                        },
                        success: function(data) {
                            if(data.check) {
                                $('#alerts2').click();
                            } else {
                                const pass = document.getElementById('password').value;
                                if(pass != '') {
                                    $('#register').submit();
                                } else {
                                    $('#alerts4').click();
                                }
                            }
                        }
                    });
                } else {
                    $('#alerts1').click();
                }
            }
        }

        function login() {
            const username = $('#login_user').val();
            const password = $('#login_pass').val();
            $.ajax({
                type: 'POST',
                url: '<?= site_url('main/login') ?>',
                dataType: 'JSON',
                data: {
                    username: username,
                    password: password,
                    unique_key_public: 'db13d57686711a4df355588f22a7723e',
                    unique_key: '<?= $this->session->userdata('user_key') ?>'
                },
                success: function(data) {
                    if(data.check) {
                        $('#alerts3').click();
                    } else {
                        $('#login').submit();
                    }
                }
            });
        }
    </script>
</body>
</html>