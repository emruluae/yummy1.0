<div class="search-bar-area blue-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="search-bar">
                            <div class="custom-search-bar">
                                <form class="form-inline" role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="s" id="s" placeholder="Search Products">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit" id="searchsubmit"><i class="fa-solid fa-magnifying-glass red-color"></i></button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="post_type" value="product">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>