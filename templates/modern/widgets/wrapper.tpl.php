<div class="icms-widget card mb-3 mb-md-4 <?php if ($widget['class_wrap']) { ?> <?php echo $widget['class_wrap'];  } ?>" id="widget_wrapper_<?php echo $widget['id']; ?>">
    <?php if ($widget['title'] && $is_titles){ ?>
    <h5 class="card-header d-flex align-items-center<?php if ($widget['class_title']) { ?> <?php echo $widget['class_title'];  } ?>">
        <?php echo string_replace_svg_icons($widget['title']); ?>
        <?php if (!empty($widget['links'])) { ?>
            <span class="links ml-auto">
                <?php $links = string_parse_list($widget['links']); ?>
                <?php foreach($links as $link){ ?>
                    <a class="btn btn-outline-info btn-sm" href="<?php html((strpos($link['value'], 'http') === 0) ? $link['value'] : href_to($link['value'])); ?>">
                        <?php html($link['id']); ?>
                    </a>
                <?php } ?>
            </span>
        <?php } ?>
    </h5>
    <?php } ?>
    <div class="card-body<?php if ($widget['class']) { ?> <?php echo $widget['class'];  } ?>">
        <?php echo $widget['body']; ?>
    </div>
    <?php if(cmsUser::isAdmin()){ ?>
        <?php $this->addTplJSName('widgets'); ?>
        <?php include 'wrap_edit_links.tpl.php'; ?>
    <?php } ?>
</div>