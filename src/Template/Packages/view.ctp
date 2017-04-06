<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Art'), ['action' => 'edit', $art->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Art'), ['action' => 'delete', $art->id], ['confirm' => __('Are you sure you want to delete # {0}?', $art->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Arts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Art'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="arts view large-9 medium-8 columns content">
    <h3><?= h($art->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $art->has('category') ? $this->Html->link($art->category->name, ['controller' => 'Categories', 'action' => 'view', $art->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($art->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Url') ?></th>
            <td><?php echo "<img src='".$this->Url->build('/img/package_image/', TRUE).$art->image_url."' style='width:150px;height:150px;' />"; ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($art->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($art->user_id) ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($art->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($art->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($art->description)); ?>
    </div>
</div>
