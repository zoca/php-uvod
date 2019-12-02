<div class="container">
    <div class="row">
        <!--Blog Roll Content-->

        <div class="col-md-8 blog-post">
            <!--Main blog post-->
            <div class="media">
                <img 
                src="<?php echo htmlspecialchars($news['image']); ?>" 
                alt="<?php echo htmlspecialchars($news['title']); ?>" 
                class="media-object" 
                />
                <div class="media-body">
                    <h1 class="title media-heading">"<?php echo htmlspecialchars($news['title']); ?></h1>
                    <!-- Meta details -->
                    <ul class="list-inline meta text-muted">
                        <li>
                            <i class="glyphicon glyphicon-calendar"></i>
                             <span class="visible-desktop">Created:</span> 
                             <?php echo htmlspecialchars($news['time_published']); ?></li>
                        <li>
                            <i class="glyphicon glyphicon-tags"></i> 
                            <span class="visible-desktop">Category:</span> 
                            <a href="#"><?php echo htmlspecialchars($news['category'] ?? 'Ostalo'); ?></a>
                        </li>
                        <li>
                            <i class="fa fa-comment"></i> <?php echo htmlspecialchars($news['comments']); ?>
                        </li>
                    </ul>
                    <p class="lead"><?php echo htmlspecialchars($news['description']); ?></p>
                    <p>Egestas scelerisque, vel auctor rhoncus. Urna penatibus, velit dis, non parturient scelerisque ac tempor a enim? Aenean? Urna dictumst, enim nec odio, turpis. Magnis tempor mus, egestas integer sit eu eu lectus vel. Hac lorem aliquet nec mattis, purus parturient in pulvinar nascetur aliquam! Sed cursus? Pid, nec eros quis, tincidunt odio pellentesque integer, porta, nunc? Duis aenean! In tortor risus enim.</p>
                    <p>Sed elit ac? Vel parturient magna placerat non etiam.</p>
                    <p>Elit, duis, enim et penatibus, augue, augue nisi augue diam. Auctor augue auctor massa! Nascetur ac dis, nascetur augue! Enim dis ut ac, dis egestas augue, augue lorem? Tincidunt porttitor phasellus magna arcu tristique augue mattis eu non enim aenean magna nunc ac nisi risus et porttitor turpis nec elementum elit. Lacus integer aenean nisi in mattis ac? Adipiscing facilisis diam aliquam mid, habitasse sit dictumst, vel magnis, mauris ac? Massa arcu! Urna massa sed. Dolor facilisis est enim arcu! Amet? Mattis pulvinar aliquet, pulvinar tortor. Eros, urna lorem amet sit velit ultricies rhoncus, dictumst, platea. Nec risus, lorem proin tempor magna! Rhoncus eu, penatibus turpis enim vel augue turpis.</p>
                </div>
            </div>
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