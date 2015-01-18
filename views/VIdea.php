<?php class VIdea extends View
{
    private $idea;

    function __construct($idea)
    {
        $this->idea = $idea;
    }

    function view_body()
    {
        require('top_panel.php'); ?>
        <div class="content">
            <div class="major_section">
                <div class="idea_main">
                    <a href="TODO" class="idea_title"><?= $this->idea['title'] ?></a>

                    <div class="idea_tags">
                        <?php foreach (explode(',', $this->idea['tags']) as $tag) { ?>
                            <a href="TODO" class="idea_tag"><?= $tag ?></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="idea_stats">
                    <div class="idea_stat">
                        <div class="idea_stat_number"><?= $this->idea['score'] ?></div>
                        <div class="idea_stat_desc">SCORE</div>
                    </div>
                    <div class="idea_stat">
                        <div class="idea_stat_number">0</div>
                        <!--TODO-->
                        <div class="idea_stat_desc">comments</div>
                        <!--TODO-->
                    </div>
                </div>
            </div>
            <div class="major_section idea_desc"><?= $this->idea['description'] ?></div>
            <hr/>
            <div class="major_section" style="text-align: center;">KOMENTARZE</div>
            <div class="minor_section">komentarze</div>
        </div>
    <?php
    }
}