<html>
    <link href="http://www.discussdesk.com/view/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Tabullet Plugin Example</title>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <script type="text/javascript">

    var base="<?php echo base_url();?>";
        
    </script>
    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>js/Tabullet.js"></script> 
    <script src="<?php echo base_url();?>js/my_javascript.js"></script>

    <div class="container">

        <div class="row">
            <div class="col-sm-3">              
            </div>
            <div class="col-sm-9">
                <h1>
                    EXAMPLE
                </h1>               
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <table class="table table-hover" id="table" style="border: 1px solid #ccc;">
                    <thead>
                        <tr data-tabullet-map="id">
                            <th width="50" data-tabullet-map="_index" data-tabullet-readonly="true">
                                No
                            </th>
                            <th data-tabullet-map="name">Name</th>
                            <th data-tabullet-map="password">Password</th>
                            <th data-tabullet-map="bith">Bithday</th>
                            <th data-tabullet-map="adress">Adress</th>
                            <th data-tabullet-map="sex">Sex</th>
                            <th width="50" data-tabullet-type="edit"></th>
                            <th width="50" data-tabullet-type="delete"></th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-2">              
            </div>
            <div class="col-sm-7">              
                <button class="btn btn-info" id="pre">PREV</button> 
            </div>
            <div class="col-sm-3">
                <button class="btn btn-info" id="next">NEXT</button> 
            </div>
        </div>

    </div>


</html>
