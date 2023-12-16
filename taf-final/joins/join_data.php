<header>
    <nav>
        <a href="../home.php" >Home</a>
        <a href="innerjoin.php">Inner join</a>
        <a href="leftjoin.php">Left join</a>
        <a href="rightjoin.php">Right join</a>
        <a href="crossjoin.php">Cross join</a>
        <a href="fulljoin.php">Full join</a>
        
    </nav>
</header>
<h2>Below comes <?= $page?> data</h2>
<table>
        <tr>
            <th>UserName</td>
            <th>Email</td>
            <th>Comment</td>
            <th>Date Commented</td>
        </tr>
        <?php
            foreach($users as $user):
        ?>
        <tr>
            <td><?= $user['user_name']?></td>
            <td><?= $user['email']?></td>
            <td><?= $user['phone_number']?></td>
            <td><?= $user['comment']?></td>
            <td><?= $user['date_commented']?></td>
        </tr>
        <?php endforeach;?>
    </table>