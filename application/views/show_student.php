<?php include ('admin_header.php');?>
<style>
    .filterable {
        margin-top: 15px;
    }
    .filterable .panel-heading .pull-right {
        margin-top: -20px;
    }
    .filterable .filters input[disabled] {
        background-color: transparent;
        border: none;
        cursor: auto;
        box-shadow: none;
        padding: 0;
        height: auto;
    }
    .filterable .filters input[disabled]::-webkit-input-placeholder {
        color: #333;
    }
    .filterable .filters input[disabled]::-moz-placeholder {
        color: #333;
    }
    .filterable .filters input[disabled]:-ms-input-placeholder {
        color: #333;
    }

</style>
<script>
    /*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
    $(document).ready(function(){
        $('.filterable .btn-filter').click(function(){
            var $panel = $(this).parents('.filterable'),
                $filters = $panel.find('.filters input'),
                $tbody = $panel.find('.table tbody');
            if ($filters.prop('disabled') == true) {
                $filters.prop('disabled', false);
                $filters.first().focus();
            } else {
                $filters.val('').prop('disabled', true);
                $tbody.find('.no-result').remove();
                $tbody.find('tr').show();
            }
        });

        $('.filterable .filters input').keyup(function(e){
            /* Ignore tab key */
            var code = e.keyCode || e.which;
            if (code == '9') return;
            /* Useful DOM data and selectors */
            var $input = $(this),
                inputContent = $input.val().toLowerCase(),
                $panel = $input.parents('.filterable'),
                column = $panel.find('.filters th').index($input.parents('th')),
                $table = $panel.find('.table'),
                $rows = $table.find('tbody tr');
            /* Dirtiest filter function ever ;) */
            var $filteredRows = $rows.filter(function(){
                var value = $(this).find('td').eq(column).text().toLowerCase();
                return value.indexOf(inputContent) === -1;
            });
            /* Clean previous no-result if exist */
            $table.find('tbody .no-result').remove();
            /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
            $rows.show();
            $filteredRows.hide();
            /* Prepend no-result row if all rows are filtered */
            if ($filteredRows.length === $rows.length) {
                $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
            }
        });
    });
</script>


<!------ Include the above in your HEAD tag ---------->
<div class="export" style="float: right;">
    <a href="<?php echo site_url('htmltopdf'); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-export"></span> Export As PDF</a>
</div>
<div class="container">

    <hr>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h2 class="panel-title">Student List</h2>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="id" disabled></th>
                    <th><input type="text" class="form-control" placeholder="First Name" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Last Name" disabled></th>
                    <th><input type="text" class="form-control" placeholder="address" disabled></th>
                    <th><input type="text" class="form-control" placeholder="phone" disabled></th>
                    <th><input type="text" class="form-control" placeholder="email" disabled></th>
                    <th><input type="text" class="form-control" placeholder="course" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Edit" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Delete" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Profile" disabled></th>
                     <th><input type="text" class="form-control" placeholder="PDF" disabled></th>
                </tr>
                </thead>
                <tbody>
                <td>
                    <?php
                    $i=1;
                    foreach($data as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$row->id."</td>";
                        echo "<td>".$row->firstname."</td>";
                        echo "<td>".$row->lastname."</td>";
                        echo "<td>".$row->address."</td>";
                        echo "<td>".$row->phone."</td>";
                        echo "<td>".$row->email."</td>";
                        echo "<td>".$row->course."</td>";
                        ?>
                        <td><a href="<?php echo site_url('student/editstudent/'.$row->id);?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span>Edit</a></td>
                         <td><a href="<?php echo site_url('student/removestudent/'.$row->id);?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Delete</a></td>
                        <td><a href="<?php echo site_url('student/studentprofile/'.$row->id);?>" class="btn btn-success"><span class="glyphicon glyphicon-user"></span> profile</a></td>
                        <td><a href="<?php echo site_url('htmltopdf/StudentPdf/'.$row->id); ?>" class="btn btn-default"><span class="glyphicon glyphicon-briefcase"></span> View In PDF</a></td>

                <?php
                        echo "</tr>";
                        $i++;
                    }
                    ?>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
