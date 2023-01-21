<style>
.error {
    background-color: tomato;
    color: white;
    padding: 7px;
    border-radius: 5px;
    font-weight: bold;
}
​</style>
<section>
    <!-- Option two: simple contact form with validations -->
    <h1>Contact Form (Optional)</h1>
    <?= validation_errors('<p class="error">', '</p>'); ?>
    <p>Interested in booking me? Please complete and submit the following form.</p>
    <div class="card">
        <div class="card-heading">
            Contact Details
        </div>
        <div class="card-body">
            <?php
            echo form_open($form_location);
            echo form_label('Name');
            $attr['placeholder'] = 'Enter your name here';
            $attr['autocomplete'] = 'off';
            echo form_input('name', $name, $attr);
            echo form_label('Email');
            $attr['placeholder'] = 'Enter your email here';
            $attr['autocomplete'] = 'off';
            echo form_email('email', $email, $attr);
            echo form_label('Your Message');
            echo form_textarea('message', $message, array("placeholder" => "Enter description here"));
            echo form_submit('submit', 'Submit');
            echo form_close();
            ?>
        </div>
    </div>
</section>