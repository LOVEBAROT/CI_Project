<?php include ('admin_header.php');?>
<style>
    body{padding-top:30px;}
    img{
        border: 2px solid black;
        border-radius: 10px;
    }
    img:hover{
        border: 5px solid black;
          border-radius: 100px;
    }
</style>


<div class="container">
    <div class="row" style="width: 2250px">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <?php foreach ($data as $row){ ?>
                            <?php //print_r($row); exit(); ?>
                        <img src="<?php echo base_url('asset/uploads/'.$row->photo); ?>"  alt="" class="image responsive" width="180" height="180">
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h3> <i class="glyphicon glyphicon-user"></i><?php echo $row->firstname ?>   <?php echo $row->lastname ?></h3>
                        <small><cite title="San Francisco, USA"> <i class="glyphicon glyphicon-map-marker">
                                </i></cite><?php echo $row->address?></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?php echo $row->email?>
                            <br />
                            <i class="glyphicon glyphicon-phone-alt"></i><?php echo $row->phone?>
                            <br />
                            <i class="glyphicon glyphicon-file"></i><?php echo $row->course?></p>

                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

