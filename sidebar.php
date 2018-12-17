<div id="sidebar">
    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
            
            <h4>Archives</h4>
            <ol class="list-unstyled">
                <?php wp_get_archives( 'type=monthly' ); ?>
            </ol>

            <h4>Categories</h4>
                <ol class="list-unstyled">
                    <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0');?>
                </ol>

            <h4>Calendrier</h4>
                <ol class="list-unstyled">
                    <?php get_calendar();?>
                </ol>
        </div>
    </div><!– /.blog-sidebar –>

</div>