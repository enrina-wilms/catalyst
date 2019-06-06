<?php
require_once "../../config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Admin</title>
</head>

<body>
                <div class="content">
                    <main>
                        <div class="container-fluid">
                        <h2>Users</h2>
                        <div class="table-responsive">
                            <table class='table table-light'>
                            <thead>
                                <tr>
                                <th>email</th>
                                <th>password</th>
                                <th>date</th>
                                <th>role</th>
                                <th>Update</th>
                                <th>Delete</th>
                                <th>Admin/User</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include "./listUsers.php";
                            ?>
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </main>
                </div>
            </div>
</body>

</html>