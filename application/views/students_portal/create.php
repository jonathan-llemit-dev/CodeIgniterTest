<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Add Students</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Add Students
                            <a href="<?= base_url('students_portal'); ?>" class="btn btn-primary float-right">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('student/store'); ?>">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" name="name" type="text" class="form-control" required>
                                <?= form_error('name', '<p class="text-danger">', '</p>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input id="age" name="age" type="text" class="form-control" required>
                                <?= form_error('age', '<p class="text-danger">', '</p>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select id="gender" name="gender" class="form-control"  required>
                                    <option value="male" <?= set_select('gender', 'male'); ?>>Male</option>
                                    <option value="female" <?= set_select('gender', 'female'); ?>>Female</option>
                                    <option value="other" <?= set_select('gender', 'other'); ?>>Other</option>
                                </select>
                                <?= form_error('gender', '<p class="text-danger">', '</p>'); ?>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>