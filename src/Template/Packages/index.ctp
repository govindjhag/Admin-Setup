<div class="row clearfix">
    <div class="col s12 m6 l9">
        <h3 style="margin-top:0px;"><?= __('Packages') ?></h3>
    </div>
    <div class="fixed-action-btn horizontal">
    <a href="<?php echo $this->Url->build(array('controller'=>'Packages','action'=>'add',$category_id)); ?>" class="btn-floating btn-large red">
      <i class="large material-icons">add</i>
    </a>
  </div>
</div>
<div class="row clearfix">
  <ol class="breadcrumb">
    <li><a href="<?php echo $this->Url->build(array('controller'=>'Categories','action'=>'index')); ?>">Category</a></li>
    <li class="active">Package</li>
  </ol>
</div>
<div class="clearfix" >
    <table class="table table-striped">
        <tr>
          <th scope="col">S. No.</th>
          <th scope="col"><?= $this->Paginator->sort('name') ?></th>
          <th scope="col"><?= $this->Paginator->sort('image_url') ?></th>
          <th scope="col"><?= $this->Paginator->sort('created') ?></th>
          <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
          <th scope="col">Arts (Free/Paid)</th>
          <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php
          $i=1;
          foreach ($packages as $package): ?>
          <tr>
              <td><?= $i ?></td>
              <td><?= h($package->name) ?></td>
              <td><img style="width:80px; height:80px;" src="<?=$this->Url->build('/img/package_image/', TRUE).$package->image_url ?>" /></td>
              <td><?= h($package->created) ?></td>
              <td><?= h($package->modified) ?></td>
              <td><?= $this->Html->link(__('View Arts ('.$package->free_art_count.'/'.$package->paid_art_count.')'), ['controller'=>'arts','action' => 'index', $package->id]) ?></td>
              <td class="actions">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $package->id]) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $package->id]) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $package->id,$package->category_id], ['confirm' => __('Are you sure you want to delete # {0}?', $package->id)]) ?>
              </td>
          </tr>
          <?php $i++; ?>
          <?php endforeach;
        if($i==1){ ?>
          <tr>
            <td colspan="7">No record found</td>
          </tr>
        <?php
        }
        ?>
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
