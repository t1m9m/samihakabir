<section class="page-title ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Contact</h2>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title text-uppercase">Drop me a line</h2>
        </div>
    <?php if ($this->session->flashdata('success')): ?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert success-border text-center" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="fa fa-thumbs-o-up"></i> <?php echo $this->session->flashdata('success'); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="<?php echo base_url(); ?>contact/send" name="contact_form" method="post" onsubmit="return validateForm()">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input type="text" name="name" id="name">
                                <label>Name</label>
                                <p id="help-name" style="display: none; color: red;">This value is required</p>
                            </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <input type="email" name="email" id="email">
                                <label>Email</label>
                                <p id="help-email" style="display: none; color: red;">This value is required</p>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <input type="text" name="subject" id="subject">
                                <label>Subject</label>
                                <p id="help-subject" style="display: none; color: red;">This value is required</p>
                            </div>
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <div class="input-field">
                        <textarea name="message" id="message" class="materialize-textarea"></textarea>
                        <label>Message</label>
                        <p id="help-message" style="display: none; color: red;">This value is required</p>
                    </div>
                    <button type="submit" name="submit" class="pull-right waves-effect waves-light btn submit-button pink mt-30">Send Message</button>
                </form>
            </div><!-- /.col-md-8 -->
        </div><!-- /.row -->
    </div>
</section>

<script type="text/javascript">
    function validateForm() {
        var name = document.forms["contact_form"]["name"].value;
        if (name == "") {
            $('#name').focus();
            $('#name').addClass("is-focused has-error");
            $('#help-name').show();
            return false;
        } else {
            $('#name').parent().parent().addClass("is-focused has-success");
            $('#help-name').hide();
        }

        var email = document.forms["contact_form"]["email"].value;
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        if (email == "" || atpos < 1 || dotpos < atpos+2 || dotpos+2 >= email.length) {
            $('#email').focus();
            $('#email').parent().parent().addClass("is-focused has-error");
            $('#help-email').show();
            return false;
        } else {
            $('#email').parent().parent().addClass("is-focused has-success");
            $('#help-email').hide();
        }

        var subject = document.forms["contact_form"]["subject"].value;
        if (subject == "") {
            $('#subject').focus();
            $('#subject').parent().parent().addClass("is-focused has-error");
            $('#help-subject').show();
            return false;
        } else {
            $('#subject').parent().parent().addClass("is-focused has-success");
            $('#help-subject').hide();
        }

        var message = document.forms["contact_form"]["message"].value;
        if (message == "") {
            $('#message').focus();
            $('#message').parent().parent().addClass("is-focused has-error");
            $('#help-message').show();
            return false;
        } else {
            $('#message').parent().parent().addClass("is-focused has-success");
            $('#help-message').hide();
        }
    }
</script>
