<div class="row clearfix">
    <div class="col s12 m6 l9">
        <h3 style="margin-top:0px;"><?= __('Users') ?></h3>
    </div>
</div>
<div class="clearfix" >
    <table class="table table-striped">
        <tr>
          <th scope="col"><?= $this->Paginator->sort('id') ?></th>
          <th scope="col"><?= $this->Paginator->sort('email') ?></th>
          <th scope="col"><?= $this->Paginator->sort('name') ?></th>
          <th scope="col"><?= $this->Paginator->sort('profile_pic') ?></th>
          <th scope="col"><?= $this->Paginator->sort('created') ?></th>
          <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
          <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $this->Number->format($user->id) ?></td>
            <td><?= h($user->email) ?></td>
            <td><?= h($user->name) ?></td>
            <td><?= h($user->profile_pic) ?></td>
            <td><?= h($user->created) ?></td>
            <td><?= h($user->modified) ?></td>
            <td class="actions">
                <a href="<?php echo $this->Url->build(array('controller'=>'users','action'=>'edit',$user->id)); ?>"><span class="glyphicon glyphicon-edit"></span></a>
                <a href="<?php echo $this->Url->build(array('controller'=>'users','action'=>'delete',$user->id)); ?>"><span class="glyphicon glyphicon-trash"></span></a>
                <a href="<?php echo $this->Url->build(array('controller'=>'users','action'=>'view',$user->id)); ?>"><span class="glyphicon glyphicon-open"></span></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>

</div>
