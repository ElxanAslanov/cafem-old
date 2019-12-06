<form action="<?php echo base_url("Cafe/add_action")?> " method="post" enctype="multipart/form-data">
    <label for="">Ad</label>
    <input type="text" name="name" class="form-control" placeholder="name"> <br>
    <input type="text" name="username" class="form-control" placeholder="username"> <br>
    <input type="password" name="password" class="form-control" placeholder="password"> <br>
    <select name="type" class="form-control">
        <option value="ailevi">Ailevi</option>
        <option value="diiger">Diger</option>
    </select> <br>
    <select name="type1" class="form-control">
        <?php foreach ($types as $type){ ?>
        <option value="<?php echo $type['id'] ?>"><?php echo $type['name'] ?></option>
        <?php } ?>
    </select> <br>
    <select name="location" class="form-control">
        <?php foreach ($locts as $loct){ ?>
            <option value="<?php echo $loct['id'] ?>"><?php echo $loct['name'] ?></option>
        <?php } ?>
    </select> <br>
    <input type="text" name="cost" class="form-control" placeholder="cost"> <br>
    <input type="text" name="place" class="form-control" placeholder="place"> <br>
    <input type="file" name="image" class="form-control" placeholder="Choose your image"> <br>


    <button type="submit" class="btn btn-info">Daxil Et</button>
</form>