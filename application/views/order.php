<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div>
        <?php 
            if (count($order_list) > 0)
            {
                foreach ($order_list as $o) {
                    echo $o["order_name"];
                }
            }
            else
            {
                echo " ERROR";
            }
            ?>
    </div>
    <div class="main">
        <div id="content">
            <div id="form_input">
                <?php
                echo form_open("form/data_submitted",array("class"=>"form-inline form"));
                echo form_label('Order Name:', 'order_name');
                $data = array(
                    'name' => 'order_name',
                    'placeholder' => 'Please Enter Order name',
                    'class' => 'input_box'
                );
                echo form_input($data);
                echo form_open('form/data_submitted');
                echo form_label('Order Description :', '');
                $data = array(
                    'name' => 'order_desc',
                    'placeholder' => 'Please Enter Order Description :',
                    'class' => 'input_box'
                );
                echo form_input($data);
                ?>
            </div>
            <div id="form_button">
                <?php
                $data = array(
                    'type' => 'submit',
                    'value' => 'Submit',
                    'class' => 'submit'
                );
                echo form_submit($data); ?>
            </div>
            <?php echo form_close(); ?>

            <?php if (isset($user_name) && isset($user_email_id)) { ?>
                <div id='content_result'>;
                    <h3 id='result_id'>You have submitted these values</h3><br />
                    <hr>;
                    <div id='result_show'>;
                        <label class='label_output'>Entered User Name : </label> . <?= $user_nam ?>;
                        <label class='label_output'>Entered Email: </label> <?= $user_email_i ?>;
                        <div>
                        </div>
                    <?php echo form_close();
                } ?>
                    </div>
                </div>

</body>

</html>