<div id="testing-<?php echo $entity->getKey(); ?>" class="testing-card">
    <?php echo $entity->getParseTheory(); ?>
    <hr/>
    <a href="javascript:void(0)" class="butn" onclick="API.Questions.collection();" style="background-color: #f1fff1;color: green;border-color: green;">Done</a>
    <a href="javascript:void(0)" class="butn" onclick="API.Questions.collection();">Undone</a>
</div>