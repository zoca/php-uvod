<div class="container">
    <div class="row">
        <!--Blog Roll Content-->
        <div class="col-md-8 blog-list">
            <?php
            foreach ($newsList as $news) {
                ?>
                <!-- Blog post -->
                <div class="media row">
                    <div class="col-sm-3">
                        <a class="media-photo" href="/single-news.php?id=<?php echo $news['id']; ?>">
                            <?php if(!empty($news['thumb'])) { ?>
                            <img src="<?php echo htmlspecialchars($news['thumb']);  ?>" 
                            alt="<?php echo htmlspecialchars($news['title']);  ?>" 
                            class="media-object img-polaroid"
                            >
                            <?php } else { ?>
                            <img src="https://via.placeholder.com/400x300?text=No+Image." 
                            alt="<?php echo htmlspecialchars($news['title']);  ?>" 
                            class="media-object img-polaroid"
                            >
                            <?php } ?>
                        </a>
                    </div>
                    <div class="col-sm-9">
                        <div class="media-body">
                            <!-- Meta details -->
                            <ul class="list-inline meta text-muted">
                                <li>
                                    <i class="glyphicon glyphicon-calendar"></i> 
                                    <span class="visible-md-inline visible-lg-inline">Created:</span>
                                     <?php echo htmlspecialchars($news['time_published']); ?></li>
                                <li>
                                    <i class="glyphicon glyphicon-tags"></i> 
                                    <span class="visible-md-inline visible-lg-inline">Category:</span> 
                                    <a href="#">
                                        <?php echo htmlspecialchars(!empty($news['category']) ? $news['category'] : 'Ostalo'); ?>
                                    </a>
                                </li>
                            </ul>
                            <h4 class="title media-heading">
                                <a href="/single-news.php?id=<?php echo $news['id']; ?>"><?php echo htmlspecialchars($news['title']);  ?></a>
                            </h4>
                            <p><?php echo htmlspecialchars($news['description']);  ?></p>
                            <ul class="list-inline links">
                                <li>
                                    <a href="#" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-circle-arrow-right"></i> Read more</a>
                                </li>
                                <?php if (!empty($news['comments'])) { ?>
                                <li>
                                    <i class="fa fa-comment"></i> 
                                    <?php echo (int) $news['comments']; ?>                                   
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="text-center">
                <ul class="pagination pagination-centered">
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
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