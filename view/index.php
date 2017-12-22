<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= isset($title) ? $title : null; ?></title>
    <style type="text/css">
        table.contacts {
            width: 100%;
        }
        
        table.contacts thead {
            background-color: #eee;
            text-align: left;
        }
        
        table.contacts thead th {
            border: solid 1px #fff;
            padding: 3px;
        }
        
        table.contacts tbody td {
            border: solid 1px #eee;
            padding: 3px;
        }
        
        a, a:hover, a:active, a:visited {
            color: blue;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>List Data</h1>
    <div><a href="index.php?op=new">Add new contact</a></div>
    <table>
        <caption>Table Register</caption>
        <thead>
            <tr>
                <th>No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>DOB</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                foreach ($data as $row) :
                ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['firstName']; ?></td>
                    <td><?= $row['lastName']; ?></td>
                    <td><?= $row['gender']; ?></td>
                    <td><?= $row['address']; ?></td>
                    <td><?= $row['dob']; ?></td>
                    <td>
                        <a href="?op=update&id=<?= $row['id_user']; ?>" >Update</a> | 
                        <a href="?op=delete&id=<?= $row['id_user']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
                $no++;
                endforeach;
             ?>
        </tbody>
    </table>
</body>
</html>