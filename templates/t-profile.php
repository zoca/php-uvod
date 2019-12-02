<div class="container">
    <div class="row">
        <!--Blog Roll Content-->

        <div class="col-md-8 blog-post">

            <h2>Your profile info</h2>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th>ID:</th>
                        <td><?php echo htmlspecialchars($user['id']); ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td><?php echo htmlspecialchars($user['name']); ?></td>
                    </tr>
                </tbody>
            </table>
            <a class="btn btn-primary" href="/logout.php">Logout</a>
        </div>
        <!--Sidebar-->
        <div class="col-md-4 sidebar sidebar-right">
            <div class="inner">
                <div class="block">
                    <a href="#" class="btn btn-block btn-info"><i class="fa fa-download"></i> Download Our Press Kit</a>
                    <a href="#" class="btn btn-block btn-success"><i class="fa fa-envelope-o"></i> Get In Touch</a>
                    <a href="#" class="btn btn-block btn-warning"><i class="fa fa-rss"></i> Subscribe via RSS feed</a>
                </div>
            </div>
        </div>
    </div>
</div>