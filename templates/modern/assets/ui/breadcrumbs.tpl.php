<?php $listed = []; $position = 2; ?>
<nav id="breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li class="breadcrumb-item">
            <a href="<?php echo $options['home_url']; ?>" title="<?php echo LANG_HOME; ?>" itemprop="item">
                <svg class="bi bi-house-fill" width="1em" height="1em" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M8.5 12.995V16.5a.5.5 0 01-.5.5H4a.5.5 0 01-.5-.5v-7a.5.5 0 01.146-.354l6-6a.5.5 0 01.708 0l6 6a.5.5 0 01.146.354v7a.5.5 0 01-.5.5h-4a.5.5 0 01-.5-.5V13c0-.25-.25-.5-.5-.5H9c-.25 0-.5.25-.5.495z"/>
                    <path fill-rule="evenodd" d="M15 4.5V8l-2-2V4.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5z" clip-rule="evenodd"/>
                </svg>
                <meta itemprop="name" content="<?php echo LANG_HOME; ?>" />
                <meta itemprop="position" content="1" />
            </a>
        </li>
        <?php if ($breadcrumbs) { ?>
            <?php foreach($breadcrumbs as $id => $item){ ?>
                <?php if (in_array($item['href'], $listed)){ continue; } ?>
                <li class="breadcrumb-item<?php if (isset($item['is_last'])){ ?> active<?php } ?>" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <?php if (!isset($item['is_last'])){ ?>
                        <a href="<?php html($item['href']); ?>" itemprop="item">
                            <span itemprop="name">
                                <?php html($item['title']); ?>
                            </span>
                        </a>
                    <?php } else { ?>
                        <span itemprop="name">
                            <?php html($item['title']); ?>
                        </span>
                    <?php } ?>
                    <meta itemprop="position" content="<?php echo $position++; ?>" />
                </li>
                <?php $listed[] = $item['href']; ?>
            <?php } ?>
        <?php } ?>
    </ol>
</nav>