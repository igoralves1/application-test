<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Very simple test</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>btn</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $people = array(
                array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
                array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
                array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
                array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
                array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
            );

            foreach ($people as $v){
                echo "<tr class='rowVals'>";
                    echo "<td><div class='first_name'>{$v['first_name']}</div></td>";
                    echo "<td><div class='last_name'>{$v['last_name']}</div></td>";
                    echo "<td><div class='email'>{$v['email']}</div></td>";
                    echo "<td><button type=\"button\" class=\"btn btn-primary\">Alert</button></td>";
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function(){
        $("button").click(function(){
            var objRow =  $(this).parents(".rowVals");
            var name= objRow.find(".first_name").html();
            var e_mail= objRow.find(".email").html();
            alert(name+"=>"+e_mail);
        });
    });
</script>
</body>
</html>
